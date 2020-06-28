<?php


use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
// Route::get('/', function () {
//     return view('welcome');
// });

Route::group(['middleware'=>['auth']], function () {
    Route::get('','TaskController@index')->name('index');
    Route::get('task/{taskId}', 'TaskController@show')->name('show');
    Route::get('add-task/', 'TaskController@create')->name('create');
    Route::post('store','TaskController@store')->name('store');
    Route::get('task/edit/{taskId}','TaskController@edit')->name('edit');
    Route::post('task/update/{taskId}','TaskController@update')->name('update');
    Route::delete('task/delete/{taskId}','TaskController@destroy')->name('delete');

      
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');