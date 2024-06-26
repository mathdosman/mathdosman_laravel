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
            Limit Fungsi ALjabar - Paket 02
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
                <li> \(\displaystyle \lim_{x \to 2} \frac{x^2+2x-8}{x^2-x-2}=... \)</li>
                <input type="radio" name="soal1" value="0"/>
                \(\displaystyle 3\)
                <br />
                <input type="radio" name="soal1" value="10" />
                \(\displaystyle 2\)
                <br />
                <input type="radio" name="soal1" value="0"  />
                \(\displaystyle 0\)
                <br />
                <input type="radio" name="soal1" value="0" />
                \(\displaystyle -2\)
                <br />
                <input type="radio" name="soal1" value="0"/>
                \(\displaystyle -3\)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal1" aria-expanded="false" aria-controls="collapsesoal1" >
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal1">
                    <div class="card card-body overflow-auto">
                        <p>\(\displaystyle \begin{align}
                            \lim_{x \to 2} \frac{x^2+2x-8}{x^2-x-2} &= \lim_{x \to 2} \frac{(x+4)(x-2)}{(x+1)(x-2)} \\
                            &= \lim_{x \to 2} \frac{x+4}{x+1} \\
                            &= \frac{2+4}{2+1} \\
                            &= \frac{6}{3} \\
                            &= 2
                        \end{align}\)</p>
                    <b class="text-end text-danger"> JAWABAN : B</b>
                    </div>
                </div>
                <hr />
<!--=======================  soal no 2 ===================================-->
            <li> \(\displaystyle \lim_{h \to 0} \frac{(x+h)^2 - x^2}{h}=... \)</li>
                <input type="radio" name="soal2" value="0"/>
                \(\displaystyle x\)
                <br />
                <input type="radio" name="soal2" value="10" />
                \(\displaystyle 2x\)
                <br />
                <input type="radio" name="soal2" value="0"  />
                \(\displaystyle x^2\)
                <br />
                <input type="radio" name="soal2" value="0" />
                \(\displaystyle -2x\)
                <br />
                <input type="radio" name="soal2" value="0"/>
                \(\displaystyle -x^2\)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal2" aria-expanded="false" aria-controls="collapsesoal2" >
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal2">
                    <div class="card card-body overflow-auto">
                        <p>\(\displaystyle \begin{align}
                            \lim_{h \to 0} \frac{(x+h)^2 - x^2}{h} &= \lim_{h \to 0} \frac{(x+h-x)(x+h+x)}{h} \\
                            &= \lim_{h \to 0} \frac{h(2x+h)}{h} \\
                            &= \lim_{h \to 0} 2x+h \\
                            &= 2x+0 \\
                            &= 2x
                            \end{align}\)</p>
                        <b class="text-end text-danger"> JAWABAN : B</b>
                    </div>
                </div>
                <hr />
<!--=======================  soal no 3 ===================================-->
            <li> Jika \(\displaystyle \lim_{x \to a} \frac{f(x)-f(a)}{x-a}=1 \), maka \(\displaystyle \lim_{x \to a} \frac{af(x)-xf(a)}{x-a}=... \)</li>
                <input type="radio" name="soal3" value="0"/>
                \(\displaystyle 1\)
                <br />
                <input type="radio" name="soal3" value="0" />
                \(\displaystyle a\)
                <br />
                <input type="radio" name="soal3" value="0"  />
                \(\displaystyle f(a)\)
                <br />
                <input type="radio" name="soal3" value="0" />
                \(\displaystyle a+f(a)\)
                <br />
                <input type="radio" name="soal3" value="10"/>
                \(\displaystyle a-f(a)\)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal3" aria-expanded="false" aria-controls="collapsesoal3" >
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal3">
                    <div class="card card-body overflow-auto">
                        <p>\(\displaystyle \begin{align}
                            \lim_{x \to a} \frac{af(x)-xf(a)}{x-a} &= \lim_{x \to a} \frac{(x-a)(-f(a))+ \left(af(x)-af(a) \right) }{x-a} \\
                            &= \lim_{x \to a} \frac{(x-a)(-f(a))}{x-a} + \lim_{x \to a} \frac{a(f(x)-f(a))}{x-a} \\
                            &= \lim_{x \to a} -f(a) + a. \lim_{x \to a} \frac{f(x)-f(a)}{x-a} \\
                            &= -f(a)+a \\
                            &= a-f(a)
                            \end{align}\) </p>
                    <b class="text-end text-danger"> JAWABAN : E</b>
                    </div>
                </div>
                <hr />
<!--=======================  soal no 4 ===================================-->
            <li> \(\displaystyle \lim_{x \to 1} \frac{\sqrt{x^2+3}-x-1}{1-x^2}=... \), </li>
                <input type="radio" name="soal4" value="0"/>
                \(\displaystyle -\frac{1}{2} \)
                <br />
                <input type="radio" name="soal4" value="0" />
                \(\displaystyle -\frac{1}{4} \)
                <br />
                <input type="radio" name="soal4" value="0"  />
                \(\displaystyle 0\)
                <br />
                <input type="radio" name="soal4" value="10" />
                \(\displaystyle \frac{1}{4} \)
                <br />
                <input type="radio" name="soal4" value="0"/>
                \(\displaystyle \frac{1}{2} \)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal4" aria-expanded="false" aria-controls="collapsesoal4" >
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal4">
                    <div class="card card-body overflow-auto">
                        <p>\(\displaystyle \begin{align}
                            \lim_{x \to 1} \frac{\sqrt{x^2+3}-x-1}{1-x^2} &= \lim_{x \to 1} \frac{\sqrt{x^2+3}-(x+1)}{1-x^2} . \frac{\sqrt{x^2+3}+(x+1)}{\sqrt{x^2+3}+(x+1)} \\
                            &= \lim_{x \to 1} \frac{(x^2+3)-(x+1)^2} {(1-x)(1+x)} . \frac{1}{\sqrt{x^2+3}+(x+1)} \\
                            &= \lim_{x \to 1} \frac{x^2+3-(x^2+2x+1)} {(1-x)(1+x)(\sqrt{x^2+3}+(x+1))} \\
                            &= \lim_{x \to 1} \frac{x^2+3- x^2-2x-1}{(1-x)(1+x)(\sqrt{x^2+3}+(x+1))} \\
                            &= \lim_{x \to 1} \frac{-2x+2}{(1-x)(1+x)(\sqrt{x^2+3}+(x+1))} \\
                            &= \lim_{x \to 1} \frac{2(1-x)}{(1-x)(1+x)(\sqrt{x^2+3}+(x+1)} \\
                            &= \lim_{x \to 1} \frac{2}{(1+x)(\sqrt{x^2+3}+(x+1)} \\
                            &= \frac{2}{(1+1)(\sqrt{(1)^2+3}+(1+1)} \\
                            &= \frac{2}{(2)(\sqrt{4}+(2)} \\
                            &= \frac{2}{(2)(2+2)} \\
                            &= \frac{1}{4}
                            \end{align}\)</p>
                    <b class="text-end text-danger"> JAWABAN : D</b>
                    </div>
                </div>
                <hr />
<!--=======================  soal no 5 ===================================-->
            <li> \(\displaystyle \lim_{a \to b} \frac{a\sqrt{a}-b\sqrt{b}}{\sqrt{a}-\sqrt{b}}=... \) </li>
                <input type="radio" name="soal5" value="0"/>
                \(\displaystyle 0\)
                <br />
                <input type="radio" name="soal5" value="0" />
                \(\displaystyle 3a\)
                <br />
                <input type="radio" name="soal5" value="0"  />
                \(\displaystyle \sqrt[3]{b}\)
                <br />
                <input type="radio" name="soal5" value="10" />
                \(\displaystyle 3b\)
                <br />
                <input type="radio" name="soal5" value="0"/>
                \(\displaystyle \infty\)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal5" aria-expanded="false" aria-controls="collapsesoal5" >
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal5">
                    <div class="card card-body overflow-auto">
                        <p>Perhatikan sifat eksponen berikut: \((a^3-b^3)=(a-b)(a^2+ab+b^3) \)</p>
                        <p>\(\displaystyle \begin{align}
                            \lim_{a \to b} \frac{a\sqrt{a}-b\sqrt{b}}{\sqrt{a}-\sqrt{b}} &=\lim_{a \to b} \frac{a^1 a^{\frac{1}{2}}-b^1 b^{\frac{1}{2}}}{\sqrt{a}-\sqrt{b}} \\
                            &=\lim_{a \to b} \frac{a^{1+\frac{1}{2}}-b^{1+\frac{1}{2}}}{\sqrt{a}-\sqrt{b}} \\
                            &=\lim_{a \to b} \frac{a^{\frac{3}{2}}-b^{\frac{3}{2}}}{\sqrt{a}-\sqrt{b}} \\
                            &=\lim_{a \to b} \frac{(\sqrt{a})^3-(\sqrt{b})^3}{\sqrt{a}-\sqrt{b}} \\
                            &= \lim_{a \to b} \frac{(\sqrt{a}-\sqrt{b})((\sqrt{a})^2+\sqrt{ab}+(\sqrt{b})^2)}{\sqrt{a}-\sqrt{b}} \\
                            &= \lim_{a \to b} a + \sqrt{ab}+b \\
                            &=  (b) + \sqrt{(b)b}+b \\
                            &=  b + b +b \\
                            &=  3b \\
                            \end{align}\)</p>
                    <b class="text-end text-danger"> JAWABAN : D</b>
                    </div>
                </div>
                <hr />
<!--=======================  soal no 6 ===================================-->
            <li> Diketahui \(\displaystyle f(x) = \left\{\begin{matrix} 3x-p, \: x \leq 2 \\ 2x+1, \: x > 2\end{matrix}\right.\), Agar \(\displaystyle \lim_{x \to 2}f(x)\) mempunyai nilai, maka \(p=...\) </li>
                <input type="radio" name="soal6" value="0"/>
                \(\displaystyle -2\)
                <br />
                <input type="radio" name="soal6" value="0" />
                \(\displaystyle -1\)
                <br />
                <input type="radio" name="soal6" value="0"  />
                \(\displaystyle 0\)
                <br />
                <input type="radio" name="soal6" value="10" />
                \(\displaystyle 1\)
                <br />
                <input type="radio" name="soal6" value="0"/>
                \(\displaystyle 2\)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal6" aria-expanded="false" aria-controls="collapsesoal6">
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal6">
                    <div class="card card-body overflow-auto">
                        <p>Agar memiliki nilai di \(x \to 2\) maka nilai limit kiri harus sama dengan nilai limit kanannya.</p>
                        <p>\(\displaystyle \begin{align}
                            \lim_{x \to 2^-} 3x-p &= \lim_{x \to 2^+} 2x+1 \\
                            3(2)-p &= 2(2)+1 \\
                            6-p &= 4+1 \\
                            -p &= 5-6 \\
                            -p &= -1 \\
                            p &= 1 \\
                            \end{align}\)</p>
                    <b class="text-end text-danger"> JAWABAN : D</b>
                    </div>
                </div>
                <hr />
<!-- PERBAIKI -->
<!--=======================  soal no 7 ===================================-->
            <li> \(\displaystyle \lim_{x \to 1} \frac{1-\sqrt{x}}{1-x^2} =...  \), </li>
                <input type="radio" name="soal7" value="0"/>
                \(\displaystyle -\frac{1}{2} \)
                <br />
                <input type="radio" name="soal7" value="10" />
                \(\displaystyle \frac{1}{4}\)
                <br />
                <input type="radio" name="soal7" value="0"  />
                \(\displaystyle 0\)
                <br />
                <input type="radio" name="soal7" value="0" />
                \(\displaystyle 1\)
                <br />
                <input type="radio" name="soal7" value="0"/>
                \(\displaystyle 4 \)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal7" aria-expanded="false" aria-controls="collapsesoal7" >
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal7">
                    <div class="card card-body overflow-auto">
                        <p>\(\displaystyle \begin{align} \lim_{x \to 1} \frac{1-\sqrt{x}}{1-x^2} &= \lim_{x \to 1} \frac{1-\sqrt{x}}{(1-x)(1+x)} \\
                            &= \lim_{x \to 1} \frac{1-\sqrt{x}}{(1-\sqrt{x})(1+\sqrt{x})(1+x)} \\
                            &= \lim_{x \to 1} \frac{1}{(1+\sqrt{x})(1+x)} \\
                            &= \frac{1}{(1+\sqrt{1})(1+1)} \\
                            &= \frac{1}{(2)(2)} \\
                            &= \frac{1}{4}
                            \end{align}\)</p>
                    <b class="text-end text-danger"> JAWABAN : B</b>
                    </div>
                </div>
                <hr />
<!--=======================  soal no 8 ===================================-->
            <li> Nilai dari \(\displaystyle \lim_{x \to 8} \frac{x-8}{\sqrt[3]{x}-2}= . . .  \) </li>
                <input type="radio" name="soal8" value="0"/>
                \(\displaystyle 8 \)
                <br />
                <input type="radio" name="soal8" value="10" />
                \(\displaystyle 12\)
                <br />
                <input type="radio" name="soal8" value="0"  />
                \(\displaystyle 16\)
                <br />
                <input type="radio" name="soal8" value="0" />
                \(\displaystyle 20\)
                <br />
                <input type="radio" name="soal8" value="0"/>
                \(\displaystyle 24\)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal8" aria-expanded="false" aria-controls="collapsesoal8" >
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal8">
                    <div class="card card-body overflow-auto">
                    <p>Perhatikan sifat pangkat berikut \((a^3-b^3)=(a-b)(a^2+ab+b^3) \)</p>
                        <p>\(\displaystyle \begin{align}
                            \lim_{x \to 8} \frac{x-8}{\sqrt[3]{x}-2} &= \lim_{x \to 8} \frac{(x^{\frac{1}{3}})^3-(8^{\frac{1}{3}})^3}{\sqrt[3]{x}-2} \\
                            &= \lim_{x \to 8} \frac{(\sqrt[3]{x})^3 - 2^3} {\sqrt[3]{x}-2} \\
                            &= \lim_{x \to 8} \frac{(\sqrt[3]{x}-2)(\sqrt[3]{x^2}+2\sqrt[3]{x}+4)}{\sqrt[3]{x}-2} \\
                            &= \lim_{x \to 8} \sqrt[3]{x^2}+2\sqrt[3]{x}+4 \\
                            &=  \sqrt[3]{8^2}+2\sqrt[3]{8}+4 \\
                            &=  \sqrt[3]{64}+2(2)+4 \\
                            &=  4+2(2)+4 \\
                            &=  12 \\
                            \end{align}\)</p>
                    <b class="text-end text-danger  "> JAWABAN : B</b>
                    </div>
                </div>
                <hr />
<!--=======================  soal no 9 ===================================-->
            <li> Diketahui \(f(x)=x^2 +ax+b\) dengan \(f(b+1)=0\) \(\displaystyle \lim_{t \to 0} \frac{f(x+b)}{x}=-1  \), maka \(a+2b=...\) </li>
                <input type="radio" name="soal9" value="0"/>
                \(\displaystyle -2\)
                <br />
                <input type="radio" name="soal9" value="10" />
                \(\displaystyle -1\)
                <br />
                <input type="radio" name="soal9" value="0"  />
                \(\displaystyle 0\)
                <br />
                <input type="radio" name="soal9" value="0" />
                \(\displaystyle 1\)
                <br />
                <input type="radio" name="soal9" value="0"/>
                \(\displaystyle 2\)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal9" aria-expanded="false" aria-controls="collapsesoal9" >
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal9">
                    <div class="card card-body overflow-auto">
                    <p>Diketahui \(f(b+1)\) dan \(f(x)=x^2 +ax+b\) sehingga diperoleh:</p>
                        <p>\(\displaystyle \begin{align}
                        f(b+1) &= (b+1)^2 + a(b+1)+b \\
                        0 &= (b^2+2b+1)+ab+a+b \\
                        0 &= b^2+3b+ab+a+1 \\
                        \end{align}\)>
                    <p>Nilai \(\displaystyle \lim_{x \to 0}\frac{f(x+b)}{x}=-1 \) sehingga jika kita substitusi langsung nilai \(x=0\) maka nilai \(f(0+b)\) harus \(0\). Karena jika tidak nol maka nilai limit adalah \(\infty\). </p>
                    <p>Karena nilai \(f(b)\) untuk \(x=0\) adalah \(0\) maka dapat dituliskan:  </p>
                    <p>\(\displaystyle \begin{align}
                        f(x) &= x^2 +ax+b \\
                        f(b) &= (b)^2 +a(b)+b \\
                        0 &= b^2+ab+b
                        \end{align}\)</p>
                        <p>Sehingga</p>
                        <p>\(\displaystyle \begin{align}
                            b^2+3b+ab+a+1 &= 0 \\
                            b^2+2b+b+ab+a+1 &= 0 \\
                            (b^2+ab+b)+2b+a+1 &= 0 \\
                            (0)+2b+a+1 &= 0 \\
                            2b+a &= -1
                            \end{align}\)</p>
                        <p>Jadi, nilai \(a+2b= -1\)</p>
                    <b class="text-end text-danger"> JAWABAN : B</b>
                    </div>
                </div>
                <hr />
<!-- PERBAIKI -->
<!--=======================  soal no 10 ===================================-->
            <li> \(\displaystyle \lim_{x \to 2} \frac{x^3-8}{x^2+3x-10}=...\) </li>
                <input type="radio" name="soal10" value="0"/>
                \(\displaystyle 12\)
                <br />
                <input type="radio" name="soal10" value="10" />
                \(\displaystyle \frac{12}{7}\)
                <br />
                <input type="radio" name="soal10" value="0"  />
                \(\displaystyle 0\)
                <br />
                <input type="radio" name="soal10" value="0" />
                \(\displaystyle -\frac{12}{7}\)
                <br />
                <input type="radio" name="soal10" value="0"/>
                \(\displaystyle -12\)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal10" aria-expanded="false" aria-controls="collapsesoal10" >
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal10">
                    <div class="card card-body overflow-auto">
                        <p>\(\displaystyle \begin{align}
                            \lim_{x \to 2} \frac{x^3-8}{x^2+3x-10} &= \lim_{x \to 2} \frac{x^3-2^3}{(x-2)(x+5)} \\
                            &=\lim_{x \to 2} \frac{(x-2)(x^2+2x+4)}{(x-2)(x+5)} \\
                            &=\lim_{x \to 2} \frac{x^2+2x+4}{x+5} \\
                            &=\frac{(2)^2+2(2)+4}{(2)+5} \\
                            &=\frac{4+4+4}{7} \\
                            &=\frac{12}{7}
                            \end{align}\)</p>
                    <b class="text-end text-danger"> JAWABAN : B</b>
                    </div>
                </div>
                <hr />
<!--=======================  soal no 11 ===================================-->
            <li> \(\displaystyle \lim_{x \to 1} \frac{(3x-1)^2 -4}{x^2+4x-5}=... \)</li>
                <input type="radio" name="soal11" value="0"/>
                \(\displaystyle 0\)
                <br />
                <input type="radio" name="soal11" value="0" />
                \(\displaystyle 1\)
                <br />
                <input type="radio" name="soal11" value="10"  />
                \(\displaystyle 2\)
                <br />
                <input type="radio" name="soal11" value="0" />
                \(\displaystyle 4\)
                <br />
                <input type="radio" name="soal11" value="0"/>
                \(\displaystyle 8\)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal11" aria-expanded="false" aria-controls="collapsesoal11" >
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal11">
                    <div class="card card-body overflow-auto">
                        <p>\(\displaystyle \begin{align}
                            \lim_{x \to 1} \frac{(3x-1)^2 -4}{x^2+4x-5} &= \lim_{x \to 1} \frac{(3x-1-2)(3x-1+2)}{(x-1)(x+5)} \\
                            &= \lim_{x \to 1} \frac{(3x-3)(3x+1)}{(x-1)(x+5)} \\
                            &= \lim_{x \to 1} \frac{3(x-1)(3x+1)}{(x-1)(x+5)} \\
                            &= \lim_{x \to 1} \frac{3(3x+1)}{x+5} \\
                            &= \frac{3(3(1)+1)}{(1)+5} \\
                            &= \frac{3(4)}{6} \\
                            &= \frac{12}{6} \\
                            &= 2
                            \end{align}\)</p>
                    <b class="text-end"> JAWABAN : C</b>
                    </div>
                </div>
                <hr />
<!--=======================  soal no 12 ===================================-->
            <li> \(\displaystyle \lim_{t \to 2}  \frac{(t^3-8)}{t^2+4t-12}=...\) </li>
                <input type="radio" name="soal12" value="10"/>
                \(\displaystyle 1,5\)
                <br />
                <input type="radio" name="soal12" value="0" />
                \(\displaystyle 1\)
                <br />
                <input type="radio" name="soal12" value="0"  />
                \(\displaystyle 0\)
                <br />
                <input type="radio" name="soal12" value="0" />
                \(\displaystyle 0,5\)
                <br />
                <input type="radio" name="soal12" value="0"/>
                \(\displaystyle 0,25\)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal12" aria-expanded="false" aria-controls="collapsesoal12" >
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal12">
                    <div class="card card-body overflow-auto">
                        \(\displaystyle \begin{align}
                        \lim_{t \to 2}  \frac{(t^3-8)}{t^2+4t-12} &= \lim_{t \to 2}  \frac{(t^3-2^3)}{t^2+4t-12} \\
                        &= \lim_{t \to 2}  \frac{(t-2)(t^2+2t+4)}{(t-2)(t+6)} \\
                        &= \lim_{t \to 2}  \frac{t^2+2t+4}{t+6} \\
                        &= \frac{(2)^2+2(2)+4}{(2)+6} \\
                        &= \frac{4+4+4}{8} \\
                        &= \frac{12}{8} \\
                        &= \frac{3}{2} \\
                        &= 1,5
                        \end{align}\)
                    <b class="text-end text-danger"> JAWABAN : A</b>
                    </div>
                </div>
                <hr />
<!--=======================  soal no 13 ===================================-->
            <li> \(\displaystyle \lim_{x \to 3}  \frac{1}{x-3} \left ( \frac{1}{x-7}-\frac{2}{x-11}  \right) =...\)</li>
                <input type="radio" name="soal13" value="0"/>
                \(\displaystyle -\frac{1}{24} \)
                <br />
                <input type="radio" name="soal13" value="10" />
                \(\displaystyle -\frac{1}{32} \)
                <br />
                <input type="radio" name="soal13" value="0"  />
                \(\displaystyle 0\)
                <br />
                <input type="radio" name="soal13" value="0" />
                \(\displaystyle \frac{1}{32} \)
                <br />
                <input type="radio" name="soal13" value="0"/>
                \(\displaystyle \frac{1}{24} \)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal13" aria-expanded="false" aria-controls="collapsesoal13" >
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal13">
                    <div class="card card-body overflow-auto">
                        <p>
                            \(\displaystyle \begin{align}
                            \lim_{x \to 3}  \frac{1}{x-3} \left ( \frac{1}{x-7}-\frac{2}{x-11}  \right) &= \lim_{x \to 3}  \frac{1}{x-3} \left ( \frac{x-11}{(x-7)(x-11)}-\frac{2(x-7)}{(x-11)(x-7)}  \right) \\
                            &= \lim_{x \to 3}  \frac{1}{x-3} \left ( \frac{x-11-2x+14}{(x-7)(x-11)} \right) \\
                            &= \lim_{x \to 3}  \frac{1}{x-3} \left ( \frac{-x+3}{(x-7)(x-11)} \right) \\
                            &= \lim_{x \to 3}  \frac{-(x-3)}{(x-7)(x-11)(x-3)}  \\
                            &= \lim_{x \to 3}  \frac{-1}{(x-7)(x-11)}  \\
                            &=  \frac{-1}{((3)-7)((3)-11)}  \\
                            &=  \frac{-1}{(-4)(-8)}  \\
                            &=  \frac{-1}{32}  \\
                            &=  -\frac{1}{32}  \\
                            \end{align}\)
                        </p>
                    <b class="text-end text-danger"> JAWABAN : B</b>
                    </div>
                </div>
                <hr />
<!--=======================  soal no 14 ===================================-->
            <li> \(\displaystyle \lim_{x \to 1}  \frac{(x-1)(\sqrt{x}+1)}{\sqrt{x}-1}  =...\)</li>
                <input type="radio" name="soal14" value="0"/>
                \(\displaystyle 0 \)
                <br />
                <input type="radio" name="soal14" value="0" />
                \(\displaystyle 1 \)
                <br />
                <input type="radio" name="soal14" value="0"  />
                \(\displaystyle 2\)
                <br />
                <input type="radio" name="soal14" value="10" />
                \(\displaystyle 4 \)
                <br />
                <input type="radio" name="soal14" value="0"/>
                \(\displaystyle 8 \)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal14" aria-expanded="false" aria-controls="collapsesoal14" >
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal14">
                    <div class="card card-body overflow-auto">
                        <p>\(\displaystyle \begin{align}
                            \lim_{x \to 1}  \frac{(x-1)(\sqrt{x}+1)}{\sqrt{x}-1} &= \lim_{x \to 1}  \frac{(\sqrt{x}-1)(\sqrt{x}+1)(\sqrt{x}+1)}{\sqrt{x}-1} \\
                            &= \lim_{x \to 1}  (\sqrt{x}+1)(\sqrt{x}+1) \\
                            &=  (\sqrt{1}+1)(\sqrt{1}+1) \\
                            &=  (1+1)(1+1) \\
                            &=  (2)(2) \\
                            &=  4 \end{align}\)</p>
                    <b class="text-end text-danger "> JAWABAN : D</b>
                    </div>
                </div>
                <hr />
<!--=======================  soal no 15 ===================================-->
            <li> \(\displaystyle \lim_{x \to 2}  \frac{\sqrt{2+x}-\sqrt{2x}}{x-2}  =...\)</li>
                <input type="radio" name="soal15" value="0"/>
                \(\displaystyle -2 \)
                <br />
                <input type="radio" name="soal15" value="10" />
                \(\displaystyle -\frac{1}{4} \)
                <br />
                <input type="radio" name="soal15" value="0"  />
                \(\displaystyle 0\)
                <br />
                <input type="radio" name="soal15" value="0" />
                \(\displaystyle \frac{1}{4} \)
                <br />
                <input type="radio" name="soal15" value="0"/>
                \(\displaystyle 2 \)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal15" aria-expanded="false" aria-controls="collapsesoal15"  >
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal15">
                    <div class="card card-body overflow-auto">
                        <p>\(\displaystyle \begin{align}
                            \lim_{x \to 2}  \frac{\sqrt{2+x}-\sqrt{2x}}{x-2} &= \lim_{x \to 2}  \frac{\sqrt{2+x}-\sqrt{2x}}{x-2} .\frac{\sqrt{2+x}+\sqrt{2x}}{\sqrt{2+x}+\sqrt{2x}} \\
                            &= \lim_{x \to 2}  \frac{(x+2)-(2x)}{(x-2)(\sqrt{2+x}+\sqrt{2x})} \\
                            &= \lim_{x \to 2}  \frac{x+2-2x}{(x-2)(\sqrt{2+x}+\sqrt{2x})} \\
                            &= \lim_{x \to 2}  \frac{2-x}{(x-2)(\sqrt{2+x}+\sqrt{2x})} \\
                            &= \lim_{x \to 2}  \frac{-(x-2)}{(x-2)(\sqrt{2+x}+\sqrt{2x})} \\
                            &= \lim_{x \to 2}  \frac{-1}{\sqrt{2+x}+\sqrt{2x}} \\
                            &=  \frac{-1}{\sqrt{2+(2)}+\sqrt{2(2)}} \\
                            &=  \frac{-1}{\sqrt{4}+\sqrt{4}} \\
                            &=  \frac{-1}{2+2} \\
                            &=  -\frac{1}{4} \\
                            \end{align}\)</p>
                    <b class="text-end text-danger  "> JAWABAN : B</b>
                    </div>
                </div>
                <hr />
<!--=======================  soal no 16 ===================================-->
            <li> \(\displaystyle \lim_{x \to 4}  \frac{3-\sqrt{x^2-7}}{x^2-2x-8} =...\)</li>
                <input type="radio" name="soal16" value="0"/>
                \(\displaystyle -\frac{2}{3} \)
                <br />
                <input type="radio" name="soal16" value="10" />
                \(\displaystyle -\frac{2}{9} \)
                <br />
                <input type="radio" name="soal16" value="0"  />
                \(\displaystyle -\frac{1}{8} \)
                <br />
                <input type="radio" name="soal16" value="0" />
                \(\displaystyle 1 \)
                <br />
                <input type="radio" name="soal16" value="0"/>
                \(\displaystyle 2 \)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal16" aria-expanded="false" aria-controls="collapsesoal16" >
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal16">
                    <div class="card card-body overflow-auto">
                        <p>\(\displaystyle \begin{align}
                            \lim_{x \to 4}  \frac{3-\sqrt{x^2-7}}{x^2-2x-8} &= \lim_{x \to 4}  \frac{3-\sqrt{x^2-7}}{(x-4)(x+2)} .\frac{3+\sqrt{x^2-7}}{3+\sqrt{x^2-7}} \\
                            &= \lim_{x \to 4}  \frac{9-(x^2-7)}{(x-4)(x+2)(3+\sqrt{x^2-7})} \\
                            &= \lim_{x \to 4}  \frac{-(x^2-16)}{(x-4)(x+2)(3+\sqrt{x^2-7})} \\
                            &= \lim_{x \to 4}  \frac{-(x-4)(x+4)}{(x-4)(x+2)(3+\sqrt{x^2-7})} \\
                            &= \lim_{x \to 4}  \frac{-(x+4)}{(x+2)(3+\sqrt{x^2-7})} \\
                            &=  \frac{-((4)+4)}{((4)+2)(3+\sqrt{(4)^2-7})} \\
                            &=  \frac{-(8)}{(6)(3+\sqrt{16-7})} \\
                            &=  \frac{-(8)}{(6)(3+\sqrt{9})} \\
                            &=  \frac{-(8)}{(6)(3+3)} \\
                            &=  \frac{-(8)}{36} \\
                            &=  -\frac{2}{9} \\

                            \end{align}\)</p>
                    <b class="text-end text-danger"> JAWABAN : B</b>
                    </div>
                </div>
                <hr />
<!--=======================  soal no 17 ===================================-->
            <li>\(\displaystyle \lim_{x \to k}  \frac{x-k}{2(x-k)-2k+2x}  =...\)</li>
                <input type="radio" name="soal17" value="0"/>
                \(\displaystyle -1 \)
                <br />
                <input type="radio" name="soal17" value="0" />
                \(\displaystyle -\frac{1}{4} \)
                <br />
                <input type="radio" name="soal17" value="0"  />
                \(\displaystyle 0\)
                <br />
                <input type="radio" name="soal17" value="10" />
                \(\displaystyle \frac{1}{4} \)
                <br />
                <input type="radio" name="soal17" value="0"/>
                \(\displaystyle 1 \)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal17" aria-expanded="false" aria-controls="collapsesoal17" >
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal17">
                    <div class="card card-body overflow-auto">
                        <p>\(\displaystyle \begin{align}
                            \lim_{x \to k}  \frac{x-k}{2(x-k)-2k+2x} &= \lim_{x \to k}  \frac{x-k}{2(x-k)+2x-2k} \\
                            &= \lim_{x \to k}  \frac{x-k}{2(x-k)+2(x-k)} \\
                            &= \lim_{x \to k}  \frac{x-k}{(2+2)(x-k)} \\
                            &= \lim_{x \to k}  \frac{1}{4} \\
                            &= \frac{1}{4} \\
                            \end{align}\)</p>
                    <b class="text-end text-danger "> JAWABAN : D</b>
                    </div>
                </div>
                <hr />
<!--=======================  soal no 18 ===================================-->
            <li>\(\displaystyle \lim_{x \to 27}  \frac{x-27}{\sqrt[3]{x}-3}  =...\)</li>
                <input type="radio" name="soal18" value="0"/>
                \(\displaystyle 9 \)
                <br />
                <input type="radio" name="soal18" value="0" />
                \(\displaystyle 18 \)
                <br />
                <input type="radio" name="soal18" value="10"  />
                \(\displaystyle 27\)
                <br />
                <input type="radio" name="soal18" value="0" />
                \(\displaystyle 36 \)
                <br />
                <input type="radio" name="soal18" value="0"/>
                \(\displaystyle 45 \)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal18" aria-expanded="false" aria-controls="collapsesoal18" >
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal18">
                    <div class="card card-body overflow-auto">
                        <p>Gunakan rumus \(x^3-y^3=(x-y)(x^2+xy+y^2) \)</p>
                        <p>\(\displaystyle \begin{align}
                            \lim_{x \to 27}  \frac{x-27}{\sqrt[3]{x}-3} &=\lim_{x \to 27}  \frac{(\sqrt[3]{x}-3)(\sqrt[3]{x^2}+3\sqrt[3]{x}+9)}{\sqrt[3]{x}-3} \\
                            &=\lim_{x \to 27}  \sqrt[3]{x^2}+3\sqrt[3]{x}+9 \\
                            &=  \sqrt[3]{(27)^2}+3\sqrt[3]{(27)}+9 \\
                            &=  3^2+3(3)+9 \\
                            &=  9+9+9 \\
                            &=  27 \\

                            \end{align}\)</p>
                    <b class="text-end text-danger  "> JAWABAN : C</b>
                    </div>
                </div>
                <hr />
<!--=======================  soal no 19 ===================================-->
            <li>Nilai \(\displaystyle \lim_{x \to 2}  \frac{\sqrt{x+2}-\sqrt{3x-2}}{x-2}  =...\)</li>
                <input type="radio" name="soal19" value="0"/>
                \(\displaystyle 2 \)
                <br />
                <input type="radio" name="soal19" value="0" />
                \(\displaystyle 1 \)
                <br />
                <input type="radio" name="soal19" value="0"  />
                \(\displaystyle 1/2\)
                <br />
                <input type="radio" name="soal19" value="0" />
                \(\displaystyle 0 \)
                <br />
                <input type="radio" name="soal19" value="10"/>
                \(\displaystyle -\frac{1}{2} \)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal19" aria-expanded="false" aria-controls="collapsesoal19" >
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal19">
                    <div class="card card-body overflow-auto">
                        <p>\(\displaystyle \begin{align}
                            \lim_{x \to 2}  \frac{\sqrt{x+2}-\sqrt{3x-2}}{x-2} &= \lim_{x \to 2}  \frac{\sqrt{x+2}-\sqrt{3x-2}}{x-2} \frac{\sqrt{x+2}+\sqrt{3x-2}}{\sqrt{x+2}+\sqrt{3x-2}} \\
                            &= \lim_{x \to 2}  \frac{(x-2)-(3x-2)}{(x-2)(\sqrt{x+2}+\sqrt{3x-2})} \\
                            &= \lim_{x \to 2}  \frac{-2x+4}{(x-2)(\sqrt{x+2}+\sqrt{3x-2})} \\
                            &= \lim_{x \to 2}  \frac{-2(x-2)}{(x-2)(\sqrt{x+2}+\sqrt{3x-2})} \\
                            &= \lim_{x \to 2}  \frac{-2}{\sqrt{x+2}+\sqrt{3x-2}} \\
                            &= \frac{-2}{\sqrt{(2)+2}+\sqrt{3(2)-2}} \\
                            &= \frac{-2}{\sqrt{4}+\sqrt{4}} \\
                            &= \frac{-2}{2+2} \\
                            &= \frac{-2}{4} \\
                            &= -\frac{1}{2} \\
                            \end{align}\)</p>
                    <b class="text-end text-danger "> JAWABAN : E</b>
                    </div>
                </div>
                <hr />
<!--=======================  soal no 20 ===================================-->
            <li> \(\displaystyle \lim_{x \to 0}  \frac{4x}{\sqrt{1+2x}-\sqrt{1-2x}}  =... \)</li>
                <input type="radio" name="soal20" value="0"/>
                \(\displaystyle 0 \)
                <br />
                <input type="radio" name="soal20" value="0" />
                \(\displaystyle 1 \)
                <br />
                <input type="radio" name="soal20" value="10"  />
                \(\displaystyle 2\)
                <br />
                <input type="radio" name="soal20" value="0" />
                \(\displaystyle 4 \)
                <br />
                <input type="radio" name="soal20" value="0"/>
                \(\displaystyle \infty \)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal20" aria-expanded="false" aria-controls="collapsesoal20" >
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal20">
                    <div class="card card-body overflow-auto">
                        <p>\(\displaystyle \begin{align}
                            \lim_{x \to 0}  \frac{4x}{\sqrt{1+2x}-\sqrt{1-2x}} &= \lim_{x \to 0}  \frac{4x}{\sqrt{1+2x}-\sqrt{1-2x}} \frac{\sqrt{1+2x}+\sqrt{1-2x}}{\sqrt{1+2x}+\sqrt{1-2x} } \\
                            &= \lim_{x \to 0}  \frac{(4x)(\sqrt{1+2x}+\sqrt{1-2x})}{(1+2x)-(1-2x)} \\
                            &= \lim_{x \to 0}  \frac{(4x)(\sqrt{1+2x}+\sqrt{1-2x})}{1+2x-1+2x} \\
                            &= \lim_{x \to 0}  \frac{(4x)(\sqrt{1+2x}+\sqrt{1-2x})}{4x} \\
                            &= \lim_{x \to 0}  \sqrt{1+2x}+\sqrt{1-2x} \\
                            &= \sqrt{1+2(0)}+\sqrt{1-2(0)} \\
                            &= \sqrt{1}+\sqrt{1} \\
                            &= 1+1 \\
                            &= 2 \\
                            \end{align}\)</p>
                    <b class="text-end text-danger"> JAWABAN : C</b>
                    </div>
                </div>
                <hr />
<!--=======================  soal no 21 ===================================-->
            <li> \(\displaystyle \lim_{x \to 1}  \frac{3x+x\sqrt{x}-4}{\sqrt{x}-1}  =... \)</li>
                <input type="radio" name="soal21" value="0"/>
                \(\displaystyle 6 \)
                <br />
                <input type="radio" name="soal21" value="0" />
                \(\displaystyle 7 \)
                <br />
                <input type="radio" name="soal21" value="0"  />
                \(\displaystyle 8\)
                <br />
                <input type="radio" name="soal21" value="10" />
                \(\displaystyle 9 \)
                <br />
                <input type="radio" name="soal21" value="0"/>
                \(\displaystyle 10 \)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal21" aria-expanded="false" aria-controls="collapsesoal21" >
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal21">
                    <div class="card card-body overflow-auto">
                    <p>Jika difaktorkan \(3x+x\sqrt{x}-4 = (\sqrt{x}-1)(x+4\sqrt{x}+4) \), sehingga
                        \begin{align*}
                        \lim_{x \to 1}  \frac{3x+x\sqrt{x}-4}{\sqrt{x}-1} &= \lim_{x \to 1}  \frac{(\sqrt{x}-1)(x+4\sqrt{x}+4)}{\sqrt{x}-1} \\
                        &= \lim_{x \to 1} x+4\sqrt{x}+4 \\
                        &= 1 + 4 + 4 \\
                        &= 9
                        \end{align*}
                      </p>
                    <b class="text-end"> JAWABAN : D</b>
                    </div>
                </div>
                <hr />
<!--=======================  soal no 22 ===================================-->
            <li> \(\displaystyle \lim_{x \to 2}  \frac{4-x^2}{3-\sqrt{x^2+5}}  =... \)</li>
                <input type="radio" name="soal22" value="0"/>
                \(\displaystyle 3 \)
                <br />
                <input type="radio" name="soal22" value="0" />
                \(\displaystyle 4 \)
                <br />
                <input type="radio" name="soal22" value="0"  />
                \(\displaystyle 5\)
                <br />
                <input type="radio" name="soal22" value="10" />
                \(\displaystyle 6 \)
                <br />
                <input type="radio" name="soal22" value="0"/>
                \(\displaystyle 7 \)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal22" aria-expanded="false" aria-controls="collapsesoal22" >
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal22">
                    <div class="card card-body overflow-auto">
                <p>

                    Untuk menyelesaikan limit ini, kita perlu menghilangkan bentuk tidak tentu \(\displaystyle \frac{0}{0}\) di pembilang dan penyebut dengan mengalikan dan membagi dengan bentuk konjugat dari penyebut:

                    \begin{align*}
                    \lim_{x \to 2} \frac{4-x^2}{3-\sqrt{x^2+5}} &= \lim_{x \to 2} \frac{(4-x^2)}{(3-\sqrt{x^2+5})} \cdot \frac{(3+\sqrt{x^2+5})}{(3+\sqrt{x^2+5})} \\
                    &= \lim_{x \to 2} \frac{(4-x^2)(3+\sqrt{x^2+5})}{9-(x^2+5)} \\
                    &= \lim_{x \to 2} \frac{(4-x^2)(3+\sqrt{x^2+5})}{4-x^2} \\
                    &= \lim_{x \to 2} (3+\sqrt{x^2+5}) \\
                    &= 3+\sqrt{4+5} \\
                    &= 3+\sqrt{9} \\
                    &= 3+3 \\
                    &= 6 \\
                    \end{align*}

                    Jadi, \(\displaystyle \lim_{x \to 2} \frac{4-x^2}{3-\sqrt{x^2+5}} = 6\).</p>
                    <b class="text-end"> JAWABAN : D</b>
                    </div>
                </div>
                <hr />
<!--=======================  soal no 23 ===================================-->
            <li> Nilai dari \(\displaystyle \lim_{x \to 1}  \frac{x^3 -1}{\sqrt{x-1}}  =... \)</li>
                <input type="radio" name="soal23" value="0"/>
                \(\displaystyle -\sqrt{5} \)
                <br />
                <input type="radio" name="soal23" value="0" />
                \(\displaystyle -\sqrt{3} \)
                <br />
                <input type="radio" name="soal23" value="0"  />
                \(\displaystyle 0\)
                <br />
                <input type="radio" name="soal23" value="10" />
                \(\displaystyle \sqrt{3} \)
                <br />
                <input type="radio" name="soal23" value="0"/>
                \(\displaystyle \sqrt{5} \)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal23" aria-expanded="false" aria-controls="collapsesoal23" >
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal23">
                    <div class="card card-body overflow-auto">
                        <p>Untuk menyelesaikan limit ini, kita dapat mencoba untuk mensubstitusikan nilai \(x=1\), tetapi ini akan menghasilkan bentuk tidak tentu \(\frac{0}{0}\). Oleh karena itu, kita perlu menggunakan teknik pemfaktoran, yaitu:

                            \begin{align*}
                            \lim_{x \to 1} \frac{x^3 -1}{\sqrt{x-1}} &= \lim_{x \to 1} \frac{(x-1)(x^2+x+1)}{\sqrt{x-1}} \\
                            &= \lim_{x \to 1} \frac{(x-1)(x^2+x+1)}{\sqrt{x-1}} \cdot \frac{\sqrt{x-1}}{\sqrt{x-1}}\\
                            &= \lim_{x \to 1} \frac{(x-1)(x^2+x+1)(\sqrt{x-1})}{(x-1)}\\
                            &= \lim_{x \to 1} (x^2+x+1)\sqrt{x-1}
                            \end{align*}

                            Selanjutnya, kita dapat menggunakan aturan perkalian limit untuk memecahkan limit menjadi dua bagian:

                            \begin{align*}
                            \lim_{x \to 1} (x^2+x+1)\sqrt{x-1} &= \lim_{x \to 1} (x^2+x+1) \cdot \lim_{x \to 1} \sqrt{x-1} \\
                            &= (1^2+1+1) \cdot \sqrt{1-1} \\
                            &= 3 \cdot 0 \\
                            &= 0
                            \end{align*}

                            Jadi, \(\displaystyle \lim_{x \to 1}  \frac{x^3 -1}{\sqrt{x-1}} = \boxed{0}\).</p>
                    <b class="text-end"> JAWABAN : C</b>
                    </div>
                </div>
                <hr />
<!--=======================  soal no 24 ===================================-->
            <li> \(\displaystyle \lim_{x \to 1}  \frac{\sqrt[3]{x^2}-2\sqrt[3]{x}+1}{(x-1)^2}  =... \)</li>
                <input type="radio" name="soal24" value="0"/>
                \(\displaystyle 0 \)
                <br />
                <input type="radio" name="soal24" value="10" />
                \(\displaystyle \frac{1}{9} \)
                <br />
                <input type="radio" name="soal24" value="0"  />
                \(\displaystyle \frac{2}{9} \)
                <br />
                <input type="radio" name="soal24" value="0" />
                \(\displaystyle \frac{1}{3} \)
                <br />
                <input type="radio" name="soal24" value="0"/>
                \(\displaystyle \frac{4}{9} \)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal24" aria-expanded="false" aria-controls="collapsesoal24" >
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal24">
                    <div class="card card-body overflow-auto">
                    <p>Untuk menyelesaikan limit ini, kita dapat menggunakan teknik pemfaktoran seperti berikut: <br>
                        \(a^3-b^3=(a-b)(a^2+ab+b^2)\) <br>
                        \begin{align*}
                        \lim_{x \to 1} \frac{\sqrt[3]{x^2}-2\sqrt[3]{x}+1}{(x-1)^2} &= \lim_{x \to 1} \frac{(\sqrt[3]{x}-1)^2}{(x-1)^2} \\
                        &= \left(\lim_{x \to 1} \frac{(\sqrt[3]{x}-1)}{(x-1)} \right)^2 \\
                        &= \left(\lim_{x \to 1} \frac{(\sqrt[3]{x}-1)}{(\sqrt[3]{x}-1)((\sqrt[3]{x})^2 + \sqrt[3]{x}+1)} \right)^2 \\
                        &= \left(\lim_{x \to 1} \frac{1}{((\sqrt[3]{x})^2 + \sqrt[3]{x}+1)} \right)^2 \\
                        &= \left(\frac{1}{1+1+1} \right)^2 \\
                        &= \left(\frac{1}{3} \right)^2 \\
                        &= \boxed{\frac{1}{9}}

                        \end{align*}</p>
                    <b class="text-end"> JAWABAN : B</b>
                    </div>
                </div>
                <hr />
<!--=======================  soal no 25 ===================================-->
            <li> \(\displaystyle \lim_{x \to a}  \frac{2x-3\sqrt{ax}+a}{x-a}  =... \)</li>
                <input type="radio" name="soal25" value="0"/>
                \(\displaystyle -\frac{1}{2} \)
                <br />
                <input type="radio" name="soal25" value="0" />
                \(\displaystyle 0 \)
                <br />
                <input type="radio" name="soal25" value="10"  />
                \(\displaystyle \frac{1}{2} \)
                <br />
                <input type="radio" name="soal25" value="0" />
                \(\displaystyle 1 \)
                <br />
                <input type="radio" name="soal25" value="0"/>
                \(\displaystyle \infty \)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal25" aria-expanded="false" aria-controls="collapsesoal25" >
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal25">
                    <div class="card card-body overflow-auto">
                        <p>\begin{align*}
                            \lim_{x \to a}  \frac{2x-3\sqrt{ax}+a}{x-a} &= \lim_{x \to a}  \frac{(2\sqrt{x}-\sqrt{a})(\sqrt{x}-\sqrt{a})}{x-a} \\
                            &= \lim_{x \to a}  \frac{(2\sqrt{x}-\sqrt{a})(\sqrt{x}-\sqrt{a})}{(\sqrt{x}-\sqrt{a})(\sqrt{x}+\sqrt{a})} \\
                            &= \lim_{x \to a}  \frac{(2\sqrt{x}-\sqrt{a})}{(\sqrt{x}+\sqrt{a})} \\
                            &=  \frac{(2\sqrt{a}-\sqrt{a})}{(\sqrt{a}+\sqrt{a})} \\
                            &=  \frac{\sqrt{a}}{2\sqrt{a}} \\
                            &=  \boxed{\frac{1}{2}} \\
                            \end{align*}
                        </p>
                    <b class="text-end"> JAWABAN : C</b>
                    </div>
                </div>
                <hr />
<!--=======================  soal no 26 ===================================-->
            <li>Jika \(a \neq 0\), maka \(\displaystyle \lim_{x \to a}  \frac{\sqrt[3]{x}-\sqrt[3]{a}}{x-a}  =... \)</li>
                <input type="radio" name="soal26" value="0"/>
                \(\displaystyle 3a\sqrt[3]{a} \)
                <br />
                <input type="radio" name="soal26" value="0" />
                \(\displaystyle 2a\sqrt[3]{a} \)
                <br />
                <input type="radio" name="soal26" value="0"  />
                \(\displaystyle 0 \)
                <br />
                <input type="radio" name="soal26" value="0" />
                \(\displaystyle \frac{1}{2a} \sqrt[3]{a} \)
                <br />
                <input type="radio" name="soal26" value="10"/>
                \(\displaystyle \frac{1}{3a} \sqrt[3]{a} \)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal26" aria-expanded="false" aria-controls="collapsesoal26" >
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal26">
                    <div class="card card-body overflow-auto">
                        <p>\begin{align*}
                            \lim_{x \to a}  \frac{\sqrt[3]{x}-\sqrt[3]{a}}{x-a} &= \lim_{x \to a}  \frac{\sqrt[3]{x}-\sqrt[3]{a}}{(\sqrt[3]{x})^3-(\sqrt[3]{a})^3} \\
                            &= \lim_{x \to a}  \frac{\sqrt[3]{x}-\sqrt[3]{a}}{(\sqrt[3]{x}-\sqrt[3]{a})((\sqrt[3]{x})^2 + \sqrt[3]{x}\sqrt[3]{a}+(\sqrt[3]{a})^2)} \\
                            &= \lim_{x \to a}  \frac{1}{(\sqrt[3]{x})^2 + \sqrt[3]{x}\sqrt[3]{a}+(\sqrt[3]{a})^2} \\
                            &=  \frac{1}{(\sqrt[3]{a})^2 + \sqrt[3]{a}\sqrt[3]{a}+(\sqrt[3]{a})^2} \\
                            &=  \frac{1}{3(\sqrt[3]{a^2})} \\
                            &=  \frac{1}{3(\sqrt[3]{a^2})} \cdot \frac{\sqrt[3]{a}}{\sqrt[3]{a}}\\
                            &= \frac{1}{3a} \sqrt[3]{a}
                            \end{align*}</p>
                    <b class="text-end"> JAWABAN : E</b>
                    </div>
                </div>
                <hr />
<!--=======================  soal no 27 ===================================-->
            <li>Jika \(\displaystyle \lim_{x \to 4}  \frac{ax+b-\sqrt{x}}{x-4}  = \frac{3}{4} \), maka nilai \(a+b=...\)</li>
                <input type="radio" name="soal27" value="0"/>
                \(\displaystyle 3 \)
                <br />
                <input type="radio" name="soal27" value="0" />
                \(\displaystyle 2 \)
                <br />
                <input type="radio" name="soal27" value="0"  />
                \(\displaystyle 1 \)
                <br />
                <input type="radio" name="soal27" value="10" />
                \(\displaystyle -1 \)
                <br />
                <input type="radio" name="soal27" value="0"/>
                \(\displaystyle -2 \)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal27" aria-expanded="false" aria-controls="collapsesoal27">
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal27">
                    <div class="card card-body overflow-auto">
                    <p>Nilai \(\displaystyle \lim_{x \to 4}  \frac{ax+b-\sqrt{x}}{x-4}  = \frac{3}{4} \). Jika kita substitusi langsung nilai \(x=4\) maka nilai \(ax+b-\sqrt{x}\) harus \(0\), karena jika \(ax+b-\sqrt{x}\) tidak nol maka nilai limit adalah \(\infty\)</p>
                    <p>Sehingga untuk \(x=4\) berlaku:
                        \begin{align*}
                        ax+b-\sqrt{x} &= 0 \\
                        4a + b - \sqrt{4} &= 0 \\
                        4a +b &= 2
                        \end{align*}
                    </p>
                    <p>Lalu dengan mengalikan akar sekawan maka akan kita peroleh:
                        \begin{align*}
                        \lim_{x \to 4}  \frac{ax+b-\sqrt{x}}{x-4}  &= \frac{3}{4} \\
                        \lim_{x \to 4}  \frac{ax+b-\sqrt{x}}{x-4} \times \frac{ax+b+\sqrt{x}}{ax+b+\sqrt{x}}  &= \frac{3}{4} \\
                        \lim_{x \to 4} \frac{a^2x^2 +2abx + b^2 -x}{(x-4)(ax+b+\sqrt{x})} &= \frac{3}{4}\\
                        \lim_{x \to 4} \frac{(x-4)(a^2x+2ab+4a^2 -1)+(4a+b)^2-4}{(x-4)(ax+b+\sqrt{x})} &= \frac{3}{4}\\
                        \lim_{x \to 4} \frac{(x-4)(a^2x+2ab+4a^2 -1)+(2)^2-4}{(x-4)(ax+b+\sqrt{x})} &= \frac{3}{4}\\
                        \lim_{x \to 4} \frac{(x-4)(a^2x+2ab+4a^2 -1)}{(x-4)(ax+b+\sqrt{x})} &= \frac{3}{4}\\
                        \lim_{x \to 4} \frac{(a^2x+2ab+4a^2 -1)}{(ax+b+\sqrt{x})} &= \frac{3}{4}\\
                        \frac{(a^2(4)+2ab+4a^2 -1)}{(a(4)+b+\sqrt{(4)})} &= \frac{3}{4}\\
                        \frac{(4a^2+2ab+4a^2 -1)}{(4a+b+\sqrt{(4)})} &= \frac{3}{4}\\
                        \frac{(8a^2+2ab -1)}{2+\sqrt{(4)}} &= \frac{3}{4}\\
                        \frac{(8a^2+2ab -1)}{2+2} &= \frac{3}{4}\\
                        \frac{(8a^2+2ab -1)}{4} &= \frac{3}{4}\\
                        8a^2 +2ab -1 &= 3 \\
                        8a^2 + 2a(2-4a)-1 &= 3 \\
                        8a^2 +4a - 8a^2 &= 4 \\
                        4a &= 4 \\
                        a &= 1 \\\\
                        4a+b &= 2 \\
                        4(1) + b &= 2\\
                        b &= 2-4 \\
                        b &= -2
                        \end{align*}
                    </p>
                    <p>Sehingga, \(a+b=1+(-2)= \boxed{-1}\)</p>

                    <b class="text-end"> JAWABAN : D</b>
                    </div>
                </div>
                <hr />
<!--=======================  soal no 28 ===================================-->
            <li>Jika \(\displaystyle \lim_{x \to 0}  \frac{\sqrt{Ax+B}-2}{x}=1 \), maka ...</li>
                <input type="radio" name="soal28" value="0"/>
                \(\displaystyle B=A^2 \)
                <br />
                <input type="radio" name="soal28" value="0" />
                \(\displaystyle 4B^2=A \)
                <br />
                <input type="radio" name="soal28" value="10"  />
                \(\displaystyle 4B=A^2 \)
                <br />
                <input type="radio" name="soal28" value="0" />
                \(\displaystyle 4B=A \)
                <br />
                <input type="radio" name="soal28" value="0"/>
                \(\displaystyle A+B=0 \)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal28" aria-expanded="false" aria-controls="collapsesoal28" >
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal28">
                    <div class="card card-body overflow-auto">
                        <p>Nilai \(\displaystyle \lim_{x \to 0}  \frac{\sqrt{Ax+B}-2}{x}=1 \). Jika kita substitusi langsung nilai \(x=0\) maka nilai \(\sqrt{Ax+B}-2 \) harus \(0\), karena jika tidak nol maka nilai limit adalah \(\infty\). Untuk \(x=0\)
                            \begin{align*}
                            \sqrt{Ax+B} -2 &=0 \\
                            \sqrt{A0+B} -2 &=0 \\
                            \sqrt{B} &= 2 \\
                            B &= 4
                            \end{align*}
                        </p>
                        <p>Untuk \(B=4\) nilai \(\displaystyle \lim_{x \to 0}  \frac{\sqrt{Ax+B}-2}{x} = 1 \) maka :
                            \begin{align*}
                            \lim_{x \to 0}  \frac{\sqrt{Ax+4}-2}{x} &= 1 \\
                            \lim_{x \to 0}  \frac{\sqrt{Ax+4}-2}{x} \frac{\sqrt{Ax+4}+2}{\sqrt{Ax+4}+2} &= 1 \\
                            \lim_{x \to 0}  \frac{(Ax+4-4)}{x(\sqrt{Ax+4}+2)} &= 1 \\
                            \lim_{x \to 0}  \frac{(Ax)}{x(\sqrt{Ax+4}+2)} &= 1 \\
                            \lim_{x \to 0}  \frac{(A)}{(\sqrt{Ax+4}+2)} &= 1 \\
                             \frac{(A)}{(\sqrt{A(0)+4}+2)} &= 1 \\
                             \frac{(A)}{(\sqrt{4}+2)} &= 1 \\
                             \frac{(A)}{(2+2)} &= 1 \\
                             \frac{(A)}{(4)} &= 1 \\
                                A &= 4
                            \end{align*}
                        </p>
                        <p>Pilihan yang sesuai \(\boxed{4B = A^2}\)</p>
                    <b class="text-end"> JAWABAN : C</b>
                    </div>
                </div>
                <hr />

<!--=======================  soal no 29 ===================================-->
            <li>Jika \(\displaystyle \lim_{x \to a} [f(x)-3g(x)]=2 \) dan \(\displaystyle \lim_{x \to a} [3f(x)+g(x)]=1 \), maka \(\displaystyle \lim_{x \to a} f(x)g(x)=... \)</li>
                <input type="radio" name="soal29" value="0"/>
                \(\displaystyle -\frac{1}{2} \)
                <br />
                <input type="radio" name="soal29" value="10" />
                \(\displaystyle -\frac{1}{4} \)
                <br />
                <input type="radio" name="soal29" value="0"  />
                \(\displaystyle \frac{1}{4} \)
                <br />
                <input type="radio" name="soal29" value="0" />
                \(\displaystyle \frac{1}{2} \)
                <br />
                <input type="radio" name="soal29" value="0"/>
                \(\displaystyle 1 \)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal29" aria-expanded="false" aria-controls="collapsesoal29" >
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal29">
                    <div class="card card-body overflow-auto">
                        <p>
                            \begin{align*}
                            \lim_{x \to a} [f(x)-3g(x)] &=2 \: |\times 3\\
                            \lim_{x \to a} [3f(x)+g(x)] &=1 \: |\times 1 \\ \hline
                            \lim_{x \to a} [3f(x)-9g(x)] &= 6 \\
                            \lim_{x \to a} [3f(x)+g(x)] &= 1 (-)\\ \hline
                            \lim_{x \to a} [-10g(x)] &= 5 \\
                            \lim_{x \to a} [g(x)] &= \frac{5}{-10} \\
                            \lim_{x \to a} [g(x)] &= -\frac{1}{2} \\
                            \end{align*}
                        </p>
                        <p>Subtitusi hasil diatas ke persamaan \(\displaystyle \lim_{x \to a} [3f(x)+g(x)]=1 \)
                            \begin{align*}
                            \lim_{x \to a} [3f(x)+g(x)] &=1 \\
                            \lim_{x \to a} [3f(x)]+\lim_{x \to a} [g(x)] &=1 \\
                            \lim_{x \to a} [3f(x)]+(-\frac{1}{2}) &=1 \\
                            \lim_{x \to a} [3f(x)] &=1 + \frac{1}{2} \\
                            \lim_{x \to a} [3f(x)] &=\frac{3}{2} \\
                            \lim_{x \to a} [f(x)] &=\frac{3}{3 \times 2} \\
                            \lim_{x \to a} [f(x)] &=\frac{3}{6} \\
                            \lim_{x \to a} [f(x)] &=\frac{1}{2} \\
                            \end{align*}
                        </p>
                        <p>Sehingga \(\displaystyle \lim_{x \to a} f(x)g(x)=\frac{1}{2} \times (-\frac{1}{2})=-\frac{1}{4} \)</p>
                    <b class="text-end"> JAWABAN : B</b>
                    </div>
                </div>
                <hr />
<!--=======================  soal no 30 ===================================-->
            <li>\(\displaystyle \lim_{x \to 0} \frac{g(x)}{x}= \frac{1}{2} \), maka nilai \(\displaystyle \lim_{x \to 0} \frac{g(x)}{\sqrt{1-x}-1} \) adalah . . . </li>
                <input type="radio" name="soal30" value="0"/>
                \(\displaystyle -4 \)
                <br />
                <input type="radio" name="soal30" value="0" />
                \(\displaystyle -2 \)
                <br />
                <input type="radio" name="soal30" value="0"  />
                \(\displaystyle -1 \)
                <br />
                <input type="radio" name="soal30" value="0" />
                \(\displaystyle 2 \)
                <br />
                <input type="radio" name="soal30" value="0"/>
                \(\displaystyle 4 \)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal30" aria-expanded="false" aria-controls="collapsesoal30" >
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal30">
                    <div class="card card-body overflow-auto">
                        <p>
                            \begin{align*}
                            \lim_{x \to 0} \frac{g(x)}{\sqrt{1-x}-1} &= \lim_{x \to 0} \frac{g(x)}{\sqrt{1-x}-1} \times \frac{\sqrt{1-x}+1}{\sqrt{1-x}+1} \\
                            &= \lim_{x \to 0} \frac{g(x)(\sqrt{1-x}+1)}{(1-x)-1} \\
                            &= \lim_{x \to 0} \frac{g(x)(\sqrt{1-x}+1)}{-x} \\
                            &= \lim_{x \to 0} \frac{g(x)}{x} \times \lim_{x \to 0} \frac{(\sqrt{1-x}+1)}{-1} \\
                            &= \frac{1}{2} \times \frac{\sqrt{1-0}+1}{-1} \\
                            &= \frac{1}{2} \times \frac{2}{-1} \\
                            &= -1
                            \end{align*}
                        </p>
                    <b class="text-end"> JAWABAN : C</b>
                    </div>
                </div>
                <hr />

            </ol>

{{-- COPY DARI SINI SETIAP SOAL --}}
<input type="hidden" id="materi" name="materi" value="limit02">
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
    <a href="/createlimit02" id="kirimsaja" class="btn btn-warning btn-bukti d-none" >SIMPAN JAWABAN</a>
</div>
</form>
{{-- COPY SAMPAI SINI --}}

<div id="disqus_thread"></div>

</div>
</div>
</div>
</section>
@endsection

