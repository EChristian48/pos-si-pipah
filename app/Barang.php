<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    protected $primaryKey = 'id_barang';
    protected $fillable = [
         'nama_barang', 'id_merek', 'id_distributor', 'tanggal_masuk', 'harga_barang', 'stok_barang', 'keterangan'
    ];
}
