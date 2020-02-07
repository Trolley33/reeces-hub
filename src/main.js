import Vue from "vue";
import VueRouter from "vue-router";
import vuetify from "./plugins/vuetify";
import VueTimeLine from "@growthbunker/vuetimeline";

import router from "./router/router";

import App from "./App";

Vue.config.productionTip = false;

Vue.use(VueRouter);
Vue.use(VueTimeLine);

new Vue({
  vuetify,
  router,
  render: h => h(App),
  el: "#app"
});
