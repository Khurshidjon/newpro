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

Route::get('pro/{lang}', function ($lang) {
    \Session::put('lang', $lang);
    return redirect()->back();
})->name('locale');

Route::get('/show/{product}', 'ProductController@show')->name('product.show');
Route::get('/add/product', 'ProductController@create')->name('add.product')->middleware('auth');
Route::post('/add/product', 'ProductController@store')->name('create.product');
Route::get('/product/rating', 'ProductController@rates')->name('rate.product');
Route::post('/product/search', 'ProductController@search')->name('product.search');
Route::post('/product/comment/{product}', 'ProductController@commentCreate')->name('product.comment');
Route::get('/product/comment/{product}', 'ProductController@comments')->name('show.comments');

Route::get('/admin/login', 'AdminController@loginAdmin')->name('admin.login');

Route::middleware(['admins', 'auth'])->group(function () {
    Route::get('admin/dashboard', 'AdminController@isAdmin')->name('admin.index');
    Route::get('admin/add/product/page', 'AdminController@create')->name('admin.createPage');
    Route::get('admin/add/role/page', 'AdminController@addRolePage')->name('admin.addRolePage')->middleware('isSuperadmin');

    Route::get('admin/products/page', 'AdminController@productsPage')->name('admin.productPage');

    Route::get('admin/add/role/permission/{role}', 'AdminController@RoleToPermission')->name('admin.roleToPermission');
    Route::get('admin/lists', 'AdminController@lists')->name('admin.lists');
    Route::get('admin/users/lists', 'AdminController@usersList')->name('users.list');
    Route::get('admin/user/show/{id}', 'AdminController@userShow')->name('user.show');
    Route::get('admin/user/edit/{id}', 'AdminController@userEdit')->name('user.edit');

    Route::delete('/admin/user/delete/{user}', 'AdminController@userUserDelete')->name('admin.userDelete');
    Route::post('admin/users/update', 'AdminController@userUpdate')->name('users.update');
    Route::post('admin/users/search/lists', 'AdminController@userSearch')->name('search.list');
    Route::post('admin/attach/permission/{user}/{permission}', 'AdminController@attachPermission')->name('admin.attachPermission');
    Route::post('admin/detach/permission/{user}/{permission}', 'AdminController@detachPermission')->name('admin.detachPermission');
    Route::post('admin/attach/role/{user}/{role}', 'AdminController@attachRole')->name('admin.attachRole');
    Route::post('admin/detach/role/{user}/{role}', 'AdminController@detachRole')->name('admin.detachRole');

    Route::post('admin/attach/permission/{role}/{permission}', 'AdminController@attachPermissionToRole')->name('admin.attachPermissionToRole');
    Route::post('admin/detach/permission/{role}/{permission}', 'AdminController@detachPermissionFromRole')->name('admin.detachPermissionFromRole');

    Route::get('admin/product/status', 'AdminController@productStatus')->name('product.status');
    Route::get('admin/add/newUser', 'AdminController@addNewUserPage')->name('admin.newUserPage');
    Route::post('admin/add/newUser', 'AdminController@registerUser')->name('admin.registerUser');

    Route::get('admin/permission/role/change', 'AdminController@addRoleToPermission')->name('admin.addRoleToPermission')->middleware('isSuperadmin');


    Route::get('admin/permission/status', 'AdminController@permissionStatus')->name('permission.status');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

