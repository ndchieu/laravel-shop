<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Frontend\CartController;

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
    return view('website.frontend.layouts.main');
});


Auth::routes();

Route::get('/', 'FrontendController@index')->name('website.index');
Route::get('/add-to-cart/{id}', 'FrontendController@addToCart')->name('website.addCart');
Route::get('/shopping-cart', 'FrontendController@getCart')->name('website.cart');
Route::get('/checkout-cart', 'FrontendController@getCheckout')->name('website.checkout');
Route::post('/checkout-cart', 'FrontendController@storeOrder')->name('website.storeOrder');



Route::get('cart', [CartController::class, 'cartList'])->name('cart.list');
Route::post('cart', [CartController::class, 'addToCart'])->name('cart.store');
Route::post('update-cart', [CartController::class, 'updateCart'])->name('cart.update');
Route::post('remove', [CartController::class, 'removeCart'])->name('cart.remove');
Route::post('clear', [CartController::class, 'clearAllCart'])->name('cart.clear');



Route::get('/shop','Frontend\ShopController@index');
Route::get('/product_details/{id}','Frontend\ShopController@detail')->name('product_details');


Route::get('/about',function(){
    return view('website.frontend.layouts.about');
});
Route::get('/blog',function(){
    return view('website.frontend.layouts.blog');
});
Route::get('/contact',function(){
    return view('website.frontend.layouts.contact');
});

Route::get('/elements',function(){
    return view('website.frontend.layouts.elements');
});


Route::get('/home', 'HomeController@index')->name('home');


Route::group(['middleware' => ['auth','auth_admin']], function () {
    Route::get('/dashboard', 'BackendController@index')->name('backend.index');

    Route::resource('/dashboard/productcategory', 'ProductCategoryController');

    Route::resource('/dashboard/document','DocumentController');

    Route::resource('/dashboard/product','ProductController');

    Route::resource('/dashboard/productImage','ProductImageController');

    Route::resource('/dashboard/contact','ContactController');

    Route::resource('/dashboard/contactForm','ContactFormController');

    Route::resource('/dashboard/customerDetail','PaymentController');

    Route::resource('/dashboard/payment','CustomerDetailController');

    Route::resource('/dashboard/image','ImageController');
});



