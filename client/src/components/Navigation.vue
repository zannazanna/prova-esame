<template>
<div class="flex flex-row justify-center items-center p-5 bg-slate-400">
<button class="p-px	 hover:bg-slate-200	 rounded m-5 font-bold" @click="goTo('/')" > Offerte</button>
<button  class="p-px	 hover:bg-slate-200	 rounded m-5 font-bold" @click="goTo('/create')" > Crea</button>

</div>
</template>

<script>
export default {
    data(){
        return{

        }
    },
    methods: {
        goTo(name){
            this.$router.push(name);
        }
    },
    
}
</script>