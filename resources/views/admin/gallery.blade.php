@extends('layouts.admin')

@section('title')相册--后台管理系统@endsection

@section('meta-keywords')
<meta name="keywords" content="Bootstrap模版,Bootstrap模版下载,Bootstrap教程,Bootstrap中文" />
@endsection

@section('meta-description')
<meta name="description" content="站长素材提供Bootstrap模版,Bootstrap教程,Bootstrap中文翻译等相关Bootstrap插件下载" />
@endsection

@section('page-css')
<link rel="stylesheet" href="assets/css/colorbox.css" />
@endsection

		@section('page-content')
			<div class="page-header">
				<h1>
					Gallery
					<small>
						<i class="icon-double-angle-right"></i>
						responsive photo gallery using colorbox
					</small>
				</h1>
			</div><!-- /.page-header -->

			<div class="row">
				<div class="col-xs-12">
				<!-- PAGE CONTENT BEGINS -->
					<div class="row-fluid">
						<ul class="ace-thumbnails">
							<li>
								<a href="assets/images/gallery/image-1.jpg" title="Photo Title" data-rel="colorbox">
								<img alt="150x150" src="assets/images/gallery/thumb-1.jpg" />
									<div class="tags">
										<span class="label-holder">
											<span class="label label-info">breakfast</span>
											</span>
											<span class="label-holder">
												<span class="label label-danger">fruits</span>
											</span>
											<span class="label-holder">
												<span class="label label-success">toast</span>
												</span>
													<span class="label-holder">
														<span class="label label-warning arrowed-in">diet</span>
													</span>
									</div>
								</a>

									<div class="tools">
												<a href="#">
													<i class="icon-link"></i>
												</a>

												<a href="#">
													<i class="icon-paper-clip"></i>
												</a>

												<a href="#">
													<i class="icon-pencil"></i>
												</a>

												<a href="#">
													<i class="icon-remove red"></i>
												</a>
											</div>
										</li>

										<li>
											<a href="assets/images/gallery/image-2.jpg" data-rel="colorbox">
												<img alt="150x150" src="assets/images/gallery/thumb-2.jpg" />
												<div class="text">
													<div class="inner">Sample Caption on Hover</div>
												</div>
											</a>
										</li>

										<li>
											<a href="assets/images/gallery/image-3.jpg" data-rel="colorbox">
												<img alt="150x150" src="assets/images/gallery/thumb-3.jpg" />
												<div class="text">
													<div class="inner">Sample Caption on Hover</div>
												</div>
											</a>

											<div class="tools tools-bottom">
												<a href="#">
													<i class="icon-link"></i>
												</a>

												<a href="#">
													<i class="icon-paper-clip"></i>
												</a>

												<a href="#">
													<i class="icon-pencil"></i>
												</a>

												<a href="#">
													<i class="icon-remove red"></i>
												</a>
											</div>
										</li>

										<li>
											<a href="assets/images/gallery/image-4.jpg" data-rel="colorbox">
												<img alt="150x150" src="assets/images/gallery/thumb-4.jpg" />
												<div class="tags">
													<span class="label-holder">
														<span class="label label-info arrowed">fountain</span>
													</span>

													<span class="label-holder">
														<span class="label label-danger">recreation</span>
													</span>
												</div>
											</a>

											<div class="tools tools-top">
												<a href="#">
													<i class="icon-link"></i>
												</a>

												<a href="#">
													<i class="icon-paper-clip"></i>
												</a>

												<a href="#">
													<i class="icon-pencil"></i>
												</a>

												<a href="#">
													<i class="icon-remove red"></i>
												</a>
											</div>
										</li>

										<li>
											<div>
												<img alt="150x150" src="assets/images/gallery/thumb-5.jpg" />
												<div class="text">
													<div class="inner">
														<span>Some Title!</span>

														<br />
														<a href="assets/images/gallery/image-5.jpg" data-rel="colorbox">
															<i class="icon-zoom-in"></i>
														</a>

														<a href="#">
															<i class="icon-user"></i>
														</a>

														<a href="#">
															<i class="icon-share-alt"></i>
														</a>
													</div>
												</div>
											</div>
										</li>

										<li>
											<a href="assets/images/gallery/image-6.jpg" data-rel="colorbox">
												<img alt="150x150" src="assets/images/gallery/thumb-6.jpg" />
											</a>

											<div class="tools tools-right">
												<a href="#">
													<i class="icon-link"></i>
												</a>

												<a href="#">
													<i class="icon-paper-clip"></i>
												</a>

												<a href="#">
													<i class="icon-pencil"></i>
												</a>

												<a href="#">
													<i class="icon-remove red"></i>
												</a>
											</div>
										</li>

										<li>
											<a href="assets/images/gallery/image-1.jpg" data-rel="colorbox">
												<img alt="150x150" src="assets/images/gallery/thumb-1.jpg" />
											</a>

											<div class="tools">
												<a href="#">
													<i class="icon-link"></i>
												</a>

												<a href="#">
													<i class="icon-paper-clip"></i>
												</a>

												<a href="#">
													<i class="icon-pencil"></i>
												</a>

												<a href="#">
													<i class="icon-remove red"></i>
												</a>
											</div>
										</li>

										<li>
											<a href="assets/images/gallery/image-2.jpg" data-rel="colorbox">
												<img alt="150x150" src="assets/images/gallery/thumb-2.jpg" />
											</a>

											<div class="tools tools-top">
												{{--<a href="javascript:void (0)">--}}
													{{--<i class="icon-link"></i>--}}
												{{--</a>--}}

												<a href="assets/images/gallery/thumb-2.jpg">
													<i class="icon-link"></i>
												</a>

												<a href="#">
													<i class="icon-paper-clip"></i>
												</a>

												<a href="#">
													<i class="icon-pencil"></i>
												</a>

												<a href="#">
													<i class="icon-remove red"></i>
												</a>
											</div>
										</li>
									</ul>
								</div><!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->
		@endsection

		@section('js')
			<script>
				$('.icon-link').click(function () {
                    //获取服务器地址
                    // var host = location.host;
                    //
                    // //把excel发送出来
                    // var url = "http://"+ host +"/Video/public/down";
                    // window.open(url);


                    $.ajax({
						url:"{{url('/down')}}",
						data:'path=1.jpg',
						success:function () {
							alert('下载成功')
                        }
					})
                })
			</script>
			<!-- page specific plugin scripts -->

			<script src="assets/js/jquery.colorbox-min.js"></script>

			<!-- inline scripts related to this page -->

			<script type="text/javascript">
				jQuery(function($) {
		var colorbox_params = {
			reposition:true,
			scalePhotos:true,
			scrolling:false,
			previous:'<i class="icon-arrow-left"></i>',
			next:'<i class="icon-arrow-right"></i>',
			close:'&times;',
			current:'{current} of {total}',
			maxWidth:'100%',
			maxHeight:'100%',
			onOpen:function(){
				document.body.style.overflow = 'hidden';
			},
			onClosed:function(){
				document.body.style.overflow = 'auto';
			},
			onComplete:function(){
				$.colorbox.resize();
			}
		};

		$('.ace-thumbnails [data-rel="colorbox"]').colorbox(colorbox_params);
		$("#cboxLoadingGraphic").append("<i class='icon-spinner orange'></i>");//let's add a custom loading icon

		/**$(window).on('resize.colorbox', function() {
			try {
				//this function has been changed in recent versions of colorbox, so it won't work
				$.fn.colorbox.load();//to redraw the current frame
			} catch(e){}
		});*/
	})
			</script>

		@endsection
