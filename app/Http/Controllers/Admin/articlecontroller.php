<?php

namespace App\Http\Controllers\admin;
 
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\articlepostrequest;
class articlecontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getIndex()
    {
        //
        $res = DB::table('article')->select('*')->paginate(15);
        return view('/admin/article/index',['res'=>$res]);
        // dd($res);
    }
    public function getAdd(){
        $cates = CatesController::getCates();
        return view('/admin/article/add',['cates'=>$cates]);
    }


    public function postInsert(articlepostrequest $request){
        $data = $request->except('_token');
      
    //     dd($request->hasFile('picture'));
        
        if ($request->hasFile('picture')) {
            
            //判断是否为有效的上传文件
            if ($request->file('picture')->isValid()) {
                
                //获取文件后缀
                $ext = $request->file('picture')->getClientOriginalExtension();

                //拼装随机的文件名
                $newName = md5(date('YmdHis')).'.'.$ext;
          
                //执行上传
                $res = $request->file('picture')->move('./pics', $newName);
               
                //判断
                if($res){

                    //将图片名称放入数组
                    $data['picture'] = $newName;
                    // dd($data);
                    //将用户id放入数组
                    $data['user_id'] = $request->session()->get('uid');

                    //执行添加
                    $info =DB::table('article')->insert($data);

                    //判断是否成功
                    if($info){
                        return redirect('admin/article/index')->with('success','恭喜,文章发布成功!');
                    }else{
                        return back()->with('error','抱歉,发布失败!');
                    }

                }else{
                    return back()->with('error','抱歉,图片上传失败!');
                }

            }else{
                return back()->with('error','不是有效的上传文件!');
            }

        }else{
            return back()->with('error','没有上传文件!');
        }
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    public function getEdit(){
        $cates = CatesController::getCates();
        return view('/admin/article/edit',['cates'=>$cates]);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
