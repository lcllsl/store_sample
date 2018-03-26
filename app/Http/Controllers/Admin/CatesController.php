<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use DB;
use App\Models\Cates;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class CatesController extends Controller
{
    /*
            考虑到我们的商城主页视图界面当中的分类信息遍历相对困难,因此,我们需要采用一种方式,
        将我们的分类数据拼装成一个可以直接使用的数组! 案例如下:
        
        $cates = [
                    [
                        'id'=>1,
                        'name'=>'服装',
                        'sub'=>[
                                    [
                                        'id'=>3,
                                        'name'=>'男装',
                                        'sub'=>[
                                                    [
                                                        'id'=>'5',
                                                        'name'=>'羽绒服',
                                                        'sub'=>[],
                                                    ],
                                                    [
                                                        'id'=>'6',
                                                        'name'=>'毛呢外套',
                                                    ],
                                               ],
                                    ],
                                    [
                                        'id'=>4,
                                        'name'=>'女装',
                                    ],
                               ],
                    ],
                    [
                        'id'=>2,
                        'name'=>'箱包'
                    ],
                ]
    */

    /**
     * 前台分类信息遍历数据封装的接口
     */
    public static function getCatesByPid($pid)
    {
        //查询父类下所有的子类信息的语句
        $res = Cates::where('pid',$pid)->get()->toArray();

        //定义存储封装之后数组信息的变量
        $data = [];

        //遍历分类信息
        foreach($res as $key=>$val){

            //往父类sub中,放入所有的子类信息
            $val['sub'] = self::getCatesByPid($val['id']);
            $data[] = $val;
        }
        
        //将封装完毕的信息返回
        return $data;
    }

    /**
     * 获得分类排序后的列表的方法
     */
    public static function getCates()
    {
        //获取所有类别信息
        $cates = Cates::select(DB::raw('*,concat(path,",",id) npath'))
                      ->orderBy('npath')
                      ->get()
                      ->toArray();
                      
        //遍历所有的分类信息
        foreach($cates as $key=>$val){

            //获取逗号数量
            $len = substr_count($val['path'],',');

            //取得分类的名称
            $cates[$key]['name'] = str_repeat('|----',$len).$val['name'];
        }

        //返回数组
        return $cates;
    }

    /**
     * 加载类别列表的方法
     */
    public function getIndex()
    {
        //测试
        // var_dump(self::getCatesByPid(0));

        $cates = self::getCates();
        return view('Admin/Cates/index',['cates'=>$cates]);
    }

    /**
     * 加载类别添加的表单
     */
    public function getAdd($id='')
    {
        //查询所有类别信息
        $cates = self::getCates();

        return view('Admin/Cates/add',['cates'=>$cates,'id'=>$id]);
    }

    /**
     * 执行类别添加的方法
     */
    public function postInsert(Request $request)
    {
        //获取pid(父类id)信息
        $pid = $request->pid;

        //获取用户提交类别信息
        $data = $request->except('_token');

        //判断是否添加父类
        if($pid==0){

            //追加path路径信息
            $data['path'] = 0;

            //执行父类信息的添加
            $res = Cates::insert($data);

        }else{

            //先将父类的path路径查询出来
            $path = Cates::where('id',$request->pid)->first()->toArray()['path'];

            //拼装子类的path路径信息
            $path = $path.','.$request->pid;

            //获取其他信息,并且将path拼装进去
            $data['path'] = $path;

            //执行子类信息添加
            $res = Cates::insert($data);
            
        }

        //判断子类是否添加成功
        if($res){
            return redirect('admin/cates/index')->with('success',$data['name'].'类添加成功!');
        }else{
            return back()->with('error',$data['name'].'类添加失败!');
        }
        
    }

    /**
     * 删除类别的方法
     */
    public function getDelete($id)
    {
        //判断该分类下是否有子类别,若有,不能删,若没有,可以删
        $res = Cates::where('pid',$id)->get()->toArray();

        //判断
        if(!empty($res)){
            return back()->with('error','该类别下有子类信息,请慎重操作!');
        }else{

            //此处其实应当再做判断,判断最底层子类下,是否有商品信息,若有商品信息,也不能删除
            $info = Cates::where('id',$id)->delete();

            //判断是否删除成功
            if($info){
                return redirect('admin/cates/index')->with('success','类别删除成功!');
            }else{
                return back()->with('error','类别删除失败!');
            }
        }
    }

    /**
     * 加载修改表单的方法
     */
    public function getEdit($id)
    {
        //通过id查询出正在进行修改的分类名称
        $res = Cates::select('id','name')->where('id',$id)->first()->toArray();

        //解析模板
        return view('Admin/Cates/edit',['res'=>$res]);
    }

    /**
     * 执行信息修改的方法
     */
    public function postUpdate(Request $request)
    {
        //获取id
        $id = $request->id;
        $info = $request->except(['_token','id']);
        $res = Cates::where('id',$id)->update($info);
        if($res){
            return redirect('admin/cates/index')->with('success','类别名称修改成功!');
        }else{
            return back()->with('error','类别名称修改失败!');
        }
    }
}
