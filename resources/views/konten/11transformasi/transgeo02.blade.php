@extends('konten.11transformasi.11.template')
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
            Transformasi Geometri - 02 + Pembahasan
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

                <li>Jika translasi \(A(2,-6)\) memberikan bayangan \(A'(-1,6)\), maka translasi \(B(-2,2) \) akan memberikan bayangan . . . </li>
                <input type="radio" name="soal1" value="0" />
                \((1,0) \)
                <br />
                <input type="radio" name="soal1" value="10" id="soal1"/>
                \((-5,14) \)
                <br />
                <input type="radio" name="soal1" value="0"  />
                \((-5,0) \)
                <br />
                <input type="radio" name="soal1" value="0" />
                \((1,14) \)
                <br />
                <input type="radio" name="soal1" value="0" />
                \((1,-5) \)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal1" aria-expanded="false" aria-controls="collapsesoal1" >
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal1">
                  <div class="card card-body overflow-auto">
                   Misal \(T=\begin{pmatrix}a\\b \end{pmatrix}\)
                    maka
                   \(\begin{align} A'&=T \circ A \\ \begin{pmatrix}-1\\6 \end{pmatrix} &=\begin{pmatrix}a\\b \end{pmatrix}+\begin{pmatrix}2\\-6 \end{pmatrix} \\
                   \begin{pmatrix}a\\b \end{pmatrix} &= \begin{pmatrix}-1\\6 \end{pmatrix} - \begin{pmatrix}2\\-6 \end{pmatrix} \\
                   \begin{pmatrix}a\\b \end{pmatrix} &= \begin{pmatrix}-3\\12 \end{pmatrix}
                   \end{align}\)
                   Sehingga
                   \(\begin{align}
                   \begin{pmatrix}x'\\y' \end{pmatrix} &=\begin{pmatrix}-3\\12 \end{pmatrix}+\begin{pmatrix}-2\\2 \end{pmatrix} \\
                   &= \begin{pmatrix}-5\\14 \end{pmatrix}
                   \end{align}\)
                   Jadi, bayangan titik B yaitu B' adalah (-5, 14)
                   <b class="text-end"> JAWABAN : B</b>
                  </div>
                </div>
                <hr />
                <!--========================= soal no 2 ===========================================================================-->
                <li>Suatu translasi memetakan titik \((2,4) \) ke \((3,8) \). Translasi yang sama memetakan titik \((1,2) \) ke . . . </li>
                <input type="radio" name="soal2" value="0"  />
                \((1,4) \)
                <br />
                <input type="radio" name="soal2" value="10" id="soal2" />
                \((2,6) \)
                <br />
                <input type="radio" name="soal2" value="0"  />
                \((3,6) \)
                <br />
                <input type="radio" name="soal2" value="0" />
                \((4,10) \)
                <br />
                <input type="radio" name="soal2" value="0" />
                \((6,14) \)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal2" aria-expanded="false" aria-controls="collapsesoal2" >
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal2">
                  <div class="card card-body overflow-auto">
                    Misal \(T=\begin{pmatrix}a\\b \end{pmatrix}\)
                    maka
                   \(\begin{align} A'&=T \circ A \\ \begin{pmatrix}3\\8 \end{pmatrix} &=\begin{pmatrix}a\\b \end{pmatrix}+\begin{pmatrix}2\\4 \end{pmatrix} \\
                   \begin{pmatrix}a\\b \end{pmatrix} &= \begin{pmatrix}3\\8 \end{pmatrix} - \begin{pmatrix}2\\4 \end{pmatrix} \\
                   \begin{pmatrix}a\\b \end{pmatrix} &= \begin{pmatrix}1\\4 \end{pmatrix}
                   \end{align}\)
                   Sehingga
                   \(\begin{align}
                   \begin{pmatrix}x'\\y' \end{pmatrix} &=\begin{pmatrix}1\\4 \end{pmatrix}+\begin{pmatrix}1\\2 \end{pmatrix} \\
                   &= \begin{pmatrix}2\\6 \end{pmatrix}
                   \end{align}\)
                   Jadi, bayangan titik (1, 2) adalah (2, 6)
                   <b class="text-end"> JAWABAN : B </b>
                  </div>
                </div>
                <hr />
                <!--================================================== soal no 3 ======================================================-->
                <li>\(T\) suatu transformasi linear yang memetakan titik-titik \((0,1) \) dan \((1,0)\) berturut-turut menjadi titik-titik \((1,0) \) dan \((0,1) \). \(T\) memetakan titik \((-1,2) \) menjadi titik . . . </li>
                <input type="radio" name="soal3" value="0"  />
                \((1,-2) \)
                <br />
                <input type="radio" name="soal3" value="0"  />
                \((1,2) \)
                <br />
                <input type="radio" name="soal3" value="0" />
                \((2,1) \)
                <br />
                <input type="radio" name="soal3" value="10" id="soal3"/>
                \((2,-1) \)
                <br />
                <input type="radio" name="soal3" value="0" />
                \((-2,1) \)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collpasesoal3" aria-expanded="false" aria-controls="collpasesoal3" >
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collpasesoal3">
                  <div class="card card-body overflow-auto">
                    Jika
                    \((0,1) \overset{R}{\to} (1,0) \)
                    \((1,0) \overset{R}{\to} (0,1) \)
                    maka
                    \(R \text{ merupakan pencerminan terhadap garis } y=x\)
                    Sehingga
                    \((-1,2) \overset{R_{y=x}}{\to} (2,-1) \)
                    \(\text{Jadi bayangan titik }(-1,2) \text{ adalah } (2,-1) \)
                  <b class="text-end"> JAWABAN : D </b>
                  </div>
                </div>
                <hr />
                <!-- soal no no4 =================================================================================================-->
                <li>Absis dari bayangan titik \((6,0) \) pada pencerminan terhadap garis \(x=a\) adalah . . .  </li>
                </li>
                <input type="radio" name="soal4" value="10" id="soal4"/>
                \(2a-6\)
                <br />
                <input type="radio" name="soal4" value="0" />
                \(6-2a \)
                <br />
                <input type="radio" name="soal4" value="0" />
                \(2a+6 \)
                <br />
                <input type="radio" name="soal4" value="0"  />
                \(a+3 \)
                <br />
                <input type="radio" name="soal4" value="0" >
                \(0 \)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal4" aria-expanded="false" aria-controls="collapsesoal4" >
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal4">
                  <div class="card card-body overflow-auto">
                    \(\begin{align}
                    \begin{pmatrix}x'\\y' \end{pmatrix} &= \begin{pmatrix}-1&0\\0&1 \end{pmatrix}\begin{pmatrix}x\\y \end{pmatrix}+\begin{pmatrix}2(a)\\0 \end{pmatrix} \\
                    &=\begin{pmatrix}-1&0\\0&1 \end{pmatrix}\begin{pmatrix}6\\0 \end{pmatrix}+\begin{pmatrix}2a\\0 \end{pmatrix} \\
                    &= \begin{pmatrix}-6+2a\\0 \end{pmatrix}
                    \end{align}\) <br>
                    \(\text{Jadi, nilai absisnya adalah } 2a-6 \)
                   <b class="text-end"> JAWABAN : A </b>
                  </div>
                </div>
                <hr />
                <!-- soal no 5 ================================================================================================-->
                <li>Pencerminan suatu titik terhadap garis \(x=3\) dilanjutkan pencerminan terhadap garis \(x=5\) maka bayangan titik \((3,2) \) adalah . . .  </li>
                <input type="radio" name="soal5" value="0" />
                \((2,3)\)
                <br />
                <input type="radio" name="soal5" value="0" />
                \((3,6) \)
                <br />
                <input type="radio" name="soal5" value="10"  id="soal5" />
                \((7,2) \)
                <br />
                <input type="radio" name="soal5" value="0"/>
                \((7,6) \)
                <br />
                <input type="radio" name="soal5" value="0" />
                \((6,2) \)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal5" aria-expanded="false" aria-controls="collapsesoal5">
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal5">
                  <div class="card card-body overflow-auto">
                  Penyelesaian ketik disini
                  <b class="text-end"> JAWABAN :  </b>
                  </div>
                </div>
                <hr />
                <!-- =====SOAL NO 6======================================================================= -->
                <li>Bayangan titik dengan koordinat polar \((2,30^{\circ}) \) bila dicerminkan terhadap sumbu-Y adalah . . . </li>
                <input type="radio" name="soal6" value="0"  />
                \((-2,150^{\circ}) \)
                <br />
                <input type="radio" name="soal6" value="0" />
                \((-2,30^{\circ}) \)
                <br />
                <input type="radio" name="soal6" value="10" id="soal6" />
                \((2,120^{\circ}) \)
                <br />
                <input type="radio" name="soal6" value="0" />
                \((2,150^{\circ}) \)
                <br />
                <input type="radio" name="soal6" value="0" />
                \((2,30^{\circ}) \)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal6" aria-expanded="false" aria-controls="collapsesoal6">
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal6">
                  <div class="card card-body overflow-auto">
                   Penyelesaian ketik disini
                   <b class="text-end"> JAWABAN :  </b>
                  </div>
                </div>
                <hr />
                <!-- =====SOAL NO 7======================================================================= -->
                <li>Bayangan titik \(A(4,1) \) oleh pencerminan terhadap garis \(x=2 \) dilanjutkan pencerminan terhadap garis \(x=5 \) adalah titik . . .</li>
                <input type="radio" name="soal7" value="0" />
                \(A''(8,5) \)
                <br />
                <input type="radio" name="soal7" value="10" id="soal7" />
                \(A''(10,1) \)
                <br />
                <input type="radio" name="soal7" value="0" />
                \(A''(8,1) \)
                <br />
                <input type="radio" name="soal7" value="0"  />
                \(A''(4,5) \)
                <br />
                <input type="radio" name="soal7" value="0" />
                \(A''(20,2) \)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal7" aria-expanded="false" aria-controls="collapsesoal7">
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal7">
                  <div class="card card-body overflow-auto">
                   Penyelesaian ketik disini
                   <b class="text-end"> JAWABAN :  </b>
                  </div>
                </div>
                <hr />
                <!-- =====SOAL NO 8======================================================================= -->
                <li>Diketahui suatu transformasi sebagai berikut: <br>
                  \(x'=2x+3y \) <br>
                  \(y'=4x-y \) <br>
                  Matriks transformasi yang bersesuaian dengan transformasi di atas adalah . . .
                </li>
                <input type="radio" name="soal8" value="0" />
                \(\begin{pmatrix}2&4\\3&-1 \end{pmatrix} \)
                <br />
                <input type="radio" name="soal8" value="10" id="soal8"/>
                \(\begin{pmatrix}2&3\\4&-1 \end{pmatrix} \)
                <br />
                <input type="radio" name="soal8" value="0"  />
                \(\begin{pmatrix}-1&2\\3&4 \end{pmatrix} \)
                <br />
                <input type="radio" name="soal8" value="0"  />
                \(\begin{pmatrix}3&2\\-1&4 \end{pmatrix} \)
                <br />
                <input type="radio" name="soal8" value="0" />
                \(\begin{pmatrix}2&3\\-1&4 \end{pmatrix} \)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal8" aria-expanded="false" aria-controls="collapsesoal8">
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal8">
                  <div class="card card-body overflow-auto">
                   Penyelesaian ketik disini
                   <b class="text-end"> JAWABAN :  </b>
                  </div>
                </div>
                <hr />
                <!-- =====SOAL NO 9======================================================================= -->
                <li>Matriks yang menyatakan pencerminan titik-titik pada bidang \(XY\) terhadap sumb-X adalah . . .</li>
                <input type="radio" name="soal9" value="0" />
                \(\begin{pmatrix}2&3\\-1&4 \end{pmatrix}\)
                <br />
                <input type="radio" name="soal9" value="0" />
                \(\begin{pmatrix}-1&0\\0&1 \end{pmatrix}\)
                <br />
                <input type="radio" name="soal9" value="10"  />
                \(\begin{pmatrix}0&1\\1&0 \end{pmatrix}\)
                <br />
                <input type="radio" name="soal9" value="10" id="soal9"/>
                \(\begin{pmatrix}1&0\\0&-1 \end{pmatrix}\)
                <br />
                <input type="radio" name="soal9" value="0" />
                \(\begin{pmatrix}0&-1\\-1&0 \end{pmatrix}\)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal9" aria-expanded="false" aria-controls="collapsesoal9">
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal9">
                  <div class="card card-body overflow-auto">
                   Penyelesaian ketik disini
                   <b class="text-end"> JAWABAN :  </b>
                  </div>
                </div>
                <hr />
                <!-- =====SOAL NO 10======================================================================= -->
                <li>Titik \((-1,3) \) direfleksikan terhadap garis \(x=2 \) dilanjutkan oleh refleksi terhadap garis \(y=-x\). Koordinat bayangan akhir adalah . . . </li>
                <input type="radio" name="soal10" value="0"  />
                \((-3,5) \)
                <br />
                <input type="radio" name="soal10" value="0" />
                \((3,-5) \)
                <br />
                <input type="radio" name="soal10" value="0" />
                \((-3,3) \)
                <br />
                <input type="radio" name="soal10" value="10" id="soal10"/>
                \((-3,-5) \)
                <br />
                <input type="radio" name="soal10" value="0" />
                \((3,5) \)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal10" aria-expanded="false" aria-controls="collapsesoal10">
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal10">
                  <div class="card card-body overflow-auto">
                   Penyelesaian ketik disini
                   <b class="text-end"> JAWABAN :  </b>
                  </div>
                </div>
                <hr />

                <li>Titik \((6,-2)\) ketika direfleksikan terhadap garis \(x=k\) menghasilkan bayangan titik \((-10,-2) \). Koordinat bayangan titik \((3,-2)\) jika direfleksikan terhadap garis \(y=k\) adalah . . .  </li>
                <input type="radio" name="soal11" value="0" />
                \((3,4) \)
                <br />
                <input type="radio" name="soal11" value="0" />
                \((3,-2) \)
                <br />
                <input type="radio" name="soal11" value="0" />
                \((3,10) \)
                <br />
                <input type="radio" name="soal11" value="0" />
                \((3,-8) \)
                <br />
                <input type="radio" name="soal11" value="10" id="soal11" />
                \((-7,-2) \)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal11" aria-expanded="false" aria-controls="collapsesoal11">
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal11">
                  <div class="card card-body overflow-auto">
                   Penyelesaian ketik disini
                   <b class="text-end"> JAWABAN :  </b>
                  </div>
                </div>
                <hr />

                <li>Jika titik \(G(6,-4)\) ditranslasikan dengan \(T=\begin{pmatrix}a\\b \end{pmatrix} \) kemudian dicerminkan terhadap \(y=-x\), maka bayangannya adalah \(G'(3b,a)\). Nilai \(a+2b\) adalah . . .</li>
                <input type="radio" name="soal12" value="0" />
                \(-2 \)
                <br />
                <input type="radio" name="soal12" value="10" id="soal12"/>
                \(-1 \)
                <br />
                <input type="radio" name="soal12" value="0"   />
                \(0 \)
                <br />
                <input type="radio" name="soal12" value="0" />
                \(1 \)
                <br />
                <input type="radio" name="soal12" value="0" />
                \(2 \)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal12" aria-expanded="false" aria-controls="collapsesoal12">
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal12">
                  <div class="card card-body overflow-auto">
                   Penyelesaian ketik disini
                   <b class="text-end"> JAWABAN :  </b>
                  </div>
                </div>
                <hr />

                <li>Di bawah ini yang merupakan matriks transformasi yang bersesuaian dengan rotasi sebesar \(180^{\circ}\) berlawanan arah jarum jam dengan pusat \(O\) adalah . . . </li>
                <input type="radio" name="soal13" value="0"  />
                \(\begin{pmatrix}0&-1\\1&0 \end{pmatrix} \)
                <br />
                <input type="radio" name="soal13" value="0" />
                \(\begin{pmatrix}0&1\\-1&0 \end{pmatrix} \)
                <br />
                <input type="radio" name="soal13" value="0" />
                \(\begin{pmatrix}0&-1\\-1&0 \end{pmatrix} \)
                <br />
                <input type="radio" name="soal13" value="10" id="soal13"/>
                \(\begin{pmatrix}-1&0\\0&-1 \end{pmatrix} \)
                <br />
                <input type="radio" name="soal13" value="0" />
                \(\begin{pmatrix}1&0\\0&1 \end{pmatrix} \)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal13" aria-expanded="false" aria-controls="collapsesoal13">
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal13">
                  <div class="card card-body overflow-auto">
                   Penyelesaian ketik disini
                   <b class="text-end"> JAWABAN :  </b>
                  </div>
                </div>
                <hr />

                <li>\(\begin{pmatrix}0&-1\\1&0 \end{pmatrix} \) adalah matriks transformasi yang bersesuaian dengan ... </li>
                <input type="radio" name="soal14" value="0"  />
                pencerminan terhadap sumbu-X
                <br />
                <input type="radio" name="soal14" value="0" />
                pencerminan terhadap sumbu-Y
                <br />
                <input type="radio" name="soal14" value="0" />
                pencerminan terhadap garis \(y=x\)
                <br />
                <input type="radio" name="soal14" value="0" />
                rotasi sebesar \(90^{\circ}\) searah jarum jam dengan pusat \(O\)
                <br />
                <input type="radio" name="soal14" value="10" id="soal14"/>
                rotasi sebesar \(90^{\circ}\) berlawanan arah jarum jam dengan pusat \(O\)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal14" aria-expanded="false" aria-controls="collapsesoal14">
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal14">
                  <div class="card card-body overflow-auto">
                   Penyelesaian ketik disini
                   <b class="text-end"> JAWABAN :  </b>
                  </div>
                </div>
                <hr />

                <li>Suatu transformasi bidang memetakan titik <br>
                \(P(x,y) \to P'(x',y') \) dengan \(\begin{pmatrix}x'\\y' \end{pmatrix}=\begin{pmatrix}a&b\\3&4 \end{pmatrix}\begin{pmatrix}x\\y \end{pmatrix} \) <br>
                Agar bayangan titik \((2,3)\) adalah \((8,18)\) dan bayangan titik \((-1,0)\) adalah \((-1,-3)\) oleh pemetaan diatas, maka nilai \(a\) dan \(b\) berturut-turut adalah . . .
                </li>
                <input type="radio" name="soal15" value="0"  />
                \(-1\) dan \(2\)
                <br />
                <input type="radio" name="soal15" value="0" id="soal15"/>
                \(1 \) dan \(2\)
                <br />
                <input type="radio" name="soal15" value="0" />
                \(-1 \) dan \(0\)
                <br />
                <input type="radio" name="soal15" value="0" />
                \(1 \) dan \(-2\)
                <br />
                <input type="radio" name="soal15" value="0" />
                \(1 \) dan \(0\)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal15" aria-expanded="false" aria-controls="collapsesoal15">
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal15">
                  <div class="card card-body overflow-auto">
                   Penyelesaian ketik disini
                   <b class="text-end"> JAWABAN :  </b>
                  </div>
                </div>
                <hr />
                <!--===========================================================16===========================================================================  -->
                <li>Bayangan titik-titik \((1,1)\) dan \((2,3)\) dibawah transformasi \(T\) berturut-turut adalah \((3,0)\) dan \((8,-1)\). Matriks transformasi \(T\) adalah . . . </li>
                <input type="radio" name="soal16" value="0"  />
                \(\begin{pmatrix}1&2\\1&1 \end{pmatrix}\)
                <br />
                <input type="radio" name="soal16" value="0" />
                \(\begin{pmatrix}1&-2\\1&-1 \end{pmatrix}\)
                <br />
                <input type="radio" name="soal16" value="0" />
                \(\begin{pmatrix}2&1\\-1&1 \end{pmatrix}\)
                <br />
                <input type="radio" name="soal16" value="0" />
                \(\begin{pmatrix}2&-1\\-1&1 \end{pmatrix}\)
                <br />
                <input type="radio" name="soal16" value="10" id="soal16"/>
                \(\begin{pmatrix}1&2\\1&-1 \end{pmatrix}\)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal16" aria-expanded="false" aria-controls="collapsesoal16">
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal16">
                  <div class="card card-body overflow-auto">
                   Penyelesaian ketik disini
                   <b class="text-end"> JAWABAN :  </b>
                  </div>
                </div>
                <hr />
                <!--===========================================================17===========================================================================  -->
                <li> Transformasi \(\begin{pmatrix}-\frac{1}{2}&0\\2&1 \end{pmatrix}\) memetakan \((a,b)\) ke \((-1,5)\), maka \((a,b)\) adalah . . . </li>
                <input type="radio" name="soal17" value="0"  />
                \((\frac{1}{2},4) \)
                <br />
                <input type="radio" name="soal17" value="0" />
                \((-2,9)\)
                <br />
                <input type="radio" name="soal17" value="0" />
                \((-\frac{1}{2},6) \)
                <br />
                <input type="radio" name="soal17" value="10" id="soal17"/>
                \((2,1) \)
                <br />
                <input type="radio" name="soal17" value="0" />
                \((-2,6)\)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal17" aria-expanded="false" aria-controls="collapsesoal17">
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal17">
                  <div class="card card-body overflow-auto">
                   Penyelesaian ketik disini
                   <b class="text-end"> JAWABAN :  </b>
                  </div>
                </div>
                <hr />
                <!--===========================================================18===========================================================================  -->
                <li>Titik \((4,-8)\) dicerminkan terhadap garis \(x=6\) dilanjutkan dengan rotasi \((O, 60^{\circ}) \). Hasilnya adalah . . . </li>
                <input type="radio" name="soal18" value="0"  />
                \((-4+4\sqrt{3},4-4\sqrt{3}) \)
                <br />
                <input type="radio" name="soal18" value="0" />
                \((-4+4\sqrt{3},-4-4\sqrt{3})\)
                <br />
                <input type="radio" name="soal18" value="0" />
                \((4+4\sqrt{3},4-4\sqrt{3})\)
                <br />
                <input type="radio" name="soal18" value="0" />
                \((4-4\sqrt{3},-4-4\sqrt{3})\)
                <br />
                <input type="radio" name="soal18" value="10" id="soal18"/>
                \((4+4\sqrt{3},-4+4\sqrt{3})\)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal18" aria-expanded="false" aria-controls="collapsesoal18">
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal18">
                  <div class="card card-body overflow-auto">
                   Penyelesaian ketik disini
                   <b class="text-end"> JAWABAN :  </b>
                  </div>
                </div>
                <hr />
                <!--===========================================================19===========================================================================  -->
                <li>Titik \(S(-2,2)\) dipetakan oleh rotasi dengan pusat \(O(0,0)\) sejauh \(90^{\circ}\), dilanjutkan dengan translasi \(T=\begin{pmatrix}3\\4 \end{pmatrix}\). Peta titik \(S\) adalah . . . </li>
                <input type="radio" name="soal19" value="0"  />
                \(S''(3,2) \)
                <br />
                <input type="radio" name="soal19" value="10" id="soal19"/>
                \(S''(1,2)\)
                <br />
                <input type="radio" name="soal19" value="0" />
                \(S''(3,8)\)
                <br />
                <input type="radio" name="soal19" value="0" />
                \(S''(5,8)\)
                <br />
                <input type="radio" name="soal19" value="0" />
                \(S''(5,2)\)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal19" aria-expanded="false" aria-controls="collapsesoal19">
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal19">
                  <div class="card card-body overflow-auto">
                   Penyelesaian ketik disini
                   <b class="text-end"> JAWABAN :  </b>
                  </div>
                </div>
                <hr />
                <!--===========================================================20===========================================================================  -->
                <li>Bayangan segitiga \(ABC\) dengan \(A(3,2)\), \(B(7,3)\), \(C(6,5)\) jika dicerminkan terhadap sumbu-Y dilanjutkan dengan rotasi \([O,90^{\circ}] \) adalah . . . </li>
                <input type="radio" name="soal20" value="0"  />
                \(A'(0,-1)\), \(B'(-1,-5)\), dan \(C'(-3,-4)\)
                <br />
                <input type="radio" name="soal20" value="10" id="soal20" />
                \(A'(-2,-3)\), \(B'(-3,-7)\), dan \(C'(-5,-6)\)
                <br />
                <input type="radio" name="soal20" value="0" />
                \(A'(-1,0)\), \(B'(-5,-1)\), dan \(C'(5,-4)\)
                <br />
                <input type="radio" name="soal20" value="0" />
                \(A'(-1,0)\), \(B'(-5,-1)\), dan \(C'(-4,-3)\)
                <br />
                <input type="radio" name="soal20" value="0" />
                \(A'(-3,-2)\), \(B'(-7,-3)\), dan \(C'(-6,-5)\)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal20" aria-expanded="false" aria-controls="collapsesoal20">
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal20">
                  <div class="card card-body overflow-auto">
                   Penyelesaian ketik disini
                   <b class="text-end"> JAWABAN :  </b>
                  </div>
                </div>
                <hr />

                <!--===========================================================21===========================================================================  -->
                <li>Bayangan segitiga \(ABC\) dengan \(A(-1,3)\), \(B(2,-4)\), dan \(C(1,5)\) karena rotasi pusat \((0,0)\) sebesar \(\begin{align}\frac{\pi}{2} \end{align}\) dilanjutkan refleksi terhadap garis \(y=x\) adalah . . . </li>
                <input type="radio" name="soal21" value="0"  />
                \(A'(1,3)\), \(B'(-2,-4)\), dan \(C'(-1,5)\)
                <br />
                <input type="radio" name="soal21" value="10" id="soal21" />
                \(A'(-1,-3)\), \(B'(2,4)\), dan \(C'(1,-5)\)
                <br />
                <input type="radio" name="soal21" value="0" />
                \(A'(-1,3)\), \(B'(2,-4)\), dan \(C'(1,5)\)
                <br />
                <input type="radio" name="soal21" value="0" />
                \(A'(-3,-1)\), \(B'(4,2)\), dan \(C'(5,1)\)
                <br />
                <input type="radio" name="soal21" value="0" />
                \(A'(3,-1)\), \(B'(2,4)\), dan \(C'(1,-5)\)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal21" aria-expanded="false" aria-controls="collapsesoal21">
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal21">
                  <div class="card card-body overflow-auto">
                   Penyelesaian ketik disini
                   <b class="text-end"> JAWABAN :  </b>
                  </div>
                </div>
                <hr />
                <!--===========================================================22===========================================================================  -->
                <li>Putaran dari \(+30^{\circ}\) dengan pusat \(O\) diikuti putaran \(+60^{\circ}\) dengan pusat yang sama, bayangan dari titik \((4,5)\) adalah . . . </li>
                <input type="radio" name="soal22" value="0"  />
                \((5,4)\)
                <br />
                <input type="radio" name="soal22" value="0" />
                \((-4,5)\)
                <br />
                <input type="radio" name="soal22" value="10" id="soal22"/>
                \((-5,4)\)
                <br />
                <input type="radio" name="soal22" value="0" />
                \((-4,-5)\)
                <br />
                <input type="radio" name="soal22" value="0" />
                \((-5,-4)\)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal22" aria-expanded="false" aria-controls="collapsesoal22">
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal22">
                  <div class="card card-body overflow-auto">
                   Penyelesaian ketik disini
                   <b class="text-end"> JAWABAN :  </b>
                  </div>
                </div>
                <hr />
                <!--===========================================================23===========================================================================  -->
                <li>Ditentukan matriks transformasi \(T_1=\begin{pmatrix}1&-1\\1&-2 \end{pmatrix}\) dan \(T_2=\begin{pmatrix}0&-1\\1&0 \end{pmatrix}\). Hasil transformasi titik \((2,-1)\) terhadap \(T_1\) dilanjutkan \(T_2\) adalah . . . </li>
                <input type="radio" name="soal23" value="10" id="soal23" />
                \((-4,3)\)
                <br />
                <input type="radio" name="soal23" value="0" />
                \((-3,4)\)
                <br />
                <input type="radio" name="soal23" value="0" />
                \((3,4)\)
                <br />
                <input type="radio" name="soal23" value="0" />
                \((4,3)\)
                <br />
                <input type="radio" name="soal23" value="0" />
                \((3,-4)\)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal23" aria-expanded="false" aria-controls="collapsesoal23">
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal23">
                  <div class="card card-body overflow-auto">
                   Penyelesaian ketik disini
                   <b class="text-end"> JAWABAN :  </b>
                  </div>
                </div>
                <hr />
                <!--===========================================================24===========================================================================  -->
                <li>Bayangan titik \(A(x,y)\) karena refleksi terhadap garis \(x=-2\), dilanjutkan refleksi terhadap garis \(y=3\) dan kemudian dilanjutkan rotasi pusat \(O\) bersudut \(\begin{align}\frac{\pi}{2} \end{align}\) radian adalah \((-4,6)\). Koordinat titik \(A\) adalah . . . </li>
                <input type="radio" name="soal24" value="0"  />
                \((2,-10)\)
                <br />
                <input type="radio" name="soal24" value="0" />
                \((2,10)\)
                <br />
                <input type="radio" name="soal24" value="0" />
                \((10,2)\)
                <br />
                <input type="radio" name="soal24" value="10" id="soal24"/>
                \((-10,2)\)
                <br />
                <input type="radio" name="soal24" value="0" />
                \(10,-2\)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal24" aria-expanded="false" aria-controls="collapsesoal24">
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal24">
                  <div class="card card-body overflow-auto">
                   Penyelesaian ketik disini
                   <b class="text-end"> JAWABAN :  </b>
                  </div>
                </div>
                <hr />
                <!--===========================================================25===========================================================================  -->
                <li>Jika sudut suatu titik suatu jajargenjang \(O(0,0)\), \(A(3,1)\), \(B(4,3)\), dan \(C(1,2)\), maka luas bayangan jajargenjang \(OABC\) oleh transformasi matriks \(\begin{pmatrix}3&1\\1&1 \end{pmatrix}\) adalah . . .</li>
                <input type="radio" name="soal25" value="0"  />
                \(5\)
                <br />
                <input type="radio" name="soal25" value="10" id="soal25"/>
                \(10\)
                <br />
                <input type="radio" name="soal25" value="0" />
                \(15\)
                <br />
                <input type="radio" name="soal25" value="0" />
                \(20\)
                <br />
                <input type="radio" name="soal25" value="0" />
                \(25\)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal25" aria-expanded="false" aria-controls="collapsesoal25">
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal25">
                  <div class="card card-body overflow-auto">
                   Penyelesaian ketik disini
                   <b class="text-end"> JAWABAN :  </b>
                  </div>
                </div>
                <hr />
                <!--===========================================================26===========================================================================  -->
                <li>Vektor \(\vec{a}=\begin{pmatrix}a_1\\a_2 \end{pmatrix}\) dicerminkan terhadap sumbu-X, hasilnya dicerminkan terhadap sumbu-Y dan hasil ini diputar mengelilingi pusat koordinat \(O\) sejauh \(90^{\circ} \) dalam arah yang berlawanan dengan putaran jarum jam menghasilkan vektor \(\vec{b}=\begin{pmatrix}b_1\\b_2 \end{pmatrix}\) matriks transformasi yang mentransformasi \(\vec{a}\) ke \(\vec{b}\) berbentuk . . . </li>
                <input type="radio" name="soal26" value="0"  />
                \(\begin{pmatrix}0&1\\1&0 \end{pmatrix}\)
                <br />
                <input type="radio" name="soal26" value="10" id="soal26"/>
                \(\begin{pmatrix}0&1\\-1&0 \end{pmatrix}\)
                <br />
                <input type="radio" name="soal26" value="0" />
                \(\begin{pmatrix}1&0\\0&1 \end{pmatrix}\)
                <br />
                <input type="radio" name="soal26" value="0" />
                \(\begin{pmatrix}1&0\\0&-1 \end{pmatrix}\)
                <br />
                <input type="radio" name="soal26" value="0"/>
                \(\begin{pmatrix}-1&0\\0&1 \end{pmatrix}\)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal26" aria-expanded="false" aria-controls="collapsesoal26">
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal26">
                  <div class="card card-body overflow-auto">
                   Penyelesaian ketik disini
                   <b class="text-end"> JAWABAN :  </b>
                  </div>
                </div>
                <hr />
                <!--===========================================================27===========================================================================  -->
                <li>Garis \(2x+3y=6\) ditranslasikan dengan \(T=\begin{pmatrix}1\\-1 \end{pmatrix}\), maka bayangannya adalah . . .  </li>
                <input type="radio" name="soal27" value="0"  />
                \(2x+3y=3\)
                <br />
                <input type="radio" name="soal27" value="0" />
                \(2x+3y=4\)
                <br />
                <input type="radio" name="soal27" value="10" id="soal27" />
                \(2x+3y=5\)
                <br />
                <input type="radio" name="soal27" value="0" />
                \(2x+3y=6\)
                <br />
                <input type="radio" name="soal27" value="0" />
                \(2x+3y=7\)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal27" aria-expanded="false" aria-controls="collapsesoal27">
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal27">
                  <div class="card card-body overflow-auto">
                   Penyelesaian ketik disini
                   <b class="text-end"> JAWABAN :  </b>
                  </div>
                </div>
                <hr />
                <!--===========================================================28===========================================================================  -->
                <li>Persamaan bayangan dari lingkaran \(x^2+y^2+4x-6y-9=0\) karena translasi \(T=\begin{pmatrix}2\\1 \end{pmatrix}\) adalah . . . </li>
                <input type="radio" name="soal28" value="0"  />
                \(x^2+y^2-8y+6=0\)
                <br />
                <input type="radio" name="soal28" value="0" />
                \(x^2+y^2-2x-8y+6=0\)
                <br />
                <input type="radio" name="soal28" value="0" />
                \(x^2+y^2-8x+6=0\)
                <br />
                <input type="radio" name="soal28" value="0" />
                \(x^2+y^2-8x-2y+6=0\)
                <br />
                <input type="radio" name="soal28" value="10" id="soal28"/>
                \(x^2+y^2-8y-6=0\)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal28" aria-expanded="false" aria-controls="collapsesoal28">
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal28">
                  <div class="card card-body overflow-auto">
                   Penyelesaian ketik disini
                   <b class="text-end"> JAWABAN :  </b>
                  </div>
                </div>
                <hr />
                <!--===========================================================29===========================================================================  -->
                <li>Persamaan bayangan garis \(y=2x-3\) karena refleksi terhadap garis \(y=x\) adalah . . . </li>
                <input type="radio" name="soal29" value="10" id="soal29" />
                \(x-2y+3=0\)
                <br />
                <input type="radio" name="soal29" value="0" />
                \(x-2y-3=0\)
                <br />
                <input type="radio" name="soal29" value="0" />
                \(x+2y+3=0\)
                <br />
                <input type="radio" name="soal29" value="0" />
                \(x+2y-3=0\)
                <br />
                <input type="radio" name="soal29" value="0" />
                \(-x-2y-3=0\)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal29" aria-expanded="false" aria-controls="collapsesoal29">
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal29">
                  <div class="card card-body overflow-auto">
                   Penyelesaian ketik disini
                   <b class="text-end"> JAWABAN :  </b>
                  </div>
                </div>
                <hr />
                <!--===========================================================30===========================================================================  -->
                <li>Bayangan dari \(2x-3y-8=0\) oleh transformasi rotasi terhadap \(O\) sebesar \(\begin{align}\frac{\pi}{2}\end{align}\) radian adalah . . . </li>
                <input type="radio" name="soal30" value="0"  />
                \(3x-2y-8=0\)
                <br />
                <input type="radio" name="soal30" value="0" />
                \(3x+2y+8=0\)
                <br />
                <input type="radio" name="soal30" value="10" id="soal30"/>
                \(3x+2y-8=0\)
                <br />
                <input type="radio" name="soal30" value="0" />
                \(2x-3y-8=0\)
                <br />
                <input type="radio" name="soal30" value="0" />
                \(2x+3y-8=0\)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal30" aria-expanded="false" aria-controls="collapsesoal30">
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal30">
                  <div class="card card-body overflow-auto">
                   Penyelesaian ketik disini
                   <b class="text-end"> JAWABAN :  </b>
                  </div>
                </div>
                <hr />
                <!--===========================================================31===========================================================================  -->
                <li>Lingkaran yang mempunyai persamaan \(x^2+y^2-12x+10y-11=0\), dicerminkan terhadap garis \(y=-x\), persamaan bayangannya adalah . . . </li>
                <input type="radio" name="soal31" value="0"  />
                \(x^2+y^2-10x-12y-11=0\)
                <br />
                <input type="radio" name="soal31" value="0" />
                \(x^2+y^2+10x-12y+11=0\)
                <br />
                <input type="radio" name="soal31" value="0" />
                \(x^2+y^2-12x-10y+11=0\)
                <br />
                <input type="radio" name="soal31" value="0" />
                \(x^2+y^2-12x+10y+11=0\)
                <br />
                <input type="radio" name="soal31" value="10" id="soal31"/>
                \(x^2+y^2-10x+12y-11=0\)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal31" aria-expanded="false" aria-controls="collapsesoal31">
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal31">
                  <div class="card card-body overflow-auto">
                   Penyelesaian ketik disini
                   <b class="text-end"> JAWABAN :  </b>
                  </div>
                </div>
                <hr />
                <!--===========================================================32===========================================================================  -->
                <li>Persamaan bayangan garis \(3x+2y-8=0\) oleh pencerminan terhadap sumbu-Y adalah . . .</li>
                <input type="radio" name="soal32" value="0"  />
                \(2x+3y+8=0\)
                <br />
                <input type="radio" name="soal32" value="0" />
                \(3x-2y+8=0\)
                <br />
                <input type="radio" name="soal32" value="0" />
                \(2x-3y+8=0\)
                <br />
                <input type="radio" name="soal32" value="0" />
                \(3y-2x-8=0\)
                <br />
                <input type="radio" name="soal32" value="10" id="soal32"/>
                \(2y-3x-8=0\)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collpasesoal32" aria-expanded="false" aria-controls="collpasesoal32">
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collpasesoal32">
                  <div class="card card-body overflow-auto">
                   Penyelesaian ketik disini
                   <b class="text-end"> JAWABAN :  </b>
                  </div>
                </div>
                <hr />
                <!--===========================================================33===========================================================================  -->
                <li>Persamaan bayangan lingkaran \(x^2+y^2=1\) karena transformasi yang bersesuaian dengan matriks \(\begin{pmatrix}2&0\\0&1 \end{pmatrix}\) adalah . . . </li>
                <input type="radio" name="soal33" value="0"  />
                \(4x^2+y^2=1\)
                <br />
                <input type="radio" name="soal33" value="0" />
                \(x^2+y^2=1\)
                <br />
                <input type="radio" name="soal33" value="0" />
                \(4x^2+y^2=4\)
                <br />
                <input type="radio" name="soal33" value="10"  id="soal33"/>
                \(x^2+4y^2=4\)
                <br />
                <input type="radio" name="soal33" value="0"/>
                \(4x^2+2y^2=1\)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal33" aria-expanded="false" aria-controls="collapsesoal33">
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal33">
                  <div class="card card-body overflow-auto">
                   Penyelesaian ketik disini
                   <b class="text-end"> JAWABAN :  </b>
                  </div>
                </div>
                <hr />
                <!--===========================================================34===========================================================================  -->
                <li>Bayangan lingkaran \((x-1)^2 + (y-2)^2=25 \) jika didilatasikan oleh pusat \(O\) dengan faktor skala \(2\) adalah . . . </li>
                <input type="radio" name="soal34" value="0"  />
                \(x^2+y^2-x-2y-25=0\)
                <br />
                <input type="radio" name="soal34" value="0" />
                \(x^2+y^2-x-2y-20=0\)
                <br />
                <input type="radio" name="soal34" value="0" />
                \(x^2+y^2-4x-8y-20=0\)
                <br />
                <input type="radio" name="soal34" value="10" id="soal34" />
                \(x^2+y^2-4x-8y-80=0\)
                <br />
                <input type="radio" name="soal34" value="0" />
                \(x^2+y^2-4x-8y+20=0\)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse34" aria-expanded="false" aria-controls="collapse34">
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapse34">
                  <div class="card card-body overflow-auto">
                   Penyelesaian ketik disini
                   <b class="text-end"> JAWABAN :  </b>
                  </div>
                </div>
                <hr />
                <!--===========================================================35===========================================================================  -->
                <li>Garis \(y=2x-5\) ditransformasikan oleh transformasi yang berkaitan dengan matriks \(\begin{pmatrix}2&3 \\ 1&4 \end{pmatrix}\). Persamaan bayangan garis itu adalah . . . </li>
                <input type="radio" name="soal35" value="0"  />
                \(8y+9x+25=0\)
                <br />
                <input type="radio" name="soal35" value="10" id="soal35"/>
                \(8y-9x+25=0\)
                <br />
                <input type="radio" name="soal35" value="0" />
                \(8y-9x+7=0\)
                <br />
                <input type="radio" name="soal35" value="0" />
                \(8y+9x-7=0\)
                <br />
                <input type="radio" name="soal35" value="0" />
                \(-8y-9x+25=0\)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal35" aria-expanded="false" aria-controls="collapsesoal35">
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal35">
                  <div class="card card-body overflow-auto">
                   Penyelesaian ketik disini
                   <b class="text-end"> JAWABAN :  </b>
                  </div>
                </div>
                <hr />
                <!--===========================================================36===========================================================================  -->
                <li>Persamaan bayangan lingkaran \(x^2+y^2=4 \) bila dicerminakan terhadap garis \(x=2\) dilanjutkan dengan translasi \(T=\begin{pmatrix}-3\\4 \end{pmatrix} \) adalah . . .  </li>
                <input type="radio" name="soal36" value="0"  />
                \(x^2+y^2-2x-8y+13=0\)
                <br />
                <input type="radio" name="soal36" value="10" id="soal36" />
                \(x^2+y^2-2x+8y+13=0\)
                <br />
                <input type="radio" name="soal36" value="0" />
                \(x^2+y^2-2x+2y+13=0\)
                <br />
                <input type="radio" name="soal36" value="0" />
                \(x^2+y^2+2x+8y+13=0\)
                <br />
                <input type="radio" name="soal36" value="0" />
                \(x^2+y^2+2x+2y+13=0\)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal36" aria-expanded="false" aria-controls="collapsesoal36">
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal36">
                  <div class="card card-body overflow-auto">
                   Penyelesaian ketik disini
                   <b class="text-end"> JAWABAN :  </b>
                  </div>
                </div>
                <hr />
                <!--===========================================================37===========================================================================  -->
                <li>Persamaan bayangan garis \(2y-5x-10=0\) oleh rotasi \([O,90^{\circ}]\) dilanjutkan refleksi terhadap garis \(y=-x\) adalah . . . </li>
                <input type="radio" name="soal37" value="10" id="soal37" />
                \(5y+2x-10=0\)
                <br />
                <input type="radio" name="soal37" value="0" />
                \(5y-2x-10=0\)
                <br />
                <input type="radio" name="soal37" value="0" />
                \(2y+5x+10=0\)
                <br />
                <input type="radio" name="soal37" value="0" />
                \(2y+5x-10=0\)
                <br />
                <input type="radio" name="soal37" value="0" />
                \(2y-5x+10=0\)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse37" aria-expanded="false" aria-controls="collapse37">
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapse37">
                  <div class="card card-body overflow-auto">
                   Penyelesaian ketik disini
                   <b class="text-end"> JAWABAN :  </b>
                  </div>
                </div>
                <hr />
                <!--===========================================================38===========================================================================  -->
                <li>Garis dengan persamaan \(2x+y+4=0\) dicerminkan terhadap garis \(y=x\) dan dilanjutkan dengan transformasi yang bersesuaian dengan matriks \(\begin{pmatrix}1&2\\0&1 \end{pmatrix}\) </li>
                <input type="radio" name="soal38" value="0"  />
                \(x-2y+4=0\)
                <br />
                <input type="radio" name="soal38" value="0" />
                \(x+2y+4=0\)
                <br />
                <input type="radio" name="soal38" value="0" />
                \(x+4y+4=0\)
                <br />
                <input type="radio" name="soal38" value="0" />
                \(y+4=0\)
                <br />
                <input type="radio" name="soal38" value="10" id="soal38"/>
                \(x+4=0\)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal38" aria-expanded="false" aria-controls="collapsesoal38">
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal38">
                  <div class="card card-body overflow-auto">
                   Penyelesaian ketik disini
                   <b class="text-end"> JAWABAN :  </b>
                  </div>
                </div>
                <hr />
                <!--===========================================================39===========================================================================  -->
                <li>Persamaan bayangan dari garis \(x+3y+2=0\), oleh transformasi yang berkaitan dengan matriks \(\begin{pmatrix}2&3\\1&2 \end{pmatrix}\), kemudian dilanjutkan dengan transformasi yang berkaitan dengan matriks \(\begin{pmatrix}1&-1\\1&1 \end{pmatrix}\) adalah . . . </li>
                <input type="radio" name="soal39" value="0"  />
                \(-x+3y+2=0\)
                <br />
                <input type="radio" name="soal39" value="0" />
                \(-2x+3y+1=0\)
                <br />
                <input type="radio" name="soal39" value="0" />
                \(-2x-y+2=0\)
                <br />
                <input type="radio" name="soal39" value="0" />
                \(-2x-3y+2=0\)
                <br />
                <input type="radio" name="soal39" value="10" id="soal39"/>
                \(-2x+y+2=0\)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal39" aria-expanded="false" aria-controls="collapsesoal39">
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal39">
                  <div class="card card-body overflow-auto">
                   Penyelesaian ketik disini
                   <b class="text-end"> JAWABAN :  </b>
                  </div>
                </div>
                <hr />
                <!--===========================================================40===========================================================================  -->
                <li>Jika garis \(4x-y+3=0\) diputar terhadap titik pusat \((0,0)\) sejauh \(\begin{align}\frac{\pi}{2} \end{align}\) berlawanan arah dengan putaran jaram jam, dilanjutkan oleh transformasi yang bersesuaian dengan matriks \(\begin{pmatrix}1&2\\1&-1 \end{pmatrix}\), maka bayangan garis tersebut adalah . . . </li>
                <input type="radio" name="soal40" value="0"  />
                \(9x-5y+2=0\)
                <br />
                <input type="radio" name="soal40" value="0" />
                \(9x+5y+2=0\)
                <br />
                <input type="radio" name="soal40" value="0" />
                \(5x+2y-9=0\)
                <br />
                <input type="radio" name="soal40" value="10" id="soal40"/>
                \(5x-2y+9=0\)
                <br />
                <input type="radio" name="soal40" value="0" />
                \(2x-5y-9=0\)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal40" aria-expanded="false" aria-controls="collapsesoal40">
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal40">
                  <div class="card card-body overflow-auto">
                   Penyelesaian ketik disini
                   <b class="text-end"> JAWABAN :  </b>
                  </div>
                </div>
                <hr />

            </ol>

{{-- COPY DARI SINI SETIAP SOAL --}}
<input type="hidden" id="materi" name="materi" value="transgeo-02">
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
    <a href="/createtransgeo02" id="kirimsaja" class="btn btn-warning btn-bukti d-none" >SIMPAN JAWABAN</a>
</div>
</form>
{{-- COPY SAMPAI SINI --}}

<div id="disqus_thread"></div>

</div>
</div>
</div>
</section>
@endsection

