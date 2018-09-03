@extends('layouts.admin')

@section('title')表格--后台管理系统@endsection

@section('meta-keywords')
	<meta name="keywords" content="视频,video" />
@endsection

@section('meta-description')
	<meta name="description" content="个人视频分享" />
@endsection
@section('active')用户管理
@endsection
		@section('page-content')
				<div class="row">
					<div class="col-xs-12">
						<!-- PAGE CONTENT BEGINS -->
						<div class="row">
							<div class="col-xs-12">
								<h4 class="pink">
									<i class="icon-hand-right icon-animated-hand-pointer blue"></i>
									<a href="#modal-table" role="button" class="green" data-toggle="modal"> 用户列表 </a>
								</h4>
								<div class="table-responsive">
									<table id="sample-table-2" class="table table-striped table-bordered table-hover">
										<thead>
										<tr>
											<th class="center">
												<label>
													<input type="checkbox" class="ace" />
													<span class="lbl"></span>
												</label>
											</th>
											<th>用户名</th>
											<th>id</th>
											<th class="hidden-480">Clicks</th>
											<th>
												<i class="icon-time bigger-110 hidden-480"></i>
												注册时间
											</th>
											<th class="hidden-480">状态</th>

											<th>操作</th>
										</tr>
										</thead>
										<tbody>
										@foreach($users as $user)
											<tr>
												<td class="center">
													<label>
														<input type="checkbox" class="ace" />
														<span class="lbl"></span>
													</label>
												</td>
												<td>
													<a href="#">{{$user->username}}</a>
												</td>
                                                <td>{{$user->id}}</td>
												<td class="hidden-480">3,330</td>
												<td>{{$user->created_at}}</td>
												<td class="hidden-480">
													@if($user->state==0)
														<span class="label label-sm label-warning">正常</span>
													@elseif($user->state==1)
														<span class="label label-sm label-inverse arrowed-in">禁言</span>
													@endif
												</td>
												<td>
													<div class="visible-md visible-lg hidden-sm hidden-xs action-buttons">
														<a class="blue" href="javascript:void (0)" data-id="{{$user->id}}">
															<i class="icon-flag bigger-120"></i>
														</a>
                                                        <a class="red" href="javascript:void (0)" data-id="{{$user->id}}">
                                                            <i class="icon-trash bigger-130"></i>
                                                        </a>
                                                    </div>

                                                    <div class="visible-xs visible-sm hidden-md hidden-lg">
                                                        <div class="inline position-relative">
                                                            <ul class="dropdown-menu dropdown-only-icon dropdown-yellow pull-right dropdown-caret dropdown-close">
                                                                <li>
																			<a href="#" class="tooltip-info" data-rel="tooltip" title="View">
																				<span class="blue">
																					<i class="icon-zoom-in bigger-120"></i>
																				</span>
																			</a>
																		</li>
                                                                <li>
																			<a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
																				<span class="red">
																					<i class="icon-trash bigger-120"></i>
																				</span>
																			</a>
																		</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
										@endforeach

										</tbody>
											</table>
										</div>
									</div>
								</div>

								<div id="modal-table" class="modal fade" tabindex="-1">
									<div class="modal-dialog">
										<div class="modal-content">
											<div class="modal-header no-padding">
												<div class="table-header">
													<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
														<span class="white">&times;</span>
													</button>
													Results for "Latest Registered Domains
												</div>
											</div>

											<div class="modal-footer no-margin-top">
												<button class="btn btn-sm btn-danger pull-left" data-dismiss="modal">
													<i class="icon-remove"></i>
													Close
												</button>

												<ul class="pagination pull-right no-margin">
													<li class="prev disabled">
														<a href="#">
															<i class="icon-double-angle-left"></i>
														</a>
													</li>

													<li class="active">
														<a href="#">1</a>
													</li>

													<li>
														<a href="#">2</a>
													</li>

													<li>
														<a href="#">3</a>
													</li>

													<li class="next">
														<a href="#">
															<i class="icon-double-angle-right"></i>
														</a>
													</li>
												</ul>
											</div>
										</div><!-- /.modal-content -->
									</div><!-- /.modal-dialog -->
								</div><!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
				</div><!-- /.row -->
		@endsection

		@section('js')
		<!-- page specific plugin scripts -->
		<script>
            {{--修改用户状态--}}
            $('.blue').click(function () {
                var $link = $(this);
                var $id = $link.attr('data-id');

                $.ajax({
                    url:"{{url('user/edit')}}",
                    data:'id='+$id,
                    success:function ($result) {
                        $link.parents('tr').children().eq(5).html($result);
                        window.alert('修改成功');
                    }
                });
            });

         //   删除用户
            {{--删除--}}
            $('.red').click(function () {
                var $link = $(this);
                var $id = $link.attr('data-id');

                $.ajax({
                    url:"{{url('user/delete')}}",
                    data:'id='+$id,
                    success:function ($result) {
                        if($result)
                        {
                            window.alert('删除成功！');
                            $link.parents('tr').remove();
                        }else {
                            window.alert('删除失败！');
                        }
                    }
                });
            });
		</script>

		<script src="assets/js/jquery.dataTables.min.js"></script>
		<script src="assets/js/jquery.dataTables.bootstrap.js"></script>

		<!-- inline scripts related to this page -->

		<script type="text/javascript">
			jQuery(function($) {
				var oTable1 = $('#sample-table-2').dataTable( {
				"aoColumns": [
			      { "bSortable": false },
			      null, null,null, null, null,
				  { "bSortable": false }
				] } );
				
				
				$('table th input:checkbox').on('click' , function(){
					var that = this;
					$(this).closest('table').find('tr > td:first-child input:checkbox')
					.each(function(){
						this.checked = that.checked;
						$(this).closest('tr').toggleClass('selected');
					});
						
				});
			
			
				$('[data-rel="tooltip"]').tooltip({placement: tooltip_placement});
				function tooltip_placement(context, source) {
					var $source = $(source);
					var $parent = $source.closest('table')
					var off1 = $parent.offset();
					var w1 = $parent.width();
			
					var off2 = $source.offset();
					var w2 = $source.width();
			
					if( parseInt(off2.left) < parseInt(off1.left) + parseInt(w1 / 2) ) return 'right';
					return 'left';
				}
			})
		</script>

		@endsection
