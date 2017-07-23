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
          <td>Name</td>
          <td>Actions</td>
        </tr>
      </thead>
      @foreach( $category as $item )
        <tbody>
          <tr>
            <td><h3>{{ $item->category_name }}</h3></td>
            <td rowspan="2">
              <a class="btn transparent" href="{{ route('categories.edit', ['category'=>$item->id]) }}">Edit</a>
              <form action="{{route('categories.destroy', ['category'=>$item->id])}}" method="POST" enctype="multipart/form-data">
                <input name="_method" type="hidden" value="DELETE">
                <button type="submit" class="btn transparent">Delete</button>
                <input type="hidden" name="_token" value="{{Session::token()}}">
              </form>
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
