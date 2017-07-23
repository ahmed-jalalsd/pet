@extends('layouts.backend-master')
@section('content')
  @if (count($errors) > 0)
    <div class="alert alert-danger">
      <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
     </div>
  @endif

<div class="row">
  <div class="col-md-8 col-md-offset-4">
    <h1>Edit Product</h1>
    <hr>

    <form action="{{route('products.update', ['product'=>$product->id]) }}" method="POST" enctype="multipart/form-data">
      <input name="_method" type="hidden" value="PUT">

      <div class="form-group">
        <label for="product_name">Product Name</label>
        <textarea type="text" class="form-control input-lg" name="product_name" id="product_name" rows="1"style="resize:none;"/>
          {{ $product->product_name }}
       </textarea>
      </div>

      <div class="form-group">
        <label for="product_description">Product Description</label>
        <textarea type="text" name="product_description" class="form-control input-lg" id="product_description" rows="10">
          {{ $product->product_description }}
        </textarea>
      </div>

      <div class="form-group">
        <label for="product_preview">Change featured image:</label>
        <input type="file" name="product_preview" id="file">
      </div>

      <div class="form-group">
        <label for="category_id">Category</label>
        <select name="category_id" id="category_id" class="form-control">
          @foreach($categories as $cat)
            <option value="{{ $cat->id }}">{{ $cat->category_name }}</option>
          @endforeach
        </select>
      </div>

      <div class="form-group">
        <label for="material_id">Materials</label>
        <select name="material_id" id="material_id" class="form-control">
          @foreach($materials as $material)
            <option value="{{ $material->id }}">{{ $material->material_type }}</option>
          @endforeach
        </select>
      </div>

      <div class="form-group">
        <label for="size_id">Misura</label>
        <select name="size_id" id="size_id" class="form-control">
          @foreach($sizes as $size)
            <option value="{{ $size->id }}">{{ $size->size_name }}</option>
          @endforeach
        </select>
      </div>

      <div class="form-group">
        <label for="fantasia_id">Model</label>
        <select name="fantasia_id" id="fantasia_id" class="form-control">
          @foreach($fantasias as $fantasia)
            <option value="{{ $fantasia->id }}">{{ $fantasia->fantasia_name }}</option>
          @endforeach
        </select>
      </div>

      <div class="form-group">
        <label for="color_id">Color</label>
        <select name="color_id" id="color_id" class="form-control">
          @foreach($colors as $color)
            <option value="{{ $color->id }}">{{ $color->color_name }}</option>
          @endforeach
        </select>
      </div>

      <!-- {{ Form::label('category_id', " Category ") }}
      {{ FORM::select('category_id', $cats, null) }} -->

      <!-- {{ Form::label('color_id', " Color ") }}
      {{ FORM::select('color_id', $col, null) }} -->

      <!-- {{ Form::label('material_id', " Material ") }}
      {{ FORM::select('material_id', $mat, null) }} -->

      <!-- {{ Form::label('size_id', " Size ") }}
      {{ FORM::select('size_id', $si, null) }}

      {{ Form::label('fantasia_id', " Model") }}
      {{ FORM::select('fantasia_id', $fant, null) }} -->


    <button type="submit" class="btn btn-success btn-lg btn-block">Edit</button>
    <input type="hidden" name="_token" value="{{Session::token()}}">

  </form>
@endsection

@section('scripts')
@endsection
