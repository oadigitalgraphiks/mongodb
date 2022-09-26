<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model;
// use Illuminate\Database\Eloquent\Model;
use App;


class ProductTax extends Model {

    protected $connection = 'mongodb';
    protected $collection = 'product_taxes';
    protected $guarded =[];



   
}
