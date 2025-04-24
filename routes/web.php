<?php

use App\Http\Controllers\CatalogController;
use App\Http\Controllers\ProdukController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/profile', function () {
    return view('pages.profile');
});

Route::get('/contact', function(){
    return view('pages.contact');
});

Route::get('/contact/{id}', function($id){
    return view('pages.contactdetail', [  
        'nomer'=>$id
    ]);
});

Route::get('/catalog', function(){
    return view('pages.catalog.show');
});

Route::get('/catalog', [CatalogController::class, 'index']);

Route::get('/catalog/create', [CatalogController::class, 'createCatalog']);
Route::post('catalog', [CatalogController::class, 'storeCatalog']);

Route::get('/services', function(){
    return view('pages.services');
});
