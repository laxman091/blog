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
Route::get('/admin/{get}/{post?}', 'AdminController@index');

Route::get('display/', 'AdminController@display');
/*Route::get('/', function () {
    echo route('getuser',array('sort'=>'dsafigigo'));
});*/
Route::get('/', function () {
	$data['games'] = ['Gradius', 'Kirbys Adventure', 'Pac-Man'];
    $data['publishers'] = ['Konami', 'Nintendo', 'Bandai Namco'];
    $data['releasedates'] = ['1986', '1993', '1984'];
	return view('welcome' , $data);
});
Route::get('games', function () {
    return view('games');
});
Route::get('/games', function () {
    
    $data['games'] = ['Gradius', 'Kirbys Adventure', 'Pac-Man'];
    $data['publishers'] = ['Konami', 'Nintendo', 'Bandai Namco'];
    $data['releasedates'] = ['1986', '1993', '1984'];
    
    //return view('games', $data);
	return view('welcome');
});
Route::get('/uploadfile','UploadFileController@index');
Route::post('/uploadfile','UploadFileController@showUploadFile');