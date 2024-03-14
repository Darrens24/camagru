## Install php
sudo apt update
sudo apt install php php-cli

## Install composer
php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
php composer-setup.php
sudo mv composer.phar /usr/local/bin/composer

## To init project
composer init
