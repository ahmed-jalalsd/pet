<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NewProduct extends Model
{
  protected $table = 'new_products';
  protected $fillable = [
   'product_id',
   'bk-image',
   'ft-image',
   'description'
  ];
    public function products(){
       return $this->belongsTo(Product::class, 'product_id');
   }
}
