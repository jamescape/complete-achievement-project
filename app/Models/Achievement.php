<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use User;

class Achievement extends Model
{
    use HasFactory;

    protected $fillable = [
        'achievement_name',
        'achievement_description',
        'image_url',
    ];
}
