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
    <h1>Add a new product</h1>
    <hr>

    <form action="{{route('products.store')}}" method="post" enctype="multipart/form-data">

      <div class="form-group">
        <label for="product_name">Name of the product</label>
        <input type="text" name="product_name" class="form-control" id="product_name"/>
      </div>

      <div class="form-group">
        <label for="product_description">Product Description</label>
        <textarea type="text" name="product_description" class="form-control" id="product_description" rows="10"></textarea>
      </div>

      <div class="form-group">
        <label for="category_id">Category</label>
        <select name="category_id" id="category_id" class="form-control">
          @foreach($categories as $category)
            <option value="{{ $category->id }}">{{ $category->category_name }}</option>
          @endforeach
        </select>
      </div>

      <div class="form-group">
        <label for="color_id">Color</label>
        <select name="color_id" id="color_id" class="form-control">
          <option selected disabled>-</option>
          @foreach($colors as $color)
            <option value="{{ $color->id }}">{{ $color->color_name }}</option>
          @endforeach
        </select>
      </div>

      <div class="form-group">
        <label for="size_id">Size</label>
        <select name="size_id" id="size_id" class="form-control">
          <option selected disabled>-</option>
          @foreach($sizes as $size)
            <option value="{{ $size->id }}">{{ $size->size_name }}</option>
          @endforeach
        </select>
      </div>

      <div class="form-group">
        <label for="material_id">Material</label>
        <select name="material_id" id="material_id" class="form-control">
          <option selected disabled>-</option>
          @foreach($materials as $material)
            <option value="{{ $material->id }}">{{ $material->material_type }}</option>
          @endforeach
        </select>
      </div>

      <div class="form-group">
        <label for="fantasia_id">Model</label>
        <select name="fantasia_id" id="fantasia_id" class="form-control">
          <option selected disabled>-</option>
          @foreach($fantasias as $fantasia)
            <option value="{{ $fantasia->id }}">{{ $fantasia->fantasia_name }}</option>
          @endforeach
        </select>
      </div>


      <div class="form-group">
        <label for="product_preview">Feature Image:</label>
        <input type="file" name="product_preview"  id="file">
      </div>

      <div class="form-group">
        <label for="images">Product Gallery:</label>
        <input type="file" name="images[]" multiple="true">
      </div>

      <button type="submit" class="btn btn-success btn-lg btn-block">Add</button>
      <input type="hidden" name="_token" value="{{Session::token()}}">
    </form>
  </div>
</div>
@endsection

@section('scripts')
@endsection
