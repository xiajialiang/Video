<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>
    <!-- Basic Page Needs
  ================================================== -->
    <meta charset="utf-8">
    <title>电影天地</title>
    <meta name="description" content="Free Responsive Html5 Css3 Templates | zerotheme.com">
    <meta name="author" content="xiabo">

    <!-- Mobile Specific Metas
  ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- CSS
  ================================================== -->
    @yield('css')
    <link rel="stylesheet" href="{{asset('')}}css/zerogrid.css">
    <link rel="stylesheet" href="{{asset('')}}css/style.css">
    <link rel="stylesheet" href="{{asset('')}}css/menu.css">

    <!-- Owl Carousel Assets -->
    <link href="{{asset('')}}css/owl.carousel.css" rel="stylesheet">
    <link href="{{asset('')}}css/owl.theme.css" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="{{asset('')}}font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">

    <!--[if lt IE 9]>
    <script src="{{asset('')}}js/html5.js"></script>
    <script src="{{asset('')}}js/css3-mediaqueries.js"></script>
    <![endif]-->

</head>
<body id="wrapper" >
<div class="wrap-body">

    <!--////////////////////////////////////Header-->
    <header>
        <div class="wrap-header">
            <div class="zerogrid">
                <div class="row">
                    <a href="{{url('/')}}" class="logo"><img src="{{asset('')}}images/logo.png" /></a>
                    <ul class="quick-link">

                        @if(session('user')!=null)
                            <li><a href="#" title="Upload Video"><i class="fa fa-upload"></i></a></li>
                            <li><a href="javascript:void (0)" id="username">{{session('user')}}</a></li>
                            {{--<li><a href="javascript:void (0)" id="checkOut">退出</a></li>--}}
                            <li><a href="javascript:void (0)" id="checkOut" class="glyphicon glyphicon-off" aria-hidden="true"></a></li>
                        @else
                            <li><a href="{{ route('login') }}" title="Log in"><i class="fa fa-user"></i></a></li>

                        @endif
                        {{--<li><a href="#" title="Warning"><i class="fa fa-bell"></i></a></li>--}}
                    </ul>
                    {{--第三方登录图标--}}
                    {{--<ul class="social">--}}
                        {{--<li><a href="#"><i class="fa fa-twitter"></i></a></li>--}}
                        {{--<li><a href="#"><i class="fa fa-facebook"></i></a></li>--}}
                        {{--<li><a href="#"><i class="fa fa-google-plus"></i></a></li>--}}
                        {{--<li><a href="#"><i class="fa fa-linkedin"></i></a></li>--}}
                        {{--<li><a href="#"><i class="fa fa-instagram"></i></a></li>--}}
                    {{--</ul>--}}
                </div>
            </div>
        </div>
    </header>

    <!--////////////////////////////////////Menu-->
    {{--<a href="#" class="nav-toggle">Toggle Navigation</a>--}}
    <nav class="cmn-tile-nav">
        <ul class="clearfix">
            @foreach($category as $item)
                <li class="colour-{{$item->id}}">
                    <a href="{{url('gallery/'.$item->id)}}">
                        {{$item->category}}
                    </a>
                </li>
            @endforeach
        </ul>
    </nav>
    <!--////////////////////////////////////Container-->
    <section id="container" class="index-page">
        <div class="wrap-container zerogrid">
            <!------------------------------------->
            @yield('container')
        </div>
    </section>

    <!--////////////////////////////////////Footer-->
    <footer>
        <div class="zerogrid copyright">
            <div class="wrapper">
                Copyright 2015 - More Templates <a href="" target="_blank" title="模板之家">夏博视频</a> - Collect from <a href="" title="网页模板" target="_blank">夏博</a>
                <ul class="quick-link f-right">
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Terms of Use</a></li>
                </ul>
            </div>
        </div>
    </footer>
</div>
<script src="{{asset('')}}js/jquery-2.1.1.js"></script>
<script src="{{asset('')}}js/demo.js"></script>
<script src="{{asset('')}}js/classie.js"></script>
<script src="{{asset('')}}js/search.js"></script>

<!-- Carousel -->
<script src="{{asset('')}}js/owl.carousel.js"></script>
<script>
    $(document).ready(function() {

        $("#owl-demo-1").owlCarousel({
            items : 4,
            lazyLoad : true,
            navigation : true
        });
        $("#owl-demo-2").owlCarousel({
            items : 4,
            lazyLoad : true,
            navigation : true
        });
        $("#owl-demo-3").owlCarousel({
            items : 4,
            lazyLoad : true,
            navigation : true
        });
    });
</script>
@yield('search-js')
</body>

</html>