<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class BookGenresParent extends Model
{
    protected $table = 'genres_parent';
    protected $guarded = [];

    public function bookGenre(){
        return $this->belongsTo(BookGenresParent::class);
    }
}
