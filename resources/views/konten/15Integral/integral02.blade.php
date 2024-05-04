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
            Integral - Latihan 02 + Pembahasan
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
                <li>Anti Turunan fungsi \(f(x)=2x-5\) adalah . . .</li>
                    <input type="radio" name="soal1" value="0"/>
                    A. \(F(x)=x^2-x+C \)
                <br />
                    <input type="radio" name="soal1" value="0" />
                    B. \(F(x)=x^2-5x+C \)
                <br />
                    <input type="radio" name="soal1" value="0"  />
                    C. \(F(x)=2x^2-x+C \)
                <br>
                    <input type="radio" name="soal1" value="0" />
                    D. \(F(x)=2x^2-5x+C \)
                <br />
                    <input type="radio" name="soal1" value="0"/>
                    E. \(F(x)=2x^2-10x+C \)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal1" aria-expanded="false" aria-controls="collapsesoal1" >
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal1">
                <div class="card card-body overflow-auto">
                    <p>

                        Fungsi \(f(x) = 2x-5\) merupakan sebuah fungsi linear, di mana turunannya adalah konstan dan sama dengan koefisien dari variabel \(x\), yaitu 2. Oleh karena itu, anti-turunan dari fungsi \(f(x)\) akan menghasilkan fungsi yang nilai turunannya adalah \(f(x)\).

                        Maka, anti-turunan dari fungsi \(f(x) = 2x-5\) adalah:

                        \begin{align*}
                        \int f(x) dx &= \int (2x-5) dx \\
                        &= 2 \int x dx - \int 5 dx \\
                        &= 2 \cdot \frac{x^2}{2} - 5x + C \\
                        &= \boxed{x^2 - 5x + C}
                        \end{align*}

                        di mana \(C\) merupakan konstanta integrasi yang bisa dihitung dari syarat awal atau informasi tambahan yang diberikan.</p>
                <b class="text-end text-danger fw-bold"> <h3>JAWABAN : B</h3></b>
                </div>
                </div>
                <hr />
<!--=======================  soal2 ===================================-->
            <li>Hasil dari \(\displaystyle \int 3\sqrt{x} dx \) adalah . . . </li>
                    <input type="radio" name="soal2" value="0"/>
                    A. \(6x\sqrt{x}+C \)
                <br />
                    <input type="radio" name="soal2" value="0" />
                    B. \(4x\sqrt{x}+C \)
                <br />
                    <input type="radio" name="soal2" value="0"  />
                    C. \(3x\sqrt{x}+C \)
                <br>
                    <input type="radio" name="soal2" value="0" />
                    D. \(2x\sqrt{x}+C \)
                <br />
                    <input type="radio" name="soal2" value="0"/>
                    E. \(x\sqrt{x}+C \)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal2" aria-expanded="false" aria-controls="collapsesoal2" >
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal2">
                <div class="card card-body overflow-auto">
                    <p>

                        Mari kita gunakan aturan eksponen untuk menyederhanakan akar, sehingga
                        \begin{align*}
                        \int 3\sqrt{x} dx &= 3\int \sqrt{x} dx \\
                         &= 3\cdot \frac{2}{3}x^{\frac{3}{2}} + C \\
                         &= 2x^{\frac{3}{2}} + C \\
                         &= 2x\sqrt{x} + C
                        \end{align*}

                        di mana \(C\) adalah konstanta integrasi. Jadi, hasil dari \(\displaystyle \int 3\sqrt{x} dx\) adalah \(\boxed{2x\sqrt{x} + C}\).</p>
                <b class="text-end text-danger fw-bold"> <h3>JAWABAN : D</h3></b>
                </div>
                </div>
                <hr />
<!--=======================  soal3 ===================================-->
            <li>Hasil dari \(\displaystyle \int (8x+1) dx \) adalah . . . </li>
                    <input type="radio" name="soal3" value="0"/>
                    A. \(x^2 + x + C \)
                <br />
                    <input type="radio" name="soal3" value="0" />
                    B. \(2x^2 + x + C \)
                <br />
                    <input type="radio" name="soal3" value="0"  />
                    C. \(4x^2 + x + C \)
                <br>
                    <input type="radio" name="soal3" value="0" />
                    D. \(8x^2 + x + C \)
                <br />
                    <input type="radio" name="soal3" value="0"/>
                    E. \(16x^2 + x + C \)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal3" aria-expanded="false" aria-controls="collapsesoal3" >
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal3">
                <div class="card card-body overflow-auto">
                    <p>

                        Untuk menyelesaikan integral \(\int (8x+1) dx\), kita dapat menggunakan aturan distributif integrasi, yaitu:

                        \[\int (8x+1) dx = \int 8x dx + \int 1 dx\]

                        Integral dari \(8x\) dapat dihitung menggunakan aturan integrasi dengan substitusi atau aturan turunan dari perkalian, sedangkan integral dari konstanta 1 adalah x. Kita akan menggunakan aturan turunan dari perkalian untuk menghitung integral dari \(8x\):

                        \begin{align*}
                        \int 8x dx &= 8 \int x dx \\
                        &= 8 \cdot \frac{x^2}{2} + C_1 \\
                        &= 4x^2 + C_1
                        \end{align*}

                        Kemudian, integral dari konstanta 1 adalah:

                        \[\int 1 dx = x + C_2\]

                        dengan \(C_1\) dan \(C_2\) adalah konstanta integrasi yang dapat dihitung dari syarat awal atau informasi tambahan yang diberikan.

                        Maka hasil akhir dari integral \(\int (8x+1) dx\) adalah:

                        \[\int (8x+1) dx = \boxed{4x^2 + x + C}\]

                        dengan \(C = C_1 + C_2\) adalah konstanta integrasi.</p>
                <b class="text-end text-danger fw-bold"> <h3>JAWABAN : C</h3></b>
                </div>
                </div>
                <hr />
<!--=======================  soal4 ===================================-->
            <li>Hasil dari \(\displaystyle \int (x-7)(3x+5) dx \) adalah . . .</li>
                    <input type="radio" name="soal4" value="0"/>
                    A. \(x^3 - 8x^2 -35x +C \)
                <br />
                    <input type="radio" name="soal4" value="0" />
                    B. \(x^3 + 16x^2 -35x +C \)
                <br />
                    <input type="radio" name="soal4" value="0"  />
                    C. \(3x^3 - 8x^2 -35x +C \)
                <br>
                    <input type="radio" name="soal4" value="0" />
                    D. \(3x^3 - 16x^2 -35x +C \)
                <br />
                    <input type="radio" name="soal4" value="0"/>
                    E. \(6x^3 - 16x^2 -35x +C \)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal4" aria-expanded="false" aria-controls="collapsesoal4" >
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal4">
                <div class="card card-body overflow-auto">
                    <p>

                        Mari kita selesaikan integral tersebut dengan metode distribusi dan integrasi parsial:

                        $$
                        \begin{aligned}
                        \int (x-7)(3x+5) dx &= \int 3x^2+5x-21x-35 dx \\
                        &= \int 3x^2-16x-35 dx \\
                        &= x^3-8x^2-35x + C,
                        \end{aligned}
                        $$

                        di mana C adalah konstanta integrasi.

                        Jadi, hasil dari integral tersebut adalah  \(\displaystyle \boxed{x^3-8x^2-35x + C}\).</p>
                <b class="text-end text-danger fw-bold"> <h3>JAWABAN : A</h3></b>
                </div>
                </div>
                <hr />
<!--=======================  soal5 ===================================-->
            <li>Hasil dari \(\displaystyle \int \frac{6x^4 +8x^3 -10x^2 +2}{2x^2} dx \) adalah . . .</li>
                    <input type="radio" name="soal5" value="0"/>
                    A. \(\displaystyle 6x^3 + 4x^2 -5x - \frac{1}{x} +C \)
                <br />
                    <input type="radio" name="soal5" value="0" />
                    B. \(\displaystyle 3x^3 + 2x^2 -5x - \frac{1}{x^2} +C \)
                <br />
                    <input type="radio" name="soal5" value="0"  />
                    C. \(\displaystyle 3x^3 + 4x^2 -5x - \frac{1}{x} +C \)
                <br>
                    <input type="radio" name="soal5" value="0" />
                    D. \(\displaystyle x^3 + 4x^2 -5x - \frac{1}{x^2} +C \)
                <br />
                    <input type="radio" name="soal5" value="0"/>
                    E. \(\displaystyle x^3 + 2x^2 -5x - \frac{1}{x} +C \)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal5" aria-expanded="false" aria-controls="collapsesoal5" >
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal5">
                <div class="card card-body overflow-auto">
                    <p>

                        Kita dapat menulis ulang integrand sebagai berikut:

                        \begin{align*}
                        \frac{6x^4 +8x^3 -10x^2 +2}{2x^2} &= \frac{2x^2(3x^2 + 4x - 5) + 2}{2x^2} \\
                        &= 3x^2 + 4x - 5 + \frac{1}{x^2}
                        \end{align*}

                        Sehingga integral tersebut dapat dituliskan sebagai:

                        \begin{align*}
                        \int \frac{6x^4 +8x^3 -10x^2 +2}{2x^2} dx &= \int \left( 3x^2 + 4x - 5 + \frac{1}{x^2} \right) dx \\
                        &= \int 3x^2 dx + \int 4x dx - \int 5 dx + \int \frac{1}{x^2} dx \\
                        &= x^3 + 2x^2 - 5x - \frac{1}{x} + C,
                        \end{align*}

                        di mana C adalah konstanta integrasi. Oleh karena itu, hasil dari integral tersebut adalah \(\displaystyle \boxed{x^3 + 2x^2 - 5x - \frac{1}{x} + C}\)</p>
                <b class="text-end text-danger fw-bold"> <h3>JAWABAN : E</h3></b>
                </div>
                </div>
                <hr />
<!--=======================  soal6 ===================================-->
            <li>Hasil dari \(\displaystyle \int_{-2}^{3} (3x^2+5)dx \) adalah . . .</li>
                    <input type="radio" name="soal6" value="0"/>
                    A. \(50 \)
                <br />
                    <input type="radio" name="soal6" value="0" />
                    B. \(55 \)
                <br />
                    <input type="radio" name="soal6" value="0"  />
                    C. \(60 \)
                <br>
                    <input type="radio" name="soal6" value="0" />
                    D. \(62 \)
                <br />
                    <input type="radio" name="soal6" value="0"/>
                    E. \(65 \)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal6" aria-expanded="false" aria-controls="collapsesoal6" >
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal6">
                <div class="card card-body overflow-auto">
                    <p>

                        Kita dapat menghitung integral tersebut dengan cara berikut:

                        \begin{align*}
                        \int_{-2}^{3} (3x^2+5)dx &= \left[\frac{3}{3}x^3+5x\right]_{-2}^{3} \\
                        &= \left[x^3+5x\right]_{-2}^{3} \\
                        &= \left[(3^3)+5(3)\right]-\left[(-2)^3+5(-2)\right] \\
                        &= \left[27+15\right]-\left[-8-10\right] \\
                        &= 42+18\\
                        &= 60
                        \end{align*}

                        Jadi, hasil dari \(\displaystyle \int_{-2}^{3} (3x^2+5)dx\) adalah \(\boxed{60}\).</p>
                <b class="text-end text-danger fw-bold"> <h3>JAWABAN : C</h3></b>
                </div>
                </div>
                <hr />
<!--=======================  soal7 ===================================-->
            <li>Hasil dari \(\displaystyle \int_{1}^{3} (9x^2-4x)dx \) adalah . . .</li>
                    <input type="radio" name="soal7" value="0"/>
                    A. \(60 \)
                <br />
                    <input type="radio" name="soal7" value="0" />
                    B. \(61 \)
                <br />
                    <input type="radio" name="soal7" value="0"  />
                    C. \(62 \)
                <br>
                    <input type="radio" name="soal7" value="0" />
                    D. \(63 \)
                <br />
                    <input type="radio" name="soal7" value="0"/>
                    E. \(64 \)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal7" aria-expanded="false" aria-controls="collapsesoal7" >
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal7">
                <div class="card card-body overflow-auto">
                    <p>

                        Untuk menyelesaikan integral tersebut, kita perlu menggunakan aturan integral dasar:

                        $$\int x^n dx = \frac{x^{n+1}}{n+1} + C $$

                        dengan $C$ adalah konstanta integrasi. Kita juga bisa menggunakan aturan integral untuk penjumlahan konstan:

                        $$\int (f(x) + g(x)) dx = \int f(x) dx + \int g(x) dx $$

                        Dengan menggabungkan kedua aturan integral tersebut, kita dapat menyelesaikan integral yang diberikan:

                        \begin{align*}
                        \int_{1}^{3} (9x^2-4x)dx &= \int_{1}^{3} 9x^2 dx - \int_{1}^{3} 4x dx \\
                        &= \left[ 3x^3\right]_{1}^{3} - \left[ 2x^2 \right]_{1}^{3} \\
                        &= (81-3) - (18-2) \\
                        &= 78 - 16 \\
                        &= 62
                        \end{align*}

                        Jadi, hasil dari integral \(\displaystyle \int_{1}^{3} (9x^2-4x)dx\) adalah \(\boxed{62} \).</p>
                <b class="text-end text-danger fw-bold"> <h3>JAWABAN : C</h3></b>
                </div>
                </div>
                <hr />
<!--=======================  soal8 ===================================-->
            <li>Diketahui nilai \(\displaystyle \int_{1}^{p} (2x-3) dx =12 \). Nilai \(p\) yang memenuhi adalah . . .</li>
                    <input type="radio" name="soal8" value="0"/>
                    A. \(2 \)
                <br />
                    <input type="radio" name="soal8" value="0" />
                    B. \(3 \)
                <br />
                    <input type="radio" name="soal8" value="0"  />
                    C. \( 4\)
                <br>
                    <input type="radio" name="soal8" value="0" />
                    D. \(5 \)
                <br />
                    <input type="radio" name="soal8" value="0"/>
                    E. \(6 \)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal8" aria-expanded="false" aria-controls="collapsesoal8" >
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal8">
                <div class="card card-body overflow-auto">
                    <p>

                        Kita dapat menggunakan rumus integral dari fungsi polinomial, yaitu:

                        \[\int_a^b (cx^k) dx = \frac{c}{k+1}(b^{k+1}-a^{k+1})\]

                        Dalam kasus ini, fungsi yang diberikan adalah \(f(x) = 2x-3\) sehingga:

                        \[\int_{1}^{p} (2x-3) dx = \left[ x^2 - 3x \right]_{1}^{p}\]

                        Sehingga:

                        \[\left[ p^2 - 3p - (1^2 - 3(1)) \right] = 12\]

                        Sederhanakan persamaan di atas, kita dapatkan:

                        \[p^2 - 3p - 10 = 0\]

                        Faktorkan persamaan kuadrat di atas menjadi:

                        \[(p-5)(p+2) = 0\]

                        Sehingga nilai \(p\) yang memenuhi adalah \(p=5\) atau \(p=-2\). Namun, karena \(p\) harus bernilai lebih besar dari 1, maka nilai \(p\) yang memenuhi adalah \(\boxed{p=5}\).</p>
                <b class="text-end text-danger fw-bold"> <h3>JAWABAN : </h3></b>
                </div>
                </div>
                <hr />
<!--=======================  soal9 ===================================-->
            <li>Diketahui nilai \(\displaystyle \int_{0}^{3} (x^2+px+2) dx = \frac{3}{2} \). Nilai \(p\) yang memenuhi adalah . . .</li>
                    <input type="radio" name="soal9" value="0"/>
                    A. \(2 \)
                <br />
                    <input type="radio" name="soal9" value="0" />
                    B. \(1 \)
                <br />
                    <input type="radio" name="soal9" value="0"  />
                    C. \( -1\)
                <br>
                    <input type="radio" name="soal9" value="0" />
                    D. \(-2 \)
                <br />
                    <input type="radio" name="soal9" value="0"/>
                    E. \(-3 \)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal9" aria-expanded="false" aria-controls="collapsesoal9" >
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal9">
                <div class="card card-body overflow-auto">
                    <p>

                        Untuk menyelesaikan integral di atas, kita dapat menggunakan aturan integrasi sebagai berikut:

                        \begin{align*}
                        \int_{0}^{3} (x^2+px+2) dx &= \left[ \frac{1}{3}x^3 + \frac{p}{2}x^2 + 2x \right]_{0}^{3} \\
                        &= \left( \frac{1}{3}(3)^3 + \frac{p}{2}(3)^2 + 2(3) \right) - \left( \frac{1}{3}(0)^3 + \frac{p}{2}(0)^2 + 2(0) \right) \\
                        &= 9 + \frac{9p}{2} + 6 - 0 - 0 - 0 \\
                        &= \frac{9p}{2} + 15
                        \end{align*}

                        Kita diketahui nilai dari integral di atas adalah \(\displaystyle \frac{3}{2}\), sehingga kita dapat menyelesaikan persamaan berikut:

                        \begin{align*}
                        \frac{9p}{2} + 15 &= \frac{3}{2} \\
                        9p + 30 &= 3 \\
                        9p &= 3 - 30 \\
                        9p&= -27 \\
                        p&= -3
                        \end{align*}

                        Jadi, nilai \(p\) yang memenuhi adalah \(\boxed{-3}\).</p>
                <b class="text-end text-danger fw-bold"> <h3>JAWABAN : E</h3></b>
                </div>
                </div>
                <hr />
<!--=======================  soal10 ===================================-->
            <li>Hasil dari \(\displaystyle \int (1-2x)^6 dx \) adalah . . .</li>
                    <input type="radio" name="soal10" value="0"/>
                    A. \(\displaystyle -\frac{1}{14} (1-2x)^7 +C  \)
                <br />
                    <input type="radio" name="soal10" value="0" />
                    B. \(\displaystyle -\frac{1}{7} (1-2x)^7 +C \)
                <br />
                    <input type="radio" name="soal10" value="0"  />
                    C. \(\displaystyle \frac{1}{14} (1-2x)^7 +C \)
                <br>
                    <input type="radio" name="soal10" value="0" />
                    D. \(\displaystyle \frac{1}{7} (1-2x)^7 +C \)
                <br />
                    <input type="radio" name="soal10" value="0"/>
                    E. \(\displaystyle \frac{1}{2} (1-2x)^7 +C \)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal10" aria-expanded="false" aria-controls="collapsesoal10" >
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal10">
                <div class="card card-body overflow-auto">
                    <p>

                        Kita dapat menyelesaikan integral ini dengan menggunakan substitusi \(u = 1-2x\). Mari kita hitung turunan dari \(u\) terhadap \(x\):

                        $$\frac{du}{dx}=-2$$

                        atau setara dengan:

                        $$dx=-\frac{1}{2}du$$

                        Kita dapat menggunakan substitusi ini untuk mengekspresikan integral kita dalam bentuk yang lebih sederhana:


                        \begin{align*}
                        \int (1-2x)^6 dx &= \int u^6 \cdot \left(-\frac{1}{2}\right)du \\
                        &=-\frac{1}{2}\int u^6 du \\
                        &=-\frac{1}{2} \frac{1}{6+1} u^{6+1} +C\\
                        &= -\frac{1}{14} u^{7} +C \\
                        &= -\frac{1}{14} (1-2x)^{7} +C \\
                        \end{align*}

                        Jadi, hasil dari integral \(\displaystyle \int (1-2x)^6 dx \) adalah \(\displaystyle \boxed{-\frac{1}{14} (1-2x)^{7} +C}\). di mana C adalah konstanta integrasi.</p>
                <b class="text-end text-danger fw-bold"> <h3>JAWABAN : A</h3></b>
                </div>
                </div>
                <hr />
<!--=======================  soal11 ===================================-->
            <li>Hasil dari \(\displaystyle \int 8 \sqrt{4x+7} dx\) adalah . . . </li>
                    <input type="radio" name="soal11" value="0"/>
                    A. \(\displaystyle \frac{2}{3} (4x+7)\sqrt{4x+7} +C \)
                <br />
                    <input type="radio" name="soal11" value="0" />
                    B. \(\displaystyle \frac{3}{4} (4x+7)\sqrt{4x+7} +C \)
                <br />
                    <input type="radio" name="soal11" value="0"  />
                    C. \(\displaystyle \frac{4}{3} (4x+7)\sqrt{4x+7} +C \)
                <br>
                    <input type="radio" name="soal11" value="0" />
                    D. \(\displaystyle \frac{3}{2} (4x+7)\sqrt{4x+7} +C \)
                <br />
                    <input type="radio" name="soal11" value="0"/>
                    E. \(\displaystyle \frac{9}{4} (4x+7)\sqrt{4x+7} +C \)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal11" aria-expanded="false" aria-controls="collapsesoal11" >
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal11">
                <div class="card card-body overflow-auto">
                    <p>

                        Pertama, kita dapat melakukan substitusi \(u = 4x + 7\) sehingga \(\displaystyle \frac{du}{dx} = 4\) atau \(\displaystyle dx = \frac{du}{4}\). Mengganti nilai ini dan memperbaiki batas integrasi, kita dapat menulis:

                        \begin{align*}
                        \int 8 \sqrt{4x+7} dx &= \int 8 \sqrt{u} \cdot \frac{du}{4} \\
                        &= 2\int \sqrt{u} du \\
                        &= 2 \cdot \frac{2}{3}u^{3/2} + C \\
                        &= \frac{4}{3}(4x + 7)^{3/2} + C \\
                        &= \frac{4}{3}(4x + 7)(4x + 7)^{1/2} + C \\
                        &= \frac{4}{3}(4x + 7)\sqrt{4x + 7} + C \\

                        \end{align*}

                        di mana \(C\) adalah konstanta integrasi. Jadi, hasil dari integral tersebut adalah \(\boxed{\frac{4}{3}(4x + 7)\sqrt{4x + 7} + C}\).</p>
                <b class="text-end text-danger fw-bold"> <h3>JAWABAN : C</h3></b>
                </div>
                </div>
                <hr />
<!--=======================  soal12 ===================================-->
            <li>Hasil dari \(\displaystyle \int \frac{18}{(3x+1)^4} dx\) adalah . . .</li>
                    <input type="radio" name="soal12" value="0"/>
                    A. \(\displaystyle \frac{-9}{(3x+1)^3} +C \)
                <br />
                    <input type="radio" name="soal12" value="0" />
                    B. \(\displaystyle \frac{-6}{(3x+1)^3} +C \)
                <br />
                    <input type="radio" name="soal12" value="0"  />
                    C. \(\displaystyle \frac{-4}{(3x+1)^3} +C \)
                <br>
                    <input type="radio" name="soal12" value="0" />
                    D. \(\displaystyle \frac{-3}{(3x+1)^3} +C \)
                <br />
                    <input type="radio" name="soal12" value="0"/>
                    E. \(\displaystyle \frac{-2}{(3x+1)^3} +C \)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal12" aria-expanded="false" aria-controls="collapsesoal12" >
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal12">
                <div class="card card-body overflow-auto">
                    <p>Kita dapat menyelesaikan soal ini dengan menggunakan substitusi \(u = 3x+1\), sehingga \(\displaystyle \frac{du}{dx} = 3\) dan \(\displaystyle dx = \frac{du}{3}\). Maka persamaan integral dapat ditulis ulang sebagai:

                        \[\displaystyle \int \frac{18}{(3x+1)^4} dx = \int \frac{1}{u^4} \cdot 18 \cdot \frac{du}{3} = 6 \int \frac{du}{u^4}\]

                        Kemudian kita gunakan aturan pangkat untuk menyelesaikan integral tersebut:
                        \begin{align*}
                        6 \int \frac{du}{u^4} &= 6 \cdot \frac{u^{-3}}{-3} + C \\
                        &= -2u^{-3} + C \\
                        &= -2(3x+1)^{-3} + C\\
                        &= \frac{-2}{(3x+1)^{3}} + C\\
                        \end{align*}
                        Jadi, hasil dari \(\displaystyle \int \frac{18}{(3x+1)^4} dx\) adalah \(\boxed{\frac{-2}{(3x+1)^{3}} + C}\), di mana \(C\) adalah konstanta integrasi.</p>
                <b class="text-end text-danger fw-bold"> <h3>JAWABAN : E</h3></b>
                </div>
                </div>
                <hr />
<!--=======================  soal13 ===================================-->
            <li>Hasil dari \(\displaystyle \int \frac{6}{\sqrt{4x-3}} dx \) adalah . . .</li>
                    <input type="radio" name="soal13" value="0"/>
                    A. \( -6\sqrt{4x-3} +C \)
                <br />
                    <input type="radio" name="soal13" value="0" />
                    B. \(-3 \sqrt{4x-3} +C \)
                <br />
                    <input type="radio" name="soal13" value="0"  />
                    C. \( 2\sqrt{4x-3} +C \)
                <br>
                    <input type="radio" name="soal13" value="0" />
                    D. \(3 \sqrt{4x-3} +C \)
                <br />
                    <input type="radio" name="soal13" value="0"/>
                    E. \( 6\sqrt{4x-3} +C \)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal13" aria-expanded="false" aria-controls="collapsesoal13" >
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal13">
                <div class="card card-body overflow-auto">
                    <p>

                        Mari kita mulai dengan membagi konstan di dalam integral ke dalam integral:

                        $$\int \frac{6}{\sqrt{4x-3}} dx = 6\int \frac{1}{\sqrt{4x-3}} dx$$

                        Selanjutnya, kita dapat menggunakan substitusi:

                        $$u = 4x - 3$$
                        $$du = 4dx$$

                        Kita dapat menyelesaikan untuk $dx$ sebagai berikut:

                        $$dx = \frac{1}{4} du$$

                        Dengan substitusi di atas, kita dapat menulis ulang integral sebagai berikut:

                        $$6\int \frac{1}{\sqrt{4x-3}} dx = 6\int \frac{1}{\sqrt{u}} \cdot \frac{1}{4} du = \frac{3}{2}\int u^{-1/2} du$$

                        Kita dapat menyelesaikan integral terakhir dengan menggunakan aturan pangkat:

                        $$\frac{3}{2}\int u^{-1/2} du = 3\sqrt{u} + C$$

                        Kembali menggunakan substitusi awal, kita mendapatkan hasil akhir:

                        $$\int \frac{6}{\sqrt{4x-3}} dx = 3\sqrt{4x-3} + C$$

                        Jadi, jawaban akhirnya adalah:

                        $$\int \frac{6}{\sqrt{4x-3}} dx = \boxed{3\sqrt{4x-3} + C}$$

                        dengan \(C\) sebagai konstanta integrasi.</p>
                <b class="text-end text-danger fw-bold"> <h3>JAWABAN : D</h3></b>
                </div>
                </div>
                <hr />
<!--=======================  soal14 ===================================-->
            <li>Hasil dari \(\displaystyle \int (8x+12)(x^2+3x-1)^5 dx \) adalah . . .</li>
                    <input type="radio" name="soal14" value="0"/>
                    A. \(\displaystyle4 (x^2 +3x -1)^6 +C \)
                <br />
                    <input type="radio" name="soal14" value="0" />
                    B. \(\displaystyle 3(x^2 +3x -1)^6 +C \)
                <br />
                    <input type="radio" name="soal14" value="0"  />
                    C. \(\displaystyle 2(x^2 +3x -1)^6 +C \)
                <br>
                    <input type="radio" name="soal14" value="0" />
                    D. \(\displaystyle \frac{3}{2}(x^2 +3x -1)^6 +C \)
                <br />
                    <input type="radio" name="soal14" value="0"/>
                    E. \(\displaystyle \frac{2}{3} (x^2 +3x -1)^6 +C \)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal14" aria-expanded="false" aria-controls="collapsesoal14" >
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal14">
                <div class="card card-body overflow-auto">
                    <p>Kita dapat menyelesaikan soal ini dengan menggunakan substitusi \(u = x^2+3x-1\), sehingga \(\displaystyle \frac{du}{dx} = 2x+3\) dan \(\displaystyle (2x+3)dx = du \to (8x+12)dx = 4du\). Maka persamaan integral dapat ditulis ulang sebagai:

                        \[\displaystyle \int (8x+12)(x^2+3x-1)^5 dx = \int u^5 4du = 4 \int u^5 du\]

                        Kemudian kita gunakan aturan pangkat untuk menyelesaikan integral tersebut:
                        \begin{align*}
                        4 \int u^5 du &= 4 \frac{1}{5+1} u^{5+1} + C \\
                        &= \frac{4}{6} u^6 +C \\
                        &= \frac{2}{3} (x^2+3x-1)^6 +C
                        \end{align*}
                        Jadi, hasil dari \(\displaystyle \int (8x+12)(x^2+3x-1)^5  dx\) adalah \(\boxed{\frac{2}{3} (x^2+3x-1)^6 +C}\), di mana \(C\) adalah konstanta integrasi.</p>
                <b class="text-end text-danger fw-bold"> <h3>JAWABAN : E</h3></b>
                </div>
                </div>
                <hr />
<!--=======================  soal15 ===================================-->
            <li>Hasil dari \(\displaystyle \int \left(\frac{x-1}{(1+2x-x^2)^3} \right) dx\) adalah . . .</li>
                    <input type="radio" name="soal15" value="0"/>
                    A. \(\displaystyle \frac{1}{ 4(1+2x-x^2)^2} +C \)
                <br /><br />
                    <input type="radio" name="soal15" value="0" />
                    B. \(\displaystyle \frac{1}{ 2(1+2x-x^2)^2} +C \)
                <br /><br />
                    <input type="radio" name="soal15" value="0"  />
                    C. \(\displaystyle \frac{1}{ (1+2x-x^2)^2} +C \)
                    <br /><br />
                    <input type="radio" name="soal15" value="0" />
                    D. \(\displaystyle -\frac{1}{ 2(1+2x-x^2)^2} +C \)
                <br /><br />
                    <input type="radio" name="soal15" value="0"/>
                    E. \(\displaystyle -\frac{1}{ 4(1+2x-x^2)^2} +C \)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal15" aria-expanded="false" aria-controls="collapsesoal15" >
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal15">
                <div class="card card-body overflow-auto">
                    <p>Kita dapat menyelesaikan soal ini dengan menggunakan substitusi <br>
                        \(\displaystyle \begin{align}
                        u &= 1+2x-x^2 \\
                        \frac{du}{dx} &= 2-2x \\
                        du &= -2 (x-1)dx \\
                        \left(-\frac{1}{2}\right) du &= (x-1) dx
                        \end{align}\) <br>
                        Maka persamaan integral dapat ditulis ulang sebagai:
                        \begin{align*}
                        \int \left(\frac{x-1}{(1+2x-x^2)^3} \right) dx &= \int (x-1) (1+2x-x^2)^{-3} dx \\
                        &= \int u^{-3} \left(-\frac{1}{2}\right) du \\
                        &= -\frac{1}{2} \int u^{-3} du
                        \end{align*}
                        Kemudian kita gunakan aturan pangkat untuk menyelesaikan integral tersebut:
                        \begin{align*}
                        -\frac{1}{2} \int u^{-3} du &= -\frac{1}{2} \cdot \frac{1}{-3+1} u^{-3+1} +C \\
                        &= -\frac{1}{2} \cdot \frac{1}{-2} u^{-2} +C \\
                        &= \frac{1}{4} u^{-2} +C \\
                        &= \frac{1}{4} (1+2x-x^2)^{-2} +C \\
                        &=  \frac{1}{4(1+2x-x^2)^2} +C
                        \end{align*}
                        Jadi, hasil dari \(\displaystyle \int \left(\frac{x-1}{(1+2x-x^2)^3} \right) dx\) adalah \(\boxed{\frac{1}{4(1+2x-x^2)^2} +C}\), di mana \(C\) adalah konstanta integrasi.
                    </p>
                <b class="text-end text-danger fw-bold"> <h3>JAWABAN : A</h3></b>
                </div>
                </div>
                <hr />
<!--=======================  soal16 ===================================-->
            <li>Hasil dari \(\displaystyle  \int \frac{12x^2}{\sqrt[3]{3-2x^3}} dx\) adalah . . .  </li>
                    <input type="radio" name="soal16" value="0"/>
                    A. \(-6\sqrt[3]{(3-2x^3)^2}+C \)
                <br />
                    <input type="radio" name="soal16" value="0" />
                    B. \(-3\sqrt[3]{(3-2x^3)^2}+C \)
                <br />
                    <input type="radio" name="soal16" value="0"  />
                    C. \(-2\sqrt[3]{(3-2x^3)^2}+C \)
                <br>
                    <input type="radio" name="soal16" value="0" />
                    D. \(-3\sqrt[3]{(3-2x^3)^2}+C \)
                <br />
                    <input type="radio" name="soal16" value="0"/>
                    E. \(-2\sqrt[3]{(3-2x^3)^2}+C \)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal16" aria-expanded="false" aria-controls="collapsesoal16" >
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal16">
                <div class="card card-body overflow-auto">
                    <p></p>
                <b class="text-end text-danger fw-bold"> <h3>JAWABAN : </h3></b>
                </div>
                </div>
                <hr />
<!--=======================  soal17 ===================================-->
            <li>Hasil dari \(\displaystyle \int (x^2-1) \sqrt{x^3-3x+1} dx\) adalah . . .</li>
                    <input type="radio" name="soal17" value="0"/>
                    A. \(\displaystyle \frac{4}{9}(x^3 -3x+1)\sqrt{x^3 -3x +1} +C\)
                <br />
                    <input type="radio" name="soal17" value="0" />
                    B. \(\displaystyle \frac{2}{9}(x^3 -3x+1)\sqrt{x^3 -3x +1} +C\)
                <br />
                    <input type="radio" name="soal17" value="0"  />
                    C. \(\displaystyle \frac{1}{9}(x^3 -3x+1)\sqrt{x^3 -3x +1} +C\)
                <br>
                    <input type="radio" name="soal17" value="0" />
                    D. \(\displaystyle \frac{2}{3}(x^3 -3x+1)\sqrt{x^3 -3x +1} +C\)
                <br />
                    <input type="radio" name="soal17" value="0"/>
                    E. \(\displaystyle \frac{1}{3}(x^3 -3x+1)\sqrt{x^3 -3x +1} +C\)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal17" aria-expanded="false" aria-controls="collapsesoal17" >
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal17">
                <div class="card card-body overflow-auto">
                    <p></p>
                <b class="text-end text-danger fw-bold"> <h3>JAWABAN : </h3></b>
                </div>
                </div>
                <hr />
<!--=======================  soal18 ===================================-->
            <li>Hasil dari \(\displaystyle \int_{0}^{7} 3\sqrt{5x+1} dx\) adalah . . .</li>
                    <input type="radio" name="soal18" value="0"/>
                    A. \(86 \)
                <br />
                    <input type="radio" name="soal18" value="0" />
                    B. \( 89\)
                <br />
                    <input type="radio" name="soal18" value="0"  />
                    C. \( 92\)
                <br>
                    <input type="radio" name="soal18" value="0" />
                    D. \(96 \)
                <br />
                    <input type="radio" name="soal18" value="0"/>
                    E. \(99 \)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal18" aria-expanded="false" aria-controls="collapsesoal18" >
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal18">
                <div class="card card-body overflow-auto">
                    <p></p>
                <b class="text-end text-danger fw-bold"> <h3>JAWABAN : </h3></b>
                </div>
                </div>
                <hr />
<!--=======================  soal19 ===================================-->
            <li>Nilai dari \(\displaystyle \int_{0}^{3} \frac{2x+5}{\sqrt{x^2+5x+1}} dx\) adalah . . .</li>
                    <input type="radio" name="soal19" value="0"/>
                    A. \(4 \)
                <br />
                    <input type="radio" name="soal19" value="0" />
                    B. \(6 \)
                <br />
                    <input type="radio" name="soal19" value="0"  />
                    C. \(8 \)
                <br>
                    <input type="radio" name="soal19" value="0" />
                    D. \(12 \)
                <br />
                    <input type="radio" name="soal19" value="0"/>
                    E. \(16 \)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal19" aria-expanded="false" aria-controls="collapsesoal19" >
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal19">
                <div class="card card-body overflow-auto">
                    <p></p>
                <b class="text-end text-danger fw-bold"> <h3>JAWABAN : </h3></b>
                </div>
                </div>
                <hr />
<!--=======================  soal20 ===================================-->
            <li>Jika \(\displaystyle \int f(x) dx = 6x^2 +C \), hasil dari \(\displaystyle \int (2x+3) dx \) adalah . . .</li>
                    <input type="radio" name="soal20" value="0"/>
                    A. \(12(2x+3)^2 +C \)
                <br />
                    <input type="radio" name="soal20" value="0" />
                    B. \(6(2x+3)^2 +C \)
                <br />
                    <input type="radio" name="soal20" value="0"  />
                    C. \(6(2x+3)^3 +C \)
                <br>
                    <input type="radio" name="soal20" value="0" />
                    D. \(3(2x+3)^2 +C \)
                <br />
                    <input type="radio" name="soal20" value="0"/>
                    E. \(3(2x+3)^3 +C \)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal20" aria-expanded="false" aria-controls="collapsesoal20" >
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal20">
                <div class="card card-body overflow-auto">
                    <p></p>
                <b class="text-end text-danger fw-bold"> <h3>JAWABAN : </h3></b>
                </div>
                </div>
                <hr />

            </ol>

{{-- COPY DARI SINI SETIAP SOAL --}}
<input type="hidden" id="materi" name="materi" value="integral02">
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
    <a href="/create_integral02" id="kirimsaja" class="btn btn-warning btn-bukti d-none" >SIMPAN JAWABAN</a>
</div>
</form>
{{-- COPY SAMPAI SINI --}}

<div id="disqus_thread" class="mt-4"></div>

</div>
</div>
</div>
</section>
@endsection

