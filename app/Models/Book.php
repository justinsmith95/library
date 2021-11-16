<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $fillable = ['title'];

    //Pivot Table Function

    // public function checkout()
    // {
    //     return $this->hasManyThrough(
    //         '\App\Models\User',
    //         '\App\Models\Checkouts',
    //         'book_id',
    //         'id',
    //         'id',
    //         'cardholder_id'
    //     );
    // }
}
