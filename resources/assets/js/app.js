
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */
import Vue from 'vue';
import VueResource from 'vue-resource';
Vue.use(VueResource);
import VueRouter from 'vue-router';
Vue.use(VueRouter);
import ElementUI from 'element-ui'
import 'element-ui/lib/theme-default/index.css'
Vue.use(ElementUI)

// import Vuex from 'vuex'
// Vue.use(Vuex)
//
//
// import store from './store'

// import 'sweetalert/dist/sweetalert.css'
// import store from './store/'; // vuex 数据存储所需对象
import routes from './routes';    // 路由配置文件

// 菜单
var navs = []

// routes.beforeEach(to,from,next) =>{
//     alert('fdfd');
//     console.log('12132324');
//     if(!to.meta.requiresAuth){
//         if(!store.state.collectItems.bAuth){
//             next({
//                 path:'/'
//             })
//         }else{
//             next()
//         }
//     }else{
//         if (store.state.collectItems.bAuth && to.fullPath === '/'){
//             console.log('--======');
//             next(false)
//             return
//         }
//         next()
//     }
// }

routes.forEach(function (obj) {
    if (obj.name !== undefined) {
        navs.push({
            name: obj.name,
            path: obj.path,
        });
    }
})


// 实例化路由
window.router = new VueRouter({
    routes
});
// 实例化 Vue
window.app = new Vue({
    // store,
    router
    // methods: {
    //     navActive (path) {
    //         if (this.$router.currentRoute.path === path) {
    //             return {
    //                 active: true
    //             }
    //         }
    //     }
    // },
    // data () {
    //     return {
    //         navs: navs
    //     }
    // }
}).$mount('#app');
