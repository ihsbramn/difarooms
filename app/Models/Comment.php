<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
        'cm_user_id',
        'cm_forum_id',
        'cm_author',
        'cm_body',
    ];

    use HasFactory;
}
