<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Catalog extends Model
{
    protected $table = 'catalogs';

    protected $primaryKey = 'id_katalog';

    protected $fillable = ['nama_katalog', 'deskripsi_katalog'];

    protected $guarded = ['id_katalog'];
}
