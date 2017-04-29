<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf_token" id="token" content="{{ csrf_token() }}">
    <title>evan</title>
</head>
<script>
    window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
</script>
{{Auth::user()}}
<!-- 引入样式 -->
{{--<link rel="stylesheet" href="//unpkg.com/iview/dist/styles/iview.css">--}}
{{--<!-- 引入组件库 -->--}}
{{--<script src="//unpkg.com/iview/dist/iview.min.js"></script>--}}
<body>

<p>
    <!-- 使用 router-link 组件来导航. -->
    <!-- 通过传入 `to` 属性指定链接. -->
    <!-- <router-link> 默认会被渲染成一个 `<a>` 标签 -->
    {{--<router-link to="/">Home</router-link>--}}
    {{--<router-link to="/blog">Blog</router-link>--}}
</p>
@yield('content')




