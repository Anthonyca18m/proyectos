require('./bootstrap')
require('./filters')
require('./tables')
require('./alerts')

window.Vue = require('vue')

import router from "./router"
import { Form, HasError, AlertError } from 'vform'
import VueProgressBar from 'vue-progressbar'
import Gate from './Gate'
import Vuetify from 'vuetify'
Vue.use(Vuetify)

Vue.prototype.$gate = new Gate(window.user)
window.Form = Form

Vue.component(HasError.name, HasError)
Vue.component(AlertError.name, AlertError)
Vue.component('pagination', require('laravel-vue-pagination'))

window.Fire = new Vue()

Vue.use(VueProgressBar, {
    color: 'rgb(143, 255, 199)',
    failedColor: 'red',
    height: '2px'
})


const app = new Vue({
    el: '#app',
    router,
    vuetify: new Vuetify()
}).$mount('#app')
