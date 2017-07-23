@extends('layouts.backend-master')
@section('styles')
  <link rel="stylesheet" href="{{URL::to('/public/css/backend-table.css')}}">
@endsection
@section('content')

<div class="row">
  <div class="col-md-8 col-md-offset-4">
    <table class="table table-striped">
      <thead>
        <tr>
          <td>Background image</td>
          <td>Foreground image</td>
          <td>Title</td>
          <td>Description</td>
          <td>Product</td>
          <td>Date</td>
          <td>Actions</td>
        </tr>
      </thead>
      @foreach( $newproducts as $newproduct )
      <tbody>
        <tr>
          <td>
            <img src="{!! '../public/images/product-pro/'.$newproduct->bk_image !!}" alt="" width="50%" height="auto">
          </td>
          <td>
            <img src="{!! '../public/images/product-pro/'.$newproduct->ft_image !!}" alt="" width="50%" height="auto">
          </td>
          <td>
            <h3>{{ $newproduct->title }}</h3>
          </td>
          <td>
            <p>{{ substr($newproduct->description,0,50) }} {{ strlen($newproduct->description) > 50 ? "...." : "" }}</p>
          </td>
          <td>
            <p>{{ isset($newproduct->products) ? $newproduct->products->product_name: '-'}}</p>
          </td>
          <td>
            <p>{{ $newproduct->created_at }}</p>
          </td>
          <td rowspan="2">
          <a class="btn transparent" href="{{ route('newProducts.edit', ['newproduct'=>$newproduct->id]) }}">Edit</a>
          <form action="{{ route('newProducts.destroy', ['newproduct'=>$newproduct->id]) }}" method="POST" enctype="multipart/form-data">
            <input name="_method" type="hidden" value="DELETE">
            <button type="submit" class="btn transparent">Delete</button>
            <input type="hidden" name="_token" value="{{Session::token()}}">
          </form>
          <!-- add image button -->
          </td>
        </tr>
      </tbody>
      @endforeach
    </table>
  </div>
</div>
@endsection

@section('scripts')
@endsection
