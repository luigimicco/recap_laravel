<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Book extends Model
{
    use HasFactory;
    use SoftDeletes;

    // da definire in un secondo momento, quando nella funzione store() usiamo fill()
    protected $fillable = ['ISBN', 'title', 'author', 'pages', 'price', 'thumb', 'year', 'soldout'];
}
