import { createApp } from 'vue'
import App from './App.vue'
import router from './router/index';

//create App Vue
const app = createApp(App);
app.use(router);
app.mount('#app');
