<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Perpustakaan extends Model
{
    protected $table = 'perpustakaans';
    protected $primaryKey = 'no';
    public $incrementing = true;
    protected $fillable = [
        'nama', 'alamat', 'no_telepon', 'kategori', 'latitude', 'longitude'
    ];
}
