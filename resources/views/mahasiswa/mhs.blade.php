<!DOCTYPE HTML>
<html>
<head>
  <meta charset="utf-8" />
  <title>Mahasiswa – Prodi Informatika</title>
  <link href="{{ asset('style/style.css') }}" rel="stylesheet" />
</head>
<body>
  <div id="main">
    @include('layout.header')

    <div id="site_content">
      @include('layout.sidebar')

      <div id="content">
        <h1>Kegiatan & Mahasiswa Prodi Informatika</h1>

        <h2>Kegiatan Mahasiswa</h2>
        <p>
          Mahasiswa Program Studi Informatika Universitas Matana aktif mengikuti berbagai kegiatan akademik dan non-akademik
          untuk mengembangkan kemampuan dan kreativitas di bidang teknologi informasi. Beberapa kegiatan yang rutin dilakukan antara lain:
        </p>
        <ul>
          <li><strong>Seminar & Workshop Teknologi</strong> — seperti pelatihan Artificial Intelligence, Web Development, atau Internet of Things (IoT).</li>
          <li><strong>Kompetisi & Lomba</strong> — partisipasi dalam lomba seperti Hackathon, UI/UX Design Challenge, dan Competitive Programming Contest.</li>
          <li><strong>Proyek Kolaboratif</strong> — pengembangan aplikasi dan sistem bersama dosen serta rekan mahasiswa untuk menyelesaikan permasalahan nyata di masyarakat.</li>
          <li><strong>Pengabdian Masyarakat (PKM)</strong> — kegiatan sosial berbasis teknologi seperti pelatihan komputer dan pembuatan aplikasi sederhana untuk UMKM atau sekolah.</li>
        </ul>

        <h2>Organisasi & Komunitas Mahasiswa</h2>
        <p>
          Mahasiswa Informatika juga aktif dalam organisasi dan komunitas yang menjadi wadah pengembangan minat dan bakat:
        </p>
        <ul>
          <li><strong>Himpunan Mahasiswa Informatika (HIMTI)</strong> — organisasi resmi yang menaungi seluruh mahasiswa Prodi Informatika dan menjadi sarana pengembangan kemampuan kepemimpinan serta kegiatan kampus.</li>
          <li><strong>Komunitas Coding & Startup Club</strong> — komunitas tempat mahasiswa belajar pemrograman bersama, membangun proyek digital, dan menumbuhkan semangat wirausaha di bidang teknologi.</li>
        </ul>

        <h2>Peluang Karir Lulusan</h2>
        <p>
          Lulusan Prodi Informatika Universitas Matana memiliki prospek karir yang luas di berbagai bidang teknologi informasi, seperti:
        </p>
        <ol>
          <li>Front End Developer (UI/UX)</li>
          <li>Back End Developer</li>
          <li>Full Stack Developer (Front End & Back End)</li>
          <li>Software Engineer</li>
          <li>Technology Support</li>
          <li>System Analyst</li>
          <li>Network Engineer</li>
          <li>Data Scientist</li>
          <li>Artificial Intelligence Specialist</li>
          <li>Mobile Apps Developer</li>
          <li>Game Developer</li>
        </ol>
      </div>
    </div>

    @include('layout.footer')
  </div>
</body>
</html>
