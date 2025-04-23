<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';

    protected $primaryKey = 'id_produk';

    protected $fillable = [
        'id_catalog',
        'nama_produk',
        'deskripsi_produk',
        'gambar_produk',
        'harga',
        'status',
        'spek',
        'client',
        'lokasi',
        'completion_date',
    ];

    protected $casts = [
        'spek' => 'array', // Spek otomatis di-cast ke array saat diakses
        'completion_date' => 'date', // Format otomatis sebagai date
    ];

    public function catalog()
    {
        return $this->belongsTo(Catalog::class, 'id_catalog', 'id'); // Relasi one-to-many ke tabel katalog
    }
}