<!DOCTYPE html>
<html lang="en">
  <head>
      @stack('prepend-meta')
      @include('includes.meta')
      @stack('addon-meta')

      @stack('prepend-style')
      @include('includes.style')
      @stack('addon-style')
  </head>

  <body>


      @yield('content')

      @stack('prepend-script')
      @include('includes.script')
      @stack('addon-script')

  </body>
</html>
