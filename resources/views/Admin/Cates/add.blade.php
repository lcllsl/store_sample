@extends('Layouts.index')

@section('active3')
	active
@endsection

@section('title_name')
	用户添加
@endsection

@section('container')
<div class="container">
	<div class="mws-panel grid_8">
		<div class="mws-panel-header">
	    	<span>分类管理</span>
	    </div>
	    <div class="mws-panel-body no-padding">
	    	<form class="mws-form" action="{{url('admin/cates/insert')}}" method="post">
	    		<div class="mws-form-inline">
					{{csrf_field()}}
	    			<div class="mws-form-row">
	    				<label class="mws-form-label">分类名称</label>
	    				<div class="mws-form-item">
	    					<input name="name" class="small" type="text">
	    				</div>
	    			</div>
	    			
	    			<div class="mws-form-row">
	    				<label class="mws-form-label">选择父类</label>
	    				<div class="mws-form-item">
	    					<select name="pid" class="small">
	    						<option value="0">请选择(添加父类)</option>
	    					@foreach($cates as $k=>$v)
	    						<option value="{{$v['id']}}" {{$v['id']==$id ? 'selected' : ''}}>{{$v['name']}}</option>
	    					@endforeach
	    					</select>
	    				</div>
	    			</div>

		    		<div class="mws-button-row">
		    			<input value="添加" class="btn btn-danger" type="submit">
		    			<input value="重置" class="btn " type="reset">
		    		</div>

		    	</div>
	    	</form>
	    </div>    	
	</div>
</div>
@endsection