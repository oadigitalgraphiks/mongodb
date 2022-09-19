<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model;
// use Illuminate\Database\Eloquent\Model;
use App;
use App\Models\Attribute;

class AttributeType extends Model {
    
    protected $connection = 'mongodb';
    protected $collection = 'attribute_types';

    public function attributes() {
        return $this->hasMany(Attribute::class,'type_id');
    }
    
}