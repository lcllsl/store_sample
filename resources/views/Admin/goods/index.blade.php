@extends('Layouts.index')

@section('active6')
	active
@endsection

@section('title_name')
	浏览分类
@endsection

@section('container')
<div class="container">
    <div class="mws-panel grid_8 mws-collapsible">
        <div class="mws-panel-header">
            <span>{{$tit}}</span>
            <div class="mws-collapse-button mws-inset"></div>
        </div>
        <div class="mws-panel-inner-wrap" style="display: block;">
            <div class="mws-panel-body no-padding">
                <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper" role="grid">
                    <div id="DataTables_Table_0_length" class="dataTables_length">
                        <label>显示 <select size="1" name="DataTables_Table_0_length" aria-controls="DataTables_Table_0">
                            <option value="10" selected="selected">
                                10
                            </option>
                            <option value="25">
                                25
                            </option>
                            <option value="50">
                                50
                            </option>
                            <option value="100">
                                100
                            </option>
                        </select> 条</label>
                    </div>
                    <div class="dataTables_filter" id="DataTables_Table_0_filter">
                        <label>
                        	关键字: 
                        	<input aria-controls="DataTables_Table_0" type="text">
                        	<button type="submit" class="btn btn-primary">搜索</button>
                        </label>
                    </div>
                    <table class="mws-table mws-datatable dataTable" id="DataTables_Table_0" aria-describedby="DataTables_Table_0_info">
                        <thead>
                            <tr role="row">
                                    <th class="sorting_asc" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 136px;" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">
                                            商品ID
                                        </th>
                                <th class="sorting_asc" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 136px;" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">
                                    商品名
                                </th>
                                <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 187px;" aria-label="Browser: activate to sort column ascending">
                                        商品图
                                </th>
                                <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 173px;" aria-label="Platform(s): activate to sort column ascending">
                                        商品库存
                                </th>
                                <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 116px;" aria-label="Engine version: activate to sort column ascending">
                                        是否打折
                                </th>
                                <th class="sorting_disabled" role="columnheader" rowspan="1" colspan="1" style="width: 136px;" aria-label="">
                                        是否精品
                                </th>
                                <th class="sorting_disabled" role="columnheader" rowspan="1" colspan="1" style="width: 136px;" aria-label="">
                                        是否热销
                                </th>
                                <th class="sorting_disabled" role="columnheader" rowspan="1" colspan="1" style="width: 136px;" aria-label="">
                                        是否新品
                                </th>
                                <th class="sorting_disabled" role="columnheader" rowspan="1" colspan="1" style="width: 136px;" aria-label="">
                                        所属类别
                                </th>
                                <th class="sorting_disabled" role="columnheader" rowspan="1" colspan="1" style="width: 136px;" aria-label="">
                                        品牌id
                                </th>
                                <th class="sorting_disabled" role="columnheader" rowspan="1" colspan="1" style="width: 136px;" aria-label="">
                                        商品描述
                                </th>
                                <th class="sorting_disabled" role="columnheader" rowspan="1" colspan="1" style="width: 136px;" aria-label="">
                                        访问量
                                </th>
                                <th class="sorting_disabled" role="columnheader" rowspan="1" colspan="1" style="width: 136px;" aria-label="">
                                        销售量
                                </th>
                                <th class="sorting_disabled" role="columnheader" rowspan="1" colspan="1" style="width: 136px;" aria-label="">
                                        评价数
                                </th>
                                <th class="sorting_disabled" role="columnheader" rowspan="1" colspan="1" style="width: 136px;" aria-label="">
                                        颜色
                                </th>
                                <th class="sorting_disabled" role="columnheader" rowspan="1" colspan="1" style="width: 136px;" aria-label="">
                                        尺码
                                </th>
                                <th class="sorting_disabled" role="columnheader" rowspan="1" colspan="1" style="width: 136px;" aria-label="">
                                        创建时间
                                </th>
                                <th class="sorting_disabled" role="columnheader" rowspan="1" colspan="1" style="width: 136px;" aria-label="">
                                        修改时间
                                </th>
                                <th class="sorting_disabled" role="columnheader" rowspan="1" colspan="1" style="width: 136px;" aria-label="">
                                        操作
                                </th>
                            </tr>
                        </thead>
                        <tbody role="alert" aria-live="polite" aria-relevant="all">
                        @foreach($res as $k=>$v)
                        @if($k%2==0)
                            <tr class="odd">
                        @else
                            <tr class="even	">
                        @endif	
                                <td class=" sorting_1">
                                    {{$v['id']}}
                                </td>
                                <td class="">
                                    {{$v['gname']}}
                                </td>
                                <td class="">
                                        <img src="/gpics/{{$v['gimg']}}" alt="">
                                    
                                </td>
                                <td class="">
                                    {{$v['gstock']}}
                                </td>
                                <td class="">
                                        {{$v['issale']==1? '是':'否'}}
                                </td>
                                <td class="">
                                        {{$v['isbest']==1? '是':'否'}}
                                </td>
                                <td class="">
                                        {{$v['ishot']==1? '是':'否'}}
                                </td>
                                <td class="">
                                        {{$v['isnew']==1? '是':'否'}}
                                </td>
                                <td class="">
                                        {{$v['cateid']}}
                                </td>
                                <td class="">
                                        {{$brand[$v['brandid']-1]['name']}}
                                </td>
                                <td class="">
                                        {{substr($v['gdesc'],0,10)}}
                                </td>
                                <td class="">
                                        {{$v['visitnum']}}
                                </td>
                                <td class="">
                                        {{$v['salenum']}}
                                </td>
                                <td class="">
                                        {{$v['appraisenum']}}
                                </td>
                                <td class="">
                                        {{$v['gcolor']}}
                                </td>
                                <td class="">
                                        {{$v['gsize']}}
                                </td>
                                <td class="">
                                        {{$v['created_at']}}
                                </td>
                                <td class="">
                                        {{$v['updated_at']}}
                                </td>
                                <td class="">
                                    <span class="btn-group">
                                    	<a href=" /admin/goods/edit/{{$v['id']}}" class="btn btn-small" title="编辑类别"><i class="icon-pencil"></i></a> 
                                    	<a href=" /admin/goods/delete/{{$v['id']}}" class="btn btn-small" title="删除此类"><i class="icon-trash"></i></a>
                                    </span>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <div class="dataTables_info" id="DataTables_Table_0_info">
                        当前是第 {{($res->currentPage()-1)*$res->perPage()+1}} 至第{{($res->currentPage()-1)*$res->perPage()+$res->count()}} 个，总计 {{$res->total()}}个 
                    </div>
                    <div class="page1">
                        {!! $res->render() !!}
                    </div>
                  
                
                </div>
            </div>
        </div>
    </div>
</div>
@endsection