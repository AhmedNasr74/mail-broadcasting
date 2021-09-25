require('./bootstrap');
import Vue from "vue";
window.Vue = require('vue').default;
Vue.config.productionTip = false
Vue.component('app-component', require('./views/App').default);

new Vue({
    el: '#app',

});

