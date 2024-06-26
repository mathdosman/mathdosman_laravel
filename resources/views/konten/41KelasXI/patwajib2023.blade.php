@extends('konten.41KelasXI.41.template')
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
            KELAS XI
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
            <h2 class="text-center">PENILAIAN AKHIR TAHUN (PAT) 2023</h2>
            <h3 class="text-center text-danger fw-bold">MATEMATIKA WAJIB</h3>
            <p class="text-center fst-italic"> Math_Dosman</p>
            <hr />
            <p>Berikut merupakan soal Penilaian Akhir Tahun (PAT) tahun 2023 di SMA Negeri 1 Gianyar yang dibuat dalam bentuk 2 paket pilihan ganda, random menggunakan moodle sekolah</p>
            <p>Kelas : XI MIPA/IPS</p>
            <p>Waktu : 90 Menit</p>
            <p>MATEMATIKA WAJIB</p>
            <hr>
<!--=======================  soal01A ===================================-->
<div class="border border-dark p-1" style="background-color:rgb(255, 205, 205);">
    <ol type="1" start="1">
    <li>\(\displaystyle \lim_{x \to 3} \frac{x^3 -x^2 -6x}{x^2-3x} = . . . \) </li>
        <ol type="A">
            <li>\(-5 \)</li>
            <li>\(0 \)</li>
            <li>\( 1\)</li>
            <li>\(5 \)</li>
            <li>\(6 \)</li>
        </ol>
        <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal01a" aria-expanded="false" aria-controls="collapsesoal01a">
        Alternatif Penyelesaian:
        </button>
        <div class="collapse" id="collapsesoal01a">
            <div class="card card-body overflow-auto">
            <p>
                Untuk menyelesaikan limit \(\displaystyle \lim_{x \to 3} \frac{x^3 -x^2 -6x}{x^2-3x}\), kita dapat mencoba untuk menyederhanakan bentuk pecahan terlebih dahulu. Kita dapat membagi setiap suku pada pembilang dan penyebut dengan \(x\), sehingga: $$ \frac{x^3 -x^2 -6x}{x^2-3x} = \frac{x(x^2 -x -6)}{x(x-3)} = \frac{(x-3)x(x+2)}{x(x-3)} $$
                Pada langkah selanjutnya, kita dapat mencoret faktor \(x(x-3)\) pada pembilang dan penyebut, karena tidak menentukan nilai limit pada \(x=3\), sehingga:
                $$ \lim_{x \to 3} \frac{(x-3)x(x+2)}{x(x-3)} = \lim_{x \to 3} (x+2) = 5 $$
                Jadi, limit \(\displaystyle \lim_{x \to 3} \frac{x^3 -x^2 -6x}{x^2-3x}\) memiliki nilai 5.
            </p>
            <b class="text-end text-danger fw-bold"> <h3>JAWABAN : D</h3></b>
            </div>
        </div>
        <hr />
    </ol>
<!-- soal01B -->
    <ol type="1" start="1">
    <li>\(\displaystyle \lim_{x \to 3} \frac{x^3 -5x^2 +6x}{x^2-3x} = . . . \) </li>
        <ol type="A">
            <li>\(-5 \)</li>
            <li>\(0 \)</li>
            <li>\( 1\)</li>
            <li>\(5 \)</li>
            <li>\(6 \)</li>
        </ol>
        <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal01b" aria-expanded="false" aria-controls="collapsesoal01b">
        Alternatif Penyelesaian:
        </button>
        <div class="collapse" id="collapsesoal01b">
            <div class="card card-body overflow-auto">
                <p>Untuk menyelesaikan limit \(\displaystyle \lim_{x \to 3} \frac{x^3 -5x^2 +6x}{x^2-3x}\), kita dapat mencoba untuk menyederhanakan bentuk pecahan terlebih dahulu. Kita dapat membagi setiap suku pada pembilang dan penyebut dengan \(x\), sehingga:

                    $$
                    \frac{x^3 -5x^2 +6x}{x^2-3x} = \frac{x(x^2 -5x +6)}{x(x-3)} = \frac{(x-3)x(x-2)}{x(x-3)}
                    $$

                    Pada langkah selanjutnya, kita dapat mencoret faktor \(x(x-3)\) pada pembilang dan penyebut, karena tidak menentukan nilai limit pada \(x=3\), sehingga:

                    $$
                    \lim_{x \to 3} \frac{(x-3)x(x-2)}{x(x-3)} = \lim_{x \to 3} (x-2) = 1
                    $$

                    Jadi, limit \(\displaystyle \lim_{x \to 3} \frac{x^3 -5x^2 +6x}{x^2-3x}\) memiliki nilai 1.</p>

            <b class="text-end text-danger fw-bold"> <h3>JAWABAN : C</h3></b>
            </div>
        </div>
    </ol>
</div>
<!--=======================  soal02A ===================================-->
<div class="border border-dark mt-3 p-1" style="background-color:rgb(255, 235, 205);">
    <ol type="1" start="2">
        <li>\(\displaystyle \lim_{x \to 2} \frac{2x^2 - x -2}{x^2 +2}=...\)</li>
            <ol type="A">
                <li>\(\displaystyle \frac{2}{3} \)</li>
                <li>\(\displaystyle \frac{3}{2} \)</li>
                <li>\( \displaystyle -\frac{2}{3}\)</li>
                <li>\( 0\)</li>
                <li>\( \infty \)</li>
            </ol>
            <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal02a" aria-expanded="false" aria-controls="collapsesoal02a">
            Alternatif Penyelesaian:
            </button>
            <div class="collapse" id="collapsesoal02a">
                <div class="card card-body overflow-auto">
                <p>Untuk mengevaluasi limit ini, kita dapat langsung memasukkan nilai \(x = 2\) ke dalam persamaan
                    \[\begin{align} \lim_{x \to 2} \frac{2x^2 - x -2}{x^2 +2} &= \frac{2(2)^2 -(2) - 2}{2^2+2} \\
                    &= \frac{2(4)-2-2}{4+2} \\
                    &= \frac{8-4}{6} \\
                    &= \frac{4}{6} \\
                    &= \frac{2}{3} \end{align}\]
                    Oleh karena itu, limit dari persamaan yang diberikan saat \(x\) mendekati \(2\) adalah \(\displaystyle \frac{2}{3}\).
                </p>
                <b class="text-end text-danger fw-bold"> <h3>JAWABAN : A</h3></b>
                </div>
            </div>
            <hr />
        </ol>
        <!-- soal02B -->
        <ol type="1" start="2">
        <li>\(\displaystyle \lim_{x \to 2} \frac{x^2 - 3x -2}{x^2 +2}=...\)</li>
            <ol type="A">
                <li>\(\displaystyle \frac{2}{3} \)</li>
                <li>\(\displaystyle \frac{3}{2} \)</li>
                <li>\( \displaystyle -\frac{2}{3}\)</li>
                <li>\( 0\)</li>
                <li>\( \infty \)</li>
            </ol>
            <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal02b" aria-expanded="false" aria-controls="collapsesoal02b">
            Alternatif Penyelesaian:
            </button>
            <div class="collapse" id="collapsesoal02b">
                <div class="card card-body overflow-auto">
                    <p>Untuk mengevaluasi limit ini, kita dapat langsung memasukkan nilai \(x = 2\) ke dalam persamaan
                        \[\begin{align} \lim_{x \to 2} \frac{x^2 - 3x -2}{x^2 +2} &= \frac{(2)^2 -3(2) - 2}{2^2+2} \\
                        &= \frac{4-6-2}{4+2} \\
                        &= \frac{-4}{6} \\
                        &= -\frac{2}{3} \end{align}\]
                        Oleh karena itu, limit dari persamaan yang diberikan saat \(x\) mendekati \(2\) adalah \(\displaystyle -\frac{2}{3}\). </p>
                <b class="text-end text-danger fw-bold"> <h3>JAWABAN : C</h3></b>
                </div>
            </div>
    </ol>
</div>
<!--=======================  soal03A ===================================-->
<div class="border border-dark mt-3 p-1" style="background-color:rgb(211, 255, 205);">
    <ol type="1" start="3">
        <li>\(\displaystyle \lim_{x \to -2} \frac{x^2 +5x +6}{2x^2 +3x-2}=... \)</li>
            <ol type="A">
                <li>\(\displaystyle -\frac{1}{5}  \)</li>
                <li>\(\displaystyle -\frac{1}{3}  \)</li>
                <li>\(\displaystyle \frac{1}{3}  \)</li>
                <li>\(\displaystyle \frac{1}{5}  \)</li>
                <li>\(\displaystyle \frac{7}{6}  \)</li>
            </ol>
            <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal03a" aria-expanded="false" aria-controls="collapsesoal03a">
            Alternatif Penyelesaian:
            </button>
            <div class="collapse" id="collapsesoal03a">
                <div class="card card-body overflow-auto">
                <p>Untuk mengevaluasi limit ini, kita dapat langsung memasukkan nilai \(x = -2\) ke dalam persamaan, tetapi hal itu akan menghasilkan bentuk yang tidak terdefinisi dari jenis \(\displaystyle \frac{0}{0}\). Untuk mengevaluasi limit seperti itu, kita dapat menggunakan manipulasi aljabar untuk menyederhanakan persamaan.

                    Kita dapat memulai dengan memfaktorkan pembilang dan penyebut persamaan:

                    \[\frac{x^2 +5x +6}{2x^2 +3x-2} = \frac{(x+2)(x+3)}{(2x-1)(x+2)}\]

                    Kita sekarang dapat membatalkan faktor bersama dari \((x+2)\) pada pembilang dan penyebut, sehingga diperoleh:

                    \[\lim_{x \to -2} \frac{x^2 +5x +6}{2x^2 +3x-2} = \lim_{x \to -2} \frac{x+3}{2x-1}\]

                    Sekarang kita dapat memasukkan nilai \(x = -2\) langsung ke dalam persamaan yang disederhanakan untuk mendapatkan:

                    \[\lim_{x \to -2} \frac{x+3}{2x-1} = \frac{-2+3}{2(-2)-1} = \frac{1}{-5} = -\frac{1}{5}\]

                    Oleh karena itu, limit dari persamaan yang diberikan saat \(x\) mendekati \(-2\) adalah \(\displaystyle -\frac{1}{5}\).</p>
                <b class="text-end text-danger fw-bold"> <h3>JAWABAN : A</h3></b>
                </div>
            </div>
        <hr />
    </ol>
    <!-- Soal03B -->
    <ol type="1" start="3">
        <li>\(\displaystyle \lim_{x \to -2} \frac{2x^2 +x -6}{x^2 -2x-8}=... \)</li>
            <ol type="A">
                <li>\(\displaystyle -\frac{1}{5}  \)</li>
                <li>\(\displaystyle -\frac{1}{3}  \)</li>
                <li>\(\displaystyle \frac{1}{3}  \)</li>
                <li>\(\displaystyle \frac{1}{5}  \)</li>
                <li>\(\displaystyle \frac{7}{6}  \)</li>
            </ol>
            <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal03B" aria-expanded="false" aria-controls="collapsesoal03B">
            Alternatif Penyelesaian:
            </button>
            <div class="collapse" id="collapsesoal03B">
                <div class="card card-body overflow-auto">
                <p>Untuk menyelesaikan limit ini, kita dapat menggunakan teknik yang serupa dengan soal sebelumnya:

                    Pertama, kita faktorkan pembilang dan penyebut persamaan:

                    \[\frac{2x^2 +x -6}{x^2 -2x-8} = \frac{(2x-3)(x+2)}{(x-4)(x+2)}\]

                    Kita dapat membatalkan faktor bersama dari \(x+2\) pada pembilang dan penyebut, sehingga diperoleh:

                    \[\lim_{x \to -2} \frac{2x^2 +x -6}{x^2 -2x-8} = \lim_{x \to -2} \frac{2x-3}{x-4}\]

                    Sekarang kita dapat memasukkan nilai \(x = -2\) langsung ke dalam persamaan yang disederhanakan untuk mendapatkan:

                    \[\lim_{x \to -2} \frac{2x-3}{x-4} = \frac{2(-2)-3}{-2-4} = \frac{-7}{-6} = \frac{7}{6}\]

                    Oleh karena itu, limit dari persamaan yang diberikan saat \(x\) mendekati \(-2\) adalah \(\displaystyle \frac{7}{6}\).</p>
                <b class="text-end text-danger fw-bold"> <h3>JAWABAN : E</h3></b>
                </div>
            </div>
    </ol>
</div>
<!-- ======================== SOAL04A ++++++++++++++++++++++++++ -->
<div class="border border-dark mt-3 p-1" style="background-color:rgb(168, 230, 244);">
<ol type="1" start="4">
    <li>Hasil dari \(\displaystyle \lim_{x \to 2} \frac{x^3 -8}{x^2 -4}=... \)</li>
    <ol type="A">
        <li>\(0 \)</li>
        <li>\(3 \)</li>
        <li>\(6 \)</li>
        <li>\(\displaystyle \frac{9}{2}  \)</li>
        <li>\(\displaystyle \frac{7}{2}  \)</li>
    </ol>
    <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal04A" aria-expanded="false" aria-controls="collapsesoal04A">
    Alternatif Penyelesaian:
    </button>
    <div class="collapse" id="collapsesoal04A">
        <div class="card card-body overflow-auto">
        <p>Untuk menyelesaikan limit tersebut, kita dapat menggunakan teknik faktorisasi dan penyederhanaan. Pertama-tama, kita faktorkan pembilang dan penyebut dengan menggunakan identitas perbedaan dua kubik, yaitu:

            \begin{align*}
            x^3 - 8 &= (x-2)(x^2 + 2x + 4) \\
            x^2 - 4 &= (x-2)(x+2)
            \end{align*}

            Kita kemudian dapat menyederhanakan pecahan dengan membagi setiap faktor di pembilang dan penyebut dengan \((x-2)\), sehingga:

            \begin{align*}
            \frac{x^3 - 8}{x^2 - 4} &= \frac{(x-2)(x^2 + 2x + 4)}{(x-2)(x+2)} \\
            &= \frac{x^2 + 2x + 4}{x+2}
            \end{align*}

            Sekarang kita dapat mencari nilai limit tersebut dengan mengganti \(x\) dengan nilai mendekati 2, sehingga:

            \begin{align*}
            \lim_{x \to 2} \frac{x^3 -8}{x^2 -4} &= \lim_{x \to 2} \frac{x^2 + 2x + 4}{x+2} \\
            &= \frac{2^2 + 2\times 2 + 4}{2+2} \\
            &= \frac{12}{4} \\
            &= 3
            \end{align*}

            Jadi, hasil dari limit tersebut adalah 3.</p>
        <b class="text-end text-danger fw-bold"> <h3>JAWABAN : B</h3></b>
        </div>
    </div>
    <hr>
</ol>
<!-- Soal04B -->
<ol type="1" start="4">
    <li>Hasil dari \(\displaystyle \lim_{x \to 3} \frac{x^3 -27}{x^2 -9}=... \)</li>
    <ol type="A">
        <li>\(0 \)</li>
        <li>\(3 \)</li>
        <li>\(6 \)</li>
        <li>\(\displaystyle \frac{9}{2}  \)</li>
        <li>\(\displaystyle \frac{7}{2}  \)</li>
    </ol>
    <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal04B" aria-expanded="false" aria-controls="collapsesoal04B">
    Alternatif Penyelesaian:
    </button>
    <div class="collapse" id="collapsesoal04B">
        <div class="card card-body overflow-auto">
        <p>Untuk menyelesaikan limit tersebut, kita dapat menggunakan teknik faktorisasi dan penyederhanaan. Pertama-tama, kita faktorkan pembilang dan penyebut dengan menggunakan identitas perbedaan dua kubik dan perbedaan dua kuadrat, yaitu:

            \begin{align*}
            x^3 - 27 &= (x-3)(x^2 + 3x + 9) \\
            x^2 - 9 &= (x-3)(x+3)
            \end{align*}

            Kita kemudian dapat menyederhanakan pecahan dengan membagi setiap faktor di pembilang dan penyebut dengan \((x-3)\), sehingga:

            \begin{align*}
            \frac{x^3 - 27}{x^2 - 9} &= \frac{(x-3)(x^2 + 3x + 9)}{(x-3)(x+3)} \\
            &= \frac{x^2 + 3x + 9}{x+3}
            \end{align*}

            Sekarang kita dapat mencari nilai limit tersebut dengan mengganti \(x\) dengan nilai mendekati 3, sehingga:

            \begin{align*}
            \lim_{x \to 3} \frac{x^3 -27}{x^2 -9} &= \lim_{x \to 3} \frac{x^2 + 3x + 9}{x+3} \\
            &= \frac{3^2 + 3\times 3 + 9}{3+3} \\
            &= \frac{27}{6} \\
            &= \frac{9}{2}
            \end{align*}

            Jadi, hasil dari limit tersebut adalah \(\displaystyle \frac{9}{2}\).</p>
        <b class="text-end text-danger fw-bold"> <h3>JAWABAN : D</h3></b>
        </div>
    </div>
</ol>
</div>


<!--=======================  soal05A ===================================-->
<div class="border border-dark mt-3 p-1" style="background-color:rgb(218, 205, 255);">
    <ol type="1" start="5">
        <li>Diketahui \(f(x)=\left\{\begin{matrix} x^2-1, \: \text{untuk } x < -2 \\ -2x-1 \text{untuk } x > -2 \end{matrix}\right.\). Nilai \(\displaystyle \lim_{x \to -2} f(x)=...\)</li>
        <ol type="A">
            <li>\(-5 \)</li>
            <li>\(-3\)</li>
            <li>\(0\)</li>
            <li>\(3\)</li>
            <li>\(5\)</li>
        </ol>
        <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal05A" aria-expanded="false" aria-controls="collapsesoal05A">
        Alternatif Penyelesaian:
        </button>
        <div class="collapse" id="collapsesoal05A">
            <div class="card card-body overflow-auto">
                <p>Untuk menentukan nilai limit \(\displaystyle \lim_{x \to -2} f(x)\), kita perlu menentukan nilai \(f(x)\) untuk \(x\) mendekati \(-2\) dari kedua arah.

                    Untuk \(x\) mendekati \(-2\) dari sebelah kiri, yaitu \(x < -2\), maka fungsi \(f(x)\) akan memiliki rumus \(f(x) = x^2 - 1\). Maka, nilai limit tersebut adalah:

                    \begin{align*}
                    \lim_{x \to -2^-} f(x) &= \lim_{x \to -2^-} (x^2 - 1) \\
                    &= (-2)^2 - 1 \\
                    &= 3
                    \end{align*}

                    Untuk \(x\) mendekati \(-2\) dari sebelah kanan, yaitu \(x > -2\), maka fungsi \(f(x)\) akan memiliki rumus \(f(x) = -2x - 1\). Maka, nilai limit tersebut adalah:

                    \begin{align*}
                    \lim_{x \to -2^+} f(x) &= \lim_{x \to -2^+} (-2x - 1) \\
                    &= (-2)(-2) - 1 \\
                    &= 3
                    \end{align*}

                    Karena kedua nilai limit tersebut sama-sama bernilai \(3\), maka nilai limit \(\displaystyle \lim_{x \to -2} f(x)\) adalah \(3\).</p>
            <b class="text-end text-danger fw-bold"> <h3>JAWABAN : D</h3></b>
            </div>
        </div>
        <hr />
    </ol>
    <!-- soal05B -->
    <ol type="1" start="5">
        <li>Diketahui \(f(x)=\left\{\begin{matrix} x^2+1, \: \text{untuk } x < -2 \\ -3x-1 \text{untuk } x > -2 \end{matrix}\right.\). Nilai \(\displaystyle \lim_{x \to -2} f(x)=...\)</li>
        <ol type="A">
            <li>\(-5 \)</li>
            <li>\(-3\)</li>
            <li>\(0\)</li>
            <li>\(3\)</li>
            <li>\(5\)</li>
        </ol>
        <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal05B" aria-expanded="false" aria-controls="collapsesoal05B">
        Alternatif Penyelesaian:
        </button>
        <div class="collapse" id="collapsesoal05B">
            <div class="card card-body overflow-auto">
                <p>Untuk menentukan nilai limit \(\displaystyle \lim_{x \to -2} f(x)\), kita perlu menentukan nilai \(f(x)\) untuk \(x\) mendekati \(-2\) dari kedua arah.

                    Untuk \(x\) mendekati \(-2\) dari sebelah kiri, yaitu \(x < -2\), maka fungsi \(f(x)\) akan memiliki rumus \(f(x) = x^2 + 1\). Maka, nilai limit tersebut adalah:

                    \begin{align*}
                    \lim_{x \to -2^-} f(x) &= \lim_{x \to -2^-} (x^2 + 1) \\
                    &= (-2)^2 + 1 \\
                    &= 5
                    \end{align*}

                    Untuk \(x\) mendekati \(-2\) dari sebelah kanan, yaitu \(x > -2\), maka fungsi \(f(x)\) akan memiliki rumus \(f(x) = -3x - 1\). Maka, nilai limit tersebut adalah:

                    \begin{align*}
                    \lim_{x \to -2^+} f(x) &= \lim_{x \to -2^+} (-3x - 1) \\
                    &= (-3)(-2) - 1 \\
                    &= 6 -1 \\
                    &= 5
                    \end{align*}

                    Karena kedua nilai limit tersebut sama-sama bernilai \(5\), maka nilai limit \(\displaystyle \lim_{x \to -2} f(x)\) adalah \(5\).</p>
            <b class="text-end text-danger fw-bold"> <h3>JAWABAN : D</h3></b>
            </div>
        </div>
    </ol>
    </div>
    <!-- SOAL end -->
    <!--=======================  soal06A ===================================-->
    <div class="border border-dark mt-3 p-1" style="background-color:rgb(255, 205, 239);">
    <ol type="1" start="6">
        <li>Diketahui \(\displaystyle \lim_{x \to a} f(x) = p \). Nilai \(\displaystyle \lim_{x \to a} \left((f(x)+1)^2 - 3f(x)\right)\) adalah . . .</li>
        <ol type="A">
            <li>\(p^2+5p+1 \)</li>
            <li>\(p^2-p+3 \)</li>
            <li>\(p^2-p+1 \)</li>
            <li>\(p^2+p+1 \)</li>
            <li>\(p^2+p+3 \)</li>
        </ol>
        <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal06A" aria-expanded="false" aria-controls="collapsesoal06A">
        Alternatif Penyelesaian:
        </button>
        <div class="collapse" id="collapsesoal06A">
            <div class="card card-body overflow-auto">
                <p>\(\displaystyle \begin{align}
                    \lim_{x \to a} (f(x)+1)^2 - 3f(x) &= \lim_{x \to a} \left( f^{2}(x) +2f(x) +1 \right) -3f(x) \\
                    &= \lim_{x \to a} f^{2}(x) + 2\lim_{x \to a} f(x) + \lim_{x \to a} 1 - 3\lim_{x \to a} f(x) \\
                    &= (\lim_{x \to a} f(x))^2 - \lim_{x \to a} f(x) + 1 \\
                    &= p^2 -p +1
                    \end{align}\)</p>
            <b class="text-end text-danger fw-bold"> <h3>JAWABAN : C</h3></b>
            </div>
        </div>
        <hr />
    </ol>
    <!-- 06B -->
    <ol type="1" start="6">
        <li>Diketahui \(\displaystyle \lim_{x \to a} f(x) = p \). Nilai \(\displaystyle \lim_{x \to a} \left((f(x)+1)^2 + 3f(x)\right)\) adalah . . .</li>
        <ol type="A">
            <li>\(p^2+5p+1 \)</li>
            <li>\(p^2-p+3 \)</li>
            <li>\(p^2-p+1 \)</li>
            <li>\(p^2+p+1 \)</li>
            <li>\(p^2+p+3 \)</li>
        </ol>
        <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal06B" aria-expanded="false" aria-controls="collapsesoal06B">
        Alternatif Penyelesaian:
        </button>
        <div class="collapse" id="collapsesoal06B">
            <div class="card card-body overflow-auto">
                <p>\(\displaystyle \begin{align}
                    \lim_{x \to a} (f(x)+1)^2 + 3f(x) &= \lim_{x \to a} \left( f^{2}(x) +2f(x) +1 \right) +3f(x) \\
                    &= \lim_{x \to a} f^{2}(x) + 2\lim_{x \to a} f(x) + \lim_{x \to a} 1 + 3\lim_{x \to a} f(x) \\
                    &= (\lim_{x \to a} f(x))^2 +5 \lim_{x \to a} f(x) + 1 \\
                    &= p^2 +5p +1
                    \end{align}\)</p>
            <b class="text-end text-danger fw-bold"> <h3>JAWABAN : A</h3></b>
            </div>
        </div>
    </ol>
    </div>
    <!-- SOAL end -->
    <!--=======================  soal07 ===================================-->
    <div class="border border-dark mt-3 p-1" style="background-color:rgb(241, 183, 183);">
    <ol type="1" start="7">
        <li>\(\displaystyle \lim_{x \to 0} \frac{x}{\sqrt{1+6x}-\sqrt{1-6x}}=... \)</li>
        <ol type="A">
            <li>\(\displaystyle \frac{1}{6} \)</li>
            <li>\(\displaystyle \frac{5}{6}\)</li>
            <li>\(\displaystyle \frac{1}{5}\)</li>
            <li>\(\displaystyle \frac{2}{5}\)</li>
            <li>\(\displaystyle \frac{3}{5}\)</li>
        </ol>
        <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal07A" aria-expanded="false" aria-controls="collapsesoal07A">
        Alternatif Penyelesaian:
        </button>
        <div class="collapse" id="collapsesoal07A">
            <div class="card card-body overflow-auto">
                <p>

                    Untuk menyelesaikan masalah ini, kita dapat menggunakan teknik penjumlahan dan pengurangan pangkat dua untuk mencari nilai dari penyebut pecahan. Dengan demikian, kita dapat menyelesaikan pembatasnya.

                    Mari kita mulai dengan menyederhanakan penyebut pecahan:

                    \begin{align*}
                    \sqrt{1+6x}-\sqrt{1-6x} &= \left(\sqrt{1+6x}-\sqrt{1-6x}\right)\cdot \frac{\sqrt{1+6x}+\sqrt{1-6x}}{\sqrt{1+6x}+\sqrt{1-6x}}\\
                    &= \frac{(1+6x)-(1-6x)}{\sqrt{1+6x}+\sqrt{1-6x}}\\
                    &= \frac{12x}{\sqrt{1+6x}+\sqrt{1-6x}}
                    \end{align*}

                    Kita dapat mengganti penyebut pecahan di awal dengan hasil yang baru kita dapatkan.

                    \begin{align*}
                    \lim_{x \to 0} \frac{x}{\sqrt{1+6x}-\sqrt{1-6x}} &= \lim_{x \to 0} \frac{x}{\frac{12x}{\sqrt{1+6x}+\sqrt{1-6x}}}\\
                    &= \lim_{x \to 0} \frac{x\cdot (\sqrt{1+6x}+\sqrt{1-6x})}{12x}\\
                    &= \frac{1}{12} \lim_{x \to 0} (\sqrt{1+6x}+\sqrt{1-6x})\\
                    &= \frac{1}{12}(\sqrt{1+6 \cdot 0}+\sqrt{1-6 \cdot 0})\\
                    &= \frac{1}{12}(2)\\
                    &= \frac{1}{6}
                    \end{align*}

                    Sehingga, \(\displaystyle \lim_{x \to 0} \frac{x}{\sqrt{1+6x}-\sqrt{1-6x}}=\frac{1}{6}.\)</p>
            <b class="text-end text-danger fw-bold"> <h3>JAWABAN : A</h3></b>
            </div>
        </div>
        <hr />
    </ol>
    <ol type="1" start="7">
        <li>\(\displaystyle \lim_{x \to 0} \frac{x}{\sqrt{1+5x}-\sqrt{1-5x}}=... \)</li>
        <ol type="A">
            <li>\(\displaystyle \frac{1}{6} \)</li>
            <li>\(\displaystyle \frac{5}{6}\)</li>5
            <li>\(\displaystyle \frac{1}{5}\)</li>
            <li>\(\displaystyle \frac{2}{5}\)</li>
            <li>\(\displaystyle \frac{3}{5}\)</li>
        </ol>
        <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal07B" aria-expanded="false" aria-controls="collapsesoal07B">
        Alternatif Penyelesaian:
        </button>
        <div class="collapse" id="collapsesoal07B">
            <div class="card card-body overflow-auto">
                <p>

                    Untuk menyelesaikan masalah ini, kita dapat menggunakan teknik penjumlahan dan pengurangan pangkat dua untuk mencari nilai dari penyebut pecahan. Dengan demikian, kita dapat menyelesaikan pembatasnya.

                    Mari kita mulai dengan menyederhanakan penyebut pecahan:

                    \begin{align*}
                    \sqrt{1+5x}-\sqrt{1-5x} &= \left(\sqrt{1+5x}-\sqrt{1-5x}\right)\cdot \frac{\sqrt{1+5x}+\sqrt{1-5x}}{\sqrt{1+5x}+\sqrt{1-5x}}\\
                    &= \frac{(1+5x)-(1-5x)}{\sqrt{1+5x}+\sqrt{1-5x}}\\
                    &= \frac{10x}{\sqrt{1+5x}+\sqrt{1-5x}}
                    \end{align*}

                    Kita dapat mengganti penyebut pecahan di awal dengan hasil yang baru kita dapatkan.

                    \begin{align*}
                    \lim_{x \to 0} \frac{x}{\sqrt{1+5x}-\sqrt{1-5x}} &= \lim_{x \to 0} \frac{x}{\frac{10x}{\sqrt{1+5x}+\sqrt{1-5x}}}\\
                    &= \lim_{x \to 0} \frac{x\cdot (\sqrt{1+5x}+\sqrt{1-5x})}{10x}\\
                    &= \frac{1}{10} \lim_{x \to 0} (\sqrt{1+5x}+\sqrt{1-5x})\\
                    &= \frac{1}{10}(\sqrt{1+5 \cdot 0}+\sqrt{1-5 \cdot 0})\\
                    &= \frac{1}{10}(2)\\
                    &= \frac{1}{5}
                    \end{align*}

                    Sehingga, \(\displaystyle \lim_{x \to 0} \frac{x}{\sqrt{1+5x}-\sqrt{1-5x}}=\frac{1}{5}.\)</p>
            <b class="text-end text-danger fw-bold"> <h3>JAWABAN : C</h3></b>
            </div>
        </div>
    </ol>
    </div>
    <!-- SOAL end -->
<!--=======================  soal08A ===================================-->
<div class="border border-dark mt-3 p-1" style="background-color:rgb(255, 205, 205);">
<ol type="1" start="8">
    <li>\(\displaystyle \lim_{x \to 1} \left(\frac{1}{x-1}- \frac{2}{x^2-1} \right)=...\)</li>
        <ol type="A">
            <li>\(0 \)</li>
            <li>\(\displaystyle \frac{1}{2} \)</li>
            <li>\(1 \)</li>
            <li>\(\displaystyle 1 \frac{1}{2} \)</li>
            <li>\(\displaystyle \frac{1}{4} \)</li>
        </ol>
        <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal08A" aria-expanded="false" aria-controls="collapsesoal08A">
        Alternatif Penyelesaian:
        </button>
        <div class="collapse" id="collapsesoal08A">
            <div class="card card-body overflow-auto">
            <p>

                Untuk menyelesaikan masalah ini, kita perlu mencari aturan dasar dari pembagian dan faktorisasi polinomial.

                Mari kita faktorkan penyebut pecahan kedua.

                \begin{align*}
                \frac{2}{x^2-1} &= \frac{2}{(x+1)(x-1)}\\
                &= \frac{1}{x-1}-\frac{1}{x+1}
                \end{align*}

                Sekarang kita dapat menyederhanakan persamaan awal:

                \begin{align*}
                \lim_{x \to 1} \left(\frac{1}{x-1}- \frac{2}{x^2-1} \right) &= \lim_{x \to 1} \left(\frac{1}{x-1}- \left(\frac{1}{x-1}-\frac{1}{x+1} \right)\right)\\
                &= \lim_{x \to 1} \frac{1}{x+1}\\
                &= \frac{1}{2}
                \end{align*}

                Jadi, \(\displaystyle \lim_{x \to 1} \left(\frac{1}{x-1}- \frac{2}{x^2-1} \right)=\frac{1}{2}.\)</p>
            <b class="text-end text-danger fw-bold"> <h3>JAWABAN : B</h3></b>
            </div>
        </div>
        <hr />
</ol>
<!-- +++++++ 08B   ++++++++ -->
<ol type="1" start="8">
    <li>\(\displaystyle \lim_{x \to 2} \left(\frac{1}{x-2}- \frac{4}{x^2-4} \right)=...\)</li>
        <ol type="A">
            <li>\(0 \)</li>
            <li>\(\displaystyle \frac{1}{2} \)</li>
            <li>\(1 \)</li>
            <li>\(\displaystyle 1 \frac{1}{2} \)</li>
            <li>\(\displaystyle \frac{1}{4} \)</li>
        </ol>
        <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal08B" aria-expanded="false" aria-controls="collapsesoal08B">
        Alternatif Penyelesaian:
        </button>
        <div class="collapse" id="collapsesoal08B">
            <div class="card card-body overflow-auto">
            <p>

                Untuk menyelesaikan masalah ini, kita perlu mencari aturan dasar pembagian dan faktorisasi polinomial.

                Mari kita faktorkan penyebut pecahan kedua.

                \begin{align*}
                \frac{4}{x^2-4} &= \frac{4}{(x+2)(x-2)}\\
                &= \frac{1}{x-2}-\frac{1}{x+2}
                \end{align*}

                Sekarang kita dapat menyederhanakan persamaan awal:

                \begin{align*}
                \lim_{x \to 2} \left(\frac{1}{x-2}- \frac{4}{x^2-4} \right) &= \lim_{x \to 2} \left(\frac{1}{x-2}- \left(\frac{1}{x-2}-\frac{1}{x+2} \right)\right)\\
                &= \lim_{x \to 2} \frac{1}{x+2}\\
                &= \frac{1}{4}
                \end{align*}

                Jadi, \(\displaystyle \lim_{x \to 2} \left(\frac{1}{x-2}- \frac{4}{x^2-4} \right)=\frac{1}{4}.\)</p>
            <b class="text-end text-danger fw-bold"> <h3>JAWABAN : E</h3></b>
            </div>
        </div>
</ol>

</div>
<!--=======================  soal09A ===================================-->
<div class="border border-dark mt-3 p-1" style="background-color:rgb(255, 235, 205);">
<ol type="1" start="9">
    <li>\(\displaystyle \lim_{x \to 1} \frac{(x-1)(\sqrt{x}+1)}{\sqrt{x}-1} =... \)</li>
        <ol type="A">
            <li>\(0 \)</li>
            <li>\(1 \)</li>
            <li>\(2  \)</li>
            <li>\( 4 \)</li>
            <li>\( 8 \)</li>
        </ol>
        <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal09A" aria-expanded="false" aria-controls="collapsesoal09A">
        Alternatif Penyelesaian:
        </button>
        <div class="collapse" id="collapsesoal09A">
            <div class="card card-body overflow-auto">
            <p>Seperti sebelumnya, kita dapat menyederhanakan pecahan di penyebut dengan mengalikan dan membagi dengan faktor konjugat, \(\sqrt{x}+1\).

                \begin{align*}
                \frac{(x-1)(\sqrt{x}+1)}{\sqrt{x}-1} &= \frac{(x-1)(\sqrt{x}+1)}{\sqrt{x}-1} \cdot \frac{\sqrt{x}+1}{\sqrt{x}+1}\\
                &=\frac{(x-1)(\sqrt{x}+1)(\sqrt{x}+1)}{x-1}\\
                &= (\sqrt{x}+1)^2
                \end{align*}

                Sekarang kita dapat menyelesaikan limit:

                \begin{align*}
                \lim_{x \to 1} (\sqrt{x}+1)^2 &= (\sqrt{1}+1)^2\\
                &= 2^2\\
                &= 4
                \end{align*}

                Jadi, \(\displaystyle \lim_{x \to 1} \frac{(x-1)(\sqrt{x}+1)}{\sqrt{x}-1}=4\)</p>
            <b class="text-end text-danger fw-bold"> <h3>JAWABAN : D</h3></b>
            </div>
        </div>
        <hr />
</ol>
<!-- ######## 09B ##### -->
<ol type="1" start="9">
    <li>\(\displaystyle \lim_{x \to 1} \frac{(x-1)(\sqrt{x}+3)}{\sqrt{x}-1} =... \)</li>
        <ol type="A">
            <li>\(0 \)</li>
            <li>\(1 \)</li>
            <li>\(2  \)</li>
            <li>\( 4 \)</li>
            <li>\( 8 \)</li>
        </ol>
        <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal09B" aria-expanded="false" aria-controls="collapsesoal09B">
        Alternatif Penyelesaian:
        </button>
        <div class="collapse" id="collapsesoal09B">
            <div class="card card-body overflow-auto">
            <p>Dengan cara yang sama, kita dapat menyederhanakan pecahan di penyebut dengan mengalikan dan membagi dengan faktor konjugat, \(\sqrt{x}+1\).

                \begin{align*}
                \frac{(x-1)(\sqrt{x}+3)}{\sqrt{x}-1} &= \frac{(x-1)(\sqrt{x}+3)}{\sqrt{x}-1} \cdot \frac{\sqrt{x}+1}{\sqrt{x}+1}\\
                &=\frac{(x-1)(\sqrt{x}+3)(\sqrt{x}+1)}{x-1}\\
                &= (\sqrt{x}+3)(\sqrt{x}+1)
                \end{align*}

                Sekarang kita dapat menyelesaikan limit:

                \begin{align*}
                \lim_{x \to 1} (\sqrt{x}+3)(\sqrt{x}+1) &= (\sqrt{1}+3)(\sqrt{1}+1)\\
                &= 4 \cdot 2\\
                &= 8
                \end{align*}

                Jadi, \(\displaystyle \lim_{x \to 1} \frac{(x-1)(\sqrt{x}+3)}{\sqrt{x}-1}=8.\)</p>
            <b class="text-end text-danger fw-bold"> <h3>JAWABAN : E</h3></b>
            </div>
        </div>
</ol>
</div>
<!--=======================  soal10 ===================================-->
<div class="border border-dark mt-3 p-1" style="background-color:rgb(211, 255, 205);">
<ol type="1" start="10">
    <li>\(\displaystyle \lim_{x \to 0} \frac{3-\sqrt{9-2x}}{x}=... \)</li>
        <ol type="A">
            <li>\(3 \)</li>
            <li>\(\displaystyle -\frac{1}{3} \)</li>
            <li>\(\displaystyle \frac{1}{3} \)</li>
            <li>\(0 \)</li>
            <li>\(\infty  \)</li>
        </ol>
        <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal10A" aria-expanded="false" aria-controls="collapsesoal10A">
        Alternatif Penyelesaian:
        </button>
        <div class="collapse" id="collapsesoal10A">
            <div class="card card-body overflow-auto">
            <p>Untuk menyelesaikan limit ini, kita dapat mengalikan dan membagi pecahan dengan faktor konjugat dari \(\sqrt{9-2x}-3\), yaitu \(\sqrt{9-2x}+3\).

                \begin{align*}
                \lim_{x \to 0} \frac{3-\sqrt{9-2x}}{x} &= \lim_{x \to 0} \frac{3-\sqrt{9-2x}}{x} \cdot \frac{(3+\sqrt{9-2x})}{(3+\sqrt{9-2x})} \\
                &= \lim_{x \to 0} \frac{9 - (9-2x)}{x(3+\sqrt{9-2x})} \\
                &= \lim_{x \to 0} \frac{2x}{x(3+\sqrt{9-2x})} \\
                &= \lim_{x \to 0} \frac{2}{3+\sqrt{9-2x}} \\
                &= \frac{2}{3+\sqrt{9}} \\
                &= \frac{2}{6} \\
                &= \frac{1}{3}
                \end{align*}

                Jadi, \(\displaystyle \lim_{x \to 0} \frac{3-\sqrt{9-2x}}{x} = \frac{1}{3}\).</p>
            <b class="text-end text-danger fw-bold"> <h3>JAWABAN : C</h3></b>
            </div>
        </div>
        <hr />
</ol>
<!-- ##### 10B ###### -->
<ol type="1" start="10">
    <li>\(\displaystyle \lim_{x \to 0} \frac{\sqrt{9-2x}-3}{x}=... \)</li>
        <ol type="A">
            <li>\(3 \)</li>
            <li>\(\displaystyle -\frac{1}{3} \)</li>
            <li>\(\displaystyle \frac{1}{3} \)</li>
            <li>\(0 \)</li>
            <li>\(\infty  \)</li>
        </ol>
        <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal10B" aria-expanded="false" aria-controls="collapsesoal10B">
        Alternatif Penyelesaian:
        </button>
        <div class="collapse" id="collapsesoal10B">
            <div class="card card-body overflow-auto">
            <p>

                Kita dapat menyederhanakan pecahan dengan mengalikan dan membagi dengan faktor konjugat, yaitu \(\sqrt{9-2x}+3\).

                \begin{align*}
                \lim_{x \to 0} \frac{\sqrt{9-2x}-3}{x} &= \lim_{x \to 0} \frac{(\sqrt{9-2x}-3)}{x} \cdot \frac{(\sqrt{9-2x}+3)}{(\sqrt{9-2x}+3)}\\
                &= \lim_{x \to 0} \frac{(9-2x)-9}{x(\sqrt{9-2x}+3)} \\
                &= \lim_{x \to 0} \frac{-2x}{x(\sqrt{9-2x}+3)} \\
                &= \lim_{x \to 0} \frac{-2}{\sqrt{9-2x}+3} \\
                &= \frac{-2}{\sqrt{9}+3} \\
                &= \frac{-2}{6} \\
                &= -\frac{1}{3}
                \end{align*}

                Jadi, \(\displaystyle \lim_{x \to 0} \frac{\sqrt{9-2x}-3}{x} = -\frac{1}{3}\).</p>
            <b class="text-end text-danger fw-bold"> <h3>JAWABAN : B</h3></b>
            </div>
        </div>
</ol>
</div>

<!--=======================  soal11A ===================================-->
<div class="border border-dark mt-3 p-1" style="background-color:rgb(168, 230, 244);">
<ol type="1" start="11">
    <li>Apabila \(\displaystyle f(x)= x^2 -\frac{1}{x} +1 \), maka \(f'(x)\) adalah . . .</li>
        <ol type="A">
            <li>\( x-x^{-2} \)</li>
            <li>\( x+x^{-2} \)</li>
            <li>\(2x-x^{-2}+1 \)</li>
            <li>\(2x-x^{-2} \)</li>
            <li>\( 2x + x^{-2}\)</li>
        </ol>
        <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal11A" aria-expanded="false" aria-controls="collapsesoal11A">
        Alternatif Penyelesaian:
        </button>
        <div class="collapse" id="collapsesoal11A">
            <div class="card card-body overflow-auto">
            <p>Untuk mencari turunan fungsi \(f(x) = x^2 - \frac{1}{x} + 1\), kita dapat menggunakan aturan turunan untuk setiap suku dalam fungsi secara terpisah.

                Maka:

                \begin{align*}
                f(x) &= x^2 - \frac{1}{x} + 1 \\
                f'(x) &= \frac{d}{dx} (x^2) - \frac{d}{dx} \left(\frac{1}{x}\right) + \frac{d}{dx}(1)\\
                f'(x) &= \frac{d}{dx} (x^2) - \frac{d}{dx} \left(x^{-1}\right) + \frac{d}{dx}(1)\\
                &= 2x^{2-1} - (-1)x^{-1-1} + 0\\
                &= 2x^{1} - (-1)x^{-2} + 0\\
                &= 2x + \frac{1}{x^2} + 0\\
                &= 2x + \frac{1}{x^2}
                \end{align*}

                Jadi, turunan dari fungsi \(\displaystyle f(x) = x^2 - \frac{1}{x} + 1\) adalah \(\displaystyle f'(x) = 2x + \frac{1}{x^2} = 2x + x^{-2}\).</p>
                <b class="text-end text-danger fw-bold"> <h3>JAWABAN : E</h3></b>
            </div>
        </div>
        <hr />
    </ol>
    <!-- ##### 11B ##### -->
    <ol type="1" start="11">
        <li>Apabila \(\displaystyle f(x)= x^2 +\frac{1}{x} -1 \), maka \(f'(x)\) adalah . . .</li>
        <ol type="A">
            <li>\( x-x^{-2} \)</li>
            <li>\( x+x^{-2} \)</li>
            <li>\(2x-x^{-2}+1 \)</li>
            <li>\(2x - x^{-2} \)</li>
            <li>\( 2x + x^{-2}\)</li>
        </ol>
        <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal11B" aria-expanded="false" aria-controls="collapsesoal11B">
            Alternatif Penyelesaian:
        </button>
        <div class="collapse" id="collapsesoal11B">
            <div class="card card-body overflow-auto">
                <p>Untuk mencari turunan fungsi \(f(x) = x^2 + \frac{1}{x} - 1\), kita dapat menggunakan aturan turunan untuk setiap suku dalam fungsi secara terpisah.

                    Maka:

                    \begin{align*}
                    f(x) &= x^2 + \frac{1}{x} - 1 \\
                    f'(x) &= \frac{d}{dx} (x^2) + \frac{d}{dx} \left(\frac{1}{x}\right) - \frac{d}{dx}(1)\\
                    f'(x) &= \frac{d}{dx} (x^2) + \frac{d}{dx} \left(x^{-1}\right) - \frac{d}{dx}(1)\\
                    &= 2x^{2-1} + (-1)x^{-1-1} - 0\\
                    &= 2x^{1} + (-1)x^{-2} - 0\\
                    &= 2x - \frac{1}{x^2} - 0\\
                    &= 2x - \frac{1}{x^2}
                    \end{align*}

                    Jadi, turunan dari fungsi \(\displaystyle f(x) = x^2 + \frac{1}{x} - 1\) adalah \(\displaystyle f'(x) = 2x - \frac{1}{x^2} = 2x - x^{-2}\).</p>
                <b class="text-end text-danger fw-bold"> <h3>JAWABAN : D</h3></b>
            </div>
        </div>
</ol>
</div>
<!--=======================  soal12 ===================================-->
<div class="border border-dark mt-3 p-1" style="background-color:rgb(218, 205, 255);">
<ol type="1" start="12">
    <li>Jika \(\displaystyle f(x)= \frac{1}{x} +x^3 -\sqrt{2x} \), maka \(\displaystyle \frac{df(x)}{dx}=...\)</li>
        <ol type="A">
            <li>\(\displaystyle -x^{-2} +3x^2 -(2x)^{-\frac{1}{2}} \)</li>
            <li>\(\displaystyle -x^{-2} -3x^2 +(2x)^{-\frac{1}{2}} \)</li>
            <li>\(\displaystyle \frac{1}{x^2} +x^2 -\sqrt{2} \)</li>
            <li>\(\displaystyle \frac{1}{x^2} +3x^2 -\sqrt{2} \)</li>
            <li>\(\displaystyle -\frac{1}{x^2} +3x^2 - \frac{1}{2} (2x)^{-\frac{1}{2}} \)</li>
        </ol>
        <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal12A" aria-expanded="false" aria-controls="collapsesoal12A">
        Alternatif Penyelesaian:
        </button>
        <div class="collapse" id="collapsesoal12A">
            <div class="card card-body overflow-auto">
            <p>Untuk mencari turunan dari fungsi \(\displaystyle f(x) = \frac{1}{x} +x^3 -\sqrt{2x}\), kita dapat menggunakan aturan turunan untuk setiap suku dalam fungsi secara terpisah.

                Maka:

                \begin{align*}
                \frac{df(x)}{dx} &= \frac{d}{dx} \left(\frac{1}{x}\right) + \frac{d}{dx} (x^3) - \frac{d}{dx} (\sqrt{2x}) \\
                &= -\frac{1}{x^2} + 3x^2 - \frac{d}{dx}(2x)^{1/2}\\
                &= -\frac{1}{x^2} + 3x^2 - \frac{1}{2}(2x)^{-1/2} \cdot 2 \\
                &= -\frac{1}{x^2} + 3x^2 - \frac{1}{\sqrt{2x}}
                \end{align*}

                Jadi, turunan dari fungsi \(\displaystyle f(x) = \frac{1}{x} +x^3 -\sqrt{2x}\) adalah
                \begin{align*}
                \frac{df(x)}{dx} &= -\frac{1}{x^2} + 3x^2 - \frac{1}{\sqrt{2x}} \\ &= -x^{-2} +3x^2 -(2x)^{-\frac{1}{2}}
                \end{align*}
            </p>
            <b class="text-end text-danger fw-bold"> <h3>JAWABAN : A</h3></b>
            </div>
        </div>
        <hr />
</ol>
<!-- ######### 12B ############ -->
<ol type="1" start="12">
    <li>Jika \(\displaystyle f(x)= \frac{1}{x} -x^3 +\sqrt{2x} \), maka \(\displaystyle \frac{df(x)}{dx}=...\)</li>
        <ol type="A">
            <li>\(\displaystyle -x^{-2} +3x^2 -(2x)^{-\frac{1}{2}} \)</li>
            <li>\(\displaystyle -x^{-2} -3x^2 +(2x)^{-\frac{1}{2}} \)</li>
            <li>\(\displaystyle \frac{1}{x^2} +x^2 -\sqrt{2} \)</li>
            <li>\(\displaystyle \frac{1}{x^2} +3x^2 -\sqrt{2} \)</li>
            <li>\(\displaystyle -\frac{1}{x^2} +3x^2 - \frac{1}{2} (2x)^{-\frac{1}{2}} \)</li>
        </ol>
        <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal12B" aria-expanded="false" aria-controls="collapsesoal12B">
        Alternatif Penyelesaian:
        </button>
        <div class="collapse" id="collapsesoal12B">
            <div class="card card-body overflow-auto">
            <p>Untuk menemukan turunan dari fungsi \(\displaystyle f(x)= \frac{1}{x} -x^3 +\sqrt{2x}\), kita perlu menggunakan aturan turunan. Kita perlu menghitung turunan dari setiap suku satu per satu.

                Pertama, turunan dari \(\displaystyle \frac{1}{x}\) adalah:

                $$\frac{d}{dx} \left( \frac{1}{x} \right) = -\frac{1}{x^2}$$

                Kedua, turunan dari \(\displaystyle -x^3\) adalah:

                $$\frac{d}{dx} \left( -x^3 \right) = -3x^2$$

                Ketiga, turunan dari \(\displaystyle \sqrt{2x}\) adalah:

                $$\frac{d}{dx} \left( \sqrt{2x} \right) = \frac{1}{2} (2x)^{\frac{1}{2}-1} (2)=\frac{1}{2} (2x)^{-\frac{1}{2}} (2) = \frac{1}{\sqrt{2x}}$$

                Kita bisa menggabungkan ketiga turunan ini menjadi:

                $$\frac{df(x)}{dx}= -\frac{1}{x^2} -3x^2 +\frac{1}{\sqrt{2x}}$$


                Jadi, turunan dari  \(\displaystyle f(x)= \frac{1}{x} -x^3 +\sqrt{2x}\)  adalah  \(\displaystyle -\frac{1}{x^2} -3x^2 +\frac{1}{\sqrt{2x}} = -x^{-2} -3x^2 +(2x)^{-\frac{1}{2}}\)
                </p>
            <b class="text-end text-danger fw-bold"> <h3>JAWABAN : B</h3></b>
            </div>
        </div>
</ol>
</div>

<!--=======================  soal13A ===================================-->
<div class="border border-dark mt-3 p-1" style="background-color:rgb(255, 205, 239);">
<ol type="1" start="13">
    <li>Turunan pertama dari \(\displaystyle f(x)=\frac{2x^2 -1}{\sqrt{x}} \) adalah . . .</li>
        <ol type="A">
            <li>\(\displaystyle 3\sqrt{x} + \frac{\sqrt{x}}{2x^2}  \)</li>
            <li>\(\displaystyle 6\sqrt{x} - \frac{\sqrt{x}}{2x^2}  \)</li>
            <li>\(\displaystyle 3\sqrt{x} + \frac{2\sqrt{x}}{x^2}  \)</li>
            <li>\(\displaystyle 6\sqrt{x} - \frac{2\sqrt{x}}{x^2}  \)</li>
            <li>\(\displaystyle 3\sqrt{x} + \frac{\sqrt{x}}{2}  \)</li>
        </ol>
        <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal13A" aria-expanded="false" aria-controls="collapsesoal13A">
        Alternatif Penyelesaian:
        </button>
        <div class="collapse" id="collapsesoal13A">
            <div class="card card-body overflow-auto">
            <p>Untuk menemukan turunan pertama dari fungsi \(\displaystyle f(x)=\frac{2x^2 -1}{\sqrt{x}}\), kita dapat menggunakan aturan rantai (chain rule) dan aturan pembagian (quotient rule). Kita memiliki:

                \begin{align*}
                f(x)&=\frac{2x^2 -1}{\sqrt{x}} \\
                &=2x^2 x^{-\frac{1}{2}}-x^{-\frac{1}{2}}\\
                &=2x^{\frac{3}{2}}-x^{-\frac{1}{2}}
                \end{align*}

                Maka, turunan pertama dari \(f(x)\) adalah:

                \begin{align*}
                f'(x)&=\frac{d}{dx} \left(2x^{\frac{3}{2}}-x^{-\frac{1}{2}}\right) \\
                &=\frac{d}{dx} \left(2x^{\frac{3}{2}}\right) - \frac{d}{dx} \left(x^{-\frac{1}{2}}\right) \\
                &=2 \cdot \frac{d}{dx} \left(x^{\frac{3}{2}}\right) - (-\frac{1}{2})x^{-\frac{3}{2}} \\
                &=2 \cdot \frac{3}{2} x^{\frac{3}{2}-1} + \frac{1}{2}x^{-\frac{3}{2}} \\
                &=3x^{\frac{1}{2}} + \frac{1}{2}x^{-\frac{3}{2}} \\
                &=3\sqrt{x} + \frac{1}{2x\sqrt{x}}
                \end{align*}

                Jadi, turunan pertama dari \( \displaystyle f(x)=\frac{2x^2 -1}{\sqrt{x}}\) adalah \( \displaystyle f'(x)=3\sqrt{x} + \frac{1}{2x\sqrt{x}}\).
                \begin{align*}
                f'(x)=3\sqrt{x} + \frac{1}{2x\sqrt{x}} &= 3\sqrt{x} + \frac{1}{2x\sqrt{x}} \cdot \frac{\sqrt{x}}{\sqrt{x}} \\
                &= 3\sqrt{x} + \frac{\sqrt{x}}{2x.x} \\
                &= 3\sqrt{x} + \frac{\sqrt{x}}{2x^2}
                \end{align*}
            </p>
            <b class="text-end text-danger fw-bold"> <h3>JAWABAN : A</h3></b>
            </div>
        </div>
        <hr />
</ol>
<!-- ######## 13B ####### -->
<ol type="1" start="13">
    <li>Turunan pertama dari \(\displaystyle f(x)=\frac{4x^2 +1}{\sqrt{x}} \) adalah . . .</li>
        <ol type="A">
            <li>\(\displaystyle 3\sqrt{x} + \frac{\sqrt{x}}{2x^2}  \)</li>
            <li>\(\displaystyle 6\sqrt{x} - \frac{\sqrt{x}}{2x^2}  \)</li>
            <li>\(\displaystyle 3\sqrt{x} + \frac{2\sqrt{x}}{x^2}  \)</li>
            <li>\(\displaystyle 6\sqrt{x} - \frac{2\sqrt{x}}{x^2}  \)</li>
            <li>\(\displaystyle 3\sqrt{x} + \frac{\sqrt{x}}{2}  \)</li>
        </ol>
        <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal13B" aria-expanded="false" aria-controls="collapsesoal13B">
        Alternatif Penyelesaian:
        </button>
        <div class="collapse" id="collapsesoal13B">
            <div class="card card-body overflow-auto">
            <p>

                Untuk menemukan turunan pertama dari fungsi \(\displaystyle f(x)=\frac{4x^2 +1}{\sqrt{x}}\), kita dapat menggunakan aturan rantai (chain rule) dan aturan pembagian (quotient rule). Kita memiliki:

                \begin{align*}
                f(x)&=\frac{4x^2 +1}{\sqrt{x}} \\
                &=4x^2 x^{-\frac{1}{2}}+x^{-\frac{1}{2}}\\
                &=4x^{\frac{3}{2}}+x^{-\frac{1}{2}}
                \end{align*}

                Maka, turunan pertama dari \(f(x)\) adalah:

                \begin{align*}
                f'(x)&=\frac{d}{dx} \left(4x^{\frac{3}{2}}+x^{-\frac{1}{2}}\right) \\
                &=\frac{d}{dx} \left(4x^{\frac{3}{2}}\right) + \frac{d}{dx} \left(x^{-\frac{1}{2}}\right) \\
                &=4 \cdot \frac{d}{dx} \left(x^{\frac{3}{2}}\right) + (-\frac{1}{2})x^{-\frac{3}{2}} \\
                &=4 \cdot \frac{3}{2} x^{\frac{3}{2}-1} - \frac{1}{2}x^{-\frac{3}{2}} \\
                &=6x^{\frac{1}{2}} - \frac{1}{2x\sqrt{x}} \\
                &=6\sqrt{x} - \frac{1}{2x\sqrt{x}}
                \end{align*}

                Jadi, turunan pertama dari \(\displaystyle f(x)=\frac{4x^2 +1}{\sqrt{x}}\) adalah \( \displaystyle f'(x)=6\sqrt{x} - \frac{1}{2x\sqrt{x}}\)
                \begin{align*}
                f'(x)=6\sqrt{x} - \frac{1}{2x\sqrt{x}} &= 6\sqrt{x} - \frac{1}{2x\sqrt{x}} \cdot \frac{\sqrt{x}}{\sqrt{x}} \\
                &= 6\sqrt{x} - \frac{\sqrt{x}}{2x.x} \\
                &= 6\sqrt{x} - \frac{\sqrt{x}}{2x^2}
                \end{align*}
            </p>
            <b class="text-end text-danger fw-bold"> <h3>JAWABAN : B</h3></b>
            </div>
        </div>
</ol>
</div>

<!--=======================  soal14A ===================================-->
<div class="border border-dark mt-3 p-1" style="background-color:rgb(241, 183, 183);">
<ol type="1" start="14">
    <li>Turunan pertama dari \(y=(1-x)^2 (2x+3) \) adalah . . .</li>
        <ol type="A">
            <li>\((1-x)(9x+1)  \)</li>
            <li>\(2(x-1)(3x+2)  \)</li>
            <li>\((x-1)(9x+1)  \)</li>
            <li>\(2(1-x)(3x+2)  \)</li>
            <li>\(2(1+x)(3x+2)  \)</li>
        </ol>
        <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal14A" aria-expanded="false" aria-controls="collapsesoal14A">
        Alternatif Penyelesaian:
        </button>
        <div class="collapse" id="collapsesoal14A">
            <div class="card card-body overflow-auto">
            <p>

                Untuk menemukan turunan pertama dari \(y=(1-x)^2 (2x+3) \), kita perlu menerapkan aturan rantai (chain rule) dan aturan perkalian (product rule).

                Pertama, kita menggunakan aturan perkalian:

                \begin{align*}
                y &= (1-x)^2 (2x+3) \\
                y' &= u'v + uv' \\
                y' &= -2(1-x) (2x+3) + (1-x)^2(2) \\
                &= 2(1-x) (-2x-3) + (1-x)^2(2) \\
                &= 2(1-x)(-2x-3+1-x) \\
                &= 2(1-x)(-3x-2) \\
                &= 2(1-x)(-1)(3x+2) \\
                &= 2(x-1)(3x+2)
                \end{align*}

                Sehingga turunan pertama dari \(y=(1-x)^2 (2x+3) \) adalah \(2(x-1)(3x+2)\).</p>
            <b class="text-end text-danger fw-bold"> <h3>JAWABAN : B</h3></b>
            </div>
        </div>
        <hr />
</ol>
<!-- ###### 14B ##### -->
<ol type="1" start="14">
    <li>Turunan pertama dari \(y=(1-x)^2 (3x+2) \) adalah . . .</li>
        <ol type="A">
            <li>\((1-x)(9x+1)  \)</li>
            <li>\(2(x-1)(3x+2)  \)</li>
            <li>\((x-1)(9x+1)  \)</li>
            <li>\(2(1-x)(3x+2)  \)</li>
            <li>\(2(1+x)(3x+2)  \)</li>
        </ol>
        <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal14B" aria-expanded="false" aria-controls="collapsesoal14B">
        Alternatif Penyelesaian:
        </button>
        <div class="collapse" id="collapsesoal14B">
            <div class="card card-body overflow-auto">
                <p>

                    Untuk menemukan turunan pertama dari \(y=(1-x)^2 (3x+2) \), kita perlu menerapkan aturan rantai (chain rule) dan aturan perkalian (product rule).

                    Pertama, kita menggunakan aturan perkalian:

                    \begin{align*}
                    y &= (1-x)^2 (3x+2) \\
                    y' &= u'v + uv' \\
                    y' &= -2(1-x) (3x+2) + (1-x)^2(3) \\
                    &= (1-x) (-6x-4) + (1-x)^2(3) \\
                    &= (1-x)(-6x-4+(1-x)3) \\
                    &= (1-x)(-6x-4+3-3x) \\
                    &= (1-x)(-9x-1) \\
                    &= (1-x)(-1)(9x+1) \\
                    &= (x-1)(9x+1)
                    \end{align*}

                    Sehingga turunan pertama dari \(y=(1-x)^2 (3x+2) \) adalah \((x-1)(9x+1)\).</p>
            <b class="text-end text-danger fw-bold"> <h3>JAWABAN : C</h3></b>
            </div>
        </div>
</ol>
</div>
<!--=======================  soal15 ===================================-->
<div class="border border-dark mt-3 p-1" style="background-color:rgb(255, 235, 205);">
<ol type="1" start="15">
    <li>Diketahui \(f(x)=3x^4 +ax^2 -5\) dan \(f'(1)=4\) Nilai \(f'(2)\) sama dengan . . .</li>
        <ol type="A">
            <li>\(120 \)</li>
            <li>\(80 \)</li>
            <li>\(79 \)</li>
            <li>\(76 \)</li>
            <li>\(56 \)</li>
        </ol>
        <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal15A" aria-expanded="false" aria-controls="collapsesoal15A">
        Alternatif Penyelesaian:
        </button>
        <div class="collapse" id="collapsesoal15A">
            <div class="card card-body overflow-auto">
            <p>

                Untuk menemukan nilai \(f'(2)\), kita perlu menggunakan aturan rantai untuk turunan fungsi pangkat. Kita juga dapat menggunakan informasi bahwa \(f'(1) = 4\) untuk menentukan nilai dari konstanta \(a\). <br>

                Pertama, kita dapat menggunakan aturan rantai untuk menemukan turunan pertama dari fungsi \(f(x)\):
                \begin{align*}
                f'(x) &= \frac{d}{dx} \left(3x^4 + ax^2 - 5\right) \\
                &= 12x^3 + 2ax.
                \end{align*}

                Kemudian, kita dapat menyelesaikan persamaan \(f'(1) = 4\) untuk mencari nilai \(a\):
                \begin{align*}
                f'(1) &= 12(1)^3 + 2a(1) \\
                4 &= 12 + 2a \\
                a &= -4.
                \end{align*}

                Sekarang, kita dapat menggunakan aturan rantai lagi untuk menghitung \(f'(2)\):
                \begin{align*}
                f'(2) &= \frac{d}{dx} \left(3x^4 - 4x^2 - 5\right) \bigg\rvert_{x=2} \\
                &= 12x^3 - 8x \bigg\rvert_{x=2} \\
                &= 96 - 16 \\
                &= 80.
                \end{align*}

                Jadi, nilai \(f'(2)\) adalah \(80\).</p>
            <b class="text-end text-danger fw-bold"> <h3>JAWABAN : B</h3></b>
            </div>
        </div>
        <hr />
</ol>
<!-- ####### 15B ####### -->
<ol type="1" start="15">
    <li>Diketahui \(f(x)=3x^4 +ax^2 -5\) dan \(f(1)=4\) Nilai \(f'(2)\) sama dengan . . .</li>
        <ol type="A">
            <li>\(120 \)</li>
            <li>\(80 \)</li>
            <li>\(79 \)</li>
            <li>\(76 \)</li>
            <li>\(56 \)</li>
        </ol>
        <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal15B" aria-expanded="false" aria-controls="collapsesoal15B">
        Alternatif Penyelesaian:
        </button>
        <div class="collapse" id="collapsesoal15B">
            <div class="card card-body overflow-auto">
            <p>

                Untuk menemukan nilai \(f'(2)\), kita perlu menggunakan aturan rantai untuk turunan fungsi pangkat. Kita juga dapat menggunakan informasi bahwa \(f(1) = 4\) untuk menentukan nilai dari konstanta \(a\). <br>

                Pertama, kita dapat menyelesaikan persamaan \(f(1) = 4\) untuk mencari nilai \(a\):
                \begin{align*}
                f(1) &= 3(1)^4 + a(1)^2 - 5 \\
                4 &= 3 + a - 5 \\
                a &= 6.
                \end{align*}

                Kemudian, kita dapat menggunakan aturan rantai untuk menemukan turunan pertama dari fungsi \(f(x)\):
                \begin{align*}
                f'(x) &= \frac{d}{dx} \left(3x^4 + 6x^2 - 5\right) \\
                &= 12x^3 + 12x.
                \end{align*}

                Sekarang, kita dapat menggunakan aturan rantai lagi untuk menghitung \(f'(2)\):
                \begin{align*}
                f'(2) &= \frac{d}{dx} \left(3x^4 + 6x^2 - 5\right) \bigg\rvert_{x=2} \\
                &= 12x^3 + 12x \bigg\rvert_{x=2} \\
                &= 96 + 24 \\
                &= 120.
                \end{align*}

                Jadi, nilai \(f'(2)\) adalah \(120\).</p>
            <b class="text-end text-danger fw-bold"> <h3>JAWABAN : A</h3></b>
            </div>
        </div>
</ol>
</div>
<!--=======================  soal16A ===================================-->
<div class="border border-dark mt-3 p-1" style="background-color:rgb(211, 255, 205);">
<ol type="1" start="16">
    <li>Gradien garis singgung kurva \(y=(4x+3)(2x-5) \) di \(x=-1\) adalah . . . </li>
        <ol type="A">
            <li>\(-30 \)</li>
            <li>\(-8 \)</li>
            <li>\(-2 \)</li>
            <li>\(2\)</li>
            <li>\(30 \)</li>
        </ol>
        <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal16A" aria-expanded="false" aria-controls="collapsesoal16A">
        Alternatif Penyelesaian:
        </button>
        <div class="collapse" id="collapsesoal16A">
            <div class="card card-body overflow-auto">
            <p>

                Untuk menemukan gradien garis singgung di suatu titik pada kurva, kita perlu menemukan turunan pertama dari fungsi tersebut dan mengevaluasinya pada titik tersebut.
                <br>
                Pertama, kita perlu mengaljabarkan fungsi \(y=(4x+3)(2x-5)\):
                \begin{align*}
                y &= (4x+3)(2x-5) \\
                &= 8x^2 - 20x + 6x - 15 \\
                &= 8x^2 - 14x - 15.
                \end{align*}

                Kemudian, kita dapat menemukan turunan pertama dari fungsi tersebut:
                \begin{align*}
                \frac{dy}{dx} &= \frac{d}{dx} \left(8x^2 - 14x - 15\right) \\
                &= 16x - 14.
                \end{align*}

                Selanjutnya, kita dapat mengevaluasi turunan pertama ini pada titik $x=-1$ untuk mendapatkan gradien garis singgung pada titik tersebut:
                \begin{align*}
                \frac{dy}{dx} \bigg\rvert_{x=-1} &= (16(-1) - 14) \\
                &= -30.
                \end{align*}

                Jadi, gradien garis singgung pada kurva \(y=(4x+3)(2x-5)\) di titik \(x=-1\) adalah \(-30\).</p>
            <b class="text-end text-danger fw-bold"> <h3>JAWABAN : A</h3></b>
            </div>
        </div>
        <hr />
</ol>
<!-- ####### 16B ###### -->
<ol type="1" start="16">
    <li>Gradien garis singgung kurva \(y=(4x+3)(2x-5) \) di \(x=1\) adalah . . . </li>
        <ol type="A">
            <li>\(-30 \)</li>
            <li>\(-8 \)</li>
            <li>\(-2 \)</li>
            <li>\(2\)</li>
            <li>\(30 \)</li>
        </ol>
        <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal16B" aria-expanded="false" aria-controls="collapsesoal16B">
        Alternatif Penyelesaian:
        </button>
        <div class="collapse" id="collapsesoal16B">
            <div class="card card-body overflow-auto">
                <p>

                    Untuk menemukan gradien garis singgung di suatu titik pada kurva, kita perlu menemukan turunan pertama dari fungsi tersebut dan mengevaluasinya pada titik tersebut.
                    <br>
                    Pertama, kita perlu mengaljabarkan fungsi \(y=(4x+3)(2x-5)\):
                    \begin{align*}
                    y &= (4x+3)(2x-5) \\
                    &= 8x^2 - 20x + 6x - 15 \\
                    &= 8x^2 - 14x - 15.
                    \end{align*}

                    Kemudian, kita dapat menemukan turunan pertama dari fungsi tersebut:
                    \begin{align*}
                    \frac{dy}{dx} &= \frac{d}{dx} \left(8x^2 - 14x - 15\right) \\
                    &= 16x - 14.
                    \end{align*}

                    Selanjutnya, kita dapat mengevaluasi turunan pertama ini pada titik $x=-1$ untuk mendapatkan gradien garis singgung pada titik tersebut:
                    \begin{align*}
                    \frac{dy}{dx} \bigg\rvert_{x=1} &= (16(1) - 14) \\
                    &= 2.
                    \end{align*}

                    Jadi, gradien garis singgung pada kurva \(y=(4x+3)(2x-5)\) di titik \(x=1\) adalah \(2\).</p>
            <b class="text-end text-danger fw-bold"> <h3>JAWABAN : D</h3></b>
            </div>
        </div>
</ol>
</div>
<!--=======================  soal17A ===================================-->
<div class="border border-dark mt-3 p-1" style="background-color:rgb(168, 230, 244);">
<ol type="1" start="17">
    <li>Jika garis singgung pada kurva \(y-3x^2 -2x=0 \) sejajar dengan garis singgung pada kurva \(y-2x^2 -6x =0 \), maka koefisien arah garis singgung garis tersebut adalah . . .</li>
        <ol type="A">
            <li>\(10  \)</li>
            <li>\(12  \)</li>
            <li>\(14  \)</li>
            <li>\(16  \)</li>
            <li>\(20  \)</li>
        </ol>
        <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal17A" aria-expanded="false" aria-controls="collapsesoal17A">
        Alternatif Penyelesaian:
        </button>
        <div class="collapse" id="collapsesoal17A">
            <div class="card card-body overflow-auto">
            <p>

                Untuk menentukan koefisien arah garis singgung pada kedua kurva, pertama-tama kita harus menemukan titik-titik singgungnya terlebih dahulu. Garis singgung pada suatu kurva akan sejajar dengan garis singgung pada kurva lain jika dan hanya jika titik-titik singgung keduanya sejajar.
                <br>
                Untuk menemukan titik-titik singgung pada kedua kurva, kita perlu mencari turunan pertama dari masing-masing kurva terlebih dahulu:

                $$y-3x^2-2x=0 \Rightarrow y=3x^2+2x$$

                Maka turunan pertama dari kurva ini adalah:

                $$\frac{dy}{dx} = 6x+2$$

                $$y-2x^2-6x=0 \Rightarrow y=2x^2+6x$$

                Turunan pertama dari kurva ini adalah:

                $$\frac{dy}{dx} = 4x+6$$

                Titik-titik singgung pada kedua kurva harus memenuhi dua syarat: </p>
                <ol type="1">
                    <li>Mereka harus berada pada kedua kurva tersebut.</li>
                    <li>Garis singgung pada kedua kurva harus sejajar.</li>
                </ol>
                <br>
                <p> Karena garis singgung memiliki kemiringan yang sama dengan turunan pada titik singgung, maka untuk menentukan titik singgung yang sejajar, turunan dari kedua kurva harus sama. Oleh karena itu, kita dapat menyelesaikan persamaan berikut:

                $$6x+2=4x+6$$

                Dari persamaan ini, kita dapat menyelesaikan untuk nilai \(x\):

                $$2x=4 \Rightarrow x=2$$

                Untuk menemukan nilai \(y\) yang sesuai, kita bisa mencari nilai y pada kurva pertama menggunakan nilai \(x\) yang sudah kita temukan:

                $$y=3x^2+2x=3(2)^2+2(2)=16$$

                Untuk kurva kedua, kita juga bisa mencari nilai \(y\) menggunakan nilai \(x\) yang sama:

                $$y=2x^2+6x=2(2)^2+6(2)=20$$

                Sehingga titik singgung kedua kurva adalah \((2,16)\) dan \((2,20)\).

                Sekarang kita dapat menentukan garis singgung pada kedua kurva pada titik-titik ini:

                Untuk kurva pertama, garis singgungnya adalah:

                $$y-16= (6(2)+2)(x-2)$$
                $$y= 14x-20$$

                Untuk kurva kedua, garis singgungnya adalah:

                $$y-20= (4(2)+6)(x-2)$$
                $$y= 14x-12$$

                Karena garis-garis singgung tersebut sejajar, maka koefisien kemiringan atau arah garisnya harus sama. Koefisien kemiringan garis singgung adalah koefisien dari variabel \(x\) pada persamaan garis. Dalam hal ini, koefisien kemiringan garis singgung pada kedua kurva adalah 14. Sehingga, jawaban yang tepat adalah 14.</p>
            <b class="text-end text-danger fw-bold"> <h3>JAWABAN : C</h3></b>
            </div>
        </div>
        <hr />
</ol>
<!-- ##### 17B ###### -->
<ol type="1" start="17">
    <li>Jika garis singgung pada kurva \(y-2x^2 -8x=0 \) sejajar dengan garis singgung pada kurva \(y-3x^2 -6x =0 \), maka koefisien arah garis singgung garis tersebut adalah . . .</li>
        <ol type="A">
            <li>\(10  \)</li>
            <li>\(12  \)</li>
            <li>\(14  \)</li>
            <li>\(16  \)</li>
            <li>\(20  \)</li>
        </ol>
        <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal17B" aria-expanded="false" aria-controls="collapsesoal17B">
        Alternatif Penyelesaian:
        </button>
        <div class="collapse" id="collapsesoal17B">
            <div class="card card-body overflow-auto">
            <p>kurva 1 = \(y_1\) dan kurva 2 = \(y_2\)</p>
            <p>Kurva 1 <br> \(\displaystyle \begin{align}
                y-2x^2 -8x &=0 \\
                y_1 &= 2x^2 +8x \\
                y_1' &= 4x+8
                \end{align}\)</p>
                <p>Kurva 2 <br> \(\displaystyle \begin{align}
                    y-3x^2 -6x &=0 \\
                    y_2 &= 3x^2 +6x \\
                    y_2' &= 6x+6
                    \end{align}\)</p>
                <p>Garis singgung akan sejajar jika \(y_1' = y_2'\) </p>
                <p>\(\displaystyle \begin{align}
                    y_1' &= y_2' \\
                    4x+8 &= 6x+6 \\
                    2x &= 2 \\
                    x &= 1
                    \end{align}\)</p>
                <p>Substitusi ke salah satu persamaan garis singgung</p>
                <p>\(\displaystyle \begin{align}
                    y' &= 6x+6 \\
                    &= 6(1) + 6
                    &= 12
                    \end{align}\)</p>
                <p>Jadi, koefisien arah garis singgung tersebut adalah \(12\)</p>
            <b class="text-end text-danger fw-bold"> <h3>JAWABAN : B</h3></b>
            </div>
        </div>
</ol>
</div>
<!--=======================  soal18 ===================================-->
<div class="border border-dark mt-3 p-1" style="background-color:rgb(218, 205, 255);">
<ol type="1" start="18">
    <li>Kurva \(f(x)=x^3 +3x^2 -9x +7 \) naik untuk nilai-nilai \(x\) sama dengan . . .</li>
        <ol type="A">
            <li>\(x > 0 \)</li>
            <li>\(-3 < x < 1 \)</li>
            <li>\( -1 < x < 3 \)</li>
            <li>\( x <-3 \text{ atau } x > 1 \)</li>
            <li>\( x < -1 \text{ atau } x > 2 \)</li>
        </ol>
        <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal18A" aria-expanded="false" aria-controls="collapsesoal18A">
        Alternatif Penyelesaian:
        </button>
        <div class="collapse" id="collapsesoal18A">
            <div class="card card-body overflow-auto">
            <p>Untuk menentukan kapan fungsi \(f(x)=x^3 +3x^2 -9x +7\) naik, kita perlu mencari turunan pertama dari fungsi tersebut dan menyelesaikan ketidaksetaraan \(f'(x) > 0\). Jika \(f'(x) > 0\) untuk seluruh nilai \(x\) pada suatu interval, maka fungsi naik pada interval tersebut.
                <br>
                Berikut adalah turunan pertama dari \(f(x)\):
                <br>
                \begin{align*}
                f'(x) &= 3x^2 +6x -9 \\
                &= 3(x^2+2x-3) \\
                &= 3(x+3)(x-1)
                \end{align*}
                <br>
                Maka, kita perlu menyelesaikan ketidaksetaraan \(f'(x) > 0\) untuk menentukan ketika fungsi \(f(x)\) naik.
                <br>
                \begin{align*}
                f'(x) &> 0 \\
                3(x+3)(x-1) &> 0 \\
                \end{align*}
                <br>
                Ketika \(x<-3\) atau \(x>1\), maka \(f'(x) > 0\). Oleh karena itu, fungsi \(f(x)\) naik untuk nilai-nilai \(x < -3\) dan \(x > 1\).
                <br>
                Jadi, kurva \(f(x)=x^3 +3x^2 -9x +7\) naik untuk nilai-nilai \(x < -3\) atau \(x > 1\).</p>
            <b class="text-end text-danger fw-bold"> <h3>JAWABAN : D</h3></b>
            </div>
        </div>
        <hr />
</ol>
<!-- 18B -->
<ol type="1" start="18">
    <li>Kurva \(f(x)=2x^3 -3x^2 -12x +7 \) naik untuk nilai-nilai \(x\) sama dengan . . .</li>
        <ol type="A">
            <li>\(x > 0 \)</li>
            <li>\(-3 < x < 1 \)</li>
            <li>\( -1 < x < 3 \)</li>
            <li>\( x <-3 \text{ atau } x > 1 \)</li>
            <li>\( x < -1 \text{ atau } x > 2 \)</li>
        </ol>
        <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal18B" aria-expanded="false" aria-controls="collapsesoal18B">
        Alternatif Penyelesaian:
        </button>
        <div class="collapse" id="collapsesoal18B">
            <div class="card card-body overflow-auto">
            <p>Untuk menentukan kapan fungsi \(f(x)=2x^3 -3x^2 -12x +7\) naik, kita perlu mencari turunan pertama dari fungsi tersebut dan menyelesaikan ketidaksetaraan \(f'(x) > 0\). Jika \(f'(x) > 0\) untuk seluruh nilai \(x\) pada suatu interval, maka fungsi naik pada interval tersebut.
                <br>
                Berikut adalah turunan pertama dari \(f(x)\):
                <br>
                \begin{align*}
                f'(x) &= 6x^2 -6x -12 \\
                &= 6(x^2-x-2) \\
                &= 6(x+1)(x-2)
                \end{align*}
                <br>
                Maka, kita perlu menyelesaikan ketidaksetaraan \(f'(x) > 0\) untuk menentukan ketika fungsi \(f(x)\) naik.
                <br>
                \begin{align*}
                f'(x) &> 0 \\
                6(x+1)(x-2) &> 0 \\
                \end{align*}
                <br>
                Ketika \(x<-1\) atau \(x>2\), maka \(f'(x) > 0\). Oleh karena itu, fungsi \(f(x)\) naik untuk nilai-nilai \(x < -1\) dan \(x > 2\).
                <br>
                Jadi, kurva \(f(x)=2x^3 -3x^2 -12x +7\) naik untuk nilai-nilai \(x < -1\) atau \(x > 2\).</p>
            <b class="text-end text-danger fw-bold"> <h3>JAWABAN : E</h3></b>
            </div>
        </div>
</ol>
</div>
<!--=======================  SOAL19 ===================================-->
<div class="border border-dark mt-3 p-1" style="background-color:rgb(255, 205, 239);">
<ol type="1" start="19">
    <li>Jika nilai stationer dari \(f(x)=x^3-px^2-px-1\) adalah di \(x=p\), maka salah satu nilai \(p\) yang memenuhi adalah . . .</li>
    <ol type="A">
        <li>\(1\)</li>
        <li>\(2 \)</li>
        <li>\(3 \)</li>
        <li>\(4 \)</li>
        <li>\(5 \)</li>
    </ol>
    <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal19A" aria-expanded="false" aria-controls="collapsesoal19A">
    Alternatif Penyelesaian:
    </button>
    <div class="collapse" id="collapsesoal19A">
        <div class="card card-body overflow-auto">
        <p>

            Untuk mencari nilai \(p\) yang membuat \(x=p\) merupakan nilai stationer dari \(f(x)=x^3-px^2-px-1\), kita perlu menghitung turunan pertama dari fungsi ini:

            $$f(x) = x^3 - px^2 - px - 1$$
            $$f'(x) = 3x^2 - 2px - p$$

            Nilai stationer adalah titik dimana turunan pertama \(f'(x)\) sama dengan nol. Oleh karena itu, kita perlu mencari nilai \(p\) yang memenuhi \(f'(p) = 0\). <br>
            \(\displaystyle \begin{align}
            f'(x) &= 3x^2 - 2px - p  \\
            f'(p) &= 3(p)^2 - 2p(p) - p  \\
            0 &= 3(p)^2 -2p(p) -p \\
            0 &= 3p^2 -2p^2 -p \\
            0 &= p^2 - p \\
            0 &= p(p-1) \\
            \end{align}\) <br>
            Sehingga, \(f'(p) = 0\) ketika \(p = 0\) atau \(p = 1\).
            </p>
        <b class="text-end text-danger fw-bold"> <h3>JAWABAN : A</h3></b>
        </div>
    </div>
    <hr />
</ol>
<ol type="1" start="19">
    <li>Jika nilai stationer dari \(f(x)=x^3-px^2-px-1\) adalah di \(x=p\), maka salah satu nilai \(p\) yang memenuhi adalah . . .</li>
    <ol type="A">
        <li>\(-4\)</li>
        <li>\(-2 \)</li>
        <li>\(0 \)</li>
        <li>\(2\)</li>
        <li>\(4 \)</li>
    </ol>
    <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal19B" aria-expanded="false" aria-controls="collapsesoal19B">
    Alternatif Penyelesaian:
    </button>
    <div class="collapse" id="collapsesoal19B">
        <div class="card card-body overflow-auto">
            <p>
                Untuk mencari nilai \(p\) yang membuat \(x=p\) merupakan nilai stationer dari \(f(x)=x^3-px^2-px-1\), kita perlu menghitung turunan pertama dari fungsi ini:

                $$f(x) = x^3 - px^2 - px - 1$$
                $$f'(x) = 3x^2 - 2px - p$$

                Nilai stationer adalah titik dimana turunan pertama \(f'(x)\) sama dengan nol. Oleh karena itu, kita perlu mencari nilai \(p\) yang memenuhi \(f'(p) = 0\). <br>
                \(\displaystyle \begin{align}
                f'(x) &= 3x^2 - 2px - p  \\
                f'(p) &= 3(p)^2 - 2p(p) - p  \\
                0 &= 3(p)^2 -2p(p) -p \\
                0 &= 3p^2 -2p^2 -p \\
                0 &= p^2 - p \\
                0 &= p(p-1) \\
                \end{align}\) <br>
                Sehingga, \(f'(p) = 0\) ketika \(p = 0\) atau \(p = 1\).
                </p>
        <b class="text-end text-danger fw-bold"> <h3>JAWABAN : C</h3></b>
        </div>
    </div>
    <hr />
</ol>
</div>


<!--=======================  soal20 ===================================-->
<div class="border border-dark mt-3 p-1" style="background-color:rgb(241, 183, 183);">
    <ol type="1" start="20">
        <li>Keliling sebuah persegi panjang adalah 1.800 cm. Luas maksimum dari persegi panjang tersebut sama dengan ... cm\(^2\)</li>
            <ol type="A">
                <li>\(2.025  \)</li>
                <li>\(22.250  \)</li>
                <li>\(16.000  \)</li>
                <li>\(160.000  \)</li>
                <li>\(202.500  \)</li>
            </ol>
            <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal20A" aria-expanded="false" aria-controls="collapsesoal20A">
            Alternatif Penyelesaian:
            </button>
            <div class="collapse" id="collapsesoal20A">
                <div class="card card-body overflow-auto">
                    <p>Misalkan panjang persegi panjang tersebut adalah \(x\) cm dan lebarnya adalah \(y\) cm.
                    </p>
                    <p>
                        Diketahui keliling persegi panjang adalah 1.800 cm, sehingga:
                        \begin{align*}
                        2x + 2y &= 1.800\\
                        x + y &= 900
                        \end{align*}
                    </p>
                    <p>
                        Luas persegi panjang adalah \(L = xy\). Kita ingin mencari luas maksimum, sehingga harus mencari nilai \(x\) dan \(y\) yang memaksimalkan \(L\).
                    </p>
                    <p>Kita bisa menggunakan metode subtitusi untuk mencari nilai \(y\) dalam \(x\). Dari persamaan \(x + y = 900 \to y = 900 - x\). </p>
                    <p>Substitusikan \(y\) ke dalam persamaan luas \(L\):
                        \begin{align*}
                        L &= x(900 - x) \\
                        &= 900x - x^2
                        \end{align*} </p>
                        <p>Untuk mencari luas maksimum, kita bisa mencari nilai \(x\) yang membuat turunan \(L\) terhadap \(x\) sama dengan nol (0):
                            \begin{align*}
                            L &= 900x - x^2 \\
                            \frac{dL}{dx} &= 900 - 2x \\
                            0 &=  900 - 2x \\
                            2x &= 900 \\
                            x &= 450
                        \end{align*}
                        </p>
                    <p>
                        <p>
                            Kita dapat memverifikasi bahwa ini adalah titik maksimum dengan memeriksa tanda turunan kedua L:
                            \[\frac{d^2L}{dx^2} = -2 < 0\]
                        </p>
                        <p>
                            Jadi, panjang dan lebar persegi panjang adalah 450 cm dan 450 cm, dan luas maksimumnya adalah:
                            \begin{align*}
                            L &= xy \\ &= 450 \times 450 \\ &= 202.500 \; cm^2. \end{align*}
                        </p>
                        <p>
                            Sehingga, luas maksimum dari persegi panjang tersebut adalah \(202.500 \; cm^2\).</p>
                        </p>

                <b class="text-end text-danger fw-bold"> <h3>JAWABAN : E</h3></b>
                </div>
            </div>
            <hr />
    </ol>
    <!-- 20BB -->
    <ol type="1" start="20">
        <li>Keliling sebuah persegi panjang adalah 1.600 cm. Luas maksimum dari persegi panjang tersebut sama dengan ... cm\(^2\)</li>
            <ol type="A">
                <li>\(2.025  \)</li>
                <li>\(22.250  \)</li>
                <li>\(16.000  \)</li>
                <li>\(160.000  \)</li>
                <li>\(202.500  \)</li>
            </ol>
            <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal20B" aria-expanded="false" aria-controls="collapsesoal20B">
            Alternatif Penyelesaian:
            </button>
            <div class="collapse" id="collapsesoal20B">
                <div class="card card-body overflow-auto">
                    <p>Misalkan panjang persegi panjang tersebut adalah \(x\) cm dan lebarnya adalah \(y\) cm.
                    </p>
                    <p>
                        Diketahui keliling persegi panjang adalah 1.600 cm, sehingga:
                        \begin{align*}
                        2x + 2y &= 1.600\\
                        x + y &= 800
                        \end{align*}
                    </p>
                    <p>
                        Luas persegi panjang adalah \(L = xy\). Kita ingin mencari luas maksimum, sehingga harus mencari nilai \(x\) dan \(y\) yang memaksimalkan \(L\).
                    </p>
                    <p>Kita bisa menggunakan metode subtitusi untuk mencari nilai \(y\) dalam \(x\). Dari persamaan \(x + y = 800 \to y = 800 - x\). </p>
                    <p>Substitusikan \(y\) ke dalam persamaan luas \(L\):
                        \begin{align*}
                        L &= x(800 - x) \\
                        &= 800x - x^2
                        \end{align*} </p>
                        <p>Untuk mencari luas maksimum, kita bisa mencari nilai \(x\) yang membuat turunan \(L\) terhadap \(x\) sama dengan nol (0):
                            \begin{align*}
                            L &= 800x - x^2 \\
                            \frac{dL}{dx} &= 900 - 2x \\
                            0 &=  800 - 2x \\
                            2x &= 800 \\
                            x &= 400
                        \end{align*}
                        </p>
                    <p>
                        <p>
                            Kita dapat memverifikasi bahwa ini adalah titik maksimum dengan memeriksa tanda turunan kedua L:
                            \[\frac{d^2L}{dx^2} = -2 < 0\]
                        </p>
                        <p>
                            Jadi, panjang dan lebar persegi panjang adalah 400 cm dan 400 cm, dan luas maksimumnya adalah:
                            \begin{align*}
                            L &= xy \\ &= 400 \times 400 \\ &=160.000 \; cm^2. \end{align*}
                        </p>
                        <p>
                            Sehingga, luas maksimum dari persegi panjang tersebut adalah \(160.000 \; cm^2\).</p>
                        </p>
                <b class="text-end text-danger fw-bold"> <h3>JAWABAN : D</h3></b>
                </div>
            </div>
    </ol>
</div>

<!--=======================  soal21 ===================================-->
<div class="border border-dark mt-3 p-1" style="background-color:rgb(255, 205, 205);">
<ol type="1" start="21">
    <li>Jika nilai maksimum fungsi \(y=x+\sqrt{p-2x}\) adalah \(4\), maka \(p=...\)</li>
    <ol type="A">
        <li>\(3 \)</li>
        <li>\(4 \)</li>
        <li>\(5 \)</li>
        <li>\(7 \)</li>
        <li>\(8 \)</li>
    </ol>
    <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal21A" aria-expanded="false" aria-controls="collapsesoal21A">
    Alternatif Penyelesaian:
    </button>
    <div class="collapse" id="collapsesoal21A">
        <div class="card card-body overflow-auto">
    <p>Untuk menemukan nilai \(p\), kita harus mencari nilai maksimum dari fungsi \(y\) terlebih dahulu. Kita dapat melakukannya dengan menggunakan turunan pertama.
        <br>
        Pertama-tama, kita tulis ulang fungsi \(y\) menjadi:

        \[y = x + (p-2x)^{\frac{1}{2}}\]

        Turunan pertama dari fungsi \(y\) terhadap \(x\) adalah:

        $$\frac{dy}{dx} = 1 - \frac{1}{\sqrt{p-2x}}$$

        Untuk menemukan nilai maksimum, kita set turunan pertama sama dengan nol dan selesaikan untuk \(x\):
        \begin{align*}
        \frac{dy}{dx} &= 0 \\
        1 - \frac{1}{\sqrt{p-2x}} &= 0 \\
        \sqrt{p-2x} &= 1 \\
        p-2x &= 1 \\
        x &= \frac{p-1}{2}
        \end{align*}

        Selanjutnya, kita substitusikan nilai \(x\) yang ditemukan ke dalam fungsi \(y\) dan kita ketahui bahwa nilainya adalah 4. Oleh karena itu, kita punya:

        \begin{align*}
        4 &= \frac{p-1}{2} + \sqrt{p-2\left(\frac{p-1}{2}\right)} \\
        4 &= \frac{p-1}{2} + \sqrt{p-p+1} \\
        4 &= \frac{p-1}{2} + \sqrt{1} \\
        4 &= \frac{p-1}{2} + 1 \\
        4 &= \frac{p-1}{2} + \frac{2}{2} \\
        8 &= p-1+2 \\
        8 &= p + 1 \\
        8-1 &= p \\
        p &= 7 \\
        \end{align*}
        </p>
        <b class="text-end text-danger fw-bold"> <h3>JAWABAN : D</h3></b>
        </div>
    </div>
    <hr />
</ol>
<!-- 19B -->
<ol type="1" start="21">
    <li>Jika nilai maksimum fungsi \(y=x+\sqrt{p-2x}\) adalah \(3\), maka \(p=...\)</li>
    <ol type="A">
        <li>\(3 \)</li>
        <li>\(4 \)</li>
        <li>\(5 \)</li>
        <li>\(7 \)</li>
        <li>\(8 \)</li>
    </ol>
    <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal21B" aria-expanded="false" aria-controls="collapsesoal21B">
    Alternatif Penyelesaian:
    </button>
    <div class="collapse" id="collapsesoal21B">
        <div class="card card-body overflow-auto">
            <p>Untuk menemukan nilai \(p\), kita harus mencari nilai maksimum dari fungsi \(y\) terlebih dahulu. Kita dapat melakukannya dengan menggunakan turunan pertama.
                <br>
                Pertama-tama, kita tulis ulang fungsi \(y\) menjadi:

                \[y = x + (p-2x)^{\frac{1}{2}}\]

                Turunan pertama dari fungsi \(y\) terhadap \(x\) adalah:

                $$\frac{dy}{dx} = 1 - \frac{1}{\sqrt{p-2x}}$$

                Untuk menemukan nilai maksimum, kita set turunan pertama sama dengan nol dan selesaikan untuk \(x\):
                \begin{align*}
                \frac{dy}{dx} &= 0 \\
                1 - \frac{1}{\sqrt{p-2x}} &= 0 \\
                \sqrt{p-2x} &= 1 \\
                p-2x &= 1 \\
                x &= \frac{p-1}{2}
                \end{align*}

                Selanjutnya, kita substitusikan nilai \(x\) yang ditemukan ke dalam fungsi \(y\) dan kita ketahui bahwa nilainya adalah 4. Oleh karena itu, kita punya:

                \begin{align*}
                3 &= \frac{p-1}{2} + \sqrt{p-2\left(\frac{p-1}{2}\right)} \\
                3 &= \frac{p-1}{2} + \sqrt{p-p+1} \\
                3 &= \frac{p-1}{2} + \sqrt{1} \\
                3 &= \frac{p-1}{2} + 1 \\
                3 &= \frac{p-1}{2} + \frac{2}{2} \\
                6 &= p-1+2 \\
                6 &= p + 1 \\
                6-1 &= p \\
                p &= 5 \\
                \end{align*}
                </p>
        <b class="text-end text-danger fw-bold"> <h3>JAWABAN : C</h3></b>
        </div>
    </div>
</ol>
</div>
<!-- SOAL end -->
<!--=======================  soal22 ===================================-->
<div class="border border-dark mt-3 p-1" style="background-color:rgb(255, 235, 205);">
<ol type="1" start="22">
    <li>Di dalam kerucut dengan jari-jari \(16\) m dan tinggi \(15\) m akan dibuat sebuah tabung. Agar volume tabung maksimum, tinggi tabung tersebut haruslah . . . m</li>
    <ol type="A">
        <li>\(10 \)</li>
        <li>\(9 \)</li>
        <li>\(7,5 \)</li>
        <li>\(4 \)</li>
        <li>\(5 \)</li>
    </ol>
    <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal22A" aria-expanded="false" aria-controls="collapsesoal22A">
    Alternatif Penyelesaian:
    </button>
    <div class="collapse" id="collapsesoal22A">
        <div class="card card-body overflow-auto">
        <img src="{{asset('asets/PAT/21_2023_matwajib.png')}}" alt="jawaban22" width="70%">
            <p>Kesebangunan segitiga : <br>
            \begin{align*}
                \frac{EC}{DE} &= \frac{BC}{AB} \\
                \frac{a-h}{r} &= \frac{a}{b} \\
                h &= a - \frac{ar}{b}
            \end{align*}
            </p>
            <p>\begin{align*}
                V_{tabung} &= \pi r^2 h \\
                &= \pi r^2 \left( a- \frac{ar}{b} \right) \\
                &= \pi r^2 a - \frac{\pi r^3 a}{b}
                \end{align*}</p>
            <p>\begin{align*}
                V_{max} \to V' &= 0 \\
                 V &= \pi r^2 a - \frac{\pi r^3 a}{b} \\
                 V' &= 2 \pi r a - \frac{3\pi r^2 a}{b} \\
                 0 &= 2 \pi r (15) - \frac{3\pi r^2 (15)}{16} \\
                 \frac{45 \pi r^2}{16} &= 30 \pi r \\
                 \frac{45 r} {16} &= 30 \\
                 45 r &= 16 \times 30 \\
                 r & = \frac{480}{45} \\
                 &= \frac{32}{3} \\\\
                 h_{tabung} &= a - \frac{ar}{b} \\
                 &= 15 - \frac{(15)(\frac{32}{3})}{16} \\
                 &= 5
                \end{align*}</p>
        <b class="text-end text-danger fw-bold"> <h3>JAWABAN : E</h3></b>
        </div>
    </div>
    <hr />
</ol>
<ol type="1" start="22">
    <li>Di dalam kerucut dengan jari-jari \(18\) m dan tinggi \(12\) m akan dibuat sebuah tabung. Agar volume tabung maksimum, tinggi tabung tersebut haruslah . . . m</li>
    <ol type="A">
        <li>\(10 \)</li>
        <li>\(9 \)</li>
        <li>\(7,5 \)</li>
        <li>\(4 \)</li>
        <li>\(5 \)</li>
    </ol>
    <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal22B" aria-expanded="false" aria-controls="collapsesoal22B">
    Alternatif Penyelesaian:
    </button>
    <div class="collapse" id="collapsesoal22B">
        <div class="card card-body overflow-auto">
            <img src="{{asset('asets/PAT/21_2023_matwajib.png')}}" alt="jawaban22" width="70%">
            <p>Kesebangunan segitiga : <br>
            \begin{align*}
                \frac{EC}{DE} &= \frac{BC}{AB} \\
                \frac{a-h}{r} &= \frac{a}{b} \\
                h &= a - \frac{ar}{b}
            \end{align*}
            </p>
            <p>\begin{align*}
                V_{tabung} &= \pi r^2 h \\
                &= \pi r^2 \left( a- \frac{ar}{b} \right) \\
                &= \pi r^2 a - \frac{\pi r^3 a}{b}
                \end{align*}</p>
            <p>\begin{align*}
                V_{max} \to V' &= 0 \\
                 V &= \pi r^2 a - \frac{\pi r^3 a}{b} \\
                 V' &= 2 \pi r a - \frac{3\pi r^2 a}{b} \\
                 0 &= 2 \pi r (12) - \frac{3\pi r^2 (12)}{18} \\
                 \frac{36 \pi r^2}{18} &= 24 \pi r \\
                 \frac{36 r} {18} &= 24 \\
                 r &= \frac{18 \times 24}{36} \\
                 &= 3 \times 4 \\
                 & = 12 \\\\
                 h_{tabung} &= a - \frac{ar}{b} \\
                 &= 12 - \frac{12 \times 12 }{18} \\
                 &= 12-(2 \times 4) \\
                 &= 4
                \end{align*}</p>
        <b class="text-end text-danger fw-bold"> <h3>JAWABAN : D</h3></b>
        </div>
    </div>
</ol>
</div>
<!-- SOAL end -->

<!--=======================  soal23 ===================================-->
<div class="border border-dark mt-3 p-1" style="background-color:rgb(211, 255, 205);">
<ol type="1" start="23">
    <li>Hasil dari \(\int (4x^3 -6x^2 +2x + 3) dx = . . .\)</li>
        <ol type="A">
            <li>\(x^4 -3x^3 +x^2 +3x +C \)</li>
            <li>\(x^4 -2x^3 +x^2 +3x +C \)</li>
            <li>\(2x^4 -3x^3 +x^2 +3x +C \)</li>
            <li>\(2x^4 -2x^3 +x^2 +3x +C \)</li>
            <li>\(4x^4 -2x^3 +x^2 +3x +C \)</li>
        </ol>
        <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal23A" aria-expanded="false" aria-controls="collapsesoal23A">
        Alternatif Penyelesaian:
        </button>
        <div class="collapse" id="collapsesoal23A">
            <div class="card card-body overflow-auto">
            <p>Mari kita terapkan aturan dasar dalam mengintegrasikan polinomial:

                \begin{align*}
                \int (4x^3 -6x^2 +2x + 3) dx &= \int 4x^3 dx - \int 6x^2 dx + \int 2x dx + \int 3 dx \\
                &= \frac{4}{4}x^4 - \frac{6}{3}x^3 + \frac{2}{2}x^2 + 3x + C \\
                &= x^4 - 2x^3 + x^2 + 3x + C,
                \end{align*}

                dengan C sebagai konstanta integrasi. Oleh karena itu, hasil dari integral tersebut adalah \(x^4 - 2x^3 + x^2 + 3x + C\).</p>
            <b class="text-end text-danger fw-bold"> <h3>JAWABAN : B</h3></b>
            </div>
        </div>
        <hr />
</ol>
<!-- 23B -->
<ol type="1" start="23">
    <li>Hasil dari \(\int (4x^3 -9x^2 +2x + 3) dx = . . .\)</li>
        <ol type="A">
            <li>\(x^4 -3x^3 +x^2 +3x +C \)</li>
            <li>\(x^4 -2x^3 +x^2 +3x +C \)</li>
            <li>\(2x^4 -3x^3 +x^2 +3x +C \)</li>
            <li>\(2x^4 -2x^3 +x^2 +3x +C \)</li>
            <li>\(4x^4 -2x^3 +x^2 +3x +C \)</li>
        </ol>
        <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal23B" aria-expanded="false" aria-controls="collapsesoal23B">
        Alternatif Penyelesaian:
        </button>
        <div class="collapse" id="collapsesoal23B">
            <div class="card card-body overflow-auto">
            <p>Mari kita terapkan aturan dasar dalam mengintegrasikan polinomial:

                \begin{align*}
                \int (4x^3 -9x^2 +2x + 3) dx &= \int 4x^3 dx - \int 9x^2 dx + \int 2x dx + \int 3 dx \\
                &= \frac{4}{4}x^4 - \frac{9}{3}x^3 + \frac{2}{2}x^2 + 3x + C \\
                &= x^4 - 3x^3 + x^2 + 3x + C,
                \end{align*}

                dengan C sebagai konstanta integrasi. Oleh karena itu, hasil dari integral tersebut adalah \(x^4 - 3x^3 + x^2 + 3x + C\).</p>
            <b class="text-end text-danger fw-bold"> <h3>JAWABAN : A</h3></b>
            </div>
        </div>
</ol>
</div>
<!--=======================  soal24 ===================================-->
<div class="border border-dark mt-3 p-1" style="background-color:rgb(168, 230, 244);">
<ol type="1" start="24">
    <li>Jika \(f(x) = (3x-1)(x+3) \) maka \(\int f(x) dx=... \)</li>
        <ol type="A">
            <li>\(x^3 +2x^2 -3x + C  \)</li>
            <li>\(x^3 -2x^2 -3x + C  \)</li>
            <li>\(x^3 +4x^2 -3x + C  \)</li>
            <li>\(x^3 -4x^2 -3x + C  \)</li>
            <li>\(3x^3 +4x^2 -3x + C  \)</li>
        </ol>
        <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal24A" aria-expanded="false" aria-controls="collapsesoal24A">
        Alternatif Penyelesaian:
        </button>
        <div class="collapse" id="collapsesoal24A">
            <div class="card card-body overflow-auto">
            <p>Untuk menyelesaikan integral ini, kita bisa menggunakan metode substitusi atau metode ekspansi. Berikut adalah solusi menggunakan metode ekspansi:

                \begin{align*}
                \int (3x-1)(x+3) dx &= \int (3x^2 + 8x - 3) dx \\
                &= 3\int x^2 dx + 8\int x dx - 3\int 1 dx \\
                &= 3 \cdot \frac{1}{3} x^3 + 8 \cdot \frac{1}{2} x^2 - 3x + C \\
                &= x^3 + 4x^2 - 3x + C,
                \end{align*}

                di mana C adalah konstanta integrasi.</p>
            <b class="text-end text-danger fw-bold"> <h3>JAWABAN : C</h3></b>
            </div>
        </div>
        <hr />
</ol>
<!-- 24B -->
<ol type="1" start="24">
    <li>Jika \(f(x) = (3x+1)(x-3) \) maka \(\int f(x) dx=... \)</li>
        <ol type="A">
            <li>\(x^3 +2x^2 -3x + C  \)</li>
            <li>\(x^3 -2x^2 -3x + C  \)</li>
            <li>\(x^3 +4x^2 -3x + C  \)</li>
            <li>\(x^3 -4x^2 -3x + C  \)</li>
            <li>\(3x^3 +4x^2 -3x + C  \)</li>
        </ol>
        <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal24B" aria-expanded="false" aria-controls="collapsesoal24B">
        Alternatif Penyelesaian:
        </button>
        <div class="collapse" id="collapsesoal24B">
            <div class="card card-body overflow-auto">
            <p>Untuk menyelesaikan integral ini, kita perlu mengembangkan ekspresi di dalam integral terlebih dahulu:

                \begin{align*}
                (3x+1)(x-3) &= 3x^2 - 8x - 3
                \end{align*}

                Sekarang kita dapat melakukan integrasi:

                \begin{align*}
                f(x) &= \int (3x+1)(x-3) dx \\
                &= \int (3x^2 - 8x - 3) dx \\
                &= \frac{3}{3}x^3 - \frac{8}{2}x^2 - 3x + C \\
                &= x^3 - 4x^2 - 3x + C,
                \end{align*}

                di mana C adalah konstanta integrasi.</p>
            <b class="text-end text-danger fw-bold"> <h3>JAWABAN : D </h3></b>
            </div>
        </div>
</ol>
</div>
<!--=======================  soal25 ===================================-->
<div class="border border-dark mt-3 p-1" style="background-color:rgb(218, 205, 255);">
<ol type="1" start="25">
    <li>Nilai dari \(\displaystyle \int_{0}^{3} (3x^2-2x-3) \; dx \) adalah . . .</li>
    <ol type="A">
        <li>\(0 \)</li>
        <li>\(3 \)</li>
        <li>\(5 \)</li>
        <li>\(9 \)</li>
        <li>\(12 \)</li>
    </ol>
    <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal25A" aria-expanded="false" aria-controls="collapsesoal25A">
    Alternatif Penyelesaian:
    </button>
    <div class="collapse" id="collapsesoal25A">
        <div class="card card-body overflow-auto">
        <p>

            Untuk menyelesaikan integral tersebut, kita perlu menggunakan rumus dasar integral sebagai berikut:

            \[\int x^n \; dx = \frac{x^{n+1}}{n+1} + C\]

            dengan C adalah konstanta integrasi.

            Dengan menggunakan rumus tersebut, integral dari \(3x^2-2x-3\) adalah:

            \begin{align*}
            \int (3x^2-2x-3) \; dx &= \int 3x^2 \; dx - \int 2x \; dx - \int 3 \; dx \\
            &= x^3 - x^2 - 3x + C
            \end{align*}

            Maka nilai dari integral \(\displaystyle \int_{0}^{3} (3x^2-2x-3) \; dx \) adalah:

            \begin{align*}
            \int_{0}^{3} (3x^2-2x-3) \; dx &= \left[x^3 - x^2 - 3x \right]_{0}^{3} \\
            &= \left[(3)^3 - (3)^2 - 3(3)\right] - \left[(0)^3 - (0)^2 - 3(0)\right] \\
            &= 9
            \end{align*}

            Sehingga, nilai dari integral tersebut adalah 9.</p>

            <p></p>
        <b class="text-end text-danger fw-bold"> <h3>JAWABAN : D </h3></b>
        </div>
    </div>
    <hr>
</ol>
<!-- 25B -->
<ol type="1" start="25">
    <li>Nilai dari \(\displaystyle \int_{0}^{3} (x^2-4x+4) \; dx \) adalah . . .</li>
    <ol type="A">
        <li>\(0 \)</li>
        <li>\(3 \)</li>
        <li>\(5 \)</li>
        <li>\(8 \)</li>
        <li>\(12 \)</li>
    </ol>
    <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal25B" aria-expanded="false" aria-controls="collapsesoal25B">
    Alternatif Penyelesaian:
    </button>
    <div class="collapse" id="collapsesoal25B">
        <div class="card card-body overflow-auto">
        <p>

            Untuk menyelesaikan integral tersebut, kita perlu menggunakan rumus dasar integral sebagai berikut:

            \[\int x^n \; dx = \frac{x^{n+1}}{n+1} + C\]

            dengan C adalah konstanta integrasi.

            Dengan menggunakan rumus tersebut, integral dari \(x^2-4x+4\) adalah:

            \begin{align*}
            \int (x^2-4x+4) \; dx &= \int x^2 \; dx - \int 4x \; dx + \int 4 \; dx \\
            &= \frac{x^3}{3} - 2x^2 + 4x + C
            \end{align*}

            Maka nilai dari integral \(\displaystyle \int_{0}^{3} (x^2-4x+4) \; dx \) adalah:

            \begin{align*}
            \int_{0}^{3} (x^2-4x+4) \; dx &= \left[\frac{x^3}{3} - 2x^2 + 4x \right]_{0}^{3} \\
            &= \left[\frac{(3)^3}{3} - 2(3)^2 + 4(3)\right] - \left[\frac{(0)^3}{3} - 2(0)^2 + 4(0)\right] \\
            &= 3
            \end{align*}

            Sehingga, nilai dari integral tersebut adalah 3.</p>
        <b class="text-end text-danger fw-bold"> <h3>JAWABAN : B </h3></b>
        </div>
    </div>
</ol>
</div>
<!--=======================  soal26 ===================================-->
<div class="border border-dark mt-3 p-1" style="background-color:rgb(255, 205, 239);">
<ol type="1" start="26">
    <li>Jika \(a \in R \) maka \(\displaystyle \int_{1}^{a} (4x-1) \; dx =5\) akan dipenuhi untuk nilai \(a=...\) </li>
    <ol type="A">
        <li>\(2 \)</li>
        <li>\(3 \)</li>
        <li>\(5 \)</li>
        <li>\(\displaystyle \frac{9}{2} \)</li>
        <li>\(\displaystyle \frac{3}{2} \)</li>
    </ol>
    <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal26A" aria-expanded="false" aria-controls="collapsesoal26A">
    Alternatif Penyelesaian:
    </button>
    <div class="collapse" id="collapsesoal26A">
        <div class="card card-body overflow-auto">
        <p>Kita dapat menyelesaikan integral tersebut dengan menggunakan rumus dasar integral:

            \begin{align*}
            \int_{1}^{a} (4x-1) \; dx &= \left[2x^2 - x\right]_{1}^{a} \\
            &= 2a^2 - a - 1
            \end{align*}

            Kita ingin mencari nilai \(a\) yang membuat integral tersebut sama dengan \(5\), sehingga:

            \begin{align*}
            2a^2 - a - 1 &= 5 \\
            2a^2 - a - 6 &= 0 \\
            (2a+3)(a-2) &= 0
            \end{align*}

            Maka, nilai \(a\) yang memenuhi persamaan tersebut adalah \(a=-\frac{3}{2}\) atau \(a=2\). Namun, karena nilai \(a\) harus lebih besar dari 1, maka nilai \(a\) yang memenuhi persamaan tersebut adalah \(a=2\).</p>
        <b class="text-end text-danger fw-bold"> <h3>JAWABAN : A </h3></b>
        </div>
    </div>
    <hr>
</ol>
<ol type="1" start="26">
    <li>Jika \(a \in R \) maka \(\displaystyle \int_{1}^{a} (4x-1) \; dx =8\) akan dipenuhi untuk nilai \(a=...\) </li>
    <ol type="A">
        <li>\(2 \)</li>
        <li>\(3 \)</li>
        <li>\(5 \)</li>
        <li>\(\displaystyle \frac{9}{2} \)</li>
        <li>\(\displaystyle \frac{3}{2} \)</li>
    </ol>
    <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal26B" aria-expanded="false" aria-controls="collapsesoal26B">
    Alternatif Penyelesaian:
    </button>
    <div class="collapse" id="collapsesoal26B">
        <div class="card card-body overflow-auto">
        <p>Kita dapat menyelesaikan integral tersebut dengan menggunakan rumus dasar integral:

            \begin{align*}
            \int_{1}^{a} (4x-1) \; dx &= \left[2x^2 - x\right]_{1}^{a} \\
            &= 2a^2 - a - 1
            \end{align*}

            Kita ingin mencari nilai \(a\) yang membuat integral tersebut sama dengan \(8\), sehingga:

            \begin{align*}
            2a^2 - a - 1 &= 8 \\
            2a^2 - a - 9 &= 0 \\
            (2a+3)(a-3) &= 0
            \end{align*}

            Maka, nilai \(a\) yang memenuhi persamaan tersebut adalah \(a=-\frac{3}{2}\) atau \(a=3\). Namun, karena nilai \(a\) harus lebih besar dari 1, maka nilai \(a\) yang memenuhi persamaan tersebut adalah \(a=3\).</p>
        <b class="text-end text-danger fw-bold"> <h3>JAWABAN : B </h3></b>
        </div>
    </div>
</ol>
</div>

<!--=======================  soal27 ===================================-->
<div class="border border-dark mt-3 p-1" style="background-color:rgb(241, 183, 183);">
    <ol type="1" start="27">
        <li>Nilai dari \(\displaystyle \int_{0}^{2} \sqrt{4x+1} \; dx \) adalah . . .</li>
        <ol type="A">
            <li>\(0 \)</li>
            <li>\(\displaystyle \frac{13}{3} \)</li>
            <li>\(\displaystyle \frac{14}{9} \)</li>
            <li>\(\displaystyle \frac{10}{3} \)</li>
            <li>\(\displaystyle \frac{10}{9} \)</li>
        </ol>
        <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal27A" aria-expanded="false" aria-controls="collapsesoal27A">
            Alternatif Penyelesaian:
            </button>
            <div class="collapse" id="collapsesoal27A">
                <div class="card card-body overflow-auto">
                <p>Untuk menyelesaikan integral ini, kita dapat menggunakan metode substitusi. Mari kita ambil:

                    $$u = 4x + 1$$

                    Kemudian, kita bisa mengekspresikan \(x\) dalam bentuk \(u\) sebagai:

                    $$x = \frac{u - 1}{4}$$

                    Selanjutnya, kita perlu mencari batas integrasi untuk \(u\) saat \(x\) berubah dari \(0\) menjadi \(2\). Ketika \(x = 0\), kita memiliki:

                    $$u = 4x + 1 = 4(0)+1=1$$

                    Dan ketika \(x = 2\), kita memiliki:

                    $$u = 4x + 1 = 4(2)+1=9$$

                    Jadi integralnya menjadi:

                    $$\int_{1}^{9} \sqrt{u} \frac{dx}{du} du$$

                    di mana kita telah menggunakan aturan rantai untuk menemukan \(\displaystyle \frac{dx}{du}\), yang adalah:

                    $$\frac{dx}{du} = \frac{1}{4}$$

                    Dengan mengganti ini di dalam integral, kita mendapatkan:

                    $$\int_{1}^{9} \sqrt{u} \frac{dx}{du} du = \frac{1}{4} \int_{1}^{9} \sqrt{u} du = \frac{1}{4} \cdot \frac{2}{3} u^{\frac{3}{2}} \Biggr|_{1}^{9}$$

                    Dengan mengevaluasi integral pada batas integrasi, kita dapatkan:

                    $$\frac{1}{4} \cdot \frac{2}{3} (9^{\frac{3}{2}} - 1^{\frac{3}{2}}) = \frac{1}{6} (27 - 1) = \frac{26}{6} = \frac{13}{3}$$

                    Jadi, nilai integralnya adalah \(\displaystyle \frac{13}{3}\).</p>
                <b class="text-end text-danger fw-bold"> <h3>JAWABAN : B</h3></b>
                </div>
            </div>
            <hr />
    </ol>
    <ol type="1" start="27">
        <li>Nilai dari \(\displaystyle \int_{0}^{1} \sqrt{3x+1} \; dx \) adalah . . .</li>
        <ol type="A">
            <li>\(0 \)</li>
            <li>\(\displaystyle \frac{13}{3} \)</li>
            <li>\(\displaystyle \frac{14}{9} \)</li>
            <li>\(\displaystyle \frac{10}{3} \)</li>
            <li>\(\displaystyle \frac{10}{9} \)</li>
        </ol>
        <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal27B" aria-expanded="false" aria-controls="collapsesoal27B">
            Alternatif Penyelesaian:
            </button>
            <div class="collapse" id="collapsesoal27B">
                <div class="card card-body overflow-auto">
                <p>

                    Untuk menyelesaikan integral ini, kita dapat menggunakan metode substitusi. Mari kita ambil:

                    $$u = 3x + 1$$

                    Kemudian, kita bisa mengekspresikan \(x\) dalam bentuk \(u\) sebagai:

                    $$x = \frac{u - 1}{3}$$

                    Selanjutnya, kita perlu mencari batas integrasi untuk \(u\) saat \(x\) berubah dari \(0\) menjadi \(1\). Ketika \(x = 0\), kita memiliki:

                    $$u = 3x + 1 = 3(0)+1 = 1$$

                    Dan ketika \(x = 1\), kita memiliki:

                    $$u = 3x + 1 = 3(1)+1 = 4$$

                    Jadi integralnya menjadi:

                    $$\int_{1}^{4} \sqrt{u} \frac{dx}{du} du$$

                    di mana kita telah menggunakan aturan rantai untuk menemukan \(\displaystyle \frac{dx}{du}\), yang adalah:

                    $$\frac{dx}{du} = \frac{1}{3}$$

                    Dengan mengganti ini di dalam integral, kita mendapatkan:

                    $$\int_{1}^{4} \sqrt{u} \frac{dx}{du} du = \frac{1}{3} \int_{1}^{4} \sqrt{u} du = \frac{1}{3} \cdot \frac{2}{3} u^{\frac{3}{2}} \Biggr|_{1}^{4}$$

                    Dengan mengevaluasi integral pada batas integrasi, kita dapatkan:

                    $$\frac{1}{3} \cdot \frac{2}{3} (4^{\frac{3}{2}} - 1^{\frac{3}{2}}) = \frac{1}{3} \cdot \frac{2}{3} (8 - 1) = \frac{14}{9}$$

                    Jadi, nilai integralnya adalah \(\frac{14}{9}\).</p>
                <b class="text-end text-danger fw-bold"> <h3>JAWABAN : C</h3></b>
                </div>
            </div>
            <hr />
    </ol>
</div>
<!--=======================  soal28 ===================================-->
<div class="border border-dark mt-3 p-1" style="background-color:rgb(255, 205, 205);">
<ol type="1" start="28">
    <li>Sebuah benda bergerak dari keadaan diam dengan percepatan pada setiap saat \(t\) ditentukan oleh \(a(t)=5-t \). Pada gerakan tersebut, benda akan berhenti setelah . . . detik.</li>
        <ol type="A">
            <li>\(3\)</li>
            <li>\(5\)</li>
            <li>\(10\)</li>
            <li>\(12\)</li>
            <li>\(15\)</li>
        </ol>
        <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal28A" aria-expanded="false" aria-controls="collapsesoal28A">
        Alternatif Penyelesaian:
        </button>
        <div class="collapse" id="collapsesoal28A">
            <div class="card card-body overflow-auto">
            <p>
                Dalam kasus ini, percepatan benda adalah \(a(t) = 5-t\), sehingga kita dapat mengganti nilai ini dalam persamaan:

                $$v(t) = \int (5-t) dt = \left[5t - \frac{t^2}{2}\right] = 5t - \frac{t^2}{2}$$

                Kita ingin mencari waktu ketika benda berhenti, yang berarti kecepatannya nol. Oleh karena itu, kita dapat menyelesaikan persamaan berikut untuk \(t\):

                $$5t - \frac{t^2}{2} = 0$$

                Dengan mengalikan kedua sisi dengan \(-2\) dan mengubah persamaan menjadi bentuk kuadrat, kita dapatkan:

                $$t^2 - 10t = 0$$

                $$t(t-10) = 0$$

                Jadi, benda akan berhenti setelah \(t = 0\) detik atau \(t = 10\) detik. Namun, karena kita sedang mencari waktu ketika benda berhenti setelah bergerak dari keadaan diam, maka solusi yang benar adalah \(t = 10\) detik.</p>
            <b class="text-end text-danger fw-bold"> <h3>JAWABAN : C</h3></b>
            </div>
        </div>
        <hr />
</ol>
<!-- 23B -->
<ol type="1" start="28">
    <li>Sebuah benda bergerak dari keadaan diam dengan percepatan pada setiap saat \(t\) ditentukan oleh \(a(t)=6-t \). Pada gerakan tersebut, benda akan berhenti setelah . . . detik.</li>
        <ol type="A">
            <li>\(3\)</li>
            <li>\(5\)</li>
            <li>\(10\)</li>
            <li>\(12\)</li>
            <li>\(15\)</li>
        </ol>
        <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal28B" aria-expanded="false" aria-controls="collapsesoal28B">
        Alternatif Penyelesaian:
        </button>
        <div class="collapse" id="collapsesoal28B">
            <div class="card card-body overflow-auto">
                <p>
                    Dalam kasus ini, percepatan benda adalah \(a(t) = 6-t\), sehingga kita dapat mengganti nilai ini dalam persamaan:

                    $$v(t) = \int (6-t) dt = \left[6t - \frac{t^2}{2}\right] = 6t - \frac{t^2}{2}$$

                    Kita ingin mencari waktu ketika benda berhenti, yang berarti kecepatannya nol. Oleh karena itu, kita dapat menyelesaikan persamaan berikut untuk \(t\):

                    $$6t - \frac{t^2}{2} = 0$$

                    Dengan mengalikan kedua sisi dengan \(-2\) dan mengubah persamaan menjadi bentuk kuadrat, kita dapatkan:

                    $$t^2 - 12t = 0$$

                    $$t(t-12) = 0$$

                    Jadi, benda akan berhenti setelah \(t = 0\) detik atau \(t = 12\) detik. Namun, karena kita sedang mencari waktu ketika benda berhenti setelah bergerak dari keadaan diam, maka solusi yang benar adalah \(t = 12\) detik.</p>
            <b class="text-end text-danger fw-bold"> <h3>JAWABAN : D</h3></b>
            </div>
        </div>
        <hr />
</ol>
</div>
<!--=======================  soal29 ===================================-->
<div class="border border-dark mt-3 p-1" style="background-color:rgb(255, 235, 205);">
<ol type="1" start="29">
    <li>\(\int \sqrt{2x+3} dx = . . . \)</li>
        <ol type="A">
            <li>\(\displaystyle (2x+3)\sqrt{2x+3} +C  \)</li>
            <li>\(\displaystyle \frac{1}{2} (2x+3)\sqrt{2x+3} +C  \)</li>
            <li>\(\displaystyle \frac{1}{3} (2x+3)\sqrt{2x+3} +C  \)</li>
            <li>\(\displaystyle \frac{1}{2} \sqrt{2x+3} +C  \)</li>
            <li>\(\displaystyle \frac{1}{3} \sqrt{2x+3} +C  \)</li>
        </ol>
        <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal29A" aria-expanded="false" aria-controls="collapsesoal29A">
        Alternatif Penyelesaian:
        </button>
        <div class="collapse" id="collapsesoal29A">
            <div class="card card-body overflow-auto">
            <p><b>CARA I :</b></p>
            <p>Misalkan \(u=2x + 3\) maka</p>
                <p>\(\begin{align} \displaystyle
                \frac{du}{dx} &= 2 \\
                du &= 2 dx \\
                dx &= \frac{1}{2} du
                \end{align}\)</p>
                <p>\(\displaystyle \begin{align}
                    \int \sqrt{2x+3} dx &= \int \sqrt{u}. \frac{1}{2} du \\
                    &= \frac{1}{2} \int u^{\frac{1}{2}} du \\
                    &= \frac{1}{2} \frac{2}{3} u^{\frac{3}{2}} +C \\
                    &= \frac{1}{3} u \sqrt{u} +C \\
                    &= \frac{1}{3} (2x+3) \sqrt{2x+3} +C
                    \end{align}\)</p>
                <p>atau</p>
                <p><b>CARA II</b></p>
                <p>\(\displaystyle \begin{align}
                    \int (ax+b)^n dx &= \frac{1}{a(n+1)} (ax+b)^{n+1} +C \\
                    \int \sqrt{2x+3} dx &= \int (2x+3)^{\frac{1}{2}} dx \\
                    &= \frac{1}{2(\frac{1}{2} +1)} (2x+3)^{\frac{1}{2}+1} +C \\
                    &= \frac{1}{2(\frac{3}{2})}(2x+3)^{\frac{3}{2}}+C\\
                    &= \frac{1}{3} (2x+3) \sqrt{2x+3} +C
                    \end{align}\)</p>
            <b class="text-end text-danger fw-bold"> <h3>JAWABAN : C</h3></b>
            </div>
        </div>
        <hr />
<ol type="1" start="29">
    <li>\(\int \sqrt{5x+7} dx = . . . \)</li>
        <ol type="A">
            <li>\(\displaystyle (2x+3)\sqrt{2x+3} +C  \)</li>
            <li>\(\displaystyle \frac{1}{2} (2x+3)\sqrt{2x+3} +C  \)</li>
            <li>\(\displaystyle \frac{1}{3} (2x+3)\sqrt{2x+3} +C  \)</li>
            <li>\(\displaystyle \frac{1}{2} \sqrt{2x+3} +C  \)</li>
            <li>\(\displaystyle \frac{1}{3} \sqrt{2x+3} +C  \)</li>
        </ol>
        <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal29B" aria-expanded="false" aria-controls="collapsesoal29B">
        Alternatif Penyelesaian:
        </button>
        <div class="collapse" id="collapsesoal29B">
            <div class="card card-body overflow-auto">
            <p><b>CARA I :</b></p>
            <p>Misalkan \(u=5x + 7\) maka</p>
                <p>\(\begin{align} \displaystyle
                \frac{du}{dx} &= 5 \\
                du &= 5 dx \\
                dx &= \frac{1}{5} du
                \end{align}\)</p>
                <p>\(\displaystyle \begin{align}
                    \int \sqrt{5x+7} dx &= \int \sqrt{u}. \frac{1}{5} du \\
                    &= \frac{1}{5} \int u^{\frac{1}{2}} du \\
                    &= \frac{1}{5} \frac{2}{3} u^{\frac{3}{2}} +C \\
                    &= \frac{2}{15} u \sqrt{u} +C \\
                    &= \frac{2}{15} (5x+7) \sqrt{5x+7} +C
                    \end{align}\)</p>
            <b class="text-end text-danger fw-bold"> <h3>JAWABAN : E</h3></b>
            </div>
        </div>
</ol>
</div>
<!-- SOAL end -->
<!--=======================  soal30 ===================================-->
<div class="border border-dark mt-3 p-1" style="background-color:rgb(211, 255, 205);">
<ol type="1" start="30">
    <li>Hasil dari \(\displaystyle \int \frac{2x-2}{\sqrt{x^2 - 2x}} dx= . . . \)</li>
        <ol type="A">
            <li>\(\displaystyle \frac{1}{2} \sqrt{x^2 -2x} +C  \)</li>
            <li>\(\displaystyle \sqrt{x^2 -2x} +C  \)</li>
            <li>\(\displaystyle 2 \sqrt{x^2 -2x} +C  \)</li>
            <li>\(\displaystyle 2x\sqrt{x^2 -2x} +C  \)</li>
            <li>\(\displaystyle 4x\sqrt{x^2 -2x} +C  \)</li>
        </ol>
        <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal30A" aria-expanded="false" aria-controls="collapsesoal30A">
        Alternatif Penyelesaian:
        </button>
        <div class="collapse" id="collapsesoal30A">
            <div class="card card-body overflow-auto">
            <p>Untuk menyelesaikan integral ini dengan menggunakan substitusi, mari kita mulai dengan membuat substitusi: <br>
                Misal \(u = x^2 -2x\) sehingga \(du = 2x-2 \; dx\)
                \begin{align*}
                \int (x^2 - 2x)^{-\frac{1}{2}} (2x-2) \; dx &= \int u^{-\frac{1}{2}}\; du \\
                &=\frac{1}{-\frac{1}{2}+1} u^{-\frac{1}{2}+1} +C \\
                &=\frac{1}{\frac{1}{2}} u^{\frac{1}{2}} +C \\
                &= 2 \sqrt{u} +C \\
                &=2 \sqrt{x^2-2x} + C
                \end{align*}


               </p>
            <b class="text-end text-danger fw-bold"> <h3>JAWABAN : C</h3></b>
            </div>
        </div>
        <hr />
</ol>
<ol type="1" start="30">
    <li>Hasil dari \(\displaystyle \int \frac{x-1}{\sqrt{x^2 - 2x}} dx= . . . \)</li>
        <ol type="A">
            <li>\(\displaystyle \frac{1}{2} \sqrt{x^2 -2x} +C  \)</li>
            <li>\(\displaystyle \sqrt{x^2 -2x} +C  \)</li>
            <li>\(\displaystyle 2 \sqrt{x^2 -2x} +C  \)</li>
            <li>\(\displaystyle 2x\sqrt{x^2 -2x} +C  \)</li>
            <li>\(\displaystyle 4x\sqrt{x^2 -2x} +C  \)</li>
        </ol>
        <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal30B" aria-expanded="false" aria-controls="collapsesoal30B">
        Alternatif Penyelesaian:
        </button>
        <div class="collapse" id="collapsesoal30B">
            <div class="card card-body overflow-auto">
                <p>Untuk menyelesaikan integral ini dengan menggunakan substitusi, mari kita mulai dengan membuat substitusi: <br>
                    Misal \(u = x^2 -2x\) sehingga \(du = 2x-2 \; dx \to \frac{1}{2} du = (x-1)\; dx \)

                    \begin{align*}
                    \int (x^2 - 2x)^{-\frac{1}{2}} (x-1) \; dx &= \int u^{-\frac{1}{2}}\frac{1}{2}\; du \\
                    &=\frac{1}{2} \frac{1}{-\frac{1}{2}+1} u^{-\frac{1}{2}+1} +C \\
                    &=\frac{1}{2} \frac{1}{\frac{1}{2}} u^{\frac{1}{2}} +C \\
                    &= \frac{1}{2} \cdot 2 \sqrt{u} +C \\
                    &= \sqrt{x^2-2x} + C
                    \end{align*}
            <b class="text-end text-danger fw-bold"> <h3>JAWABAN : B</h3></b>
            </div>
        </div>
</ol>
</div>
<!-- SOAL end -->


<!-- ------------------------------------------------------------------------------------------------------------------- -->
<!-- Batas no SOAL -->

<!-- ======================================PESAN DISQUS============================================= -->
            <div class="row">
                <div class="col">
                    <div id="disqus_thread" class="mt-4"></div>
                </div>
            </div>
<!-- ======================================PESAN DISQUS============================================= -->
        </div>
        </div>
</section>

@endsection

