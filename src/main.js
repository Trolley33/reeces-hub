import Vue from 'vue'
import VueRouter from 'vue-router';
import vuetify from './plugins/vuetify';
import VueTimeLine from '@growthbunker/vuetimeline';

import App from './App';
import Homepage from './components/Homepage';

Vue.config.productionTip = false

Vue.use(VueRouter);
Vue.use(VueTimeLine);

const routes = [
  {path: '/', component: Homepage},
  {path: '/project/:id', component: {template: "<div>Foo {{ $route.params.id}} </div>"}},
]


const router = new VueRouter({
  routes,
  mode: 'history'
});

new Vue({
  vuetify,
  router,
  render: h => h(App),
  el: '#app'
});
