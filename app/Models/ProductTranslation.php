<?php

namespace App\Models;

class ProductTranslation extends Model
{

    protected $connection = 'mongodb';
    protected $collection = 'product_translations';
    protected $guarded = [];

    public function product(){

        return $this->belongsTo(Product::class);
    }


    
}
