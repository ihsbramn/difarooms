<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Favourites extends Model
{
    protected $fillable = [
        'fv_user_id',
        'fv_hotel_id',
        'fv_hotel_name',
        'fv_count',
    ];
    use HasFactory;
}
