<?php

namespace App\Http\Controllers;

use App\NewProduct;
use App\Product;
use DB;
use File;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;

class NewProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $newproducts = NewProduct::with('products')->get();
      return view('backend.new-promotion.promotion-library', compact('newproducts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $products = Product::all();
      return view('backend.new-promotion.promotion-create', compact('products'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $newproduct = new NewProduct();
      $newproduct->title = $request->title;
      $newproduct->description = $request->description;
      $this->validate($request, [
         'title'  => 'required|max:120',
         'product_id'   => 'required|integer',
         'bk_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
         'ft_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg'
       ]);
      if($request->hasFile('bk_image')) {
        $file = Input::file('bk_image');
        $filename = time(). '-' .$file->getClientOriginalName();
        $newproduct->bk_image = $filename;
        $file->move(public_path().'/images/product-pro', $filename);
      }
      if($request->hasFile('ft_image')) {
        $ftFile = Input::file('ft_image');
        $ftFileName = time(). '-' .$ftFile->getClientOriginalName();
        $newproduct->ft_image = $ftFileName;
        $ftFile->move(public_path().'/images/product-pro', $ftFileName);
      }
      $newproduct->product_id = $request->product_id;
      $newproduct->save();
        return Redirect()->route('dashboard')->with(['success'=> 'post successfully updated']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\newProduct  $newProduct
     * @return \Illuminate\Http\Response
     */
    public function show(newProduct $newProduct)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\newProduct  $newProduct
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $products = Product::all();
      $newproduct = NewProduct::find($id);
        return view('backend.new-promotion.promotion-edit',compact('newproduct', 'products'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\newProduct  $newProduct
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, newProduct $newProduct)
    {
      $newproduct = new NewProduct();
      $newproduct->title = $request->title;
      $newproduct->description = $request->description;
      $this->validate($request, [
         'title'  => 'nullable|max:120',
         'product_id'   => 'nullable|integer',
         'bk_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg',
         'ft_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg'
       ]);

      if($request->hasFile('bk_image')) {
        $file = Input::file('bk_image');
        $filename = time(). '-' .$file->getClientOriginalName();
        $newproduct->bk_image = $filename;
        $file->move(public_path().'/images/product-pro', $filename);
      }
      if($request->hasFile('ft_image')) {
        $ftFile = Input::file('ft_image');
        $ftFileName = time(). '-' .$ftFile->getClientOriginalName();
        $newproduct->ft_image = $ftFileName;
        $ftFile->move(public_path().'/images/product-pro', $ftFileName);
      }
      $newproduct->product_id = $request->product_id;
      $newproduct->update();


        return Redirect()->route('newProducts.index')->with(['success'=> 'post successfully updated']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\newProduct  $newProduct
     * @return \Illuminate\Http\Response
     */
    public function destroy(newProduct $newProduct)
    {
      if(!$newProduct){
        return redirect('newProducts.index')->with(['fail'=>'post not found']);
    }
      $newProduct->delete();
      return Redirect()->route('newProducts.index')->with(['success'=> 'post successfully updated']);
    }
}
