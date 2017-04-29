<template>
    <div id="post">
        <el-breadcrumb separator="/">
            <el-breadcrumb-item :to="{ path: '/' }">首页</el-breadcrumb-item>
            <el-breadcrumb-item>{{title}}</el-breadcrumb-item>
        </el-breadcrumb>
        <br>
        <el-card class="box-card" style="width:100%">
            <div  class="text item">
                <div style="text-align: center;font-size: 18px"><b>{{title}}文章</b></div>
                <br>
                <el-form :model="ruleForm" :rules="rules" ref="ruleForm" label-width="100px" class="demo-ruleForm">
                    <el-form-item label="标题" prop="title">
                        <input type="hidden" name="id" v-model="ruleForm.id">

                        <el-input v-model="ruleForm.title"></el-input>
                    </el-form-item>
                    <el-form-item label="类型" prop="type">
                        <el-select v-model="ruleForm.type" placeholder="请选择类型">
                            <el-option label="类型一" value="1"></el-option>
                            <el-option label="类型二" value="2"></el-option>
                            <el-option label="类型三" value="3"></el-option>
                        </el-select>
                    </el-form-item>
                    <el-form-item label="内容" prop="content">
                        <el-input type="textarea" v-model="ruleForm.content"></el-input>
                    </el-form-item>
                    <el-form-item>
                        <el-button type="primary" @click="submitForm('ruleForm')">提交</el-button>
                        <el-button @click="resetForm('ruleForm')">重置</el-button>
                    </el-form-item>
                </el-form>

            </div>
        </el-card>

    </div>
</template>
<script>
    export default {
        data() {
            return {
                ruleForm: {
                    title: '',
                    type: '',
                    content: '',
                    id: ''
                },
                rules: {
                    title: [
                        { required: true, message: '请输入标题', trigger: 'blur' },
                        { min: 1, max: 20, message: '长度在 1 到 20 个字符', trigger: 'blur' }
                    ],
                    type: [
                        { required: true, message: '请选择类型', trigger: 'change' }
                    ],
                    content: [
                        { required: true, message: '请填写内容', trigger: 'blur' }
                    ]
                },
                title: '添加'
            };
        },
        created(){
            if(this.$route.params.id != null){
                this.getData();
            }
        },
        methods: {
            submitForm(formName) {

                this.$refs[formName].validate((valid) => {

                    if (valid) {

                        this.$refs[formName].model._token = $("#token").attr("content")
                        this.$http.post('/blog',this.$refs[formName].model).then(
                            (response) => {
                                if (response.body.ret == '0'){
                                alert(response.body.msg);
                                //跳转到展示页面
                                this.$router.push('/blog/'+response.body.detail);

                                }else{
                                    alert(response.body.msg);

                                }
                         });
                    } else {
                        this.$message('请填写完整');
                    }
                });
            },
            resetForm(formName) {
                this.$refs[formName].resetFields();
            },
            getData:function () {
                this.$http.get('/blog/detail/'+this.$route.params.id).then(
                (response) => {
                    var params = response.body;
                    this.ruleForm = {
                        id: params.id,
                        title: params.title,
                        type: String(params.type),
                        content:JSON.parse(params.content)
                    };
                    this.title = '编辑'
                });
            }
        }
    }
</script>
<!--<template>-->
    <!--<form @submit.prevent="submit">-->
        <!--<div>-->
            <!--<label for="title">title</label>-->
            <!--<input type="hidden" id="id" name="id" v-model="id">-->
            <!--<input type="text" id="title" name="title" v-model="title" placeholder="please print title">-->
        <!--</div>-->
        <!--<div>-->
            <!--<label for="type">type</label>-->
            <!--<select name="type" id="type" v-model="type">-->
                <!--<option value="1">1</option>-->
                <!--<option value="2">2</option>-->
                <!--<option value="3">3</option>-->
            <!--</select>-->
        <!--</div>-->
        <!--<div>-->
            <!--<label for="content">content</label>-->
            <!--<textarea name="content" id="content" cols="30" rows="10" v-model="content" placeholder="please print content"></textarea>-->
        <!--</div>-->
        <!--<button type="submit">submit</button>-->


    <!--</form>-->
<!--</template>-->
<!--<script>-->
    <!--export default{-->
        <!--data(){-->
            <!--return {-->
                <!--title: '',-->
                <!--content: '',-->
                <!--type: '',-->
                <!--id: '',-->
            <!--}-->
        <!--},-->
        <!--created(){-->
            <!--this.getData()-->
        <!--},-->
<!--//        watch:{-->
<!--//            name: function(){-->
<!--//                console.log(this.content.value);-->
<!--//-->
<!--//            }-->
<!--//            '$route':'createData'-->
<!--//        },-->
        <!--methods:{-->
            <!--submit:function () {-->

                <!--var data = {-->
                    <!--'title':this.title,-->
                    <!--'content':this.content,-->
                    <!--'type':this.type,-->
                    <!--'_token':$("#token").attr("content"),-->
                <!--};-->

                <!--this.$http.post('/blog',data).then(-->
                        <!--(response) => {-->

                            <!--if (response.body.ret == '0'){-->
                                <!--alert('添加成功');-->
                                <!--//跳转到展示页面-->
                                <!--this.$router.push('/blog/'+response.body.detail);-->

                            <!--}else{-->
                                <!--alert(response.body.msg);-->

                            <!--}-->


                        <!--},-->
                        <!--//返回错误-->
                        <!--(response) => {-->

                        <!--});-->
                <!--return false;-->

            <!--},-->
            <!--getData:function () {-->
                <!--this.$http.get('/blog/detail/'+this.$route.params.id).then(-->
                        <!--(response) => {-->
                            <!--var params = response.body;-->
                            <!--this.title = params.title;-->
                            <!--this.content = params.content;-->
                            <!--this.type = params.type;-->
                            <!--this.id = params.id;-->

                        <!--},-->
                        <!--//返回错误-->
                        <!--(response) => {-->

                        <!--});-->
            <!--}-->

        <!--}-->
    <!--}-->
<!--</script>-->