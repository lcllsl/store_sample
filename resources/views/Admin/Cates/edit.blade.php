@extends('Layouts.index')

@section('active3')
	active
@endsection

@section('title_name')
	用户修改
@endsection

@section('container')
<div class="container">
	<div class="mws-panel grid_8">
		<div class="mws-panel-header">
	    	<span>分类管理</span>
	    </div>
	    <div class="mws-panel-body no-padding">
	    	<form class="mws-form" action="{{url('admin/cates/update')}}" method="post">
	    		<div class="mws-form-inline">
					{{csrf_field()}}
	    			<div class="mws-form-row">
	    				<label class="mws-form-label">分类名称</label>
	    				<div class="mws-form-item">
	    					<input type="hidden" name="id" value="{{$res['id']}}">
	    					<input name="name" class="small" value="{{$res['name']}}" type="text">
	    				</div>
	    			</div>

		    		<div class="mws-button-row">
		    			<input value="修改" class="btn btn-danger" type="submit">
		    			<input value="重置" class="btn " type="reset">
		    		</div>

		    	</div>
	    	</form>
	    </div>    	
	</div>
</div>
@endsection