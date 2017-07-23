<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Image extends Model
{
  /*Connect the product table with the image table as one product can have many images*/
  public function products(){
    return $this->belongsToMany(Product::class , 'image_product');
  }
}
