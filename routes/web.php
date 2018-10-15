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

Route::get('hello', 'HelloController@index');
Route::get('/products/', 'ProductsController@index');
Route::group(['middleware' => 'auth:company'], function() {
    Route::get('/products/create', 'ProductsController@create');
    Route::post('/products/create/confirm', 'ProductsController@confirm');
    Route::post('/products/', 'ProductsController@store');
    Route::get('/products/edit/{id}', 'ProductsController@edit');
    Route::post('/products/edit/{id}', 'ProductsController@update');
});
Route::delete('/products/{id}', 'ProductsController@destroy');
Route::get('/products/{id}', 'ProductsController@show');
Route::post('/products/{id}', 'ProductsController@show');
Route::get('/products/category/{id}', 'ProductsController@category');


Auth::routes();

Route::get('/mypage/', 'UsersController@index')->middleware('auth');
Route::get('/users/', 'UsersController@list');
Route::get('/users/{id}', 'UsersController@show');
Route::get('/edit', 'UsersController@edit')->middleware('auth');
Route::post('/edit', 'UsersController@update')->middleware('auth');


Route::get('/home', 'TopController@index')->name('home');
Route::get('/howto', 'TopController@howto');
Route::get('/terms', 'TopController@terms');

Route::get('/reservation/{id}', 'ReservationsController@show')->middleware('auth');
Route::post('/reservation/reserve/{id}', 'ReservationsController@store')->middleware('auth');

Route::get('login/{provider}',          'Auth\SocialAccountController@redirectToProvider');
Route::get('login/{provider}/callback', 'Auth\SocialAccountController@handleProviderCallback');

Route::get('/contact', 'ContactController@form');
Route::post('/contact/confirm', 'ContactController@confirm');
Route::post('/contact/process', 'ContactController@process');

Route::get('/transfer', 'TransferController@form');
Route::post('/transfer/confirm', 'TransferController@confirm');
Route::post('/transfer/process', 'TransferController@process');




/*
|--------------------------------------------------------------------------
| 3) Admin 認証不要
|--------------------------------------------------------------------------
*/
Route::group(['prefix' => 'company'], function() {
    Route::get('/',         function () { return redirect('/company/home'); });
    Route::get('login',     'Company\LoginController@showLoginForm')->name('company.login');
    Route::post('login',    'Company\LoginController@login');
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



Route::group(['prefix' => 'company'], function() {
    Route::get('/',         function () { return redirect('/company/home'); });//TODO:上からリダイレクトしてる
    // Route::get('/', 'Company\HomeController@index');
    Route::get('edit',    'Company\CompaniesController@edit');
    Route::post('edit',    'Company\CompaniesController@update');
    Route::get('register',     'Company\RegisterController@showRegistrationForm')->name('company.register');
    Route::post('register',    'Company\RegisterController@register');
});
