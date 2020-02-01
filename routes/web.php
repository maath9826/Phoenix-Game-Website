<?php

use App\products;
use App\Story;
use App\User;
use App\News;
use App\Album;
use App\Info;
use App\Email;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;


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

// -------main--------
Route::view('/', 'index',['story'=> Story::first(),'products'=> Products::take(6)->latest()->get(),'news'=>News::take(6)->latest()->get()]);

// -------info--------
Route::view('/info', 'info', ['infos'=>Info::latest()->paginate(9),'news'=>News::take(6)->latest()->get()]);

// -------news--------
Route::view('/news', 'news', ['news'=>News::latest()->paginate(6)]);
Route::get('/news/{damn}', 'NewsController@showSingleNews');

// -------join--------
Route::view('/join', 'join',['news'=>News::take(6)->latest()->get()]);

// -------shop--------
Route::view('/shop', 'shop', ['products'=>Products::latest()->paginate(9),'news'=>News::take(6)->latest()->get()]);

// -------info--------
Route::view('/albums', 'albums', ['albums'=>Album::latest()->paginate(15),'news'=>News::take(6)->latest()->get()]);



// -------email--------
Route::post('/sendEmail', 'sendEmailController@sendEmail');



// -------dashboard--------

Route::prefix('/l2admin')->group(function(){

    Auth::routes();

    Route::redirect('/', '/l2admin/admins',302);

    Route::middleware(['auth'])->group(function () {

        // <---------main--------->

        Route::view('/products', 'products', ['products'=>Products::latest()->paginate(10)]);
        Route::view('/news', 'news.news', ['news'=>News::latest()->paginate(10)]);
        Route::view('/admins', 'admins.admins', ['admins'=>User::paginate(10)]);
        Route::view('/albums', 'albums.albums', ['albums'=>Album::latest()->paginate(10)]);
        Route::view('/infos', 'infos.infos', ['infos'=>Info::latest()->paginate(10)]);
        Route::view('/settings', 'settings.settings', [
            'email'=>Email::first(),
            ]);

        // <---------products--------->

        Route::post('products/create',  'ProductsController@store');
        Route::get('products/create',  'ProductsController@create');
        Route::get('products/delete/{product}',  'ProductsController@destroy');
        Route::get('products/{product}/edit',  'ProductsController@edit');
        Route::put('products/{product}',  'ProductsController@update');

        // <---------story--------->

        Route::get('story/edit',  'StoryController@edit');
        Route::put('story/update',  'StoryController@update');

        // <---------admins--------->

        Route::post('admins/create',  'AdminController@store');
        Route::get('admins/create',  'AdminController@create');
        Route::get('admins/delete/{id}',  'AdminController@destroy');

        // <---------news--------->

        Route::post('news/create',  'NewsController@store');
        Route::get('news/create',  'NewsController@create');
        Route::get('news/delete/{news}',  'NewsController@destroy');
        Route::get('news/{news}/edit',  'NewsController@edit');
        Route::put('news/{news}',  'NewsController@update');

        // <---------albums--------->

        Route::post('albums/create',  'AlbumController@store');
        Route::get('albums/create',  'AlbumController@create');
        Route::get('albums/delete/{news}',  'AlbumController@destroy');

        // <---------infos--------->

        Route::post('infos/create',  'InfoController@store');
        Route::get('infos/create',  'InfoController@create');
        Route::get('infos/delete/{infos}',  'InfoController@destroy');
        Route::get('infos/{infos}/edit',  'InfoController@edit');
        Route::put('infos/{infos}',  'InfoController@update');

        // <---------join--------->

        // Route::post('infos/create',  'InfoController@store');
        // Route::get('infos/create',  'InfoController@create');
        // Route::get('infos/delete/{news}',  'InfoController@destroy');
        // Route::get('infos/{news}/edit',  'InfoController@edit');
        // Route::put('infos/{news}',  'InfoController@update');

        // <---------settings--------->
        Route::prefix('/settings')->group(function(){

            Route::get('/email/{email}/edit',  'EmailController@edit');
            Route::put('/email/{email}',  'EmailController@update');
        });
    });
});



