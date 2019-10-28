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

    public function message_user_up(){
        return $this->hasOne(User::class,'id','send_user_id');
    }

    public function send_user(){
        return $this->hasOne(User::class,'id','user_id');
    }
}
