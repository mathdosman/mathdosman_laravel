@extends('konten.40KelasX.40.template')
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
            KELAS X
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
            <h2 class="text-center">PREDIKSI I <br> PENILAIAN AKHIR SEMESTER</h2>
            <h3 class="text-center text-danger fw-bold">MATEMATIKA</h3>
            <p class="text-center fst-italic"> Math_Dosman</p>
            <hr />
            <p>Berikut merupakan soal Prediksi Penilaian Akhir Semester di SMA Negeri 1 Gianyar</p>
            <p>Kelas : X </p>
            <p>Waktu : 60 Menit</p>
            <p>MATEMATIKA</p>
            <hr>
            <ol type="1">
<!--=======================  soal1 ===================================-->
            <li>Ditentukan \(\displaystyle P=\left(a^{\frac{1}{3}} b^{\frac{2}{5}} \right)^{\frac{1}{2}} \). Nilai \(P\) untuk \(a=27 \) dan \(b= 32\) adalah...</li>
                <ol type="A">
                    <li>\(2 \sqrt{3} \)</li>
                    <li>\(2 \sqrt{6} \)</li>
                    <li>\(6 \)</li>
                    <li>\(12 \)</li>
                    <li>\(144 \)</li>

                </ol>
                <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal1" aria-expanded="false" aria-controls="collapsesoal1">
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal1">
                    <div class="card card-body overflow-auto">

                    <b class="text-end text-danger fw-bold"> <h3>JAWABAN : A</h3></b>
                    </div>
                </div>
                <hr />
<!-- SOAL end -->
<!--=======================  soal2 ===================================-->
            <li>Nilai \(x\) yang memenuhi \(3^{x-2} = 27 \sqrt{3} \) adalah . . .</li>
                <ol type="A">
                    <li>\(\displaystyle -1\frac{1}{2} \)</li>
                    <li>\(\displaystyle -\frac{1}{2} \)</li>
                    <li>\(\displaystyle \frac{1}{2} \)</li>
                    <li>\(\displaystyle 1\frac{1}{2} \)</li>
                    <li>\(\displaystyle 5\frac{1}{2} \)</li>

                </ol>
                <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal2" aria-expanded="false" aria-controls="collapsesoal2">
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal2">
                    <div class="card card-body overflow-auto">

                    <b class="text-end text-danger fw-bold"> <h3>JAWABAN : E</h3></b>
                    </div>
                </div>
                <hr />
<!-- SOAL end -->
<!--=======================  soal3 ===================================-->
            <li>Fungsi yang sesuai dengan grafik berikut adalah . . .</li>
            <img src="{{asset('asets/soal/prediksi2023soal3.png')}}" alt="grafikeksponen" width="60%">
                <ol type="A">
                    <li>\(\displaystyle f(x)=3^x \)</li>
                    <li>\(\displaystyle f(x)=3^x+1 \)</li>
                    <li>\(\displaystyle f(x)=2^x +1 \)</li>
                    <li>\(\displaystyle f(x)=2^{x+1} \)</li>
                    <li>\(\displaystyle f(x)=2^x \)</li>

                </ol>
                <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal3" aria-expanded="false" aria-controls="collapsesoal3">
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal3">
                    <div class="card card-body overflow-auto">

                    <b class="text-end text-danger fw-bold"> <h3>JAWABAN : C</h3></b>
                    </div>
                </div>
                <hr />
<!-- SOAL end -->
<!--=======================  soal4 ===================================-->
            <li>Nilai dari \(\displaystyle \frac{^2 \log^2 8 - ^2 \log^2 2}{^2 \log \sqrt{8}-^2 \log \sqrt{2}} = ...\)</li>
                <ol type="A">
                    <li>\(10 \)</li>
                    <li>\(8 \)</li>
                    <li>\(5 \)</li>
                    <li>\(4 \)</li>
                    <li>\(2 \)</li>

                </ol>
                <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal4" aria-expanded="false" aria-controls="collapsesoal4">
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal4">
                    <div class="card card-body overflow-auto">

                    <b class="text-end text-danger fw-bold"> <h3>JAWABAN : B</h3></b>
                    </div>
                </div>
                <hr />
<!-- SOAL end -->
<!--=======================  soal5 ===================================-->
            <li>Diketahui \(^2 \log 5 = m \) dan \(^5 \log 7=n\). Nilai \(^{35} \log 125 = ... \)</li>
                <ol type="A">
                    <li>\(\displaystyle \frac{3m}{1+mn} \)</li>
                    <li>\(\displaystyle \frac{3m}{m+n} \)</li>
                    <li>\(\displaystyle \frac{3}{m+n}\)</li>
                    <li>\(\displaystyle \frac{3}{1+mn} \)</li>
                    <li>\(\displaystyle \frac{3}{1+n} \)</li>

                </ol>
                <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal5" aria-expanded="false" aria-controls="collapsesoal5">
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal5">
                    <div class="card card-body overflow-auto">

                    <b class="text-end text-danger fw-bold"> <h3>JAWABAN : E</h3></b>
                    </div>
                </div>
                <hr />
<!-- SOAL end -->
<!--=======================  soal6 ===================================-->
            <li>Jumlah lima bilangan yang membentuk deret aritmetika adalah 125. Jika hasil kali bilangan terkecil dan bilangan terbesar adalah 225, maka selisih bilangan terkecil dan terbesar adalah...</li>
                <ol type="A">
                    <li>\(20 \)</li>
                    <li>\(25 \)</li>
                    <li>\(30 \)</li>
                    <li>\(40 \)</li>
                    <li>\(45 \)</li>

                </ol>
                <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal6" aria-expanded="false" aria-controls="collapsesoal6">
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal6">
                    <div class="card card-body overflow-auto">

                    <b class="text-end text-danger fw-bold"> <h3>JAWABAN : D</h3></b>
                    </div>
                </div>
                <hr />
<!-- SOAL end -->
<!--=======================  soal7 ===================================-->
            <li>Suatu deret geometri, semua sukunya positif. Jumlah suku ketiga dan suku keenamnya 12. sedangkan jumlah suku kelima dan suku kedelapannya 48. Jumlah empat suku pertama deret tersebut adalah...</li>
                <ol type="A">
                    <li>\(\displaystyle \frac{1}{3} \)</li>
                    <li>\(\displaystyle \frac{3}{7} \)</li>
                    <li>\(\displaystyle 2\)</li>
                    <li>\(\displaystyle 5\)</li>
                    <li>\(\displaystyle 15\)</li>

                </ol>
                <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal7" aria-expanded="false" aria-controls="collapsesoal7">
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal7">
                    <div class="card card-body overflow-auto">

                    <b class="text-end text-danger fw-bold"> <h3>JAWABAN : D</h3></b>
                    </div>
                </div>
                <hr />
<!-- SOAL end -->
<!--=======================  soal8 ===================================-->
            <li>Bakteri jenis A berkembang biak menjadi dua kali lipat setiap lima menit. Pada waktu lima belas menit pertama, banyaknya bakteri ada 400. Banyak bakteri pada waktu tiga puluh lima menit pertama adalah....</li>
                <ol type="A">
                    <li>\(6.400 \) bakteri</li>
                    <li>\(3.200 \) bakteri</li>
                    <li>\(6.400 \) bakteri</li>
                    <li>\(12.800 \) bakteri</li>
                    <li>\(32.000 \) bakteri</li>

                </ol>
                <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal8" aria-expanded="false" aria-controls="collapsesoal8">
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal8">
                    <div class="card card-body overflow-auto">

                    <b class="text-end text-danger fw-bold"> <h3>JAWABAN : A</h3></b>
                    </div>
                </div>
                <hr />
<!-- SOAL end -->
<!--=======================  soal9 ===================================-->
            <li>Setiap awal tahun, Budi menyimpan modal sebesar Rp1.000.000,00 pada suatu bank dengan bunga majemuk 15% per tahun. Jumlah modal tersebut setelah akhir tahun kelima adalah...</li>
                <ol type="A">
                    <li>Rp\(\displaystyle 1.000.000,00 (1,15)^5 \)</li>
                    <li>Rp\(\displaystyle 1.000.000,00 \frac{(1,15^5 - 1)}{0,15} \)</li>
                    <li>Rp\(\displaystyle 1.000.000,00 \frac{(1,15^4 - 1)}{0,15} \)</li>
                    <li>Rp\(\displaystyle 1.150.000,00 \frac{(1,15^5 - 1)}{0,15} \)</li>
                    <li>Rp\(\displaystyle 1.150.000,00 \frac{(1,15^4 - 1)}{0,15} \)</li>

                </ol>
                <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal9" aria-expanded="false" aria-controls="collapsesoal9">
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal9">
                    <div class="card card-body overflow-auto">

                    <b class="text-end text-danger fw-bold"> <h3>JAWABAN : A</h3></b>
                    </div>
                </div>
                <hr />
<!-- SOAL end -->
<!--=======================  soal10 ===================================-->
            <li>Sebuah mobil dibeli dengan harga Rp90.000.000,00. Jika setiap tahun mengalami penyusutan 15% dari nilai tahun sebelumnya. Harga mobil tersebut setelah 5 tahun adalah . . .</li>
                <ol type="A">
                    <li>Rp\(\displaystyle 90.000.000,00 (0,15)^{5}\)</li>
                    <li>Rp\(\displaystyle 90.000.000,00 (0,85)^{5}\)</li>
                    <li>Rp\(\displaystyle 90.000.000,00 (1,5)^{5}\)</li>
                    <li>Rp\(\displaystyle 90.000.000,00 (0,15)^{-5}\)</li>
                    <li>Rp\(\displaystyle 90.000.000,00 (0,85)^{-5}\)</li>

                </ol>
                <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal10" aria-expanded="false" aria-controls="collapsesoal10">
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal10">
                    <div class="card card-body overflow-auto">

                    <b class="text-end text-danger fw-bold"> <h3>JAWABAN : B</h3></b>
                    </div>
                </div>
                <hr />
<!-- SOAL end -->
<!--=======================  soal11 ===================================-->
            <li>Pada gambar berikut diketahui \(\angle CAD = 30^o \), \(\angle CBD = 45^o \), dan \(BC=9 \) cm
                <br>
                <img src="{{asset('asets/soal/prediksi2023soal11.png')}}" alt="gambar11" width="50%">
                <br>
                Panjang \(AB\) adalah . . .
            </li>
                <ol type="A">
                    <li>\( (9\sqrt{3}-4,5) \) cm</li>
                    <li>\( 27\sqrt{3} \) cm</li>
                    <li>\( 8\sqrt{3} \) cm</li>
                    <li>\( 9(\sqrt{2}-1) \) cm</li>
                    <li>\( 9(\sqrt{3}-1) \) cm</li>

                </ol>
                <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal11" aria-expanded="false" aria-controls="collapsesoal11">
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal11">
                    <div class="card card-body overflow-auto">

                    <b class="text-end text-danger fw-bold"> <h3>JAWABAN : E</h3></b>
                    </div>
                </div>
                <hr />
<!-- SOAL end -->
<!--=======================  soal12 ===================================-->
            <li>Perhatkan gambar berikut.
                <br>
                <img src="{{asset('asets/soal/prediksi2023soal12.png')}}" alt="gambar12" width="50%">
                <br>
                Jika \(\angle BCE = 30^o , BE=2\sqrt{3} \) cm, dan \(AB = 8 cm \), panjang \(CD\) adalah. . .

            </li>
                <ol type="A">
                    <li>\(\displaystyle \frac{28}{3}\sqrt{3} \)</li>
                    <li>\(\displaystyle 14\sqrt{2} \)</li>
                    <li>\(\displaystyle 14 \)</li>
                    <li>\(\displaystyle 28\sqrt{2} \)</li>
                    <li>\(\displaystyle 28\sqrt{3} \)</li>

                </ol>
                <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal12" aria-expanded="false" aria-controls="collapsesoal12">
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal12">
                    <div class="card card-body overflow-auto">

                    <b class="text-end text-danger fw-bold"> <h3>JAWABAN : A</h3></b>
                    </div>
                </div>
                <hr />
<!-- SOAL end -->
<!--=======================  soal13 ===================================-->
            <li>Pada segi empat \(ABCD\) berikut, besar \(\angle ABD = 30^o \), panjang \(AD=5\)cm, dan panjang \(BC=8 \)cm
                <br>
                <img src="{{asset('asets/soal/prediksi2023soal13.png')}}" alt="gambar13" width="30%">
                <br>
                Panjang \(CD \) adalah . . .

            </li>
                <ol type="A">
                    <li>\(\displaystyle 6\) cm</li>
                    <li>\(\displaystyle 6\sqrt{2} \) cm</li>
                    <li>\(\displaystyle 10\) cm</li>
                    <li>\(\displaystyle 10 \sqrt{2}\) cm</li>
                    <li>\(\displaystyle 10\sqrt{3}\) cm</li>

                </ol>
                <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal13" aria-expanded="false" aria-controls="collapsesoal13">
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal13">
                    <div class="card card-body overflow-auto">

                    <b class="text-end text-danger fw-bold"> <h3>JAWABAN : A</h3></b>
                    </div>
                </div>
                <hr />
<!-- SOAL end -->
<!--=======================  soal14 ===================================-->
            <li>Nilai dari \(\displaystyle \frac{\sin 45^o \cos 45^o}{\cos 60^o} \) adalah . . .</li>
                <ol type="A">
                    <li>\(\displaystyle \frac{1}{6}\sqrt{3} \)</li>
                    <li>\(\displaystyle \frac{1}{3}\sqrt{3}\)</li>
                    <li>\(\displaystyle \frac{1}{2}\sqrt{3}\)</li>
                    <li>\(\displaystyle \frac{1}{6}\sqrt{6}\)</li>
                    <li>\(\displaystyle \frac{1}{3}\sqrt{6}\)</li>

                </ol>
                <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal14" aria-expanded="false" aria-controls="collapsesoal14">
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal14">
                    <div class="card card-body overflow-auto">

                    <b class="text-end text-danger fw-bold"> <h3>JAWABAN : A</h3></b>
                    </div>
                </div>
                <hr />
<!-- SOAL end -->
<!--=======================  soal15 ===================================-->
            <li>Perhatikan gambar berikut
                <br>
                <img src="{{asset('asets/soal/prediksi2023soal15.png')}}" alt="gambar15" width="50%">
                <br>
                \(PQRS\) adalah persegi panjang dan \(PRT\) adalah segitiga siku-siku di \(R\). Jika \(PQ = 12\)cm, \(PS=20\) cm dan \(RT=16\)cm, maka panjang \(PT\) adalah ...
            </li>
                <ol type="A">
                    <li>\(\displaystyle 10 \sqrt{2}\)</li>
                    <li>\(\displaystyle 20 \sqrt{2}\)</li>
                    <li>\(\displaystyle 10 \sqrt{3}\)</li>
                    <li>\(\displaystyle 20 \sqrt{3}\)</li>
                    <li>\(\displaystyle 20\)</li>

                </ol>
                <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal15" aria-expanded="false" aria-controls="collapsesoal15">
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal15">
                    <div class="card card-body overflow-auto">

                    <b class="text-end text-danger fw-bold"> <h3>JAWABAN : B</h3></b>
                    </div>
                </div>
                <hr />
<!-- SOAL end -->
<!--=======================  soal16 ===================================-->
            <li>Diketahui \(x=p, y=q\) dan \(z=r\) meruapakan penyelesaian sistem persamaan linear tiga variabel </li>
            \[\left\{\begin{matrix}
            x+2y+3z=11\\
            2x-y-3z=-4\\
            -x+2y-3z=-3
            \end{matrix}\right.\]
            Nilai \(6p+5q+9r  \) adalah . . .
                <ol type="A">
                    <li>\(16 \)</li>
                    <li>\(36 \)</li>
                    <li>\(56 \)</li>
                    <li>\(66 \)</li>
                    <li>\(96 \)</li>

                </ol>
                <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal16" aria-expanded="false" aria-controls="collapsesoal16">
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal16">
                    <div class="card card-body overflow-auto">

                    <b class="text-end text-danger fw-bold"> <h3>JAWABAN : B</h3></b>
                    </div>
                </div>
                <hr />
<!-- SOAL end -->
<!--=======================  soal17 ===================================-->
            <li>Himpunan penyelesaian sistem persamaan \[ \left\{\begin{matrix} \displaystyle \frac{1}{x} + \frac{1}{y} + \frac{1}{z}= 6\\ \displaystyle  \frac{2}{x} + \frac{2}{y} - \frac{1}{z} = 3 \\ \displaystyle  \frac{3}{x} -\frac{1}{y} +\frac{2}{z} = 7 \end{matrix}\right. \] adalah \(\{(x,y,z) \} \). Nilai dari \(x+2y+3z \) adalah . . .</li>
                <ol type="A">
                    <li>\(0 \)</li>
                    <li>\(1 \)</li>
                    <li>\(3 \)</li>
                    <li>\(12 \)</li>
                    <li>\(14 \)</li>

                </ol>
                <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal17" aria-expanded="false" aria-controls="collapsesoal17">
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal17">
                    <div class="card card-body overflow-auto">

                    <b class="text-end text-danger fw-bold"> <h3>JAWABAN : C</h3></b>
                    </div>
                </div>
                <hr />
<!-- SOAL end -->
<!--=======================  soal18 ===================================-->
            <li>Ani, Nia, dan Ina pergi bersama-sama ke toko buah. Ani membeli 2 kg apel, 2 kg anggur, dan 1 kg jeruk dengan harga Rp134.000,00; Nia membeli 3 kg apel, 1 kg anggur, dan 1 kg jeruk dengan harga Rp122.000,00; Ina membeli 1 kg apel, 3 kg anggur, dan 2 kg jeruk dengan harga Rp160.000,00. Harga 1 kg apel, 1 kg anggur, dan 4 kg jeruk seluruhnya adalah....</li>
                <ol type="A">
                    <li>Rp\(72.000,00 \)</li>
                    <li>Rp\(88.000,00 \)</li>
                    <li>Rp\(102.000,00 \)</li>
                    <li>Rp\(110.000,00 \)</li>
                    <li>Rp\(116.000,00 \)</li>

                </ol>
                <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal18" aria-expanded="false" aria-controls="collapsesoal18">
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal18">
                    <div class="card card-body overflow-auto">

                    <b class="text-end text-danger fw-bold"> <h3>JAWABAN : E</h3></b>
                    </div>
                </div>
                <hr />
<!-- SOAL end -->
<!--=======================  soal19 ===================================-->
            <li>Perhatikan gambar berikut
                <br>
                <img src="{{asset('asets/soal/prediksi2023soal19.png')}}" alt="gambar19" width="50%">
                <br>
                Daerah penyelesaian yang memenuhi sistem pertidaksamaan \(2x+y \leq 8 ; \; x+2y \geq 10; \; x \geq 0; \; y \geq 0 \) adalah ...
             </li>
                <ol type="A">
                    <li>V</li>
                    <li>IV</li>
                    <li>III</li>
                    <li>II</li>
                    <li>I</li>

                </ol>
                <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal19" aria-expanded="false" aria-controls="collapsesoal19">
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal19">
                    <div class="card card-body overflow-auto">

                    <b class="text-end text-danger fw-bold"> <h3>JAWABAN : D</h3></b>
                    </div>
                </div>
                <hr />
<!-- SOAL end -->
<!--=======================  soal20 ===================================-->
            <li>Perhatikan gambar berikut
                <br>
                <img src="{{asset('asets/soal/prediksi2023soal20.png')}}" alt="gambar20">
                <br>
                Berdasarkan gambar diatas, sistem pertidaksamaan yang memenuhi daerah yang diarsir adalah . . .
            </li>
                <ol type="A">
                    <li>\(x-y \leq 2; \; x+y \leq 2; \; x+y \leq 6; \; x \geq 0; \; y \geq 0 \)</li>
                    <li>\(x-y \leq 2; \; x+y \geq 2; \; x+y \leq 6; \; x \geq 0; \; y \geq 0 \)</li>
                    <li>\(x-y \geq 2; \; x+y \leq 2; \; x+y \leq 6; \; x \geq 0; \; y \geq 0 \)</li>
                    <li>\(x-y \geq 2; \; x+y \geq 2; \; x+y \leq 6; \; x \geq 0; \; y \geq 0 \)</li>
                    <li>\(x-y \geq 2; \; x+y \geq 2; \; x+y \geq 6; \; x \geq 0; \; y \geq 0 \)</li>

                </ol>
                <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal20" aria-expanded="false" aria-controls="collapsesoal20">
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal20">
                    <div class="card card-body overflow-auto">

                    <b class="text-end text-danger fw-bold"> <h3>JAWABAN : C</h3></b>
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

