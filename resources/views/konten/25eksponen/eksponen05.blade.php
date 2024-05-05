@extends('konten.25eksponen.25.template')
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
            EKSPONEN - LATIHAN 05
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

            <p>Persamaan eksponen selanjutnya adalah persamaan eksponen yang berbentuk basis dan pangkat beragam yaitu dapat berupa fungsi atau bentuk basis ruas kiri dan ruas kanan tidak bisa disamakan. Berikut beberapa bentuk persamaan eksponen lanjut dan solusinya.</p>
            <ol type="1">
                <li>\(p^{f(x)}=q^{f(x)} \) penyelesaiannya \(\rightarrow f(x)=0 \)</li>
                <li>\(p^{f(x)}=q^{g(x)} \) penyelesaiannya \(\rightarrow f(x) \cdot \log p = g(x) \cdot \log q \)</li>
                <li>\(g(x)^{f(x)}=g(x)^{h(x)} \) penyelesaiannya adalah semua :
                    <ol type="a">
                        <li>\(f(x) = h(x) \)</li>
                        <li>\(g(x) = 1 \)</li>
                        <li>\(g(x)=-1 \), syarat \(f(x)\) dan \(g(x)\) sama-sama genap atau sama-sama ganjil. </li>
                        <li>\(g(x) = 0 \), syaratnya \(f(x)\) dan \(g(x)\) sama-sama positif </li>
                    </ol>
                </li>
                <li>\(f(x)^{h(x)}= g(x)^{h(x)} \) penyelesaiannya adalah semua :
                    <ol type="a">
                        <li>\(f(x)=g(x) \)</li>
                        <li>\(f(x)=-g(x) \), syaratnya \(h(x)\) harus genap</li>
                        <li>\(h(x)=0 \), syaratnya \(f(x)\) dan \(g(x)\) tidak bernilai nol</li>
                    </ol>
                </li>
            </ol>
            <!-- ============================================================================== -->
            <div class="badge bg-danger text-wrap fs-6" style="width: 8rem"><b> CONTOH 01 </b></div>
            <div class="rounded-2 p-1" style="background-color: rgba(193, 193, 193, 0.933);">Nilai \(x\) yang memenuhi persamaan \(3^{2x+1} = 25^{x+\frac{1}{2}} \) adalah . . .</div>
            <p class="rounded-2 p-1" style="background-color: #f89845;"><b>Penyelesaian :</b> <br>
            Proses bentuk basisnya
            \begin{align}
                3^{2x+1} &= 25^{x+\frac{1}{2}} \\
                3^{2x+1} &= (5^2)^{x+\frac{1}{2}} \\
                3^{2x+1} &= 5^{2x+1} \\
            \end{align}
            Berdasarkan \(p^{f(x)}=q^{f(x)} \;\; \rightarrow \;\; f(x)=0 \) <br>
            \(p=3\), \(q=5\), \(f(x)=2x+1\) <br>
            \begin{align}
                f(x) &= 0 \\
                2x+1 &= 0 \\5
                2x &= -1 \\
                x &= -\frac{1}{2}
            \end{align}
            Jadi, nilai \(x=-\frac{1}{2}\) yang memenuhi persamaan.
            </p>
            <!-- ========================================================================== -->
            <div class="badge bg-danger text-wrap fs-6" style="width: 8rem"><b> CONTOH 02 </b></div>
            <div class="rounded-2 p-1" style="background-color: rgba(193, 193, 193, 0.933);">Nilai \(x\) yang memenuhi persamaan \(2^{3x-1} = 3^{x+1} \) adalah . . .</div>
            <p class="rounded-2 p-1" style="background-color: #f89845;"><b>Penyelesaian :</b> <br>
                Berdasarkan \(p^{f(x)}=q^{g(x)} \;\; \rightarrow \;\; f(x) \cdot \log p = g(x) \cdot \log q \)
                <br>
                \(p=2\), \(f(x)=3x-1\), \(q=3\), \(g(x)=x+1\)
                \begin{align}
                f(x) \cdot \log p &= g(x) \cdot \log q \\
                (3x-1) \cdot \log 2 &= (x+1) \cdot \log 3 \\
                3x \log 2 - \log 2 &= x \log 3 + \log 3 \\
                3x \log 2 - x \log 3 &= \log 2 + \log 3 \\
                x (3 \log 2 - \log 3) &= \log(2 \times 3) \\
                x (\log 2^3 - \log 3) &= \log(6) \\
                x (\log \frac{8}{3}) &= \log(6) \\
                x &= \frac{\log 6}{\log \frac{8}{3}}
                \end{align}

                Jadi, nilai \(\displaystyle x= \frac{\log 6}{\log \frac{8}{3}}\) yang memenuhi persamaan.
            </p>
            <!-- ============================================================================== -->
            <div class="badge bg-danger text-wrap fs-6" style="width: 8rem"><b> CONTOH 03 </b></div>
            <div class="rounded-2 p-1" style="background-color: rgba(193, 193, 193, 0.933);">Nilai \(x\) yang memenuhi persamaan \((x-4)^{4x} = (x-4)^{1+3x} \) adalah . . .</div>
            <div class="rounded-2 p-1" style="background-color: #f89845;">
            <p ><b>Penyelesaian :</b> <br>
            Persamaan di atas berbentuk \(g(x)^{f(x)}=g(x)^{h(x)} \) dengan \(g(x)=x-4\), \(f(x)=4x\), dan \(h(x)=1+3x \)</p>
            <p>Akan ada 4 kemungkinan yang harus diselidiki sebagai penyelesaian persamaan tersebut.</p>
            <p><b>Kemungkinan 1</b> <br>
                \begin{align}
                f(x) &= h(x) \\
                4x &= 1 + 3x \\
                4x-3x &= 1 \\
                x &= 1 \; (&#10004)
                \end{align}
            </p>
            <p><b>Kemungkinan 2</b> <br>
                \begin{align}
                g(x) &= 1\\
                x-4 &= 1 \\
                x &= 4+1 \\
                x&=5 \; (&#10004)
                \end{align}
            </p>
            <p><b>Kemungkinan 3</b> <br>
                \begin{align}
                g(x) &= -1 \\
                x-4 &= -1 \\
                x &= 4-1 \\
                x &= 3 \; (&#10004)
                \end{align}
            Nilai \(x=3\) memenuhi karena membuat \(f(x)\) dan \(h(x)\) menjadi bernilai genap, yaitu \(f(3)= 4(3)=12 \) dan \(h(3)=1+3(3)=10 \)
            </p>
            <p><b>Kemungkinan 4</b> <br>
                \begin{align}
                g(x) &= 0 \\
                x-4 &= 0 \\
                x &= 4 \; (&#10004)
                \end{align}
            Nilai \(x=4\) ini memnuhi karena membuat \(f(x)\) dan \(h(x)\) menjadi sama sama positif, yaitu \(f(4)=4(4)= +16 \) dan \(h(4)=1+3(4)=+13 \)
            </p>
            <p>Jadi, himpunan penyelesaian persamaan eksponen tersebut adalah \(\boxed{\{1,3,4,5 \} } \)</p>
            <!-- ========================================================================== -->
            <!-- \begin{align} \end{align} -->
            </div>
            <p></p>
            <!-- ============================================================================== -->
            <div class="badge bg-danger text-wrap fs-6 " style="width: 8rem"><b> CONTOH 04 </b></div>
            <div class="rounded-2 p-1" style="background-color: rgba(193, 193, 193, 0.933);">Nilai \(x\) yang memenuhi persamaan \((2x+1)^{x-6} = (x+5)^{x-6} \) adalah . . .</div>
            <div class="rounded-2 p-1" style="background-color: #f89845;">
            <p ><b>Penyelesaian :</b> <br>
               Berdasarkan  \(f(x)^{h(x)}= g(x)^{h(x)} \) <br>
               \(f(x)=2x+1 \), \(g(x)= x+5 \), dan \(h(x)= x-6\)
            </p>
            <p>Akan ada 3 kemungkinan yang harus diselidiki sebagai penyelesaian persamaan tersebut.</p>
            <p><b>Kemungkinan 1</b> <br>
                \begin{align}
                f(x) &= g(x) \\
                2x+1 &= x+5 \\
                2x-x &= 5-1 \\
                x &= 4 \; (&#10004)
                \end{align}
            </p>
            <p><b>Kemungkinan 2</b> <br>
                \begin{align}
                f(x) &= -g(x) \\
                2x+1 &= -(x+5) \\
                2x+1 &= -x -5 \\
                2x+x &= -5-1 \\
                3x &= -6 \\
                x&=-2 \; (&#10004)
                \end{align}
                Nilai \(x=-2\) memenuhi karena membuat \(h(x)\) genap, yaitu \(h(-2)=-2-6=-8\) (genap)
            </p>
            <p><b>Kemungkinan 3</b> <br>
                \begin{align}
                h(x) &= 0 \\
                x-6 &= 0 \\
                x &= 6 \; (&#10004)
                \end{align}
                Nilai \(x=6\) memnuhi karena membuat \(f(x)\) dan \(g(x)\) tidak bernilai nol, yaitu \(f(6)=2(6)+1=13 \neq 0 \) dan \(g(6) = 6+5=11 \neq 0 \)
            </p>
            </div>
            <!-- ========================================================================== -->
            <h1 class="text-center text-primary">SOAL LATIHAN</h1>


        <form name="input-form">
             <ol type="1" class="mt-2">
                @include('konten.00semuamateri.identitas')
                <li>Nilai \(x\) yang memenuhi persamaan \(16^{x-3} = 15^{4x-12} \) adalah . . .</li>
                    <input type="radio" name="soal1" value="A"/>
                    A. \(1 \)
                <br />
                    <input type="radio" name="soal1" value="B"/>
                    B. \(3 \)
                <br />
                    <input type="radio" name="soal1" value="C"/>
                    C. \(6 \)
                <br>
                    <input type="radio" name="soal1" value="D"/>
                    D. \(8 \)
                <br />
                    <input type="radio" name="soal1" value="E"/>
                    E. \(12 \)
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
            <li>Himpunan penyelesaian dari \(2^{x^2-x-6} = 3^{x^2-x-6} \) adalah . . .</li>
                    <input type="radio" name="soal2" value="A"/>
                    A. \( \{3\}\)
                <br />
                    <input type="radio" name="soal2" value="B"/>
                    B. \(\{-3, 2\} \)
                <br />
                    <input type="radio" name="soal2" value="C"/>
                    C. \(\{2, 3\} \)
                <br>
                    <input type="radio" name="soal2" value="D"/>
                    D. \(\{-2, 3\} \)
                <br />
                    <input type="radio" name="soal2" value="E"/>
                    E. \(\{2\} \)
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
            <li>Himpunan penyelesaian dari \(3^{x^2-2x-15} = 5^{x^2-2x-15} \) adalah . . .</li>
                    <input type="radio" name="soal3" value="A"/>
                    A. \( \{3\}\)
                <br />
                    <input type="radio" name="soal3" value="B"/>
                    B. \(\{-3, 5\} \)
                <br />
                    <input type="radio" name="soal3" value="C"/>
                    C. \(\{3, 5\} \)
                <br>
                    <input type="radio" name="soal3" value="D"/>
                    D. \(\{-5, 3\} \)
                <br />
                    <input type="radio" name="soal3" value="E"/>
                    E. \(\{5\} \)
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
            <li>nilai \(x\) yang memenuhi persamaan \((3x-4)^{3-x} = (3x-4)^{5x-2} \) adalah . . .</li>
                    <input type="radio" name="soal4" value="A"/>
                    A. \(\begin{Bmatrix} \displaystyle \frac{5}{6}, \frac{4}{3}, \frac{5}{3} \end{Bmatrix}\)
                <br />
                    <input type="radio" name="soal4" value="B"/>
                    B. \(\begin{Bmatrix} \displaystyle \frac{5}{6}, 1, \frac{4}{3}, \frac{5}{3} \end{Bmatrix}\)
                <br />
                    <input type="radio" name="soal4" value="C"/>
                    C. \(\begin{Bmatrix} \displaystyle 1, \frac{4}{3}, \frac{5}{3} \end{Bmatrix}\)
                <br>
                    <input type="radio" name="soal4" value="D"/>
                    D. \(\begin{Bmatrix} \displaystyle \frac{5}{6}, 1,  \frac{5}{3} \end{Bmatrix}\)
                <br />
                    <input type="radio" name="soal4" value="E"/>
                    E. \(\begin{Bmatrix} \displaystyle \frac{5}{6}, 1, \frac{4}{3} \end{Bmatrix}\)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal4" aria-expanded="false" aria-controls="collapsesoal4" disabled>
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal4">
                <div class="card card-body overflow-auto">
                    <p></p>
                <b class="text-end text-danger fw-bold"> <h3>JAWABAN : A</h3></b>
                </div>
                </div>
                <hr />
<!--=======================  soal5 ===================================-->
            <li>Nilai \(x\) yang memenuhi persamaan \((2x-5)^x = (2x-5)^{3x-4} \) adalah . . .</li>
                    <input type="radio" name="soal5" value="A"/>
                    A. \(\{2 \} \)
                <br />
                    <input type="radio" name="soal5" value="B"/>
                    B. \(\{2, \frac{5}{2}, 3 \} \)
                <br />
                    <input type="radio" name="soal5" value="C"/>
                    C. \(\{2,3 \} \)
                <br>
                    <input type="radio" name="soal5" value="D"/>
                    D. \(\{\frac{5}{2}, 2 \} \)
                <br />
                    <input type="radio" name="soal5" value="E"/>
                    E. \(\{\} \)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal5" aria-expanded="false" aria-controls="collapsesoal5" disabled>
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal5">
                <div class="card card-body overflow-auto">
                    <p></p>
                <b class="text-end text-danger fw-bold"> <h3>JAWABAN : C</h3></b>
                </div>
                </div>
                <hr />
<!--=======================  soal6 ===================================-->
            <li>Jumlah semua nilai \(x\) yang memenuhi persamaan \((6x+3)^{4x-2} = (6x+3)^{2x-6} \) adalah . . .</li>
                    <input type="radio" name="soal6" value="A"/>
                    A. \(\displaystyle \frac{5}{3} \)
                <br />
                    <input type="radio" name="soal6" value="B"/>
                    B. \(\displaystyle \frac{3}{5} \)
                <br />
                    <input type="radio" name="soal6" value="C"/>
                    C. \(-2 \)
                <br>
                    <input type="radio" name="soal6" value="D"/>
                    D. \(\displaystyle \frac{1}{3} \)
                <br />
                    <input type="radio" name="soal6" value="E"/>
                    E. \(\displaystyle -\frac{5}{3} \)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal6" aria-expanded="false" aria-controls="collapsesoal6" disabled>
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal6">
                <div class="card card-body overflow-auto">
                    <p></p>
                <b class="text-end text-danger fw-bold"> <h3>JAWABAN : E</h3></b>
                </div>
                </div>
                <hr />
<!--=======================  soal7 ===================================-->
            <li>Nilai \(x\) yang memenuhi persamaan \((x-2)^{2x+3}=(x-2)^{x+1} \) adalah . . .</li>
                    <input type="radio" name="soal7" value="A"/>
                    A. \(\{-2,2 \} \)
                <br />
                    <input type="radio" name="soal7" value="B"/>
                    B. \(\{-2,2,3 \}\)
                <br />
                    <input type="radio" name="soal7" value="C"/>
                    C. \(\{2,3 \}\)
                <br>
                    <input type="radio" name="soal7" value="D"/>
                    D. \(\{-2,3 \} \)
                <br />
                    <input type="radio" name="soal7" value="E"/>
                    E. \(\{-2,0,2,3 \} \)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal7" aria-expanded="false" aria-controls="collapsesoal7" disabled>
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal7">
                <div class="card card-body overflow-auto">
                    <p></p>
                <b class="text-end text-danger fw-bold"> <h3>JAWABAN : B</h3></b>
                </div>
                </div>
                <hr />
<!--=======================  soal8 ===================================-->
                <li>Himpunan penyelesaian dari persamaan \(2^{x+1} = 3^{x-2}\) adalah . . .</li>
                    <input type="radio" name="soal8" value="A"/>
                    A. \(x= \log 2 \log 3 \)
                <br />
                    <input type="radio" name="soal8" value="B"/>
                    B. \(x=\;^{\frac{3}{2}} \log 18 \)
                <br />
                    <input type="radio" name="soal8" value="C"/>
                    C. \(x=\;^{\frac{3}{2}} \log 9 \)
                <br>
                    <input type="radio" name="soal8" value="D"/>
                    D. \(x= ^2 \log 3 \)
                <br />
                    <input type="radio" name="soal8" value="E"/>
                    E. \(x= \log 5 \)
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
                <li>Nilai \(x\) yang memenuhi persamaan \((2x+1)^{x^2-3x-4} = (x+2)^{x^2-3x-4} \) adalah . . .</li>
                    <input type="radio" name="soal9" value="A"/>
                    A. \(\{-1,4\} \)
                <br />
                    <input type="radio" name="soal9" value="B"/>
                    B. \(\{1,4\} \)
                <br />
                    <input type="radio" name="soal9" value="C"/>
                    C. \(\{-1,1,4\} \)
                <br>
                    <input type="radio" name="soal9" value="D"/>
                    D. \(\{-1,1\} \)
                <br />
                    <input type="radio" name="soal9" value="E"/>
                    E. \(\{-1,0,1,4\} \)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal9" aria-expanded="false" aria-controls="collapsesoal9" disabled>
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal9">
                <div class="card card-body overflow-auto">
                    <p></p>
                <b class="text-end text-danger fw-bold"> <h3>JAWABAN : C</h3></b>
                </div>
                </div>
                <hr />
<!--=======================  soal10 ===================================-->
            <li>Nilai \(x\) yang memenuhi persamaan \((3x-2)^{2x+2} = (x+2)^{2x+2} \) adalah . . .</li>
                    <input type="radio" name="soal10" value="A"/>
                    A. \(\{2\} \)
                <br />
                    <input type="radio" name="soal10" value="B"/>
                    B. \(\{-1,2\} \)
                <br />
                    <input type="radio" name="soal10" value="C"/>
                    C. \(\{-2,-1,0\} \)
                <br>
                    <input type="radio" name="soal10" value="D"/>
                    D. \(\{0,1,2\} \)
                <br />
                    <input type="radio" name="soal10" value="E"/>
                    E. \(\{-1,0,2\} \)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal10" aria-expanded="false" aria-controls="collapsesoal10" disabled>
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal10">
                <div class="card card-body overflow-auto">
                    <p></p>
                <b class="text-end text-danger fw-bold"> <h3>JAWABAN : </h3></b>
                </div>
                </div>
                <hr />

            </ol>

{{-- COPY DARI SINI SETIAP SOAL --}}
<input type="hidden" id="materi" name="materi" value="eksponen05">
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
    <a href="/create_eksponen05" id="kirimsaja" class="btn btn-warning btn-bukti d-none" >SIMPAN JAWABAN</a>
</div>
</form>
{{-- COPY SAMPAI SINI --}}

<div id="disqus_thread"></div>

</div>
</div>
</div>
</section>
@endsection

