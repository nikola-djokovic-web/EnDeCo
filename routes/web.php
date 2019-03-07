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

// Route::get('/welcome', function () {
//     return view('welcome');
// });


Route::get('/', 'IndexController@index')->name('homepage');

Route::post('/', 'ContactsController@contact')->name('contact');

// Route::any('/login', 'UsersController@login')->name('login');

Route::get('/login', 'SessionsController@loginView')->name('login-view');

Route::post('/login', 'SessionsController@login')->name('login-post');

Route::get('/tables', 'SessionsController@tables')->name('datatables');

Route::get('/logout', 'SessionsController@logout')->name('users-logout');

Route::any('/register', 'RegistrationController@register')->name('users-register');

Route::get('/users-welcome', 'UsersController@show')->name('users-welcome');



Route::get('locale/{locale}', function ($locale) {
    Session::put('locale', $locale);
    return redirect()->back();
});
