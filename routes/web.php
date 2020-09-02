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

// Route::get('testing/{id}/{name}','PageController@testingfun')->name('testingpage');

Route::get('/','PageController@mainfun')->name('mainpage');

Route::get('subcategory','PageController@categoryfun')->name('categorypage');

Route::get('promotion','PageController@promotionfun')->name('promotionpage');

Route::get('register','PageController@registerfun')->name('registerpage');

Route::get('shoppingcart','PageController@shoppingcartfun')->name('shoppingcartpage');

Route::get('login','PageController@loginfun')->name('loginpage');

Route::get('itemdetail','PageController@itemdetailfun')->name('itemdetailpage');

Route::get('brand','PageController@brandfun')->name('brandpage');

//backend
// Route::get('dashboard','BackendController@dashboardfun')->name('dashboardpage');
Route::middleware('role:Admin')->group(function ()
{
	Route::get('dashboard', 'BackendController@dashboardfun')->name('dashboardpage');
	Route::resource('items','ItemController');

	//brand
	Route::resource('brands','BrandController');

	//category
	Route::resource('categories','CategoryController');

	//subcategory
	Route::resource('subcategories','SubcategoryController');

	//oreder controller
	Route::resource('orders','OrderController');

});

//item




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


 Route::get('backendroute','BackendController@backendfun')->name('backendpage');
 Route::get('index','BackendController@orderlist')->name('index');
 Route::get('orderdetail/{id}','BackendController@orderdetail')->name('orderdetail');
