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


Route::get('/', 'HomeController@index');
Route::get('/pro', 'ProductController@index')->name('product.index');
Route::get('/show/{product}', 'ProductController@show')->name('product.show');
Route::get('/add/product', 'ProductController@create')->name('add.product')->middleware('auth');
Route::post('/add/product', 'ProductController@store')->name('create.product');
Route::get('/product/rating', 'ProductController@rates')->name('rate.product');
Route::post('/product/search', 'ProductController@search')->name('product.search');
Route::post('/product/comment/{product}', 'ProductController@commentCreate')->name('product.comment');
Route::get('/product/comment/{product}', 'ProductController@comments')->name('show.comments');

Route::get('/admin/login', 'AdminController@loginAdmin')->name('admin.login');

Route::middleware(['admins'])->group(function () {
    Route::get('/admin/dashboard', 'AdminController@isAdmin')->name('admin.index');
    Route::get('/adminka/add/product/page', 'AdminController@create')->name('admin.createPage');
    Route::get('/admin/add/role/page', 'AdminController@addRolePage')->name('admin.addRolePage');
    Route::get('/admin/add/role/permission/{role}', 'AdminController@RoleToPermission')->name('admin.roleToPermission');
    Route::get('/adminka/lists', 'AdminController@lists')->name('admin.lists')/*->middleware('can:lists', \App\User::class)*/;
    Route::get('/adminka/users/lists', 'AdminController@usersList')->name('users.list');
    Route::get('/adminka/user/show/{id}', 'AdminController@userShow')->name('user.show');
    Route::get('/adminka/user/edit/{id}', 'AdminController@userEdit')->name('user.edit');
    Route::post('/adminka/users/update', 'AdminController@userUpdate')->name('users.update');
    Route::post('/adminka/users/search/lists', 'AdminController@userSearch')->name('search.list');
    Route::post('/adminka/attach/permission/{user}/{permission}', 'AdminController@attachPermission')->name('admin.attachPermission');
    Route::post('/adminka/detach/permission/{user}/{permission}', 'AdminController@detachPermission')->name('admin.detachPermission');
    Route::post('/adminka/attach/role/{user}/{role}', 'AdminController@attachRole')->name('admin.attachRole');
    Route::post('/adminka/detach/role/{user}/{role}', 'AdminController@detachRole')->name('admin.detachRole');

    Route::post('/adminka/attach/permission/{role}/{permission}', 'AdminController@attachPermissionToRole')->name('admin.attachPermissionToRole');
    Route::post('/adminka/detach/permission/{role}/{permission}', 'AdminController@detachPermissionFromRole')->name('admin.detachPermissionFromRole');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

