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
            EKSPONEN - LATIHAN 01
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
<li>Nilai dari \(2^3\) adalah...</li>
<input type="radio" name="soal1" value="0"/>
A. \(2\)
<br />
<input type="radio" name="soal1" value="0" />
B. \(4\)
<br />
<input type="radio" name="soal1" value="0"  />
C. \(6\)
<div class="col-md">
<input type="radio" name="soal1" value="10" />
D. \(8\)
<br />
<input type="radio" name="soal1" value="0"/>
E. \(16\)
<br>
<button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal1" aria-expanded="false" aria-controls="collapsesoal1" >
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
<li>Jika \(3^x = 9\), maka nilai \(x\) adalah...</li>
<input type="radio" name="soal2" value="10"/>
A. \(2\)
<br />
<input type="radio" name="soal2" value="0" />
B. \(3\)
<br />
<input type="radio" name="soal2" value="0"  />
C. \(4\)
<div class="col-md">
<input type="radio" name="soal2" value="0" />
D. \(6\)
<br />
<input type="radio" name="soal2" value="0"/>
E. \(9\)
<br>
<button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal2" aria-expanded="false" aria-controls="collapsesoal2" >
Alternatif Penyelesaian:
</button>
<div class="collapse" id="collapsesoal2">
<div class="card card-body overflow-auto">
<p></p>
<b class="text-end text-danger fw-bold"> <h3>JAWABAN : A</h3></b>
</div>
</div>
<hr />
<!--=======================  soal3 ===================================-->
<li>Bentuk sederhana dari \(4^3 \times 4^2\) adalah...</li>
<input type="radio" name="soal3" value="0"/>
A. \(8^5\)
<br />
<input type="radio" name="soal3" value="10" />
B. \(16^5\)
<br />
<input type="radio" name="soal3" value="0"  />
C. \(64^3\)
<div class="col-md">
<input type="radio" name="soal3" value="0" />
D. \(128^2\)
<br />
<input type="radio" name="soal3" value="0"/>
E. \(256^2\)
<br>
<button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal3" aria-expanded="false" aria-controls="collapsesoal3" >
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
<li>Jika \(5^a = \frac{1}{25}\), maka nilai \(a\) adalah...</li>
<input type="radio" name="soal4" value="0"/>
A. \(-1\)
<br />
<input type="radio" name="soal4" value="10" />
B. \(-2\)
<br />
<input type="radio" name="soal4" value="0"  />
C. \(-3\)
<div class="col-md">
<input type="radio" name="soal4" value="0" />
D. \(-4\)
<br />
<input type="radio" name="soal4" value="0"/>
E. \(-5\)
<br>
<button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal4" aria-expanded="false" aria-controls="collapsesoal4" >
Alternatif Penyelesaian:
</button>
<div class="collapse" id="collapsesoal4">
<div class="card card-body overflow-auto">
<p></p>
<b class="text-end text-danger fw-bold"> <h3>JAWABAN : B</h3></b>
</div>
</div>
<hr />
<!--=======================  soal5 ===================================-->
<li>Hasil dari \(10^0\) adalah...</li>
<input type="radio" name="soal5" value="10"/>
A. \(1\)
<br />
<input type="radio" name="soal5" value="0" />
B. \(10\)
<br />
<input type="radio" name="soal5" value="0"  />
C. \(100\)
<div class="col-md">
<input type="radio" name="soal5" value="0" />
D. \(0\)
<br />
<input type="radio" name="soal5" value="0"/>
E. \(0,1\)
<br>
<button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal5" aria-expanded="false" aria-controls="collapsesoal5" >
Alternatif Penyelesaian:
</button>
<div class="collapse" id="collapsesoal5">
<div class="card card-body overflow-auto">
<p></p>
<b class="text-end text-danger fw-bold"> <h3>JAWABAN : A</h3></b>
</div>
</div>
<hr />
<!--=======================  soal6 ===================================-->
<li>Nilai dari \(2^4 \times 2^{-2}\) adalah...</li>
<input type="radio" name="soal6" value="0"/>
A. \(2^2\)
<br />
<input type="radio" name="soal6" value="0" />
B. \(2^3\)
<br />
<input type="radio" name="soal6" value="10"  />
C. \(2^4\)
<div class="col-md">
<input type="radio" name="soal6" value="0" />
D. \(2^5\)
<br />
<input type="radio" name="soal6" value="0"/>
E. \(2^6\)
<br>
<button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal6" aria-expanded="false" aria-controls="collapsesoal6" >
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
<li>Jika \(2^x = \frac{1}{8}\), maka nilai \(x\) adalah...</li>
<input type="radio" name="soal7" value="0"/>
A. \(-1\)
<br />
<input type="radio" name="soal7" value="0" />
B. \(-2\)
<br />
<input type="radio" name="soal7" value="10"  />
C. \(-3\)
<div class="col-md">
<input type="radio" name="soal7" value="0" />
D. \(-4\)
<br />
<input type="radio" name="soal7" value="0"/>
E. \(-5\)
<br>
<button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal7" aria-expanded="false" aria-controls="collapsesoal7" >
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
<li>Bentuk desimal dari \(7^{-2}\) adalah...</li>
<input type="radio" name="soal8" value="0"/>
A. \(0.14\)
<br />
<input type="radio" name="soal8" value="0" />
B. \(0.02\)
<br />
<input type="radio" name="soal8" value="0"  />
C. \(0.1\)
<div class="col-md">
<input type="radio" name="soal8" value="10" />
D. \(0.04\)
<br />
<input type="radio" name="soal8" value="0"/>
E. \(0.08\)
<br>
<button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal8" aria-expanded="false" aria-controls="collapsesoal8" >
Alternatif Penyelesaian:
</button>
<div class="collapse" id="collapsesoal8">
<div class="card card-body overflow-auto">
<p></p>
<b class="text-end text-danger fw-bold"> <h3>JAWABAN : D</h3></b>
</div>
</div>
<hr />
<!--=======================  soal9 ===================================-->
<li>Nilai dari \(5^{\frac{1}{2}}\) adalah...</li>
<input type="radio" name="soal9" value="10"/>
A. \(2\)
<br />
<input type="radio" name="soal9" value="0" />
B. \(3\)
<br />
<input type="radio" name="soal9" value="0"  />
C. \(4\)
<div class="col-md">
<input type="radio" name="soal9" value="0" />
D. \(5\)
<br />
<input type="radio" name="soal9" value="0"/>
E. \(25\)
<br>
<button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal9" aria-expanded="false" aria-controls="collapsesoal9" >
Alternatif Penyelesaian:
</button>
<div class="collapse" id="collapsesoal9">
<div class="card card-body overflow-auto">
<p></p>
<b class="text-end text-danger fw-bold"> <h3>JAWABAN : A</h3></b>
</div>
</div>
<hr />
<!--=======================  soal10 ===================================-->
<li>Jika \(4^x = 64\), maka nilai \(x\) adalah...</li>
<input type="radio" name="soal10" value="0"/>
A. \(\frac{1}{4}\)
<br />
<input type="radio" name="soal10" value="0" />
B. \(\frac{1}{2}\)
<br />
<input type="radio" name="soal10" value="0"  />
C. \(1\)
<div class="col-md">
<input type="radio" name="soal10" value="10" />
D. \(2\)
<br />
<input type="radio" name="soal10" value="0"/>
E. \(3\)
<br>
<button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal10" aria-expanded="false" aria-controls="collapsesoal10" >
Alternatif Penyelesaian:
</button>
<div class="collapse" id="collapsesoal10">
<div class="card card-body overflow-auto">
<p></p>
<b class="text-end text-danger fw-bold"> <h3>JAWABAN : D</h3></b>
</div>
</div>
<hr />
<!--=======================  soal11 ===================================-->
<li>Jika \(9^{2x} = 81\), maka nilai \(x\) adalah...</li>
<input type="radio" name="soal11" value="0"/>
A. \(\frac{1}{2}\)
<br />
<input type="radio" name="soal11" value="10" />
B. \(\frac{2}{3}\)
<br />
<input type="radio" name="soal11" value="0"  />
C. \(\frac{3}{4}\)
<div class="col-md">
<input type="radio" name="soal11" value="0" />
D. \(1\)
<br />
<input type="radio" name="soal11" value="0"/>
E. \(\frac{4}{3}\)
<br>
<button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal11" aria-expanded="false" aria-controls="collapsesoal11" >
Alternatif Penyelesaian:
</button>
<div class="collapse" id="collapsesoal11">
<div class="card card-body overflow-auto">
<p></p>
<b class="text-end text-danger fw-bold"> <h3>JAWABAN : B</h3></b>
</div>
</div>
<hr />
<!--=======================  soal12 ===================================-->
<li>Nilai dari \(\left(\frac{1}{3}\right)^{-2}\) adalah...</li>
<input type="radio" name="soal12" value="0"/>
A. \(3\)
<br />
<input type="radio" name="soal12" value="10" />
B. \(9\)
<br />
<input type="radio" name="soal12" value="0"  />
C. \(\frac{1}{9}\)
<div class="col-md">
<input type="radio" name="soal12" value="0" />
D. \(\frac{1}{3}\)
<br />
<input type="radio" name="soal12" value="0"/>
E. \(\frac{2}{3}\)
<br>
<button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal12" aria-expanded="false" aria-controls="collapsesoal12" >
Alternatif Penyelesaian:
</button>
<div class="collapse" id="collapsesoal12">
<div class="card card-body overflow-auto">
<p></p>
<b class="text-end text-danger fw-bold"> <h3>JAWABAN : B</h3></b>
</div>
</div>
<hr />
<!--=======================  soal13 ===================================-->
<li>Jika \(8^x = 2^{12}\), maka nilai \(x\) adalah...</li>
<input type="radio" name="soal13" value="0"/>
A. \(\frac{1}{2}\)
<br />
<input type="radio" name="soal13" value="0" />
B. \(\frac{2}{3}\)
<br />
<input type="radio" name="soal13" value="0"  />
C. \(\frac{3}{4}\)
<div class="col-md">
<input type="radio" name="soal13" value="0" />
D. \(2\)
<br />
<input type="radio" name="soal13" value="10"/>
E. \(3\)
<br>
<button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal13" aria-expanded="false" aria-controls="collapsesoal13" >
Alternatif Penyelesaian:
</button>
<div class="collapse" id="collapsesoal13">
<div class="card card-body overflow-auto">
<p></p>
<b class="text-end text-danger fw-bold"> <h3>JAWABAN : E</h3></b>
</div>
</div>
<hr />
<!--=======================  soal14 ===================================-->
<li>Bentuk sederhana dari \(5^4 \div 5^2\) adalah...</li>
<input type="radio" name="soal14" value="0"/>
A. \(5^6\)
<br />
<input type="radio" name="soal14" value="0" />
B. \(5^3\)
<br />
<input type="radio" name="soal14" value="10"  />
C. \(5^2\)
<div class="col-md">
<input type="radio" name="soal14" value="0" />
D. \(5\)
<br />
<input type="radio" name="soal14" value="0"/>
E. \(1\)
<br>
<button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal14" aria-expanded="false" aria-controls="collapsesoal14" >
Alternatif Penyelesaian:
</button>
<div class="collapse" id="collapsesoal14">
<div class="card card-body overflow-auto">
<p></p>
<b class="text-end text-danger fw-bold"> <h3>JAWABAN : C</h3></b>
</div>
</div>
<hr />
<!--=======================  soal15 ===================================-->
<li>Nilai dari \(0.1^{-2}\) adalah...</li>
<input type="radio" name="soal15" value="10"/>
A. \(100\)
<br />
<input type="radio" name="soal15" value="0" />
B. \(10\)
<br />
<input type="radio" name="soal15" value="0"  />
C. \(0,01\)
<div class="col-md">
<input type="radio" name="soal15" value="0" />
D. \(0,1\)
<br />
<input type="radio" name="soal15" value="0"/>
E. \(1\)
<br>
<button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal15" aria-expanded="false" aria-controls="collapsesoal15" >
Alternatif Penyelesaian:
</button>
<div class="collapse" id="collapsesoal15">
<div class="card card-body overflow-auto">
<p></p>
<b class="text-end text-danger fw-bold"> <h3>JAWABAN : A</h3></b>
</div>
</div>
<hr />
<!--=======================  soal16 ===================================-->
<li>Jika \(3^x = 81\), maka nilai \(x\) adalah...</li>
<input type="radio" name="soal16" value="0"/>
A. \(\frac{1}{2}\)
<br />
<input type="radio" name="soal16" value="0" />
B. \(1\)
<br />
<input type="radio" name="soal16" value="10"  />
C. \(2\)
<div class="col-md">
<input type="radio" name="soal16" value="0" />
D. \(3\)
<br />
<input type="radio" name="soal16" value="0"/>
E. \(4\)
<br>
<button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal16" aria-expanded="false" aria-controls="collapsesoal16" >
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
<li>Hasil dari \((2^3)^2\) adalah...</li>
<input type="radio" name="soal17" value="10"/>
A. \(4^6\)
<br />
<input type="radio" name="soal17" value="0" />
B. \(8^5\)
<br />
<input type="radio" name="soal17" value="0"  />
C. \(2^6\)
<div class="col-md">
<input type="radio" name="soal17" value="0" />
D. \(16^3\)
<br />
<input type="radio" name="soal17" value="0"/>
E. \(64^2\)
<br>
<button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal17" aria-expanded="false" aria-controls="collapsesoal17" >
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
<li>Nilai dari \(6^{-1}\) adalah...</li>
<input type="radio" name="soal18" value="10"/>
A. \(\frac{1}{6}\)
<br />
<input type="radio" name="soal18" value="0" />
B. \(\frac{1}{36}\)
<br />
<input type="radio" name="soal18" value="0"  />
C. \(\frac{1}{216}\)
<div class="col-md">
<input type="radio" name="soal18" value="0" />
D. \(6\)
<br />
<input type="radio" name="soal18" value="0"/>
E. \(36\)
<br>
<button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal18" aria-expanded="false" aria-controls="collapsesoal18" >
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
<li>Jika \(2^{2x} = 32\), maka nilai \(x\) adalah...</li>
<input type="radio" name="soal19" value="0"/>
A. \(\frac{1}{4}\)
<br />
<input type="radio" name="soal19" value="0" />
B. \(\frac{1}{2}\)
<br />
<input type="radio" name="soal19" value="0"  />
C. \(1\)
<div class="col-md">
<input type="radio" name="soal19" value="10" />
D. \(2\)
<br />
<input type="radio" name="soal19" value="0"/>
E. \(3\)
<br>
<button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal19" aria-expanded="false" aria-controls="collapsesoal19" >
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
<li>Bentuk desimal dari \(0,5^2\) adalah...</li>
<input type="radio" name="soal20" value="0"/>
A. \(0,025\)
<br />
<input type="radio" name="soal20" value="0" />
B. \(0,05\)
<br />
<input type="radio" name="soal20" value="10"  />
C. \(0,25\)
<div class="col-md">
<input type="radio" name="soal20" value="0" />
D. \(0,5\)
<br />
<input type="radio" name="soal20" value="0"/>
E. \(0,75\)
<br>
<button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal20" aria-expanded="false" aria-controls="collapsesoal20" >
Alternatif Penyelesaian:
</button>
<div class="collapse" id="collapsesoal20">
<div class="card card-body overflow-auto">
<p></p>
<b class="text-end text-danger fw-bold"> <h3>JAWABAN : C</h3></b>
</div>
</div>
<hr />
<!--=======================  soal21 ===================================-->
<li>Nilai dari \(16^{\frac{1}{4}}\) adalah...</li>
<input type="radio" name="soal21" value="10"/>
A. \(2\)
<br />
<input type="radio" name="soal21" value="0" />
B. \(4\)
<br />
<input type="radio" name="soal21" value="0"  />
C. \(8\)
<div class="col-md">
<input type="radio" name="soal21" value="0" />
D. \(16\)
<br />
<input type="radio" name="soal21" value="0"/>
E. \(32\)
<br>
<button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal21" aria-expanded="false" aria-controls="collapsesoal21" >
Alternatif Penyelesaian:
</button>
<div class="collapse" id="collapsesoal21">
<div class="card card-body overflow-auto">
<p></p>
<b class="text-end text-danger fw-bold"> <h3>JAWABAN : A</h3></b>
</div>
</div>
<hr />
<!--=======================  soal22 ===================================-->
<li>Jika \(3^{-2x} = \frac{1}{9}\), maka nilai \(x\) adalah...</li>
<input type="radio" name="soal22" value="0"/>
A. \(-\frac{1}{4}\)
<br />
<input type="radio" name="soal22" value="10" />
B. \(-\frac{1}{3}\)
<br />
<input type="radio" name="soal22" value="0"  />
C. \(-\frac{2}{3}\)
<div class="col-md">
<input type="radio" name="soal22" value="0" />
D. \(-\frac{3}{4}\)
<br />
<input type="radio" name="soal22" value="0"/>
E. \(-\frac{4}{3}\)
<br>
<button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal22" aria-expanded="false" aria-controls="collapsesoal22" >
Alternatif Penyelesaian:
</button>
<div class="collapse" id="collapsesoal22">
<div class="card card-body overflow-auto">
<p></p>
<b class="text-end text-danger fw-bold"> <h3>JAWABAN : B</h3></b>
</div>
</div>
<hr />
<!--=======================  soal23 ===================================-->
<li>Hasil dari \((5^2)^{-3}\) adalah...</li>
<input type="radio" name="soal23" value="0"/>
A. \(5^6\)
<br />
<input type="radio" name="soal23" value="0" />
B. \(5^5\)
<br />
<input type="radio" name="soal23" value="0"  />
C. \(5^4\)
<div class="col-md">
<input type="radio" name="soal23" value="0" />
D. \(5^3\)
<br />
<input type="radio" name="soal23" value="10"/>
E. \(5^2\)
<br>
<button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal23" aria-expanded="false" aria-controls="collapsesoal23" >
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
<li>Nilai dari \(10^{\frac{1}{3}}\) adalah...</li>
<input type="radio" name="soal24" value="10"/>
A. \(\frac{1}{10}\)
<br />
<input type="radio" name="soal24" value="0" />
B. \(1\)
<br />
<input type="radio" name="soal24" value="0"  />
C. \(10\)
<div class="col-md">
<input type="radio" name="soal24" value="0" />
D. \(100\)
<br />
<input type="radio" name="soal24" value="0"/>
E. \(1000\)
<br>
<button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal24" aria-expanded="false" aria-controls="collapsesoal24" >
Alternatif Penyelesaian:
</button>
<div class="collapse" id="collapsesoal24">
<div class="card card-body overflow-auto">
<p></p>
<b class="text-end text-danger fw-bold"> <h3>JAWABAN : A</h3></b>
</div>
</div>
<hr />
<!--=======================  soal25 ===================================-->
<li>Jika \(6^x = 216\), maka nilai \(x\) adalah...</li>
<input type="radio" name="soal25" value="0"/>
A. \(\frac{1}{2}\)
<br />
<input type="radio" name="soal25" value="0" />
B. \(1\)
<br />
<input type="radio" name="soal25" value="0"  />
C. \(2\)
<div class="col-md">
<input type="radio" name="soal25" value="10" />
D. \(3\)
<br />
<input type="radio" name="soal25" value="0"/>
E. \(4\)
<br>
<button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal25" aria-expanded="false" aria-controls="collapsesoal25" >
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
<input type="hidden" id="materi" name="materi" value="eksponen01">
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
    <a href="/create_eksponen01" id="kirimsaja" class="btn btn-warning btn-bukti d-none" >SIMPAN JAWABAN</a>
</div>
</form>
{{-- COPY SAMPAI SINI --}}

<div id="disqus_thread" class="mt-4"></div>

</div>
</div>
</div>
</section>
@endsection

