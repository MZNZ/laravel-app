<!doctype html>
<html>
  <head>
    <title>@yield('title', 'Learning php laravel')</title>
  </head>
  <body>
    <div>
      @include('nav')
      @yield('content')
    </div>
  </body>
</html>