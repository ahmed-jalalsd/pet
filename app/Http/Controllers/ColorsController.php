<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Color;
use App\Size;
use App\Material;
use App\ModelNumber;
use App\Fantasia;

class ColorsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $colors = Color::all();
      $sizes = Size::all();
      $materials = Material::all();
      $modelnumbers = ModelNumber::all();
      $fantasias = Fantasia::all();
      return view('backend.attributes.attribute-list', compact('colors', 'sizes', 'materials', 'modelnumbers', 'fantasias'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
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
    public function store(Request $request)
    {
        $color = new Color();
        $this->validate($request, [
          'color_name' => 'required',
         ]);
         $color->color_name = $request->color_name;
         $color->save();
         return $this->create()->with('success', 'Uploaded Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Color $color)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Color $color)
    {
        if(!$color){
          return redirect('backend.dashboard')->with(['fail'=>'post not found']);
        }
        return view('backend.attributes.attribute-edit',compact('color'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Color $color)
    {
         $this->validate($request, [
            'color_name' => 'required',
          ]);
          $color->color_name = $request->color_name;
          $color->update();
          return Redirect()->route('dashboard')->with(['success'=> 'post successfully updated']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Color $color)
    {
         if(!$color){
            return redirect('dashboard')->with(['fail'=>'post not found']);
        }
          $color->delete();
          return Redirect()->route('dashboard')->with(['success'=> 'post successfully updated']);
        // }
    }
}
