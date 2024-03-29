<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use  App\Http\Controllers\Home\HomeSliderController;
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
    return view('frontend.index');
});

Route::get('/login', function () {
    return view('auth.login');
});

Route::get('/dashboard', function () {
    return view('admin.index');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::controller(AdminController::class)->group(function(){
    Route::get('/admin/logout', 'destroy')->name('admin.logout');
    Route::get('/admin/profile', 'Profile')->name('admin.profile');
    Route::get('/admin-profile-edit','editAdminProfile')->name('edit-admin-Profile');
    Route::post('/store-admin-data','storeAdminData')->name('save-admin-data');
    Route::get('/change-password','changePassword')->name('changePassword');
    Route::post('/save-password','savePassword')->name('savePassword');
});

//Home silde All Route
Route::controller(HomeSliderController::class)->group(function(){
    Route::get('/home/slide', 'HomeSlider')->name('home.slide');
    
});