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
      <h1>Add a new Category</h1>
      <hr>

      <form action="{{route('categories.store')}}" method="post" enctype="multipart/form-data">

        <div class="form-group">
          <label for="category_name">Name of the category</label>
          <input type="text" name="category_name" id="category_name" class="form-control input-lg"/>
        </div>

    <button type="submit" class="btn btn-success btn-lg btn-block">Create</button>
    <input type="hidden" name="_token" value="{{Session::token()}}">

  </form>
@endsection

@section('scripts')
@endsection
