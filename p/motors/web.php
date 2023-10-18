<?php

use App\Http\Controllers\Admin\AdminCrudController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\CarController;
use App\Http\Controllers\Admin\BrandController;

use App\Http\Controllers\Admin\BranchesController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ModelCarController;

use App\Http\Controllers\Admin\AdminSettingController;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

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



Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' , 'auth']
    ],
    function()
    {
        //ui auth start
        Auth::routes();
         Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
      //ui auth end

      //admin route start
           //cat start
          Route::resource('Cats',CategoryController::class);
          Route::get('delete/{id}',[CategoryController::class,'delete'])->name('Cats.delete');
        //cat end

         //Brand start
         Route::resource('Brands',BrandController::class);
         Route::get('brand_delete/{id}',[BrandController::class,'delete'])->name('Brands.delete');
         //Brand start

         //model start
         Route::resource('Models',ModelCarController::class);
         Route::get('model_delete/{id}',[ModelCarController::class,'delete'])->name('Model.delete');

        //model route end

         Route::resource('Cars',CarController::class);
         Route::get('cars_delete/{id}',[CarController::class,'delete'])->name('Car.delete');


         ////// branches start
         Route::resource('Branches',BranchesController::class);
         Route::get('branche_delete/{id}',[BranchesController::class,'delete'])->name('Branche.delete');
         ////// branches end


         // admin crud controler 
         Route::resource('Admins',AdminCrudController::class);
         Route::get('admin_delete/{id}',[AdminCrudController::class,'delete'])->name('Admin.delete');


         //admin crud end


          // admin Adminsetting controler 
          Route::resource('Adminsetting',AdminSettingController::class);
         // Route::get('admin_delete/{id}',[AdminCrudController::class,'delete'])->name('Admin.delete');
 
 
          //admin Adminsetting end

      //admin route end


     
    });
    


