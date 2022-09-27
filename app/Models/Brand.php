<?php

namespace App\Models;

// use Jenssegers\Mongodb\Eloquent\Model;
// use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class Brand extends Model {

    protected $connection = 'mongodb';

    protected $collection = 'brands';

    protected $with = ['brand_translations'];

    protected $guarded = [];

    public function getTranslation($field = '', $lang = false){
        $lang = $lang == false ? App::getLocale() : $lang;
        $brand_translation = $this->brand_translations->where('lang', $lang)->first();
        return $brand_translation != null ? $brand_translation->$field : $this->$field;
    }

    public function brand_translations(){
      return $this->hasMany(BrandTranslation::class);
    }

}
