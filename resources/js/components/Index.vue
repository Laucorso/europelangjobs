
<template>
    <div class="flex justify-center items-center">
        <div class="w-full p-4">
            <p class="font-semibold text-xl mb-4">Consulta los perros :)</p>

            <div class="flex gap-4 items-center mb-4">
                <span class="material-symbols-outlined">
                    sound_detection_dog_barking
                </span>
                <label for="breed">Buscar por raza:</label>
                <select v-model="selected_breed" @change="filterDogs" id="breed" class="appearance-none border border-gray-300 rounded-md py-2 pl-3 pr-10">
                    <option v-for="breed in breeds" :key="breed.id" :value="breed.id">{{ breed.name }}</option>
                </select>
                <span class="material-symbols-outlined">
                    palette
                </span>
                <label for="color">Buscar por color:</label>
                <select v-model="selected_color" @change="filterDogs" id="color" class="appearance-none border border-gray-300 rounded-md py-2 pl-3 pr-10">
                    <option v-for="(colorName, colorId) in colors" :key="colorId" :value="colorId">
                        {{ colorName }}
                    </option>                
                </select>
                <span class="material-symbols-outlined">
                    aspect_ratio
                </span>
                <label for="size">Buscar por tamaño</label>
                <select v-model="selected_size" @change="filterDogs" id="size" class="appearance-none border border-gray-300 rounded-md py-2 pl-3 pr-10">
                    <option v-for="(sizeName, sizeId) in sizes" :key="sizeId" :value="sizeId">
                        {{ sizeName }}
                        
                    </option>                   
                </select>
            </div>

            <table class="w-full text-black">
                <thead>
                    <tr>
                    <th class="border-2 py-2 px-4">Foto</th>
                    <th class="border-2 py-2 px-4">Raza</th>
                    <th class="border-2 py-2 px-4">Tamaño</th>
                    <th class="border-2 py-2 px-4">Color de Pelo</th>
                    </tr>
                </thead>
                <tbody>
                    <tr v-for="dog in dogs" :key="dog.id" height="120">
                        <td class="border-2 py-2 px-4 text-center"><img :src="'/storage/' + dog.photo" alt="Foto del perro"></td>
                        <td class="border-2 py-2 px-4 text-center"><strong>{{ getBreedName(dog.breed_id) }}</strong></td>
                        <td class="border-2 py-2 px-4 text-center">{{ dog.size }}</td>
                        <td class=" border-2 py-2 px-4 text-center">{{ dog.hair_color }}</td>
                    </tr>
                </tbody>
            </table>

            <div v-if="create">
                <CreateDogsForm />
            </div>
        </div>

        <!-- <div class="mt-4">
            <TailwindPagination
                :data="paginationInfo"
                @pagination-change-page="fetchDogs"
            />
        </div> -->
    </div>
    <div class="mt-4">
        <ul class="flex justify-center gap-2">
            <li v-if="paginationInfo.prev_page_url">
                <button @click="fetchPrevPage" class="cursor-pointer bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700 focus:outline-none focus:ring focus:border-blue-300">Anterior</button>
            </li>
            <li v-if="paginationInfo.next_page_url">
                <button @click="fetchNextPage" class="cursor-pointer bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700 focus:outline-none focus:ring focus:border-blue-300">Siguiente</button>
            </li>
        </ul>
    </div>
</template>
  
  <script>
  import axios from "axios";

  export default {
    data() {
      return {
        dogs: [],
        breeds: [],
        colors: [],
        sizes: [],
        paginationInfo:[],
        selected_breed:null,
        selected_color: null,
        selected_size: null,
        create: false,
      };
    },
    mounted() {
        this.loadDogDetails();
        this.fetchDogs();
    },
    methods: {
        async filterDogs() {
            if (this.selected_breed === null && this.selected_color === null & this.selected_size === null) {
                this.fetchDogs();
            } else {
                var url = `/api/list?page=1`; //inicializamos paginación
                if(this.selected_breed) url = url+'&breed='+this.selected_breed;
                if(this.selected_color) url = url+'&color='+this.selected_color;
                if(this.selected_size) url = url+'&size='+this.selected_size;
                axios.get(url)
                    .then(response=>{
                        this.dogs = response.data.dogs.data
                    })
                    .catch(error=>{
                        console.error(error);
                    })
            }        
        },
        async fetchDogs(page = 1) {
            const url = `/api/list?page=${page}`;
            axios.get(url)
                .then(response => {
                    this.dogs = response.data.dogs.data
                    console.log(this.dogs)
                    this.paginationInfo = response.data.dogs;
                    this.breeds = response.data.breeds
                })
                .catch(error => {
                    console.error(error);
                });
        },
        async loadDogDetails() {
            try {
                const response = await axios.get('/api/dog-details');
                this.colors = response.data.colors;
                this.sizes = response.data.sizes;
            } catch (error) {
                console.error('Error al cargar colores:', error);
            }
        },

        getBreedName(breedId) {
            const breed = this.breeds.find(b => b.id === breedId);
            return breed ? breed.name : 'Desconocido';
        },
        fetchPrevPage() {
        if (this.paginationInfo.prev_page_url) {
            this.fetchDogs(this.paginationInfo.prev_page_url);
        }
        },
        extractPageNumber(url) {
            console.log(url)
            const parts = url.split("=");
            const pageNumber = parts[1];
            return pageNumber
        },
        fetchNextPage() {
        if (this.paginationInfo.next_page_url) {
            const pageNumber = this.extractPageNumber(this.paginationInfo.next_page_url);
            this.fetchDogs(pageNumber);
        }
        },
    
    }
  }
  </script>
  