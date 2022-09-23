<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model;
// use Illuminate\Database\Eloquent\Model;
use App;

class Permission extends Model {

    protected $connection = 'mongodb';
    protected $collection = 'permissions';
    protected $guarded = [];
    protected $with = ['translations'];

    
    public function getTranslation($field = '', $lang = false){
        $lang = $lang == false ? App::getLocale() : $lang;
        $translations = $this->translations->where('lang', $lang)->first();
        return $translations != null ? $translations->$field : $this->$field;
    }

    public function translations(){
      return $this->hasMany(PermissionTranslation::class);
    }


}