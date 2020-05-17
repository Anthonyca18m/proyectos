import Vue from 'vue'
import VueRouter from 'vue-router'
import Home from '../components/ExampleComponent.vue'

Vue.use(VueRouter)

Vue.config.productionTip = false

  const routes = [
  { path: '/home', name: 'Home', component: Home },
  // { path : '/*', redirect : '/home' }
]

const router = new VueRouter({
  mode: 'history',
//   base: process.env.BASE_URL,
  routes
})

export default router
