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
/*Route::resource('tours', 'TourController')->middleware('auth');*/
Route::resource('tours', 'TourController');

Route::view('/', 'welcome');

Route::get('/login', function(){
    return "login";
});

/* Tours */
/*Route::get('/tours', 'TourController@index')->name('tours.index');
Route::post('/tours', 'TourController@store')->name('tours.store');
Route::get('/tours/create', 'TourController@create')->name('tours.create');
Route::get('/tours/{id}', 'TourController@show')->name('tours.show');
Route::get('/tours/{id}/edit/', 'TourController@show')->name('tours.edit');
Route::put('/tours/{id}', 'TourController@update')->name('tours.update');
Route::delete('/tours/{id}', 'TourController@destroy')->name('tours.destroy');
*/


/*Route::middleware([])->group(function(){
    /* Prefixo da rota url - admin/ -> prefixo */ 
   /* Route::prefix('admin')->group(function(){
        
        /* nome da pasta que está o controller */ 
      /*  Route::namespace('Admin')->group(function(){

            Route::name('admin')->group(function(){

                Route::get('/', 'TesteController@teste')->name('teste');
                Route::get('/dashboard', 'TesteController@dashboad')->name('dashboard');
                Route::get('/financeiro', 'TesteController@teste')->name('financeiro');
                Route::get('/tours', 'TourController@teste')->name('tours');

            });
        });
        
    });
});*/
/*
Route::group([
    'middleware' => [],
    'prefix' => 'Admin',
    'namespace' => 'admin',
    'nome' => 'admin.'
], function(){

    Route::get('/', 'TesteController@teste')->name('teste');
    Route::get('/dashboard', 'TesteController@dashboad')->name('dashboard');
    Route::get('/financeiro', 'TesteController@teste')->name('financeiro');
    Route::get('/produtos', 'TesteController@teste')->name('products');

});
*/



/*Route::redirect('/', '/categorias/{flag?}');

Route::view('/view', 'welcome');

Route::get('/categorias/{flag?}', function ($flag='') {
    return "Produtos de categoria: $flag";
    
    Route::any('/any', function () {
        return "any";
    });
    Route::match(['post', 'put'], '/match', function () {
        return "match";
    });
});*/

