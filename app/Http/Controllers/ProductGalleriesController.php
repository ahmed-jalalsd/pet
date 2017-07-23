<?php

namespace App\Http\Controllers;

use App\ProductGallery;
use App\Product;
use DB;
use File;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;

class ProductGalleriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('backend.product-gallery.product-gallery-create', compact('products'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Product $product)
    {
      $productgallery = new ProductGallery();
      if($request->hasFile('fileToUpload')) {
        $file = Input::file('fileToUpload');
        $filename = time(). '-' .$file->getClientOriginalName();
        $productgallery->product_images = $filename;
        $file->move(public_path().'/images/product-gallery', $filename);
      }
      $productgallery->save();
      return $this->create()->with('success', 'Uploaded Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ProductGallery  $productGallery
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
      //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ProductGallery  $productGallery
     * @return \Illuminate\Http\Response
     */
    public function edit(ProductGallery $productGallery)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ProductGallery  $productGallery
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ProductGallery $productGallery)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ProductGallery  $productGallery
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProductGallery $productGallery)
    {
        //
    }
}
