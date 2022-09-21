<?php

namespace App\Models;


class Customer extends Model
{
    protected $fillable = [
      'user_id',
    ];

    public function user(){
    	return $this->belongsTo(User::class);
    }
}
