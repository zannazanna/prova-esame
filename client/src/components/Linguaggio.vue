<template>
  <div class="flex flex-col justify-center items-center">
    <div class="flex-row font-bold mt-5">OFFERTE DI LAVORO PER IL LINGUAGGIO {{this.linguaggio.linguaggio}}</div>

    <div class="flex-row" v-for="(offer, index) in offers" :key="index">
        <div class="flex-row flex items-center m-5 	">
        
          
          <p class="m-5">
            L'azienda che ricerca è:  {{ offer.azienda }}
          </p>
          <p class="m-5">
            l'esperienza richiesta è:{{ offer.esperienza }}
          </p>
          <p class="m-5">
            Il luogo è:  {{ offer.location }}
          </p>
           <p class="m-5 w-60	">
            ral:  {{ offer.ral }}
          </p>
          <p class="m-5 w-60">
            descrizione:  {{ offer.descrizione }}
          </p>
          
      </div>
    </div>
  </div>
</template>

<script>
import axios from "axios";
export default {
  data() {
    return {
      offers: [],
      linguaggio:{
          linguaggio:""
      }
    };
  },
  async mounted() {
      this.linguaggio.linguaggio = this.$route.params.name
    let response = await axios.post("http://127.0.0.1:8000/api/linguaggi", this.linguaggio);
    this.offers = response.data;
    console.log(this.offers, this.$route.params.name)
  },
  methods:{
  }
};
</script>
