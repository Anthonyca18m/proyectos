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
    color: 'rgb(0, 54, 255)',
    failedColor: 'red',
    height: '3px'
})

Vue.component( 'passport-clients', require('./components/passport/Clients.vue').default );
Vue.component( 'passport-authorized-clients', require('./components/passport/AuthorizedClients.vue').default );
Vue.component( 'passport-personal-access-tokens', require('./components/passport/PersonalAccessTokens.vue').default );



const app = new Vue({
    el: '#app',
    router,
    vuetify: new Vuetify()
}).$mount('#app')
