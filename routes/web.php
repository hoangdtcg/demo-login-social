<?php

use App\Http\Controllers\GithubController;
use App\Http\Controllers\SocialController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/auth/redirect/{provider}', [SocialController::class,'redirect']);
Route::get('/callback/{provider}', [SocialController::class, 'callback']);


//Route::get('/auth/redirect/{provider}', [GithubController::class,'redirectGitHub']);
//Route::get('/callback/{provider}', [GithubController::class, 'callbackGitHub']);



