<?php

namespace App\Http\Controllers\Client;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\Controller;
use App\Model\Post;
use App\Model\Category;
use Carbon\Carbon;

class HomeController extends Controller
{
	/*...........................................*/
	public $pc = 'page.client';
	public $pe = 'page.error';
	/*------------------------------------------*/
    public function index()
    {
        
        $newPost = Post::orderBy('publish_date', 'desc')->get();

    	$posts = Post::paginate(16);


    	$cate = Category::all();

    	return view($this->pc.'.index',compact('posts','cate','newPost' , 'post'));
    }

    public function cateDetail( $cateSlug){
    	$cate = Category::where('slug',$cateSlug)->first();


    	if(!$cate)
    		return view($this->pe.'.404');

        $newPost = Post::where('cate_id',$cate->id)->orderBy('publish_date', 'desc')->take(5)->get();
// dd($newPost);
    	$posts = Post::where('cate_id',$cate->id)->paginate(10);
    	return view($this->pc.'.cate-detail', compact('cate','posts','newPost'));
    }

    public function postDetail( $cateSlug, $slugUrl){


    	$post = Post::where('slug',$slugUrl)->first();

        $viewed = Session::get('viewed_post', []);
        if (!in_array($post->id, $viewed)) {
            $post->increment('view');
            Session::push('viewed_post', $post->id);
        }

    	if(!$post) return view($this->pe.'.404');
    	return view($this->pc.'.post-detail' , compact('post'));
    }

    public function search(request $rq){
        // dd($search = $rq->s);
        $search = $rq->s;
        $posts = Post::where('title','like',"%$search%")->paginate(10);
        
        $posts->appends(['s' => $search])->links();

       return view($this->pc.'.search-result',compact('posts',"search"));
    }


}
