<div class="sidebar border border-right col-md-3 col-lg-2 p-0 bg-body-tertiary">
  <div
    class="offcanvas-md offcanvas-end bg-body-tertiary"
    tabindex="-1"
    id="sidebarMenu"
    aria-labelledby="sidebarMenuLabel"
  >
    <div class="offcanvas-header">
      <h5 class="offcanvas-title" id="sidebarMenuLabel">
        Website Informatika
      </h5>
      <button
        type="button"
        class="btn-close"
        data-bs-dismiss="offcanvas"
        data-bs-target="#sidebarMenu"
        aria-label="Close"
      ></button>
    </div>

    <div class="offcanvas-body d-md-flex flex-column p-0 pt-lg-3 overflow-y-auto">
      <ul class="nav flex-column">

        {{-- DASHBOARD --}}
        <li class="nav-item">
          <a
            class="nav-link d-flex align-items-center gap-2 {{ request()->is('admin') ? 'active' : '' }}"
            href="{{ url('/admin') }}"
          >
            <i class="bi bi-house-fill"></i>
            Dashboard
          </a>
        </li>

        {{-- MAHASISWA --}}
        <li class="nav-item">
          <a
            class="nav-link d-flex align-items-center gap-2 {{ request()->is('admin/mahasiswa*') ? 'active' : '' }}"
            href="{{ route('admin.mahasiswa.index') }}"
          >
            <i class="bi bi-file-earmark-text"></i>
            Mahasiswa
          </a>
        </li>

        {{-- PEGAWAI --}}
        <li class="nav-item">
          <a
            class="nav-link d-flex align-items-center gap-2 {{ request()->is('pegawai*') ? 'active' : '' }}"
            href="{{ url('/pegawai') }}"
          >
            <i class="bi bi-people-fill"></i>
            Pegawai
          </a>
        </li>

        {{-- UPLOAD FILE --}}
        <li class="nav-item">
          <a
            class="nav-link d-flex align-items-center gap-2 {{ request()->is('file*') ? 'active' : '' }}"
            href="{{ route('file.index') }}"
          >
            <i class="bi bi-upload"></i>
            Upload File
          </a>
        </li>

      </ul>

      <hr class="my-3" />

      <ul class="nav flex-column mb-auto">

        {{-- SETTINGS --}}
        <li class="nav-item">
          <a class="nav-link d-flex align-items-center gap-2" href="#">
            <i class="bi bi-gear-wide-connected"></i>
            Settings
          </a>
        </li>

        {{-- SIGN OUT --}}
        <li class="nav-item">
          <a class="nav-link d-flex align-items-center gap-2" href="{{ url('/logout') }}">
            <i class="bi bi-door-closed"></i>
            Sign out
          </a>
        </li>

      </ul>
    </div>
  </div>
</div>
