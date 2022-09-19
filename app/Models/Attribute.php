<?php

namespace App\Models;
use Jenssegers\Mongodb\Eloquent\Model;

class Attribute extends Model {
    
    protected $connection = 'mongodb';
    protected $collection = 'attributes';
    

    public function type() {
        return $this->belongsTo(AttributeType::class);
    }

}