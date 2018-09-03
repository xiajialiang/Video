<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//前端页面
Route::group(['prefix'=>'','namespace'=>'Index'],function (){
    Route::get('/','IndexController@index');
    Route::get('gallery/{id}','IndexController@gallery');
    Route::get('single/{id}','IndexController@single');
    Route::get('like','IndexController@like');
    Route::get('test','IndexController@test');
    Route::get('search','IndexController@search');
});
//后台页面
Route::group(['prefix'=>'','namespace'=>'Admin'],function (){
    Route::get('index','IndexController@index');
    Route::get('dropzone','IndexController@dropzone');
    Route::get('tables','IndexController@tables');
    Route::get('photo','IndexController@gallery');
    Route::get('addCategory','IndexController@addCategory');
    Route::get('alterCategory/{id}','IndexController@alterCategory');
    Route::get('user','IndexController@user');
    Route::get('videoUpload','IndexController@upload');
    Route::get('video','IndexController@video');

//    Route::get('down','VideoController@downLoad');

    Route::get('down',function (){
        return response()->download(realpath(base_path('public\upload\video')).'\friend.mp4');
    });
});
//管理员登录
Route::group(['prefix'=>'admin','namespace'=>'Admin'],function (){
    Route::get('login','LoginController@index');
    Route::post('doLogin','LoginController@doLogin');
    Route::get('loginout','LoginController@loginout');
});
//分类管理
Route::group(['prefix'=>'category','namespace'=>'Admin'],function (){
    Route::post('insert','CategoryController@insert');
    Route::post('update','CategoryController@update');
});
//视频管理
Route::group(['prefix'=>'video','namespace'=>'Admin'],function (){
    Route::post('insert','VideoController@insert');
    Route::post('videoEdit','VideoController@edit');
    Route::get('delete','VideoController@delete');
    Route::get('edit','VideoController@edit');
});
//用户管理
Route::group(['prefix'=>'user','namespace'=>'Admin'],function (){
    Route::get('edit','UserController@edit');
    Route::get('delete','UserController@delete');
});

Auth::routes();

//laravel自带登录表单
//Route::get('/home', 'HomeController@index')->name('home');

//用户登录
Route::group(['prefix'=>'user','namespace'=>'User'],function (){
    Route::get('login','LoginController@login');
    Route::post('doLogin','LoginController@doLogin');
    Route::post('register','LoginController@register');
    Route::get('loginOut','LoginController@loginOut');
});

//验证码
Route::get('captcha/{tmp}', 'CaptchaController@captcha');
//邮件
Route::get('mail','MailController@mail');
Route::group(['prefix'=>'chart','namespace'=>'Admin'],function (){
    Route::get('circle_chart','DataController@Circle_chart');
    Route::get('bar_chart','DataController@bar_chart');
});


