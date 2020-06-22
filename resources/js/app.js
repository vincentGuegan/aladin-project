/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');
import VueRouter from 'vue-router'
Vue.use(VueRouter);

import Home from './components/HomeComponent.vue';
import Product from './components/ProductComponent.vue';
import Article from './components/ArticleComponent.vue';
import Site from './components/SiteComponent.vue';
import Login from './components/LoginComponent.vue';

const routes= [
    {
        path: '/home',
        component: Home
    },
    {
        path: '/products',
        component: Product
    },
    {
        path: '/articles',
        component: Article
    },
    {
        path: '/sites',
        component: Site
    },
    {
        path: '/login',
        component: Login
    }
];

const router = new VueRouter({routes});


const app = new Vue({
    el: '#app',
    router: router
});
