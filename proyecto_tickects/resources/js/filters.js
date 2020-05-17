
import Vue from 'vue'
import moment from "moment"




moment.locale('es')

Vue.filter('capitalize', function(text){
    return text[0].toUpperCase() + text.slice(1)
})

Vue.filter('mydate', function(date_at){
    return moment(date_at).format('MMMM Do YYYY, hh:mm:ss a'); // May 12th 2020, 11:07:41 pm
})
