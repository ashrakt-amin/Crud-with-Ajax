<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompanyController;

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
    return view('welcome');
});

Route::get('/company', [CompanyController::class ,'view'])->name('company.index');
Route::get('/companies',[CompanyController::class ,'get_company_data'])->name('data');
Route::get('/addcompany',[CompanyController::class ,'view'])->name('company.view');
Route::post('/addcompany',[CompanyController::class ,'Store'])->name('company.store');
Route::delete('/addcompany/{id}', [CompanyController::class ,'destroy'])->name('company.destroy');
Route::get('/addcompany/{id}/edit',[CompanyController::class ,'update'])->name('company.update');
