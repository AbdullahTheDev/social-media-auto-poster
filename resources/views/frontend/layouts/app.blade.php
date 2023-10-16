<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
  @yield('frontend-style')
</head>
<body>
  @include('frontend.includes.navbar')
  @yield('frontend-content')
  @include('frontend.includes.script')
</body>
</html>