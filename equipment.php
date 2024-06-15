<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Equipment extends Model
{

    protected $table = 'equipment';


    protected $fillable = [
        'Jenis_Sport', 'Nama', 'Brand', 'Deskripsi', 'poster'
    ];
}
