<style>
    .text {
        font-size: 14px;
    }

    .box-card {
        width: 100%;
        margin-bottom:20px
    }
</style>
<template>
    <!--<div v-text="title"></div>-->
    <div class="post">
        <el-breadcrumb separator="/">
            <el-breadcrumb-item :to="{ path: '/' }">首页</el-breadcrumb-item>
            <el-breadcrumb-item>列表</el-breadcrumb-item>
        </el-breadcrumb>
        <br>

        <router-link to="/blog/create" >
        <el-button class="el-button el-button--default is-plain" icon="edit" style="margin-bottom: 20px">添加</el-button>
        </router-link>
        <div v-for="n in message">
        <el-card class="box-card">
            <div slot="header" class="clearfix">
                <span style="line-height: 36px;">
                    <router-link :to="{path:'/blog/'+n.id }" style="text-decoration:none">
                        {{n.title}}
                    </router-link>
                </span>
            </div>
            <div class="text item">
                <div style="text-align:center">
                    <img src="imgs/blog.jpeg" alt="" width="80%" style="max-height:200px">
                </div>
                <br>
                <div>
                    <i class="el-icon-time"></i> {{n.updated_at}}
                </div>

            </div>
        </el-card>
    </div>

        <div class="block">
            <el-pagination
                    @size-change="handleSizeChange"
                    @current-change="handleCurrentChange"
                    :current-page="currentPage1"
                    :page-size="size"
                    layout="total, prev, pager, next"
                    :total="total">
            </el-pagination>
        </div>
        <br><br>

    </div>


</template>

<script>
    import api from '../api';
    export default {
        data(){
            return{
                message : {
                    id: '',
                    title: '',
                    updated_at: ''
                },
                next: true,
                currentPage1: 1,
                total: 0,
                size: 20
            }
        },
        created(){
            console.log('-----------');
            this.fetchData(1)
            console.log('============');
            api.checkLogin();
            console.log('============');

        },
//        watch:{
//            '$route':'fetchData'
//        },
        methods:{
            //获取内容值
            fetchData(page){

                this.$http.get('/blog?p='+page).then(
                (response) => {
//                    this.page = response.body
                    this.message = response.body.data
                    this.total = response.body.total;

                });
            },
            handleSizeChange(val) {
//                console.log(`每页 ${val} 条`);
            },
            handleCurrentChange(val) {
                this.currentPage = val;
                this.fetchData(val);
//                console.log(`当前页: ${val}`);
            }

        }





    }
</script>