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
    return view('index');
});
Route::get('/zoeken', function () {
    return view('zoeken');
});


Route::get('/account', 'HomeController@index')->name('account');
Route::get('/werk', 'OrganisatieController@werkEnDagBesteding');
Route::get('/inkomen', 'OrganisatieController@inkomen');
Route::get('/onderwijs', 'OrganisatieController@onderwijs');
Route::get('/gezondheid', 'OrganisatieController@gezondheid');
Route::get('/sociaalfunctioneren', 'OrganisatieController@sociaalfunctioneren');

Route::get('/organisatie', 'PageController@index');

Route::get('/zoeken/{organisatie_id}',[
    'as' => 'organisatie.zoeken.show',
    'uses' => 'OrganisatieController@show']);

Route::resource('/gebruiker', 'GebruikerController');
Route::post('gebruiker/add', 'Gebruikercontroller@create');
Route::delete('/gebruiker/{id}/delete', 'Gebruikercontroller@destroy');


Route::resource('/organisatie', 'PageController');
Route::post('/organisatie/addOrganisatie', 'PageController@create');
Route::delete('/organisatie/{id}/delete', 'PageController@destroy');

Auth::routes();
