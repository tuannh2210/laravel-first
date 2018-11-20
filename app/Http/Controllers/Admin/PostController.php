<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Post;
use App\Model\User;
use App\Model\Category;
class PostController extends Controller
{
 //   public function index(Request $request){
	// 	$pageSize = $request->pagesize == null ? 10 : $request->pagesize;
	// 	$fullUrl = $request->fullUrl();
	// 	$keyword = $request->keyword;
	// 	$addPath = "";
	// 	if(!$keyword){
	// 		$posts = Post::paginate($pageSize);
	// 		$addPath .= "?pagesize=$pageSize";
	// 	}else{
	// 		$posts = Post::where('title', 'like', "%$keyword%")->paginate($pageSize);
	// 		$addPath .= "?keyword=$keyword&pagesize=$pageSize";

	// 	}
	// 	$posts->withPath($addPath);
	// 	return view('page.admin.post.index',compact('posts', 'keyword', 'fullUrl', 'pageSize'));
	// }

	public function index(request $request){
		$pageItem = $request->pageItem == null ? 10 : $request->pageItem;
		$fullUrl = $request->fullUrl();
		$keyword = $request->keyword;
		$addPath = "";
		if(!$keyword){
			$posts = Post::paginate($pageItem);
			$addPath .= "?pageItem=$pageItem";

		}else{
			$posts = Post::where('title', 'like', "%$keyword%")->paginate($pageItem);
			$addPath .= "?keyword=$keyword&pageItem=$pageItem";

		}
		$posts->withPath($addPath);
		$cate = Category::all();
		
		return view('page.admin.post.index',compact('posts', 'keyword', 'fullUrl', 'pageItem','cate'));
	}
	// Delete
	public function delete($id){
		$post = Post::find($id);
		if(count($post) > 0) $post->delete();
		else  return view('admin.404');
		return redirect(route('post.index'));

	}	
	public function add(){
		$model = new Post();
		$cates = Category::all();
		$users = User::all();
		$action = 'add';
		return view('page.admin.post.form',compact('model','action','cates','users'));
	}

	public function edit($id){
		$model = Post::find($id);
		if(!$model) return view('admin.404');
		$Post = Post::all();
		$action = 'edit';
		return view ('page.admin.post.form', compact('model','post', 'action'));
	}

	public function save(Request $request){
		// dd($request->all());
		if($request->id){
			$model = Post::find($request->id);
			if(!$model) return view('admin.404');
		}
		else{
			$model = new Post();	
		}
		$model ->fill($request->all());
		// dd($model);		
		$cates = Post::all();
		$model->save();
		return redirect(route('post.index'));

	}

}
