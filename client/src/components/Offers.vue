<template>
  <div class="flex flex-col justify-center items-center">
    <div class="flex-row font-bold mt-5">OFFERTE DI LAVORO</div>
        <div class="flex-row  mt-5">premi l'icona per cercare le offerte solo di quel linguaggio</div>
                <div class="flex-row flex mt-5 items-center">ordinare per ral
                <button @click="ral('ASC')" class="mr-5 ml-5 bg-slate-300 p-2 rounded" > <b> crescente </b></button>
                <button @click="ral('DESC')" class="mr-5 ml-5 bg-slate-300 p-2 rounded" > <b> decrescente </b></button>
 </div>

    <div class="flex-row" v-for="(offer, index) in offers" :key="index">
        <div class="flex-row flex items-center m-5 	">
          <p class="m-5 w-72">
            Il linguaggio richiesto è: <b> {{ offer.linguaggio }}</b>
          </p>
          
          <img :src="offer.icona" alt="icon" class="w-16"  @click="icona(offer)">
          <p class="m-5">
            L'azienda che ricerca è:  {{ offer.azienda }}
          </p>
          <p class="m-5">
            l'esperienza richiesta è:{{ offer.esperienza }}
          </p>
          <p class="m-5">
            Il luogo è:  {{ offer.location }}
          </p>
           <p class="m-5 	">
            ral:  {{ offer.ral }}
          </p>
          <p class="m-5 w-60	">
            descrizione:  {{ offer.descrizione }}
          </p>
          <button class="p-5 bg-gray-300" @click="modifica(offer)" > modifica</button>
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
      order:{
          name:""
      }
    };
  },
  async mounted() {
    let response = await axios.get("http://127.0.0.1:8000/api/offers");
    this.offers = response.data;
  },
  methods:{
      modifica(offer){
          this.$router.push("modifi/" + offer.id)
      },
      icona(offer){
          this.$router.push("offers/"+offer.linguaggio)
      },
      async ral(name){
          this.order.name = name;
          let response = await axios.post("http://127.0.0.1:8000/api/orderRal", this.order)
              this.offers = response.data;

      }
  }
};
</script>
