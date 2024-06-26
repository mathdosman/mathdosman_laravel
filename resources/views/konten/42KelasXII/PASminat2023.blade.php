@extends('konten.42KelasXII.42.template')
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
            KELAS XII
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

                <h2 class="text-center">PENILAIAN AKHIR SEMESTER (PAS) 2023</h2>
                <h3 class="text-center text-danger fw-bold">MATEMATIKA PEMINATAN</h3>
                <p class="text-center fst-italic"> Math_Dosman</p>
                <hr />
                <p>Berikut merupakan soal Penilaian Akhir Semester (PAS) tahun 2023 di SMA Negeri 1 Gianyar menggunakan moodle sekolah</p>
                <p>Kelas : XII MIPA</p>
                <p>Waktu : 60 Menit</p>
                <p>MATEMATIKA PEMINATAN</p>
                <hr>
            <hr />


            <ol type="1">
<!--=======================  soal1 ===================================-->
            <li>\(\displaystyle \lim_{x\rightarrow 0} \frac{\sin 5x + \tan 7x}{\tan 3x - \sin 2x}\)= ....            </li>
                    <input type="radio" name="soal1" value="A"/>
                    A. \(12 \)
                <br />
                    <input type="radio" name="soal1" value="B"/>
                    B. \(10\)
                <br />
                    <input type="radio" name="soal1" value="C"/>
                    C. \(8 \)
                <br>
                    <input type="radio" name="soal1" value="D"/>
                    D. \( 6\)
                <br />
                    <input type="radio" name="soal1" value="E"/>
                    E. \( 4\)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal1" aria-expanded="false" aria-controls="collapsesoal1" >
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal1">
                <div class="card card-body overflow-auto">
                    <p></p>
                <b class="text-end text-danger fw-bold"> <h3>JAWABAN: A</h3></b>
                </div>
                </div>
                <hr />

<!--=======================  soal2 ===================================-->
            <li>\(\displaystyle \lim_{x\rightarrow \frac{π}{4}} \frac{1-\sin^2 x}{\cos x - \sin x} \) = ....</li>
                    <input type="radio" name="soal2" value="A"/>
                    A. \(1 \)
                <br />
                    <input type="radio" name="soal2" value="B"/>
                    B. \( \frac{1}{2} \sqrt{2}\)
                <br />
                    <input type="radio" name="soal2" value="C"/>
                    C. \(\sqrt{2} \)
                <br>
                    <input type="radio" name="soal2" value="D"/>
                    D. \(0 \)
                <br />
                    <input type="radio" name="soal2" value="E"/>
                    E. \(\infty \)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal2" aria-expanded="false" aria-controls="collapsesoal2" >
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal2">
                <div class="card card-body overflow-auto">
                    <p></p>
                <b class="text-end text-danger fw-bold"> <h3>JAWABAN: E</h3></b>
                </div>
                </div>
                <hr />

<!--=======================  soal3 ===================================-->
            <li>\(\displaystyle \lim_{x\rightarrow 0} \frac{2x}{2\sin x + \sin 2x}\) = ....</li>
                    <input type="radio" name="soal3" value="A"/>
                    A. \(-\frac{1}{2} \)
                <br />
                    <input type="radio" name="soal3" value="B"/>
                    B. \(-\frac{1}{4} \)
                <br />
                    <input type="radio" name="soal3" value="C"/>
                    C. \(\frac{1}{2} \)
                <br>
                    <input type="radio" name="soal3" value="D"/>
                    D. \(\frac{1}{4} \)
                <br />
                    <input type="radio" name="soal3" value="E"/>
                    E. \(1 \)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal3" aria-expanded="false" aria-controls="collapsesoal3" >
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal3">
                <div class="card card-body overflow-auto">
                    <p></p>
                <b class="text-end text-danger fw-bold"> <h3>JAWABAN: C</h3></b>
                </div>
                </div>
                <hr />

<!--=======================  soal4 ===================================-->
            <li>\(\displaystyle \lim_{x\rightarrow 0} \frac{x^2 \sqrt{4-x^2} }{\cos x - \cos 3x} \) = ....            </li>
                    <input type="radio" name="soal4" value="A"/>
                    A. \(-\frac{3}{2} \)
                <br />
                    <input type="radio" name="soal4" value="B"/>
                    B. \(-\frac{1}{2} \)
                <br />
                    <input type="radio" name="soal4" value="C"/>
                    C. \(0 \)
                <br>
                    <input type="radio" name="soal4" value="D"/>
                    D. \(\frac{1}{2}\)
                <br />
                    <input type="radio" name="soal4" value="E"/>
                    E. \(\frac{3}{2} \)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal4" aria-expanded="false" aria-controls="collapsesoal4" >
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal4">
                <div class="card card-body overflow-auto">
                    <p></p>
                <b class="text-end text-danger fw-bold"> <h3>JAWABAN: D</h3></b>
                </div>
                </div>
                <hr />

<!--=======================  soal5 ===================================-->
            <li>\(\displaystyle \lim_{x\rightarrow 1}  \frac{\tan (x-1) \sin (1- \sqrt{x}) }{x^2-2x+1} \) = ....</li>
                    <input type="radio" name="soal5" value="A"/>
                    A. \( -1\)
                <br />
                    <input type="radio" name="soal5" value="B"/>
                    B. \(-\frac{1}{2} \)
                <br />
                    <input type="radio" name="soal5" value="C"/>
                    C. \(0 \)
                <br>
                    <input type="radio" name="soal5" value="D"/>
                    D. \(\frac{1}{2} \)
                <br />
                    <input type="radio" name="soal5" value="E"/>
                    E. \( 1\)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal5" aria-expanded="false" aria-controls="collapsesoal5" >
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal5">
                <div class="card card-body overflow-auto">
                    <p></p>
                <b class="text-end text-danger fw-bold"> <h3>JAWABAN: B</h3></b>
                </div>
                </div>
                <hr />

<!--=======================  soal6 ===================================-->
            <li>\(\displaystyle \lim_{x\rightarrow 2} \frac{\sin(2x-4)}{2- \sqrt{6-x}} \) = ....</li>
                    <input type="radio" name="soal6" value="A"/>
                    A. \(-8 \)
                <br />
                    <input type="radio" name="soal6" value="B"/>
                    B. \( -2\)
                <br />
                    <input type="radio" name="soal6" value="C"/>
                    C. \(0 \)
                <br>
                    <input type="radio" name="soal6" value="D"/>
                    D. \(2 \)
                <br />
                    <input type="radio" name="soal6" value="E"/>
                    E. \(8 \)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal6" aria-expanded="false" aria-controls="collapsesoal6" >
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal6">
                <div class="card card-body overflow-auto">
                    <p></p>
                <b class="text-end text-danger fw-bold"> <h3>JAWABAN: E</h3></b>
                </div>
                </div>
                <hr />

<!--=======================  soal7 ===================================-->
            <li>Nilai dari \( \displaystyle \lim_{x\rightarrow \infty} ( \sqrt{4x^2+4x-3} -(2x-5))  = ...\)</li>
                    <input type="radio" name="soal7" value="A"/>
                    A. \( -6\)
                <br />
                    <input type="radio" name="soal7" value="B"/>
                    B. \(-4 \)
                <br />
                    <input type="radio" name="soal7" value="C"/>
                    C. \(1 \)
                <br>
                    <input type="radio" name="soal7" value="D"/>
                    D. \(4 \)
                <br />
                    <input type="radio" name="soal7" value="E"/>
                    E. \(6 \)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal7" aria-expanded="false" aria-controls="collapsesoal7" >
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal7">
                <div class="card card-body overflow-auto">
                    <p></p>
                <b class="text-end text-danger fw-bold"> <h3>JAWABAN: C</h3></b>
                </div>
                </div>
                <hr />

<!--=======================  soal8 ===================================-->
            <li>Nilai dari \( \displaystyle \lim_{x\rightarrow \infty } \frac{1-\cos \frac{4}{x} }{ \frac{1}{x}\tan \frac{3}{x}} \) = ....</li>
                    <input type="radio" name="soal8" value="A"/>
                    A. \(\frac{1}{3} \)
                <br />
                    <input type="radio" name="soal8" value="B"/>
                    B. \(\frac{2}{3} \)
                <br />
                    <input type="radio" name="soal8" value="C"/>
                    C. \(\frac{4}{3} \)
                <br>
                    <input type="radio" name="soal8" value="D"/>
                    D. \(\frac{8}{3} \)
                <br />
                    <input type="radio" name="soal8" value="E"/>
                    E. \( \infty  \)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal8" aria-expanded="false" aria-controls="collapsesoal8" >
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal8">
                <div class="card card-body overflow-auto">
                    <p></p>
                <b class="text-end text-danger fw-bold"> <h3>JAWABAN: D</h3></b>
                </div>
                </div>
                <hr />

<!--=======================  soal9 ===================================-->
            <li>Nilai dari \( \displaystyle \lim_{y\rightarrow \infty } y\sin \frac{3}{y} \ cos\ \frac{5}{y} = .... \)</li>
                    <input type="radio" name="soal9" value="A"/>
                    A. \( 0\)
                <br />
                    <input type="radio" name="soal9" value="B"/>
                    B. \( 3\)
                <br />
                    <input type="radio" name="soal9" value="C"/>
                    C. \( 5\)
                <br>
                    <input type="radio" name="soal9" value="D"/>
                    D. \( 15\)
                <br />
                    <input type="radio" name="soal9" value="E"/>
                    E. \(\infty \)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal9" aria-expanded="false" aria-controls="collapsesoal9" >
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal9">
                <div class="card card-body overflow-auto">
                    <p></p>
                <b class="text-end text-danger fw-bold"> <h3>JAWABAN: B</h3></b>
                </div>
                </div>
                <hr />

<!--=======================  soal10 ===================================-->
            <li>Nilai dari \( \displaystyle \lim_{x\rightarrow \infty } \) \( x \) (\( \sec\sqrt x - 1 \)) = ....</li>
                    <input type="radio" name="soal10" value="A"/>
                    A. \(-2 \)
                <br />
                    <input type="radio" name="soal10" value="B"/>
                    B. \(-1 \)
                <br />
                    <input type="radio" name="soal10" value="C"/>
                    C. \(-\frac{1}{2} \)
                <br>
                    <input type="radio" name="soal10" value="D"/>
                    D. \(\frac{1}{2} \)
                <br />
                    <input type="radio" name="soal10" value="E"/>
                    E. \(2 \)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal10" aria-expanded="false" aria-controls="collapsesoal10" >
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal10">
                <div class="card card-body overflow-auto">
                    <p></p>
                <b class="text-end text-danger fw-bold"> <h3>JAWABAN: D</h3></b>
                </div>
                </div>
                <hr />

<!--=======================  soal11 ===================================-->
            <li>Diketahui fungsi \(f(x) = \sin^4 (3 - 2x)\). Turunan pertama dari \(f\) adalah  \(f'\), maka \(f'(x) = ...\)</li>
                    <input type="radio" name="soal11" value="A"/>
                    A. \(- 4 \sin^2 (3 - 2x) \sin (6 - 4x) \)
                <br />
                    <input type="radio" name="soal11" value="B"/>
                    B. \(- 8 \sin2 (3 - 2x) \sin (6 - 4x) \)
                <br />
                    <input type="radio" name="soal11" value="C"/>
                    C. \(4 \sin2 (3 - 2x) \sin (6 - 4x) \)
                <br>
                    <input type="radio" name="soal11" value="D"/>
                    D. \(6 \sin2 (3 - 2x) \sin (6 - 4x)\)
                <br />
                    <input type="radio" name="soal11" value="E"/>
                    E. \(8 \sin2 (3 - 2x) \sin (6 - 4x) \)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal11" aria-expanded="false" aria-controls="collapsesoal11" >
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal11">
                <div class="card card-body overflow-auto">
                    <p></p>
                <b class="text-end text-danger fw-bold"> <h3>JAWABAN: A</h3></b>
                </div>
                </div>
                <hr />

<!--=======================  soal12 ===================================-->
            <li>Turunan pertama dari fungsi \(\displaystyle f(x)= \frac{1+\cos x}{\sin x} \) adalah \(f'(x) =...\)

            </li>
                    <input type="radio" name="soal12" value="A"/>
                    A. \(\frac{1-\sin x}{\sin^2 x} \)
                <br />
                    <input type="radio" name="soal12" value="B"/>
                    B. \(\frac{\sin x-1}{\cos x - 1} \)
                <br />
                    <input type="radio" name="soal12" value="C"/>
                    C. \(\frac{2}{\cos x + 1} \)
                <br>
                    <input type="radio" name="soal12" value="D"/>
                    D. \(\frac{2}{\sin x - 1}\)
                <br />
                    <input type="radio" name="soal12" value="E"/>
                    E. \(\frac{1}{\cos x - 1} \)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal12" aria-expanded="false" aria-controls="collapsesoal12" >
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal12">
                <div class="card card-body overflow-auto">
                    <p></p>
                <b class="text-end text-danger fw-bold"> <h3>JAWABAN: E</h3></b>
                </div>
                </div>
                <hr />

<!--=======================  soal13 ===================================-->
            <li>Jika \( f(x) = \sin x \cos 3x \) maka \(f'( \frac{ \pi }{6} ) = ...\)</li>
                    <input type="radio" name="soal13" value="A"/>
                    A. \(\frac{1}{2} \)
                <br />
                    <input type="radio" name="soal13" value="B"/>
                    B. \(-\frac{1}{2} \)
                <br />
                    <input type="radio" name="soal13" value="C"/>
                    C. \(-1\frac{1}{2} \)
                <br>
                    <input type="radio" name="soal13" value="D"/>
                    D. \(0 \)
                <br />
                    <input type="radio" name="soal13" value="E"/>
                    E. \(1\frac{1}{2} \)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal13" aria-expanded="false" aria-controls="collapsesoal13" >
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal13">
                <div class="card card-body overflow-auto">
                    <p></p>
                <b class="text-end text-danger fw-bold"> <h3>JAWABAN: C</h3></b>
                </div>
                </div>
                <hr />

<!--=======================  soal14 ===================================-->
            <li>Jika \( f(x) = a \tan x + bx, f'( \frac{ \pi }{4})=3, \) dan \( f'( \frac{ \pi }{3}) = 9, \) maka \( a+b =...\)</li>
                    <input type="radio" name="soal14" value="A"/>
                    A. \(0 \)
                <br />
                    <input type="radio" name="soal14" value="B"/>
                    B. \(1 \)
                <br />
                    <input type="radio" name="soal14" value="C"/>
                    C. \(\frac{ \pi }{2} \)
                <br>
                    <input type="radio" name="soal14" value="D"/>
                    D. \( 2\)
                <br />
                    <input type="radio" name="soal14" value="E"/>
                    E. \(\pi \)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal14" aria-expanded="false" aria-controls="collapsesoal14" >
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal14">
                <div class="card card-body overflow-auto">
                    <p></p>
                <b class="text-end text-danger fw-bold"> <h3>JAWABAN: A</h3></b>
                </div>
                </div>
                <hr />

<!--=======================  soal15 ===================================-->
            <li>Gradien garis singgung kurva \(y = \sin 2x + 1\) di titik \(\displaystyle (\frac{ \pi }{4} , 2) \) adalah...</li>
                    <input type="radio" name="soal15" value="A"/>
                    A. \(m= -2 \)
                <br />
                    <input type="radio" name="soal15" value="B"/>
                    B. \(m= -1 \)
                <br />
                    <input type="radio" name="soal15" value="C"/>
                    C. \(m= 0 \)
                <br>
                    <input type="radio" name="soal15" value="D"/>
                    D. \(m= 1 \)
                <br />
                    <input type="radio" name="soal15" value="E"/>
                    E. \(m= 2 \)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal15" aria-expanded="false" aria-controls="collapsesoal15" >
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal15">
                <div class="card card-body overflow-auto">
                    <p></p>
                <b class="text-end text-danger fw-bold"> <h3>JAWABAN: C</h3></b>
                </div>
                </div>
                <hr />
<!--=======================  soal16 ===================================-->
            <li>Persamaan garis singgung kurva \( y = 2 \sin x \) di titik \((0 , 2)\) adalah ... </li>
                    <input type="radio" name="soal16" value="A"/>
                    A. \(y = 2x + 2 \)
                <br />
                    <input type="radio" name="soal16" value="B"/>
                    B. \(y = 2x \)
                <br />
                    <input type="radio" name="soal16" value="C"/>
                    C. \(y = x + 2\)
                <br>
                    <input type="radio" name="soal16" value="D"/>
                    D. \(y = -2x + 2 \)
                <br />
                    <input type="radio" name="soal16" value="E"/>
                    E. \(y = -2x - 2 \)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal16" aria-expanded="false" aria-controls="collapsesoal16" >
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal16">
                <div class="card card-body overflow-auto">
                    <p></p>
                <b class="text-end text-danger fw-bold"> <h3>JAWABAN: D</h3></b>
                </div>
                </div>
                <hr />

<!--=======================  soal17 ===================================-->
            <li>Fungsi \( y = \sin x + \cos x \) untuk  \( 0 \leq x \leq 2 \pi \) naik pada interval ...</li>
                    <input type="radio" name="soal17" value="A"/>
                    A. \( 0 \leq x \leq \frac{ \pi }{4} \)
                <br />
                    <input type="radio" name="soal17" value="B"/>
                    B. \( \pi \leq x \leq \frac{ 5\pi }{4} \)
                <br />
                    <input type="radio" name="soal17" value="C"/>
                    C. \(0 \leq x \leq 2 \pi \)
                <br>
                    <input type="radio" name="soal17" value="D"/>
                    D. \(\frac{ \pi }{4} \leq x \leq \pi \)
                <br />
                    <input type="radio" name="soal17" value="E"/>
                    E. \(\pi \leq x \leq 2 \pi \)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal17" aria-expanded="false" aria-controls="collapsesoal17" >
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal17">
                <div class="card card-body overflow-auto">
                    <p></p>
                <b class="text-end text-danger fw-bold"> <h3>JAWABAN: A</h3></b>
                </div>
                </div>
                <hr />

<!--=======================  soal18 ===================================-->
            <li>Titik stasioner fungsi  \(\displaystyle f(x) = \frac{1}{4} \cos (2x- \frac{ \pi }{2}) \) untuk \( 0 \leq x \leq \pi \) terjadi pada ...</li>
                    <input type="radio" name="soal18" value="A"/>
                    A. \( x = \frac{ \pi }{4} \) dan \( x = \frac{ \pi }{2} \)
                <br />
                    <input type="radio" name="soal18" value="B"/>
                    B. \( x = \frac{ \pi }{4} \) dan \( x = \pi \)
                <br />
                    <input type="radio" name="soal18" value="C"/>
                    C. \( x = \frac{ \pi }{2} \) dan \( x = \pi \)
                <br>
                    <input type="radio" name="soal18" value="D"/>
                    D. \( x = \frac{ \pi }{4} \) dan \( x = \frac{ 3\pi }{4} \)
                <br />
                    <input type="radio" name="soal18" value="E"/>
                    E. \( x = \frac{ \pi }{2} \) dan \( x = \frac{ 3\pi }{4} \)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal18" aria-expanded="false" aria-controls="collapsesoal18" >
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal18">
                <div class="card card-body overflow-auto">
                    <p></p>
                <b class="text-end text-danger fw-bold"> <h3>JAWABAN: D</h3></b>
                </div>
                </div>
                <hr />

<!--=======================  soal19 ===================================-->
            <li>Fungsi \(f(x) = \sin (x - \pi) + \cos (x - \pi)\), untuk \(0 < x < 2\pi\) cekung ke bawah pada interval ...</li>
                    <input type="radio" name="soal19" value="A"/>
                    A. \( \frac{3 \pi }{4} < x < \frac{7 \pi }{4} \)
                <br />
                    <input type="radio" name="soal19" value="B"/>
                    B. \( 0 < x < \frac{3 \pi }{4} \)
                <br />
                    <input type="radio" name="soal19" value="C"/>
                    C. \( \frac{7 \pi }{4}\) < x < \( 2 \pi \)
                <br>
                    <input type="radio" name="soal19" value="D"/>
                    D. \( \frac{3 \pi }{4} < x < 2 \pi \)
                <br />
                    <input type="radio" name="soal19" value="E"/>
                    E. \( 0 < x < \frac{7 \pi }{4} \)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal19" aria-expanded="false" aria-controls="collapsesoal19" >
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal19">
                <div class="card card-body overflow-auto">
                    <p></p>
                <b class="text-end text-danger fw-bold"> <h3>JAWABAN: A</h3></b>
                </div>
                </div>
                <hr />

<!--=======================  soal20 ===================================-->
            <li>Nilai minimum \( f(x) = 1 + 2\sqrt 3 \sin x + 6 \cos x \) untuk selang \(0 \leq x \leq 2\pi \) adalah...</li>
                    <input type="radio" name="soal20" value="A"/>
                    A. \( 4\sqrt{3} - 1 \)
                <br />
                    <input type="radio" name="soal20" value="B"/>
                    B. \( 2\sqrt{3} - 1 \)
                <br />
                    <input type="radio" name="soal20" value="C"/>
                    C. \( -\sqrt{3} - 1 \)
                <br>
                    <input type="radio" name="soal20" value="D"/>
                    D. \( 1 - 4\sqrt{3} \)
                <br />
                    <input type="radio" name="soal20" value="E"/>
                    E. \( 1 - 2\sqrt{3} \)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal20" aria-expanded="false" aria-controls="collapsesoal20" >
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal20">
                <div class="card card-body overflow-auto">
                    <p></p>
                <b class="text-end text-danger fw-bold"> <h3>JAWABAN: D</h3></b>
                </div>
                </div>
                <hr />


<!-- ------------------------------------------------------------------------------------------------------------------- -->
<!--=======================  soal21 ===================================-->
            <li>\( \displaystyle \lim_{x\rightarrow \infty } \frac{(2x^3-1)^2(x^2+1)}{(3x^2+4)^3(2x-1)^2}  = ....\)</li>
                    <input type="radio"/>
                    A. \(\displaystyle \frac{4}{27} \)
                <br />
                    <input type="radio"/>
                    B. \(\displaystyle \frac{1}{3} \)
                <br />
                    <input type="radio"/>
                    C. \(\displaystyle \frac{2}{27} \)
                <br>
                    <input type="radio"/>
                    D. \(\displaystyle \frac{1}{27} \)
                <br />
                    <input type="radio"/>
                    E. \(\displaystyle \frac{1}{54} \)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal21" aria-expanded="false" aria-controls="collapsesoal21">
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal21">
                <div class="card card-body overflow-auto">
                    <p></p>
                <b class="text-end text-danger fw-bold"> <h3>JAWABAN : D</h3></b>
                </div>
                </div>
                <hr />

<!-- ------------------------------------------------------------------------------------------------------------------- -->
<!--=======================  soal22 ===================================-->
            <li>\(\displaystyle \lim_{x\rightarrow 4} \frac{\sin (x- \sqrt{x} -2) }{x-4} = ...\)
            </li>
                    <input type="radio"/>
                    A. \(\displaystyle \frac{1}{2} \)
                <br />
                    <input type="radio"/>
                    B. \(\displaystyle \frac{3}{4} \)
                <br />
                    <input type="radio"/>
                    C. \(1 \)
                <br>
                    <input type="radio"/>
                    D. \(\displaystyle \frac{5}{4} \)
                <br />
                    <input type="radio"/>
                    E. \(\displaystyle \frac{7}{4} \)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal22" aria-expanded="false" aria-controls="collapsesoal22">
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal22">
                <div class="card card-body overflow-auto">
                    <p></p>
                <b class="text-end text-danger fw-bold"> <h3>JAWABAN : B</h3></b>
                </div>
                </div>
                <hr />

<!-- ------------------------------------------------------------------------------------------------------------------- -->
<!--=======================  soal23 ===================================-->
            <li>\( \displaystyle \lim_{x\rightarrow \infty } \frac{x \cot( \frac{5}{x+1}) }{1-x^2} = ....\) </li>
                    <input type="radio"/>
                    A. \(\displaystyle -\frac{1}{5} \)
                <br />
                    <input type="radio"/>
                    B. \(\displaystyle -\frac{1}{3} \)
                <br />
                    <input type="radio"/>
                    C. \(0 \)
                <br>
                    <input type="radio"/>
                    D. \(\displaystyle \frac{1}{3} \)
                <br />
                    <input type="radio"/>
                    E. \(\displaystyle \frac{1}{5} \)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal23" aria-expanded="false" aria-controls="collapsesoal23">
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal23">
                <div class="card card-body overflow-auto">
                    <p></p>
                <b class="text-end text-danger fw-bold"> <h3>JAWABAN : A</h3></b>
                </div>
                </div>
                <hr />

<!-- ------------------------------------------------------------------------------------------------------------------- -->
<!--=======================  soal24 ===================================-->
            <li>\( \displaystyle \lim_{x\rightarrow \infty } ( \sqrt{64x^2+ax-7} -8x+b) = \frac{3}{2} \) ; jika \(a\) dan \(b\) bilangan bulat positif, maka \(a + b=...\) </li>
                    <input type="radio"/>
                    A. \(7 \)
                <br />
                    <input type="radio"/>
                    B. \( 8\)
                <br />
                    <input type="radio"/>
                    C. \(9 \)
                <br>
                    <input type="radio"/>
                    D. \(10 \)
                <br />
                    <input type="radio"/>
                    E. \(11 \)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal24" aria-expanded="false" aria-controls="collapsesoal24">
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal24">
                <div class="card card-body overflow-auto">
                    <p></p>
                <b class="text-end text-danger fw-bold"> <h3>JAWABAN : C</h3></b>
                </div>
                </div>
                <hr />

<!-- ------------------------------------------------------------------------------------------------------------------- -->
<!--=======================  soal25 ===================================-->
            <li>Nilai dari \(\displaystyle \lim_{x\rightarrow 1} \frac{(x^2-1) \tan (2x-2)}{\sin^2(x-1)} =...\)</li>
                    <input type="radio"/>
                    A. \(4 \)
                <br />
                    <input type="radio"/>
                    B. \(3 \)
                <br />
                    <input type="radio"/>
                    C. \(2 \)
                <br>
                    <input type="radio"/>
                    D. \(1 \)
                <br />
                    <input type="radio"/>
                    E. \(0 \)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal25" aria-expanded="false" aria-controls="collapsesoal25">
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal25">
                <div class="card card-body overflow-auto">
                    <p></p>
                <b class="text-end text-danger fw-bold"> <h3>JAWABAN : A</h3></b>
                </div>
                </div>
                <hr />

<!-- ------------------------------------------------------------------------------------------------------------------- -->
<!--=======================  soal26 ===================================-->
            <li>Jika \( f(x) = \sqrt[3]{\sin^5 (3x^2-4)} \) , maka turunan pertama dari \( f(x) \) adalah....</li>
                    <input type="radio"/>
                    A. \(-10x\sin (3x^2-4) \sqrt[3]{\cos^2(3x^2-4)} \)
                <br />
                    <input type="radio"/>
                    B. \(10x\sin (3x^2-4) \sqrt[3]{\cos^2(3x^2-4)} \)
                <br />
                    <input type="radio"/>
                    C. \(5x\sin^2 (3x^2-4) \sqrt[3]{\cos^2(3x^2-4)} \)
                <br>
                    <input type="radio"/>
                    D. \(10x\cos (3x^2-4) \sqrt[3]{\cos^2(3x^2-4)} \)
                <br />
                    <input type="radio"/>
                    E. \(-10x\cos (3x^2-4) \sqrt[3]{\cos^2(3x^2-4)} \)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal26" aria-expanded="false" aria-controls="collapsesoal26">
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal26">
                <div class="card card-body overflow-auto">
                    <p></p>
                <b class="text-end text-danger fw-bold"> <h3>JAWABAN : D</h3></b>
                </div>
                </div>
                <hr />

<!-- ------------------------------------------------------------------------------------------------------------------- -->
<!--=======================  soal27 ===================================-->
            <li>Jika \( f(x) = \frac{\sin x + \cos x}{ \sin x}; \sin x \neq 0 \), maka nilai dari \(\displaystyle f'( \frac{ \pi }{2}) =... \) </li>
                    <input type="radio"/>
                    A. \(\displaystyle -\frac{3}{2} \)
                <br />
                    <input type="radio"/>
                    B. \(-1 \)
                <br />
                    <input type="radio"/>
                    C. \(0 \)
                <br>
                    <input type="radio"/>
                    D. \(1 \)
                <br />
                    <input type="radio"/>
                    E. \(\displaystyle \frac{3}{2} \)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal27" aria-expanded="false" aria-controls="collapsesoal27">
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal27">
                <div class="card card-body overflow-auto">
                    <p></p>
                <b class="text-end text-danger fw-bold"> <h3>JAWABAN : B</h3></b>
                </div>
                </div>
                <hr />

<!-- ------------------------------------------------------------------------------------------------------------------- -->
<!--=======================  soal28 ===================================-->
            <li>Diketahui \( f(x) = \sec 2x , f''(x) = .... \)</li>
                    <input type="radio"/>
                    A. \( 4\sec2x (1+2 tan^2 2x) \)
                <br />
                    <input type="radio"/>
                    B. \(4\sec2x (1+2 tan 2x) \)
                <br />
                    <input type="radio"/>
                    C. \(- 4\sec2x (1+2 tan 2x) \)
                <br>
                    <input type="radio"/>
                    D. \(-4\sec2x (1+2 tan^2 2x) \)
                <br />
                    <input type="radio"/>
                    E. \(4 \sec^2 2x(1+2 \tan 2x) \)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal28" aria-expanded="false" aria-controls="collapsesoal28">
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal28">
                <div class="card card-body overflow-auto">
                    <p></p>
                <b class="text-end text-danger fw-bold"> <h3>JAWABAN : A</h3></b>
                </div>
                </div>
                <hr />

<!-- ------------------------------------------------------------------------------------------------------------------- -->
<!--=======================  soal29 ===================================-->
            <li>Diketahui \(x_1\) dan  \(x_2\)  adalah akar-akar dari fungsi kuadrat \( f(x) \) , jika \(x_1  = \sin 2x\) , \(x_2  = \sec 2x ; 0 \leq x \leq \pi \) maka nilai \( x \) yang memenuhi  agar hasil kali akar-akarnya maksimum adalah ....</li>
                    <input type="radio"/>
                    A. \(\displaystyle \frac{3 \pi }{4} \)
                <br />
                    <input type="radio"/>
                    B. \( \pi  \)
                <br />
                    <input type="radio"/>
                    C. \(\displaystyle \frac{3 \pi }{5} \)
                <br>
                    <input type="radio"/>
                    D. \(\displaystyle \frac{5 \pi }{6} \)
                <br />
                    <input type="radio"/>
                    E. \(0 \)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal29" aria-expanded="false" aria-controls="collapsesoal29">
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal29">
                <div class="card card-body overflow-auto">
                    <p></p>
                <b class="text-end text-danger fw-bold"> <h3>JAWABAN : B</h3></b>
                </div>
                </div>
                <hr />

<!-- ------------------------------------------------------------------------------------------------------------------- -->
<!--=======================  soal30 ===================================-->
            <li>Titik Belok dari kurva \( y = \sin 2x +1 \) untuk  \( 0 < x < \pi \) adalah ....</li>
                    <input type="radio"/>
                    A. \( \displaystyle ( \frac{ \pi }{2}, 1) \)
                <br />
                    <input type="radio"/>
                    B. \(\displaystyle ( \frac{ \pi }{4}, 2) \)
                <br />
                    <input type="radio"/>
                    C. \(\displaystyle ( \frac{ \pi }{2}, 0) \)
                <br>
                    <input type="radio"/>
                    D. \(\displaystyle ( \frac{ \pi }{4}, 1) \)
                <br />
                    <input type="radio"/>
                    E. \(\displaystyle ( \frac{ 3 \pi }{4}, 1) \)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal30" aria-expanded="false" aria-controls="collapsesoal30">
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal30">
                <div class="card card-body overflow-auto">
                    <p></p>
                <b class="text-end text-danger fw-bold"> <h3>JAWABAN : A</h3></b>
                </div>
                </div>
                <hr />
            </ol>
<!-- ------------------------------------------------------------------------------------------------------------------- -->

</form>
<!-- ======================================PESAN DISQUS============================================= -->
            <div class="row">
                <div class="col">
                    <div id="disqus_thread"></div>
                </div>
            </div>
<!-- ======================================PESAN DISQUS============================================= -->
        </div>
            </div>
        </div>
</section>


@endsection

