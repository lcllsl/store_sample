@extends('Layouts.index')

@section('active2')
	active
@endsection

@section('title_name')
	用户添加
@endsection

@section('container')
	<div class="container">
		<div class="mws-panel grid_8">
                	<div class="mws-panel-header">
                    	<span>用户添加</span>
                    </div>
                    <div class="mws-panel-body no-padding">

                    @if (count($errors) > 0)
                        <div class="mws-form-message error">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                         
                    	<form class="mws-form" action="/admin/users" method="post">
                    		{{csrf_field()}}
                    		<div class="mws-form-inline">
                    			<div class="mws-form-row">
                    				<label class="mws-form-label">用户名称</label>
                    				<div class="mws-form-item">
                    					<input name="username" value="" class="small" type="text">
                    				</div>
                    			</div>
                    			<div class="mws-form-row">
                    				<label class="mws-form-label">用户密码</label>
                    				<div class="mws-form-item">
                    					<input name="password" value="" class="small" type="password">
                    				</div>
                    			</div>
                    			<div class="mws-form-row">
                    				<label class="mws-form-label">确认密码</label>
                    				<div class="mws-form-item">
                    					<input name="surepass" value="" class="small" type="password">
                    				</div>
                    			</div>
                    			<div class="mws-form-row">
                    				<label class="mws-form-label">用户状态</label>
                    				<div class="mws-form-item">
                    					<select name="status" value="" class="small">
                    						<option value="">请选择</option>
                    						<option value="1">开启</option>
                    						<option value="0">关闭</option>
                    					</select>
                    				</div>
                    			</div>
                    			<div class="mws-form-row">
                    				<label class="mws-form-label">用户权限</label>
                    				<div class="mws-form-item clearfix">
                    					<ul class="mws-form-list inline">
                    						<li><input name="auth" value="1" type="radio"> <label>超级管理员</label></li>
                    						<li><input name="auth" value="2" type="radio"> <label>普通管理员</label></li>
                    						<li><input name="auth" value="3" type="radio"> <label>普通用户</label></li>
                    					</ul>
                    				</div>
                    			</div>
                    		</div>
                    		<div class="mws-button-row">
                    			<input value="添加" class="btn btn-danger" type="submit">
                    			<input value="重置" class="btn " type="reset">
                    		</div>
                    	</form>
                    </div>    	
                </div>
	</div>
@endsection