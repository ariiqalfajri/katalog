<?php

namespace App\Http\Controllers;

use Illuminate\Container\Attributes\DB;
use Illuminate\Http\Request;
use Kreait\Firebase\Factory;

class CatalogController extends Controller
{
    protected $database;
    protected $table = 'katalog';

    // setup firebase
    public function __construct()
    {
        $path = base_path('storage/firebase.json');

        $factory = (new Factory)
            ->withServiceAccount($path)
            ->withDatabaseUri('https://gardenkatalog-default-rtdb.asia-southeast1.firebasedatabase.app/');

        $this->database = $factory->createDatabase();
    }

    // setup /catalog
    public function index()
    {
        $katalog = $this->database
            ->getReference($this->table)
            ->getValue();

        $studio = [
            'nama' => 'GardenMaster',
            'alamat' => 'Bogor',
        ];

        $data_katalog = [];
        $id_counter = 1;
        if (is_array($katalog)) {
            foreach ($katalog as $key => $value) {
                if (is_array($value)) {
                    $data_katalog[] = (object) [
                        'id_row' => $id_counter++,
                        'id_katalog' => $key++,
                        'nama_katalog' => $value['nama_katalog'] ?? 'N/A',
                        'deskripsi_katalog' => $value['deskripsi_katalog'] ?? 'N/A',
                        'gambar_katalog' => $value['gambar_katalog'] ?? null,
                        'created_at' => now()->toDateTimeString(),
                        // 'created_at' => $value['created_at'] ?? 'N/A',
                    ];
                }
            }
        }

        return view('pages.catalog.show', [
            'data_studio' => $studio,
            'data_katalog' => $data_katalog,
        ]);
    }


    public function createCatalog()
    {
        return view('pages.catalog.add');
    }

    public function storeCatalog(Request $request)
    {
        $validated = $request->validate([
            'catalog_name' => 'required|string',
            'catalog_description' => 'required|string',
            'catalog_image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $imagePath = null;
        if ($request->hasFile('catalog_image')) {
            $image = $request->file('catalog_image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $path = $image->storeAs('catalog_images', $imageName, 'public'); // simpan ke storage/app/public/catalog_images
            $imagePath = '/storage/' . $path; // buat path ke gambar
        }

        $postData = [
            'nama_katalog' => $request->input('catalog_name'),
            'deskripsi_katalog' => $request->input('catalog_description', 'belum ada deskripsinya'),
            'gambar_katalog' => $imagePath,
        ];

        // find last it
        $katalog = $this->database->getReference($this->table)->getValue();
        $last_id = 0;
        if ($katalog) {
            $last_id = max(array_map('intval', array_keys($katalog))); // cari angka paling besar
        }
        $new_id = $last_id + 1;

        // use new id
        $this->database
            ->getReference($this->table . '/' . $new_id)
            ->set($postData);

        return redirect('/catalog')->with('pesan', 'berhasil menambahkan data');
    }
    public function show($id)
    {
        $detail_catalog = $this->database
            ->getReference($this->table . '/' . $id)
            ->getValue();

        if (!$detail_catalog) {
            dd("Data tidak ditemukan di Firebase", $id);
        }

        $detail_catalog = (object) array_merge($detail_catalog, [
            'id_katalog' => $id,
            'created_at' => now()->toDateTimeString(), // opsional
        ]);

        return view('pages.catalog.detail', ['detail_catalog' => (object) $detail_catalog]);
    }
    public function edit($id)
    {
        $catalog = $this->database
            ->getReference($this->table . '/' . $id)
            ->getValue();

        if (!$catalog) {
            return redirect('/catalog')->with('error', 'Data not found.');
        }

        $catalog = (object) array_merge($catalog, [
            'id_katalog' => $id,
        ]);

        return view('pages.catalog.edit', compact('catalog'));
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_katalog' => 'required|string|max:255',
            'deskripsi_katalog' => 'required|string|max:1000',
            'gambar_katalog' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $catalog = $this->database
            ->getReference($this->table . '/' . $id)
            ->getValue();

        if (!$catalog) {
            return redirect('/catalog')->with('error', 'Data not found.');
        }

        $updateData = [
            'nama_katalog' => $request->input('nama_katalog'),
            'deskripsi_katalog' => $request->input('deskripsi_katalog'),
        ];

        if ($request->hasFile('catalog_image')) {
            $file = $request->file('catalog_image');
            $filename = time() . '_' . $file->getClientOriginalName();
            $filepath = 'uploads/' . $filename;
            $file->move(public_path('uploads'), $filename);
    
            // Update juga field gambar_katalog
            $updateData['gambar_katalog'] = $filepath;
        }

        $this->database
            ->getReference($this->table . '/' . $id)
            ->update($updateData);

        return redirect('/catalog')->with('pesan', 'Catalog has been updated');
    }


    public function destroy($id)
    {
        $catalog = $this->database
            ->getReference($this->table . '/' . $id)
            ->getValue();

        if (!$catalog) {
            return redirect('/catalog')->with('error', 'Data not found.');
        }

        $this->database
            ->getReference($this->table . '/' . $id)
            ->remove();

        return redirect('/catalog')->with('pesan', 'Catalog has been deleted');
    }
}
