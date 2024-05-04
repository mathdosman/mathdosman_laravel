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
            Reflesi - 01 + Pembahasan
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
                <li>Bayangan dari titik \(A=(5,2)\) yang dicerminkan oleh garis \(x=0\) adalah . . .</li>
                <input type="radio" name="soal1" value="10"/>
                \(A'(-5, 2) \)
                <br />
                <input type="radio" name="soal1" value="0" />
                \(A'(5, -2) \)
                <br />
                <input type="radio" name="soal1" value="0"  />
                \(A'(2, -5) \)
                <br />
                <input type="radio" name="soal1" value="0" />
                \(A'(-2, 5) \)
                <br />
                <input type="radio" name="soal1" value="0"/>
                \(A'(-5, -2) \)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal1" aria-expanded="false" aria-controls="collapsesoal1" >
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal1">
                  <div class="card card-body overflow-auto">
                    garis x = 0 sama dengan garis sumbu-Y
                    \(\begin{align}
                    \begin{pmatrix}x'\\y' \end{pmatrix} &= \begin{pmatrix}-1&0\\0&1 \end{pmatrix} \begin{pmatrix}5\\2 \end{pmatrix} \\
                    &=\begin{pmatrix}-5\\2 \end{pmatrix}
                    \end{align}\)
                    <br>

                   <b class="text-end"> JAWABAN : A</b>
                  </div>
                </div>
                <hr />
<!--========================= soal no 2 ===========================================================================-->
            <li>Bayangan dari titik \(A=(-2,3)\) yang dicerminkan terhadap sumbu-X adalah . . .</li>
                <input type="radio" name="soal2" value="0"  />
                \((3, -2)\)
                <br />
                <input type="radio" name="soal2" value="10" />
                \((-2,-3) \)
                <br />
                <input type="radio" name="soal2" value="0"  />
                \((-3,2) \)
                <br />
                <input type="radio" name="soal2" value="0" />
                \((-2, 3) \)
                <br />
                <input type="radio" name="soal2" value="0" />
                \((2, 3) \)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal2" aria-expanded="false" aria-controls="collapsesoal2" >
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal2">
                  <div class="card card-body overflow-auto">
                    \(\begin{align}
                    \begin{pmatrix}x'\\y' \end{pmatrix} &= \begin{pmatrix}1&0\\0&-1 \end{pmatrix} \begin{pmatrix}-2\\3 \end{pmatrix} \\
                    &=\begin{pmatrix}-2\\-3 \end{pmatrix}
                    \end{align}\)
                    <br>

                   <b class="text-end"> JAWABAN : B</b>
                  </div>
                </div>
                <hr />
<!--================================================== soal no 3 ======================================================-->
            <li> Bayangan dari titik \(A=(3,-7)\) yang dicerminkan terhadap sumbu-Y adalah . . .</li>
                <input type="radio" name="soal3" value="0"  />
                \((-3, 7) \)
                <br />
                <input type="radio" name="soal3" value="0"  />
                \((3, -7) \)
                <br />
                <input type="radio" name="soal3" value="10"/>
                \((-3,-7) \)
                <br />
                <input type="radio" name="soal3" value="0" />
                \((7, -3) \)
                <br />
                <input type="radio" name="soal3" value="0" />
                \((-7, 3) \)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal3" aria-expanded="false" aria-controls="collapsesoal3" >
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal3">
                  <div class="card card-body overflow-auto">
                    \(\begin{align}
                    \begin{pmatrix}x'\\y' \end{pmatrix} &= \begin{pmatrix}-1&0\\0&1 \end{pmatrix} \begin{pmatrix}3\\-7 \end{pmatrix} \\
                    &=\begin{pmatrix}-3\\-7 \end{pmatrix}
                    \end{align}\)
                    <br>
                   <b class="text-end"> JAWABAN : C</b>
                  </div>
                </div>
                <hr />
<!-- soal no no4 =================================================================================================-->
            <li>Bayangan garis \(y=3x-5 \) dicerminkan terhadap titik \((2,-5)\) adalah . . .</li>
                </li>
                <input type="radio" name="soal4" value="0" />
                \(3y-x=17 \)
                <br />
                <input type="radio" name="soal4" value="0" />
                \(-3y+x=17 \)
                <br />
                <input type="radio" name="soal4" value="0" />
                \(-3x-y=17 \)
                <br />
                <input type="radio" name="soal4" value="10"/>
                \(3x-y=17\)
                <br />
                <input type="radio" name="soal4" value="0" >
                \(3x+3y=17 \)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal4" aria-expanded="false" aria-controls="collapsesoal4" >
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal4">
                  <div class="card card-body overflow-auto">
                    misalkan (x,y) berada pada kurva
                    \(\begin{align}
                    \begin{pmatrix}x'\\y' \end{pmatrix} &=\begin{pmatrix}-1&0\\0&-1 \end{pmatrix}\begin{pmatrix}x\\y \end{pmatrix} + \begin{pmatrix}2(2)\\2(-5) \end{pmatrix} \\
                    & = \begin{pmatrix}-x\\-y \end{pmatrix}+\begin{pmatrix}4\\-10 \end{pmatrix}\\
                    \text{Sehingga}\\
                    x'&=-x+4 &\to x=-x'+4 \\
                    y'&=-y-10 &\to y=-y'-10
                    \end{align}\)
                    Substitusikan nilai x dan y ke kurva
                    \(\begin{align}
                    y&=3x-5 \\
                    -y'-10 &=3(-x'+4)-5 \\
                    -y'-10 &= -3x'+12-5 \\
                    -y'&=-3x'+7+10 \\
                    3x'-y'&=17
                    \end{align}\)
                    <br>
                    Jadi, bayangan garis tersebut adalah \(3x-y=17\)
                   <b class="text-end"> JAWABAN : D</b>
                  </div>
                </div>
                <hr />
<!-- soal no 5 ================================================================================================-->
            <li>Bayangan garis \(y=-4x+7 \) dicerminkan terhadap  garis \(y=-2\) adalah . . .</li>
                <input type="radio" name="soal5" value="0" />
                \(y=-4x-11 \)
                <br />
                <input type="radio" name="soal5" value="0" />
                \(y=4x+11 \)
                <br />
                <input type="radio" name="soal5" value="0"   />
                \(x=4y-11 \)
                <br />
                <input type="radio" name="soal5" value="0"/>
                \(x=4y+11\)
                <br />
                <input type="radio" name="soal5" value="10"/>
                \(y=4x-11 \)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal5" aria-expanded="false" aria-controls="collapsesoal5" >
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal5">
                  <div class="card card-body overflow-auto">
                    misalkan (x,y) berada pada kurva
                    \(\begin{align}
                    \begin{pmatrix}x'\\y' \end{pmatrix} &= \begin{pmatrix}1&0 \\ 0&-1 \end{pmatrix}\begin{pmatrix}x\\y \end{pmatrix}+\begin{pmatrix} 0\\2(-2)\end{pmatrix} \\
                    &=\begin{pmatrix}x\\-y \end{pmatrix}+\begin{pmatrix}0\\-4 \end{pmatrix} \\
                    \begin{pmatrix}x'\\y' \end{pmatrix} &= \begin{pmatrix}x\\-y-4 \end{pmatrix} \\
                    \text{Sehingga}\\
                    x'&=x &\to x=x' \\
                    y'&= -y-4 &\to y=-y'-4 \\
                    \end{align}\)
                    Substitusi nilai x dan y ke kurva
                    \(\begin{align}
                    y&=-4x+7 \\
                    -y'-4 &= -4(x')+7 \\
                    y'+4=4x'-7 \\
                    y' &= 4x'-11
                    \end{align}\)
                    <br>
                    Jadi, bayangan garis adalah \(y=4x-11\)
                   <b class="text-end"> JAWABAN : E</b>
                  </div>
                </div>
                <hr />
<!-- =====SOAL NO 6======================================================================= -->
            <li> Bayangan parabola \(y=2x^2-3x+5 \) terhadap pencerminan \(y=-x\) adalah . . . </li>
                <input type="radio" name="soal6" value="10"/>
                \(x=-2y^2 -3y -5 \)
                <br />
                <input type="radio" name="soal6" value="0" />
                \(x=2y^2 -3y -5 \)
                <br />
                <input type="radio" name="soal6" value="0" />
                \(x=2y^2 -3y +5 \)
                <br />
                <input type="radio" name="soal6" value="0" />
                \(x=2y^2 +3y +5 \)
                <br />
                <input type="radio" name="soal6" value="0" />
                \(x=-2y^2 +3y -5 \)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal6" aria-expanded="false" aria-controls="collapsesoal6" >
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal6">
                  <div class="card card-body overflow-auto">
                    \(\begin{align}
                    \begin{pmatrix}x'\\y' \end{pmatrix} &= \begin{pmatrix}0&-1 \\ -1&0 \end{pmatrix}\begin{pmatrix}x\\y \end{pmatrix} \\
                    \begin{pmatrix}x'\\y' \end{pmatrix} &= \begin{pmatrix}-y\\-x \end{pmatrix} \\
                    \text{Sehingga}\\
                    y&= -x \\
                    x&= -y
                    \end{align}\)
                    Substitusi nilai x dan y
                    \(\begin{align}
                    y&= 2x^2-3x +5 \\
                    -x'&=2(-y')^2-3(-y')+5 \\
                    -x'&=2y'^2+3y'+5 \\
                    x'&=-2y'^2-3y'-5
                    \end{align}\)
                    <br>
                    Jadi, bayangan parabola adalah \(x=-2y^2-3y-5\)
                   <b class="text-end"> JAWABAN : A</b>
                  </div>
                </div>
                <hr />
<!-- =====SOAL NO 7======================================================================= -->
            <li>bayangan lingkaran \(x^2+y^2-4x+6y-2=0 \) dicerminkan terhadap sumbu-X </li>
                <input type="radio" name="soal7" value="0" />
                \(x^2 +y^2 -4x+6y=2 \)
                <br />
                <input type="radio" name="soal7" value="0" />
                \(x^2 +y^2 +4x+6y=2\)
                <br />
                <input type="radio" name="soal7" value="10"/>
                \(x^2 +y^2 -4x-6y=2 \)
                <br />
                <input type="radio" name="soal7" value="0"  />
                \(x^2 +y^2 +4x-6y=2\)
                <br />
                <input type="radio" name="soal7" value="0" />
                \(x^2 +y^2 -4x+6y=-2\)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal7" aria-expanded="false" aria-controls="collapsesoal7" >
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal7">
                  <div class="card card-body overflow-auto">
                    \(\begin{align}
                    \begin{pmatrix}x'\\y' \end{pmatrix} &= \begin{pmatrix}1&0\\0&-1 \end{pmatrix}\begin{pmatrix}x\\y \end{pmatrix} \\
                    \begin{pmatrix}x'\\y' \end{pmatrix} &= \begin{pmatrix}x\\-y \end{pmatrix} \\
                    \text{Sehingga} \\
                    x &= x' \\
                    y &= -y'
                    \end{align}\)
                    Substitusi nilai x dan y ke kurva
                    \(\begin{align}
                    x^2+y^2-4x+6y-2&=0 \\
                    (x')^2 + (-y')^2 -4(x')+6(-y')-2 &= 0 \\
                    x'^2 +y'^2 -4x'-6y'-2 &=0\\
                    x'^2 +y'^2 -4x'-6y' &=2
                    \end{align}\)
                    <br>
                    Jadi, bayangan lingkaran adalah \(x^2 + y^2 -4x-6y=2\)
                   <b class="text-end"> JAWABAN : C</b>
                  </div>
                </div>
                <hr />
<!-- =====SOAL NO 8======================================================================= -->
                <li>Bayangan garis \(y=2x+2\) yang direfleksikan terhadap garis \(y=x\) adalah . . .</li>
                <input type="radio" name="soal8" value="10"/>
                \(x-2y-2=0 \)
                <br />
                <input type="radio" name="soal8" value="0" />
                \(x-2y-1=0 \)
                <br />
                <input type="radio" name="soal8" value="0"  />
                \(x-2y+2-0 \)
                <br />
                <input type="radio" name="soal8" value="0"  />
                \(x-y+1=0 \)
                <br />
                <input type="radio" name="soal8" value="0" />
                \(x-y-1=0 \)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal8" aria-expanded="false" aria-controls="collapsesoal8" >
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal8">
                  <div class="card card-body overflow-auto">
                    \(\begin{align}
                    \begin{pmatrix}x'\\y' \end{pmatrix} &= \begin{pmatrix}0&1\\1&0 \end{pmatrix}\begin{pmatrix}x\\y \end{pmatrix} \\
                    \begin{pmatrix}x'\\y' \end{pmatrix} &= \begin{pmatrix}y\\x \end{pmatrix} \\
                    \text{Sehingga} \\
                    x &= y' \\
                    y &= x'
                    \end{align}\)
                    Substitusi nilai x dan y
                    \(\begin{align}
                    y&=2x+2 \\
                    x'&=2y'+2 \\
                    x'-2y'-2 &=0
                    \end{align}\)
                    <br>
                    Jadi bayangan garis adalah \(x-2y-2=0\)
                   <b class="text-end"> JAWABAN : A</b>
                  </div>
                </div>
                <hr />
<!-- =====SOAL NO 9======================================================================= -->
                <li>Bayangan titik \(B(5,2)\) oleh pencerminan terhadap garis \(g\) adalah \((5,-2)\), maka persamaan garis \(g\) adalah . . .</li>
                <input type="radio" name="soal9" value="0" />
                \(y=-x\)
                <br />
                <input type="radio" name="soal9" value="0" />
                \(x=0\)
                <br />
                <input type="radio" name="soal9" value="0"  />
                \(y=x\)
                <br />
                <input type="radio" name="soal9" value="10"/>
                \(y=0\)
                <br />
                <input type="radio" name="soal9" value="0" />
                \(x=-y\)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal9" aria-expanded="false" aria-controls="collapsesoal9" >
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal9">
                  <div class="card card-body overflow-auto">
                    \(\begin{align}
                    \begin{pmatrix}5\\2 \end{pmatrix} \overset{T}{\to}\begin{pmatrix}5\\-2 \end{pmatrix}
                    \end{align}\)
                    nilai y berubah berarti titik dicerminkan terhadap sumbu-X atau garis y = 0
                    <br>

                   <b class="text-end"> JAWABAN : D</b>
                  </div>
                </div>
                <hr />
<!-- =====SOAL NO 10======================================================================= -->
                <li>Bayangan titik \(K(2,4) \) dicerminkan terhadap garis \(y=-x\) adalah. . . </li>
                <input type="radio" name="soal10" value="10" />
                \((-4,-2)\)
                <br />
                <input type="radio" name="soal10" value="0" />
                \((-2,4)\)
                <br />
                <input type="radio" name="soal10" value="0" />
                \((2,4)\)
                <br />
                <input type="radio" name="soal10" value="0" />
                \((4,2)\)
                <br />
                <input type="radio" name="soal10" value="0" />
                \((-4,2)\)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal10" aria-expanded="false" aria-controls="collapsesoal10" >
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal10">
                  <div class="card card-body overflow-auto">
                    \(\begin{align}
                    \begin{pmatrix}x'\\y'\end{pmatrix} &= \begin{pmatrix}0&-1\\-1&0 \end{pmatrix}\begin{pmatrix}2\\4 \end{pmatrix} \\
                    &= \begin{pmatrix}-4\\-2 \end{pmatrix}
                    \end{align}\)
                    <br>
                   <b class="text-end"> JAWABAN : A</b>
                  </div>
                </div>
                <hr />
<!-- =====SOAL NO 11======================================================================= -->
                <li>Jika titik \(A(15,8)\) dicerminkan terhadap garis \(x=7\), maka bayangan titik \(A\) adalah titik \(A'\) dengan koordinat . . . </li>
                <input type="radio" name="soal11" value="0"/>
                \((-8,1)\)
                <br />
                <input type="radio" name="soal11" value="10"/>
                \((-1,8)\)
                <br />
                <input type="radio" name="soal11" value="0" />
                \((1,-8)\)
                <br />
                <input type="radio" name="soal11" value="0" />
                \((-1,-8)\)
                <br />
                <input type="radio" name="soal11" value="0" />
                \((1,8)\)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal11" aria-expanded="false" aria-controls="collapsesoal11" >
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal11">
                  <div class="card card-body overflow-auto">
                    \(\begin{align}
                    \begin{pmatrix}x'\\y' \end{pmatrix} &= \begin{pmatrix}-1&0\\0&1 \end{pmatrix}\begin{pmatrix}15\\8 \end{pmatrix}+\begin{pmatrix} 2(7)\\0\end{pmatrix} \\
                    &= \begin{pmatrix}-15\\8 \end{pmatrix}+\begin{pmatrix}14\\0 \end{pmatrix} \\
                    &= \begin{pmatrix}-1\\8 \end{pmatrix}
                    \end{align}\)
                    <br>
                   <b class="text-end"> JAWABAN : B</b>
                  </div>
                </div>
                <hr />
<!-- =====SOAL NO 12======================================================================= -->
                <li>Titik \(A(a,b)\) dicerminkan terhadap garis \(x=2\) menghasilkan bayangan titik \(A'(0,2)\), maka nilai \((a,b)\) adalah . . .
                </li>
                <input type="radio" name="soal12" value="0"  />
                \((-2,4)\)
                <br />
                <input type="radio" name="soal12" value="0" />
                \((2,4)\)
                <br />
                <input type="radio" name="soal12" value="0" />
                \((2,-4)\)
                <br />
                <input type="radio" name="soal12" value="10"/>
                \((4,2)\)
                <br />
                <input type="radio" name="soal12" value="0" />
                \((4,-2)\)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal12" aria-expanded="false" aria-controls="collapsesoal12" >
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal12">
                  <div class="card card-body overflow-auto">
                    Jika bayangan dicerminkan oleh pencerminan yang sama dengan titik asal maka akan menghasilkan titik asal.
                    \(\begin{align}
                    \begin{pmatrix}x'\\y' \end{pmatrix}&= \begin{pmatrix}-1&0 \\ 0&1 \end{pmatrix}\begin{pmatrix}0\\2 \end{pmatrix}+\begin{pmatrix}2(2)\\0 \end{pmatrix} \\
                    &= \begin{pmatrix}0\\2 \end{pmatrix}+\begin{pmatrix}4\\0 \end{pmatrix} \\
                    &= \begin{pmatrix}4\\2 \end{pmatrix}
                    \end{align}\)
                    <br>

                   <b class="text-end"> JAWABAN : D</b>
                  </div>
                </div>
                <hr />
<!-- =====SOAL NO 13======================================================================= -->
                <li>Bayangan titik \((4,-5)\) setelah dicerminkan terhadap garis \(y=-1\) adalah . . .
                </li>
                <input type="radio" name="soal13" value="0"  />
                \((-6,-5)\)
                <br />
                <input type="radio" name="soal13" value="0" />
                \((-4,-5)\)
                <br />
                <input type="radio" name="soal13" value="0" />
                \((4,4)\)
                <br />
                <input type="radio" name="soal13" value="10"/>
                \((4,3)\)
                <br />
                <input type="radio" name="soal13" value="0" />
                \((4,-4)\)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal13" aria-expanded="false" aria-controls="collapsesoal13" >
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal13">
                  <div class="card card-body overflow-auto">
                    \(\begin{align}
                    \begin{pmatrix}x'\\y' \end{pmatrix}&= \begin{pmatrix}1&0 \\ 0&-1 \end{pmatrix}\begin{pmatrix}4\\-5 \end{pmatrix}+\begin{pmatrix}0\\2(-1) \end{pmatrix} \\
                    &= \begin{pmatrix}4\\5 \end{pmatrix}+\begin{pmatrix}0\\-2 \end{pmatrix} \\
                    &= \begin{pmatrix}4\\3 \end{pmatrix}
                    \end{align}\)
                    <br>

                   <b class="text-end"> JAWABAN : D</b>
                  </div>
                </div>
                <hr />
<!-- =====SOAL NO 14======================================================================= -->
                <li>Titik \(B(-4,8)\) dicerminkan terhadap pusat koordinat menghasilkan bayangan \((x',y')\). Nilai \(x'+y'= . . .\)</li>
                <input type="radio" name="soal14" value="0" />
                \(-12\)
                <br />
                <input type="radio" name="soal14" value="0" />
                \(-8\)
                <br />
                <input type="radio" name="soal14" value="10" />
                \(-4\)
                <br />
                <input type="radio" name="soal14" value="0" />
                \(4\)
                <br />
                <input type="radio" name="soal14" value="0" />
                \(8\)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal14" aria-expanded="false" aria-controls="collapsesoal14" >
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal14">
                  <div class="card card-body overflow-auto">
                    \(\begin{align}
                    \begin{pmatrix}x'\\y' \end{pmatrix}&= \begin{pmatrix}-1&0 \\ 0&-1 \end{pmatrix}\begin{pmatrix}-4\\8 \end{pmatrix} \\
                    &= \begin{pmatrix}4\\-8 \end{pmatrix} \\
                    \text{Sehingga}\\
                    x'+y' &= ...\\
                    4+(-8) &= -4
                    \end{align}\)
                    <br>

                   <b class="text-end"> JAWABAN : C</b>
                  </div>
                </div>
                <hr />
<!-- =====SOAL NO 15======================================================================= -->
                <li>Titik \(P'(4,-6)\) adalah bayangan dari \(P(6,-4)\) yang dicerminkan terhadap . . .</li>
                <input type="radio" name="soal15" value="0" />
                \(\text{titik } O\)
                <br />
                <input type="radio" name="soal15" value="0" />
                \(\text{sumbu}-Y\)
                <br />
                <input type="radio" name="soal15" value="0" />
                \(\text{sumbu}-X\)
                <br />
                <input type="radio" name="soal15" value="10" />
                \(\text{garis } y=-x\)
                <br />
                <input type="radio" name="soal15" value="0"/>
                \(\text{garis } y=x\)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal15" aria-expanded="false" aria-controls="collapsesoal15" >
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal15">
                  <div class="card card-body overflow-auto">
                    \(\begin{align}
                    &\begin{pmatrix}4\\-6 \end{pmatrix} = \begin{pmatrix}a&b \\ c&d \end{pmatrix}\begin{pmatrix}6\\-4 \end{pmatrix} \\
                    &\text{Sehingga matriks yang cocok adalah } \begin{pmatrix}0&-1 \\ -1&0 \end{pmatrix} \\
                    &\text{Matriks tersebut merupakan matriks untuk pencerminan terhadap } y=-x\\
                    \end{align}\)

                    <br>

                   <b class="text-end"> JAWABAN : D</b>
                  </div>
                </div>
                <hr />
<!-- =====SOAL NO 16======================================================================= -->
                <li>Bayangan titik \(A(6,-7)\) dicerminkan terhadap garis \(y=-x\) adalah . . .</li>
                <input type="radio" name="soal16" value="0"  />
                \((-6,7)\)
                <br />
                <input type="radio" name="soal16" value="10"/>
                \((7,-6)\)
                <br />
                <input type="radio" name="soal16" value="0" />
                \((-7,6)\)
                <br />
                <input type="radio" name="soal16" value="0" />
                \((7,6)\)
                <br />
                <input type="radio" name="soal16" value="0" />
                \((7,-6)\)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal16" aria-expanded="false" aria-controls="collapsesoal16" >
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal16">
                  <div class="card card-body overflow-auto">
                    \(\begin{align}
                    \begin{pmatrix}x'\\y'\end{pmatrix} &= \begin{pmatrix}0&-1\\-1&0 \end{pmatrix}\begin{pmatrix}6\\-7 \end{pmatrix} \\
                    &= \begin{pmatrix}7\\-6 \end{pmatrix}
                    \end{align}\)
                    <br>

                   <b class="text-end"> JAWABAN : B</b>
                  </div>
                </div>
                <hr />
<!-- =====SOAL NO 17======================================================================= -->
                <li>Persamaan peta dari garis \(3x-5y+15=0\) oleh pencerminan terhadap sumbu-X adalah . . .</li>
                <input type="radio" name="soal17" value="10"/>
                \(3x+5y+15=0\)
                <br />
                <input type="radio" name="soal17" value="0" />
                \(3x-5y+15=0\)
                <br />
                <input type="radio" name="soal17" value="0" />
                \(3x+5y-15=0\)
                <br />
                <input type="radio" name="soal17" value="0" />
                \(5x+3y+15=0\)
                <br />
                <input type="radio" name="soal17" value="0" />
                \(5x-3y+15=0\)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal17" aria-expanded="false" aria-controls="collapsesoal17" >
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal17">
                  <div class="card card-body overflow-auto">
                    \(\begin{align}
                    \begin{pmatrix}x'\\y' \end{pmatrix} &= \begin{pmatrix}1&0 \\ 0&-1 \end{pmatrix}\begin{pmatrix}x\\y \end{pmatrix} \\
                    \begin{pmatrix}x'\\y' \end{pmatrix} &= \begin{pmatrix}x\\-y \end{pmatrix} \\
                    \text{Sehingga}\\
                    x&= x' \\
                    y &= -y'
                    \end{align}\)
                    Substitusikan nilai x dan y
                    \(\begin{align}
                    3x-5y+15 &=0 \\
                    3(x')-5(-y')+15&=0 \\
                    3x'+5y'+15&=0
                    \end{align}\)
                    <br>
                    Jadi, bayangannya adalah \(3x+5y+15=0\)
                   <b class="text-end"> JAWABAN : A</b>
                  </div>
                </div>
                <hr />
<!-- =====SOAL NO 18======================================================================= -->
                <li>Bayangan garis \(g\) di cerminkan terhadap garis \(y=x\) adalah \(7x-y=-4\). Garis \(g\) yang dimaksud adalah . . .</li>
                <input type="radio" name="soal18" value="0"  />
                \(x+7y+4=0\)
                <br />
                <input type="radio" name="soal18" value="0" />
                \(x-7y+4=0\)
                <br />
                <input type="radio" name="soal18" value="0" />
                \(-x+7y-4=0\)
                <br />
                <input type="radio" name="soal18" value="0" />
                \(-x-7y+4=0\)
                <br />
                <input type="radio" name="soal18" value="10"/>
                \(-x+7y+4=0\)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal18" aria-expanded="false" aria-controls="collapsesoal18" >
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal18">
                  <div class="card card-body overflow-auto">
                    Bayangan jika dicerminkan kembali akan menghasasilkan aslinya
                    \(\begin{align}
                    \begin{pmatrix}x'\\y' \end{pmatrix} &= \begin{pmatrix}0&1 \\ 1&0 \end{pmatrix}\begin{pmatrix}x\\y \end{pmatrix} \\
                    \begin{pmatrix}x'\\y' \end{pmatrix} &= \begin{pmatrix}y\\x \end{pmatrix} \\
                    \text{Sehingga}\\
                    y&=x' \\
                    x &= y'
                    \end{align}\)
                    Substitusi x dan y ke persamaan awal
                    <br>
                    \(\begin{align}
                    7x-y&=-4 \\
                    7y'-x'&=-4 \\
                    7y'-x'+4&=0 \\
                    -x'+7y'+4 &= 0 \\
                    x'-7y'-4&=0
                    \end{align}\)
                    Jadi, persamaan bayangannya adalah \(x-7y-4=0\)
                   <b class="text-end"> JAWABAN : E</b>
                  </div>
                </div>
                <hr />
<!-- =====SOAL NO 19======================================================================= -->
                <li>Bayangan titik \(Z(-2,5)\) apabila dicerminakan terhadap garis \(y=x\) dan dilanjutkan dengan pencerminan oleh garis \(x=2\) adalah . . .
                </li>
                <input type="radio" name="soal19" value="0"  />
                \(Z''(5,2)\)
                <br />
                <input type="radio" name="soal19" value="0" />
                \(Z''(2,5)\)
                <br />
                <input type="radio" name="soal19" value="0" />
                \(Z''(1,-2)\)
                <br />
                <input type="radio" name="soal19" value="0" />
                \(Z''(-1,2)\)
                <br />
                <input type="radio" name="soal19" value="10"/>
                \(Z''(-1,-2)\)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal19" aria-expanded="false" aria-controls="collapsesoal19" >
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal19">
                  <div class="card card-body overflow-auto">
                    \(\begin{align}
                    \begin{pmatrix}x''\\y'' \end{pmatrix} &= \begin{pmatrix}-1&0 \\ 0&1 \end{pmatrix}\begin{pmatrix}0&1\\1&0 \end{pmatrix}\begin{pmatrix}-2\\5 \end{pmatrix}+\begin{pmatrix}2(2)\\0 \end{pmatrix} \\
                    &= \begin{pmatrix}0&-1\\1&0 \end{pmatrix}\begin{pmatrix}-2\\5 \end{pmatrix}+\begin{pmatrix}4\\0 \end{pmatrix} \\
                    &= \begin{pmatrix}-5\\-2 \end{pmatrix}+\begin{pmatrix}4\\0 \end{pmatrix} \\
                    &= \begin{pmatrix}-1\\-2 \end{pmatrix}

                    \end{align}\)
                    <br>

                   <b class="text-end"> JAWABAN : E</b>
                  </div>
                </div>
                <hr />
<!-- =====SOAL NO 20======================================================================= -->
                <li>Bayangan titik \((2,-3)\) apabila dicerminkan terhadap titik \((4,-1)\) dan dilanjutkan terhadap pencerminan oleh garis \(y=-x\) adalah . . .
                </li>
                <input type="radio" name="soal20" value="0"  />
                \((6,1)\)
                <br />
                <input type="radio" name="soal20" value="0" />
                \((1,6)\)
                <br />
                <input type="radio" name="soal20" value="0" />
                \((6,-1)\)
                <br />
                <input type="radio" name="soal20" value="0" />
                \((-1,6)\)
                <br />
                <input type="radio" name="soal20" value="10"/>
                \((-1,-6)\)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal20" aria-expanded="false" aria-controls="collapsesoal20" >
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal20">
                  <div class="card card-body overflow-auto">
                    \(\begin{align}
                    \begin{pmatrix}x''\\y'' \end{pmatrix} &= \begin{pmatrix}0&-1\\-1&0 \end{pmatrix}\begin{Bmatrix}\begin{pmatrix}-1&0\\0&-1 \end{pmatrix}\begin{pmatrix}2\\-3 \end{pmatrix}+\begin{pmatrix}2(4)\\2(-1) \end{pmatrix} \end{Bmatrix} \\
                    &= \begin{pmatrix}0&-1\\-1&0 \end{pmatrix}\begin{Bmatrix}\begin{pmatrix}-2\\3 \end{pmatrix}+\begin{pmatrix}8\\-2 \end{pmatrix} \end{Bmatrix} \\
                    &= \begin{pmatrix}0&-1\\-1&0 \end{pmatrix}\begin{pmatrix}6\\1 \end{pmatrix} \\
                    &= \begin{pmatrix}-1\\-6 \end{pmatrix}
                    \end{align}\)
                    <br>

                   <b class="text-end"> JAWABAN : E</b>
                  </div>
                </div>
                <hr />
<!-- =====SOAL NO 21======================================================================= -->
                <li>Bayangan garis \(x=-y+7\) dicerminkan terhadap titik \((-1,2)\) dan dilanjutkan terhadap garis \(y=-3\) adalah . . .
                </li>
                <input type="radio" name="soal21" value="10"/>
                \(x-y=1\)
                <br />
                <input type="radio" name="soal21" value="0" />
                \(x+y=-1\)
                <br />
                <input type="radio" name="soal21" value="0" />
                \(x+y=5\)
                <br />
                <input type="radio" name="soal21" value="0" />
                \(x-y=-5\)
                <br />
                <input type="radio" name="soal21" value="0" />
                \(x+y=1\)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal21" aria-expanded="false" aria-controls="collapsesoal21" >
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal21">
                  <div class="card card-body overflow-auto">
                    \(\begin{align}
                    \begin{pmatrix}x''\\y'' \end{pmatrix} &= \begin{pmatrix}1&0\\0&-1 \end{pmatrix}\begin{Bmatrix}\begin{pmatrix}-1&0\\0&-1 \end{pmatrix}\begin{pmatrix}x\\y \end{pmatrix}+\begin{pmatrix}2(-1)\\2(2) \end{pmatrix} \end{Bmatrix}+\begin{pmatrix}0\\2(-3) \end{pmatrix} \\
                    &= \begin{pmatrix}1&0 \\ 0&-1 \end{pmatrix}\begin{pmatrix}-x+(-2) \\ -y+4 \end{pmatrix}+\begin{pmatrix}0\\6 \end{pmatrix} \\
                    &= \begin{pmatrix}-x-2 \\ y-4 \end{pmatrix}+\begin{pmatrix}0&-6 \end{pmatrix} \\
                    \begin{pmatrix}x''\\y'' \end{pmatrix}&=\begin{pmatrix}-x-2 \\ y-10 \end{pmatrix} \\
                    \text{Sehingga} \\
                    x''=-x-2 &\to x=-x''-2 \\
                    y''=y-10 &\to y=y''+10
                    \end{align}\)
                    Substitusi nilai x dan y ke kurva soal
                    <br>
                    \(\begin{align}
                    x&=-y+7 \\
                    -x''-2&=-(y''+10)+7 \\
                    -x''+y'' &= -10+7+2 \\
                    -x''+y'' &= -1 \\
                    x''-y'' &= 1
                    \end{align}\)
                    Jadi bayangan kurva tersebut adalah \(x-y=1\)
                   <b class="text-end"> JAWABAN : A</b>
                  </div>
                </div>
                <hr />
<!-- =====SOAL NO 22======================================================================= -->
                <li>Bayangan parabola \(y=x^2-3x+7\) jika dicerminkan terhadap garis \(y=x\) dan dilanjutkan pencerminan terhadap garis \(x=2\) adalah . . .
                </li>
                <input type="radio" name="soal22" value="0"  />
                \(x=y^2+3y-3\)
                <br />
                <input type="radio" name="soal22" value="0" />
                \(x=y^2-3y+3\)
                <br />
                <input type="radio" name="soal22" value="10"/>
                \(x=-y^2+3y-3\)
                <br />
                <input type="radio" name="soal22" value="0" />
                \(x=-y^2-3y-3\)
                <br />
                <input type="radio" name="soal22" value="0" />
                \(x=-y^2+3y+3\)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal22" aria-expanded="false" aria-controls="collapsesoal22" >
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal22">
                  <div class="card card-body overflow-auto">
                    \(\begin{align}
                    \begin{pmatrix}x'\\y' \end{pmatrix}&=\begin{pmatrix}-1&0\\0&1 \end{pmatrix}\begin{pmatrix}0&1\\1&0 \end{pmatrix}\begin{pmatrix}x\\y \end{pmatrix}+\begin{pmatrix}2(2)\\0 \end{pmatrix} \\
                    &= \begin{pmatrix}0&-1\\1&0 \end{pmatrix}\begin{pmatrix}x\\y \end{pmatrix}+\begin{pmatrix}4\\0 \end{pmatrix} \\
                    \begin{pmatrix}x'\\y' \end{pmatrix} &= \begin{pmatrix}-y+4 \\ x \end{pmatrix} \\
                    \text{Sehingga}\\
                    x'=-y+4 &\to y=-x'+4 \\
                    y'=x &\to x=y'
                    \end{align}\)
                    Substitusikan nilai x dan y ke kurva
                    <br>
                    \(\begin{align}
                    y&=x^2-3x+7 \\
                    -x'+4 &= (y')^2 -3(y') + 7 \\
                    -x'&=y'^2-3y'+7-4 \\
                    x &= -y'^2+3y'-3
                    \end{align}\)
                    Jadi, bayangan parabola tersebut adalah \(x=-y^2+3y-3\)
                   <b class="text-end"> JAWABAN : C</b>
                  </div>
                </div>
                <hr />
<!-- =====SOAL NO 23======================================================================= -->
                <li>Koordinat bayangan titik \((0,2)\) oleh refleksi garis \(y=x\) adalah . . .</li>
                <input type="radio" name="soal23" value="0"  />
                \((-2,0)\)
                <br />
                <input type="radio" name="soal23" value="0" />
                \((0,-2)\)
                <br />
                <input type="radio" name="soal23" value="0" />
                \((1,-2)\)
                <br />
                <input type="radio" name="soal23" value="10"/>
                \((2,0)\)
                <br />
                <input type="radio" name="soal23" value="0" />
                \((2,1)\)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal23" aria-expanded="false" aria-controls="collapsesoal23" >
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal23">
                  <div class="card card-body overflow-auto">
                    \(\begin{align}
                    \begin{pmatrix}x'\\y' \end{pmatrix} &= \begin{pmatrix}0&1\\1&0 \end{pmatrix}\begin{pmatrix}0\\2 \end{pmatrix} \\
                    &= \begin{pmatrix}2\\0 \end{pmatrix}
                    \end{align}\)
                    <br>

                   <b class="text-end"> JAWABAN : D</b>
                  </div>
                </div>
                <hr />
<!-- =====SOAL NO 24======================================================================= -->
                <li>Transformasi \(T\) merupakan pencerminan terhadap garis \(y=\frac{1}{3} x\) dilanjutkan oleh pencerminan terhadap garis \(y=-3x\). Matriks penyajian \(T\) adalah . . .</li>
                <input type="radio" name="soal24" value="0" />
                \(\begin{pmatrix}-1&0\\0&1 \end{pmatrix}\)
                <br />
                <input type="radio" name="soal24" value="10"/>
                \(\begin{pmatrix}-1&0\\0&-1 \end{pmatrix}\)
                <br />
                <input type="radio" name="soal24" value="0" />
                \(\begin{pmatrix}0&1\\-1&0 \end{pmatrix}\)
                <br />
                <input type="radio" name="soal24" value="0" />
                \(\begin{pmatrix}1&0\\0&-1 \end{pmatrix}\)
                <br />
                <input type="radio" name="soal24" value="0" />
                \(\begin{pmatrix}0&-1\\-1&0 \end{pmatrix}\)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal24" aria-expanded="false" aria-controls="collapsesoal24" >
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal24">
                  <div class="card card-body overflow-auto">
                    \(\text{Matriks refleksi untuk garis } y=\frac{1}{3}x = \frac{1}{3}\begin{pmatrix}0&1\\1&0 \end{pmatrix}\)
                    \(\text{Matriks refleksi untuk garis } y=-3x = -3\begin{pmatrix}0&1\\1&0 \end{pmatrix}\)
                    Sehingga penyajian T adalah
                    \(\begin{align}
                    \begin{pmatrix}x'\\y' \end{pmatrix} &= \begin{bmatrix}\frac{1}{3}\begin{pmatrix}0&1\\1&0 \end{pmatrix}\end{bmatrix}\begin{bmatrix}-3\begin{pmatrix}0&1\\1&0 \end{pmatrix}\end{bmatrix}\begin{pmatrix}x\\y \end{pmatrix} \\
                    &= \frac{1}{3}(-3)\begin{pmatrix}0&1\\1&0 \end{pmatrix}\begin{pmatrix}0&1\\1&0 \end{pmatrix}\begin{pmatrix}x\\y \end{pmatrix} \\
                    &= -1 \begin{pmatrix}1&0\\0&1 \end{pmatrix}\begin{pmatrix}x\\y \end{pmatrix} \\
                    &= \begin{pmatrix}-1&0\\0&-1 \end{pmatrix}\begin{pmatrix}x\\y \end{pmatrix}
                    \end{align}\)
                    <br>
                    Jadi matriks refleksi
                    \(T=\begin{pmatrix}-1&0\\0&-1 \end{pmatrix}\)
                   <b class="text-end"> JAWABAN : B</b>
                  </div>
                </div>
                <hr />
<!-- =====SOAL NO 25======================================================================= -->
                <li>Sebuah persamaan lingkaran \(x^2+y^2-4x+6y-8=0\) dicerminkan terhadap \(y=x\), maka bayangannya adalah . . .</li>
                <input type="radio" name="soal25" value="0" />
                \(x^2+y^2+6x-4y-16=0\)
                <br />
                <input type="radio" name="soal25" value="0" />
                \(x^2+y^2+6x-4y+8=0\)
                <br />
                <input type="radio" name="soal25" value="10"/>
                \(x^2+y^2+6x-4y-8=0\)
                <br />
                <input type="radio" name="soal25" value="0" />
                \(x^2+y^2+6x-4y-16=0\)
                <br />
                <input type="radio" name="soal25" value="0" />
                \(x^2+y^2-6x+4y+16=0\)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal25" aria-expanded="false" aria-controls="collapsesoal25" >
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal25">
                  <div class="card card-body overflow-auto">
                    \(\begin{align}
                    \begin{pmatrix}x'\\y' \end{pmatrix} &= \begin{pmatrix}0&1\\1&0 \end{pmatrix} \begin{pmatrix}x\\y \end{pmatrix} \\
                    \begin{pmatrix}x'\\y' \end{pmatrix} &= \begin{pmatrix}y\\x \end{pmatrix} \\
                    \text{Sehingga} \\
                    y&= x' \\
                    x &= y'
                    \end{align}\)
                    Substitusikan nilai x dan y ke kurva
                    <br>
                    \(\begin{align}
                    x^2+y^2-4x+6y-8 &=0\\
                    y'^2+x'^2-4y'+6x'-8 &=0\\
                    x'^2+y'^2+6x'-4y'-8&=0
                    \end{align}\)
                    Jadi, bayangan dari kurva adalah \(x^2+y^2+6x-4y-8=0\)
                   <b class="text-end"> JAWABAN : C</b>
                  </div>
                </div>
                <hr />

            </ol>

{{-- COPY DARI SINI SETIAP SOAL --}}
<input type="hidden" id="materi" name="materi" value="refleksi-01">
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
    <a href="/createrefleksi01" id="kirimsaja" class="btn btn-warning btn-bukti d-none" >SIMPAN JAWABAN</a>
</div>
</form>
{{-- COPY SAMPAI SINI --}}

<div id="disqus_thread"></div>

</div>
</div>
</div>
</section>
@endsection

