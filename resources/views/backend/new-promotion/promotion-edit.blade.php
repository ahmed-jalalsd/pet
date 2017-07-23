@extends('layouts.backend-master')

@section('styles')
  <link rel="stylesheet" href="{{URL::to('/public/css/backend-table.css')}}">
@endsection

@section('content')
<div class="row">
  <div class="col-md-8 col-md-offset-4">
    <h1>Update </h1>
    <hr>

  <form action="{{route('newProducts.update', ['newproduct '=> $newproduct->id] ) }}" method="POST" enctype="multipart/form-data">
    <input name="_method" type="hidden" value="PUT">

    <div class="form-group">
      <label for="title">Title</label>
      <textarea type="text" name="title" id="title" class="form-control input-lg" rows="1"style="resize:none;"/>
        {{ $newproduct->title }}
      </textarea>
    </div>

    <div class="form-group">
      <label for="description">Product Description</label>
      <textarea type="text" name="description" id="description"  class="form-control input-lg" rows="10">
        {{ $newproduct->description  }}
      </textarea>
    </div>

    <div class="form-group">
      <label for="bk_image">Background Image:</label>
      <input type="file" name="bk_image" id="bk_image">
    </div>

    <div class="form-group">
      <label for="ft_image">Foreground Image:</label>
      <input type="file" name="ft_image" id="ft_image">
    </div>

    <div class="form-group">
      <label for="product_id">Products</label>
      <select name="product_id" id="product_id" class="form-control">
        <option selected disabled>-</option>
        @foreach($products as $product)
          <option value="{{ $product->id }}">{{ $product->product_name }}</option>
        @endforeach
      </select>
    </div>

    <button type="submit" class="btn btn-success btn-lg btn-block">Add</button>
    <input type="hidden" name="_token" value="{{Session::token()}}">
  </form>
</div>
</div>
@endsection

@section('scripts')
@endsection
