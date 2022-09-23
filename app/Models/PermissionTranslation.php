<?php

namespace App\Models;

class PermissionTranslation extends Model
{

    protected $connection = 'mongodb';
    protected $collection = 'permission_translations';
    protected $guarded = [];    

    public function permission(){
        return $this->belongsTo(Permission::class);
    }

}
