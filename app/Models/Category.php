<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model;
// use Illuminate\Database\Eloquent\Model;
use App;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Category extends Model {
    
    protected $connection = 'mongodb';
    // protected $primaryKey = 'id';
    protected $collection = 'categories';
    


}
