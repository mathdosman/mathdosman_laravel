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
            Turunan Fungsi ALjabar - Paket 02
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
                <li>Laju perubahan nilai fungsi \(f:x \to f(x)\) pada \(x =a\) adalah . . .</li>
                    <input type="radio" name="soal1" value="0"/>
                    \(\displaystyle f'(x)= \lim_{h \to 0} \frac{f(a+h)+f(a)}{h} \)
                <br />
                    <input type="radio" name="soal1" value="0" />
                    \(\displaystyle  f'(x)= \lim_{h \to 0} \frac{f(a-h)-f(a)}{h}\)
                <br />
                    <input type="radio" name="soal1" value="10"  />
                    \(\displaystyle f'(x)= \lim_{h \to 0} \frac{f(a+h)-f(a)}{h}\)
                <div class="col-md">
                    <input type="radio" name="soal1" value="0" />
                    \(\displaystyle f'(x)= \lim_{h \to 0} \frac{f(a)-f(a+h)}{h} \)
                <br />
                    <input type="radio" name="soal1" value="0"/>
                    \(\displaystyle f'(x)= \lim_{h \to 0} \frac{f(a+h)-f(h)}{h} \)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal1" aria-expanded="false" aria-controls="collapsesoal1" >
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal1">
                <div class="card card-body overflow-auto">
                    <p>Sesuai dengan definisi turunan, maka</p>
                    <p>\(\displaystyle f'(x)= \lim_{h \to 0} \frac{f(a+h)-f(a)}{h}\)</p>
                <b class="text-end text-danger fw-bold"> <h3>JAWABAN : C</h3></b>
                </div>
                </div>
                <hr />
<!-- SOAL end -->
<!--=======================  soal2 ===================================-->
            <li>Diketahui fungsi \(f(x)=x^2 -1 \), maka nilai \(\displaystyle \lim_{p \to 0} \frac{f(x+p)-f(x)}{p}\) sama dengan . . .</li>
                    <input type="radio" name="soal2" value="0"/>
                    \(0 \)
                <br />
                    <input type="radio" name="soal2" value="0" />
                    \(1 \)
                <br />
                    <input type="radio" name="soal2" value="0"  />
                    \(2\)
                <br>
                    <input type="radio" name="soal2" value="10" />
                    \(2x\)
                <br />
                    <input type="radio" name="soal2" value="0"/>
                    \(x^3\)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal2" aria-expanded="false" aria-controls="collapsesoal2" >
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal2">
                <div class="card card-body overflow-auto">
                    <p>\(\displaystyle \begin{align}
                        f(x) = x^2 -1 \\
                        f(x+p) = (x+p)^2 -1
                        \\\\
                        \lim_{p \to 0} \frac{f(x+p)-f(x)}{p} &= \lim_{p \to 0} \frac{((x+p)^2 - 1)-(x^2 -1)}{p} \\
                        &= \lim_{p \to 0} \frac{x^2 +2px +p^2-1 -x^2 +1}{p} \\
                        &= \lim_{p \to 0} \frac{2px+p^2}{p} \\
                        &= \lim_{p \to 0} \frac{p(2x+p)}{p} \\
                        &= \lim_{p \to 0} 2x + p\\
                        &= 2x + 0 \\
                        &= 2x
                        \end{align}\)</p>
                <b class="text-end text-danger fw-bold"> <h3>JAWABAN : D</h3></b>
                </div>
                </div>
                <hr />
<!-- SOAL end -->
<!--=======================  soal3 ===================================-->
            <li>Jika \(f(x)=3x^4 -2x^3 +x +2 \), maka \(f'(2) \) sama dengan ...</li>
                    <input type="radio" name="soal3" value="0"/>
                    \( 72 \)
                <br />
                    <input type="radio" name="soal3" value="10" />
                    \( 73 \)
                <br />
                    <input type="radio" name="soal3" value="0"  />
                    \(74 \)
                <div class="col-md">
                    <input type="radio" name="soal3" value="0" />
                    \( 75 \)
                <br />
                    <input type="radio" name="soal3" value="0"/>
                    \( 81 \)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal3" aria-expanded="false" aria-controls="collapsesoal3" >
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal3">
                <div class="card card-body overflow-auto">
                    <p>\(\displaystyle \begin{align}
                        f(x) &= 3x^4 -2x^3 +x +2\\
                        f'(x) &= 12x^3 -6x^2 +1\\
                        f'(2) &= 12(2)^3 -6(2)^2 +1 \\
                        &= 12(8) -6(4) +1 \\
                        &= 96 - 24 +1 \\
                        &= 73
                        \end{align}\)</p>
                    <p>Jadi, Nilai dari \(f'(2)\) adalah \(73\)</p>
                <b class="text-end text-danger fw-bold"> <h3>JAWABAN : B</h3></b>
                </div>
                </div>
                <hr />
<!-- SOAL end -->
<!--=======================  soal4 ===================================-->
            <li>Turunan pertama fungsi \(\displaystyle f(x) = \frac{x-1}{x+1} \) untuk \(x \neq -1\) adalah . . . </li>
                    <input type="radio" name="soal4" value="0"/>
                    \(\displaystyle f'(x)= \frac{x-1}{(x+1)^2} \)
                <br />
                    <input type="radio" name="soal4" value="0" />
                    \(\displaystyle f'(x)= \frac{x}{(x+1)^2} \)
                <br />
                    <input type="radio" name="soal4" value="0"  />
                    \(\displaystyle f'(x)= \frac{x^2 +1}{(x+1)^2}\)
                <div class="col-md">
                    <input type="radio" name="soal4" value="0" />
                    \(\displaystyle f'(x)= \frac{2x}{(x+1)^2} \)
                <br />
                    <input type="radio" name="soal4" value="10"/>
                    \(\displaystyle f'(x)= \frac{2}{(x+1)^2} \)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal4" aria-expanded="false" aria-controls="collapsesoal4" >
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal4">
                <div class="card card-body overflow-auto">
                    <p>Misalkan <br>
                    \(\displaystyle \begin{align}
                    u &= x-1\\
                    u' &= 1\\\\
                    v &= x+1\\
                    v' &= 1\\\\
                    f'(x) &= \frac{u' \times v - u \times v'}{v^2} \\
                        &= \frac{1 \times (x+1)- (x-1) \times 1}{(x+1)^2}\\
                        &= \frac{x+1-x+1}{(x+1)^2}\\
                        &= \frac{2}{(x+1)^2}
                    \end{align}\)
                    </p>
                <p>Jadi, turunan pertama fungsi tersebut adalah \(\displaystyle \frac{2}{(x+1)^2} \)</p>
                <b class="text-end text-danger fw-bold"> <h3>JAWABAN : </h3></b>
                </div>
                </div>
                <hr />
<!-- SOAL end -->
<!--=======================  soal5 ===================================-->
            <li>Jika \(f(x)=(x^2 - 1)(x^3+1) \) maka \(f'(x) \) sama dengan . . .</li>
                    <input type="radio" name="soal5" value="0"/>
                    \(5x^3  \)
                <br />
                    <input type="radio" name="soal5" value="0" />
                    \(5x^3 +3x \)
                <br />
                    <input type="radio" name="soal5" value="0"  />
                    \(2x^4+2x \)
                <div class="col-md">
                    <input type="radio" name="soal5" value="10" />
                    \(5x^4 -3x^2 +2x  \)
                <br />
                    <input type="radio" name="soal5" value="0"/>
                    \(x^4-x^2-x  \)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal5" aria-expanded="false" aria-controls="collapsesoal5" >
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal5">
                <div class="card card-body overflow-auto">
                    <p>\(\displaystyle \begin{align}
                        f(x) &= (x^2 - 1)(x^3+1)\\
                        &= x^5 + x^2 -x^3 -1 \\
                        &= x^5 -x^3 +x^2 -1 \\
                        f'(x) &= 5x^4 -3x^2 +2x
                        \end{align}\)</p>
                    <p>Jadi, turunan \(f(x)\) adalah \(f'(x)=5x^4 -3x^2 +2x\)</p>
                <b class="text-end text-danger fw-bold"> <h3>JAWABAN : D</h3></b>
                </div>
                </div>
                <hr />
<!-- SOAL end -->
<!--=======================  soal6 ===================================-->
            <li>Fungsi \(f\) ditentukan oleh \(f(x)=(x+3)^2 \) dan \(f'(x) \) adalah turunan pertama dari \(f(x) \). Nilai \(f'(2) \) sama dengan ...</li>
                    <input type="radio" name="soal6" value="0"/>
                    \( 8 \)
                <br />
                    <input type="radio" name="soal6" value="10" />
                    \( 10 \)
                <br />
                    <input type="radio" name="soal6" value="0"  />
                    \( 12 \)
                <div class="col-md">
                    <input type="radio" name="soal6" value="0" />
                    \( 25 \)
                <br />
                    <input type="radio" name="soal6" value="0"/>
                    \( 36 \)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal6" aria-expanded="false" aria-controls="collapsesoal6" >
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal6">
                <div class="card card-body overflow-auto">
                    <p>\(\displaystyle \begin{align}
                        f(x) &= (ax)^n \\
                        f'(x) &= n.(ax)^{n-1} .a
                        \\\\
                        f(x) &= (x+3)^2 \\
                        f'(x) &= 2(x+3)^{2-1}.1 \\
                        &= 2(x+3)\\
                        f'(2) &= 2(2+3)\\
                        &= 10
                        \end{align}\)</p>
                <b class="text-end text-danger fw-bold"> <h3>JAWABAN : B</h3></b>
                </div>
                </div>
                <hr />
<!-- SOAL end -->
<!--=======================  soal7 ===================================-->
            <li>Gradien garis singgung kurva \(f(x)=x^3 +2x^2 -4 \) di \(x=1\) adalah . . .</li>
                    <input type="radio" name="soal7" value="0"/>
                    \( 3 \)
                <br />
                    <input type="radio" name="soal7" value="0" />
                    \( 4 \)
                <br />
                    <input type="radio" name="soal7" value="0"  />
                    \( 5 \)
                <div class="col-md">
                    <input type="radio" name="soal7" value="10" />
                    \( 7 \)
                <br />
                    <input type="radio" name="soal7" value="0"/>
                    \( 12 \)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal7" aria-expanded="false" aria-controls="collapsesoal7" >
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal7">
                <div class="card card-body overflow-auto">
                    <p>\(\displaystyle \begin{align}
                        \text{gradien }&= f'(x) \\
                        f(x) &= x^3 +2x^2 -4 \\
                        f'(x) &= 3x^2 +4x \\
                        m &= 3x^2 +4x \\
                        &= 3(1)^2 + 4(1) \\
                        &= 3+4\\
                        &= 7
                        \end{align}\)</p>
                    <p>Jadi, gradien garis singgung \(f(x)\) di \(x=1\) adalah \(m=7\)</p>
                <b class="text-end text-danger fw-bold"> <h3>JAWABAN : D</h3></b>
                </div>
                </div>
                <hr />
<!-- SOAL end -->
<!--=======================  soal8 ===================================-->
            <li>Kemiringan garis singgung kurva fungsi \(f(x)=x^3 +2x^2\) dititik \((2,16) \) adalah . . .</li>
                    <input type="radio" name="soal8" value="0"/>
                    \( 3 \)
                <br />
                    <input type="radio" name="soal8" value="0" />
                    \( 6 \)
                <br />
                    <input type="radio" name="soal8" value="0"  />
                    \( 15\)
                <div class="col-md">
                    <input type="radio" name="soal8" value="0" />
                    \( 18 \)
                <br />
                    <input type="radio" name="soal8" value="10"/>
                    \( 20 \)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal8" aria-expanded="false" aria-controls="collapsesoal8" >
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal8">
                    <div class="card card-body overflow-auto">
                        <p>\(\displaystyle \begin{align}
                        \text{gradien }&= f'(x) \\
                        f(x) &= x^3 +2x^2\\
                        f'(x) &= 3x^2 +4x \\
                        m &= 3x^2 +4x \\
                        &= 3(2)^2 + 4(2) \\
                        &= 12+8\\
                        &= 20
                        \end{align}\)</p>
                    <p>Jadi, gradien garis singgung \(f(x)\) di \((2,16)\) adalah \(m=20\)</p>
                    <b class="text-end text-danger fw-bold"> <h3>JAWABAN : E</h3></b>
                    </div>
                </div>
                <hr />
<!-- SOAL end -->
<!--=======================  soal9 ===================================-->
            <li>Persamaan garis singgung kurva \(f(x)=x^2-1\) yang melalui titik \((3,8) \) adalah . . .</li>
                    <input type="radio" name="soal9" value="10"/>
                    \(y=6x-10  \)
                <br />
                    <input type="radio" name="soal9" value="0" />
                    \(y=6x+10  \)
                <br />
                    <input type="radio" name="soal9" value="0"  />
                    \(y=-6x-10 \)
                <div class="col-md">
                    <input type="radio" name="soal9" value="0" />
                    \(y=-6x+10  \)
                <br />
                    <input type="radio" name="soal9" value="0"/>
                    \(y=6x+16  \)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal9" aria-expanded="false" aria-controls="collapsesoal9" >
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal9">
                <div class="card card-body overflow-auto">
                    <p>\(\displaystyle \begin{align}
                        f(x) &= x^2-1 \\
                        f'(x) &= 2x \\
                        &= 2(3) \\
                        &= 6
                        \end{align}\)</p>
                    <p>Persamaan garis singgung menyinggung di titik \((3,8) \) dengan gradien \(m=6\). </p>
                    <p>\(\displaystyle \begin{align}
                        y-y_1 &= m(x - x_1) \\
                        y- 8 &= 6(x - 3)\\
                        y &= 6x-18 +8 \\
                        y &= 6x-10
                        \end{align}\)</p>
                <b class="text-end text-danger fw-bold"> <h3>JAWABAN : A</h3></b>
                </div>
                </div>
                <hr />
<!-- SOAL end -->
<!--=======================  soal10 ===================================-->
            <li>Persamaan garis yang menyinggung kurva \(y=x^3+2x^2-5x\) dititik \((1,-2)\) adalah . . .</li>
                    <input type="radio" name="soal10" value="0"/>
                    \(y=7x+9 \)
                <br />
                    <input type="radio" name="soal10" value="0" />
                    \(y=2x-3 \)
                <br />
                    <input type="radio" name="soal10" value="0"  />
                    \(y=7x-9\)
                <div class="col-md">
                    <input type="radio" name="soal10" value="0" />
                    \(y=2x+3 \)
                <br />
                    <input type="radio" name="soal10" value="10"/>
                    \(y=2x-4 \)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal10" aria-expanded="false" aria-controls="collapsesoal10" >
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal10">
                <div class="card card-body overflow-auto">
                    <p>\(\displaystyle \begin{align}
                        y &= x^3+2x^2-5x \\
                        y' &= 3x^2 +4x -5 \\
                        y' &= 3(1)^2 +4(1) -5 \\
                        &= 3+4-5 \\
                        &= 7-5 \\
                        &= 2
                        \end{align}\)</p>
                    <p>Persamaan garis singgung menyinggung di titik \((1,-2) \) dengan gradien \(m=-2\). </p>
                    <p>\(\displaystyle \begin{align}
                        y-y_1 &= m(x - x_1) \\
                        y-(-2) &= 2(x - 1)\\
                        y &= 2x -2 -2\\
                        y &= 2x -4
                        \end{align}\)</p>
                <b class="text-end text-danger fw-bold"> <h3>JAWABAN : E</h3></b>
                </div>
                </div>
                <hr />
<!-- SOAL end -->
<!--=======================  soal11 ===================================-->
            <li>Persamaan garis singgung kurva \(f(x)=x^2 -2x -3 \) yang mempunyai gradien \(m=4\) adalah . . . </li>
                    <input type="radio" name="soal11" value="0"/>
                    \(4x-y+12=0 \)
                <br />
                    <input type="radio" name="soal11" value="10" />
                    \(4x-y-12=0 \)
                <br />
                    <input type="radio" name="soal11" value="0"  />
                    \(4x+y-12=0\)
                <div class="col-md">
                    <input type="radio" name="soal11" value="0" />
                    \(4x-y-10=0 \)
                <br />
                    <input type="radio" name="soal11" value="0"/>
                    \(4x+y+12=0 \)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal11" aria-expanded="false" aria-controls="collapsesoal11" >
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal11">
                    <div class="card card-body overflow-auto">
                    <p>\(\displaystyle \begin{align}
                        f(x) &= x^2 -2x -3 \\
                        f'(x) &= 2x-2\\
                        f'(x) &= m = 4\\\\
                        4 &= 2x-2 \\
                        2x &=4+2\\
                        x &=\frac{4}{2} \\
                        x &=3\\\\
                        f(x) &= x^2 -2x -3\\
                        f(3) &= (3)^2 -2(3) -3\\
                        &= 9-6-3\\
                        &=0
                        \end{align}\)</p>
                        <p>Persamaan garis singgung menyinggung di titik \((3,0) \) dengan gradien \(m=4\). </p>
                        <p>\(\begin{align} y-y_1 &= m (x-x_1)   \\
                            y-0 &= 4(x-3)\\
                            y &= 4x-12\\
                            4x-y-12 &=0
                            \end{align}\)</p>
                        <p> Jadi, persamaan garis singgung adalah \(4x-y-12=0\)</p>
                    <b class="text-end text-danger fw-bold"> <h3>JAWABAN : B</h3></b>
                    </div>
                </div>
                <hr />
<!-- SOAL end -->
<!--=======================  soal12 ===================================-->
            <li>Persamaan garis singgung kurva \(f(x)=x^2 -2x+4 \) di titik \(A\) yang sejajar dengan garis \(4x-y= 6\) adalah . . .  </li>
                    <input type="radio" name="soal12" value="0"/>
                    \(4x-y+2=0 \)
                <br />
                    <input type="radio" name="soal12" value="10" />
                    \(4x-y-5=0 \)
                <br />
                    <input type="radio" name="soal12" value="0"  />
                    \(4x-y-2=0\)
                <div class="col-md">
                    <input type="radio" name="soal12" value="0" />
                    \(4x+y-2=0 \)
                <br />
                    <input type="radio" name="soal12" value="0"/>
                    \(4x-y-16=0 \)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal12" aria-expanded="false" aria-controls="collapsesoal12" >
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal12">
                <div class="card card-body overflow-auto">
                    <p>\(\displaystyle \begin{align}
                        4x-y&=6\\
                        -y &= -4x+6 \\
                        y &= 4x-6 \\
                        y' &= m = 4
                        \\\\
                        f(x) &= x^2 -2x +4 \\
                        f'(x) &= 2x-2\\
                        f'(x) &= m = 4\\\\
                        4 &= 2x-2 \\
                        2x &=4+2\\
                        x &=\frac{4}{2} \\
                        x &=3\\\\
                        f(x) &= x^2 -2x +4\\
                        f(3) &= (3)^2 -2(3) +4\\
                        &= 9-6+4\\
                        &=7
                        \end{align}\)</p>
                        <p>Persamaan garis singgung menyinggung di titik \((3,7) \) dengan gradien \(m=4\). </p>
                        <p>\(\begin{align} y-y_1 &= m (x-x_1)   \\
                            y-7 &= 4(x-3)\\
                            y &= 4x-12+7\\
                            4x-y-5 &=0
                            \end{align}\)</p>
                        <p> Jadi, persamaan garis singgung adalah \(4x-y-5=0\)</p>
                <b class="text-end text-danger fw-bold"> <h3>JAWABAN : B</h3></b>
                </div>
                </div>
                <hr />
<!-- SOAL end -->
<!--=======================  soal13 ===================================-->
            <li>Persamaan garis singgung kurva \(f(x)=x^3-3x^2+5x+5 \) yang tegak lurus dengan garis \(x+2y+2=0\) adalah . . .   </li>
                    <input type="radio" name="soal13" value="0"/>
                    \(2x+y-6=0 \)
                <br />
                    <input type="radio" name="soal13" value="0" />
                    \(2x+y+10=0 \)
                <br />
                    <input type="radio" name="soal13" value="0"  />
                    \(2x+y-8=0\)
                <div class="col-md">
                    <input type="radio" name="soal13" value="10" />
                    \(2x-y+6=0 \)
                <br />
                    <input type="radio" name="soal13" value="0"/>
                    \(2x-y-10=0 \)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal13" aria-expanded="false" aria-controls="collapsesoal13" >
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal13">
                <div class="card card-body overflow-auto">
                    <p>\(\displaystyle \begin{align}
                        x+2y+2&=0\\
                        2y &= -x-2 \\
                        y &= -\frac{1}{2}x-1 \\
                        y' &= m_1 = -\frac{1}{2} \\\\
                        m_1 \times m_2 &= -1 \\
                        -\frac{1}{2} \times m_2 &=-1\\
                        m_2 &= 2
                        \\\\
                        f(x) &= x^3-3x^2+5x+5 \\
                        f'(x) &= 3x^2 -6x +5\\
                        f'(x) &= m_2 = 2\\\\
                        2 &= 3x^2 -6x +5 \\
                        3x^2 -6x +5 -2 &= 0\\
                        3x^2 -6x +3 &= 0\\
                        x^2 -2x +1 &= 0\\
                        (x-1)^2 &= 0 \\
                        (x-1) &= 0 \\
                        x &= 1
                        \\\\
                        f(x) &= x^3 -3x^2 +5x +5\\
                        f(1) &= (1)^3 -3(1)^2 +5(1) +5 \\
                        &= 1-3+5+5\\
                        &=8
                        \end{align}\)</p>
                        <p>Persamaan garis singgung menyinggung di titik \((1,8) \) dengan gradien \(m=2\). </p>
                        <p>\(\begin{align} y-y_1 &= m (x-x_1)   \\
                            y-8 &= 2(x-1)\\
                            y &= 2x-2+8\\
                            2x-y+6 &=0
                            \end{align}\)</p>
                        <p> Jadi, persamaan garis singgung adalah \(2x-y+6=0\)</p>
                <b class="text-end text-danger fw-bold"> <h3>JAWABAN : D</h3></b>
                </div>
                </div>
                <hr />
<!-- SOAL end -->
<!--=======================  soal14 ===================================-->
            <li>Diberikan kurva dengan persamaan \(y=x^3 -6x^2 +9x+1 \). Kurva turun pada interval ...</li>
                    <input type="radio" name="soal14" value="0"/>
                    \( x \leq 1 \text{ atau } x \geq 3 \)
                <br />
                    <input type="radio" name="soal14" value="0" />
                    \( -2 \leq x \leq 1 \text{ atau } 3 \leq x \leq 6 \)
                <br />
                    <input type="radio" name="soal14" value="10"  />
                    \( 1 < x < 3 \)
                <div class="col-md">
                    <input type="radio" name="soal14" value="0" />
                    \( 1 \leq x \leq 3 \)
                <br />
                    <input type="radio" name="soal14" value="0"/>
                    \( -1 \leq x \leq 3 \)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal14" aria-expanded="false" aria-controls="collapsesoal14" >
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal14">
                  <div class="card card-body overflow-auto">
                    <p>\(\displaystyle \begin{align}
                        y &= x^3 -6x^2 +9x+1 \\
                        y' &= 3x^2 -12x +9 \\
                        \textup{turun } y' &< 0 \\\\
                        3x^2 -12x+9 &< 0 \\
                        x^2 -4x +3 &< 0 \\
                        (x-1)(x-3) &< 0 \\
                        x = 1 &\text{ atau } x =3
                        \end{align}\)</p>
                        <img src="/home/turunan/turunan02_14.png" alt="interval14" class="img-fluid" width="80%">
                        <p>ambil satu titik uji pada salah satu daerah penyelesaian lalu uji titik ke pertidaksamaan <br>
                        Nilai (-) berarti dimana fungsi turun dan nilai (+) berarti dimana fungsi naik</p>
                        <p>Jadi, fungsi turun pada interval \(\begin{Bmatrix} x| 1 < x < 3 , x\in \mathbb{R} \end{Bmatrix}\)</p>
                    <b class="text-end text-danger fw-bold"> <h3>JAWABAN : C</h3></b>
                  </div>
                </div>
                <hr />
<!-- SOAL end -->
<!--=======================  soal15 ===================================-->
            <li>Jika nilai stasioner dari \(f(x)=x^3 -px^2 -px -1 \) adalah di \(x=p\), maka nilai \(p\) sama dengan . . .</li>
                    <input type="radio" name="soal15" value="10"/>
                    \(0 \text{ atau } 1  \)
                <br />
                    <input type="radio" name="soal15" value="0" />
                    \(\displaystyle 0 \text{ atau } \frac{1}{5} \)
                <br />
                    <input type="radio" name="soal15" value="0"  />
                    \(0 \text{ atau } -1 \)
                <div class="col-md">
                    <input type="radio" name="soal15" value="0" />
                    \(1 \text{ atau } -1\)
                <br />
                    <input type="radio" name="soal15" value="0"/>
                    \(\displaystyle \frac{1}{5} \)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal15" aria-expanded="false" aria-controls="collapsesoal15" >
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal15">
                <div class="card card-body overflow-auto">
                    <p>\(x=p\) merupakan titik stasioner maka,</p>
                    <p>\(\displaystyle \begin{align}
                        f'(p) &= 0 \\\\
                        f(x) &= x^3 -px^2 -px -1 \\
                        f'(x) &= 3x^2 -2px - p \\
                        f'(p) &= 3(p)^2 -2p(p) -p \\
                        0 &= 3p^2 -2p^2 - p \\
                        0 &= p^2-p\\
                        p^2 - p &= 0\\
                        p(p-1) &= 0 \\
                        p = 0 &\textup{ atau } p = 1
                        \end{align}\)</p>
                    <p>Jadi, nilai \(p\) sama dengan \(\begin{Bmatrix} 0, 1 \end{Bmatrix}\)</p>
                <b class="text-end text-danger fw-bold"> <h3>JAWABAN : A</h3></b>
                </div>
                </div>
                <hr />
<!-- SOAL end -->
<!--=======================  soal16 ===================================-->
            <li>Fungsi \(f(x)=px^2 - (p+1)x+4 \) mencapai nilai terkecil untuk \(x=1\). Nilai \(p\) sama dengan . . .</li>
                    <input type="radio" name="soal16" value="0"/>
                    \( -3 \)
                <br />
                    <input type="radio" name="soal16" value="0" />
                    \( -1 \)
                <br />
                    <input type="radio" name="soal16" value="10"  />
                    \( 1 \)
                <div class="col-md">
                    <input type="radio" name="soal16" value="0" />
                    \( 2 \)
                <br />
                    <input type="radio" name="soal16" value="0"/>
                    \( 3 \)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal16" aria-expanded="false" aria-controls="collapsesoal16" >
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal16">
                <div class="card card-body overflow-auto">
                    <p>Maksimum di \(x=1\) maka \(f'(1)=0 \)</p>
                    <p>\(\displaystyle \begin{align}
                        f(x) &= px^2 - (p+1)x+4\\
                        f'(x) &= 2px-(p+1) \\
                        f'(1) &= 2p(1)-(p+1) \\
                        0 &= 2p-p-1 \\
                        0 &= p -1 \\
                        p &= 1
                        \end{align}\)</p>
                    <p>Jadi, nilai \(p\) agar \(f(x)\) terkecil di \(x=1\) adalah \(p=1\)</p>
                <b class="text-end text-danger fw-bold"> <h3>JAWABAN : C</h3></b>
                </div>
                </div>
                <hr />
<!-- SOAL end -->
<!--=======================  soal17 ===================================-->
            <li>Nilai maksimum fungsi \(f(x) = -2x^2 -8x +p\) adalah \(12\). Nilai \(f(-1)\) sama dengan . . .  </li>
                    <input type="radio" name="soal17" value="0"/>
                    \(-4  \)
                <br />
                    <input type="radio" name="soal17" value="0" />
                    \(-2  \)
                <br />
                    <input type="radio" name="soal17" value="0"  />
                    \(4 \)
                <div class="col-md">
                    <input type="radio" name="soal17" value="0" />
                    \(8  \)
                <br />
                    <input type="radio" name="soal17" value="10"/>
                    \(10 \)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal17" aria-expanded="false" aria-controls="collapsesoal17"  >
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal17">
                <div class="card card-body overflow-auto">
                    <p>\(\displaystyle \begin{align}
                        f(x) &= 12\\
                        f'(x) &= 0 \\\\
                        f(x) &= -2x^2 -8x +p \\
                        f'(x) &= -4x-8\\
                        0 &= -4x-8\\
                        4x &= -8\\
                        x &= -2
                        \\\\
                        f(x) &= -2x^2 -8x +p \\
                        f(-2) &= -2(-2)^2 -8(-2) + p \\
                        12 &= -8 +16 +p \\
                        12 &= 8 + p \\
                        p &= 12-8\\
                        p &= 4
                        \\\\
                        f(x) &= -2x^2 -8x +4 \\
                        f(-1) &= -2(-1)^2 -8(-1)+4 \\
                        &= -2 +8+4\\
                        &= 10
                        \end{align}\)</p>
                    <p>Jadi, Nilai untuk \(f(-1)\) adalah \(10\)</p>
                <b class="text-end text-danger fw-bold"> <h3>JAWABAN : E</h3></b>
                </div>
                </div>
                <hr />
<!-- SOAL end -->
<!--=======================  soal18 ===================================-->
            <li>Titik belok dari fungsi \(f(x)=x^3 -6x^2 +2x+2 \) adalah . . .</li>
                    <input type="radio" name="soal18" value="0"/>
                    \((-2,-10)  \)
                <br />
                    <input type="radio" name="soal18" value="0" />
                    \((-2,10)  \)
                <br />
                    <input type="radio" name="soal18" value="10"  />
                    \((2,-10) \)
                <div class="col-md">
                    <input type="radio" name="soal18" value="0" />
                    \((2,10)  \)
                <br />
                    <input type="radio" name="soal18" value="0"/>
                    \((-2,8)  \)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal18" aria-expanded="false" aria-controls="collapsesoal18"  >
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal18">
                <div class="card card-body overflow-auto">
                    <p>Titik belok suatu kurva pada \(f''(x)=0\)</p>
                    <p>\(\displaystyle \begin{align}
                        f(x) &=x^3 -6x^2 +2x+2 \\
                        f'(x) &= 3x^2 -12x +2 \\
                        f''(x) &= 6x -12 \\
                        0 &= 6x -12 \\
                        6x &= 12 \\
                        x &= 2
                        \\\\
                        f(x) &= x^3 -6x^2 +2x+2 \\
                        &= (2)^3 -6(2)^2 +2(2)+2 \\
                        &= 8 -24 + 4 + 2 \\
                        &= -10
                        \end{align}\)</p>
                    <p>Jadi, titik belok kurva tersebut berada pada titik \((2,-10)\)</p>
                <b class="text-end text-danger fw-bold"> <h3>JAWABAN : C</h3></b>
                </div>
                </div>
                <hr />
<!-- SOAL end -->
<!--=======================  soal19 ===================================-->
            <li>Selisih dua bilangan adalah 10. Pada saat hasil kali kedua bilangan itu maksimum, jumlah kedua bilangan tersebut adalah . . .</li>
                    <input type="radio" name="soal19" value="0"/>
                    \(-6  \)
                <br />
                    <input type="radio" name="soal19" value="0" />
                    \(-2  \)
                <br />
                    <input type="radio" name="soal19" value="0"  />
                    \(-1 \)
                <div class="col-md">
                    <input type="radio" name="soal19" value="10" />
                    \(0 \)
                <br />
                    <input type="radio" name="soal19" value="0"/>
                    \(2  \)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal19" aria-expanded="false" aria-controls="collapsesoal19" >
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal19">
                <div class="card card-body overflow-auto">
                    <p>Misalkan kedua bilangan yang dimaksud adalah \(x\) dan \(y\) serta hasil kali kedua bilangan adalah \(K\), maka</p>
                    <p>\(\displaystyle \begin{align}
                        x - y &= 10 \\
                        y &= x-10
                        \\\\
                        K &= x.y \\
                        K &= x(x-10) \\
                        K &= x^2 -10x \\
                        \\
                        K' &= 2x-10 \: \to (K' = 0) \\
                        0 &= 2x-10\\
                        2x &= 10 \\
                        x &= 5
                        \\\\
                        y&= x-10\\
                        &= 5-10\\
                        &= -5\\\\

                        x + y &= 5 + (-5)\\
                        &= 0
                        \end{align}\)</p>
                    <p>Jadi, jumlah kedua bilangan yang dimaksud adalah \(0\)</p>
                <b class="text-end text-danger fw-bold"> <h3>JAWABAN : D</h3></b>
                </div>
                </div>
                <hr />
<!-- SOAL end -->
<!--=======================  soal20 ===================================-->
            <li>Suatu perusahaan menhasilkan \(x\) produk dengan biaya total sebesar \( 75 +2x+0,1x^2\) rupiah. Jika semua produk perusahaan tersebut terjual dengan harga Rp40,- untuk setiap produknya, maka laba maksimum yang diperoleh adalah . . .   </li>
                    <input type="radio" name="soal20" value="10"/>
                    Rp3.535,-
                <br />
                    <input type="radio" name="soal20" value="0" />
                    Rp3.540,-
                <br />
                    <input type="radio" name="soal20" value="0"  />
                    Rp3.545,-
                <div class="col-md">
                    <input type="radio" name="soal20" value="0" />
                    Rp3.550,-
                <br />
                    <input type="radio" name="soal20" value="0"/>
                    Rp3.555,-
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal20" aria-expanded="false" aria-controls="collapsesoal20" >
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal20">
                <div class="card card-body overflow-auto">
                    <p>Misalkan Laba yang dimaksud adalah \(L\), maka \(L\) = biaya produksi - penjualan, maka</p>
                    <p>\(\displaystyle \begin{align}
                        L' &= 0
                        \\\\
                        L &= 40x - (75 +2x + 0,1x^2) \\
                        &= -75 +38x - 0,1x^2 \\
                        L' &= 38 - 0,2x \\
                        0 &= 38 - 0,2x \\
                        0,2x &= 38 \\
                        2x &= 380 \\
                        x &= 190
                        \\\\
                        L &= -75 +38x -0,1x^2 \\
                        &= -75 +38(190) -0,1 (190)^2 \\
                        &= -75 +7220- 0,1 (36100) \\
                        &= -75 +7220 - 3610\\
                        &= 3535
                        \end{align}\)</p>
                    <p>Jadi, laba maksimum perusahaan adalah \(Rp3.535,-\)</p>
                <b class="text-end text-danger fw-bold"> <h3>JAWABAN : </h3></b>
                </div>
                </div>
                <hr />

            </ol>

{{-- COPY DARI SINI SETIAP SOAL --}}
<input type="hidden" id="materi" name="materi" value="turunan02">
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
    <a href="/createturunan02" id="kirimsaja" class="btn btn-warning btn-bukti d-none" >SIMPAN JAWABAN</a>
</div>
</form>
{{-- COPY SAMPAI SINI --}}

<div id="disqus_thread" class="mt-4"></div>

</div>
</div>
</div>
</section>
@endsection

