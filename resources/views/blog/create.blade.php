@extends('layouts.app')

@section('include')
    <script type="text/javascript" charset="utf-8" src="{{asset('ueditor/ueditor.config.js')}}"></script>
    <script type="text/javascript" charset="utf-8" src="{{asset('ueditor/ueditor.all.min.js')}}"> </script>
    <!--建议手动加在语言，避免在ie下有时因为加载语言失败导致编辑器加载失败-->
    <!--这里加载的语言文件会覆盖你在配置项目里添加的语言类型，比如你在配置项目里配置的是英文，这里加载的中文，那最后就是中文-->
    {{--<script type="text/javascript" charset="utf-8" src="lang/zh-cn/zh-cn.js"></script>--}}
    <script type="text/javascript" charset="utf-8" src="{{asset('evan/js/create.js')}}"> </script>

@endsection
@section('content')
    <!-- MAIN -->
    <div id="main">
        <div class="wrapper clearfix">
            <div id="posts-list">
                <form id="create_blog">
                    <input type="hidden" name="id" value="@if(!empty($article['id'])){{$article['id']}}@endif">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    标题：<input type="text" name="title" value="@if(!empty($article['title'])){{$article['title']}}@endif">
                    <br>
                        分类:
                        <select name="type">
                            <option value="1">全部</option>
                        </select>
                    <br>
                        内容：
                    <script id="container" name="content" type="text/plain">@if(empty($article))这里写你的初始化内容@else{!! $article['content']!!}@endif</script>
                    {{--<textarea name="content" id="" cols="30" rows="10">--}}


                        {{--</textarea>--}}
                    <button type="submit">提交</button>
                </form>

            </div>

    </div>

        <script type="text/javascript">
            var ue = UE.getEditor('container');
        </script>
@endsection