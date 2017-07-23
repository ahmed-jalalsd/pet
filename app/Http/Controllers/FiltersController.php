<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Color;
use App\Size;
use App\Material;
use App\Image;
use DB;

class FiltersController extends Controller
{
  public function ftShowCaravetta(Category $category) /*display product based on the category in the front-end*/
  {
    $products = $category->products;
    $caravetts = DB::table('products')->select('products.*')
          ->join('categories', 'products.category_id', '=', 'categories.id')
          ->where('categories.category_name', 'like' , 'caravetta')
          ->get();
    return view('frontend.filter.caravetta', compact('products', 'caravetts'));
  }

  public function ftShowPapillon(Category $category) /*display product based on the category in the front-end*/
  {
    $products = $category->products;
    $papillons = DB::table('products')->select('products.*')
          ->join('categories', 'products.category_id', '=', 'categories.id')
          ->where('categories.category_name', 'like' , 'papillon')
          ->get();
    return view('frontend.filter.papillon', compact('products', 'papillons'));
  }

  public function ftShowSciarpe(Category $category) /*display product based on the category in the front-end*/
  {
    $products = $category->products;
    $sciarpes = DB::table('products')->select('products.*')
          ->join('categories', 'products.category_id', '=', 'categories.id')
          ->where('categories.category_name', 'like' , 'sciarpe')
          ->get();
    return view('frontend.filter.sciarpe', compact('products', 'sciarpes'));
  }

  public function ftShowFoulard(Category $category) /*display product based on the category in the front-end*/
  {
    $products = $category->products;
    $foulards = DB::table('products')->select('products.*')
          ->join('categories', 'products.category_id', '=', 'categories.id')
          ->where('categories.category_name', 'like' , 'foulard')
          ->get();
    return view('frontend.filter.foulard', compact('products', 'foulards'));
  }

  public function ftShowCustomi(Category $category) /*display product based on the category in the front-end*/
  {
    $products = $category->products;
    $customis = DB::table('products')->select('products.*')
          ->join('categories', 'products.category_id', '=', 'categories.id')
          ->where('categories.category_name', 'like' , 'customi')
          ->get();
    return view('frontend.filter.customi', compact('products', 'customis'));
  }

  public function ftShowSeta(Category $category) /*display product based on the category in the front-end*/
  {
    $products = $category->products;
    $setas = DB::table('products')->select('products.*')
          ->join('materials', 'products.material_id', '=', 'materials.id')
          ->where('materials.material_type', 'like' , '% seta')
          ->get();
    return view('frontend.filter.seta', compact('products', 'setas'));
  }

  public function ftShowStampate(Category $category) /*display product based on the category in the front-end*/
  {
    $products = $category->products;
    $stampates = DB::table('products')->select('products.*')
          ->join('materials', 'products.material_id', '=', 'materials.id')
          ->where('materials.material_type', 'like' , '%100% seta stampata')
          ->get();
    return view('frontend.filter.stampate', compact('products', 'stampates'));
  }

  public function ftShowCotton(Category $category) /*display product based on the category in the front-end*/
  {
    $products = $category->products;
    $cottons = DB::table('products')->select('products.*')
          ->join('materials', 'products.material_id', '=', 'materials.id')
          ->where('materials.material_type', 'like' , '% cotton')
          ->get();
    return view('frontend.filter.cotton', compact('products', 'cottons'));
  }

  public function ftShowLana(Category $category) /*display product based on the category in the front-end*/
  {
    $products = $category->products;
    $lanas = DB::table('products')->select('products.*')
          ->join('materials', 'products.material_id', '=', 'materials.id')
          ->where('materials.material_type', 'like' , '% lana')
          ->get();
    return view('frontend.filter.lana', compact('products', 'lanas'));
  }

  public function ftShowLino(Category $category) /*display product based on the category in the front-end*/
  {
    $products = $category->products;
    $linos = DB::table('products')->select('products.*')
          ->join('materials', 'products.material_id', '=', 'materials.id')
          ->where('materials.material_type', 'like' , '% lino')
          ->get();
    return view('frontend.filter.lino', compact('products', 'linos'));
  }

  public function ftShowFive(Category $category) /*display product based on the category in the front-end*/
  {
    $products = $category->products;
    $fives = DB::table('products')->select('products.*')
          ->join('sizes', 'products.size_id', '=', 'sizes.id')
          ->where('sizes.size_name', 'like' , '5.5 cm')
          ->get();
    return view('frontend.filter.five', compact('products', 'fives'));
  }

  public function ftShowSix(Category $category) /*display product based on the category in the front-end*/
  {
    $products = $category->products;
    $sixs = DB::table('products')->select('products.*')
          ->join('sizes', 'products.size_id', '=', 'sizes.id')
          ->where('sizes.size_name', 'like' , '6 cm')
          ->get();
    return view('frontend.filter.six', compact('products', 'sixs'));
  }

  public function ftShowSixand(Category $category) /*display product based on the category in the front-end*/
  {
    $products = $category->products;
    $sixands = DB::table('products')->select('products.*')
          ->join('sizes', 'products.size_id', '=', 'sizes.id')
          ->where('sizes.size_name', 'like' , '6.5 cm')
          ->get();
    return view('frontend.filter.sixand', compact('products', 'sixands'));
  }

  public function ftShowSeven(Category $category) /*display product based on the category in the front-end*/
  {
    $products = $category->products;
    $sevens = DB::table('products')->select('products.*')
          ->join('sizes', 'products.size_id', '=', 'sizes.id')
          ->where('sizes.size_name', 'like' , '7 cm')
          ->get();
    return view('frontend.filter.seven', compact('products', 'sevens'));
  }

  public function ftShowEight(Category $category) /*display product based on the category in the front-end*/
  {
    $products = $category->products;
    $eights = DB::table('products')->select('products.*')
          ->join('sizes', 'products.size_id', '=', 'sizes.id')
          ->where('sizes.size_name', 'like' , '8 cm')
          ->get();
    return view('frontend.filter.eight', compact('products', 'eights'));
  }

  public function ftShowEightand(Category $category) /*display product based on the category in the front-end*/
  {
    $products = $category->products;
    $eightands = DB::table('products')->select('products.*')
          ->join('sizes', 'products.size_id', '=', 'sizes.id')
          ->where('sizes.size_name', 'like' , '8.5 cm')
          ->get();
    return view('frontend.filter.eightand', compact('products', 'eightands'));
  }

  public function ftShowNine(Category $category) /*display product based on the category in the front-end*/
  {
    $products = $category->products;
    $nines = DB::table('products')->select('products.*')
          ->join('sizes', 'products.size_id', '=', 'sizes.id')
          ->where('sizes.size_name', 'like' , '9 cm')
          ->get();
    return view('frontend.filter.nine', compact('products', 'nines'));
  }
}
