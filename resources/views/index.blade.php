@extends('layouts.app')

@section('content')
<div id="app">
    <router-link to="/">Home</router-link>
    <router-link to="/blog">Blog</router-link>

    {{--<div class="line"></div>--}}
    {{--<el-menu :default-active="activeIndex2" class="el-menu-demo" mode="horizontal" @select="handleSelect">--}}
    {{--<el-menu-item index="1" to="/">Home</el-menu-item>--}}
    {{--<el-menu-item index="1" to="/blog">Blog</el-menu-item>--}}
    {{--<el-submenu index="2">--}}
        {{--<template slot="title">我的工作台</template>--}}
        {{--<el-menu-item index="2-1">选项1</el-menu-item>--}}
        {{--<el-menu-item index="2-2">选项2</el-menu-item>--}}
        {{--<el-menu-item index="2-3">选项3</el-menu-item>--}}
    {{--</el-submenu>--}}
    {{--<el-menu-item index="3" ><a href="https://www.ele.me" target="_blank">订单管理</a></el-menu-item>--}}
    {{--</el-menu>--}}

    <!-- 路由出口 -->
    <!-- 路由匹配到的组件将渲染在这里 -->
    <router-view></router-view>

    {{--<router-link to="/foo">go to foo</router-link>--}}
    {{--<router-link to="/bar">go to bar</router-link>--}}
    {{--<router-view></router-view>--}}
</div>
<script src="{{asset('js/app.js')}}"></script>

@endsection
