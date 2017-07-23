<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Dashboard Panel</title>
    <link rel="stylesheet" href="{{URL::to('/public/css/backend.css')}}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @yield('styles')
  </head>
  <body>
    @include('inc.backend-header')
    <div class="container">
        @yield('content')
    </div>

  </body>
  <script src="{{ URL::to('/public/js/jquery-3.2.1.min.js') }}"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</html>
