<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', 'TrangChuController@getTrangChu');

Route::resource('don-hang','DonHangController',['names'=>[
    'index'=>'donhang.index',
    'create'=>'donhang.create',
    'store'=>'donhang.store',
    'show'=>'donhang.show',
    'edit'=>'donhang.edit',
    'update'=>'donhang.update',
    'destroy'=>'donhang.destroy',
]]);

Route::resource('san-pham','SanPhamController',['names'=>[
    'index'=>'sanpham.index',
    'create'=>'sanpham.create',
    'store'=>'sanpham.store',
    'show'=>'sanpham.show',
    'edit'=>'sanpham.edit',
    'update'=>'sanpham.update',
    'destroy'=>'sanpham.destroy',
]]);
// Route::get('don-hang','TheLoaiController@index')->name('donhang.index');
// Route::get('don-hang/create','TheLoaiController@create')->name('donhang.create');
// Route::post('don-hang','TheLoaiController@store')->name('donhang.store');
// Route::get('don-hang/{id}','TheLoaiController@show')->name('donhang.show');
// Route::get('don-hang/{id}/edit','TheLoaiController@edit')->name('donhang.edit');
// Route::put('don-hang/{id}','TheLoaiController@update')->name('donhang.update');
// Route::delete('don-hang/{id}','TheLoaiController@destroy')->name('donhang.destroy');



