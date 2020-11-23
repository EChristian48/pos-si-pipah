<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Merek extends Model
{
    protected $primaryKey = 'id_merek';
    protected $fillable = [
        'merek'
];
}
