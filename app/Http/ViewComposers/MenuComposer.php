<?php

namespace App\Http\ViewComposers;

use Illuminate\View\View;
use App\Repositories\UserRepository;
use App\Model\Category;
use Auth;

class   MenuComposer
{
    public function compose(View $view){

        $cateMenu = Category::where('is_menu','1')->limit(7)->get();
        
        
        $view->with(compact('cateMenu'));


   } 
}