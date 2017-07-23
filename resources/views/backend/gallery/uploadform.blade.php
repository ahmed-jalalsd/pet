@extends('layouts.backend-master')

@section('styles')
  <link rel="stylesheet" href="">
@endsection

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

    <form action="{{route('galleries.store')}}" method="post" enctype="multipart/form-data">

      <div class="form-group">
        <label for="title">Title</label>
        <input type="text" name="title" id="title" class="form-control"/>
      </div>

      <div class="form-group">
        <label for="description">Description</label>
        <textarea type="text" name="description" id="description" rows="10" class="form-control"></textarea>
      </div>

      <div class="form-group">
        <label for="image">Select image to upload:</label>
        <input type="file" name="image" id="file">
      </div>

      <button type="submit" class="btn btn-success btn-lg btn-block">Upload</button>
      <input type="hidden" name="_token" value="{{Session::token()}}">

    </form>
  </div>
</div>
@endsection

@section('scripts')
@endsection
