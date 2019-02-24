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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/allbooks', 'HomeController@allbooks')->name('home');
Route::get('/allusers', 'HomeController@allusers')->name('home');
Route::get('/allmessages', 'HomeController@allmessages')->name('home');
Route::get('/allitems', 'HomeController@allitems')->name('home');
Route::get('/allgames', 'HomeController@allgames')->name('home');
Route::get('/parameters', 'HomeController@parameters')->name('home');
Route::get('/createuser', 'HomeController@createuser')->name('home');
Route::get('/createbook', 'HomeController@createbook')->name('home');

// CRUD Routes

//AuthorController

Route::post('/updateauthor', 'AuthorController@updateOne')->name('home');
Route::post('/deleteauthor', 'AuthorController@deleteOne')->name('home');
Route::post('/createauthor', 'AuthorController@createOne')->name('home');

//BookController

Route::get('/book/{id}', 'BookController@readOne')->name('home');
Route::get('/updateBook/{id}', 'HomeController@updateBook')->name('home');
Route::post('/updatebook', 'BookController@updateOne')->name('home');
Route::post('/deletebook', 'BookController@deleteOne')->name('home');
Route::post('/deleteAuthorBook', 'BookController@deleteAuthorBook')->name('home');
Route::post('/createbook', 'BookController@createOne')->name('home');

//CategoryController

Route::post('/updatecategory', 'CategoryController@updateOne')->name('home');
Route::post('/deletecategory', 'CategoryController@deleteOne')->name('home');
Route::post('/createcategory', 'CategoryController@createOne')->name('home');

//ClasseController

Route::post('/updateclasse', 'ClasseController@updateOne')->name('home');
Route::post('/deleteclasse', 'ClasseController@deleteOne')->name('home');
Route::post('/createclasse', 'ClasseController@createOne')->name('home');

//CreatorController

Route::post('/updatecreator', 'CreatorController@updateOne')->name('home');
Route::post('/deletecreator', 'CreatorController@deleteOne')->name('home');
Route::post('/createcreator', 'CreatorController@createOne')->name('home');


//CustomerController

Route::post('/updatecustomer', 'CustomerController@updateOne')->name('home');
Route::post('/deletecustomer', 'CustomerController@deleteOne')->name('home');
Route::post('/createcustomer', 'CustomerController@createOne')->name('home');

//GameController

Route::get('/game/{id}', 'GameController@readOne')->name('home');
Route::get('/updateGame/{id}', 'HomeController@updateGame')->name('home');
Route::post('/updategame', 'GameController@updateOne')->name('home');
Route::post('/deletegame', 'GameController@deleteOne')->name('home');
Route::post('/creategame', 'GameController@createOne')->name('home');

//JobController

Route::post('/updatejob', 'JobController@updateOne')->name('home');
Route::post('/deletejob', 'JobController@deleteOne')->name('home');
Route::post('/createjob', 'JobController@createOne')->name('home');

//RoleController

Route::post('/updaterole', 'RoleController@updateOne')->name('home');
Route::post('/deleterole', 'RoleController@deleteOne')->name('home');
Route::post('/createrole', 'RoleController@createOne')->name('home');

//UserController

Route::post('/updateuser', 'UserController@updateOne')->name('home');
Route::post('/deleteuser', 'UserController@deleteOne')->name('home');
Route::post('/createuser', 'UserController@createOne')->name('home');


// autocomplete 

//Route::get('autocomplete',array('as'=>'autocomplete','uses'=>'AutoCompleteController@index'));
Route::get('/searchajaxAuthor',array('as'=>'searchajax','uses'=>'AutoCompleteController@Author'));
Route::get('/searchajaxCategory',array('as'=>'searchajax','uses'=>'AutoCompleteController@Category'));
Route::get('/searchajaxCreator',array('as'=>'searchajax','uses'=>'AutoCompleteController@Creator'));