@extends('layouts.backend-master')
@section('styles')
  <link rel="stylesheet" href="{{URL::to('/public/css/backend-table.css')}}">
@endsection
@section('content')

<div class="row">
  <div class="col-md-8 col-md-offset-3">
    <div class="row">

      <div class="col-md-6">
        <table class="table table-striped">
          <thead>
            <tr>
              <td>Material</td>
              <td>Actions</td>
            </tr>
          </thead>
          @foreach( $materials as $material )
          <tbody>
            <tr>
              <td><h3>{{ $material->material_type }}</h3></td>
              <td rowspan="2">
                <a class="btn transparent" href="{{ route('attributes.editMaterial', ['material'=>$material->id]) }}">Edit</a>
                <form action="{{route('attributes.destroyMaterial', ['material'=>$material->id])}}" method="POST" enctype="multipart/form-data">
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

    <div class="col-md-6">
      <table class="table table-striped">
        <thead>
          <tr>
            <td>Model</td>
            <td>Actions</td>
          </tr>
        </thead>
        @foreach( $fantasias as $fantasia )
         <tbody>
           <tr>
             <td><h3>{{ substr($fantasia->fantasia_name,0,50) }} {{ strlen($fantasia->fantasia_name) > 50 ? "...." : "" }}</h3></td>
             <td rowspan="2">
               <a class="btn transparent" href="{{ route('attributes.editFantasia', ['fantasia'=>$fantasia->id]) }}">Edit</a>
               <form action="{{route('attributes.destroyFantasia', ['fantasia'=>$fantasia->id])}}" method="POST" enctype="multipart/form-data">
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

    <div class="row">
      <div class="col-md-6">
        <table class="table table-striped">
          <thead>
            <tr>
              <td>Size</td>
              <td>Actions</td>
            </tr>
          </thead>
          @foreach( $sizes as $size )
            <tbody>
              <tr>
                <td><h3>{{ $size->size_name }}</h3></td>
                <td rowspan="2">
                  <a class="btn transparent" href="{{ route('attributes.editSize', ['size'=>$size->id]) }}">Edit</a>
                  <form action="{{route('attributes.destroySize', ['size'=>$size->id])}}" method="POST" enctype="multipart/form-data">
                    <input name="_method" type="hidden" value="DELETE">
                    <button type="submit" class="btn transparent">Delete</button>
                    <input type="hidden" name="_token" value="{{Session::token()}}">
                  </form>
                </td>
              </tr>
            </tbody>
          @endforeach
        </table>
        {!! $materials->links(); !!}
      </div>

    <div class="col-md-6">
      <table class="table table-striped">
        <thead>
          <tr>
            <td>Color</td>
            <td>Actions</td>
          </tr>
        </thead>
        @foreach( $colors as $color )
          <tbody>
            <tr>
              <td><h3>{{ $color->color_name }}</h3></td>
              <td rowspan="2">
                <a class="btn transparent" href="{{ route('attributes.editColor', ['color'=>$color->id]) }}">Edit</a>
                <form action="{{ route('attributes.destroyColor', ['color'=>$color->id]) }}" method="POST" enctype="multipart/form-data">
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
</div>
@endsection
@section('scripts')
@endsection
