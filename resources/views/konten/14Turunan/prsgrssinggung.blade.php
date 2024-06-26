@extends('konten.14Turunan.14.template')
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
            Persamaan Garis Singgung
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
                <li>Persamaan garis yang menyinggung kurva \(y=x^2 +3x +1 \) di titik \((1,5)\) adalah ... </li>
                <input type="radio" name="soal1" value="0"/>
                \(\displaystyle y=5x+1 \)
                <br />
                <input type="radio" name="soal1" value="0" />
                \(\displaystyle y=5x -1 \)
                <br />
                <input type="radio" name="soal1" value="10"  />
                \(\displaystyle y=5x \)
                <br />
                <input type="radio" name="soal1" value="0" />
                \(\displaystyle y=5x +2 \)
                <br />
                <input type="radio" name="soal1" value="0"/>
                \(\displaystyle  y=5x -2\)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal1" aria-expanded="false" aria-controls="collapsesoal1"  >
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal1">
                <div class="card card-body overflow-auto">
                <p>\(\displaystyle \begin{align}
                    y &=x^2 +3x +1 \\
                    y' &= 2x+3 \\
                    &\text{Substitusi nilai } x=1 \\
                    y'&= 2(1)+3 \\
                    y' &= 5
                    \end{align}\)</p>
                <p>Gradien garis singgung adalah \(y'=m=5\) melalui titik \((1,5)\)</p>
                <p>\(\displaystyle \begin{align}
                    y-y_1 &= m(x-x_1) \\
                    y-5 &= 5(x-1)\\
                    y-5 &= 5x-5 \\
                    y &= 5x-5+5 \\
                    y &= 5x \\
                    \end{align}\)</p>
                <p>Jadi, persamaan garis singgungnya adalah \(y=5x\) </p>
                <b class="text-end text-danger fw-bold"> <h3>JAWABAN : C</h3></b>
                </div>
                </div>
                <hr />
<!-- SOAL end -->
<!-- SOAL 02 -->
            <li>Persamaan garis yang menyinggung kurva \(y=2x^2 -5x +3 \) di titik \((2,1)\) adalah ...</li>
                    <input type="radio" name="soal2" value="0"/>
                    \(\displaystyle y= x+5 \)
                <br />
                    <input type="radio" name="soal2" value="0" />
                    \(\displaystyle y= x-5 \)
                <br />
                    <input type="radio" name="soal2" value="0"  />
                    \(\displaystyle y=3x \)
                <br />
                    <input type="radio" name="soal2" value="10" />
                    \(\displaystyle y=3x-5 \)
                <br />
                    <input type="radio" name="soal2" value="0"/>
                    \(\displaystyle y=3x+5 \)
                <br>

                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal2" aria-expanded="false" aria-controls="collapsesoal2"  >
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal2">
                <div class="card card-body overflow-auto">
                <p>\(\displaystyle \begin{align}
                    y &=2x^2 -5x +3 \\
                    y' &= 4x-5 \\
                    &\text{Substitusi nilai } x=2 \\
                    y'&= 4(2)-5 \\
                    y'&= 8-5 \\
                    y' &= 3
                    \end{align}\)</p>
                <p>garis singgung melalui titik \((2,1)\) dengan gradien \(y'=m=3\) </p>
                <p>\(\displaystyle \begin{align}
                    y-y_1 &= m(x-x_1) \\
                    y-1 &= 3(x-2)\\
                    y-1 &= 3x-6 \\
                    y &= 3x-6+1 \\
                    y &= 3x-5 \\
                    \end{align}\)</p>
                <p>Jadi, persamaan garis singgungnya adalah \(y=3x-5\) </p>
                    <b class="text-end text-danger fw-bold"> <h3>JAWABAN : D</h3></b>
                </div>
                </div>
                <hr />
<!-- SOAL end -->
<!-- SOAL 03 -->
            <li>Persamaan garis yang menyinggung kurva \(y=x^3 +x +2 \) di titik \((-1,0)\) adalah ... </li>
                    <input type="radio" name="soal3" value="0"/>
                    \(\displaystyle y=4x+1\)
                <br />
                    <input type="radio" name="soal3" value="10" />
                    \(\displaystyle y=4x+4 \)
                <br />
                    <input type="radio" name="soal3" value="0"  />
                    \(\displaystyle y=x+4\)
                <br />
                    <input type="radio" name="soal3" value="0" />
                    \(\displaystyle y=x+1\)
                <br />
                    <input type="radio" name="soal3" value="0"/>
                    \(\displaystyle y=x-4\)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal3" aria-expanded="false" aria-controls="collapsesoal3"  >
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal3">
                <div class="card card-body overflow-auto">
                    <p>\(\displaystyle \begin{align}
                    y &=x^3 +x +2 \\
                    y' &= 3x^2+1 \\
                    &\text{Substitusi nilai } x=-1 \\
                    y'&= 3(-1)^2 +1 \\
                    y'&= 3+1 \\
                    y' &= 4
                    \end{align}\)</p>
                <p>garis singgung melalui titik \((-1,0)\) dengan gradien \(y'=m=4\) </p>
                <p>\(\displaystyle \begin{align}
                    y-y_1 &= m(x-x_1) \\
                    y-0 &= 4(x-(-1))\\
                    y &= 4(x+1)\\
                    y &= 4x+4 \\
                    \end{align}\)</p>
                <p>Jadi, persamaan garis singgungnya adalah \(y=4x+4\) </p>
                    <b class="text-end text-danger fw-bold"> <h3>JAWABAN : B</h3></b>
                </div>
                </div>
                <hr />
<!-- SOAL end -->
<!-- SOAL 04 -->
            <li>Persamaan garis yang menyinggung kurva \(y=x^4 +px^3 \) di titik \((-2,0)\) adalah ...</li>
                    <input type="radio" name="soal4" value="0"/>
                    \(\displaystyle y=-8x+16 \)
                <br />
                    <input type="radio" name="soal4" value="0" />
                    \(\displaystyle y=8x-16 \)
                <br />
                    <input type="radio" name="soal4" value="10"  />
                    \(\displaystyle y=-8x-16 \)
                <br />
                    <input type="radio" name="soal4" value="0" />
                    \(\displaystyle y=-8x-8 \)
                <br />
                    <input type="radio" name="soal4" value="0"/>
                    \(\displaystyle y=8x+8 \)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal4" aria-expanded="false" aria-controls="collapsesoal4" >
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal4">
                <div class="card card-body overflow-auto">
                <p>Menentukan nilai \(p\) dengan cara substitusi titik ke kurva</p>
                <p>\(\displaystyle \begin{align}
                    y &=x^4 +px^3 \\
                    0 &=(-2)^4 +p(-2)^3 \\
                    0 &=16 +p(-8) \\
                    8p &= 16 \\
                    p &= 2
                    \end{align}\)</p>
                <p>Persamaan kurva menjadi \(y=x^4 +2x^3\)</p>
                <p>\(\displaystyle \begin{align}
                    y &=x^4 +2x^3\\
                    y' &= 4x^3 +6x^2 \\
                    &= 4(-2)^3 +6(-2)^2 \\
                    &= 4(-8)+6(4)\\
                    &= -32 +24 \\
                    &= -8
                    \end{align}\)</p>
                <p>Garis singgung menyingung kurva dititik \((-2,0)\) dengan gradien \(y'=m=-8\) </p>
                <p>\(\displaystyle \begin{align}
                    y-y_1 &= m(x-x_1) \\
                    y-0 &= -8(x-(-2))\\
                    y &= -8(x+2)\\
                    y &= -8x+-16 \\
                    \end{align}\)</p>
                    <b class="text-end text-danger fw-bold"> <h3>JAWABAN : C</h3></b>
                </div>
                </div>
                <hr />
<!-- SOAL end -->
<!-- SOAL 05 -->
            <li>Persamaan garis yang menyinggung kurva \(y=x^2 -3x +2 \) di titik yang berabsis \(2\) adalah ... </li>
                    <input type="radio" name="soal5" value="0"/>
                    \(\displaystyle y=x+4 \)
                <br />
                    <input type="radio" name="soal5" value="0" />
                    \(\displaystyle y=2x-4 \)
                <br />
                    <input type="radio" name="soal5" value="0"  />
                    \(\displaystyle y=x-4 \)
                <br />
                    <input type="radio" name="soal5" value="0" />
                    \(\displaystyle y=2x-2 \)
                <br />
                    <input type="radio" name="soal5" value="10"/>
                    \(\displaystyle y=x-2\)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal5" aria-expanded="false" aria-controls="collapsesoal5"  >
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal5">
                <div class="card card-body overflow-auto">
                <p>CATATAN : \(x=\text{absis}\)</p>
                <p>Menentukan nilai \(y\) dengan cara substitusi absis \(2\) ke kurva</p>
                <p>\(\displaystyle \begin{align}
                    y &=x^2 -3x +2 \\
                    &= (2)^2 -3(2)+2 \\
                    &= 4-6+2 \\
                    &= 0
                    \end{align}\)</p>
                <p>Selanjutnya menentukan gradien garis singgung  </p>
                <p>\(\displaystyle \begin{align}
                    y &=x^2 -3x +2\\
                    y' &= 2x-3 \\
                    y' &= 2(2)-3\\
                    y' &= 4-3 \\
                    y' &= 1
                    \end{align}\)</p>
                <p>Maka garis singgung melalui titik \((2,0) \) dengan gradien \(m=1\) </p>
                <p>\(\displaystyle \begin{align}
                    y-y_1 &= m(x-x_1)\\
                    y-0 &= 1(x-2) \\
                    y &= x-2
                    \end{align}\)</p>
                <p>Jadi, persamaan garis singgungnya adalah \(y=x-2\) </p>
                <b class="text-end text-danger fw-bold"> <h3>JAWABAN : E</h3></b>
                </div>
                </div>
                <hr />
<!-- SOAL end -->
<!-- SOAL 06 -->
            <li>Persamaan garis yang menyinggung kurva \(y=x^2 -5x \) di titik yang berabsis \(5\) adalah ...</li>
                    <input type="radio" name="soal6" value="0"/>
                    \(\displaystyle y=5x-5 \)
                <br />
                    <input type="radio" name="soal6" value="0" />
                    \(\displaystyle y=x-25 \)
                <br />
                    <input type="radio" name="soal6" value="0"  />
                    \(\displaystyle y=5x+25\)
                <br />
                    <input type="radio" name="soal6" value="10" />
                    \(\displaystyle y=5x-25 \)
                <br />
                    <input type="radio" name="soal6" value="0"/>
                    \(\displaystyle y=x+5 \)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal6" aria-expanded="false" aria-controls="collapsesoal6"  >
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal6">
                <div class="card card-body overflow-auto">
                <p>CATATAN : \(x=\text{absis}\)</p>
                <p>Menentukan nilai \(y\) dengan cara substitusi absis \(5\) ke kurva</p>
                <p>\(\displaystyle \begin{align}
                    y &=x^2 -5x \\
                    &= (5)^2-5(5) \\
                    &= 25-25 \\
                    &= 0
                    \end{align}\)</p>
                <p>Selanjutnya menentukan gradien garis singgung  </p>
                <p>\(\displaystyle \begin{align}
                    y &=x^2 -5x\\
                    y' &= 2x-5 \\
                    y' &= 2(5)-5\\
                    y' &= 10-5 \\
                    y' &= 5
                    \end{align}\)</p>
                <p>Maka garis singgung melalui titik \((5,0) \) dengan gradien \(m=5\) </p>
                <p>\(\displaystyle \begin{align}
                    y-y_1 &= m(x-x_1)\\
                    y-0 &= 5(x-5) \\
                    y &= 5x-25
                    \end{align}\)</p>
                <p>Jadi, persamaan garis singgungnya adalah \(y=5x-25\) </p>
                <b class="text-end text-danger fw-bold"> <h3>JAWABAN : D</h3></b>
                </div>
                </div>
                <hr />
<!-- SOAL end -->
<!-- SOAL 07 -->
            <li>Persamaan garis yang menyinggung kurva \(y=x^3 \) di titik berordinat \(8\) adalah ... </li>
            <input type="radio" name="soal7" value="0"/>
            \(\displaystyle y=12x-8 \)
            <br>
            <input type="radio" name="soal7" value="0" />
            \(\displaystyle y=12x-12 \)
            <br>
            <input type="radio" name="soal7" value="10"  />
            \(\displaystyle y=12x-16 \)
            <br>
            <input type="radio" name="soal7" value="0" />
            \(\displaystyle y=12x-18 \)
            <br />
            <input type="radio" name="soal7" value="0"/>
            \(\displaystyle y=12x-20 \)
            <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal7" aria-expanded="false" aria-controls="collapsesoal7"  >
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal7">
                <div class="card card-body overflow-auto">
                <p>CATATAN : \(y=\text{ordinat}\)</p>
                <p>Menentukan nilai \(x\) dengan cara substitusi ordinat \(8\) ke kurva</p>
                <p>\(\displaystyle \begin{align}
                    y &=x^3 \\
                    x^3 &= y \\
                    x^3 &= 8 \\
                    x &= \sqrt[3]{8} \\
                    x &= 2
                    \end{align}\)</p>
                <p>Koordinat titik singgungnya di \((2,8)\)</p>
                <p>Selanjutnya menentukan gradien garis singgung  </p>
                <p>\(\displaystyle \begin{align}
                    y &= x^3 \\
                    y' &= 3x^2 \\
                    y' &= 3(2)^2\\
                    y' &= 3(4) \\
                    y' &= 12
                    \end{align}\)</p>
                <p>Maka garis singgung melalui titik \((2,8) \) dengan gradien \(m=12\) </p>
                <p>\(\displaystyle \begin{align}
                    y-y_1 &= m(x-x_1)\\
                    y-8 &= 12(x-2) \\
                    y-8 &= 12x-24 \\
                    y &=12x-24+8 \\
                    y &=12x-24+8 \\
                    y &=12x-16 \\
                    \end{align}\)</p>
                <p>Jadi, persamaan garis singgungnya adalah \(y=12x-16\) </p>
                <b class="text-end text-danger fw-bold"> <h3>JAWABAN : C</h3></b>
                </div>
                </div>
                <hr />
<!-- SOAL end -->
<!-- SOAL 08 -->
            <li>Kurva \(y=x^2 -2x-3\) memotong sumbu\(-X\) positif dititik \(P\). persamaan garis yang menyinggung kurva tersebut dititik \(P\) adalah ...</li>
                <input type="radio" name="soal8" value="10"/>
                    \(\displaystyle y=4x-12 \)
                <br />
                    <input type="radio" name="soal8" value="0" />
                    \(\displaystyle y=4x+12 \)
                <br />
                    <input type="radio" name="soal8" value="0"  />
                    \(\displaystyle y=2x-4 \)
                <br />
                    <input type="radio" name="soal8" value="0" />
                    \(\displaystyle y=2x+8 \)
                <br />
                    <input type="radio" name="soal8" value="0"/>
                    \(\displaystyle y=4x-16 \)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal8" aria-expanded="false" aria-controls="collapsesoal8" >
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal8">
                <div class="card card-body overflow-auto">
                <p>Kurva memotong sumbu\(-X\) positif ini berarti nilai \(y=0\), sehingga</p>
                <p>\(\displaystyle \begin{align}
                    y &= x^2 -2x-3 \\
                    0 &= x^2 - 2x -3 \\
                    0 &= (x-3)(x+1) \\
                    & x=3 \cup x=-1
                    \end{align}\)</p>
                <p>\(x=-1\) tidak memenuhi karena berada di Sumbu\(-X\) <b> negatif</b></p>
                <p>yang memenuhi adalah \(x=3\), sehingga titik \(P\) adalah \((3,0)\)</p>
                <p>\(\displaystyle \begin{align}
                    y &=x^2 -2x-3 \\
                    y' &= 2x -2 \\
                    y' &= 2(3)-2 \\
                    y' &= 6-2 \\
                    y' &= 4
                    \end{align}\)</p>
                <p>gradien garis singgungnya adalah \(m=4\)</p>
                <p>\(\displaystyle \begin{align}
                    y-y_1 &= m (x-x_1) \\
                    y-0 &= 4 (x-3) \\
                    y &= 4x-12
                    \end{align}\)</p>
                <p>Jadi, persamaan garis singgungnya adalah \(y = 4x-12\)</p>
                <b class="text-end text-danger fw-bold"> <h3>JAWABAN : A</h3></b>
                </div>
                </div>
                <hr />
<!-- SOAL end -->
<!-- SOAL 09 -->
            <li>Kurva \(y=x^2 +2x+2\) memotong sumbu\(-Y\) dititik \(P\). Persamaan garis yang menyinggung kurva tersebut dititik \(P\) adalah ...</li>
                    <input type="radio" name="soal9" value="0"/>
                    \(\displaystyle y=2x-4\)
                <br />
                    <input type="radio" name="soal9" value="0" />
                    \(\displaystyle y=2 \)
                <br />
                    <input type="radio" name="soal9" value="0"  />
                    \(\displaystyle y=2x \)
                <br />
                    <input type="radio" name="soal9" value="0" />
                    \(\displaystyle y=2x-2 \)
                <br />
                    <input type="radio" name="soal9" value="10"/>
                    \(\displaystyle y=2x+2 \)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal9" aria-expanded="false" aria-controls="collapsesoal9" >
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal9">
                <div class="card card-body overflow-auto">
                <p>memotong sumbu\(-Y\) berarti nilai \(x=0\), maka</p>
                <p>\(\displaystyle \begin{align}
                    y &= x^2 +2x+2 \\
                    y &= (0)^2 +2(0)+2 \\
                    y &= 0 + 0 + 2 \\
                    y &= 2
                    \end{align}\)</p>
                <p>Sehingga titik \(P(0,2)\)</p>
                <p>\(\displaystyle \begin{align}
                    y &= x^2 +2x +2 \\
                    y' &= 2x+2 \\
                    y' &= 2(0)+2 \\
                    y' &= 2
                    \end{align}\)</p>
                <p>gradien persamaan garis singgung adalah \(m=2\) </p>
                <p>\(\displaystyle \begin{align}
                    y-y_1 &= m(x-x_1) \\
                    y-2 &= 2(x-0) \\
                    y -2 &= 2x \\
                    y &= 2x+2
                    \end{align}\)</p>
                <p>Jadi, persamaan garis singgungnya di \(P\) adalah \(y=2x+2\)</p>
                <b class="text-end text-danger fw-bold"> <h3>JAWABAN : E</h3></b>
                </div>
                </div>
                <hr />
<!-- SOAL end -->
<!-- SOAL 10 -->
            <li>Kurva \(y=x^3-3x\) memotong sumbu\(-Y\) dititik \(Q\). persamaan garis yg menyinggung kurva tersebut dititik \(Q\) adalah ... </li>
                    <input type="radio" name="soal10" value="0"/>
                    \(\displaystyle y=-3x-1\)
                <br />
                    <input type="radio" name="soal10" value="0" />
                    \(\displaystyle y=-3x+1\)
                <br />
                    <input type="radio" name="soal10" value="0"  />
                    \(\displaystyle y=3x-1\)
                <br />
                    <input type="radio" name="soal10" value="0" />
                    \(\displaystyle y= 3x+1 \)
                <br />
                    <input type="radio" name="soal10" value="10"/>
                    \(\displaystyle y=-3x \)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal10" aria-expanded="false" aria-controls="collapsesoal10">
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal10">
                <div class="card card-body overflow-auto">
                <p>memotong sumbu\(-Y\) berarti nilai \(x=0\), maka</p>
                <p>\(\displaystyle \begin{align}
                    y &= x^3-3x \\
                    y &= (0)^3 -3(0) \\
                    y &= 0
                    \end{align}\)</p>
                <p>Sehingga titik \(Q(0,0)\)</p>
                <p>\(\displaystyle \begin{align}
                    y &= x^3-3x \\
                    y' &= 3x^2-3 \\
                    y' &= 3(0)^2 -3 \\
                    y' &= -3
                    \end{align}\)</p>
                <p>gradien persamaan garis singgungnya adalah \(m=-3\) </p>
                <p>\(\displaystyle \begin{align}
                    y-y_1 &= m(x-x_1) \\
                    y-0 &= -3(x-0) \\
                    y  &= -3x \\
                    \end{align}\)</p>
                <p>Jadi, persamaan garis singgungnya di titik \(Q\) adalah \(y=-3x\)</p>
                <b class="text-end text-danger fw-bold"> <h3>JAWABAN : A</h3></b>
                </div>
                </div>
                <hr />
<!-- SOAL end -->
<!-- SOAL 11 -->
            <li>Persamaan garis yang bergradien \(5\) dan menyinggung kurva \(y=2x^2 -3x +2 \) adalah . . .  </li>
                    <input type="radio" name="soal11" value="0"/>
                    \(\displaystyle y=5x+6 \)
                <br />
                    <input type="radio" name="soal11" value="0" />
                    \(\displaystyle y=-5x-6 \)
                <br />
                    <input type="radio" name="soal11" value="10"  />
                    \(\displaystyle y=5x-6 \)
                <br />
                    <input type="radio" name="soal11" value="0" />
                    \(\displaystyle y=-5x+6 \)
                <br />
                    <input type="radio" name="soal11" value="0"/>
                    \(\displaystyle y=5x+3\)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal11" aria-expanded="false" aria-controls="collapsesoal11" >
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal11">
                    <div class="card card-body overflow-auto">
                        <p>Diketahui \(y=2x^2 -3x+2\) dan \(m=5\)</p>
                        <p>\(\displaystyle \begin{align}
                        y' &= m \\
                        y' &= 4x-3 \\
                        5 &= 4x -3 \\
                        8 &= 4x \\
                        x &= \frac{8}{4} \\
                        x &= 2 \\\\
                        \text{subtitusi }x\text{ ke kurva}\\
                        y&=2x^2 -3x+2\\
                        &= 2(2)^2-3(2)+2 \\
                        &= 8-6+2 \\
                        &= 4
                        \end{align}\)</p>
                        <p>maka titik singgung kurva di \((2,4)\) dan gradien garis singgung \(m=5\)</p>
                        <p>\(\displaystyle \begin{align}
                            y-y_1 &= m(x-x_1) \\
                            y-4 &= 5(x-2) \\
                            y &= 5x-10+4 \\
                            y&= 5x-6
                            \end{align}\)</p>
                            <p>Jadi, persamaan garis singgungnya adalah \(y=5x-6\)</p>
                    <b class="text-end text-danger fw-bold"> <h3>JAWABAN : C</h3></b>
                </div>
                </div>
                <hr />
<!-- SOAL end -->
<!-- SOAL 12 -->
            <li>Persamaan garis yang bergradien \(-3\) dan menyinggung kurva \(y=3x^2 +3x +4 \) adalah . . .</li>
                    <input type="radio" name="soal12" value="0"/>
                    \(\displaystyle y=-3x-1\)
                <br />
                    <input type="radio" name="soal12" value="10" />
                    \(\displaystyle y=-3x+1\)
                <br />
                    <input type="radio" name="soal12" value="0"  />
                    \(\displaystyle y=3x+1\)
                <br />
                    <input type="radio" name="soal12" value="0" />
                    \(\displaystyle y=3x-1\)
                <br />
                    <input type="radio" name="soal12" value="0"/>
                    \(\displaystyle y=-3x-x\)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal12" aria-expanded="false" aria-controls="collapsesoal12" >
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal12">
                <div class="card card-body overflow-auto">
                    <p>Diketahui \(y=3x^2 +3x +4\) dan \(m=-3\)</p>
                        <p>\(\displaystyle \begin{align}
                            y&=3x^2 +3x +4 \\
                        y' &= m \\
                        y' &= 6x+3 \\
                        -3 &= 6x +3 \\
                        -6 &= 6x \\
                        x &= \frac{-6}{6} \\
                        x &= -1 \\\\
                        \text{subtitusi }x\text{ ke kurva}\\
                        y&=3x^2 +3x +4\\
                        &= 3(-1)^2+3(-1)+4 \\
                        &= -3+3+4 \\
                        &= 4
                        \end{align}\)</p>
                        <p>maka titik singgung kurva di \((-1,4)\) dan gradien garis singgung \(m=-3\)</p>
                        <p>\(\displaystyle \begin{align}
                            y-y_1 &= m(x-x_1) \\
                            y-4 &= -3(x-(-1)) \\
                            y &= -3(x-(-1))+4 \\
                            y &= -3x-3+4 \\
                            y&= -3x+1
                            \end{align}\)</p>
                            <p>Jadi, persamaan garis singgungnya adalah \(y=-3x+1\)</p>
                    <b class="text-end text-danger fw-bold"> <h3>JAWABAN : B</h3></b>
                </div>
                </div>
                <hr />
<!-- SOAL end -->
<!-- SOAL 13 -->
            <li>Persamaan garis yang bergradien \(-2\) dan menyinggung kurva \(y=x^3 -3x^2 +x +2 \) adalah . . . </li>
                    <input type="radio" name="soal13" value="10"/>
                    \(\displaystyle  y=-2x+3\)
                <br />
                    <input type="radio" name="soal13" value="0" />
                    \(\displaystyle y=-2x-3 \)
                <br />
                    <input type="radio" name="soal13" value="0"  />
                    \(\displaystyle y=2x-3\)
                <br />
                    <input type="radio" name="soal13" value="0" />
                    \(\displaystyle y=2x+3\)
                <br />
                    <input type="radio" name="soal13" value="0"/>
                    \(\displaystyle y=-2x+x\)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal13" aria-expanded="false" aria-controls="collapsesoal13" >
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal13">
                <div class="card card-body overflow-auto">
                    <p>Diketahui \(y=x^3 -3x^2 +x +2\) dan \(m=-2\)</p>
                        <p>\(\displaystyle \begin{align}
                            y&=x^3 -3x^2 +x +2 \\
                        (y' &= m) \\
                        y' &= 3x^2 -6x +1 \\
                        -2 &= 3x^2 -6x +1 \\
                        3x^2 -6x +1+2 &= 0\\
                        3x^2-6x+3 &=0 \\
                        x^2-2x+1 &=0 \\
                        (x-1)^2 &=0 \\
                        (x-1) &=0 \\
                        x &= 1 \\\\
                        \text{subtitusi }x\text{ ke kurva}\\
                        y&=x^3 -3x^2 +x +2\\
                        &= (1)^3 -3(1)^2 +(1) +2 \\
                        &= 1-3+1+2 \\
                        &= 1
                        \end{align}\)</p>
                        <p>maka titik singgung kurva di \((1,1)\) dan gradien garis singgung \(m=-2\)</p>
                        <p>\(\displaystyle \begin{align}
                            y-y_1 &= m(x-x_1) \\
                            y-1 &= -2(x-1) \\
                            y-1 &= -2x+2 \\
                            y &= -2x+2+1 \\
                            y &= -2x+3
                            \end{align}\)</p>
                            <p>Jadi, persamaan garis singgungnya adalah \(y=-2x+3\)</p>
                    <b class="text-end text-danger fw-bold"> <h3>JAWABAN : A</h3></b>
                </div>
                </div>
                <hr />
<!-- SOAL end -->
<!-- SOAL 14 -->
            <li>Persamaan garis yang bergradien \(-3\) dan menyinggung kurva \(y=x^4 +x +2 \) adalah . . .</li>
                    <input type="radio" name="soal14" value="10"/>
                    \(\displaystyle y=-3x-1\)
                <br />
                    <input type="radio" name="soal14" value="0" />
                    \(\displaystyle y=-3x+1\)
                <br />
                    <input type="radio" name="soal14" value="0"  />
                    \(\displaystyle y=3x+1\)
                <br />
                    <input type="radio" name="soal14" value="0" />
                    \(\displaystyle y=3x-1\)
                <br />
                    <input type="radio" name="soal14" value="0"/>
                    \(\displaystyle y=-3x-x\)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal14" aria-expanded="false" aria-controls="collapsesoal14" >
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal14">
                <div class="card card-body overflow-auto">
                    <p>Diketahui \(y=x^4 +x +2\) dan \(m=-3\)</p>
                        <p>\(\displaystyle \begin{align}
                            y&=x^4 +x +2 \\
                        y' &= m \\
                        y' &= 4x^3+1 \\
                        -3 &= 4x^3+1 \\
                        -3-1 &= 4x^3 \\
                        -4 &= 4x^3 \\
                        x^3 &= -1 \\
                        x &= \sqrt[3]{-1} \\
                        x &= -1 \\\\
                        \text{subtitusi }x\text{ ke kurva}\\
                        y&=x^4 +x+2\\
                        &= (-1)^4 +(-1) +2 \\
                        &= 1-1+2 \\
                        &= 2
                        \end{align}\)</p>
                        <p>maka titik singgung kurva di \((-1,2)\) dan gradien garis singgung \(m=-3\)</p>
                        <p>\(\displaystyle \begin{align}
                            y-y_1 &= m(x-x_1) \\
                            y-2 &= -3(x-(-1)) \\
                            y-2 &= -3(x+1) \\
                            y &= -3x-3+2 \\
                            y &= -3x-1
                            \end{align}\)</p>
                            <p>Jadi, persamaan garis singgungnya adalah \(y=-3x-1\)</p>
                    <b class="text-end text-danger fw-bold"> <h3>JAWABAN : A</h3></b>
                </div>
                </div>
                <hr />
<!-- SOAL end -->
<!-- SOAL 15 -->
            <li>Diketahui garis \(y=6x+5\) menyinggung kurva \(y=x^2 +2x+k \). Nilai \(k\) adalah . . . </li>
                    <input type="radio" name="soal15" value="10"/>
                    \(\displaystyle 9\)
                <br />
                    <input type="radio" name="soal15" value="0" />
                    \(\displaystyle 6\)
                <br />
                    <input type="radio" name="soal15" value="0"  />
                    \(\displaystyle  3\)
                <br />
                    <input type="radio" name="soal15" value="0" />
                    \(\displaystyle 0\)
                <br />
                    <input type="radio" name="soal15" value="0"/>
                    \(\displaystyle -3\)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal15" aria-expanded="false" aria-controls="collapsesoal15">
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal15">
                <div class="card card-body overflow-auto">
                <p>Gradien garis \(y=6x+5\) adalah \(m=6\) maka </p>
                <p>\(\displaystyle \begin{align}
                    y &= x^2+2x+k \\
                    y' &= 2x+2 \\
                    6 &= 2x+2 \\
                    2x &= 4 \\
                    x &= 2
                    \end{align}\)</p>
                <p>Mencari nilai \(y\) maka substitusi nilai \(x=2\) ke persamaan garis singgung </p>
                <p>\(\displaystyle \begin{align}
                    y &= 6x+5 \\
                    y &= 6(2)+5 \\
                    y &= 12+5 \\
                    y &= 17
                    \end{align}\) </p>
                <p>Mencari nilai \(k\) substitusi nilai \(x=2\) dan \(y=17\) ke persamaan kurva</p>
                <p>\(\displaystyle \begin{align}
                    y &=x^2 +2x+k \\
                    17 &= (2)^2 +2(2)+k \\
                    17 &= 4+4+k \\
                    17 &= 8+k \\
                    17-8 &= k \\
                    k &= 9 \\
                    \end{align}\)</p>
                <p>Jadi, nilai \(k\) adalah \(9\)</p>
                <b class="text-end text-danger fw-bold"> <h3>JAWABAN : A</h3></b>
                </div>
                </div>
                <hr />
<!-- SOAL end -->
<!-- SOAL 16 -->
            <li>Diketahui garis \(y=2x+p\) menyinggung kurva \(y=x^3 +3x^2 +5x -4 \). Nilai \(p\) adalah . . . </li>
                    <input type="radio" name="soal16" value="0"/>
                    \(\displaystyle  -10 \)
                    \(\displaystyle  -10 \)
                <br />
                    <input type="radio" name="soal16" value="10" />
                    \(\displaystyle  -5 \)
                <br />
                    <input type="radio" name="soal16" value="0"  />
                    \(\displaystyle   0\)
                <br />
                    <input type="radio" name="soal16" value="0" />
                    \(\displaystyle  5 \)
                <br />
                    <input type="radio" name="soal16" value="0"/>
                    \(\displaystyle  -10 \)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal16" aria-expanded="false" aria-controls="collapsesoal16" >
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal16">
                <div class="card card-body overflow-auto">
                <p>Gradien garis \(y=2x+k \) adalah \(m=2\) </p>
                \(\displaystyle \begin{align}
                y &=x^3 +3x^2 +5x -4 \\
                y' &= 3x^2 + 6x +5 \\
                (y'&=m) \\
                2 &= 3x^2 +6x+5 \\
                0 &= 3x^2 +6x +5 -2 \\
                0 &= 3x^2 +6x +3 \\
                0 &= x^2 +2x +1 \\
                0 &= (x+1)^2 \\
                0 &= x+1 \\
                x &= -1 \\
                \end{align}\)
                <p>Untuk mencari nilai \(y\) substitusi nilai \(x=-1\) ke persamaan kurva</p>
                <p>\(\displaystyle \begin{align}
                    y &= x^3 +3x^2 +5x-4 \\
                    &= (-1)^3 +3(-1)^2 +5(-1)-4 \\
                    &= -1 +3 -5-4 \\
                    &= -7
                    \end{align}\)</p>
                <p>Untuk menentukan nilai \(k\) maka substitusi nilai \(x=-1\) dan \(y = -7\) ke persamaan garis singgung </p>
                <p>\(\displaystyle \begin{align}
                    y &=2x+k \\
                    -7 &= 2(-1)+k \\
                    -7 &= -2 +k \\
                    -7+2 &=k \\
                    k &= -5
                    \end{align}\)</p>
                    <p>Jadi nilai \(k\) adalah \(-5\)</p>
                <b class="text-end text-danger fw-bold"> <h3>JAWABAN : B</h3></b>
                </div>
                </div>
                <hr />
<!-- SOAL end -->
<!-- SOAL 17 -->
            <li>Persamaan garis yang sejajar dengan garis \(y=7x+2 \) dan menyinggung kurva \(y=3x^2 -5x +4 \) adalah . . . </li>
                    <input type="radio" name="soal17" value="10"/>
                    \(\displaystyle 7x-y=8 \)
                <br />
                    <input type="radio" name="soal17" value="0" />
                    \(\displaystyle  7x+y=8 \)
                <br />
                    <input type="radio" name="soal17" value="0"  />
                    \(\displaystyle  x-7y=8\)
                <br />
                    <input type="radio" name="soal17" value="0" />
                    \(\displaystyle  x+7y=8 \)
                <br />
                    <input type="radio" name="soal17" value="0"/>
                    \(\displaystyle x-7y=-8 \)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal17" aria-expanded="false" aria-controls="collapsesoal17" >
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal17">
                <div class="card card-body overflow-auto">
                <p>Gradien garis \(y=7x+2\) adalah \(m=7\)</p>
                <p>Karena sejajar maka berlaku \(m_1 = m_2\)</p>
                <p>\(\displaystyle \begin{align}
                    y' &= m \\\\
                    y &= 3x^2 -5x +4 \\
                    y' &= 6x-5 \\
                    7 &= 6x -5 \\
                    7+5 &= 6x \\
                    6x &= 12 \\
                    x &= 2
                    \end{align}\)</p>
                <p>Untuk mendapatkan nilai \(y\),maka substitusi nilai \(x\) ke persamaan kurva</p>
                <p>\(\displaystyle \begin{align}
                    y &= 3x^2 -5x +4 \\
                    &= 3(2)^2 -5(2) +4 \\
                    &= 12-10 +4 \\
                    y&=6
                    \end{align}\)</p>
                <p>Sehingga persamaan garis singgung melalui titik \((2,6)\) dengan gradien \(7\)</p>
                <p>\(\displaystyle \begin{align}
                    y-y_1 &= m(x-x_1) \\
                    y-6 &= 7(x-2) \\
                    y-6 &= 7x-14 \\
                    y &= 7x -14+6 \\
                    y &= 7x-8 \\
                    7x-y &= 8
                    \end{align}\)</p>
                <p>Jadi persamaan garis singgung yang menyinggung kurva adalah \(7x-y=8\)</p>
                <b class="text-end text-danger fw-bold"> <h3>JAWABAN : A</h3></b>
                </div>
                </div>
                <hr />
<!-- SOAL end -->
<!-- SOAL 18 -->
            <li>Persamaan garis yang sejajar dengan garis \(y=3x+1 \) dan menyinggung kurva \(y=2x^2 -5x +4 \) adalah . . .  </li>
                    <input type="radio" name="soal18" value="0"/>
                    \(\displaystyle y=3x+2 \)
                <br />
                    <input type="radio" name="soal18" value="0" />
                    \(\displaystyle y=3x-2 \)
                <br />
                    <input type="radio" name="soal18" value="0"  />
                    \(\displaystyle y=3x+4 \)
                <br />
                    <input type="radio" name="soal18" value="10" />
                    \(\displaystyle y=3x-4 \)
                <br />
                    <input type="radio" name="soal18" value="0"/>
                    \(\displaystyle y=-3x+4 \)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal18" aria-expanded="false" aria-controls="collapsesoal18" >
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal18">
                <div class="card card-body overflow-auto">
                <p>Gradien garis \(y=3x+1\) adalah \(m=3\)</p>
                <p>Karena sejajar maka berlaku \(m_1 = m_2\)</p>
                <p>\(\displaystyle \begin{align}
                    y' &= m \\\\
                    y &= 2x^2 -5x +4 \\
                    y' &= 4x-5 \\
                    3 &= 4x -5 \\
                    3+5 &= 4x \\
                    4x &= 8 \\
                    x &= 2
                    \end{align}\)</p>
                <p>Untuk mendapatkan nilai \(y\),maka substitusi nilai \(x\) ke persamaan kurva</p>
                <p>\(\displaystyle \begin{align}
                    y &= 2x^2 -5x +4 \\
                    &= 2(2)^2 -5(2) +4 \\
                    &= 8-10 +4 \\
                    y&=2
                    \end{align}\)</p>
                <p>Sehingga persamaan garis singgung melalui titik \((2,2)\) dengan gradien \(3\)</p>
                <p>\(\displaystyle \begin{align}
                    y-y_1 &= m(x-x_1) \\
                    y-2 &= 3(x-2) \\
                    y-2 &= 3x-6 \\
                    y &= 3x -6+2 \\
                    y &= 3x-4
                    \end{align}\)</p>
                <p>Jadi persamaan garis singgung yang menyinggung kurva adalah \(y=3x-4\)</p>
                    <b class="text-end text-danger fw-bold"> <h3>JAWABAN : D</h3></b>
                </div>
                </div>
                <hr />
<!-- SOAL end -->
<!-- SOAL 19 -->
            <li>Persamaan garis yang tegak lurus dengan garis \(x-3y+2=0 \) dan menyinggung kurva \(y=x^2 -2x +6 \) adalah . . . </li>
                    <input type="radio" name="soal19" value="0"/>
                    \(\displaystyle  12x-4y = -23\)
                <br />
                    <input type="radio" name="soal19" value="0" />
                    \(\displaystyle 12x+4y = -23 \)
                <br />
                    <input type="radio" name="soal19" value="0"  />
                    \(\displaystyle -12x+4y = 23 \)
                <br />
                    <input type="radio" name="soal19" value="10" />
                    \(\displaystyle 12x+4y = 23 \)
                <br />
                    <input type="radio" name="soal19" value="0"/>
                    \(\displaystyle 12x-4y = 23 \)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal19" aria-expanded="false" aria-controls="collapsesoal19" >
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal19">
                <div class="card card-body overflow-auto">
                <p>Gradien garis \(\displaystyle x-3y+2=0 \to y=\frac{1}{3}x+\frac{2}{3} \) adalah \(\displaystyle m=\frac{1}{3}\)</p>
                <p>Karena tegak lurus maka berlaku \(m_1 . m_2 = -1 \)</p>
                <p>\(\displaystyle \begin{align}
                    m_1 . m_2 &=-1 \\
                    \frac{1}{3}. m_2 &=-1 \\
                    m_2 &= -3
                    \\\\
                    y &= x^2-2x+6 \\
                    y' &= 2x-2 \\
                    -3 &= 2x -2 \\
                    -3+2 &= 2x \\
                    2x &= -1 \\
                    x &= - \frac{1}{2}
                    \end{align}\)</p>
                <p>Substitusi nilai \(\displaystyle x=-\frac{1}{2}\) ke persamaan kurva</p>
                <p>\(\displaystyle \begin{align}
                    y &= x^2 -2x +6 \\
                    &= \left(-\frac{1}{2}\right)^2 -2\left(-\frac{1}{2}\right) +6 \\
                    &= \frac{1}{4} + 1 + 6 \\
                    &= \frac{1}{4} + 7 \\
                    &= \frac{1}{4} + \frac{28}{4} \\
                    y&= \frac{29}{4}
                    \end{align}\)</p>
                <p>Sehingga persamaan garis singgung melalui titik \(\displaystyle \left(-\frac{1}{2},\frac{29}{4} \right)\) dengan gradien \(-3\)</p>
                <p>\(\displaystyle \begin{align}
                    y-y_1 &= m(x-x_1) \\
                    y-\frac{29}{4} &= -3\left(x+\frac{1}{2}\right) \\
                    y-\frac{29}{4} &= -3x-\frac{3}{2} \\
                    4y - 29 &= -12x -6 \\
                    12x+4y &= -6+29 \\
                    12x+4y &= 23
                    \end{align}\)</p>
                <p>Jadi, persamaan garis singgung yang menyinggung kurva adalah \(12x+4y = 23\)</p>
                    <b class="text-end text-danger fw-bold"> <h3>JAWABAN : D</h3></b>
                </div>
                </div>
                <hr />
<!-- SOAL end -->
<!-- SOAL 20 -->
            <li>Persamaan garis yang tegak lurus dengan garis \(x+2y+3=0 \) dan menyinggung kurva \(y=3x^2 -4x +2 \) adalah . . . </li>
                    <input type="radio" name="soal20" value="10"/>
                    \(\displaystyle 2x-y=1 \)
                <br />
                    <input type="radio" name="soal20" value="0" />
                    \(\displaystyle 2x+y=1 \)
                <br />
                    <input type="radio" name="soal20" value="0"  />
                    \(\displaystyle -2x+y=1 \)
                <br />
                    <input type="radio" name="soal20" value="0" />
                    \(\displaystyle 2x-y=-1 \)
                <br />
                    <input type="radio" name="soal20" value="0"/>
                    \(\displaystyle 2x+y=-1 \)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal20" aria-expanded="false" aria-controls="collapsesoal20" >
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal20">
                <div class="card card-body overflow-auto">
                <p>gradien dari garis \(x+2y+3=0\) adalah \(\displaystyle -\frac{1}{2}\)</p>
                <p>Karena tegak lurus maka berlaku</p>
                <p>\(\displaystyle \begin{align}
                    m_1 . m_2 &= -1 \\
                    -\frac{1}{2} . m_2 &= -1 \\
                    m_2 &= 2 \\\\
                    y &= 3x^2 -4x +2 \\
                    y' &= 6x-4 \\
                    2 &= 6x-4 \\
                    2+4 &= 6x \\
                    6x &= 6\\
                    x &= 1
                    \end{align}\)</p>
                <p>Substitusikan nilai \(x=1\) ke persamaan kurva</p>
                <p>\(\displaystyle \begin{align}
                    y &= 3x^2 -4x +2 \\
                    y &= 3(1)^2 -4(1) +2 \\
                    y &= 3 -4 +2 \\
                    y &= 1
                    \end{align}\)</p>
                <p>Persamaan garis singgung menyinggung kurva di titik \((1,1)\) dengan gradien \(2\)</p>
                <p>\(\displaystyle \begin{align}
                    y-y_1 &= m(x-x_1) \\
                    y-1 &=2(x-1) \\
                    y-1 &= 2x-2 \\
                    2x-y &= 2-1 \\
                    2x-y &= 1
                    \end{align}\)</p>
                <p>Jadi, persamaan garis singgung nya adalah \(2x-y=1\)</p>
                <b class="text-end text-danger fw-bold"> <h3>JAWABAN : A</h3></b>
                </div>
                </div>

<!-- SOAL end -->
<!-- SOAL 21 -->
            <li>Garis \(g\) adalah garis yang menyinggung kurva \(y=x^3 -3x^2 +4x -2 \) di titik \((2,-2)\) juga menyinggung kurva \(y=x^2 - 2x\) dititik \(P\). Maka koordinat titik \(P\) adalah . . . </li>
                    <input type="radio" name="soal21" value="0"/>
                    \(\displaystyle (2,3) \)
                <br />
                    <input type="radio" name="soal21" value="0" />
                    \(\displaystyle (3,2) \)
                <br />
                    <input type="radio" name="soal21" value="10"  />
                    \(\displaystyle (3,3) \)
                <br />
                    <input type="radio" name="soal21" value="0" />
                    \(\displaystyle (3,-3) \)
                <br />
                    <input type="radio" name="soal21" value="0"/>
                    \(\displaystyle (-3,3) \)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal21" aria-expanded="false" aria-controls="collapsesoal21">
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal21">
                <div class="card card-body overflow-auto">
                <p>Garis \(g\) menyinggung \(y=x^3 -3x^2 +4x -2 \) di titik \((2,-2)\), berarti nilai \(x=2\)</p>
                <p>gradien garis \(g\) adalah</p>
                <p>\(\displaystyle \begin{align}
                    y &=x^3 -3x^2 +4x -2 \\
                    m=y'&= 3x^2 -6x+4 \\
                    &= 3(2)^2 -6(2) +4 \\
                    &= 12 -12 +4 \\
                    &= 4
                    \end{align}\)</p>
                <p>Garis \(g\) juga menyinggung kurva \(y=x^2 - 2x\)</p>
                <p>\(\displaystyle \begin{align}
                    y &= x^2-2x \\
                    y' &= 2x-2 \\
                    4 &= 2x-2 \\
                    4+2 &= 2x \\
                    2x &= 6 \\
                    x &= 3 \\\\

                    y &=x^2-2x \\
                    &= (3)^2 -2(3) \\
                    &= 9 -6 \\
                    &=3
                    \end{align}\)</p>
                <p>Jadi, garis \(g\) menyinggung kurva \(y=x^2 -2x\) dititik \(P(3,3)\)</p>
                    <b class="text-end text-danger fw-bold"> <h3>JAWABAN : C</h3></b>
                </div>
                </div>
<!-- SOAL end -->
<!-- SOAL 22 -->
            <li>Garis \(g\) adalah garis yang menyinggung kurva \(y=x^4 \) di titik \((1,1)\) juga menyinggung kurva \(y=x^2 +2x + k\) dititik \(P\). Maka nilai \(k\) dan koordinat titik \(P\) berturut-turut adalah . . . </li>
                    <input type="radio" name="soal22" value="0"/>
                    \(\displaystyle k=2 \text{ dan } P(1,1) \)
                <br />
                    <input type="radio" name="soal22" value="0" />
                    \(\displaystyle k=2 \text{ dan } P(-1,1) \)
                <br />
                    <input type="radio" name="soal22" value="0"  />
                    \(\displaystyle k=-2 \text{ dan } P(-1,1) \)
                <br />
                    <input type="radio" name="soal22" value="0" />
                    \(\displaystyle k=-2 \text{ dan } P(1,-1) \)
                <br />
                    <input type="radio" name="soal22" value="10"/>
                    \(\displaystyle k=-2 \text{ dan } P(1,1) \)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal22" aria-expanded="false" aria-controls="collapsesoal22" >
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal22">
                <div class="card card-body overflow-auto">
                    Garis \(g\) menyinggung \(y=x^3 -3x^2 +4x -2 \) di titik \((2,-2)\), berarti nilai \(x=2\)
                    <b class="text-end text-danger fw-bold"> <h3>JAWABAN : E</h3></b>
                </div>
                </div>

            </ol>

{{-- COPY DARI SINI SETIAP SOAL --}}
<input type="hidden" id="materi" name="materi" value="prs_grs_singgung01">
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
    <a href="/createpersamaangarissinggung" id="kirimsaja" class="btn btn-warning btn-bukti d-none" >SIMPAN JAWABAN</a>
</div>
</form>
{{-- COPY SAMPAI SINI --}}

<div id="disqus_thread" class="mt-4"></div>

</div>
</div>
</div>
</section>
@endsection

