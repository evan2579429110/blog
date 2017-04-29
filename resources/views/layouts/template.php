<!doctype html>
<html class="no-js">

<head>
    <meta charset="utf-8"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Evan</title>

    <link rel="stylesheet" media="all" href="{{asset('css/style.css')}}"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <!-- Adding "maximum-scale=1" fixes the Mobile Safari auto-zoom bug: http://filamentgroup.com/examples/iosScaleBug/ -->


    <!-- JS -->
    <script src="{{asset('js/jquery-1.6.4.min.js')}}"></script>
    <script src="{{asset('js/css3-mediaqueries.js')}}"></script>
    <script src="{{asset('js/custom.js')}}"></script>
    <script src="{{asset('js/tabs.js')}}"></script>

    <!-- Tweet -->
    <link rel="stylesheet" href="{{asset('css/jquery.tweet.css')}}" media="all"  />
    <script src="{{asset('js/tweet/jquery.tweet.js')}}" ></script>
    <!-- ENDS Tweet -->

    <!-- superfish -->
    <link rel="stylesheet" media="screen" href="{{asset('css/superfish.css')}}" />
    <script  src="{{asset('js/superfish-1.4.8/js/hoverIntent.js')}}"></script>
    <script  src="{{asset('js/superfish-1.4.8/js/superfish.js')}}"></script>
    <script  src="{{asset('js/superfish-1.4.8/js/supersubs.js')}}"></script>
    <!-- ENDS superfish -->

    <!-- prettyPhoto -->
    <script  src="{{asset('js/prettyPhoto/js/jquery.prettyPhoto.js')}}"></script>
    <link rel="stylesheet" href="{{asset('js/prettyPhoto/css/prettyPhoto.css')}}"  media="screen" />
    <!-- ENDS prettyPhoto -->

    <!-- poshytip -->
    <link rel="stylesheet" href="{{asset('js/poshytip-1.1/src/tip-twitter/tip-twitter.css')}}"  />
    <link rel="stylesheet" href="{{asset('js/poshytip-1.1/src/tip-yellowsimple/tip-yellowsimple.css')}}"  />
    <script  src="{{asset('js/poshytip-1.1/src/jquery.poshytip.min.js')}}"></script>
    <!-- ENDS poshytip -->

    <!-- GOOGLE FONTS -->
    <link href="{{asset('css/fonts.css')}}" rel='stylesheet' type='text/css'>

    <!-- Flex Slider -->
    <link rel="stylesheet" href="{{asset('css/flexslider.css')}}" >
    <script src="{{asset('js/jquery.flexslider-min.js')}}"></script>
    <!-- ENDS Flex Slider -->

    <!-- Less framework -->
    <link rel="stylesheet" media="all" href="{{asset('css/lessframework.css')}}"/>

    <!-- modernizr -->
    <script src="{{asset('js/modernizr.js')}}"></script>

    <!-- SKIN -->
    <link rel="stylesheet" media="all" href="{{asset('css/skin.css')}}"/>

    @yield('include')

</head>

<body lang="en">



<header class="clearfix">

    <!-- top widget -->
    <div id="top-widget-holder">
        <div class="wrapper">
            <div id="top-widget">
                <div class="padding">
                    <ul  class="widget-cols clearfix">
                        <li class="first-col">

                            <div class="widget-block">
                                <h4>Recent posts</h4>
                                <div class="recent-post">
                                    <a href="#" class="thumb"><img src="img/dummies/54x54.gif" alt="Post" /></a>
                                    <div class="post-head">
                                        <a href="#">Pellentesque habitant morbi senectus</a><span> March 12, 2011</span>
                                    </div>
                                </div>
                                <div class="recent-post">
                                    <a href="#" class="thumb"><img src="img/dummies/54x54.gif" alt="Post" /></a>
                                    <div class="post-head">
                                        <a href="#">Pellentesque habitant morbi senectus</a><span> March 12, 2011</span>
                                    </div>
                                </div>
                                <div class="recent-post">
                                    <a href="#" class="thumb"><img src="img/dummies/54x54.gif" alt="Post" /></a>
                                    <div class="post-head">
                                        <a href="#">Pellentesque habitant morbi senectus</a><span> March 12, 2011</span>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li class="second-col">

                            <div class="widget-block">
                                <h4>Dummy text</h4>
                                <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies ege. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
                                <p>Pellentesque habitant morbi tristique senectus et netus et malesuada.</p>
                            </div>

                        </li>

                        <li class="third-col">

                            <div class="widget-block">
                                <h4>Dummy text</h4>
                                <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies ege. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
                                <p>Pellentesque habitant morbi tristique senectus et netus et malesuada.</p>
                            </div>

                        </li>

                        <li class="fourth-col">

                            <div class="widget-block">
                                <h4>Dummy text</h4>
                                <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies ege. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
                                <p>Pellentesque habitant morbi tristique senectus et netus et malesuada.</p>
                            </div>

                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <a href="#" id="top-open">Menu</a>
    </div>
    <!-- ENDS top-widget -->

    <div class="wrapper clearfix">

        <a href="index.html" id="logo"><img  src="ss" alt=""></a>

        <nav>
            <ul id="nav" class="sf-menu">
                <li class="current-menu-item"><a href="{{url('/')}}">HOME</a></li>
                <li><a href="{{url('blog')}}">BLOG</a></li>
                <li><a href="page.html">ABOUT</a>
                    <ul>
                        <li><a href="#">Submenu</a></li>
                        <li><a href="#">Submenu</a></li>
                        <li><a href="#">Submenu</a></li>

                    </ul>
                </li>
                <li><a href="portfolio.html">WORK</a></li>
                <li><a href="contact.html">CONTACT</a></li>
                <li><a href="http://luiszuno.com/blog/downloads/zeni-html">DOWNLOAD IT!</a></li>
            </ul>
            <div id="combo-holder"></div>
        </nav>
    </div>
</header>


@yield('content')


<footer>
    <div class="wrapper">

        <ul  class="widget-cols clearfix">
            <li class="first-col">

                <div class="widget-block">
                    <h4>Recent posts</h4>
                    <div class="recent-post">
                        <a href="#" class="thumb"><img src="img/dummies/54x54.gif" alt="Post" /></a>
                        <div class="post-head">
                            <a href="#">Pellentesque habitant morbi senectus</a><span> March 12, 2011</span>
                        </div>
                    </div>
                    <div class="recent-post">
                        <a href="#" class="thumb"><img src="img/dummies/54x54.gif" alt="Post" /></a>
                        <div class="post-head">
                            <a href="#">Pellentesque habitant morbi senectus</a><span> March 12, 2011</span>
                        </div>
                    </div>
                    <div class="recent-post">
                        <a href="#" class="thumb"><img src="img/dummies/54x54.gif" alt="Post" /></a>
                        <div class="post-head">
                            <a href="#">Pellentesque habitant morbi senectus</a><span> March 12, 2011</span>
                        </div>
                    </div>
                </div>
            </li>

            <li class="second-col">

                <div class="widget-block">
                    <h4>Zeni Template</h4>
                    <p>Hope you find this template useful you are free to use it on personal and commercial projects. See the full license at this <a href="http://luiszuno.com/blog/license" >link</a></p>
                </div>

            </li>

            <li class="third-col">

                <div class="widget-block">
                    <div id="tweets" class="footer-col tweet">
                        <h4>Twitter widget</h4>
                    </div>
                </div>

            </li>

            <li class="fourth-col">

                <div class="widget-block">
                    <h4>Placeholder images</h4>
                    <p>Thanks to <a href="http://www.thebeaststudio.com/" >Moe Pike</a> for sharing his work as place holder images for this preview. Visit his <a href="http://www.thebeaststudio.com/" >website</a> and find more of his awesome work.</p>
                </div>

            </li>
        </ul>


        <div class="footer-bottom">
            <div class="left">Created by <a href="http://www.luiszuno.com" >luiszuno.com</a></div>
            <div class="right">
                <ul id="social-bar">
                    <li><a href="http://www.facebook.com"  title="Become a fan" class="poshytip"><img src="img/social/facebook.png"  alt="Facebook" /></a></li>
                    <li><a href="http://www.twitter.com" title="Follow my tweets" class="poshytip"><img src="img/social/twitter.png"  alt="twitter" /></a></li>
                    <li><a href="http://www.google.com"  title="Add to the circle" class="poshytip"><img src="img/social/plus.png" alt="Google plus" /></a></li>
                </ul>
            </div>
        </div>

    </div>
</footer>

</body>

</html>