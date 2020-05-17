require('./bootstrap');
require('./filters');
require('./alerts');
window.Vue = require('vue');

import { 
    HasError,
    AlertError,
    AlertErrors, 
    AlertSuccess
  } from 'vform'

window.Form = Form
Vue.component(HasError.name, HasError)
Vue.component(AlertError.name, AlertError)
Vue.component(AlertErrors.name, AlertErrors)
Vue.component(AlertSuccess.name, AlertSuccess)


Vue.component('example-component', require('./components/ExampleComponent.vue').default);

const app = new Vue({
    el: '#app',
});
