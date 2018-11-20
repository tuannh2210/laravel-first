@extends('layout.admin')
@section('title')
@section('content')
{{-- <h3>Danh sách danh mục</h3> --}}
<div class="portlet-body">
	<div id="sample_1_wrapper" class="dataTables_wrapper no-footer">
		<div class="row">
			<div class="col-md-6 col-sm-12">
				<div id="pageItem">
					<form action="" id=filterForm>
						<select  name="pageItem" class="form-control input-sm input-xsmall input-inline">
								{{-- @foreach(getPageSizeItem() as $item)
									<option @if($pageItem == $item) selected @endif value="{{$item}}">
										{{$item}}
									</option>	
								@endforeach --}}
						</select> entries
					</form>
				</div>
			</div>

			<div class="col-md-5 col-sm-12 col-sm-offset-1">
				<div id="search">
					<form action="" class="form-inline">
						<input type="text" class="form-control" name="keyword" value="{{$keyword}}">
						<button class="btn"><i class="fa fa-search"></i></button>
					</form>
				</div>
			</div>
		</div>
		<div class="table-scrollable">
			<table  class="table table-striped table-checkable table-bordered table-hover" style="position: relative;">
				<thead>
					<tr role="row">
						<th> # </th>
						{{-- <th> Ảnh </th> --}}
						<th>Danh mục </th>
						<th with="200px" > Tiêu đề </th>
						<th width="250px" > Tóm tắt </th>
						<th width="400px" > Nội dung chính </th>
						<th > Người tạo </th>
						<th>
							<a href="{{route('post.add')}} " class="btn btn-info">
								Thêm bài viết
							</a>  
						</th>
					</tr>
				</thead>
				<tbody>
					@foreach($posts as $p)
					@php
                        $cate = $p->getCate();
                        $cateSlug = $cate->slug.'/'.$p->slug;
                   	@endphp
					<tr>
						<td>{{$p->id}} </td>
						<td width="120px"> {{$cate->name}}</td>
						<td>{{$p->title}}</td>
						<td>{{$p->short_dess}}</td>
						<td> {{$p->content}}</td>
						<td> {{$p->author}}</td>
						<td>
								<a href="{{route('post.edit',['id'=>$p->id])}}" class="btn btn-info">
									<i class="fa fa-edit"></i>
								</a>
								<a href="javascript:;" onclick="confirm('{{route('post.delete',['id'=>$p->id])}}')"  class="btn btn-danger">
									<i class="fa fa-remove"></i>
								</a>
							</td>
					<tr>		
					@endforeach
					<tr>
						<td colspan="7">{{$posts->links()}}</td>
					</tr>
				</tbody>
		</table>
	</div>
@endsection
@section('js')
<script type="text/javascript">
	$(document).ready(function(){
		$('#pageItem').on('change', function(){
			// Xử lý url mỗi khi select pagesize đc thay đổi giá trị
			// redirect trang sang url theo giá trị đc thay đổi
			$('#filterForm').submit();
		});
	});
</script>
@endsection