<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Model\Category;
use App\Model\Post;
use App\Http\Requests\CategoryRequest;

class CategoryController extends Controller
{

   public function index(request $request){
		$pageItem = $request->pageItem == null ? 10 : $request->pageItem;
		$fullUrl = $request->fullUrl();
		$keyword = $request->keyword;
		$addPath = "";
		if(!$keyword){
			$cates = Category::orderBy('id','desc')->paginate($pageItem);
			$addPath .= "?pageItem=$pageItem";

		}else{
			$cates = Category::where('name', 'like', "%$keyword%")->orderBy('id', 'desc')->paginate($pageItem);
			$addPath .= "?keyword=$keyword&pageItem=$pageItem";

		}
		$cates->withPath($addPath);
		
		return view('page.admin.category.index', 
			compact('cates', 'keyword', 'fullUrl', 'pageItem'));
	}
	
	public function delete(request $request){
		// $model->is_menu = $request->stu == 1 ? 1:0
		$cate = Category::find($request->id);
		if($cate != null ){
			$posts = Post::where('cate_id',$request->id)->get();
			foreach ($posts as $p) {
				$p->delete();
			}
			$cate->delete();
			
			return redirect(route('cate.index'));
		}else{
			echo "Không có sản phẩm";
		}

	}
	public function add(){
		$model = new Category();
		$cates = Category::all();
		$action = 'add';
		return view ('page.admin.category.form', compact('model','cates', 'action'));
	}

	public function edit($id){
		$model = Category::find($id);
		if(!$model) return view('admin.404');
		$cates = Category::all();
		$action = 'edit';
		return view ('page.admin.category.form', compact('model','cates', 'action'));
	}

	public function save(Request $request){
		// dd($request->all());
		if($request->id){
			$model = Category::find($request->id);
			if(!$model) return view('admin.404');
		}
		else{
			$model = new Category();	
		}
		$model ->fill($request->all());
		$model->is_menu = $request->is_menu == 1 ? 1:0;

		// Upload images
		if($request->hasFile('image')){

            $file = $request->file('image');
            // Set name images
            $fileName = time()."-".$file->getClientOriginalName();
            // Thư mục lưu trữ ảnh (storage/uploads)

            // $file->storeAs('uploads', $fileName);
            // dd($model->image = 'uploads/'.$fileName);

            $file->move('uploads',$fileName);
            $model->image = 'uploads/'.$fileName;


        } 
        // dd('dỏe');
		$model->save();
		return redirect(route('cate.index'));

	}

	public function checkName(Request $rq){
		$cate = Category::where('name',$rq->name)->first();
		$result = $cate == false ? true : false;
		return response()->json($result);
	}

	public function checkSlug(Request $rq){
		$cate = Category::where('slug',$rq->slug)->first();
		$result = $cate == false ? true : false;
		return response()->json($result);
	}

	public function update(){
		if (Request::ajax()) {
	        $input = Input::all();
	        $slug = $input['value'];
	        $id = $input['pk'];
	     	$user = Category::find($id);
	        $user->update(['slug' => $slug]);
	        return Response::json(['error' => false, 'msg' => 'Save success!'], 200);
	    }
	}


}
