@extends('Layouts.index')

@section('active2')
	active
@endsection

@section('title_name')
	用户列表
@endsection

@section('container')
	<div class="container">
		<div class="mws-panel grid_8">
                	<div class="mws-panel-header">
                    	<span><i class="icon-table"></i> 用户列表</span>
                    </div>

                    {{--成功的提示信息--}}
                    @if(session('success'))
                    <div class="mws-form-message success">
                        {{session('success')}}
                    </div>
                    @endif
                    
                <form action="{{url('/admin/users')}}" method="get">
                    <div class="mws-panel-body no-padding">
                        <div id="DataTables_Table_1_wrapper" class="dataTables_wrapper" role="grid">
                            <div id="DataTables_Table_1_length" class="dataTables_length">
                                <label>显示 
                                    <select size="1" name="num" aria-controls="DataTables_Table_1">
                                        <option value="10" {{$request->num == 10 ? 'selected' : ''}}>10</option>
                                        <option value="25" {{$request->num == 25 ? 'selected' : ''}}>25</option>
                                        <option value="50" {{$request->num == 50 ? 'selected' : ''}}>50</option>
                                        <option value="100" {{$request->num == 100 ? 'selected' : ''}}>100</option>
                                    </select> 条
                                </label>
                            </div>
                    <div class="dataTables_filter" id="DataTables_Table_1_filter">
                        <label>
                            关键字: <input aria-controls="DataTables_Table_1" name="keywords" value="{{$request->keywords}}" type="text">
                                    <button type="submit" class="btn btn-primary">搜索</button>
                        </label>
                    </div>
                </form>

                    <table class="mws-datatable-fn mws-table dataTable" id="DataTables_Table_1" aria-describedby="DataTables_Table_1_info">
                            <thead>
                                <tr role="row">
                                    <th class="sorting_asc" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" style="width: 169px;" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">
                                        用户ID
                                    </th>
                                    <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" style="width: 229px;" aria-label="Browser: activate to sort column ascending">
                                        用户名
                                    </th>
                                    <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" style="width: 213px;" aria-label="Platform(s): activate to sort column ascending">
                                        状态
                                    </th>
                                    <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" style="width: 145px;" aria-label="Engine version: activate to sort column ascending">
                                        权限
                                    </th>
                                    <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" style="width: 106px;" aria-label="CSS grade: activate to sort column ascending">
                                        操作
                                    </th>
                                </tr>
                            </thead>
                            
                        <tbody role="alert" aria-live="polite" aria-relevant="all">
                            @foreach($users as $k=>$v)
                                @if($k%2==1)
                                <tr class="odd">
                                @else
                                <tr class="even">
                                @endif
                                    <td class="  sorting_1">{{$v['id']}}</td>
                                    <td class=" ">{{$v['username']}}</td>
                                    <td class=" ">{{showStatus($v['status'])}}</td>
                                    <td class=" ">{{showAuth($v['auth'])}}</td>
                                    <td class=" ">
                                        <a href="">删除</a>
                                        <a href="">修改</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                <div class="dataTables_info" id="DataTables_Table_1_info">
                {{--若没有条件查询,显示正常页码信息,若有条件,则只显示总条数--}}
                @if(!$request->keywords)
                    显示 
                    {{($users->currentPage()-1)*($users->perPage()-0)+1}} 
                    到 
                    {{$users->perPage()*($users->currentPage()-1)+$users->count()}} 
                    条 | 
                    共 
                    {{$users->total()}} 
                    条
                @else
                    共 
                    {{$users->total()}} 
                    条
                @endif
                </div>
                <div class="dataTables_paginate paging_full_numbers" id="page">
                    {{--显示分页页码--}}
                    {!!$users->appends($request->all())->render()!!}
                </div>

            </div>
        </div>
        </div>
	</div>
@endsection