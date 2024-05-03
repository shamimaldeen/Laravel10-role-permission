<?php

use App\Http\Controllers\CurrencyController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});

Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::group(['middleware' => ['auth', 'active']], function() {
    Route::get('/',  [HomeController::class, 'index']);
   Route::resource('role', RoleController::class);
    Route::get('role/permission/{id}', [RoleController::class,'permission'])->name('role.permission');
    Route::post('role/set_permission', [RoleController::class,'setPermission'])->name('role.setPermission');

   Route::get('user/profile/{id}', [UserController::class,'profile'])->name('user.profile');
  Route::put('user/update_profile/{id}', [UserController::class,'profileUpdate'])->name('user.profileUpdate');
   Route::put('user/changepass/{id}', [UserController::class,'changePassword'])->name('user.password');
    Route::get('user/genpass', [UserController::class,'generatePassword']);
//    Route::post('user/deletebyselection', 'UserController@deleteBySelection');
    Route::resource('user',UserController::class);

    Route::get('setting/general_setting', 'SettingController@generalSetting')->name('setting.general');
    Route::post('setting/general_setting_store', 'SettingController@generalSettingStore')->name('setting.generalStore');
    Route::resource('currency', CurrencyController::class);

    Route::get('setting/general_setting', [SettingController::class,'generalSetting'])->name('setting.general');
    Route::post('setting/general_setting_store', [SettingController::class,'generalSettingStore'])->name('setting.generalStore');

});
