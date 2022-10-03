require('./bootstrap');

window.Vue = require('vue');

Vue.component('chat-component', require('./components/ChatComponent.vue'));

const app = new Vue({
    el: '#app'
});