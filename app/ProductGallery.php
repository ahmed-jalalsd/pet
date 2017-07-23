<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Product;

class ProductGallery extends Model
{
  protected $table = 'product_galleries';
  protected $fillable = [
   'product_id',
   'product_images'
  ];
    public function products(){
       return $this->belongsTo(Product::class, 'product_id');
   }
}
