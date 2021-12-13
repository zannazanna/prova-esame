<template>
  <div class="flex flex-col">
  <div class="flex flex-row m-5 ">
  <label for="linguaggio" class="w-36">linguaggio:</label>
  <select v-model="offers.linguaggio" class=" border w-1/4">
      <option value="java"> java </option>
            <option value="php"> php </option>
            <option value="vue"> vue </option>
      <option value="angular"> angular </option>

  </select>
  </div>
  <div class="flex flex-row m-5">
  <label for="icona" class="w-36">icona:</label>
  <input id="icona" v-model="offers.icona" class=" border w-1/4">
  </div>
  <div class="flex flex-row m-5">
  <label for="azienda" class="w-36">azienda:</label>
  <input id="azienda" v-model="offers.azienda" class=" border w-1/4">
  </div>
  <div class="flex flex-row m-5">
  <label for="ral" class="w-36">ral:</label>
  <input id="ral" v-model="offers.ral" class=" border w-1/4">
  </div>

  <div class="flex flex-row m-5">
  <label for="esperienza" class="w-36">esperienza:</label>
  <select v-model="offers.esperienza" class=" border w-1/4">
      <option value="junior"> junior </option>
            <option value="senior"> senior </option>
            <option value="pro"> pro </option>

  </select>
  </div>

  <div class="flex flex-row m-5">
  <label for="location" class="w-36">location:</label>
  <select v-model="offers.location" class=" border w-1/4">
      <option value="remota"> remota </option>
            <option value="presenza"> presenza </option>

  </select>  </div>

  <div class="flex flex-row m-5">
  <label for="descrizione" class="w-36">descrizione:</label>
  <textarea rows="" cols="" id="descrizione" v-model="offers.descrizione" class=" border w-1/4">  </textarea>
  </div>

  <button @click="conferma()"> conferma</button>
  </div>
</template>

<script>
import axios from "axios"
export default {
  data() {
    return {
      offers: {
        linguaggio: "",
        icona: "",
        azienda: "",
        ral: 0,
        esperienza: "",
        location: "",
        descrizione: "",
      },
    };
  },
  methods:{
      async conferma(){
          await axios.post("http://127.0.0.1:8000/api/offers", this.offers);
          alert("offerta inserita")
          this.$router.push("/")
      }
  }
};
</script>
