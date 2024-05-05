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
            EKSPONEN - LATIHAN 02
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
             @csrf
             <ol type="1" class="mt-2">
                @include('konten.00semuamateri.identitas')
<!--=======================  soal1 ===================================-->
<li>Berapakah nilai dari \(\displaystyle \left(\frac{2^3 \cdot 3^2}{(2^2)^3}\right)^2\)?</li>
<input type="radio" name="soal1" value="0"/>
A. \(4\)
<br />
<input type="radio" name="soal1" value="0" />
B. \(8\)
<br />
<input type="radio" name="soal1" value="0"  />
C. \(16\)
<br>
<input type="radio" name="soal1" value="10" />
D. \(64\)
<br />
<input type="radio" name="soal1" value="0"/>
E. \(128\)
<br>
<button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal1" aria-expanded="false" aria-controls="collapsesoal1" disabled>
Alternatif Penyelesaian:
</button>
<div class="collapse" id="collapsesoal1">
<div class="card card-body overflow-auto">
<p></p>
<b class="text-end text-danger fw-bold"> <h3>JAWABAN : D</h3></b>
</div>
</div>
<hr />
<!--=======================  soal2 ===================================-->
<li>Jika \(\displaystyle a^{-3} = \frac{1}{81}\), maka nilai dari \(a^3\) adalah?</li>
<input type="radio" name="soal2" value="0"/>
A. \(\frac{1}{27}\)
<br />
<input type="radio" name="soal2" value="0" />
B. \(\frac{1}{9}\)
<br />
<input type="radio" name="soal2" value="0"  />
C. \(\frac{1}{3}\)
<br>
    <input type="radio" name="soal2" value="0" />
D. \(1\)
<br />
<input type="radio" name="soal2" value="10"/>
E. \(3\)
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
<li>Berapakah nilai dari \(\sqrt[4]{16} \cdot \sqrt[3]{64}\)?</li>
<input type="radio" name="soal3" value="0"/>
A. \(2\)
<br />
<input type="radio" name="soal3" value="10" />
B. \(4\)
<br />
<input type="radio" name="soal3" value="0"  />
C. \(8\)
<br>
<input type="radio" name="soal3" value="0" />
D. \(16\)
<br />
<input type="radio" name="soal3" value="0"/>
E. \(64\)
<br>
<button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal3" aria-expanded="false" aria-controls="collapsesoal3" disabled>
Alternatif Penyelesaian:
</button>
<div class="collapse" id="collapsesoal3">
<div class="card card-body overflow-auto">
<p></p>
<b class="text-end text-danger fw-bold"> <h3>JAWABAN : B</h3></b>
</div>
</div>
<hr />
<!--=======================  soal4 ===================================-->
<li>Jika \(b^3 = 216\), maka nilai dari \(\displaystyle \left(\frac{b^4}{b^2}\right)^3\) adalah?
</li>
<input type="radio" name="soal4" value="0"/>
A. \(36\)
<br />
<input type="radio" name="soal4" value="0" />
B. \(72\)
<br />
<input type="radio" name="soal4" value="0"  />
C. \(108\)
<br>
<input type="radio" name="soal4" value="0" />
D. \(144\)
<br />
<input type="radio" name="soal4" value="10"/>
E. \(216\)
<br>
<button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal4" aria-expanded="false" aria-controls="collapsesoal4" disabled>
Alternatif Penyelesaian:
</button>
<div class="collapse" id="collapsesoal4">
<div class="card card-body overflow-auto">
<p></p>
<b class="text-end text-danger fw-bold"> <h3>JAWABAN : E</h3></b>
</div>
</div>
<hr />
<!--=======================  soal5 ===================================-->
<li>Jika \(c^2 = 25\), maka berapakah nilai dari \(\displaystyle \frac{c^5}{c^{-3}}\)?
</li>
<input type="radio" name="soal5" value="0"/>
A. \(1\)
<br />
<input type="radio" name="soal5" value="0" />
B. \(5\)
<br />
<input type="radio" name="soal5" value="0"  />
C. \(25\)
<br>
<input type="radio" name="soal5" value="10" />
D. \(125\)
<br />
<input type="radio" name="soal5" value="0"/>
E. \(625\)
<br>
<button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal5" aria-expanded="false" aria-controls="collapsesoal5" disabled>
Alternatif Penyelesaian:
</button>
<div class="collapse" id="collapsesoal5">
<div class="card card-body overflow-auto">
<p></p>
<b class="text-end text-danger fw-bold"> <h3>JAWABAN : D</h3></b>
</div>
</div>
<hr />
<!--=======================  soal6 ===================================-->
<li>Dalam bentuk akar \(\displaystyle \sqrt[3]{x^6} \), bentuk yang setara adalah . . .</li>
<input type="radio" name="soal6" value="10"/>
A. \( x^2 \)
<br />
<input type="radio" name="soal6" value="0" />
B. \( x^3 \)
<br />
<input type="radio" name="soal6" value="0"  />
C. \( x^4 \)
<br>
<input type="radio" name="soal6" value="0" />
D. \( x^5 \)
<br />
<input type="radio" name="soal6" value="0"/>
E. \( x^6 \)
<br>
<button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal6" aria-expanded="false" aria-controls="collapsesoal6" disabled >
Alternatif Penyelesaian:
</button>
<div class="collapse" id="collapsesoal6">
<div class="card card-body overflow-auto">
<p></p>
<b class="text-end text-danger fw-bold"> <h3>JAWABAN : C</h3></b>
</div>
</div>
<hr />
<!--=======================  soal7 ===================================-->
<li>Jika \( \sqrt{x} = 3 \), maka nilai dari \( \sqrt[3]{x} \) adalah . . .</li>
<input type="radio" name="soal7" value="0"/>
A. \(\frac{1}{3}\)
<br />
<input type="radio" name="soal7" value="0" />
B. \(1\)
<br />
<input type="radio" name="soal7" value="10"  />
C. \(3\)
<br>
<input type="radio" name="soal7" value="0" />
D. \(9\)
<br />
<input type="radio" name="soal7" value="0"/>
E. \(27\)
<br>
<button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal7" aria-expanded="false" aria-controls="collapsesoal7" disabled>
Alternatif Penyelesaian:
</button>
<div class="collapse" id="collapsesoal7">
<div class="card card-body overflow-auto">
<p></p>
<b class="text-end text-danger fw-bold"> <h3>JAWABAN : C</h3></b>
</div>
</div>
<hr />
<!--=======================  soal8 ===================================-->
<li>Dalam bentuk akar \( \sqrt[4]{x^8} \), bentuk yang setara adalah...</li>
<input type="radio" name="soal8" value="0"/>
A. \(x^2\)
<br />
<input type="radio" name="soal8" value="10" />
B. \(x^4\)
<br />
<input type="radio" name="soal8" value="0"  />
C. \(x^6\)
<br>
<input type="radio" name="soal8" value="0" />
D. \(x^8\)
<br />
<input type="radio" name="soal8" value="0"/>
E. \(x^{16}\)
<br>
<button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal8" aria-expanded="false" aria-controls="collapsesoal8" disabled>
Alternatif Penyelesaian:
</button>
<div class="collapse" id="collapsesoal8">
<div class="card card-body overflow-auto">
<p></p>
<b class="text-end text-danger fw-bold"> <h3>JAWABAN : B</h3></b>
</div>
</div>
<hr />
<!--=======================  soal9 ===================================-->
<li>Jika \( \sqrt{x+4} = 6 \), maka nilai dari \( x \) adalah...</li>
<input type="radio" name="soal9" value="0"/>
A. \(10\)
<br />
<input type="radio" name="soal9" value="0" />
B. \(20\)
<br />
<input type="radio" name="soal9" value="0"  />
C. \(32\)
<br>
<input type="radio" name="soal9" value="10" />
D. \(36\)
<br />
<input type="radio" name="soal9" value="0"/>
E. \(42\)
<br>
<button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal9" aria-expanded="false" aria-controls="collapsesoal9" disabled>
Alternatif Penyelesaian:
</button>
<div class="collapse" id="collapsesoal9">
<div class="card card-body overflow-auto">
<p></p>
<b class="text-end text-danger fw-bold"> <h3>JAWABAN : C</h3></b>
</div>
</div>
<hr />
<!--=======================  soal10 ===================================-->
<li>Dalam bentuk akar \( \sqrt{x} + 2\sqrt{x} = 27 \), solusi \( x \) adalah...</li>
<input type="radio" name="soal10" value="10"/>
A. \(1\)
<br />
<input type="radio" name="soal10" value="0" />
B. \(2\)
<br />
<input type="radio" name="soal10" value="0"  />
C. \(3\)
<br>
<input type="radio" name="soal10" value="0" />
D. \(4\)
<br />
<input type="radio" name="soal10" value="0"/>
E. \(5\)
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
<!--=======================  soal11 ===================================-->
<li>Jika \(p \neq 0, q \neq 0\) dan \(r \neq 0\), maka bentuk sederhana dari \(\displaystyle \left(\frac{4p^{-1} q^2 r^3}{32p^2 q^{-1} r^6} \right)^{-1} \) adalah . . .</li>
<input type="radio" name="soal11" value="10"/>
A. \(8p^3 q^{-3} r^3 \)
<br />
<input type="radio" name="soal11" value="0" />
B. \(8pqr^2 \)
<br />
<input type="radio" name="soal11" value="0"  />
C. \(8pqr^{-3}\)
<br>
<input type="radio" name="soal11" value="0" />
D. \(\frac{1}{8}p^3 q^{-3} r^3\)
<br />
<input type="radio" name="soal11" value="0"/>
E. \(\frac{1}{8}pqr^2\)
<br>
<button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal11" aria-expanded="false" aria-controls="collapsesoal11" disabled>
Alternatif Penyelesaian:
</button>
<div class="collapse" id="collapsesoal11">
<div class="card card-body overflow-auto">
<p></p>
<b class="text-end text-danger fw-bold"> <h3>JAWABAN : A</h3></b>
</div>
</div>
<hr />
<!--=======================  soal12 ===================================-->
<li>Bentuk sederhana dari \(\displaystyle \left(\frac{3a^{-5}bc^4}{9a^{-8}b^3c^2} \right)^{-1} \) adalah . . .</li>
<input type="radio" name="soal12" value="0"/>
A. \(\displaystyle \frac{a^7c^2}{3b^6}\)
<br />
<input type="radio" name="soal12" value="0" />
B. \(\displaystyle \frac{a^3c^2}{3b^2}\)
<br />
<input type="radio" name="soal12" value="10"  />
C. \(\displaystyle \frac{3b^2}{a^3c^2}\)
<br>
<input type="radio" name="soal12" value="0" />
D. \(\displaystyle \frac{3b^6}{a^7 c^2}\)
<br />
<input type="radio" name="soal12" value="0"/>
E. \(\displaystyle \frac{3b^6}{a^3c}\)
<br>
<button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal12" aria-expanded="false" aria-controls="collapsesoal12" disabled>
Alternatif Penyelesaian:
</button>
<div class="collapse" id="collapsesoal12">
<div class="card card-body overflow-auto">
<p></p>
<b class="text-end text-danger fw-bold"> <h3>JAWABAN : C</h3></b>
</div>
</div>
<hr />
<!--=======================  soal13 ===================================-->
<li>Bentuk Sederhana dari \(\displaystyle \left(\frac{\frac{1}{8} m^{\frac{3}{2}}n^{-\frac{4}{3}}}{\frac{1}{2} m^{-\frac{1}{2}}n^{\frac{2}{3}}} \right)^{-1} \) adalah . . .</li>
<input type="radio" name="soal13" value="0"/>
A. \(\displaystyle \frac{n^2}{4m^2}\)
<br />
<input type="radio" name="soal13" value="10" />
B. \(\displaystyle \frac{4n^2}{m^2}\)
<br />
<input type="radio" name="soal13" value="0"  />
C. \(\displaystyle \frac{m^2}{4n^2}\)
<br>
<input type="radio" name="soal13" value="0" />
D. \(\displaystyle \frac{4m^2}{n^2}\)
<br />
<input type="radio" name="soal13" value="0"/>
E. \(\displaystyle 4m^2n^2\)
<br>
<button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal13" aria-expanded="false" aria-controls="collapsesoal13"disabled >
Alternatif Penyelesaian:
</button>
<div class="collapse" id="collapsesoal13">
<div class="card card-body overflow-auto">
<p></p>
<b class="text-end text-danger fw-bold"> <h3>JAWABAN : B</h3></b>
</div>
</div>
<hr />
<!--=======================  soal14 ===================================-->
<li>Jika diketahui \(\displaystyle x=\frac{1}{3}, y=\frac{1}{5}, z=2 \) maka nilai dari \(\displaystyle \frac{x^{-4} y z^{-2}}{x^{-3}y^2 z^{-4}} \) adalah . . .</li>
<input type="radio" name="soal14" value="0"/>
A. \(32\)
<br />
<input type="radio" name="soal14" value="10" />
B. \(60\)
<br />
<input type="radio" name="soal14" value="0"  />
C. \(100\)
<br>
<input type="radio" name="soal14" value="0" />
D. \(320\)
<br />
<input type="radio" name="soal14" value="0"/>
E. \(640\)
<br>
<button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal14" aria-expanded="false" aria-controls="collapsesoal14"disabled >
Alternatif Penyelesaian:
</button>
<div class="collapse" id="collapsesoal14">
<div class="card card-body overflow-auto">
<p></p>
<b class="text-end text-danger fw-bold"> <h3>JAWABAN : B</h3></b>
</div>
</div>
<hr />
<!--=======================  soal15 ===================================-->
<li>Jika \(4^x - 4^{x-1}=6 \) maka \((2x)^x\) sama dengan . . .</li>
<input type="radio" name="soal15" value="0"/>
A. \(3\)
<br />
<input type="radio" name="soal15" value="10" />
B. \(3\sqrt{3}\)
<br />
<input type="radio" name="soal15" value="0"  />
C. \(9\)
<br>
<input type="radio" name="soal15" value="0" />
D. \(9 \sqrt{3}\)
<br />
<input type="radio" name="soal15" value="0"/>
E. \(27\)
<br>
<button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal15" aria-expanded="false" aria-controls="collapsesoal15"disabled >
Alternatif Penyelesaian:
</button>
<div class="collapse" id="collapsesoal15">
<div class="card card-body overflow-auto">
<p></p>
<b class="text-end text-danger fw-bold"> <h3>JAWABAN : B</h3></b>
</div>
</div>
<hr />
<!--=======================  soal16 ===================================-->
<li>Bentuk sederhana dari \(\displaystyle \frac{x^{-1}+y^{-1}}{x^{-1}-y^{-1}}; y-x \neq 0\) adalah . . .</li>
<input type="radio" name="soal16" value="0"/>
A. \(\displaystyle \frac{x+y}{x-y}\)
<br />
<input type="radio" name="soal16" value="0" />
B. \(\displaystyle \frac{x-y}{x+y}\)
<br />
<input type="radio" name="soal16" value="10"  />
C. \(\displaystyle \frac{x+y}{y-x}\)
<br>
<input type="radio" name="soal16" value="0" />
D. \(\displaystyle \frac{y-x}{y+x}\)
<br />
<input type="radio" name="soal16" value="0"/>
E. \(\displaystyle \frac{x+y}{-x-y}\)
<br>
<button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal16" aria-expanded="false" aria-controls="collapsesoal16"disabled >
Alternatif Penyelesaian:
</button>
<div class="collapse" id="collapsesoal16">
<div class="card card-body overflow-auto">
<p></p>
<b class="text-end text-danger fw-bold"> <h3>JAWABAN : C</h3></b>
</div>
</div>
<hr />
<!--=======================  soal17 ===================================-->
<li>Bentuk pangkat tak negatif dari bentuk \(\displaystyle \frac{a^{-1}+b^{-1}}{(a+b)^{-1}} \) adala...</li>
<input type="radio" name="soal17" value="0"/>
A. \(\displaystyle \frac{ab}{a+b}\)
<br />
<input type="radio" name="soal17" value="0" />
B. \(\displaystyle \frac{a+b}{ab}\)
<br />
<input type="radio" name="soal17" value="10"  />
C. \(\displaystyle \frac{(a+b)^2}{ab}\)
<br>
<input type="radio" name="soal17" value="0" />
D. \(\displaystyle \frac{ab}{(a+b)^2}\)
<br />
<input type="radio" name="soal17" value="0"/>
E. \(\displaystyle \frac{(ab)^2}{a+b}\)
<br>
<button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal17" aria-expanded="false" aria-controls="collapsesoal17" disabled>
Alternatif Penyelesaian:
</button>
<div class="collapse" id="collapsesoal17">
<div class="card card-body overflow-auto">
<p></p>
<b class="text-end text-danger fw-bold"> <h3>JAWABAN : A</h3></b>
</div>
</div>
<hr />
<!--=======================  soal18 ===================================-->
<li>Bentuk eksponen \(\displaystyle \frac{x^{-2}-y^{-2}}{x^{-1}+y^{-1}} \) senilai dengan . . .</li>
<input type="radio" name="soal18" value="10"/>
A. \(\displaystyle \frac{y-x}{xy}\)
<br />
<input type="radio" name="soal18" value="0" />
B. \(\displaystyle \frac{x-y}{xy}\)
<br />
<input type="radio" name="soal18" value="0"  />
C. \(\displaystyle \frac{y+x}{xy}\)
<br>
<input type="radio" name="soal18" value="0" />
D. \(\displaystyle \frac{(x+y)^2}{xy}\)
<br />
<input type="radio" name="soal18" value="0"/>
E. \(\displaystyle \frac{(x-y)^2}{xy}\)
<br>
<button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal18" aria-expanded="false" aria-controls="collapsesoal18" disabled>
Alternatif Penyelesaian:
</button>
<div class="collapse" id="collapsesoal18">
<div class="card card-body overflow-auto">
<p></p>
<b class="text-end text-danger fw-bold"> <h3>JAWABAN : A</h3></b>
</div>
</div>
<hr />
<!--=======================  soal19 ===================================-->
<li>Bentuk dari : \(\displaystyle \frac{(x^2)^4}{y^{-1}} \times \frac{(y^2)^{-3}}{x^3} \) dapat disederhanakan menjadi...</li>
<input type="radio" name="soal19" value="0"/>
A. \(x^5y\)
<br />
<input type="radio" name="soal19" value="0" />
B. \(xy^5\)
<br />
<input type="radio" name="soal19" value="0"  />
C. \((xy)^5\)
<br>
<input type="radio" name="soal19" value="10" />
D. \(\displaystyle \left(\frac{x}{y} \right)^5 \)
<br />
<input type="radio" name="soal19" value="0"/>
E. \(25xy\)
<br>
<button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal19" aria-expanded="false" aria-controls="collapsesoal19" disabled>
Alternatif Penyelesaian:
</button>
<div class="collapse" id="collapsesoal19">
<div class="card card-body overflow-auto">
<p></p>
<b class="text-end text-danger fw-bold"> <h3>JAWABAN : D</h3></b>
</div>
</div>
<hr />
<!--=======================  soal20 ===================================-->
<li>Bentuk sederhana dari \((2\sqrt{5} + 3\sqrt{2})(6\sqrt{5}-2\sqrt{2}) \) adalah . . .</li>
<input type="radio" name="soal20" value="0"/>
A. \(72 + 14 \sqrt{10}\)
<br />
<input type="radio" name="soal20" value="0" />
B. \(72 - 22\sqrt{10}\)
<br />
<input type="radio" name="soal20" value="0"  />
C. \(48+22\sqrt{10}\)
<br>
<input type="radio" name="soal20" value="10" />
D. \(48+14\sqrt{10}\)
<br />
<input type="radio" name="soal20" value="0"/>
E. \(48-14\sqrt{10}\)
<br>
<button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal20" aria-expanded="false" aria-controls="collapsesoal20"disabled >
Alternatif Penyelesaian:
</button>
<div class="collapse" id="collapsesoal20">
<div class="card card-body overflow-auto">
<p></p>
<b class="text-end text-danger fw-bold"> <h3>JAWABAN : D</h3></b>
</div>
</div>
<hr />
<!--=======================  soal21 ===================================-->
<li>Hasil dari \((5\sqrt{3} - 7\sqrt{2})(6\sqrt{2} +4\sqrt{2})=... \)</li>
<input type="radio" name="soal21" value="0"/>
A. \(22-24\sqrt{3}\)
<br />
<input type="radio" name="soal21" value="10" />
B. \(34-22\sqrt{6}\)
<br />
<input type="radio" name="soal21" value="0"  />
C. \(22+34\sqrt{6}\)
<br>
<input type="radio" name="soal21" value="0" />
D. \(34+18\sqrt{3}\)
<br />
<input type="radio" name="soal21" value="0"/>
E. \(146+22\sqrt{6}\)
<br>
<button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal21" aria-expanded="false" aria-controls="collapsesoal21" disabled>
Alternatif Penyelesaian:
</button>
<div class="collapse" id="collapsesoal21">
<div class="card card-body overflow-auto">
<p></p>
<b class="text-end text-danger fw-bold"> <h3>JAWABAN : B</h3></b>
</div>
</div>
<hr />
<!--=======================  soal22 ===================================-->
<li>Bentuk sederhana dari \(\displaystyle \frac{2+\sqrt{5}}{2-\sqrt{5}} \) adalah . . .</li>
<input type="radio" name="soal22" value="0"/>
A. \(-1\)
<br />
<input type="radio" name="soal22" value="0" />
B. \(0\)
<br />
<input type="radio" name="soal22" value="0"  />
C. \(4+\sqrt{10}\)
<br>
<input type="radio" name="soal22" value="10" />
D. \(-9-4\sqrt{5}\)
<br />
<input type="radio" name="soal22" value="0"/>
E. \(-9+5\sqrt{5}\)
<br>
<button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal22" aria-expanded="false" aria-controls="collapsesoal22"disabled >
Alternatif Penyelesaian:
</button>
<div class="collapse" id="collapsesoal22">
<div class="card card-body overflow-auto">
<p></p>
<b class="text-end text-danger fw-bold"> <h3>JAWABAN : D</h3></b>
</div>
</div>
<hr />
<!--=======================  soal23 ===================================-->
<li>Bentuk sederhana dari \(\displaystyle \frac{\sqrt{5}+2\sqrt{3}}{\sqrt{5}-3\sqrt{3}} =...\)</li>
<input type="radio" name="soal23" value="0"/>
A. \(\displaystyle \frac{20+5\sqrt{15}}{22}\)
<br />
<input type="radio" name="soal23" value="0" />
B. \(\displaystyle \frac{23-5\sqrt{15}}{22}\)
<br />
<input type="radio" name="soal23" value="0"  />
C. \(\displaystyle \frac{20-5\sqrt{15}}{22}\)
<br>
<input type="radio" name="soal23" value="0" />
D. \(\displaystyle \frac{20+5\sqrt{15}}{-22}\)
<br />
<input type="radio" name="soal23" value="10"/>
E. \(\displaystyle \frac{23+5\sqrt{15}}{-22}\)
<br>
<button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal23" aria-expanded="false" aria-controls="collapsesoal23"disabled >
Alternatif Penyelesaian:
</button>
<div class="collapse" id="collapsesoal23">
<div class="card card-body overflow-auto">
<p></p>
<b class="text-end text-danger fw-bold"> <h3>JAWABAN : E</h3></b>
</div>
</div>
<hr />
<!--=======================  soal24 ===================================-->
<li> Jika \(a = (5 + \sqrt{50})\), \(b = (2 + \sqrt{18})\) dan \(c = (7 - \sqrt{32})\) maka bentuk paling sederhana dari \((a + b - c)\) adalah . . .</li>
<input type="radio" name="soal24" value="10"/>
A. \(6\)
<br />
<input type="radio" name="soal24" value="0" />
B. \(2\sqrt{2}\)
<br />
<input type="radio" name="soal24" value="0"  />
C. \(\sqrt{2}\)
<br>
<input type="radio" name="soal24" value="0" />
D. \(4\sqrt{2}\)
<br />
<input type="radio" name="soal24" value="0"/>
E. \(12\sqrt{2}\)
<br>
<button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal24" aria-expanded="false" aria-controls="collapsesoal24"disabled >
Alternatif Penyelesaian:
</button>
<div class="collapse" id="collapsesoal24">
<div class="card card-body overflow-auto">
<p></p>
<b class="text-end text-danger fw-bold"> <h3>JAWABAN : E</h3></b>
</div>
</div>
<hr />
<!--=======================  soal25 ===================================-->
<li>Dengan merasionalkan penyebut dari \(\displaystyle \frac{\sqrt{3}- 2}{\sqrt{3}+2}\) , bentuk sederhananya adalah...</li>
<input type="radio" name="soal25" value="0"/>
A. \(-7 - 4\sqrt{3}\)
<br />
<input type="radio" name="soal25" value="0" />
B. \(-7 + 4\sqrt{3}\)
<br />
<input type="radio" name="soal25" value="0"  />
C. \(\displaystyle -1 + \frac{4}{7} \sqrt{3}\)
<br>
<input type="radio" name="soal25" value="10" />
D. \(1 + \frac{4}{7} \sqrt{3}\)
<br />
<input type="radio" name="soal25" value="0"/>
E. \(1 + 4 \sqrt{3}\)
<br>
<button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal25" aria-expanded="false" aria-controls="collapsesoal25"disabled >
Alternatif Penyelesaian:
</button>
<div class="collapse" id="collapsesoal25">
<div class="card card-body overflow-auto">
<p></p>
<b class="text-end text-danger fw-bold"> <h3>JAWABAN : D</h3></b>
</div>
</div>
<hr />

            </ol>

{{-- COPY DARI SINI SETIAP SOAL --}}
<input type="hidden" id="materi" name="materi" value="eksponen02">
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
    <a href="/create_eksponen02" id="kirimsaja" class="btn btn-warning btn-bukti d-none" >SIMPAN JAWABAN</a>
</div>
</form>
{{-- COPY SAMPAI SINI --}}

<div id="disqus_thread"></div>

</div>
</div>
</div>
</section>
@endsection

