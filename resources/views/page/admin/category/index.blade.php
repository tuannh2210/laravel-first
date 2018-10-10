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
						<th> Ảnh </th>
						<th > Tên </th>
						{{-- <th > Slug </th> --}}
						<th > Danh mục cha </th>
						<th>Mô tả </th>
						<th > Hiển thị menu </th>
						<th ><a href="{{route('cate.add')}} " class="btn btn-info">
							Thêm danh mục
						</a>  </th>
					</tr>
				</thead>
				<tbody>
					@foreach($cates as $c)
						<tr role="row" class="even">
							<td class="reorder sorting_1"> {{$loop->index+1}} </td>
							<td>
								<img src="{{asset("$c->image")}} " style="width: 120px; text-align: center;">
							</td>
							<td >  {{$c->name}} </td>
							{{-- <td> {{$c->slug}}</td> --}}
							<td> {{$c->getParentName()}} </td>
							<td> {{str_limit($c->desc,100,'.')}}</td>
							<td>
								@if($c->is_menu == 1)
									Hiện
								@else 
									Ẩn
								@endif	
							</td>
							<td>
								<a href="{{route('cate.edit',['id'=>$c->id])}}" class="btn btn-info">
									<i class="fa fa-edit"></i>
								</a>
								<a href="javascript:;" onclick="confirm('{{route('cate.delete',['id'=>$c->id])}}')"  class="btn btn-danger">
									<i class="fa fa-remove"></i>
								</a>
							</td>
						</tr>
					@endforeach
					<tr>
						<td colspan="7">{{$cates->links()}}</td>
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