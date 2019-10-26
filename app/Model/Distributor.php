<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Distributor extends Model
{
    public function book()
    {
        return $this->belongsTo(BookLanguage::class);
    }
}
