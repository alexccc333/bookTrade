<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class BookLanguage extends Model
{
    public function book()
    {
        return $this->belongsTo(Book::class);
    }
}
