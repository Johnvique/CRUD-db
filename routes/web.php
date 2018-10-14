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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/Admin','HomeController@admin');
Route::get('/Exam','StudentController@marks');
Route::post('/Exam','StudentController@poststore');
Route::get('/admin','StudentController@result');
Route::get('/delete/{delete}','StudentController@delete');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
