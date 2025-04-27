<?php

use App\Http\Controllers\CatalogController;
use App\Http\Controllers\ProdukController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FirebaseConnectionController;

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

Route::get('/catalog/{id}', [CatalogController::class,'show']); //get/read

Route::get('/catalog/{id}/edit', [CatalogController::class,'edit']);
Route::put('/catalog/{id}', [CatalogController::class,'update']);

Route::delete('/catalog/{id}', [CatalogController::class, 'destroy']);

Route::get('/services', function(){
    return view('pages.services');
});

Route::get('/firebase-test', [FirebaseConnectionController::class, 'index']);
