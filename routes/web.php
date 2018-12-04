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

//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/', 'TopController@index')->name('home');

Route::group(['middleware' => 'auth:company'], function() {
    Route::get('/products/create', 'ProductsController@create');
    Route::post('/products/create/confirm', 'ProductsController@confirm');
    Route::post('/products/', 'ProductsController@store');
    Route::get('/products/edit/{id}', 'ProductsController@edit');
    Route::post('/products/edit/{id}', 'ProductsController@update');
});

Route::get('/products/', 'ProductsController@index');
Route::get('/products/{id}', 'ProductsController@show');
Route::post('/products/{id}', 'ProductsController@show');
Route::get('/products/category/{id}', 'ProductsController@category');


Auth::routes();

Route::get('/mypage/', 'UsersController@index')->middleware('auth');

Route::get('/edit', 'UsersController@edit')->middleware('auth');
Route::post('/edit', 'UsersController@update')->middleware('auth');


Route::get('/home', 'TopController@index')->name('home');



Route::get('/company/home',      'Company\HomeController@index')->middleware('auth:company');
//TODO:page not foundだったので一時的に追加

/*
|--------------------------------------------------------------------------
| 3) Admin 認証不要
|--------------------------------------------------------------------------
*/
Route::group(['prefix' => 'company'], function() {
    Route::get('/',         function () { return redirect('/company/home'); });
    Route::get('login',     'Company\LoginController@showLoginForm')->name('company.login');
    Route::post('login',    'Company\LoginController@login');
    Route::get('/{id}', 'Company\CompaniesController@show');
});
 
/*
|--------------------------------------------------------------------------
| 4) Admin ログイン後
|--------------------------------------------------------------------------
*/
Route::group(['prefix' => 'company', 'middleware' => 'auth:company'], function() {
    Route::post('logout',   'Company\LoginController@logout')->name('company.logout');
    Route::get('home',      'Company\HomeController@index')->name('company.home');
});

Route::get('/users/', 'UsersController@list')->middleware('auth:company');
Route::get('/users/{id}', 'UsersController@show')->middleware('auth:company');
Route::post('/products/delete/{id}', 'ProductsController@destroy')->middleware('auth:company');



Route::group(['prefix' => 'company'], function() {
    Route::get('/',         function () { return redirect('/company/home'); });//TODO:上からリダイレクトしてる
    // Route::get('/', 'Company\HomeController@index');
    Route::get('edit',    'Company\CompaniesController@edit');
    Route::post('edit',    'Company\CompaniesController@update');
    Route::get('register',     'Company\RegisterController@showRegistrationForm')->name('company.register');
    Route::post('register',    'Company\RegisterController@register');
});
