<?php

namespace App\Models;

class RoleTranslation extends Model
{
    protected $connection = 'mongodb';
    protected $collection = 'role_translations';
    protected $guarded = [];

    public function role(){
        return $this->belongsTo(Role::class);
    }

}