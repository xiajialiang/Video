@extends('layouts.blank')
@section('container')
    <div class="row">
        <div class="header">
            <h2>最热视频</h2>
        </div>
        <div class="row">
            <div class="most-viewed">
                <div class="col-2-4">
                    <div class="wrap-col">
                        <div class="zoom-container">
                            <a href="{{url('single/1')}}">
									<span class="zoom-caption">
										<i class="icon-play fa fa-play"></i>
									</span>
                                <img src="images/4.jpg" />
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="extra">
                <div class="col-1-4">
                    <div class="wrap-col">
                        <div class="zoom-container">
                            <a href="{{url('single/1')}}">
									<span class="zoom-caption">
										<i class="icon-play fa fa-play"></i>
									</span>
                                <img src="images/1.jpg" />
                            </a>
                        </div>
                        <div class="zoom-container">
                            <a href="{{url('single/1')}}">
									<span class="zoom-caption">
										<i class="icon-play fa fa-play"></i>
									</span>
                                <img src="images/2.jpg" />
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-1-4">
                    <div class="wrap-col">
                        <div class="zoom-container">
                            <a href="{{url('single/1')}}">
									<span class="zoom-caption">
										<i class="icon-play fa fa-play"></i>
									</span>
                                <img src="images/5.jpg" />
                            </a>
                        </div>
                        <div class="zoom-container">
                            <a href="{{url('single/1')}}">
									<span class="zoom-caption">
										<i class="icon-play fa fa-play"></i>
									</span>
                                <img src="images/14.jpg" />
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div id="main-content" class="col-2-3">
            <div class="wrap-content">
                <section class="vid-tv">
                    <div class="header">
                        <h2>电视剧</h2>
                    </div>
                    <div class="row">
                        <div id="owl-demo-1" class="owl-carousel">
                            <div class="item wrap-vid">
                                <div class="zoom-container">
                                    <a href="{{url('single/1')}}">
												<span class="zoom-caption">
													<i class="icon-play fa fa-play"></i>
												</span>
                                        <img src="images/1.jpg" />
                                    </a>
                                </div>
                                <h3 class="vid-name"><a href="#">Video's Name</a></h3>
                                <div class="info">
                                    <h5>By <a href="#">Kelvin</a></h5>
                                    <span><i class="fa fa-calendar"></i>25/3/2015</span>
                                    <span><i class="fa fa-heart"></i>1,200</span>
                                </div>
                            </div>
                            <div class="item wrap-vid">
                                <div class="zoom-container">
                                    <a href="{{url('single/1')}}">
												<span class="zoom-caption">
													<i class="icon-play fa fa-play"></i>
												</span>
                                        <img src="images/2.jpg" />
                                    </a>
                                </div>
                                <h3 class="vid-name"><a href="#">Video's Name</a></h3>
                                <div class="info">
                                    <h5>By <a href="#">Kelvin</a></h5>
                                    <span><i class="fa fa-calendar"></i>25/3/2015</span>
                                    <span><i class="fa fa-heart"></i>1,200</span>
                                </div>
                            </div>
                            <div class="item wrap-vid">
                                <div class="zoom-container">
                                    <a href="{{url('single/1')}}">
												<span class="zoom-caption">
													<i class="icon-play fa fa-play"></i>
												</span>
                                        <img src="images/3.jpg" />
                                    </a>
                                </div>
                                <h3 class="vid-name"><a href="#">Video's Name</a></h3>
                                <div class="info">
                                    <h5>By <a href="#">Kelvin</a></h5>
                                    <span><i class="fa fa-calendar"></i>25/3/2015</span>
                                    <span><i class="fa fa-heart"></i>1,200</span>
                                </div>
                            </div>
                            <div class="item wrap-vid">
                                <div class="zoom-container">
                                    <a href="{{url('single/1')}}">
												<span class="zoom-caption">
													<i class="icon-play fa fa-play"></i>
												</span>
                                        <img src="images/4.jpg" />
                                    </a>
                                </div>
                                <h3 class="vid-name"><a href="#">Video's Name</a></h3>
                                <div class="info">
                                    <h5>By <a href="#">Kelvin</a></h5>
                                    <span><i class="fa fa-calendar"></i>25/3/2015</span>
                                    <span><i class="fa fa-heart"></i>1,200</span>
                                </div>
                            </div>
                            <div class="item wrap-vid">
                                <div class="zoom-container">
                                    <a href="{{url('single/1')}}">
												<span class="zoom-caption">
													<i class="icon-play fa fa-play"></i>
												</span>
                                        <img src="images/5.jpg" />
                                    </a>
                                </div>
                                <h3 class="vid-name"><a href="#">Video's Name</a></h3>
                                <div class="info">
                                    <h5>By <a href="#">Kelvin</a></h5>
                                    <span><i class="fa fa-calendar"></i>25/3/2015</span>
                                    <span><i class="fa fa-heart"></i>1,200</span>
                                </div>
                            </div>
                            <div class="item wrap-vid">
                                <div class="zoom-container">
                                    <a href="{{url('single/1')}}">
												<span class="zoom-caption">
													<i class="icon-play fa fa-play"></i>
												</span>
                                        <img src="images/14.jpg" />
                                    </a>
                                </div>
                                <h3 class="vid-name"><a href="#">Video's Name</a></h3>
                                <div class="info">
                                    <h5>By <a href="#">Kelvin</a></h5>
                                    <span><i class="fa fa-calendar"></i>25/3/2015</span>
                                    <span><i class="fa fa-heart"></i>1,200</span>
                                </div>
                            </div>
                            <div class="item wrap-vid">
                                <div class="zoom-container">
                                    <a href="{{url('single/1')}}">
												<span class="zoom-caption">
													<i class="icon-play fa fa-play"></i>
												</span>
                                        <img src="images/3.jpg" />
                                    </a>
                                </div>
                                <h3 class="vid-name"><a href="#">Video's Name</a></h3>
                                <div class="info">
                                    <h5>By <a href="#">Kelvin</a></h5>
                                    <span><i class="fa fa-calendar"></i>25/3/2015</span>
                                    <span><i class="fa fa-heart"></i>1,200</span>
                                </div>
                            </div>
                            <div class="item wrap-vid">
                                <div class="zoom-container">
                                    <a href="{{url('single/1')}}">
												<span class="zoom-caption">
													<i class="icon-play fa fa-play"></i>
												</span>
                                        <img src="images/5.jpg" />
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
                </section>

                <section class="vid-sport">
                    <div class="header">
                        <h2>体育</h2>
                    </div>
                    <div class="row"><!--Start Box-->
                        <div id="owl-demo-2" class="owl-carousel">
                            <div class="item wrap-vid">
                                <div class="zoom-container">
                                    <a href="{{url('single/1')}}">
												<span class="zoom-caption">
													<i class="icon-play fa fa-play"></i>
												</span>
                                        <img src="images/1.jpg" />
                                    </a>
                                </div>
                                <h3 class="vid-name"><a href="#">Video's Name</a></h3>
                                <div class="info">
                                    <h5>By <a href="#">Kelvin</a></h5>
                                    <span><i class="fa fa-calendar"></i>25/3/2015</span>
                                    <span><i class="fa fa-heart"></i>1,200</span>
                                </div>
                            </div>
                            <div class="item wrap-vid">
                                <div class="zoom-container">
                                    <a href="{{url('single/1')}}">
												<span class="zoom-caption">
													<i class="icon-play fa fa-play"></i>
												</span>
                                        <img src="images/2.jpg" />
                                    </a>
                                </div>
                                <h3 class="vid-name"><a href="#">Video's Name</a></h3>
                                <div class="info">
                                    <h5>By <a href="#">Kelvin</a></h5>
                                    <span><i class="fa fa-calendar"></i>25/3/2015</span>
                                    <span><i class="fa fa-heart"></i>1,200</span>
                                </div>
                            </div>
                            <div class="item wrap-vid">
                                <div class="zoom-container">
                                    <a href="{{url('single/1')}}">
												<span class="zoom-caption">
													<i class="icon-play fa fa-play"></i>
												</span>
                                        <img src="images/3.jpg" />
                                    </a>
                                </div>
                                <h3 class="vid-name"><a href="#">Video's Name</a></h3>
                                <div class="info">
                                    <h5>By <a href="#">Kelvin</a></h5>
                                    <span><i class="fa fa-calendar"></i>25/3/2015</span>
                                    <span><i class="fa fa-heart"></i>1,200</span>
                                </div>
                            </div>
                            <div class="item wrap-vid">
                                <div class="zoom-container">
                                    <a href="{{url('single/1')}}">
												<span class="zoom-caption">
													<i class="icon-play fa fa-play"></i>
												</span>
                                        <img src="images/4.jpg" />
                                    </a>
                                </div>
                                <h3 class="vid-name"><a href="#">Video's Name</a></h3>
                                <div class="info">
                                    <h5>By <a href="#">Kelvin</a></h5>
                                    <span><i class="fa fa-calendar"></i>25/3/2015</span>
                                    <span><i class="fa fa-heart"></i>1,200</span>
                                </div>
                            </div>
                            <div class="item wrap-vid">
                                <div class="zoom-container">
                                    <a href="{{url('single/1')}}">
												<span class="zoom-caption">
													<i class="icon-play fa fa-play"></i>
												</span>
                                        <img src="images/5.jpg" />
                                    </a>
                                </div>
                                <h3 class="vid-name"><a href="#">Video's Name</a></h3>
                                <div class="info">
                                    <h5>By <a href="#">Kelvin</a></h5>
                                    <span><i class="fa fa-calendar"></i>25/3/2015</span>
                                    <span><i class="fa fa-heart"></i>1,200</span>
                                </div>
                            </div>
                            <div class="item wrap-vid">
                                <div class="zoom-container">
                                    <a href="{{url('single/1')}}">
												<span class="zoom-caption">
													<i class="icon-play fa fa-play"></i>
												</span>
                                        <img src="images/14.jpg" />
                                    </a>
                                </div>
                                <h3 class="vid-name"><a href="#">Video's Name</a></h3>
                                <div class="info">
                                    <h5>By <a href="#">Kelvin</a></h5>
                                    <span><i class="fa fa-calendar"></i>25/3/2015</span>
                                    <span><i class="fa fa-heart"></i>1,200</span>
                                </div>
                            </div>
                            <div class="item wrap-vid">
                                <div class="zoom-container">
                                    <a href="{{url('single/1')}}">
												<span class="zoom-caption">
													<i class="icon-play fa fa-play"></i>
												</span>
                                        <img src="images/3.jpg" />
                                    </a>
                                </div>
                                <h3 class="vid-name"><a href="#">Video's Name</a></h3>
                                <div class="info">
                                    <h5>By <a href="#">Kelvin</a></h5>
                                    <span><i class="fa fa-calendar"></i>25/3/2015</span>
                                    <span><i class="fa fa-heart"></i>1,200</span>
                                </div>
                            </div>
                            <div class="item wrap-vid">
                                <div class="zoom-container">
                                    <a href="{{url('single/1')}}">
												<span class="zoom-caption">
													<i class="icon-play fa fa-play"></i>
												</span>
                                        <img src="images/5.jpg" />
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
                </section>

                <section class="vid-music">
                    <div class="header">
                        <h2>音乐</h2>
                    </div>
                    <div class="row"><!--Start Box-->
                        <div id="owl-demo-3" class="owl-carousel">
                            <div class="item wrap-vid">
                                <div class="zoom-container">
                                    <a href="{{url('single/1')}}">
												<span class="zoom-caption">
													<i class="icon-play fa fa-play"></i>
												</span>
                                        <img src="images/1.jpg" />
                                    </a>
                                </div>
                                <h3 class="vid-name"><a href="#">Video's Name</a></h3>
                                <div class="info">
                                    <h5>By <a href="#">Kelvin</a></h5>
                                    <span><i class="fa fa-calendar"></i>25/3/2015</span>
                                    <span><i class="fa fa-heart"></i>1,200</span>
                                </div>
                            </div>
                            <div class="item wrap-vid">
                                <div class="zoom-container">
                                    <a href="{{url('single/1')}}">
												<span class="zoom-caption">
													<i class="icon-play fa fa-play"></i>
												</span>
                                        <img src="images/2.jpg" />
                                    </a>
                                </div>
                                <h3 class="vid-name"><a href="#">Video's Name</a></h3>
                                <div class="info">
                                    <h5>By <a href="#">Kelvin</a></h5>
                                    <span><i class="fa fa-calendar"></i>25/3/2015</span>
                                    <span><i class="fa fa-heart"></i>1,200</span>
                                </div>
                            </div>
                            <div class="item wrap-vid">
                                <div class="zoom-container">
                                    <a href="{{url('single/1')}}">
												<span class="zoom-caption">
													<i class="icon-play fa fa-play"></i>
												</span>
                                        <img src="images/3.jpg" />
                                    </a>
                                </div>
                                <h3 class="vid-name"><a href="#">Video's Name</a></h3>
                                <div class="info">
                                    <h5>By <a href="#">Kelvin</a></h5>
                                    <span><i class="fa fa-calendar"></i>25/3/2015</span>
                                    <span><i class="fa fa-heart"></i>1,200</span>
                                </div>
                            </div>
                            <div class="item wrap-vid">
                                <div class="zoom-container">
                                    <a href="{{url('single/1')}}">
												<span class="zoom-caption">
													<i class="icon-play fa fa-play"></i>
												</span>
                                        <img src="images/4.jpg" />
                                    </a>
                                </div>
                                <h3 class="vid-name"><a href="#">Video's Name</a></h3>
                                <div class="info">
                                    <h5>By <a href="#">Kelvin</a></h5>
                                    <span><i class="fa fa-calendar"></i>25/3/2015</span>
                                    <span><i class="fa fa-heart"></i>1,200</span>
                                </div>
                            </div>
                            <div class="item wrap-vid">
                                <div class="zoom-container">
                                    <a href="{{url('single/1')}}">
												<span class="zoom-caption">
													<i class="icon-play fa fa-play"></i>
												</span>
                                        <img src="images/5.jpg" />
                                    </a>
                                </div>
                                <h3 class="vid-name"><a href="#">Video's Name</a></h3>
                                <div class="info">
                                    <h5>By <a href="#">Kelvin</a></h5>
                                    <span><i class="fa fa-calendar"></i>25/3/2015</span>
                                    <span><i class="fa fa-heart"></i>1,200</span>
                                </div>
                            </div>
                            <div class="item wrap-vid">
                                <div class="zoom-container">
                                    <a href="{{url('single/1')}}">
												<span class="zoom-caption">
													<i class="icon-play fa fa-play"></i>
												</span>
                                        <img src="images/14.jpg" />
                                    </a>
                                </div>
                                <h3 class="vid-name"><a href="#">Video's Name</a></h3>
                                <div class="info">
                                    <h5>By <a href="#">Kelvin</a></h5>
                                    <span><i class="fa fa-calendar"></i>25/3/2015</span>
                                    <span><i class="fa fa-heart"></i>1,200</span>
                                </div>
                            </div>
                            <div class="item wrap-vid">
                                <div class="zoom-container">
                                    <a href="{{url('single/1')}}">
												<span class="zoom-caption">
													<i class="icon-play fa fa-play"></i>
												</span>
                                        <img src="images/3.jpg" />
                                    </a>
                                </div>
                                <h3 class="vid-name"><a href="#">Video's Name</a></h3>
                                <div class="info">
                                    <h5>By <a href="#">Kelvin</a></h5>
                                    <span><i class="fa fa-calendar"></i>25/3/2015</span>
                                    <span><i class="fa fa-heart"></i>1,200</span>
                                </div>
                            </div>
                            <div class="item wrap-vid">
                                <div class="zoom-container">
                                    <a href="{{url('single/1')}}">
												<span class="zoom-caption">
													<i class="icon-play fa fa-play"></i>
												</span>
                                        <img src="images/5.jpg" />
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
                </section>
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
                    <h5>最新视频</h5>
                </div>
                <div class="wid-content">
                    <div class="post wrap-vid">
                        <div class="zoom-container">
                            <a href="{{url('single/1')}}">
										<span class="zoom-caption">
											<i class="icon-play fa fa-play"></i>
										</span>
                                <img src="images/4.jpg" />
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
                            <a href="{{url('single/1')}}">
										<span class="zoom-caption">
											<i class="icon-play fa fa-play"></i>
										</span>
                                <img src="images/14.jpg" />
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
                            <a href="{{url('single/1')}}">
										<span class="zoom-caption">
											<i class="icon-play fa fa-play"></i>
										</span>
                                <img src="images/3.jpg" />
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
                    <div class="row">
                        <div class="wrap-vid">
                            <div class="zoom-container">
                                <a href="{{url('single/1')}}">
											<span class="zoom-caption">
												<i class="icon-play fa fa-play"></i>
											</span>
                                    <img src="images/1.jpg" />
                                </a>
                            </div>
                            <h3 class="vid-name">Video's Name</h3>
                            <div class="info">
                                <h5>By <a href="#">Kelvin</a></h5>
                                <span><i class="fa fa-calendar"></i>25/3/2015</span>
                                <span><i class="fa fa-heart"></i>1,200</span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="wrap-vid">
                            <div class="zoom-container">
                                <a href="{{url('single/1')}}">
											<span class="zoom-caption">
												<i class="icon-play fa fa-play"></i>
											</span>
                                    <img src="images/2.jpg" />
                                </a>
                            </div>
                            <h3 class="vid-name">Video's Name</h3>
                            <div class="info">
                                <h5>By <a href="#">Kelvin</a></h5>
                                <span><i class="fa fa-calendar"></i>25/3/2015</span>
                                <span><i class="fa fa-heart"></i>1,200</span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="wrap-vid">
                            <div class="zoom-container">
                                <a href="{{url('single/1')}}">
											<span class="zoom-caption">
												<i class="icon-play fa fa-play"></i>
											</span>
                                    <img src="images/4.jpg" />
                                </a>
                            </div>
                            <h3 class="vid-name">Video's Name</h3>
                            <div class="info">
                                <h5>By <a href="#">Kelvin</a></h5>
                                <span><i class="fa fa-calendar"></i>25/3/2015</span>
                                <span><i class="fa fa-heart"></i>1,200</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection