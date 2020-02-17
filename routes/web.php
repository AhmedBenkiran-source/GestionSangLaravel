<?php

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

Auth::routes();

Route::post('/user/logout', 'Auth\LoginController@userLogout')->name('user.logout');

Route::get('/', 'admin\HomeController@index')->name('home');

Route::get('addcart/{id}', 'CartController@addToCart');
Route::prefix('admin')->group(function() {
    Route::get('/login', 'AuthAdmin\LoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'AuthAdmin\LoginController@login')->name('admin.login.submit');
    Route::post('/logout', 'AuthAdmin\LoginController@logout')->name('admin.logout');
    Route::get('/password/reset', 'AuthAdmin\ForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
    Route::post('/password/email', 'AuthAdmin\ForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
    Route::get('/password/reset/{token}', 'AuthAdmin\ResetPasswordController@showResetForm')->name('admin.password.reset');
    Route::post('/password/reset', 'AuthAdmin\ResetPasswordController@reset');
});

Route::prefix('admin')->group(function() {
    Route::resource('/home', 'admin\HomeController');

});


Route::prefix('system-management')->group(function() {
    Route::resource('/produit', 'admin\ProduitController');
    Route::resource('/categorie', 'admin\CategorieController');
    Route::resource('/evenement', 'admin\EvenementController');
    Route::resource('/rencontre', 'admin\RencontreController');
    Route::resource('/adherente', 'admin\adherenteController');
    Route::resource('/compteadmin', 'admin\AdminController');
    Route::resource('/collecte', 'admin\CollecteController');
    
    
});
