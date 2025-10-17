<!DOCTYPE HTML>
<html>

<head>
  <meta charset="utf-8" />
  <title>Beranda – Prodi Informatika</title>
  <meta name="description" content="Website Prodi Informatika Universitas Matana" />
  <meta name="keywords" content="informatika, universitas matana, komputer, teknologi, mahasiswa" />
  <link href="{{ asset('style/style.css') }}" rel="stylesheet" type="text/css" />
</head>

<body>
  <div id="main">
    <!-- Header -->
    @include('layout.header')

    <div id="site_content">
      <!-- Sidebar -->
      @include('layout.sidebar')

      <!-- Konten utama -->
      <div id="content">
        <h1>Jurusan Informatika</h1>
        <p>
          <strong>Jurusan Informatika</strong> merupakan salah satu jurusan yang paling dicari oleh calon mahasiswa di Indonesia karena di 
          <em>Era Digital Sekarang</em>, <strong>Ilmu Komputer</strong> menjadi salah satu ilmu esensial yang harus dipelajari semua orang.
          Teknik Informatika merupakan salah satu jurusan pendidikan tingkat perguruan tinggi yang mempelajari serta menerapkan prinsip-prinsip
          ilmu komputer dan analisis matematis dalam perancangan, pengujian, pengembangan, dan evaluasi sistem operasi, perangkat lunak (software),
          dan kinerja komputer.
        </p>

        <p>
          Dalam kata lain, bidang studi ini akan melakukan pembahasan terkait pengolahan data dengan memanfaatkan teknologi komputer yang
          menggunakan prinsip dan proses logika. Bila memutuskan untuk memilih jurusan teknik informatika, maka kamu akan cukup banyak
          berkutat dengan pemrograman (programming), pengembangan perangkat lunak (software), dan teknologi jaringan komputer.
          Pada dasarnya, kamu akan menjadi penerjemah suatu ide yang harus dituangkan dalam bentuk digital menggunakan bahasa pemrograman tertentu.
        </p>
      </div>
    </div>

    <!-- Footer -->
    @include('layout.footer')
  </div>
</body>
</html>
