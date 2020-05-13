

require('./bootstrap')
window.Vue = require('vue')

import VueRouter from "vue-router";
import { Form, HasError, AlertError } from 'vform'


window.form = Form
Vue.use(VueRouter)
Vue.component(HasError.name, HasError)
Vue.component(AlertError.name, AlertError)

const Home = Vue.component('home-component', require('./components/ExampleComponent.vue').default);
const Users = Vue.component('users-component', require('./components/UsersComponent.vue').default);

const routes = [
    { path: '/dashboard', name : 'Home', component: Home },
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

// Vue.component('example-component', require('./components/ExampleComponent.vue').default);

const app = new Vue({
    el: '#app',
    router
}).$mount('#app')

Vue.config.productionTip = false