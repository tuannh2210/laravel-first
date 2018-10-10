<?php 



/*-------------------------------------------------------------------------------------------------------------------------*/
//  Route || Methor|| Url || Controller || Name||           
/*-------------------------------------------------------------------------------------------------------------------------*/
// Route::get('/get-a', 'TestController@getUsers');

// Route::post('/update-user', 'TestController@updateUser')->name('test');
// Dashboard
Route::prefix('/')->group(function(){
	$c = 'Admin\DashboardController';
});
	Route::get('/','Admin\DashboardController@index')->name('admin');

// Category
Route::prefix('cate')->group(function(){

	Route::get('/','Admin\CategoryController@index')->name('cate.index');

	Route::get('add','Admin\CategoryController@add')->name('cate.add');

	Route::get('update/{id}','Admin\CategoryController@edit')->name('cate.edit');

	Route::get('delete/{id}','Admin\CategoryController@delete')->name('cate.delete');

	Route::post('save','Admin\CategoryController@save')->name('cate.save');

	Route::post('check-name','Admin\CategoryController@checkName')->name('cate.check.name');

	Route::post('check-slug','Admin\CategoryController@checkSlug')->name('cate.check.slug');

	Route::post('update/{id}','Admin\CategoryController@update')->name('update');


});

// Post
Route::prefix('post')->group(function(){

	Route::get('/','Admin\PostController@index')->name('post.index');

	Route::get('add','Admin\PostController@add')->name('post.add');

	Route::get('update/{id}','Admin\PostController@edit')->name('post.edit');

	Route::get('delete/{id}','Admin\PostController@delete')->name('post.delete');

	Route::post('save','Admin\PostController@save')->name('post.save');

	Route::post('check-name','Admin\PostController@check')->name('check.name');

});

Route::prefix('user')->group(function(){

	$c = "Admin\UserController@";
	Route::get('profile',$c."profile")->name('user.profile');
});

?>