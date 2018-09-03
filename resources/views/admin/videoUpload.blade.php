@extends('layouts.admin')
@section('title')首页--后台管理系统@endsection
@section('meta-keywords')
    <meta name="keywords" content="视频,video" />
@endsection
@section('meta-description')
    <meta name="description" content="个人视频分享" />
@endsection
@section('active')视频上传
@endsection
@section('page-css')
    {{--<link rel="stylesheet" href="assets/css/jquery-ui-1.10.3.custom.min.css" />--}}
    {{--<link rel="stylesheet" href="assets/css/chosen.css" />--}}
    {{--<link rel="stylesheet" href="assets/css/datepicker.css" />--}}
    {{--<link rel="stylesheet" href="assets/css/bootstrap-timepicker.css" />--}}
    {{--<link rel="stylesheet" href="assets/css/daterangepicker.css" />--}}
    {{--<link rel="stylesheet" href="assets/css/colorpicker.css" />--}}
    <style>
        #drop{
            width: 400px;
        }
    </style>
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

            <form class="form-horizontal" role="form" action="{{url('video/insert')}}" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                <input type="text" hidden="hidden" value="{{session('admin_id')}}" name="authorid">
                <div class="form-group">
                    <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 标题</label>

                    <div class="col-sm-9">
                        <input type="text" name="title" id="form-field-1" placeholder="Title" class="col-xs-10 col-sm-5" />
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label no-padding-right" for="form-field-4">分类</label>

                    <div class="col-sm-9">
                        <select name="categoryid">
                            @foreach($category as $item)
                                <option value="{{$item->id}}">{{$item->category}}</option>
                            @endforeach
                        </select>

                    </div>
                </div>

                <div class="space-4"></div>

                <div class="form-group">
                    <label class="col-sm-3 control-label no-padding-right" for="form-field-2"> 描述 </label>

                    <div class="col-sm-9">
                        <input type="text" name="content" id="form-field-2" placeholder="简介" class="col-xs-10 col-sm-5" />

                    </div>
                </div>

                <div class="space-4"></div>




                <div class="form-group">
                    <label class="col-sm-3 control-label no-padding-right" for="form-field-5">视频</label>
                        <div class="col-sm-9 col-sm-4" id="drop">
                            <input type="file" id="id-input-file-3" name="video" />
                        </div>
                </div>
                <div class="clearfix form-actions">
                    <div class="col-md-offset-3 col-md-9">
                        <button class="btn btn-info" type="submit">
                            <i class="icon-ok bigger-110"></i>
                            Submit
                        </button>

                        &nbsp; &nbsp; &nbsp;
                        <button class="btn" type="reset">
                            <i class="icon-undo bigger-110"></i>
                            Reset
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
        
        $('.remove').click(function () {
            alert('nihao');
        });

        $('#id-input-file-3').ace_file_input({
            style:'well',
            btn_choose:'Drop files here or click to choose',
            btn_change:null,
            no_icon:'icon-cloud-upload',
            droppable:true,
            thumbnail:'small'//large | fit
            //,icon_remove:null//set null, to hide remove/reset button
            /**,before_change:function(files, dropped) {
						//Check an example below
						//or examples/file-upload.html
						return true;
					}*/
            /**,before_remove : function() {
						return true;
					}*/
            ,
            preview_error : function(filename, error_code) {
                //name of the file that failed
                //error_code values
                //1 = 'FILE_LOAD_FAILED',
                //2 = 'IMAGE_LOAD_FAILED',
                //3 = 'THUMBNAIL_FAILED'
                //alert(error_code);
            }

        }).on('change', function(){
            //console.log($(this).data('ace_input_files'));
            //console.log($(this).data('ace_input_method'));
        });



        $('#id-input-file-1 , #id-input-file-2').ace_file_input({
            no_file:'No File ...',
            btn_choose:'Choose',
            btn_change:'Change',
            droppable:false,
            onchange:null,
            thumbnail:false //| true | large
            //whitelist:'gif|png|jpg|jpeg'
            //blacklist:'exe|php'
            //onchange:''
            //
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

