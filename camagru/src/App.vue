<template>
  <div id="app">
    <NavbarApp />
    <main>
      <router-view />
    </main>
    <FooterApp />
  </div>
</template>

<script>
import axios from 'axios'
import NavbarApp from './components/NavbarApp.vue'
import FooterApp from './components/FooterApp.vue'

export default {
  name: 'App',
  components: {
    NavbarApp,
    FooterApp,
    axios
  }
}
</script>

<style>
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 60px;
}
</style>
