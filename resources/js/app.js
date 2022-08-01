
import './bootstrap';
import '../sass/app.scss'

import { createApp } from 'vue'
import router from './router.js';

import App from './components/RouterComponent.vue'

createApp(App)
    .use(router)
    .mount('#app')