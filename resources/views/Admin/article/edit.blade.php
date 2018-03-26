@extends('Layouts.index')

@section('active4')
	active
@endsection

@section('title_name')
	用户添加
@endsection

@section('container')
<script type="text/javascript" charset="utf-8" src="ueditor.config.js"></script>
<script type="text/javascript" charset="utf-8" src="ueditor.all.min.js"></script>
<!--建议手动加在语言，避免在ie下有时因为加载语言失败导致编辑器加载失败-->
<!--这里加载的语言文件会覆盖你在配置项目里添加的语言类型，比如你在配置项目里配置的是英文，这里加载的中文，那最后就是中文-->
<script type="text/javascript" charset="utf-8" src="lang/zh-cn/zh-cn.js"></script>
<div class="container">
		<div class="mws-panel grid_8">
				<div class="mws-panel-header">
					<span>Inline Form</span>
				</div>
				@if (count($errors) > 0)
					<div class="mws-form-message error">
						<ul>
							@foreach ($errors->all() as $error)
								<li>{{ $error }}</li>
							@endforeach
						</ul>
					</div>
				@endif
				<div class="mws-panel-body no-padding">
					<form class="mws-form" action="/admin/article/insert" method="POST"  enctype="multipart/form-data">
						{{csrf_field()}}
						<div class="mws-form-inline">
							<div class="mws-form-row">
								<label class="mws-form-label">标题</label>
								<div class="mws-form-item">
									<input type="text" class="small" name="title">
								</div>
							</div>
							<div class="mws-form-row">
								<label class="mws-form-label">简介</label>
								<div class="mws-form-item">
									<input type="text" class="medium" name="descr">
								</div>
							</div>
							<div class="mws-form-row">
								<label class="mws-form-label">插图</label>
								<div class="mws-form-item">
									<input type="file" name="picture" class="large" >
								</div>
							</div>
							<div class="mws-form-row">
								<label class="mws-form-label">Textarea</label>
								<div class="mws-form-item">
										<textarea name="content" id="editor" type="text/plain" style="width:90p;height:500px;"></textarea>
								</div>
							</div>
							<div class="mws-form-row">
								<label class="mws-form-label">所属 分类</label>
								<div class="mws-form-item">
									<select class="large" name="cate_id">
										@foreach($cates as $k=>$v)
											<option value="{{$v['id']}}">{{$v['name']}}</option>
										@endforeach
									</select>
								</div>
							</div>
							
						</div>
						<div class="mws-button-row">
							<input type="submit" value="提交" class="btn btn-danger">
							<input type="reset" value="清空" class="btn ">
						</div>
					</form>
				</div>    	
			</div>
</div>
<script>
	 var ue = UE.getEditor('editor');
</script>
@endsection