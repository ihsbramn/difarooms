<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Forum_Img extends Model
{
    use HasFactory;

    protected $fillable = [
        'fr_id',
        'name', 
        'path'
    ];

}
