@extends('konten.15Integral.15.template')
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
            Integral - Latihan 01 + Pembahasan
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
                <li>Jika \(f(x)= x^{2n}\), untuk setiap \(n\) dan \(\displaystyle n \neq -\frac{1}{2}\), maka \(\displaystyle \int f(x)dx \) adalah . . . </li>
                    <input type="radio" name="soal1" value="0"/>
                    A. \(2nx^{2n-1} +C  \)
                <br />
                    <input type="radio" name="soal1" value="0" />
                    B. \(2nx^{2n+1} +C  \)
                <br />
                    <input type="radio" name="soal1" value="0"  />
                    C. \((2n+1)x^{2n+1} +C  \)
                <div class="col-md">
                    <input type="radio" name="soal1" value="10" />
                    D. \(\displaystyle \frac{1}{2n+1} x^{2n+1} +C \)
                <br />
                    <input type="radio" name="soal1" value="0"/>
                    E. \(\displaystyle \frac{1}{3n} x^{3n} +C \)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal1" aria-expanded="false" aria-controls="collapsesoal1" >
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal1">
                <div class="card card-body overflow-auto">
                    <p>Kita bisa menggunakan rumus integral dasar sebagai berikut:

                        $$
                        \int x^m dx = \frac{1}{m+1} x^{m+1} + C,
                        $$

                        dengan \(C\) adalah konstanta integrasi. Dalam hal ini, \(f(x) = x^{2n}\), sehingga kita dapat mengintegrasikan \(f(x)\) sebagai berikut:

                        \begin{align*}
                        \int f(x)dx &= \int x^{2n} dx \\
                        &= \frac{1}{2n+1} x^{2n+1} + C.
                        \end{align*}

                        Karena \(n \neq -\frac{1}{2}\), maka penyebut pada rumus di atas tidak akan menjadi nol, sehingga rumus tersebut dapat diterapkan pada kasus ini. Oleh karena itu, jawaban akhirnya adalah

                        $$
                        \boxed{\int f(x)dx = \frac{1}{2n+1} x^{2n+1} + C}.
                        $$</p>
                <b class="text-end text-danger fw-bold"> <h3>JAWABAN : D</h3></b>
                </div>
                </div>
                <hr />
<!--=======================  soal2 ===================================-->
            <li>\(\displaystyle \int (2x-3)dx = ... \)</li>
                    <input type="radio" name="soal2" value="0"/>
                  A.  \(x^2 +3x + C \)
                <br />
                    <input type="radio" name="soal2" value="10" />
                   B. \(x^2 -3x + C \)
                <br />
                    <input type="radio" name="soal2" value="0"  />
                    C. \(3x^2 -3x + C\)
                <div class="col-md">
                    <input type="radio" name="soal2" value="0" />
                    D. \(3x^2 +3 + C \)
                <br />
                    <input type="radio" name="soal2" value="0"/>
                    E. \(3x^2 +3 + C\)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal2" aria-expanded="false" aria-controls="collapsesoal2" >
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal2">
                <div class="card card-body overflow-auto">
                    <p>Kita dapat menggunakan rumus integral dasar sebagai berikut:

                        $$
                        \int x^n dx = \frac{1}{n+1} x^{n+1} + C,
                        $$

                        dengan \(C\) adalah konstanta integrasi. Dalam kasus ini, kita memiliki \(\displaystyle \int (2x-3)dx\). Karena integral merupakan operasi linear, maka kita dapat memisahkan integral menjadi dua bagian sebagai berikut:

                        \begin{align*}
                        \int (2x-3)dx &= \int 2x dx - \int 3 dx \\
                        &= 2 \int x dx - 3 \int dx \\
                        &= 2 \left(\frac{1}{2} x^2 + C_1\right) - 3(x + C_2) \\
                        &= x^2 - 3x + C,
                        \end{align*}

                        dengan \(C = 2C_1 - 3C_2\) adalah konstanta integrasi baru. Oleh karena itu, jawaban akhirnya adalah \(\boxed{x^2 - 3x + C}\).</p>
                <b class="text-end text-danger fw-bold"> <h3>JAWABAN : B</h3></b>
                </div>
                </div>
                <hr />
<!--=======================  soal3 ===================================-->
            <li>Anti turunan dari \(f(x)=10x\sqrt{x}  \)  adalah . . .</li>
                    <input type="radio" name="soal3" value="0"/>
                    A. \(\displaystyle F(x)=15 \sqrt{x} + C  \)
                <br />
                    <input type="radio" name="soal3" value="0" />
                    B. \(\displaystyle F(x)=8 \sqrt{x} + C  \)
                <br />
                    <input type="radio" name="soal3" value="0"  />
                    C. \(\displaystyle F(x)=5x^2 \sqrt{x} + C \)
                <div class="col-md">
                    <input type="radio" name="soal3" value="10" />
                    D. \(\displaystyle F(x)=4x^2 \sqrt{x} + C  \)
                <br />
                    <input type="radio" name="soal3" value="0"/>
                    E. \(\displaystyle F(x)=\frac{10}{3} x^2 \sqrt{x} + C \)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal3" aria-expanded="false" aria-controls="collapsesoal3" >
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal3">
                <div class="card card-body overflow-auto">
                <p>Untuk menemukan anti-turunan dari fungsi \(f(x) = 10x\sqrt{x}\), kita dapat menggunakan aturan turunan untuk produk dan pangkat:
                    \begin{align*}
                    \int 10x\sqrt{x} dx &= \int 10x \cdot x^\frac{1}{2} dx\\
                    &= \int 10x^{1+\frac{1}{2}} dx\\
                    &= 10\int x^{\frac{3}{2}} dx\\
                    &= 10 \left( \frac{1}{\frac{3}{2}+1} x^{\frac{3}{2}+1} \right) +C \\
                    &= 10 \left( \frac{1}{\frac{5}{2}} x^{\frac{5}{2}} \right) +C \\
                    &= 10 \left( \frac{2}{5} x^{\frac{5}{2}} \right) +C \\
                    &= 4 x^2 x{\frac{1}{2}} +C \\
                    &= 4 x^2 \sqrt{x} +C \\
                    \end{align*}

                    di mana \(C\) adalah konstanta integrasi. Oleh karena itu, anti-turunan dari \(f(x)=10x\sqrt{x}\) adalah \(\boxed{4 x^2 \sqrt{x} +C}\).</p>
                <b class="text-end text-danger fw-bold"> <h3>JAWABAN : D</h3></b>
                </div>
                </div>
                <hr />
<!--=======================  soal4 ===================================-->
            <li>\(\displaystyle \int \frac{1}{2x\sqrt{x}}dx = ... \)</li>
                    <input type="radio" name="soal4" value="10"/>
                    A. \(\displaystyle -\frac{1}{\sqrt{x}} +C  \)
                <br />
                    <input type="radio" name="soal4" value="0" />
                    B. \(\displaystyle -\frac{1}{x\sqrt{x}} +C  \)
                <br />
                    <input type="radio" name="soal4" value="0"  />
                    C. \(\displaystyle \frac{1}{\sqrt{x}} +C \)
                <div class="col-md">
                    <input type="radio" name="soal4" value="0" />
                    D. \(\displaystyle -\frac{2}{\sqrt{x}} +C  \)
                <br />
                    <input type="radio" name="soal4" value="0"/>
                    E. \(\displaystyle -\frac{1}{2\sqrt{x}} +C \)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal4" aria-expanded="false" aria-controls="collapsesoal4" >
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal4">
                <div class="card card-body overflow-auto">
                <p>\begin{align*}
                    \int \frac{1}{2x\sqrt{x}}dx &= \int (2x.x^{\frac{1}{2}})^{-1} \\
                    &= \frac{1}{2} \int (x^{\frac{3}{2}})^{-1} dx\\
                    &= \frac{1}{2} \int (x^{-\frac{3}{2}}) dx \\
                    &= \frac{1}{2} \frac{1}{-\frac{3}{2}+1} x^{-\frac{3}{2}+1} +C \\
                    &= \frac{1}{2} \frac{1}{-\frac{1}{2}} x^{-\frac{1}{2}} +C \\
                    &= \frac{1}{2} . (-2) \frac{1}{\sqrt{x}} + C \\
                    &= -\frac{1}{\sqrt{x}} + C
                    \end{align*}</p>
                <b class="text-end text-danger fw-bold"> <h3>JAWABAN : A</h3></b>
                </div>
                </div>
                <hr />
<!--=======================  soal5 ===================================-->
            <li>Hasil dari \(\displaystyle \int \frac{x\sqrt{x}}{x^3} dx = ... \) </li>
                    <input type="radio" name="soal5" value="0"/>
                    A. \(\displaystyle  \frac{2}{\sqrt{x}}+C \)
                <br />
                    <input type="radio" name="soal5" value="0" />
                    B. \(\displaystyle  \frac{1}{\sqrt{x}}+C \)
                <br />
                    <input type="radio" name="soal5" value="0"  />
                    C. \(\displaystyle  -\frac{1}{\sqrt{x}}+C\)
                <div class="col-md">
                    <input type="radio" name="soal5" value="10" />
                    D. \(\displaystyle  -\frac{2}{\sqrt{x}}+C \)
                <br />
                    <input type="radio" name="soal5" value="0"/>
                    E. \(\displaystyle  -\frac{2}{5x^2\sqrt{x}}+C\)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal5" aria-expanded="false" aria-controls="collapsesoal5" >
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal5">
                <div class="card card-body overflow-auto">
                  <p>Kita dapat menyederhanakan terlebih dahulu fungsi dalam integral sebelum melakukan integrasi, sehingga:

                    \begin{align*}
                    \int \frac{x\sqrt{x}}{x^3} dx &= \int x^{\frac{3}{2}-3} dx \\
                    &= \int x^{-\frac{3}{2}} dx \\
                    &= \frac{x^{-\frac{3}{2}+1}}{-\frac{3}{2}+1} + C \\
                    &= \frac{x^{-\frac{1}{2}}}{-\frac{1}{2}} + C \\
                    &= -\frac{2}{\sqrt{x}} + C
                    \end{align*}

                    di mana \(C\) adalah konstanta integrasi. Oleh karena itu, \(\displaystyle \int \frac{x\sqrt{x}}{x^3} dx = \boxed{-\frac{2}{\sqrt{x}} + C}\).</p>
                <b class="text-end text-danger fw-bold"> <h3>JAWABAN : D</h3></b>
                </div>
                </div>
                <hr />
<!--=======================  soal6 ===================================-->
            <li>Hasil dari \(\displaystyle \int (2x+1)^2 dx= ... \) </li>
                    <input type="radio" name="soal6" value="0"/>
                    A. \(\displaystyle 8x+C  \)
                <br />
                    <input type="radio" name="soal6" value="0" />
                    B. \(\displaystyle 8x^3+x+C  \)
                <br />
                    <input type="radio" name="soal6" value="0"  />
                    C. \(\displaystyle 8x^3+4x^2+x+C \)
                <div class="col-md">
                    <input type="radio" name="soal6" value="0" />
                    D. \(\displaystyle \frac{4}{3} x^3 + 2x^2+1+C  \)
                <br />
                    <input type="radio" name="soal6" value="10"/>
                    E. \(\displaystyle \frac{4}{3} x^3 + 2x^2+x+C \)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal6" aria-expanded="false" aria-controls="collapsesoal6" >
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal6">
                <div class="card card-body overflow-auto">
                    <p>Untuk menyelesaikan integral \(\displaystyle \int (2x+1)^2 dx\), kita dapat menggunakan aturan pangkat:


                    \begin{align*}
                    \int (2x+1)^2 dx &= \int (4x^2 + 4x +1) dx \\
                    &= \int 4x^2 dx + \int 4x dx + \int 1 dx \\
                    &= \frac{4}{3}x^3 + 2x^2 + x + C \\
                    \end{align*}

                    di mana \(C\) adalah konstanta integrasi. Oleh karena itu, \(\displaystyle \int (2x+1)^2 dx= \boxed{\frac{4}{3}x^3 + 2x^2 + x + C}\)..</p>
                <b class="text-end text-danger fw-bold"> <h3>JAWABAN : E</h3></b>
                </div>
                </div>
                <hr />
<!--=======================  soal7 ===================================-->
            <li>\(\displaystyle \int \left( \frac{x^6 -4}{x^3} \right) dx = . . .\)</li>
                    <input type="radio" name="soal7" value="0"/>
                    A. \(\displaystyle \frac{1}{4} x^4 - \frac{1}{x^2} +C  \)
                <br />
                    <input type="radio" name="soal7" value="0" />
                    B. \(\displaystyle \frac{1}{4} x^4 + \frac{1}{x^2} +C  \)
                <br />
                    <input type="radio" name="soal7" value="10"  />
                    C. \(\displaystyle \frac{1}{4} x^4 + \frac{2}{x^2} +C \)
                <div class="col-md">
                    <input type="radio" name="soal7" value="0" />
                    D. \(\displaystyle \frac{1}{4} x^4 - \frac{2}{x^2} +C  \)
                <br />
                    <input type="radio" name="soal7" value="0"/>
                    E. \(\displaystyle \frac{1}{4} x^4 - \frac{x^2}{2} +C \)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal7" aria-expanded="false" aria-controls="collapsesoal7" >
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal7">
                <div class="card card-body overflow-auto">
                    <p>Untuk menyelesaikan integral \(\displaystyle \int \left( \frac{x^6 -4}{x^3} \right) dx\), kita dapat menggunakan aturan pangkat:
                        \begin{align*}
                        \int \left( \frac{x^6 -4}{x^3} \right) dx &= \int \left(\frac{x^6}{x^3} - \frac{4}{x^3} \right) \\
                        &= \int (x^3 -4x^{-3}) dx \\
                        &= \frac{1}{3+1} x^{3+1} -\frac{4}{-3+1} x^{-3+1} +C \\
                        &= \frac{1}{4} x^4 +2x^{-2} + C \\
                        &= \frac{1}{4} x^4 +\frac{2}{x^2} + C \\
                        \end{align*}

                        di mana \(C\) adalah konstanta integrasi. Oleh karena itu, \(\displaystyle \int \left( \frac{x^6 -4}{x^3} \right) dx = \boxed{\frac{1}{4} x^4 +\frac{2}{x^2} + C}\)..</p>
                <b class="text-end text-danger fw-bold"> <h3>JAWABAN : C</h3></b>
                </div>
                </div>
                <hr />
<!--=======================  soal8 ===================================-->
            <li>\(\displaystyle \int \left(\sqrt{x} + \frac{1}{\sqrt{x}} \right) dx = ...\) </li>
                    <input type="radio" name="soal8" value="0"/>
                    A. \(\displaystyle 2\sqrt{x} \left(x-1 \right)+C  \)
                <br />
                    <input type="radio" name="soal8" value="0" />
                    B. \(\displaystyle 2\sqrt{x} \left(x+1 \right)+C  \)
                <br />
                    <input type="radio" name="soal8" value="0"  />
                    C. \(\displaystyle 2\sqrt{x} \left(x-\frac{1}{3} \right)+C \)
                <div class="col-md">
                    <input type="radio" name="soal8" value="0" />
                    D. \(\displaystyle 2\sqrt{x} \left(\frac{1}{3}x-1 \right)+C  \)
                <br />
                    <input type="radio" name="soal8" value="10"/>
                    E. \(\displaystyle 2\sqrt{x} \left(\frac{1}{3}x+1 \right)+C \)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal8" aria-expanded="false" aria-controls="collapsesoal8" >
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal8">
                <div class="card card-body overflow-auto">
                    <p>Untuk menyelesaikan integral \(\displaystyle \int \left(\sqrt{x} + \frac{1}{\sqrt{x}} \right) dx\), kita dapat menggunakan aturan pangkat:
                        \begin{align*}
                        \int \left(\sqrt{x} + \frac{1}{\sqrt{x}} \right) dx &= \int \left(x^{\frac{1}{2}} + x^{-\frac{1}{2}} \right) dx \\
                        &= \frac{2}{3} x^{\frac{3}{2}} + 2 x^{\frac{1}{2}} +C \\
                        &= \frac{2}{3} x.x^{\frac{1}{2}} + 2 x^{\frac{1}{2}} +C \\
                        &= \frac{2}{3} x \sqrt{x} + 2\sqrt{x} + C \\
                        &= 2\sqrt{x} \left(\frac{1}{3}x +1 \right) +C
                        \end{align*}

                        di mana \(C\) adalah konstanta integrasi. Oleh karena itu, \(\displaystyle \int \left(\sqrt{x} + \frac{1}{\sqrt{x}} \right) dx = \boxed{2\sqrt{x} \left(\frac{1}{3}x +1 \right) +C}\)..</p>
                <b class="text-end text-danger fw-bold"> <h3>JAWABAN : E</h3></b>
                </div>
                </div>
                <hr />
<!--=======================  soal9 ===================================-->
            <li>\(\displaystyle \int \left( 3x - \frac{1}{3x} \right)^2 = ...\) </li>
                    <input type="radio" name="soal9" value="10"/>
                    A. \(\displaystyle 3x^3 - 2x - \frac{1}{9x} +C  \)
                <br />
                    <input type="radio" name="soal9" value="0" />
                    B. \(\displaystyle 3x^3 - 2x + \frac{1}{9x} +C  \)
                <br />
                    <input type="radio" name="soal9" value="0"  />
                    C. \(\displaystyle 3x^3 + 2x - \frac{1}{9x} +C \)
                <div class="col-md">
                    <input type="radio" name="soal9" value="0" />
                    D. \(\displaystyle 3x^3 - 3x + \frac{1}{9x} +C  \)
                <br />
                    <input type="radio" name="soal9" value="0"/>
                    E. \(\displaystyle 3x^3 +3x - \frac{1}{9x} +C \)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal9" aria-expanded="false" aria-controls="collapsesoal9" >
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal9">
                <div class="card card-body overflow-auto">
                <p>Kita dapat memperluas kuadrat sebagai berikut:

                    \begin{align*}
                    \left(3x - \frac{1}{3x}\right)^2 &= (3x)^2 - 2\cdot(3x)\cdot\frac{1}{3x} + \left(\frac{1}{3x}\right)^2 \\
                    &= 9x^2 - 2 + \frac{1}{9x^2}.
                    \end{align*}

                    Oleh karena itu, kita memiliki:

                    \begin{align*}
                    \int \left( 3x - \frac{1}{3x} \right)^2 dx &= \int (9x^2 - 2 + \frac{1}{9x^2}) dx \\
                    &= 3x^3 - 2x - \frac{1}{9x} + C,
                    \end{align*}

                    di mana \(C\) adalah konstanta integrasi.</p>
                <b class="text-end text-danger fw-bold"> <h3>JAWABAN : A</h3></b>
                </div>
                </div>
                <hr />
<!--=======================  soal10 ===================================-->
            <li>\(\displaystyle \int \frac{(\sqrt{x}+1)^2}{x^3} dx=...\) </li>
                    <input type="radio" name="soal10" value="0"/>
                    A. \(\displaystyle  -\frac{1}{x} -\frac{4}{3x\sqrt{x}} -\frac{2}{x^2} +C  \)
                <br />
                    <input type="radio" name="soal10" value="10" />
                    B. \(\displaystyle  -\frac{1}{x} -\frac{4}{3x\sqrt{x}} -\frac{1}{2x^2} +C  \)
                <br />
                    <input type="radio" name="soal10" value="0"  />
                    C. \(\displaystyle  \frac{1}{x} +\frac{4}{3x\sqrt{x}} +\frac{2}{x^2} +C \)
                <div class="col-md">
                    <input type="radio" name="soal10" value="0" />
                    D. \(\displaystyle  \frac{1}{x} +\frac{4}{3x\sqrt{x}} -\frac{1}{2x^2} +C  \)
                <br />
                    <input type="radio" name="soal10" value="0"/>
                    E. \(\displaystyle  \frac{1}{x} -\frac{4}{3x\sqrt{x}} +\frac{2}{x^2} +C \)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal10" aria-expanded="false" aria-controls="collapsesoal10" >
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal10">
                <div class="card card-body overflow-auto">
                    <p>Kita dapat memperluas kuadrat sebagai berikut:

                        \begin{align*}
                        \frac{(\sqrt{x}+1)^2}{x^3} &= \frac{x+2\sqrt{x}+1}{x^3} \\
                        &= \frac{x}{x^3} +\frac{2\sqrt{x}}{x^3} + \frac{1}{x^3} \\
                        &= \frac{1}{x^2} +\frac{2\sqrt{x}}{x^3} + \frac{1}{x^3} \\
                        &= x^{-2} +2x^{-\frac{5}{2}} + x^{-3}
                        \end{align*}

                        Oleh karena itu, kita memiliki:

                        \begin{align*}
                        \int \left( x^{-2} +2x^{-\frac{5}{2}} + x^{-3} \right) dx &= \frac{1}{-2+1} x^{-2+1} + \frac{2}{-\frac{5}{2}+1} x^{-\frac{5}{2}+1} + \frac{1}{-3+1} x^{-3+1} \\
                        &= (-1) x^{-1} + \frac{(-4)}{3} x^{-\frac{3}{2}} + \frac{1}{(-2)} x^{-2} \\
                        &= - \frac{1}{x} - \frac{4}{3x^{\frac{3}{2}}} - \frac{1}{2x^2} \\
                        &= \boxed{- \frac{1}{x} - \frac{4}{3x\sqrt{x}} - \frac{1}{2x^2}} \\
                        \end{align*}

                        di mana \(C\) adalah konstanta integrasi.</p>
                <b class="text-end text-danger fw-bold"> <h3>JAWABAN : B</h3></b>
                </div>
                </div>
                <hr />
<!--=======================  soal11 ===================================-->
            <li>Diketahui pediferensialan dua kali terhadap fungsi \(F(x)\), diperoleh \(F''(x) = 10x-3 \). Jika \(F'(2) =15 \) dan \(F(1) =1 \), maka \(F(x)=...\)</li>
                    <input type="radio" name="soal11" value="0"/>
                    A. \(\displaystyle \frac{5}{3}x^3 + \frac{3}{2}x^2 -x -\frac{1}{6}  \)
                <br />
                    <input type="radio" name="soal11" value="0" />
                    B. \(\displaystyle \frac{5}{3}x^3 + \frac{3}{2}x^2 -x +\frac{1}{6}  \)
                <br />
                    <input type="radio" name="soal11" value="0"  />
                    C. \(\displaystyle \frac{5}{3}x^3 + \frac{3}{2}x^2 +x -\frac{1}{6} \)
                <div class="col-md">
                    <input type="radio" name="soal11" value="0" />
                    D. \(\displaystyle \frac{5}{3}x^3 - \frac{3}{2}x^2 +x +\frac{1}{6}  \)
                <br />
                    <input type="radio" name="soal11" value="10"/>
                    E. \(\displaystyle \frac{5}{3}x^3 - \frac{3}{2}x^2 +x -\frac{1}{6} \)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal11" aria-expanded="false" aria-controls="collapsesoal11" >
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal11">
                <div class="card card-body overflow-auto">
                    <p>

                        Kita dapat menggunakan integrasi dua kali terhadap fungsi \(F''(x) = 10x-3 \) untuk mencari fungsi \(F(x)\):

                        $$
                        F'(x) = \int F''(x) dx = 5x^2 - 3x + C_1
                        $$

                        dengan \(C_1\) adalah konstanta integrasi pertama.

                        Kita juga dapat menggunakan informasi bahwa \(F'(2) = 15\) untuk mencari nilai \(C_1\):

                        $$
                        F'(2) = 5(2)^2 - 3(2) + C_1 = 15
                        $$

                        sehingga

                        $$
                        C_1 = 1
                        $$

                        Kemudian, kita dapat mengintegralkan \(F'(x) = 5x^2 - 3x + 1\) untuk mencari fungsi \(F(x)\):

                        $$
                        F(x) = \int F'(x) dx = \frac{5}{3}x^3 - \frac{3}{2}x^2 + x + C_2
                        $$

                        dengan \(C_2\) adalah konstanta integrasi kedua.

                        Kita dapat menggunakan informasi bahwa \(F(1) = 1\) untuk mencari nilai \(C_2\):

                        $$
                        F(1) = \frac{5}{3}(1)^3 - \frac{3}{2}(1)^2 + (1) + C_2 = 1
                        $$

                        sehingga

                        $$
                        C_2 = -\frac{1}{6}
                        $$

                        Akhirnya, fungsi \(F(x)\) adalah

                        $$
                        \boxed{F(x) = \frac{5}{3}x^3 - \frac{3}{2}x^2 + x - \frac{1}{6}}
                        $$

                        selesai.</p>
                <b class="text-end text-danger fw-bold"> <h3>JAWABAN : E</h3></b>
                </div>
                </div>
                <hr />
<!--=======================  soal12 ===================================-->
            <li>Diketahui turunan fungsi \(f(x)\) adalah \(f'(x)=6x^2 +2x-3\). Jika grafik fungsi \(f(x)\) melalui titik \((1,4) \), rumus fungsi \(f(x)=...\)</li>
                    <input type="radio" name="soal12" value="0"/>
                    A. \( 2x^3 +2x^2 -3x +8 \)
                <br />
                    <input type="radio" name="soal12" value="0" />
                    B. \(  2x^3 +2x^2 -3x +4 \)
                <br />
                    <input type="radio" name="soal12" value="10"  />
                    C. \( 2x^3 +x^2 -3x +4 \)
                <div class="col-md">
                    <input type="radio" name="soal12" value="0" />
                    D. \(  3x^3 +x^2 -3x +4 \)
                <br />
                    <input type="radio" name="soal12" value="0"/>
                    E. \( 3x^3 +x^2 -3x \)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal12" aria-expanded="false" aria-controls="collapsesoal12" >
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal12">
                <div class="card card-body overflow-auto">
                    <p>

                        Kita dapat menggunakan integrasi untuk mencari fungsi \(f(x)\) dari turunan \(f'(x) = 6x^2 + 2x - 3\):

                        $$
                        f(x) = \int f'(x) dx = 2x^3 + x^2 - 3x + C
                        $$

                        dengan \(C\) adalah konstanta integrasi.

                        Kita dapat menggunakan informasi bahwa grafik fungsi \(f(x)\) melalui titik \((1,4)\) untuk mencari nilai \(C\):

                        $$
                        f(1) = 2(1)^3 + (1)^2 - 3(1) + C
                        4 = C
                        $$

                        sehingga

                        $$
                        C = 4
                        $$

                        Akhirnya, fungsi \(f(x)\) adalah

                        $$
                        \boxed{f(x) = 2x^3 + x^2 - 3x + 4}
                        $$

                        selesai.</p>
                <b class="text-end text-danger fw-bold"> <h3>JAWABAN : C</h3></b>
                </div>
                </div>
                <hr />
<!--=======================  soal13 ===================================-->
            <li>Sebuah benda bergerak dari keadaan diam dengan percepatan pada setiap saat \(t\)  ditentukan oleh \(a(t)=5-t\). Pada gerakan tersebut, benda akan berhenti setelah ... detik</li>
                <input type="radio" name="soal12" value="0"/>
                A. \( 3\)
                <br />
                <input type="radio" name="soal12" value="0" />
                B. \( 5 \)
                <br />
                <input type="radio" name="soal12" value="10"  />
                 C. \(10\)
                <div class="col-md">
                <input type="radio" name="soal12" value="0" />
                D. \( 12\)
                <br />
                <input type="radio" name="soal12" value="0"/>
                E. \(15\)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal13" aria-expanded="false" aria-controls="collapsesoal13" >
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal13">
                <div class="card card-body overflow-auto">
                <p>

                    Untuk menentukan waktu ketika benda akan berhenti, kita perlu mencari nilai waktu saat kecepatannya menjadi nol. Kita dapat menggunakan persamaan hubungan antara kecepatan, percepatan, dan waktu:

                    \[v(t) = v_0 + \int_{t_0}^{t} a(\tau) d\tau\]

                    Di mana \(v_0\) adalah kecepatan awal pada waktu \(t_0\), dan \(a(\tau)\) adalah percepatan pada waktu \(\tau\).

                    Dalam kasus ini, kecepatan awal benda adalah nol, karena benda mulai dari keadaan diam. Oleh karena itu, persamaan untuk kecepatan menjadi:

                    \[v(t) = \int_{0}^{t} a(\tau) d\tau\]

                    Substitusi percepatan yang diberikan, kita dapat menghitung kecepatan sebagai fungsi waktu:

                    \[v(t) = \int_{0}^{t} (5-\tau) d\tau = 5t - \frac{1}{2}t^2\]

                    Ketika benda berhenti, kecepatannya menjadi nol. Oleh karena itu, kita perlu mencari nilai waktu \(t\) ketika \(v(t) = 0\):

                    \[5t - \frac{1}{2}t^2 = 0\]

                    Maka \(t(5-\frac{1}{2}t) = 0\), sehingga \(t = 0\) atau \(t = 10\).

                    Kita dapat mengabaikan solusi \(t = 0\) karena pada saat itu benda masih berada pada keadaan diam. Oleh karena itu, waktu ketika benda akan berhenti adalah \(\boxed{t = 10}\) detik.</p>
                <b class="text-end text-danger fw-bold"> <h3>JAWABAN : C</h3></b>
                </div>
                </div>
                <hr />
<!--=======================  soal14 ===================================-->
            <li>Gradien garis singgung sembarang titik \(P(x,y)\) pada grafik fungsi \(y=f(x)\) ditentukan oleh \(\displaystyle m= \frac{dy}{dx}=f'(x)=4x \). Jika grafik tersebut melalui titik \((2,1) \), maka persamaan grafiknya adalah . .. </li>
                    <input type="radio" name="soal14" value="10"/>
                    A. \(y=2x^2 -7  \)
                <br />
                    <input type="radio" name="soal14" value="0" />
                    B. \(y=2x^2 +7  \)
                <br />
                    <input type="radio" name="soal14" value="0"  />
                    C. \(y=2x^2 -8 \)
                <div class="col-md">
                    <input type="radio" name="soal14" value="0" />
                    D. \(y=2x^2 +8  \)
                <br />
                    <input type="radio" name="soal14" value="0"/>
                    E. \(y=x^2 -8 \)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal14" aria-expanded="false" aria-controls="collapsesoal14" >
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal14">
                <div class="card card-body overflow-auto">
                    <p>untuk mencari persamaan garafik kita integralkan terlebih dahulu \(f'(x)=4x\)
                        \begin{align*}
                        \int f'(x) dx &= \int 4x dx \\
                        &= 2x^2 + C
                        \end{align*}
                        Selanjutnya kita tentukan nilai \(C\) dengan mensubstitusi titik \((2,1)\)
                        \begin{align*}
                        y &= 2x^2 + C \\
                        1 &= 2(2)^2 + C \\
                        1-8 &= C \\
                        C &= -7
                        \end{align*}
                        Sehingga persamaan menjadi \(\boxed{y=2x^2-7} \)
                    </p>
                <b class="text-end text-danger fw-bold"> <h3>JAWABAN : A</h3></b>
                </div>
                </div>
                <hr />
<!--=======================  soal15 ===================================-->
            <li>Jika \(f'(x)=2 \) dan \(f(1)=1\), makka nilai dari \(f(1)+f(2) + f(3) + . . .+f(9)=... \)</li>
                    <input type="radio" name="soal15" value="0"/>
                    A. \( 56 \)
                <br />
                    <input type="radio" name="soal15" value="0" />
                    B. \( 64 \)
                <br />
                    <input type="radio" name="soal15" value="0"  />
                    C. \( 72 \)
                <div class="col-md">
                    <input type="radio" name="soal15" value="10" />
                    D. \( 81 \)
                <br />
                    <input type="radio" name="soal15" value="0"/>
                    E. \( 88 \)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal15" aria-expanded="false" aria-controls="collapsesoal15" >
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal15">
                <div class="card card-body overflow-auto">
                <p>

                    Untuk menyelesaikan masalah ini, kita perlu menggunakan konsep integral karena kita hanya diberikan turunan \(f'(x)\) dan nilai \(f(1)\). Kita tahu bahwa jika \(f'(x)\) adalah turunan dari \(f(x)\), maka \(f(x)\) adalah integral dari \(f'(x)\). Oleh karena itu, kita dapat menentukan \(f(x)\) dengan mengintegrasikan \(f'(x)\) terlebih dahulu.

                    \begin{align*}
                    f'(x) &= 2 \\
                    f(x) &= \int f'(x) dx \\
                    &= \int 2 dx \\
                    &= 2x + C
                    \end{align*}

                    di mana \(C\) adalah konstanta integrasi yang belum diketahui. Untuk menentukan nilai \(C\), kita dapat menggunakan nilai \(f(1) = 1\) yang diberikan.

                    \begin{align*}
                    f(1) &= 2(1) + C \\
                    1 &= 2 + C \\
                    C &= -1
                    \end{align*}

                    Dengan demikian, kita mendapatkan fungsi \(f(x) = 2x - 1\). Sekarang kita dapat menentukan nilai dari \(f(1)+f(2)+f(3)+...+f(9)\) dengan menjumlahkan nilai-nilai fungsi \(f(x)\) pada setiap bilangan bulat dari 1 hingga 9.

                    \begin{align*}
                    &f(1)+f(2)+f(3)+...+f(9) \\
                    &= (2(1)-1) + (2(2)-1) + (2(3)-1) + ... + (2(9)-1) \\
                    &= 1 + 3 + 5 + ... + 17 \\
                    &= \sum_{i=1}^{9} (2i-1) \\
                    &= 2\sum_{i=1}^{9} i - \sum_{i=1}^{9} 1 \\
                    &= 2\cdot\frac{9\cdot(9+1)}{2} - 9 \\
                    &= 81
                    \end{align*}

                    Jadi, nilai dari \(f(1)+f(2)+f(3)+...+f(9)\) adalah \(\boxed{81}\).</p>
                <b class="text-end text-danger fw-bold"> <h3>JAWABAN : D</h3></b>
                </div>
                </div>
                <hr />
<!--=======================  soal16 ===================================-->
            <li>Diketahui \(f'(x) = 2(3x^2 - 1) \) dan \(f(-1)=5\). Nilai \(f(2)=...\)</li>
                    <input type="radio" name="soal16" value="0"/>
                    A. \(20  \)
                <br />
                    <input type="radio" name="soal16" value="10" />
                    B. \(17 \)
                <br />
                    <input type="radio" name="soal16" value="0"  />
                    C. \(16 \)
                <div class="col-md">
                    <input type="radio" name="soal16" value="0" />
                    D. \( 12 \)
                <br />
                    <input type="radio" name="soal16" value="0"/>
                    E. \( 5 \)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal16" aria-expanded="false" aria-controls="collapsesoal16" >
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal16">
                <div class="card card-body overflow-auto">
                    <p>

                        Pertama, kita perlu menemukan fungsi \(f(x)\) dengan menggunakan turunan \(f'(x)\) yang diberikan. Kita dapat melakukan integrasi terhadap \(f'(x)\) untuk mendapatkan \(f(x)\), seperti berikut:

                        \begin{align*}
                        f'(x) &= 2(3x^2 - 1) \\
                        f(x) &= \int f'(x) \, dx \\
                        &= \int 2(3x^2 - 1) \, dx \\
                        &= 2 \int (3x^2 - 1) \, dx \\
                        &= 2 \left(x^3 - x + C\right) \\
                        &= \left(2x^3 - 2x + C\right) \\

                        \end{align*}

                        di mana \(C\) adalah konstanta integrasi yang belum diketahui.

                        Selanjutnya, kita dapat menentukan nilai konstanta \(C\) dengan menggunakan informasi bahwa \(f(-1)=5\):

                        \begin{align*}
                        f(-1) &= 2(-1)^3 - 2(-1) + C \\
                        5 &= -2 + 2 +C \\
                        5 &= C \\
                        C &= 5
                        \end{align*}

                        Sekarang kita sudah mengetahui fungsi \(f(x)\), yaitu:

                        \[f(x) = 2x^3 -2x + 5\]

                        Akhirnya, kita dapat menggunakan fungsi \(f(x)\) untuk menentukan nilai \(f(2)\):

                        \begin{align*}
                        f(2) &= 2(2)^3 -2(2) +5 \\
                        &= 16 -4 + 5\\
                        &= 17 \\
                        \end{align*}

                        Jadi, nilai \(f(2)\) adalah \(\boxed{17}\).</p>
                <b class="text-end text-danger fw-bold"> <h3>JAWABAN : B</h3></b>
                </div>
                </div>
                <hr />
<!--=======================  soal17 ===================================-->
            <li>Diketahui \(f'(x) = 2(3x^2 - 1) \) dan \(f(-1)=5\). Nilai \(f(1)=...\)</li>
                    <input type="radio" name="soal17" value="0"/>
                    A. \(20  \)
                <br />
                    <input type="radio" name="soal17" value="0" />
                    B. \(17  \)
                <br />
                    <input type="radio" name="soal17" value="0"  />
                    C. \(16 \)
                <div class="col-md">
                    <input type="radio" name="soal17" value="0" />
                    D. \( 12 \)
                <br />
                    <input type="radio" name="soal17" value="10"/>
                    E. \(5 \)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal17" aria-expanded="false" aria-controls="collapsesoal17" >
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal17">
                <div class="card card-body overflow-auto">
                    <p> Pertama, kita perlu menemukan fungsi \(f(x)\) dengan menggunakan turunan \(f'(x)\) yang diberikan. Kita dapat melakukan integrasi terhadap \(f'(x)\) untuk mendapatkan \(f(x)\), seperti berikut:

                        \begin{align*}
                        f'(x) &= 2(3x^2 - 1) \\
                        f(x) &= \int f'(x) \, dx \\
                        &= \int 2(3x^2 - 1) \, dx \\
                        &= 2 \int (3x^2 - 1) \, dx \\
                        &= 2 \left(x^3 - x + C\right) \\
                        &= \left(2x^3 - 2x + C\right) \\

                        \end{align*}

                        di mana \(C\) adalah konstanta integrasi yang belum diketahui.

                        Selanjutnya, kita dapat menentukan nilai konstanta \(C\) dengan menggunakan informasi bahwa \(f(-1)=5\):

                        \begin{align*}
                        f(-1) &= 2(-1)^3 - 2(-1) + C \\
                        5 &= -2 + 2 +C \\
                        5 &= C \\
                        C &= 5
                        \end{align*}

                        Sekarang kita sudah mengetahui fungsi \(f(x)\), yaitu:

                        \[f(x) = 2x^3 -2x + 5\]

                        Akhirnya, kita dapat menggunakan fungsi \(f(x)\) untuk menentukan nilai \(f(2)\):

                        \begin{align*}
                        f(2) &= 2(1)^3 -2(1) +5 \\
                        &= 2 -2 + 5\\
                        &= 5 \\
                        \end{align*}

                        Jadi, nilai \(f(2)\) adalah \(\boxed{5}\)</p>
                <b class="text-end text-danger fw-bold"> <h3>JAWABAN : E</h3></b>
                </div>
                </div>
                <hr />
<!--=======================  soal18 ===================================-->
            <li>Diketahui \(f'(x) = 6x^2 +1 \) dan \(f(2)=30\). Rumus \(f(x-1)=... \)</li>
                    <input type="radio" name="soal18" value="10"/>
                    A. \(\displaystyle 2(x-1) \left( (x-1)^2 +\frac{1}{2}\right) +12 \)
                <br />
                    <input type="radio" name="soal18" value="0" />
                    B. \(\displaystyle 2(x+1) \left( (x+1)^2 +1 \right) +12 \)
                <br />
                    <input type="radio" name="soal18" value="0"  />
                    C. \(\displaystyle 3(x-1) \left( (x-1)^2 -1 \right) +4\)
                <div class="col-md">
                    <input type="radio" name="soal18" value="0" />
                    D. \(\displaystyle 3(x+1) \left( (x+1)^2 -1 \right) +4 \)
                <br />
                    <input type="radio" name="soal18" value="0"/>
                    E. \(\displaystyle 3(x-1) \left( (x-1)^2 +4 \right) -1\)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal18" aria-expanded="false" aria-controls="collapsesoal18" >
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal18">
                <div class="card card-body overflow-auto">
                <p>

                    Untuk mencari rumus \(f(x-1)\), pertama-tama kita perlu mencari rumus fungsi \(f(x)\) terlebih dahulu. Karena \(f'(x) = 6x^2 +1\), maka dapat kita integrasikan untuk mendapatkan rumus fungsi \(f(x)\):

                    $$
                    f(x) = \int f'(x) dx = \int (6x^2 + 1) dx = 2x^3 + x + C
                    $$

                    dengan \(C\) adalah konstanta integrasi. Kita tidak diberikan informasi tentang nilai \(C\), tetapi kita dapat mencari nilai konstanta ini dengan menggunakan informasi bahwa \(f(2) = 30\). Kita tahu bahwa \(f(2) = 2(2)^3  + 2 + C = 18 + C\), sehingga \(C = 30 - 18 = 12\). Jadi rumus fungsi \(f(x)\) adalah:

                    $$
                    f(x) = 2x^3 + x + 12
                    $$

                    Untuk mencari rumus \(f(x-1)\), kita perlu mengganti setiap kemunculan \(x\) dengan \((x-1)\) dalam rumus \(f(x)\):

                    $$
                    \begin{aligned}
                    f(x-1) &= 2(x-1)^3 + (x-1) + 12 \\
                    &= 2(x-1)\left( (x-1)^2 +\frac{1}{2}\right)+12 \\
                    \end{aligned}
                    $$

                    Jadi rumus \(f(x-1)\) adalah \(\boxed{2(x-1)\left( (x-1)^2 +\frac{1}{2}\right)+12}\) atau dapat juga ditulis \(2x^3 - 6x^2 + 7x + 9.\)</p>
                <b class="text-end text-danger fw-bold"> <h3>JAWABAN : A</h3></b>
                </div>
                </div>
                <hr />
<!--=======================  soal19 ===================================-->
            <li>Diketahui \(F'(x)=3x^2 -4x+2\). Untuk \(x=2\) fungsi \(F\) bernilai \(6\). Fungsi \(F(x)\) adalah . . .</li>
                    <input type="radio" name="soal19" value="0"/>
                    A. \( x^3-2x^2+2x+1 \)
                <br />
                    <input type="radio" name="soal19" value="10" />
                    B. \( x^3-2x^2+2x+ 2\)
                <br />
                    <input type="radio" name="soal19" value="0"  />
                    C. \(x^3-2x^2+2x+ 3\)
                <div class="col-md">
                    <input type="radio" name="soal19" value="0" />
                    D. \( x^3-2x^2+2x+4 \)
                <br />
                    <input type="radio" name="soal19" value="0"/>
                    E. \(x^3-2x^2+2x+6 \)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal19" aria-expanded="false" aria-controls="collapsesoal19" >
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal19">
                <div class="card card-body overflow-auto">
                <p>Untuk mencari fungsi \(F(x)\), kita perlu mengintegrasikan turunan \(F'(x)\) terlebih dahulu. Kita gunakan rumus dasar dalam integral sebagai berikut:

                    \[\int F'(x) dx = F(x) + C\]

                    dengan \(C\) adalah konstanta integrasi.

                    Karena \(F'(x) = 3x^2 - 4x + 2\), maka

                    \[\int (3x^2 - 4x + 2) dx = F(x) + C\]

                    dalam hal ini, kita harus menentukan konstanta integrasi \((C)\) dengan memanfaatkan informasi bahwa \(F(2) = 6\). Jadi kita bisa menyelesaikan persamaan berikut untuk menentukan \(C\):

                    \[F(2) = \int (3x^2 - 4x + 2) dx + C = [x^3 - 2x^2 + 2x] + C = 6\]

                    Sehingga:

                    \[C = 6 - [2^3 - 2(2)^2 + 2(2)] = 6 - 4 = 2\]

                    Dengan mengetahui konstanta integrasi \(C\), kita bisa menentukan fungsi \(F(x)\):

                    \[F(x) = x^3 - 2x^2 + 2x + 2\]

                    Jadi, fungsi \(F(x)\) adalah \(\boxed{F(x) = x^3 - 2x^2 + 2x + 2}\).</p>
                <b class="text-end text-danger fw-bold"> <h3>JAWABAN : B</h3></b>
                </div>
                </div>
                <hr />
<!--=======================  soal20 ===================================-->
            <li>Diketahui \(F''(x)=12x\) merupakan turunan kedua dari \(F(x)\). Untuk \(x=1\), nilai fungsi \(F'(x)=4 \), sedangkan untuk \(x=-1\), nilai fungsi \(F(x)=2 \), maka \(F(2)=...\)  </li>
                    <input type="radio" name="soal20" value="10"/>
                    A. \( 14 \)
                <br />
                    <input type="radio" name="soal20" value="0" />
                    B. \( 19 \)
                <br />
                    <input type="radio" name="soal20" value="0"  />
                    C. \( 23\)
                <div class="col-md">
                    <input type="radio" name="soal20" value="0" />
                    D. \(24  \)
                <br />
                    <input type="radio" name="soal20" value="0"/>
                    E. \( 31\)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal20" aria-expanded="false" aria-controls="collapsesoal20" >
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal20">
                <div class="card card-body overflow-auto">
                <p>

                    Untuk menemukan fungsi F(x), kita dapat mengintegrasikan turunan keduanya \(F''(x) = 12x\). Dengan mengintegrasikan turunan keduanya sekali, kita dapatkan turunan pertama \(F'(x)\):
                    <!-- \begin{align*} \end{align*} -->
                    \begin{align*}
                    F''(x) &= 12x \\
                    \int F''(x) dx &=\int 12x dx \\
                    F'(x) &=6x^2 + C_1 \\

                    \end{align*}
                    Kita dapat menentukan konstanta \(C_1\) dengan menggunakan informasi \(F'(1) = 4\):

                    \begin{align*}
                    F'(1) &= 6(1)^2 + C_1 \\
                    4 &= 6 + C1 \\
                    C_1 &= -2
                    \end{align*}

                    Kita dapatkan F'(x) sebagai berikut:
                    \(F'(x) = 6x^2 - 2\)
                    <br>
                    Kemudian, kita integrasikan turunan pertama \(F'(x)\) sekali lagi untuk mendapatkan \(F(x)\):
                    \begin{align*}
                    F'(x) &= 6x^2 - 2 \\
                    \int F'(x) dx &= \int (6x^2 - 2) dx\\
                    F(x) &= 2x^3 -2x + C_2
                    \end{align*}
                    <br>
                    Kita dapat menentukan konstanta \(C_2\) dengan menggunakan informasi \(F(-1) = 2\):

                    \begin{align*}
                    F(-1) &= 2(-1)^3 - 2(-1) + C_2\\
                    2 &= -2 + 2 + C_2\\
                    2 &= C_2\\
                    C_2 &= 2
                    \end{align*}

                    Kita dapatkan \(F(x)\) sebagai berikut:
                    \[F(x) = 2x^3 - 2x + 2\]

                    Akhirnya, kita dapatkan nilai \(F(2)\) dengan mengganti \(x = 2\) dalam \(F(x)\):

                    \[F(2) = 2(2)^3 - 2(2) + 2 = 14\]

                    Jadi, \(F(2) = \boxed{14}\).</p>
                <b class="text-end text-danger fw-bold"> <h3>JAWABAN : A</h3></b>
                </div>
                </div>
                <hr />

            </ol>

{{-- COPY DARI SINI SETIAP SOAL --}}
<input type="hidden" id="materi" name="materi" value="integral01">
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
    <a href="/create_integral01" id="kirimsaja" class="btn btn-warning btn-bukti d-none" >SIMPAN JAWABAN</a>
</div>
</form>
{{-- COPY SAMPAI SINI --}}

<div id="disqus_thread" class="mt-4"></div>

</div>
</div>
</div>
</section>
@endsection

