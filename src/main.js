import Vue from 'vue'
import App from './App.vue'
import vuetify from './plugins/vuetify';
import VueTimeLine from '@growthbunker/vuetimeline';

Vue.config.productionTip = false

Vue.use(VueTimeLine);

new Vue({
  vuetify,
  render: h => h(App)
}).$mount('#app')
