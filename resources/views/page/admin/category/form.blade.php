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
	<form data-action="{{$action}}" id="cate-form" action="{{ route('cate.save') }}" method="post" enctype="multipart/form-data" novalidate>
		{{csrf_field()}}
		<input type="hidden" name="id" value="{{$model->id}}">
		<div class="col-md-12">
			{{-- <input type="hidden" class="form-control" placeholder="Tên danh mục" name="name" value="{{$model->id}}"> --}}
			<div class="form-group row">
				<label class="col-md-3 control-label text-center ">Tên <span class="text-danger">*</span></label>
				<div class="col-md-9">
					<input type="text" id="name" class="form-control" placeholder="Tên danh mục" name="name" 
					value="{{$model->name}}"  onkeyup="ChangeToSlug()">
				</div>
			</div>
			<div class="form-group row">
				<label class="col-md-3 control-label text-center">Đường dẫn<span class="text-danger">*</span></label>
				<div class="col-md-9">
					<input type="text" id="slug" class="form-control" placeholder="Ví dụ: the-thao" name="slug" 
					value="{{$model->slug}}" >
				</div>
			</div>
			<div class="form-group row">
				<label class="col-md-3 control-label text-center">Danh mục cha</label>
				<div class="col-md-9">
					<select name="parent_id" class="form-control">
						<option value="-1">-----------------</option>
						@foreach ($cates as $c)
							<option 
							@if($model->parent_id == $c->id) selected @endif
							value="{{$c->id}}">{{$c->name}}</option>
						@endforeach
					</select>
				</div>
			</div>
			<div class="form-group row">
				<label class="col-md-3 control-label"></label>
				<div class="col-md-7">
					<input 
					@if($model->is_menu == 1) checked @endif
					id="isMenu" type="checkbox" name="is_menu" value="1">
					<label for="isMenu">Hiển thị trang chủ</label>
				</div>
			</div>
			
		</div>
		<div class="col-md-12">
			<div class="form-group row">
				<label for="image" class="col-md-3 control-label text-center">Ảnh </label>
				<div class="col-md-9">
					<input type="file" id="image" name="image" accept="image/*">
				</div>
			</div>
			<div class="form-group row">
				<label class="col-md-3 control-label text-center">Mô tả </label>
				<div class="col-md-9">
					<textarea name="desc" id="editor">{{$model->desc}}</textarea>
				</div>
			</div>
		</div>
		<div class=" text-center">
			<a href="{{ route('cate.index') }}" class="btn green">Huỷ</a>
			<button type="submit" class="btn default">Lưu</button>
		</div>
	</form>
	<input type="hidden" id="token" value=" {{csrf_token()}}">
@endsection
@section('js')
<script type="text/javascript">
	$(document).ready(function(){
		if ($('#cate-form').attr('data-action') == 'add') {
			$checkName = "{{route('cate.check.name')}}";
			$checkSlug = "{{route('cate.check.slug')}}";
		}
		else{
			$checkName = false;
		}
	 	$('#cate-form').validate({
	 		rules:{
	 			name:{
	 				required:true,
	 				minlength:3,
	 				checkExist: $checkName
	 			},
	 			image:{
	 				extension: "png|jpg"
	 			},
	 			slug:{
	 				required:true,
	 				minlength:3,
	 				// checkExist: $checkSlug
	 			},
			},
			messages:{
				name:{
					required: 'Vui lòng nhập danh mục',
					checkExist:'Tên đã tồn tại'
				},
				slug:{
					checkExist:'Đường dẫn đã tồn tại'
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

