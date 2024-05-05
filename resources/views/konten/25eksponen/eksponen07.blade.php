@extends('konten.25eksponen.25.template')
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
            EKSPONEN - LATIHAN 07
          </h2>
          <h3>Tingkat Lanjut</h3>
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
        <form name="input-form">
             @csrf
             <ol type="1" class="mt-2">
                @include('konten.00semuamateri.identitas')
                <li>Bentuk sederhana dari \(\displaystyle \left(\frac{64x^{-5}y^7}{36x^{-3}y^5}  \right)^{-\frac{1}{2}} \) adalah...</li>
                    <input type="radio" name="soal1" value="A"/>
                    A. \(\displaystyle \frac{3x}{4y} \)
                <br />
                    <input type="radio" name="soal1" value="B"/>
                    B. \(\displaystyle \frac{x}{2y} \)
                <br />
                    <input type="radio" name="soal1" value="C"/>
                    C. \(\displaystyle \frac{4y}{3x} \)
                <br>
                    <input type="radio" name="soal1" value="D"/>
                    D. \(\displaystyle \frac{y}{x} \)
                <br />
                    <input type="radio" name="soal1" value="E"/>
                    E. \(\displaystyle \frac{y}{2x} \)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal1" aria-expanded="false" aria-controls="collapsesoal1" disabled>
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal1">
                <div class="card card-body overflow-auto">
                    <p></p>
                <b class="text-end text-danger fw-bold"> <h3>JAWABAN : </h3></b>
                </div>
                </div>
                <hr />
<!--=======================  soal2 ===================================-->
            <li>Jika \(2^x=5 \), \(5^y=4 \) dan \(4^z=3\) maka \(2^{xyz+1}=... \)</li>
                    <input type="radio" name="soal2" value="A"/>
                    A. \(3 \)
                <br />
                    <input type="radio" name="soal2" value="B"/>
                    B. \(4 \)
                <br />
                    <input type="radio" name="soal2" value="C"/>
                    C. \(5 \)
                <br>
                    <input type="radio" name="soal2" value="D"/>
                    D. \(6 \)
                <br />
                    <input type="radio" name="soal2" value="E"/>
                    E. \(10 \)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal2" aria-expanded="false" aria-controls="collapsesoal2" disabled>
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal2">
                <div class="card card-body overflow-auto">
                    <p></p>
                <b class="text-end text-danger fw-bold"> <h3>JAWABAN : </h3></b>
                </div>
                </div>
                <hr />
<!--=======================  soal3 ===================================-->
            <li>Diketahui \(a, b\) dan \(c\) adalah bilangan real positif. Jika \(\displaystyle \frac{\sqrt{bc}}{\sqrt[4]{ab^3}} = ab\), maka nilai \(c\) adalah... </li>
                    <input type="radio" name="soal3" value="A"/>
                    A. \((ab)^{5/2} \)
                <br />
                    <input type="radio" name="soal3" value="B"/>
                    B. \((ab)^{5/4} \)
                <br />
                    <input type="radio" name="soal3" value="C"/>
                    C. \((ab)^{1/4} \)
                <br>
                    <input type="radio" name="soal3" value="D"/>
                    D. \((ab)^{-3/4} \)
                <br />
                    <input type="radio" name="soal3" value="E"/>
                    E. \((ab)^{-3/2} \)
                <br>
                <p class="text-end"><b>(SBMPTN 2015, Kode 605)</b></p>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal3" aria-expanded="false" aria-controls="collapsesoal3" disabled>
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal3">
                <div class="card card-body overflow-auto">
                    <p></p>
                <b class="text-end text-danger fw-bold"> <h3>JAWABAN : </h3></b>
                </div>
                </div>
                <hr />
<!--=======================  soal4 ===================================-->
            <li>Bentuk sederhana dari \(\displaystyle \frac{12}{3\sqrt{2}-2\sqrt{3}} \) adalah...</li>
                    <input type="radio" name="soal4" value="A"/>
                    A. \(3\sqrt{2} + 2\sqrt{3} \)
                <br />
                    <input type="radio" name="soal4" value="B"/>
                    B. \(6\sqrt{2}+2\sqrt{3} \)
                <br />
                    <input type="radio" name="soal4" value="C"/>
                    C. \(6\sqrt{2}+4\sqrt{3} \)
                <br>
                    <input type="radio" name="soal4" value="D"/>
                    D. \(18\sqrt{2}+2\sqrt{3} \)
                <br />
                    <input type="radio" name="soal4" value="E"/>
                    E. \(18\sqrt{2}+12\sqrt{13} \)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal4" aria-expanded="false" aria-controls="collapsesoal4" disabled>
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal4">
                <div class="card card-body overflow-auto">
                    <p></p>
                <b class="text-end text-danger fw-bold"> <h3>JAWABAN : </h3></b>
                </div>
                </div>
                <hr />
<!--=======================  soal5 ===================================-->
            <li>Dalam bentuk pangkat rasional \(\displaystyle \sqrt[3]{x^3 \sqrt[5]{x^3 \sqrt{x^3}}}=... \)</li>
                    <input type="radio" name="soal5" value="A"/>
                    A. \(x^{13/30} \)
                <br />
                    <input type="radio" name="soal5" value="B"/>
                    B. \(x^{31/30} \)
                <br />
                    <input type="radio" name="soal5" value="C"/>
                    C. \(x^{13/30} \)
                <br>
                    <input type="radio" name="soal5" value="D"/>
                    D. \(x^{31/10} \)
                <br />
                    <input type="radio" name="soal5" value="E"/>
                    E. \(x^{39/10} \)
                <br>
                <p class="text-end fw-bold">(SBMPTN 2008, Kode 301) </p>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal5" aria-expanded="false" aria-controls="collapsesoal5" disabled>
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal5">
                <div class="card card-body overflow-auto">
                    <p></p>
                <b class="text-end text-danger fw-bold"> <h3>JAWABAN : </h3></b>
                </div>
                </div>
                <hr />
<!--=======================  soal6 ===================================-->
            <li>Penyelesaian persamaan \(\displaystyle 3^{7x+6}=\left(\frac{1}{27} \right)^{-4x+3} \)adalah...</li>
                    <input type="radio" name="soal6" value="A"/>
                    A. \(1 \)
                <br />
                    <input type="radio" name="soal6" value="B"/>
                    B. \(2 \)
                <br />
                    <input type="radio" name="soal6" value="C"/>
                    C. \(3 \)
                <br>
                    <input type="radio" name="soal6" value="D"/>
                    D. \(4 \)
                <br />
                    <input type="radio" name="soal6" value="E"/>
                    E. \(5 \)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal6" aria-expanded="false" aria-controls="collapsesoal6" disabled>
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal6">
                <div class="card card-body overflow-auto">
                    <p></p>
                <b class="text-end text-danger fw-bold"> <h3>JAWABAN : </h3></b>
                </div>
                </div>
                <hr />
<!--=======================  soal7 ===================================-->
            <li>Himpunan penyelesaian persamaan \(\displaystyle 3^{2(x+1)}+9=82.(3^x) \) adalah... </li>
                    <input type="radio" name="soal7" value="A"/>
                    A. \( \{-2,1 \} \)
                <br />
                    <input type="radio" name="soal7" value="B"/>
                    B. \(\displaystyle \{\frac{1}{9}, 9 \} \)
                <br />
                    <input type="radio" name="soal7" value="C"/>
                    C. \(\{1,2 \} \)
                <br>
                    <input type="radio" name="soal7" value="D"/>
                    D. \( \{-2,2 \}\)
                <br />
                    <input type="radio" name="soal7" value="E"/>
                    E. \(\{2,9 \} \)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal7" aria-expanded="false" aria-controls="collapsesoal7" disabled>
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal7">
                <div class="card card-body overflow-auto">
                    <p></p>
                <b class="text-end text-danger fw-bold"> <h3>JAWABAN : </h3></b>
                </div>
                </div>
                <hr />
<!--=======================  soal8 ===================================-->
            <li>Diberikan persamaan \(\displaystyle \left(\sqrt[3]{\frac{1}{243}} \right)^{3x} = \left(\frac{3}{3^{x-2}} \right)^2 \cdot \left(\frac{1}{27} \right) \). Jika \(x_0\) memenuhi persamaan, maka nilai \(5+2x_0=... \) </li>
                    <input type="radio" name="soal8" value="A"/>
                    A. \(6 \)
                <br />
                    <input type="radio" name="soal8" value="B"/>
                    B. \(5 \)
                <br />
                    <input type="radio" name="soal8" value="C"/>
                    C. \(4 \)
                <br>
                    <input type="radio" name="soal8" value="D"/>
                    D. \(3 \)
                <br />
                    <input type="radio" name="soal8" value="E"/>
                    E. \(2 \)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal8" aria-expanded="false" aria-controls="collapsesoal8" disabled>
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal8">
                <div class="card card-body overflow-auto">
                    <p></p>
                <b class="text-end text-danger fw-bold"> <h3>JAWABAN : </h3></b>
                </div>
                </div>
                <hr />
<!--=======================  soal9 ===================================-->
            <li>Bila \(\displaystyle \frac{4}{5}(2^{3x-2}) + \frac{8^x}{20} =1\), maka nilai \(x\) sama dengan ... </li>
                    <input type="radio" name="soal9" value="A"/>
                    A. \(\displaystyle -\frac{3}{2} \)
                <br />
                    <input type="radio" name="soal9" value="B"/>
                    B. \(\displaystyle -\frac{2}{3} \)
                <br />
                    <input type="radio" name="soal9" value="C"/>
                    C. \(\displaystyle -\frac{2}{3} \)
                <br>
                    <input type="radio" name="soal9" value="D"/>
                    D. \(\displaystyle \frac{3}{2} \)
                <br />
                    <input type="radio" name="soal9" value="E"/>
                    E. \(1 \)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal9" aria-expanded="false" aria-controls="collapsesoal9" disabled>
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal9">
                <div class="card card-body overflow-auto">
                    <p></p>
                <b class="text-end text-danger fw-bold"> <h3>JAWABAN : </h3></b>
                </div>
                </div>
                <hr />
<!--=======================  soal10 ===================================-->
            <li>Akar-akar persamaan \(2^x + 2^{3-x} =9\) adalah \(\alpha\) dan \(\beta\). Nilai \(\alpha + \beta =...\) </li>
                    <input type="radio" name="soal10" value="A"/>
                    A. \(3 \)
                <br />
                    <input type="radio" name="soal10" value="B"/>
                    B. \(4 \)
                <br />
                    <input type="radio" name="soal10" value="C"/>
                    C. \(6 \)
                <br>
                    <input type="radio" name="soal10" value="D"/>
                    D. \(8 \)
                <br />
                    <input type="radio" name="soal10" value="E"/>
                    E. \(9 \)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal10" aria-expanded="false" aria-controls="collapsesoal10" disabled>
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal10">
                <div class="card card-body overflow-auto">
                    <p></p>
                <b class="text-end text-danger fw-bold"> <h3>JAWABAN : </h3></b>
                </div>
                </div>
                <hr />
<!--=======================  soal11 ===================================-->
            <li>Diketahui \(f(x)=3^{2x}+3^{3-2x} \). Bila \(f(a)=f(b)=12 \), maka \(a+b=...\)</li>
                    <input type="radio" name="soal11" value="A"/>
                    A. \(-2 \)
                <br />
                    <input type="radio" name="soal11" value="B"/>
                    B. \(-1 \)
                <br />
                    <input type="radio" name="soal11" value="C"/>
                    C. \(\displaystyle \frac{1}{2} \)
                <br>
                    <input type="radio" name="soal11" value="D"/>
                    D. \(\displaystyle 1\frac{1}{2} \)
                <br />
                    <input type="radio" name="soal11" value="E"/>
                    E. \(3 \)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal11" aria-expanded="false" aria-controls="collapsesoal11" disabled>
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal11">
                <div class="card card-body overflow-auto">
                    <p></p>
                <b class="text-end text-danger fw-bold"> <h3>JAWABAN : </h3></b>
                </div>
                </div>
                <hr />
<!--=======================  soal12 ===================================-->
            <li>Jika \(A^{2x}=2 \), maka \(\displaystyle \frac{A^{5x}-A^{-5x}}{A^{3x}+A^{-3x}} =...\)</li>
                    <input type="radio" name="soal12" value="A"/>
                    A. \(\displaystyle \frac{31}{18} \)
                <br />
                    <input type="radio" name="soal12" value="B"/>
                    B. \(\displaystyle \frac{31}{9} \)
                <br />
                    <input type="radio" name="soal12" value="C"/>
                    C. \(\displaystyle \frac{32}{18} \)
                <br>
                    <input type="radio" name="soal12" value="D"/>
                    D. \(\displaystyle \frac{33}{9} \)
                <br />
                    <input type="radio" name="soal12" value="E"/>
                    E. \(\displaystyle \frac{33}{18} \)
                <br>
                <p class="text-end fw-bold" >(SBMPTN 2016, Kode 342)</p>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal12" aria-expanded="false" aria-controls="collapsesoal12" disabled>
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal12">
                <div class="card card-body overflow-auto">
                    <p></p>
                <b class="text-end text-danger fw-bold"> <h3>JAWABAN : </h3></b>
                </div>
                </div>
                <hr />
<!--=======================  soal13 ===================================-->
            <li>Jika \(f(x)=5^{x-1} \), maka \(f(2a+b)=... \)</li>
                    <input type="radio" name="soal13" value="A"/>
                    A. \(f(2a) \cdot f(b) \)
                <br />
                    <input type="radio" name="soal13" value="B"/>
                    B. \(f(2a) \cdot f^2(b) \)
                <br />
                    <input type="radio" name="soal13" value="C"/>
                    C. \([f(a)]^2 \cdot f^(b) \)
                <br>
                    <input type="radio" name="soal13" value="D"/>
                    D. \(5 [f(a)]^2 \cdot f(b) \)
                <br />
                    <input type="radio" name="soal13" value="E"/>
                    E. \(25[f(a)]^2 \cdot f(b) \)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal13" aria-expanded="false" aria-controls="collapsesoal13" disabled>
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal13">
                <div class="card card-body overflow-auto">
                    <p></p>
                <b class="text-end text-danger fw-bold"> <h3>JAWABAN : </h3></b>
                </div>
                </div>
                <hr />
<!--=======================  soal14 ===================================-->
            <li>Nilai \(x\) yang memenuhi persamaan \(3^{2x+1} + 9 = 28(3^x)  \) adalah . . .</li>
                    <input type="radio" name="soal14" value="A"/>
                    A. \(\{-1,2 \} \)
                <br />
                    <input type="radio" name="soal14" value="B"/>
                    B. \(\displaystyle \{\frac{1}{9},3 \} \)
                <br />
                    <input type="radio" name="soal14" value="C"/>
                    C. \(\displaystyle \{\frac{1}{9}, \frac{1}{3} \} \)
                <br>
                    <input type="radio" name="soal14" value="D"/>
                    D. \(\displaystyle \{\frac{1}{3}, 9 \} \)
                <br />
                    <input type="radio" name="soal14" value="E"/>
                    E. \(\{3,9 \} \)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal14" aria-expanded="false" aria-controls="collapsesoal14" disabled>
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal14">
                <div class="card card-body overflow-auto">
                    <p></p>
                <b class="text-end text-danger fw-bold"> <h3>JAWABAN : </h3></b>
                </div>
                </div>
                <hr />
<!--=======================  soal15 ===================================-->
            <li>Grafik \(\displaystyle y=3^{x+1}-\left(\frac{1}{9} \right)^x \) berada dibawah grafik \(y=3^x + 1\) jika . . .</li>
                    <input type="radio" name="soal15" value="A"/>
                    A. \(0 < x < 1 \)
                <br />
                    <input type="radio" name="soal15" value="B"/>
                    B. \(x > 0 \)
                <br />
                    <input type="radio" name="soal15" value="C"/>
                    C. \(x < 0 \)
                <br>
                    <input type="radio" name="soal15" value="D"/>
                    D. \(x > 3 \)
                <br />
                    <input type="radio" name="soal15" value="E"/>
                    E. \(-1 < x < 3 \)
                <br>
                <p class="text-end fw-bold">(SBMPTN 2016, Kode 237)</p>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal15" aria-expanded="false" aria-controls="collapsesoal15" disabled>
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal15">
                <div class="card card-body overflow-auto">
                    <p></p>
                <b class="text-end text-danger fw-bold"> <h3>JAWABAN : </h3></b>
                </div>
                </div>
                <hr />
            </ol>

{{-- COPY DARI SINI SETIAP SOAL --}}
<input type="hidden" id="materi" name="materi" value="eksponen07">
{{-- TOMBOL KIRIM --}}

@if(empty(Auth::guard('siswa')->user()->role))
<h2 class="text-red text-center">Silahkan Login Untuk mengirim jawaban, Terimakasih</h2>
@elseif(Auth::guard('siswa')->user()->role == 1)
            @if($progress == 0)
            <input type="hidden" id="nama" name="nama" value="{{Auth::guard('siswa')->user()->nama_siswa}}">
            <input type="hidden" id="kelas" name="kelas" value="{{Auth::guard('siswa')->user()->kelas}}">
            <input type="hidden" id="absen" name="absen" value="{{Auth::guard('siswa')->user()->no_absen}}">

            <div class="alert alert-success alert-dismissible fade show d-none my-alert text-center" role="alert" style="font-size: 1.5rem">
                <strong>Terima kasih, Lanjutkan dengan menyimpan Jawaban.</strong>
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
    <a href="/create_eksponen07" id="kirimsaja" class="btn btn-warning btn-bukti d-none" >SIMPAN JAWABAN</a>
</div>
</form>
{{-- COPY SAMPAI SINI --}}

<div id="disqus_thread" class="mt-4"></div>

</div>
</div>
</div>
</section>
@endsection

