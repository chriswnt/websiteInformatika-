<!doctype html>
<html lang="en" data-bs-theme="auto">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="" />
    <meta
      name="author"
      content="Mark Otto, Jacob Thornton, and Bootstrap contributors"
    />
    <meta name="generator" content="Astro v5.13.2" />
    <title> Dashboard website informatika </title>
    
    <script src="{{asset('assets_bootstrap/js/color-modes.js')}}"></script>
    <link href="{{asset('assets_bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet" />
    <meta name="theme-color" content="#712cf9" />
    <link href="{{asset('assets_bootstrap/dashboard.css')}}" rel="stylesheet" />
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">

  </head>
  <body>
    <svg xmlns="http://www.w3.org/2000/svg" class="d-none">
      <symbol id="check2" viewBox="0 0 16 16">...</symbol>
      <symbol id="circle-half" viewBox="0 0 16 16">...</symbol>
      <symbol id="moon-stars-fill" viewBox="0 0 16 16">...</symbol>
      <symbol id="sun-fill" viewBox="0 0 16 16">...</symbol>
    </svg>

    <div class="dropdown position-fixed bottom-0 end-0 mb-3 me-3 bd-mode-toggle">
      <!-- ... yang ini biarkan saja ... -->
    </div>

    <!-- SVG ICONS UNTUK SIDEBAR & NAV -->
    <svg xmlns="http://www.w3.org/2000/svg" class="d-none">
      <symbol id="calendar3" viewBox="0 0 16 16">...</symbol>

      <symbol id="cart" viewBox="0 0 16 16">
        <path
          d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"
        ></path>
      </symbol>

      <!-- 🔽 IKON UPLOAD BARU DI SINI -->
      <symbol id="upload" viewBox="0 0 16 16">
        <path
          d="M.5 9.9a.5.5 0 0 1 .5-.5h4V2.6L3.3 4.3a.5.5 0 1 1-.7-.7L6.1.1a.5.5 0 0 1 .7 0l3.5 3.5a.5.5 0 1 1-.7.7L9 2.6v6.8h4a.5.5 0 0 1 0 1H1a.5.5 0 0 1-.5-.5z"
        ></path>
      </symbol>
      <!-- 🔼 SAMPAI SINI -->

      <symbol id="chevron-right" viewBox="0 0 16 16">...</symbol>
      <symbol id="door-closed" viewBox="0 0 16 16">...</symbol>
      <symbol id="file-earmark" viewBox="0 0 16 16">...</symbol>
      <symbol id="file-earmark-text" viewBox="0 0 16 16">...</symbol>
      <symbol id="gear-wide-connected" viewBox="0 0 16 16">...</symbol>
      <symbol id="graph-up" viewBox="0 0 16 16">...</symbol>
      <symbol id="house-fill" viewBox="0 0 16 16">...</symbol>
      <symbol id="list" viewBox="0 0 16 16">...</symbol>
      <symbol id="people" viewBox="0 0 16 16">...</symbol>
      <symbol id="plus-circle" viewBox="0 0 16 16">...</symbol>
      <symbol id="puzzle" viewBox="0 0 16 16">...</symbol>
      <symbol id="search" viewBox="0 0 16 16">...</symbol>
    </svg>

    <!-- start  -->
    @include('layout.layout_admin.header')
    <!-- end -->
    <div class="container-fluid">
      <div class="row">
        @include('layout.layout_admin.sidebar')
        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
          @yield('content')
        </main>
      </div>
    </div>

    <script src="{{asset('assets_bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
    <script
      src="https://cdn.jsdelivr.net/npm/chart.js@4.3.2/dist/chart.umd.js"
      integrity="sha384-eI7PSr3L1XLISH8JdDII5YN/njoSsxfbrkCTnJrzXt+ENP5MOVBxD+l6sEG4zoLp"
      crossorigin="anonymous"
    ></script>
    <script src="{{asset('assets_bootstrap/dashboard.js')}}"></script>
  </body>
</html>
