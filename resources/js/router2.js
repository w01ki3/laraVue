import { createWebHistory,createRouter } from "vue-router";
import HomeComponent2 from './components/HomeComponent2.vue';
import Test1Component from './components/NADtestComponent.vue';
import test2Component from './components/NADtest2Component.vue';

const routes = [
    {path: '/page2', component: HomeComponent2},
    {path: '/routerlink1', component: Test1Component},
    {path: '/routerlink2', component: test2Component},
];

const router = createRouter({
    history: createWebHistory(),
    linkActiveClass: 'active',
    routes
});

export default router;
