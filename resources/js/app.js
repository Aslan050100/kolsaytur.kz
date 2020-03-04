/**
 * First we will load all of this project's JavaScript dependencies which
 * includes React and other helpers. It's a great starting point while
 * building robust, powerful web applications using React + Laravel.
 */

require('./bootstrap');

/**
 * Next, we will create a fresh React component instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */
import Vue from 'vue'
// app.js
import { BootstrapVue, IconsPlugin } from 'bootstrap-vue'
import App from './App.vue'
import 'bootstrap/dist/css/bootstrap.css'
import 'bootstrap-vue/dist/bootstrap-vue.css'
import VueResource from 'vue-resource'
import axios from 'axios'
import Home from './views/Home'
import Hotel1 from './views/Hotel1'
import VueRouter from "vue-router"


Vue.use(VueResource);
Vue.use(VueRouter);
// Install BootstrapVue
Vue.use(BootstrapVue);
// Optionally install the BootstrapVue icon components plugin
Vue.use(IconsPlugin);
Vue.config.productionTip = false;
Vue.use(axios);

const router = new VueRouter({
    mode: 'history',
    routes: [
        { path: '/', component: Home , name: 'landing' },
        { path: '/detail/:id', component: Hotel1 , name: 'detail' },
    ]
});

const app = new Vue({
    el: '#app',
    components: { App },
    router,
});
