<?php

Route::redirect('/', '/login');
Route::redirect('/home', '/admin');
Auth::routes(['register' => false]);

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin', 'middleware' => ['auth']], function () {
    Route::get('/', 'HomeController@index')->name('home');
    // Permissions
    Route::delete('permissions/destroy', 'PermissionsController@massDestroy')->name('permissions.massDestroy');
    Route::resource('permissions', 'PermissionsController');

    // Roles
    Route::delete('roles/destroy', 'RolesController@massDestroy')->name('roles.massDestroy');
    Route::resource('roles', 'RolesController');

    // Users
    Route::delete('users/destroy', 'UsersController@massDestroy')->name('users.massDestroy');
    Route::resource('users', 'UsersController');

});

//Customers
Route::get('customers', 'CustomersController@index')->name('customer.index');
Route::get('find/customer', 'CustomersController@find')->name('find.customer');

//Products
Route::get('product', 'ProductController@index')->name('product.index');

//Transaction
Route::get('penjualan', 'TransactionController@index')->name('penjualan.index');
Route::get('penjualan/create', 'TransactionController@create')->name('penjualan.create');
