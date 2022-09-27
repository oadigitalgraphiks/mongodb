<?php

namespace App\Models;


class BrandTranslation extends Model
{
    protected $guarded =[];

    public function brand(){
        return $this->belongsTo(Brand::class,'brand_id');
    }
}
