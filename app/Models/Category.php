<?php

namespace App\Models;
use App;

class Category extends Model {
    
    protected $connection = 'mongodb';
    protected $collection = 'categories';
    protected $with = ['translations'];
    protected $guarded =[];


    public function getTranslation($field = '', $lang = false){

        $lang = $lang == false ? App::getLocale() : $lang;
        $translations = $this->translations->where('lang', $lang)->first();
        return $translations != null ? $translations->$field : $this->$field;

    }

    public function translations(){
      return $this->hasMany(CategoryTranslation::class);
    }

    public function children(){
      return $this->hasMany(Category::class,'parent');
    }

    public function parent_category(){
      return $this->hasOne(Category::class,'parent');
    }

}