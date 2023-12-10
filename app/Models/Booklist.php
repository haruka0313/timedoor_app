<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Booklist extends Model
{

    protected $table = 'booklist';
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'book_name',
        'category_name',
        'author_name',
        'average_rating',
        'voter'
    ];
}
