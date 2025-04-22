<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class catalog extends Model
{
    protected $table = 'tb_katalog';

    protected $primaryKey = 'id_katalog';

    protected $fillable = ['nama_katalog', 'jenis', 'luas'];

    protected $guarded = ['id_katalog'];
}
