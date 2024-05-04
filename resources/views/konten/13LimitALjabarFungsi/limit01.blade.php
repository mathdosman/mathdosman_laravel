@extends('konten.13LimitALjabarFungsi.13.template')
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
            Limit Fungsi ALjabar - Paket 01
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
                <li> \(\displaystyle \lim_{x\to3}(x+5)(2x-7)\)</li>
                <input type="radio" name="soal1" value="10"/>
                \(-8\)
                <br />
                <input type="radio" name="soal1" value="0" />
                \(-7\)
                <br />
                <input type="radio" name="soal1" value="0"  />
                \(0\)
                <br />
                <input type="radio" name="soal1" value="0" />
                \(7\)
                <br />
                <input type="radio" name="soal1" value="0"/>
                \(8\)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal1" aria-expanded="false" aria-controls="collapsesoal1">
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal1">
                  <div class="card card-body overflow-auto">
                    <p>\(\displaystyle \begin{align}
                      \lim_{x\to3}(x+5)(2x-7) &= (3+5)(2(3)-7)\\
                      &= 8(6-7)\\
                      &= 8(-1)\\
                      &=-8
                      \end{align}\)</p>
                   <b class="text-end text-danger"> JAWABAN : A</b>
                  </div>
                </div>
                <hr />
<!--=======================  soal no 2 ===================================-->

                <li> Diketahui \(\displaystyle \lim_{x\to 2} x^2 -px +5 = -1\). Nilai \(p = ...\)</li>
                <input type="radio" name="soal2" value="0"/>
                \(-7\)
                <br />
                <input type="radio" name="soal2" value="0" />
                \(-5\)
                <br />
                <input type="radio" name="soal2" value="0"  />
                \(-2\)
                <br />
                <input type="radio" name="soal2" value="10" />
                \(5\)
                <br />
                <input type="radio" name="soal2" value="0"/>
                \(7\)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal2" aria-expanded="false" aria-controls="collapsesoal2" >
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal2">
                  <div class="card card-body overflow-auto">
                    <p>\(\displaystyle \begin{align}
                      \lim_{x\to 2} x^2 -px +5 &= -1 \\
                      (2)^2-p(2)+5 &=-1 \\
                      4-2p+5 &= -1 \\
                      -2p &=-1-5-4 \\
                      -2p &= -10 \\
                      p &= \frac{-10}{-2}\\
                      p&=5
                      \end{align}\) </p>
                   <b class="text-end text-danger"> JAWABAN : D</b>
                  </div>
                </div>
                <hr />

<!--=======================  soal no 3 ===================================-->

                <li> \(\displaystyle \lim_{x\to4} \frac{x-4}{2 \sqrt{x}-3}=....\)</li>
                <input type="radio" name="soal3" value="0"/>
                \(-2\)
                <br />
                <input type="radio" name="soal3" value="0" />
                \(\displaystyle -\frac{1}{2}\)
                <br />
                <input type="radio" name="soal3" value="10"  />
                \(0\)
                <br />
                <input type="radio" name="soal3" value="0" />
                \(\displaystyle \frac{1}{4}\)
                <br />
                <input type="radio" name="soal3" value="0"/>
                \(5\)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal3" aria-expanded="false" aria-controls="collapsesoal3" >
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal3">
                  <div class="card card-body overflow-auto">
                    <p>\(\displaystyle \begin{align}
                      \lim_{x\to4} \frac{x-4}{2 \sqrt{x}-3} &= \frac{4-4}{2\sqrt{4}-3} \\
                      &= \frac{0}{4-3} \\
                      &= 0
                      \end{align}\)</p>
                   <b class="text-end text-danger"> JAWABAN : C</b>
                  </div>
                </div>
                <hr />

<!--=======================  soal no 4 ===================================-->

                <li> \(\displaystyle \lim_{x\to 1} \frac{2x^2-x-1}{3x^2-x-2}=....\)</li>
                <input type="radio" name="soal4" value="0"/>
                \(\displaystyle \frac{5}{3}\)
                <br />
                <input type="radio" name="soal4" value="0" />
                \(\displaystyle \frac{3}{4}\)
                <br />
                <input type="radio" name="soal4" value="0"  />
                \(\displaystyle \frac{2}{3}\)
                <br />
                <input type="radio" name="soal4" value="10" />
                \(\displaystyle \frac{3}{5}\)
                <br />
                <input type="radio" name="soal4" value="0"/>
                \(\displaystyle \frac{2}{5}\)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal4" aria-expanded="false" aria-controls="collapsesoal4" >
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal4">
                  <div class="card card-body overflow-auto">
                    <p>\(\displaystyle \begin{align}
                      \lim_{x\to 1} \frac{2x^2-x-1}{3x^2-x-2} & =\lim_{x\to 1} \frac{(2x+1)(x-1)}{(3x+2)(x-1)}\\
                      &= \lim_{x\to 1} \frac{(2x+1)}{(3x+2)}\\
                      &= \frac{(2(1)+1)}{(3(1)+2)} \\
                      &= \frac{3}{5}
                      \end{align}\)</p>
                   <b class="text-end text-danger" > JAWABAN : D</b>
                  </div>
                </div>
                <hr />

<!--=======================  soal no 5 ===================================-->

                <li> \(\displaystyle \lim_{x\to 2} \frac{x-2}{\sqrt{x}-\sqrt{2}}=....\)</li>
                <input type="radio" name="soal5" value="0"/>
                \(\displaystyle -2\sqrt{2} \)
                <br />
                <input type="radio" name="soal5" value="0" />
                \(\displaystyle 2\)
                <br />
                <input type="radio" name="soal5" value="0"  />
                \(\displaystyle 0\)
                <br />
                <input type="radio" name="soal5" value="10" />
                \(\displaystyle 2\sqrt{2}\)
                <br />
                <input type="radio" name="soal5" value="0"/>
                \(\displaystyle \sqrt{2}\)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal5" aria-expanded="false" aria-controls="collapsesoal5" >
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal5">
                  <div class="card card-body overflow-auto">
                    \(\displaystyle \begin{align}
                    \lim_{x\to 2} \frac{x-2}{\sqrt{x}-\sqrt{2}} &= \lim_{x\to 2} \frac{(\sqrt{x}-\sqrt{2})(\sqrt{x}+\sqrt{2})}{\sqrt{x}-\sqrt{2}} \\
                    &= \lim_{x\to 2} \sqrt{x}+\sqrt{2} \\
                    &= \sqrt{2}+\sqrt{2}\\
                    &= 2\sqrt{2}
                    \end{align}\)
                   <b class="text-end text-danger"> JAWABAN : D</b>
                  </div>
                </div>
                <hr />

<!--=======================  soal no 6 ===================================-->

                <li> Nilai dari \(\displaystyle \lim_{x\to 4} \frac{x^2-2x-8}{x-4}\) adalah = . . . </li>
                <input type="radio" name="soal6" value="0"/>
                \(\displaystyle -6\)
                <br />
                <input type="radio" name="soal6" value="0" />
                \(\displaystyle -2\)
                <br />
                <input type="radio" name="soal6" value="0"  />
                \(\displaystyle 0\)
                <br />
                <input type="radio" name="soal6" value="0" />
                \(\displaystyle 2\)
                <br />
                <input type="radio" name="soal6" value="10"/>
                \(\displaystyle 6\)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal6" aria-expanded="false" aria-controls="collapsesoal6" >
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal6">
                  <div class="card card-body overflow-auto">
                    <p>\(\displaystyle \begin{align}
                      \lim_{x\to 4} \frac{x^2-2x-8}{x-4} &= \lim_{x\to 4} \frac{(x-4)(x+2)}{x-4} \\
                      &= \lim_{x\to 4} x+2 \\
                      &= 4+2 \\
                      &= 6
                      \end{align}\)</p>
                   <b class="text-end text-danger"> JAWABAN : E</b>
                  </div>
                </div>
                <hr />
<!--=======================  soal no 7 ===================================-->

                <li> \(\displaystyle \lim_{x\to 4} \frac{4-x}{2-\sqrt{x}}=...\)</li>
                <input type="radio" name="soal7" value="0"/>
                \(\displaystyle 6\)
                <br />
                <input type="radio" name="soal7" value="10" />
                \(\displaystyle 4\)
                <br />
                <input type="radio" name="soal7" value="0"  />
                \(\displaystyle 2\)
                <br />
                <input type="radio" name="soal7" value="0" />
                \(\displaystyle 1\)
                <br />
                <input type="radio" name="soal7" value="0"/>
                \(\displaystyle 0\)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal7" aria-expanded="false" aria-controls="collapsesoal7" >
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal7">
                  <div class="card card-body overflow-auto">
                    <p>\(\displaystyle \begin{align}
                      \lim_{x\to 4} \frac{4-x}{2-\sqrt{x}} &= \lim_{x\to 4} \frac{(2-\sqrt{x})(2+\sqrt{x})}{2-\sqrt{x}}\\
                      &= \lim_{x\to 4} 2+\sqrt{x} \\
                      &= 2 + \sqrt{4} \\
                      &= 2+2 \\
                      &= 4
                      \end{align}\)</p>
                  <b class="text-end text-danger"> JAWABAN : B</b>
                  </div>
                </div>
                <hr />

<!--=======================  soal no 8 ===================================-->
                <li> \(\displaystyle \lim_{x\to 5} \frac{x^2-9x+20}{x-5}=...\) </li>
                <input type="radio" name="soal8" value="0"/>
                \(\displaystyle -2\)
                <br />
                <input type="radio" name="soal8" value="0" />
                \(\displaystyle -1\)
                <br />
                <input type="radio" name="soal8" value="0"  />
                \(\displaystyle 0\)
                <br />
                <input type="radio" name="soal8" value="10" />
                \(\displaystyle 1\)
                <br />
                <input type="radio" name="soal8" value="0"/>
                \(\displaystyle 2\)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal8" aria-expanded="false" aria-controls="collapsesoal8" >
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal8">
                  <div class="card card-body overflow-auto">
                    <p>\(\displaystyle \begin{align}
                      \lim_{x\to 5} \frac{x^2-9x+20}{x-5} &= \lim_{x\to 5} \frac{(x-4)(x-5)}{x-5} \\
                      &= \lim_{x\to 5} x-4 \\
                      &= 5-4 \\
                      &= 1
                      \end{align}\)</p>
                   <b class="text-end text-danger"> JAWABAN : D</b>
                  </div>
                </div>
                <hr />
<!--=======================  soal no 9 ===================================-->
                <li> Nilai \(\displaystyle \lim_{x\to 3} \frac{\sqrt{6x-2}-\sqrt{3x+7}}{x-3}=...\) </li>
                <input type="radio" name="soal9" value="0"/>
                \(\displaystyle 0\)
                <br />
                <input type="radio" name="soal9" value="0" />
                \(\displaystyle \frac{1}{8}\)
                <br />
                <input type="radio" name="soal9" value="10"  />
                \(\displaystyle \frac{3}{8}\)
                <br />
                <input type="radio" name="soal9" value="0" />
                \(\displaystyle 1\)
                <br />
                <input type="radio" name="soal9" value="0"/>
                \(\displaystyle \frac{9}{8}\)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal9" aria-expanded="false" aria-controls="collapsesoal9" >
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal9">
                  <div class="card card-body overflow-auto">
                    <p>\(\displaystyle \begin{align}
                      \lim_{x\to 3} \frac{\sqrt{6x-2}-\sqrt{3x+7}}{x-3} &= \lim_{x\to 3} \frac{\sqrt{6x-2}-\sqrt{3x+7}}{x-3} . \frac{\sqrt{6x-2}+\sqrt{3x+7}}{\sqrt{6x-2}+\sqrt{3x+7}} \\
                      &= \lim_{x\to 3} \frac{(6x-2)-(3x+7)}{x-3} . \frac{1}{\sqrt{6x-2}+\sqrt{3x+7}} \\
                      &= \lim_{x\to 3} \frac{(3x-9)}{x-3} . \frac{1}{\sqrt{6x-2}+\sqrt{3x+7}} \\
                      &= \lim_{x\to 3} \frac{3(x-3)}{x-3} . \frac{1}{\sqrt{6x-2}+\sqrt{3x+7}} \\
                      &= \lim_{x\to 3} \frac{3}{\sqrt{6x-2}+\sqrt{3x+7}} \\
                      &= \frac{3}{\sqrt{6(3)-2}+\sqrt{3(3)+7}} \\
                      &= \frac{3}{\sqrt{16}+\sqrt{16}} \\
                      &= \frac{3}{4+4} \\
                      &= \frac{3}{8}
                      \end{align}\)</p>
                   <b class="text-end text-danger"> JAWABAN : C</b>
                  </div>
                </div>
                <hr />
<!--=======================  soal no 10 ===================================-->

                <li> \(\displaystyle \lim_{x\to a} \frac{x^3 + ax^2 - a^2x-a^3}{x^2 - a^2}=...\) </li>
                <input type="radio" name="soal10" value="0"/>
                \(\displaystyle 4a^2\)
                <br />
                <input type="radio" name="soal10" value="0" />
                \(\displaystyle 2a^2\)
                <br />
                <input type="radio" name="soal10" value="0"  />
                \(\displaystyle 4a\)
                <br />
                <input type="radio" name="soal10" value="10" />
                \(\displaystyle 2a\)
                <br />
                <input type="radio" name="soal10" value="0"/>
                \(\displaystyle a\)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal10" aria-expanded="false" aria-controls="collapsesoal10" >
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal10">
                  <div class="card card-body overflow-auto">
                    <p>Sebelum menyelesaikan permasalah limit ini kita faktorkan dulu pembilang dengan cara membaginya dengan faktor penyebut pembuat nol</p>
                    <p>yaitu dibagi \(x-a \)</p>
                    <img src="/home/limit/10pembagian.png" alt="soalno10" width="285px">
                    <p>Sehingga</p>
                    <p>\(\displaystyle \begin{align}
                      \lim_{x\to a} \frac{x^3 + ax^2 - a^2x-a^3}{x^2 - a^2} &= \lim_{x\to a} \frac{(x-a)(x^2+2ax+a^2)}{x^2 - a^2} \\
                      &= \lim_{x\to a} \frac{x^2+2ax+a^2}{x+a} \\
                      &= \frac{(a)^2+2a(a)+a^2}{a+a} \\
                      &= \frac{a^2 + 2a^2 + a^2}{2a} \\
                      &= \frac{4a^2}{2a} \\
                      &= 2a
                      \end{align}\)</p>
                   <b class="text-end text-danger"> JAWABAN : D</b>
                  </div>
                </div>
                <hr />
<!--=======================  soal no 11 ===================================-->

                <li> \(\displaystyle \lim_{x\to 0} \frac{x-y}{x+y}=...\) </li>
                <input type="radio" name="soal11" value="0"/>
                \(\displaystyle -y\)
                <br />
                <input type="radio" name="soal11" value="10" />
                \(\displaystyle -1\)
                <br />
                <input type="radio" name="soal11" value="0"  />
                \(\displaystyle 0\)
                <br />
                <input type="radio" name="soal11" value="0" />
                \(\displaystyle x\)
                <br />
                <input type="radio" name="soal11" value="0"/>
                \(\displaystyle y\)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal11" aria-expanded="false" aria-controls="collapsesoal11" >
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal11">
                  <div class="card card-body overflow-auto">
                    <p>\(\displaystyle \begin{align}
                      \lim_{x\to 0} \frac{x-y}{x+y} &= \frac{0-y}{0+y} \\
                      &= \frac{-y}{y} \\
                      &= -1
                      \end{align}\)</p>
                   <b class="text-end text-danger"> JAWABAN : B</b>
                  </div>
                </div>
                <hr />

<!--=======================  soal no 12 ===================================-->
                <li> \(\displaystyle \lim_{x\to -1} \frac{\sqrt{x^2 +3}+2x}{x+1}=...\) </li>
                <input type="radio" name="soal12" value="0"/>
                \(\displaystyle 2\)
                <br />
                <input type="radio" name="soal12" value="10" />
                \(\displaystyle \frac{3}{2}\)
                <br />
                <input type="radio" name="soal12" value="0"  />
                \(\displaystyle 1\)
                <br />
                <input type="radio" name="soal12" value="0" />
                \(\displaystyle \frac{1}{2}\)
                <br />
                <input type="radio" name="soal12" value="0"/>
                \(\displaystyle 0\)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal12" aria-expanded="false" aria-controls="collapsesoal12" >
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal12">
                  <div class="card card-body overflow-auto">
                    <p>\(\displaystyle \begin{align}
                      \lim_{x\to -1} \frac{\sqrt{x^2 +3}+2x}{x+1} &= \lim_{x\to -1} \frac{\sqrt{x^2 +3}+2x}{x+1} .\frac{\sqrt{x^2 +3}-2x}{\sqrt{x^2 +3}-2x} \\
                      &= \lim_{x\to -1} \frac{(x^2 +3)-4x^2}{x+1} .\frac{1}{\sqrt{x^2 +3}-2x} \\
                      &= \lim_{x\to -1} \frac{-3x^2+3}{x+1} .\frac{1}{\sqrt{x^2 +3}-2x} \\
                      &= \lim_{x\to -1} \frac{-3(x^2-1)}{x+1} .\frac{1}{\sqrt{x^2 +3}-2x} \\
                      &= \lim_{x\to -1} \frac{-3(x-1)(x+1)}{x+1} .\frac{1}{\sqrt{x^2 +3}-2x} \\
                      &= \lim_{x\to -1} \frac{-3(x-1)}{\sqrt{x^2 +3}-2x} \\
                      &= \frac{-3((-1)-1)}{\sqrt{(-1)^2 +3}-2(-1)} \\
                      &= \frac{-3(-2)}{\sqrt{4}+2} \\
                      &= \frac{6}{2+2} \\
                      &= \frac{6}{4} \\
                      &= \frac{3}{2}
                      \end{align}\)</p>
                   <b class="text-end text-danger"> JAWABAN : B</b>
                  </div>
                </div>
                <hr />

<!--=======================  soal no 13 ===================================-->
                <li> Jika \(\displaystyle \lim_{x\to 2} \frac{a\sqrt{x+7}+b}{x-2}=3\), maka \((2a+b=...)\) </li>
                <input type="radio" name="soal13" value="0"/>
                \(\displaystyle -36\)
                <br />
                <input type="radio" name="soal13" value="10" />
                \(\displaystyle -18\)
                <br />
                <input type="radio" name="soal13" value="0"  />
                \(\displaystyle 0\)
                <br />
                <input type="radio" name="soal13" value="0" />
                \(\displaystyle 18\)
                <br />
                <input type="radio" name="soal13" value="0"/>
                \(\displaystyle 36\)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal13" aria-expanded="false" aria-controls="collapsesoal13" >
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal13">
                  <div class="card card-body overflow-auto">
                    <p>Nilai \(\displaystyle \lim_{x\to 2} \frac{a\sqrt{x+7}+b}{x-2}=3\). Jika kita substitusi langsung nilai \(x=2\) maka nilai \(a\sqrt{x+7}+b\) harus \(0\), karena jika tidak nol maka limit adalah \(\infty\)
                    </p>
                    <p>
                      Sehingga untu \(x=2\) berlaku:
                    </p>
                    <p>\(\displaystyle \begin{align}
                      a\sqrt{x+7}+b &=0 \\
                      a \sqrt{2+7}+b &= 0 \\
                      a \sqrt{9}+b &= 0 \\
                      3a+b&=0 \\
                      b &= -3a
                      \end{align}\)</p>
                      <p>Lalu dengan mengalikan akar sekawan maka akan kita peroleh:</p>
                      <p>\(\displaystyle \begin{align}
                        \lim_{x\to 2} \frac{a\sqrt{x+7}+b}{x-2} &= 3 \\
                        \lim_{x\to 2} \frac{a\sqrt{x+7}+b}{x-2}.\frac{a\sqrt{x+7}-b}{a\sqrt{x+7}-b} &= 3 \\
                        \lim_{x\to 2} \frac{a^2(x+7)-b^2}{x-2}.\frac{1}{a\sqrt{x+7}-b} &= 3 \\
                        \lim_{x\to 2} \frac{a^2x+7a^2-b^2}{x-2}.\frac{1}{a\sqrt{x+7}-b} &= 3 \\
                        \lim_{x\to 2} \frac{(x-2)(a^2)+(9a^2-b^2)}{(x-2)(a\sqrt{x+7}-b)} &= 3 \\
                        \lim_{x\to 2} \frac{(x-2)(a^2)+(9a^2-(-3a)^2)}{(x-2)(a\sqrt{x+7}-b)} &= 3 \\
                        \lim_{x\to 2} \frac{(x-2)(a^2)+(9a^2-9a^2)}{(x-2)(a\sqrt{x+7}-b)} &= 3 \\
                        \lim_{x\to 2} \frac{(x-2)(a^2)}{(x-2)(a\sqrt{x+7}-b)} &= 3 \\
                        \lim_{x\to 2} \frac{a^2}{a\sqrt{x+7}-b} &= 3 \\
                        \frac{a^2}{a\sqrt{2+7}-b} &= 3 \\
                        \frac{a^2}{a\sqrt{9}-b} &= 3 \\
                        \frac{a^2}{3a-b} &= 3 \\
                        \frac{a^2}{3a-(-3a)} &= 3 \\
                        \frac{a^2}{6a} &= 3 \\
                        \frac{a}{6} &= 3 \\
                        a &= 18
                        \end{align}\)</p>
                        <p>Substitusi nilai \(a\) ke persamaan \(b=-3a\)</p>
                        <p>\(b=-3a =-3(18)=-54\)</p>
                        <p>Jadi, \(2a+b=2(18)-54=-18\)</p>
                   <b class="text-end text-danger"> JAWABAN : B</b>
                  </div>
                </div>
                <hr />
<!--=======================  soal no 14 ===================================-->
                <li> Hasil dari \(\displaystyle \lim_{x\to 4} \sqrt[3]{3x^2+7x-12}= ...\) </li>
                <input type="radio" name="soal14" value="0"/>
                \(\displaystyle -4\)
                <br />
                <input type="radio" name="soal14" value="0" />
                \(\displaystyle -2\)
                <br />
                <input type="radio" name="soal14" value="10"  />
                \(\displaystyle 4\)
                <br />
                <input type="radio" name="soal14" value="0" />
                \(\displaystyle 6\)
                <br />
                <input type="radio" name="soal14" value="0"/>
                \(\displaystyle 8\)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal14" aria-expanded="false" aria-controls="collapsesoal14" >
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal14">
                  <div class="card card-body overflow-auto">
                    <p>\(\displaystyle \begin{align}
                      \lim_{x\to 4} \sqrt[3]{3x^2+7x-12} &= \sqrt[3]{3(4)^2+7(4)-12} \\
                      &= \sqrt[3]{3(16)+28-12} \\
                      &= \sqrt[3]{48+16} \\
                      &= \sqrt[3]{64} \\
                      &= 4
                      \end{align}\)</p>
                   <b class="text-end text-danger"> JAWABAN : C</b>
                  </div>
                </div>
                <hr />
<!--=======================  soal no 15 ===================================-->
                <li>Diketahui fungsi \(f(x)=3-4x. \) <br> \(\displaystyle \lim_{x\to p} f(x)=p-2\), nilai \(p= . . .\) </li>
                <input type="radio" name="soal15" value="10"/>
                \(\displaystyle 1\)
                <br />
                <input type="radio" name="soal15" value="0" />
                \(\displaystyle \frac{3}{5}\)
                <br />
                <input type="radio" name="soal15" value="0"  />
                \(\displaystyle -1\)
                <br />
                <input type="radio" name="soal15" value="0" />
                \(\displaystyle -\frac{5}{3}\)
                <br />
                <input type="radio" name="soal15" value="0"/>
                \(\displaystyle -2\)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal15" aria-expanded="false" aria-controls="collapsesoal15" >
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal15">
                  <div class="card card-body overflow-auto">
                    <p>\(\displaystyle \begin{align}
                      \lim_{x\to p} 3-4x &=p-2 \\
                      3-4p &= p-2 \\
                      -4p-p &= -2-3 \\
                      -5p &= -5 \\
                      p &= \frac{-5}{-5} \\
                      p &=1
                      \end{align}\)</p>
                   <b class="text-end text-danger"> JAWABAN : A</b>
                  </div>
                </div>
                <hr />
<!--=======================  soal no 16 ===================================-->
                <li>Nilai \(\displaystyle \lim_{x\to 2}
                  \left(\frac{1}{x-2}-\frac{4}{x^2-4} \right)=... \) </li>
                <input type="radio" name="soal16" value="0"/>
                \(\displaystyle \frac{1}{2}\)
                <br />
                <input type="radio" name="soal16" value="10" />
                \(\displaystyle \frac{1}{4}\)
                <br />
                <input type="radio" name="soal16" value="0"  />
                \(\displaystyle \frac{1}{8}\)
                <br />
                <input type="radio" name="soal16" value="0" />
                \(\displaystyle -\frac{1}{4}\)
                <br />
                <input type="radio" name="soal16" value="0"/>
                \(\displaystyle 0\)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal16" aria-expanded="false" aria-controls="collapsesoal16" >
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal16">
                  <div class="card card-body overflow-auto">
                    <p>\(\displaystyle \begin{align}
                      \lim_{x\to 2} \left(\frac{1}{x-2}-\frac{4}{x^2-4}\right) &=\lim_{x\to 2} \left( \frac{1}{x-2}.\frac{x+2}{x+2} -\frac{4}{x^2-4}\right) \\
                      &=\lim_{x\to 2} \left( \frac{x+2}{(x-2)(x+2)} -\frac{4}{(x-2)(x+2)}\right) \\
                      &=\lim_{x\to 2} \left( \frac{(x+2)-4}{(x-2)(x+2)}\right) \\
                      &=\lim_{x\to 2} \left( \frac{(x-2)}{(x-2)(x+2)}\right) \\
                      &=\lim_{x\to 2} \left( \frac{1}{(x+2)}\right) \\
                      &= \frac{1}{2+2}\\
                      &= \frac{1}{4}
                      \end{align}\)</p>
                   <b class="text-end text-danger"> JAWABAN : B</b>
                  </div>
                </div>
                <hr />
<!--=======================  soal no 17 ===================================-->
                <li>Nilai \(\displaystyle \lim_{x\to 5} \sqrt{3x^2-11}-3x=... \) </li>
                <input type="radio" name="soal17" value="0"/>
                \(\displaystyle 23\)
                <br />
                <input type="radio" name="soal17" value="0" />
                \(\displaystyle 7\)
                <br />
                <input type="radio" name="soal17" value="0"  />
                \(\displaystyle 0\)
                <br />
                <input type="radio" name="soal17" value="0" />
                \(\displaystyle -3\)
                <br />
                <input type="radio" name="soal17" value="10"/>
                \(\displaystyle -7\)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal17" aria-expanded="false" aria-controls="collapsesoal17" >
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal17">
                  <div class="card card-body overflow-auto">
                    <p>\(\displaystyle \begin{align}
                      \lim_{x\to 5} \sqrt{3x^2-11}-3x &= \sqrt{3(5)^2-11}-3(5) \\
                      &= \sqrt{3(25)-11}-15 \\
                      &= \sqrt{64}-15 \\
                      &= 8-15 \\
                      &=-7
                      \end{align}\)</p>
                   <b class="text-end text-danger"> JAWABAN : E</b>
                  </div>
                </div>
                <hr />
<!--=======================  soal no 18 ===================================-->
                <li>Sebuah mobil bergerak dengan kecepatan setiap saat dirumuskan dengan \(v(t)=t^2 -t \) (\(v\) dalam meter/detik dan \(t\) dalam detik). Jika \(t\) mendekati \(5\) detik, kecepatan mobil mendekati . . . meter/detik </li>
                <input type="radio" name="soal18" value="0"/>
                \(\displaystyle 25\)
                <br />
                <input type="radio" name="soal18" value="10" />
                \(\displaystyle 20\)
                <br />
                <input type="radio" name="soal18" value="0"  />
                \(\displaystyle 15\)
                <br />
                <input type="radio" name="soal18" value="0" />
                \(\displaystyle 12\)
                <br />
                <input type="radio" name="soal18" value="0"/>
                \(\displaystyle 10\)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal18" aria-expanded="false" aria-controls="collapsesoal18" >
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal18">
                  <div class="card card-body overflow-auto">
                    <p>Untuk mencari kecepatan mobil saat \(t\) mendekati \(5\) detik maka </p>
                    <p>\(\displaystyle \begin{align}
                      \lim_{t \to 5} v(t) &= \lim_{t \to 5} t^2 - t \\
                      &= (5)^2-5 \\
                      &= 25-5 \\
                      &= 20
                      \end{align}\)</p>
                      <p>Jadi, kecepatan mobil mendekati \(20\) meter/detik</p>
                   <b class="text-end text-danger"> JAWABAN : B</b>
                  </div>
                </div>
                <hr />
<!--=======================  soal no 19 ===================================-->
                <li>Sebatang besi dipanaskan sehingga mengalami pemuaian panjang. Adapun rumus pertambahan panjang terhadap waktu dituliskan dengan fungsi \(f(t)=0,16t^2 + 0,8t\) (dengan \(t\) dalam menit, dan panjang dalam mm). Kecepatan perubahan panjang saat \(t=10\) menit adalah . . . mm/menit.</li>
                <input type="radio" name="soal19" value="0"/>
                \(\displaystyle 2,4\)
                <br />
                <input type="radio" name="soal19" value="0" />
                \(\displaystyle 3,6\)
                <br />
                <input type="radio" name="soal19" value="10"  />
                \(\displaystyle 4\)
                <br />
                <input type="radio" name="soal19" value="0" />
                \(\displaystyle 6\)
                <br />
                <input type="radio" name="soal19" value="0"/>
                \(\displaystyle 8\)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal19" aria-expanded="false" aria-controls="collapsesoal19" >
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal19">
                  <div class="card card-body overflow-auto">
                    <p>\(f(t)=0,16t^2 + 0,8t\)</p>
                    <p>laju perubahan pertambahan panjang dari besi dapat diukur jika panjangnya mendekati nol, Sehingga</p>
                    <p>\(\displaystyle \begin{align}
                      v(t) &= \lim_{p \to 0} \frac{f(t+p)-f(t)}{p} \\
                      &= \lim_{p \to 0} \frac{0,16(t+p)^2+0,8(t+p)-(0,16t^2+0,8t)}{p} \\
                      &= \lim_{p \to 0} \frac{0,16(t^2+2tp+p^2)+0,8t+0,8p-0,16t^2-0,8t}{p} \\
                      &= \lim_{p \to 0} \frac{0,16t^2+0,32tp+0,16p^2+0,8t+0,8p-0,16t^2-0,8t}{p} \\
                      &= \lim_{p \to 0} \frac{0,32tp+0,16p^2+0,8p}{p} \\
                      &= \lim_{p \to 0} \frac{p(0,32t+0,16p+0,8)}{p} \\
                      &= \lim_{p \to 0} 0,32t+0,16p+0,8 \\
                      &= 0,32t+0,16(0)+0,8 \\
                      &= 0,32t+0,8 \\\\
                      v(10) &= 0,32(10) + 0,8 \\
                      &= 3,2 + 0, 8 \\
                      &= 4
                      \end{align}\)</p>
                      <p>Jadi, kecepatan perubahan panjangnya adalah \(4\) mm/menit</p>
                   <b class="text-end text-danger"> JAWABAN : C</b>
                  </div>
                </div>
                <hr />
<!--=======================  soal no 20 ===================================-->
                <li>Jika \(f(x)=2x^2\), maka \(\displaystyle \lim_{h \to 0} \frac{f(x+2h)-f(x-2h)}{h}=... \)</li>
                <input type="radio" name="soal20" value="0"/>
                \(\displaystyle 4x\)
                <br />
                <input type="radio" name="soal20" value="0" />
                \(\displaystyle 8x\)
                <br />
                <input type="radio" name="soal20" value="10"  />
                \(\displaystyle 16x\)
                <br />
                <input type="radio" name="soal20" value="0" />
                \(\displaystyle 4x^2\)
                <br />
                <input type="radio" name="soal20" value="0"/>
                \(\displaystyle 8x^2\)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal20" aria-expanded="false" aria-controls="collapsesoal20" >
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal20">
                  <div class="card card-body overflow-auto">
                    <p>\(\displaystyle \begin{align}
                      \lim_{h \to 0} \frac{f(x+2h)-f(x-2h)}{h} &= \lim_{h \to 0} \frac{2(x+2h)^2-2(x-2h)^2}{h} \\
                      &= \lim_{h \to 0} \frac{2(x^2+4xh+4h^2)-2(x^2-4xh+4h^2)}{h} \\
                      &= \lim_{h \to 0} \frac{2x^2+8xh+8h^2-2x^2+8xh-8h^2}{h} \\
                      &= \lim_{h \to 0} \frac{8xh+8xh}{h} \\
                      &= \lim_{h \to 0} \frac{16xh}{h} \\
                      &= \lim_{h \to 0} 16x \\
                      &= 16x
                      \end{align}\)</p>
                   <b class="text-end"> JAWABAN : C</b>
                  </div>
                </div>
                <hr />

            </ol>

{{-- COPY DARI SINI SETIAP SOAL --}}
<input type="hidden" id="materi" name="materi" value="limit01">
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
    <a href="/createlimit01" id="kirimsaja" class="btn btn-warning btn-bukti d-none" >SIMPAN JAWABAN</a>
</div>
</form>
{{-- COPY SAMPAI SINI --}}

<div id="disqus_thread" class="mt-4"></div>

</div>
</div>
</div>
</section>
@endsection

