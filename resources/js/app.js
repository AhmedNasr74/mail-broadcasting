require('./bootstrap');
import Vue from "vue";
import VueQuillEditor from 'vue-quill-editor'
import 'quill/dist/quill.core.css'
import 'quill/dist/quill.snow.css'
import 'quill/dist/quill.bubble.css'
window.Vue = require('vue').default;
Vue.config.productionTip = false
Vue.component('app-component', require('./views/App').default);
Vue.use(VueQuillEditor);

new Vue({
    el: '#app',

});

