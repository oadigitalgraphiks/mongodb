<?php

namespace App\Models;

class CategoryTranslation extends Model
{

    protected $connection = 'mongodb';
    protected $collection = 'category_translations';
    
    protected $guarded = [];    
    public function category(){
        return $this->belongsTo(Category::class);
    }

}
