<!DOCTYPE HTML>
<html>
<head>
  <meta charset="utf-8" />
  <title>Pendidikan – Prodi Informatika</title>
  <link href="{{ asset('style/style.css') }}" rel="stylesheet" />
</head>
<body>
  <div id="main">
    @include('layout.header')

    <div id="site_content">
      @include('layout.sidebar')

      <div id="content">
        <h1>Pendidikan</h1>
        <p>Ini adalah halaman Pendidikan Prodi Informatika Universitas Matana.</p>
      </div>
    </div>

    @include('layout.footer')
  </div>
</body>
</html>
