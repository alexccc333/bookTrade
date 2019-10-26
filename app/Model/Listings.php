<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Listings extends Model
{
    protected $guarded = [];

    public function book()
    {
        return $this->belongsTo(Book::class);
    }
}
