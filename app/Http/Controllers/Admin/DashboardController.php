<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class DashboardController extends Controller
{
	/*...........................................*/
	public $pc = 'page.client';
	public $pe = 'page.error';
	public $pa = 'page.admin';
	/*------------------------------------------*/
    public function index(){
    	$user = Auth::user()->name;

    	return view($this->pa.'.dashboard.index',compact('user'));
    }
}
