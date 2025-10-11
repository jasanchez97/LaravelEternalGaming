<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;

    protected $table = 'eternalgaming';

    protected $fillable = [
        'name',
        'subtitle',
        'developer',
        'releaseDate',
        'category',
        'price',
        'stock',
    ];
}