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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//Category Control Route
Route::resource('category-add', 'App\Http\Controllers\CategoryController');
Route::get('category-edit/{id}', 'App\Http\Controllers\CategoryController@edit');
Route::post('category-update', 'App\Http\Controllers\CategoryController@update') -> name('category.update');

//tag control Route
Route::resource('tag-add', 'App\Http\Controllers\TagController');
Route::get('tag-edit/{id}', 'App\Http\Controllers\TagController@edit');
Route::post('tag-update', 'App\Http\Controllers\TagController@update') -> name('tag.update');

//Product Control Route
Route::resource('product-add','App\Http\Controllers\ProductController');
Route::get('product-edit/{id}','App\Http\Controllers\ProductController@edit');
Route::post('product-update','App\Http\Controllers\ProductController@update') -> name('product.update');

//Front End Controller
Route::get('home-page', 'App\Http\Controllers\FrontendController@HomePageShow') -> name('home.page');
Route::get('about-page', 'App\Http\Controllers\FrontendController@AboutPageShow') -> name('about.page');
Route::get('shop-page', 'App\Http\Controllers\FrontendController@ShopPageShow') -> name('shop.page');
Route::get('contect-page', 'App\Http\Controllers\FrontendController@ContectPageShow') -> name('contect.page');
Route::get('faq-page', 'App\Http\Controllers\FrontendController@FaqPageShow') -> name('faq.page');
Route::get('how-page', 'App\Http\Controllers\FrontendController@HowPageShow') -> name('how.page');

//Settings Page Control Route
Route::get('slider-add', 'App\Http\Controllers\HomePageController@SliderPageShow') -> name('sldier.add');
Route::post('slider-store', 'App\Http\Controllers\HomePageController@SliderPageStore') -> name('sldier.store');
Route::get('copy-add', 'App\Http\Controllers\HomePageController@CopyPageShow') -> name('copy.index');
Route::post('copy-update', 'App\Http\Controllers\HomePageController@CopyUpdate') -> name('copy.update');
Route::get('patner-add', 'App\Http\Controllers\HomePageController@PatnerPageShow') -> name('patner.index');
Route::post('patner-update', 'App\Http\Controllers\HomePageController@PatnerUpdate') -> name('patner.update');
Route::get('member-add', 'App\Http\Controllers\HomePageController@MemberPageShow') -> name('member.add');
Route::post('member-update', 'App\Http\Controllers\HomePageController@MemberUpdate') -> name('member.update');
Route::get('social-add', 'App\Http\Controllers\HomePageController@SocialPageShow') -> name('social.add');
Route::post('social-update', 'App\Http\Controllers\HomePageController@SocialUpdate') -> name('social.update');
