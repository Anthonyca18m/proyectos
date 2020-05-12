

require('./bootstrap')
window.Vue = require('vue')

import VueRouter from "vue-router";
Vue.use(VueRouter)

const Home = Vue.component('home-component', require('./components/ExampleComponent.vue').default);

const routes = [
    { path: '/dashboard', name : 'Home', component: Home }
    // REDIRECCIONANDO A PAGINAS POR DEFAULT
    // { path : '/registrarse', redirect : '/signup' },
    // { path : '/*', redirect : '/home' }
]

const router = new VueRouter({
    routes
})

// Vue.component('example-component', require('./components/ExampleComponent.vue').default);

const app = new Vue({
    el: '#app',
    mode: 'history',
    base: process.env.BASE_URL,
    router
}).$mount('#app')

Vue.config.productionTip = false