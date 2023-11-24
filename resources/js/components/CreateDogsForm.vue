<template>
    <div>
      <form @submit.prevent="handleSubmit">
        <label for="foto">Subir foto del perro:</label>
        <input type="file" id="foto" ref="fileInput" @change="handleFileChange" />

        <label for="">Nombre</label>
        <input type="text" v-model="dog.name"/>

        <label for="breed">Seleccionar raza:</label>
        <select v-model="dog.breed" id="breed">
            <option v-for="breed in breeds" :key="breed.id" :value="breed.id">{{ breed.name }}</option>
        </select>
  
        <label>Tamaño del perro:</label>
        <div>
          <label>
            <input type="radio" v-model="dog.size" value="pequeño"/>
          </label>
          <label>
            <input type="radio" v-model="dog.size" value="mediano/pequeño"/> 
          </label>
          <label>
            <input type="radio" v-model="dog.size" value="mediano/grande"/> 
          </label>
          <label>
            <input type="radio" v-model="dog.size" value="grande"/>
          </label>
        </div>
        <button type="submit">Guardar</button>
      </form>
    </div>
  </template>
  
  <script>
  import axios from "axios";
  
  export default {
    data() {
      return {
        dog:{
            name: "",
            photo: null,
            race: "",
            size: "",
            color: "",
        },
        breeds:{
            name:"",
        }
      };
    },
    mounted() {

        $(this.$el.querySelector('.select2')).select2();

        this.fetchBreeds();
    },
    methods: {
    async fetchBreeds() {
        try {
            const response = await axios.get("/api/breeds");
            this.breeds = response.data.breeds;
        } catch (error) {
            console.error("Ha habido un error:", error);
        }
    },
    handleFileChange(event) {
        this.photo = event.target.files[0];
    },
    handleSubmit() {
        const formData = new FormData();
        formData.append("name", this.dog.name);
        formData.append("photo", this.dog.photo);
        formData.append("race", this.dog.race);
        formData.append("size", this.dog.size);
        formData.append("color_hair", this.dog.color);

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
  };
  </script>
  