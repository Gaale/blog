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

Route::get('/contacts', ContactsController::class)->name('contacts');

Route::get('/author/{key}', PostByAuthorController::class)->name('post_by_author');

Route::get('/post/{id}', SinglePostController::class)->name('single_post');

Route::get('/category/{key}', PostByCategoryController::class)->name('post_by_category');


