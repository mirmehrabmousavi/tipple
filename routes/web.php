<?php

use App\Http\Controllers\Admin\ApplicationController;
use App\Http\Controllers\Admin\BackgroundController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\ClientController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\MotivationController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\PurchaseController;
use App\Http\Controllers\Admin\ResumeController;
use App\Http\Controllers\Admin\SettingsController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\TariffController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\AppController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AllBlogController;
use App\Http\Controllers\AllTariffController;
use App\Http\Controllers\EmailsController;
use App\Http\Controllers\IndexController;
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

//Site Control
Route::group([], function () {
    Route::resource('/' , IndexController::class);
});

Route::get('/app',[AppController::class , 'index'])->name('app');
Route::get('/contact',[ContactController::class , 'index'])->name('contact');
Route::get('/about',[AboutController::class , 'index'])->name('about');
Route::get('/blogs',[AllBlogController::class , 'index'])->name('allblogs');
Route::get('/blog/{blog}',[AllBlogController::class , 'getBlog'])->name('getblog');
Route::get('/tariffs',[AllTariffController::class , 'index'])->name('alltariffs');
Route::resource('purchases'  , PurchaseController::class);
Route::resource('emails'  , EmailsController::class);

//Admin Control
Route::namespace('Admin')->get('admin/' , [DashboardController::class , 'index'])->middleware(['auth']);
Route::group(['middleware' => ['auth'] , 'prefix' => 'admin' , ['namespace' => 'Admin']], function() {
    Route::resource('dashboard'  , DashboardController::class);
    Route::resource('users'      , UserController::class);
    Route::resource('blogs'      , BlogController::class);
    Route::resource('sliders'    , SliderController::class);
    Route::resource('motivations', MotivationController::class);
    Route::resource('tariffs'    , TariffController::class);
    Route::resource('resumes'    , ResumeController::class);
    Route::resource('settings'   , SettingsController::class);

});

//Authentication Control
require __DIR__.'/auth.php';
