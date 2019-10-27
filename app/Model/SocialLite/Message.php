<?php

namespace App\Model\SocialLite;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
   protected $guarded =[];

    public function user(){
        return $this->belongsToMany(Message::class,'message_user','message_id','id');
    }
}
