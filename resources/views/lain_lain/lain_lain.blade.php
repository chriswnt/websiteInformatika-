<!DOCTYPE HTML>
<html>
<head>
  <meta charset="utf-8" />
  <title>Lain-lain – Prodi Informatika</title>
  <link href="{{ asset('style/style.css') }}" rel="stylesheet" />
</head>
<body>
  <div id="main">
    @include('layout.header')

    <div id="site_content">
      @include('layout.sidebar')

      <div id="content">
        <h1>Informasi Lain-lain</h1>

        <h2>Kontak Kampus</h2>
        <p>
          🏛️ <strong>Matana University Tower</strong>, Jl. CBD Barat Kav. 1, Gading Serpong, Tangerang, Banten – 15810<br>
          ☎️ (021) 8723-2999<br>
          📱 0812-8777-5999<br>
          ✉️ <a href="mailto:info@matanauniversity.ac.id">info@matanauniversity.ac.id</a>
        </p>

        <h2>Layanan Kampus</h2>
        <ul>
          <li><a href="#">Kalender Akademik</a></li>
          <li><a href="#">Pedoman Akademik</a></li>
          <li><a href="#">Sistem Informasi Akademik (SIAK)</a></li>
          <li><a href="#">Perpustakaan</a></li>
          <li><a href="#">E-Certificate</a></li>
        </ul>

        <h2>Penelitian</h2>
        <ul>
          <li><a href="#">Publikasi</a></li>
          <li><a href="#">Repositori Institusi</a></li>
        </ul>

        <h2>Connect With Us</h2>
        <p>
          <a href="#" target="_blank">Facebook</a> &nbsp;|&nbsp;
          <a href="#" target="_blank">Instagram</a> &nbsp;|&nbsp;
          <a href="#" target="_blank">YouTube</a> &nbsp;|&nbsp;
          <a href="#" target="_blank">LinkedIn</a>
        </p>
      </div>
    </div>

    @include('layout.footer')
  </div>
</body>
</html>
