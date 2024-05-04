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
            Turunan Fungsi ALjabar - Paket 01 + Pembahasan
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
                <!--=======================  soal no 1 ===================================-->
                <li>Diketahui \(f(x)=5x^3-3x^2-5x+3\) dan \(f'(x)\) adalah turunan pertama dari \(f(x)\). Nilai \(f'(2)=...\) </li>
                <div class="row">
                    <div class="col-md">
                        <input type="radio" name="soal1" value="0"/>
                        \(\displaystyle 20 \)
                    <br />
                        <input type="radio" name="soal1" value="0" />
                        \(\displaystyle 21 \)
                    <br />
                        <input type="radio" name="soal1" value="0"  />
                        \(\displaystyle 40 \)
                    <br />
                    </div>
                    <div class="col-md">
                        <input type="radio" name="soal1" value="10" />
                        \(\displaystyle 43 \)
                    <br />
                        <input type="radio" name="soal1" value="0"/>
                        \(\displaystyle 46 \)
                    <br>
                    </div>
                </div>
                    <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal1" aria-expanded="false" aria-controls="collapsesoal1" >
                    Alternatif Penyelesaian:
                    </button>
                    <div class="collapse" id="collapsesoal1">
                      <div class="card card-body overflow-auto">
                        \(\displaystyle \begin{align}
                        f(x) &= 5x^3-3x^2-5x+3 \\
                        f'(x) &= 15x^2-6x-5 \\
                        f'(2) &= 15(2)^2-6(2)-5 \\
                        &= 60-12-5 \\
                        &= 43
                        \end{align}\)
                        <br>

                       <b class="text-end text-danger fw-bold"> <h3>JAWABAN : D</h3></b>
                      </div>
                    </div>
                    <hr />
    <!-- SOAL end -->
    <!-- SOAL 02 -->
                <li>DIketahui \(\displaystyle f(x)=\frac{2x-5}{3x-4} \) dan \(f'(x)\) adalah turunan pertama dari \(f(x)\). Nilai \(f'(1)=...\) </li>
                <div class="row">
                    <div class="col-md">
                        <input type="radio" name="soal2" value="0"/>
                        \(\displaystyle -22 \)
                    <br />
                        <input type="radio" name="soal2" value="0" />
                        \(\displaystyle -12 \)
                    <br />
                        <input type="radio" name="soal2" value="0"  />
                        \(\displaystyle -7 \)
                    <br />
                    </div>
                    <div class="col-md">
                        <input type="radio" name="soal2" value="10" />
                        \(\displaystyle 7 \)
                    <br />
                        <input type="radio" name="soal2" value="0"/>
                        \(\displaystyle 22 \)
                    <br>
                    </div>
                </div>
                    <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal2" aria-expanded="false" aria-controls="collapsesoal2" >
                    Alternatif Penyelesaian:
                    </button>
                    <div class="collapse" id="collapsesoal2">
                      <div class="card card-body overflow-auto">
                        <p>Misalkan \(\displaystyle f(x)=\frac{u}{v}\)</p>
                        <div class="row">
                            <div class="col-sm-3">\(u=2x-5 \) <br> \(u'=2 \) </div>
                            <div class="col-sm-3">\(v=3x-4 \) <br> \(v'=3 \)  </div>
                        </div>
                        <p>\(\displaystyle \begin{align}
                            f'(x) &= \frac{u'v-uv'}{v^2} \\
                            f'(x) &= \frac{2(3x-4)-3(2x-5)}{(3x-4)^2} \\
                            f'(1) &= \frac{2(3(1)-4)-3(2(1)-5)}{(3(1)-4)^2}  \\
                            f'(1) &= \frac{2(-1)-3(-3)}{(-1)^2} \\
                            f'(1) &= \frac{-2+9}{1} \\
                            f'(1) &= 7
                            \end{align}\)</p>
                        <br>

                        <b class="text-end text-danger fw-bold"> <h3>JAWABAN : D</h3></b>
                      </div>
                    </div>
                    <hr />
    <!-- SOAL end -->
    <!-- SOAL 03 -->
                <li>Turunan pertama dari \(y=2x^3-4x^2+2\) adalah \(y'=...\) </li>
                <div class="row">
                    <div class="col-md">
                        <input type="radio" name="soal3" value="0"/>
                        \(\displaystyle 6x^2-8x+2 \)
                    <br />
                        <input type="radio" name="soal3" value="0" />
                        \(\displaystyle 6x^2+8x-2 \)
                    <br />
                        <input type="radio" name="soal3" value="0"  />
                        \(\displaystyle 6x^3-8x^2 \)
                    <br />
                    </div>
                    <div class="col-md">
                        <input type="radio" name="soal3" value="10" />
                        \(\displaystyle 6x^2-8x \)
                    <br />
                        <input type="radio" name="soal3" value="0"/>
                        \(\displaystyle 6x^2+8x \)
                    <br>
                    </div>
                </div>
                    <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal3" aria-expanded="false" aria-controls="collapsesoal3" >
                    Alternatif Penyelesaian:
                    </button>
                    <div class="collapse" id="collapsesoal3">
                      <div class="card card-body overflow-auto">
                        \(\displaystyle \begin{align}
                        y&=2x^3-4x^2+2 \\
                        y ' &= 6x^2-8x \\
                        \end{align}\)
                        <br>

                        <b class="text-end text-danger fw-bold"> <h3>JAWABAN : D</h3></b>
                      </div>
                    </div>
                    <hr />
    <!-- SOAL end -->
    <!-- SOAL 04 -->
                <li>Turunan pertama dari \(f(x)=(3x^2-7)^4 \) adalah \(f'(x)=...\) </li>
                <div class="row">
                    <div class="col-md">
                        <input type="radio" name="soal4" value="0"/>
                        \(\displaystyle 6x(3x^2-7) \)
                    <br />
                        <input type="radio" name="soal4" value="0" />
                        \(\displaystyle 12x(3x^2-7) \)
                    <br />
                        <input type="radio" name="soal4" value="10"  />
                        \(\displaystyle 24x(3x^2-7)^3 \)
                    <br />
                    </div>
                    <div class="col-md">
                        <input type="radio" name="soal4" value="0" />
                        \(\displaystyle 36x(3x^2-7)^3 \)
                    <br />
                        <input type="radio" name="soal4" value="0"/>
                        \(\displaystyle 48x(3x^2-7)^3 \)
                    <br>
                    </div>
                </div>
                    <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal4" aria-expanded="false" aria-controls="collapsesoal4" >
                    Alternatif Penyelesaian:
                    </button>
                    <div class="collapse" id="collapsesoal4">
                      <div class="card card-body overflow-auto">
                        <p>Misal \(u=3x^2-7 \) maka \(u'=6x\)</p>
                        \(\displaystyle \begin{align}
                            f(x) &= u^4 \\
                            f'(x) &= 4 u^{4-1} (u') \\
                            f'(x) &= 4 u^{3} (u') \\
                            f'(x) &= 4(3x^2-7)^3 (6x) \\
                            f'(x) &= 24x(3x^2-7)^3
                            \end{align}\)
                        <br>

                        <b class="text-end text-danger fw-bold"> <h3>JAWABAN : C</h3></b>
                      </div>
                    </div>
                    <hr />
    <!-- SOAL end -->
    <!-- SOAL 05 -->
                <li>Turunan pertama dari \(f(x)=(2x^2-3x+1)^4\) adalah \(f'(x)=...\) </li>
                <div class="row">
                    <div class="col-sm">
                        <input type="radio" name="soal5" value="0"/>
                        \(\displaystyle (2x^2-3x+1)^3 \)
                    <br />
                        <input type="radio" name="soal5" value="0" />
                        \(\displaystyle 4x(2x^2-3x+1)^3 \)
                    <br />
                        <input type="radio" name="soal5" value="0"  />
                        \(\displaystyle (16x-3)(2x^2-3x+1)^3 \)
                    <br />
                    </div>
                    <div class="col-sm">
                        <input type="radio" name="soal5" value="0" />
                        \(\displaystyle (4x-3)(2x^2-3x+1)^3 \)
                    <br />
                        <input type="radio" name="soal5" value="10"/>
                        \(\displaystyle (16x-12)(2x^2-3x+1)^3 \)
                    <br>
                    </div>
                </div>
                    <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal5" aria-expanded="false" aria-controls="collapsesoal5" >
                    Alternatif Penyelesaian:
                    </button>
                    <div class="collapse" id="collapsesoal5">
                      <div class="card card-body overflow-auto">
                        <p>Misalkan \(2x^2-3x+1=u\) sehingga \(u'=4x-3\)</p>
                        \(\displaystyle \begin{align}
    f(x) &= (u)^4 \\
    f'(x) &= 4(u)^{4-1}(u') \\
     &= 4(2x^2-3x+1)^3(4x-3) \\
          &= (16x-12)(2x^2-3x+1)^3
    \end{align}\)
                        <br>

                        <b class="text-end text-danger fw-bold"> <h3>JAWABAN : E</h3></b>
                      </div>
                    </div>
                    <hr />
    <!-- SOAL end -->
    <!-- SOAL 06 -->
                <li>Diketahui \(h(x)=(2x-1)(1-4x)^5 \). Turunan pertama fungsi \(h(x)\) adalah \(h'(x)=...\) </li>
                <div class="row">
                    <div class="col-sm">
                        <input type="radio" name="soal6" value="0"/>
                        \(\displaystyle (11-24x)(1-4x)^4 \)
                    <br />
                        <input type="radio" name="soal6" value="0" />
                        \(\displaystyle (11+24x)(1-4x)^4 \)
                    <br />
                        <input type="radio" name="soal6" value="0"  />
                        \(\displaystyle (11-48x)(1-4x)^4 \)
                    <br />
                    </div>
                    <div class="col-sm">
                        <input type="radio" name="soal6" value="10" />
                        \(\displaystyle (22-48x)(1-4x)^4 \)
                    <br />
                        <input type="radio" name="soal6" value="0"/>
                        \(\displaystyle (22+48x)(1-4x)^4 \)
                    <br>
                    </div>
                </div>
                    <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal6" aria-expanded="false" aria-controls="collapsesoal6" >
                    Alternatif Penyelesaian:
                    </button>
                    <div class="collapse" id="collapsesoal6">
                      <div class="card card-body overflow-auto">
                        Misalkan
                        <div class="row">
                            <div class="col-sm-3">\(u=2x-1\) <br> \(u'=2\) </div>
                            <div class="col">\(v=(1-4x)^5\) <br> \(\begin{align} v' &= 5(1-4x)^{5-1}(-4) \\ &= (-20)(1-4x)^4 \end{align} \) </div>
                        </div>
                        <p>
                            \(\displaystyle \begin{align}
                            f(x) &= u.v \\
                            f'(x) &= u'v+uv' \\
                             &= 2(1-4x)^5 +(2x-1)(-20)(1-4x)^4 \\
                                &= 2(1-4x)^5 +(-40x+20)(1-4x)^4 \\
                                &=  \left(2(1-4x)-40x+20 \right)(1-4x)^4 \\
                                &= (2-8x-48x+20)(1-4x)^4 \\
                                &= (22-48x)(1-4x)^4
                            \end{align}\)
                        </p>
                        <br>

                        <b class="text-end text-danger fw-bold"> <h3>JAWABAN : D</h3></b>
                      </div>
                    </div>
                    <hr />
    <!-- SOAL end -->
    <!-- SOAL 07 -->
                <li>Jika \(f(x)=\sqrt{x}+x \), laju perubahan fungsi \(f(x)\) di \(x=4\) adalah . . . </li>
                <div class="row">
                    <div class="col-sm">
                        <input type="radio" name="soal7" value="0"/>
                        \(\displaystyle \frac{3}{2} \)
                    <br />
                        <input type="radio" name="soal7" value="0" />
                        \(\displaystyle \frac{4}{3} \)
                    <br />
                        <input type="radio" name="soal7" value="10"  />
                        \(\displaystyle \frac{5}{4} \)
                    <br />
                    </div>
                    <div class="col-sm">
                        <input type="radio" name="soal7" value="0" />
                        \(\displaystyle \frac{6}{5} \)
                    <br />
                        <input type="radio" name="soal7" value="0"/>
                        \(\displaystyle \frac{7}{6} \)
                    <br>
                    </div>
                </div>
                    <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal7" aria-expanded="false" aria-controls="collapsesoal7" >
                    Alternatif Penyelesaian:
                    </button>
                    <div class="collapse" id="collapsesoal7">
                      <div class="card card-body overflow-auto">
                        <p>\(\displaystyle \begin{align}
                            f(x) &= \sqrt{x}+x \\
                            f(x) &= (x)^{\frac{1}{2}}+x \\
                            f'(x) &= \frac{1}{2}x^{(\frac{1}{2}-1)}+1 \\
                            &= \frac{1}{2}x^{-\frac{1}{2}}+1 \\
                            \text{maka} \\
                            f'(4)  &= \frac{1}{2}4^{-\frac{1}{2}} + 1 \\
                            f'(4)  &= \frac{1}{2} \frac{1} {\sqrt{4}}+1 \\
                            f'(4)  &= \frac{1}{2} \frac{1}{2}+1 \\
                            f'(4)  &= \frac{1}{4} +1 \\
                            f'(4)  &= \frac{5}{4}\\
                            \end{align}\)</p>

                            <b class="text-end text-danger fw-bold"> <h3>JAWABAN : C</h3></b>
                      </div>
                    </div>
                    <hr />
    <!-- SOAL end -->
    <!-- SOAL 08 -->
                <li>Jika \(f(x)=\sqrt[3]{(3x^2+3x+2)^2} \), nilai \(f'(1)=...\) </li>
                <div class="row">
                    <div class="col-sm">
                        <input type="radio" name="soal8" value="10"/>
                        \(\displaystyle 3 \)
                    <br />
                        <input type="radio" name="soal8" value="0" />
                        \(\displaystyle 2 \)
                    <br />
                        <input type="radio" name="soal8" value="0"  />
                        \(\displaystyle 1 \)
                    <br />
                    </div>
                    <div class="col-sm">
                        <input type="radio" name="soal8" value="0" />
                        \(\displaystyle -1 \)
                    <br />
                        <input type="radio" name="soal8" value="0"/>
                        \(\displaystyle -3 \)
                    <br>
                    </div>
                </div>
                    <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal8" aria-expanded="false" aria-controls="collapsesoal8" >
                    Alternatif Penyelesaian:
                    </button>
                    <div class="collapse" id="collapsesoal8">
                      <div class="card card-body overflow-auto">
                        \(\displaystyle \begin{align}
                            f(x) &= \sqrt[3]{(3x^2+3x+2)^2} \\
                            f(x) &= (3x^2+3x+2)^{\frac{2}{3}} \\ \\
                            f'(x) &= \frac{2}{3}(3x^2+3x+2)^{\frac{2}{3}-1}(6x+3) \\
                                &= \frac{2}{3}(6x+3)(3x^2+3x+2)^{-\frac{1}{3}} \\
                                &= \frac{2}{3}(6x+3)\left(\frac{1}{\sqrt[3]{3x^2+3x+2}}\right) \\  \\
                              f'(1)  &= \frac{2}{3}(6(1)+3)\left(\frac{1}{\sqrt[3]{3(1)^2+3(1)+2}}\right) \\
                              &= \frac{2}{3}(9)\left(\frac{1}{\sqrt[3]{8}}\right) \\
                              &= 6(\frac{1}{2}) \\
                              &= 3 \\
                            \end{align}\)
                        <b class="text-end text-danger fw-bold"> <h3>JAWABAN : A</h3></b>
                      </div>
                    </div>
                    <hr />
    <!-- SOAL end -->
    <!-- SOAL 09 -->
                <li>Jika \(f(x+1)=3x^2+5x+7 \) dan \(f'(x-1)=-x^2\), nilai \(x\) yang memenuhi adalah . . . </li>
                <div class="row">
                    <div class="col-sm">
                        <input type="radio" name="soal9" value="0"/>
                        \(\displaystyle 3 \text{ dan }1 \)
                    <br />
                        <input type="radio" name="soal9" value="0" />
                        \(\displaystyle 3 \text{ dan }2 \)
                    <br />
                        <input type="radio" name="soal9" value="0"  />
                        \(\displaystyle 3 \text{ dan }-7 \)
                    <br />
                    </div>
                    <div class="col-sm">
                        <input type="radio" name="soal9" value="0" />
                        \(\displaystyle 2 \text{ dan }-7 \)
                    <br />
                        <input type="radio" name="soal9" value="10"/>
                        \(\displaystyle 1 \text{ dan }-7 \)
                    <br>
                    </div>
                </div>
                    <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal9" aria-expanded="false" aria-controls="collapsesoal9" >
                    Alternatif Penyelesaian:
                    </button>
                    <div class="collapse" id="collapsesoal9">
                      <div class="card card-body overflow-auto">
                        <p>Diketahui \(f(x-1)=-x^2\)</p>
                        <p>\(f(x+1)=3x^2+5x+7 \)</p>
                        <p>Misalkan</p>
                        <p>\(\begin{align}x+1 &=y \\ x &= y-1 \end{align}\) </p>
                        <p>Sehingga</p>
                        <p>\(\displaystyle \begin{align}
                            f(y) &= 3(y-1)^2 +5(y-1)+7 \\
                                &= 3(y^2-2y+1)+5y-5+7 \\
                                &= 3y^2-6y+3+5y+2 \\
                                &= 3y^2-y+5 \\
                                 f(x) &= 3x^2-y+5  \\\\
                                 f'(x) &= 6x-1  \\\\
                                 f'(x-1) &= 6(x-1)-1  \\
                                f'(x-1) &= 6x-6-1 \\
                                -x^2 &= 6x-7 \\
                                x^2 +6x-7 &=0 \\
                                (x-1)(x+7) &=0
                            \end{align}\)</p>
                            <p>Akar persamaan kuadratnya adalah \(x=-1 \text{ atau } x=7\)</p>

                        <b class="text-end text-danger fw-bold"> <h3>JAWABAN : E</h3></b>
                      </div>
                    </div>
                    <hr />
    <!-- SOAL end -->
    <!-- SOAL 10 -->
                <li>Diketahui \(f(x)=px^3-x^2+5\). Jika \(f''(1)=10\), nilai \(f'(-1)=... \) </li>
                <div class="row">
                    <div class="col-sm">
                        <input type="radio" name="soal10" value="10"/>
                        \(\displaystyle 8 \)
                    <br />
                        <input type="radio" name="soal10" value="0" />
                        \(\displaystyle 6 \)
                    <br />
                        <input type="radio" name="soal10" value="0"  />
                        \(\displaystyle 5 \)
                    <br />
                    </div>
                    <div class="col-sm">
                        <input type="radio" name="soal10" value="0" />
                        \(\displaystyle 4 \)
                    <br />
                        <input type="radio" name="soal10" value="0"/>
                        \(\displaystyle 2 \)
                    <br>
                    </div>
                </div>
                    <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal10" aria-expanded="false" aria-controls="collapsesoal10" >
                    Alternatif Penyelesaian:
                    </button>
                    <div class="collapse" id="collapsesoal10">
                      <div class="card card-body overflow-auto">
                        <p>Diketahui \(f''(1)=10\)</p>
                        <p>\(\displaystyle \begin{align}
                            f(x) &= px^3-x^2+5 \\
                              f'(x) &= 3px^2-2x \\
                               f''(x)  &= 6px-2 \\ \\
                               f''(1)  &= 6p(1)-2 \\
                               10  &= 6p-2 \\
                               12  &= 6p \\
                                p  &= \frac{12}{6} \\
                                  &= 2 \\\\
                                  f'(-1) &= 3px^2-2x \\
                                   &= 3(2)(-1)^2-2(-1) \\
                                   &= 6+2 \\
                                   &= 8 \\
                            \end{align}\)</p>
                        <b class="text-end text-danger fw-bold"> <h3>JAWABAN : A</h3></b>
                      </div>
                    </div>
                    <hr />
    <!-- SOAL end -->
    <!-- SOAL 11 -->
                <li>Diketahui \(f(x)=ax^2-(a+1)x+8 \) dengan \(a>0\). Jika \(f'(a)=14\) nilai \(a=...\) </li>
                <div class="row">
                    <div class="col-sm">
                        <input type="radio" name="soal11" value="0"/>
                        \(\displaystyle 5 \)
                    <br />
                        <input type="radio" name="soal11" value="0" />
                        \(\displaystyle 4 \)
                    <br />
                        <input type="radio" name="soal11" value="10"  />
                        \(\displaystyle 3 \)
                    <br />
                    </div>
                    <div class="col-sm">
                        <input type="radio" name="soal11" value="0" />
                        \(\displaystyle 2 \)
                    <br />
                        <input type="radio" name="soal11" value="0"/>
                        \(\displaystyle 1 \)
                    <br>
                    </div>
                </div>
                    <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal11" aria-expanded="false" aria-controls="collapsesoal11" >
                    Alternatif Penyelesaian:
                    </button>
                    <div class="collapse" id="collapsesoal11">
                      <div class="card card-body overflow-auto">
                        <p>Diketahui \(f'(a)=14\)</p>
                        <p>\(\displaystyle \begin{align}
                            f(x) 	&= ax^2-(a+1)x+8  \\
                               f'(x)  &= 2ax-(a+1) \\
                               f'(a)  &= 2a(a)-(a+1) \\
                               14  &= 2a^2-(a+1) \\
                                 2a^2 -a-1-14 &= 0  \\
                                 2a^2 -a-15 &= 0  \\
                                  (2a+5)(a-3)&= 0 \\
                            \end{align}\)</p>
                        <p>akar-akar persamaan kuadrat yang memenuhi adalah \(a=-\frac{5}{2} \text{ atau } a=3 \)</p>
                        <p>karena syarat nilai \(a>0\) maka nilai yang memenuhi \(a=3\)</p>
                        <b class="text-end text-danger fw-bold"> <h3>JAWABAN : C</h3></b>
                      </div>
                    </div>
                    <hr />
    <!-- SOAL end -->
    <!-- SOAL 12 -->
                <li>Diketahui \(f(x)=\frac{4}{3}x^3+9x^2-11x+2 \). Jika \(f'(a)=-1\), nilai \(a\) yang memenuhi adalah . . . </li>
                <div class="row">
                    <div class="col-sm">
                        <input type="radio" name="soal12" value="0"/>
                        \(\displaystyle -4 \)
                    <br />
                        <input type="radio" name="soal12" value="10" />
                        \(\displaystyle -\frac{1}{2} \)
                    <br />
                        <input type="radio" name="soal12" value="0"  />
                        \(\displaystyle \frac{1}{2} \)
                    <br />
                    </div>
                    <div class="col-sm">
                        <input type="radio" name="soal12" value="0" />
                        \(\displaystyle 1 \)
                    <br />
                        <input type="radio" name="soal12" value="0"/>
                        \(\displaystyle 5 \)
                    <br>
                    </div>
                </div>
                    <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal12" aria-expanded="false" aria-controls="collapsesoal12" >
                    Alternatif Penyelesaian:
                    </button>
                    <div class="collapse" id="collapsesoal12">
                      <div class="card card-body overflow-auto">
                        <p> Diketahui \(f'(a)=-1\)</p>
                        <p>\(\displaystyle \begin{align}
                            f(x) &= \frac{4}{3}x^3+9x^2-11x+2  \\
                                 &= 4x^2+18x-11 \\
                              f(a)  &= 4a^2+18a-11  \\
                              -1  &= 4a^2+18a-11  \\
                               4a^2+18a-10 &=0  \\
                               2a^2+9a-5 &=0  \\
                               (2a-1)(a+5) &=0
                            \end{align}\)
                            <p>nilai \(a\) yang memenuhi adalah \(a=\frac{1}{2} \text{ atau } a=-5\)</p>

                            </p>
                        <br>

                        <b class="text-end text-danger fw-bold"> <h3>JAWABAN : B</h3></b>
                      </div>
                    </div>
                    <hr />
    <!-- SOAL end -->
    <!-- SOAL 13 -->
                <li>Jika \(f(x)=2x^3+nx^2+4x+3\) dan \(f''(-1)=-22\) nilai \(n=...\) </li>
                <div class="row">
                    <div class="col-sm">
                        <input type="radio" name="soal13" value="10"/>
                        \(\displaystyle -5 \)
                    <br />
                        <input type="radio" name="soal13" value="0" />
                        \(\displaystyle -4 \)
                    <br />
                        <input type="radio" name="soal13" value="0"  />
                        \(\displaystyle -1 \)
                    <br />
                    </div>
                    <div class="col-sm">
                        <input type="radio" name="soal13" value="0" />
                        \(\displaystyle 4 \)
                    <br />
                        <input type="radio" name="soal13" value="0"/>
                        \(\displaystyle 5 \)
                    <br>
                    </div>
                </div>
                    <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal13" aria-expanded="false" aria-controls="collapsesoal13" >
                    Alternatif Penyelesaian:
                    </button>
                    <div class="collapse" id="collapsesoal13">
                      <div class="card card-body overflow-auto">
                        <p>Diketahui \(f''(-1)=-22\)</p>
                        <p>\(\displaystyle \begin{align}
                            f(x) &= 2x^3+nx^2+4x+3 \\
                             f'(x) &= 6x^2+2nx+4  \\
                             f''(x) &= 12x+2n  \\
                             f''(-1) &= 12(-1)+2n  \\
                             -22 &= -12+2n  \\
                             -10 &= 2n  \\
                             n &= \frac{-10}{2}  \\
                             n &= -5  \\

                            \end{align}\)
                            </p>
                        <b class="text-end text-danger fw-bold"> <h3>JAWABAN : A</h3></b>
                      </div>
                    </div>
                    <hr />
    <!-- SOAL end -->
    <!-- SOAL 14 -->
                <li>Jika \(f(3-2x)=(1+3x)^4 \), nilai \(f'(3)=...\) </li>
                <div class="row">
                    <div class="col-sm">
                        <input type="radio" name="soal14" value="0"/>
                        \(\displaystyle 6 \)
                    <br />
                        <input type="radio" name="soal14" value="0" />
                        \(\displaystyle 4 \)
                    <br />
                        <input type="radio" name="soal14" value="0"  />
                        \(\displaystyle 0 \)
                    <br />
                    </div>
                    <div class="col-sm">
                        <input type="radio" name="soal14" value="0" />
                        \(\displaystyle -4 \)
                    <br />
                        <input type="radio" name="soal14" value="10"/>
                        \(\displaystyle -6 \)
                    <br>
                    </div>
                </div>
                    <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal14" aria-expanded="false" aria-controls="collapsesoal14" >
                    Alternatif Penyelesaian:
                    </button>
                    <div class="collapse" id="collapsesoal14">
                      <div class="card card-body overflow-auto">
                       <p> Berikut akan diberikan 2 cara berbeda dalam menyelesaiakan permasalahan ini</p>
                       <h3>Cara 1</h3>
                       <p>\(\displaystyle \begin{align}
                        f(3-2x) &= (1+3x)^4  \\
                        (-2)f'(3-2x) &= 4(1+3x)^{4-1}(3)  \\
                        (-2)f'(3-2x) &= 12(1+3x)^3  \\
                        f'(3-2x) &= \frac{12(1+3x)^3}{-2}  \\
                        \text{substitusi } x=0 \\
                        f'(3-2(0)) &= \frac{12(1+3(0))^3}{-2}  \\
                        f'(3) &= \frac{12}{-2}  \\
                        f'(3) &= -6  \\
                        \end{align}\)
                        <hr>
                        <h3>Cara 2</h3>
                        <p>\(\displaystyle  \begin{align} \text{Misalkan }
                            3-2x &= y  \\
                            -2x &= y-3 \\
                            x &= \frac{3-y}{2}
                            \end{align}\) </p>
                        <p>\(\displaystyle \begin{align}
                            f(3-2x) &= (1+3x)^4 \\
                            f(y) &= \left(1+3\left(\frac{3-y}{2} \right)\right)^4 \\
                                &= \left(1+\left(\frac{9-3y}{2} \right)\right)^4 \\
                                &= \left(\frac{2+9-3y}{2} \right)^4 \\
                                &= \left(\frac{11-3y}{2} \right)^4 \\\\
                                f'(y) &= 4\left(-\frac{3}{2}\right)\left(\frac{11-3y}{2} \right)^{4-1} \\
                                f'(y) &= 2(-3)\left(\frac{11-3y}{2} \right)^{3} \\
                                f'(3) &= (-6)\left(\frac{11-3(3)}{2} \right)^{3} \\
                                f'(3) &= (-6)

                            \end{align}\)</p>
                        </p>
                        <b class="text-end text-danger fw-bold"> <h3>JAWABAN : E</h3></b>
                      </div>
                    </div>
                    <hr />
    <!-- SOAL end -->
    <!-- SOAL 15 -->
                <li>Jika \(f(x)=\frac{2x-1}{\sqrt{x+1}} \), hasil \(f'(x-1)=...\) </li>
                <div class="row">
                    <div class="col-sm">
                        <input type="radio" name="soal15" value="10"/>
                        \(\displaystyle \frac{2x+3}{2\sqrt{x^3}} \)
                    <br />
                        <input type="radio" name="soal15" value="0" />
                        \(\displaystyle \frac{2x+5}{2\sqrt{x^3}} \)
                    <br />
                        <input type="radio" name="soal15" value="0"  />
                        \(\displaystyle \frac{3x+2}{2\sqrt{x^3}} \)
                    <br />
                    </div>
                    <div class="col-sm">
                        <input type="radio" name="soal15" value="0" />
                        \(\displaystyle \frac{3x+5}{2\sqrt{x^3}} \)
                    <br />
                        <input type="radio" name="soal15" value="0"/>
                        \(\displaystyle \frac{5x+2}{2\sqrt{x^3}} \)
                    <br>
                    </div>
                </div>
                    <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal15" aria-expanded="false" aria-controls="collapsesoal15" >
                    Alternatif Penyelesaian:
                    </button>
                    <div class="collapse" id="collapsesoal15">
                      <div class="card card-body overflow-auto">
                        <div class="row">
                            <div class="col-sm-3">Misalkan <br> \(u=2x-1\) <br> \(u'=2\) </div>
                            <div class="col-sm-3"> <br> \(v=\sqrt{x+1}\) <br> \(v'=\frac{1}{2\sqrt{x+1}}\) </div>
                        </div>
                        <p>\(\displaystyle \begin{align}
                            f(x) &= \frac{u}{v} \\
                            f'(x) &= \frac{u'v-uv'}{v^2} \\
                                  &= \frac{2\sqrt{x+1}-(2x-1) \left(\frac{1}{2\sqrt{x+1}}\right)}{\left(\sqrt{x+1} \right)^2} \\
                              f'(x-1)  &= \frac{2\sqrt{(x-1)+1}-(2(x-1)-1) \left(\frac{1}{2\sqrt{(x-1)+1}}\right)}{\left(\sqrt{(x-1)+1} \right)^2} \\
                               &= \frac{2\sqrt{x}-(2x-3) \left(\frac{1}{2\sqrt{x}}\right)}{\left(\sqrt{x} \right)^2} \\
                               &= \frac{2\sqrt{x}- \left(\frac{2x-3}{2\sqrt{x}}\right)}{x} \\
                               &= \frac{\frac{2\sqrt{x}2\sqrt{x}}{2\sqrt{x}} - \left(\frac{2x-3}{2\sqrt{x}}\right)}{x} \\
                               &=  \frac{4x-(2x-3)}{2\sqrt{x}(x)}\\
                               &=  \frac{2x+3}{2\sqrt{x^3}}\\

                            \end{align}\)</p>

                        <b class="text-end text-danger fw-bold"> <h3>JAWABAN : A</h3></b>
                      </div>
                    </div>
                    <hr />
    <!-- SOAL end -->
    <!-- SOAL 16 -->
                <li>Diketahui \(f(x)=2x^2+4x \), \(g(x)=\sqrt{x-3} \) dan \(h(x)=(g \circ f)(x) \). Turunan dari \(h(x)\) adalah \(h'(x)=... \) </li>
                <div class="row">
                    <div class="col-sm">
                        <input type="radio" name="soal16" value="0"/>
                        \(\displaystyle \frac{4x+4}{\sqrt{2x^2+4x-3}} \)
                    <br />
                        <input type="radio" name="soal16" value="10" />
                        \(\displaystyle \frac{2x+2}{\sqrt{2x^2+4x-3}} \)
                    <br />
                        <input type="radio" name="soal16" value="0"  />
                        \(\displaystyle (4x+4)(\sqrt{2x^2+4x-3}) \)
                    <br />
                    </div>
                    <div class="col-sm">
                        <input type="radio" name="soal16" value="0" />
                        \(\displaystyle (2x+2)(\sqrt{2x^2+4x-3}) \)
                    <br />
                        <input type="radio" name="soal16" value="0"/>
                        \(\displaystyle (x+1)(\sqrt{2x^2+4x-3}) \)
                    <br>
                    </div>
                </div>
                    <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal16" aria-expanded="false" aria-controls="collapsesoal16" >
                    Alternatif Penyelesaian:
                    </button>
                    <div class="collapse" id="collapsesoal16">
                      <div class="card card-body overflow-auto">
                        <p>\(\displaystyle \begin{align}
                            (g \circ f)(x) &= g(f(x))  \\
                             &= g(2x^2+4x)  \\
                             &= \sqrt{2x^2+4x-3}  \\\\
                            h(x) &= \sqrt{2x^2+4x-3}  \\
                                &= (2x^2+4x-3)^{\frac{1}{2}}  \\
                            h'(x) &=\frac{1}{2} (2x^2+4x-3)^{\frac{1}{2}-1} (4x+4) \\
                            h'(x) &=(2x+2) (2x^2+4x-3)^{-\frac{1}{2}}  \\
                            h'(x) &=\frac{(2x+2)} {(2x^2+4x-3)^{\frac{1}{2}}}  \\
                            h'(x) &=\frac{2x+2} {\sqrt{2x^2+4x-3}}  \\

                            \end{align}\)</p>
                        <b class="text-end text-danger fw-bold"> <h3>JAWABAN : A</h3></b>
                      </div>
                    </div>
                    <hr />
    <!-- SOAL end -->
    <!-- SOAL 17 -->
                <li>Jika \(m\) dan \(n\) bilangan real dan fungsi \(f(x)=mx^3+2x^2-nx+5\) memenuhi \(f'(1)=f'(-5)=0 \) maka \(3m-n=...\) </li>
                <div class="row">
                    <div class="col-sm">
                        <input type="radio" name="soal17" value="10"/>
                        \(\displaystyle -6 \)
                    <br />
                        <input type="radio" name="soal17" value="0" />
                        \(\displaystyle -4 \)
                    <br />
                        <input type="radio" name="soal17" value="0"  />
                        \(\displaystyle -2 \)
                    <br />
                    </div>
                    <div class="col-sm">
                        <input type="radio" name="soal17" value="0" />
                        \(\displaystyle 2 \)
                    <br />
                        <input type="radio" name="soal17" value="0"/>
                        \(\displaystyle 4 \)
                    <br>
                    </div>
                </div>
                    <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal17" aria-expanded="false" aria-controls="collapsesoal17" >
                    Alternatif Penyelesaian:
                    </button>
                    <div class="collapse" id="collapsesoal17">
                      <div class="card card-body overflow-auto">
                        <p><p>\(\displaystyle \begin{align}
                            f(x)&=mx^3+2x^2-nx+5 \\
                            f'(x) &= 3mx^2+4x-n \\\\
                            f'(1) &= 3m(1)^2 + 4 (1) -n\\
                            0 &= 3m+4-n \\
                            -4 &= 3m-n \:\: ... [1]\\ \\
                            f'(-5)&=3m(-5)^2+4(-5)-n\\
                            0&= 75m-20-n\\
                            20 &= 75m-n \:\: ... [2]
                            \end{align}\)</p>
                            <p>dari persamaan \([1]\) dan \([2]\) diperoleh <br>
                                \(\displaystyle \begin{align}
                            3m-n &=-4\\
                            \underline{75m-n} &=\underline{20} (-) \\
                            -72m &= 24 \\
                            m &= \frac{24}{-72} \\
                            &= -\frac{1}{3} \\\\
                            \text{Substitusi } m\\
                            -4 &= 3\left(-\frac{1}{3}\right)-n\\
                            n&= -1+4\\
                            n&=3\\\\
                            \text{Sehingga }\\
                            3m-n &= 3 \left(-\frac{1}{3} \right)-3\\
                            &= -1-3\\
                            &=-4
                            \end{align}\)
                            </p>
                        <b class="text-end text-danger fw-bold"> <h3>JAWABAN : A</h3></b>
                      </div>
                    </div>
                    <hr />
    <!-- SOAL end -->
    <!-- SOAL 18 -->
                <li>Jika \(y=\sqrt{x} \) dan \(t=\sqrt{x-1} \), hasil \(\displaystyle \frac{dy}{dt}=... \) </li>
                <div class="row">
                    <div class="col-sm">
                        <input type="radio" name="soal18" value="0"/>
                        \(\displaystyle \frac{1}{t^2+1} \)
                    <br />
                        <input type="radio" name="soal18" value="0" />
                        \(\displaystyle \frac{t}{t^2+1} \)
                    <br />
                        <input type="radio" name="soal18" value="0"  />
                        \(\displaystyle \frac{1}{\sqrt{t^2+1}} \)
                    <br />
                    </div>
                    <div class="col-sm">
                        <input type="radio" name="soal18" value="10" />
                        \(\displaystyle \frac{t}{\sqrt{t^2+1}} \)
                    <br />
                        <input type="radio" name="soal18" value="0"/>
                        \(\displaystyle \frac{2t}{\sqrt{t^2+1}} \)
                    <br>
                    </div>
                </div>
                    <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal18" aria-expanded="false" aria-controls="collapsesoal18"  >
                    Alternatif Penyelesaian:
                    </button>
                    <div class="collapse" id="collapsesoal18">
                      <div class="card card-body overflow-auto">
                        <p>Diketahui \(y=\sqrt{x} \) </p>
                        <p>\(\displaystyle \begin{align}
                            t &=\sqrt{x-1} \\
                            t^2 &=x-1 \\
                            x &= t^2+1 \\\\
                            \text{Sehingga }\\
                            y&=\sqrt{t^2+1} \\
                            &=(t^2+1)^{\frac{1}{2}} \\
                             \frac{dy}{dt} &=\frac{1}{2}(t^2+1)^{\frac{1}{2}-1}(2t) \\
                                         &=t(t^2+1)^{-\frac{1}{2}} \\
                                         &=\frac{t} {\sqrt{t^2+1}} \\

                            \end{align}\)</p>
                        <b class="text-end text-danger fw-bold"> <h3>JAWABAN : D</h3></b>
                      </div>
                    </div>
                    <hr />
    <!-- SOAL end -->
    <!-- SOAL 19 -->
                <li>Jika \(y=t^3-2t^2\) dan \(x=\sqrt{t}+1 \), hasil \(\displaystyle \frac{dy}{dx}=... \) </li>
                <div class="row">
                    <div class="col-sm">
                        <input type="radio" name="soal19" value="0"/>
                        \(\displaystyle (x-1)^2(3x^2-6x-1) \)
                    <br />
                        <input type="radio" name="soal19" value="0" />
                        \(\displaystyle (x-1)^2(6x^2-12x-2) \)
                    <br />
                        <input type="radio" name="soal19" value="0"  />
                        \(\displaystyle (x-1)^3(3x^2-6x-1) \)
                    <br />
                    </div>
                    <div class="col-sm">
                        <input type="radio" name="soal19" value="10" />
                        \(\displaystyle (x-1)^3(6x^2-12x-2) \)
                    <br />
                        <input type="radio" name="soal19" value="0"/>
                        \(\displaystyle (x-1)^3(6x^2-12x-1) \)
                    <br>
                    </div>
                </div>
                    <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal19" aria-expanded="false" aria-controls="collapsesoal19" >
                    Alternatif Penyelesaian:
                    </button>
                    <div class="collapse" id="collapsesoal19">
                      <div class="card card-body overflow-auto">
                        <p>\(\displaystyle \begin{align}
                            \text{Diketahui }
                            y &= t^3-2t^2 \\\\
                            x &= \sqrt{t}+1\\
                            x-1 &= \sqrt{t} \\
                            t &=(x-1)^2 \\\\
                            \text{Sehingga }\\
                            y &= \left((x-1)^2 \right)^3 - 2\left((x-1)^2 \right)^2 \\
                            &= (x-1)^6-2(x-1)^4 \\\\
                            \frac{dy}{dx} &= 6(x-1)^5-8(x-1)^3\\
                            &=\left(6(x-1)^2-8 \right)(x-1)^3\\
                            &=\left(6(x^2-2x+1)-8 \right)(x-1)^3\\
                            &=\left(6x^2-12x+6-8 \right)(x-1)^3\\
                            &=\left(6x^2-12x-2 \right)(x-1)^3\\
                            &=(x-1)^3\left(6x^2-12x-2 \right)

                            \end{align}\)</p>


                        <b class="text-end text-danger fw-bold"> <h3>JAWABAN : D</h3></b>
                      </div>
                    </div>
                    <hr />
    <!-- SOAL end -->
    <!-- SOAL 20 -->
                <li>Nilai turunan dari \(g(x)=\sqrt{x-\sqrt{x+1}}\) di \(x=3\) adalah . . . </li>
                <div class="row">
                    <div class="col-sm">
                        <input type="radio" name="soal20" value="10"/>
                        \(\displaystyle -\frac{3}{4} \)
                    <br />
                        <input type="radio" name="soal20" value="0" />
                        \(\displaystyle -\frac{3}{8} \)
                    <br />
                        <input type="radio" name="soal20" value="0"  />
                        \(\displaystyle \frac{3}{8} \)
                    <br />
                    </div>
                    <div class="col-sm">
                        <input type="radio" name="soal20" value="0" />
                        \(\displaystyle \frac{2}{3} \)
                    <br />
                        <input type="radio" name="soal20" value="0"/>
                        \(\displaystyle \frac{3}{4} \)
                    <br>
                    </div>
                </div>
                    <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal20" aria-expanded="false" aria-controls="collapsesoal20" >
                    Alternatif Penyelesaian:
                    </button>
                    <div class="collapse" id="collapsesoal20">
                      <div class="card card-body overflow-auto">
                        <p>\(\displaystyle \begin{align}
                           g(x)&= \sqrt{x-\sqrt{x+1}}\\
                           &= \left(x-(x+1)^{\frac{1}{2}} \right)^{\frac{1}{2}} \\\\
                           g'(x) &= \frac{1}{2} \left(x-(x+1)^{\frac{1}{2}} \right)^{\frac{1}{2}-1} \left(1-\frac{1}{2\sqrt{x+1}} \right)\\
                           &= \frac{1}{2} \left(1-\frac{1}{2\sqrt{x+1}} \right) \left(x-(x+1)^{\frac{1}{2}} \right)^{-\frac{1}{2}}\\
                           g'(3) &= \frac{1}{2} \left(1-\frac{1}{2\sqrt{(3)+1}} \right) \left((3)-((3)+1)^{\frac{1}{2}} \right)^{-\frac{1}{2}}\\
                           &= \frac{1}{2} \left(1-\frac{1}{4} \right) (1)^{-\frac{1}{2}}\\
                           &= \frac{1}{2} \left(\frac{3}{4} \right)\\
                           &= \frac{3}{8}

                            \end{align}\)</p>

                        <b class="text-end text-danger fw-bold"> <h3>JAWABAN : C</h3></b>
                      </div>
                    </div>

            </ol>

{{-- COPY DARI SINI SETIAP SOAL --}}
<input type="hidden" id="materi" name="materi" value="turunan01">
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
    <a href="/createturunan01" id="kirimsaja" class="btn btn-warning btn-bukti d-none" >SIMPAN JAWABAN</a>
</div>
</form>
{{-- COPY SAMPAI SINI --}}

<div id="disqus_thread" class="mt-4"></div>

</div>
</div>
</div>
</section>
@endsection

