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
            Transformasi Geometri - 01 + Pembahasan
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

                <li>Bayangan titik \(P(7,-3) \) oleh translasi \(\begin{pmatrix}  2\\a \end{pmatrix}\) adalah \(P'(-3a,-6).\) Nilai \(a\) adalah . . . </li>
                <input type="radio" name="soal1" value="0" />
                \(-5 \)
                <br />
                <input type="radio" name="soal1" value="10" id="soal1"/>
                \(-3 \)
                <br />
                <input type="radio" name="soal1" value="0"  />
                \(-1 \)
                <br />
                <input type="radio" name="soal1" value="0" />
                \(3 \)
                <br />
                <input type="radio" name="soal1" value="0" />
                \(5 \)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="false" aria-controls="collapse1" >
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapse1">
                  <div class="card card-body overflow-auto">
                    \(P(7,-3) \overset{(2,a)}{\rightarrow} P'(-3a,-6)\)
                    Berdasarkan aturan translasi,
                    \(7+2=-3a\)
                    \(-3+a=-6\)
                    diperoleh:
                    \(\to a=\frac{9}{-3}=-3\) atau
                    \(\to a=-6+3=-3 \)
                   <b class="text-end"> JAWABAN : B </b>
                  </div>
                </div>
                <hr>
                <!--========================= soal no 2
                ===========================================================================-->
                <li>Jika garis lurus \(2x-3y+7=0 \) ditranslasi oleh \(\begin{pmatrix}-2\\3 \end{pmatrix} \), bayangannya berbentuk . . . </li>
                <input type="radio" name="soal2" value="10" id="soal2" />
                \(2x-3y+20=0\)
                <br />
                <input type="radio" name="soal2" value="0" />
                \(2x-3y+13=0\)
                <br />
                <input type="radio" name="soal2" value="0"  />
                \(2x-3y+6=0\)
                <br />
                <input type="radio" name="soal2" value="0" />
                \(3x-2y+13=0 \)
                <br />
                <input type="radio" name="soal2" value="0" />
                \(3x-2y+20=0 \)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2" >
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapse2">
                  <div class="card card-body overflow-auto">
                    \(\begin{pmatrix}x\\y\end{pmatrix} \overset{\begin{pmatrix}-2\\3 \end{pmatrix}}{\rightarrow} \begin{pmatrix} x'\\y' \end{pmatrix} \)
                    diperoleh:
                    \(x'=x-2 \to x=x'+2 \cdots (1)\)
                    \(y'=y+3 \to y=y'-3 \cdots (2)\)
                    (1) dan (2) disubstitusikan ke persamaan \(2x-3y+7=0\), diperoleh:
                    \(\begin{align} 2(x'+2)-3(y'-3)+7&=0 \\
                    2x'-4+3y'+9+7&=0\\
                    2x'-3y'+20 &=0
                    \end{align}\)
                    Jadi, bayangan berbentuk \(2x-3y+20=0\)
                    <b class="text-end">JAWABAN: A</b>
                  </div>
                </div>
                <hr />
                <!--================================================== soal no 3 ======================================================-->
                <li>Bayangan dari lingkaran \((x-3)^2 + (y+4)^2 =9 \) karena translasi \(\begin{pmatrix}2\\1 \end{pmatrix} \) adalah . . . </li>
                <input type="radio" name="soal3" value="0"  />
                \(x^2+y^2-10x+6y+9=0 \)
                <br />
                <input type="radio" name="soal3" value="0"  />
                \(x^2+y^2-10x+6y+16=0 \)
                <br />
                <input type="radio" name="soal3" value="10" id="soal3"/>
                \(x^2+y^2-10x+6y+25=0 \)
                <br />
                <input type="radio" name="soal3" value="0" />
                \(x^2+y^2-6x+10y+25=0 \)
                <br />
                <input type="radio" name="soal3" value="0" />
                \(x^2+y^2-6x+10y+16=0 \)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3" >
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapse3">
                  <div class="card card-body overflow-auto">
                    \(\begin{pmatrix}x\\y\end{pmatrix} \overset{\begin{pmatrix}2\\1 \end{pmatrix}}{\rightarrow} \begin{pmatrix} x'\\y' \end{pmatrix} \)
                    diperoleh:
                    \(x=x'-2 \cdots (1)\)
                    \(y=y'-1 \cdots (2)\)
                    (1) dan (2) disubstitusikan ke persamaan awal, diperoleh:
                    \(\begin{align} (x'-2-3)^2 + (y'+4-1)^2 &= 9 \\
                    (x'-5)^2 +(y'+3)^2 &= 9\\
                    (x')^2 + (y')^2 -10x' + 6y' +25 &=0
                    \end{align}\)
                    Jadi, bayangan berbentuk \(x^2 + y^2 -10x+6y+25=0\)
                    <b class="text-end">JAWABAN: C</b>
                  </div>
                </div>
                <hr />
                <!-- soal no no4 =================================================================================================-->
                <li>Bayangan garis \(y=2x+2\) yang direfleksikan terhadap garis \(y=x\) adalah . . . </li>
                <input type="radio" name="soal4" value="10" id="soal4"/>
                \(x-2y-2=0\)
                <br />
                <input type="radio" name="soal4" value="0" />
                \(x-2y-1=0 \)
                <br />
                <input type="radio" name="soal4" value="0" />
                \(x-2y+2=0 \)
                <br />
                <input type="radio" name="soal4" value="0"  />
                \(x-y+1=0 \)
                <br />
                <input type="radio" name="soal4" value="0" ">
                \(x-y-1=0 \)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse4" >
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapse4">
                  <div class="card card-body overflow-auto">
                    Berdasarkan aturan matriks, diperoleh:
                    \(\begin{align}
                    \begin{pmatrix}x\\y \end{pmatrix} &= \begin{pmatrix}0&1 \\ 1&0 \end{pmatrix}^{-1}\begin{pmatrix}x'\\y' \end{pmatrix} \\ &=
                    \frac{1}{0-1}\begin{pmatrix}0&-1 \\ -1&0 \end{pmatrix}\begin{pmatrix}x'\\y' \end{pmatrix} \\ \begin{pmatrix}x\\y \end{pmatrix} &= \begin{pmatrix}0&1 \\ 1&0 \end{pmatrix}\begin{pmatrix}x'\\y' \end{pmatrix}
                    \end{align}\)
                    \(x=y'\) dan \(y=x'\)
                    disubstitusikan ke persamaan \(y=2x+2 \), diperoleh:
                    \(x'=2y'+2\)
                    \(x'-2y'-2=0\)
                    Jadi, bayangannya adalah \(x-2y-2=0\)
                    <b class="text-end">JAWABAN: A</b>
                  </div>
                </div>
                <hr />
                <!-- soal no 5 ================================================================================================-->
                <li>Segitiga \(ABC\) dengan koordinat titik \(A(2,1)\), \(B(6,1)\), dan \(C(7,4)\) ditransformasikan dengan matriks transformasi \(\begin{pmatrix}3&1\\0&1 \end{pmatrix}\). Luas bangun hasil transformasi segitiga \(ABC\) sama dengan . . . satuan luas. </li>
                <input type="radio" name="soal5" value="10" id="soal5"/>
                \(18\)
                <br />
                <input type="radio" name="soal5" value="0" />
                \(24\)
                <br />
                <input type="radio" name="soal5" value="0"   />
                \(36\)
                <br />
                <input type="radio" name="soal5" value="0"/>
                \(28\)
                <br />
                <input type="radio" name="soal5" value="0" />
                \(56\)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse5" aria-expanded="false" aria-controls="collapse5" >
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapse5">
                  <div class="card card-body overflow-auto">
                    <i>CARA 1:</i> (Menentukan bayangan ABC lalu hitung luasnya)
                    \(\begin{align}
                     \begin{pmatrix}x_{A'}&x_{B'}&x_{C'} \\ y_{A'}&y_{B'}&y_{C'} \end{pmatrix} &= \begin{pmatrix}3&1\\0&1 \end{pmatrix}\begin{pmatrix}2&6&7\\1&1&4 \end{pmatrix}\\ &= \begin{pmatrix}7&19&25\\1&1&4 \end{pmatrix}
                    \end{align}\)  <br>
                    \(\begin{align}
                    \text{Luas }\bigtriangleup A'B'C' &= \frac{1}{2}\begin{vmatrix}7&1\\19&1\\25&4\\7&1 \end{vmatrix}\begin{matrix}A'\\B'\\C'\\A' \end{matrix}
                    \\&=\frac{1}{2}|7+(19)(4)+25-19-25=28|
                    \\&=\frac{1}{2}|(1-4)7+(4-1)19 |
                    \\&=\frac{1}{2}|-21+57|\\&=\frac{1}{2}.36\\&=18
                    \end{align}\)
                    <i>CARA 2</i> (Menggunakan rumus luas segitiga langsung)
                    \(\begin{align}
                    \text{Luas }\bigtriangleup A'B'C' &= \det \begin{pmatrix}3&1\\0&1 \end{pmatrix} \times \text{Luas }\bigtriangleup ABC \\
                    &=(3-0)\begin{Bmatrix}\frac{1}{2}\begin{vmatrix}2&1\\6&1\\2&4\\2&1 \end{vmatrix}\begin{matrix}A\\B\\C\\D \end{matrix} \end{Bmatrix}
                     \\&=3.\frac{1}{2}.|2+24+3-6-3-8| \\&= \frac{3}{2}|26-14 \\&= \frac{3}{2}.12\\&=18 \end{align}\)
                     \(\text{Jadi, Luas } \bigtriangleup A'B'C' = 18\)
                    <b class="text-end">JAWABAN: A</b>
                  </div>
                </div>
                <hr />
                <!-- =====SOAL NO 6======================================================================= -->
                <li>Diketahui titik \(A(3,-2\) dipetakan oleh translasi \(T=\begin{pmatrix}
                1\\-2  \end{pmatrix}  \), kemudian dilanjutkan oleh rotasi dengan pusat\(O(0,0)\) sejauh \(90^{\circ}\). Koordinat titik hasil peta \(A\) adalah . . . </li>
                <input type="radio" name="soal6" value="10" id="soal6" />
                \((4,4) \)
                <br />
                <input type="radio" name="soal6" value="0" />
                \((-4,4) \)
                <br />
                <input type="radio" name="soal6" value="0" />
                \((4,-4) \)
                <br />
                <input type="radio" name="soal6" value="0" />
                \((0,-3) \)
                <br />
                <input type="radio" name="soal6" value="0" />
                \((-3,0) \)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse6" aria-expanded="false" aria-controls="collapse6" >
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapse6">
                  <div class="card card-body overflow-auto">
                    Menggunakan konsep matriks:
                    \(\begin{align}
                    \begin{pmatrix}x'\\y' \end{pmatrix} &= \begin{pmatrix}0&-1\\1&0 \end{pmatrix}\begin{Bmatrix}\begin{pmatrix}3\\-2 \end{pmatrix}+\begin{pmatrix}1\\-2 \end{pmatrix} \end{Bmatrix} \\ &=\begin{pmatrix}0&-1\\1&0 \end{pmatrix} \begin{pmatrix}4\\-4 \end{pmatrix} \\ \begin{pmatrix}x'\\y' \end{pmatrix} &=\begin{pmatrix}4\\4 \end{pmatrix}
                    \end{align}\)

                    Jadi, koordinat hasil peta titik \(A\) adalah \((x',y')=(4,4) \).
                    <b class="text-end">JAWABAN: A</b>
                  </div>
                </div>
                <hr />
                <!-- =====SOAL NO 7======================================================================= -->
                <li>Diketahui titik \(A(3,-4) \) dicerminkan terhadap sumbu-X, dilanjutkan dengan pencerminan terhadap garis \(y=x\), dan dilanjutkan dengan pencerminan terhadap garis \(x=3\). Koordinat hasil peta titik \(A\) adalah . . . </li>
                <input type="radio" name="soal7" value="0" />
                \((-3,2) \)
                <br />
                <input type="radio" name="soal7" value="0" />
                \((-2,3) \)
                <br />
                <input type="radio" name="soal7" value="0" />
                \((-2,-3) \)
                <br />
                <input type="radio" name="soal7" value="0"  />
                \((3,2) \)
                <br />
                <input type="radio" name="soal7" value="10" id="soal7"/>
                \((2,3) \)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse7" aria-expanded="false" aria-controls="collapse7" >
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapse7">
                  <div class="card card-body overflow-auto">
                    Menggunakan konsep matriks:
                    \(\begin{align}
                    \begin{pmatrix}x'\\y' \end{pmatrix} &= M_{x=3}. M_{y=x}. M_{sbX}. \begin{pmatrix}3\\-4 \end{pmatrix} \\
                    &= \begin{pmatrix}=1&0\\0&1 \end{pmatrix} \begin{Bmatrix}\begin{pmatrix} 0&1\\1&0\end{pmatrix}\begin{pmatrix}1&0\\0&-1 \end{pmatrix}\begin{pmatrix}3\\-4 \end{pmatrix} \end{Bmatrix}+\begin{pmatrix}2.3\\0 \end{pmatrix}\\
                    &=\begin{pmatrix}-1&0\\0&1 \end{pmatrix}\begin{Bmatrix}\begin{pmatrix} 0&1\\1&0\end{pmatrix}\begin{pmatrix}3\\4 \end{pmatrix} \end{Bmatrix}+\begin{pmatrix}6\\0 \end{pmatrix}\\
                    &=\begin{pmatrix}-1&0\\0&1 \end{pmatrix}\begin{pmatrix}4\\3 \end{pmatrix}+\begin{pmatrix}6\\0 \end{pmatrix}\\
                    &=\begin{pmatrix}-4+0+6\\0+3+0 \end{pmatrix}\\
                    \begin{pmatrix}x'\\y' \end{pmatrix} &=\begin{pmatrix}2\\3 \end{pmatrix}
                    \end{align}\)
                     \(\text{Jadi, koordinat hasil peta titik }A \text{ adalah } (2,3). \)
                    <b class="text-end">JAWABAN: E</b>
                  </div>
                </div>
                <hr />
                <!-- =====SOAL NO 8======================================================================= -->
                <li>Diketahui \(M\) adalah pencerminan terhadap garis \(y=-x\) dan \(T\) adalah transformasi yang dinyatakan oleh matriks \(\begin{pmatrix} 2&3\\0&-1\end{pmatrix}\). Koordinat bayangan titik \(A(2,-8) \) jika ditransformasi oleh \(M\) dilanjutkan oleh \(T\) adalah . . .  </li>
                <input type="radio" name="soal8" value="0" />
                \((-10,2) \)
                <br />
                <input type="radio" name="soal8" value="0" />
                \((-2,-10) \)
                <br />
                <input type="radio" name="soal8" value="10" id="soal8" />
                \((10,2) \)
                <br />
                <input type="radio" name="soal8" value="0"  />
                \((-10,-2) \)
                <br />
                <input type="radio" name="soal8" value="0" />
                \((2,10) \)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse8" aria-expanded="false" aria-controls="collapse8" >
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapse8">
                  <div class="card card-body overflow-auto">
                    Berdasarkan aturan matriks, diperoleh:
                    \(\begin{align}
                    \begin{pmatrix}x'\\y' \end{pmatrix} &= \begin{pmatrix}2&3\\0&-1 \end{pmatrix}\begin{pmatrix}0&-1\\-1&0 \end{pmatrix}\begin{pmatrix}2\\-8 \end{pmatrix}\\
                    &=\begin{pmatrix}-3&-2\\1&0 \end{pmatrix}\begin{pmatrix}2\\-8 \end{pmatrix} \\ &= \begin{pmatrix}-6+16\\2+0 \end{pmatrix} \\
                    &=\begin{pmatrix}10\\2 \end{pmatrix}
                    \end{align}\)
                    \(\text{Jadi, koordinat bayangan titik A adalah }(10,2) \)
                    <b class="text-end">JAWABAN: C</b>
                  </div>
                </div>
                <hr />
                <!-- =====SOAL NO 9======================================================================= -->
                <li>Segitiga \(ABC\) dengan koordinat titik \(A(-1,2)\), \(B(6,-2) \), dan \(C(5,2)\). Segitiga tersebut dirotasi sejauh \(180^{\circ} \) dengan pusat \((2,-1)\). Koordinat bayangan segitiga \(ABC\) adalah . . . </li>
                <input type="radio" name="soal9" value="0" />
                \(A'(-4,5)\), \(B'(-2,0)\), dan \(C'(-1,-4)\)
                <br />
                <input type="radio" name="soal9" value="0" />
                \(A'(5,-4)\), \(B'(2,0)\), dan \(C'(-1,-4)\)
                <br />
                <input type="radio" name="soal9" value="10" id="soal9" />
                \(A'(5,-4)\), \(B'(-2,0)\), dan \(C'(-1,-4)\)
                <br />
                <input type="radio" name="soal9" value="0" />
                \(A'(5,4)\), \(B'(0,-2)\), dan \(C'(-4,-1)\)
                <br />
                <input type="radio" name="soal9" value="0" />
                \(A'(5,4)\), \(B'(2,0)\), dan \(C'(4,-1)\)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse9" aria-expanded="false" aria-controls="collapse9" >
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapse9">
                  <div class="card card-body overflow-auto">
                    Berdasarkan aturan matriks, diperoleh:
                    \(\begin{align}
                    \begin{pmatrix}x_{A'}&x_{B'}&x_{C'}\\y_{A'}&y_{B'}&y_{C'} \end{pmatrix} &= \begin{pmatrix}-1&0\\0&-1 \end{pmatrix}\begin{pmatrix}-1-2&6-2&5-2\\2+1&-2+1&2+1 \end{pmatrix}+\begin{pmatrix}2&2&2\\-1&-1&-1 \end{pmatrix}\\
                    &=\begin{pmatrix}-1&0\\0&-1 \end{pmatrix}\begin{pmatrix}-3&4&3\\3&-1&3 \end{pmatrix}+\begin{pmatrix}2\\-1 \end{pmatrix} \\ &= \begin{pmatrix}3&-4&-3\\-3&1&-3 \end{pmatrix}+\begin{pmatrix}2&2&2\\-1&-1&-1 \end{pmatrix} \\
                    &=\begin{pmatrix}5&-2&-1\\-4&0&-4 \end{pmatrix}
                    \end{align}\)
                    \(\text{Jadi, koordinat bayangan } \bigtriangleup ABC \text{ adalah } A'(5,-4), B'(-2,0), \text{ dan } C'(-1,-4). \)
                    <b class="text-end">JAWABAN: C</b>
                  </div>
                </div>
                <hr />
                <!-- =====SOAL NO 10======================================================================= -->
                <li>Diketahui titik \(A(3,-4)\) didilatasi terhadap pusat \((-2,3)\) dengan skala \(4\) dilanjutkan dengan transformasi oleh matriks \(\begin{pmatrix} 2&3\\0&-1\end{pmatrix}\) kemudian dilanjutkan dengan transformasi oleh matriks \(\begin{pmatrix}-1&0\\0&1 \end{pmatrix} \). Koordinat titik hasil peta \(A\) adalah . . . </li>
                <input type="radio" name="soal10" value="0"  />
                \((-3,12)\)
                <br />
                <input type="radio" name="soal10" value="0" />
                \((-12,3)\)
                <br />
                <input type="radio" name="soal10" value="0" />
                \((-25,30) \)
                <br />
                <input type="radio" name="soal10" value="10" id="soal10"/>
                \((39,25) \)
                <br />
                <input type="radio" name="soal10" value="0" />
                \((52,39) \)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse10" aria-expanded="false" aria-controls="collapse10" >
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapse10">
                  <div class="card card-body overflow-auto">
                    Berdasarkan aturan matriks, diperoleh:
                    \(\begin{align}
                    \begin{pmatrix}x'\\y' \end{pmatrix} &= \begin{Bmatrix}\begin{pmatrix}-1&0\\0&1 \end{pmatrix}\begin{pmatrix}2&3\\0&-1 \end{pmatrix} \end{Bmatrix}
                    \begin{bmatrix}\begin{pmatrix}4&0\\0&4 \end{pmatrix}\begin{pmatrix}3+2\\-4-3 \end{pmatrix}+\begin{pmatrix}-2\\3 \end{pmatrix} \end{bmatrix}
                    \\ &= \begin{pmatrix}-2&-3\\0&-1 \end{pmatrix}\begin{pmatrix}20-2\\-28+3 \end{pmatrix}\\ &= \begin{pmatrix}-2&-3 \\ 0&-1 \end{pmatrix}\begin{pmatrix}18\\-25 \end{pmatrix} \\ &= \begin{pmatrix}-36+75 \\ 0+25 \end{pmatrix} \\ \begin{pmatrix}x'\\y' \end{pmatrix} &= \begin{pmatrix}39\\25 \end{pmatrix}
                    \end{align}\)
                    \(\text{Jadi, koordinat bayangan titik } A \text{ adalah } (39,25). \)
                    <b class="text-end">JAWABAN: D</b>
                  </div>
                </div>
                <hr />

                <li>Bayangan garis \(x-2y=5 \) bila ditransformasikan dengan matriks transformasi \(\begin{pmatrix}3&5\\1&2 \end{pmatrix}\) dilanjut dengan pencerminan terhadap sumbu-X adalah . . . </li>
                <input type="radio" name="soal11" value="0"  />
                \(11x+4y=5 \)
                <br />
                <input type="radio" name="soal11" value="0" />
                \(11x+2y=5 \)
                <br />
                <input type="radio" name="soal11" value="10" id="soal11"/>
                \(4x+11y=5 \)
                <br />
                <input type="radio" name="soal11" value="0" />
                \(3x+5y=5 \)
                <br />
                <input type="radio" name="soal11" value="0" />
                \(3x+11y=5 \)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse11" aria-expanded="false" aria-controls="collapse11" >
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapse11">
                  <div class="card card-body overflow-auto">
                    \(A(x,y) \overset{\begin{pmatrix}3&5\\1&2 \end{pmatrix}}{\to} () \overset{\begin{pmatrix}1&0\\0&-1 \end{pmatrix}}{\to} A'(x',y') \)
                    \(\begin{align}
                    \begin{pmatrix}x\\y \end{pmatrix} &= \begin{bmatrix}\begin{pmatrix}1&0\\0&-1 \end{pmatrix}\begin{pmatrix}3&5\\1&2 \end{pmatrix} \end{bmatrix}^{-1} \begin{pmatrix}x'\\y' \end{pmatrix} \\
                    \begin{pmatrix}x\\y \end{pmatrix} &=\begin{pmatrix}3&5\\1&2 \end{pmatrix}^{-1}\begin{pmatrix}x'\\y' \end{pmatrix} \\ &= \frac{1}{-1}\begin{pmatrix} -2&-5 \\ 1&3\end{pmatrix} \begin{pmatrix}x'\\y' \end{pmatrix} \\
                    \begin{pmatrix}x\\y \end{pmatrix} &=\begin{pmatrix}2x'+5y'\\-x'-3y' \end{pmatrix}
                    \end{align}\)
                    \(\text{Bayangan garis } x-2y=5 \text{ adalah }\)
                    \((2x'+y5')-2(-x'-3y')=5 \Leftrightarrow 4x'+11y'=5  \) atau
                    \(4x+11y=5 \)

                    <b class="text-end">JAWABAN: C</b>
                  </div>
                </div>
                <hr />

                <li>Persamaan bayangan garis \(y=2x-3\) yang direfleksikan terhadap garis \(y=-x\), dilanjutkan refleksi terhadap garis \(y=x\) adalah . . . </li>
                <input type="radio" name="soal12" value="0" />
                \(y+2x-3=0 \)
                <br />
                <input type="radio" name="soal12" value="10" id="soal12" />
                \(y-2x-3=0 \)
                <br />
                <input type="radio" name="soal12" value="0"  />
                \(2y+x-3=0 \)
                <br />
                <input type="radio" name="soal12" value="0" />
                \(2y-x-3=0 \)
                <br />
                <input type="radio" name="soal12" value="0" />
                \(2y+x+3=0 \)<br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse12" aria-expanded="false" aria-controls="collapse12" >
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapse12">
                  <div class="card card-body overflow-auto">
                    \((x,y)\overset{y=-x}{\to} (-y,-x) \overset{y=x}{\to}(-x,-y) \)
                    Diperoleh \((-x,-y)=(x',y')\)
                    maka:
                    \(\left\{\begin{matrix}
                    x=-x'\\
                    y=-y'
                    \end{matrix} \right. \)
                    Bayangan garis \(y=2x-3\) adalah
                    \(-y'=2(-x')-3 \Leftrightarrow y'-2x'-3=0 \) atau \(y-2x-3=0\)
                    <b class="text-end">JAWABAN: B</b>
                  </div>
                </div>
                <hr />

                <li>Persamaan bayangan lingkaran \(x^2 + y^2 = 4 \) jika dicerminkan terhadap garis \(x=2\) dilanjutkan dengan translasi \(\begin{pmatrix}-3\\4 \end{pmatrix}\) adalah . . . </li>
                <input type="radio" name="soal13" value="10" id="soal13" />
                \(x^2 +y^2-2x-8y+13=0 \)
                <br />
                <input type="radio" name="soal13" value="0" />
                \(x^2 +y^2+2x-8y+13=0 \)
                <br />
                <input type="radio" name="soal13" value="0" />
                \(x^2 +y^2-2x+8y+13=0 \)
                <br />
                <input type="radio" name="soal13" value="0" />
                \(x^2 +y^2+2x+8y+13=0 \)
                <br />
                <input type="radio" name="soal13" value="0" />
                \(x^2 +y^2+8x-2y+13=0 \)
                <br />
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse13" aria-expanded="false" aria-controls="collapse13" >
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapse13">
                  <div class="card card-body overflow-auto">
                    \(A(x,y)\overset{x=2}{\to} A'(4-x,y) \overset{T\begin{pmatrix}-3\\4 \end{pmatrix}}{\to}A''(1-x,y+4) \)
                    \(\begin{pmatrix}1-x\\y+4 \end{pmatrix}=\begin{pmatrix}x''\\y'' \end{pmatrix} \Rightarrow \left\{\begin{matrix}
                    x=1-x''\\
                    y=y''-4
                    \end{matrix} \right.\)
                    Bayangan dari \(x^2 + y^2 = 4\) adalah
                    \(\begin{align}
                    (1-x'')^2+(y''-4)^2 &= 4 \\
                    (x'')^2-2x''+1+(y'')^2-8y''+16 &= 4 \\
                    (x'')^2 + (y'')^2 - 2x''-8y''+13 &=0 \\
                    x^2 +y^2-2x-8y+13 &=0
                    \end{align}\)
                    <b class="text-end">JAWABAN: A</b>
                  </div>
                </div>
                <hr />

                <li>Bayangan kurva \(y=x^2-x+3 \) yang ditransformasikan oleh matriks \(\begin{pmatrix}0&-1\\1&0 \end{pmatrix}\) dilanjutkan oleh matriks \(\begin{pmatrix} -1&0\\0&1\end{pmatrix} \) adalah . . . </li>
                <input type="radio" name="soal14" value="0"  />
                \(y=x^2+x+3 \)
                <br />
                <input type="radio" name="soal14" value="0" />
                \(y=-x^2+x+3 \)
                <br />
                <input type="radio" name="soal14" value="10" id="soal14"/>
                \(x=y^2-y+3 \)
                <br />
                <input type="radio" name="soal14" value="0" />
                \(x=y^2+y+3 \)
                <br />
                <input type="radio" name="soal14" value="0" />
                \(x=-y^2+y+3 \)
                <br />
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse14" aria-expanded="false" aria-controls="collapse14" >
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapse14">
                  <div class="card card-body overflow-auto">
                    \(A(x,y)\overset{\begin{pmatrix}0&-1\\1&0 \end{pmatrix}}{\to} () \overset{\begin{pmatrix} -1&0\\0&1\end{pmatrix}}{\to}A'(x',y') \)
                    \(\begin{align}
                    \begin{pmatrix}x\\y \end{pmatrix} &= \begin{bmatrix}\begin{pmatrix} -1&0\\0&1\end{pmatrix}\begin{pmatrix}0&-1\\1&0 \end{pmatrix} \end{bmatrix}^{-1} \begin{pmatrix}x'\\y' \end{pmatrix} \\ &=
                    \begin{pmatrix}0&1\\1&0 \end{pmatrix}^{-1}\begin{pmatrix}x'\\y' \end{pmatrix} \\ \begin{pmatrix}x\\y \end{pmatrix} &= \frac{1}{-1}\begin{pmatrix}0&-1\\-1&0 \end{pmatrix}\begin{pmatrix}x'\\y' \end{pmatrix} \\
                    &= \begin{pmatrix}0&1\\1&0 \end{pmatrix} \begin{pmatrix}x'\\y' \end{pmatrix} \\ &=\begin{pmatrix}y'\\x' \end{pmatrix}
                    \end{align}\)
                    Bayangan kurva adalah \(x=y^2-y+3\)
                    <b class="text-end">JAWABAN: C</b>
                  </div>
                </div>
                <hr />

                <li>Bayangan kurva \(y= \sin x \) karena direfleksikan terhadap sumbu-X dilanjutkan dengan dilatasi berpusat di \(Q(0,0) \) dan berskala \(\frac{1}{2} \) mempunyai persamaan . . . </li>
                <input type="radio" name="soal15" value="0" />
                \(y= - \sin 2x\)
                <br />
                <input type="radio" name="soal15" value="0" />
                \(y=- \cos 2x \)
                <br />
                <input type="radio" name="soal15" value="10" id="soal15" />
                \(y=- \sin x \cos x \)
                <br />
                <input type="radio" name="soal15" value="0" />
                \(y= \sin x \cos x \)
                <br />
                <input type="radio" name="soal15" value="0" />
                \(y=\sin 2x \)
                <br />
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse15" aria-expanded="false" aria-controls="collapse15" >
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapse15">
                  <div class="card card-body overflow-auto">
                    Berdasarkan konsep matriks, diperoleh:
                    \(\begin{align}
                    \begin{pmatrix}x\\y \end{pmatrix} &=  \begin{bmatrix}\begin{pmatrix}\frac{1}{2}&0\\0&\frac{1}{2} \end{pmatrix}\begin{pmatrix}1&0\\0&-1 \end{pmatrix} \end{bmatrix}^{-1} \begin{pmatrix}x'\\y' \end{pmatrix} \\ &=
                    \begin{pmatrix}\frac{1}{2}&0\\0&-\frac{1}{2} \end{pmatrix}^{-1}\begin{pmatrix} x'\\y'\end{pmatrix} \\&=
                    -4\begin{pmatrix}-\frac{1}{2}&0\\0&\frac{1}{2} \end{pmatrix}\begin{pmatrix}x'\\y' \end{pmatrix}
                    \end{align}\)
                    \(\begin{pmatrix}x\\y \end{pmatrix}=\begin{pmatrix}2x'\\-2y' \end{pmatrix}\Rightarrow  \left\{\begin{matrix}
                    x=2x'\\
                    y=-2y'
                    \end{matrix} \right.\)
                    Substitusikan ke persamaan \(y= \sin x,\) sehingga:
                    \(\begin{align}
                    -2y'=\sin 2x' \Rightarrow y' &= -\frac{1}{2} \sin 2x' \\ &= -\frac{1}{2}(2 \sin x' \cos x') \\ y' &= - \sin x' \cos x'
                    \end{align}\)
                    Jadi, bayangan kurva \(y = \sin x\) adalah \(y=- \sin x \cos x\)
                    <b class="text-end">JAWABAN: C</b>
                  </div>
                </div>
                <hr />

            </ol>

{{-- COPY DARI SINI SETIAP SOAL --}}
<input type="hidden" id="materi" name="materi" value="transgeo-01">
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
    <a href="/createtransgeo01" id="kirimsaja" class="btn btn-warning btn-bukti d-none" >SIMPAN JAWABAN</a>
</div>
</form>
{{-- COPY SAMPAI SINI --}}

<div id="disqus_thread"></div>

</div>
</div>
</div>
</section>
@endsection

