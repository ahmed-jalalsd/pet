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
    <h1>Edit Attributes</h1>
    <hr>
    @if( Route::current()->getName() == 'attributes.editColor' )
    <form action="{{ route('attributes.updateColor', ['color' => $color->id] )}}" method="post" enctype="multipart/form-data">
      <input name="_method" type="hidden" value="PUT">

      <div class="form-group">
        <label for="color_name">Color</label>
        <textarea type="text" name="color_name" id="color_name" class="form-control input-lg"  rows="1" style="resize:none;"/>
          {{ $color->color_name }}
        </textarea>
      </div>

      <button type="submit" class="btn btn-success btn-lg btn-block">Update</button>
      <input type="hidden" name="_token" value="{{Session::token()}}">
    </form>

    @elseif( Route::current()->getName() == 'attributes.editSize' )
    <form action="{{ route('attributes.updateSize', ['size' => $size->id]) }}" method="post" enctype="multipart/form-data">
      <input name="_method" type="hidden" value="PUT">
      <div class="form-group">
        <label for="size_name">Size</label>
        <textarea type="text" name="size_name" id="size_name" class="form-control input-lg"  rows="1" style="resize:none;"/>
          {{ $size->size_name }}
        </textarea>
      </div>
      <button type="submit" class="btn btn-success btn-lg btn-block">Add</button>
      <input type="hidden" name="_token" value="{{Session::token()}}">
    </form>

   @elseif( Route::current()->getName() == 'attributes.editMaterial' )
    <form action="{{route('attributes.updateMaterial', ['material'=>$material->id])}}" method="post" enctype="multipart/form-data">
      <input name="_method" type="hidden" value="PUT">
      <div class="form-group">
        <label for="material_type">Material</label>
        <textarea type="text" name="material_type" id="material_type" class="form-control input-lg"  rows="1" style="resize:none;"/>
          {{ $material->material_type }}
        </textarea>
      </div>
      <button type="submit" class="btn btn-success btn-lg btn-block">Add</button>
      <input type="hidden" name="_token" value="{{Session::token()}}">
    </form>

    @elseif( Route::current()->getName() == 'attributes.editFantasia' )
      <form action="{{route('attributes.updateFantasia',['fantasia'=>$fantasia->id])}}" method="post" enctype="multipart/form-data">
        <input name="_method" type="hidden" value="PUT">
        <div class="form-group">
          <label for="fantasia_name">Model</label>
          <textarea type="text" name="fantasia_name" id="fantasia_name" class="form-control input-lg"  rows="1" style="resize:none;"/>
            {{ $fantasia->fantasia_name }}
          </textarea>
        </div>
        <button type="submit" class="btn btn-success btn-lg btn-block">Add</button>
        <input type="hidden" name="_token" value="{{Session::token()}}">
      </form>
    @endif
  </div>
</div>
@endsection
@section('scripts')
@endsection
