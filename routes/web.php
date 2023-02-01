<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ProductsController;
use App\Http\Controllers\Admin\CategoriesController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\ReviewsController;
use App\Http\Controllers\Admin\ShippingController;
use App\Http\Controllers\Admin\DiscountController;
use App\Http\Controllers\Admin\FlashController;
use App\Http\Controllers\Admin\CustomersController;
use App\Http\Controllers\Admin\InvoiceController;
use App\Http\Controllers\Admin\TaxesController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\SetController;


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

Route::group(['middleware'=>'auth'],function(){
//product routess
Route::get('/products',[ProductsController::class,'create']);
Route::get('/products/edit/{id}',[ProductsController::class,'edit']);
Route::put('/products/update/{id}',[ProductsController::class,'update']);
Route::get('/products/delete/{id}',[ProductsController::class,'delete']);
Route::get('/products/form',[ProductsController::class,'index']);
Route::post('/products/form',[ProductsController::class,'store'])->name('products');
//end product routes


//categories routes
Route::get('/category',[CategoriesController::class,'create']);
Route::get('/category/edit/{id}',[CategoriesController::class,'edit']);
Route::put('/category/update/{id}',[CategoriesController::class,'update']);
Route::get('/category/delete/{id}',[CategoriesController::class,'delete']);
Route::get('/categories/form',[Categoriescontroller::class,'index']);
Route::post('/categories/form',[Categoriescontroller::class,'store'])->name('categories');
//end categories routes


Route::get('/orders',[OrderController::class,'create']);
Route::get('/order_return',[OrderController::class,'index']);

Route::get('/reviews',[ReviewsController::class,'create']);

Route::get('/shipping',[ShippingController::class,'create']);

Route::get('/flash',[FlashController::class,'create']);

Route::get('/customers',[CustomersController::class,'create']);

Route::get('/discount',[DiscountController::class,'create']);

Route::get('/invoice',[InvoiceController::class,'create']);

Route::get('/taxes',[TaxesController::class,'create']);

Route::get('/dashboard',[DashboardController::class,'create'])->name('dashboard');

Route::get('/profile',[AuthController::class,'setting']);

Route::post('profile-update', [AuthController::class,'profile_update'])->name('profile.update');

Route::get('/settings',[SettingController::class,'index']);
Route::post('/settings',[SettingController::class,'store'])->name('settings');


});

//admin pages ....

Route::group(['middleware'=>'guest'],function(){

Route::post('/login',[AuthController::class,'login'])->name('admin.login');
Route::get('/login',[AuthController::class,'create'])->name('login');


Route::get('/register',[AuthController::class,'index']);

Route::get('/reset',[AuthController::class,'reset']);

Route::get('/forgot',[AuthController::class,'forgot']);

});

//end Admin pages....

//other pages....

// Route::post('/',[AuthController::class,'d'])->name('admin.login');

Route::get('/logout',[AuthController::class,'logout']);

Route::get('/create', function () {
    return view('pages.other.create');
});
Route::get('/contact', function () {
    return view('pages.other.contact');
});
// Route::get('/profile', function () {
//     return view('pages.profile');
// });
//end other pages....


//Frontend Pagess

Route::get('', function () {
    return view('frontend.pages.home');
});

Route::get('/about', function () {
    return view('frontend.pages.about');
});

Route::get('/contact', function () {
    return view('frontend.pages.contact');
});

Route::get('/fashion', function () {
    return view('frontend.pages.fashion');
});

Route::get('/news', function () {
    return view('frontend.pages.news');
});

Route::get('/productss', function () {
    return view('frontend.pages.products');
});

Route::get('/cart', function () {
    return view('frontend.pages.cart');
});

Route::get('/checkout', function () {
    return view('frontend.pages.checkout');
});



