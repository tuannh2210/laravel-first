<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/test', 'TestController@getUsers');


use Illuminate\Support\Facades\Mail;
use App\Model\Category;

Route::get('demo','Mail\MailController@send');
/*-------------------------------------------------------------------------------------------------------------------------*/
//  Route || Methor|| Url || Controller || Name||           
/*-------------------------------------------------------------------------------------------------------------------------*/
Route::prefix('/')->group(function(){

	$c = 'Client\HomeController@';
	
	Route::get('/',$c.'index')->name('homepage');

	Route::get('tim-kiem',$c.'search')->name('client.search');

});
// Route::get('/tim-kiem',"HomeController@search")->name('client.search');


// AUTH
Route::prefix('/')->group(function(){
	$c = 'Auth\LoginController@';

	Route::get('login',$c.'login')->name('login');

	Route::post('login',$c.'postLogin');

	Route::get('logout',$c.'logout')->name('logout');

});

Route::post('forget-pw','Auth\ForgotPasswordController@forget')->name('forget-pw');
Route::get('reset-password/{token}','Auth\ResetPasswordController@reset_password')->name('reset-pw');
Route::post('save-reset-pw','Auth\ResetPasswordController@save_reset_password')->name('save.reset-pw');

// GET SLUG
Route::prefix('tin-tuc'.'/{cateSlug}')->group(function(){

	$c = 'Client\HomeController@';

	Route::get('/',$c.'cateDetail')->name('cate.detail');	

	Route::get('/{slugUrl}',$c."postDetail")->name('post.detail');
});



// Route::get('register','Auth\LoginController@logout')->name('register');

// Route::get('/category/{form?}',	"HomeController@form")->name('cate');

// Route::get('form','HomeController@form')->name('form');
// Route::post('form','HomeController@postForm');

// Route::get('login/fb', 'Auth\AuthController@redirectToProvider');
// Route::get('auth/github/callback','Auth\AuthController@handleProviderCallback');


