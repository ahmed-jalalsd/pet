<?php

namespace App;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;
use App\Category;
use App\Color;
use App\Size;
use App\Material;
use App\Fantasia;
use App\ProductGallery;

class Product extends Model
{
    use Sluggable;
    protected $guarded = ['id'];
    protected $table = 'products';
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'product_name'
            ]
        ];
    }

    public function categories(){
      return $this->belongsTo(Category::class, 'category_id');
    }
    /*Connect the product table with the image table as one product can have many images*/
    public function images(){
      return $this->belongsToMany(Image::class , 'image_product');
    }

    public function productgalleries(){
      return $this->hasMany(ProductGallery::class);
    }

    public function colors(){
      return $this->belongsTo(Color::class, 'color_id');
    }

    public function fantasias(){
      return $this->belongsTo(Fantasia::class, 'fantasia_id');
    }

    public function materials(){
      return $this->belongsTo(Material::class , 'material_id');
    }

    public function sizes(){
      return $this->belongsTo(Size::class, 'size_id');
    }

    public function newProducts(){
      return $this->hasOne(Size::class, 'size_id');
    }
}
