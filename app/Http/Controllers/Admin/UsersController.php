<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Hash;
use App\Models\Users;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //判断用户是否提交了搜索条件
        if($request->keywords){
            //查询所有的用户信息
            $users = Users::where('username','like','%'.$request->keywords.'%')
                          ->paginate($request->num);
        }else{
            //没有查询条件是的语句
            $users = Users::paginate($request->num ?? 10);
        }

        // dd($users->count());             //当前页有多少条
        // dd($users->currentPage());       //当前页
        // dd($users->hasMorePages());      //判断是否还有下一页
        // dd($users->lastPage());          //总页数
        // dd($users->nextPageUrl());       //下一页URL地址
        // dd($users->perPage());           //每页条数
        // dd($users->previousPageUrl());   //上一页URL地址
        // dd($users->total());             //总条数
        // dd($users->url($page));          //获取指定页码的URL地址


        //加载用户列表模板
        return view('Admin/Users/index',['users'=>$users,'request'=>$request]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //加载添加用户的模板
        return view('Admin/Users/add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //手动验证
        // if(!$request->username){
        //     //跳转回上一页面(同时往session当中压入了一条信息)
        //     return back()->with('error', '您的用户名为空!');
        // }

        //自动验证
        $this->validate($request, [
            'username' => 'required',
            'password' => 'required',
            'surepass' => 'required|same:password',
            'status' => 'required',
            'auth' => 'required',
        ],[
            'username.required' => '用户名不能为空!',
            'password.required' => '密码不能为空!',
            'surepass.required' => '确认密码不能为空!',
            'surepass.same' => '两次输入的密码不一致!',
            'status.required' => '请选择一个状态!',
            'auth.required' => '请选择用户权限',
        ]);

        //获取用户添加的信息
        $data = $request->except(['_token','surepass']);

        //给用户密码进行加密
        $data['password'] = Hash::make($data['password']);
        // $data['token'] = str_random(50); //用于做验证的随机字符串

        //将信息添加到数据库
        $res = Users::insert($data);

        //判断是否添加成功
        if($res){
            //返回用户列表页
            return redirect('/admin/users')->with('success','添加成功!');
        }else{
            //返回上一页
            return back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
