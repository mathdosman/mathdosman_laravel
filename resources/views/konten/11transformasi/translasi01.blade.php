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
            Translasi - 01 + Pembahasan
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
                <li>Tentukan hasil bayangan titik \(A(3,5) \) oleh translasi \(T\begin{pmatrix}-2 \\ 4 \end{pmatrix}\)!</li>
                <input type="radio" name="soal1" value="0" />
                \(A'(5, 1) \)
                <br />
                <input type="radio" name="soal1" value="0" />
                \(A'(3, 7) \)
                <br />
                <input type="radio" name="soal1" value="0"  />
                \(A'(7, -1) \)
                <br />
                <input type="radio" name="soal1" value="0" />
                \(A'(7, 3) \)
                <br />
                <input type="radio" name="soal1" value="10"/>
                \(A'(1, 9) \)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal1" aria-expanded="false" aria-controls="collapsesoal1" >
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal1">
                  <div class="card card-body overflow-auto">
                    \(\begin{align}
                    \begin{pmatrix}x'\\y'\end{pmatrix} &= \begin{pmatrix}-2\\4 \end{pmatrix}+\begin{pmatrix}3\\5\end{pmatrix} \\
                    &= \begin{pmatrix}1\\9 \end{pmatrix}
                    \end{align}\)
                    <br>
                    \(\text{Jadi, bayangan titik } A \text{ adalah } A'(1,9)\)
                   <b class="text-end"> JAWABAN : E </b>
                  </div>
                </div>
                <hr />
                <!--========================= soal no 2 ===========================================================================-->
                <li>Diketahui titik \(P'(4,-12)\) adalah bayangan titik \(P\) oleh translasi \(T=\begin{pmatrix}-9 \\ 8 \end{pmatrix} \). Koordinat titik \(P\) adalah . . .</li>
                <input type="radio" name="soal2" value="10" />
                \((13, -20)\)
                <br />
                <input type="radio" name="soal2" value="0" />
                \((13,-4) \)
                <br />
                <input type="radio" name="soal2" value="0"  />
                \((4,20) \)
                <br />
                <input type="radio" name="soal2" value="0" />
                \((-5, -4) \)
                <br />
                <input type="radio" name="soal2" value="0" />
                \((-5, -20) \)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal2" aria-expanded="false" aria-controls="collapsesoal2" >
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal2">
                  <div class="card card-body overflow-auto">
                    \(\begin{align}
                    \begin{pmatrix}4\\-12\end{pmatrix} &= \begin{pmatrix}-9\\8 \end{pmatrix}+\begin{pmatrix}x\\y\end{pmatrix} \\
                    \begin{pmatrix}4\\-12\end{pmatrix}-\begin{pmatrix}-9\\8 \end{pmatrix}&= \begin{pmatrix}x\\y \end{pmatrix} \\
                    \begin{pmatrix}x\\y \end{pmatrix} &= \begin{pmatrix}13\\-20 \end{pmatrix}
                    \end{align}\)
                    <br>
                    \(\text{Jadi, titik } P \text{ adalah } (13,-20)\)
                   <b class="text-end"> JAWABAN : A </b>
                  </div>
                </div>
                <hr />
                <!--================================================== soal no 3 ======================================================-->
                <li>Titik \(A\) ditranslasikan oleh \(T=\begin{pmatrix}6 \\ -3 \end{pmatrix}\) menghasilkan titik \(A'(4,-2) \). Koordinat titik \(A\) adalah . . . </li>
                <input type="radio" name="soal3" value="0"  />
                \((10, -5) \)
                <br />
                <input type="radio" name="soal3" value="0"  />
                \((10, 1) \)
                <br />
                <input type="radio" name="soal3" value="0" />
                \((2,-1) \)
                <br />
                <input type="radio" name="soal3" value="10"/>
                \((-2, 1) \)
                <br />
                <input type="radio" name="soal3" value="0" />
                \((-2, -1) \)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal3" aria-expanded="false" aria-controls="collapsesoal3" >
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal3">
                  <div class="card card-body overflow-auto">
                    \(\begin{align}
                    \begin{pmatrix}4\\-2\end{pmatrix} &= \begin{pmatrix}6\\-3 \end{pmatrix}+\begin{pmatrix}x\\y\end{pmatrix} \\
                    \begin{pmatrix}4\\-2\end{pmatrix}-\begin{pmatrix}6\\-3 \end{pmatrix}&= \begin{pmatrix}x\\y \end{pmatrix} \\
                    \begin{pmatrix}x\\y \end{pmatrix} &= \begin{pmatrix}-2\\1 \end{pmatrix}
                    \end{align}\)
                    <br>
                    \(\text{Jadi, titik } A \text{ adalah } (-2,1)\)
                   <b class="text-end"> JAWABAN : D </b>
                  </div>
                </div>
                <hr />
                <!-- soal no no4 =================================================================================================-->
                <li>Diketahui translasi \(T \) memetakan titik \(C(-4,2) \) ke titik \(C'(-1, 6) \). Translasi \(T\) akan memetakan titik \(D(3,-2) \) ke titik . . . </li>
                </li>
                <input type="radio" name="soal4" value="0" />
                \(D'(0,4) \)
                <br />
                <input type="radio" name="soal4" value="0" />
                \(D'(0,2) \)
                <br />
                <input type="radio" name="soal4" value="0" />
                \(D'(0,-6) \)
                <br />
                <input type="radio" name="soal4" value="10"  />
                \(D'(6,-6) \)
                <br />
                <input type="radio" name="soal4" value="0">
                \(D'(6,2) \)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal4" aria-expanded="false" aria-controls="collapsesoal4" >
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal4">
                  <div class="card card-body overflow-auto">
                    \(\begin{align}
                    \begin{pmatrix}-1\\6\end{pmatrix} &= \begin{pmatrix}a\\b \end{pmatrix}+\begin{pmatrix}-4\\2\end{pmatrix} \\
                    \begin{pmatrix}-1\\6\end{pmatrix}-\begin{pmatrix}-4\\2 \end{pmatrix}&= \begin{pmatrix}a\\b \end{pmatrix} \\
                    \begin{pmatrix}a\\b \end{pmatrix} &= \begin{pmatrix}3\\-4 \end{pmatrix}
                    \end{align}\)
                    Sehingga
                    \(\begin{align}
                    \begin{pmatrix}x'\\y' \end{pmatrix} &= \begin{pmatrix}3\\-4 \end{pmatrix} + \begin{pmatrix}3\\-2 \end{pmatrix} \\ &= \begin{pmatrix}6\\-6 \end{pmatrix}
                    \end{align}\)
                    <br>
                    \(\text{Jadi, bayangan titik } D \text{ adalah } D'(6,-6)\)
                   <b class="text-end"> JAWABAN : D </b>
                  </div>
                </div>
                <hr />
                <!-- soal no 5 ================================================================================================-->
                <li>Segitiga \(PQR\) mempunyai koordinat \(P(-3,4) \), \(Q(-1,0)\) dan \(R(0,2) \). Segitiga ditranslasikan oleh \(T\) menghasilkan bayangan segitiga \(P'Q'R'\). Jika koordinat titik \(P'(1,-2) \), koordinat titik \(Q'\) dan \(R'\) berturut-turut adalah . . . </li>
                <input type="radio" name="soal5" value="10"/>
                \((3,-6) \) dan \((4,-4) \)
                <br />
                <input type="radio" name="soal5" value="0" />
                \((3,-6) \) dan \((-4,4) \)
                <br />
                <input type="radio" name="soal5" value="0"/>
                \((-3,6) \) dan \((4,-4) \)
                <br />
                <input type="radio" name="soal5" value="0"/>
                \((-3,6) \) dan \((-4,4) \)
                <br />
                <input type="radio" name="soal5" value="0" />
                \((-3,-6) \) dan \((4,-4) \)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal5" aria-expanded="false" aria-controls="collapsesoal5" >
                  Alternatif Penyelesaian:
                  </button>
                  <div class="collapse" id="collapsesoal5">
                    <div class="card card-body overflow-auto">
                      \(\begin{align}
                      \begin{pmatrix}1\\-2\end{pmatrix} &= \begin{pmatrix}a\\b \end{pmatrix}+\begin{pmatrix}-3\\4\end{pmatrix} \\
                      \begin{pmatrix}1\\-2\end{pmatrix}-\begin{pmatrix}-3\\4 \end{pmatrix}&= \begin{pmatrix}a\\b \end{pmatrix} \\
                      \begin{pmatrix}a\\b \end{pmatrix} &= \begin{pmatrix}4\\-6 \end{pmatrix}
                      \end{align}\)
                      Sehingga

                      \(\begin{align}
                      Q' \to \begin{pmatrix}x'\\y' \end{pmatrix} &= \begin{pmatrix}4\\-6 \end{pmatrix} + \begin{pmatrix}-1\\0 \end{pmatrix} \\ &= \begin{pmatrix}3\\-6 \end{pmatrix}
                      \end{align}\)
                      <br>
                      \(\begin{align}
                      R' \to \begin{pmatrix}x'\\y' \end{pmatrix} &= \begin{pmatrix}4\\-6 \end{pmatrix} + \begin{pmatrix}0\\2 \end{pmatrix} \\ &= \begin{pmatrix}4\\-4 \end{pmatrix}
                      \end{align}\)
                      <br>
                      \(\text{Jadi, titik } Q' \text{ dan }R' \text{ berturut-turut adalah }\) \((3,-6) \text{ dan } (4,-4)\)
                     <b class="text-end"> JAWABAN : A </b>
                    </div>
                  </div>
                <hr />
                <!-- =====SOAL NO 6======================================================================= -->
                <li>Diketahui titik \(P'(3,-13) \) adalah bayangan titik \(P\) oleh translasi \(T=\begin{pmatrix}-10\\7 \end{pmatrix} \). Koordinat titik \(P\) adalah . . . </li>
                <input type="radio" name="soal6" value="10" />
                \((13,-20) \)
                <br />
                <input type="radio" name="soal6" value="0" />
                \((13,-4) \)
                <br />
                <input type="radio" name="soal6" value="0" />
                \((4,20) \)
                <br />
                <input type="radio" name="soal6" value="0" />
                \((-5,-4) \)
                <br />
                <input type="radio" name="soal6" value="0" />
                \((-5,-20) \)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal6" aria-expanded="false" aria-controls="collapsesoal6" >
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal6">
                  <div class="card card-body overflow-auto">
                    \(\begin{align}
                    \begin{pmatrix}3\\-13\end{pmatrix} &= \begin{pmatrix}-10\\7 \end{pmatrix}+\begin{pmatrix}x\\y\end{pmatrix} \\
                    \begin{pmatrix}3\\-13\end{pmatrix}-\begin{pmatrix}-10\\7 \end{pmatrix}&= \begin{pmatrix}x\\y \end{pmatrix} \\
                    \begin{pmatrix}x\\y \end{pmatrix} &= \begin{pmatrix}13\\-20 \end{pmatrix}
                    \end{align}\)
                   <b class="text-end"> JAWABAN : A </b>
                  </div>
                </div>
                <hr />
                <!-- =====SOAL NO 7======================================================================= -->
                <li>Titik \(A(7, -6)\) ditranslasikan oleh \(T = (-2, 4)\), maka koordinat titik \(A'\) adalah . . .</li>
                <input type="radio" name="soal7" value="0" />
                \((9, -10) \)
                <br />
                <input type="radio" name="soal7" value="0" />
                \((-5,-2)\)
                <br />
                <input type="radio" name="soal7" value="10"/>
                \((5,-2)\)
                <br />
                <input type="radio" name="soal7" value="0"  />
                \((-9,10)\)
                <br />
                <input type="radio" name="soal7" value="0" />
                \((10,9)\)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal7" aria-expanded="false" aria-controls="collapsesoal7" >
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal7">
                  <div class="card card-body overflow-auto">
                    \(\begin{align}
                    \begin{pmatrix}x'\\y'\end{pmatrix} &= \begin{pmatrix}-2\\4 \end{pmatrix}+\begin{pmatrix}7\\-6\end{pmatrix} \\
                    &= \begin{pmatrix}5\\-2 \end{pmatrix}
                    \end{align}\)
                    <br>
                    \(\text{Jadi, bayangan titik } A \text{ adalah } A'(5,-2)\)
                   <b class="text-end"> JAWABAN : C </b>
                  </div>
                </div>
                <hr />
                <!-- =====SOAL NO 8======================================================================= -->
                <li>Jika titik \(G'(4, -1)\) adalah bayangan titik dari \(G(7, -5)\) oleh translasi \(T\), maka nilai \(T\) adalah . . . </li>
                <input type="radio" name="soal8" value="0" />
                \((2,5) \)
                <br />
                <input type="radio" name="soal8" value="10"/>
                \((-3,4) \)
                <br />
                <input type="radio" name="soal8" value="0"  />
                \((1,7) \)
                <br />
                <input type="radio" name="soal8" value="0"  />
                \((4,2) \)
                <br />
                <input type="radio" name="soal8" value="0" />
                \((-2,3) \)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal8" aria-expanded="false" aria-controls="collapsesoal8" >
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal8">
                  <div class="card card-body overflow-auto">
                    \(\begin{align}
                    \begin{pmatrix}4\\-1\end{pmatrix} &= \begin{pmatrix}a\\b \end{pmatrix}+\begin{pmatrix}7\\-5\end{pmatrix} \\
                    \begin{pmatrix}4\\-1\end{pmatrix}-\begin{pmatrix}7\\-5 \end{pmatrix}&= \begin{pmatrix}a\\b \end{pmatrix} \\
                    \begin{pmatrix}a\\b \end{pmatrix} &= \begin{pmatrix}-3\\4 \end{pmatrix}
                    \end{align}\)
                   <b class="text-end"> JAWABAN : B </b>
                  </div>
                </div>
                <hr />
                <!-- =====SOAL NO 9======================================================================= -->
                <li>Diketahui koordinat titik \(P\) adalah \((2c,3)\). Oleh karena translasi \(\begin{pmatrix}c\\-3\end{pmatrix} \) diperoleh bayangan titik \(P\) yaitu \(P'(3,0) \), maka nilai \(c\) adalah . . . </li>
                <input type="radio" name="soal9" value="0" />
                \(-3\)
                <br />
                <input type="radio" name="soal9" value="0" />
                \(-2\)
                <br />
                <input type="radio" name="soal9" value="0"  />
                \(-1\)
                <br />
                <input type="radio" name="soal9" value="10"/>
                \(1\)       <br />
                <input type="radio" name="soal9" value="0" />
                \(2\)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal9" aria-expanded="false" aria-controls="collapsesoal9" >
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal9">
                  <div class="card card-body overflow-auto">
                    \(\begin{align}
                    \begin{pmatrix}3\\0\end{pmatrix} &= \begin{pmatrix}c\\-3 \end{pmatrix}+\begin{pmatrix}2c\\3\end{pmatrix} \\
                    \begin{pmatrix}3\\0 \end{pmatrix}&= \begin{pmatrix}3c\\0 \end{pmatrix} \\
                    \text{Sehingga}\\
                    3&=3c\\
                    c&=1
                    \end{align}\)
                    <br>
                   <b class="text-end"> JAWABAN : D </b>
                  </div>
                </div>
                <hr />
                <!-- =====SOAL NO 10======================================================================= -->
                <li>Diketahui koordinat titik \(P\) adalah \((4,-1)\). Oleh karena translasi \(\begin{pmatrix}2\\a\end{pmatrix} \) diperoleh bayangan titik \(P\) yaitu \(P'(-2a,-4) \), maka nilai \(a\) adalah . . . </li>
                <input type="radio" name="soal10" value="10" />
                \(-3\)
                <br />
                <input type="radio" name="soal10" value="0" />
                \(-1\)
                <br />
                <input type="radio" name="soal10" value="0" />
                \(0\)
                <br />
                <input type="radio" name="soal10" value="0" />
                \(1\)
                <br />
                <input type="radio" name="soal10" value="0" />
                \(3\)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal10" aria-expanded="false" aria-controls="collapsesoal10" >
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal10">
                  <div class="card card-body overflow-auto">
                    \(\begin{align}
                    \begin{pmatrix}-2a\\-4\end{pmatrix} &= \begin{pmatrix}2\\a \end{pmatrix}+\begin{pmatrix}4\\-1\end{pmatrix} \\
                    \begin{pmatrix}-2a\\-4 \end{pmatrix}&= \begin{pmatrix}6\\a-1 \end{pmatrix} \\
                    \text{Sehingga}\\
                    -2a&=6\\
                    a&=-3 \\
                    \text{atau}\\
                    -4&=a-1\\
                    a&=-3
                    \end{align}\)
                    <br>
                    \(\text{Jadi, nilai } a \text{ adalah } -3\)
                   <b class="text-end"> JAWABAN : A </b>
                  </div>
                </div>
                <hr />
                <li>Jika garis \(2x-3y+7=0\) ditranslasikan oleh \(\begin{pmatrix}-2\\3 \end{pmatrix} \), bayangannya berbentuk . . . </li>
                <input type="radio" name="soal11" value="10" />
                \(2x-3y+20=0\)
                <br />
                <input type="radio" name="soal11" value="0" />
                \(2x-3y+13=0\)
                <br />
                <input type="radio" name="soal11" value="0" />
                \(2x-3y+6=0\)
                <br />
                <input type="radio" name="soal11" value="0" />
                \(3x-2y+13=0\)
                <br />
                <input type="radio" name="soal11" value="0" />
                \(3x-2y+20=0\)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal11" aria-expanded="false" aria-controls="collapsesoal11" >
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal11">
                  <div class="card card-body overflow-auto">
                    misalkan (x,y) berada pada garis, maka
                    \(\begin{align}
                    \begin{pmatrix}x'\\y'\end{pmatrix} &= \begin{pmatrix}-2\\3 \end{pmatrix}+\begin{pmatrix}x\\y\end{pmatrix} \\
                    \begin{pmatrix}x'\\y' \end{pmatrix}&= \begin{pmatrix}-2+x\\3+y \end{pmatrix} \\
                    \text{Sehingga}\\
                    x'&=-2+x  &\to x=x'+2\\
                    y'&=3+y  &\to y=y'-3\\
                    \end{align}\)
                    <br>
                    \(\begin{align}
                    2x-3y+7&=0 \\
                    2(x'+2)-3(y'-3)+7&=0\\
                    2x'+4-3y'+9+7&=0\\
                    2x'-3y'+20&=0
                    \end{align}\)
                    <br>
                    \(\text{Jadi, bayangan garisnya }  \text{adalah } 2x-3y+20=0\)
                   <b class="text-end"> JAWABAN : A </b>
                  </div>
                </div>
                <hr />
                <li>Bayangan dari lingkaran \((x-3)^2+(y+4)^2 =9 \) karena translasi \(\begin{pmatrix}2\\1 \end{pmatrix}\) adalah . . . </li>
                <input type="radio" name="soal12" value="0" />
                \(x^2 + y^2 -10x +6y +9 =0\)
                <br />
                <input type="radio" name="soal12" value="0" />
                \(x^2 + y^2 -10x +6y +16 =0\)
                <br />
                <input type="radio" name="soal12" value="10"/>
                \(x^2 + y^2 -10x +6y +25 =0\)
                <br />
                <input type="radio" name="soal12" value="0" />
                \(x^2 + y^2 -6x +10y +25 =0\)
                <br />
                <input type="radio" name="soal12" value="0" />
                \(x^2 + y^2 -6x +10y +16 =0\)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal12" aria-expanded="false" aria-controls="collapsesoal12" >
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal12">
                  <div class="card card-body overflow-auto">
                    misalkan (x,y) berada pada kurva, maka
                    \(\begin{align}
                    \begin{pmatrix}x'\\y' \end{pmatrix} &= \begin{pmatrix}2\\1 \end{pmatrix} + \begin{pmatrix}x\\y \end{pmatrix} \\
                    \begin{pmatrix}x'\\y' \end{pmatrix} &= \begin{pmatrix}2+x \\ 1+y \end{pmatrix} \\
                    \text{Sehingga}\\
                    x' &= 2+ x &\to x=x'-2 \\
                    y'&=1+y &\to y=y'-1
                    \end{align}\)
                    substitusi x dan y ke kurva
                    \(\begin{align}
                    (x-3)^2+(y+4)^2 &=9 \\
                    (x'-2-3)^2 + (y'-1+4)^2 &=9 \\
                    (x'-5)^2 + (y'+3)^2 &=9 \\
                    (x')^2-10x'+25+(y)^2+6y'+9-9&=0 \\
                    (x')^2+(y')^2 -10x'+6y'+25 &=0
                    \end{align}\)
                    <br>
                    Jadi, bayangan lingkarannya adalah  \(x^2 +y^2-10x+6y+25 =0\)
                   <b class="text-end"> JAWABAN : C </b>
                  </div>
                </div>
                <hr />

                <li> Jika parabola \(y=-x^2-4x+7\) ditranslasikan oleh \(\begin{pmatrix}-1\\-3 \end{pmatrix} \), bayangannya berbentuk . . . </li>
                <input type="radio" name="soal13" value="0"  />
                \(y=x^2-6x-1 \)
                <br />
                <input type="radio" name="soal13" value="0" />
                \(y=x^2+6x-1 \)
                <br />
                <input type="radio" name="soal13" value="10"/>
                \(y=-x^2-6x-1 \)
                <br />
                <input type="radio" name="soal13" value="0" />
                \(y=x^2+6x+1 \)
                <br />
                <input type="radio" name="soal13" value="0" />
                \(y=-x^2+6x+1 \)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal13" aria-expanded="false" aria-controls="collapsesoal13" >
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal13">
                  <div class="card card-body overflow-auto">
                    misalkan (x,y) berada pada kurva, maka
                    \(\begin{align}
                    \begin{pmatrix}x'\\y' \end{pmatrix} &= \begin{pmatrix}-1\\-3 \end{pmatrix} + \begin{pmatrix}x\\y \end{pmatrix} \\
                    \begin{pmatrix}x'\\y' \end{pmatrix} &= \begin{pmatrix}-1+x \\ -3+y \end{pmatrix} \\
                    \text{Sehingga}\\
                    x' &= -1+ x &\to x=x'+1 \\
                    y'&=-3+y &\to y=y'+3
                    \end{align}\)
                    substitusi x dan y ke kurva
                    \(\begin{align}
                    y&=-x^2-4x+7 \\
                    y'+3 &= -(x'+1)^2 -4(x'+1)+7 \\
                    y'+3 &= -((x')^2 +2x'+1)-4x'-4+7 \\
                    y' +3 &= -(x')^2 -2x'-1-4x'+3 \\
                    y'&= -(x')^2-6x'-1
                    \end{align}\)
                    <br>
                    Jadi, bayangan parabolanya adalah  \(y=-x^2-6x-1\)
                   <b class="text-end"> JAWABAN : C </b>
                  </div>
                </div>
                <hr />

                <li>Bayangan dari lingkaran \((x-2)^2+(y+4)^2 =7 \) karena translasi \(\begin{pmatrix}-5\\-2 \end{pmatrix}\) adalah . . .  </li>
                <input type="radio" name="soal14" value="0"  />
                \((x+3)^2 +(y+6)^2 = -38\)
                <br />
                <input type="radio" name="soal14" value="0" />
                \((x+3)^2 +(y-6)^2 = 14\)
                <br />
                <input type="radio" name="soal14" value="0" />
                \((x+3)^2 +(y+6)^2 = 36\)
                <br />
                <input type="radio" name="soal14" value="0" />
                \((x-3)^2 +(y+6)^2 = 7\)
                <br />
                <input type="radio" name="soal14" value="10"/>
                \((x+3)^2 +(y+6)^2 = 7\)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal14" aria-expanded="false" aria-controls="collapsesoal14" >
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal14">
                  <div class="card card-body overflow-auto">
                    misalkan (x,y) berada pada garis, maka
                    \(\begin{align}
                    \begin{pmatrix}x'\\y' \end{pmatrix} &= \begin{pmatrix}-5\\-2 \end{pmatrix}+ \begin{pmatrix}x\\y \end{pmatrix} \\
                    \begin{pmatrix}x'\\y' \end{pmatrix} &= \begin{pmatrix}-5+x\\-2+y \end{pmatrix} \\
                    \text{Sehingga} \\
                    x'&=-5+x &\to x=x'+5 \\
                    y'&=-2+y &\to y=y'+2
                    \end{align}\)
                    <br>
                    SUbstistusi nilai x dan y ke kurva
                    \(\begin{align}
                    (x-2)^2+(y+4)^2 &=7 \\
                    (x'+5-2)^2+(y'+2+4)^2 &=7 \\
                    (x'+3)^2 + (y'+6)^2 &=7 \\
                    \end{align}\)
                    Jadi, bayangan lingkarannya adalah  \((x+3)^2 + (y+6)^2 =7\)
                   <b class="text-end"> JAWABAN : E </b>
                  </div>
                </div>
                <hr />

                <li>Jika garis \(x-5y-12=0\) ditranslasikan oleh \(\begin{pmatrix}4\\-5 \end{pmatrix} \), bayangannya berbentuk . . . </li>
                <input type="radio" name="soal15" value="10"/>
                \(x-5y=41\)
                <br />
                <input type="radio" name="soal15" value="0" />
                \(x+5y=41\)
                <br />
                <input type="radio" name="soal15" value="0" />
                \(-x+5y=41\)
                <br />
                <input type="radio" name="soal15" value="0" />
                \(5x-y=41\)
                <br />
                <input type="radio" name="soal15" value="0" />
                \(5x+y=41\)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal15" aria-expanded="false" aria-controls="collapsesoal15" >
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal15">
                  <div class="card card-body overflow-auto">
                    misalkan (x,y) berada pada garis, maka
                    \(\begin{align}
                    \begin{pmatrix}x'\\y' \end{pmatrix} &= \begin{pmatrix}4\\-5 \end{pmatrix}+ \begin{pmatrix}x\\y \end{pmatrix} \\
                    \begin{pmatrix}x'\\y' \end{pmatrix} &= \begin{pmatrix}4+x\\-5+y \end{pmatrix} \\
                    \text{Sehingga} \\
                    x'&=4+x &\to x=x'-4 \\
                    y'&=-5+y &\to y=y'+5
                    \end{align}\)
                    <br>
                    SUbstistusi nilai x dan y ke kurva
                    \(\begin{align}
                    x-5y-12&=0 \\
                    (x'-4)-5(y'+5)-12 &=0 \\
                    x'-4 -5y'-25-12 &=0 \\
                    x'-5y'-41 &=0 \\
                    x'-5y' &= 41
                    \end{align}\)
                    Jadi, bayangan garisnya adalah  \(x-5y=41\)
                   <b class="text-end"> JAWABAN : A </b>
                  </div>
                </div>
                <hr />

            </ol>

{{-- COPY DARI SINI SETIAP SOAL --}}
<input type="hidden" id="materi" name="materi" value="translasi-01">
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
    <a href="/createtranslasi01" id="kirimsaja" class="btn btn-warning btn-bukti d-none" >SIMPAN JAWABAN</a>
</div>
</form>
{{-- COPY SAMPAI SINI --}}

<div id="disqus_thread"></div>

</div>
</div>
</div>
</section>
@endsection

