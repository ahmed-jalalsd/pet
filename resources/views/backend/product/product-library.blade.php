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
          <td>No</td>
          <td>Image</td>
          <td>Title</td>
          <!-- <td>Description</td> -->
          <td>Category</td>
          <!-- <td>Color</td> -->
          <td>Material</td>
          <td>Size</td>
          <td>Model</td>
          <td>Date</td>
          <td>Actions</td>
        </tr>
      </thead>

      @foreach( $products as $item )
        <tbody>
          <tr>
            <td>{{ $item->id }}</td>
            <td class="thumbnail" ><img src="{!! '../public/images/product-feature/'.$item->product_preview !!}" alt=""></td>
            <td><h3>{{ $item->product_name }}</h3></td>
            <!-- <td><p>{{ $item->product_description }}</p></td> -->
            <td><p>{{ isset($item->categories) ? $item->categories->category_name: '-'}}</p></td>
            <!-- <td><p>{{ isset($item->colors) ? $item->colors->color_name : '-'}}</p></td> -->
            <td><p>{{ isset($item->materials) ? $item->materials->material_type : '-'}}</p></td>
            <td><p>{{ isset($item->sizes) ? $item->sizes->size_name : '-'}}</p></td>
            <td><p>{{ isset($item->fantasias) ? $item->fantasias->fantasia_name : '-'}}</p></td>
            <td><p>{{ $item->created_at }}</p></td>
            <td rowspan="2">
              <a class="btn transparent" href="{{ route('products.edit', ['product'=>$item->id]) }}">Edit</a>
              <form action="{{ route('products.destroy', ['product'=>$item->id]) }}" method="POST" enctype="multipart/form-data">
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
    <div class="text-center">
      {!! $products->links(); !!}
    </div>
  </div>
</div>
@endsection

@section('scripts')

@endsection
