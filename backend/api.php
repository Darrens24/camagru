<?php

header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE');

// Your PHP code to handle requests will go here

$host = 'ton_host';
$dbname = 'nom_de_ta_db';
$user = 'ton_utilisateur';
$password = 'ton_mot_de_passe';
$dsn = "pgsql:host=$host;dbname=$dbname";

try {
  $pdo = new PDO($dsn, $user, $password);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $data = json_decode(file_get_contents('php://input'), true);
  $username = $data['username'];
  $password = $data['password']; // Pense à hasher le mot de passe avant de le stocker !

  $sql = "INSERT INTO users (username, password) VALUES (?, ?)";
  $stmt = $pdo->prepare($sql);
  $stmt->execute([$username, $password]);

  echo json_encode(['success' => true]);
} catch (PDOException $e) {
  // Gestion des erreurs
  echo json_encode(['error' => $e->getMessage()]);
}

