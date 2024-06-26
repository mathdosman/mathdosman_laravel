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
<!-- START KONTEN -->
<section >
    <div class="container p-2">
        <div class="row justify-content-center">
            <div class="col-md-9 p-2">
            <h2 class="text-center">Ujian Sekolah TAHUN 2023</h2>
            <h3 class="text-center text-danger fw-bold">MATEMATIKA WAJIB</h3>
            <p class="text-center fst-italic"> Math_Dosman</p>
            <hr />
                <div class="row">
                    <div class="col-sm-4">
                        <img src="{{asset('asets/PAS/US.png')}}" alt="US2023" class="img-fluid rounded-circle">
                    </div>
                    <div class="col">
                        <hr> <hr>
                    <p>Berikut merupakan soal Ujian Sekolah tahun 2023 di SMA Negeri 1 Gianyar</p>
                    <p>Kelas : XII MIPA/IPS</p>
                    <p>Waktu : 120 Menit</p>
                    <p>MATEMATIKA WAJIB</p>
                    <hr> <hr>
                    </div>
                </div>



            <hr>
            <ol type="1">
<!--=======================  soal1 ===================================-->
            <li>Bentuk sederhana dari \(\displaystyle \left(\frac{\frac{1}{8} m^{\frac{3}{2}} n^{-\frac{1}{3}}  }{ \frac{1}{2} m^{-\frac{1}{2}} n^{\frac{2}{3}} }  \right)^{-1} \) adalah . . . </li>
                <ol type="A">
                    <li>\(\displaystyle \frac{4m^2}{n^2} \)</li>
                    <li>\(\displaystyle \frac{4n}{m^2} \)</li>
                    <li>\(\displaystyle 4m^2 n^2 \)</li>
                    <li>\(\displaystyle \frac{m^2}{4n^2} \)</li>
                    <li>\(\displaystyle \frac{n^2}{4m^2} \)</li>

                </ol>
                <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal1" aria-expanded="false" aria-controls="collapsesoal1">
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal1">
                    <div class="card card-body overflow-auto">
                        <p>\(\displaystyle \begin{align}
                            \left(\frac{\frac{1}{8} m^{\frac{3}{2}} n^{-\frac{1}{3}}  }{ \frac{1}{2} m^{-\frac{1}{2}} n^{\frac{2}{3}} }  \right)^{-1} &= \left(\frac{2^{-3} m^{\frac{3}{2}} n^{-\frac{1}{3}}  }{ 2^{-1} m^{-\frac{1}{2}} n^{\frac{2}{3}} }  \right)^{-1} \\
                            &= \left(\frac{2^{3} m^{-\frac{3}{2}} n^{\frac{1}{3}}  }{ 2 m^{\frac{1}{2}} n^{-\frac{2}{3}} }  \right)\\
                            &= 2^{3-1} m^{(-\frac{3}{2} - \frac{1}{2})} n^{(\frac{1}{3} + \frac{2}{3})} \\
                            &= 2^2 m^{-\frac{4}{2}} n^{\frac{3}{3}} \\
                            &= 2^2 m^{-2} n \\
                            &= \frac{4n}{m^2}
                            \end{align}\)</p>
                    <b class="text-end text-danger fw-bold"> <h3>JAWABAN : B</h3></b>
                    </div>
                </div>
                <hr />
<!-- SOAL end -->
<!--=======================  soal2 ===================================-->
            <li>Persamaan grafik fungsi kuadrat berikut adalah ...</li>
            <img src="{{asset('asets/US/2023_02_wajib.png')}}" alt="soal2" class="img-fluid">
                <ol type="A">
                    <li>\(\displaystyle y=x^2+2x+6 \)</li>
                    <li>\(\displaystyle  y=\frac{1}{6} x^2+2x+6 \)</li>
                    <li>\(\displaystyle  y=x^2+2x-6 \)</li>
                    <li>\(\displaystyle y=-\frac{1}{6} x^2-2x-6 \)</li>
                    <li>\(\displaystyle y=6x^2+2x+36 \)</li>

                </ol>
                <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal2" aria-expanded="false" aria-controls="collapsesoal2">
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal2">
                    <div class="card card-body overflow-auto">
                        <p>Titik balik parabola adalah \((-6,0)\)</p>
                        <p>\(\displaystyle \begin{align}
                            y &= a(x-x_p)^2 + y_p \\
                            y &= a(x-(-6))^2 + 0\\
                            y &= a(x+6)^2
                            \end{align}\)</p>
                        <p>Untuk menentukan nilai \(a\) dan parabola melalui \((0,6)\) maka <br> \(\displaystyle \begin{align}
                            y &= a(x+6)^2 \\
                            6 &= a(0+6)^2 \\
                            6 &= 36 a \\
                            a &= \frac{6}{36} \\
                            a &= \frac{1}{6}
                            \end{align}\)</p>
                        <p>Substitusi nilai \(a\) ke persamaan parabola <br> \(\displaystyle \begin{align}
                            y &= \frac{1}{6} (x+6)^2 \\
                            y &= \frac{1}{6} (x^2 +12x + 36) \\
                            y &= \frac{1}{6} x^2 + 2x + 6
                            \end{align}\)</p>
                    <b class="text-end text-danger fw-bold"> <h3>JAWABAN : B</h3></b>
                    </div>
                </div>
                <hr />
<!-- SOAL end -->
<!--=======================  soal3 ===================================-->
            <li>Diketahui fungsi \(g(x) = 2x + 3\) dan \(\displaystyle f(x) = \frac{x}{x-2}\)  , untuk  \(x \neq 2\). Apabila \( (g \circ f)^{-1} (x)\) merupakan invers dari \((g \circ f)(x)\) . Rumus fungsi dari \((g \circ f)^{-1} (x)\)  adalah  . . .</li>
                <ol type="A">
                    <li>\(\displaystyle \frac{-x+3}{x-1} \) untuk \(x \neq 1 \)</li>
                    <li>\(\displaystyle \frac{2x+6}{x-5} \) untuk \(x \neq 5 \)</li>
                    <li>\(\displaystyle \frac{-x+3}{2x+2} \) untuk \(x \neq -1 \)</li>
                    <li>\(\displaystyle \frac{-x+3}{2x-2} \) untuk \(x \neq 1 \)</li>
                    <li>\(\displaystyle \frac{2x-6}{x-5} \) untuk \(x \neq 5 \)</li>

                </ol>
                <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal3" aria-expanded="false" aria-controls="collapsesoal3">
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal3">
                    <div class="card card-body overflow-auto">
                        <p>Jika \(\displaystyle \frac{ax+b}{cx+d} \) maka inversnya \(\displaystyle \frac{-dx+b}{cx-a} \)</p>
                        <p>\(\displaystyle \begin{align}
                            (g \circ f)(x) &= g(f(x)) \\
                            &= g \left(\frac{x}{x-2} \right) \\
                            &= 2 \left(\frac{x}{x-2} \right) + 3 \\
                            &= \left(\frac{2x}{x-2} \right) + 3\left(\frac{x-2}{x-2} \right) \\
                            &= \left(\frac{2x+3x-6}{x-2} \right) \\
                            &= \left(\frac{5x-6}{x-2} \right) \\\\
                            (g \circ f)^{-1} (x) &= \frac{2x-6}{x-5}
                            \end{align}\)</p>
                    <b class="text-end text-danger fw-bold"> <h3>JAWABAN : E</h3></b>
                    </div>
                </div>
                <hr />
<!-- SOAL end -->
<!--=======================  soal4 ===================================-->
            <li>Budi membeli 6 kaleng tiner dan 2 kaleng cat dengan harga Rp. 45.000,00. Sedangkan Ketut membeli 2 kaleng tiner dan 4 kaleng cat dengan harga Rp. 65.000,00. Selisih harga sekaleng cat dan sekaleng tiner adalah ... </li>
                <ol type="A">
                    <li>\(\text{Rp}11.000,00  \)</li>
                    <li>\(\text{Rp}11.500,00  \)</li>
                    <li>\(\text{Rp}12.000,00  \)</li>
                    <li>\(\text{Rp}12.500,00  \)</li>
                    <li>\(\text{Rp}13.000,00  \)</li>

                </ol>
                <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal4" aria-expanded="false" aria-controls="collapsesoal4">
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal4">
                    <div class="card card-body overflow-auto">
                        <p>Misalkan tiner = \(x\) dan cat = \(y\)</p>
                        <p>\(\displaystyle \begin{align}
                            6x + 2y &= 45.000 \\
                            2x + 4y &= 65.000 \\\\

                            12x+4y &= 90.000\\
                            2x+4y &= 65.000 \text{_}\\ \hline
                            10x &= 25.000 \\
                            x &= 2.500 \\\\

                            2x+4y &= 65.000\\
                            2(2.500) + 4y &= 65.000\\
                            4y &= 65.000-5.000\\
                            y&= \frac{60.000}{4} \\
                            y &= 15.000
                            \end{align}\)</p>
                    <p>Jadi, selisihnya adalah \(y-x = 15.000 - 2.500 = 12.500\)</p>
                    <b class="text-end text-danger fw-bold"> <h3>JAWABAN : D</h3></b>
                    </div>
                </div>
                <hr />
<!-- SOAL end -->
<!--=======================  soal5 ===================================-->
            <li>Pada sebuah supermarket, seorang karyawati menyediakan jasa pembungkusan kado. Untuk membungkus kado jenis A , dibutuhkan 2 lembar kertas pembungkus dan 2 meter pita. Sedangkan untuk membungkus kado jenis B dibutuhkan 2 lembar kertas pembungkus dan 1 meter pita. Tersedia kertas pembungkus 50 lembar dan pita 40 meter.  Upah untuk membungkus setiap kado jenis A Rp. 5.000,00, dan upah membungkus setiap kado B adalah Rp. 4.000,00. Upah maksimum yang diterima oleh karyawati tersebut adalah . . . </li>
                <ol type="A">
                    <li>\(\text{Rp}75.000,00  \)</li>
                    <li>\(\text{Rp}100.000,00  \)</li>
                    <li>\(\text{Rp}115.000,00  \)</li>
                    <li>\(\text{Rp}125.000,00  \)</li>
                    <li>\(\text{Rp}160.000,00  \)</li>

                </ol>
                <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal5" aria-expanded="false" aria-controls="collapsesoal5">
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal5">
                    <div class="card card-body overflow-auto">
                        <p>
                            <table class="table text-center table-bordered table-hover">
                                <thead style="background-color: rgb(181, 213, 213);">
                                    <tr>
                                        <th></th>
                                        <th>Kertas Pembungkus</th>
                                        <th>Pita</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th>Jenis A</th>
                                        <td>2 lembar</td>
                                        <td>2 meter</td>
                                    </tr>
                                    <tr>
                                        <th>Jenis B</th>
                                        <td>2 lembar</td>
                                        <td>1 meter</td>
                                    </tr>
                                    <tr>
                                        <td>Total</td>
                                        <td>50 lembar</td>
                                        <td>40 meter</td>
                                    </tr>
                                </tbody>
                            </table> <br>
                        </p>
                        <p>Harga jual, Jenis A = \(x\) = Rp5.000 dan Jenis B = \(y\) = Rp4.000</p>
                        <p>Pertidaksamaannya menjadi <br> \(\displaystyle \begin{align}
                            2x+2y &\leq 50 \\
                            2x+y &\leq 40 \\
                            \end{align}\)</p>
                        <p>\(\displaystyle \begin{align}
                            2x+2y &= 50 \\
                            x+y &= 40 \\
                            \end{align}\)</p>
                        <img src="{{asset('asets/US/2023_wajib_4.png')}}" alt="penyelesaian2" class="img-fluid border" width="80%">
                        <p>Maksimal akan di \((15,10)\), maka \(15 \times 5000 + 10 \times 4000 = 115.000\)</p>
                    <b class="text-end text-danger fw-bold"> <h3>JAWABAN : C</h3></b>
                    </div>
                </div>
                <hr />
<!-- SOAL end -->
<!--=======================  soal6 ===================================-->
            <li>Akar-akar persamaan kuadrat \(5x^2 + x - 3 = 0\)  adalah \(x_1\) dan \(x_2\). Nilai dari \(\displaystyle \frac{2}{x_1} + \frac{2}{x_2} = . . . \) </li>
                <ol type="A">
                    <li>\(\displaystyle \frac{2}{5} \)</li>
                    <li>\(\displaystyle \frac{2}{15} \)</li>
                    <li>\(\displaystyle -\frac{5}{3} \)</li>
                    <li>\(\displaystyle \frac{2}{3} \)</li>
                    <li>\(\displaystyle \frac{3}{5} \)</li>

                </ol>
                <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal6" aria-expanded="false" aria-controls="collapsesoal6">
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal6">
                    <div class="card card-body overflow-auto">
                        <p>\(\displaystyle \begin{align}
                            x_1 + x_2 &= -\frac{1}{5} \\
                            x_1.x_2 &= -\frac{3}{5} \\\\

                            \frac{2}{x_1} + \frac{2}{x_2} &= 2 \frac{x_2}{x_1 x_2} + \frac{x_1}{x_1 x_2} \\
                            2 \frac{x_1 + x_2}{x_1x_2} &= 2\frac{-\frac{1}{5}}{-\frac{3}{5}} \\
                            &= \boxed{\frac{2}{3}}
                            \end{align}\)</p>
                    <b class="text-end text-danger fw-bold"> <h3>JAWABAN : D</h3></b>
                    </div>
                </div>
                <hr />
<!-- SOAL end -->
<!--=======================  soal7 ===================================-->
            <li>Himpunan penyelesaian dari \(|x-7| - |x-2| = 3\) , adalah  . . .</li>
                <ol type="A">
                    <li>\(\{ 3 \}  \)</li>
                    <li>\(\{ -3 \}  \)</li>
                    <li>\(\{ -6 \}  \)</li>
                    <li>\(\{ 3, -6 \}  \)</li>
                    <li>\(\{ -3, 6 \}  \)</li>

                </ol>
                <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal7" aria-expanded="false" aria-controls="collapsesoal7">
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal7">
                    <div class="card card-body overflow-auto">
                        <p>Untuk menyelesaikan persamaan tersebut, kita perlu memeriksa beberapa kasus tergantung pada nilai \(x\) relatif terhadap \(7\) dan \(2\).
                            <br><br>
                            Kasus 1: \(x < 2\)
                            Ketika \(x < 2\), maka \(|x-7| = -(x-7)\) dan \(|x-2| = -(x-2)\). Maka persamaan dapat dituliskan sebagai:
                            \begin{align*}
                            -(x-7) - -(x-2) &= 3 \\
                            -x + 7 + x - 2 &= 3 \\
                            5 &= 3
                            \end{align*}
                            Kasus 1 tidak menghasilkan solusi yang valid karena persamaan tersebut bertentangan.
                            <br><br>
                            Kasus 2: \(2 \leq x < 7\)
                            Ketika \(2 \leq x < 7\), maka \(|x-7| = -(x-7)\) dan \(|x-2| = x-2\). Maka persamaan dapat dituliskan sebagai:
                            \begin{align*}
                            -(x-7) - (x-2) &= 3 \\
                            -x + 7 - x + 2 &= 3 \\
                            -2x + 9 &= 3 \\
                            -2x &= -6 \\
                            x &= 3
                            \end{align*}
                            Kasus 2 menghasilkan satu solusi valid, yaitu \(x = 3\).
                            <br><br>
                            Kasus 3: \(x \geq 7\)
                            Ketika \(x \geq 7\), maka \(|x-7| = x-7\) dan \(|x-2| = x-2\). Maka persamaan dapat dituliskan sebagai:
                            \begin{align*}
                            x-7 - (x-2) &= 3\\
                            x - 7 - x + 2 &= 3\\
                            -5 &= 3
                            \end{align*}
                            Kasus 3 tidak menghasilkan solusi yang valid karena persamaan tersebut bertentangan.
                            <br><br>
                            Jadi, himpunan penyelesaian dari \(|x-7| - |x-2| = 3\) adalah \(\boxed{\{3\}}\).</p>
                            <b class="text-end text-danger fw-bold"> <h3>JAWABAN : A</h3></b>
                        </div>
                    </div>
                <hr />
<!-- SOAL end -->
<!--=======================  soal8 ===================================-->
            <li>Diketahui matriks \(A= \begin{pmatrix}2&2x\\8&10 \end{pmatrix} \) , \(B = \begin{pmatrix}y&y\\15 &20 \end{pmatrix}\) dan \(C= \begin{pmatrix}2&4 \\ 7&9 \end{pmatrix}\), memenuhi persamaan \(\displaystyle \frac{1}{2} A + \frac{1}{5} B = C \). Nilai dari \(x+y\) adalah . . .</li>
                <ol type="A">
                    <li>\( 2 \)</li>
                    <li>\( 3 \)</li>
                    <li>\( 4 \)</li>
                    <li>\( 6 \)</li>
                    <li>\( 8 \)</li>

                </ol>
                <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal8" aria-expanded="false" aria-controls="collapsesoal8">
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal8">
                    <div class="card card-body overflow-auto">
                        <p>Untuk mencari nilai \(x\) dan \(y\), kita dapat menyelesaikan persamaan \(\displaystyle \frac{1}{2} A + \frac{1}{5} B = C\) dengan membandingkan elemen-elemen matriks yang sesuai.
                            <br><br>
                            Diketahui:
                            \begin{align*}
                            A &= \begin{pmatrix}2&2x\\8&10 \end{pmatrix}\\
                            B &= \begin{pmatrix}y&y\\15&20 \end{pmatrix}\\
                            C &= \begin{pmatrix}2&4\\7&9 \end{pmatrix}\\
                            \end{align*}
                            <br><br>
                            Maka, persamaan \(\displaystyle \frac{1}{2} A + \frac{1}{5} B = C\) dapat dituliskan sebagai:
                            <br><br>
                            \[\frac{1}{2} \begin{pmatrix}2&2x\\8&10 \end{pmatrix} + \frac{1}{5} \begin{pmatrix}y&y\\15&20 \end{pmatrix} = \begin{pmatrix}2&4\\7&9 \end{pmatrix}\]

                            Kali kedua matriks dengan pecahan tersebut:

                            \[\begin{pmatrix}\frac{1}{2}\cdot 2&\frac{1}{2}\cdot 2x\\\frac{1}{2}\cdot 8&\frac{1}{2}\cdot 10 \end{pmatrix} + \begin{pmatrix}\frac{1}{5}\cdot y&\frac{1}{5}\cdot y\\\frac{1}{5}\cdot 15&\frac{1}{5}\cdot 20 \end{pmatrix} = \begin{pmatrix}2&4\\7&9 \end{pmatrix}\]

                            Sederhanakan:

                            \[\begin{pmatrix}1&x\\\frac{4}{5}&1 \end{pmatrix} + \begin{pmatrix}\frac{y}{5}&\frac{y}{5}\\3&4 \end{pmatrix} = \begin{pmatrix}2&4\\7&9 \end{pmatrix}\]

                            Tambahkan matriks di sebelah kiri:

                            \[\begin{pmatrix}1+\frac{y}{5}&x+\frac{y}{5}\\ \frac{4}{5}+3&1+4 \end{pmatrix} = \begin{pmatrix}2&4\\7&9 \end{pmatrix}\]

                            Sederhanakan:

                            \[\begin{pmatrix}\frac{y+5}{5}&x+\frac{y}{5}\\ \frac{19}{5}&5 \end{pmatrix} = \begin{pmatrix}2&4\\7&9 \end{pmatrix}\]

                            Dari persamaan di atas, kita dapatkan sistem persamaan:
                            <br><br>
                            \(\displaystyle \frac{y+5}{5} = 2\), yang menghasilkan \(\displaystyle y+5 = 10\), sehingga \(\displaystyle y = 5\)
                            <br><br>
                            \(\displaystyle x+\frac{y}{5} = 4\), dengan menggantikan nilai \(\displaystyle y\) yang sudah kita temukan, menjadi \(\displaystyle x+\frac{5}{5} = 4\), sehingga \(\displaystyle x+1 = 4\), sehingga \(\displaystyle x = 3\)
                            <br><br>
                            Jadi, \(\displaystyle x+y = 3 + 5 = \boxed{8}\).</p>
                    <b class="text-end text-danger fw-bold"> <h3>JAWABAN : E</h3></b>
                    </div>
                </div>
                <hr />
<!-- SOAL end -->
<!--=======================  soal9 ===================================-->
            <li>Pinjaman sebesar Rp. 2.500.000,00 dibungakan dengan bunga tunggal 0,5% perbulan selama 2 tahun 3 bulan. Modal akhir dari pinjaman tersebut adalah. . .</li>
                <ol type="A">
                    <li>\(\text{Rp} 2.387.500,00 \)</li>
                    <li>\(\text{Rp} 2.738.500,00 \)</li>
                    <li>\(\text{Rp} 2.783.500,00 \)</li>
                    <li>\(\text{Rp} 2.812.500,00 \)</li>
                    <li>\(\text{Rp} 2.837.500,00 \)</li>

                </ol>
                <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal9" aria-expanded="false" aria-controls="collapsesoal9">
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal9">
                    <div class="card card-body overflow-auto">
                        <p>Untuk menghitung modal akhir dari pinjaman dengan bunga tunggal, kita perlu menggunakan rumus berikut:

                            \[Modal\ Akhir = Modal\ Awal + (Modal\ Awal \times Bunga \times Jangka\ Waktu)\]

                            Dalam kasus ini: <br>
                            Modal Awal = Rp. 2.500.000,00 <br>
                            Bunga = 0,5% per bulan (atau 0,005) <br>
                            Jangka Waktu = 2 tahun 3 bulan = 27 bulan (2 tahun x 12 bulan/tahun + 3 bulan) <br>
                            <br>
                            Menggantikan nilai ke dalam rumus, kita dapat menghitung modal akhir:
                            \begin{align*}
                            Modal\ Akhir &= 2.500.000 + (2.500.000 \times 0,005 \times 27) \\
                            Modal\ Akhir &= 2.500.000 + 337.500 \\
                            Modal\ Akhir &= 2.837.500 \\
                            \end{align*}
                            Jadi, modal akhir dari pinjaman tersebut adalah \(\boxed{\text{Rp} 2.837.500,00}\).</p>
                            <b class="text-end text-danger fw-bold"> <h3>JAWABAN : E</h3></b>
                    </div>
                </div>
                <hr />
                <!-- SOAL end -->
<!--=======================  soal10 ===================================-->
            <li>Rani, Sinta, Tati , dan Uci berbelanja di sebuah toko buah. Rani membeli 2 kg salak , 1 kg jeruk, dan 2 kg apel dengan harga Rp. 140.000,00. Sinta membeli 2 kg salak, 2 kg jeruk, dan 1 kg apel seharga Rp. 115.000,00, sedangkan Tati membayar Rp. 165.000,00 karena membeli 1 kg salak, 3 kg jeruk, dan 2 kg apel. Jika Uci ingin membeli 2 kg jeruk, dan 3 kg apel , jumlah yang harus dibayar Uci adalah...</li>
                <ol type="A">
                    <li>\(\text{Rp} 135.000,00 \)</li>
                    <li>\(\text{Rp} 150.000,00 \)</li>
                    <li>\(\text{Rp} 165.000,00 \)</li>
                    <li>\(\text{Rp} 175.000,00 \)</li>
                    <li>\(\text{Rp} 200.000,00 \)</li>

                </ol>
                <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal10" aria-expanded="false" aria-controls="collapsesoal10">
                Alternatif Penyelesaian:
            </button>
            <div class="collapse" id="collapsesoal10">
                <div class="card card-body overflow-auto">
                        <p>Mari kita selesaikan masalah ini dengan mencari tahu berapa harga per kilogram untuk setiap jenis buah terlebih dahulu.
                            <br>
                            Dari informasi yang diberikan, kita dapat membuat sistem persamaan linier sebagai berikut:
                            <br>
                            Untuk Rani: <br>
                            \(2x + y + 2z = 140.000    \to ...(1)\)
                            <br>
                            Untuk Sinta: <br>
                            \(2x + 2y + z = 115.000    \to ...(2)\)
                            <br>
                            Untuk Tati: <br>
                            \(x + 3y + 2z = 165.000    \to ...(3)\)
                            <br>
                            Dalam persamaan-persamaan di atas, \(x\), \(y\), dan \(z\) mewakili harga per kilogram salak, jeruk, dan apel secara berurutan.
                            <br>
                            Sekarang, kita akan mencari solusi dari sistem persamaan tersebut.
                            <br>
                            Dengan mengurangi persamaan (2) dari persamaan (1), kita dapatkan: <br>
                            \begin{align*}
                            (2x + 2y + z) - (2x + y + 2z) &= 115.000 - 140.000 \\
                            y - z &= -25.000    \to     ...(4)
                            \end{align*}

                            Selanjutnya, dengan mengurangi  persamaan (2) dari dua kali persamaan (3), kita dapatkan:
                            \begin{align*}
                            (x + 3y + 2z) - (2x + 2y + z) &= 165.000 - 115.000 \\
                            (2x + 6y + 4z) - (2x + 2y + z) &= 330.000 - 115.000 \\
                            4y + 3z &= 215.000  \to   ...(5)
                            \end{align*}

                            Dari persamaan (4) dan (5), kita dapatkan:
                            \begin{align*}
                            y - z &= -25.000 \ \times 4\\
                            4y + 3z &= 215.000 \ \times 1 \\ \hline
                            4y - 4z &= -100.000 \\
                            4y + 3z &= 215.000 \ (-) \\ \hline
                            -7z &= -315.000 \\
                            z &= 45.000
                            \end{align*}

                            Substitusikan nilai z ke persamaan (4), kita akan memperoleh:
                            \begin{align*}
                            y - z &= -25.000 \\
                            y - (45.000) &= -25.000 \\
                            y  &= -25.000  + 45.000\\
                            y  &= 20.0000\\
                            \end{align*}


                            Sekarang, kita akan menyelesaikan persamaan (1) dengan mensubstitusi nilai \(y\) dan \(z\):
                            \begin{align*}
                            2x + y + 2z &= 140.000 \\
                            2x + (20.000) + 2(45.000) &= 140.000 \\
                            2x + 20.000 + 90.000 &= 140.000 \\
                            2x + 110.000 &= 140.000 \\
                            2x  &= 140.000 - 110.000\\
                            2x  &= 30.000\\
                            x  &= 15.000
                            \end{align*}

                            Dengan menyelesaikan sistem persamaan di atas, kita dapat menentukan nilai \(x\), \(y\), dan \(z\), dan akhirnya, dapat menghitung jumlah yang harus dibayar Uci.
                            \( 2y+3z=2(20.000) + 3(45.000)=40.000+135.000=175.000 \)
                            <br><br>
                            Setelah menyelesaikan perhitungan, didapatkan hasil bahwa jumlah yang harus dibayar Uci adalah \(\boxed{\text{Rp} 175.000,00}\)</p>
                    <b class="text-end text-danger fw-bold"> <h3>JAWABAN : D</h3></b>
                    </div>
                </div>
                <hr />
<!-- SOAL end -->
<!--=======================  soal11 ===================================-->
            <li>Deret aritmatika dengan suku-suku \(1 + 3 + 5 + 7 + … + (2n-1)\). Rumus jumlah deret aritmatika tersebut dalam \(n = k + 1\) adalah . . .</li>
                <ol type="A">
                    <li>\((k^+1)^2 \)</li>
                    <li>\(2k \)</li>
                    <li>\((k+1)^2 \)</li>
                    <li>\((k^2 +1)^2 \)</li>
                    <li>\((2k+1)^2 \)</li>

                </ol>
                <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal11" aria-expanded="false" aria-controls="collapsesoal11">
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal11">
                    <div class="card card-body overflow-auto">
                        <p>Untuk mencari rumus jumlah deret aritmatika tersebut, kita dapat menggunakan rumus umum untuk jumlah deret aritmatika.
                            <br>
                            Rumus umum untuk jumlah deret aritmatika adalah: \(S_n = \frac{n}{2} \left( a + l \right)\),di mana \(S_n\) adalah jumlah deret ke-n, \(n\) adalah jumlah suku dalam deret, \(a\) adalah suku pertama dalam deret, dan \(l\) adalah suku terakhir dalam deret.
                            <br>
                            Dalam deret aritmatika \(1 + 3 + 5 + 7 + \ldots + (2n-1)\), suku pertama (\(a\)) adalah 1, dan suku terakhir (\(l\)) adalah \((2n-1)\).
                            <br>
                            Dalam hal ini, \(n = k + 1\), jadi kita harus menyesuaikan rumus tersebut dengan menggantikan \(n\) dengan \(k + 1\):

                            \[S_{k+1} = \frac{k+1}{2} \left( 1 + (2(k+1)-1) \right)\]

                            Mari kita simpulkan rumusnya:
                            \begin{align*}
                            S_{k+1} &= \frac{k+1}{2} \left( 1 + (2k+2-1) \right) \\
                            S_{k+1} &= \frac{k+1}{2} \left( 1 + 2k+1 \right) \\
                            S_{k+1} &= \frac{k+1}{2} \left( 2k+2 \right) \\
                            S_{k+1} &= \frac{k+1}{2} \cdot 2 \cdot (k+1) \\
                            S_{k+1} &= (k+1)^2
                            \end{align*}
                            Jadi, rumus jumlah deret aritmatika \(1 + 3 + 5 + 7 + \ldots + (2n-1)\) dalam \(n = k + 1\) adalah \(\boxed{(k+1)^2}\).</p>
                            <b class="text-end text-danger fw-bold"> <h3>JAWABAN : C</h3></b>
                        </div>
                </div>
                <hr />
<!-- SOAL end -->
<!--=======================  soal12 ===================================-->
<li>Nilai dari \(\displaystyle \lim_{x \to 5} \frac{x^2+x-20}{x^2 - 5} = ... \) </li>
                <ol type="A">
                    <li>\(1  \)</li>
                    <li>\(1,1  \)</li>
                    <li>\(1,2  \)</li>
                    <li>\(1,3  \)</li>
                    <li>\(1,4  \)</li>

                </ol>
                <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal12" aria-expanded="false" aria-controls="collapsesoal12">
                Alternatif Penyelesaian:
            </button>
            <div class="collapse" id="collapsesoal12">
                    <div class="card card-body overflow-auto">
                        <p>Untuk mencari nilai dari \(\displaystyle \lim_{x \to 5} \frac{x^2+x-20}{x^2 - 5}\), kita dapat menggantikan \(x\) dengan \(5\) dalam ekspresi tersebut.
                            <br>
                            \(\displaystyle \lim_{x \to 5} \frac{x^2+x-20}{x^2 - 5} = \frac{5^2+5-20}{5^2 - 5}\)
                            <br>
                            Menghitung ekspresi tersebut:
                            <br>
                            \(\displaystyle \frac{5^2+5-20}{5^2 - 5} = \frac{25+5-20}{25 - 5} = \frac{10}{20} = \frac{1}{2}\)
                            <br>
                            Jadi, nilai dari \(\displaystyle \lim_{x \to 5} \frac{x^2+x-20}{x^2 - 5}\) adalah \(\boxed{\displaystyle \frac{1}{2}}\).</p>
                    <b class="text-end text-danger fw-bold"> <h3>JAWABAN : Kemungkinan Salah Soal</h3></b>
                    </div>
                </div>
                <hr />
<!-- SOAL end -->
<!--=======================  soal13 ===================================-->
<li>Hasil dari \(\int (3x-5)(2x-3) dx = . . .  \)</li>
                <ol type="A">
                    <li>\(\displaystyle 2x^3 -\frac{1}{2} x^2 -15x +C \)</li>
                    <li>\(\displaystyle 2x^3 +\frac{1}{2} x^2 -15x +C \)</li>
                    <li>\(\displaystyle 2x^3 +\frac{19}{2} x^2 -15x +C \)</li>
                    <li>\(\displaystyle 2x^3 -\frac{19}{2} x^2 +15x +C \)</li>
                    <li>\(\displaystyle 2x^3 +\frac{1}{2} x^2 +15x +C \)</li>

                </ol>
                <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal13" aria-expanded="false" aria-controls="collapsesoal13">
                Alternatif Penyelesaian:
            </button>
            <div class="collapse" id="collapsesoal13">
                <div class="card card-body overflow-auto">
                    <p>Untuk menyelesaikan integral tersebut, kita dapat menggunakan aturan distribusi pada ekspresi dalam kurung:

                        \[
                        \begin{aligned}
                            \int (3x-5)(2x-3) \, dx &= \int (3x)(2x) \, dx - \int (3x)(3) \, dx - \int (5)(2x) \, dx + \int (5)(3) \, dx \\
                            &= \int 6x^2 \, dx - \int 9x \, dx - \int 10x \, dx + \int 15 \, dx \\
                            &= 6 \int x^2 \, dx - 9 \int x \, dx - 10 \int x \, dx + 15 \int 1 \, dx \\
                            &= 6 \cdot \frac{1}{3}x^3 - 9 \cdot \frac{1}{2}x^2 - 10 \cdot \frac{1}{2}x^2 + 15x + C \\
                            &= 2x^3 - \frac{9}{2}x^2 - \frac{10}{2}x^2 + 15x + C \\
                            &= 2x^3 - \frac{19}{2}x^2 + 15x + C,
                            \end{aligned}
                            \]

                            di mana \(C\) adalah konstanta integrasi. Jadi, hasil dari integral tersebut adalah \(\boxed{2x^3 - \frac{19}{2}x^2 + 15x + C}\).</p>
                    <b class="text-end text-danger fw-bold"> <h3>JAWABAN : D</h3></b>
                    </div>
                </div>
                <hr />
                <!-- SOAL end -->
<!--=======================  soal14 ===================================-->
            <li>Percepatan gerak suatu benda ditentukan dengan rumus \(a(t)=24t^2-6t-2\). Jika pada saat \(1\) detik benda tersebut memiliki kecepatan \(6\) m/dt dan jarak tempuh \(5\) m, maka jarak tempuh benda setelah \(2\) detik adalah . . . m</li>
                <ol type="A">
                    <li>\(26  \)</li>
                    <li>\(27  \)</li>
                    <li>\(28  \)</li>
                    <li>\(29  \)</li>
                    <li>\(30  \)</li>

                </ol>
                <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal14" aria-expanded="false" aria-controls="collapsesoal14">
                    Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal14">
                    <div class="card card-body overflow-auto">
                        <p>Untuk menentukan jarak tempuh benda setelah 2 detik, kita dapat menggunakan rumus kinematika sebagai berikut:

                            \[s(t) = \int v(t) dt\]

                            Di mana \(s(t)\) adalah jarak tempuh, \(v(t)\) adalah kecepatan, dan \(t\) adalah waktu.
                            <br>
                            Dalam hal ini, kita diberikan percepatan \(a(t) = 24t^2 - 6t - 2\). Untuk mencari kecepatan, kita harus melakukan integrasi dari percepatan terhadap waktu:

                            \[v(t) = \int a(t) dt\]

                            Integrasi dari \(a(t)\) akan memberikan \(v(t)\). Mari kita hitung:

                            \[v(t) = \int (24t^2 - 6t - 2) dt\]

                            Menggunakan aturan integrasi, kita dapat mengintegrasi setiap suku terpisah:

                            \[v(t) = 8t^3 - 3t^2 - 2t + C\]

                            Di mana \(C\) adalah konstanta integrasi.
                            <br>
                            Kita diketahui bahwa pada saat \(t = 1\) detik, kecepatan benda adalah \(6\) m/dt. Dengan menggunakan ini, kita dapat mencari nilai konstanta integrasi \(C\):
                            \begin{align*}
                            6 &= 8(1)^3 - 3(1)^2 - 2(1) + C\\
                            6 &= 8 - 3 - 2 + C\\
                            6 &= 3 + C\\
                            C &= 6 - 3\\
                            C &= 3
                            \end{align*}
                            Jadi, kecepatan \(v(t)\) adalah:
                            \[v(t) = 8t^3 - 3t^2 - 2t + 3\]
                            Sekarang, kita dapat mencari jarak tempuh \(s(t)\) dengan mengintegrasikan kecepatan terhadap waktu:
                            \begin{align*}
                            s(t) &= \int v(t) dt\\
                            s(t) &= \int (8t^3 - 3t^2 - 2t + 3) dt\\
                            s(t) &= \frac{8}{4}t^4 - \frac{3}{3}t^3 - \frac{2}{2}t^2 + 3t + D
                            \end{align*}
                            Di mana \(D\) adalah konstanta integrasi.
                            <br>
                            Kita diketahui bahwa pada saat \(t = 1\) detik, jarak tempuh benda adalah \(5\) m. Dengan menggunakan ini, kita dapat mencari nilai konstanta integrasi \(D\):
                            \begin{align*}
                            5 &= \frac{8}{4}(1)^4 - \frac{3}{3}(1)^3 - \frac{2}{2}(1)^2 + 3(1) + D\\
                            5 &= 2 - 1 - 1 + 3 + D\\
                            5 &= 3 + D\\
                            D &= 5 - 3\\
                            D &= 2
                            \end{align*}

                            Jadi, jarak tempuh \(s(t)\) adalah:
                            \[s(t) = \frac{8}{4}t^4 - \frac{3}{3}t^3 - \frac{2}{2}t^2 + 3t + 2\]
                            Untuk mencari jarak tempuh setelah \(2\) detik, kita substitusikan \(t = 2\) ke dalam persamaan tersebut:
                            \begin{align*}
                            s(t) &= \frac{8}{4}t^4 - \frac{3}{3}t^3 - \frac{2}{2}t^2 + 3t + 2\\
                            s(2) &= \frac{8}{4}(2)^4 - \frac{3}{3}(2)^3 - \frac{2}{2}(2)^2 + 3(2) + 2\\
                            s(2) &= \frac{8}{4}(16) - \frac{3}{3}(8) - \frac{2}{2}(4) + 6 + 2\\
                            s(2) &= 32 - 8 - 4 + 6 + 2\\
                            s(2) &= 28
                            \end{align*}

                            Jadi, jarak tempuh benda setelah \(2\) detik adalah \(\boxed{28}\) meter.

                        </p>
                        <b class="text-end text-danger fw-bold"> <h3>JAWABAN : C</h3></b>
                    </div>
                </div>
                <hr />
<!-- SOAL end -->
<!--=======================  soal15 ===================================-->
<li>Grafik fungsi \(f(x) = x^3 + x^2 -5x +7 \) turun pada interval . . .</li>
<ol type="A">
    <li>\(\displaystyle x < -\frac{5}{3} \text{ atau } x > 1  \)</li>
                    <li>\(\displaystyle -1 < x < \frac{3}{5}  \)</li>
                    <li>\(\displaystyle -\frac{5}{3} < x < 1 \)</li>
                    <li>\(\displaystyle x < -1 \text{ atau } x > \frac{5}{3} \)</li>
                    <li>\(\displaystyle x < 1 \text{ atau } x > -\frac{3}{5}  \)</li>

                </ol>
                <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal15" aria-expanded="false" aria-controls="collapsesoal15">
                    Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal15">
                    <div class="card card-body overflow-auto">
                        <p>Untuk mencari interval di mana fungsi \(f(x) = x^3 + x^2 - 5x + 7\) turun, kita perlu mencari turunan pertama dari fungsi tersebut dan mencari di mana turunan tersebut negatif.
                            <br><br>
                            Langkah-langkahnya sebagai berikut:
                            <ol>
                                <li type="1">
                                    Hitung turunan pertama dari fungsi \(f(x)\):
                                    \(f'(x) = 3x^2 + 2x - 5\).
                                </li>
                                <li>
                                    Cari akar-akar dari turunan pertama: <br>
                                    Set \(f'(x)\) sama dengan nol dan cari nilai-nilai x yang memenuhi: \(3x^2 + 2x - 5 = 0\) <br>
                                       Kita dapat menggunakan rumus kuadratik untuk mencari akar-akarnya:
                                       \[x = \frac{-b \pm \sqrt{b^2 - 4ac}}{2a}\]

                                       Dalam kasus ini, a = 3, b = 2, dan c = -5. <br>
                                       Substitusikan nilai-nilai ini ke dalam rumus kuadratik untuk mencari akar-akar \(x\).
                                       \begin{align*}
                                       x &= \frac{-2 \pm \sqrt{2^2 - 4 \cdot 3 \cdot -5}}{2 \cdot 3} \\

                                       &= \frac{-2 \pm \sqrt{4 + 60}}{6} \\

                                       &= \frac{-2 \pm \sqrt{64}}{6} \\

                                       &= \frac{-2 \pm 8}{6} \\

                                       x_1 &= \frac{-2 + 8}{6} = \frac{6}{6} = 1 \\

                                       x_2 &= \frac{-2 - 8}{6} = \frac{-10}{6} = -\frac{5}{3} \\
                                       \end{align*}
                                </li>
                                <li>
                                    Kita memiliki dua nilai \(x\) di mana \(f'(x) = 0\), yaitu \(x = 1\) dan \(\displaystyle x = -\frac{5}{3}\).
                                       Kita akan menggunakan nilai-nilai ini untuk membagi rentang bilangan real menjadi tiga bagian.
                                       <br>
                                       Pilih titik uji pada setiap bagian dan periksa apakah turunan pertama \(f'(x)\) positif atau negatif.
                                       <ol type="a">
                                        <li>
                                            Untuk \(\displaystyle x < -\frac{5}{3}\), pilih \(x = -2\) sebagai titik uji. <br>
                                            Substitusikan \(x = -2\) ke dalam \(f'(x)\): \(f'(-2) = 3(-2)^2 + 2(-2) - 5 = 12 + (-4) - 5 = 3 > 0\). <br>
                                            Karena \(f'(-2) > 0\), turunan pertama \(f'(x)\) positif untuk \(x < -\frac{5}{3}\).
                                        </li>
                                        <li>
                                            Untuk \(-\frac{5}{3} < x < 1\), pilih \(x = 0\) sebagai titik uji. <br>
                                               Substitusikan \(x = 0\) ke dalam \(f'(x)\): \(f'(0) = 3(0)^2 + 2(0) - 5 = -5 < 0\). <br>
                                               Karena \(f'(0) < 0\), turunan pertama \(f'(x)\) negatif untuk \(-\frac{5}{3} < x < 1\).
                                        </li>
                                        <li>
                                            Untuk \(x > 1\), pilih \(x = 2\) sebagai titik uji. <br>
                                               Substitusikan \(x = 2\) ke dalam \(f'(x)\): \(f'(2) = 3(2)^2 + 2(2) - 5 = 17 > 0\). <br>
                                               Karena \(f'(2) > 0\), turunan pertama \(f'(x)\) positif untuk \(x > 1\).
                                        </li>
                                    </ol>
                                </li>
                                <li>
                                    Dari analisis di atas, kita dapat menyimpulkan bahwa fungsi \(f(x) = x^3 + x^2 - 5x + 7\) turun pada interval \(\boxed{-\frac{5}{3} < x < 1}\).</p>
                                </li>
                            </ol>
                    <b class="text-end text-danger fw-bold"> <h3>JAWABAN : C</h3></b>
                    </div>
                </div>
                <hr />
<!-- SOAL end -->
<!--=======================  soal16 ===================================-->
            <li>PT Cipta Kreasi merupakan perusahaan yang begerak di bidang produksi souvenir berbahan timah. Bagian pengawasan mutu produk PT Cipta Kreasi  mencatat persentase produk tidak cacat yang diproduksi perjamnya mengikuti fungsi \(f(x)=82+8x-x^2\),  dengan \(x\) menyatakan banyaknya produk (dalam lusin). Pernyataan berikut yang benar adalah </li>
                <ol type="A">
                    <li>Jumlah souvenir yang harus diproduksi agar persentase produk tidak cacat perjamnya mencapai maksimum adalah 8 lusin</li>
                    <li>Persentase produk tidak cacat maksimum perjamnya adalah 98%</li>
                    <li>Jumlah souvenir yang harus diproduksi agar persentase produk tidak cacat perjamnya mencapai maksimum adalah 16 lusin</li>
                    <li>Perusahaan dapat menekan persentase produk tidak cacat yang diproduksi perjamnya menjadi 100%</li>
                    <li>Persentase produk tidak cacat maksimum perjamnya adalah 100%</li>

                </ol>
                <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal16" aria-expanded="false" aria-controls="collapsesoal16">
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal16">
                    <div class="card card-body overflow-auto">
                        <p>Untuk menjawab pertanyaan tersebut, kita perlu mencari titik maksimum fungsi \(f(x) = 82 + 8x - x^2\).
                            <br>
                            Pertama, kita dapat mencari turunan dari fungsi tersebut terhadap \(x\):
                            <br>
                            \(f'(x) = 8 - 2x\)
                            <br><br>
                            Kemudian, kita set turunan tersebut sama dengan nol untuk mencari titik kritis:
                            \begin{align*}
                            8 - 2x &= 0\\
                            2x &= 8\\
                            x &= 4
                            \end{align*}
                            Untuk memastikan apakah ini adalah titik maksimum atau minimum, kita perlu mengambil turunan kedua:
                            <br>
                            \(f''(x) = -2\)
                            <br>
                            Karena turunan kedua negatif, kita dapat menyimpulkan bahwa titik kritis \(x = 4\) adalah titik maksimum.
                        </p>
                        <p>Untuk mencari pernyataan yang benar, kita perlu memeriksa masing-masing pernyataan dengan membandingkannya dengan hasil perhitungan sebelumnya. <br>
                           <b> Pernyataan 1: </b> Jumlah souvenir yang harus diproduksi agar persentase produk tidak cacat perjamnya mencapai maksimum adalah 8 lusin. <br>
                            Berdasarkan perhitungan sebelumnya, jumlah souvenir yang harus diproduksi agar persentase produk tidak cacat perjamnya mencapai maksimum adalah 4 lusin, bukan 8 lusin. <br> Oleh karena itu, pernyataan ini <b>SALAH </b>
                            <br><br>
                          <b>  Pernyataan 2: </b>Persentase produk tidak cacat maksimum perjamnya adalah 98%.
                            <br>
                            Berdasarkan perhitungan sebelumnya, persentase produk tidak cacat maksimum perjamnya adalah ketika \(x = 4\) lusin. Jika kita gantikan nilai \(x\) ke dalam fungsi \(f(x)\), maka kita dapat mencari nilai persentase produk tidak cacat maksimum.
                            <br>
                            \(f(4) = 82 + 8(4) - (4)^2 = 98\%\)
                            <br>
                            Jadi, pernyataan ini <b>BENAR</b>.
                            <br><br>
                           <b> Pernyataan 3: </b>Jumlah souvenir yang harus diproduksi agar persentase produk tidak cacat perjamnya mencapai maksimum adalah 16 lusin.
                            <br>
                            Berdasarkan perhitungan sebelumnya, jumlah souvenir yang harus diproduksi agar persentase produk tidak cacat perjamnya mencapai maksimum adalah 4 lusin, bukan 16 lusin. <br> Oleh karena itu, pernyataan ini <b>SALAH </b>.
                            <br><br>
                           <b> Pernyataan 4: </b> Perusahaan dapat menekan persentase produk tidak cacat yang diproduksi perjamnya menjadi 100%.
                           <br>
                            Berdasarkan fungsi \(f(x) = 82 + 8x - x^2\), kita tidak dapat mencapai persentase produk tidak cacat sebesar 100% karena terdapat suku \(-x^2\) yang selalu akan memberikan dampak negatif pada nilai persentase. <br> Oleh karena itu, pernyataan ini <b>SALAH </b> .
                            <br><br>
                           <b> Pernyataan 5: </b> Persentase produk tidak cacat maksimum perjamnya adalah 100%.
                            <br>
                            Berdasarkan perhitungan sebelumnya, persentase produk tidak cacat maksimum perjamnya adalah 98%, bukan 100%. Oleh karena itu, pernyataan ini  <b>SALAH </b>.
                            <br>
                            Jadi, pernyataan yang benar adalah: <b>   Persentase produk tidak cacat maksimum perjamnya adalah 98% </b> </p>
                    <b class="text-end text-danger fw-bold"> <h3>JAWABAN : B</h3></b>
                    </div>
                </div>
                <hr />
<!-- SOAL end -->
<!--=======================  soal17 ===================================-->
            <li>Persamaan garis singgung kurva \(\displaystyle f(x)= \frac{(2x-3)^2}{\sqrt{4x+9}} \) di titik \(A(0,3) \) adalah . . .</li>
                <ol type="A">
                    <li>\(42x + y + 12 = 0  \)</li>
                    <li>\(14x + 3y - 9 = 0  \)</li>
                    <li>\(42x - 3y + 9 = 0  \)</li>
                    <li>\(14x -  3y + 9 = 0  \)</li>
                    <li>\(24x + 6y - 3 = 0  \)</li>

                </ol>
                <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal17" aria-expanded="false" aria-controls="collapsesoal17">
                    Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal17">
                    <div class="card card-body overflow-auto">
                        <p>Untuk menentukan persamaan garis singgung kurva \(f(x) = \frac{(2x-3)^2}{\sqrt{4x+9}}\) di titik \(A(0,3)\), kita perlu menghitung turunan pertama dari fungsi \(f(x)\) terlebih dahulu menggunakan aturan turunan fungsi pembagian.
                            <br><br>
                            Aturan turunan fungsi pembagian menyatakan bahwa jika \(f(x) = \frac{g(x)}{h(x)}\), maka turunan pertama dari \(f(x)\) dapat dihitung dengan rumus:

                            \[f'(x) = \frac{g'(x) \cdot h(x) - g(x) \cdot h'(x)}{h(x)^2}\]

                            Dalam kasus ini, kita memiliki:
                            <br>
                            \(g(x) = (2x-3)^2\) dan \(h(x) = \sqrt{4x+9}\)
                            <br> <br>
                            Mari kita hitung turunan \(g(x)\) dan \(h(x)\) terlebih dahulu:
                            <br>
                            \(g'(x) = 2(2x-3) \cdot 2 = 4(2x-3)\)
                            <br> <br>
                            \(h'(x) = \frac{1}{2\sqrt{4x+9}} \cdot 4 = \frac{2}{\sqrt{4x+9}}\)
                            <br> <br>
                            Sekarang, kita dapat menggabungkan hasil-hasil ini ke dalam rumus turunan pertama:

                            \[f'(x) = \frac{g'(x) \cdot h(x) - g(x) \cdot h'(x)}{h(x)^2}\]

                            Substitusikan \(g(x)\), \(h(x)\), \(g'(x)\), dan \(h'(x)\):

                            \[f'(x) = \frac{4(2x-3) \cdot \sqrt{4x+9} - (2x-3)^2 \cdot \frac{2}{\sqrt{4x+9}}}{(\sqrt{4x+9})^2}\]

                            Selanjutnya substitusikan \(x = 0\) ke dalam persamaan \(f'(x)\), kita akan mendapatkan:

                            \[f'(0) = \frac{4(2(0)-3) \sqrt{4(0)+9} - (2(0)-3)^2 \frac{2}{\sqrt{4(0)+9}}}{4(0)+9}}\]

                            Simplifikasi ekspresi ini:

                            \[f'(0) = \frac{4(-3) \sqrt{9} - (-3)^2 \frac{2}{\sqrt{9}}}{9}\]

                            \[f'(0) = \frac{-12 \cdot 3 - 9 \cdot \frac{2}{3}}{9}\]

                            \[f'(0) = \frac{-36 - 6}{9}\]

                            \[f'(0) = \frac{-42}{9}\]

                            \[f'(0) = -\frac{16}{3}\]

                            Untuk menentukan persamaan garis dengan gradien \(-\frac{14}{3}\) dan melalui titik (0,3), kita dapat menggunakan persamaan garis umum:

                            \[y - y_1 = m(x - x_1)\]
                            <br><br>
                            Di mana (\(x_1, y_1\)) adalah koordinat titik yang dilalui oleh garis. Menggantikan \(m = -\frac{14}{3}\) dan (\(x_1, y_1\) )= (0,3), kita memiliki:

                            \[y - 3 = -\frac{14}{3}(x - 0)\]
                            <br><br>
                            Sederhanakan persamaan tersebut:

                            \[y - 3 = -\frac{14}{3}x\]

                            \[y = -\frac{14}{3}x + 3\]
                            \[3y = -14x + 9\]
                            \[14x +3y - 9 = 0\]

                            Jadi, persamaan garis dengan gradien \(-\frac{14}{3}\) dan melalui titik (0,3) adalah \(\boxed{14x +3y - 9 = 0}\).
                           </p>
                    <b class="text-end text-danger fw-bold"> <h3>JAWABAN : B</h3></b>
                    </div>
                </div>
                <hr />
<!-- SOAL end -->
<!--=======================  soal18 ===================================-->
            <li>Diketahui balok \(PQRS.TUVW\). Garis yang bersilangan adalah . . .</li>
                <ol type="A">
                    <li>\( PT  \text{ dan } TW \)</li>
                    <li>\( UV  \text{ dan } PS \)</li>
                    <li>\( PQ  \text{ dan } RS \)</li>
                    <li>\( SR  \text{ dan } SR \)</li>
                    <li>\( SW  \text{ dan } QR \)</li>

                </ol>
                <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal18" aria-expanded="false" aria-controls="collapsesoal18">
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal18">
                    <div class="card card-body overflow-auto">
                        <img src="{{asset('asets/US/balok_pqrs.PNG')}}" alt="balok" width="80%">
                        <p>Dalam pilihan yang tersedia, berikut adalah penjelasan hubungan antara setiap garis:
                            <br><br>
                            A) PT dan TW: berpotongan
                            <br><br>
                            B) UV dan PS: Sejajar
                            <br><br>
                            C) PQ dan RS: Sejajar
                            <br><br>
                            D) SR dan SR: Berimpit
                            <br><br>
                            E) SW dan QR: Bersilangan
                            </p>
                    <b class="text-end text-danger fw-bold"> <h3>JAWABAN : E</h3></b>
                    </div>
                </div>
                <hr />
<!-- SOAL end -->
<!--=======================  soal19 ===================================-->
            <li>Diketahui kubus \(ABCD.EFGH\) dengan panjang rusuk 10 cm. Jarak titik \(F\) ke garis \(AC\) adalah ... cm.</li>
                <ol type="A">
                    <li>\(5\sqrt{2}  \)</li>
                    <li>\(5\sqrt{3}  \)</li>
                    <li>\(5\sqrt{6}  \)</li>
                    <li>\(10\sqrt{2}  \)</li>
                    <li>\(10\sqrt{3}  \)</li>

                </ol>
                <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal19" aria-expanded="false" aria-controls="collapsesoal19">
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal19">
                    <div class="card card-body overflow-auto">
                        <p>\(\displaystyle \begin{align}

                            \end{align}\)</p>
                    <b class="text-end text-danger fw-bold"> <h3>JAWABAN : C</h3></b>
                    </div>
                </div>
                <hr />
<!-- SOAL end -->
<!--=======================  soal20 ===================================-->
            <li>Pada segitiga \(ABC\), diketahui panjang \(AC = 12 cm\), \(AB = 6 \sqrt{2} \) cm, dan besar \(\angle  BCA = 30^o\). Besar \(\angle ABC\) adalah . . . </li>
            <ol type="A">
                <li>\(10^o  \)</li>
                <li>\(30^o  \)</li>
                <li>\(45^o  \)</li>
                    <li>\(60^o  \)</li>
                    <li>\(90^o  \)</li>

                </ol>
                <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal20" aria-expanded="false" aria-controls="collapsesoal20">
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal20">
                    <div class="card card-body overflow-auto">
                        <p>Untuk mencari besar sudut \(\angle ABC\), kita dapat menggunakan hukum sinus pada segitiga \(ABC\). Hukum sinus menyatakan bahwa dalam suatu segitiga, rasio antara panjang sebuah sisi dengan sin dari sudut yang berlawanan adalah konstan.

                            Dalam segitiga \(ABC\), kita ingin mencari sudut \(\angle ABC\), dan kita telah diketahui panjang sisi \(AC\) dan \(AB\). Dengan demikian, kita dapat menggunakan hukum sinus sebagai berikut:

                            \[\frac{AB}{\sin(\angle BCA)} = \frac{AC}{\sin(\angle ABC)}\]

                            Substitusikan nilai yang diketahui:

                            \[\frac{6\sqrt{2}}{\sin(30^\circ)} = \frac{12}{\sin(\angle ABC)}\]

                            Sekarang, kita perlu mencari nilai \(\sin(30^\circ)\). Dalam segitiga siku-siku \(30^\circ - 60^\circ - 90^\circ\), kita tahu bahwa panjang sisi yang berlawanan dengan sudut \(30^\circ\) adalah setengah dari panjang sisi miring, sehingga \(\sin(30^\circ) = \frac{1}{2}\).

                            Substitusikan nilai \(\sin(30^\circ)\):

                            \[\frac{6\sqrt{2}}{\frac{1}{2}} = \frac{12}{\sin(\angle ABC)}\]

                            Simplifikasi ekspresi:

                            \[12\sqrt{2} = \frac{12}{\sin(\angle ABC)}\]

                            Kemudian, kita dapat memindahkan sin \(\angle ABC\) ke sisi sebelah kanan dengan membagi kedua sisi dengan \(\sin(\angle ABC)\):

                            \[\sin(\angle ABC) = \frac{12}{12\sqrt{2}} = \frac{1}{\sqrt{2}}\]

                            Untuk mencari sudutnya, kita perlu menggunakan fungsi invers sinus (arcsin). Dalam hal ini, kita ingin mencari \(\angle ABC\), sehingga:

                            \[\angle ABC = \arcsin\left(\frac{1}{\sqrt{2}}\right)\]

                            Menggunakan kalkulator atau tabel trigonometri, kita dapat mencari nilai sudutnya. Dalam hal ini, \(\angle ABC \approx 45^\circ\).

                            Jadi, besar sudut \(\angle ABC\) adalah sekitar \(45^\circ\).</p>
                    <b class="text-end text-danger fw-bold"> <h3>JAWABAN : C</h3></b>
                </div>
                </div>
                <hr />
<!-- SOAL end -->
<!--=======================  soal21 ===================================-->
            <li>Persamaan fungsi trigonometri berikut adalah . . .</li>
            <img src="{{asset('asets/US/2019_21.png')}}" alt="grafikcos" class="img-fluid">
                <ol type="A">
                    <li>\(y= -2 \sin (x - \pi) \)</li>
                    <li>\(y= 2 \sin (2x - \pi) \)</li>
                    <li>\(y= 2 \cos (2x + \pi) \)</li>
                    <li>\(y= 2 \cos (x + \pi) \)</li>
                    <li>\(y= -2 \cos (2x - \pi) \)</li>

                </ol>
                <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal21" aria-expanded="false" aria-controls="collapsesoal21">
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal21">
                    <div class="card card-body overflow-auto">
                        <p>\(\displaystyle \begin{align}

                            \end{align}\)</p>
                    <b class="text-end text-danger fw-bold"> <h3>JAWABAN : C</h3></b>
                    </div>
                </div>
                <hr />
<!-- SOAL end -->
<!--=======================  soal22 ===================================-->
            <li>Suatu tangga disandarkan pada dinding rumah. Panjang tangga adalah \(2,4\) m, dan jarak antara dinding dengan dasar tangga adalam \(120\) cm. Besar sudut yang dibentuk oleh tangga dengan tanah adalah . . . </li>
                <ol type="A">
                    <li>\( 15^o \)</li>
                    <li>\( 30^o \)</li>
                    <li>\( 45^o \)</li>
                    <li>\( 60^o \)</li>
                    <li>\( 90^o \)</li>

                </ol>
                <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal22" aria-expanded="false" aria-controls="collapsesoal22">
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal22">
                    <div class="card card-body overflow-auto">
                        <p>Untuk mencari besar sudut yang dibentuk oleh tangga dengan tanah, kita dapat menggunakan trigonometri. Dalam kasus ini, sudut yang dimaksud adalah sudut antara tangga dan tanah, yaitu sudut antara panjang tangga dan jarak antara dinding dan dasar tangga.
                            <br><br>

                            Misalkan \(\theta\) adalah sudut yang dicari. Kita dapat menggunakan rumus cosinus pada segitiga siku-siku:

                            \[\cos(\theta) = \frac{\text{sisi tegak}}{\text{sisi miring}} = \frac{1,2}{2,4} = \frac{1}{2}\]

                            Untuk mencari sudut \(\theta\), kita perlu menggunakan fungsi invers cosinus \(\arccos\).

                            \[\theta = \arccos\left(\frac{1}{2}\right) = 60^\circ\]

                            Jadi, besar sudut yang dibentuk oleh tangga dengan tanah adalah sekitar \(\boxed{60^\circ}\).</p>
                    <b class="text-end text-danger fw-bold"> <h3>JAWABAN : D</h3></b>
                    </div>
                </div>
                <hr />
<!-- SOAL end -->
<!--=======================  soal23 ===================================-->
            <li>Bayangan garis \(2x - 3y + 10 = 0\) jika ditranslasi oleh \(\begin{pmatrix} 2\\-3 \end{pmatrix} \) dilanjutkan rotasi  pusat \(O\) sejauh \(90^o\) berlawanan dengan putaran arah jarum jam adalah . . .</li>
                <ol type="A">
                    <li>\( 3x + 2y -3 = 0 \)</li>
                    <li>\( 3x + 2y- 13 = 0 \)</li>
                    <li>\( 3x - 2y - 13 = 0 \)</li>
                    <li>\( 3x - 2y + 3 = 0 \)</li>
                    <li>\( 3x - 2y + 13 = 0\)</li>

                </ol>
                <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal23" aria-expanded="false" aria-controls="collapsesoal23">
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal23">
                    <div class="card card-body overflow-auto">
                        <p>Untuk menentukan bayangan garis setelah translasi dan rotasi, kita perlu melakukan beberapa langkah.
                           <br><br>
                            Langkah 1: Translasi garis <br>
                            Translasi garis \(2x - 3y + 10 = 0\) menggunakan vektor \(\begin{pmatrix} 2\\-3 \end{pmatrix}\) dapat dilakukan dengan menggeser setiap titik pada garis sejauh vektor tersebut. Untuk melakukan translasi ini, kita dapat mengganti setiap \(x\) dengan \(x - 2\) dan setiap \(y\) dengan \(y + 3\) dalam persamaan garis tersebut.
                            <br><br>
                            Dengan menggantikan nilai \(x\) dan \(y\), persamaan garis setelah translasi menjadi:
                            \begin{align*}
                            2(x - 2) - 3(y + 3) + 10 &= 0 \\
                            2x - 4 - 3y - 9 + 10 = 0\\
                            2x - 3y - 3 = 0
                            \end{align*}
                            <br>
                            Langkah 2: Rotasi garis <br>
                            Untuk melakukan rotasi pusat \(O\) sejauh \(90^\circ\) berlawanan dengan arah putaran jarum jam, kita dapat menggunakan matriks rotasi \(R\) dengan sudut \(90^\circ\):
                            \[R = \begin{pmatrix} \cos(90^\circ) & -\sin(90^\circ) \\ \sin(90^\circ) & \cos(90^\circ) \end{pmatrix}\]

                            Kita tahu bahwa \(\cos(90^\circ) = 0\) dan \(\sin(90^\circ) = 1\), jadi matriks rotasi \(R\) menjadi:
                            \[R = \begin{pmatrix} 0 & -1 \\ 1 & 0 \end{pmatrix}\]

                            Untuk mendapatkan bayangan garis setelah rotasi, kita dapat mengalikan setiap titik pada garis yang telah ditranslasi dengan matriks rotasi \(R\).

                            Jadi, hasil akhirnya adalah:
                            \begin{align*}
                            \begin{pmatrix} x' \\ y' \end{pmatrix} &= \begin{pmatrix} 0 & -1 \\ 1 & 0 \end{pmatrix} \begin{pmatrix} x\\y \end{pmatrix} \\
                            \begin{pmatrix} x' \\ y' \end{pmatrix} &= \begin{pmatrix} 0 \cdot x - 1 \cdot y \\ 1 \cdot x + 0 \cdot y \end{pmatrix} \\
                            \begin{pmatrix} x' \\ y' \end{pmatrix} &= \begin{pmatrix} -y \\ x  \end{pmatrix} \\\\
                            y &= -x' \\
                            x &= y' \\\\
                            2x-3y-3 &=0 \\
                            2(y')-3(-x')-3 &= 0 \\
                            3x+2y-3 &=0 \\
                            \end{align*}

                            Jadi, bayangan garis \(2x - 3y + 10 = 0\) setelah ditranslasi oleh \(\begin{pmatrix} 2\\-3 \end{pmatrix}\) dan dilanjutkan dengan rotasi pusat \(O\) sejauh \(90^\circ\) berlawanan dengan putaran jarum jam adalah \(\boxed{3x+2y-3 =0}\).</p>
                    <b class="text-end text-danger fw-bold"> <h3>JAWABAN : A</h3></b>
                    </div>
                </div>
                <hr />
<!-- SOAL end -->
<!--=======================  soal24 ===================================-->
            <li>Persamaan lingkaran yang melalui ujung-ujung diameter \(AB\) dengan \(A(2,-5)\) dan \(B(6,9)\) adalah ...</li>
                <ol type="A">
                    <li>\(x^2 + y^2 + 4x + 8y - 33 = 0  \)</li>
                    <li>\(x^2 + y^2 - 8x + 4y - 33 = 0  \)</li>
                    <li>\(x^2 + y^2 - 4x - 8y - 33 = 0  \)</li>
                    <li>\(x^2 + y^2 + 8x - 4y - 33 = 0  \)</li>
                    <li>\(x^2 + y^2 - 8x -4y - 33 = 0  \)</li>

                </ol>
                <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal24" aria-expanded="false" aria-controls="collapsesoal24">
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal24">
                    <div class="card card-body overflow-auto">
                        <p>Untuk menentukan persamaan lingkaran yang melalui ujung-ujung diameter \(AB\) dengan \(A(2,-5)\) dan \(B(6,9)\), kita dapat menggunakan rumus persamaan lingkaran dalam bentuk umum:

                            \[(x - h)^2 + (y - k)^2 = r^2\]

                            di mana \((h, k)\) adalah pusat lingkaran, dan \(r\) adalah jari-jari lingkaran. </p>
                            <ol>
                                <p>Langkah-langkah untuk menentukan persamaan lingkaran:</p>
                            <li>Tentukan koordinat pusat lingkaran:</li>
                            <ul>
                                <li>Pusat lingkaran berada di tengah-tengah diameter \(AB\).</li>
                                <li>Koordinat \(A(2,-5)\) memiliki \(x_1 = 2\) dan \(y_1 = -5\).</li>
                                <li>Koordinat \(B(6,9)\) memiliki \(x_2 = 6\) dan \(y_2 = 9\).</li>
                                <li>Menggunakan rumus titik tengah, kita dapat menghitung koordinat pusat:</li>
                            </ul>
                            \begin{align*}
                            h &= \frac{x_1 + x_2}{2} = \frac{2 + 6}{2} = 4 \\
                            k &= \frac{y_1 + y_2}{2} = \frac{-5 + 9}{2} = 2 \\
                            \end{align*}

                            <li>Hitung jari-jari lingkaran:</li>
                            <ul>
                                <li>Jari-jari lingkaran sama dengan setengah panjang diameter.</li>
                                <li>Diameter \(AB\) dapat dihitung menggunakan rumus jarak antara dua titik:</li>
                            </ul>
                                \begin{align*}
                                r &= \frac{\sqrt{(x_2 - x_1)^2 + (y_2 - y_1)^2}}{2} \\
                                &= \frac{\sqrt{(6 - 2)^2 + (9 - (-5))^2}}{2} \\
                                &= \frac{\sqrt{16 + 196}}{2} \\
                                &= \frac{\sqrt{212}}{2} \\
                                &= \frac{2\sqrt{53}}{2} \\
                                &= \sqrt{53}
                                \end{align*}
                            <li>Tulis persamaan lingkaran:</li>
                            <ul>
                                <li>Pusat lingkaran \(C(4,2)\) dan jari-jari \(\sqrt{53}\).</li>
                                <li>Persamaan lingkaran dapat ditulis sebagai:</li>
                            </ul>
                                \[(x - 4)^2 + (y - 2)^2 = (\sqrt{53})^2\]
                            <li>Bentuk umum persamaan lingkaran:</li>
                            <ul>
                                <li>Lakukan ekspansi dan penggabungan kuadrat:</li>
                            </ul>
                                \[x^2 + y^2 - 8x - 4y + 20 = 53\]
                                \[x^2 + y^2 - 8x - 4y - 33 = 0\]
                            </ol>

                            <p>   Jadi, persamaan lingkaran dalam bentuk umum adalah \(\boxed{x^2 + y^2 - 8x - 4y - 33 = 0}\). </p>


                            </p>
                    <b class="text-end text-danger fw-bold"> <h3>JAWABAN : E</h3></b>
                    </div>
                </div>
                <hr />
<!-- SOAL end -->
<!--=======================  soal25 ===================================-->
<li>Sebuah sekolah memiliki 1.260 siswa. Di sekolah tersebut mengharuskan semua siswanya memilih hanya 1 jenis ekstra kurikuler.  Jika  pilihan ekstra kurikuler disajikan dalam bentuk diagram lingkaran seperti berikut , maka banyaknya siswa yang mengikuti ekstra kurikuler musik adalah ... Siswa.</li>
            <img src="{{asset('asets/US/2019_25.png')}}" alt="soal25" class="img-fluid">
                <ol type="A">
                    <li>\(135  \)</li>
                    <li>\(155  \)</li>
                    <li>\(165  \)</li>
                    <li>\(175  \)</li>
                    <li>\(195  \)</li>

                </ol>
                <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal25" aria-expanded="false" aria-controls="collapsesoal25">
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal25">
                    <div class="card card-body overflow-auto">
                        <p>\(\displaystyle \begin{align}

                            \end{align}\)</p>
                    <b class="text-end text-danger fw-bold"> <h3>JAWABAN : D</h3></b>
                    </div>
                </div>
                <hr />
<!-- SOAL end -->
<!--=======================  soal26 ===================================-->
            <li>Diberikan table data panjang potongan logam sebagai berikut : <br>
                Mean dari data pada tabel distribusi tersebut adalah
                </li>
                <table class="table-bordered text-center">
                    <thead>
                        <tr>
                            <th>Panjang (cm)</th>
                            <th>\(14-18\)</th>
                            <th>\(19-23\)</th>
                            <th>\(24-28\)</th>
                            <th>\(29-33\)</th>
                            <th>\(34-38\)</th>
                            <th>\(39-43\)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th>Frekuensi</th>
                            <td>3</td>
                            <td>5</td>
                            <td>5</td>
                            <td>4</td>
                            <td>2</td>
                            <td>6</td>
                        </tr>
                    </tbody>
                </table>
                <ol type="A">
                    <li>\( 25 \)</li>
                    <li>\( 29 \)</li>
                    <li>\( 32 \)</li>
                    <li>\( 32,7 \)</li>
                    <li>\( 33,8 \)</li>

                </ol>
                <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal26" aria-expanded="false" aria-controls="collapsesoal26">
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal26">
                    <div class="card card-body overflow-auto">
                        <p>\(\displaystyle \begin{align}

                            \end{align}\)</p>
                            <b class="text-end text-danger fw-bold"> <h3>JAWABAN : B</h3></b>
                        </div>
                </div>
                <hr />
<!-- SOAL end -->
<!--=======================  soal27 ===================================-->
            <li>Seorang kolektor seni akan memberi  kode pada masing-masing barang koleksinya. Ia akan menyusun kode yang terdiri dari huruf \(K\) dan empat angka dari angka-angka \(1, 2, 3, 4, 5, 6,\) dan \(7\) dengan tidak ada angka berulang.  Banyak kode yang dapat dibuat kolektor itu adalah ... Kode.</li>
                <ol type="A">
                    <li>\(240 \)</li>
                    <li>\(360 \)</li>
                    <li>\(420 \)</li>
                    <li>\(720 \)</li>
                    <li>\(840 \)</li>

                </ol>
                <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal27" aria-expanded="false" aria-controls="collapsesoal27">
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal27">
                    <div class="card card-body overflow-auto">
                        <p>Untuk menyusun kode yang terdiri dari huruf \(K\) dan empat angka dari angka-angka \(1, 2, 3, 4, 5, 6,\) dan \(7\) dengan tidak ada angka berulang, kita dapat menggunakan konsep permutasi.

                            Pertama, kita perlu memilih 4 angka dari 7 angka yang tersedia. Ini dapat dilakukan dengan \(P(7,4)\), di mana \(P\) merupakan simbol permutasi.

                            \[
                            P(7,4) = \frac{7!}{(7-4)!} = \frac{7!}{3!} = \frac{7 \times 6 \times 5 \times 4 \times 3!}{3!} = 7 \times 6 \times 5 \times 4 = \boxed{840}
                            \]
                            Setelah memilih 4 angka, kita perlu mengatur urutan angka-angka ini bersama huruf \(K\) dalam kode. Karena kita hanya memiliki satu huruf dan 4 angka, jumlah cara pengaturannya adalah 5!.

                            \[
                            5! = 5 \times 4 \times 3 \times 2 \times 1 = 120
                            \]

                            Jadi, jumlah kode yang dapat dibuat oleh kolektor seni tersebut adalah hasil perkalian dari \(P(7,4)\) dan \(5!\).

                            \[
                            \text{Jumlah Kode} = P(7,4) \times 5! = 840 \times 120 = 100.800
                            \]

                            Jadi, kolektor seni tersebut dapat membuat 100.800 kode yang memenuhi kriteria yang diberikan.</p>
                           <div class="border border-dark p-2">
                               Terjadi sedikit kesalahan pada soal, karena pada soal tidak disebutkan letak huruf K secara tepat, oleh karena itu mungkin pada soal perlu ditambahkan kata kata <i>"kode yang diawali huruf \(K\) yang diikuti \(4\) angka dibelakangnya"</i> Sehingga huruf K akan selalu berada di depan dan cocok dengan kunci jawaban <b>E</b>
                           </div>
                            <b class="text-end text-danger fw-bold"> <h3>JAWABAN : E</h3></b>
                    </div>
                </div>
                <hr />
<!-- SOAL end -->
<!--=======================  soal28 ===================================-->
            <li>Diketahui data \(3, 6, 7, 5, 4, 9, 4, 7, 9, 5, 7, 6\). Varians dari data tersebut adalah . . .</li>
                <ol type="A">
                    <li>\(\displaystyle \frac{18}{12} \)</li>
                    <li>\(\displaystyle \frac{26}{12} \)</li>
                    <li>\(\displaystyle \frac{40}{12} \)</li>
                    <li>\(\displaystyle \frac{56}{12} \)</li>
                    <li>\(\displaystyle \frac{72}{12} \)</li>

                </ol>
                <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal28" aria-expanded="false" aria-controls="collapsesoal28">
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal28">
                    <div class="card card-body overflow-auto">
                        <p>
                            Untuk menghitung varians dari data, langkah-langkah yang dapat diikuti adalah sebagai berikut:
                            \begin{align}
                            \text{Varians} &= \frac{\text{Selisih kuadrat}}{\text{Jumlah data}} \\
                            \end{align}

                            \begin{align*}
                            \text{Rata-rata} &= \frac{3 + 6 + 7 + 5 + 4 + 9 + 4 + 7 + 9 + 5 + 7 + 6}{12} \\
                            &= \frac{72}{12} \\
                            &= 6
                            \end{align*}
<br><br>
                            \begin{align}
                            \text{Selisih kuadrat} &= (3 - 6)^2 + (6 - 6)^2 + (7 - 6)^2 + (5 - 6)^2 + (4 - 6)^2 + (9 - 6)^2 \\
                            &\quad + (4 - 6)^2 + (7 - 6)^2 + (9 - 6)^2 + (5 - 6)^2 + (7 - 6)^2 + (6 - 6)^2 \\
                            &= 9 + 0 + 1 + 1 + 4 + 9 + 4 + 1 + 9 + 1 + 1 + 0 \\
                            &= 40
                            \end{align}
<br><br>
                            \begin{align}
                            \text{Varians} &= \frac{\text{Selisih kuadrat}}{\text{Jumlah data}} \\
                            &= \frac{40}{12} \\
                            \end{align}
                            Jadi, varians dari data tersebut adalah sekitar \(\boxed{\frac{40}{12}}\).
                        </p>
                    <b class="text-end text-danger fw-bold"> <h3>JAWABAN : C</h3></b>
                    </div>
                </div>
                <hr />
<!-- SOAL end -->
<!--=======================  soal29 ===================================-->
            <li>Tim cerdas cermat beranggotakan \(3\) orang akan dipilih secara acak dari \(7\) siswa kelas \(X\) dan \(4\) siswa kelas \(XI\). Peluang terbentuknya tim yang ketiga anggotanya kelas \(X\) adalah . . .</li>
                <ol type="A">
                    <li>\(\displaystyle \frac{7}{33} \)</li>
                    <li>\(\displaystyle \frac{10}{33} \)</li>
                    <li>\(\displaystyle \frac{15}{33} \)</li>
                    <li>\(\displaystyle \frac{18}{33} \)</li>
                    <li>\(\displaystyle \frac{21}{33} \)</li>

                </ol>
                <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal29" aria-expanded="false" aria-controls="collapsesoal29">
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal29">
                    <div class="card card-body overflow-auto">
                        <p>Peluang terbentuknya tim yang ketiga anggotanya kelas X dapat dihitung menggunakan notasi kombinasi. Jumlah cara yang mungkin untuk memilih tim dengan ketiga anggotanya dari kelas X adalah \( \displaystyle \binom{7}{3} \), di mana \(\displaystyle \binom{n}{r} \) merupakan simbol kombinasi yang menunjukkan jumlah cara yang mungkin untuk memilih \( r \) elemen dari himpunan \( n \) elemen.

                            \[ \binom{7}{3} = \frac{7!}{3!(7-3)!} = \frac{7!}{3!4!} = \frac{(7 \cdot 6 \cdot 5)}{(3 \cdot 2 \cdot 1)} = 35 \]

                            Jumlah cara yang mungkin untuk memilih tim ketiga anggotanya dari total 11 siswa (7 siswa kelas X dan 4 siswa kelas XI) adalah \(\displaystyle \binom{11}{3} \).

                            \[ \binom{11}{3} = \frac{11!}{3!(11-3)!} = \frac{11!}{3!8!} = \frac{(11 \cdot 10 \cdot 9)}{(3 \cdot 2 \cdot 1)} = 165 \]

                            Jadi, peluang terbentuknya tim yang ketiga anggotanya kelas X adalah \(\displaystyle \frac{35}{165} \) atau \(\boxed{\displaystyle \frac{7}{33}} \).</p>
                            <b class="text-end text-danger fw-bold"> <h3>JAWABAN : A</h3></b>
                    </div>
                </div>
                <hr />
<!-- SOAL end -->
<!--=======================  soal30 ===================================-->
            <li>Perhatikan data tinggi badan dalam histogram berikut! </li>
            <img src="{{asset('asets/US/2019_30.png')}}" alt="soal30" class="img-fluid">
            <p>Kuartil bawah data tersebut adalah . . .</p>
                <ol type="A">
                    <li>\(\displaystyle 144,5 +\frac{30}{7}  \)</li>
                    <li>\(\displaystyle 149,5 +\frac{30}{7}  \)</li>
                    <li>\(\displaystyle 150 +\frac{30}{7}  \)</li>
                    <li>\(\displaystyle 154 +\frac{30}{7}  \)</li>
                    <li>\(\displaystyle 154,5 +\frac{30}{7}  \)</li>

                </ol>
                <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal30" aria-expanded="false" aria-controls="collapsesoal30">
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal30">
                    <div class="card card-body overflow-auto">
                        <p>\(\displaystyle \begin{align}

                            \end{align}\)</p>
                    <b class="text-end text-danger fw-bold"> <h3>JAWABAN : B</h3></b>
                </div>
                </div>
                <hr />
                <!-- SOAL end -->
<!--=======================  soal31 ===================================-->
            <li>Sebuah lingkaran dipotong menjadi 5 buah juring yang sudut-sudut pusatnya membentuk barisan aritmatika.  Diketahui bahwa sudut pusat terbesarnya adalah tiga kali sudut pusat terkecil.  Besar sudut pusat terkecil  adalah ...</li>
                <ol type="A">
                    <li>\( 30^o  \)</li>
                    <li>\( 36^o  \)</li>
                    <li>\( 45^o  \)</li>
                    <li>\( 50^o  \)</li>
                    <li>\( 60^o  \)</li>

                </ol>
                <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal31" aria-expanded="false" aria-controls="collapsesoal31">
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal31">
                    <div class="card card-body overflow-auto">
                        <p>Misalkan besar sudut pusat terkecil dalam lingkaran adalah \(x\) derajat. Karena sudut-sudut pusat membentuk barisan aritmatika, maka kita dapat menentukan sudut-sudut pusat lainnya sebagai berikut:
                            <br><br>
                            Sudut pusat kedua = \(x + d\) <br>
                            Sudut pusat ketiga = \(x + 2d\) <br>
                            Sudut pusat keempat = \(x + 3d\) <br>
                            Sudut pusat kelima = \(x + 4d\) <br>
                            <br><br>
                            Diketahui bahwa sudut pusat terbesar adalah tiga kali sudut pusat terkecil, sehingga dapat dituliskan sebagai:

                            \[x + 4d = 3(x)\]

                            Menggunakan persamaan di atas, kita dapat mencari nilai \(x\) dan \(d\). Berikut langkah-langkahnya:
                            <!-- \begin{align*} \end{align*} -->

                            \begin{align*}
                            x + 4d &= 3x \\
                            4d &= 3x - x \\
                            4d &= 2x \\
                            d &= \frac{2}{4}x \\
                            d &= \frac{1}{2} x
                            \end{align*}

                            Dengan demikian, \(\displaystyle d = \frac{1}{2} x\)
                            <br><br>
                            Selanjutnya, karena lingkaran dipotong menjadi 5 buah juring, maka jumlah semua sudut pusat harus sama dengan 360 derajat (jumlah sudut dalam lingkaran). Kita dapat menghitung jumlah sudut pusat sebagai berikut:

                            \[x + (x + d) + (x + 2d) + (x + 3d) + (x + 4d) = 360\]

                            Substitusikan \(\displaystyle d = \frac{1}{2} x\) ke dalam persamaan di atas:

                            \begin{align*}
                            x + (x + \frac{1}{2}x) + (x + 2\cdot \frac{1}{2}x) + (x + 3\cdot\frac{1}{2}x) + (x + 4\cdot\frac{1}{2}x) &= 360 \\
                            x + (x + \frac{1}{2}x) + (x + x) + (x + \frac{3}{2}x) + (x + 2x) &= 360 \\
                            8x + \frac{1}{2} x + \frac{3}{2} x &= 360 \\
                            8x + \frac{4}{2} x &= 360 \\
                            8x+2x &= 360 \\
                            10x &= 360 \\
                            x &= 36 \end{align*}
                            Jadi, besar sudut pusat terkecil adalah \(\boxed{36^{\circ}}\).</p>
                    <b class="text-end text-danger fw-bold"> <h3>JAWABAN : B</h3></b>
                    </div>
                </div>
                <hr />
<!-- SOAL end -->
<!--=======================  soal32 ===================================-->
            <li>Nilai \(x\) yang memenuhi pertidaksamaan \(\displaystyle \frac{x-4}{x-3} > \frac{x-3}{x-2}  \) adalah . . .</li>
                <ol type="A">
                    <li>\(  x < 3,5 \)</li>
                    <li>\(  x > 2 \)</li>
                    <li>\( 2 < x < 3,5 \)</li>
                    <li>\( 1 < x < 2,5 \)</li>
                    <li>\( 2 < x < 3  \)</li>

                </ol>
                <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal32" aria-expanded="false" aria-controls="collapsesoal32">
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal32">
                    <div class="card card-body overflow-auto">
                        <p>Untuk menyelesaikan pertidaksamaan ini, kita dapat melakukan langkah-langkah berikut: </p>
                            <ol type="1">
                                <li>Membuat persamaan agar satu sisi bernilai nol : \(\displaystyle \frac{x-4}{x-3} - \frac{x-3}{x-2} > 0\)</li>
                                <li>Menggabungkan kedua pecahan pada sisi kiri pertidaksamaan: \(\displaystyle \frac{(x-4)(x-2) - (x-3)(x-3)}{(x-3)(x-2)}> 0\)</li>
                                <li>Menyederhanakan persamaan tersebut:\(\displaystyle \frac{x^2 - 6x + 8 - (x^2 - 6x + 9)}{(x-3)(x-2)}> 0\)</li>
                                <li>Mengurangi dan menyederhanakan persamaan tersebut:\(\displaystyle \frac{-1}{(x-3)(x-2)}> 0\)</li>
                                Sekarang kita perlu memeriksa tanda pecahan tersebut pada interval-interval kritis. Interval-interval kritis terjadi ketika pecahan berubah tanda, yaitu ketika penyebut (\((x-3)(x-2)\)) sama dengan nol. Dalam hal ini, interval kritis terjadi saat \(x = 2\) dan \(x = 3\).
                                <li>Membuat tabel tanda untuk \(x\) pada interval-interval kritis dan di luar interval-interval kritis:
                                    \[\begin{array}{|c|c|c|c|}
                                    \hline
                                    & x < 2 & 2 < x < 3 & x > 3 \\
                                    \hline
                                    \displaystyle \frac{-1}{(x-3)(x-2)} & - & + & - \\
                                    \hline
                                    \end{array}
                                    \]</li>
                                <li>
                                    Menentukan solusi dari pertidaksamaan:
                                    Dari tabel tanda, kita melihat bahwa pecahan \(\displaystyle \frac{-1}{(x-3)(x-2)}\) positif diantara interval-interval kritis, yaitu ketika \(2 < x < 3\). Oleh karena itu, solusi dari pertidaksamaan ini adalah \(\boxed{2 < x < 3}\).
                                </li>
                            </ol>
                              <b class="text-end text-danger fw-bold"> <h3>JAWABAN : E</h3></b>
                    </div>
                </div>
                <hr />
<!-- SOAL end -->
<!--=======================  soal33 ===================================-->
            <li>Diketahui \(f '(x) = x^2 - 4\),  \(f '(x)\) adalah turunan pertama dari \(f(x)\).  Jika \(f(3) = 5\) , maka \(f(x) =...\)</li>
                <ol type="A">
                    <li>\(\displaystyle \frac{1}{3} x^3-4x+2 \)</li>
                    <li>\(\displaystyle \frac{1}{3} x^3-4x-16 \)</li>
                    <li>\(\displaystyle \frac{1}{3} x^3-4x+16 \)</li>
                    <li>\(\displaystyle \frac{1}{3} x^3-4x+8 \)</li>
                    <li>\(\displaystyle \frac{1}{3} x^3-4x-4 \)</li>

                </ol>
                <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal33" aria-expanded="false" aria-controls="collapsesoal33">
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal33">
                    <div class="card card-body overflow-auto">
                        <p>Untuk menemukan fungsi \(f(x)\) berdasarkan turunan pertamanya \(f'(x) = x^2 - 4\), kita perlu mengintegralkan turunan pertama tersebut.
                            <br><br>
                            Mari kita integralkan \(f'(x)\) terlebih dahulu:

                            \[\int (f'(x)) dx = \int (x^2 - 4) dx\]

                            Menggunakan aturan integral, kita dapat mengintegrasikan setiap suku secara terpisah:

                            \[\int (x^2 - 4) dx = \int x^2 dx - \int 4 dx\]

                            Integrasi dari \(x^2\) adalah \(\frac{1}{3}x^3\), dan integrasi dari konstanta \(4\) adalah \(4x\). Jadi:

                            \[\int (x^2 - 4) dx = \frac{1}{3}x^3 - 4x + C\]

                            Di sini, \(C\) adalah konstanta integrasi.
                            <br><br>
                            Selanjutnya, kita dapat mencari nilai konstanta integrasi dengan menggunakan informasi \(f(3) = 5\).
                            <br><br>
                            Kita tahu bahwa \(f(x)\) adalah integral dari \(f'(x)\), sehingga kita dapat menggunakan metode nilai awal untuk menemukan konstanta integrasi. Dalam kasus ini, kita dapat menggunakan \(f(3) = 5\) sebagai nilai awal.
                            <br><br>
                            Jadi, kita dapat menyelesaikan persamaan:

                            \[f(3) = \frac{1}{3}(3)^3 - 4(3) + C\]

                            \[5 = 9 - 12 + C\]

                            \[C = 5 - 9 + 12 = 8\]

                            Sekarang kita memiliki nilai konstanta integrasi \(C = 8\).
                            <br><br>
                            Akhirnya, kita dapat menulis fungsi \(f(x)\) berdasarkan hasil integrasi:

                            \[f(x) = \frac{1}{3}x^3 - 4x + 8\]
                            <br><br>
                            Jadi, \(\boxed{f(x) = \frac{1}{3}x^3 - 4x + 8}\).</p>
                    <b class="text-end text-danger fw-bold"> <h3>JAWABAN : D</h3></b>
                    </div>
                </div>
                <hr />
<!-- SOAL end -->
<!--=======================  soal34 ===================================-->
            <li>Jika \(\alpha \) adalah sudut yang dibentuk antara garis \(AC\) dan bidang \(BDG\) pada kubus \(ABCD.EFGH\), maka nilai dari \(\sin \alpha \) adalah . . .</li>
                <ol type="A">
                    <li>\(\displaystyle \frac{1}{2} \sqrt{6} \)</li>
                    <li>\(\displaystyle \frac{1}{3} \sqrt{6} \)</li>
                    <li>\(\displaystyle \frac{1}{3} \sqrt{5} \)</li>
                    <li>\(\displaystyle \frac{1}{2} \sqrt{5} \)</li>
                    <li>\(\displaystyle \frac{2}{3} \sqrt{3} \)</li>

                </ol>
                <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal34" aria-expanded="false" aria-controls="collapsesoal34">
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal34">
                    <div class="card card-body overflow-auto">
                        <p>\(\displaystyle \begin{align}

                            \end{align}\)</p>
                    <b class="text-end text-danger fw-bold"> <h3>JAWABAN : B</h3></b>
                    </div>
                </div>
                <hr />
<!-- SOAL end -->
<!--=======================  soal35 ===================================-->
            <li>Median dari data potongan pita berikut adalah . . .</li>
            <table class="table-bordered text-center">
                <thead>
                    <tr>
                        <th>Panjang (cm)</th>
                        <th>\(25-29\)</th>
                        <th>\(30-34\)</th>
                        <th>\(35-39\)</th>
                        <th>\(40-44\)</th>
                        <th>\(45-49\)</th>
                        <th>\(50-54\)</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th>Frekuensi</th>
                        <td>6</td>
                        <td>10</td>
                        <td>10</td>
                        <td>8</td>
                        <td>12</td>
                        <td>4</td>
                    </tr>
                </tbody>
            </table>
                <ol type="A">
                    <li>\( 35 \)</li>
                    <li>\( 36,5 \)</li>
                    <li>\( 37,5 \)</li>
                    <li>\( 38 \)</li>
                    <li>\( 39 \)</li>

                </ol>
                <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal35" aria-expanded="false" aria-controls="collapsesoal35">
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal35">
                    <div class="card card-body overflow-auto">
                        <p>\(\displaystyle \begin{align}

                            \end{align}\)</p>
                    <b class="text-end text-danger fw-bold"> <h3>JAWABAN : E</h3></b>
                    </div>
                </div>
                <hr />
<!-- SOAL end -->
<!--=======================  soal36 ===================================-->
            <li>Fungsi \(f: R \to R \) dinyatakan dengan \(g(x) = x^2 + x + 2\) dan \((f \circ g)(x) = 2x^2 + 2x + 1\).  Bentuk fungsi \(f(x)\) adalah . . . </li>
                <ol type="A">
                    <li>\( f(x) =2x - 5 \)</li>
                    <li>\( f(x) =2x - 3 \)</li>
                    <li>\( f(x) =2x - 1 \)</li>
                    <li>\( f(x) =2x +3 \)</li>
                    <li>\( f(x) =2x +5 \)</li>
                </ol>
                <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal36" aria-expanded="false" aria-controls="collapsesoal36">
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal36">
                    <div class="card card-body overflow-auto">
                        <p>Untuk mencari bentuk fungsi \(f(x)\), kita dapat menggunakan konsep komposisi fungsi \((f \circ g)(x)\).

                            Diketahui bahwa \((f \circ g)(x) = 2x^2 + 2x + 1\). Dalam hal ini, \(f\) adalah fungsi yang diaplikasikan setelah fungsi \(g\).

                            Kita dapat menuliskan komposisi fungsi ini dalam bentuk persamaan:

                            \[(f \circ g)(x) = f(g(x)) = 2x^2 + 2x + 1\]

                            Namun, kita juga diberikan informasi tentang fungsi \(g(x)\), yaitu \(g(x) = x^2 + x + 2\).

                            Dengan menggunakan persamaan ini, kita dapat menggantikan \(g(x)\) dalam persamaan komposisi fungsi:

                            \[f(g(x)) = f(x^2 + x + 2) = 2x^2 + 2x + 1\]

                            Sekarang, kita ingin mencari bentuk fungsi \(f(x)\). Untuk melakukannya, kita perlu menyelesaikan persamaan di atas.
                            <br>
                            Misalkan \(u = x^2 + x +2\)
                            <!-- \begin{align*} \end{align*} -->
                            \begin{align*}
                            f(g(x))  &= 2x^2 + 2x + 1 \\
                            f(x^2 + x + 2) &= 2x^2 + 2x + 1 +(1 -1) \\
                            f(x^2 + x + 2) &= 2x^2 + 2x + 2 -1 \\
                            f(x^2 + x + 2) &= 2(x^2 + x + 1) -1 \\
                            f(u) &= 2(u) -1
                            \end{align*}
                            Jadi, nilai \(\boxed{f(x)=2x-1}\)
                            </p>
                    <b class="text-end text-danger fw-bold"> <h3>JAWABAN : C</h3></b>
                    </div>
                </div>
                <hr />
<!-- SOAL end -->
<!--=======================  soal37 ===================================-->
            <li>Diketahui matriks \(A= \begin{pmatrix}4&2\\3&-4 \end{pmatrix} \) dan \(B = \begin{pmatrix} 5&-3 \\2&1 \end{pmatrix}\). Jika \(CA = B\) dan \(C^{-1}\) adalah invers dari matriks \(C\), maka \(C^{-1} = ...\)</li>
                <ol type="A">
                    <li>\( \begin{pmatrix}-1&2 \\ 1&0 \end{pmatrix}  \)</li>
                    <li>\( \begin{pmatrix} -1&-2 \\1&0 \end{pmatrix}  \)</li>
                    <li>\( \begin{pmatrix} 0&2 \\-1&-1 \end{pmatrix}  \)</li>
                    <li>\(  \begin{pmatrix} 0&2 \\ 1&-1 \end{pmatrix} \)</li>
                    <li>\(  \begin{pmatrix} 0&-2 \\ -1 &1 \end{pmatrix} \)</li>

                </ol>
                <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal37" aria-expanded="false" aria-controls="collapsesoal37">
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal37">
                    <div class="card card-body overflow-auto">
                        <p>Karena diketahui \(CA=B\) dan ditanya adalah \(C^{-1} \) maka kita dapat mencari nilai invers C dengan cara \(C^{-1}=A \cdot B^{-1}\)
                            <br>
                            Oleh karena itu untuk mencari invers matriks \(B\), kita dapat menggunakan metode adjoin dan determinan.
                            <br><br>
                            Diketahui matriks \(B = \begin{pmatrix} 5&-3 \\2&1 \end{pmatrix}\). Untuk mencari inversnya, ikuti langkah-langkah berikut:
                            <br><br>
                            1. Hitung determinan matriks \(B\):
                               \(\text{det}(B) = (5 \cdot 1) - (-3 \cdot 2) = 5 + 6 = 11\)
                               <br><br>
                            2. Hitung matriks adjoin dari \(B\):
                               Matriks adjoin dari \(B\) diperoleh dengan menukar elemen-elemen diagonal utama dengan elemen-elemen diagonal kedua dan mengubah tanda elemen-elemen di luar diagonal utama.
                               \(\text{adj}(B) = \begin{pmatrix} 1&3 \\-2&5 \end{pmatrix}\)
                               <br><br>
                            3. Hitung matriks invers \(B\):
                               Matriks invers dari \(B\) diperoleh dengan membagi matriks adjoin \(B\) dengan determinan \(B\).
                               \(B^{-1} = \frac{1}{\text{det}(B)} \cdot \text{adj}(B) = \frac{1}{11} \cdot \begin{pmatrix} 1&3 \\-2&5 \end{pmatrix} = \begin{pmatrix} \frac{1}{11}&\frac{3}{11} \\-\frac{2}{11}&\frac{5}{11} \end{pmatrix}\)
                               <br><br>
                            Jadi, invers dari matriks \(B\) adalah:
                            \(B^{-1} = \begin{pmatrix} \frac{1}{11}&\frac{3}{11} \\-\frac{2}{11}&\frac{5}{11} \end{pmatrix}\)
                            <hr>
                            </p>
                            <p>Diketahui matriks \(A = \begin{pmatrix}4&2\\3&-4 \end{pmatrix}\) dan \(B^{-1} = \begin{pmatrix} \frac{1}{11}&\frac{3}{11} \\-\frac{2}{11}&\frac{5}{11} \end{pmatrix}\).
                                <br><br>
                                Mari kita hitung perkalian \(A \cdot B^{-1}\):

                                \[
                                A \cdot B^{-1} = \begin{pmatrix}4&2\\3&-4 \end{pmatrix} \cdot \begin{pmatrix} \frac{1}{11}&\frac{3}{11} \\-\frac{2}{11}&\frac{5}{11} \end{pmatrix}
                                \]

                                Untuk mengalikan dua matriks, kita harus mengalikan setiap elemen baris pada matriks pertama dengan setiap elemen kolom pada matriks kedua dan menjumlahkan hasilnya. Mari kita hitung:

                                \[
                                \begin{pmatrix}4&2\\3&-4 \end{pmatrix} \cdot \begin{pmatrix} \frac{1}{11}&\frac{3}{11} \\-\frac{2}{11}&\frac{5}{11} \end{pmatrix} = \begin{pmatrix}(4 \cdot \frac{1}{11} + 2 \cdot (-\frac{2}{11})) & (4 \cdot \frac{3}{11} + 2 \cdot \frac{5}{11}) \\ (3 \cdot \frac{1}{11} + (-4) \cdot (-\frac{2}{11})) & (3 \cdot \frac{3}{11} + (-4) \cdot \frac{5}{11})\end{pmatrix}
                                \]

                                Melakukan perhitungan lebih lanjut:

                                \[
                                \begin{pmatrix}(4 \cdot \frac{1}{11} + 2 \cdot (-\frac{2}{11})) & (4 \cdot \frac{3}{11} + 2 \cdot \frac{5}{11}) \\ (3 \cdot \frac{1}{11} + (-4) \cdot (-\frac{2}{11})) & (3 \cdot \frac{3}{11} + (-4) \cdot \frac{5}{11})\end{pmatrix} = \begin{pmatrix}\frac{4}{11} - \frac{4}{11} & \frac{12}{11} + \frac{10}{11} \\ \frac{3}{11} + \frac{8}{11} & \frac{9}{11} - \frac{20}{11} \end{pmatrix}
                                \]

                                Melakukan perhitungan lebih lanjut:

                                \[
                                \begin{pmatrix}\frac{4}{11} - \frac{4}{11} & \frac{12}{11} + \frac{10}{11} \\ \frac{3}{11} + \frac{8}{11} & \frac{9}{11} - \frac{20}{11} \end{pmatrix} = \begin{pmatrix}0 & \frac{22}{11} \\ \frac{11}{11} & -\frac{11}{11}\end{pmatrix}
                                \]

                                Menyederhanakan hasil:

                                \[
                                \begin{pmatrix}0 & \frac{22}{11} \\ \frac{11}{11} & -\frac{11}{11}\end{pmatrix} = \begin{pmatrix}0 & 2 \\ 1 & -1\end{pmatrix}
                                \]

                                Jadi, hasil perkalian \(A \cdot B^{-1}=C^{-1}\) adalah matriks \(C^{-1}=\boxed{\begin{pmatrix}0 & 2 \\ 1 & -1\end{pmatrix}}\).</p>
                    <b class="text-end text-danger fw-bold"> <h3>JAWABAN : D </h3></b>
                    </div>
                </div>
                <hr />
<!-- SOAL end -->
<!--=======================  soal38 ===================================-->
            <li>Suatu barisan geometri  mempunyai suku ke-4 bernilai \(-24\) dan suku ke-7 bernilai \(192\). Nilai suku ke-12 barisan tersebut adalah . . .</li>
                <ol type="A">
                    <li>\( 6.144 \)</li>
                    <li>\( 3.072 \)</li>
                    <li>\( -1.536 \)</li>
                    <li>\( -3.072 \)</li>
                    <li>\( -6.144 \)</li>

                </ol>
                <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal38" aria-expanded="false" aria-controls="collapsesoal38">
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal38">
                    <div class="card card-body overflow-auto">
                        <p>Untuk menemukan nilai suku ke-12 dalam barisan geometri, kita perlu mencari tahu rasio (rasio pengganda) dari barisan tersebut terlebih dahulu.
                            <br><br>
                            Misalkan suku pertama (suku ke-1) dalam barisan geometri ini adalah \(a\) dan rasio (rasio pengganda) barisannya adalah \(r\). Kita dapat menggunakan informasi yang diberikan untuk membentuk dua persamaan:
                            <br>
                            1. Suku ke-4 bernilai \(-24\), sehingga kita memiliki:
                            \[a \cdot r^3 = -24\]
                            <br>
                            2. Suku ke-7 bernilai \(192\), sehingga kita memiliki:
                            \[a \cdot r^6 = 192\]
                            <br><br>
                            Untuk menyelesaikan sistem persamaan ini, kita dapat membagi persamaan kedua dengan persamaan pertama:
                            \[\frac{a \cdot r^6}{a \cdot r^3} = \frac{192}{-24}\]
                            <br><br>
                            Setelah menyederhanakan, kita dapatkan:
                            \[r^3 = -8\]
                            <br>
                            Dari sini, kita dapat mencari nilai rasio (\(r\)). Kita tahu bahwa \((-2)^3 = -8\), jadi \(r = -2\).
                            <br> <br>
                            Selanjutnya kita cari nilai \(a\) dengan mensubstitusi nilai \(r\) ke salah satu persamaan : \(a \cdot r^3 = -24 \to a \cdot (-8) = -24  \to a = 3\)
                            <br><br>
                            Sekarang kita memiliki nilai \(a\) dan \(r\), kita dapat mencari suku ke-12 menggunakan rumus umum suku ke-n dalam barisan geometri:
                            \[a_n = a \cdot r^{n-1}\]

                            Substitusi nilai \(a = 3\) dan \(r = -2\) serta \(n = 12\) ke dalam rumus ini, kita dapatkan:
                            \[a_{12} = 3 \cdot (-2)^{12-1}\]

                            Kalkulasikan ekspresi ini, kita mendapatkan:
                            \[a_{12} = 3 \cdot (-2)^{11} = 3 \cdot -2048 = -6.144\]

                            Jadi, nilai suku ke-12 dalam barisan geometri tersebut adalah \(\boxed{-6.144}\).</p>
                    <b class="text-end text-danger fw-bold"> <h3>JAWABAN : E</h3></b>
                    </div>
                </div>
                <hr />
<!-- SOAL end -->
<!--=======================  soal39 ===================================-->
            <li>Turunan pertama fungsi \(\displaystyle g(x) = \frac{2x-3}{4x+1} \) adalah . . .</li>
                <ol type="A">
                    <li>\(\displaystyle g'(x) = \frac{14}{(4x+1)^2} \)</li> <br>
                    <li>\(\displaystyle g'(x) = \frac{10}{(4x+1)^2} \)</li> <br>
                    <li>\(\displaystyle g'(x) = \frac{5}{(4x+1)^2} \)</li> <br>
                    <li>\(\displaystyle g'(x) = -\frac{10}{(4x+1)^2} \)</li> <br>
                    <li>\(\displaystyle g'(x) = -\frac{14}{(4x+1)^2} \)</li>

                </ol>
                <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal39" aria-expanded="false" aria-controls="collapsesoal39">
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal39">
                    <div class="card card-body overflow-auto">
                        <p>Untuk menghitung turunan pertama dari fungsi \(\displaystyle g(x) = \frac{2x-3}{4x+1} \), kita dapat menggunakan aturan turunan bagi dan aturan rantai. Berikut adalah langkah-langkahnya:
                            <ol type="1">
                                <li>
                                    Gunakan aturan turunan bagi: \(\displaystyle \frac{d}{dx}\left( \frac{f}{g}\right) =\frac{g\cdot \frac{df}}{dx}-f\cdot \frac{dg}{dx}{g^{2}} \).
                                </li>
                                <li>
                                    Identifikasikan \(\displaystyle f(x) =2x-3 \) dan \(\displaystyle g(x) =4x+1 \).</li>
                                <li>
                                    Hitung turunan dari \(\displaystyle f(x) \):
                                    \(\displaystyle \frac{df}{dx} =2 \).</li>
                                <li>
                                    Hitung turunan dari \(\displaystyle g(x) \):
                                       \(\displaystyle \frac{dg}{dx} =4 \).</li>
                                <li>
                                    Substitusikan nilai-nilai yang sudah dihitung ke dalam rumus turunan bagi:
                                       \(\displaystyle \frac{d}{dx}\left( \frac{2x-3}{4x+1}\right) =\frac{( 4x+1)( 2)-( 2x-3)( 4)}{( 4x+1)^{2}} \).</li>
                                <li>
                                    Sederhanakan ekspresi tersebut:
                                       \(\displaystyle \frac{8x+2-8x+12}{( 4x+1)^{2}} =\frac{14}{( 4x+1)^{2}} \).</li>
                            </ol>
                        </p>
                        <p>  Jadi, turunan pertama dari fungsi \(\displaystyle g(x) =\frac{2x-3}{4x+1} \) adalah \(\boxed{\displaystyle \frac{14}}{( 4x+1)^{2}} \).</p>
                    <b class="text-end text-danger fw-bold"> <h3>JAWABAN : A</h3></b>
                    </div>
                </div>
                <hr />
<!-- SOAL end -->
<!--=======================  soal40 ===================================-->
            <li>Dalam sebuah kotak terdapat 15 bola yang diberi nomor 1 hingga 15. Dari dalam kotak tersebut diambil  sebuah bola secara acak. Peluang terambil bola bernomor kelipatan 3 atau bernomor ganjil adalah . . .</li>
                <ol type="A">
                    <li>\(\displaystyle \frac{4}{5} \)</li>
                    <li>\(\displaystyle \frac{2}{3} \)</li>
                    <li>\(\displaystyle \frac{8}{15} \)</li>
                    <li>\(\displaystyle \frac{2}{5} \)</li>
                    <li>\(\displaystyle \frac{1}{3} \)</li>

                </ol>
                <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal40" aria-expanded="false" aria-controls="collapsesoal40">
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal40">
                    <div class="card card-body overflow-auto">
                        <p>Untuk menghitung peluang terambilnya bola bernomor kelipatan 3 atau bernomor ganjil, kita perlu menentukan jumlah bola yang memenuhi kriteria tersebut.
                            <br><br>
                            Jumlah bola bernomor kelipatan 3: Terdapat lima bola bernomor kelipatan 3, yaitu 3, 6, 9, 12, dan 15.
                            <br><br>
                            Jumlah bola bernomor ganjil: Terdapat delapan bola bernomor ganjil, yaitu 1, 3, 5, 7, 9, 11, 13, dan 15.
                            <br><br>
                            Namun, perlu diperhatikan bahwa bola bernomor 3, 9 dan 15 masuk dalam kedua kategori (kelipatan 3 dan ganjil), sehingga kita tidak boleh menghitungnya dua kali.
                            <br><br>
                            Jumlah total bola dalam kotak adalah 15.
                            <br><br>
                            Jadi, jumlah bola yang memenuhi kriteria (bernomor kelipatan 3 atau bernomor ganjil) adalah 5 + 8 - 3 = 10.
                            <br><br>
                            Karena bola diambil secara acak, peluang terambil bola yang memenuhi kriteria adalah jumlah bola yang memenuhi kriteria dibagi oleh jumlah total bola dalam kotak.
                            <br><br>
                            Peluang terambil bola bernomor kelipatan 3 atau bernomor ganjil = 10/15 = 2/3
                            <br><br>
                            Jadi, peluang terambil bola bernomor kelipatan 3 atau bernomor ganjil adalah \(\boxed{\frac{2}{3}}\)</p>
                    <b class="text-end text-danger fw-bold"> <h3>JAWABAN : B</h3></b>
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
                <a href="#" target="_blank"><h3>DOWNLOAD FILE DOCX</h3></a>
                <a href="#" target="_blank"><h3>DOWNLOAD FILE PDF</h3></a>
                <br>
                <h1 class="text-danger">TERIMA KASIH</h1>
                <p>www.mathdosman.com</p>
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

