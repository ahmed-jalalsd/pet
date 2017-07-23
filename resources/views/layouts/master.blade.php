<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{URL::to('/public/css/main.css')}}">
    <!-- <link rel="stylesheet" href="{{URL::to('/public/css/style.css')}}"> -->
    <link rel="stylesheet" href="{{URL::to('/public/css/pushy.css')}}">
    <link rel="stylesheet" href="{{URL::to('/public/css/animate.css')}}">
    @yield('styles')
  </head>
  <body id="@yield('pageType')">
    <!-- <div class="se-pre-con"></div> -->
    @include('inc.header')
    @yield('content')
    @include('inc.footer')
  <script src="{{ URL::to('/public/js/jquery-3.2.1.min.js') }}"></script>
  <script src="{{ URL::to('/public/js/pushy.js') }}"></script>
  <script src="{{ URL::to('/public/js/jquery.waypoints.js') }}"></script>
  <script src="{{ URL::to('/public/js/jquery.waypoints.min.js') }}"></script>
  @yield('scripts')
  </body>
</html>
