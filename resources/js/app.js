import './bootstrap';

import Alpine from 'alpinejs';

//require('select2');

window.Alpine = Alpine;

Alpine.start();


import { createApp } from 'vue';

import { TailwindPagination } from 'laravel-vue-pagination';

// Registra el componente globalmente
import Index from "./components/Index.vue"
import CreateDogsForm from "./components/CreateDogsForm.vue"

const app = createApp({
    components:{
        Index,
        CreateDogsForm,
    },
});

app.component('TailwindPagination', TailwindPagination);


app.mount('#app');

