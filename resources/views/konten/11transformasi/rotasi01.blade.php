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
            Rotasi - 01 + Pembahasan
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

                <li>Bayangan titik koordinat \(P (3 , 5)\) dirotasi dengan arah rotasi \(90^{\circ}\) berlawanan arah putar jarum jam adalah . . .</li>
                <input type="radio" name="soal1" value="10" />
                \((5,-3) \)
                <br />
                <input type="radio" name="soal1" value="0" />
                \((5,3) \)
                <br />
                <input type="radio" name="soal1" value="0"  />
                \((-5,3) \)
                <br />
                <input type="radio" name="soal1" value="0" />
                \((-3,5) \)
                <br />
                <input type="radio" name="soal1" value="0"/>
                \((3,-5) \)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal1" aria-expanded="false" aria-controls="collapsesoal1" >
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal1">
                  <div class="card card-body overflow-auto">
                    \(\begin{align}
                    \begin{pmatrix}x'\\y'\end{pmatrix} &= \begin{pmatrix}\cos (90⁰) & -\sin (90⁰) \\ \sin (90⁰)& \cos (90⁰) \end{pmatrix}\begin{pmatrix}3\\5\end{pmatrix} \\
                    &= \begin{pmatrix}0&-1\\1&0 \end{pmatrix}\begin{pmatrix}3\\5 \end{pmatrix} \\
                    \begin{pmatrix}x'\\y' \end{pmatrix} &= \begin{pmatrix}-5\\3 \end{pmatrix}
                    \end{align}\)
                    <br>
                    \(\text{Jadi bayangan titik } P \text{ adalah } P'(-5,3)\)
                  <b class="text-end"> JAWABAN : C </b>
                  </div>
                </div>
                <hr />
                <!--========================= soal no 2 ===========================================================================-->
                <li>Titik \(A (8 , -3)\) dirotasikan sejauh \(90^{\circ}\) terhadap titik pusat \(O (0 , 0)\) searah jarum jam. Bayangan titik \(A\) adalah . . .</li>
                <input type="radio" name="soal2" value="0"/>
                \((3,-8)\)
                <br />
                <input type="radio" name="soal2" value="10" />
                \((-3,-8) \)
                <br />
                <input type="radio" name="soal2" value="0"  />
                \((-3,8)\)
                <br />
                <input type="radio" name="soal2" value="0" />
                \((8,3) \)
                <br />
                <input type="radio" name="soal2" value="0" />
                \((8,-3) \)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal2" aria-expanded="false" aria-controls="collapsesoal2" >
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal2">
                  <div class="card card-body overflow-auto">
                    \(\begin{align}
                    \begin{pmatrix}x'\\y'\end{pmatrix} &= \begin{pmatrix}\cos (-90⁰) & -\sin (-90⁰) \\ \sin (-90⁰)& \cos (-90⁰) \end{pmatrix}\begin{pmatrix}8\\-3\end{pmatrix} \\
                    &= \begin{pmatrix}0&1\\-1&0 \end{pmatrix}\begin{pmatrix}8\\-3 \end{pmatrix} \\
                    \begin{pmatrix}x'\\y' \end{pmatrix} &= \begin{pmatrix}-3\\-8 \end{pmatrix}
                    \end{align}\)
                    <br>
                    \(\text{Jadi bayangan titik } A \text{ adalah } A'(-3,-8)\)
                  <b class="text-end"> JAWABAN : B </b>
                  </div>
                </div>
                <hr />
                <!--================================================== soal no 3 ======================================================-->
                <li>Persamaan bayangan kurva \(3x + 5y = 15\) jika dirotasikan sebesar \(90^{\circ}\) searah jarum jam dengan titik pusat rotasi \(O(0, 0)\) adalah . . .</li>
                <input type="radio" name="soal3" value="0"  />
                \(3y+5x=15 \)
                <br />
                <input type="radio" name="soal3" value="0"  />
                \(-3y+5x=15 \)
                <br />
                <input type="radio" name="soal3" value="0" />
                \(-3y-5x=15 \)
                <br />
                <input type="radio" name="soal3" value="10"/>
                \(3y-5x=15 \)
                <br />
                <input type="radio" name="soal3" value="0" />
                \(3y+15=-15 \)
                <br />
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal3" aria-expanded="false" aria-controls="collapsesoal3" >
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal3">
                  <div class="card card-body overflow-auto">
                  \(\begin{align}
                  \begin{pmatrix}x'\\y'\end{pmatrix} &= \begin{pmatrix}\cos (-90⁰) & -\sin (-90⁰) \\ \sin (-90⁰)& \cos (-90⁰) \end{pmatrix}\begin{pmatrix}x\\y\end{pmatrix} \\
                  &= \begin{pmatrix}0&1\\-1&0 \end{pmatrix}\begin{pmatrix}x\\y \end{pmatrix} \\
                  \begin{pmatrix}x'\\y' \end{pmatrix} &= \begin{pmatrix}y\\-x \end{pmatrix}
                  \end{align}\)
                  Sehingga
                  \(\begin{align}y&=x' \\ x&=-y' \end{align}\)
                  <br>
                  \(\begin{align} 3x+5y&=15 \\
                  3(-y')+5(x')&=15 \\
                  -3y'+5x'&=15
                  \end{align}\)

                  Jadi bayangan garis tersebut adalah \(-3y+5x=15\)
                  <b class="text-end"> JAWABAN : B </b>
                  </div>
                </div>
                <hr />
                <!-- soal no no4 =================================================================================================-->
                <li>Bayangan titik \(A\) oleh rotasi \(R(0,45^{\circ})\) adalah \((-√2,√2)\). Koordinat titik \(A\) adalah . . . </li>
                </li>
                <input type="radio" name="soal4" value="0" />
                \((2,0)\)
                <br />
                <input type="radio" name="soal4" value="0" />
                \((0,-2) \)
                <br />
                <input type="radio" name="soal4" value="10" />
                \((0,2) \)
                <br />
                <input type="radio" name="soal4" value="0"  />
                \((-2,0) \)
                <br />
                <input type="radio" name="soal4" value="0" />
                \((2,-2) \)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal4" aria-expanded="false" aria-controls="collapsesoal4">
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal4">
                  <div class="card card-body overflow-auto">
                    Titik bayangan jika diputar dengan arah yang berbeda dari rotasi awal maka akan mendapatkan titik asal.
                  \(\begin{align}
                  \begin{pmatrix}x'\\y' \end{pmatrix} &= \begin{pmatrix}\cos (-45⁰) & -\sin (-45⁰) \\ \sin (-45⁰)& \cos (-45⁰) \end{pmatrix}\begin{pmatrix}-\sqrt{2} \\ \sqrt{2} \end{pmatrix} \\
                  &= \begin{pmatrix}\frac{1}{2}\sqrt{2}&\frac{1}{2}\sqrt{2}\\-\frac{1}{2}\sqrt{2}&\frac{1}{2}\sqrt{2} \end{pmatrix}\begin{pmatrix}-\sqrt{2}\\ \sqrt{2} \end{pmatrix} \\
                  &= \begin{pmatrix}-4\\-3 \end{pmatrix}+\begin{pmatrix}2\\3 \end{pmatrix} \\
                  &= \begin{pmatrix}-1+1\\1+1 \end{pmatrix} \\
                  &= \begin{pmatrix}0\\2 \end{pmatrix}
                  \end{align}\)
                  <b class="text-end"> JAWABAN : C </b>
                  </div>
                </div>
                <hr />
                <!-- soal no 5 ================================================================================================-->
                <li>Titik \(B(5,-1)\) dirotasikan terhadap titik \(P(2,3)\) sejauh \(90⁰\) searah putaran jam. Bayangan titik B tersebut adalah . . . </li>
                <input type="radio" name="soal5" value="0" />
                \((2,0)\)
                <br />
                <input type="radio" name="soal5" value="0" />
                \((0,-2) \)
                <br />
                <input type="radio" name="soal5" value="0" />
                \((0,2) \)
                <br />
                <input type="radio" name="soal5" value="10"  />
                \((-2,0) \)
                <br />
                <input type="radio" name="soal5" value="0" />
                \((2,-2) \)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal5" aria-expanded="false" aria-controls="collapsesoal5">
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal5">
                  <div class="card card-body overflow-auto">
                  \(\begin{align}
                  \begin{pmatrix}x'\\y' \end{pmatrix} &= \begin{pmatrix}\cos (-90⁰) & -\sin (-90⁰) \\ \sin (-90⁰)& \cos (-90⁰) \end{pmatrix}\begin{pmatrix}5-2\\-1-3 \end{pmatrix}+\begin{pmatrix}2\\3 \end{pmatrix} \\
                  &= \begin{pmatrix}0&1\\-1&0 \end{pmatrix}\begin{pmatrix}3\\-4 \end{pmatrix}+\begin{pmatrix}2\\3 \end{pmatrix} \\
                  &= \begin{pmatrix}-4\\-3 \end{pmatrix}+\begin{pmatrix}2\\3 \end{pmatrix} \\
                  &= \begin{pmatrix}-2\\0 \end{pmatrix}
                  \end{align}\)
                  <b class="text-end"> JAWABAN : D </b>
                  </div>
                </div>
                <hr />
                <!-- =====SOAL NO 6======================================================================= -->
                <li>Jika garis \(x - 2y = 5\) diputar sejauh \(90⁰\) terhadap titik \((2,4)\) berlawanan arah putaran jam, maka persamaan bayangannya adalah . . .</li>
                <input type="radio" name="soal6" value="0" />
                \(2x-y=19 \)
                <br />
                <input type="radio" name="soal6" value="10" />
                \(2x+y=19 \)
                <br />
                <input type="radio" name="soal6" value="0" />
                \(2x-y=-9 \)
                <br />
                <input type="radio" name="soal6" value="0" />
                \(2y-x=19 \)
                <br />
                <input type="radio" name="soal6" value="0" />
                \(2y+x=-19 \)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse6" aria-expanded="false" aria-controls="collapse6">
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapse6">
                  <div class="card card-body overflow-auto">
                  Misalkan titik (x,y) berada pada garis
                  \(\begin{align}
                  \begin{pmatrix}x'\\y' \end{pmatrix} &= \begin{pmatrix}\cos 90⁰ & -\sin 90⁰ \\ \sin 90⁰& \cos 90⁰ \end{pmatrix} \begin{pmatrix}x-2 \\ y-4 \end{pmatrix}+\begin{pmatrix}2\\4 \end{pmatrix} \\
                  &= \begin{pmatrix}0&-1\\1&0 \end{pmatrix}\begin{pmatrix}x-2 \\ y-4 \end{pmatrix}+\begin{pmatrix}2\\4 \end{pmatrix} \\
                  &= \begin{pmatrix}-y+4 \\ x-2 \end{pmatrix}+\begin{pmatrix}2\\4 \end{pmatrix} \\
                  \begin{pmatrix}x'\\y' \end{pmatrix}&= \begin{pmatrix}-y+6 \\ x+2 \end{pmatrix}
                  \end{align}\)
                  <br>
                  \(\begin{align}
                  x' &= -y+6 \\
                  y &= -x'+6
                  \end{align}\)
                  <br>
                  \(\begin{align}
                  y' &= x+2 \\
                  x &= y'-2
                  \end{align}\)
                  <br>
                  \(\text{Substitusi nilai } x\text{ dan }y \text{ ke persamaan awal } x - 2y = 5\)
                  \(\begin{align}
                  x -2y&= 5 \\
                  (y'-2)-2(-x'+6)&=5 \\
                  y'-2+2x'-12&=5\\
                  y'+2x'&=5+12+2 \\
                  2x'+y' &=19
                  \end{align}\)
                  \(\text{Jadi, bayangan garis tersebut adalah } 2x+y=19\)
                   <b class="text-end"> JAWABAN : B </b>
                  </div>
                </div>
                <hr />
                <!-- =====SOAL NO 7======================================================================= -->
                <li>Persamaan bayangan garis \(y=\sqrt{2}x+\sqrt{2}\) oleh rotasi pada pusat \(O(0,0) \) dengan sudut rotasi \(45⁰\) adalah . . .</li>
                <input type="radio" name="soal7" value="10" />
                \(y=-(3+2\sqrt{2})x-(2+2\sqrt{2}) \)
                <br />
                <input type="radio" name="soal7" value="0" />
                \(y=-(3+2\sqrt{2})x+(2+2\sqrt{2})\)
                <br />
                <input type="radio" name="soal7" value="0"/>
                \(y=(3+2\sqrt{2})x-(2+2\sqrt{2})\)
                <br />
                <input type="radio" name="soal7" value="0"  />
                \(y=-2\sqrt{2}+2\sqrt{2}\)
                <br />
                <input type="radio" name="soal7" value="0" />
                \(y=2\sqrt{2}+2\sqrt{2}\)<br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal7" aria-expanded="false" aria-controls="collapsesoal7" >
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal7">
                  <div class="card card-body overflow-auto">
                    Misalkan titik (x,y) berada pada garis
                    \(\begin{align}
                    \begin{pmatrix}x'\\y' \end{pmatrix} &= \begin{pmatrix}\cos 45⁰ & -\sin 45⁰ \\ \sin 45⁰& \cos 45⁰ \end{pmatrix}\begin{pmatrix}x\\y \end{pmatrix} \\
                    &= \begin{pmatrix} \frac{1}{2}\sqrt{2} & -\frac{1}{2}\sqrt{2} \\ \frac{1}{2}\sqrt{2} & \frac{1}{2}\sqrt{2} \end{pmatrix}\begin{pmatrix}x\\y \end{pmatrix} \\
                    \begin{pmatrix}x'\\y' \end{pmatrix} &= \begin{pmatrix} \frac{1}{2}\sqrt{2}x -\frac{1}{2}\sqrt{2}y \\ \frac{1}{2}\sqrt{2}x+  \frac{1}{2}\sqrt{2}y \end{pmatrix}
                    \end{align}\)
                    <br>
                    <div class="row">
                      <div class="col-sm border border-dark p-2">
                        \(\begin{align}
                        x'&= \frac{1}{2}\sqrt{2}x -\frac{1}{2}\sqrt{2}y \\
                        y'&= \frac{1}{2}\sqrt{2}x + \frac{1}{2}\sqrt{2}y \; \; \; (-)
                        \end{align}\)
                        <hr style="width: 12rem;">
                        \(\begin{align}
                        x'-y'&= -\sqrt{2}y \\
                        y&= \frac{x'-y'}{-\sqrt{2}}
                        \end{align}\)
                      </div>
                      <div class="col-sm border border-dark p-2">
                        \(\begin{align}
                        x'&= \frac{1}{2}\sqrt{2}x -\frac{1}{2}\sqrt{2}y \\
                        y'&= \frac{1}{2}\sqrt{2}x + \frac{1}{2}\sqrt{2}y \; \; \; (+)
                        \end{align}\)
                        <hr style="width: 12rem;">
                        \(\begin{align}
                        x'+y'&= \sqrt{2}x \\
                        x&= \frac{x'+y'}{\sqrt{2}}
                        \end{align}\)
                      </div>
                    </div>
                    <br>
                    \(\text{Substitusi nilai } x \text{ dan } y \text{ ke persamaan awal } y=\sqrt{2}x+\sqrt{2}\)
                    \(\begin{align}
                    y &=\sqrt{2}x+\sqrt{2} \\
                    \frac{x'-y'}{-\sqrt{2}} &= \sqrt{2} (\frac{x'+y'}{\sqrt{2}})+\sqrt{2} \\
                    (\frac{x'-y'}{-\sqrt{2}} &= \sqrt{2} (\frac{x'+y'}{\sqrt{2}})+\sqrt{2}) \to \times \sqrt{2} \\
                    -x'+y' &= \sqrt{2}x'+\sqrt{2}y'+2 \\
                    y'- \sqrt{2}y' &= \sqrt{2}x'+x'+2 \\
                    (1-\sqrt{2})y' &= (\sqrt{2}+1)x'+2 \\
                    y' &= \frac{(\sqrt{2}+1)x'+2}{1-\sqrt{2}} \\
                    y' &= \frac{(\sqrt{2}+1)x'+2}{1-\sqrt{2}} \to \times \frac{1+\sqrt{2}}{1+\sqrt{2}}\\
                    y' &= \frac{(\sqrt{2}+1)(1+\sqrt{2})x'+2(1+\sqrt{2})}{1-2} \\
                    y' &= \frac{(3+2\sqrt{2})x'+(2+2\sqrt{2})}{-1} \\
                    y' &= -(3+2\sqrt{2})x'-(2+2\sqrt{2})
                    \end{align}\)
                    <br>
                    Jadi, bayangan garis tersebut adalah  \(y = -(3+2\sqrt{2})x-(2+2\sqrt{2})\)
                   <b class="text-end"> JAWABAN : A </b>
                  </div>
                </div>
                <hr />
                <!-- =====SOAL NO 8======================================================================= -->
                <li>Titik \(B(5,-2) \) dirotasikan sebesar \(35⁰ \) berlawanan arah putar jarum jam, kemudian dilanjutkan lagi dengan rotasi sebesar \(55⁰\) berlawanan arah putar jarum jam. Jika titik pusat kedua rotasi sama yaitu \((-2,6)\). Maka bayangan titik \(B\) adalah . . . </li>
                <input type="radio" name="soal8" value="0" />
                \((-13,6) \)
                <br />
                <input type="radio" name="soal8" value="10"/>
                \((13,-6) \)
                <br />
                <input type="radio" name="soal8" value="0"  />
                \((-6,13) \)
                <br />
                <input type="radio" name="soal8" value="0"  />
                \((6,-13) \)
                <br />
                <input type="radio" name="soal8" value="0" />
                \((6,13) \)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal8" aria-expanded="false" aria-controls="collapsesoal8" >
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal8">
                  <div class="card card-body overflow-auto">
                    \(\begin{align}
                    \begin{pmatrix}x'\\y' \end{pmatrix} &= \begin{pmatrix}\cos (35+55)⁰ & -\sin (35+55)⁰ \\ \sin (35+55)⁰& \cos (35+55)⁰ \end{pmatrix}\begin{pmatrix}5-(-2)\\-2-6 \end{pmatrix}+\begin{pmatrix}-2\\6 \end{pmatrix} \\
                    &= \begin{pmatrix}\cos 90⁰ & -\sin 90⁰ \\ \sin 90⁰& \cos 90⁰ \end{pmatrix}\begin{pmatrix}7\\-8 \end{pmatrix}+\begin{pmatrix}-2\\6 \end{pmatrix} \\
                    &= \begin{pmatrix}0&-1 \\ 1&0 \end{pmatrix}\begin{pmatrix}7&-8 \end{pmatrix}+\begin{pmatrix}-2\\6 \end{pmatrix} \\
                    &= \begin{pmatrix}8\\7 \end{pmatrix}+\begin{pmatrix}-2\\6 \end{pmatrix} \\
                    &= \begin{pmatrix}6\\13 \end{pmatrix}
                    \end{align}\)
                    <br>
                    \(\text{Jadi, bayangan titik }B \text{ adalah } B'(6,13) \)
                   <b class="text-end"> JAWABAN : E </b>
                  </div>
                </div>
                <hr />
                <!-- =====SOAL NO 9======================================================================= -->
                <li>Persamaan \(y=3x+2\) dirotasikan sebesar \(50⁰\) berlawanan arah jarum jam, kemudian dilanjutkan lagi dengan rotasi sebesar \(300⁰\) searah jarum jam, dan dilanjutkan lagi rotasi sebesar \(70⁰\) berlawanan arah jarum jam. Jika titik pusat ketiga rotasi sama yaitu \((0,0)\), maka bayangan persamaan kurva tersebut adalah . . . </li>
                <input type="radio" name="soal9" value="0" />
                \((3+\sqrt{3})x+(3\sqrt{3}-1)y+4 = 0\)
                <br />
                <input type="radio" name="soal9" value="0" />
                \((3-\sqrt{3})x+(3\sqrt{3}-1)y+4 = 0\)
                <br />
                <input type="radio" name="soal9" value="0"  />
                \((3+\sqrt{3})x+(3\sqrt{3}+1)y-4 = 0\)
                <br />
                <input type="radio" name="soal9" value="10" id="soal9"/>
                \((3+\sqrt{3})x+\sqrt{3}y-4 = 0\)
                <br />
                <input type="radio" name="soal9" value="0" />
                \(\sqrt{3}x+(3\sqrt{3}-1)y+4 = 0\)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal9" aria-expanded="false" aria-controls="collapsesoal9" >
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal9">
                  <div class="card card-body overflow-auto">
                    \(\text{Misalkan titik }(x,y) \text{ berada pada garis} y=3x+2\)
                    \(\begin{align}
                    \begin{pmatrix}x''\\y'' \end{pmatrix}&= \begin{pmatrix}\cos (50⁰+300⁰+70⁰) & -\sin (50⁰+300⁰+70⁰) \\ \sin (50⁰+300⁰+70⁰)& \cos (50⁰+300⁰+70⁰) \end{pmatrix}\begin{pmatrix}x\\y \end{pmatrix} \\
                    &= \begin{pmatrix}\cos 420⁰ & -\sin 420⁰ \\ \sin 420⁰& \cos 420⁰ \end{pmatrix}\begin{pmatrix}x\\y \end{pmatrix} \\
                    &= \begin{pmatrix}\cos 60⁰ & -\sin 60⁰ \\ \sin 60⁰& \cos 60⁰ \end{pmatrix}\begin{pmatrix}x\\y \end{pmatrix} \\
                    & = \begin{pmatrix}\frac{1}{2} & -\frac{1}{2}\sqrt{3} \\ \frac{1}{2}\sqrt{3} & \frac{1}{2}\end{pmatrix}\begin{pmatrix}x\\y \end{pmatrix} \\
                    &= \begin{pmatrix}\frac{1}{2}x -\frac{1}{2}\sqrt{3}y \\ \frac{1}{2}\sqrt{3}x + \frac{1}{2}y\end{pmatrix}
                    \end{align}\)
                    <br>
                    <div class="row">
                      <div class="col-sm border border-dark p-2">
                        \(\begin{align}
                        x'&= \frac{1}{2}x -\frac{1}{2}\sqrt{3}y |\times \sqrt{3} \\
                        y'&= \frac{1}{2}\sqrt{3}x + \frac{1}{2}y | \times 1
                        \end{align}\)
                        <hr style="width: 12rem;">
                        \(\begin{align}
                        \sqrt{3}x'&= \frac{1}{2}\sqrt{3}x -\frac{3}{2}y \\
                        y'&= \frac{1}{2}\sqrt{3}x + \frac{1}{2}y \; \; \; (-)
                        \end{align}\)
                        <hr style="width: 12rem;">
                        \(\begin{align}
                        \sqrt{3}x'-y'&= -2y \\
                        y&= \frac{\sqrt{3}x'-y'}{-2}
                        \end{align}\)
                      </div>
                      <div class="col-sm border border-dark p-2">
                        \(\begin{align}
                        x'&= \frac{1}{2}x -\frac{1}{2}\sqrt{3}y |\times 1 \\
                        y'&= \frac{1}{2}\sqrt{3}x + \frac{1}{2}y | \times \sqrt{3}
                        \end{align}\)
                        <hr style="width: 12rem;">
                        \(\begin{align}
                        x'&= \frac{1}{2}x -\frac{1}{2}\sqrt{3}y \\
                        \sqrt{3}y'&= \frac{3}{2}x + \frac{1}{2}\sqrt{3}y \; \; \; (+)
                        \end{align}\)
                        <hr style="width: 12rem;">
                        \(\begin{align}
                        x'+\sqrt{3}y'&= 2x \\
                        x&= \frac{x'+\sqrt{3}y'}{2}
                        \end{align}\)
                      </div>
                    </div>
                    \(\text{Substitusikan nilai } x \text{ dan } y \text{ yang diperoleh ke persamaan garis } y=3x+2\)
                    \(\begin{align}
                    y &=3x+2 \\
                    \frac{\sqrt{3}x'-y'}{-2} &= 3(\frac{x'+\sqrt{3}y'}{2})+2 \\
                    -\sqrt{3}x'+y'=3x'+3\sqrt{3}y'+4\\
                    3x'+\sqrt{3}x'+3\sqrt{3}y'-y'+4 &= 0 \\
                    (3+\sqrt{3})x'+(3\sqrt{3}-1)y'+4 &= 0
                    \end{align}\)
                    <br>
                    \(\text{Jadi, bayangan garis }y=3x+2 \text{ adalah } (3+\sqrt{3})x+(3\sqrt{3}-1)y+4 = 0  \)
                   <b class="text-end"> JAWABAN :  A</b>
                  </div>
                </div>
                <hr />
                <!-- =====SOAL NO 10======================================================================= -->
                <li>Titik \(B(-2,1)\) dirotasi sejauh \(60⁰\) dengan titik pusat \((1,0)\), lalu dilanjutkan lagi dengan rotasi sebesar \(30⁰\) dengan titik pusat \((-1,3)\). Bayangan titik \(B\) adalah . . . </li>
                <input type="radio" name="soal10" value="0"  />
                \(B''(\sqrt{3}+\frac{1}{2},\frac{7}{4}\sqrt{3}+1 )\)
                <br />
                <input type="radio" name="soal10" value="0" />
                \(B''(\sqrt{3}+\frac{1}{2},-\frac{7}{4}\sqrt{3}-1 )\)
                <br />
                <input type="radio" name="soal10" value="10" />
                \(B''(\sqrt{3}-\frac{1}{2},-\frac{7}{4}\sqrt{3}+1 )\)
                <br />
                <input type="radio" name="soal10" value="0" />
                \(B''(\sqrt{3}+\frac{1}{2},-\frac{5}{4}\sqrt{3}+1 )\)
                <br />
                <input type="radio" name="soal10" value="0" />
                \(B''(\sqrt{3}-\frac{1}{2},-\frac{5}{4}\sqrt{3}-1 )\)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal10" aria-expanded="false" aria-controls="collapsesoal10" >
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal10">
                  <div class="card card-body overflow-auto">
                   * Karena titik pusat rotasinya tidak sama, maka matriks rotasinya tidak bisa digabung langsung, artinya kita harus mengerjakan satu demi satu bentuk rotasinya. <br>
                   \(\text{ * Rotasi pertama : }\theta_{1} = 60⁰ \text{ dengan pusat } (a,b)=(1,0)\)
                   \(\begin{align}
                    \begin{pmatrix}x'\\y' \end{pmatrix} &=\begin{pmatrix}\cos 60⁰ & -\sin 60⁰ \\ \sin 60⁰& \cos 60⁰ \end{pmatrix}\begin{pmatrix}x-a\\y-b \end{pmatrix}+\begin{pmatrix}a\\b \end{pmatrix} \\
                    &= \begin{pmatrix}\frac{1}{2} & -\frac{1}{2}\sqrt{3}\\ \frac{1}{2}\sqrt{3} & \frac{1}{2} \end{pmatrix} \begin{pmatrix}-2-1\\1-0 \end{pmatrix}+\begin{pmatrix}1\\0 \end{pmatrix} \\
                    &=\begin{pmatrix}\frac{1}{2} & -\frac{1}{2}\sqrt{3}\\ \frac{1}{2}\sqrt{3} & \frac{1}{2} \end{pmatrix} \begin{pmatrix}-3\\1 \end{pmatrix}+\begin{pmatrix}1\\0 \end{pmatrix} \\
                    &= \begin{pmatrix}\frac{-3}{2}  -\frac{1}{2}\sqrt{3}\\ \frac{-3}{2}\sqrt{3} + \frac{1}{2} \end{pmatrix} + \begin{pmatrix}1\\0 \end{pmatrix} \\
                    &=\begin{pmatrix}-\frac{1}{2}-\frac{1}{2}\sqrt{3}\\ -\frac{3}{2}\sqrt{3}+\frac{1}{2} \end{pmatrix}
                    \end{align}\)
                    \(\text{Sehingga } B'(-\frac{1}{2}-\frac{1}{2}\sqrt{3}, -\frac{3}{2}\sqrt{3}+\frac{1}{2} ) \)
                    <br>
                    \(\text{ * Rotasi kedua : }\theta_{2} = 30⁰ \text{ dengan pusat } (a,b)=(-1,3)\)
                    \(\begin{align}
                    \begin{pmatrix}x''\\y'' \end{pmatrix} &= \begin{pmatrix}\cos 30⁰ & -\sin 30⁰ \\ \sin 30⁰& \cos 30⁰ \end{pmatrix}\begin{pmatrix}-\frac{1}{2}-\frac{1}{2}\sqrt{3}-(-1)\\ -\frac{3}{2}\sqrt{3}+\frac{1}{2} -3 \end{pmatrix}+ \begin{pmatrix}-1\\3 \end{pmatrix} \\
                    &= \begin{pmatrix}\frac{1}{2}\sqrt{3} & -\frac{1}{2}\\ \frac{1}{2} & \frac{1}{2}\sqrt{3} \end{pmatrix}\begin{pmatrix}\frac{1}{2}-\frac{1}{2}\sqrt{3}\\ -\frac{3}{2}\sqrt{3}-\frac{5}{2} \end{pmatrix}+ \begin{pmatrix}-1\\3 \end{pmatrix} \\
                    &= \begin{pmatrix}\frac{1}{4}\sqrt{3}-\frac{3}{4}+\frac{3}{4}\sqrt{3}+\frac{5}{4}\\ \frac{1}{4}-\frac{1}{4}\sqrt{3}-\frac{9}{4}-\frac{5}{4}\sqrt{3} \end{pmatrix}+ \begin{pmatrix}-1\\3 \end{pmatrix} \\
                    &= \begin{pmatrix}\sqrt{3}+\frac{1}{2}\\-\frac{7}{4}\sqrt{3}-2 \end{pmatrix}+ \begin{pmatrix}-1\\3 \end{pmatrix}\\
                    &= \begin{pmatrix}\sqrt{3}-\frac{1}{2}\\-\frac{7}{4}\sqrt{3}+1 \end{pmatrix}
                    \end{align}\)
                    \(\text{Sehingga } B''(\sqrt{3}-\frac{1}{2},-\frac{7}{4}\sqrt{3}+1 ) \)
                    <br>
                    \(\text{Jadi, bayangan akhir titik } B\text{ adalah } B''(\sqrt{3}-\frac{1}{2},-\frac{7}{4}\sqrt{3}+1 )\)
                   <b class="text-end"> JAWABAN : C </b>
                  </div>
                </div>
                <hr />

            </ol>

{{-- COPY DARI SINI SETIAP SOAL --}}
<input type="hidden" id="materi" name="materi" value="rotasi-01">
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
    <a href="/createrotasi01" id="kirimsaja" class="btn btn-warning btn-bukti d-none" >SIMPAN JAWABAN</a>
</div>
</form>
{{-- COPY SAMPAI SINI --}}

<div id="disqus_thread"></div>

</div>
</div>
</div>
</section>
@endsection

