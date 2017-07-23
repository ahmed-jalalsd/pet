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
    <h1>File Upload</h1>
    <hr>

    <form action="{{route('galleries.update', ['gallery'=>$gallery->id])}}" method="POST" enctype="multipart/form-data">
      <input name="_method" type="hidden" value="PUT">

      <div class="form-group">
        <label for="title">Title</label>
        <textarea type="text" class="form-control input-lg" name="title" id="title" rows="1" style="resize:none;"/>{{$gallery->title}}</textarea>
      </div>

      <div class="form-group">
        <label for="description">Description</label>
        <textarea type="text" name="description" class="form-control input-lg" id="description" rows="10">{{$gallery->description}}</textarea>
      </div>

      <div class="form-group">
        <label for="image">Select image to upload:</label>
        <input type="file" name="image" id="file">
      </div>

      <button type="submit" class="btn btn-success btn-lg btn-block">Update</button>
      <input type="hidden" name="_token" value="{{Session::token()}}">
    </form>
  </div>
</div>
@endsection

@section('scripts')
@endsection
