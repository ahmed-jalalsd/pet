<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Material;

class MaterialsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $materials = Material::all();
        return view('backend.attributes.attribute-list', compact('materials'));
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
        $material = new Material();
        $this->validate($request, [
          'material_type' => 'required',
         ]);
         $material->material_type = $request->material_type;
         $material->save();
         return $this->create()->with('success', 'Uploaded Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Material $material)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Material $material)
    {
        if(!$material){
          return redirect('backend.dashboard')->with(['fail'=>'post not found']);
        }
        return view('backend.attributes.attribute-edit',compact('material'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Material $material)
    {
         $this->validate($request, [
            'material_type' => 'required',
          ]);
          $material->material_type = $request->material_type;
          $material->update();
          return Redirect()->route('dashboard')->with(['success'=> 'post successfully updated']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Material $material)
    {
         if(!$material){
            return redirect('dashboard')->with(['fail'=>'post not found']);
        }
          $material->delete();
          return Redirect()->route('dashboard')->with(['success'=> 'post successfully updated']);
    }
}
