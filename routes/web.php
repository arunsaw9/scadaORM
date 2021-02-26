<?php

use Illuminate\Support\Facades\Route;

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
    return view('auth.login');
});

// Route::prefix('admin')->group(function () {
//     Route::resource('/scadaproduction', 'ScadaProductionController');
//     Route::resource('/registration', 'UserRegistrationController')->middleware('auth');
// });

Route::get('/ldap', 'UserRegistrationController@mytest');


Route::group(['middleware' => ['role:Admin|user-edit']], function () {
    
});

Route::resource('/roles', 'RoleController');
Route::resource('/permission', 'PermissionController');
Route::resource('/user', 'UserRegistrationController');

Route::resource('/scadaproduction', 'ScadaProductionController');

Route::get('/ReportsProd', 'ScadaProductionController@ProductionReports');
Route::post('/ReportsProd', 'ScadaProductionController@ReportsProd')->name('production.reports');



Route::get('/LocalReportProd', 'ScadaProductionController@LocalReportProd')->name('LocalReport');
Route::post('/LocalReportProd/', 'ScadaProductionController@LocalReportProdData')->name('LocalReport.post');
//Route::post('/LocalReportProd/{val1}/{val2}', 'ScadaProductionController@LocalReportProdData');

Route::post('/view-data', 'ScadaProductionController@PreviousData')->name('previous.data');

Route::post('/copy-data', 'ScadaProductionController@Copydata')->name('copy.data');



Route::resource('/scadadrilling', 'ScadaDrillingController');

Route::post('/DrillSearchReports', 'ScadaDrillingController@drilreports')->name('drilreports');

Route::post('/drildata-copy', 'ScadaDrillingController@drilDataCopy')->name('drildata.copy');

Route::get('/LocalDrillReport', 'ScadaDrillingController@DrillReports')->name('scada.drilling');
Route::post('/LocalDrillReport', 'ScadaDrillingController@DrillReportshow')->name('drill.reports');


Route::get('/Export-ReportsProd', 'OrmController@Export_ReportsProd')->name('Export.ReportsProd');
Route::get('/Export-DrillReport', 'OrmController@Export_LocalDrillReport')->name('Export.LocalDrillReport');

Route::post('/subasset/{id}', 'OrmController@subasset');
Route::post('/dril-subasset/{id}', 'OrmController@drilSubasset');

Route::post('/user-cpf/{id1}{id2}', 'OrmController@UserCPF');


Route::get('test', 'OrmController@test');

Route::view('/admin', 'orm.index');



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';


