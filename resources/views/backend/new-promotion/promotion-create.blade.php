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

  <form action="{{route('newProducts.store')}}" method="post" enctype="multipart/form-data">
    <div class="form-group">
      <label for="title">Title</label>
      <input type="text" name="title" id="title" class="form-control"/>
    </div>

    <div class="form-group">
      <label for="description">Product Description</label>
      <textarea type="text" name="description" id="description"  class="form-control" rows="10"></textarea>
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
