<?php

namespace App\Http\Controllers\admin;
use DB;
use Illuminate\Http\Request;
use App\Models\goods;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class goodscontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getIndex()
    {
        //
        $brand =  DB::table('brand')->select('*')->get();
        //dd($brand);
        $res = goods::select('*')->where('iskill','1')->paginate(15);
        // dd($res);
        return view('admin/goods/index',['res'=>$res,'tit'=>'商品目录','brand'=>$brand]);
    }
    public function getTrash(){
        $res = goods::select('*')->where('iskill','1')->paginate(15);
        // dd($res);
        return view('admin/goods/index',['res'=>$res,'tit'=>'回收站']);
    }
    public function getAdd(){
        $brand = DB::table('brand')->select('*')->get();
        $cates = CatesController::getCates();
        return view('admin/goods/add',['cates'=>$cates,'brand'=>$brand]);
    }
    public function postInsert(Request $request){
        $this->validate($request, [
            'gname' => 'required',
            'gimg' => 'required',
            'gstock' => 'required',
            'cateid' => 'required',
            'brandid' => 'required',
            'gdesc' => 'required',
            'gcolor' => 'required',
            'gsize' => 'required',
        ],[
            'gname.required' => '名不能为空!',
            'gimg.required' => '插图不能为空!',
            'gstock.required' => '库存值不能为空!',
            'cateid.required' => '类别不能为空!',
            'brandid.required' => '品牌不能为空!',
            'gdesc.required' => '描述不能为空!',
            'gcolor.required' => '颜色不能为空!',
            'gsize.required' => '尺码不能为空!',
        ]);
        $data = $request->except('_token');
        $data['gcolor']=implode(',',$data['gcolor']);
        $data['gsize']=implode(',',$data['gsize']);
     
        if ($request->hasFile('gimg')) {
            
            //判断是否为有效的上传文件
            if ($request->file('gimg')->isValid()) {
                
                //获取文件后缀
                $ext = $request->file('gimg')->getClientOriginalExtension();

                //拼装随机的文件名
                $newName = md5(date('YmdHis')).'.'.$ext;
          
                //执行上传
                $res = $request->file('gimg')->move('./gpics', $newName);
               
                //判断
                if($res){

                    //将图片名称放入数组
                    $data['gimg'] = $newName;
                 //   dd($data);
                    //将用户id放入数组
                   // $data['user_id'] = $request->session()->get('uid');

                    //执行添加
                    $info =DB::table('goods')->insert($data);

                    //判断是否成功
                    if($info){
                        return redirect('admin/goods/index')->with('success','恭喜,文章发布成功!');
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
        dd($res);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getEdit($id){
        $brand = DB::table('brand')->select('*')->get();
      
        $cates = CatesController::getCates();
        $res = goods::select('*')->where('id',$id)->first()->toArray();
     
        $res['gcolor']=explode(',',$res['gcolor']);
        $res['gsize']=explode(',',$res['gsize']);
     
        return view('admin/goods/edit',['cates'=>$cates,'res'=>$res,'brand'=>$brand]);
   

    }

    



    public function create()
    {
        //
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
    public function postUpdate(Request $request,$id)
    {
        //
        $this->validate($request, [
            'gname' => 'required',
            'gimg' => 'required',
            'gstock' => 'required',
            'cateid' => 'required',
            'brandid' => 'required',
            'gdesc' => 'required',
            'gcolor' => 'required',
            'gsize' => 'required',
        ],[
            'gname.required' => '名不能为空!',
            'gimg.required' => '插图不能为空!',
            'gstock.required' => '库存值不能为空!',
            'cateid.required' => '类别不能为空!',
            'brandid.required' => '品牌不能为空!',
            'gdesc.required' => '描述不能为空!',
            'gcolor.required' => '颜色不能为空!',
            'gsize.required' => '尺码不能为空!',
        ]);
        $data = $request->except('_token');
        
        $data['gcolor']=implode(',', $data['gcolor']);
        $data['gsize']=implode(',', $data['gsize']);
        echo $id;
        if ($request->hasFile('gimg')) {
            
            //判断是否为有效的上传文件
            if ($request->file('gimg')->isValid()) {
                
                //获取文件后缀
                $ext = $request->file('gimg')->getClientOriginalExtension();

                //拼装随机的文件名
                $newName = md5(date('YmdHis')).'.'.$ext;
          
                //执行上传
                $res = $request->file('gimg')->move('./gpics', $newName);
               
                //判断
                if($res){

                    //将图片名称放入数组
                    $data['gimg'] = $newName;
                 //   dd($data);
                    //将用户id放入数组
                   // $data['user_id'] = $request->session()->get('uid');

                    //执行添加
                    $info =goods::where('id',$id)->update($data);

                    //判断是否成功
                    if($info){
                        return redirect('admin/goods/index')->with('success','恭喜,文章发布成功!');
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
            $info =goods::where('id',$id)->update($data);
            if($info){
                return redirect('admin/goods/index')->with('success','恭喜,商品修改成功!');
            }else{
                return back()->with('error','抱歉,发布失败!');
            }
        }
       

     
    }
    public function getDelete($id){
       $res = goods::where('id',$id)->get()->except('_token')->toArray();
   
       $sign = $res[0]['iskill'];
       if($sign==0){
           $info =goods::where('id',$id)->update(['iskill'=>1]);
           if($info){
                return redirect('admin/goods/index')->with('success','该商品已成功移入回收站!'); 
           }
       }else{
            $info =goods::where('id',$id)->update(['iskill'=>0]);
            if($info){
                return redirect('admin/goods/index')->with('success','该商品已成功从回收站恢复!'); 
           }
           
       }
        
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
