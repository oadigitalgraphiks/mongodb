<?php

namespace App\Models;

// use Jenssegers\Mongodb\Eloquent\Model;
// use Illuminate\Database\Eloquent\Model;

use App;

class Product extends Model {

    protected $connection = 'mongodb';
    protected $collection = 'products';
    protected $with = ['translations'];
    protected $guarded =[];

     //Add extra attribute
     protected $attributes = ['picture_data','edit'];

     //Make it available in the json response
     protected $appends = ['picture_data','edit'];
   


    public function getTranslation($field = '', $lang = false){
        $lang = $lang == false ? App::getLocale() : $lang;
        $translations = $this->translations->where('lang', $lang)->first();
        return $translations != null ? $translations->$field : $this->$field;
    }

    public function translations(){
      return $this->hasMany(ProductTranslation::class);
    }

    public function combinations()
    {
        return $this->hasMany(ProductCombination::class,'product_id');
    }

    public function category()
    {
        return $this->belongsTo(Category::class,'category_id');
    }

    public function brand()
    {
        return $this->belongsTo(Brand::class,'brand_id');
    }

    //implement the attribute
    public function getPictureDataAttribute()
    {

         return uploaded_asset($this->thumbnail);
    }

    public function getEditAttribute()
    {

         return route('admin.products.edit',$this->id);
    }

}