<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description', 'is_available'];

    protected $casts = ['is_available' => 'boolean'];

    public static function available()
    {
        return self::where('is_available', true);
    }
}


