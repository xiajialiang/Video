<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>管理员登录</title>

    <link rel="stylesheet" href="{{asset('/')}}css/font-awesome.min.css"/>
    <link rel="stylesheet" href="{{asset('/')}}css/loginMy.css"/>

    <style>
        html,body{width:100%;}
        image{
            margin-top: 20px;
        }
    </style>

</head>
<body>

<div class="main">

    <div class="center">
        <form action="{{url('admin/doLogin')}}" id="formOne" method="post"  >
            {{csrf_field()}}
            <i class="fa fa-user Cone">  | </i>
            <input type="text" name="username" id="user" placeholder="用户名" onblur="checkUser()"/>
            <span id="user_pass"></span>
            <br/>
            <i class="fa fa-key Cone">  | </i>
            <input type="password" name="password" id="pwd" placeholder="密码" onblur="checkUser1()"/>

            <br/>

            <div>
                <i class="fa fa-folder-open Cone">  | </i>
                <input type="text" name="captcha" id="surePwd" placeholder="验证码" onblur="checkUser2()" style="width: 180px ;display:inline-block;vertical-align:middle;" />

                <img src="{{captcha_src()}}" alt="验证码"  onclick="attrCaptcha()" id="captcha" style="vertical-align:middle;">
                <br/>
                {{--<a href="javascript:void (0)" onclick="attrCaptcha()"  style="align-content: right">点击更换验证码</a>--}}
            </div>


            <input type="submit" value="登录" id="submit" name="submit">
            <br/>
        </form>
    </div>

</div>


<script type="text/javascript" src="{{asset('/')}}js/loginMy.js"></script>
<script type="text/javascript" src="{{asset('/')}}js/jquery-2.1.1.js"></script>
<script type="text/javascript">
    function attrCaptcha() {
        var $tmp = 12;
        var $src = "{{captcha_src()}}"+'?'+Math.random();
        $('#captcha').prop('src',$src);

    }
</script>
</body>
</html>