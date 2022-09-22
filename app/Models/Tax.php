<?php

namespace App\Models;

// use Jenssegers\Mongodb\Eloquent\Model;
// use Illuminate\Database\Eloquent\Model;
use App;

class Tax extends Model {
    
    protected $connection = 'mongodb';
    protected $collection = 'taxes';
    protected $guarded =[];

    public function getTranslation($field = '', $lang = false){
        $lang = $lang == false ? App::getLocale() : $lang;
        $translations = $this->translations->where('lang', $lang)->first();
        return $translations != null ? $translations->$field : $this->$field;
    }

    public function translations(){
      return $this->hasMany(TaxTranslation::class);
    }
        
}
