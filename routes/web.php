<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;
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


Route::get('/',[FrontController::class,'index'])->name('index');
Route::get('/about',[FrontController::class,'about'])->name('about');
Route::get('/portfolio',[FrontController::class,'portfolio'])->name('portfolio');
Route::get('/blog',[FrontController::class,'blog'])->name('blog');
Route::get('/service',[FrontController::class,'service'])->name('service');
Route::get('/blog/{id}',[FrontController::class,'blogid'])->name('blogid');
Route::get('/contact',[FrontController::class,'contact'])->name('contact');
Route::get('/portfolio/{siteservice}',[FrontController::class,'showportfolio'])->name('portshow');
Route::get('/site-services/{id}', [FrontController::class, 'siteservicesID'])->name('siteservicesID');
Route::get('/design-services/{id}', [FrontController::class, 'designservicesID'])->name('designservicesID');
Route::get('/seo-services/{id}', [FrontController::class, 'seoservicesID'])->name('seoservicesID');
Route::get('/footer',[FrontController::class,'footer'])->name('footer');
Route::get('/abbos',[FrontController::class,'comming']);




Route::get('/prices',[FrontController::class,'price'])->name('price');
Route::get('/brif',[FrontController::class,'brif'])->name('brif');
Route::get('/testimonial',[FrontController::class,'testimonial'])->name('testimonial');
Route::get('/search',[FrontController::class,'search'])->name('search');
Route::post('/bot',[FrontController::class,'bot'])->name('bot');
Route::post('/papop',[FrontController::class,'papop'])->name('papop');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::get('lang/{lang}', function($lang){
    session(['lang'=>$lang]);
    return back();
})->name('lang');
