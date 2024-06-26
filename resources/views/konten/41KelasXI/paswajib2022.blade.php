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
            <h2 class="text-center">PENILAIAN AKHIR SEMESTER 2022</h2>
            <h3 class="text-center text-danger fw-bold">MATEMATIKA WAJIB</h3>
            <p class="text-center fst-italic"> Math_Dosman</p>
            <hr />
            <p>Berikut merupakan soal Penilaian Akhir Semester tahun 2022 di SMA Negeri 1 Gianyar</p>
            <p>Kelas : XI MIPA/IPS</p>
            <p>Waktu : 60 Menit</p>
            <p>MATEMATIKA WAJIB</p>
            <hr>
            <ol type="1">
<!--=======================  soal1 ===================================-->
            <li>Sistem pertidaksamaan dari daerah penyelesaian pada gambar berikut adalah . . .</li>
            <img src="{{asset('asets/PAS/1_2022.png')}}" alt="no1" class="border img-fluid">
                <ol type="A">
                    <li>\(\displaystyle x+3y \geq 3, 2x+y \geq -2\)</li>
                    <li>\(\displaystyle x+3y < 3, -2x+y \geq 2 \)</li>
                    <li>\(\displaystyle x+3y > 3, -2x+y \geq -2 \)</li>
                    <li>\(\displaystyle x-3y > 3, 2x+y \geq -2\)</li>
                    <li>\(\displaystyle x+3y < 3, 2x+y \geq 2 \)</li>
                </ol>
                <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal1" aria-expanded="false" aria-controls="collapsesoal1">
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal1">
                    <div class="card card-body overflow-auto">
                    <p>Garis pertama melalui titik \((0,1)\) dan \((3,0)\) serta garisnya putus-putus maka persamaan garisnya menjadi</p>
                    <p>\(\displaystyle \begin{align}
                        \frac{y-y_1}{y_2 - y_1} &= \frac{x-x_1}{x_2 - x_1} \\
                        \frac{y-1}{0-1} &= \frac{x-0}{3-0} \\
                        \frac{y-1}{-1} &= \frac{x}{3} \\
                        3(y-1) &= (-1)x\\
                        3y-3 &=-x\\
                        x+3y &= 3
                        \end{align}\)</p>
                        <p>Ambil satu titik pada daerah penyelesaian, misalkan titik \((1,2)\). Selanjutnya uji titik dengan cara substitusi ke persamaan garis </p>
                        <p>\(\displaystyle \begin{align}
                            x+3y &... 3 \\
                            (1)+3(2) &... 3\\
                            1+6 &...3\\
                            7 &> 3 \\\\
                            x+3y &> 3 \text{ (garis putus-putus)}
                            \end{align}\)</p>
                        <p>Garis kedua melalui titik \((0,-2)\) dan \((1,0)\)</p>
                        <p>\(\displaystyle \begin{align}
                            \frac{y-y_1}{y_2 - y_1} &= \frac{x-x_1}{x_2 - x_1} \\
                            \frac{y+2}{0+2} &= \frac{x-0}{1-0} \\
                            \frac{y+2}{2} &= \frac{x}{1} \\
                            y+2 &= 2x \\
                            2x-y &= 2
                            \end{align}\)</p>
                        <p>Ambil satu titik pada daerah penyelesaian, misalkan titik \((1,2)\). Selanjutnya uji titik dengan cara substitusi ke persamaan garis </p>
                        <p>\(\displaystyle \begin{align}
                            2x-y &... 2 \\
                            2(1)-(2) &... 2 \\
                            2-2 &... 2 \\
                            0 &< 2 \\\\
                            2x-y & \leq 2 \text{ (garis tidak putus-putus)}\\
                            &\text{atau} \\
                            -2x+y &\geq -2
                            \end{align}\)</p>
                        <p>Jadi, daerah penyelesaian pertidaksamaan pada gambar dibatasi oleh \( x+3y > 3, -2x+y\geq-2 \)</p>
                    <b class="text-end text-danger fw-bold"> <h3>JAWABAN : C</h3></b>
                    </div>
                </div>
                <hr />
<!-- SOAL end -->
<!--=======================  soal2 ===================================-->
            <li>Produk A membutuhkan 30 kg bahan mentah dan 18 jam kerja mesin. Produk B membutuhkan 20 kg bahan mentah dan 24 jam waktu kerja mesin. Bahan mentah yang tersedia 75 kg dan waktu kerja mesin 72 jam. model matematika yg sesuai dari permasalah tersebut adalah . . .</li>
                <ol type="A">
                    <li>\(\displaystyle 6x+4y≤15, 3x+4y≤12, x≥0, y≥0\)</li>
                    <li>\(\displaystyle 6x+4y≥15, 3x+4y≤12, x≥0, y≥0 \)</li>
                    <li>\(\displaystyle 6x+4y≤15, 3x+4y≥12, x≥0, y≥0 \)</li>
                    <li>\(\displaystyle 4x+6y≤15, 3x+4y≥12, x≥0, y≥0\)</li>
                    <li>\(\displaystyle 6x+4y≤15, 4x+3y≥12, x≥0, y≥0 \)</li>
                </ol>
                <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal2" aria-expanded="false" aria-controls="collapsesoal2">
                Alternatif Penyelesaian
                </button>
                <div class="collapse" id="collapsesoal2">
                    <div class="card card-body overflow-auto">
                    <p>Untuk memudahkan dalam menjawab soal sebaiknya kita membuat tabel</p>
                    <div class="row">
                        <div class="col-sm-8">
                            <table class="table table-bordered text-center">
                                <thead >
                                    <tr>
                                        <th></th>
                                        <th>Bahan Mentah</th>
                                        <th>Kerja Mesin</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th>Produk A</th>
                                        <td>30 kg</td>
                                        <td>18 jam</td>
                                    </tr>
                                    <tr>
                                        <th>Produk B</th>
                                        <td>18 kg</td>
                                        <td>24 jam</td>
                                    </tr>
                                    <tr>
                                        <td>Ketersediaan</td>
                                        <td>75 kg</td>
                                        <td>72 jam</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <p>Sehingga dapat dibuat pertidaksamaan dengan menisalkan produk A dengan \(x\) dan produk B dengan \(y\)</p>
                    <p>\(\displaystyle \begin{align}
                        30x+20y &\leq 75 \\
                        6x+4y &\leq 15\\\\
                        &\text{dan}\\
                        18x+24y &\leq 72 \\
                        3x+4y &\leq 12
                        \end{align}\)</p>
                    <p>Jadi, model matematika yang sesuai dari permasalahan tersebut adalah \(6x+4y \leq 15, \: 3x+4y \leq 12, \: x \geq 0, \: y \geq 0\)</p>
                    <b class="text-end text-danger fw-bold"> <h3>JAWABAN : A</h3></b>
                    </div>
                </div>
                <hr />
<!-- SOAL end -->
<!--=======================  soal3 ===================================-->
            <li>Nilai minimum dari fungsi tujuan \(f(x,y)=4x+5y\) yang memenuhi sistem pertidaksamaan \(2x+y≥10; x+3y≥15; x≥0; y≥0\) adalah . . .</li>
                <ol type="A">
                    <li>\(\displaystyle 30 \)</li>
                    <li>\(\displaystyle 32 \)</li>
                    <li>\(\displaystyle 34 \)</li>
                    <li>\(\displaystyle 36 \)</li>
                    <li>\(\displaystyle 38 \)</li>
                </ol>
                <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal3" aria-expanded="false" aria-controls="collapsesoal3">
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal3">
                  <div class="card card-body overflow-auto">
                    khgjhvfck
                   <b class="text-end text-danger fw-bold"> <h3>JAWABAN : D</h3></b>
                  </div>
                </div>
                <hr />
<!-- SOAL end -->
<!--=======================  soal4 ===================================-->
<li>Pedagang buah memiliki modal Rp 1.000.000,00 untuk membeli apel dan pisang untuk dijual kembali. Harga beli tiap kg apel Rp 4.000,00 dan pisang Rp 1.600,00. Tempatnya hanya bisa menampung 400 kg buah. Jumlah apel dan pisang yang dibeli agar kapasitas maksimum adalah . . .</li>
<ol type="A">
                    <li>Apel 50 kg dan Pisang 350 kg</li>
                    <li>Apel 100 kg dan Pisang 300 kg</li>
                    <li>Apel 120 kg dan Pisang 280 kg</li>
                    <li>Apel 150 kg dan Pisang 250 kg</li>
                    <li>Apel 200 kg dan Pisang 200 kg</li>
                </ol>
                <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal4" aria-expanded="false" aria-controls="collapsesoal4">
                    Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal4">
                    <div class="card card-body overflow-auto">
                        khgjhvfck
                        <b class="text-end text-danger fw-bold"> <h3>JAWABAN : D</h3></b>
                    </div>
                </div>
                <hr />
<!-- SOAL end -->
<!--=======================  soal5 ===================================-->
            <li>Sebuah toko kue mempunyai dua cabang. Pemilik toko ingin mendapatkan data keuntungan. Biaya dan penjualan masing-masing kue seperti pada tabel berikut</li>
            <p><img src="{{asset('asets/PAS/52022.png')}}" alt="PAS_no_5" class="img-fluid"> <br>Penyataan yang benar sesuai dari data diatas adalah . . . </p>
                <ol type="A">
                    <li>Toko A untung Rp 1.200.000 menjual Dodol</li>
                    <li>Toko B untung Rp 300.000 dari penjualan Kelepon</li>
                    <li>Toko B untung Rp 1.000.000 dari penjualan kedua jenis kue</li>
                    <li>Toko A dan B mendapat keuntungan bersama Rp 1.250.000 dari penjualan kedua jenis kue</li>
                    <li>Keuntungan Toko A sama dengan keuntungan Toko B dari penjualan kedua jenis kue</li>
                </ol>
                <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal5" aria-expanded="false" aria-controls="collapsesoal5">
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal5">
                    <div class="card card-body overflow-auto">
                    khgjhvfck
                    <b class="text-end text-danger fw-bold"> <h3>JAWABAN : D</h3></b>
                    </div>
                </div>
                <hr />
<!--=======================  soal6 ===================================-->
            <li>Jika \(A=\begin{pmatrix} 1&0 \\ 2&3 \end{pmatrix}\) dan \(I\) matriks satuan ordo dua, maka \(A^2-2A+I=...\)</li>
                <ol type="A">
                    <li>\(\displaystyle \begin{pmatrix} 4&0 \\ 0&4 \end{pmatrix} \)</li>
                    <li>\(\displaystyle \begin{pmatrix} 0&0 \\ 3&4 \end{pmatrix} \)</li>
                    <li>\(\displaystyle \begin{pmatrix} 1&0 \\ 3&4 \end{pmatrix} \)</li>
                    <li>\(\displaystyle \begin{pmatrix} 0&0 \\ 4&4 \end{pmatrix} \)</li>
                    <li>\(\displaystyle \begin{pmatrix} 2&0 \\ 4&4 \end{pmatrix} \)</li>
                </ol>
                <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal6" aria-expanded="false" aria-controls="collapsesoal6">
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal6">
                    <div class="card card-body overflow-auto">
                    khgjhvfck
                    <b class="text-end text-danger fw-bold"> <h3>JAWABAN : D</h3></b>
                    </div>
                </div>
                <hr />
<!--=======================  soal7 ===================================-->
            <li>Jika diketahui matriks \(A= \begin{pmatrix}1&-1 \\ 2&-2 \end{pmatrix} \) dan \(B= \begin{pmatrix}1&1 \\ 4&-2 \end{pmatrix} \) maka \((A+B)^2 =... \)</li>
                <ol type="A">
                    <li>\(\displaystyle \begin{pmatrix} 4&0 \\ 6&9 \end{pmatrix} \)</li>
                    <li>\(\displaystyle \begin{pmatrix} 4&0 \\ -12&16 \end{pmatrix} \)</li>
                    <li>\(\displaystyle \begin{pmatrix} -4&0 \\ 6&9 \end{pmatrix} \)</li>
                    <li>\(\displaystyle \begin{pmatrix} 4&0 \\ 6&-9 \end{pmatrix} \)</li>
                    <li>\(\displaystyle \begin{pmatrix} 4&0 \\ -6&-9 \end{pmatrix} \)</li>
                </ol>
                <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal7" aria-expanded="false" aria-controls="collapsesoal7">
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal7">
                    <div class="card card-body overflow-auto">
                    khgjhvfck
                    <b class="text-end text-danger fw-bold"> <h3>JAWABAN : D</h3></b>
                    </div>
                </div>
                <hr />
<!--=======================  soal8 ===================================-->
            <li>Diketahui matriks \(A= \begin{pmatrix}2c-3b & 2a+1 \\ a & b+7 \end{pmatrix} \) dan \(B=\begin{pmatrix}9&2 \\ b&c \end{pmatrix} \) Jika \(A=B^T \), maka nilai \(c=...\)</li>
                <ol type="A">
                    <li>\(\displaystyle 6 \)</li>
                    <li>\(\displaystyle 8 \)</li>
                    <li>\(\displaystyle 10 \)</li>
                    <li>\(\displaystyle 12 \)</li>
                    <li>\(\displaystyle 15 \)</li>
                </ol>
                <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal8" aria-expanded="false" aria-controls="collapsesoal8">
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal8">
                    <div class="card card-body overflow-auto">
                    khgjhvfck
                    <b class="text-end text-danger fw-bold"> <h3>JAWABAN : D</h3></b>
                    </div>
                </div>
                <hr />
<!--=======================  soal9 ===================================-->
            <li>Jumlah umur kakak dan dua kali umur adik adalah \(27\) tahun. Selisih umur kakak dan umur adik adalah \(3\) tahun. Jika umur kakak \(x\) tahun dan umur adik \(y\) tahun. Persamaan matriks yang sesuai dengan permasalahan tersebut adalah . . .  </li>
                <ol type="A">
                    <li>\(\displaystyle \begin{pmatrix}x\\y \end{pmatrix} = \begin{pmatrix}2&1\\1&-1 \end{pmatrix}\begin{pmatrix}9\\1 \end{pmatrix} \)</li>
                    <li>\(\displaystyle \begin{pmatrix}x\\y \end{pmatrix} = \begin{pmatrix}2&-1\\1&1 \end{pmatrix}\begin{pmatrix}9\\1 \end{pmatrix} \)</li>
                    <li>\(\displaystyle \begin{pmatrix}x\\y \end{pmatrix} = \begin{pmatrix}1&2\\1&-1 \end{pmatrix}\begin{pmatrix}9\\1 \end{pmatrix} \)</li>
                    <li>\(\displaystyle \begin{pmatrix}x\\y \end{pmatrix} = \begin{pmatrix}-1&2\\1&1 \end{pmatrix}\begin{pmatrix}9\\1 \end{pmatrix} \)</li>
                    <li>\(\displaystyle \begin{pmatrix}x\\y \end{pmatrix} = \begin{pmatrix}1&-2\\1&-1 \end{pmatrix}\begin{pmatrix}9\\1 \end{pmatrix} \)</li>
                </ol>
                <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal9" aria-expanded="false" aria-controls="collapsesoal9">
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal9">
                    <div class="card card-body overflow-auto">
                    khgjhvfck
                    <b class="text-end text-danger fw-bold"> <h3>JAWABAN : D</h3></b>
                    </div>
                </div>
                <hr />
<!--=======================  soal10 ===================================-->
            <li>Bayangan titik \(K(2,4)\) dicerminkan terhadap garis \(y=-x\) adalah . . .</li>
                <ol type="A">
                    <li>\(\displaystyle (-4,-2) \)</li>
                    <li>\(\displaystyle (-2,4) \)</li>
                    <li>\(\displaystyle (2,4) \)</li>
                    <li>\(\displaystyle (4,2) \)</li>
                    <li>\(\displaystyle (-4,2) \)</li>
                </ol>
                <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal10" aria-expanded="false" aria-controls="collapsesoal10">
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal10">
                    <div class="card card-body overflow-auto">
                    khgjhvfck
                    <b class="text-end text-danger fw-bold"> <h3>JAWABAN : D</h3></b>
                    </div>
                </div>
                <hr />
<!--=======================  soal11 ===================================-->
            <li>Tentukan hasil bayangan titik \(A(3,5) \) olrh translasi \(T\begin{pmatrix} -2\\4\end{pmatrix} \) !  </li>
                <ol type="A">
                    <li>\(\displaystyle A'(5,1) \)</li>
                    <li>\(\displaystyle A'(3,7) \)</li>
                    <li>\(\displaystyle A'(7,-1) \)</li>
                    <li>\(\displaystyle A'(7,3) \)</li>
                    <li>\(\displaystyle A'(1,9) \)</li>
                </ol>
                <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal11" aria-expanded="false" aria-controls="collapsesoal11">
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal11">
                    <div class="card card-body overflow-auto">
                    khgjhvfck
                    <b class="text-end text-danger fw-bold"> <h3>JAWABAN : D</h3></b>
                    </div>
                </div>
                <hr />
<!--=======================  soal12 ===================================-->
            <li>Titik \(A(8,-3) \) dirotasikan sejauh \(90^{\circ}\) terhadap titik pusat \(O(0,0) \) searah jarum jam. Bayangan titik \(A\) adalah . . .</li>
                <ol type="A">
                    <li>\(\displaystyle (3,-8) \)</li>
                    <li>\(\displaystyle (-3,-8) \)</li>
                    <li>\(\displaystyle (-3,8) \)</li>
                    <li>\(\displaystyle (8,3) \)</li>
                    <li>\(\displaystyle (8,-3) \)</li>
                </ol>
                <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal12" aria-expanded="false" aria-controls="collapsesoal12">
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal12">
                    <div class="card card-body overflow-auto">
                    khgjhvfck
                    <b class="text-end text-danger fw-bold"> <h3>JAWABAN : D</h3></b>
                    </div>
                </div>
                <hr />
<!--=======================  soal13 ===================================-->
            <li>Titik \((-1,1)\) didilatasi dengan faktor skala \(k\) dan terhadap titik pusat \((-2,5)\) menghasilkan titik \(B'(1,-7)\). Nilai \(k\) yang sesuai adalah . . .</li>
                <ol type="A">
                    <li>\(1 \)</li>
                    <li>\(2 \)</li>
                    <li>\(3 \)</li>
                    <li>\(4 \)</li>
                    <li>\(5 \)</li>
                </ol>
                <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal13" aria-expanded="false" aria-controls="collapsesoal13">
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal13">
                    <div class="card card-body overflow-auto">
                    khgjhvfck
                    <b class="text-end text-danger fw-bold"> <h3>JAWABAN : D</h3></b>
                    </div>
                </div>
                <hr />
<!--=======================  soal14 ===================================-->
            <li>Persamaan bayangan garis \(2y-5x-10=0\) oleh rotasi \([O, 90^{\circ}] \) dilanjutkan refleksi terhadap garis \(y=-x\) adalah</li>
                <ol type="A">
                    <li>\(\displaystyle 5y+2x-10=0 \)</li>
                    <li>\(\displaystyle 5y-2x-10=0 \)</li>
                    <li>\(\displaystyle 2y+5x+10=0 \)</li>
                    <li>\(\displaystyle 2y+5x-10=0 \)</li>
                    <li>\(\displaystyle 2y-5x+10=0 \)</li>
                </ol>
                <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal14" aria-expanded="false" aria-controls="collapsesoal14">
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal14">
                    <div class="card card-body overflow-auto">
                    khgjhvfck
                    <b class="text-end text-danger fw-bold"> <h3>JAWABAN : D</h3></b>
                    </div>
                </div>
                <hr />
<!--=======================  soal15 ===================================-->
            <li>Dalam gedung pertunjukkan disusun kursi dengan baris paling depan terdiri dari 12 buah, baris kedua berisi 14 buah, baris ketiga 16 buah dan seterusnya selalu bertambah 2. Banyaknya kursi pada baris ke-20 adalah . . .</li>
                <ol type="A">
                    <li>\(\displaystyle 28 \)</li>
                    <li>\(\displaystyle 50 \)</li>
                    <li>\(\displaystyle 58 \)</li>
                    <li>\(\displaystyle 60 \)</li>
                    <li>\(\displaystyle 62 \)</li>
                </ol>
                <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal15" aria-expanded="false" aria-controls="collapsesoal15">
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal15">
                    <div class="card card-body overflow-auto">
                    khgjhvfck
                    <b class="text-end text-danger fw-bold"> <h3>JAWABAN : D</h3></b>
                    </div>
                </div>
                <hr />
<!--=======================  soal16 ===================================-->
            <li>perhatikan deret bilangan berikut: \(1 + 4 + 7 + 10 + 13 +... \). Jumlah sepuluh suku pertama dari deret bilangan di atas adalah ...</li>
                <ol type="A">
                    <li>\(\displaystyle 145 \)</li>
                    <li>\(\displaystyle 147 \)</li>
                    <li>\(\displaystyle 150 \)</li>
                    <li>\(\displaystyle 153 \)</li>
                    <li>\(\displaystyle 156 \)</li>
                </ol>
                <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal16" aria-expanded="false" aria-controls="collapsesoal16">
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal16">
                    <div class="card card-body overflow-auto">
                    khgjhvfck
                    <b class="text-end text-danger fw-bold"> <h3>JAWABAN : D</h3></b>
                    </div>
                </div>
                <hr />
<!--=======================  soal17 ===================================-->
            <li>Mula-mula hanya terdapat 2 virus Corona. Jika virus Corona tersebut dapat membelah diri menjadi 2 setiap 4 jam, maka jumlah virus Corona setelah 24 jam adalah . . .</li>
                <ol type="A">
                    <li>\( 30 \)</li>
                    <li>\( 64 \)</li>
                    <li>\( 128 \)</li>
                    <li>\( 256 \)</li>
                    <li>\( 512\)</li>
                </ol>
                <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal17" aria-expanded="false" aria-controls="collapsesoal17">
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal17">
                    <div class="card card-body overflow-auto">
                    khgjhvfck
                    <b class="text-end text-danger fw-bold"> <h3>JAWABAN : D</h3></b>
                    </div>
                </div>
                <hr />
<!--=======================  soal18 ===================================-->
            <li>Jika \(M=\begin{pmatrix} 2&3\\-1&5 \end{pmatrix}  \), maka \(|M|=...\)</li>
                <ol type="A">
                    <li>\(13 \)</li>
                    <li>\(7 \)</li>
                    <li>\(-13 \)</li>
                    <li>\(1 \)</li>
                    <li>\(-7 \)</li>
                </ol>
                <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal18" aria-expanded="false" aria-controls="collapsesoal18">
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal18">
                    <div class="card card-body overflow-auto">
                    khgjhvfck
                    <b class="text-end text-danger fw-bold"> <h3>JAWABAN : D</h3></b>
                    </div>
                </div>
                <hr />
<!--=======================  soal19 ===================================-->
            <li>Invers matriks \(\begin{pmatrix}2&-3\\-2&4 \end{pmatrix} \) adalah . . .</li>
                <ol type="A">
                    <li>\(\begin{pmatrix} 4&3 \\2&2 \end{pmatrix} \)</li>
                    <li>\(\displaystyle \begin{pmatrix} 2&1 \\\frac{1}{2}&1 \end{pmatrix} \)</li>
                    <li>\(\displaystyle\frac{1}{2} \begin{pmatrix} 4&3 \\2&2 \end{pmatrix} \)</li>
                    <li>\(\displaystyle \frac{1}{3} \begin{pmatrix} 4&3 \\2&2 \end{pmatrix} \)</li>
                    <li>\(\displaystyle \frac{1}{4} \begin{pmatrix} 4&3 \\2&2 \end{pmatrix} \)</li>
                </ol>
                <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal19" aria-expanded="false" aria-controls="collapsesoal19">
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal19">
                    <div class="card card-body overflow-auto">
                    khgjhvfck
                    <b class="text-end text-danger fw-bold"> <h3>JAWABAN : D</h3></b>
                    </div>
                </div>
                <hr />
<!--=======================  soal20 ===================================-->
            <li>Titik \(A\) ditranslasikan oleh \(T= \begin{pmatrix}6\\-3 \end{pmatrix}\) menghasilkan titik \(A'(4,-2)\) koordinat titik \(A\) adalah . . .</li>
                <ol type="A">
                    <li>\((1,-2) \)</li>
                    <li>\((2,-1)\)</li>
                    <li>\((-2,1) \)</li>
                    <li>\((-1,2) \)</li>
                    <li>\((2,1)\)</li>
                </ol>
                <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal20" aria-expanded="false" aria-controls="collapsesoal20">
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal20">
                    <div class="card card-body overflow-auto">
                    khgjhvfck
                    <b class="text-end text-danger fw-bold"> <h3>JAWABAN : D</h3></b>
                    </div>
                </div>
                <hr />
<!-- SOAL end -->
</ol>
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

