@extends('Layouts.index')

@section('active6')
	active
@endsection

@section('title_name')
	商品添加
@endsection

@section('container')
<script type="text/javascript" charset="utf-8" src="/ueditor.config.js"></script>
<script type="text/javascript" charset="utf-8" src="/ueditor.all.min.js"> </script>
<!--建议手动加在语言，避免在ie下有时因为加载语言失败导致编辑器加载失败-->
<!--这里加载的语言文件会覆盖你在配置项目里添加的语言类型，比如你在配置项目里配置的是英文，这里加载的中文，那最后就是中文-->
<script type="text/javascript" charset="utf-8" src="/lang/zh-cn/zh-cn.js"></script>
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
					<form class="mws-form" action="/admin/goods/insert" method="POST"  enctype="multipart/form-data">
						{{csrf_field()}}
						<div class="mws-form-inline">
							<div class="mws-form-row">
								<label class="mws-form-label">商品名</label>
								<div class="mws-form-item">
									<input type="text" class="small" name="gname">
								</div>
							</div>
							<div class="mws-form-row">
								<label class="mws-form-label">商品库存</label>
								<div class="mws-form-item">
									<input type="text" class="medium" name="gstock">
								</div>
							</div>
							<div class="mws-form-row">
								<label class="mws-form-label">商品图</label>
								<div class="mws-form-item">
								<input type="file" name="gimg" class="large">
								</div>
							</div>
							<div class="mws-form-row">
								<label class="mws-form-label">商品状态</label>
								<div class="mws-form-item clearfix">
									<ul class="mws-form-list inline">
										<li><input name="issale" value="1" type="checkbox"> <label>打折</label></li>
										<li><input name="isbest" value="1" type="checkbox"> <label>精品</label></li>
										<li><input name="ishot" value="1" type="checkbox"> <label>热销</label></li>
										<li><input name="isnew" value="1" type="checkbox"> <label>新品</label></li>
									</ul>
								</div>
							</div>
							<div class="mws-form-row">
								<label class="mws-form-label">颜色</label>
								<div class="mws-form-item clearfix">
									<ul class="mws-form-list inline">
										<li><input name="gcolor[]" value="红" type="checkbox"> <label>红</label></li>
										<li><input name="gcolor[]" value="橙" type="checkbox"> <label>橙</label></li>
										<li><input name="gcolor[]" value="黄" type="checkbox"> <label>黄</label></li>
										<li><input name="gcolor[]" value="青" type="checkbox"> <label>青</label></li>
										<li><input name="gcolor[]" value="蓝" type="checkbox"> <label>蓝</label></li>
										<li><input name="gcolor[]" value="紫" type="checkbox"> <label>紫</label></li>
										<li><input name="gcolor[]" value="黑" type="checkbox"> <label>黑</label></li>
									</ul>
								</div>
							</div>
							<div class="mws-form-row">
								<label class="mws-form-label">尺码</label>
								<div class="mws-form-item clearfix">
									<ul class="mws-form-list inline">
										<li><input name="gsize[]" value="S" type="checkbox"> <label>S</label></li>
										<li><input name="gsize[]" value="M" type="checkbox"> <label>M</label></li>
										<li><input name="gsize[]" value="L" type="checkbox"> <label>L</label></li>
										<li><input name="gsize[]" value="XL" type="checkbox"> <label>XL</label></li>
										<li><input name="gsize[]" value="XXL" type="checkbox"> <label>XXL</label></li>
										<li><input name="gsize[]" value="XXXL" type="checkbox"> <label>XXXL</label></li>
									</ul>
								</div>
							</div>
							<div class="mws-form-row">
								<label class="mws-form-label">所属分类</label>
								<div class="mws-form-item">
									<select class="large" name="cateid">
										@foreach($cates as $k=>$v)
											<option value="{{$v['id']}}">{{$v['name']}}</option>
										@endforeach
									</select>
								</div>
							</div>
							<div class="mws-form-row">
								<label class="mws-form-label">所属品牌</label>
								<div class="mws-form-item">
									<select class="large" name="brandid">
										
										@foreach($brand as $k=>$v)
											<option value="{{$v['id']}}">{{$v['name']}}</option>
										@endforeach
										
									</select>
								</div>
							</div>
							<div class="mws-form-row">
								<label class="mws-form-label">商品描述</label>
								<div class="mws-form-item">
										<textarea name="gdesc" id="editor" type="text/plain" style="width:90p;height:500px;"></textarea>
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