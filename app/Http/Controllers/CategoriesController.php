<?php

namespace App\Http\Controllers;

use App\Category;
use App\Color;
use App\Size;
use App\Material;
use App\Image;
use Illuminate\Http\Request;
use DB;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category = Category::all();
        return view('backend.categories.category-list', compact('category'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.categories.category-create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $category = new Category();
        $this->validate($request, [
          'category_name' => 'required',
        ]);
        $category->category_name = $request->category_name;
        $category->save();
        return $this->create()->with('success', 'Uploaded Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
      if(!$category){
        return redirect('backend.dashboard')->with(['fail'=>'post not found']);
      }
      return view('backend.categories.category-edit',compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        $this->validate($request, [
          'category_name' => 'required',
        ]);
        $category->category_name = $request->category_name;
        $category->update();
        return Redirect()->route('dashboard')->with(['success'=> 'post successfully updated']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        if(!$category){
          return redirect('dashboard')->with(['fail'=>'post not found']);
      }
        $category->delete();
        return Redirect()->route('dashboard')->with(['success'=> 'post successfully updated']);
    }
}
