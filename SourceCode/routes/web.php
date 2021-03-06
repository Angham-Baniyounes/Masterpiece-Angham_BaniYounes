<?php

use App\Feedback;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/users/logout', 'Auth\LoginController@userLogout')->name('user.logout');

Route::prefix('admin')->group(function() {
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/logout', 'Auth\AdminLoginController@logout')->name('admin.logout');

    //manage Admins
    Route::get('/', 'AdminController@index')->name('admin.dashboard');
    Route::post('/', 'AdminController@store');
    Route::get('/create', 'AdminController@create');
    Route::get('/{admin}', 'AdminController@show')->name('admin.show');
    Route::patch('/{admin}', 'AdminController@update');
    Route::delete('/{admin}', 'AdminController@destroy');
    Route::get('/{admin}/edit', 'AdminController@edit');
    Route::post('/search', 'AdminController@search');

    // Password reset routes
    Route::post('/password/email', 'Auth\AdminForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
    Route::get('/password/reset', 'Auth\AdminForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
    Route::post('/password/reset', 'Auth\AdminResetPasswordController@reset');
    Route::get('/password/reset/{token}', 'Auth\AdminResetPasswordController@showResetForm')->name('admin.password.reset');
});


Route::middleware('auth:admin')->group(function () {
    Route::resource('/categories', 'CategoryController');
    Route::post('categories/search', 'CategoryController@search');

    Route::resource('/subcategories', 'SubcategoryController');
    Route::post('subcategories/search', 'SubcategoryController@search');
    
    Route::name('')->group(function () {
        Route::resource('/products', 'ProductController');
        Route::post('products/search', 'ProductController@search');
    });
    Route::prefix('/images')->group(function () {
        Route::get('/list', 'ProductImageController@index')->name('images.index');
        Route::get('/{id}/create', 'ProductImageController@create')->name('product.gallery'); 
    });

    Route::prefix('/image')->group(function () {
        Route::get('/{id}/edit', 'ProductImageController@edit');
        Route::delete('/{id}', 'ProductImageController@destroy');
    });

    Route::prefix('/gallery')->group(function () {
        Route::get('/', 'ProductImageController@showGallery');
        Route::get('/{id}', 'ProductImageController@showGalleryProduct');
        
    });
    Route::prefix('/single-image')->group(function () {        
        Route::get('/{id}', 'ProductImageController@show')->name('image.show');
        Route::patch('/{id}', 'ProductImageController@update');
    });
    Route::post('/gallery-product', 'ProductImageController@store');

    Route::get('orders', 'OrderController@index');
    Route::get('orders/{id}/{status}', 'OrderController@changeStatus');
});




Route::prefix('users')->group(function() {
    Route::get('/', 'UserController@index')->name('user.index');
    Route::get('/{user}', 'UserController@show')->name('user.show');
});

// Route::get('/', function () {
//     return view('public.layout.public-side');
// });
// landing Page
Route::get('/', 'LandingPageController@index');
// Route::get('/shop', 'PageController@indexShop');
Route::any('/shop', 'PageController@indexShop')->name('shop.index');
Route::get('/single-product/{id}', 'PageController@showSingleProduct')->name('product.show');
Route::get('/aboutus', 'PageController@showAboutUs');

// Feedback
Route::post('/feedback/{id}', 'FeedbackController@store')->name('feedback.store');

Route::get('/cart', function () {
    return view('public.cart');
});

Route::post('/addToCart', 'CartController@addToCart');
Route::post('/update', 'CartController@update');
Route::get('cart', 'CartController@index');
Route::get('cart/delete/{id}', 'CartController@delete');
Route::get('checkout', 'CartController@Checkout');
Route::post('checkout', 'OrderController@store');