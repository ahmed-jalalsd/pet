<?php

namespace App\Http\Controllers;

use App\Gallery;
use Illuminate\Http\Request;
use Image;
use Illuminate\Support\Facades\Input;

class GalleriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $gallery = Gallery::all();
      return view('backend.gallery.library', compact('gallery'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.gallery.uploadform');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $gallery = new Gallery();
      $this->validate($request, [
        'title' => 'required',
        'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:12048'
      ]);

      $gallery->title = $request->title;
      $gallery->description = $request->description;
      if($request->hasFile('image')) {
        $file = Input::file('image');
        $filename = time(). '-' .$file->getClientOriginalName();
        $gallery->image = $filename;
        $file->move(public_path().'/images/', $filename);
      }
      $gallery->save();
      return $this->create()->with('success', 'Image Uploaded Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function show(Gallery $gallery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function edit(Gallery $gallery)
    {
        if(!$gallery){
          return redirect('galleries.index')->with(['fail'=>'post not found']);
        }
        return view('backend.gallery.edit',compact('gallery'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Gallery $gallery)
    {
      $this->validate($request, [
        'title'=>'required|max:120',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg'
      ]);

      $gallery->title = $request->title;
      $gallery->description = $request->description;
      if($request->hasFile('image')) {
        $file = Input::file('image');
        $filename = $file->getClientOriginalName();
        $gallery->image = $filename;
        $file->move(public_path().'/images/', $filename);
      }
      $gallery->update();
      return Redirect()->route('galleries.index')->with(['success'=> 'post successfully updated']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gallery $gallery)
    {
      if(!$gallery){
        return redirect('galleries.index')->with(['fail'=>'post not found']);
    }
      $gallery->delete();
      return Redirect()->route('galleries.index')->with(['success'=> 'post successfully updated']);
   }

}
