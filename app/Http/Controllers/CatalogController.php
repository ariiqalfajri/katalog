<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Log;


use App\Models\Catalog;
use Illuminate\Http\Request;

class CatalogController extends Controller
{
    public function index(){
        $studio = [
            'nama' => 'VRDE',
            'alamat' => 'Bogor',
        ];
        $katalog = Catalog::get();
        return view('pages.catalog.show', [
            'data_studio' => $studio,
            'data_katalog' => $katalog,
        ]);
    }
    public function createCatalog(){
        return view('pages.catalog.add');
    }

    public function storeCatalog(Request $request){
        Log::info('Request data:', $request->all());

        $request->validate([
            'catalog_name' => 'required|string',
            'catalog_description' => 'required|string',
        ]);
        
        catalog::create([
            'nama_katalog' => $request ->input('catalog_name'),
            'deskripsi_katalog' => $request ->input('catalog_description', 'belum ada deskripsinya'),
        ]);
        
        return redirect('/catalog')->with('pesan','berhasil menambahkan data');
    }
}
