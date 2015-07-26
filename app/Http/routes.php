<?php
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/



 Route::get('/','JQueryController@index');
 Route::get('auth','JQueryController@auth');

// Route::get('/',function(){
// 	return 'ok?';
// });






// Route::get('/',function(){
// 	return 'start';
// });

// Route::get('login',function(){return View::make('idea.login');});
// Route::post('checkLogin','IdeaController@checkLogin');
// Route::get('logout','IdeaController@logout');
// Route::get('createAccount',function(){return View::make('idea.create');});
// Route::post('create','IdeaController@create');
// /*
// Route::post('login',array('befor'=>'csrf',function(){
// 	$inputs = Input::only(array('student_id','pass'));
// 	dd($inputs);
// }));
// */
// Route::get('show/{student_id}','IdeaController@showTeachers');
// Route::get('recommend/{id}','IdeaController@showRecommendBook');
// Route::get('details/{book_id}','IdeaController@bookDetails');


//Route::resource('login','IdeaController');


/*
Route::get('about','Page@about');
Route::get('contact','Page@contact');

Route::resource('articles','ArticlesController');
*/






// Route::get('articles','ArticlesController@index');
// Route::get('articles/create','ArticlesController@create');
// Route::post('articles','ArticlesController@store');
// Route::get('articles/{id}','ArticlesController@show');


/*
Route::get('/','welcome@index');
*/
/*
Route::get('/',function(){
	return Auth('welcome@index);
});
*/

/*
Route::get('/', function () {
    return view('welcome');
});
*/


// Route::controllers([
// 	'auth' => 'Auth\AuthController',
// 	'password' => 'Auth\PasswordController',
// ]);