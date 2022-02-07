<?php

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

Auth::routes(['register' => false]);

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', 'IndexController@index')->name('Index');
Route::get('/about', 'AboutController@index')->name('About');
Route::get('/reservation', 'ReservationController@index')->name('Reservation');
Route::get('/menu1', 'Menu1Controller@index')->name('Menu1');
Route::get('/menu2', 'Menu2Controlle@index')->name('Menu2');

Route::get('/blogright', 'BlogRightController@index')->name('Blog Right');
Route::get('/blogleft', 'BlogLeftController@index')->name('Blog Left');
Route::get('/blogfull', 'BlogFullControlle@index')->name('Blog Full');
Route::get('/blogsingle', 'BlogSinglControlle@index')->name('Blog Single');

Route::get('/short', 'ShortCodeController@index')->name('Short Code');
Route::get('/gallery', 'GalleryController@index')->name('Gallery');
Route::get('/galleryoverlay', 'GalleryOverlayController@index')->name('Gallery Overlay');
Route::get('/404', 'E404Controller@index')->name('404');


Route::get('/recipe-2', 'Recipe2Controller@index')->name('Recipe 2');
Route::get('/recipe-3', 'Recipe3Controlle@index')->name('Recipe 3');
Route::get('/recipe-4', 'Recipe4Controlle@index')->name('Recipe 4');
Route::get('/recipe-single', 'RecipeSingleControlle@index')->name('Recipe Single');

Route::get('/contact', 'ContactController@index')->name('Contact');

Route::get('/dashboard','DashboardController@index')->name ('Dashboard');
Route::get('/inbox','InboxController@index')->name ('Inbox');
Route::get('/email','EmailController@index')->name ('Email');
Route::get('/ecompose','EcomposeController@index')->name ('Compose');
Route::get('/start','StarterController@index')->name ('Start');

Route::get('/users','UserController@index')->name('users');
Route::post('/user-store','UserController@store');
Route::post('/user-update','UserController@update');
Route::post('/user-update-state','UserController@updateState');
