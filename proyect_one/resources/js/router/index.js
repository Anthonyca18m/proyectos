import Vue from 'vue'
import VueRouter from 'vue-router'
import Home from '../components/ExampleComponent.vue'
import Users from '../components/UsersComponent.vue'
import profile from '../components/profile.vue'
import Dev from '../components/NotFound.vue'

Vue.use(VueRouter)

Vue.config.productionTip = false

  const routes = [
  { path: '/', name: 'Home', component: Home },
  { path: '/dashboard', name : 'Dashboard', component: Home },
  { path: '/home', name : 'Start', component: Home },
  { path: '/users', name : 'Users', component: Users },
  { path: '/profile', name : 'Profile', component: profile },
  { path: '/developer', name : 'Devps', component: Dev },
  { path : '/*', redirect : '/home' }
]


// =================== laravel/passport =================
Vue.component( 'passport-clients', require('../components/passport/Clients.vue').default)
Vue.component( 'passport-authorized-clients', require('../components/passport/AuthorizedClients.vue').default)
Vue.component( 'passport-personal-access-tokens', require('../components/passport/PersonalAccessTokens.vue').default)
// =================== laravel/passport =================

const router = new VueRouter({
  mode: 'history',
//   base: process.env.BASE_URL,
  routes
})

export default router
