@extends('layouts.app')

@section('content')
    <div id="main">
        <div class="wrapper clearfix">
            <div id="posts-list">
                @if (count($errors) > 0)
                    <div>用户名或密码错误</div>
                @endif

                <form method="post" action="/login">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    用户名：<input type="text" name="name" >
                    <br>
                    密码：<input type="password" name="password" >
                    <br>
                    <button type="submit">提交</button>
                </form>

            </div>

        </div>
@endsection
