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

Route::get('/', 'PagesController@index');

Route::get('users/create', ['uses' => 'UsersController@create']);

Route::post('users', ['uses' => 'UsersController@store']);

Route::get('blade', 'PagesController@blade');

// Route::get('users', function(){
// 	$users = [
// 		'0' => [
// 			'first_name' => 'vesna',
// 			'last_name' => 'zmijanac',
// 			'location' => 'public_room'
// 		],
// 		'1' => [
// 			'first_name' => 'jessica',
// 			'last_name' => 'alba',
// 			'location' => 'albania'
// 		]
// 	];

// 	return $users;
// });
Auth::routes();

Route::get('/home', 'HomeController@index');

Route::group(['middleware' => 'authenticated'], function() {
	Route::get('users', ['uses' => 'UsersController@index']);
	Route::get('profile', 'PagesController@profile');
	Route::get('settings', 'PagesController@settings');
});