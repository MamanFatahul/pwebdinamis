
require('./bootstrap');

window.Vue = require('vue');

import VueRouter from 'vue-router'
Vue.use(VueRouter)

let routes = [
   { path:'/tambah-blog', component: require('./components/Blog/TambahBlog.vue').default},
   { path:'/blog-pengguna', component: require('./components/Blog/Pengguna.vue').default},
   { path:'/blog-kategori', component: require('./components/Blog/Kategori.vue').default}
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
