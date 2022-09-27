<?php

namespace App\Models;

// use Jenssegers\Mongodb\Eloquent\Model;
// use Illuminate\Database\Eloquent\Model;
use App;

class Review extends Model {
    
    protected $connection = 'mongodb';
    protected $collection = 'reviews';
    protected $guarded =[];

    public function product(){
      return $this->belongsTo(Product::class,'product_id');
    }

    public function user(){
      return $this->belongsTo(User::class);
    }
 
    
}