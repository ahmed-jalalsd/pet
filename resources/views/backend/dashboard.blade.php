Yellow
@extends('layouts.backend-master')

@section('styles')
  <link rel="stylesheet" href="{{URL::to('/public/css/backend-table.css')}}">
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
@endsection

@section('scripts')
@endsection