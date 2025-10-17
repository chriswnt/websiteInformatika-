<!DOCTYPE HTML>
<html>
<head>
  <meta charset="utf-8" />
  <title>Riset – Prodi Informatika</title>
  <link href="{{ asset('style/style.css') }}" rel="stylesheet" />
</head>
<body>
  <div id="main">
    @include('layout.header')

    <div id="site_content">
      @include('layout.sidebar')

      <div id="content">
        <h1>Riset & Penelitian</h1>
        <p>
          Program Studi Informatika Universitas Matana aktif melaksanakan kegiatan riset dan penelitian di bidang teknologi informasi dan komputer.
          Penelitian dilakukan oleh dosen bersama mahasiswa sebagai bagian dari pengembangan ilmu dan penerapan teknologi untuk masyarakat.
        </p>

        <h2>Bidang Penelitian Utama</h2>
        <p>Beberapa fokus penelitian yang dikembangkan di Prodi Informatika meliputi:</p>
        <ul>
          <li><strong>Artificial Intelligence & Machine Learning</strong> — pengembangan sistem cerdas untuk pengenalan pola, prediksi data, dan otomasi proses industri.</li>
          <li><strong>Internet of Things (IoT)</strong> — implementasi sistem sensor dan perangkat terhubung untuk smart home, smart campus, dan monitoring lingkungan.</li>
          <li><strong>Software Engineering</strong> — pengembangan metode dan framework untuk menciptakan perangkat lunak yang efisien dan andal.</li>
          <li><strong>Cyber Security</strong> — riset mengenai keamanan jaringan, enkripsi data, serta sistem deteksi dan pencegahan serangan siber.</li>
          <li><strong>Data Science & Big Data Analytics</strong> — analisis data besar untuk mendukung pengambilan keputusan berbasis informasi.</li>
        </ul>

        <h2>Contoh Topik Penelitian</h2>
        <p>Beberapa topik penelitian yang telah dikembangkan oleh dosen dan mahasiswa antara lain:</p>
        <ul>
          <li>Penerapan Machine Learning untuk Deteksi Dini Penyakit Diabetes.</li>
          <li>Sistem Parkir Otomatis Berbasis Internet of Things (IoT).</li>
          <li>Perancangan Aplikasi E-Learning Menggunakan Framework Laravel.</li>
          <li>Analisis Keamanan Sistem Informasi pada Jaringan Kampus.</li>
          <li>Implementasi Chatbot Layanan Akademik Menggunakan Natural Language Processing (NLP).</li>
        </ul>

        <h2>Kolaborasi & Publikasi</h2>
        <p>
          Prodi Informatika bekerja sama dengan berbagai institusi pendidikan, industri, dan lembaga penelitian dalam mengembangkan riset terapan dan publikasi ilmiah.
          Hasil penelitian mahasiswa dan dosen dipublikasikan melalui seminar nasional, jurnal ilmiah, dan kegiatan akademik lainnya.
        </p>
      </div>
    </div>

    @include('layout.footer')
  </div>
</body>
</html>
