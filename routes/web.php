<?php

use App\Http\Controllers\boucle;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
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
   
    /**MAnisy login */
    Route::get('/',[LoginController::class,'acceuil'])->name('acceuil');
    Route::get('/connexion',[LoginController::class,'connexion'])->name('connexion');
    Route::get('/logout',[LoginController::class,'logout'])->name('logout')->middleware('auth');
   


    /** Eto le views 3 */

    Route::get('/b',[PostController::class,'index'])->name('welcome')->middleware('auth');
    Route::get('/post',[PostController::class,'show'])->name('posts.show')->middleware('auth');
    Route::get('/contact',[PostController::class,'contact'])->name('contact')->middleware('auth');
    Route::post('/post/create',[PostController::class,'store'])->name('store')->middleware('auth');
    Route::get('/post/create',[PostController::class,'create'])->name('create')->middleware('auth');
    Route::get('/post/{id}',[PostController::class,'rechercheavecid'])->name('avecid')->middleware('auth');



