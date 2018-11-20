@extends('layout.admin')
@section('title')
	@if($action == 'add')
		Thêm danh mục
	@else
		Sửa danh mục
	@endif	
@endsection
@section('content')
	<div>
		@if($action == 'add')
			<h3>Thêm danh mục</h3>
		@else
			<h3>Sửa danh mục</h3>
		@endif	
	</div>
	<form data-action="{{$action}}" id="post-form" action="{{ route('post.save') }}" method="post" enctype="multipart/form-data" novalidate>
		{{csrf_field()}}
		<input type="hidden" name="id" value="{{$model->id}}">
		<div class="row">
			
			<div class="col-md-12">
				<div class="form-group row">
					<label class="col-md-3 control-label text-center ">Tiêu đề <span class="text-danger">*</span></label>
					<div class="col-md-9">
						<input type="text" id="name" class="form-control" placeholder="Tên danh mục" name="title" value="{{$model->title}}" onkeyup="ChangeToSlug()">
					</div>
				</div>
				<div class="form-group row">
					<label class="col-md-3 control-label text-center">Đường dẫn<span class="text-danger">*</span></label>
					<div class="col-md-9">
						<input type="text" id="slug" class="form-control" placeholder="Ví dụ: the-thao" name="slug" value="{{$model->slug}}" >
					</div>
				</div>
				<div class="form-group row">
					<label class="col-md-3 control-label text-center">Mô tả ngắn </label>
					<div class="col-md-9">
						<textarea name="short_dess" id="editor">{{$model->short_dess}}</textarea>
					</div>
				</div>
			</div>
			<div class="col-md-12">
				<div class="form-group row">
					<label for="image" class="col-md-3 control-label text-center">Ảnh </label>
					<div class="col-md-9">
						<input type="file" id="image" name="feature_image" accept="image/*">
					</div>
				</div>
				<div class="form-group row">
					<label class="col-md-3 control-label text-center">Mô tả </label>
					<div class="col-md-9">
						<textarea name="content" id="editor">{{$model->content}}</textarea>
					</div>
				</div>
				<div class="form-group row">
					<label class="col-md-3 control-label text-center ">Tác giả <span class="text-danger">*</span></label>
					<div class="col-md-9">
						<input type="text" class="form-control" placeholder="Tên danh mục" name="author" value="{{$model->author}}">
					</div>
				</div>
				<div class="form-group row">
					<label class="col-md-3 control-label text-center ">Người tạo <span class="text-danger">*</span></label>
					<div class="col-md-9">
						<select name="cate_id" class="form-control">
							<option>
								@foreach($cates as $cate)
									<option value="{{$cate->id}} ">{{$cate->name}}</option>
								@endforeach	
							</option>
						</select>
						<input type="text" class="form-control" value="{{Auth::user()->name}}" disabled="">
					</div>
				</div>
			</div>
		</div>

		<div class="text-center">
			<a href="{{ route('cate.index') }}" class="btn btn-danger">
				<i class="fa fa-ban" aria-hidden="true"></i>
			</a>
			<button type="submit" class="btn btn-success">
				<i class="fa fa-check" aria-hidden="true"></i>
			</button>
		</div>
	</form>
	<input type="hidden" id="token" value=" {{csrf_token()}}">
@endsection
@section('js')
<script type="text/javascript">
	$(document).ready(function(){
		if ($('#cate-form').attr('data-action') == 'add') {
			$checkName = "{{route('cate.check.name')}}";
		}
		else{
			$checkName = false;
		}
 	$('#post-form').validate({
 		rules:{
 			title:{
 				required:true,
 				checkExist: $checkName
 			},
 			feature_image:{
 				extension: "png|jpg"
 			},
 			slug:'required',
		},
		messages:{
			name:{
				required: 'Vui lòng nhập danh mục' 
			}
		},
		errorPlacement: function(error, element){
			$(error).addClass('text-danger');
			error.insertAfter(element);
			// Thay đỏi css mesages
		}
 	});
 });
</script>
@endsection

