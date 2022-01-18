<?php

use App\Http\Livewire\BlogPosts;
use App\Http\Livewire\CategoryPage;
use App\Http\Livewire\SinglePost;
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

Route::get('/', BlogPosts::class);
Route::get('/posts/{post}', SinglePost::class);
Route::get('/categories/{category}', CategoryPage::class);
