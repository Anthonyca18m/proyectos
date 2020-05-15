

require('./bootstrap')
require('./filters')
require( 'jszip')
require( 'pdfmake')
require( 'datatables.net-bs4')
require( 'datatables.net-autofill-bs4')
require( 'datatables.net-buttons-bs4')
require( 'datatables.net-buttons/js/buttons.colVis.js')
require( 'datatables.net-buttons/js/buttons.flash.js')
require( 'datatables.net-buttons/js/buttons.html5.js')
require( 'datatables.net-buttons/js/buttons.print.js')
require( 'datatables.net-colreorder-bs4')
require( 'datatables.net-fixedcolumns-bs4')
require( 'datatables.net-fixedheader-bs4')
require( 'datatables.net-keytable-bs4')
require( 'datatables.net-responsive-bs4')
require( 'datatables.net-rowgroup-bs4')
require( 'datatables.net-rowreorder-bs4')
require( 'datatables.net-scroller-bs4')
require( 'datatables.net-searchpanes-bs4')
require( 'datatables.net-select-bs4')

window.Vue = require('vue')

import router from "./router"
import { Form, HasError, AlertError } from 'vform'
import VueProgressBar from 'vue-progressbar'
import Swal from 'sweetalert2'
import Gate from './Gate'

Vue.prototype.$gate = new Gate(window.user)
window.Form = Form

Vue.component(HasError.name, HasError)
Vue.component(AlertError.name, AlertError)
Vue.component('pagination', require('laravel-vue-pagination'))

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

Vue.use(VueProgressBar, {
    color: 'rgb(143, 255, 199)',
    failedColor: 'red',
    height: '2px'
})


const app = new Vue({
    el: '#app',
    router
}).$mount('#app')
