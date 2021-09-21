<!DOCTYPE html>
<html lang="en">
  <head>

    <title>@yield('title')</title>
      @stack('prepend-meta')
      @include('includes.meta')
      @stack('addon-meta')

      @stack('prepend-style')
      @include('includes.style-admin')
      @stack('addon-style')
  </head>

  <body>

      @include('includes.admin.sidebar')
      @yield('content')
      @stack('prepend-script')
      @include('includes.script')
      @stack('addon-script')

  </body>
</html>
