<?php

namespace App\Http\ViewComposers;

use Illuminate\View\View;
use App\Repositories\UserRepository;
use App\Model\Category;
use App\Model\Post;
use Auth;

class   SidebarComposer
{
    public function compose(View $view){

        $featured = Post::orderBy('publish_date', 'desc')->orderBy('view', 'desc')->skip(8)->take(5)->get();

        $manyview = Post::orderBy('view','desc')->take(5)->get();

        $view->with(compact('featured'));
        $view->with(compact('manyview'));


   } 
}