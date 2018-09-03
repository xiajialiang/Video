@extends('layouts.blank')
@section('css')
    <link href="{{asset('css/video-js.css')}}" rel="stylesheet" type="text/css">
@endsection
@section('container')
    <div class="row">
        <div id="main-content" class="col-2-3">
            <div class="wrap-vid">
                <div class="m">
                    <video id="my-video" class="video-js vjs-default-skin  vjs-big-play-centered" controls preload="" width="740" height="400" poster="{{asset('')}}images/1.jpg" data-setup="{}">
                        <source src="{{asset('/').'upload/'.$video->path}}" type="video/mp4">
                        <p class="vjs-no-js">
                            To view this video please enable JavaScript, and consider upgrading to a web browser that
                            <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a>
                        </p>

                        {{--字幕--}}
                        <track label="English" kind="subtitles" srclang="en" src="{{asset('/')}}subtitles/vtt/sintel-en.vtt" default>
                        <track label="Deutsch" kind="subtitles" srclang="de" src="{{asset('/')}}subtitles/vtt/sintel-de.vtt">
                        <track label="Español" kind="subtitles" srclang="es" src="{{asset('/')}}subtitles/vtt/sintel-es.vtt">
                        <track label="Chinese" kind="subtitles" srclang="es" src="{{asset('/')}}subtitles/vtt/sintel-zn.vtt">
                        <button id="subtitles" type="button" data-state="subtitles">字幕</button>

                    </video>

                    <script src="{{asset('js/video.min.js')}}"></script>

                    {{--视频播放控制--}}
                    <script type="text/javascript">
                        var myPlayer = videojs('my-video');
                        videojs("my-video").ready(function(){
                            var myPlayer = this;
                            myPlayer.play();
                        });
                        videojs.options.flash.swf = 'video.js.swf';
                    </script>

                    {{--弹幕--}}
                    <div id="danmu" ></div>
                </div>
                <div class="text-center ctr" >
                    <br>

                    <button type="button"  onclick="resumer() ">弹幕开始/继续</button>&nbsp;&nbsp;&nbsp;&nbsp;
                    <button type="button"  onclick="pauser()">弹幕暂停</button>  &nbsp;&nbsp;&nbsp;&nbsp;
                    显示弹幕:<input type='checkbox' checked='checked' id='ishide' value='is' onchange='changehide()'><br> &nbsp;&nbsp;&nbsp;&nbsp;
                    {{--弹幕透明度:--}}
                    {{--<input type="range" name="op" id="op" onchange="op()" value="100"> <br>--}}

                    {{--设置当前弹幕时间(分秒)： <input type="text" id="set_time" max=20 />--}}
                    {{--<button type="button"  onclick="settime()">设置</button>--}}

                    <br>

                    弹幕设置:
                    <select  name="color" id="color" >
                        <option value="white">白色</option>
                        <option value="red">红色</option>
                        <option value="green">绿色</option>
                        <option value="blue">蓝色</option>
                        <option value="yellow">黄色</option>
                    </select>
                    <select name="size" id="text_size" >
                        <option value="1">大文字</option>
                        <option value="0">小文字</option>
                    </select>
                    <select name="position" id="position"   >
                        <option value="0">滚动</option>
                        <option value="1">顶端</option>
                        <option value="2">底端</option>
                    </select>
                    <input type="text" id="text" max=300 />
                    <button type="button"  onclick="send()">发送</button>
                </div><br>
            </div>
            <div class="row">
                <div class="share">
                    {{--评论--}}
                    <div class="col-1-4">
                        <div class="wrap-col">
                            <div class="box-share">
                                <a href="javascript:void (0)" id="comments">
                                    <i class="fa fa-comments"></i>
                                    <span>评论</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    {{--下载--}}
                    <div class="col-1-4">
                        <div class="wrap-col">
                            <div class="box-share">
                                <a href="javascript:void (0)">
                                    <i class="fa fa-twitter"></i>
                                    <span>下载 </span>
                                </a>
                            </div>
                        </div>
                    </div>
                    {{--点赞--}}
                    <div class="col-1-4">
                        <div class="wrap-col">
                            <div class="box-share">
                                <a href="javascript:void (0)" id="like">
                                    <i class="fa fa-thumbs-up"></i>
                                    <span id="likenum">{{$video->like}}</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    {{--关注--}}
                    <div class="col-1-4">
                        <div class="wrap-col">
                            <div class="box-share">
                                <a href="javascript:void (0)" id="care">
                                    <i class="fa fa-plus"></i>
                                    <span>关注</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{--视频简介--}}
            <h1 class="vid-name">{{$video->title}}</h1>
            <div class="info">
                <h5>By <a href="#">{{$video->author->username}}</a></h5>
                <span><i class="fa fa-calendar"></i>{{date('Y-d-m',$video->created_at)}}</span>
                <span><i class="fa fa-heart" id="fa">&nbsp;&nbsp;{{$video->like}}</i></span>
            </div>
            {{--<p>Aenean feugiat in ante et blandit. Vestibulum posuere molestie risus, ac interdum magna porta non. Pellentesque rutrum fringilla elementum. Curabitur tincidunt porta lorem vitae accumsan. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Donec ac euismod turpis.</p>--}}
            <p>{{$video->content}}</p>
            {{--标签--}}
            <div class="tags">
                <a href="javascript:void (0)">自然</a>
                <a href="javascript:void (0)">火山</a>
                <a href="javascript:void (0)">生命</a>
                <a href="javascript:void (0)">海洋</a>
                <a href="javascript:void (0)">生长</a>
            </div>

            {{--评论框--}}
            <div class="comments">
                <textarea name="comments"  cols="30" rows="10" placeholder="请输入内容！"></textarea>
                <button style="align-self: right" onclick="submit()">评论</button>
                <button onclick="reset()">取消</button>
            </div>

            {{--相关视频--}}
            <section class="vid-related">
                <div class="header">
                    <h2>相关视频</h2>
                </div>
                <div class=""><!--Start Box-->
                    <div id="owl-demo-1" class="owl-carousel">
                        <div class="item wrap-vid">
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
                        <div class="item wrap-vid">
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
                        <div class="item wrap-vid">
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
                        <div class="item wrap-vid">
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
                        <div class="item wrap-vid">
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
                        <div class="item wrap-vid">
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
                        <div class="item wrap-vid">
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
                        <div class="item wrap-vid">
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
            </section>
        </div>

        <div id="sidebar" class="col-1-3">
            {{--搜索框--}}
            <form id="form-container" action="">
                {{--<input type="submit" id="searchsubmit" value="" />--}}
                <a class="search-submit-button" href="javascript:void(0)">
                    <i class="fa fa-search"></i>
                </a>
                <div id="searchtext">
                    <input type="text" id="s" name="s" placeholder="Search Something...">
                </div>
            </form>
            <!---- Start Widget ---->
            {{--下一条视频--}}
            <div class="widget wid-post">
                <div class="wid-header">
                    <h5>接下来播放</h5>
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
            {{--排行消息--}}
            <div class="widget wid-news">
                <div class="wid-header">
                    <h5>最热视频</h5>
                </div>
                <div class="wid-content">
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
                                <a href="single.html">
											<span class="zoom-caption">
												<i class="icon-play fa fa-play"></i>
											</span>
                                    <img src="{{asset('')}}images/2.jpg" />
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
                                <a href="single.html">
											<span class="zoom-caption">
												<i class="icon-play fa fa-play"></i>
											</span>
                                    <img src="{{asset('')}}images/4.jpg" />
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

@section('search-js')
    {{--<script src="{{asset('')}}js/jquery-2.1.1.js"></script>--}}
    {{--<script src="{{asset('')}}js/classie.js"></script>--}}
    <script>
        //single 页面相关js
        // 点赞
        $('#like').click(function () {
            var $likenum = $('#likenum').text();
            $likenum = parseInt($likenum)+1;
            // alert($likenum);
            $.ajax({
                url:"{{url('like')}}",
                data:'id='+{{$video->id}},
                success: function ($result) {
                    $('#likenum').text($likenum);
                    $('#fa').text($likenum);
                }
            })

        });

        //    关注
        $('#care').click(function () {
            // alert($text);

            $username = check();
            if ($username)
            {
                $text = $('#care > span').text();
                if ($text=='关注')
                {
                    alert('关注成功！');
                    $('#care > span').text('取消关注');
                }else {
                    alert('取消成功！');
                    $('#care > span').text('关注');
                }
            }

        });

        //    评论框显示
        $('#comments').click(function () {
            // $username = $('#username').text();
            $username = check();
            if ($username)
            {
                $value = $('.comments').css('display');
                // alert($value);
                if ($value=='none'){
                    $('.comments').show('slow');
                }
                else {
                    $('.comments').hide('slow');
                }
            }
        });

        //提交评论
        function submit() {
            $val = $('textarea').val();
            if ($val=='')
            {
                alert('请输入评论内容！');
            }else {
                alert('评论成功！');
                $('textarea').val('')
            }
        }

        //取消评论
        function reset(){
            $value = $('.comments').css('display');
            $('.comments').hide('slow');
        }

        //注销
        $('#checkOut').click(function () {
            $username = $('#username').text();
            $.ajax({
                type:"GET",
                url:"{{url('user/loginOut')}}",
                data:"user="+$username,
                success:function ($msg) {
                    location.reload();
                    // alert($msg);
                }

            });
        });

        //    登录检测
        function check() {
            $username = $('#username').text();
            if ($username!='')
            {
                return true;
            }else {
                alert('请登录！')
            }
        }

        //下载
        $('.fa-twitter').click(function () {
            //获取服务器地址
            var host = location.host;

            //发送下载地址
            var url = "http://"+ host +"/Video/public/down";
            window.open(url);


        // $.ajax({
        //     url:"{{url('/down')}}",
        //     data:'path=1.jpg',
        //     success:function () {
        //         alert('下载成功')
        //         }
        //     })
        });
    </script>

    {{--字幕--}}
    <script src="{{asset('')}}js/video-player.js"></script>
    {{--弹幕--}}
    <script src="{{asset('')}}js/danmu.js"></script>
    <script src="{{asset('')}}js/jquery.danmu.js"></script>

@endsection