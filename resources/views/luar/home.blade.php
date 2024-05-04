@extends('luar.layoutsluar')
@section('content')
<!-- jumbotron start -->
<section class="jumbotron text-center" style="background-color: #e2edff">

    <div>
        @php
        $messagesuccess=Session::get('success');
        $messageerror=Session::get('error');
    @endphp
    @if(Session::get('success'))
        <div class="alert alert-success">
            {{$messagesuccess}}
        </div>
    @endif
    @if(Session::get('error'))
        <div class="alert alert-danger">
            {{$messageerror}}
        </div>
    @endif
    </div>
    <img src="{{asset('asets/pi.png')}}" alt="Dosman" width="200" class="rounded-circle img-thumbnail bg-dark" style="margin-top: 105px" />
    <h1 class="display-4 fw-bold" >mathdosman.com</h1>
    <p class="lead fst-italic" style="font-family: 'Tangerine', cursive; font-size: 2.4rem;"></p>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
      <path
        fill="#ffffff"
        fill-opacity="1"
        d="M0,288L48,277.3C96,267,192,245,288,224C384,203,480,181,576,192C672,203,768,245,864,266.7C960,288,1056,288,1152,266.7C1248,245,1344,203,1392,181.3L1440,160L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"
      ></path>
    </svg>
  </section>
  <!-- jumbotron end -->

  <!----------------------------------- Materi ---------------------------------------------------------------------->
  <section id="materi">
    <h2 class="text-center">CAKUPAN MATERI</h2>
    <h5 class="text-center opacity-25 text-muted"><small> geser kekiri atau kekanan untuk mencari materi yang diinginkan</small></h5>
    <br />
    <div class="center" style="background-color: #ffffff">
      <div class="container">
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="row">
                <div class="col-lg-4">
                  <img src="{{asset('asets/10programlinear.png')}}" class="d-block w-100 border" alt="a" />
                </div>
                <div class="col-lg-4">
                  <a href="/daftarisimateri.html"> <img src="{{asset('asets/9matriks.png')}}" class="d-block w-100 border" alt="a" /></a>
                </div>
                <div class="col-lg-4">
                  <a href="/daftarisimateri.html">
                  <img src="{{asset('asets/4relasidanfungsi.png')}}" class="d-block w-100 border" alt="a" /></a>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="row">
                <div class="col-lg-4">
                  <a href="/daftarisimateri.html"> <img src="{{asset('asets/8limitfungsialjabar.png')}}" class="d-block w-100 border" alt="b" /></a>
                </div>
                <div class="col-lg-4">
                  <a href="/daftarisimateri.html">
                  <img src="{{asset('asets/3sistempersamaanlinear.png')}}" class="d-block w-100 border" alt="b" /></a>
                </div>
                <div class="col-lg-4">
                  <a href="/daftarisimateri.html">
                  <img src="{{asset('asets/turunan.png')}}" class="d-block w-100 border" alt="b" /></a>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="row">
                <div class="col-lg-4">
                  <a href="/daftarisimateri.html">
                    <img src="{{asset('asets/7barisandanderet.png')}}" class="d-block w-100 border" alt="c" />
                  </a>
                </div>
                <div class="col-lg-4">

                  <img src="{{asset('asets/5persamaangarislurus.png')}}" class="d-block w-100 border" alt="c" /></a>
                </div>
                <div class="col-lg-4">
                  <a href="/daftarisimateri.html"> <img src="{{asset('asets/6vektor.png')}}" class="d-block w-100 border" alt="c" /></a>
                </div>
              </div>
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
      <path
        fill="#e2edff"
        fill-opacity="1"
        d="M0,224L80,202.7C160,181,320,139,480,138.7C640,139,800,181,960,181.3C1120,181,1280,139,1360,117.3L1440,96L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z"
      ></path>
    </svg>
  </section>
  <!-- end materi -->

  <!-- About -->
  <section id="about" style="background-color: #e2edff">
    <div class="container">
      <div class="row">
        <div class="col text-center mb-3">
          <h2>About Me</h2>
        </div>
      </div>
      <div class="row justify-content-center fs-5">
        <div class="col-md-4 mb-3" data-aos="fade-down" data-aos-duration="1000">
          <p class="justify">Saya adalah seorang guru Matematika yang mulai mengajar sejak tahun 2015 di SMA Negeri 1 Gianyar.</p>
        </div>
        <div class="col-md-4" data-aos="fade-down" data-aos-duration="1000">
          <p class="justify">Menempuh pendidikan Sarjana di Universitas Pendidikan Ganesha untuk mendapat gelar S.Pd. dan lulus pada tahun 2014.</p>
        </div>
      </div>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
      <path
        fill="#ffffff"
        fill-opacity="1"
        d="M0,96L60,112C120,128,240,160,360,165.3C480,171,600,149,720,138.7C840,128,960,128,1080,133.3C1200,139,1320,149,1380,154.7L1440,160L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"
      ></path>
    </svg>
  </section>
  <!-- About end -->

  <!-- kontak start -->
  <section id="kontak">
      <div class="container">
        <div id="disqus_thread"></div>
      <div class="row mb-3">
        <div class="col text-center">
          <h2>Kontak Saya</h2>
          <h3>kritik dan saran sangat diharapkan.</h3>
        </div>
      </div>
      <button class="btn list-group-item list-group-item-action text-center" type="button" data-bs-toggle="collapse" data-bs-target="#collapsekontak" aria-expanded="false" aria-controls="collapsekontak">
        Kirim Pesan Secara Pribadi
      </button>
      <div class="collapse" id="collapsekontak">
        <div class="card card-body">
          <ul class="list-group">
            <div class="row justify-content-center">
              <div class="col-md-6">
                <div class="alert alert-success alert-dismissible fade show d-none my-alert" role="alert">
                  <strong>Terima kasih</strong> Pesan Anda telah dikirim dan disimpan.
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                <form name="wpu-cantact-form">
                  <div class="mb-3">
                    <label for="name" class="form-label">Nama Lengkap</label>
                    <input type="text" class="form-control" id="name" aria-describedby="name" name="nama" />
                  </div>
                  <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" />
                  </div>
                  <div class="mb-3">
                    <label for="pesan" class="form-label">Pesan dan Kritik</label>
                    <textarea class="form-control" id="pesan" rows="3" name="pesan"></textarea>
                  </div>
                  <button type="submit" class="btn btn-primary btn-kirim">KIRIM</button>
                  <button class="btn btn-primary btn-loading d-none" type="button" disabled>
                    <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                    Loading...
                  </button>
                </form>
              </div>
            </div>
          </ul>
        </div>
      </div>

    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
      <path
        fill="#182433"
        fill-opacity="1"
        d="M0,128L48,138.7C96,149,192,171,288,186.7C384,203,480,213,576,202.7C672,192,768,160,864,149.3C960,139,1056,149,1152,144C1248,139,1344,117,1392,106.7L1440,96L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"
      ></path>
    </svg>
  </section>
  <!-- kontak end -->

  @endsection
