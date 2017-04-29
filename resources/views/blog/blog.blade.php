@extends('layouts.app')

@section('content')
    <!-- MAIN -->
    <div id="main">
        <div class="wrapper clearfix">
            <!-- posts list -->
            <div id="posts-list">

                <h2 class="page-heading"><span>BLOG</span></h2>


                    @foreach($article as $key=>$val)
                    <article class="format-standard">

                    <a href="{{url('blog/'.$val->id)}}">
                        <div class="entry-date">
                            <div class="number">{{$val->updated_at->format('d')}}</div>
                            <div class="year">{{$val->updated_at->format('Y-m')}}</div>
                        </div>
                        {{--@if(!empty($val->images))--}}
                        {{--<div class="feature-image">--}}
                            {{--<a href="#" data-rel="prettyPhoto"><img src="{{$val->images}}" alt="Alt text" /></a>--}}
                        {{--</div>--}}
                        {{--@endif--}}
                        <h2  class="post-heading">{{$val->title}}</h2>
                        <div class="excerpt" style="overflow: hidden;height: 20px;width: 100%;">
                            {!! $val->content!!}
                        </div>
                    </a>

                        <a href="#" class="read-more">continue &#8594;</a>
                        <div class="meta">
                            <div class="categories">In {{$val->type}}</div>
                            <div class="comments"><a href="#">5 comments </a></div>
                        </div>
                    </article>

            @endforeach


                <!-- page-navigation -->
                <div class="page-navigation clearfix">
                    <div class="nav-next">
                        <a  href="{{url('blog/create')}}">Add Blog </a>
                    </div>
                    <div class="nav-previous">
                        <a href="#">Newer Entries &#8594;</a>
                    </div>
                    <!--ENDS page-navigation -->

                </div>


            </div>
            <!-- ENDS posts list -->

            <!-- sidebar -->
            <aside id="sidebar">

                <ul>
                    <li class="block">
                        <h4>CATEGORIES</h4>
                        <ul>
                            <li class="cat-item"><a href="#" title="View all posts">Film and video</a></li>
                            <li class="cat-item"><a href="#" title="View all posts">Print</a></li>
                            <li class="cat-item"><a href="#" title="View all posts">Photo and lomo</a></li>
                            <li class="cat-item"><a href="#" title="View all posts">Habitant morbi</a></li>
                            <li class="cat-item"><a href="#" title="View all posts">Film and video</a></li>
                            <li class="cat-item"><a href="#" title="View all posts">Print</a></li>
                            <li class="cat-item"><a href="#" title="View all posts">Photo and lomo</a></li>
                            <li class="cat-item"><a href="#" title="View all posts">Habitant morbi</a></li>
                        </ul>
                    </li>

                    <li class="block">
                        <h4>ARCHIVES</h4>
                        <ul>
                            <li class="cat-item"><a href="#" title="View all posts">January</a></li>
                            <li class="cat-item"><a href="#" title="View all posts">February</a></li>
                            <li class="cat-item"><a href="#" title="View all posts">March</a></li>
                        </ul>
                    </li>

                </ul>

                <em id="corner"></em>
            </aside>
            <!-- ENDS sidebar -->

        </div>
    </div>
    <!-- ENDS MAIN -->
@endsection
