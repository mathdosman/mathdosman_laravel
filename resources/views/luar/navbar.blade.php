    <!-- navbar start -->
    <nav class="navbar navbar-expand-lg navbar-dark shadow fixed-top" style="background: #182433">
        <div class="container">
          <img src="asets/logonew.png" alt="logo" width="55" height="55" class="rounded-circle" />
          <a class="navbar-brand ms-1 fw-bold" href="#home" style="font-family: 'Tangerine', cursive; font-size: 2.3rem;">Math_Dosman</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item"><a class="nav-link active {{ request()-> is('/') ? 'text-warning' : ''}}" aria-current="page" href="/">Home</a></li>

              <!-- <li class="nav-item"><a class="nav-link active" aria-current="page" href="/absen/index.html">Absen</a></li> -->
              <li class="nav-item"><a class="nav-link active {{ request()-> is('materi') ? 'text-warning' : ''}}" aria-current="page" href="/materi">Materi</a></li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle {{ request()-> is('materi','login') ? 'd-none' : ''}}" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"> Menu </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li>
                    <a class="dropdown-item" href="#about">About</a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="#materi">Materi</a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="#kontak">Kontak</a>
                  </li>
                </ul>
              </li>
              @if (empty(Auth::guard('siswa')->user()->role))
              <li class="nav-item"><a class="nav-link active {{ request()-> is('login') ? 'text-warning' : ''}}" aria-current="page" href="/login">Login</a></li>
              @elseif (Auth::guard('siswa')->user()->role == 1)
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-light fw-bold" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="true">{{Auth::guard('siswa')->user()->nama_siswa}} </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="/proseslogout">Logout</a></li>
                </ul>
              </li>
              @endif

            </ul>
          </div>
        </div>
      </nav>
      <!-- navbar end -->
