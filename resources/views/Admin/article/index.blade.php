@extends('Layouts.index')

@section('active3')
	active
@endsection

@section('title_name')
	浏览分类
@endsection

@section('container')
<div class="container">
    <div class="mws-panel grid_8 mws-collapsible">
        <div class="mws-panel-header">
            <span>分类列表</span>
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
                        	<button type="button" class="btn btn-primary">搜索</button>
                        </label>
                    </div>
                    <table class="mws-table mws-datatable dataTable" id="DataTables_Table_0" aria-describedby="DataTables_Table_0_info">
                        <thead>
                            <tr role="row">
                                <th class="sorting_asc" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 136px;" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">
                                    ID
                                </th>
                                <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 187px;" aria-label="Browser: activate to sort column ascending">
                                    名称
                                </th>
                                <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 173px;" aria-label="Platform(s): activate to sort column ascending">
                                    简介
                                </th>
                                <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 116px;" aria-label="Engine version: activate to sort column ascending">
                                    详情
                                </th>
                                <th class="sorting_disabled" role="columnheader" rowspan="1" colspan="1" style="width: 136px;" aria-label="">
                                	插图
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
                                    {{$v['title']}}
                                </td>
                                <td class="">
                                    {{$v['descr']}}
                                </td>
                                <td class="">
                                    {{$v['content']}}
                                </td>
                                <td class="">
                                     <img src="/pics/{{$v['picture']}}" alt="">   
                                    </td>
                                <td class="">
                                    <span class="btn-group">
                                    	
                                    	<a href=" /admin/article/edit/{{$v['id']}}" class="btn btn-small" title="编辑文章"><i class="icon-pencil"></i></a> 
                                    	<a href=" /admin/article/delete/{{$v['id']}}" class="btn btn-small" title="删除文章"><i class="icon-trash"></i></a>
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