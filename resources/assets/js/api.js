
import Vue from 'vue';
import VueResource from 'vue-resource';
Vue.use(VueResource);
// 设置 Laravel 的 csrfToken
Vue.http.interceptors.push((request, next) => {
    request.headers.set('X-CSRF-TOKEN', Laravel.csrfToken);
next();
});
// const API_ROOT = '/api';    // 可以根据自己的开发环境设置
export default({
    // 首页推荐信息
    checkLogin: function() {
        console.log('zzzzzz');
    },
//     created(){
//         console.log('zzzzzzzz');
// //         this.$http.get('/login').then(
// //             (response) => {
// //                 console.log(response);
// // //                    this.page = response.body
// // //             this.message = response.body.data
// // //         this.total = response.body.total;
// //
// //             }, (response) => {
// //             // 响应错误回调
// //             console.log('==============');
// //             console.log(response);
// //             console.log('==============');
// //         });
//     }

    // created:function () {
    //    console.log('dssdsdsdds');
    // },
    // 首页推荐信息
    // getNewsRecommend: function() {
    //     return Vue.resource(API_ROOT + '/news').get();
    // },
    // 列表信息
    // getNewsLists: function() {
    //     return Vue.resource(API_ROOT + '/newslist').get();
    // }
    // ,
    // // 详情
    // getNewsDetail: function(id) {
    //     return Vue.resource(API_ROOT + '/newsdetail/' + id).get();
    // }
});
// checkLogin();
