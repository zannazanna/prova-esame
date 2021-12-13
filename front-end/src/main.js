import Vue from 'vue'
import App from './App.vue'
import VueRouter from "vue-router";
Vue.use(VueRouter);

Vue.config.productionTip = false

import Offers from "@/components/Offers"
import Create from "@/components/Create";
import Modifica from "@/components/Modifica";
import Linguaggio from "@/components/Linguaggio"
const routes = [{
  path: "/offers",
  component: Offers
},
{
  path: "/create",
  component: Create
},
{
  path: "/",
  redirect: "offers"
},
{
  path: "/modifi/:id",
  component: Modifica
},
{
  path: "/offers/:name",
  component: Linguaggio
},

]

const router = new VueRouter({
  mode: "history",
  routes
})

new Vue({
  render: h => h(App),
  router
}).$mount('#app')
