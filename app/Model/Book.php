<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $guarded = [];

    public function language()
    {

        return $this->hasOne(BookLanguage::class, 'id', 'book_language_id');
    }

    public function distributor()
    {

        return $this->hasOne(Distributor::class, 'id', 'distributor_id');
    }

    public function publisher()
    {
        return $this->hasOne(Distributor::class, 'id', 'publisher_id');
    }

    public function author()
    {
        return $this->belongsToMany(Author::class, 'book_authors');
    }

    public function listings()
    {
        return $this->hasOne(Listings::class);
    }

    public function genres()
    {
        return $this->belongsToMany(BookGenres::class,'genre_book');
    }
}

