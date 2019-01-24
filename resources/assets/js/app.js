require('./bootstrap');

window.Vue = require('vue');

// let axios = require('axios');

Vue.component('articles', require('./components/Articles.vue'));


const app = new Vue({
    el: '#app'
});
