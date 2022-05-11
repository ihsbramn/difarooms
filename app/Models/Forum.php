<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Forum extends Model
{
    // protected $guard = ['id'];

    protected $fillable = [
        'fr_user_id',
        'fr_author',
        'fr_title',
        'fr_filename',
        'fr_body',
    ];

    use HasFactory;
}
