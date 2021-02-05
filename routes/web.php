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
Route::post('/upload', function(Request $request){
   $request->image->store('images', 'public');
   return 'uploaded !';
});

Auth::routes();



Route::group(['middleware'=>['auth','admin']],function(){
    
    //Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/home', function () {
        return view('home');
    });

});

Route::get('/welcome', function () {
    return view('welcome');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/gallery', function () {
    return view('gallery');
});
Route::get('/whyus', function () {
    return view('whyus');
});
Route::get('/consultant', function () {
    return view('consultant');
});
Route::get('/products', function () {
    return view('products');
});
Route::get('/supports', function () {
    return view('supports');
});
Route::get('/trunkey', function () {
    return view('trunkeysolutions');
});
Route::get('/career', function () {
    return view('career');
});