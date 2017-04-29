<template>
    <div>


        <el-tabs type="border-card">
            <el-tab-pane label="登录">
                <el-form :model="ruleForm" :rules="rules2" ref="ruleForm" label-width="100px" class="demo-ruleForm">
                    <el-form-item label="姓名" prop="name">
                        <el-input v-model="ruleForm.name"></el-input>
                    </el-form-item>
                    <el-form-item label="密码" prop="password">
                        <el-input type="password" v-model="ruleForm.password" auto-complete="off"></el-input>
                    </el-form-item>
                    <el-form-item>
                        <el-button type="primary" @click="submitForm('ruleForm')">提交</el-button>
                        <el-button @click="resetForm('ruleForm')">重置</el-button>
                    </el-form-item>
                </el-form>
            </el-tab-pane>

            <el-tab-pane label="注册">

                <el-form :model="ruleForm2" :rules="rules2" ref="ruleForm2" label-width="100px" class="demo-ruleForm">
                    <el-form-item label="姓名" prop="name">
                        <el-input v-model="ruleForm2.name"></el-input>
                    </el-form-item>
                    <el-form-item label="密码" prop="password">
                        <el-input type="password" v-model="ruleForm2.password" auto-complete="off"></el-input>
                    </el-form-item>
                    <el-form-item label="确认密码" prop="password_confirmation">
                        <el-input type="password" v-model="ruleForm2.password_confirmation" auto-complete="off"></el-input>
                    </el-form-item>
                    <el-form-item>
                        <el-button type="primary" @click="submitForm('ruleForm2')">提交</el-button>
                        <el-button @click="resetForm('ruleForm2')">重置</el-button>
                    </el-form-item>
                </el-form>

            </el-tab-pane>

        </el-tabs>




    </div>
</template>
<script>
    export default {
        data() {
            var validatePass = (rule, value, callback) => {
                if (value === '') {
                    callback(new Error('请输入密码'));
                } else {
                    if (this.ruleForm2.password_confirmation !== '') {
                        this.$refs.ruleForm2.validateField('password_confirmation');
                    }
                    callback();
                }
            };
            var validatePass2 = (rule, value, callback) => {
                if (value === '') {
                    callback(new Error('请再次输入密码'));
                } else if (value !== this.ruleForm2.password) {
                    callback(new Error('两次输入密码不一致!'));
                } else {
                    callback();
                }
            };
            return {
                ruleForm2: {
                    name: '',
                    password: '',
                    password_confirmation: '',
                },
                ruleForm: {
                    name: '',
                    password: ''
                },
                rules: {
                    password: [
                        { validator: validatePass, trigger: 'blur' }
                    ]
                },
                rules2: {
                    password: [
                        { validator: validatePass, trigger: 'blur' }
                    ],
                    password_confirmation: [
                        { validator: validatePass2, trigger: 'blur' }
                    ],
                }
            };
        },
        methods: {
            submitForm(formName) {
                this.$refs[formName].validate((valid) => {
                    if (valid) {
                        //登录/注册
                        if (formName == 'ruleForm2'){
                            var action = 'register';
                        }else{
                            var action = 'login';
                        }

                        this.$refs[formName].model._token = $("#token").attr("content");



                        this.$http.post(action,this.$refs[formName].model).then(
                                (response) => {
                                    console.log(response.body);
//                    this.page = response.body
//                            this.message = response.body.data
//                        this.total = response.body.total;

                        });

                    } else {
                        this.$message('请填写完整');
                        return false;
                    }
            });
            },
            resetForm(formName) {
                this.$refs[formName].resetFields();
            }
        }
    }
</script>