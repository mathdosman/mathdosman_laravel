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
            EKSPONEN - LATIHAN 04
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
                <p>Persamaan eksponen sederhana maksudnya persamaan yang hanya menyamakan nilai basisnya dan langsung bisa menentukan penyelesaiannya, serta basisnya berbentuk bilangan (bukan fungsi) yang bisa dengan mudah disamakan bentuknya</p>
            <ol>
                <li>Jika \(a^{f(x)}=1 \rightarrow f(x)=0\)</li>
                <li>Jika \(a^{f(x)}=a^p \rightarrow f(x)=p \)</li>
                <li>Jika \(a^{f(x)}=a^{g(x)} \rightarrow f(x)=g(x) \)</li>
                <li>\(p \cdot a^{2f(x)} + q \cdot a^{f(x)} + r = 0 \), cara menyelesaikan persamaan ini dengan teori persamaan kuadrat</li>
            </ol>
            <!-- ============================================================================== -->
            <div class="badge bg-danger text-wrap fs-6" style="width: 8rem"><b> CONTOH 01 </b></div>
            <div class="rounded-2 p-1" style="background-color: rgba(193, 193, 193, 0.933);">Nilai \(x\) yang memenuhi persamaan \(3^{x^2-2x-15} = 1 \) adalah . . .</div>
            <p class="rounded-2 p-1" style="background-color: #f89845;"><b>Penyelesaian :</b> <br>
            \begin{align}
            a^{f(x)} &= 1 \\
            3^{x^2-2x-15} &= 1 \\
            3^{x^2-2x-15} &= 3^0 \\
            x^2 -2x-15 &= 0 \\
            (x-5)(x+3) &= 0
            \end{align}
            \[x=5 \text{ atau } x=-3\]
            Jadi, nilai himpunan penyelesaian persamaan adalah \(\{-3,5 \} \)
            </p>
            <!-- ========================================================================== -->
            <!-- ============================================================================== -->
            <div class="badge bg-danger text-wrap fs-6" style="width: 8rem"><b> CONTOH 02 </b></div>
            <div class="rounded-2 p-1" style="background-color: rgba(193, 193, 193, 0.933);">Nilai \(x\) yang memenuhi persamaan \(2^{x^2-3x+6} = 16 \) adalah . . .</div>
            <p class="rounded-2 p-1" style="background-color: #f89845;"><b>Penyelesaian :</b> <br>
            \begin{align}
            a^{f(x)} &= a^p \\
            2^{x^2-3x+6} &= 16 \\
            2^{x^2-3x+6} &= 2^4 \\
            x^2-3x+6 &= 4 \\
            x^2-3x+6-4 &= 0 \\
            x^2-3x+2 &= 0 \\
            (x-2)(x-1) &= 0
            \end{align}
            \[x=2 \text{ atau } x=1\]
            Jadi, nilai himpunan penyelesaian persamaan adalah \(\{1,2 \} \)
            </p>
            <!-- ========================================================================== -->
            <!-- ============================================================================== -->
            <div class="badge bg-danger text-wrap fs-6" style="width: 8rem"><b> CONTOH 03 </b></div>
            <div class="rounded-2 p-1" style="background-color: rgba(193, 193, 193, 0.933);">Nilai \(x\) yang memenuhi persamaan \(2^{3x-6} = 8^{2x-5} \) adalah . . .</div>
            <p class="rounded-2 p-1" style="background-color: #f89845;"><b>Penyelesaian :</b> <br>
            \begin{align}
            a^{f(x)} &= a^{g(x)} \\
            2^{3x-6} &= 8^{2x-5} \\
            2^{3x-6} &= (2^3)^{2x-5} \\
            2^{3x-6} &= (2)^{6x-15} \\
            3x-6 &= 6x-15 \\
            3x-6x &= 6-15 \\
            -3x &= -9 \\
            x &= \frac{-9}{-3} \\
            x &= 3
            \end{align}
            Jadi, nilai himpunan penyelesaian persamaan adalah \(\{3 \} \)
            </p>
            <!-- ========================================================================== -->

            <!-- ============================================================================== -->
            <div class="badge bg-danger text-wrap fs-6" style="width: 8rem"><b> CONTOH 04 </b></div>
            <div class="rounded-2 p-1" style="background-color: rgba(193, 193, 193, 0.933);">Tentukan penyelesaian dari \(3^{2x} - 10 \cdot 3^x + 9 = 0 \) !</div>
            <p class="rounded-2 p-1" style="background-color: #f89845;"><b>Penyelesaian :</b> <br>
                Pertama ubah bentuk persamaan soal seperti berikut:
                \[(3^x)^2-10 \cdot 3^x + 9 = 0 \]
                dari persamaan tersebut kita misalkan bentuk \(3^x= p\), maka
            \begin{align}
            p^2 - 10p + 9 &= 0 \\
            (p-9)(p-1) &= 0
            \end{align}
            \[p=9 \text{ atau } p=1\]
            Kembalikan nilai \(p\) ke semula yaitu \(3^x\)
            \[\begin{align} p &= 9 \\ 3^x &= 9 \\ 3^x &= 3^2 \\ x &= 2 \end{align} \]
            \[\text{atau}\]
            \[\begin{align} p &= 1 \\ 3^x &= 1 \\ 3^x &= 3^0 \\ x &= 0\end{align} \]
            Jadi, nilai himpunan penyelesaian persamaan adalah \(\{0,2 \} \)
            </p>
            <!-- ========================================================================== -->

        <form name="input-form">
            <h1><b>LATIHAN SOAL</b></h1>
             <ol type="1" class="mt-2">
                @include('konten.00semuamateri.identitas')
                <li>Nilai \(x\) pada persamaan \(\displaystyle 2^{2x+6}=1\) adalah . . .</li>
                    <input type="radio" name="soal1" value="A"/>
                    A. \( -6\)
                <br />
                    <input type="radio" name="soal1" value="B"/>
                    B. \( -3\)
                <br />
                    <input type="radio" name="soal1" value="C"/>
                    C. \( 0\)
                <br>
                    <input type="radio" name="soal1" value="D"/>
                    D. \( 2\)
                <br />
                    <input type="radio" name="soal1" value="E"/>
                    E. \(6 \)
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
            <li>Nilai \(x\) yang memenuhi \( 9^{\frac{x+3}{2} } = \frac{1}{81} \) </li>
                    <input type="radio" name="soal2" value="A"/>
                    A. \( -3\)
                <br />
                    <input type="radio" name="soal2" value="B"/>
                    B. \( -4\)
                <br />
                    <input type="radio" name="soal2" value="C"/>
                    C. \( -5\)
                <br>
                    <input type="radio" name="soal2" value="D"/>
                    D. \( -6\)
                <br />
                    <input type="radio" name="soal2" value="E"/>
                    E. \( -7\)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal2" aria-expanded="false" aria-controls="collapsesoal2" disabled>
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal2">
                <div class="card card-body overflow-auto">
                    <p></p>
                <b class="text-end text-danger fw-bold"> <h3>JAWABAN : E</h3></b>
                </div>
                </div>
                <hr />
<!--=======================  soal3 ===================================-->
            <li>Himpunan penyelesaian dari \(3^{3x-2} = 81 \) adalah . . .</li>
                    <input type="radio" name="soal3" value="A"/>
                    A. \( 0\)
                <br />
                    <input type="radio" name="soal3" value="B"/>
                    B. \(1 \)
                <br />
                    <input type="radio" name="soal3" value="C"/>
                    C. \( 2\)
                <br>
                    <input type="radio" name="soal3" value="D"/>
                    D. \( 3\)
                <br />
                    <input type="radio" name="soal3" value="E"/>
                    E. \( 4\)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal3" aria-expanded="false" aria-controls="collapsesoal3" disabled>
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal3">
                <div class="card card-body overflow-auto">
                    <p></p>
                <b class="text-end text-danger fw-bold"> <h3>JAWABAN : C</h3></b>
                </div>
                </div>
                <hr />
<!--=======================  soal4 ===================================-->
            <li>Nilai \(x\) yang memenuhi \(3^{x+2} = 9^{x-2} \) adalah...</li>
                    <input type="radio" name="soal4" value="A"/>
                    A. \( 2\)
                <br />
                    <input type="radio" name="soal4" value="B"/>
                    B. \( 4\)
                <br />
                    <input type="radio" name="soal4" value="C"/>
                    C. \( 6\)
                <br>
                    <input type="radio" name="soal4" value="D"/>
                    D. \( 8\)
                <br />
                    <input type="radio" name="soal4" value="E"/>
                    E. \( 10\)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal4" aria-expanded="false" aria-controls="collapsesoal4" disabled>
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal4">
                <div class="card card-body overflow-auto">
                    <p></p>
                <b class="text-end text-danger fw-bold"> <h3>JAWABAN : C</h3></b>
                </div>
                </div>
                <hr />
<!--=======================  soal5 ===================================-->
            <li>Tentukan penyelesaian persamaan eksponensial \(2^{x^2 +3x+4 } = 4^{-x-1} \)! </li>
                    <input type="radio" name="soal5" value="A"/>
                    A. \(x= -2 \) atau \(x=-3\)
                <br />
                    <input type="radio" name="soal5" value="B"/>
                    B. \(x= 2 \) atau \(x=-3\)
                <br />
                    <input type="radio" name="soal5" value="C"/>
                    C. \(x= -2 \) atau \(x=3\)
                <br>
                    <input type="radio" name="soal5" value="D"/>
                    D. \(x= 2 \) atau \(x=3\)
                <br />
                    <input type="radio" name="soal5" value="E"/>
                    E.  \(x= -2 \) atau \(x=2\)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal5" aria-expanded="false" aria-controls="collapsesoal5" disabled>
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal5">
                <div class="card card-body overflow-auto">
                    <p></p>
                <b class="text-end text-danger fw-bold"> <h3>JAWABAN : A</h3></b>
                </div>
                </div>
                <hr />
<!--=======================  soal6 ===================================-->
            <li>Nilai \(x\) yang memenuhi persamaan \(3^{2x-3} = 49^{x-\frac{3}{2}} \) adalah . . .</li>
                    <input type="radio" name="soal6" value="A"/>
                    A. \( 2\)
                <br />
                    <input type="radio" name="soal6" value="B"/>
                    B. \( 3\)
                <br />
                    <input type="radio" name="soal6" value="C"/>
                    C. \(\displaystyle \frac{3}{2} \)
                <br>
                    <input type="radio" name="soal6" value="D"/>
                    D. \(\displaystyle \frac{2}{3} \)
                <br />
                    <input type="radio" name="soal6" value="E"/>
                    E. \(\displaystyle -\frac{2}{3} \)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal6" aria-expanded="false" aria-controls="collapsesoal6" disabled>
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal6">
                <div class="card card-body overflow-auto">
                    <p></p>
                <b class="text-end text-danger fw-bold"> <h3>JAWABAN : </h3></b>
                </div>
                </div>
                <hr />
<!--=======================  soal7 ===================================-->
            <li>Nilai \(x\) yang memenuhi persamaan \(2^{3x-1} = 4^{x+1} \) adalah . . .</li>
                    <input type="radio" name="soal7" value="A"/>
                    A. \( 3\)
                <br />
                    <input type="radio" name="soal7" value="B"/>
                    B. \( 4\)
                <br />
                    <input type="radio" name="soal7" value="C"/>
                    C. \( 5\)
                <br>
                    <input type="radio" name="soal7" value="D"/>
                    D. \( 6\)
                <br />
                    <input type="radio" name="soal7" value="E"/>
                    E. \( 7\)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal7" aria-expanded="false" aria-controls="collapsesoal7" disabled>
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal7">
                <div class="card card-body overflow-auto">
                    <p></p>
                <b class="text-end text-danger fw-bold"> <h3>JAWABAN : A</h3></b>
                </div>
                </div>
                <hr />
<!--=======================  soal8 ===================================-->
            <li>Nilai \(x\) yang memenuhi persamaan \(5^{4+x} = 0,2^x \) adalah . . .</li>
                    <input type="radio" name="soal8" value="A"/>
                    A. \(- 5 \)
                <br />
                    <input type="radio" name="soal8" value="B"/>
                    B. \(- 4 \)
                <br />
                    <input type="radio" name="soal8" value="C"/>
                    C. \(- 3 \)
                <br>
                    <input type="radio" name="soal8" value="D"/>
                    D. \(-2  \)
                <br />
                    <input type="radio" name="soal8" value="E"/>
                    E. \(2 \)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal8" aria-expanded="false" aria-controls="collapsesoal8" disabled>
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal8">
                <div class="card card-body overflow-auto">
                    <p></p>
                <b class="text-end text-danger fw-bold"> <h3>JAWABAN : D</h3></b>
                </div>
                </div>
                <hr />
<!--=======================  soal9 ===================================-->
            <li>Nilai \(x\) yang memenuhi persamaan \(\displaystyle \left(\frac{2}{5} \right)^{\frac{1}{2}} = \left(\frac{5}{2} \right)^{x+1} \)  adalah ...</li>
                    <input type="radio" name="soal9" value="A"/>
                    A. \(\displaystyle \frac{3}{2} \)
                <br />
                    <input type="radio" name="soal9" value="B"/>
                    B. \(\displaystyle \frac{1}{2} \)
                <br />
                    <input type="radio" name="soal9" value="C"/>
                    C. \(0 \)
                <br>
                    <input type="radio" name="soal9" value="D"/>
                    D. \(\displaystyle -\frac{1}{2} \)
                <br />
                    <input type="radio" name="soal9" value="E"/>
                    E. \(\displaystyle -\frac{3}{2} \)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal9" aria-expanded="false" aria-controls="collapsesoal9" disabled>
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal9">
                <div class="card card-body overflow-auto">
                    <p></p>
                <b class="text-end text-danger fw-bold"> <h3>JAWABAN : E</h3></b>
                </div>
                </div>
                <hr />
<!--=======================  soal10 ===================================-->
            <li>Persamaan yang ekuivalen dengan persamaan \(8^x = 2^{y+1} \) adalah . . .</li>
                    <input type="radio" name="soal10" value="A"/>
                    A. \(3x-y-1=0 \)
                <br />
                    <input type="radio" name="soal10" value="B"/>
                    B. \(3x-y+1=0 \)
                <br />
                    <input type="radio" name="soal10" value="C"/>
                    C. \(3x+y-1=0 \)
                <br>
                    <input type="radio" name="soal10" value="D"/>
                    D. \(x-3y-1=0 \)
                <br />
                    <input type="radio" name="soal10" value="E"/>
                    E. \(x+3y-1=0 \)
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
<!--=======================  soal11 ===================================-->
            <li>Persamaan kuadrat yang ekuivalen dengan persamaan \(3^{x^2 -5x-3} = 27\) adalah . . .</li>
                    <input type="radio" name="soal11" value="A"/>
                    A. \(x^2 -5x-3=0 \)
                <br />
                    <input type="radio" name="soal11" value="B"/>
                    B. \(x^2 -5x-6 = 0 \)
                <br />
                    <input type="radio" name="soal11" value="C"/>
                    C. \(x^2 -5x = 0 \)
                <br>
                    <input type="radio" name="soal11" value="D"/>
                    D. \(x^2 +5x -6 =0 \)
                <br />
                    <input type="radio" name="soal11" value="E"/>
                    E. \(x^2 +5x-3 = 0 \)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal11" aria-expanded="false" aria-controls="collapsesoal11" disabled>
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal11">
                <div class="card card-body overflow-auto">
                    <p></p>
                <b class="text-end text-danger fw-bold"> <h3>JAWABAN : B</h3></b>
                </div>
                </div>
                <hr />
<!--=======================  soal12 ===================================-->
            <li>Penyelesaian dari persamaan \(\displaystyle 2^{3x-2} = \left(\frac{1}{4} \right)^{x-9} \) adalah . . .</li>
                    <input type="radio" name="soal12" value="A"/>
                    A. \(x=-4 \)
                <br />
                    <input type="radio" name="soal12" value="B"/>
                    B. \(x=-2 \)
                <br />
                    <input type="radio" name="soal12" value="C"/>
                    C. \(x=0 \)
                <br>
                    <input type="radio" name="soal12" value="D"/>
                    D. \(x=2 \)
                <br />
                    <input type="radio" name="soal12" value="E"/>
                    E. \(x=4 \)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal12" aria-expanded="false" aria-controls="collapsesoal12" disabled>
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal12">
                <div class="card card-body overflow-auto">
                    <p></p>
                <b class="text-end text-danger fw-bold"> <h3>JAWABAN : E</h3></b>
                </div>
                </div>
                <hr />
<!--=======================  soal13 ===================================-->
            <li>Nilai \(x\) yang memenuhi persamaan \(\displaystyle 25^{x^2 -5x +7} = \left(\frac{1}{25} \right)^{x-x^2-15} \) adalah ...</li>
                    <input type="radio" name="soal13" value="A"/>
                    A. \(-6 \)
                <br />
                    <input type="radio" name="soal13" value="B"/>
                    B. \( -4\)
                <br />
                    <input type="radio" name="soal13" value="C"/>
                    C. \(-2 \)
                <br>
                    <input type="radio" name="soal13" value="D"/>
                    D. \(4 \)
                <br />
                    <input type="radio" name="soal13" value="E"/>
                    E. \( 6\)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal13" aria-expanded="false" aria-controls="collapsesoal13" disabled>
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal13">
                <div class="card card-body overflow-auto">
                    <p></p>
                <b class="text-end text-danger fw-bold"> <h3>JAWABAN : C</h3></b>
                </div>
                </div>
                <hr />
<!--=======================  soal14 ===================================-->
            <li>Penyelesaian persamaan \(3^{2x+1} = 81^{x-2} \) adalah . . .</li>
                    <input type="radio" name="soal14" value="A"/>
                    A. \(0 \)
                <br />
                    <input type="radio" name="soal14" value="B"/>
                    B. \(4 \)
                <br />
                    <input type="radio" name="soal14" value="C"/>
                    C. \(\displaystyle 4\frac{1}{2} \)
                <br>
                    <input type="radio" name="soal14" value="D"/>
                    D. \(\displaystyle 6 \frac{1}{2} \)
                <br />
                    <input type="radio" name="soal14" value="E"/>
                    E. \(16 \)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal14" aria-expanded="false" aria-controls="collapsesoal14" disabled>
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal14">
                <div class="card card-body overflow-auto">
                    <p></p>
                <b class="text-end text-danger fw-bold"> <h3>JAWABAN : C</h3></b>
                </div>
                </div>
                <hr />
<!--=======================  soal15 ===================================-->
            <li>Tentukan himpunan penyelesaian persamaan \(3^{2x}-4 \times 3^x = -3 \)!</li>
                    <input type="radio" name="soal15" value="A"/>
                    A. \( \{ 1\} \)
                <br />
                    <input type="radio" name="soal15" value="B"/>
                    B. \( \{-1,1\}\)
                <br />
                    <input type="radio" name="soal15" value="C"/>
                    C. \(\{-1,0\} \)
                <br>
                    <input type="radio" name="soal15" value="D"/>
                    D. \(\{0,1\} \)
                <br />
                    <input type="radio" name="soal15" value="E"/>
                    E. \(\{1,2\} \)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal15" aria-expanded="false" aria-controls="collapsesoal15" disabled>
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal15">
                <div class="card card-body overflow-auto">
                    <p></p>
                <b class="text-end text-danger fw-bold"> <h3>JAWABAN : D</h3></b>
                </div>
                </div>
                <hr />

            </ol>

{{-- COPY DARI SINI SETIAP SOAL --}}
<input type="hidden" id="materi" name="materi" value="eksponen04">
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
    <a href="/create_eksponen04" id="kirimsaja" class="btn btn-warning btn-bukti d-none" >SIMPAN JAWABAN</a>
</div>
</form>
{{-- COPY SAMPAI SINI --}}

<div id="disqus_thread"></div>

</div>
</div>
</div>
</section>
@endsection

