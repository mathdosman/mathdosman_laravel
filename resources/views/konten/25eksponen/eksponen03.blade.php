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
            EKSPONEN - LATIHAN 03
          </h2>
          <h3>Eksponen, Akar, Logaritma</h3>
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
                <li>Bentuk sederhana dari \(\displaystyle \left(\frac{2x^5 y^{-4}}{5x^8 y^{-6}}\right)^{-3} \) adalah . . .</li>
                    <input type="radio" name="soal1" value="A"/>
                    A. \(\displaystyle \frac{8x^3}{125y} \)
                <br />
                    <input type="radio" name="soal1" value="B"/>
                    B. \(\displaystyle \frac{125x^9}{8y^6} \)
                <br />
                    <input type="radio" name="soal1" value="C"/>
                    C. \(\displaystyle \frac{8x^9}{125y^6} \)
                <br>
                    <input type="radio" name="soal1" value="D"/>
                    D. \( \displaystyle \frac{625x^9}{125y^6} \)
                <br />
                    <input type="radio" name="soal1" value="E"/>
                    E. \(\displaystyle \frac{16y^6}{625x^9} \)
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
            <li>Bentuk sederhana dari \(\displaystyle \left( \frac{\displaystyle \frac{1}{3} p^{\frac{1}{3}} q^{-\frac{3}{2}} }{\displaystyle \frac{1}{9} p^{\frac{4}{3}} q^{\frac{1}{2}} } \right)^{-1} \) </li>
                    <input type="radio" name="soal2" value="A"/>
                    A. \(3p^2 q \)
                <br />
                    <input type="radio" name="soal2" value="B"/>
                    B. \(3pq^2 \)
                <br />
                    <input type="radio" name="soal2" value="C"/>
                    C. \(\displaystyle \frac{q^2}{3p} \)
                <br>
                    <input type="radio" name="soal2" value="D"/>
                    D. \(\displaystyle \frac{p^2q}{3} \)
                <br />
                    <input type="radio" name="soal2" value="E"/>
                    E. \( \displaystyle \frac{pq^2}{3} \)
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
            <li>Untuk \(p=4 \), \(q=8\) dan \(r=16\), nilai dari \(\displaystyle \left( \frac{p^{\frac{1}{2}} \cdot q \cdot r^{\frac{3}{4}} }{p^2 \cdot q^{\frac{2}{3}} r^{\frac{1}{2}}} \right) \) adalah . . .</li>
                    <input type="radio" name="soal3" value="A"/>
                    A. \(\displaystyle -\frac{1}{2} \)
                <br />
                    <input type="radio" name="soal3" value="B"/>
                    B. \(\displaystyle -\frac{1}{4} \)
                <br />
                    <input type="radio" name="soal3" value="C"/>
                    C. \(\displaystyle \frac{1}{4} \)
                <br>
                    <input type="radio" name="soal3" value="D"/>
                    D. \(\displaystyle \frac{1}{2} \)
                <br />
                    <input type="radio" name="soal3" value="E"/>
                    E. \(1 \)
                <br>
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
            <li>Bentuk sederhana dari \(\sqrt{72} - \sqrt{242} - \sqrt{18} + \sqrt{32} \) sama dengan . . .</li>
                    <input type="radio" name="soal4" value="A"/>
                    A. \(-7 \sqrt{2} \)
                <br />
                    <input type="radio" name="soal4" value="B"/>
                    B. \(-6\sqrt{2} \)
                <br />
                    <input type="radio" name="soal4" value="C"/>
                    C. \(-5\sqrt{2} \)
                <br>
                    <input type="radio" name="soal4" value="D"/>
                    D. \(-4\sqrt{2} \)
                <br />
                    <input type="radio" name="soal4" value="E"/>
                    E. \(-2\sqrt{2} \)
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
            <li>Hasil dari \(\sqrt{50} - \sqrt{108} +2\sqrt{12} + \sqrt{32} \) adalah . . . </li>
                    <input type="radio" name="soal5" value="A"/>
                    A. \(7\sqrt{2}-2\sqrt{3} \)
                <br />
                    <input type="radio" name="soal5" value="B"/>
                    B. \(13\sqrt{2}-14\sqrt{3} \)
                <br />
                    <input type="radio" name="soal5" value="C"/>
                    C. \(9\sqrt{2} - 4\sqrt{3}\)
                <br>
                    <input type="radio" name="soal5" value="D"/>
                    D. \( 9\sqrt{2} - 2\sqrt{3}\)
                <br />
                    <input type="radio" name="soal5" value="E"/>
                    E. \(13\sqrt{2} - 2\sqrt{3} \)
                <br>
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
            <li>Bentuk sederhana dari \(\displaystyle \frac{13}{5+2\sqrt{3}} \) adalah . . .</li>
                    <input type="radio" name="soal6" value="A"/>
                    A. \(5- 2\sqrt{3} \)
                <br />
                    <input type="radio" name="soal6" value="B"/>
                    B. \(\displaystyle \frac{1}{7} (5-2\sqrt{3}) \)
                <br />
                    <input type="radio" name="soal6" value="C"/>
                    C. \( 114 +22\sqrt{3} \)
                <br>
                    <input type="radio" name="soal6" value="D"/>
                    D. \(5 +2\sqrt{3} \)
                <br />
                    <input type="radio" name="soal6" value="E"/>
                    E. \(\displaystyle \frac{13}{37} (5-2\sqrt{3}) \)
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
            <li>Bentuk sederhana \(\displaystyle \frac{2}{3-\sqrt{7}} \) adalah . . . </li>
                    <input type="radio" name="soal7" value="A"/>
                    A. \(6+2\sqrt{5} \)
                <br />
                    <input type="radio" name="soal7" value="B"/>
                    B. \(6-2\sqrt{7} \)
                <br />
                    <input type="radio" name="soal7" value="C"/>
                    C. \(3+\sqrt{7} \)
                <br>
                    <input type="radio" name="soal7" value="D"/>
                    D. \(3-\sqrt{7} \)
                <br />
                    <input type="radio" name="soal7" value="E"/>
                    E. \(-3-\sqrt{7} \)
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
            <li>Bentuk sederhana dari \(\displaystyle \frac{\sqrt{5}+\sqrt{3}}{\sqrt{5}-\sqrt{3}} \) adalah . . . </li>
                    <input type="radio" name="soal8" value="A"/>
                    A. \(4-2\sqrt{15} \)
                <br />
                    <input type="radio" name="soal8" value="B"/>
                    B. \(4-\sqrt{15} \)
                <br />
                    <input type="radio" name="soal8" value="C"/>
                    C. \(4+\sqrt{15} \)
                <br>
                    <input type="radio" name="soal8" value="D"/>
                    D. \(4+2\sqrt{15} \)
                <br />
                    <input type="radio" name="soal8" value="E"/>
                    E. \(8+2\sqrt{15} \)
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
            <li>Bentuk sederhana dari \(\displaystyle \frac{1-2\sqrt{5}}{2+\sqrt{5}} \) adalah . . .</li>
                    <input type="radio" name="soal9" value="A"/>
                    A. \(-12-5\sqrt{5} \)
                <br />
                    <input type="radio" name="soal9" value="B"/>
                    B. \(-12 + 5\sqrt{5} \)
                <br />
                    <input type="radio" name="soal9" value="C"/>
                    C. \(12 - 3\sqrt{5} \)
                <br>
                    <input type="radio" name="soal9" value="D"/>
                    D. \(12+3\sqrt{15} \)
                <br />
                    <input type="radio" name="soal9" value="E"/>
                    E. \( 12+5\sqrt{5}\)
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
            <li>Hasil dari \(\displaystyle \frac{7(1+\sqrt{2})(1-\sqrt{2})}{3+\sqrt{2}} \) adalah . . .</li>
                    <input type="radio" name="soal10" value="A"/>
                    A. \(-4 -\sqrt{3} \)
                <br />
                    <input type="radio" name="soal10" value="B"/>
                    B. \(-3 +\sqrt{2} \)
                <br />
                    <input type="radio" name="soal10" value="C"/>
                    C. \(3+\sqrt{2} \)
                <br>
                    <input type="radio" name="soal10" value="D"/>
                    D. \(7\sqrt{2}-21 \)
                <br />
                    <input type="radio" name="soal10" value="E"/>
                    E. \(21 -7\sqrt{2} \)
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
            <li>Nilai dari \(\displaystyle \frac{^5 \log 6^2}{^5 \log \sqrt[3]{6^2}} =...\)</li>
                    <input type="radio" name="soal11" value="A"/>
                    A. \(15 \)
                <br />
                    <input type="radio" name="soal11" value="B"/>
                    B. \(\displaystyle \frac{20}{3} \)
                <br />
                    <input type="radio" name="soal11" value="C"/>
                    C. \(3 \)
                <br>
                    <input type="radio" name="soal11" value="D"/>
                    D. \(\displaystyle \frac{4}{3} \)
                <br />
                    <input type="radio" name="soal11" value="E"/>
                    E. \(\displaystyle \frac{4}{15} \)
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
            <li>Nilai dari \(\displaystyle ^{\frac{1}{2}} \log 5 \times ^5 \log 4 \times ^2 \log \frac{1}{8} \times \left(^5 \log 25 \right)^2 = . . .\)</li>
                    <input type="radio" name="soal12" value="A"/>
                    A. \(24 \)
                <br />
                    <input type="radio" name="soal12" value="B"/>
                    B. \(12 \)
                <br />
                    <input type="radio" name="soal12" value="C"/>
                    C. \(8 \)
                <br>
                    <input type="radio" name="soal12" value="D"/>
                    D. \(-4 \)
                <br />
                    <input type="radio" name="soal12" value="E"/>
                    E. \(-12 \)
                <br>
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
            <li>Nilai dari \(\displaystyle \frac{\log 8\sqrt{3} + \log 9\sqrt{3}}{\log 6} =...\)</li>
                    <input type="radio" name="soal13" value="A"/>
                    A. \( 1\)
                <br />
                    <input type="radio" name="soal13" value="B"/>
                    B. \( 2\)
                <br />
                    <input type="radio" name="soal13" value="C"/>
                    C. \(3 \)
                <br>
                    <input type="radio" name="soal13" value="D"/>
                    D. \( 6\)
                <br />
                    <input type="radio" name="soal13" value="E"/>
                    E. \( 36\)
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
            <li>Nilai dari \(\displaystyle 2 (^3 \log 4) - \frac{1}{2} (^3\log25) + ^3 \log 10 - ^3 \log 32 \) adalah . . .</li>
                    <input type="radio" name="soal14" value="A"/>
                    A. \(\displaystyle \frac{1}{3} \)
                <br />
                    <input type="radio" name="soal14" value="B"/>
                    B. \(0 \)
                <br />
                    <input type="radio" name="soal14" value="C"/>
                    C. \(1 \)
                <br>
                    <input type="radio" name="soal14" value="D"/>
                    D. \(3 \)
                <br />
                    <input type="radio" name="soal14" value="E"/>
                    E. \(9 \)
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
            <li>Jika \(^2\log5 = x \), maka \(^{125}\log 32 = ...\)</li>
                    <input type="radio" name="soal15" value="A"/>
                    A. \(\displaystyle \frac{2x}{5} \)
                <br />
                    <input type="radio" name="soal15" value="B"/>
                    B. \(\displaystyle \frac{3x}{5} \)
                <br />
                    <input type="radio" name="soal15" value="C"/>
                    C. \(\displaystyle \frac{3}{5x} \)
                <br>
                    <input type="radio" name="soal15" value="D"/>
                    D. \(\displaystyle \frac{5x}{3} \)
                <br />
                    <input type="radio" name="soal15" value="E"/>
                    E. \(\displaystyle \frac{5}{3x} \)
                <br>
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
<!--=======================  soal16 ===================================-->
            <li>Jika \(\log 2 = m\) dan \(\log 3 = n \), maka \( \displaystyle \log \left(\frac{27}{8}\right)\) adalah . . .</li>
                    <input type="radio" name="soal16" value="A"/>
                    A. \(3(m-n) \)
                <br />
                    <input type="radio" name="soal16" value="B"/>
                    B. \(3(n-m) \)
                <br />
                    <input type="radio" name="soal16" value="C"/>
                    C. \(3(n+m) \)
                <br>
                    <input type="radio" name="soal16" value="D"/>
                    D. \(3(m.n) \)
                <br />
                    <input type="radio" name="soal16" value="E"/>
                    E. \(\displaystyle 3\left(\frac{m}{n}\right) \)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal16" aria-expanded="false" aria-controls="collapsesoal16" disabled>
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal16">
                <div class="card card-body overflow-auto">
                    <p></p>
                <b class="text-end text-danger fw-bold"> <h3>JAWABAN : </h3></b>
                </div>
                </div>
                <hr />
<!--=======================  soal17 ===================================-->
            <li>Untuk \(p=27\), \(q=4\) dan \(r=25\), nilai dari \(\displaystyle \left(\frac{p^{-\frac{1}{3}} . q. r^{\frac{4}{3}}}{p^{\frac{1}{3}}.q^{-\frac{2}{3}}.r^{\frac{1}{4}} }\right) \) adalah . . .</li>
                    <input type="radio" name="soal17" value="A"/>
                    A. \(\displaystyle \frac{45}{16} \)
                <br />
                    <input type="radio" name="soal17" value="B"/>
                    B. \(\displaystyle \frac{80}{9} \)
                <br />
                    <input type="radio" name="soal17" value="C"/>
                    C. \(\displaystyle \frac{225}{16} \)
                <br>
                    <input type="radio" name="soal17" value="D"/>
                    D. \(\displaystyle \frac{144}{5} \)
                <br />
                    <input type="radio" name="soal17" value="E"/>
                    E. \(\displaystyle 720 \)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal17" aria-expanded="false" aria-controls="collapsesoal17" disabled>
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal17">
                <div class="card card-body overflow-auto">
                    <p></p>
                <b class="text-end text-danger fw-bold"> <h3>JAWABAN : </h3></b>
                </div>
                </div>
                <hr />
<!--=======================  soal18 ===================================-->
            <li>Bentuk sederhana dari \(\displaystyle \frac{y^{-1} + xy^{-2}  }{1-x^2y^{-2}} \) adalah . . .</li>
                    <input type="radio" name="soal18" value="A"/>
                    A. \(\displaystyle \frac{1}{y-x} \)
                <br />
                    <input type="radio" name="soal18" value="B"/>
                    B. \(\displaystyle \frac{1}{y+x} \)
                <br />
                    <input type="radio" name="soal18" value="C"/>
                    C. \(\displaystyle \frac{1}{x-y} \)
                <br>
                    <input type="radio" name="soal18" value="D"/>
                    D. \( x-y \)
                <br />
                    <input type="radio" name="soal18" value="E"/>
                    E. \(y-x \)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal18" aria-expanded="false" aria-controls="collapsesoal18" disabled>
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal18">
                <div class="card card-body overflow-auto">
                    <p></p>
                <b class="text-end text-danger fw-bold"> <h3>JAWABAN : </h3></b>
                </div>
                </div>
                <hr />
<!--=======================  soal19 ===================================-->
            <li>Nilai dari \(\displaystyle \frac{^2 \log ^2 8 - ^2 \log ^2 2}{^2 \log \sqrt{8}-^2 \log \sqrt{2}} \)</li>
                    <input type="radio" name="soal19" value="A"/>
                    A. \(5 \)
                <br />
                    <input type="radio" name="soal19" value="B"/>
                    B. \(6 \)
                <br />
                    <input type="radio" name="soal19" value="C"/>
                    C. \(7 \)
                <br>
                    <input type="radio" name="soal19" value="D"/>
                    D. \(8 \)
                <br />
                    <input type="radio" name="soal19" value="E"/>
                    E. \(10 \)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal19" aria-expanded="false" aria-controls="collapsesoal19" disabled>
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal19">
                <div class="card card-body overflow-auto">
                    <p>
                        \begin{align*}
                        \frac{^2 \log ^2 8 - ^2 \log ^2 2}{^2 \log \sqrt{8}-^2 \log \sqrt{2}} &= \frac{(^2 \log 8)^2 - (^2 \log 2)^2}{^2 \log \sqrt{8}-^2 \log \sqrt{2}} \\
                        &= \frac{(^2 \log 8 - ^2 \log 2)(^2 \log 8 + ^2 \log 2) }{^2 \log \sqrt{8}-^2 \log \sqrt{2}} \\
                        &= \frac{(^2 \log 2^3 - ^2 \log 2)(^2 \log 2^3 + ^2 \log 2) }{^2 \log 2^{\frac{3}{2}} -^2 \log 2^{\frac{1}{2}}} \\
                        &= \frac{(3 \; ^2 \log 2 - ^2 \log 2)(3 \; ^2 \log 2 + ^2 \log 2) }{\frac{3}{2} \; ^2 \log 2 -\frac{1}{2} \; ^2 \log 2} \\
                        &= \frac{(3-1)(3+1)}{\frac{3}{2}-\frac{1}{2}} \\
                        &= \frac{(2)(4)}{\frac{2}{2}} \\
                        &= 8
                        \end{align*}

                        Jadi, jawabannya adalah \(\boxed{8}\)
                    </p>
                <b class="text-end text-danger fw-bold"> <h3>JAWABAN : D</h3></b>
                </div>
                </div>
                <hr />
<!--=======================  soal20 ===================================-->
            <li>Jika \(^a \log x = 3 \) dan \(^{3a} \log y =3 \) maka nilai \(\displaystyle \frac{y}{x} = ...\)</li>
                    <input type="radio" name="soal20" value="A"/>
                    A. \( 1\)
                <br />
                    <input type="radio" name="soal20" value="B"/>
                    B. \( 3\)
                <br />
                    <input type="radio" name="soal20" value="C"/>
                    C. \(9 \)
                <br>
                    <input type="radio" name="soal20" value="D"/>
                    D. \( 27\)
                <br />
                    <input type="radio" name="soal20" value="E"/>
                    E. \(81 \)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal20" aria-expanded="false" aria-controls="collapsesoal20" disabled>
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal20">
                <div class="card card-body overflow-auto">
                    <p>Kita tahu bahwa jika \(^b \log y = c\), maka \(b^c = y\). <br> Jadi, dalam kasus ini, \((3a)^3 = y\) dan \(a^3 = x\)
                        <br>
                        Kini, kita dapat mencari nilai \(\displaystyle \frac{y}{x}\):

                        \[\frac{y}{x} = \frac{(3a)^3}{a^3} = \frac{27a^3}{a^3} = 27\]
                        <br>
                        Jadi, nilai dari \(\displaystyle \frac{y}{x}\) adalah \(\boxed{27}\).</p>
                <b class="text-end text-danger fw-bold"> <h3>JAWABAN : D</h3></b>
                </div>
                </div>
                <hr />

            </ol>

{{-- COPY DARI SINI SETIAP SOAL --}}
<input type="hidden" id="materi" name="materi" value="eksponen03">
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
    <a href="/create_eksponen03" id="kirimsaja" class="btn btn-warning btn-bukti d-none" >SIMPAN JAWABAN</a>
</div>
</form>
{{-- COPY SAMPAI SINI --}}

<div id="disqus_thread"></div>

</div>
</div>
</div>
</section>
@endsection

