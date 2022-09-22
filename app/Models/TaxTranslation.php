<?php

namespace App\Models;

class TaxTranslation extends Model
{

    protected $connection = 'mongodb';
    protected $collection = 'tax_translations';
    protected $guarded = [];

    public function tax(){
        return $this->belongsTo(Tax::class);
    }

   
}