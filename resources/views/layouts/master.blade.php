<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <title> @yield('titulo') | ExplorUp</title>
    <link type="image/x-icon" href="/assets/img/favicon.ico" rel="shortcut icon" />
    
      @include('layouts.script_head')
  </head>
  <body>
    <div id="top"></div>
    <!-- Progress bar area -->
    <div class="progress bar"></div>
    <a href="#top" class="ui circular icon button" id="toTop" data-slide="slide">
      <i class="angle up icon"></i>
    </a>
    @include('layouts.menu')
    @yield('contenido')
    @include('layouts.footer')
    @include('layouts.script_footer')
  </body>


</html>
