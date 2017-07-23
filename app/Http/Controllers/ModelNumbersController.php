<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ModelNumber;

class ModelNumbersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $modelnumbers = ModelNumber::all();
        return view('backend.attributes.attribute-list', compact( 'modelnumbers'));
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
        $model = new ModelNumber();
        $this->validate($request, [
          'model_number' => 'required',
        ]);
        $model->model_number = $request->model_number;
        $model->save();
        return $this->create()->with('success', 'Uploaded Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(ModelNumber $modelnumber)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(ModelNumber $modelnumber)
    {
        if(!$modelnumber){
          return redirect('backend.dashboard')->with(['fail'=>'post not found']);
        }
        return view('backend.attributes.attribute-edit',compact('modelnumber'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ModelNumber $modelnumber)
    {
        $this->validate($request, [
          'model_number' => 'required',
        ]);
        $modelnumber->model_number = $request->model_number;
        $modelnumber->update();
        return Redirect()->route('dashboard')->with(['success'=> 'post successfully updated']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(ModelNumber $modelnumber)
    {
       if(!$modelnumber){
          return redirect('dashboard')->with(['fail'=>'post not found']);
      }
        $modelnumber->delete();
        return Redirect()->route('dashboard')->with(['success'=> 'post successfully updated']);
      }
}
