<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Fantasia;

class FantasiasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $fantasias = Fantasia::all();
         return view('backend.attributes.attribute-list', compact( 'fantasias'));
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
    public function show(Fantasia $fantasia)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Fantasia $fantasia)
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
    public function update(Request $request, Fantasia $fantasia)
    {
        $this->validate($request, [
          'fantasia_name' => 'required',
        ]);
        $fantasia->fantasia_name = $request->fantasia_name;
        $fantasia->update();
        return Redirect()->route('dashboard')->with(['success'=> 'post successfully updated']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Fantasia $fantasia)
    {
        if(!$fantasia){
          return redirect('dashboard')->with(['fail'=>'post not found']);
        }
        $fantasia->delete();
        return Redirect()->route('dashboard')->with(['success'=> 'post successfully updated']);
    }
}
