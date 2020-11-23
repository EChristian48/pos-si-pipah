<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    protected $primaryKey = 'id_transaksi';
    protected $fillable = [
        'id_barang', 'id_user', 'jumlah_beli', 'total_harga', 'tanggal_beli'
];
}
