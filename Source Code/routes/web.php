<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/users/logout', 'Auth\LoginController@userLogout')->name('user.logout');

Route::prefix('admin')->group(function() {
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    // Route::get('/', 'AdminController@index')->name('admin.dashboard');
    Route::get('/logout', 'Auth\AdminLoginController@logout')->name('admin.logout');

    //manage Admins
    Route::get('/', 'AdminController@index')->name('admin.dashboard');
    Route::post('/', 'AdminController@store');
    Route::get('/create', 'AdminController@create');
    Route::get('/{admin}', 'AdminController@show')->name('admin.show');
    Route::patch('/{admin}', 'AdminController@update');
    Route::delete('/{admin}', 'AdminController@destroy');
    Route::get('/{admin}/edit', 'AdminController@edit');

    // Password reset routes
    Route::post('/password/email', 'Auth\AdminForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
    Route::get('/password/reset', 'Auth\AdminForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
    Route::post('/password/reset', 'Auth\AdminResetPasswordController@reset');
    Route::get('/password/reset/{token}', 'Auth\AdminResetPasswordController@showResetForm')->name('admin.password.reset');
});

// Route::get('categories', 'CategoryController@index')->name('categories.index');
// Route::post('/categories', 'CategoryController@store');
// Route::get('/categories/create', 'CategoryController@create');
// Route::get('/categories/{category}', 'CategoryController@show')->name('categories.show');
// Route::patch('/categories/{category}', 'CategoryController@update');
// Route::delete('/categories/{category}', 'CategoryController@destroy');
// Route::get('/categories/{category}/edit', "CategoryController@edit");
Route::middleware('auth:admin')->prefix('/categories')->group(function () {
    Route::get('/', 'CategoryController@index')->name('categories.index');
    Route::post('/', 'CategoryController@store');
    Route::get('/create', 'CategoryController@create');
    Route::get('/{category}', 'CategoryController@show')->name('categories.show');
    Route::patch('/{category}', 'CategoryController@update');
    Route::delete('/{category}', 'CategoryController@destroy');
    Route::get('/{category}/edit', 'CategoryController@edit');
});

Route::middleware('auth:admin')->prefix('/subcategories')->group(function () {
    Route::get('/', 'SubcategoryController@index')->name('subcategories.index');
    Route::post('/', 'SubcategoryController@store');
    Route::get('/create', 'SubcategoryController@create');
    Route::get('/{subcategory}', 'SubcategoryController@show')->name('subcategories.show');
    Route::patch('/{subcategory}', 'SubcategoryController@update');
    Route::delete('/{subcategory}', 'SubcategoryController@destroy');
    Route::get('/{subcategory}/edit', 'SubcategoryController@edit');
});

Route::middleware('auth:admin')->prefix('/products')->group(function() {
    Route::get('/', 'ProductController@index')->name('products.index');
    Route::post('/', 'ProductController@store');
    Route::get('/create', 'ProductController@create');
    Route::get('/{product}', 'ProductController@show')->name('product.show');
    Route::patch('/{product}', 'ProductController@update');
    Route::delete('/{product}', 'ProductController@destroy');
    Route::get('/{product}/edit', 'ProductController@edit');
});

Route::get('/images/{id}/create', 'ProductImageController@create')->name('product.gallery');
Route::post('/images', 'ProductImageController@store');
Route::get('/images/list', 'ProductImageController@index')->name('images.index');
Route::get('/single-image/{id}', 'ProductImageController@show')->name('image.show');
Route::patch('/single-image/{id}', 'ProductImageController@update');
Route::get('image/{id}/edit', 'ProductImageController@edit');
