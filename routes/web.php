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

Route::get('/', 'ExportExcelController@index');


Route::get('export', 'ExportExcelController@export')->name('export');
Route::get('importExportView', 'ExportExcelController@importExportView');
Route::post('import', 'ExportExcelController@import')->name('import');
