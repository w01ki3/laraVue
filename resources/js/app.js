
require('./bootstrap');

window.Vue = require('vue').default;
import Vue from 'vue';
import VueRouter from 'vue-router';

Vue.use(VueRouter);

const routes = [
    {path: '/', component: require('./components/HomeComponent.vue').default},
    {path: '/link1', component: require('./components/Link1Component.vue').default},
    {path: '/link2', component: require('./components/Link2Component.vue').default},
    {path: '/lesson-1', component: require('./components/lessons/Lesson1.vue').default},
    {path: '/lesson-2', component: require('./components/lessons/Lesson2.vue').default},
    {path: '/lesson-3', component: require('./components/lessons/Lesson3.vue').default},
    {path: '/lesson-4', component: require('./components/lessons/Lesson4.vue').default},
]

const router = new VueRouter({
    routes: routes,
    mode: 'history',
    linkActiveClass: 'active'
})

const app = new Vue({
    router
}).$mount("#app");