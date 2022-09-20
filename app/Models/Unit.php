<?php

namespace App\Models;

// use Jenssegers\Mongodb\Eloquent\Model;
// use Illuminate\Database\Eloquent\Model;
use App;


class Unit extends Model {
    
    protected $connection = 'mongodb';
    // protected $primaryKey = 'id';
    protected $collection = 'units';
    


}
