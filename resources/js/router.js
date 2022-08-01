import { createWebHistory,createRouter } from "vue-router";
import HomeComponent from './components/HomeComponent.vue';
import Link1Component from './components/Link1Component.vue';
import Link2Component from './components/Link2Component.vue';
import Lesson1 from './components/lessons/Lesson1.vue';
import Lesson2 from './components/lessons/Lesson2.vue';
import Lesson3 from './components/lessons/Lesson3.vue';
import Lesson4 from './components/lessons/Lesson4.vue';
import Lesson5 from './components/lessons/Lesson5.vue';

const routes = [
    {path: '/', component: HomeComponent},
    {path: '/link1', component: Link1Component},
    {path: '/link2', component: Link2Component},
    {path: '/lesson-1', component: Lesson1},
    {path: '/lesson-2', component: Lesson2},
    {path: '/lesson-3', component: Lesson3},
    {path: '/lesson-4', component: Lesson4},
    {path: '/lesson-5', component: Lesson5},
];

const router = createRouter({
    history: createWebHistory(),
    routes
});

export default router;
