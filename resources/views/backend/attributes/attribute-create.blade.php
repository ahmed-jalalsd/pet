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
    <h1>Add attributes</h1>
<hr>
    <form action="{{route('attributes.storeColor')}}" method="post" enctype="multipart/form-data">
      <div class="form-group">
        <label for="color_name">Color</label>
        <input type="text" name="color_name" id="color_name" class="form-control"/>
      </div>
      <button type="submit" class="btn btn-success btn-lg btn-block">Add</button>
      <input type="hidden" name="_token" value="{{Session::token()}}">
    </form>
<hr>
    <form action="{{route('attributes.storeSize')}}" method="post" enctype="multipart/form-data">
      <div class="form-group">
        <label for="size_name">Size</label>
        <input type="text" name="size_name" id="size_name" class="form-control"/>
      </div>
      <button type="submit" class="btn btn-success btn-lg btn-block">Add</button>
      <input type="hidden" name="_token" value="{{Session::token()}}">
    </form>
    <hr>
    <form action="{{route('attributes.storeMaterial')}}" method="post" enctype="multipart/form-data">
      <div class="form-group">
        <label for="material_type">Material</label>
        <input type="text" name="material_type" id="material_type" class="form-control"/>
      </div>
      <button type="submit" class="btn btn-success btn-lg btn-block">Add</button>
      <input type="hidden" name="_token" value="{{Session::token()}}">
    </form>

    <hr>
    <form action="{{route('attributes.storeFantasia')}}" method="post" enctype="multipart/form-data">
      <div class="form-group">
        <label for="fantasia_name">Fantasia</label>
        <input type="text" name="fantasia_name" id="fantasia_name" class="form-control"/>
      </div>
      <button type="submit" class="btn btn-success btn-lg btn-block">Add</button>
      <input type="hidden" name="_token" value="{{Session::token()}}">
    </form>
  </div>
</div>

@endsection

@section('scripts')
@endsection
