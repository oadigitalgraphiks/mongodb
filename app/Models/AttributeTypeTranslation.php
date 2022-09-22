<?php

namespace App\Models;

class AttributeTypeTranslation extends Model
{

    protected $guarded =[];
    public function attribute_type(){
        return $this->belongsTo(AttributeType::class);
    }
    
}
