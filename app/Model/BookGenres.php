<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class BookGenres extends Model
{
    protected $guarded = [];
    protected $table = 'books_genre';

    public function book()
    {
        return $this->belongsToMany(Book::class,'genre_book');
    }

    public function genreParent(){
        return $this->hasOne(BookGenresParent::class,'id','parent_id');
    }
}
