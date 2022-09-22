<?php

namespace App\Models;

class UnitTranslation extends Model
{

    protected $connection = 'mongodb';
    protected $collection = 'unit_translations';
    protected $guarded = [];

    public function unit(){

        return $this->belongsTo(Unit::class);
    }


}
