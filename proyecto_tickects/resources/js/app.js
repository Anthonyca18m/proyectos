require('./bootstrap')
require('./filters')
require('./alerts')

window.Vue = require('vue')

import router from "./router"
import { Form, HasError, AlertError } from 'vform'
import VueProgressBar from 'vue-progressbar'
import Vuetify from 'vuetify'
Vue.use(Vuetify)

window.Form = Form

Vue.component(HasError.name, HasError)
Vue.component(AlertError.name, AlertError)

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
