import './bootstrap';

import Alpine from 'alpinejs';

//require('select2');

window.Alpine = Alpine;

Alpine.start();


import { createApp } from 'vue';

// Registra el componente globalmente
import Index from "./components/Index.vue"
import CreateDogsForm from "./components/CreateDogsForm.vue"; // Ajusta la ruta según tu estructura de archivos

const app = createApp({
    components:{
        Index,
        CreateDogsForm,
    },
});

//app.component('TailwindPagination', TailwindPagination);


app.mount('#app');

