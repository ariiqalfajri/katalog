<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            'id_produk' => 1,
            'id_katalog' => 1,
            'nama_produk'=>'halaman depan rumah',
            'deskripsi_produk'=>'lihat pemandangan indah sejak anda membuka pintu rumah',
            'gambar_produk'=>'https://3.bp.blogspot.com/-kixKarhQNhI/VfZ8ZnRY4wI/AAAAAAAADnM/4NrOroKr0SU/s1600/10.jpg',
            'harga'=>7000000,
            'status'=>'available',
            'spek'=> json_encode([
                'panjang' => 600,
                'lebar' => 400,
                'tinggi' => 800,
            ]),
            'client'=>'PIK',
            'lokasi'=>'PIK 2',
            'completion_date'=>'2025-12-31',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
