import './bootstrap';

import Alpine from 'alpinejs';

//require('select2');

window.Alpine = Alpine;

Alpine.start();


import { createApp } from 'vue';

import { TailwindPagination } from 'laravel-vue-pagination';

// Registra el componente globalmente
import Index from "./components/Index.vue"
const app = createApp({
    components:{
        Index,
    },
});

app.component('TailwindPagination', TailwindPagination);


app.mount('#app');

