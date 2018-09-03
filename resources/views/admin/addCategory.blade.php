@extends('layouts.admin')
@section('title')首页--后台管理系统@endsection
@section('meta-keywords')
    <meta name="keywords" content="视频,video" />
@endsection
@section('meta-description')
    <meta name="description" content="个人视频分享" />
@endsection
@section('active')分类管理
@endsection
@section('page-css')
    {{--<link rel="stylesheet" href="assets/css/jquery-ui-1.10.3.custom.min.css" />--}}
    {{--<link rel="stylesheet" href="assets/css/chosen.css" />--}}
    {{--<link rel="stylesheet" href="assets/css/datepicker.css" />--}}
    {{--<link rel="stylesheet" href="assets/css/bootstrap-timepicker.css" />--}}
    {{--<link rel="stylesheet" href="assets/css/daterangepicker.css" />--}}
    {{--<link rel="stylesheet" href="assets/css/colorpicker.css" />--}}
@endsection
@section('page-content')
    @if(session()->has('message'))
    <div id="message">
        {{session('message')}}<span id="s">3</span>
    </div>
    @endif
    <div class="row">
        <div class="col-xs-12">
            <!-- PAGE CONTENT BEGINS -->

            <form class="form-horizontal" role="form" action="{{url('category/insert')}}" method="post">
                {{csrf_field()}}
                <div class="form-group">
                    <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 视频分类 </label>

                    <div class="col-sm-9">
                        <input type="text" id="form-field-1" placeholder="名称" class="col-xs-10 col-sm-5" name="category" />
                    </div>
                </div>

                <div class="space-4"></div>


                <div class="clearfix form-actions">
                    <div class="col-md-offset-3 col-md-9">
                        <button class="btn btn-info" type="submit">
                            <i class="icon-ok bigger-110"></i>
                            添加
                        </button>

                        <button class="btn" type="reset">
                            <i class="icon-undo bigger-110"></i>
                            重置
                        </button>
                    </div>
                </div>

                <hr />

            </form>

        </div><!-- /.col -->


        <div class="row">
            <div class="col-xs-12">
                <div class="table-responsive">
                    <table id="sample-table-1" class="table table-striped table-bordered table-hover">
                        <thead>
                            <tr>
                                <th class="center">
                                    <label>
                                        <input type="checkbox" class="ace" />
                                        <span class="lbl"></span>
                                    </label>
                                </th>
                                <th>id</th>
                                <th>栏目</th>
                                <th class="hidden-480">浏览量</th>

                                <th class="hidden-480">状态</th>

                                <th>操作</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach($category as $item)
                            <tr>
                                <td class="center">
                                    <label>
                                        <input type="checkbox" class="ace" />
                                        <span class="lbl"></span>
                                    </label>
                                </td>

                                <td>
                                    <a href="#">{{$item->id}}</a>
                                </td>
                                <td>{{$item->category}}</td>
                                <td class="hidden-480">{{$item->clickNum($item->id)}}</td>

                                <td class="hidden-480">
                                    <span class="label label-sm label-warning">上线</span>
                                </td>

                                <td>
                                    <div class="visible-md visible-lg hidden-sm hidden-xs btn-group">

                                        <a href="{{url('alterCategory/'.$item->id)}}"><button class="btn btn-xs btn-info">
                                                <i class="icon-edit bigger-120"></i>
                                            </button></a>

                                        <button class="btn btn-xs btn-danger">
                                            <i class="icon-trash bigger-120"></i>
                                        </button>

                                        <button class="btn btn-xs btn-warning">
                                            <i class="icon-flag bigger-120"></i>
                                        </button>
                                    </div>

                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div><!-- /.table-responsive -->
            </div><!-- /span -->
        </div><!-- /row -->
    </div><!-- /.row -->
@endsection
@section('js')

    <script type="text/javascript">
        var num=3;
        function message()
        {
            num--;
            if (num==0)
            {
                $('#message').hide();
            }
            else {
                $('#s').html(num);
                setTimeout(message,1000);
            }
        }


        $('table th input:checkbox').on('click' , function(){
            var that = this;
            $(this).closest('table').find('tr > td:first-child input:checkbox')
                .each(function(){
                    this.checked = that.checked;
                    $(this).closest('tr').toggleClass('selected');
                });

        });
    </script>

<!--[if lte IE 8]>
<script src="assets/js/excanvas.min.js"></script>
<![endif]-->

    {{--<script src="assets/js/jquery-ui-1.10.3.custom.min.js"></script>--}}
    {{--<script src="assets/js/jquery.ui.touch-punch.min.js"></script>--}}
    {{--<script src="assets/js/chosen.jquery.min.js"></script>--}}
    {{--<script src="assets/js/fuelux/fuelux.spinner.min.js"></script>--}}
    {{--<script src="assets/js/date-time/bootstrap-datepicker.min.js"></script>--}}
    {{--<script src="assets/js/date-time/bootstrap-timepicker.min.js"></script>--}}
    {{--<script src="assets/js/date-time/moment.min.js"></script>--}}
    {{--<script src="assets/js/date-time/daterangepicker.min.js"></script>--}}
    {{--<script src="assets/js/bootstrap-colorpicker.min.js"></script>--}}
    {{--<script src="assets/js/jquery.knob.min.js"></script>--}}
    {{--<script src="assets/js/jquery.autosize.min.js"></script>--}}
    {{--<script src="assets/js/jquery.inputlimiter.1.3.1.min.js"></script>--}}
    {{--<script src="assets/js/jquery.maskedinput.min.js"></script>--}}
    {{--<script src="assets/js/bootstrap-tag.min.js"></script>--}}

@endsection

