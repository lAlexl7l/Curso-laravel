<?php

use Illuminate\Support\Facades\Route;
use PHPUnit\Util\Test;

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


Route::get('/dashboard', 'DashboardController@index'); 
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
/*
Route::resource('/expense_reports', 'ExpenseReportController');
Route::get('/expense_reports/{id}/confirmDelete', 'ExpenseReportController@confirmDelete');
*/
Route::resource('/reporte', 'ReporteController');
Route::get('/reporte/{idr}/confirmDelete', 'ReporteController@confirmDelete');
