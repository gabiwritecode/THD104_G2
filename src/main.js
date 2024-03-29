// import './assets/main.css'

import { createApp } from 'vue'
import { createPinia } from 'pinia'

import App from './App.vue'
import router from './router'
import sessionPlugin from './plugins/sessionPlugin';

const app = createApp(App)

app.use(createPinia())
app.use(router)
app.use(sessionPlugin);


app.mount('#app')

// 換頁會自動跳到網頁最上方
router.afterEach(() => {
    window.scrollTo(0, 0);
});