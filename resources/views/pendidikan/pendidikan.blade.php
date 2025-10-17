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

        <h2>Bidang Keilmuan Program Studi Informatika</h2>
        <p>Program Studi Informatika Universitas Matana memiliki beberapa bidang keilmuan utama yang menjadi fokus pembelajaran dan pengembangan mahasiswa, yaitu:</p>

        <p><strong>1. Artificial Intelligence (Kecerdasan Buatan)</strong><br>
        Mempelajari cara membuat sistem komputer yang mampu berpikir, belajar, dan mengambil keputusan seperti manusia — termasuk machine learning, deep learning, dan natural language processing.</p>

        <p><strong>2. Database System (Sistem Basis Data)</strong><br>
        Berfokus pada perancangan, implementasi, dan manajemen basis data untuk mendukung penyimpanan serta pengelolaan informasi secara efisien dan aman.</p>

        <p><strong>3. Computer Science (Ilmu Komputer)</strong><br>
        Mempelajari teori dasar komputasi, algoritma, dan struktur data sebagai fondasi utama dalam pengembangan teknologi informasi.</p>

        <p><strong>4. Software Engineering (Rekayasa Perangkat Lunak)</strong><br>
        Menekankan proses perancangan, pembangunan, dan pengujian perangkat lunak dengan pendekatan sistematis dan profesional.</p>

        <p><strong>5. Computer Systems and Networks (Sistem dan Jaringan Komputer)</strong><br>
        Mempelajari arsitektur komputer, sistem operasi, serta pengelolaan jaringan komputer dan komunikasi data.</p>

        <p><strong>6. Computer Security (Keamanan Komputer)</strong><br>
        Fokus pada perlindungan sistem informasi dari ancaman, serangan, dan kebocoran data, serta penerapan prinsip keamanan digital.</p>

        <p><strong>7. Human–Computer Interaction (Interaksi Manusia dan Komputer)</strong><br>
        Mempelajari cara manusia berinteraksi dengan sistem komputer untuk menciptakan antarmuka yang intuitif dan mudah digunakan.</p>

        <p><strong>8. Information Management and Analytics (Manajemen dan Analisis Informasi)</strong><br>
        Membahas pengolahan, analisis, dan interpretasi data untuk mendukung pengambilan keputusan berbasis informasi.</p>

        <p><strong>9. Game Development (Pengembangan Game)</strong><br>
        Mengajarkan konsep desain dan pemrograman permainan interaktif menggunakan teknologi grafis dan engine game modern.</p>

      </div>
    </div>

    @include('layout.footer')
  </div>
</body>
</html>
