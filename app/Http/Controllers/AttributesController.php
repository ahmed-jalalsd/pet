<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Color;
use App\Size;
use App\Material;
use App\Fantasia;
use DB;

class AttributesController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
      $colors = Color::orderBy('id', 'desc')->paginate(4);
      $sizes = Size::orderBy('id', 'desc')->paginate(4);
      $materials = Material::orderBy('id', 'desc')->paginate(4);
      $fantasias = Fantasia::orderBy('id', 'desc')->paginate(4);
      return view('backend.attributes.attribute-list', compact('colors', 'sizes', 'materials', 'fantasias'));
  }

  /**
   * Show the form for creating a new resource
   */
  public function create()
  {
      return view('backend.attributes.attribute-create');
  }


  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function storeColor(Request $request)
  {
       $color = new Color();
       $this->validate($request, [
         'color_name' => 'required',
        ]);
        $color->color_name = $request->color_name;
        $color->save();
        return $this->create()->with('success', 'Uploaded Successfully');
  }

  public function storeSize(Request $request)
  {
       $size = new Size();
       $this->validate($request, [
         'size_name' => 'required',
        ]);
        $size->size_name = $request->size_name;
        $size->save();
        return $this->create()->with('success', 'Uploaded Successfully');
  }

  public function storeMaterial(Request $request)
  {
       $material = new Material();
       $this->validate($request, [
         'material_type' => 'required',
        ]);
        $material->material_type = $request->material_type;
        $material->save();
        return $this->create()->with('success', 'Uploaded Successfully');
  }

  public function storeFantasia(Request $request)
  {
       $fantasia = new Fantasia();
       $this->validate($request, [
         'fantasia_name' => 'required',
        ]);
        $fantasia->fantasia_name = $request->fantasia_name;
        $fantasia->save();
        return $this->create()->with('success', 'Uploaded Successfully');
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
  
  public function ftShowFoderata(Fantasia $fantasia)
  {
    $products = $fantasia->products;
    $foderata = DB::table('products')->select('products.*')
          ->join('fantasias', 'products.fantasia_id', '=', 'fantasias.id')
          ->where('fantasias.fantasia_name', 'like' , '% fodera %')->orwhere('fantasias.fantasia_name', 'like', '% fodera %')
          ->get();
    return view('frontend.filter.products-foderata', compact('products', 'foderata'));
  }

  public function ftShowSfoderata(Fantasia $fantasia)
  {
    $products = $fantasia->products;
    $sfoderata = DB::table('products')->select('products.*')
          ->join('fantasias', 'products.fantasia_id', '=', 'fantasias.id')
          ->where('fantasias.fantasia_name', 'like' , '% sfoderato %')->orwhere('fantasias.fantasia_name', 'like', '% sfoderata %')
          ->get();
    return view('frontend.filter.products-sfoderata', compact('products', 'sfoderata'));
  }

  public function ftShowPieghe3(Fantasia $fantasia)
  {
    $products = $fantasia->products;
    $pieghes3 = DB::table('products')->select('products.*')
          ->join('fantasias', 'products.fantasia_id', '=', 'fantasias.id')
          ->where('fantasias.fantasia_name', 'like' , '3 pieghe')->orwhere('fantasias.fantasia_name','like', '3 pieghe %' )
          ->get();
    return view('frontend.filter.products-pieghe3', compact('products', 'pieghes3'));
  }

  public function ftShowPieghe5(Fantasia $fantasia)
  {
    $products = $fantasia->products;
    $pieghes5 = DB::table('products')->select('products.*')
          ->join('fantasias', 'products.fantasia_id', '=', 'fantasias.id')
          ->where('fantasias.fantasia_name', 'like' , '5 pieghe')->orwhere('fantasias.fantasia_name','like', '5 pieghe %' )
          ->get();
    return view('frontend.filter.products-pieghe5', compact('products', 'pieghes5'));
  }

  public function ftShowPieghe7(Fantasia $fantasia)
  {
    $products = $fantasia->products;
    $pieghes7 = DB::table('products')->select('products.*')
          ->join('fantasias', 'products.fantasia_id', '=', 'fantasias.id')
          ->where('fantasias.fantasia_name', 'like' , '7 pieghe')->orwhere('fantasias.fantasia_name','like', '7 pieghe %' )
          ->get();
    return view('frontend.filter.products-pieghe7', compact('products', 'pieghes7'));
  }

  /* Show the form for editing the specified resource.*/
  public function editColor(Color $color)
  {
    if(!$color){
      return redirect('backend.dashboard')->with(['fail'=>'post not found']);
    }
    return view('backend.attributes.attribute-edit',compact('color'));
  }

  public function editSize(Size $size)
  {
    if(!$size){
      return redirect('backend.dashboard')->with(['fail'=>'post not found']);
    }
    return view('backend.attributes.attribute-edit',compact('size'));
  }

  public function editMaterial(Material $material)
  {
    if(!$material){
      return redirect('backend.dashboard')->with(['fail'=>'post not found']);
    }
    return view('backend.attributes.attribute-edit',compact('material'));
  }

  public function editFantasia(Fantasia $fantasia)
  {
    if(!$fantasia){
      return redirect('backend.dashboard')->with(['fail'=>'post not found']);
    }
    return view('backend.attributes.attribute-edit',compact('fantasia'));
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */

  public function updateColor(Request $request, Color $color)
  {
      $this->validate($request, [
        'color_name' => 'required',
      ]);
      $color->color_name = $request->color_name;
      $color->update();
      return Redirect()->route('attributes.index')->with(['success'=> 'post successfully updated']);
  }

  public function updateSize(Request $request, Size $size)
  {
      $this->validate($request, [
        'size_name' => 'required',
      ]);
      $size->size_name = $request->size_name;
      $size->update();
      return Redirect()->route('attributes.index')->with(['success'=> 'post successfully updated']);
  }

  public function updateMaterial(Request $request, Material $material)
  {
      $this->validate($request, [
        'material_type' => 'required',
      ]);
      $material->material_type = $request->material_type;
      $material->update();
      return Redirect()->route('attributes.index')->with(['success'=> 'post successfully updated']);
  }

  public function updateFantasia(Request $request, Fantasia $fantasia)
  {
      $this->validate($request, [
        'fantasia_name' => 'required',
      ]);
      $fantasia->fantasia_name = $request->fantasia_name;
      $fantasia->update();
      return Redirect()->route('attributes.index')->with(['success'=> 'post successfully updated']);
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroyColor($id)
  {
      $Color = Color::find($id);
      $Color->delete();
       return Redirect()->route('attributes.index')->with(['success'=> 'post successfully updated']);
   }

  public function destroySize($id)
  {
      $size = Size::find($id);
      $size->delete();
       return Redirect()->route('attributes.index')->with(['success'=> 'post successfully updated']);
   }
  public function destroyFantasia($id)
  {
      $fantasia = Fantasia::find($id);
      $fantasia->delete();
     return redirect()->route('attributes.index');
   }
  public function destroyMaterial($id)
  {
      $material = Material::find($id);
      $material->delete();
     return redirect()->route('attributes.index');
   }
}
