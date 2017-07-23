<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Product;

class Size extends Model
{
     public function products(){
        return $this->hasMany(Product::class);
    }
    public function getRouteKeyName(){
      return 'size_name';
    }
}
