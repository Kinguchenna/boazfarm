<?php

use Illuminate\Support\Facades\Route;

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

// frontend from route
Route::get('/', 'FrontController@index')->name('boaz');
Route::get('/about-us', 'AboutController@index')->name('about');
Route::get('/contact', 'ContactController@index')->name('contact');
Route::get('/service', 'ServiceController@index')->name('service');
Route::get('/blog', 'BlogController@index')->name('blog');
Route::get('/price', 'PriceController@index')->name('price');
Route::get('/location', 'LocationController@index')->name('location');
Route::get('/team', 'TeamController@index')->name('team');
Route::get('/booking', 'BookingController@index')->name('booking');
Route::get('/single-blog', 'FrontController@single-blog')->name('single-blog');

// end of front end routes



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('logout', 'Auth\LoginController@logout');

Route::group(['prifix'=>'admin', 'middleware'=>['admin','auth']], function(){

    Route::get('addabout', 'AboutController@create')->name('addabout');
    Route::get('addblogpost', 'BlogController@create')->name('addblogpost');
    Route::get('addcategory', 'CategoryController@create')->name('addcategory');

    

    Route::get('addcontact', 'ContactController@create')->name('addcontact');

    Route::get('allmessages', 'ContactController@allmessages')->name('allmessages');



    Route::post('addsociallink', 'ContactController@store')->name('addsociallink');
    Route::post('addcategory', 'CategoryController@store')->name('addcategory');

    Route::post('addgooglemap', 'ContactController@addgooglemap')->name('addgooglemap');
    Route::post('sendblogpost', 'BlogController@store')->name('sendblogpost');



    Route::post('sendcontacttoadmin', 'ContactController@sendcontacttoadmin')->name('sendcontacttoadmin');




    

    Route::get('deladdsociallink/{id}', 'ContactController@destroy')->name('deladdsociallink');
    Route::get('deladdcontact/{id}', 'ContactController@deladdcontact')->name('deladdcontact');



    Route::get('deletetmap/{id}', 'ContactController@deletetmap')->name('deletetmap');
    Route::get('deletetcat/{id}', 'CategoryController@destroy')->name('deletetcat');

    Route::get('deletetpost/{id}', 'BlogController@destroy')->name('deletetpost');

    Route::get('blogdetails/{id}', 'BlogController@show')->name('blogdetails');
    Route::post('sendcomment', 'BlogController@sendcomment')->name('sendcomment');





    

    Route::get('deleteabout/{id}', 'AboutController@destroy')->name('deleteabout');
    Route::get('deleteteam/{id}', 'TeamController@destroy')->name('deleteteam');

    Route::post('sendaddabout', 'AboutController@store')->name('sendaddabout');

    Route::post('sendaddteams', 'TeamController@store')->name('sendaddteams');

    
    

    Route::get('admin', [App\Http\Controllers\AdminController::class, 'index'])->name('admin.index');
});