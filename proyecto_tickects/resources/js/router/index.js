import Vue from 'vue'
import VueRouter from 'vue-router'
import Developer from '../components/DeveloperComponent.vue'
import Home from '../components/HomeComponent.vue'
import Dashboard from '../components/DashboardComponent.vue'
import User from '../components/UserComponent.vue'
Vue.use(VueRouter)

Vue.config.productionTip = false

  const routes = [
  { path: '/home', name: 'Home', component: Home },
  { path: '/dashboard', name: 'Dashboard', component: Dashboard },
  { path: '/users', name: 'User', component: User },
  { path: '/developer', name: 'Dev', component: Developer },
  // { path : '/*', redirect : '/home' }
]

const router = new VueRouter({
  mode: 'history',
//   base: process.env.BASE_URL,
  routes
})

export default router
