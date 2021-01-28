<?php

use App\Http\Controllers\AdminController;
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

// Auth::routes();
 
Route::get('/', function () {
     return view('login');
 });


 Route::get('/Dashboard','CommandeController@Dashboard');


 Route::get('/login','AdminController@login');
 Route::get('/deconecte','AdminController@deconecte');


//Route::resource('Clients','ClientController');
Route::get('Clients/create','ClientController@create');
Route::post('Clients/create/','ClientController@store');
Route::get('Clients/store/{id}','ClientController@store1');

//Route::resource('Produits','ProduitController');
Route::get('/produit/create', 'ProduitController@create');
Route::post('/produit/create/', 'ProduitController@store');
//Route::post('/produit/createrepete/','ProduitController@storerepete');

//Route::resource('Facture','FactureController');
Route::get('/facture/index/', 'FactureController@index');
Route::get('/facture/', 'FactureController@store');
//Route::get('/facturerepete/', 'FactureController@storerepete');
Route::get('/facture/show/{id}','FactureController@show');


//Route::resource('Commande','commandeController');
Route::get('/commande/index/', 'CommandeController@index');
Route::get('/commande','CommandeController@store');
//Route::get('/commanderepete','commandeController@storerepete');
Route::get('/commande/show/{id}','CommandeController@show');
Route::delete('/commande/delete/{id}', 'CommandeController@destroy');


//Route::resource('information','PrixController');
Route::get('/information/tchick', 'PrixController@tchick');
Route::get('/information', 'PrixController@store');
Route::get('/information/idex', 'PrixController@index');
Route::post('information/{id}','PrixController@update');
Route::get('information/{id}/edit','PrixController@edit');





//Route::resource('suivi','CommandeController');

Route::get('client/suivi/','CommandeController@suivi');


Route::get('suivimontantavance/{id}','CommandeController@updatemontantavance');
Route::get('suiviapportezlesmatières/{id}','CommandeController@updateapportezlesmatières');
Route::get('suiviréalisation/{id}','CommandeController@updateréalisation');
Route::get('suiviteinture/{id}','CommandeController@updateteinture');
Route::get('suivifin/{id}','CommandeController@updatefin');



