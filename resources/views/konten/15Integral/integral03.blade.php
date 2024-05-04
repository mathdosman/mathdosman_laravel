@extends('konten.15Integral.15.template')
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
            Integral - Latihan 03 + Pembahasan
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
        <form name="input-form">
             <ol type="1" class="mt-2">
                @include('konten.00semuamateri.identitas')
                <li>Anti turunan dari \( f(x) =10x\sqrt{x} \) adalah . . . </li>
                <ol type="A">
                    <li> \(F(x) = 15 \sqrt{x} +c \)</li>
                    <li>\(F(x) = 8 \sqrt{x} +c \)</li>
                    <li>\(F(x) = 5 x^2 \sqrt{x} +c \)</li>
                    <li>\(F(x) = 4 x^2 \sqrt{x} +c \)</li>
                    <li>\(\displaystyle F(x) = \frac{10}{3} x^2 \sqrt{x} +c \)</li>

                </ol>
                <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal1" aria-expanded="false" aria-controls="collapsesoal1">
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal1">
                    <div class="card card-body overflow-auto">
                        <p>\(\displaystyle \begin{align}
                            \int 10x \sqrt{x} \; dx &= 10 \int x. x^{\frac{1}{2}} \: dx \\
                            &= 10 \int x^{1+\frac{1}{2}} \; dx \\
                            &= 10 \int x^{\frac{3}{2}} \; dx \\
                            &= 10 \frac{1}{\frac{3}{2}+1} x^{\frac{3}{2}+1}+c \\
                            &= 10 \frac{1}{\frac{5}{2}} x^{\frac{5}{2}}+c \\
                            &= 10 \frac{2}{5} x^{\frac{5}{2}} + c \\
                            &= 4 x^{\frac{4}{2}} x^{\frac{1}{2}} + c \\
                            &= 4 x^{2} \sqrt{x} + c \\

                            \end{align}\)</p>
                    <b class="text-end text-danger fw-bold"> <h3>JAWABAN : D</h3></b>
                    </div>
                </div>
                <hr />
<!-- SOAL end -->
<!--=======================  soal2 ===================================-->
            <li>Hasil dari \( \displaystyle \int \frac{x\sqrt{x}}{x^3}  dx = . . .\)</li>
                <ol type="A">
                    <li>\( \displaystyle \frac{2}{\sqrt{x}} + c\)</li>
                    <li>\( \displaystyle \frac{1}{\sqrt{x}} + c\)</li>
                    <li>\(\displaystyle -\frac{1}{\sqrt{x}} + c\)</li>
                    <li>\(\displaystyle -\frac{2}{\sqrt{x}} + c\)</li>
                    <li>\( \displaystyle -\frac{2}{5x^2\sqrt{x}} + c\)</li>

                </ol>
                <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal2" aria-expanded="false" aria-controls="collapsesoal2">
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal2">
                    <div class="card card-body overflow-auto">
                        <p>\(\displaystyle \begin{align}
                            \int \frac{x\sqrt{x}}{x^3} &= \int x^{\frac{3}{2}-3} \; dx \\
                            &= \int x^{-\frac{3}{2}} \; dx \\
                            &= \frac{1}{-\frac{3}{2}+1} x^{-\frac{3}{2} + 1} +c \\
                            &= \frac{1}{-\frac{1}{2}} x^{-\frac{1}{2}} + c \\
                            &= -2 \frac{1}{\sqrt{x}}+c \\
                            &= -\frac{2}{\sqrt{x}} + c
                            \end{align}\)</p>
                    <b class="text-end text-danger fw-bold"> <h3>JAWABAN : D</h3></b>
                    </div>
                </div>
                <hr />
<!-- SOAL end -->
<!--=======================  soal3 ===================================-->
            <li>Diketahui \(f(x)=\sqrt{x} \) dan \(g(x)=2x^3 \).  Hasil dari \(\int f(x) dx + \int g(x) dx = ... \)</li>
                <ol type="A">
                    <li>\(\displaystyle \frac{3}{2}x \sqrt{x} + \frac{1}{2} x^4 + c \) </li>
                    <li>\(\displaystyle \frac{2}{3}x \sqrt{x} + \frac{1}{2} x^4 + c \) </li>
                    <li>\( \displaystyle \frac{1}{2}x \sqrt{x} + \frac{1}{2} x^4 + c \) </li>
                    <li>\(\displaystyle \frac{1}{2}x \sqrt{x} + \frac{1}{4} x^4 + c \) </li>
                    <li>\( \displaystyle \frac{1}{3}x \sqrt{x} + \frac{1}{4} x^4 + c \) </li>
                </ol>
                <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal3" aria-expanded="false" aria-controls="collapsesoal3">
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal3">
                    <div class="card card-body overflow-auto">
                        <p>\(\displaystyle \begin{align}
                            \int f(x) \; dx + \int g(x) \; dx &= \int \sqrt{x} \; dx + \int 2x^3 \; dx \\
                            &= \int x^{\frac{1}{2}} \; dx + \int 2x^3 \; dx \\
                            &= \frac{1}{\frac{1}{2}+1} x^{\frac{1}{2}+1} + \frac{2}{3+1} x^{3+1} +c\\
                            &= \frac{2}{3} x^{\frac{3}{2}} + \frac{1}{2} x^4 + c \\
                            &= \frac{2}{3} x \sqrt{x} + \frac{1}{2} x^4 + c \\
                            \end{align}\)</p>
                    <b class="text-end text-danger fw-bold"> <h3>JAWABAN : B</h3></b>
                    </div>
                </div>
                <hr />
<!-- SOAL end -->
<!--=======================  soal4 ===================================-->
            <li>Hasil \(\displaystyle \int  \left(4x-\frac{3}{x^2} \right) dx =...\)</li>
                <ol type="A">
                    <li>\(\displaystyle 2x^2 + \frac{1}{x} + c \) </li>
                    <li>\(\displaystyle 2x^2 + \frac{3}{x} + c \) </li>
                    <li>\(\displaystyle 2x^2 + \frac{1}{x^3} + c \) </li>
                    <li>\(\displaystyle 2x^2 - \frac{3}{x} + c \) </li>
                    <li>\(\displaystyle 2x^2 - \frac{1}{x^3} + c \) </li>

                </ol>
                <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal4" aria-expanded="false" aria-controls="collapsesoal4">
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal4">
                    <div class="card card-body overflow-auto">
                        <p>\(\displaystyle \begin{align}
                            \int  \left(4x-\frac{3}{x^2} \right) \; dx &= \int  \left(4x-3x^{-2} \right) \; dx \\
                            &= \frac{4}{1+1} x^{1+1} - \frac{3}{-2+1} x^{-2+1} +c\\
                            &= 2x^2 - \frac{3}{-1} x^{-1} +c\\
                            &= 2x^2 + \frac{3}{x}+c
                            \end{align}\)</p>
                    <b class="text-end text-danger fw-bold"> <h3>JAWABAN : B</h3></b>
                    </div>
                </div>
                <hr />
<!-- SOAL end -->
<!--=======================  soal5 ===================================-->
            <li>Hasil dari \(\int (4x^3 -6x^2 +2x +3) dx = ... \)</li>
                <ol type="A">
                    <li>\(x^4 -3x^3 +x^2 +3x +c \) </li>
                    <li>\(x^4 -2x^3 +x^2 +3x +c \) </li>
                    <li>\(2x^4 -3x^3 +x^2 +3x +c \) </li>
                    <li>\(2x^4 -2x^3 +x^2 +3x +c \) </li>
                    <li>\(4x^4 -2x^3 +x^2 +3x +c \) </li>

                </ol>
                <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal5" aria-expanded="false" aria-controls="collapsesoal5">
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal5">
                    <div class="card card-body overflow-auto">
                        <p>\(\displaystyle \begin{align}
                            \int (4x^3 -6x^2 +2x +3) \; dx &= \frac{4}{3+1} x^{3+1} - \frac{6}{2+1} x^{2+1} + \frac{2}{1+1} x^{1+1} + 3x +c \\
                            &= x^{4} -2x^3 +x^2 +3x+c
                            \end{align}\)</p>
                    <b class="text-end text-danger fw-bold"> <h3>JAWABAN : B</h3></b>
                    </div>
                </div>
                <hr />
<!-- SOAL end -->
<!--=======================  soal6 ===================================-->
            <li>Jika \(f(x)=(3x-1)(x+3)\) maka \(\int f(x) \; dx = ...\)</li>
                <ol type="A">
                    <li>\(x^3 +2x^2 -3x +c \) </li>
                    <li>\(x^3 -2x^2 -3x +c \) </li>
                    <li>\(x^3 +4x^2 -3x +c \) </li>
                    <li>\(x^3 -4x^2 -3x +c \) </li>
                    <li>\(3x^3 +4x^2 -3x +c \) </li>

                </ol>
                <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal6" aria-expanded="false" aria-controls="collapsesoal6">
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal6">
                    <div class="card card-body overflow-auto">
                        <p>\(\displaystyle \begin{align}
                            \int (3x-1)(x+3) \; dx &= \int (3x^2 +8x -3 ) \; dx \\
                            &= \frac{3}{2+1} x^{2+1} + \frac{8}{1+1} x^{1+1} -3x +c \\
                            &= x^3 +4x^2 -3x +c
                            \end{align}\)</p>
                    <b class="text-end text-danger fw-bold"> <h3>JAWABAN : C</h3></b>
                    </div>
                </div>
                <hr />
<!-- SOAL end -->
<!--=======================  soal7 ===================================-->
            <li>Hasil \(\displaystyle \int \frac{x(2\sqrt{x}-x)}{\sqrt{x}} \; dx =... \)</li>
                <ol type="A">
                    <li>\(\displaystyle 2x^2 -\frac{4}{5} x^2 \sqrt{x} +c\) </li>
                    <li>\(\displaystyle 2x^2 -\frac{2}{5} x^2 \sqrt{x} +c\) </li>
                    <li>\(\displaystyle 2x^2 -\frac{1}{5} x^2 \sqrt{x} +c\) </li>
                    <li>\(\displaystyle x^2 -\frac{2}{5} x^2 \sqrt{x} +c\) </li>
                    <li>\(\displaystyle x^2 -\frac{1}{5} x^2 \sqrt{x} +c\) </li>

                </ol>
                <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal7" aria-expanded="false" aria-controls="collapsesoal7">
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal7">
                    <div class="card card-body overflow-auto">
                        <p>\(\displaystyle \begin{align}
                            \int \frac{x(2\sqrt{x}-x)}{\sqrt{x}} \; dx &= \frac{(2x\sqrt{x}-x^2)}{\sqrt{x}} \; dx \\
                            &= \int \frac{2x\sqrt{x}}{\sqrt{x}} \; dx - \int \frac{x^2}{\sqrt{x}} \; dx \\
                            &= \int 2x \; dx - \int x^{\frac{3}{2}} \; dx \\
                            &= \frac{2}{1+1} x^{1+1} - \frac{1}{\frac{3}{2}+1} x^{\frac{3}{2}+1} +c \\
                            &= x^2 - \frac{2}{5} x^{\frac{5}{2}} + c \\
                            &= x^2 -\frac{2}{5}x^2 \sqrt{x} +c
                            \end{align}\)</p>
                    <b class="text-end text-danger fw-bold"> <h3>JAWABAN : D</h3></b>
                    </div>
                </div>
                <hr />
<!-- SOAL end -->
<!--=======================  soal8 ===================================-->
            <li>Hasil \(\displaystyle \int (2-3\sqrt{x})^2 \; dx = ... \)</li>
                <ol type="A">
                    <li>\(\displaystyle 4x-8x\sqrt{x} + \frac{9}{2} x^2 + c \) </li>
                    <li>\(\displaystyle 4x-8x\sqrt{x} + 3 x^2 + c \) </li>
                    <li>\(\displaystyle 4x-8x\sqrt{x} + \frac{3}{2} x^2 + c \) </li>
                    <li>\(\displaystyle 4x- \frac{9}{2} x^2 + c \) </li>
                    <li>\(\displaystyle 4x-\frac{3}{2} x^2 + c \) </li>

                </ol>
                <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal8" aria-expanded="false" aria-controls="collapsesoal8">
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal8">
                    <div class="card card-body overflow-auto">
                        <p>\(\displaystyle \begin{align}
                            \int (2-3\sqrt{x})^2 \; dx &= \int \left( 4-12\sqrt{x}-9x \right) \; dx \\
                            &= \int \left( 4-12x^{\frac{1}{2}}-9x \right) \; dx \\
                            &= 4x -12. \frac{1}{\frac{1}{2}+1} x^{\frac{1}{2}+1} -\frac{9}{1+1} x^{1+1} +c \\
                            &= 4x -12. \frac{2}{3} x^{\frac{3}{2}} -\frac{9}{2} x^2 \\
                            &= 4x-8x^{\frac{3}{2}}-\frac{9}{2} x^2 \\
                            &= 4x -8x\sqrt{x} - \frac{9}{2} x^2
                            \end{align}\)</p>
                    <b class="text-end text-danger fw-bold"> <h3>JAWABAN : A</h3></b>
                    </div>
                </div>
                <hr />
<!-- SOAL end -->
<!--=======================  soal9 ===================================-->
            <li>Diketahui turunan fungsi \(f(x)\) adalah \(f'(x)=6x^2 +2x -3 \). Jika grafik fungsi \(f(x)\) melalui titik \((1,4)\), rumus fungsi \(f(x) = ...\) </li>
                <ol type="A">
                    <li>\(2x^3 +2x^2 -3x +8 \) </li>
                    <li>\(2x^3 +2x^2 -3x +4 \) </li>
                    <li>\(2x^3 +x^2 -3x +4 \) </li>
                    <li>\(3x^3 +x^2 -3x +4 \) </li>
                    <li>\(3x^3 +x^2 -3x  \) </li>

                </ol>
                <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal9" aria-expanded="false" aria-controls="collapsesoal9">
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal9">
                    <div class="card card-body overflow-auto">
                        <p>\(\displaystyle \begin{align}
                            \int 6x^2 +2x -3 \; dx &= \frac{6}{2+1} x^{2+1} + \frac{2}{1+1} x^{1+1} -3x +c\\
                            &= 2x^3 + x^2 -3x +c
                            \end{align}\)</p>
                    <b class="text-end text-danger fw-bold"> <h3>JAWABAN : C</h3></b>
                    </div>
                </div>
                <hr />
<!-- SOAL end -->
<!--=======================  soal10 ===================================-->
            <li>Sebuah benda bergerak dari keadaan diam dengan percepatan pada setiap saat \(t\) ditentukan oleh \(a(t)=5-t \). Pada gerakan tersebut, benda akan berhenti setelah . . . detik</li>
                <ol type="A">
                    <li>3 </li>
                    <li> 5</li>
                    <li> 10</li>
                    <li>12 </li>
                    <li>15 </li>
                </ol>
                <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal10" aria-expanded="false" aria-controls="collapsesoal10">
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal10">
                    <div class="card card-body overflow-auto">
                        <p>Berhenti berarti kecepatan benda sama dengan nol</p>
                        <p>\(v(x) = 0 \)</p>
                        <p>\(\displaystyle \begin{align}
                            \int a(t) \; dt &= \int (5-t) \; dt \\
                            &= 5t -\frac{1}{2}t^2 \\\\
                            v(t) &= 5t -\frac{1}{2}t^2 \\
                            0 &= 5t - \frac{1}{2}t^2 \\
                            0 &= t(5-\frac{1}{2}t) \\
                            \end{align}\)</p>
                            <p>\(t = 0 \) atau \(\displaystyle \begin{align} \frac{1}{2}t &= 5 \\ t &= 10 \end{align}\) </p>
                        <p>Jadi, benda akan berhenti setelah \(10\) detik</p>
                    <b class="text-end text-danger fw-bold"> <h3>JAWABAN : C</h3></b>
                    </div>
                </div>
                <hr />

            </ol>

{{-- COPY DARI SINI SETIAP SOAL --}}
<input type="hidden" id="materi" name="materi" value="integral03">
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
    <a href="/create_integral03" id="kirimsaja" class="btn btn-warning btn-bukti d-none" >SIMPAN JAWABAN</a>
</div>
</form>
{{-- COPY SAMPAI SINI --}}

<div id="disqus_thread" class="mt-4"></div>

</div>
</div>
</div>
</section>
@endsection

