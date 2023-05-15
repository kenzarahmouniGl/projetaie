<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\FournisseurController;
use App\Http\Controllers\ClientsController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\CollectionController;
use App\Http\Controllers\BouclesController;
use App\Http\Controllers\ColierController;
use App\Http\Controllers\BaguesController;
use App\Http\Controllers\ParureController;
use App\Http\Controllers\diademeController;
use App\Http\Controllers\BrocheController;
use App\Http\Controllers\BraceletController;
use App\Http\Controllers\ProfilProductsController;
use App\Http\Controllers\CollectionAccueilController;
use App\Http\Controllers\BoutiqueController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\PanierController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

 

 

//Route::get('/welcome', function () {
  //  return view('welcome');
//});

//Route::get('/',function(){return view('pages\home');});
//Route::get('pages.home',[AcceuilConroller ::class,'home']);

Route::get('/client',function(){return view('pages\client');});
Route::get('pages.client',[ClientsController::class,'addToCart']);



Route::get('/',function(){return view('pages\home');});
Route::get('pages.home',[AcceuilConroller ::class,'home']);




//Route::get('/dashboard', function () {
    //return view('pages.client');
//})->middleware(['auth', 'verified']);



//Route::get('/produit', function () {
    //return view('fournisseur.index');
//})->middleware(['auth', 'verified', 'UserRole:fournisseur']);



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
// Route::middleware(['auth:sanctum', 'verified'])->get('/admin', function () {
//     return view('admin.monadmin');
// })->name('admin');

//Route::namespace('admin')->prefix('admin')->middleware(['auth:sanctum', 'verified', 'UserRole:admin'])->group(function () {
 // Route::get('/mon',function(){return view('admin.monadmin');
 
//});
//});
Route::middleware(['auth:sanctum', 'verified'])->get('/client', function () {
    return view('pages.client');
})->name('client');

//////////////////
Route::resource('users', UserController::class)->middleware(['auth:sanctum', 'verified', 'UserRole:admin'])
        ->missing(function (Request $request) {
});
 Route::resource("/users", UserController::class)->middleware(['auth:sanctum', 'verified', 'UserRole:admin']);
///////////////
Route::resource('produit', ProductsController ::class)->middleware(['auth:sanctum', 'verified', 'UserRole:fournisseur'])
->missing(function (Request $request) {
});
Route::resource("/produit", ProductsController ::class)->middleware(['auth:sanctum', 'verified', 'UserRole:fournisseur']);
/////////////////
Route::resource('client', ClientsController ::class)->middleware(['auth:sanctum', 'verified'])
->missing(function (Request $request) {
});
Route::resource("/client", ClientsController ::class)->middleware(['auth:sanctum', 'verified']);
/////////////////
Route::resource('dashboard', ClientsController ::class)->middleware(['auth:sanctum', 'verified'])
->missing(function (Request $request) {
});
Route::resource("/dashboard", ClientsController ::class)->middleware(['auth:sanctum', 'verified']);
////////////////////////
Route::resource('colier', ColierController ::class)->middleware(['auth:sanctum', 'verified'])
->missing(function (Request $request) {
});
Route::resource("/colier", ColierController ::class)->middleware(['auth:sanctum', 'verified']);
/////////////////////
Route::resource('diadèmes', diademeController ::class)->middleware(['auth:sanctum', 'verified'])
->missing(function (Request $request) {
});
Route::resource("/diadèmes", diademeController ::class)->middleware(['auth:sanctum', 'verified']);
/////////////////////
Route::resource('broche', BrocheController ::class)->middleware(['auth:sanctum', 'verified'])
->missing(function (Request $request) {
});
Route::resource("/broche", BrocheController ::class)->middleware(['auth:sanctum', 'verified']);
/////////////////////
Route::resource('boucle', BouclesController ::class)->middleware(['auth:sanctum', 'verified'])
->missing(function (Request $request) {
});
Route::resource("/boucle", BouclesController ::class)->middleware(['auth:sanctum', 'verified']);
//////////////////
Route::resource('parure', ParureController ::class)->middleware(['auth:sanctum', 'verified'])
->missing(function (Request $request) {
});
Route::resource("/parure", ParureController ::class)->middleware(['auth:sanctum', 'verified']);
///////////////////
Route::resource('bracelet', BraceletController ::class)->middleware(['auth:sanctum', 'verified'])
->missing(function (Request $request) {
});
Route::resource("/bracelet", BraceletController ::class)->middleware(['auth:sanctum', 'verified']);
////////////////////
Route::resource('bague',BaguesController ::class)->middleware(['auth:sanctum', 'verified'])
->missing(function (Request $request) {
});
Route::resource("/bague",BaguesController ::class)->middleware(['auth:sanctum', 'verified']);
////////////////
Route::resource('profil',ProfilProductsController ::class)->middleware(['auth:sanctum', 'verified'])
->missing(function (Request $request) {
});
Route::resource("/profil",ProfilProductsController ::class)->middleware(['auth:sanctum', 'verified']);

//////////////
Route::resource('col',CollectionAccueilController ::class)->middleware(['auth:sanctum', 'verified'])
->missing(function (Request $request) {
});
Route::resource("/col",CollectionAccueilController ::class)->middleware(['auth:sanctum', 'verified']);



//Route::get('/search', 'SearchController@search')->name('search');
Route::get('/search',[SearchController::class,'search'])->name('search');


Route::resource('/collection',CollectionAccueilController ::class)->middleware(['auth:sanctum', 'verified','UserRole:fournisseur'])
->missing(function (Request $request) {
});
Route::resource("/collection",CollectionAccueilController ::class)->middleware(['auth:sanctum', 'verified','UserRole:fournisseur']);


Route::resource('/boutique',BoutiqueController ::class)->middleware(['auth:sanctum', 'verified','UserRole:fournisseur'])
->missing(function (Request $request) {
});
Route::resource("/boutique",BoutiqueController ::class)->middleware(['auth:sanctum', 'verified','UserRole:fournisseur']);
//Route::get('/contact-admin', 'ProductsController@contactAdmin')->name('contact.admin');

//Route::get('/contact-admin',function(){return view('fournisseur\contact');});
//Route::get('fournisseur.contact',[ProductsController ::class,'contactAdmin'])->name('contact.admin');
//Route::post('/send-message', 'FournisseurController@sendMessage')->name('send.message');

//Route::post('/contact-admin',function(){return view('fournisseur\contact');});
//Route::post('fournisseur.contact',[ProductsController ::class,'sendMessage'])->name('send.message');

//Route::get('/panier', 'PanierController@index')->name('panier.index');
//Route::get('/panier',function(){return view('pages\panier');});
//Route::get('pages.panier',[ClientController ::class,'panier'])->name('panier');


//Route::get('/panier', [ClientController::class, 'show_cart'])->name('panier');




Route::get('/panier',function(){return view('pages\panier');});
Route::get('pages.panier',[PanierController::class,'panier'])->name('panier.index');

//Route::get('/ajouter_au_panier/{name}',function(){return view('pages\panier');});
//Route::get('pages.panier',[PanierController::class,'ajouter_au_panier']);

Route::post('/panier', 'PanierController@store')->name('panier.store');


Route::post('/panier',function(){return view('pages\panier');});
Route::post('pages.panier',[PanierController::class,'store'])->name('panier.store');



//Route::get('/collections/{id}',function(){return view('collection\show');});
//Route::get('/collections/{id}',[CollectionController::class,'showByCollection'])->name('collections.showByCollection');
//Route::get('/collections/{collectionId}', [CollectionAccueilController::class, 'showByCollection'])->name('collections.showByCollection');



//Route::get('/collections', [CollectionController::class, 'index'])->name('collections.index');
//Route::get('/collections/{id}', [CollectionController::class, 'show'])->name('collections.show');

//Route::get('collections/{collection_id}/products', 'ProductController@showProductsByCollection')->name('products.byCollection');

//Route::get('/collection/{collection_id}/products',function(){return view('pages\collection');});
//Route::get('pages.collection',[CollectionAccueilController::class,'index'])->name('products.byCollection');
