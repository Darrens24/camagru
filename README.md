## Install php
sudo apt update
sudo apt install php php-cli
## Install composer
php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
php composer-setup.php
sudo mv composer.phar /usr/local/bin/composer
## To init project
composer init

## Install vue
npm install vue
## Install webpack
npm install --save-dev webpack webpack-cli
## Configure webpack
npm install -D vue-loader vue-template-compiler
### webpack.config.js
<< eof tee webpack.config.js
const { VueLoaderPlugin } = require('vue-loader');
const path = require('path');

module.exports = {
  entry: './src/main.js',
  output: {
    path: path.resolve(__dirname, 'public/js'),
    filename: 'bundle.js',
  },
  module: {
    rules: [
      {
        test: /\.vue$/,
        loader: 'vue-loader'
      },
      // Other rules for JS, CSS here
    ]
  },
  plugins: [
    new VueLoaderPlugin()
  ],
  resolve: {
    alias: {
      'vue$': 'vue/dist/vue.esm-bundler.js' // Complete version
    },
  },
};

### src/main.js
<< eof tee src/main.js
import { createApp } from 'vue';
import App from './App.vue';

createApp(App).mount('#app');
eof

### src/App.vue
<template>
  <div id="app">
    {{ message }}
  </div>
</template>

<script>
export default {
  name: 'App',
  data() {
    return {
      message: 'Test Vue!'
    }
  }
}
</script>

<style>
/*  style here */
</style>

## Build project
npm run build
## To be able to install things globally 
mkdir ~/.npm-global
npm config set prefix '~/.npm-global'
### in zshrc
'export PATH=~/.npm-global/bin:$PATH'


## Install liveserver - see doc for parameters https://www.npmjs.com/package/live-server
npm install -g live-server
## Install vue cli
npm install -g @vue/cli
### package.json
"scripts": {
  "serve": "vue-cli-service serve",
  "build": "vue-cli-service build",
  ...
}
## Create vue project
vue create <project-name>
cd <project-name>
## Run the live server
npm run serve -- --port 3000                                                      ─╯

# Vue keymaps
@=v-on -> listen to DOM events -> <button @click="increment">{{ count }}</button>
:=v-bind -> bind to dynamic value
v-model -> vbind + v-on -> get formular results

## Install vue-router
npm install vue-router
