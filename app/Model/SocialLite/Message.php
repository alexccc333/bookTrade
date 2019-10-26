<?php

namespace App\Model\SocialLite;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    public $table='messages';
   protected $guarded =[];

   public function user()
   {
       return $this->hasOne(User::class);
   }
}
