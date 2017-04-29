/**
 * Created by evan on 2017/4/14.
 */
export default[
/**    {
        path: '/',
        name: '首页',
        component: require('./components/Index.vue')
    },
    */
    {
        path: '/blog',
        name: 'blog',
        component: require('./blog/Blog.vue')
    },{
        path: '/blog/create',
        name: 'blog_create',
        component: require('./blog/BlogCreate.vue')
    },{
        path: '/blog/:id',
        name: 'blog_show',
        component: require('./blog/BlogShow.vue')
    },{
        path: '/blog/update/:id',
        name: 'blog_update',
        component: require('./blog/BlogCreate.vue')
    },{
        path: '/login',
        name: 'login',
        component: require('./user/Login.vue')
    }
]
