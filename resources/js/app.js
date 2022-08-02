
import './bootstrap'
import '../sass/app.scss'

import { createApp } from 'vue'
import router from './router.js'
import router2 from './router2.js'

import App from './components/RouterComponent.vue'
import CHIKILOP from './components/RouterComponent2.vue' 

createApp(App)
    .use(router)
    .mount('#app')
    

createApp(CHIKILOP)
    .use(router2)
    .mount('#app2')