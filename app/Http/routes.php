<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

//前台路由组

//后台路由组
Route::group(['prefix'=>'admin','middleware'=>'login'], function(){

	//加载后台主页
	Route::resource('index', 'Admin\IndexController');

	//加载用户模块的路由
	Route::resource('users', 'Admin\UsersController');

	//加载类别模块的路由
    Route::controller('cates', 'Admin\CatesController');
    
	Route::controller('article', 'Admin\articleController');
	Route::controller('goods', 'Admin\goodsController');
	
});

//测试验证码验证的路由

Route::any('/login', function()
{
   
    
    if (Request::getMethod() == 'POST')
    {
        
        $rules = ['captcha' => 'required|captcha'];
        $validator = Validator::make(Input::all(), $rules);
        if ($validator->fails())
        {
            echo "<script>alert('抱歉,验证码错误!');window.location.href='/login'</script>";
        }
        else
        {
            $username=Request::input('username');
            $password=Request::input('password');
            $res = DB::select('select * from users where username = ?',[$username]);

            if(empty($res)){
            echo "<script>alert('抱歉,用户不存在');window.location.href='/login'</script>";
            }
            if(Hash::check($password, $res[0]['password'])){

                Request::session()->put('uid', $res[0]['id']);
                Request::session()->put('uname', $res[0]['username']);
                echo "<script>alert('恭喜,登录成功!');window.location.href='/admin/index'</script>";           
            }else{
                echo "<script>alert('哦豁,登录失败!');window.location.href='/login'</script>";
                
            }
            
        } 
       
    }
    return view('/admin/login');
    // $form = '<form method="post" action="captcha-test">';
    // $form .= '<input type="hidden" name="_token" value="' . csrf_token() . '">';
    // $form .= '<p>' . captcha_img() . '</p>';
    // $form .= '<p><input type="text" name="captcha"></p>';
    // $form .= '<p><button type="submit" name="check">Check</button></p>';
    // $form .= '</form>';
    
});
Route::any('/logout', function(){
    Request::session()->flush();
    return view('/admin/login');
});