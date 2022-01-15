<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\NewsController;
use \App\Http\Controllers\SearchController;

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

Route::group([
    'prefix' => '/',
    'as' => ''
], function(){
    Route::get('/',  [ NewsController::class, 'index'])
        ->name('home');
    Route::get('/all', [ NewsController::class, 'allNews'])
        ->name('all');
    Route::get('/show/{id}', [ NewsController::class, 'showNews'])
        ->name('show::id');
    Route::get('/add/id', [NewsController::class, 'addToFavorite'])
        ->name('add::news');
    Route::get( '/search/search', [NewsController::class, 'search'])
        ->name('search::search');

});

//Route::get('/show/{id}', [ NewsController::class, 'showNews'])
//    ->name('show::id');

Route::get('/search/autocomplete-search', [SearchController::class, 'index'])
    ->name('autocomplete.search.index');

Route::get('/search/autocomplete-search-query', [SearchController::class, 'query'])
    ->name('autocomplete.search.query');


//Route::get('/add/id', [NewsController::class, 'addToFavorite'])
//    ->name('add::news');

//Route::get('/', [NewsController::class, 'index']);

//Route::get('/all', [NewsController::class, 'allNews']);

//Route::group([
//    'prefix' => '/all',
//    'as' => 'admin::'
    //'middleware' => ['auth'],
//], function (){
//    Route::get('/',  [ NewsController::class, 'allNews'])
//        ->name('all' );
//});

//Route::get('/hi2', function () {
//    return view('welcome2');
//});
