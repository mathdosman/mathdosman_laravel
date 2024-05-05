@extends('konten.26logartima.26.template')
@section('content')

<div class="page-header d-print-none">
    <div class="container-xl">
      <div class="row g-2 align-items-center">
        <div class="col">
          <!-- Page pre-title -->
          <div class="page-pretitle" style="margin-top:50px">
            mathdosman.com
          </div>
          <h2 class="page-title">
            Latihan definisi dan sifat logaritma
          </h2>
        </div>
      </div>
    </div>
  </div>
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

<!-- START FORM KUIS -->
<section >
    <div class="container p-2">
        <div class="row justify-content-center">
            <div class="col-md-9 p-2">
            <p class="text-center fst-italic"> Math_Dosman</p>
            <h2 class="text-center">Persamaan Logaritma</h2>
            <p>Persamaan Logaritma memiliki berbagai bentuk dari yang paling sederhana sampai paling kompleks. Persamaan Logartima akan kita jumpai paling banyak pada soal-soal seleksi masuk perguruan tinggi. Salah satu cara terbaik untuk mengatasi kesulitan menjawab adalah dengan latihan mengerjakan soal-soal yang setingkat, maka kita pasti akan bisa mengerjakannya. Satu hal penting yang harus diingat adalah semua akar-akar dari penyelesaian persamaan logaritma harus memenuhi semua syarat logaritma yang ada, ini berarti belum tentu semua kar-akar yang kita peroleh adalah sebagai solusi persamaannya.</p>
            <h5 class="text-primary fw-bold">Konsep Persamaan Logaritma</h5>
            <div class="border p-1" style="background-color: #7bbffa;">
                <p class="border p-1" style="background-color: rgb(221, 225, 225);">Persamaan Logaritma Berbentuk \(^a \log f(x)=b\)</p>
                <p>Jika \(a \gt 0\) dan \(a \neq 1\), maka persamaan logaritma \(^a \log f(x)=b \), ekuivalen dengan \(f(x)=a^b \) </p>
            </div>
            <div class="border p-1" style="background-color: #7bbffa;">
                <p class="border p-1" style="background-color: rgb(221, 225, 225);">Persamaan Logaritma Berbentuk \(^a \log f(x)=\; ^a\log b\)</p>
                <p>Jika \(a \gt 0\) dan \(a \neq 1\) serta \(b \gt 0\), maka persamaan logaritma \(^a \log f(x)=^a \log b \), ekuivalen dengan \(f(x)=b \) </p>
            </div>
            <div class="border p-1" style="background-color: #7bbffa;">
                <p class="border p-1" style="background-color: rgb(221, 225, 225);">Persamaan Logaritma Berbentuk \(^a \log f(x)\pm \; ^a\log g(x) = b\)</p>
                <p>Bentuklah logaritma tunggal di ruas kiri dengan menggunakan sifat logaritma bahwa </p>
                \[^a \log b + \; ^a \log c = \;^a \log bc \]
                \[^a \log b - \; ^a \log c = \;^a \log \frac{b}{c} \]
                <p>Dengan demikian, kita akan memperoleh bahwa pada persamaan \(^a \log f(x) + \; ^a\log g(x) = b \) berlaku</p>
                \begin{align}^a \log [f(x) \cdot g(x)] &= b \\ f(x) \cdot g(x) &= a^b \end{align}
                <p>Demikian juga untuk persamaan \(^a \log f(x) - \; ^a\log g(x) = b\) berlaku</p>
                \begin{align}^a \log \left(\frac{f(x)}{g(x)}\right) &= b \\ \frac{f(x)}{g(x)} &= a^b \end{align}
                <p>Perlu diperhatikan bahwa nilai \(x\) yang diperoleh nanti harus memenuhi syarat numerus. Setiap numerus yang memuat variabel \(x\) harus bernilai positif. artinya \(f(x) \gt 0 \) begitu juga dengan \(g(x) \gt 0 \)</p>
            </div>
            <div class="border p-1" style="background-color: #7bbffa;">
                <p class="border p-1" style="background-color: rgb(221, 225, 225);">Persamaan Logaritma Berbentuk \(^{f(x)} \log h(x)=\; ^{g(x)}\log h(x)\)</p>
                <p><b>Kasus 1 : Kesamaan numerus, Ambil Basisnya</b> <br> diperoleh bahwa \(f(x) = g(x) \)</p>
                <p><b>Kasus 2 : Numerus = 1</b> <br> Penyelesaian dicari ketika \(h(x)= 1 \) dengan syarat substitusi \(x\) yang diperoleh memnuhi syarat basis, yaitu harus positif dan tidak sama dengan \(1\). \(f(x),g(x) \gt 0 \) dan \(f(x), g(x) \neq 0 \).</p>
            </div>
            <!-- ============================================================================== -->
            <div class="badge bg-danger text-wrap fs-6" style="width: 8rem"><b> CONTOH 01 </b></div>
            <div class="rounded-2 p-1" style="background-color: rgba(193, 193, 193, 0.933);">Soal</div>
            <p class="rounded-2 p-1" style="background-color: #f89845;"><b>Penyelesaian :</b> <br>
            \(\begin{align} \end{align}\) <br>
            Jadi, nilainya adalah \(\boxed{25}\)
            </p>
            <!-- ============================================================================== -->


            <h1 class="text-center text-primary">SOAL LATIHAN</h1>

        <form name="input-form">
             @csrf
             <ol type="1" class="mt-2">
                @include('konten.00semuamateri.identitas')
                <li>Nilai \(x\) yang memenuhi \(^3 \log (x+5)=2\) adalah . . .</li>
                    <input type="radio" name="soal1" value="A"/>
                    A. \(2 \)
                <br />
                    <input type="radio" name="soal1" value="B"/>
                    B. \(3 \)
                <br />
                    <input type="radio" name="soal1" value="C"/>
                    C. \(4 \)
                <br>
                    <input type="radio" name="soal1" value="D"/>
                    D. \(5 \)
                <br />
                    <input type="radio" name="soal1" value="E"/>
                    E. \(6 \)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal1" aria-expanded="false" aria-controls="collapsesoal1" disabled>
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal1">
                <div class="card card-body overflow-auto">
                    <p></p>
                <b class="text-end text-danger fw-bold"> <h3>JAWABAN : C</h3></b>
                </div>
                </div>
                <hr />

<!--=======================  soal2 ===================================-->
            <li>Nilai \(x\) yang memenuhi \(^7 \log (x^2 -3x +21)=2\) adalah . . .</li>
                    <input type="radio" name="soal2" value="A"/>
                    A. \(7 \)
                <br />
                    <input type="radio" name="soal2" value="B"/>
                    B. \(-3 \)
                <br />
                    <input type="radio" name="soal2" value="C"/>
                    C. \(3 \)
                <br>
                    <input type="radio" name="soal2" value="D"/>
                    D. \(-7 \)
                <br />
                    <input type="radio" name="soal2" value="E"/>
                    E. \(7 \text{ dan } -3 \)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal2" aria-expanded="false" aria-controls="collapsesoal2" disabled>
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal2">
                <div class="card card-body overflow-auto">
                    <p></p>
                <b class="text-end text-danger fw-bold"> <h3>JAWABAN : E</h3></b>
                </div>
                </div>
                <hr />

<!--=======================  soal3 ===================================-->
            <li>Nilai \(x\) yang memenuhi \(^2 \log (x+9)=5\) adalah . . .</li>
                    <input type="radio" name="soal3" value="A"/>
                    A. \(23 \)
                <br />
                    <input type="radio" name="soal3" value="B"/>
                    B. \(24 \)
                <br />
                    <input type="radio" name="soal3" value="C"/>
                    C. \(25 \)
                <br>
                    <input type="radio" name="soal3" value="D"/>
                    D. \(26 \)
                <br />
                    <input type="radio" name="soal3" value="E"/>
                    E. \(27 \)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal3" aria-expanded="false" aria-controls="collapsesoal3" disabled>
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal3">
                <div class="card card-body overflow-auto">
                    <p></p>
                <b class="text-end text-danger fw-bold"> <h3>JAWABAN : A</h3></b>
                </div>
                </div>
                <hr />

<!--=======================  soal4 ===================================-->
            <li>Nilai \(x\) yang memenuhi \(^3 \log (3x+6)=\; ^3 \log 9\) adalah . . .</li>
                    <input type="radio" name="soal4" value="A"/>
                    A. \(-2 \)
                <br />
                    <input type="radio" name="soal4" value="B"/>
                    B. \(-1 \)
                <br />
                    <input type="radio" name="soal4" value="C"/>
                    C. \(0 \)
                <br>
                    <input type="radio" name="soal4" value="D"/>
                    D. \( 1\)
                <br />
                    <input type="radio" name="soal4" value="E"/>
                    E. \(2 \)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal4" aria-expanded="false" aria-controls="collapsesoal4" disabled>
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal4">
                <div class="card card-body overflow-auto">
                    <p></p>
                <b class="text-end text-danger fw-bold"> <h3>JAWABAN : D</h3></b>
                </div>
                </div>
                <hr />

<!--=======================  soal5 ===================================-->
            <li>Nilai \(x\) yang memenuhi \(^5 \log (x+3)= ^5 \log(3x-1)\) adalah . . .</li>
                    <input type="radio" name="soal5" value="A"/>
                    A. \(-2 \)
                <br />
                    <input type="radio" name="soal5" value="B"/>
                    B. \(-1 \)
                <br />
                    <input type="radio" name="soal5" value="C"/>
                    C. \(0 \)
                <br>
                    <input type="radio" name="soal5" value="D"/>
                    D. \(1 \)
                <br />
                    <input type="radio" name="soal5" value="E"/>
                    E. \(2 \)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal5" aria-expanded="false" aria-controls="collapsesoal5" disabled>
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal5">
                <div class="card card-body overflow-auto">
                    <p></p>
                <b class="text-end text-danger fw-bold"> <h3>JAWABAN : E</h3></b>
                </div>
                </div>
                <hr />

<!--=======================  soal6 ===================================-->
            <li>Nilai \(x\) yang memenuhi \( \log (x^2 -2x -15)= \log(x+3)\) adalah . . .</li>
                    <input type="radio" name="soal6" value="A"/>
                    A. \(-3 \)
                <br />
                    <input type="radio" name="soal6" value="B"/>
                    B. \(-1 \)
                <br />
                    <input type="radio" name="soal6" value="C"/>
                    C. \(3 \)
                <br>
                    <input type="radio" name="soal6" value="D"/>
                    D. \(6 \)
                <br />
                    <input type="radio" name="soal6" value="E"/>
                    E. \(9 \)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal6" aria-expanded="false" aria-controls="collapsesoal6" disabled>
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal6">
                <div class="card card-body overflow-auto">
                    <p></p>
                <b class="text-end text-danger fw-bold"> <h3>JAWABAN : D</h3></b>
                </div>
                </div>
                <hr />

<!--=======================  soal7 ===================================-->
            <li>Nilai \(x\) yang memenuhi \(^3 \log (x-1)-1=\; ^3\log 2\) adalah . . .</li>
                    <input type="radio" name="soal7" value="A"/>
                    A. \(6 \)
                <br />
                    <input type="radio" name="soal7" value="B"/>
                    B. \(7 \)
                <br />
                    <input type="radio" name="soal7" value="C"/>
                    C. \(8 \)
                <br>
                    <input type="radio" name="soal7" value="D"/>
                    D. \(9 \)
                <br />
                    <input type="radio" name="soal7" value="E"/>
                    E. \(10 \)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal7" aria-expanded="false" aria-controls="collapsesoal7" disabled>
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal7">
                <div class="card card-body overflow-auto">
                    <p></p>
                <b class="text-end text-danger fw-bold"> <h3>JAWABAN : B</h3></b>
                </div>
                </div>
                <hr />

<!--=======================  soal8 ===================================-->
            <li>Salah satu penyelesaian persamaan \(^3 \log^2 x - \; ^3 \log x^3 - 4 = 0 \) adalah . . .</li>
                    <input type="radio" name="soal8" value="A"/>
                    A. \(\displaystyle \frac{1}{3} \)
                <br />
                    <input type="radio" name="soal8" value="B"/>
                    B. \(\displaystyle \frac{1}{2} \)
                <br />
                    <input type="radio" name="soal8" value="C"/>
                    C. \(3 \)
                <br>
                    <input type="radio" name="soal8" value="D"/>
                    D. \(2 \)
                <br />
                    <input type="radio" name="soal8" value="E"/>
                    E. \(-2 \)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal8" aria-expanded="false" aria-controls="collapsesoal8" disabled>
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal8">
                <div class="card card-body overflow-auto">
                    <p></p>
                <b class="text-end text-danger fw-bold"> <h3>JAWABAN : A</h3></b>
                </div>
                </div>
                <hr />

<!--=======================  soal9 ===================================-->
            <li>Persamaan \(^x \log 2 + \;^x \log (3x-4)=2 \) mempunyai dua penyelesaian, yaitu \(x_1\) dan \(x_2\). Harga \(x_1 + x_2=...\)</li>
                    <input type="radio" name="soal9" value="A"/>
                    A. \(8 \)
                <br />
                    <input type="radio" name="soal9" value="B"/>
                    B. \(6 \)
                <br />
                    <input type="radio" name="soal9" value="C"/>
                    C. \(4 \)
                <br>
                    <input type="radio" name="soal9" value="D"/>
                    D. \(3 \)
                <br />
                    <input type="radio" name="soal9" value="E"/>
                    E. \(2 \)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal9" aria-expanded="false" aria-controls="collapsesoal9" disabled>
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal9">
                <div class="card card-body overflow-auto">
                    <p></p>
                <b class="text-end text-danger fw-bold"> <h3>JAWABAN : B</h3></b>
                </div>
                </div>
                <hr />

<!--=======================  soal10 ===================================-->
            <li>Jika \(x \neq 1\) dan \(x \gt 0\), maka nilai \(x\) yang memenuhi persamaan \(^x \log (x+12) -3 \cdot \;^x \log 4 + 1 =0 \) adalah. . .</li>
                    <input type="radio" name="soal10" value="A"/>
                    A. \(\displaystyle \frac{1}{2} \)
                <br />
                    <input type="radio" name="soal10" value="B"/>
                    B. \(2 \)
                <br />
                    <input type="radio" name="soal10" value="C"/>
                    C. \(4 \)
                <br>
                    <input type="radio" name="soal10" value="D"/>
                    D. \(8 \)
                <br />
                    <input type="radio" name="soal10" value="E"/>
                    E. \(16 \)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal10" aria-expanded="false" aria-controls="collapsesoal10" disabled>
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal10">
                <div class="card card-body overflow-auto">
                    <p></p>
                <b class="text-end text-danger fw-bold"> <h3>JAWABAN : C</h3></b>
                </div>
                </div>
                <hr />
            </ol>

{{-- COPY DARI SINI SETIAP SOAL --}}
{{-- TOMBOL KIRIM --}}
<input type="hidden" id="materi" name="materi" value="logaritma02">

@if(empty(Auth::guard('siswa')->user()->role))
<h2 class="text-red text-center">Silahkan Login Untuk mengirim jawaban, Terimakasih</h2>
@elseif(Auth::guard('siswa')->user()->role == 1)
            @if($progress == 0)
            <input type="hidden" id="nama" name="nama" value="{{Auth::guard('siswa')->user()->nama_siswa}}">
            <input type="hidden" id="kelas" name="kelas" value="{{Auth::guard('siswa')->user()->kelas}}">
            <input type="hidden" id="absen" name="absen" value="{{Auth::guard('siswa')->user()->no_absen}}">

            <div class="alert alert-success alert-dismissible fade show d-none my-alert text-center" role="alert" style="font-size: 1.5rem">
                <strong>Terima kasih</strong> Lanjutkan dengan menyimpan Jawaban.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <div class="row justify-content-center text-center">
                <div class="col">
                    <button type="submit" class="btn btn-primary btn-kirim m-4" onclick="kirim()">REQUEST TOKEN</button>
                    <button class="btn btn-primary btn-loading d-none" type="button" disabled>
                        <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                        Loading...
                    </button>
                </div>
            </div>
            @elseif ($progress == 1)
            <div class="row"><p class="text-center text-danger" style="font-size: 1.5rem">Anda Sudah Mengumpulkan Jawaban</p></div>
            @endif
@endif
{{-- END TOMBOL KIRIM --}}
<div class="row text-center">
    <a href="/create_logaritma02" id="kirimsaja" class="btn btn-warning btn-bukti d-none" >SIMPAN JAWABAN</a>
</div>
</form>
{{-- COPY SAMPAI SINI --}}

<div id="disqus_thread" class="mt-4"></div>

</div>
</div>
</div>
</section>
@endsection

