import './bootstrap';
import {createApp, VueElement} from 'vue'
import App from './components/App.vue'
window.Vue = require('vue');


createApp(App).mount("#app");

Vue.component('my-vue-component', require('./components/App.vue').default);