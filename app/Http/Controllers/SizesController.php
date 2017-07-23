<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Size;

class SizesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sizes = Size::all();
        return view('backend.attributes.attribute-list', compact('sizes'));
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
        $size = new Size();
        $this->validate($request, [
            'size_name' => 'required',
        ]);
        $size->size_name = $request->size_name;
        $size->save();
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

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Size $size)
    {
        if(!$size){
        return redirect('backend.dashboard')->with(['fail'=>'post not found']);
      }
        return view('backend.attributes.attribute-edit',compact('size'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Size $size)
    {
        $this->validate($request, [
          'size_name' => 'required',
        ]);
        $size->size_name = $request->size_name;
        $size->update();
        return Redirect()->route('dashboard')->with(['success'=> 'post successfully updated']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Size $size)
    {
       if(!$size){
          return redirect('dashboard')->with(['fail'=>'post not found']);
      }
        $size->delete();
        return Redirect()->route('dashboard')->with(['success'=> 'post successfully updated']);
      }
}
