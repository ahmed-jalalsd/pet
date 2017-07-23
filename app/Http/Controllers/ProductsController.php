<?php

namespace App\Http\Controllers;

use App\Product;
use App\ProductGallery;
use App\Category;
use App\Color;
use App\Image;
use App\Size;
use App\Material;
use App\Fantasia;
use App\Productgalleries;
use DB;
use File;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use App\Http\Requests\UploadRequest;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $products = Product::orderBy('id', 'desc')->with('categories', 'colors' , 'sizes', 'materials' , 'fantasias')->paginate(4);
      return view('backend.product.product-library', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        $colors = Color::all();
        $sizes = Size::all();
        $materials = Material::all();
        $fantasias = Fantasia::all();
        return view('backend.product.product-create', compact('categories','colors','sizes', 'materials', 'fantasias'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UploadRequest $request)
    {
        $product = new Product();
        $product->product_name = $request->product_name;
        $product->product_description = $request->product_description;
        if($request->hasFile('product_preview')) {
          $file = Input::file('product_preview');
          $filename = time(). '-' .$file->getClientOriginalName();
          $product->product_preview = $filename;
          $file->move(public_path().'/images/product-feature', $filename);
        }
        $product->category_id = $request->category_id;
        $product->color_id = $request->color_id;
        $product->size_id = $request->size_id;
        $product->material_id = $request->material_id;
        $product->fantasia_id = $request->fantasia_id;
        $product->save();


        if($request->hasFile('images')) {
          $photos = Input::file('images');
          $file_count = count($photos);
          $uploadcount = 0;
          foreach($photos as $photo){
          $photoname = time(). '-' .$photo->getClientOriginalName();
          $photo->move(public_path().'/images/product-gallery', $photoname);
          $uploadcount ++;
           $productgallery = new ProductGallery();
           $productgallery->product_images = $photoname;
           $productgallery->product_id = $product->id; // Save it to the newly created product
           $productgallery->products()->associate($product);
           $productgallery->save();
        }
      }
      if($uploadcount == $file_count){
        return $this->create()->with('success', 'Uploaded Successfully');
      }
      else{
          return $this->create()->with('success', 'Uploaded fail');
      }

    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        $categories = Category::all();
        $cats = array();
        foreach ($categories as $category) {
        $cats[$category->id] = $category->category_name;
      }

        $colors = Color::all();
        $col = array();
        foreach ($colors as $color) {
        $col[$color->id] = $color->color_name;
      }

        $materials = Material::all();
        $mat = array();
        foreach ($materials as $material) {
        $mat[$material->id] = $material->material_type;
      }

        $sizes = Size::all();
        $si = array();
        foreach ($sizes as $size) {
        $si[$size->id] = $size->size_name;
      }

        $fantasias = Fantasia::all();
        $fant = array();
        foreach ($fantasias as $fantasia) {
        $fant[$fantasia->id] = $fantasia->fantasia_name;
      }
        if(!$product){
          return redirect('backend.dashboard')->with(['fail'=>'post not found']);

        }
        return view('backend.product.product-edit',compact('product', 'cats' ,
        'col' , 'mat', 'si', 'fant', 'categories', 'materials', 'sizes','colors', 'fantasias'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
      $this->validate($request, [
        'product_name'=>'required|max:120',
        'product_preview' => 'nullable|file|image|mimes:jpeg,png,jpg,gif,svg',
      ]);

      $product->product_name = $request->product_name;
      $product->product_description = $request->product_description;
      if($request->hasFile('product_preview')) {
        $file = Input::file('product_preview');
        $filename = time(). '-' .$file->getClientOriginalName();
        $file->move(public_path().'/images/product-feature', $filename);
        $oldfile = $product->product_preview;
        $product->product_preview = $filename;
        $oldfiledelete = File::delete(public_path().'/images/product-feature', $oldfile);
      }
      $product->category_id = $request->category_id;
      $product->color_id = $request->color_id;
      $product->size_id = $request->size_id;
      $product->material_id = $request->material_id;
      $product->fantasia_id = $request->fantasia_id;
      $product->update();
      return Redirect()->route('products.index')->with(['success'=> 'post successfully updated']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        if(!$product){
          return redirect('products.index')->with(['fail'=>'post not found']);
      }
        $product->delete();
        return Redirect()->route('products.index')->with(['success'=> 'post successfully updated']);
    }
}
