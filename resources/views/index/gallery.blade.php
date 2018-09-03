@extends('layouts.blank')
@section('container')
    <div class="row">
        <div id="main-content" class="col-2-3">
            <section class="all">
                <div class="header">
                    <h2>所有视频</h2>
                </div>
                <div class="row">

                    @foreach($video as $item)
                        <div class="col-1-4">
                            <div class="wrap-col">
                                <div class="wrap-vid">
                                    <div class="zoom-container">
                                        <a href="{{url('single/'.$item->id)}}">
												<span class="zoom-caption">
													<i class="icon-play fa fa-play"></i>
												</span>
                                            <img src="{{asset('')}}images/1.jpg" />
                                        </a>
                                    </div>
                                    <h3 class="vid-name"><a href="#">{{$item->title}}</a></h3>
                                    <div class="info">
                                        <h5>By <a href="#">{{$item->authorid}}</a></h5>
                                        <span><i class="fa fa-calendar"></i>{{date('Y-m-d',$item->created_at)}}</span>
                                        <span><i class="fa fa-heart"></i>{{$item->like}}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    <div class="col-1-4">
                        <div class="wrap-col">
                            <div class="wrap-vid">
                                <div class="zoom-container">
                                    <a href="single.html">
												<span class="zoom-caption">
													<i class="icon-play fa fa-play"></i>
												</span>
                                        <img src="{{asset('')}}images/2.jpg" />
                                    </a>
                                </div>
                                <h3 class="vid-name"><a href="#">Video's Name</a></h3>
                                <div class="info">
                                    <h5>By <a href="#">Kelvin</a></h5>
                                    <span><i class="fa fa-calendar"></i>25/3/2015</span>
                                    <span><i class="fa fa-heart"></i>1,200</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-1-4">
                        <div class="wrap-col">
                            <div class="wrap-vid">
                                <div class="zoom-container">
                                    <a href="single.html">
												<span class="zoom-caption">
													<i class="icon-play fa fa-play"></i>
												</span>
                                        <img src="{{asset('')}}images/3.jpg" />
                                    </a>
                                </div>
                                <h3 class="vid-name"><a href="#">Video's Name</a></h3>
                                <div class="info">
                                    <h5>By <a href="#">Kelvin</a></h5>
                                    <span><i class="fa fa-calendar"></i>25/3/2015</span>
                                    <span><i class="fa fa-heart"></i>1,200</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-1-4">
                        <div class="wrap-col">
                            <div class="wrap-vid">
                                <div class="zoom-container">
                                    <a href="single.html">
												<span class="zoom-caption">
													<i class="icon-play fa fa-play"></i>
												</span>
                                        <img src="{{asset('')}}images/4.jpg" />
                                    </a>
                                </div>
                                <h3 class="vid-name"><a href="#">Video's Name</a></h3>
                                <div class="info">
                                    <h5>By <a href="#">Kelvin</a></h5>
                                    <span><i class="fa fa-calendar"></i>25/3/2015</span>
                                    <span><i class="fa fa-heart"></i>1,200</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-1-4">
                        <div class="wrap-col">
                            <div class="wrap-vid">
                                <div class="zoom-container">
                                    <a href="single.html">
												<span class="zoom-caption">
													<i class="icon-play fa fa-play"></i>
												</span>
                                        <img src="{{asset('')}}images/5.jpg" />
                                    </a>
                                </div>
                                <h3 class="vid-name"><a href="#">Video's Name</a></h3>
                                <div class="info">
                                    <h5>By <a href="#">Kelvin</a></h5>
                                    <span><i class="fa fa-calendar"></i>25/3/2015</span>
                                    <span><i class="fa fa-heart"></i>1,200</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-1-4">
                        <div class="wrap-col">
                            <div class="wrap-vid">
                                <div class="zoom-container">
                                    <a href="single.html">
												<span class="zoom-caption">
													<i class="icon-play fa fa-play"></i>
												</span>
                                        <img src="{{asset('')}}images/14.jpg" />
                                    </a>
                                </div>
                                <h3 class="vid-name"><a href="#">Video's Name</a></h3>
                                <div class="info">
                                    <h5>By <a href="#">Kelvin</a></h5>
                                    <span><i class="fa fa-calendar"></i>25/3/2015</span>
                                    <span><i class="fa fa-heart"></i>1,200</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-1-4">
                        <div class="wrap-col">
                            <div class="wrap-vid">
                                <div class="zoom-container">
                                    <a href="single.html">
												<span class="zoom-caption">
													<i class="icon-play fa fa-play"></i>
												</span>
                                        <img src="{{asset('')}}images/1.jpg" />
                                    </a>
                                </div>
                                <h3 class="vid-name"><a href="#">Video's Name</a></h3>
                                <div class="info">
                                    <h5>By <a href="#">Kelvin</a></h5>
                                    <span><i class="fa fa-calendar"></i>25/3/2015</span>
                                    <span><i class="fa fa-heart"></i>1,200</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-1-4">
                        <div class="wrap-col">
                            <div class="wrap-vid">
                                <div class="zoom-container">
                                    <a href="single.html">
												<span class="zoom-caption">
													<i class="icon-play fa fa-play"></i>
												</span>
                                        <img src="{{asset('')}}images/2.jpg" />
                                    </a>
                                </div>
                                <h3 class="vid-name"><a href="#">Video's Name</a></h3>
                                <div class="info">
                                    <h5>By <a href="#">Kelvin</a></h5>
                                    <span><i class="fa fa-calendar"></i>25/3/2015</span>
                                    <span><i class="fa fa-heart"></i>1,200</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-1-4">
                        <div class="wrap-col">
                            <div class="wrap-vid">
                                <div class="zoom-container">
                                    <a href="single.html">
												<span class="zoom-caption">
													<i class="icon-play fa fa-play"></i>
												</span>
                                        <img src="{{asset('')}}images/3.jpg" />
                                    </a>
                                </div>
                                <h3 class="vid-name"><a href="#">Video's Name</a></h3>
                                <div class="info">
                                    <h5>By <a href="#">Kelvin</a></h5>
                                    <span><i class="fa fa-calendar"></i>25/3/2015</span>
                                    <span><i class="fa fa-heart"></i>1,200</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-1-4">
                        <div class="wrap-col">
                            <div class="wrap-vid">
                                <div class="zoom-container">
                                    <a href="single.html">
												<span class="zoom-caption">
													<i class="icon-play fa fa-play"></i>
												</span>
                                        <img src="{{asset('')}}images/4.jpg" />
                                    </a>
                                </div>
                                <h3 class="vid-name"><a href="#">Video's Name</a></h3>
                                <div class="info">
                                    <h5>By <a href="#">Kelvin</a></h5>
                                    <span><i class="fa fa-calendar"></i>25/3/2015</span>
                                    <span><i class="fa fa-heart"></i>1,200</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-1-4">
                        <div class="wrap-col">
                            <div class="wrap-vid">
                                <div class="zoom-container">
                                    <a href="single.html">
												<span class="zoom-caption">
													<i class="icon-play fa fa-play"></i>
												</span>
                                        <img src="{{asset('')}}images/5.jpg" />
                                    </a>
                                </div>
                                <h3 class="vid-name"><a href="#">Video's Name</a></h3>
                                <div class="info">
                                    <h5>By <a href="#">Kelvin</a></h5>
                                    <span><i class="fa fa-calendar"></i>25/3/2015</span>
                                    <span><i class="fa fa-heart"></i>1,200</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-1-4">
                        <div class="wrap-col">
                            <div class="wrap-vid">
                                <div class="zoom-container">
                                    <a href="single.html">
												<span class="zoom-caption">
													<i class="icon-play fa fa-play"></i>
												</span>
                                        <img src="{{asset('')}}images/14.jpg" />
                                    </a>
                                </div>
                                <h3 class="vid-name"><a href="#">Video's Name</a></h3>
                                <div class="info">
                                    <h5>By <a href="#">Kelvin</a></h5>
                                    <span><i class="fa fa-calendar"></i>25/3/2015</span>
                                    <span><i class="fa fa-heart"></i>1,200</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-1-4">
                        <div class="wrap-col">
                            <div class="wrap-vid">
                                <div class="zoom-container">
                                    <a href="single.html">
												<span class="zoom-caption">
													<i class="icon-play fa fa-play"></i>
												</span>
                                        <img src="{{asset('')}}images/1.jpg" />
                                    </a>
                                </div>
                                <h3 class="vid-name"><a href="#">Video's Name</a></h3>
                                <div class="info">
                                    <h5>By <a href="#">Kelvin</a></h5>
                                    <span><i class="fa fa-calendar"></i>25/3/2015</span>
                                    <span><i class="fa fa-heart"></i>1,200</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-1-4">
                        <div class="wrap-col">
                            <div class="wrap-vid">
                                <div class="zoom-container">
                                    <a href="single.html">
												<span class="zoom-caption">
													<i class="icon-play fa fa-play"></i>
												</span>
                                        <img src="{{asset('')}}images/2.jpg" />
                                    </a>
                                </div>
                                <h3 class="vid-name"><a href="#">Video's Name</a></h3>
                                <div class="info">
                                    <h5>By <a href="#">Kelvin</a></h5>
                                    <span><i class="fa fa-calendar"></i>25/3/2015</span>
                                    <span><i class="fa fa-heart"></i>1,200</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-1-4">
                        <div class="wrap-col">
                            <div class="wrap-vid">
                                <div class="zoom-container">
                                    <a href="single.html">
												<span class="zoom-caption">
													<i class="icon-play fa fa-play"></i>
												</span>
                                        <img src="{{asset('')}}images/3.jpg" />
                                    </a>
                                </div>
                                <h3 class="vid-name"><a href="#">Video's Name</a></h3>
                                <div class="info">
                                    <h5>By <a href="#">Kelvin</a></h5>
                                    <span><i class="fa fa-calendar"></i>25/3/2015</span>
                                    <span><i class="fa fa-heart"></i>1,200</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-1-4">
                        <div class="wrap-col">
                            <div class="wrap-vid">
                                <div class="zoom-container">
                                    <a href="single.html">
												<span class="zoom-caption">
													<i class="icon-play fa fa-play"></i>
												</span>
                                        <img src="{{asset('')}}images/4.jpg" />
                                    </a>
                                </div>
                                <h3 class="vid-name"><a href="#">Video's Name</a></h3>
                                <div class="info">
                                    <h5>By <a href="#">Kelvin</a></h5>
                                    <span><i class="fa fa-calendar"></i>25/3/2015</span>
                                    <span><i class="fa fa-heart"></i>1,200</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            {{--页码--}}
            <div class="navigation">
                <ul>
                    <li><a href="#"><</a></li>
                    <li><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">></a></li>
                </ul>
            </div>
        </div>
        <div id="sidebar" class="col-1-3">
            <form id="form-container" action="">
                <!--<input type="submit" id="searchsubmit" value="" />-->
                <a class="search-submit-button" href="javascript:void(0)">
                    <i class="fa fa-search"></i>
                </a>
                <div id="searchtext">
                    <input type="text" id="s" name="s" placeholder="Search Something...">
                </div>
            </form>
            <!---- Start Widget ---->
            <div class="widget wid-post">
                <div class="wid-header">
                    <h5>Latest Posts</h5>
                </div>
                <div class="wid-content">
                    <div class="post wrap-vid">
                        <div class="zoom-container">
                            <a href="single.html">
										<span class="zoom-caption">
											<i class="icon-play fa fa-play"></i>
										</span>
                                <img src="{{asset('')}}images/4.jpg" />
                            </a>
                        </div>
                        <div class="wrapper">
                            <h5 class="vid-name"><a href="#">Video's Name</a></h5>
                            <div class="info">
                                <h6>By <a href="#">Kelvin</a></h6>
                                <span><i class="fa fa-calendar"></i>25/3/2015</span>
                                <span><i class="fa fa-heart"></i>1,200</span>
                            </div>
                        </div>
                    </div>
                    <div class="post wrap-vid">
                        <div class="zoom-container">
                            <a href="single.html">
										<span class="zoom-caption">
											<i class="icon-play fa fa-play"></i>
										</span>
                                <img src="{{asset('')}}images/14.jpg" />
                            </a>
                        </div>
                        <div class="wrapper">
                            <h5 class="vid-name"><a href="#">Video's Name</a></h5>
                            <div class="info">
                                <h6>By <a href="#">Kelvin</a></h6>
                                <span><i class="fa fa-calendar"></i>25/3/2015</span>
                                <span><i class="fa fa-heart"></i>1,200</span>
                            </div>
                        </div>
                    </div>
                    <div class="post wrap-vid">
                        <div class="zoom-container">
                            <a href="single.html">
										<span class="zoom-caption">
											<i class="icon-play fa fa-play"></i>
										</span>
                                <img src="{{asset('')}}images/3.jpg" />
                            </a>
                        </div>
                        <div class="wrapper">
                            <h5 class="vid-name"><a href="#">Video's Name</a></h5>
                            <div class="info">
                                <h6>By <a href="#">Kelvin</a></h6>
                                <span><i class="fa fa-calendar"></i>25/3/2015</span>
                                <span><i class="fa fa-heart"></i>1,200</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!---- Start Widget ---->
            <div class="widget wid-news">
                <div class="wid-header">
                    <h5>最热视频</h5>
                </div>
                <div class="wid-content">
                    @foreach($tops as $top)
                        <div class="row">
                            <div class="wrap-vid">
                                <div class="zoom-container">
                                    <a href="single.html">
											<span class="zoom-caption">
												<i class="icon-play fa fa-play"></i>
											</span>
                                        <img src="{{asset('')}}images/1.jpg" />
                                    </a>
                                </div>
                                <h3 class="vid-name">{{$top->title}}</h3>
                                <div class="info">
                                    <h5>By <a href="#">Kelvin</a></h5>
                                    <span><i class="fa fa-calendar"></i>{{date('Y-m-d',$top->created_at)}}</span>
                                    <span><i class="fa fa-heart"></i>{{$top->like}}</span>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    {{--<div class="row">--}}
                        {{--<div class="wrap-vid">--}}
                            {{--<div class="zoom-container">--}}
                                {{--<a href="single.html">--}}
											{{--<span class="zoom-caption">--}}
												{{--<i class="icon-play fa fa-play"></i>--}}
											{{--</span>--}}
                                    {{--<img src="{{asset('')}}images/1.jpg" />--}}
                                {{--</a>--}}
                            {{--</div>--}}
                            {{--<h3 class="vid-name">Video's Name</h3>--}}
                            {{--<div class="info">--}}
                                {{--<h5>By <a href="#">Kelvin</a></h5>--}}
                                {{--<span><i class="fa fa-calendar"></i>25/3/2015</span>--}}
                                {{--<span><i class="fa fa-heart"></i>1,200</span>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="row">--}}
                        {{--<div class="wrap-vid">--}}
                            {{--<div class="zoom-container">--}}
                                {{--<a href="single.html">--}}
											{{--<span class="zoom-caption">--}}
												{{--<i class="icon-play fa fa-play"></i>--}}
											{{--</span>--}}
                                    {{--<img src="{{asset('')}}images/2.jpg" />--}}
                                {{--</a>--}}
                            {{--</div>--}}
                            {{--<h3 class="vid-name">Video's Name</h3>--}}
                            {{--<div class="info">--}}
                                {{--<h5>By <a href="#">Kelvin</a></h5>--}}
                                {{--<span><i class="fa fa-calendar"></i>25/3/2015</span>--}}
                                {{--<span><i class="fa fa-heart"></i>1,200</span>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="row">--}}
                        {{--<div class="wrap-vid">--}}
                            {{--<div class="zoom-container">--}}
                                {{--<a href="single.html">--}}
											{{--<span class="zoom-caption">--}}
												{{--<i class="icon-play fa fa-play"></i>--}}
											{{--</span>--}}
                                    {{--<img src="{{asset('')}}images/4.jpg" />--}}
                                {{--</a>--}}
                            {{--</div>--}}
                            {{--<h3 class="vid-name">Video's Name</h3>--}}
                            {{--<div class="info">--}}
                                {{--<h5>By <a href="#">Kelvin</a></h5>--}}
                                {{--<span><i class="fa fa-calendar"></i>25/3/2015</span>--}}
                                {{--<span><i class="fa fa-heart"></i>1,200</span>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                </div>
            </div>
        </div>
    </div>
@endsection

@section('search-js')
    <script src="{{asset('')}}js/classie.js"></script>

    <script>
        new UISearch( document.getElementById( 'sb-search' ) );
    </script>
@endsection