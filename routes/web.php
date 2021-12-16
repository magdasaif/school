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

Auth::routes();

Route::group(['middleware'=>['guest']],function(){
    Route::get('/', function()
    {
        return view('auth.login');
    });
});


//localeSessionRedirect this used to open site with last lang 
Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath','auth' ]
    ], function(){ //...
        
        // Route::get('/', function()
        // {
        //     return view('dashboard');
        // });

        Route::group(['namespace'=>'Grades'],function(){
            Route::resource('grades', 'GradeController');
        });
        
       // Route::get('/home', 'HomeController@index')->name('home');
       Route::get('/dashboard', 'HomeController@index')->name('dashboard');

    }
);

