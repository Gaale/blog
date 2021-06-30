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

Route::get('/', MainController::class)->name('main');

Route::get('/about', 'SimplePageController@about')->name('about');

Route::get('/services', 'SimplePageController@services')->name('services');

Route::get('/contacts', 'ContactsController@show_contacts')->name('contacts');

Route::get('/author/{key}', PostByAuthorController::class)->name('post_by_author');

Route::get('/post/{id}', SinglePostController::class)->name('single_post');

Route::post('/post/{id}', SaveCommentController::class)->name('save_comment');

Route::get('/category/{key}', PostByCategoryController::class)->name('post_by_category');

Route::get('/404', function () {
    return view('404');
})->name('404');

//admin
Route::get('/admin/add_post', 'AdminPostsController@add')->name('get_add_post');

Route::post('/admin/add_post', 'AdminPostsController@save_post')->name('post_add_post');

Route::get('/admin/edit_post/{id}', 'AdminPostsController@edit')->name('get_edit_post');

Route::post('/admin/edit_post/{id}', 'AdminPostsController@save_edited_post')->name('post_save_edited_post');

Route::get('/admin', 'AdminPostsController@delete_post')->name('admin');

Route::delete('/admin', 'AdminPostsController@delete_post')->name('post_delete_post');

//cart
Route::get('/cart/add_to_cart/{id}', 'CartController@add_to_cart')->name('add_to_cart');

Route::get('/cart', 'CartController@show_cart')->name('show_cart');

Route::get('/cart/delete_item/{id}', 'CartController@delete_item')->name('delete_item');

Route::post('/cart/update_cart', 'CartController@update_cart')->name('update_cart');

Route::get('/cart/checkout', 'CartController@make_order')->name('make_order');

Route::post('/cart/checkout', OrderController::class)->name('checkout');

Route::get('/order/{id}', OrderReceivedController::class)->name('order');

//auth
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

