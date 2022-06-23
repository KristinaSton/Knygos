<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{   protected $table = 'books';
    protected $fillable = ['id', 'name', 'ISBN', 'summary','image', 'pageCount', 'category','isReserved'];
    public $timestamps = false;



}
