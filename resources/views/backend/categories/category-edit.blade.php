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
    <hr>
    <h1>Edit Category</h1>
    <form action="{{route('categories.update', ['category'=>$category->id])}}" method="post" enctype="multipart/form-data">
      <input name="_method" type="hidden" value="PUT">
        <div class="form-group">
          <label for="category_name">Name of the category</label>
          <textarea type="text" class="form-control input-lg" name="category_name" id="category_name" rows="1" style="resize:none;"/>
            {{ $category->category_name }}
          </textarea>
        </div>
        <button type="submit" class="btn btn-success btn-lg btn-block">Edit</button>
        <input type="hidden" name="_token" value="{{Session::token()}}">
      </form>
  </div>
</div>
@endsection

@section('scripts')
@endsection
