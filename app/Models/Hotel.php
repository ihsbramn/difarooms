<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    // protected $table = 'hotels';

    

    protected $fillable = [
        'ht_name',
        'ht_address',
        'ht_description',
        'ht_filename',
        'ht_fascility',
        'ht_accesible',
        'ht_accesible_detail',
        'ht_embedmaps',
        'ht_latitude',
        'ht_longitude',
    ];

    use HasFactory;
    
    protected $guard = ['id'];
}
