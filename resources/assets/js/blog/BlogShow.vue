<style>
    .box-card {
        width: 100%;
    }
</style>
<template>
    <div>
        <div>
            <el-card class="box-card">
                <div slot="header" class="clearfix">
                    <span style="line-height: 36px;">{{ruleForm.title}}</span>
                </div>
                <div class="text item">
                    {{ruleForm.content}}


                    <br><br>
                    <el-button size="small">评论</el-button>
                </div>
            </el-card>

        </div>
        <div>

            <div>
                <router-link :to="{path:'/blog/update/'+$route.params.id }">update</router-link>
            </div>
        </div>
    </div>
</template>
<script>
    export default{
        data(){
            return {
                ruleForm: {
                    title: '',
                    type: '',
                    content: '',
                },
            }
        },
        created(){
            this.getMessage()
        },
//        watch:{

//            '$route':'createData'
//        },

        methods:{
            getMessage : function () {

                this.$http.get('/blog/detail/'+this.$route.params.id).then(
                        (response) => {

                            var params = response.body;
                            this.ruleForm = {
                                title: params.title,
                                content: params.content,
                                type: params.type
                            };

//                            this.title = params.title;
//                            this.content = params.content;
//                            this.type = params.type;


                        });
            }
        }
    }


</script>