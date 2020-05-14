

require('./bootstrap')
window.Vue = require('vue')

import VueRouter from "vue-router";
import { Form, HasError, AlertError } from 'vform'
import moment from "moment"
import VueProgressBar from 'vue-progressbar'
import Swal from 'sweetalert2'
import Gate from './Gate'

Vue.prototype.$gate = new Gate(window.user)


window.Form = Form
Vue.use(VueRouter)
Vue.component(HasError.name, HasError)
Vue.component(AlertError.name, AlertError)


const Home = Vue.component('home-component', require('./components/ExampleComponent.vue').default);
const Users = Vue.component('users-component', require('./components/UsersComponent.vue').default);
const profile = Vue.component('profile-component', require('./components/profile.vue').default);
const Dev = Vue.component('dev-component', require('./components/Developer.vue').default);
const notfound = Vue.component('not-found', require('./components/NotFound.vue').default);

Vue.component('pagination', require('laravel-vue-pagination'))

const routes = [
    { path: '/dashboard', name : 'Home', component: Home },
    { path: '/home', name : 'Start', component: Home },
    { path: '/users', name : 'Users', component: Users },
    { path: '/profile', name : 'Profile', component: profile },
    { path: '/developer', name : 'Devps', component: Dev },
    // REDIRECCIONANDO A PAGINAS POR DEFAULT
    // { path : '/registrarse', redirect : '/signup' },
    { path : '*', redirect : '/home' }
]

const router = new VueRouter({
    routes,
    // base: process.env.BASE_URL,
    mode: 'history'
})

window.Swal = Swal

const toast = Swal.mixin({
    toast: true,
    position: 'top-end',
    showConfirmButton: false,
    timer: 3000,
    timerProgressBar: true,
    onOpen: (toast) => {
      toast.addEventListener('mouseenter', Swal.stopTimer)
      toast.addEventListener('mouseleave', Swal.resumeTimer)
    }
})

window.toast = toast
window.Fire = new Vue()

moment.locale('es')

Vue.use(VueProgressBar, {
    color: 'rgb(143, 255, 199)',
    failedColor: 'red',
    height: '2px'
})

//=================== Filters ====================

Vue.filter('capitalize', function(text){
    return text[0].toUpperCase() + text.slice(1)
})

Vue.filter('mydate', function(date_at){
    return moment(date_at).format('MMMM Do YYYY, hh:mm:ss a'); // May 12th 2020, 11:07:41 pm
})
//=================== Filters ====================


// =================== laravel/passport =================
Vue.component( 'passport-clients', require('./components/passport/Clients.vue').default)
Vue.component( 'passport-authorized-clients', require('./components/passport/AuthorizedClients.vue').default)
Vue.component( 'passport-personal-access-tokens', require('./components/passport/PersonalAccessTokens.vue').default)
// =================== laravel/passport =================

const app = new Vue({
    el: '#app',
    router
}).$mount('#app')





Vue.config.productionTip = false