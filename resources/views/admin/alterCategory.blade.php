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

            <form class="form-horizontal" role="form" action="{{url('category/update')}}" method="post">
                {{csrf_field()}}
                <input type="text" hidden="hidden" value="{{$id}}" name="id">
                <div class="form-group">
                    <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 视频分类 </label>

                    <div class="col-sm-9">
                        <input type="text" id="form-field-1" placeholder="名称" class="col-xs-10 col-sm-5" name="category" value="{{$category->category}}" />
                    </div>
                </div>

                <div class="space-4"></div>


                <div class="clearfix form-actions">
                    <div class="col-md-offset-3 col-md-9">
                        <button class="btn btn-info" type="submit">
                            <i class="icon-ok bigger-110"></i>
                            确认修改
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

