<?php

namespace App\Models;

class ColorTranslation extends Model
{

    protected $connection = 'mongodb';
    protected $collection = 'color_translations';
    protected $guarded = [];    

    public function color(){
        return $this->belongsTo(Color::class);
    }

}
