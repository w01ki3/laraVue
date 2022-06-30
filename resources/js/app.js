
require('./bootstrap');

window.Vue = require('vue').default;
import Vue from 'vue';
import VueRouter from 'vue-router';

Vue.use(VueRouter);

const routes = [
    {path: '/', component: require('./components/HomeComponent.vue').default},
    {path: '/link1', component: require('./components/Link1Component.vue').default},
    {path: '/link2', component: require('./components/Link2Component.vue').default},
]

const router = new VueRouter({
    routes: routes,
    mode: 'history'
})

const app = new Vue({
    router
}).$mount("#app");