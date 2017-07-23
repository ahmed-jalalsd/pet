<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Color;
use App\Size;
use App\Material;
use App\Fantasia;
use DB;

class FtAttributesController extends Controller
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

    public function ftShowMaterial(Material $material)
    {
      $products = $material->products;
      return view('frontend.products', compact('products'));
    }

    public function ftShowSize(Size $size)
    {
      $products = $size->products;
      return view('frontend.products', compact('products'));
    }

    public function ftShowFoderata(Fantasia $fantasia)
    {
      $products = $fantasia->products;
      $foderata = DB::table('products')->select('products.*')
            ->join('fantasias', 'products.fantasia_id', '=', 'fantasias.id')
            ->where('fantasias.fantasia_name', 'like' , '% fodera %')->orwhere('fantasias.fantasia_name', 'like', '% fodera %')
            ->get();
      return view('frontend.products-foderata', compact('products', 'foderata'));
    }

    public function ftShowSfoderata(Fantasia $fantasia)
    {
      $products = $fantasia->products;
      $sfoderata = DB::table('products')->select('products.*')
            ->join('fantasias', 'products.fantasia_id', '=', 'fantasias.id')
            ->where('fantasias.fantasia_name', 'like' , '% sfoderato %')->orwhere('fantasias.fantasia_name', 'like', '% sfoderata %')
            ->get();
      return view('frontend.products-sfoderata', compact('products', 'sfoderata'));
    }

    public function ftShowPieghe3(Fantasia $fantasia)
    {
      $products = $fantasia->products;
      $pieghes3 = DB::table('products')->select('products.*')
            ->join('fantasias', 'products.fantasia_id', '=', 'fantasias.id')
            ->where('fantasias.fantasia_name', 'like' , '3 pieghe')->orwhere('fantasias.fantasia_name','like', '3 pieghe %' )
            ->get();
      return view('frontend.products-pieghe3', compact('products', 'pieghes3'));
    }

    public function ftShowPieghe5(Fantasia $fantasia)
    {
      $products = $fantasia->products;
      $pieghes5 = DB::table('products')->select('products.*')
            ->join('fantasias', 'products.fantasia_id', '=', 'fantasias.id')
            ->where('fantasias.fantasia_name', 'like' , '5 pieghe')->orwhere('fantasias.fantasia_name','like', '5 pieghe %' )
            ->get();
      return view('frontend.products-pieghe5', compact('products', 'pieghes5'));
    }

    public function ftShowPieghe7(Fantasia $fantasia)
    {
      $products = $fantasia->products;
      $pieghes7 = DB::table('products')->select('products.*')
            ->join('fantasias', 'products.fantasia_id', '=', 'fantasias.id')
            ->where('fantasias.fantasia_name', 'like' , '7 pieghe')->orwhere('fantasias.fantasia_name','like', '7 pieghe %' )
            ->get();
      return view('frontend.products-pieghe7', compact('products', 'pieghes7'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
