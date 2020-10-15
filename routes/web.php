<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;

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
//     return view('layout');
// });



// Route::get('/product', function () {
//     return view('pages.product');
// });
// Route::get('/news', function () {
//     return view('pages.news');
// });
// Route::get('/contact', function () {
//     return view('pages.contact');
// });

// Admin
Route::get('/','HomeController@index');

Route::get('/dashboard','AdminController@show_dashboard');

// login
Route::post('/admin-dashboard','AdminController@dashboard');
Route::get('/login','AdminController@index');
Route::get('/logout','AdminController@logout');



// Trang index
Route::get('/','HomeController@index');
Route::get('/trang-chu','HomeController@index');

// Thanh navigation
Route::get('/news', 'HomeController@news');
Route::get('/product', 'HomeController@product');
Route::get('/contact', 'HomeController@contact');

// ADD Category product
Route::get('/add-cate-product', 'CategoryProduct@add_cate_product');
Route::get('/all-cate-product', 'CategoryProduct@all_cate_product');

Route::post('/save-category-product','CategoryProduct@save_category_product');
//edit/delete
Route::get('/edit-category-product/{category_product_id}','CategoryProduct@edit_category_product');
Route::post('/update-category-product/{category_product_id}','CategoryProduct@update_category_product');
Route::get('/delete-category-product/{category_product_id}','CategoryProduct@delete_category_product');


// Like/Unlike
Route::get('/unactive-category-product/{category_product_id}','CategoryProduct@unactive_category_product');
Route::get('/active-category-product/{category_product_id}','CategoryProduct@active_category_product');

// Brand prodcut
Route::get('/add-brand-product', 'BrandProduct@add_brand_product');
Route::get('/all-brand-product', 'BrandProduct@all_brand_product');

Route::post('/save-brand-product','BrandProduct@save_brand_product');

Route::get('/unactive-brand-product/{brand_product_id}','BrandProduct@unactive_brand_product');
Route::get('/active-brand-product/{brand_product_id}','BrandProduct@active_brand_product');

//add product
Route::get('/add-product','ProductController@add_product');
Route::post('/save-product','ProductController@save_product');
Route::get('/all-product','ProductController@all_product');
Route::get('/unactive-product/{product_id}','ProductController@unactive_product');
Route::get('/active-product/{product_id}','ProductController@active_product');


//Edit/Delete
Route::get('/edit-brand-product/{brand_product_id}','BrandProduct@edit_brand_product');
Route::post('/update-brand-product/{brand_product_id}','BrandProduct@update_brand_product');
Route::get('/delete-brand-product/{brand_product_id}','BrandProduct@delete_brand_product');
