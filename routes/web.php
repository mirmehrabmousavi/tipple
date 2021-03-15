<?php

use App\Http\Controllers\Admin\ApplicationController;
use App\Http\Controllers\Admin\BackgroundController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\ClientController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\EmailsController;
use App\Http\Controllers\Admin\MotivationController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\PurchaseController;
use App\Http\Controllers\Admin\ResumeController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\SettingsController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\TariffController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Admin\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Admin\Auth\PasswordResetLinkController;
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

//Admin Control
Route::namespace('Admin')->get('admin/' , [DashboardController::class , 'index'])->middleware(['auth']);
Route::group(['middleware' => ['auth'] , 'prefix' => 'admin' , ['namespace' => 'Admin']], function() {
    Route::resource('dashboard'  , DashboardController::class);
    Route::resource('permissions', PermissionController::class);
    Route::resource('roles'      , RoleController::class);
    Route::resource('users'      , UserController::class);
    Route::resource('products'   , ProductController::class);
    Route::resource('backgrounds', BackgroundController::class);
    Route::resource('blogs'      , BlogController::class);
    Route::resource('sliders'    , SliderController::class);
    Route::resource('motivations', MotivationController::class);
    Route::resource('tariffs'    , TariffController::class);
    Route::resource('resumes'    , ResumeController::class);
    Route::resource('purchases'  , PurchaseController::class);
    Route::resource('settings'   , SettingsController::class);
    //Settings Clients
    /*Route::get('settings/clients/' , [SettingsController::class , 'indexClients'])->name('client.index');
    Route::post('settings/clients/' , [SettingsController::class , 'storeClients'])->name('client.store');
    Route::get('settings/clients/create' , [SettingsController::class , 'createClients'])->name('client.create');
    Route::get('settings/clients/{client}' , [SettingsController::class , 'showClients'])->name('client.show');
    Route::get('settings/clients/edit/{client}' , [SettingsController::class , 'editClients'])->name('client.edit');
    Route::patch('settings/clients/{client}' , [SettingsController::class , 'updateClients'])->name('client.update');
    Route::post('settings/clients/{client}' , [SettingsController::class , 'destroyClients'])->name('client.destroy');
    //Settings Emails
    Route::get('settings/emails/' , [SettingsController::class , 'indexEmails'])->name('email.index');
    Route::post('settings/emails/' , [SettingsController::class , 'storeEmails'])->name('email.store');
    Route::get('settings/emails/create' , [SettingsController::class , 'createEmails'])->name('email.create');
    Route::get('settings/emails/{email}' , [SettingsController::class , 'showEmails'])->name('email.show');
    Route::get('settings/emails/edit/{email}' , [SettingsController::class , 'editEmails'])->name('email.edit');
    Route::patch('settings/emails/{email}' , [SettingsController::class , 'updateEmails'])->name('email.update');
    Route::post('settings/emails/{email}' , [SettingsController::class , 'destroyEmails'])->name('email.destroy');
    //Settings Application
    Route::get('settings/apps/' , [SettingsController::class , 'indexApps'])->name('app.index');
    Route::post('settings/apps/' , [SettingsController::class , 'storeApps'])->name('app.store');
    Route::get('settings/apps/create' , [SettingsController::class , 'createApps'])->name('app.create');
    Route::get('settings/apps/{app}' , [SettingsController::class , 'showApps'])->name('app.show');
    Route::get('settings/apps/edit/{app}' , [SettingsController::class , 'editApps'])->name('app.edit');
    Route::patch('settings/apps/{app}' , [SettingsController::class , 'updateApps'])->name('app.update');
    Route::post('settings/apps/{app}' , [SettingsController::class , 'destroyApps'])->name('app.destroy');*/
});

//Authentication Control
require __DIR__.'/auth.php';
