import Vue from 'vue'
import VueRouter from "vue-router";
import Home from '../views/Home.vue'
import About from '../views/About.vue'
import Contacts from '../views/Contacts'
import Hotel1 from '../views/Hotel1'

Vue.use(VueRouter);

const routes = [
  {
    path: '/',
    name: 'Home',
    component: Home
  },
  {
    path: '/about',
    name: 'About',
    component: About
  },
  {
    path: '/contacts',
    name: 'Contacts',
    component: Contacts
  },
  {
    path:'/hotel/:id',
    name:'SinglHotel',
    component:Hotel1
  }
];

const router = new VueRouter({
  mode: 'history',
  base: process.env.BASE_URL,
  routes
});

export default router
