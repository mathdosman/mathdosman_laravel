
      <!-- Sidebar -->
      <aside class="navbar navbar-vertical navbar-expand-lg fixed-top" data-bs-theme="dark">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#sidebar-menu" aria-controls="sidebar-menu" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>

          <h1 class="navbar-brand navbar-brand-autodark d-none d-xl-block text-center">
            <a href=".">
              <img src="{{asset('asets/logonew.png')}}" width="110" height="32" alt="Tabler" class="icon me-1"> Math_Dosman
            </a>
          </h1>

          @if(empty(Auth::guard('siswa')->user()->role))
          <h1 class="navbar-brand navbar-brand-autodark d-xl-none d-xxl-block text-center">
            <a href=".">
              <img src="{{asset('asets/logonew.png')}}" width="110" height="32" alt="Tabler" class="icon me-1"> Math_Dosman
            </a>
          </h1>
          @elseif(!empty(Auth::guard('siswa')->user()->role == 1))
          <h1 class="navbar-brand navbar-brand-autodark d-xl-none d-xxl-block">
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link d-flex lh-1 text-reset p-0" data-bs-toggle="dropdown" aria-label="Open user menu">
                      <span class="avatar avatar-sm" style="background-image: url({{asset('asets/no_foto.png')}})"></span>
                      <div class=" ps-2">
                        <div>{{Auth::guard('siswa')->user()->nama_siswa}}</div>
                        <div class="mt-1 small text-muted">Kelas : {{Auth::guard('siswa')->user()->kelas}}</div>
                      </div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                      <a href="#" class="dropdown-item">Tugas</a>
                      <a href="#" class="dropdown-item">Profile</a>
                      <div class="dropdown-divider"></div>
                      <a href="/proseslogout" class="dropdown-item">Logout</a>
                    </div>
                  </div>
          </h1>
          @endif
          <div class="collapse navbar-collapse" id="sidebar-menu">
            <ul class="navbar-nav pt-lg-3">
              <li class="nav-item">
                @if(empty(Auth::guard('siswa')->user()->role))
                <a class="nav-link d-xl-none d-xxl-block" href="/login" >
                    <span class="nav-link-icon d-md-none d-lg-inline-block">
                        <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-login"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M15 8v-2a2 2 0 0 0 -2 -2h-7a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h7a2 2 0 0 0 2 -2v-2" /><path d="M21 12h-13l3 -3" /><path d="M11 15l-3 -3" /></svg>
                    </span>
                    <span class="nav-link-title">
                      LOGIN
                    </span>
                  </a>
                @elseif(Auth::guard('siswa')->user()->role == 1)
                @endif

                <a class="nav-link d-xl-none d-xxl-block" href="/" >
                  <span class="nav-link-icon d-md-none d-lg-inline-block">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M5 12l-2 0l9 -9l9 9l-2 0" /><path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7" /><path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6" /></svg>
                  </span>
                  <span class="nav-link-title">
                    HOME
                  </span>
                </a>
                <a class="nav-link d-xl-none d-xxl-block" href="/materi" >
                  <span class="nav-link-icon d-md-none d-lg-inline-block">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M5 12l-2 0l9 -9l9 9l-2 0" /><path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7" /><path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6" /></svg>
                  </span>
                  <span class="nav-link-title">
                    MATERI
                  </span>
                </a>
                <hr>
                <span class="fw-bold text-success text-center" style="font-size: 1.3rem">KELAS X</span>
                <br>
                <span class="fw-bold ms-3">PREDIKSI</span>
                <a class="nav-link {{ request()-> is('10prediksi01') ? 'text-warning' : ''}}" href="/10prediksi01" >
                  <span class="nav-link-icon d-md-none d-lg-inline-block">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M5 12l-2 0l9 -9l9 9l-2 0" /><path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7" /><path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6" /></svg>
                  </span>
                  <span class="nav-link-title">
                    PREDIKSI 01 (PAS)
                  </span>
                </a>
                <a class="nav-link {{ request()-> is('10prediksi02') ? 'text-warning' : ''}}" href="/10prediksi02" >
                  <span class="nav-link-icon d-md-none d-lg-inline-block">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M5 12l-2 0l9 -9l9 9l-2 0" /><path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7" /><path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6" /></svg>
                  </span>
                  <span class="nav-link-title">
                    PREDIKSI 02 (PAS)
                  </span>
                </a>
                <br>
                <span class="fw-bold ms-3">SOAL TAHUN SEBELIUMNYA</span>
                <a class="nav-link {{ request()-> is('10patwajib2023') ? 'text-warning' : ''}}" href="/10patwajib2023" >
                  <span class="nav-link-icon d-md-none d-lg-inline-block">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M5 12l-2 0l9 -9l9 9l-2 0" /><path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7" /><path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6" /></svg>
                  </span>
                  <span class="nav-link-title">
                    PAT WAJIB 2023
                  </span>
                </a>
              </li>

            </ul>
          </div>
        </div>
      </aside>
