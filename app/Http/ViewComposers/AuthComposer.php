<?php

namespace App\Http\ViewComposers;

use Illuminate\View\View;
use App\Repositories\UserRepository;
use App\Model\Category;
use Auth;

class   AuthComposer
{
    public function compose(View $view){

    	$user = Auth::user()->name;
        $view->with(compact('user'));


   } 
}