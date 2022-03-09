<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Laravel') }}</title>

    @include('layouts.admin.partials.asset')

    {{-- APP CSS & JS  --}}
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

  </head>
  <body class="sb-nav-fixed" onload="startTime()">

    @include('layouts.admin.partials.navbar')

    <div id="layoutSidenav">
    
      @include('layouts.admin.partials.sidebar')

      <div id="layoutSidenav_content">
        <main>
          <div class="container-fluid">
            @yield('content')
            {{-- @include('layouts.admin.partials.static-dashboard') --}}
          </div>
        </main>

        @include('layouts.admin.partials.footer')
              

      </div>
    </div>


    @yield('scripts')


  </body>
</html>