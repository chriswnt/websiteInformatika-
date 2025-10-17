<!DOCTYPE HTML>
<html>
<head>
  <meta charset="utf-8" />
  <title>PROFIL – Prodi Informatika</title>
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

        <h2>Visi</h2>
        <p>
          Menjadi program studi yang terpercaya dan terkemuka dalam bidang komputer sains untuk sektor kesehatan
          yang berwawasan nasional dan internasional serta berperan dalam peningkatan kualitas iman kepercayaan,
          ilmu pengetahuan dan teknologi, yang merupakan karunia Tuhan, untuk kecerdasan dan kesejahteraan umat
          manusia serta kehidupan yang lebih baik dan berkelanjutan.
        </p>

        <h2>Misi</h2>
        <ol>
          <li>
            Membentuk lulusan yang memiliki jiwa kepemimpinan serta berdedikasi pada perilaku etis,
            bertanggung jawab berlandaskan layanan penuh kasih.
          </li>
          <li>
            Membentuk lulusan yang memiliki kemampuan meneliti, kreatif, dan inovatif dalam bidang komputer sains
            untuk sektor kesehatan yang berjiwa kewirausahaan.
          </li>
          <li>
            Membentuk lulusan yang memiliki kepedulian untuk kehidupan berkelanjutan.
          </li>
        </ol>

        <h2>Tujuan</h2>
        <ol>
          <li>
            Terbentuknya lulusan yang memiliki jiwa kepemimpinan serta berdedikasi pada perilaku etis,
            bertanggung jawab berlandaskan layanan penuh kasih.
          </li>
          <li>
            Terbentuknya lulusan yang memiliki kemampuan meneliti, kreatif, dan inovatif dalam bidang komputer sains
            untuk sektor kesehatan yang berjiwa kewirausahaan.
          </li>
          <li>
            Terbentuknya lulusan yang memiliki kepedulian untuk kehidupan berkelanjutan.
          </li>
        </ol>
      </div>
    </div>

    @include('layout.footer')
  </div>
</body>
</html>
