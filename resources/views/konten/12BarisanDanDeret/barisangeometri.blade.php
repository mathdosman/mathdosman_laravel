@extends('konten.12BarisanDanDeret.12.template')
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
            Barisan Geometri
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
                <div class="col">
                    <h2 class="text-center">BARISAN GEOMETRI</h2>
            <p>Perhatikan bahwa \(\displaystyle \frac{1}{2}, \frac{1}{4}, \frac{1}{8}, \frac{1}{16}, ... \) merupakan contoh barisan geometri. Contoh-contoh barisan geometri lainnya adalah:</p>
            <ol type="a">
                <li>\(2, 6, 18, 54, ... \)</li>
                <li>\(5, -10, 20, -40, ... \)</li>
                <li>\(27, 9, 3, 1, ... \)</li>
            </ol>
            <p>Secara umum dapat dikatakan bahwa barisan: \(U_1, U_2, U_3, U_4, ..., U_n \) merupakan barisan geometri jika.</p>
            <div class="border border-dark p-2 mx-auto overflow-auto" style="background-color: #d3f4f6;">\[\frac{U_2}{U_1} = \frac{U_3}{U_2} = \frac{U_4}{U_3} =...=\frac{U_n}{U_{n-1}} =\text{konstanta} \]</div>
            <p>Konstanta itu dinamakan <i>rasio</i>\(r\). Rasio pada contoh barisan tersebut:</p>
            <ol type="a">
                <li>rasio \(\displaystyle = \frac{6}{2} = \frac{18}{6} = \frac{54}{18} = ... = 3\)</li>
                <li>rasio \(\displaystyle = \frac{-10}{5} = \frac{20}{-10} = \frac{-40}{20} = ... = -2\)</li>
                <li>rasio \(\displaystyle = \frac{9}{27} = \frac{3}{9} = \frac{1}{3} = ... = \frac{1}{3}\)</li>
            </ol>
            <p>Rumus umum suku ke-n barisan geometri dengan suku pertama \(a\) dan rasio \(r\) dapat ditentukan sebagai berikut.</p>
            <p>
                \begin{align}
            U_1 &= a \\
            U_2 &= ar \\
            U_3 &= ar^2 \\
            U_4 &= ar^3 \\
            U_5 &= ar^4 \\
            \vdots &= \vdots \\
            U_n &= ar^{n-1}
            \end{align}
            Jadi, rumus suku ke-n barisan geometri dapat dinyatakan dengan:
            </p>
            <div class="shadow-lg bg-body p-2 mb-5 mt-3 rounded mx-auto " style="width: fit-content; font-size: 1.5rem;">\[U_n = ar^{n-1} \]</div>
            <p>Secara umum, jika disisipkan \(k\) suku diantara setiap dua suku berurutan sehingga membentuk barisan geometri baru, maka rasio barisan geometri baru adalah</p>
            <div class="shadow-lg bg-body p-2 mb-5 mt-3 rounded mx-auto " style="width: fit-content; font-size: 1.5rem;">\[\displaystyle r' = \sqrt[k+1]{r} \]</div>
            dan banyak sukunya adalah
            <div class="shadow-lg bg-body p-2 mb-5 mt-3 rounded mx-auto " style="width: fit-content; font-size: 1.5rem;">\[n' = a+(n-1)k\]</div>

            <!-- ============================================================================== -->
            <div class="badge bg-danger text-wrap fs-6" style="width: 8rem"><b> CONTOH 01 </b></div>
            <div class="rounded-2 p-1" style="background-color: rgba(207, 204, 204, 0.933);">Tentukan suku ketujuh dari barisan geometri \(\displaystyle 9,3,1, \frac{1}{3} \).</div>
            <p class="rounded-2 p-1" style="background-color: #f89845;"><b>Penyelesaian :</b> <br>
                \(\displaystyle a=9, r=\frac{1}{3} \) dan \(n=7 \) maka
            \[\begin{align}
            U_n &= ar^{n-1} \\
            U_7 &= 9 \cdot \left(\frac{1}{3} \right)^{7-1} \\
            &= 9 \cdot \left(\frac{1}{3} \right)^6 \\
            &= 3^2 \cdot \left(\frac{1}{3^6} \right) \\
            &= \frac{3^2}{3^6} \\
            &= \frac{1}{3^4} \\
            &= \boxed{\frac{1}{81}}
            \end{align}\]
            </p>
            <!-- ============================================================================== -->
            <!-- ============================================================================== -->
            <div class="badge bg-danger text-wrap fs-6" style="width: 8rem"><b> CONTOH 02 </b></div>
            <div class="rounded-2 p-1" style="background-color: rgba(207, 204, 204, 0.933);">Tentukan banyak suku pada barisan geometri \(\displaystyle 81, 27, 9, ... , \frac{1}{81} \).</div>
            <p class="rounded-2 p-1" style="background-color: #f89845;"><b>Penyelesaian :</b> <br>
                \(\displaystyle a=81, r=\frac{1}{3} \) dan \(\displaystyle U_n = \frac{1}{81} \)
            \[\begin{align}
            U_n &= \frac{1}{81} \\
            ar^{n-1} &= \frac{1}{81} \\
            81 \left(\frac{1}{3} \right)^{n-1} &= \frac{1}{81} \\
            \left(\frac{1}{3} \right)^{n-1} &= \frac{1}{81 \cdot 81} \\
            \left(\frac{1}{3} \right)^{n-1} &= \frac{1}{3^4 \cdot 3^4} \\
            \left(\frac{1}{3} \right)^{n-1} &= \frac{1}{3^8} \\
            \left(\frac{1}{3} \right)^{n-1} &= \left(\frac{1}{3}\right)^8 \\
                n-1 &= 8 \\
                n &= 9
            \end{align}\] <br>
            Jadi, banyak suku barisan tersebut adalah \(\boxed{9} \)
            </p>
            <!-- ============================================================================== -->
            <!-- ============================================================================== -->
            <div class="badge bg-danger text-wrap fs-6" style="width: 8rem"><b> CONTOH 03 </b></div>
            <div class="rounded-2 p-1" style="background-color: rgba(207, 204, 204, 0.933);">Jika \(x-6, x-2, x+6 \) adalah tiga suku berurutan dalam suatu barisan geometri, tentukan nilai x!</div>
            <p class="rounded-2 p-1" style="background-color: #f89845;"><b>Penyelesaian :</b> <br>
            \(U_1 = x-6, U_2 = x-2\) dan \(U_3 = x+6 \),    Kita gunakan konsep rasio :
            \[\begin{align}
            \frac{U_2}{U_1} &= \frac{U_3}{U_2} \\
            \frac{x-2}{x-6} &= \frac{x+6}{x-2} \\
            (x-2)^2 &= (x+6)(x-6) \\
            x^2 - 4x + 4 &= x^2 - 36 \\
            -4x + 4 &= -36 \\
            -4x &= -36 - 4 \\
            4x &= 40 \\
            x &= 10
            \end{align}\]
            </p>
            <!-- ============================================================================== -->
            <!-- ============================================================================== -->
            <div class="badge bg-danger text-wrap fs-6" style="width: 8rem"><b> CONTOH 04 </b></div>
            <div class="rounded-2 p-1" style="background-color: rgba(207, 204, 204, 0.933);">Dalam suatu barisan geometri diketahui suku ketiga 3 lebihnya dari suku pertama, dan jumlah suku kedua dan suku ketiga adalah 6. Tentukan suku pertama dan rasio barisan geometri tersebut!</div>
            <p class="rounded-2 p-1" style="background-color: #f89845;"><b>Penyelesaian :</b> <br>
                Suku ketiga 3 lebihnya dari suku pertama
            \[\begin{align}
            U_3 &= U_1 + 3 \\
            U_3 - U_1 &= 3 \\
            ar^2 - a &= 3 \\
            a(r^2-1) &= 3 \\
            a(r-1)(r+1) &= 3 \;\;\; \cdots (1)
            \end{align}\]
            Jumlah suku kedua dan suku ketiga adalah 6:
            \[\begin{align}
            U_2 + U_3 &= 6 \\
            ar + ar^2 &= 6 \\
            ar(1+r) &= 6 \\
            ar(r+1) &= 6 \;\;\; \cdots (2)
            \end{align}\]
            Selanjutnya pernyataan \((1)\) dan \((2)\) kita bagi dan diperoleh
            \[\begin{align}
            \frac{a(r-1)(r+1)}{ar(r+1)} &= \frac{3}{6} \\
            \frac{r-1}{r} &= \frac{1}{2} \\
            2(r-1) &= r \\
            2r-2 &= r \\
            r &= 2
            \end{align}\]
            Substitusi nilai \(r=2\) ke pernyataan \((1)\) atau \((2)\) <br>
            \[\begin{align}
            ar(r+1) &= 6 \\
            a(2)(2+1) &= 6 \\
            6a &= 6 \\
            a &= 1
            \end{align}\]
            Jadi, suku pertama \(a=1\) dan rasio \(r=2\) <br>
            Barisan geometri yang dimaksud adalah \(\boxed{1, 2, 4, 8, 16, \cdots}\)
            </p>
            <!-- ============================================================================== -->
            <!-- ============================================================================== -->
            <div class="badge bg-danger text-wrap fs-6" style="width: 8rem"><b> CONTOH 05 </b></div>
            <div class="rounded-2 p-1" style="background-color: rgba(207, 204, 204, 0.933);">Diantara 2 dan 162 disisipkan 3 bilangan, sehingga terjadi sebuah barisan geometri baru. Tentukanlah rasio barisan geometri yang baru dan suku ke-4.</div>
            <p class="rounded-2 p-1" style="background-color: #f89845;"><b>Penyelesaian :</b> <br>
            \(\displaystyle a=2, r=\frac{162}{2}=81 \) dan \(k=3\)
            \[\begin{align}
            r' &= \sqrt[k+1]{r} \\
            &= \sqrt[3+1]{81} \\
            &=\sqrt[4]{81} \\
            &= 3
            \end{align}\] <br>
            rasio barisan geometri yang baru adalah \(\boxed{3}\) <br>
            Suku ke-4 adalah
            \[\begin{align}
            U_n &= ar^{n-1} \\
            U_4 &= 2(3)^3 \\
            &= 2(27) \\
            &= 54
            \end{align}\]
            Jadi, suku ke-4 barisan geometri yang baru adalah \(\boxed{54} \)
            </p>
            <!-- ============================================================================== -->
                </div>
            <hr>
            <hr>

        <form name="input-form">
            <ol type="1" class="mt-2">
                 <h2>LATIHAN SOAL</h2>
                @include('konten.00semuamateri.identitas')
                <!--=======================  soal1 ===================================-->
            <li>Suku ke-5 dari barisan geometri \(\displaystyle \frac{1}{2} + \frac{3}{2} +\frac{9}{2}+... \) adalah ....</li>
            <input type="radio" name="soal1" value="A"/>
            A. \(\displaystyle \frac{80}{2} \)
        <br />
            <input type="radio" name="soal1" value="B"/>
            B. \(\displaystyle \frac{81}{2} \)
        <br />
            <input type="radio" name="soal1" value="C"/>
            C. \(\displaystyle \frac{82}{2} \)
        <br>
            <input type="radio" name="soal1" value="D"/>
            D. \(\displaystyle \frac{83}{2} \)
        <br />
            <input type="radio" name="soal1" value="E"/>
            E. \(\displaystyle \frac{85}{2} \)
        <br>
        <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal1" aria-expanded="false" aria-controls="collapsesoal1" disabled>
        Alternatif Penyelesaian:
        </button>
        <div class="collapse" id="collapsesoal1">
        <div class="card card-body overflow-auto">
            <p></p>
        <b class="text-end text-danger fw-bold"> <h3>JAWABAN : B</h3></b>
        </div>
        </div>
        <hr />

<!--=======================  soal2 ===================================-->
    <li>suku ke-16 dari barisan \(\displaystyle \frac{1}{32} , \frac{1}{16}, \frac{1}{8}, \frac{1}{4},...,\) adalah...</li>
            <input type="radio" name="soal2" value="A"/>
            A. \(128 \)
        <br />
            <input type="radio" name="soal2" value="B"/>
            B. \(256 \)
        <br />
            <input type="radio" name="soal2" value="C"/>
            C. \(512 \)
        <br>
            <input type="radio" name="soal2" value="D"/>
            D. \(1.024 \)
        <br />
            <input type="radio" name="soal2" value="E"/>
            E. \(2.048 \)
        <br>
        <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal2" aria-expanded="false" aria-controls="collapsesoal2" disabled>
        Alternatif Penyelesaian:
        </button>
        <div class="collapse" id="collapsesoal2">
        <div class="card card-body overflow-auto">
            <p></p>
        <b class="text-end text-danger fw-bold"> <h3>JAWABAN : D</h3></b>
        </div>
        </div>
        <hr />

<!--=======================  soal3 ===================================-->
    <li>Dari suatu barisan geometri diketahui suku ketiga adalah 4 dan suku ketujuh adalah 324. Suku keenam barisan itu adalah...</li>
            <input type="radio" name="soal3" value="A"/>
            A. \(102 \)
        <br />
            <input type="radio" name="soal3" value="B"/>
            B. \(108 \)
        <br />
            <input type="radio" name="soal3" value="C"/>
            C. \(216 \)
        <br>
            <input type="radio" name="soal3" value="D"/>
            D. \(284 \)
        <br />
            <input type="radio" name="soal3" value="E"/>
            E. \(294 \)
        <br>
        <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal3" aria-expanded="false" aria-controls="collapsesoal3" disabled>
        Alternatif Penyelesaian:
        </button>
        <div class="collapse" id="collapsesoal3">
        <div class="card card-body overflow-auto">
            <p></p>
        <b class="text-end text-danger fw-bold"> <h3>JAWABAN : B</h3></b>
        </div>
        </div>
        <hr />

<!--=======================  soal4 ===================================-->
    <li>Diketahui tiga bilangan membentuk barisan geometri dengan rasio positif. Jumlah dari ketiga bilangan tersebut adalah 19, sedangkan selisih bilangan terbesar dan terkecil adalah 5. Suku tengah barisan tersebut adalah...</li>
            <input type="radio" name="soal4" value="A"/>
            A. \(\displaystyle 1 \frac{1}{2} \)
        <br />
            <input type="radio" name="soal4" value="B"/>
            B. \(4 \)
        <br />
            <input type="radio" name="soal4" value="C"/>
            C. \(6 \)
        <br>
            <input type="radio" name="soal4" value="D"/>
            D. \(9 \)
        <br />
            <input type="radio" name="soal4" value="E"/>
            E. \(\displaystyle 16 \frac{1}{3} \)
        <br>
        <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal4" aria-expanded="false" aria-controls="collapsesoal4" disabled>
        Alternatif Penyelesaian:
        </button>
        <div class="collapse" id="collapsesoal4">
        <div class="card card-body overflow-auto">
            <p>\begin{align}
            U_1 + U_2 + U_3 &= a+ar+ar^2 \\
            19 &= a(1+r+r^2) \;\; \cdots (1)\\
            \end{align}
            \begin{align}
            U_3 - U_1 &= ar^2 - a \\
            5 &= a(r^2 - 1) \\
            a &= \frac{5}{r^2 - 1} \;\; \cdots (2)
            \end{align}
            Substitusi persamaan (2) ke persamaan (1)
            \begin{align}
            19 &= \frac{5}{r^2-1} (1+r+r^2) \\
            19(r^2 -1) &= 5(1+r+r^2) \\
            19r^2 - 19 &= 5 + 5r + 5r^2 \\
            19r^2 - 5r^2 -5r -5 -19 &=0 \\
            14r^2 -5r -24 &= 0 \\
            (7r+8)(2r-3) &= 0 \\\\
            7r+8 &= 0 \\
            7r &= -8 \\
            r &= -\frac{8}{7} \;\; (\text{tidak memenuhi}) \\\\
            2r-3 &= 0 \\
            2r &= 3 \\
            r &= \frac{3}{2} \;\; (\text{Memenuhi}) \\\\
            a &=\frac{5}{(\frac{3}{2})^2-1} \\
            &= \frac{5}{\frac{9}{4}-1} \\
            &= \frac{5}{\frac{5}{4}} \\
            &= 5 \times \frac{4}{5} \\
            a &= 4
            \end{align}
            karena suku tengah \(=U_2\) maka <br>
            \begin{align}
            U_2 &= ar \\
            &= 4 \times \frac{3}{2} \\
            &= 6
            \end{align}
        </p>

        <b class="text-end text-danger fw-bold"> <h3>JAWABAN : C</h3></b>
        </div>
        </div>
        <hr />

<!--=======================  soal5 ===================================-->
    <li>Jika suku ke-2 barisan geometri adalah 6 dan suku ke-5 adalah 48, bilangan 6.144 merupakan suku ke-...</li>
            <input type="radio" name="soal5" value="A"/>
            A. \(9 \)
        <br />
            <input type="radio" name="soal5" value="B"/>
            B. \(10 \)
        <br />
            <input type="radio" name="soal5" value="C"/>
            C. \(11 \)
        <br>
            <input type="radio" name="soal5" value="D"/>
            D. \(12 \)
        <br />
            <input type="radio" name="soal5" value="E"/>
            E. \(13 \)
        <br>
        <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal5" aria-expanded="false" aria-controls="collapsesoal5" disabled>
        Alternatif Penyelesaian:
        </button>
        <div class="collapse" id="collapsesoal5">
        <div class="card card-body overflow-auto">
            <p></p>
        <b class="text-end text-danger fw-bold"> <h3>JAWABAN : D</h3></b>
        </div>
        </div>
        <hr />

<!--=======================  soal6 ===================================-->
    <li>Diketahui barisan geometri \(\displaystyle \frac{1}{2}, \frac{1}{3}, \frac{2}{9}, ..., \frac{32}{729} \). Jika \(\displaystyle U_n = \frac{32}{729} \), nilai \(n\) yang memenuhi adalah...</li>
            <input type="radio" name="soal6" value="A"/>
            A. \(9 \)
        <br />
            <input type="radio" name="soal6" value="B"/>
            B. \(8 \)
        <br />
            <input type="radio" name="soal6" value="C"/>
            C. \(7 \)
        <br>
            <input type="radio" name="soal6" value="D"/>
            D. \(6 \)
        <br />
            <input type="radio" name="soal6" value="E"/>
            E. \(5 \)
        <br>
        <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal6" aria-expanded="false" aria-controls="collapsesoal6" disabled>
        Alternatif Penyelesaian:
        </button>
        <div class="collapse" id="collapsesoal6">
        <div class="card card-body overflow-auto">
            <p></p>
        <b class="text-end text-danger fw-bold"> <h3>JAWABAN : C</h3></b>
        </div>
        </div>
        <hr />

<!--=======================  soal7 ===================================-->
    <li>Suku pertama barisan geometri adalah \(\sqrt{3} \) dan suku kedua adalah \(3+\sqrt{3}\). Suku ketiga barisan tersbut adalah... </li>
            <input type="radio" name="soal7" value="A"/>
            A. \(6+\sqrt{3} \)
        <br />
            <input type="radio" name="soal7" value="B"/>
            B. \(6+2\sqrt{3} \)
        <br />
            <input type="radio" name="soal7" value="C"/>
            C. \(6+3\sqrt{3} \)
        <br>
            <input type="radio" name="soal7" value="D"/>
            D. \(6+4\sqrt{3} \)
        <br />
            <input type="radio" name="soal7" value="E"/>
            E. \(6+5\sqrt{3} \)
        <br>
        <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal7" aria-expanded="false" aria-controls="collapsesoal7" disabled>
        Alternatif Penyelesaian:
        </button>
        <div class="collapse" id="collapsesoal7">
        <div class="card card-body overflow-auto">
            <p></p>
        <b class="text-end text-danger fw-bold"> <h3>JAWABAN : D</h3></b>
        </div>
        </div>
        <hr />

<!--=======================  soal8 ===================================-->
    <li>Jika \(p,q,r \) merupakan barisan geometri di mana \(r \gt q \gt p \) terdapat hubungan... </li>
            <input type="radio" name="soal8" value="A"/>
            A. \(r^2 = pq \)
        <br />
            <input type="radio" name="soal8" value="B"/>
            B. \(q^2 = pr \)
        <br />
            <input type="radio" name="soal8" value="C"/>
            C. \(p^2 =qr \)
        <br>
            <input type="radio" name="soal8" value="D"/>
            D. \(q=p^2 r^2 \)
        <br />
            <input type="radio" name="soal8" value="E"/>
            E. \(p^2= pq \)
        <br>
        <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal8" aria-expanded="false" aria-controls="collapsesoal8" disabled>
        Alternatif Penyelesaian:
        </button>
        <div class="collapse" id="collapsesoal8">
        <div class="card card-body overflow-auto">
            <p></p>
        <b class="text-end text-danger fw-bold"> <h3>JAWABAN : B</h3></b>
        </div>
        </div>
        <hr />

<!--=======================  soal9 ===================================-->
    <li>Jika \(x, 2x+2 \) dan \(4x+10 \) adalah tiga suku pertama dalam barisan geometri, suku ke-5 barisan tersebut adalah...</li>
            <input type="radio" name="soal9" value="A"/>
            A. \(486 \)
        <br />
            <input type="radio" name="soal9" value="B"/>
            B. \(339 \)
        <br />
            <input type="radio" name="soal9" value="C"/>
            C. \(240 \)
        <br>
            <input type="radio" name="soal9" value="D"/>
            D. \(162 \)
        <br />
            <input type="radio" name="soal9" value="E"/>
            E. \(54 \)
        <br>
        <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal9" aria-expanded="false" aria-controls="collapsesoal9" disabled>
        Alternatif Penyelesaian:
        </button>
        <div class="collapse" id="collapsesoal9">
        <div class="card card-body overflow-auto">
            <p></p>
        <b class="text-end text-danger fw-bold"> <h3>JAWABAN : D</h3></b>
        </div>
        </div>
        <hr />

<!--=======================  soal10 ===================================-->
    <li>Jika diketahui suatu barisan geometri dengan \(U_2 + U_3 = 16 \) dan \(\displaystyle U_4 + U_5 = \frac{16}{9} \) rasio deret geometri tersebut adalah... </li>
            <input type="radio" name="soal10" value="A"/>
            A. \(\displaystyle \frac{1}{3} \)
        <br />
            <input type="radio" name="soal10" value="B"/>
            B. \(\displaystyle \frac{2}{3} \)
        <br />
            <input type="radio" name="soal10" value="C"/>
            C. \(1 \)
        <br>
            <input type="radio" name="soal10" value="D"/>
            D. \(2 \)
        <br />
            <input type="radio" name="soal10" value="E"/>
            E. \(3 \)
        <br>
        <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal10" aria-expanded="false" aria-controls="collapsesoal10" disabled>
        Alternatif Penyelesaian:
        </button>
        <div class="collapse" id="collapsesoal10">
        <div class="card card-body overflow-auto">
            <p></p>
        <b class="text-end text-danger fw-bold"> <h3>JAWABAN : A</h3></b>
        </div>
        </div>
        <hr />

            </ol>

{{-- COPY DARI SINI SETIAP SOAL --}}
<input type="hidden" id="materi" name="materi" value="Bar_Geo01">
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
    <a href="/create_barisan_geometri" id="kirimsaja" class="btn btn-warning btn-bukti d-none" >SIMPAN JAWABAN</a>
</div>
</form>
{{-- COPY SAMPAI SINI --}}

<div id="disqus_thread" class="mt-4"></div>

</div>
</div>
    </div>

</section>
@endsection

