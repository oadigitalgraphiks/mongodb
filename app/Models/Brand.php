<?php

namespace App\Models;

// use Jenssegers\Mongodb\Eloquent\Model;
// use Illuminate\Database\Eloquent\Model;
use App;

class Brand extends Model {

    protected $connection = 'mongodb';
    protected $collection = 'brands';
    protected $with = ['translations'];
    protected $guarded = [];


    public function getTranslation($field = '', $lang = false){
        $lang = $lang == false ? App::getLocale() : $lang;
        $translation = $this->translations->where('lang', $lang)->first();
        return $translation != null ? $translation->$field : $this->$field;
    }

    public function translations(){
      return $this->hasMany(BrandTranslation::class,'brand_id');
    }


}
