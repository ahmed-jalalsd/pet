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
          <td>Image</td>
          <td>Title</td>
          <td>Description</td>
          <td>Date</td>
          <td>Actions</td>
        </tr>
      </thead>
      @foreach( $gallery as $item )
      <tbody>
        <tr>
            <td class="thumbnail" ><img src="{!! '../public/images/'.$item->image !!}" alt=""></td>
            <td><h3>{{ $item->title }}</h3></td>
            <td><p>{{ $item->description }}</p></td>
            <td><h5>{{ $item->created_at }}</h5></td>
            <td rowspan="2">
              <a class="btn transparent" href="{{ route('galleries.edit', ['gallery'=>$item->id]) }}">Edit</a>
              <form action="{{ route('galleries.destroy', ['gallery'=>$item->id]) }}" method="POST" enctype="multipart/form-data">
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
