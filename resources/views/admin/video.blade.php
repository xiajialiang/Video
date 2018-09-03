@extends('layouts.admin')

@section('title')表格--后台管理系统@endsection

@section('meta-keywords')
    <meta name="keywords" content="视频,video" />
@endsection

@section('meta-description')
    <meta name="description" content="个人视频分享" />
@endsection
@section('active')控制台
@endsection
@section('page-content')
    <div class="row">
        <div class="col-xs-12">
            <div class="row">
                <div class="col-xs-12">
                    <h4 class="pink">
                        <i class="icon-hand-right icon-animated-hand-pointer blue"></i>
                        <a href="#modal-table" role="button" class="green" data-toggle="modal"> Table Inside a Modal Box </a>
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
                                <th>片名</th>
                                <th>上传者</th>
                                <th class="hidden-480">点击量</th>
                                <th class="hidden-480">点赞量</th>

                                <th>
                                    <i class="icon-time bigger-110 hidden-480"></i>上传时间
                                </th>
                                <th class="hidden-480">状态</th>
                                <th>操作</th>
                            </tr>
                            </thead>

                            <tbody>
                            @foreach($videos as $video)
                                <tr>
                                    <td class="center">
                                        <label>
                                            <input type="checkbox" class="ace" />
                                            <span class="lbl"></span>
                                        </label>
                                    </td>
                                    <td>
                                        <a href="#">{{$video->title}}</a>
                                    </td>
                                    <td>{{$video->author->username}}</td>
                                    <td class="hidden-480">{{$video->clicknum}}</td>
                                    <td class="hidden-480">{{$video->like}}</td>
                                    <td>{{date('Y-m-d',$video->created_at)}}</td>
                                    <td class="hidden-480">
                                        @if($video->state)
                                            <span class="label label-sm label-success">正常</span>
                                        @else
                                            <span class="label label-sm label-inverse arrowed-in">异常</span>
                                        @endif

                                    </td>
                                    <td>
                                        <div class="visible-md visible-lg hidden-sm hidden-xs action-buttons">
                                            {{--放大镜--}}
                                            <a class="blue" href="javascript:void(0)" data-id="{{$video->id}}">
                                                <i class="icon-flag bigger-120"></i>
                                            </a>

                                            {{--<a class="green" href="javascript:void(0)">--}}
                                                {{--<i class="icon-pencil bigger-130"></i>--}}
                                            {{--</a>--}}

                                            <a class="red" href="javascript:void(0) " data-id="{{$video->id}}">
                                                <i class="icon-trash bigger-130"></i>
                                            </a>
                                        </div>

                                        <div class="visible-xs visible-sm hidden-md hidden-lg">
                                            <div class="inline position-relative">
                                                <button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown">
                                                    <i class="icon-caret-down icon-only bigger-120"></i>
                                                </button>

                                                <ul class="dropdown-menu dropdown-only-icon dropdown-yellow pull-right dropdown-caret dropdown-close">
                                                    <li>
                                                        <a href="#" class="tooltip-info" data-rel="tooltip" title="View">
															<span class="blue">
                                                                <i class="icon-zoom-in bigger-120"></i>
                                                            </span>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
                                                            <span class="green">
                                                                <i class="icon-edit bigger-120"></i>
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

    </div><!-- /.row -->
@endsection


@section('js')
    <!-- page specific plugin scripts -->
        <script>
            {{--删除--}}
            $('.red').click(function () {
                var $link = $(this);
                var $id = $link.attr('data-id');

                $.ajax({
                    url:"{{url('video/delete')}}",
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

            //修改状态
            $('.blue').click(function () {
                var $link = $(this);
                var $id = $link.attr('data-id');
                // alert($id);
                $.ajax({
                    url:"{{url('video/edit')}}",
                    data:'id='+$id,
                    success:function ($result) {
                        $link.parents('tr').children().eq(6).html($result);
                        window.alert('修改成功');
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
                var $parent = $source.closest('table');
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
