<!doctype html>
<html>
  <head>
    <title>@yield('title', 'Learning php laravel')</title>
  </head>
  <body>
    <div>
      @include('nav')

      @if(session()->has('message'))
      <div>
        <strong>Success! </strong> {{session()->get('message')}}
      </div>
      @endif

      @yield('content')
    </div>
  </body>
</html>