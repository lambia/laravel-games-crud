<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;

    protected $fillable = [
        "name",
        "description",
        "price",
        "release_year",
        "cover_image",
        "vote",
    ];
}
