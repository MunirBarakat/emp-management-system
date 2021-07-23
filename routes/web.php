<?php

use Illuminate\Routing\RouteGroup;
use Illuminate\Support\Facades\Auth;
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



//Auth::routes(['register' => false]);

Auth::routes();
Route::group(['middleware'=>['guest']],function(){
   
    Route::get('/', function()
	{
        return view('auth.login');
	});
 
});
	

Route::group([
    'prefix' => LaravelLocalization::setLocale(),
    'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath','auth']
], function()
{
	
   	Route::get('/dashboard','HomeController@index')->name('dashboard');

Route::group(['namespace'=>'Ranks'],function(){
Route::resource('Rank','RankController');

});

Route::group(['namespace'=>'groupdministrators'],function(){
Route::resource('groups','groupdministratorontroller');

});

Route::group(['namespace'=>'Degrees'],function(){
Route::resource('Degrees','DegreeController');
});

Route::group(['namespace'=>'Reviews'],function(){
Route::resource('Reviews','ReviewController');
});

Route::group(['namespace'=>'WorkNature'],function(){
Route::resource('WorkNatures','WorkNatureController');
});


Route::group(['namespace'=>'EmployeeStatuse'],function(){
Route::resource('empStatus','EmployeeStatusController');
});


Route::group(['namespace'=>'EmployeeDatas'],function(){
Route::resource('Employee','EmployeeDataController');
Route::post('uploade_attachment','EmployeeDataController@uploade_attachment')->name('uploade_attachment');
Route::get('Download_attachment/{CardNumber}/{filename}', 'EmployeeDataController@Download_attachment')->name('Download_attachment');
Route::post('Delete_attachment', 'EmployeeDataController@Delete_attachment')->name('Delete_attachment');



});



});
