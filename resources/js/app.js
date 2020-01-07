
require('./bootstrap');

window.Vue = require('vue');

import VueRouter from 'vue-router'
Vue.use(VueRouter)

import {
    Form,
    HasError,
    AlertError
} from'vform';

//import Alert
import Swal from 'sweetalert2'
window.Swal = Swal;
const Toast = Swal.mixin({
    toast: true,
    position: 'top-end',
    showConfirmButton: false,
    timer: 3000
});
window.Toast = Toast;

window.Form = Form;
Vue.component(HasError.name, HasError)
Vue.component(AlertError.name, AlertError)

//progress Bar
import VueProgressBar from 'vue-progressbar'
Vue.use(VueProgressBar, {
    color: 'rgb(143, 255, 199)',
    failedColor: 'red',
    height: '7px'
})

let Fire = new Vue();
window.Fire = Fire;

let routes = [
   { path:'/tambah-blog', component: require('./components/Blog/TambahBlog.vue').default},
   { path:'/data-blog', component: require('./components/Blog/DataBlog.vue').default},
   { path:'/blog-pengguna', component: require('./components/Blog/Pengguna.vue').default},
   { path:'/blog-kategori', component: require('./components/Blog/Kategori.vue').default},
   { path:'/blog-login', component: require('./components/Blog/Masuk.vue').default}
]

Vue.component('example-component', require('./components/ExampleComponent.vue').default);


const router = new VueRouter ({
    mode: 'history',
    routes //short for 'routes : routes'
})

const app = new Vue({
    el: '#app',
    router
});
