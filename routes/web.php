<?php

use App\Http\Controllers\boucle;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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
/*
Route::get('/t',[PostController::class,'index']); 

    Route::get('/tay', function(){
        return response()->json([
            'title' => 'mon super titre',
            'description' => 'BOBY'
        ]);
    });
    Route::get('/article', function(){
        return view('article');
    });*/
   


    /** Eto le views 3 */

    Route::get('/',[PostController::class,'index'])->name('welcome');
    Route::get('/post',[PostController::class,'show'])->name('posts.show');
    Route::get('/contact',[PostController::class,'contact'])->name('contact');
    Route::post('/post/create',[PostController::class,'store'])->name('store');
    Route::get('/post/create',[PostController::class,'create'])->name('create');
    Route::get('/post/{id}',[PostController::class,'rechercheavecid'])->name('avecid');

