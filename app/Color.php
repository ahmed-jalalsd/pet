<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Product;

class Color extends Model
{
    protected $table = 'colors';
    public function products(){
      return $this->hasMany(Product::class);
    }
}
