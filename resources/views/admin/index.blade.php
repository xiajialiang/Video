@extends('layouts.admin')
@section('title')首页--后台管理系统@endsection
@section('meta-keywords')
	<meta name="keywords" content="视频,video" />
@endsection
@section('meta-description')
	<meta name="description" content="个人视频分享" />
@endsection
@section('active')控制台
@endsection
@section('page-content')
	<div class="page-content">
			<div class="row">
				<div class="col-xs-12">
					<div class="alert alert-block alert-success">
						<button type="button" class="close" data-dismiss="alert">
							<i class="icon-remove"></i>
						</button>
						<i class="icon-ok green"></i>欢迎使用
						<strong class="green">Ace后台管理系统<small>(v1.2)</small></strong>,轻量级好用的后台管理系统模版.
					</div>
					<div class="row">
						<div class="space-6"></div>
						<div class="col-sm-7 infobox-container">
							<div class="infobox infobox-green  ">
								<div class="infobox-icon">
									<i class="icon-comments"></i>
								</div>
								<div class="infobox-data">
									<span class="infobox-data-number">32</span>
									<div class="infobox-content">2个评论</div>
								</div>
								<div class="stat stat-success">8%</div>
							</div>
							<div class="infobox infobox-blue  ">
								<div class="infobox-icon">
									<i class="icon-twitter"></i>
								</div>
								<div class="infobox-data">
									<span class="infobox-data-number">11</span>
									<div class="infobox-content">新粉丝</div>
								</div>
								<div class="badge badge-success">+32%
									<i class="icon-arrow-up"></i>
								</div>
							</div>
							<div class="infobox infobox-pink  ">
								<div class="infobox-icon">
									<i class="icon-shopping-cart"></i>
								</div>
								<div class="infobox-data">
									<span class="infobox-data-number">8</span>
									<div class="infobox-content">新订单</div>
								</div>
								<div class="stat stat-important">4%</div>
							</div>
							<div class="infobox infobox-red  ">
								<div class="infobox-icon">
									<i class="icon-beaker"></i>
								</div>
								<div class="infobox-data">
									<span class="infobox-data-number">1</span>
									<div class="infobox-content">在线用户</div>
								</div>
							</div>

							<div class="infobox infobox-orange2  ">
								<div class="infobox-chart">
									<span class="sparkline" data-values="196,128,202,177,154,94,100,170,224"></span>
								</div>
								<div class="infobox-data">
									<span class="infobox-data-number">6,251</span>
									<div class="infobox-content">页面查看次数</div>
								</div>
								<div class="badge badge-success">7.2%
									<i class="icon-arrow-up"></i>
								</div>
							</div>
							<div class="infobox infobox-blue2  ">
								<div class="infobox-progress">
									<div class="easy-pie-chart percentage" data-percent="42" data-size="46">
										<span class="percent">42</span>%
									</div>
								</div>
								<div class="infobox-data">
									<span class="infobox-text">交易使用</span>
									<div class="infobox-content">
										<span class="bigger-110">~</span>
										剩余58GB
									</div>
								</div>
							</div>

							<div class="space-6"></div>
							<div class="infobox infobox-green infobox-small infobox-dark">
								<div class="infobox-progress">
									<div class="easy-pie-chart percentage" data-percent="61" data-size="39">
										<span class="percent">61</span>%
									</div>
								</div>
								<div class="infobox-data">
									<div class="infobox-content">任务</div>
									<div class="infobox-content">完成</div>
								</div>
							</div>
							<div class="infobox infobox-blue infobox-small infobox-dark">
								<div class="infobox-chart">
									<span class="sparkline" data-values="3,4,2,3,4,4,2,2"></span>
								</div>
								<div class="infobox-data">
									<div class="infobox-content">获得</div>
									<div class="infobox-content">$32,000</div>
								</div>
							</div>

							<div class="infobox infobox-grey infobox-small infobox-dark">
								<div class="infobox-icon">
									<i class="icon-download-alt"></i>
								</div>

								<div class="infobox-data">
									<div class="infobox-content">下载次数</div>
									<div class="infobox-content">1,205</div>
								</div>
							</div>
						</div>

						<div class="vspace-sm"></div>

						<div class="col-sm-5">
							<div class="widget-box">
								<div class="widget-header widget-header-flat widget-header-small">
									<h5>
										<i class="icon-signal"></i>
										访问来源
									</h5>

									<div class="widget-toolbar no-border">
										<button class="btn btn-minier btn-primary dropdown-toggle" data-toggle="dropdown">本周<i class="icon-angle-down icon-on-right bigger-110"></i>
										</button>
										<ul class="dropdown-menu pull-right dropdown-125 dropdown-lighter dropdown-caret">
											<li class="active">
												<a href="#" class="blue">
													<i class="icon-caret-right bigger-110">&nbsp;</i>本周
												</a>
											</li>

											<li>
												<a href="#"><i class="icon-caret-right bigger-110 invisible">&nbsp;</i>上周</a>
											</li>

											<li>
												<a href="#"><i class="icon-caret-right bigger-110 invisible">&nbsp;</i>本月</a>
											</li>

											<li>
												<a href="#"><i class="icon-caret-right bigger-110 invisible">&nbsp;</i>上月</a>
											</li>
										</ul>
									</div>
								</div>

								<div class="widget-body">
									<div class="widget-main">
										<div id="piechart-placeholder"></div>

										<div class="hr hr8 hr-double"></div>

										<div class="clearfix">
											<div class="grid3">
												<span class="grey">
													<i class="icon-facebook-sign icon-2x blue"></i>&nbsp; 脸书</span>
												<h4 class="bigger pull-right">1,255</h4>
											</div>

											<div class="grid3">
												<span class="grey">
													<i class="icon-twitter-sign icon-2x purple"></i>&nbsp; 推特
												</span>
												<h4 class="bigger pull-right">941</h4>
											</div>

											<div class="grid3">
												<span class="grey">
													<i class="icon-pinterest-sign icon-2x red"></i>&nbsp; 微博</span>
												<h4 class="bigger pull-right">1,050</h4>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="hr hr32 hr-dotted"></div>
					<div class="row">
						<div class="col-sm-5">
							<div class="widget-box transparent">
								<div class="widget-header widget-header-flat">
									<h4 class="lighter">
										<i class="icon-star orange"></i>热门视频
									</h4>

									<div class="widget-toolbar">
										<a href="#" data-action="collapse">
											<i class="icon-chevron-up"></i>
										</a>
									</div>
								</div>

								<div class="widget-body">
									<div class="widget-main no-padding">
										<table class="table table-bordered table-striped">
											<thead class="thin-border-bottom">
											<tr>
												<th>
													<i class="icon-caret-right blue"></i>
													片名
												</th>

												<th>
													<i class="icon-caret-right blue"></i>
													点赞量
												</th>

												<th class="hidden-480">
													<i class="icon-caret-right blue"></i>
													状态
												</th>
											</tr>
											</thead>

											<tbody>
											@foreach($hotVideo as $video)
											<tr>
												<td>{{$video->title}}</td>

												<td class="green1">
													{{--<small>--}}
														{{--<s class="red">{{$video->title}}</s>--}}
													{{--</small>--}}
													<b class="green">{{$video->like}}</b>
												</td>

												<td class="hidden-480">
													<span class="label label-info arrowed-right arrowed-in">上线</span>
												</td>
											</tr>
											@endforeach
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>

						<div class="col-sm-7">
							<div class="widget-box transparent">
								<div class="widget-header widget-header-flat">
									<h4 class="lighter">
										<i class="icon-signal"></i>播放统计
									</h4>

									<div class="widget-toolbar">
										<a href="#" data-action="collapse">
											<i class="icon-chevron-up"></i>
										</a>
									</div>
								</div>

								{{--播放量统计图--}}
								<div class="widget-body">
									<div class="widget-main padding-4">
										<div id="sales-charts"></div>
									</div><!-- /widget-main -->
								</div><!-- /widget-body -->
							</div><!-- /widget-box -->
						</div>
					</div>

					<div class="hr hr32 hr-dotted"></div>

					<!-- PAGE CONTENT ENDS -->
				</div><!-- /.col -->
			</div><!-- /.row -->
		</div>
@endsection


@section('js')

	{{--<script src="assets/js/jquery.slimscroll.min.js"></script>--}}
	{{--<script src="assets/js/flot/jquery.flot.resize.min.js"></script>--}}
	{{--<script src="assets/js/jquery-ui-1.10.3.custom.min.js"></script>--}}
	<script src="assets/js/jquery.ui.touch-punch.min.js"></script>
	<script src="assets/js/jquery.easy-pie-chart.min.js"></script>
	<script src="assets/js/jquery.sparkline.min.js"></script>
	<script src="assets/js/flot/jquery.flot.min.js"></script>
	<script src="assets/js/flot/jquery.flot.pie.min.js"></script>
	<script src="{{asset('')}}js/echarts.js"></script>


	<script type="text/javascript">
        jQuery(function($) {
            $('.easy-pie-chart.percentage').each(function(){
                var $box = $(this).closest('.infobox');
                var barColor = $(this).data('color') || (!$box.hasClass('infobox-dark') ? $box.css('color') : 'rgba(255,255,255,0.95)');
                var trackColor = barColor == 'rgba(255,255,255,0.95)' ? 'rgba(255,255,255,0.25)' : '#E2E2E2';
                var size = parseInt($(this).data('size')) || 50;
                $(this).easyPieChart({
                    barColor: barColor,
                    trackColor: trackColor,
                    scaleColor: false,
                    lineCap: 'butt',
                    lineWidth: parseInt(size/10),
                    animate: /msie\s*(8|7|6)/.test(navigator.userAgent.toLowerCase()) ? false : 1000,
                    size: size
                });
            });

            $('.sparkline').each(function(){
                var $box = $(this).closest('.infobox');
                var barColor = !$box.hasClass('infobox-dark') ? $box.css('color') : '#FFF';
                $(this).sparkline('html', {tagValuesAttribute:'data-values', type: 'bar', barColor: barColor , chartRangeMin:$(this).data('min') || 0} );
            });
//				扇形图
            var placeholder = $('#piechart-placeholder').css({'width':'90%' , 'min-height':'150px'});


            function drawPieChart(placeholder, data, position) {
                $.plot(placeholder, data, {
                    series: {
                        pie: {
                            show: true,
                            tilt:0.8,
                            highlight: {
                                opacity: 0.25
                            },
                            stroke: {
                                color: '#fff',
                                width: 2
                            },
                            startAngle: 2
                        }
                    },
                    legend: {
                        show: true,
                        position: position || "ne",
                        labelBoxBorderColor: null,
                        margin:[-30,15]
                    }
                    ,
                    grid: {
                        hoverable: true,
                        clickable: true
                    }
                })
            }

            //asyn:true 为异步加载，false为同步阻塞
            $.ajax({
                url:"{{url('chart/circle_chart')}}",
                asyn:false,
                success:function ($result) {
                    var data=[];
                    data= JSON.parse($result);
                    drawPieChart(placeholder, data);
                    placeholder.data('chart', data);
                    placeholder.data('draw', drawPieChart);
                }
            });


            var $tooltip = $("<div class='tooltip top in'><div class='tooltip-inner'></div></div>").hide().appendTo('body');
            var previousPoint = null;

            placeholder.on('plothover', function (event, pos, item) {
                if(item) {
                    if (previousPoint != item.seriesIndex) {
                        previousPoint = item.seriesIndex;
                        var tip = item.series['label'] + " : " + item.series['percent']+'%';
                        $tooltip.show().children(0).text(tip);
                    }
                    $tooltip.css({top:pos.pageY + 10, left:pos.pageX + 10});
                } else {
                    $tooltip.hide();
                    previousPoint = null;
                }
            });


            // var d1 = [];
            // for (var i = 0; i < Math.PI * 3; i += 0.5) {
            //     d1.push([i, Math.sin(i)]);
            // }
            //
            // var d2 = [];
            // for (var i = 0; i < Math.PI * 3; i += 0.5) {
            //     d2.push([i, Math.cos(i)]);
            // }
            //
            // var d3 = [];
            // for (var i = 0; i < Math.PI * 3; i += 0.2) {
            //     d3.push([i, Math.tan(i)]);
            // }

            // 折线图
            var sales_charts = $('#sales-charts').css({'width':'100%' , 'height':'258px'});
            // $.plot("#sales-charts", [
            //     { label: "Domains", data: d1 },
            //     { label: "Hosting", data: d2 },
            //     { label: "Services", data: d3 }
            // ], {
            //     hoverable: true,
            //     shadowSize: 0,
            //     series: {
            //         lines: { show: true },
            //         points: { show: true }
            //     },
            //     xaxis: {
            //         tickLength: 0
            //     },
            //     yaxis: {
            //         ticks: 10,
            //         min: 0,
            //         max: 20,
            //         tickDecimals: 1
            //     },
            //     grid: {
            //         backgroundColor: { colors: [ "#fff", "#fff" ] },
            //         borderWidth: 1,
            //         borderColor:'#555'
            //     }
            // });


            var myChart = echarts.init(document.getElementById('sales-charts'));
            var opthion = {
                title :{
                    // text: 'ECharts 入门'
                },
                tooltip:{},
                legend:{
                    data:['播放量']
                },
                xAxis:{
                    data:[]
                },
                yAxis:{},
                series:[{
                    name:'播放量',
                    type:'bar',
                    data:[]
                }]
            };
            var opthion2 = {
                series : [
                    {
                        name: '访问来源',
                        type: 'pie',
                        radius: '55%',
                        data:[]
                    }
                ]
            };

            //饼图数据
//     $.ajax({
//     {{--url:"{{url('chart/bar_chart')}}",--}}
            //     // asyn:false,
            //     success:function ($result) {
            //
            //         data= JSON.parse($result);
            //
            //         opthion2.series[0].data=data;
            //         // 使用刚指定的配置项和数据显示图表。
            //         // myChart.setOption(opthion2);
            //     }
            // });
            //柱状图数据
            $.ajax({
                url:"{{url('chart/bar_chart')}}",
                // asyn:false,
                success:function ($result) {

                    data= JSON.parse($result);
                    // console.log(data);
                    var res=[];
                    res.push([],[]);

                    for (var i=0;i<data.length;i++)
                    {
                        res[0].push(data[i].name);
                        res[1].push(data[i].value);
                    }

                    opthion.xAxis.data=res[0];
                    opthion.series[0].data=res[1];
                    // 使用刚指定的配置项和数据显示图表。
                    myChart.setOption(opthion);
                }
            });

            $('.dialogs,.comments').slimScroll({
                height: '300px'
            });


            //Android's default browser somehow is confused when tapping on label which will lead to dragging the task
            //so disable dragging when clicking on label
            var agent = navigator.userAgent.toLowerCase();
            if("ontouchstart" in document && /applewebkit/.test(agent) && /android/.test(agent))
                $('#tasks').on('touchstart', function(e){
                    var li = $(e.target).closest('#tasks li');
                    if(li.length == 0)return;
                    var label = li.find('label.inline').get(0);
                    if(label == e.target || $.contains(label, e.target)) e.stopImmediatePropagation() ;
                });

            $('#tasks').sortable({
                    opacity:0.8,
                    revert:true,
                    forceHelperSize:true,
                    placeholder: 'draggable-placeholder',
                    forcePlaceholderSize:true,
                    tolerance:'pointer',
                    stop: function( event, ui ) {//just for Chrome!!!! so that dropdowns on items don't appear below other items after being moved
                        $(ui.item).css('z-index', 'auto');
                    }
                }
            );
            $('#tasks').disableSelection();

        })
	</script>
@endsection


