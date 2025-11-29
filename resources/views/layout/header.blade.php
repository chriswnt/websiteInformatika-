<div id="header">
  <div id="logo">
    <div id="logo_text">
      <h1><a href="{{ url('/beranda') }}">Prodi<span class="logo_colour">Informatika</span></a></h1>
      <h2>Universitas Matana.</h2>
      <h3>Christian Winata.</h3> 
      <h4>NIM 20245520010.</h4>
    </div>
  </div>

  <div id="menubar">
    <ul id="menu">
      <li class="{{ request()->routeIs('beranda') ? 'selected' : '' }}">
        <a href="{{ route('beranda') }}">Beranda</a>
      </li>

      <li class="{{ request()->routeIs('profil') ? 'selected' : '' }}">
        <a href="{{ route('profil') }}">Profil</a>
      </li>

      <li class="{{ request()->routeIs('pendidikan') ? 'selected' : '' }}">
        <a href="{{ route('pendidikan') }}">Pendidikan</a>
      </li>

      <li class="{{ request()->routeIs('riset') ? 'selected' : '' }}">
        <a href="{{ route('riset') }}">Riset</a>
      </li>

     <li class="{{ request()->routeIs('mahasiswa') ? 'selected' : '' }}">
  <a href="{{ route('mahasiswa') }}">Mahasiswa</a>
</li>

      <li class="{{ request()->routeIs('lainlain') ? 'selected' : '' }}">
        <a href="{{ route('lainlain') }}">Lain-lain</a>
      </li>
    </ul>
  </div>
</div>
