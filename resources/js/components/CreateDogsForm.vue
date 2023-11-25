<template>
  <button @click="cancelCreate" class="w-1/2 mt-4 bg-gray-700 text-white py-2 px-4 rounded-md hover:bg-gray-900 focus:outline-none focus:ring focus:border-blue-300">Volver</button>

  <div class="flex justify-center items-center bg-blue-200 p-8 rounded-lg shadow-md mt-8">
      <form @submit.prevent="handleSubmit" class="flex flex-col gap-4">
        <p class="flex justify-center text-2xl font-semibold mb-4">Crear Nuevo Perro</p>
        <label for="foto" class="text-lg font-semibold">Subir foto del perro:</label>
        <input type="file" id="foto" ref="fileInput" @change="handleFileChange" class="p-2 border border-gray-300 rounded-md" />

        <label for="breed" class="text-lg font-semibold">Seleccionar raza:</label>
        <select v-model="dog.breed" id="breed" class="p-2 border border-gray-300 rounded-md">
          <option value="">Selecciona una raza</option>
          <option v-for="breed in breeds" :key="breed.id" :value="breed.id">{{ breed.name }}</option>
        </select>

        <label for="hair" class="text-lg font-semibold">Seleccionar color pelo:</label>
        <div class="color-options">
          <div @click="selectColor(color)" class="flex items-center gap-4 rounded w-10 cursor-pointer" v-for="color in colors" :key="color" :class="{ 'bg-yellow-700': color === 'Brown', 'bg-black': color === 'Black', 'bg-gray-100': color === 'Blanco', 'bg-gray-500': color === 'Gray', 'border-2 border-black': color == this.dog.color_hair}">
            &nbsp;
          </div>
        </div>

        <label class="text-lg font-semibold">Tamaño del perro:</label>
        <div class="flex gap-2">
          <label class="flex items-center">
            <input type="radio" v-model="dog.size" value="Pequeño" class="mr-2">
            Pequeño
          </label>
          <label class="flex items-center">
            <input type="radio" v-model="dog.size" value="Mediano/Pequeño" class="mr-2">
            Mediano/Pequeño
          </label>
          <label class="flex items-center">
            <input type="radio" v-model="dog.size" value="Mediano/Grande" class="mr-2">
            Mediano/Grande
          </label>
          <label class="flex items-center">
            <input type="radio" v-model="dog.size" value="Grande" class="mr-2">
            Grande
          </label>
        </div>
        <div class="flex gap-2 mt-2">
          <button type="submit" class="w-full bg-blue-500 text-white py-2 px-4 rounded-md hover:bg-blue-600 focus:outline-none focus:ring focus:border-blue-300">Guardar</button>
        </div>
        
      </form>
    </div>
</template>
  
  <script>
  import axios from "axios";
  
  export default {
    props: {
      breeds: Array,
      colors: Array,
    },
    data() {
      return {
        dog:{
            name: "",
            photo: null,
            breed: "",
            size: "",
            color_hair: "",
        },
      };
    },
    mounted() {

    },
    methods: {
    selectColor(color) {
      try {
        this.dog.color_hair = color;
      } catch (error) {
        console.error('Error en selectColor:', error);
      }
    },
    handleFileChange(event) {
        this.dog.photo = event.target.files[0];
    },

    cancelCreate() {
      this.$emit('cancel', true);
    },
    handleSubmit() {
        const formData = new FormData();
        formData.append("photo", this.dog.photo);
        formData.append("breed", this.dog.breed);
        formData.append("size", this.dog.size);
        formData.append("color_hair", this.dog.color_hair);

        axios
          .post("/api/save", formData, {
            headers: {
              "Content-Type": "multipart/form-data",
            },
          })
          .then(response => {
            console.log(response.data);
          })
          .catch(error => {
            console.error("Error al enviar datos:", error);
          });
      },
    },
    // selectColor(color){
    //   console.log(color)
    //   this.dog.color = color;
    // },
  };
  </script>
  