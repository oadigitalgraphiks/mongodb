<?php

namespace App\Models;

// use Jenssegers\Mongodb\Eloquent\Model;
// use Illuminate\Database\Eloquent\Model;

use App;
use App\Models\Attribute;

class AttributeType extends Model {
    
    protected $connection = 'mongodb';
    protected $collection = 'attribute_types';
    protected $with = ['translations'];
    protected $guarded = [];

    public function getTranslation($field = '', $lang = false){
        $lang = $lang == false ? App::getLocale() : $lang;
        $translations = $this->translations->where('lang', $lang)->first();
        return $translations != null ? $translations->$field : $this->$field;
    }

    public function translations(){
      return $this->hasMany(AttributeTypeTranslation::class,'parent_id');
    }
    
    public function attributes() {
        return $this->hasMany(Attribute::class,'type_id');
    }
    
}