

require('./bootstrap')
window.Vue = require('vue')

import VueRouter from "vue-router";
import { Form, HasError, AlertError } from 'vform'
import moment from "moment"
import VueProgressBar from 'vue-progressbar'

window.form = Form
Vue.use(VueRouter)
Vue.component(HasError.name, HasError)
Vue.component(AlertError.name, AlertError)


const Home = Vue.component('home-component', require('./components/ExampleComponent.vue').default);
const Users = Vue.component('users-component', require('./components/UsersComponent.vue').default);

const routes = [
    { path: '/dashboard', name : 'Home', component: Home },
    { path: '/home', name : 'Home', component: Home },
    { path: '/users', name : 'Users', component: Users }
    // REDIRECCIONANDO A PAGINAS POR DEFAULT
    // { path : '/registrarse', redirect : '/signup' },
    // { path : '/*', redirect : '/' }
]

const router = new VueRouter({
    routes,
    // base: process.env.BASE_URL,
    mode: 'history'
})


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


const app = new Vue({
    el: '#app',
    router
}).$mount('#app')





Vue.config.productionTip = false