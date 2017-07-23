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

@section('content')
  <form action="{{ route('products.storeimage') }}" method="POST" enctype="multipart/form-data">
    <div class="input-group">
      <label for="fileToUpload">Product Gallery:</label>
      <input type="file" name="fileToUpload" id="fileToUpload">
    </div>
   <button type="submit" class="btn">Add</button>
   <input type="hidden" name="_token" value="{{Session::token()}}">
  </form>
@endsection

@section('scripts')
@endsection
