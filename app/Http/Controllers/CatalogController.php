<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CatalogController extends Controller
{
    public function getCatalog(){
        $data_toko = [
            'nama_toko' => 'VRDE Studio',
            'alamat_toko' => 'bogor'
        ];
        return view('pages.catalog', $data_toko);
    }
    public function addCatalog(){
        return view('pages.addCatalog');
    }
}
