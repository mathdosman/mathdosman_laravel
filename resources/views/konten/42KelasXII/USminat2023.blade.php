@extends('konten.42KelasXII.42.template')
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
            KELAS XII
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
            <h2 class="text-center">Ujian Sekolah TAHUN 2023</h2>
            <h3 class="text-center text-danger fw-bold">MATEMATIKA PEMINATAN</h3>
            <p class="text-center fst-italic"> Math_Dosman</p>
            <hr />
                <div class="row">
                    <div class="col-sm-4">
                        <img src="{{asset('asets/PAS/US.png')}}" alt="US2023" class="img-fluid rounded-circle">
                    </div>
                    <div class="col">
                        <hr> <hr>
                    <p>Berikut merupakan soal Ujian Sekolah tahun 2023 di SMA Negeri 1 Gianyar</p>
                    <p>Kelas : XII MIPA</p>
                    <p>Waktu : 120 Menit</p>
                    <p>MATEMATIKA PEMINATAN</p>
                    <hr> <hr>
                    </div>
                </div>



            <hr>
            <ol type="1">
<!--=======================  soal1 ===================================-->
            <li>Diketahui \(x=1\), \(y=2\) dan \(z=-2\). Nilai dari \(\displaystyle \left(\frac{x^2 y^{-1} z^3}{x^3 y^2 z^{-1}}\right)^{-1}\) adalah . . .</li>
                <ol type="A">
                    <li>\(\displaystyle 2 \)</li>
                    <li>\(\displaystyle 1 \)</li>
                    <li>\(\displaystyle \frac{1}{2} \)</li>
                    <li>\(\displaystyle 4 \)</li>
                    <li>\(\displaystyle \frac{1}{4} \)</li>

                </ol>
                <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal1" aria-expanded="false" aria-controls="collapsesoal1">
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal1">
                    <div class="card card-body overflow-auto">
                        <p>\(\displaystyle \begin{align}
                            \left(\frac{x^2 y^{-1} z^3}{x^3 y^2 z^{-1}}\right)^{-1} &= \left(\frac{x^3 y^2 z^{-1}}{x^2 y^{-1} z^3}\right) \\
                            &= \left(\frac{x^3 y^2 y}{x^2 z z^3}\right) \\
                            &= \left(\frac{x y^3}{z^4}\right) \\
                            &= \left(\frac{1 \times (2)^3}{(-2)^4}\right) \\
                            &= \left(\frac{8}{16}\right) \\
                            &= \left(\frac{1}{2}\right) \\
                            \end{align}\)</p>
                    <b class="text-end text-danger fw-bold"> <h3>JAWABAN : C</h3></b>
                    </div>
                </div>
                <hr />
<!-- SOAL end -->
<!--=======================  soal2 ===================================-->
            <li>Himpunan Penyelesaian yang memenuhi persamaan \(\displaystyle 2.2^x -5.2^{\frac{x}{2}} +2 =0\) adalah . . .</li>
                <ol type="A">
                    <li>\(\begin{Bmatrix}2, \displaystyle  \frac{1}{2} \end{Bmatrix}\)</li>
                    <li>\( \begin{Bmatrix}2,\displaystyle -\frac{1}{2} \end{Bmatrix}\)</li>
                    <li>\(\begin{Bmatrix}2,-2 \end{Bmatrix}\)</li>
                    <li>\( \begin{Bmatrix}2,-2 \end{Bmatrix}\)</li>
                    <li>\(\begin{Bmatrix} \displaystyle  \frac{1}{2}, 2 \end{Bmatrix}\)</li>

                </ol>
                <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal2" aria-expanded="false" aria-controls="collapsesoal2">
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal2">
                    <div class="card card-body overflow-auto">
                        <p>Misalkan \(\displaystyle 2^{\frac{x}{2}}=p\)</p>
                        <p>\(\displaystyle \begin{align}
                            2.2^x -5.2^{\frac{x}{2}} +2 &=0 \\
                            2.(2^{\frac{x}{2}})^2 -5.2^{\frac{x}{2}} +2 &=0 \\
                            2p^2 - 5p + 2 &= 0 \\
                            (2p-1)(p-2) &= 0 \\
                            p = \frac{1}{2} &\text{ atau } p = 2 \\\\
                            p &= \frac{1}{2}\\
                            2^{\frac{x}{2}} &= \frac{1}{2}\\
                            2^{\frac{x}{2}} &= 2^{-1}\\
                            \frac{x}{2} &= -1 \\
                            x &= -2 \\\\

                            p &= 2\\
                            2^{\frac{x}{2}} &= 2 \\
                            \frac{x}{2} &= 1 \\
                            x &= 2
                            \end{align}\)</p>
                        <p>Jadi, nilai \(x\) yang memenuhi adalah \(\begin{Bmatrix}2,-2 \end{Bmatrix}\) </p>
                    <b class="text-end text-danger fw-bold"> <h3>JAWABAN : D</h3></b>
                    </div>
                </div>
                <hr />
<!-- SOAL end -->
<!--=======================  soal3 ===================================-->
            <li>Jumlah akar-akar dari persamaan \(\log (x^2-1) = \log 8 \) adalah . . .</li>
                <ol type="A">
                    <li>\(-6 \)</li>
                    <li>\(-3 \)</li>
                    <li>\(0 \)</li>
                    <li>\( 3\)</li>
                    <li>\( 6\)</li>

                </ol>
                <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal3" aria-expanded="false" aria-controls="collapsesoal3">
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal3">
                    <div class="card card-body overflow-auto">
                        <p>\(\displaystyle \begin{align}
                            \log (x^2 -1) &= \log 8 \\
                            x^2 -1 &= 8 \\
                            x^2 -9 &= 0
                            \end{align}\)</p>
                        <p>\(\displaystyle x_1 + x_2 = -\frac{b}{a} = -\frac{0}{1} = 0\)</p>
                    <b class="text-end text-danger fw-bold"> <h3>JAWABAN : C</h3></b>
                    </div>
                </div>
                <hr />
<!-- SOAL end -->
<!--=======================  soal4 ===================================-->
            <li>Diketahui suatu fungsi \(f(x)\)  jika dibagi oleh \((x^2-x-6)\) bersisa \((3x+1)\), dan jika \(f(x)\) dibagi oleh \((x^2-3x+2) \)  bersisa  \((x-3) \). Jika \(f(x) \) dibagi oleh \((x^2 + x -2) \)  maka sisanya adalah . . .</li>
                <ol type="A">
                    <li>\((-2x-5) \)</li>
                    <li>\((x-3) \)</li>
                    <li>\((3x-3) \)</li>
                    <li>\((-x-3) \)</li>
                    <li>\((x-2) \)</li>

                </ol>
                <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal4" aria-expanded="false" aria-controls="collapsesoal4">
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal4">
                    <div class="card card-body overflow-auto">
                        <p>Menurut Teorema Sisa</p>
                        <ol>
                            <li>
                                Jika \(f(x)\) dibadi \((x^2-x-6) \to (x-3)(x+2)\) memiliki sisa \((3x+1)\)
                            </li>
                            <ul>
                                <li>\(f(3)=3(3)+1 = 10\)</li>
                                <li>\(f(-2)=3(-2)+1 = -5\)</li>
                            </ul>
                            <li>Jika \(f(x) \) dibagi \((x^2 -3x +2) \to (x-2)(x-1)\) memiliki sisa \((x-3) \) </li>
                            <ul>
                                <li>\(f(2) = 2-3 = -1 \)</li>
                                <li>\(f(1) = 1-3 = -2 \)</li>
                            </ul>
                        </ol>
                        <p>Siasa pebagian \(f(x)\) oleh \((x^2+x-2 \to (x+2)(x-1)) \) dapat diperoleh dengan memisalkan sisa pembagian dengan \((mx+n)\), maka</p>
                        <ul>
                            <li>\(\displaystyle \begin{align}
                                f(-2) &=m(-2)+n \\
                                -5 &= -2m + n \: \: ... (1)
                                \end{align}\)</li>
                            <li>\(\displaystyle \begin{align}
                                f(1) &=m(1)+n \\
                                -2 &= m + n \: \: ... (2)
                                \end{align}\)</li>
                        </ul>
                        <p>Eliminasi persamaan \((1)\) dan \((2)\)</p>
                        <p>\(\displaystyle \begin{align}
                            -2m+n&=-5 \\
                            m+n&=-2 \: (-) \\
                            \hline
                            -3m &= -3 \\
                            m &= 1 \\\\
                            m+n &= -2\\
                            1+n &= -2 \\
                            n &= -2-1\\
                            &= -3
                            \end{align}\)</p>
                        <p>\(mx+n = 1.x + (-3) = x - 3\)</p>
                        <p>Jadi, sisa pembagian \(f(x)\) oleh \((x^2 + x -2)\) adalah \((x-3)\)</p>
                    <b class="text-end text-danger fw-bold"> <h3>JAWABAN : B</h3></b>
                    </div>
                </div>
                <hr />
<!-- SOAL end -->
<!--=======================  soal5 ===================================-->
            <li>Diketahui \((x-1) \)  salah satu faktor dari persamaan suku banyak \(x^3-2x^2 -5x + b =0\). Salah satu faktor lainnya adalah . . .</li>
                <ol type="A">
                    <li>\(x + 3\)</li>
                    <li>\(x + 6\)</li>
                    <li>\(x + 1\)</li>
                    <li>\(x - 2\)</li>
                    <li>\(x - 3\)</li>

                </ol>
                <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal5" aria-expanded="false" aria-controls="collapsesoal5">
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal5">
                    <div class="card card-body overflow-auto">
                        <p>Menurut teorema sisa </p>
                        <p>\(\displaystyle \begin{align}
                            f(1) &=0 \\
                            f(x) &= x^3-2x^2 -5x + b \\
                            f(1) &= (1)^3 -2(1)^2 -5(1) +b \\
                            0 &= 1-2-5+b\\
                            b &= 6
                            \end{align}\)</p>
                            <p>Persamaan menjadi \(x^3 -2x^2 -5x +6 =0\) dibagi dengan faktor \((x-1)\)</p>
                            <h3 class="fw-bold text-center">SKEMA HORNER</h3>
                            <table class="text-center table">
                                <tr>
                                    <td>\(x=1\)</td>
                                    <td>\(1\)</td>
                                    <td>\(-2\)</td>
                                    <td>\(-5\)</td>
                                    <td>\(6\)</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>*</td>
                                    <td>\(1\)</td>
                                    <td>\(-1\)</td>
                                    <td>\(-6\)</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>\(1\)</td>
                                    <td>\(-1\)</td>
                                    <td>\(-6\)</td>
                                    <td>\((0)\)</td>
                                </tr>
                            </table>
                        <p>Hasil pembagian adalah \(-6.x^0 +(-1).x^1+1.x^2 = x^2 -x -6\), Sehingga</p>
                        <p>\(\displaystyle \begin{align}
                            x^3-2x^2 -5x + 6 &= (x-1)(x^2 -x - 6) \\
                            &= (x-1)(x-3)(x+2)
                            \end{align}\)</p>
                        <p>Jadi, faktor lain dari persamaan terebut adalah \((x+2)\) atau \((x-3)\)</p>
                    <b class="text-end text-danger fw-bold"> <h3>JAWABAN : E</h3></b>
                    </div>
                </div>
                <hr />
<!-- SOAL end -->
<!--=======================  soal6 ===================================-->
            <li>Diketahui \( ^3\log 2 = x\) dan \(^2\log 5 = y \). Nilai dari \(^{30} \log 60 \) dalam bentuk \(x\) dan \(y\) adalah . . .</li>
                <ol type="A">
                    <li>\(\displaystyle \frac{x(y+2)-1}{x+xy-1} \)</li>
                    <li>\(\displaystyle \frac{x(y-2)-1}{x+xy-1}\)</li>
                    <li>\(\displaystyle \frac{x(y+2)+1}{x+xy+1}\)</li>
                    <li>\(\displaystyle \frac{x(y+2)-1}{x+xy+1}\)</li>
                    <li>\(\displaystyle \frac{x(y-2)-1}{x+xy-1}\)</li>

                </ol>
                <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal6" aria-expanded="false" aria-controls="collapsesoal6">
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal6">
                    <div class="card card-body overflow-auto">
                        <p>\(\displaystyle ^3\log 2 = x \to \: ^2\log3 = \frac{1}{x} \)</p>
                        <p>\(^2\log 5 = y \)</p>
                        <p>\(\displaystyle \begin{align}
                            ^{30} \log 60 &= \frac{^2\log 60}{^2 \log 30} \\
                            &= \frac{^2\log (2 \times 2 \times 3 \times 5)}{^2\log (2 \times 3 \times 5)}\\
                            &= \frac{^2\log 2 + ^2\log 2 + ^2\log 3 + ^2\log 5}{^2\log 2 + ^2\log 3 + ^2\log 5} \\
                            &= \frac{1+1+\frac{1}{x}+y}{1+\frac{1}{x}+y} \to \textup{ penyebut dan pembilang sama-sama dikalikan } x  \\
                            &= \frac{x + x + 1 + xy}{x + 1 +xy} \\
                            &= \frac{2x+xy+1}{x+1+xy} \\
                            &= \frac{x(2+y)+1}{x+xy+1} \\
                            &= \frac{x(y+2)+1}{x+xy+1}
                            \end{align}\)</p>
                    <b class="text-end text-danger fw-bold"> <h3>JAWABAN : C</h3></b>
                    </div>
                </div>
                <hr />
<!-- SOAL end -->
<!--=======================  soal7 ===================================-->
            <li>Hasil dari \(\displaystyle \frac{^3\log 36 . ^6 \log 81 + ^4 \log 32}{^{\frac{1}{9}}\log 27} \) adalah . . .</li>
                <ol type="A">
                    <li>\(11 \)</li>
                    <li>\(7 \)</li>
                    <li>\(4 \)</li>
                    <li>\(-7 \)</li>
                    <li>\(-11 \)</li>

                </ol>
                <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal7" aria-expanded="false" aria-controls="collapsesoal7">
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal7">
                    <div class="card card-body overflow-auto">
                        <p>\(\displaystyle \begin{align}
                            \frac{^3\log 36 . ^6 \log 81 + ^4 \log 32}{^{\frac{1}{9}}\log 27} &= \frac{^{3}\log{6^2} .^{6}\log{3^4}+^{2^2}\log{2^5}}{^{3^{-2}}\log{3^3}} \\
                            &= \frac{2 \times 4 (^{3}\log{6} . ^{6}\log{3}) + \frac{5}{2} (^{2}\log{2})}{\frac{3}{-2}(^{3}\log{3})} \\
                            &= \frac{8+\frac{5}{2}}{-\frac{3}{2}}\\
                            &= \frac{\frac{16}{2}+\frac{5}{2}}{-\frac{3}{2}} \\
                            &= \frac{16+5}{-3} \\
                            &= \frac{21}{-3}\\
                            &= -7
                            \end{align}\)</p>
                    <b class="text-end text-danger fw-bold"> <h3>JAWABAN : D</h3></b>
                    </div>
                </div>
                <hr />
<!-- SOAL end -->
<!--=======================  soal8 ===================================-->
            <li>Diketahui suatu suku banyak \(P(x)=x^3 -5x^2 -nx +20 \). Jika \((x-2)\) salah satu faktor dari \(P(x)\), maka faktor yang lain adalah . . .</li>
                <ol type="A">
                    <li>\((x+3)(x-5) \)</li>
                    <li>\((x-2)(x+5) \)</li>
                    <li>\((x-3)(x+5) \)</li>
                    <li>\((x+5)(x-2) \)</li>
                    <li>\((x-5)(x+2) \)</li>

                </ol>
                <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal8" aria-expanded="false" aria-controls="collapsesoal8">
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal8">
                    <div class="card card-body overflow-auto">
                        <p>Meneurut Teorema Sisa</p>
                        <p>\(P(2) =0 \)</p>
                        <p>\(\displaystyle \begin{align}
                            P(x) &=x^3 -5x^2 -nx +20 \\
                            P(2) &= (2)^3 -5(2)^2 -n(2)+20 \\
                            0 &= 8 -20 -2n +20 \\
                            0 &= 8 -2n \\
                            2n &= 8 \\
                            n &= 4\\\\
                            P(x) &= x^3 -5x^2 -4x +20
                            \end{align}\)</p>
                        <h3 class="fw-bold text-center">SKEMA HORNER</h3>
                            <table class="text-center table">
                                <tr>
                                    <td>\(x=2\)</td>
                                    <td>\(1\)</td>
                                    <td>\(-5\)</td>
                                    <td>\(-4\)</td>
                                    <td>\(20\)</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>\(*\)</td>
                                    <td>\(2\)</td>
                                    <td>\(-6\)</td>
                                    <td>\(-20\)</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>\(1\)</td>
                                    <td>\(-3\)</td>
                                    <td>\(-10\)</td>
                                    <td>\((0)\)</td>
                                </tr>
                            </table>
                        <p>Hasil pembagian adalah \(-10.x^0 + (-3).x^1 + 1.x^2 = x^2 -3x -10 = (x-5)(x+2) \)</p>
                    <p>Jadi, faktor yang lain dari \(P(x)\) adalah  \((x-5)(x+2) \)</p>
                    <b class="text-end text-danger fw-bold"> <h3>JAWABAN : E</h3></b>
                    </div>
                </div>
                <hr />
<!-- SOAL end -->
<!--=======================  soal9 ===================================-->
            <li>Nilai dari \(\displaystyle \lim_{x \to 0} \frac{\sin 2x \tan 3x}{6x^2} \) adalah . . .</li>
                <ol type="A">
                    <li>\(\displaystyle \frac{5}{6}\)</li>
                    <li>\(\displaystyle \frac{1}{3}\)</li>
                    <li>\(\displaystyle \frac{1}{2}\)</li>
                    <li>\(\displaystyle -1\)</li>
                    <li>\(\displaystyle 1\)</li>

                </ol>
                <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal9" aria-expanded="false" aria-controls="collapsesoal9">
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal9">
                    <div class="card card-body overflow-auto">
                        <p>\(\displaystyle \begin{align}
                            \lim_{x \to 0} \frac{\sin 2x \tan 3x}{6x^2} &= \frac{2 \times 3}{6} \\
                            &= \frac{6}{6} \\
                            &= 1
                            \end{align}\)</p>
                    <b class="text-end text-danger fw-bold"> <h3>JAWABAN : E</h3></b>
                    </div>
                </div>
                <hr />
<!-- SOAL end -->
<!--=======================  soal10 ===================================-->
            <li>Nilai dari \(\displaystyle \lim_{x \to \infty} \frac{4+2x-4x^2-6x^3}{2x^3 +7x^2 -5x +1}\) adalah . . .</li>
                <ol type="A">
                    <li>\(-1 \)</li>
                    <li>\(-3 \)</li>
                    <li>\(2 \)</li>
                    <li>\(1 \)</li>
                    <li>\(-6 \)</li>

                </ol>
                <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal10" aria-expanded="false" aria-controls="collapsesoal10">
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal10">
                    <div class="card card-body overflow-auto">
                        <p>\(\displaystyle \begin{align}
                            \lim_{x \to \infty} \frac{4+2x-4x^2-6x^3}{2x^3 +7x^2 -5x +1} &= \frac{-6}{2} \\
                            &= -3
                            \end{align}\)</p>
                    <b class="text-end text-danger fw-bold"> <h3>JAWABAN : B</h3></b>
                    </div>
                </div>
                <hr />
<!-- SOAL end -->
<!--=======================  soal11 ===================================-->
            <li>Nilai dari \(\displaystyle \lim_{x \to 0} \frac{\sin 8x + \sin 4x}{2x (\cos 12x + \cos 8x)}=... \)</li>
                <ol type="A">
                    <li>\(\displaystyle \frac{3}{10}\)</li>
                    <li>\(\displaystyle 3\)</li>
                    <li>\(\displaystyle -\frac{3}{10}\)</li>
                    <li>\(\displaystyle \frac{1}{5} \)</li>
                    <li>\(\displaystyle -3\)</li>

                </ol>
                <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal11" aria-expanded="false" aria-controls="collapsesoal11">
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal11">
                    <div class="card card-body overflow-auto">
                        <p>\(\displaystyle \begin{align}
                            \lim_{x \to 0} \frac{\sin 8x + \sin 4x}{2x (\cos 12x + \cos 8x)} &= \lim_{x \to 0} \frac{2 \sin \frac{8x+4x}{2} \cos \frac{8x-4x}{2}}{2x (2\cos\frac{12x+8x}{2} \cos\frac{12x-8x}{2} )} \\
                            &= \lim_{x \to 0} \frac{2 \sin 6x \cos 2x}{4x\cos10x \cos2x} \\
                            &= \lim_{x \to 0} \frac{2 \sin 6x}{4x\cos10x} \\
                            &= \lim_{x \to 0} \left( \frac{2 \sin 6x}{4x} \times \frac{1}{\cos10x} \right)\\
                            &= \frac{2 \times 6}{4} \times \frac{1}{\cos 0} \\
                            &= \frac{12}{4} \times \frac{1}{1} \\
                            &= 3 \\
                            \end{align}\)</p>
                    <b class="text-end text-danger fw-bold"> <h3>JAWABAN : B</h3></b>
                    </div>
                </div>
                <hr />
<!-- SOAL end -->
<!--=======================  soal12 ===================================-->
            <li>Nilai dari \(\displaystyle \lim_{x \to \infty} \sqrt{9x^2 - 6x+7} - 3x +2 \) adalah . . .</li>
                <ol type="A">
                    <li>\(\displaystyle \frac{1}{2} \)</li>
                    <li>\(\displaystyle 6\)</li>
                    <li>\(\displaystyle 3\)</li>
                    <li>\(\displaystyle \frac{3}{2}\)</li>
                    <li>\(\displaystyle 1\)</li>

                </ol>
                <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal12" aria-expanded="false" aria-controls="collapsesoal12">
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal12">
                    <div class="card card-body overflow-auto">
                        <p>\(\displaystyle \begin{align}
                            \lim_{x \to \infty} \sqrt{9x^2 - 6x+7} - 3x +2 &= \lim_{x \to \infty} \sqrt{9x^2 - 6x+7} - (3x -2) \\
                            &= \lim_{x \to \infty} \sqrt{9x^2 - 6x+7} - \sqrt{(3x -2)^2} \\
                            &= \lim_{x \to \infty} \sqrt{9x^2 - 6x+7} - \sqrt{9x^2 -12x +4} \\
                            &= \frac{(-6)-(-12)}{2 \sqrt{9}} \\
                            &= \frac{6}{2 \times 3} \\
                            &= 1
                            \end{align}\)</p>
                    <b class="text-end text-danger fw-bold"> <h3>JAWABAN : E</h3></b>
                    </div>
                </div>
                <hr />
<!-- SOAL end -->
<!--=======================  soal13 ===================================-->
            <li>Nilai dari \(\displaystyle \lim_{x \to \infty} 3x^2 \left( \cos \frac{1}{5x} - \cos \frac{1}{x} \right) \) adalah . . .</li>
                <ol type="A">
                    <li>\(\displaystyle -36 \)</li>
                    <li>\(\displaystyle \frac{3}{5}\)</li>
                    <li>\(\displaystyle \frac{36}{25}\)</li>
                    <li>\(\displaystyle \frac{25}{36}\)</li>
                    <li>\(\displaystyle 36\)</li>

                </ol>
                <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal13" aria-expanded="false" aria-controls="collapsesoal13">
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal13">
                    <div class="card card-body overflow-auto">
                        <p>Misalkan \(\displaystyle \frac{1}{x} = y \) sehingga untuk nilai \(x\) menuju tak hingga maka nilai \(y\) akan menuju nol. Akan berlaku</p>
                        <p>\(\displaystyle \begin{align}
                            \lim_{x \to \infty} 3x^2 \left( \cos \frac{1}{5x} - \cos \frac{1}{x} \right) &= \lim_{ y \to 0} 3 \left(\frac{1}{y}\right)^2 \left( \cos \frac{1}{5}y - \cos y \right) \\
                            &= \lim_{y \to 0} 3 \left( \frac{-2 \sin \left(\frac{\frac{1}{5}y+y}{2}\right) \sin \left(\frac{\frac{1}{5}y-y}{2} \right) }{y^2}  \right) \\
                            &= \lim_{y \to 0} -6 \left( \frac{ \sin \left(\frac{\frac{6}{5}y}{2}\right) \sin \left(\frac{\frac{-4}{5}y}{2} \right) }{y^2}  \right) \\
                            &= \lim_{y \to 0} -6 \left( \frac{ \sin \left(\frac{3}{5}y\right) \sin \left(\frac{-2}{5}y \right) }{y^2}  \right) \\
                            &= \lim_{y \to 0} -6 \left( \frac{ \sin \left(\frac{3}{5}y\right) }{y}  \right) \left( \frac{ \sin \left(\frac{-2}{5}y \right) }{y}  \right) \\
                            &= -6 \times \frac{3}{5} \times \frac{-2}{5} \\
                            &= \frac{36}{25}
                            \end{align}\)</p>
                    <b class="text-end text-danger fw-bold"> <h3>JAWABAN : C</h3></b>
                    </div>
                </div>
                <hr />
<!-- SOAL end -->
<!--=======================  soal14 ===================================-->
            <li>Persamaan garis singgung pada kurva \(y=\tan x\) di titik \(\displaystyle \left(\frac{\pi}{4},1 \right) \) adalah . . . </li>
                <ol type="A">
                    <li>\(\displaystyle y=2x+ \left(1+\frac{\pi}{2}\right) \)</li>
                    <li>\(\displaystyle y=2x+ \left(\frac{\pi}{2}-1\right)\)</li>
                    <li>\(\displaystyle y=2x+ \left(1-\frac{\pi}{2}\right)\)</li>
                    <li>\(\displaystyle y=2x+ \left(1+\pi\right)\)</li>
                    <li>\(\displaystyle y=2x+ \left(1-\pi\right)\)</li>
                </ol>
                <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal14" aria-expanded="false" aria-controls="collapsesoal14">
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal14">
                    <div class="card card-body overflow-auto">
                        <p>\(\displaystyle \begin{align}
                            y &= \tan x \\
                            y' &= \sec^2 x \\
                            &= \sec^2 \left(\frac{\pi}{4}\right) \\
                            &= \left(\frac{2}{\sqrt{2}}\right)^2 \\
                            &= \frac{4}{2} \\
                            &= 2
                            \end{align}\)</p>
                        <p>Persamaan garis yang melalui titik \(\displaystyle \left(\frac{\pi}{4},1 \right) \) dengan gradien \(2\)</p>
                        <p>\(\displaystyle \begin{align}
                            y-y_1 &= m(x-x_1) \\
                            y-1 &= 2\left(x- \frac{\pi}{4}\right) \\
                            y &= 2x - \frac{\pi}{2} +1 \\
                            y &= 2x + \left(1 - \frac{\pi}{2}\right)
                            \end{align}\)</p>
                    <b class="text-end text-danger fw-bold"> <h3>JAWABAN : C</h3></b>
                    </div>
                </div>
                <hr />
<!-- SOAL end -->
<!--=======================  soal15 ===================================-->
            <li>Turunan pertama dari \(f(x)= \cos^4 (3x+2) \) adalah . . .</li>
                <ol type="A">
                    <li>\(-4 \cos^3 (3x+2) \sin (3x+2) \)</li>
                    <li>\(-12 \cos^3 (3x+2) \sin (3x+2) \)</li>
                    <li>\(12 \cos^3 (3x+2) \sin (3x+2) \)</li>
                    <li>\(-6 \cos^3 (3x+2) \sin (3x+2) \)</li>
                    <li>\(-6 \cos^2 (3x+2) \sin (6x+4) \)</li>

                </ol>
                <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal15" aria-expanded="false" aria-controls="collapsesoal15">
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal15">
                    <div class="card card-body overflow-auto">
                        <p>Gunakan aturan rantai pada turunan</p>
                        <p>\(\displaystyle \begin{align}
                            f(x) &= \cos^4 (3x+2) \\
                            f'(x) &= 4 \cos^{4-1}(3x+2) (-\sin(3x+2))(3) \\
                            &= -12 \cos^3 (3x+2) \sin(3x+2)
                            \end{align}\)</p>
                    <b class="text-end text-danger fw-bold"> <h3>JAWABAN : B</h3></b>
                    </div>
                </div>
                <hr />
<!-- SOAL end -->
<!--=======================  soal16 ===================================-->
            <li>Diketahui \(f(x)= \sin 2x \cos 3x\). \(f'(x)\) merupakan turunan pertama dari \(f(x)\) maka nilai dari \(\displaystyle f'(\frac{\pi}{2})\) adalah . . .  </li>
                <ol type="A">
                    <li>\(\displaystyle -\frac{1}{2} \sqrt{3} \)</li>
                    <li>\(0 \)</li>
                    <li>\(-\frac{1}{2} \)</li>
                    <li>\(\frac{1}{2} \)</li>
                    <li>\(1 \)</li>

                </ol>
                <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal16" aria-expanded="false" aria-controls="collapsesoal16">
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal16">
                    <div class="card card-body overflow-auto">
                        <p>\(\displaystyle \begin{align}
                            f(x) &= \sin 2x \cos 3x \\
                            &\text{Misalkan } \\
                            u &= \sin2x \\
                            v &= \cos3x \\
                            u' &= 2\cos2x \\
                            v' &= -3\sin3x \\\\
                            f'(x) &= u' v + u v' \\
                            &= (2\cos2x)(\cos3x)+ (\sin2x)(-3\sin3x)\\
                            f'\left(\frac{\pi}{2}\right)&= 2\cos2\left(\frac{\pi}{2}\right)\cos3\left(\frac{\pi}{2}\right) -3 \sin2\left(\frac{\pi}{2}\right) \sin3\left(\frac{\pi}{2}\right)\\
                            &= 2 (-1)(0)-3 (0)(-1) \\
                            &= 0
                            \end{align}\)</p>
                    <b class="text-end text-danger fw-bold"> <h3>JAWABAN : B</h3></b>
                    </div>
                </div>
                <hr />
<!-- SOAL end -->
<!--=======================  soal17 ===================================-->
            <li>Fungsi \(\displaystyle f(x)= \sin \left(x-\frac{\pi}{2} \right) \) mempunyai daerah asal \(0 \leq x \leq 2\pi \). Fungsi tersebut cekung kebawah pada interval . . .</li>
                <ol type="A">
                    <li>\(\displaystyle \frac{\pi}{2} < x < \frac{3\pi}{2} \)</li>
                    <li>\(\displaystyle \frac{3\pi}{2} < x < 2\pi \)</li>
                    <li>\(\displaystyle 0 < x < 2\pi \)</li>
                    <li>\(\displaystyle \frac{\pi}{4} < x < 2\pi \)</li>
                    <li>\(\displaystyle 0 < x < \frac{3\pi}{2}\)</li>

                </ol>
                <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal17" aria-expanded="false" aria-controls="collapsesoal17">
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal17">
                    <div class="card card-body overflow-auto">
                <p>\(f(x)\) cekung ke bawah pada setiap nilai \(x\) yang memenuhi \(f ''(x) < 0\)</p>
                <p>\(\displaystyle \begin{align}
                    f(x) &= \sin \left(x-\frac{\pi}{2} \right) \\
                    f'(x) &= \cos \left(x-\frac{\pi}{2} \right) \\
                    f''(x) &= - \sin \left(x-\frac{\pi}{2} \right) \\\\
                    - \sin \left(x-\frac{\pi}{2} \right) &< 0 \\
                    \sin \left(x-\frac{\pi}{2} \right) & > 0
                    \end{align}\)</p>
                    <p>Menentukan titik pembuat nol</p>
                    <p>\(\displaystyle \sin \left(x-\frac{\pi}{2} \right) = 0 \)</p>
                        <ul>
                            <li>\(\displaystyle x_1 = \frac{\pi}{2}\)</li>
                            <li>\(\displaystyle x_2 = \frac{3\pi}{2}\)</li>
                        </ul>
                    <p>Dengan uji titik maka diperoleh daerah penyelesaian seperti berikut</p>
                    <img src="{{asset('asets/US/2023_17.png')}}" alt="garisbilangan" class="img-fluid" width="80%">
                    <p>Karena \(\displaystyle \sin \left(x-\frac{\pi}{2} \right) > 0 \), Maka kurva cekung kebawah pada interval  \(\displaystyle \frac{\pi}{2} < x < \frac{3\pi}{2} \) </p>
                    <b class="text-end text-danger fw-bold"> <h3>JAWABAN : A</h3></b>
                    </div>
                </div>
                <hr />
<!-- SOAL end -->
<!--=======================  soal18 ===================================-->
            <li>Himpunan penyelesaian dari persamaan \(\cos 2x + 7\sin x -4 =0 \). Untuk \(0 \leq x \leq 2\pi\) adalah . . .</li>
                <ol type="A">
                    <li>\(\begin{Bmatrix} \displaystyle -\frac{\pi}{3}, -\frac{5\pi}{3}  \end{Bmatrix} \)</li>
                    <li>\(\begin{Bmatrix} \displaystyle \frac{\pi}{3}, \frac{5\pi}{3}  \end{Bmatrix} \)</li>
                    <li>\(\begin{Bmatrix} \displaystyle \frac{\pi}{6}, \frac{5\pi}{6}  \end{Bmatrix} \)</li>
                    <li>\(\begin{Bmatrix} \displaystyle \frac{5\pi}{6}, \frac{7\pi}{6}  \end{Bmatrix} \)</li>
                    <li>\(\begin{Bmatrix} \displaystyle -\frac{\pi}{6}, -\frac{5\pi}{6}  \end{Bmatrix} \)</li>

                </ol>
                <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal18" aria-expanded="false" aria-controls="collapsesoal18">
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal18">
                    <div class="card card-body overflow-auto">
                        <p>\(\displaystyle \begin{align}
                            \cos 2x + 7\sin x -4 &= 0 \\
                            (1-2\sin^2 x) +7\sin x -4 &= 0\\
                            1-2\sin^2 x +7\sin x -4 &= 0\\
                            -2\sin^2 x +7\sin x -4+1 &= 0\\
                            -2\sin^2 x +7\sin x -3 &= 0\\
                            2\sin^2 x -7\sin x +3 &= 0\\
                            (2\sin x-1)(\sin x -3) &= 0\\\\
                            \sin x -3 &= 0\\
                            \sin x &=3 \to \text{ tidak memenuhi karena nilai max sin adalah 1} \\\\

                            2\sin x -1 &= 0 \\
                            \sin x &= \frac{1}{2}\\\\

                            x_1 &= 30^o \text{ atau } \frac{\pi}{6} \\
                            x_2 &= 180^o - 30^o = 150^o \text{ atau } \frac{5\pi}{6}

                            \end{align}\)
                        </p>
                            <b class="text-end text-danger fw-bold"> <h3>JAWABAN : C</h3></b>
                    </div>
                </div>
                <hr />
<!-- SOAL end -->
<!--=======================  soal19 ===================================-->
            <li>Nilai dari \(\cos 155^o - \cos 135^o + \cos 25^o \) adalah . . .</li>
                <ol type="A">
                    <li>\(\displaystyle -\frac{1}{2} \sqrt{2} \)</li>
                    <li>\(\displaystyle -\frac{1}{2} \sqrt{3} \)</li>
                    <li>\(\displaystyle \frac{1}{2} \sqrt{2}\)</li>
                    <li>\(\displaystyle \frac{1}{2}\)</li>
                    <li>\(\displaystyle \frac{1}{2} \sqrt{3}\)</li>

                </ol>
                <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal19" aria-expanded="false" aria-controls="collapsesoal19">
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal19">
                    <div class="card card-body overflow-auto">
                        <p>\(\displaystyle \begin{align}
                            \cos 155^o - \cos 135^o + \cos 25^o &= \cos 155^o  + \cos 25^o - \cos 135^o \\
                            &= (\cos 155^o  + \cos 25^o) - \cos 135^o \\
                            &= (2 \cos \left(\frac{155^o + 25^o}{2}\right) \cos \left(\frac{155^o - 25^o}{2}\right) ) - \cos 135^o \\
                            &= (2 \cos 90^o \cos 65^o)- \cos 135^o \\
                            &= (2 \times 0 \times \cos 65^o)- \cos 135^o \\
                            &= - \cos 135^o \\
                            &= - (-\frac{1}{2}\sqrt{2})\\
                            &= \frac{1}{2}\sqrt{2}\\
                            \end{align}\)</p>
                    <b class="text-end text-danger fw-bold"> <h3>JAWABAN : C</h3></b>
                    </div>
                </div>
                <hr />
<!-- SOAL end -->
<!--=======================  soal20 ===================================-->
            <li>Himpunan penyelesaian persamaan \(\displaystyle \cos x = \frac{1}{2} \) pada interval \(0^o \leq x \leq 360^o \) adalah . . .</li>
                <ol type="A">
                    <li> \(\begin{Bmatrix} \displaystyle 60^o, 120^o  \end{Bmatrix}\)</li>
                    <li> \(\begin{Bmatrix} \displaystyle 30^o, 300^o \end{Bmatrix}\)</li>
                    <li> \(\begin{Bmatrix} \displaystyle 30^o, 330^o \end{Bmatrix}\)</li>
                    <li> \(\begin{Bmatrix} \displaystyle 45^o, 315^o \end{Bmatrix}\)</li>
                    <li> \(\begin{Bmatrix} \displaystyle 60^o, 300^o \end{Bmatrix}\)</li>

                </ol>
                <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal20" aria-expanded="false" aria-controls="collapsesoal20">
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal20">
                    <div class="card card-body overflow-auto">
                    <p>\(\cos x = \frac{1}{2}\)</p>
                    <p>cos yang bernilai positif terletak pada kuadran \(I\) dan \(IV\)</p>
                    <ul>
                        <li>\(x_1 = 60^o \)</li>
                        <li>\(x_2 = 360^o - 60^o = 300^o \)</li>
                    </ul>
                    <b class="text-end text-danger fw-bold"> <h3>JAWABAN : E</h3></b>
                    </div>
                </div>
                <hr />
<!-- SOAL end -->
<!--=======================  soal21 ===================================-->
            <li>Diketahui segitiga \(ABC\) siku-siku di \(B\). Jika \(\displaystyle \sin A \sin C = \frac{1}{10}\) dan \(\displaystyle \sin(A-C) = \frac{2}{5}x \), maka nilai \(x\) yang memenuhi adalah . . .</li>
                <ol type="A">
                    <li> \( \sqrt{5} \)</li>
                    <li> \( \sqrt{7} \)</li>
                    <li> \( \sqrt{6} \)</li>
                    <li> \( \sqrt{2} \)</li>
                    <li> \( \sqrt{3} \)</li>

                </ol>
                <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal21" aria-expanded="false" aria-controls="collapsesoal21">
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal21">
                    <div class="card card-body overflow-auto">
                    <p>Karena segitiga \(ABC\) siku-siku di \(B\) maka \(B = 90^o\) dan \(A+C = 90^o\)</p>
                    <p>\(\displaystyle \begin{align}
                        (A+C) &= B \\
                        \cos (A+C) &= \cos B \\
                        \cos A \cos C - \sin A \sin C &= \cos 90^o \\
                        \cos A \cos C - \frac{1}{10} &= 0 \\
                        \cos A \cos C &= \frac{1}{10} \\\\

                        \cos (A-C) &= \cos A \cos C + \sin A \sin C \\
                        &= \frac{1}{10} + \frac{1}{10} \\
                        &= \frac{2}{10} \\
                        &= \frac{1}{5}
                        \end{align}\)</p>
                        <p>dengan identitas trigonometri dapat kita cari nilai dari \(\sin (A-C)\)</p>
                        <p>\(\displaystyle \begin{align}
                            (\cos (A-C))^2 + (\sin (A-C))^2 &= 1 \\
                            \left(\frac{1}{5}\right)^2 + (\sin (A-C))^2 &= 1 \\
                            \frac{1}{25} + (\sin (A-C))^2 &= 1 \\
                            (\sin (A-C))^2 &= 1 -\frac{1}{25}  \\
                            (\sin (A-C))^2 &= \frac{25}{25} - \frac{1}{25}  \\
                            (\sin (A-C))^2 &= \frac{24}{25}  \\
                            \sin (A-C) &= \sqrt{\frac{24}{25}}  \\
                            \sin (A-C) &= \sqrt{\frac{4 \times 6}{25}}  \\
                            \sin (A-C) &= \frac{\sqrt{4} \times \sqrt{6}}{\sqrt{25}}  \\
                            \sin (A-C) &= \frac{2}{5}\sqrt{6}  \\
                            \end{align}\)</p>
                        <p>Nilai \(x\) adalah \(\sqrt{6}\)</p>
                    <b class="text-end text-danger fw-bold"> <h3>JAWABAN : C</h3></b>
                    </div>
                </div>
                <hr />
<!-- SOAL end -->
<!--=======================  soal22 ===================================-->
            <li>Perhatikan gambar berikut!</li>
            <img src="{{asset('asets/US/2023_22.png')}}" alt="vektor">
            <p>Besar sudut antara vektor \(\overrightarrow{AB}\) dan \(\overrightarrow{BC}\) sesuai gambar diatas adalah . . . </p>
                <ol type="A">
                    <li> \( 135^o \)</li>
                    <li> \( 30^o \)</li>
                    <li> \( 60^o \)</li>
                    <li> \( 45^o \)</li>
                    <li> \( 90^o \)</li>

                </ol>
                <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal22" aria-expanded="false" aria-controls="collapsesoal22">
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal22">
                    <div class="card card-body overflow-auto">
                        <p>\( \overrightarrow{AB} = \begin{pmatrix} 2\\1 \end{pmatrix} - \begin{pmatrix} -2\\1 \end{pmatrix} = \begin{pmatrix} 4\\0 \end{pmatrix}\)</p>
                        <p>\( \overrightarrow{BC} = \begin{pmatrix} -2\\5 \end{pmatrix} - \begin{pmatrix} 2\\1 \end{pmatrix} = \begin{pmatrix} -4\\4 \end{pmatrix}\)</p>
                        <p>\( |\overrightarrow{AB}| = \sqrt{4^2 + 0^2} = \sqrt{4^2} =4 \)</p>
                        <p>\( |\overrightarrow{BC}| = \sqrt{(-4)^2 + (4)^2} = \sqrt{16+16} =\sqrt{16 \times 2} = 4 \sqrt{2}\)</p>
                        <p>\(\displaystyle \begin{align}
                            \cos \alpha &= \frac{\overrightarrow{AB}.\overrightarrow{BC}}{|\overrightarrow{AB}| \times |\overrightarrow{BC}|} \\
                            &= \frac{\begin{pmatrix} 4\\0 \end{pmatrix}\begin{pmatrix} -4\\4 \end{pmatrix}}{4 \times 4\sqrt{2}} \\
                            &= \frac{4 \times -4 + 0 \times 4}{16 \sqrt{2}} \\
                            &= \frac{-16}{16\sqrt{2}} \\
                            &= -\frac{1}{\sqrt{2}} \\
                            &= -\frac{1}{\sqrt{2}} \frac{\sqrt{2}}{\sqrt{2}} \\
                            &= -\frac{1}{2} \sqrt{2} \\\\
                            \cos \alpha &= -\frac{1}{2} \sqrt{2} \\
                            &= 135^o
                            \end{align}\)</p>
                    <b class="text-end text-danger fw-bold"> <h3>JAWABAN : A</h3></b>
                    </div>
                </div>
                <hr />
<!-- SOAL end -->
<!--=======================  soal23 ===================================-->
            <li>Himpunan penyelesaian dari \(\sqrt{2} \cos x + \sqrt{6} \sin x = 2 \), untuk \(0 \leq x \leq 2\pi \) adalah . . .</li>
                <ol type="A">
                    <li> \( \begin{Bmatrix}15^o, 345^o \end{Bmatrix} \)</li>
                    <li> \( \begin{Bmatrix}135^o, 175^o \end{Bmatrix} \)</li>
                    <li> \( \begin{Bmatrix}15^o, 45^o \end{Bmatrix} \)</li>
                    <li> \( \begin{Bmatrix}45^o, 175^o \end{Bmatrix} \)</li>
                    <li> \( \begin{Bmatrix}15^o, 105^o \end{Bmatrix} \)</li>

                </ol>
                <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal23" aria-expanded="false" aria-controls="collapsesoal23">
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal23">
                    <div class="card card-body overflow-auto">
                        <p>\(a \cos x + b \sin x = k \cos (x-\theta) \) dengan \(k=\sqrt{a^2 +b^2}\) dan \(\displaystyle \tan \theta = \frac{b}{a} \)</p>
                        <p>\(k = \sqrt{(\sqrt{2})^2 + (\sqrt{6})^2} = \sqrt{2+6} = \sqrt{8}= 2\sqrt{2} \)</p>
                        <p>\(\displaystyle \tan \theta = \frac{\sqrt{6}}{\sqrt{2}} = \sqrt{\frac{6}{2}}= \sqrt{3} = 60^o\)</p>
                        <p>\(\displaystyle \begin{align}
                            \sqrt{2} \cos x + \sqrt{6} \sin x &= 2 \\
                            2\sqrt{2} (\cos (x - 60^o)) &= 2 \\
                            \cos (x - 60^o) &= \frac{2}{2\sqrt{2}} \\
                            \cos (x - 60^o) &= \frac{1}{2} \sqrt{2} \\
                            \cos (x - 60^o) &= \cos 45^o \\
                            \end{align}\)</p>
                            <p>\(\displaystyle \begin{align} \text{a. }
                                \cos (x - 60^o) &= \cos 45^o \\
                                (x-60^o) &= 45^o +k.360^o \\
                                \to k =0 \\
                                x-60^o &= 45^o \\
                                x &= 60^o + 45^o \\
                                x &= 105^o
                                \end{align}\)</p>
                            <p>\(\displaystyle \begin{align} \text{b. }
                                \cos (x - 60^o) &= \cos 45^o \\
                                (x-60^o) &= -45^o +k.360^o \\
                                \to k =0 \\
                                x-60^o &= -45^o \\
                                x &= 60^o - 45^o \\
                                x &= 15^o
                                \end{align}\)</p>
                            <p>Jadi, nilai \(x\) yang memenuhi adalah \( \begin{Bmatrix}15^o, 105^o \end{Bmatrix} \) </p>
                    <b class="text-end text-danger fw-bold"> <h3>JAWABAN : E</h3></b>
                    </div>
                </div>
                <hr />
<!-- SOAL end -->
<!--=======================  soal24 ===================================-->
            <li>Diketahui vektor \(\vec{a} = -2i +3j+k \) dan \(\vec{b} = 4i+4j+mk \). Jika panjang proyeksi vektor \(\vec{a}\) pada \(\vec{b} \) adalah \(\displaystyle \frac{1}{3}\), nilai \(m\) yang memenuhi adalah . . .   </li>
                <ol type="A">
                    <li> \(2 \)</li>
                    <li> \(5 \)</li>
                    <li> \(-7 \)</li>
                    <li> \(-5 \)</li>
                    <li> \( 7\)</li>

                </ol>
                <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal24" aria-expanded="false" aria-controls="collapsesoal24">
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal24">
                    <div class="card card-body overflow-auto">
                        <p>Proyeksi \(\vec{a}\) pada \(\displaystyle \vec{b} = \frac{ \vec{a} .\vec{b}}{|\vec{b}|}\) </p>
                        <p>\(\displaystyle \begin{align}
                            \vec{a} &= \begin{pmatrix} -2\\3\\1 \end{pmatrix} \\
                            \vec{b} &= \begin{pmatrix} 4\\4\\m \end{pmatrix} \\
                            |\vec{b}| &= \sqrt{4^2 + 4^2 +m^2} \\
                            &= \sqrt{16+16+m^2} \\
                            &= \sqrt{32+m^2}
                            \end{align}\)</p>
                            <p>Sehingga</p>
                            <p>\(\displaystyle \begin{align}
                                \frac{ \vec{a} .\vec{b}}{|\vec{b}|} &= \frac{1}{3} \\
                                \frac{\begin{pmatrix} -2\\3\\1 \end{pmatrix} \begin{pmatrix} 4\\4\\m \end{pmatrix}}{\sqrt{32+m^2}} &= \frac{1}{3}\\
                                3(-2 \times 4 + 3 \times 4 + 1 \times m) &= \sqrt{32 + m^2} \\
                                3 (-8+12+m) &= \sqrt{32 + m^2} \\
                                3 (4+m) &= \sqrt{32 + m^2} \\
                                (12 + 3m) &= \sqrt{32 + m^2} \\
                                (12 +3m)^2 &= 32 + m^2 \\
                                144 + 72m +9m^2 &= 32 + m^2 \\
                                9m^2 - m^2 + 72m +144 - 32 &= 0 \\
                                8m^2 +72m +112 &= 0 \\
                                m^2 + 9m +14 &= 0 \\
                                (m+7)(m+2) &= 0
                                \end{align}\)</p>
                            <p>Jadi, nilai \(m\) adalah \(\begin{Bmatrix} -7,-2 \end{Bmatrix}\)</p>
                    <b class="text-end text-danger fw-bold"> <h3>JAWABAN : C</h3></b>
                    </div>
                </div>
                <hr />
<!-- SOAL end -->
<!--=======================  soal25 ===================================-->
            <li>Diketahui persamaan lingkaran \(L: x^2 +y^2 -4x -6y -12 =0\). Pusat dan jari-jari lingkaran beruturut-turut adalah . . .</li>
                <ol type="A">
                    <li> \( (2,3) \text{ dan }5 \)</li>
                    <li> \( (-2,-3) \text{ dan }5 \)</li>
                    <li> \( (2,3) \text{ dan }25 \)</li>
                    <li> \( (-2,-3) \text{ dan }25 \)</li>
                    <li> \( (-2,3) \text{ dan }25 \)</li>

                </ol>
                <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal25" aria-expanded="false" aria-controls="collapsesoal25">
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal25">
                    <div class="card card-body overflow-auto">
                        <p>Untuk \(x^2 + y^2 +Ax + By + C = 0\) <br> pusat lingkaran di \(\displaystyle \left(-\frac{1}{2}A , -\frac{1}{2}B\right) \), <br> jari-jari \(\displaystyle\sqrt{\left(-\frac{1}{2}A\right)^2 + \left(-\frac{1}{2}B\right)^2 -C}\)</p>
                        <br>
                        <p>\(L: x^2 +y^2 -4x -6y -12 =0\)</p>
                        <p>\(\displaystyle \begin{align}
                            \text{Pusat Lingkaran } &= \left(-\frac{1}{2} (-4) , -\frac{1}{2} (-6)  \right) \\
                            &= \left(2 , 3  \right) \\\\

                            \text{Jari-jari } &= \sqrt{\left(-\frac{1}{2} (-4) \right)^2 + \left(-\frac{1}{2} (-6) \right)^2 - (-12)} \\
                            &= \sqrt{2^2 + 3^2 +12} \\
                            &= \sqrt{4 + 9 +12} \\
                            &= \sqrt{25} \\
                            &= 5
                            \end{align}\)</p>
                    <b class="text-end text-danger fw-bold"> <h3>JAWABAN : A</h3></b>
                    </div>
                </div>
                <hr />
<!-- SOAL end -->
<!--=======================  soal26 ===================================-->
            <li>Persamaan lingkaran yang berpusat dititik \((5,-3) \)  dan menyinggung garis \(g: 4x-3y-14 = 0 \) adalah . . .</li>
                <ol type="A">
                    <li> \(L : x^2 + y^2 -10x +6y + 19 = 0 \)</li>
                    <li> \(L : x^2 + y^2 -10x +6y - 19 = 0 \)</li>
                    <li> \(L : x^2 + y^2 -10x +6y + 16 = 0 \)</li>
                    <li> \(L : x^2 + y^2 -10x +6y + 25 = 0 \)</li>
                    <li> \(L : x^2 + y^2 -10x +6y + 34 = 0 \)</li>

                </ol>
                <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal26" aria-expanded="false" aria-controls="collapsesoal26">
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal26">
                    <div class="card card-body overflow-auto">
                        <p>Jarak titik pusat ke garis singgung akan sama dengan panjang jari-jari</p>
                        <p>jarak \(ax+by+c=0\) ke \((x_1,y_1)\) adalah \( d = \begin{vmatrix}\displaystyle \frac{ax_1 + by_1 + c}{\sqrt{a^2 +b^2}} \end{vmatrix} \)</p>
                        <p>\(\displaystyle \begin{align}
                            d &= \begin{vmatrix} \displaystyle \frac{4(5)-3(-3)-14}{\sqrt{4^2 + (-3)^2}} \end{vmatrix} \\
                            &= \begin{vmatrix}\displaystyle \frac{20+9-14}{\sqrt{16 + 9}} \end{vmatrix} \\
                            &= \begin{vmatrix}\displaystyle \frac{15}{\sqrt{25}} \end{vmatrix} \\
                            &= \begin{vmatrix}\displaystyle \frac{15}{5} \end{vmatrix} \\
                            &= \begin{vmatrix} \displaystyle 3 \end{vmatrix} \\
                            &= 3
                            \end{align}\)</p>
                        <p>persamaan lingkaran dengan pusat \((a,b)\) dengan jari-jari \(r\) adalah \((x-a)^2 + (y-b)^2 = r^2 \)</p>
                        <p>\(\displaystyle \begin{align}
                            (x-5)^2 + (y+3)^2 &= 3^2 \\
                            x^2 -10x +25 + y^2 +6y +9 &= 9 \\
                            x^2 + y^2 -10x +6y +25 +9 -9 &= 0 \\
                            x^2 + y^2 -10x +6y +25 &= 0 \\
                            \end{align}\)</p>
                    <b class="text-end text-danger fw-bold"> <h3>JAWABAN : D</h3></b>
                    </div>
                </div>
                <hr />
<!-- SOAL end -->
<!--=======================  soal27 ===================================-->
            <li>Persamaan lingkaran dengan pusat \((-1,-5)\) dan melalui titik \((3,-2) \) adalah ...</li>
                <ol type="A">
                    <li> \( x^2 +y^2 -2x +10y +1 = 0 \)</li>
                    <li> \( x^2 +y^2 +2x +10y +1 = 0 \)</li>
                    <li> \( x^2 +y^2 -2x -10y -1 = 0 \)</li>
                    <li> \( x^2 +y^2 +2x -10y -1 = 0 \)</li>
                    <li> \( x^2 +y^2 -2x -10y +1 = 0 \)</li>

                </ol>
                <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal27" aria-expanded="false" aria-controls="collapsesoal27">
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal27">
                    <div class="card card-body overflow-auto">
                        <p>jari-jari lingkaran akan sama dengan jarak titik pusat ke titik yang dilalui lingkaran, sehingga jarak dua titik tersebut adalah</p>
                        <p>\(\displaystyle \begin{align}
                            r &= \sqrt{(3-(-1))^2 + (-2-(-5))^2} \\
                            &= \sqrt{4^2 + 3^2} \\
                            &= \sqrt{16 + 9} \\
                            &= \sqrt{25} \\
                            &= 5 \\
                            \end{align} \)</p>
                        <p>persamaan lingkaran dengan pusat \((a,b)\) dengan jari-jari \(r\) adalah \((x-a)^2 + (y-b)^2 = r^2 \)</p>
                        <p>\(\displaystyle \begin{align}
                            (x+1)^2 + (y+5)^2 &= 5^2 \\
                            x^2 + 2x +1 +y^2 +10y +25 &=25 \\
                            x^2 + y^2 +2x +10y +1+25-25 &=0 \\
                            x^2 + y^2 +2x +10y +1 &=0 \\

                            \end{align}\)</p>
                    <b class="text-end text-danger fw-bold"> <h3>JAWABAN : B</h3></b>
                    </div>
                </div>
                <hr />
<!-- SOAL end -->
<!--=======================  soal28 ===================================-->
            <li>Perhatikan fungsi distribusi peluang variabel acak \(X\) berikut</li>
            <p>Diketahui \( f(x)=\left\{\begin{matrix} \displaystyle
                0, \:\: \text{untuk }x \text{ yang lainnya} \\
                \displaystyle \frac{x}{15}, \:\: \text{untuk } x=1 \text{ atau } x=4\\
                \displaystyle \frac{2x}{15}, \:\: \text{untuk } x=2 \text{ atau } x=3
                \end{matrix}\right. \)</p>
                <p>Nilai \(P(|X-4| < 3 )\) adalah . . .</p>
                <ol type="A">
                    <li> \( \displaystyle \frac{10}{15} \)</li>
                    <li> \( \displaystyle \frac{11}{15}\)</li>
                    <li> \( \displaystyle \frac{12}{15}\)</li>
                    <li> \( \displaystyle \frac{13}{15}\)</li>
                    <li> \( \displaystyle \frac{14}{15}\)</li>

                </ol>
                <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal28" aria-expanded="false" aria-controls="collapsesoal28">
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal28">
                    <div class="card card-body overflow-auto">

                    <b class="text-end text-danger fw-bold"> <h3>JAWABAN : E</h3></b>
                    </div>
                </div>
                <hr />
<!-- SOAL end -->
<!--=======================  soal29 ===================================-->
                <li>Perhatikan fungsi distribusi peluang variabel acak \(X\) berikut</li>
                <p>Diketahui \( f(x)=\left\{\begin{matrix} \displaystyle
                    0, \:\: \text{untuk }x \text{ yang lainnya} \\
                    \displaystyle \frac{x}{15}, \:\: \text{untuk } x=1 \text{ atau } x=4\\
                    \displaystyle \frac{2x}{15}, \:\: \text{untuk } x=2 \text{ atau } x=3
                    \end{matrix}\right. \)</p>
                <p>Nilai \(P(X > 2 ) - F(3)\) adalah . . .</p>
                <ol type="A">
                    <li> \( \displaystyle \frac{4}{5} \)</li>
                    <li> \( \displaystyle \frac{3}{5}\)</li>
                    <li> \( \displaystyle \frac{1}{3}\)</li>
                    <li> \( \displaystyle \frac{1}{5}\)</li>
                    <li> \( \displaystyle \frac{1}{15}\)</li>

                </ol>
                <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal29" aria-expanded="false" aria-controls="collapsesoal29">
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal29">
                    <div class="card card-body overflow-auto">

                    <b class="text-end text-danger fw-bold"> <h3>JAWABAN : D</h3></b>
                    </div>
                </div>
                <hr />
<!-- SOAL end -->
<!--=======================  soal30 ===================================-->
            <li>Peluang seorang siswa kelas XII lulus UNBK adalah \(\displaystyle \frac{3}{4} \) sedangkan peluang seorang siswa kelas XII lulus SNMPTN adalah \(\displaystyle \frac{1}{12} \). Jika dalam suatu sekolah terdapat \(30\) siswa yang mengikuti UNBK dan SNMPTN, maka peluang tepat \(10\) orang siswa lulus UNBK dan SNMPTN adalah . . .</li>
                <ol type="A">
                    <li> \( \displaystyle C_{10}^{30} \left(\frac{1}{48}\right)^{10} \left(\frac{3}{4} \right)^{20} \)</li>
                    <li> \( \displaystyle C_{10}^{30} \left(\frac{1}{16}\right)^{10} \left(\frac{15}{16} \right)^{20} \)</li>
                    <li> \( \displaystyle C_{10}^{30} \left(\frac{1}{12}\right)^{10} \left(\frac{15}{12} \right)^{20}\)</li>
                    <li> \( \displaystyle C_{10}^{30} \left(\frac{1}{48}\right)^{10} \left(\frac{15}{16} \right)^{20}\)</li>
                    <li> \( \displaystyle C_{10}^{30} \left(\frac{1}{12}\right)^{10} \left(\frac{3}{4} \right)^{20}\)</li>

                </ol>
                <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal30" aria-expanded="false" aria-controls="collapsesoal30">
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal30">
                    <div class="card card-body overflow-auto">

                    <b class="text-end text-danger fw-bold"> <h3>JAWABAN : B</h3></b>
                    </div>
                </div>
                <hr />
<!-- SOAL end -->
<!--=======================  soal31 ===================================-->
            <li>Perhatikan tabel distribusi variabel acak berikut!</li>
            <div class="row">
                <div class="col-sm-6">
                    <table class="table table-bordered">
                        <thead>
                          <tr>
                            <th>\(X\)</th>
                            <th>1</th>
                            <th>2</th>
                            <th>3</th>
                            <th>4</th>
                            <th>5</th>
                            <th>6</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th>\(P(X=x)\)</th>
                            <td>\(\displaystyle \frac{1}{24}\)</td>
                            <td>\(\displaystyle \frac{1}{6}\)</td>
                            <td>\(\displaystyle \frac{1}{6}\)</td>
                            <td>\(k\)</td>
                            <td>\(\displaystyle \frac{1}{3}\)</td>
                            <td>\(\displaystyle \frac{1}{12}\)</td>
                          </tr>
                        </tbody>
                      </table>
                </div>
            </div>
            Nilai \(k\) adalah . . .
                <ol type="A">
                    <li> \( \displaystyle \frac{1}{3} \)</li>
                    <li> \( \displaystyle \frac{1}{4} \)</li>
                    <li> \( \displaystyle \frac{1}{6} \)</li>
                    <li> \( \displaystyle \frac{1}{8} \)</li>
                    <li> \( \displaystyle \frac{1}{12} \)</li>

                </ol>
                <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal31" aria-expanded="false" aria-controls="collapsesoal31">
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal31">
                    <div class="card card-body overflow-auto">

                    <b class="text-end text-danger fw-bold"> <h3>JAWABAN : B</h3></b>
                    </div>
                </div>
                <hr />
<!-- SOAL end -->
<!--=======================  soal32 ===================================-->
            <li>Dua kotak masing-masing berisi dua kartu dan empat kartu. Kotak pertama berisi kartu bernomor \(1\) dan \(2\), sedangkan kotak kedua berisi kartu bernomor \(3\) sampai dengan \(6\). Dari setiap kotak diambil satu kartu secara acak. Variabel acak \(X\) menyatakan jumlah kedua nomor kartu yang terambil. Nilai \(P(X \leq 7) \)   adalah ...</li>
                <ol type="A">
                    <li> \( \displaystyle \frac{3}{8} \)</li>
                    <li> \( \displaystyle \frac{4}{8} \)</li>
                    <li> \( \displaystyle \frac{5}{8} \)</li>
                    <li> \( \displaystyle \frac{6}{8} \)</li>
                    <li> \( \displaystyle \frac{7}{8} \)</li>

                </ol>
                <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal32" aria-expanded="false" aria-controls="collapsesoal32">
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal32">
                    <div class="card card-body overflow-auto">

                    <b class="text-end text-danger fw-bold"> <h3>JAWABAN : E</h3></b>
                    </div>
                </div>
                <hr />
<!-- SOAL end -->
<!--=======================  soal33 ===================================-->
<p class="fw-bold">Perhatikan table berikut untuk menjawab soal no 33 sd 40 <br> Tabel \(f(x)=C_{x}^{n}(p)^x (q)^{n-x} \) dan \(\displaystyle F(x)=\sum_{x=0}^{n} C_{x}^{n}(p)^x (q)^{n-x}\)</p>
<img src="{{asset('asets/US/2023_33_40.png')}}" alt="tabepeluang" class="img-fluid">
            <li>Dalam suatu tes, peserta diminta mengerjakan \(15\) soal pilihan benar-salah. Peluang seorang peserta tes menjawab dengan benar \(8\) soal adalah . . .</li>
                <ol type="A">
                    <li> \(0,6964  \)</li>
                    <li> \(0,1964  \)</li>
                    <li> \(0,1094  \)</li>
                    <li> \(0,1285  \)</li>
                    <li> \(0,1445  \)</li>

                </ol>
                <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal33" aria-expanded="false" aria-controls="collapsesoal33">
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal33">
                    <div class="card card-body overflow-auto">

                    <b class="text-end text-danger fw-bold"> <h3>JAWABAN : B</h3></b>
                    </div>
                </div>
                <hr />
<!-- SOAL end -->
<!--=======================  soal34 ===================================-->
            <li>Sebuah perusahaan membutuhkan beberapa karyawan baru. Setelah tes seleksi karyawan diadakan peserta tes yang lulus sebanyak \(50\text{%}\). Jika dari peserta tes dipilih sampel secara acak sebanyak \(10\) peserta, peluang terpilih paling banyak  \(5\) peserta lulus tes adalah . . .</li>
                <ol type="A">
                    <li> \(0,6230 \)</li>
                    <li> \(0,2461 \)</li>
                    <li> \(0,8791 \)</li>
                    <li> \(0,0569 \)</li>
                    <li> \(0,9803 \)</li>

                </ol>
                <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal34" aria-expanded="false" aria-controls="collapsesoal34">
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal34">
                    <div class="card card-body overflow-auto">

                    <b class="text-end text-danger fw-bold"> <h3>JAWABAN : A</h3></b>
                    </div>
                </div>
                <hr />
<!-- SOAL end -->
<!--=======================  soal35 ===================================-->
            <li>Dua dadu dilemparkan bersama-sama sebanyak \(8\) kali. Peluang terlihat pasangan mata dadu berjumlah \(5\) paling sedikit \(3\) kali setelah dadu berhenti berguling adalah ...</li>
                <ol type="A">
                    <li> \( 0,2188 \)</li>
                    <li> \( 0,0400 \)</li>
                    <li> \( 0,1705 \)</li>
                    <li> \( 0,1348 \)</li>
                    <li> \( 0,9600 \)</li>

                </ol>
                <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal35" aria-expanded="false" aria-controls="collapsesoal35">
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal35">
                    <div class="card card-body overflow-auto">

                    <b class="text-end text-danger fw-bold"> <h3>JAWABAN : B</h3></b>
                    </div>
                </div>
                <hr />
<!-- SOAL end -->
<!--=======================  soal36 ===================================-->
            <li>Dua buah dadu dilambungkan Bersama-sama sebanyak \(8\) kali. Peluang terlihat pasangan mata dadu kelipatan \(3\) sebanyak \(2\) kali adalah...</li>
                <ol type="A">
                    <li> \( 0,1094 \)</li>
                    <li> \( 0,2605 \)</li>
                    <li> \( 0,1705 \)</li>
                    <li> \( 0,9600 \)</li>
                    <li> \( 0,0154 \)</li>

                </ol>
                <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal36" aria-expanded="false" aria-controls="collapsesoal36">
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal36">
                    <div class="card card-body overflow-auto">

                    <b class="text-end text-danger fw-bold"> <h3>JAWABAN : C</h3></b>
                    </div>
                </div>
                <hr />
<!-- SOAL end -->
<!--=======================  soal37 ===================================-->
            <li>Sebuah kotak berisi bola merah, kuning, dan biru dengan perbandingan \(3:2:1\). Dari kotak diambil satu bola secara acak dengan pengembalian bola ke dalam kotak. Jika percobaan dilakukan \(15\) kali, peluang terambilnya \(8\) bola merah adalah ...</li>
                <ol type="A">
                    <li> \(0,1964 \)</li>
                    <li> \(0,6964 \)</li>
                    <li> \(0,1094 \)</li>
                    <li> \(0,1445 \)</li>
                    <li> \(0,2605 \)</li>

                </ol>
                <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal37" aria-expanded="false" aria-controls="collapsesoal37">
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal37">
                    <div class="card card-body overflow-auto">

                    <b class="text-end text-danger fw-bold"> <h3>JAWABAN : A</h3></b>
                    </div>
                </div>
                <hr />
<!-- SOAL end -->
<!--=======================  soal38 ===================================-->
            <li>Seorang pemain sepak bola melakukan tendangan bola yang diarahkan ke gawang sebanyak \(8\) kali. Peluang bola masuk ke gawang pada setiap tendangan adalah \(0,8\). Berapa peluang \(4\) sampai \(6\) tendangan akan memasukkan bola ke gawang . . .</li>
                <ol type="A">
                    <li> \(0,0562  \)</li>
                    <li> \(0,7561  \)</li>
                    <li> \(0,6998  \)</li>
                    <li> \(0,5530  \)</li>
                    <li> \(0,0103  \)</li>

                </ol>
                <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal38" aria-expanded="false" aria-controls="collapsesoal38">
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal38">
                    <div class="card card-body overflow-auto">

                    <b class="text-end text-danger fw-bold"> <h3>JAWABAN : A</h3></b>
                    </div>
                </div>
                <hr />
<!-- SOAL end -->
<!--=======================  soal39 ===================================-->
            <li>Sebuah kantong berisi \(30\) bola. Sebanyak \(12\) bola berwarna merah dan sisanya berwarna hijau. Dari kantong diambil \(10\) bola secara acak. Peluang terambil paling banyak \(6\) bola hijau adalah . . .</li>
                <ol type="A">
                    <li> \(0,0172  \)</li>
                    <li> \(0,2508  \)</li>
                    <li> \(0,3823  \)</li>
                    <li> \(0,6177  \)</li>
                    <li> \(0,9823  \)</li>

                </ol>
                <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal39" aria-expanded="false" aria-controls="collapsesoal39">
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal39">
                    <div class="card card-body overflow-auto">

                    <b class="text-end text-danger fw-bold"> <h3>JAWABAN : D</h3></b>
                    </div>
                </div>
                <hr />
<!-- SOAL end -->
<!--=======================  soal40 ===================================-->
            <li>Sekeping uang logam dilambungkan sebanyak \(30\) kali. Peluang terlihat sisi angka paling sedikit \(16\) kali . . . </li>
                <ol type="A">
                    <li> \(0,4278  \)</li>
                    <li> \(0,5722  \)</li>
                    <li> \(0,7077  \)</li>
                    <li> \(0,2923  \)</li>
                    <li> \(0,1354  \)</li>

                </ol>
                <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal40" aria-expanded="false" aria-controls="collapsesoal40">
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal40">
                    <div class="card card-body overflow-auto">

                    <b class="text-end text-danger fw-bold"> <h3>JAWABAN : A</h3></b>
                    </div>
                </div>
                <hr />
<!-- SOAL end -->

</ol>
<section>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col text-center">
                <p>Naskah Soal Ujian Sekolah tahun 2023 dapat didownload pada link berikut</p>
                <a href="https://docs.google.com/document/d/1xmgJNjoXK9Xp3yEo2zn2mddgaDc_h_4O/edit?usp=sharing&ouid=101595024561495424852&rtpof=true&sd=true" target="_blank"><h3>DOWNLOAD FILE DOCX</h3></a>
                <a href="https://drive.google.com/file/d/1bdxbaUyW8nqaJ_Y9kqvuBccIZx7dV30l/view?usp=sharing" target="_blank"><h3>DOWNLOAD FILE PDF</h3></a>
                <br>
                <h1 class="text-danger">TERIMA KASIH</h1>
                <p>www.mathdosman.site</p>
            </div>
        </div>
    </div>
    </section>
<!-- ------------------------------------------------------------------------------------------------------------------- -->
<!-- Batas no SOAL -->

<!-- ======================================PESAN DISQUS============================================= -->
            <div class="row">
                <div class="col">
                    <div id="disqus_thread"></div>
                </div>
            </div>
<!-- ======================================PESAN DISQUS============================================= -->
        </div>
        </div>
</section>


@endsection

