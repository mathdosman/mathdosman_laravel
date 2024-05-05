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
            <h2 class="text-center">PREDIKSI II <br> PENILAIAN AKHIR SEMESTER 2023</h2>
            <h3 class="text-center text-danger fw-bold">MATEMATIKA</h3>
            <p class="text-center fst-italic"> Math_Dosman</p>
            <hr />
            <p>Berikut merupakan soal Prediksi Penilaian Akhir Semester tahun 2023 di SMA Negeri 1 Gianyar</p>
            <p>Kelas : X </p>
            <p>Waktu : 60 Menit</p>
            <p>MATEMATIKA</p>
            <hr>
            <ol type="1">
<!--=======================  soal1 ===================================-->
            <li>Hasil pengerjaan \(3 \sqrt{8} - \sqrt{50} +2\sqrt{18} \) dalam bentuk sederhana adalah . . </li>
                <ol type="A">
                    <li>\(7\sqrt{2} \)</li>
                    <li>\(6\sqrt{2} \)</li>
                    <li>\(2\sqrt{7} \)</li>
                    <li>\(5\sqrt{2} \)</li>
                    <li>\(2\sqrt{5} \)</li>

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
            <li>Himpunan penyelesaian dari persamaan eksponen berikut adalah \(3^{x^2 -4x - 5} = 27^{-x+5}\) </li>
                <ol type="A">
                    <li>\(\{4,5\} \)</li>
                    <li>\(\{4,-5\} \)</li>
                    <li>\(\{-4,5\} \)</li>
                    <li>\(\{-4,-5\} \)</li>
                    <li>\(5 \)</li>

                </ol>
                <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal2" aria-expanded="false" aria-controls="collapsesoal2">
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal2">
                    <div class="card card-body overflow-auto">

                    <b class="text-end text-danger fw-bold"> <h3>JAWABAN : C</h3></b>
                    </div>
                </div>
                <hr />
<!-- SOAL end -->
<!--=======================  soal3 ===================================-->
            <li>Bentuk rasional dari pecahan \(\displaystyle \frac{\sqrt{8}}{\sqrt{5}-\sqrt{3}} =...\)</li>
                <ol type="A">
                    <li>\(\sqrt{5}+\sqrt{3} \)</li>
                    <li>\(\sqrt{6} \)</li>
                    <li>\(\sqrt{10} \)</li>
                    <li>\(\sqrt{10}+\sqrt{6} \)</li>
                    <li>\(\sqrt{5} \)</li>

                </ol>
                <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal3" aria-expanded="false" aria-controls="collapsesoal3">
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal3">
                    <div class="card card-body overflow-auto">

                    <b class="text-end text-danger fw-bold"> <h3>JAWABAN : D</h3></b>
                    </div>
                </div>
                <hr />
<!-- SOAL end -->
<!--=======================  soal4 ===================================-->
            <li>Hitunglah hasil dari \(^4 \log 6 + ^4 \log 8 - ^4 \log3 + ^4 \log 16 = ... \)</li>
                <ol type="A">
                    <li>\(0 \)</li>
                    <li>\(2 \)</li>
                    <li>\(4 \)</li>
                    <li>\(6 \)</li>
                    <li>\(8 \)</li>

                </ol>
                <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal4" aria-expanded="false" aria-controls="collapsesoal4">
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal4">
                    <div class="card card-body overflow-auto">

                    <b class="text-end text-danger fw-bold"> <h3>JAWABAN : C</h3></b>
                    </div>
                </div>
                <hr />
<!-- SOAL end -->
<!--=======================  soal5 ===================================-->
            <li>Sebanyak 1000 bakteri dilepaskan di sebuah cawan. Bakteri tersebut mampu membelah diri menjadi 2 kali lipat setiap 15 menit. Tentukan jumlah bakteri setelah 2 jam!</li>
                <ol type="A">
                    <li>\(4.000 \)</li>
                    <li>\(16.000 \)</li>
                    <li>\(20.000 \)</li>
                    <li>\(128.000 \)</li>
                    <li>\(256.000 \)</li>

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
            <li>Dalam suatu barisan aritmatika diketahui suku ketiga adalah 11, sedangkan selisih suku sebelas dan ketujuh adalah 16. Suku pertama barisan tersebut adalah ...</li>
                <ol type="A">
                    <li>\(0 \)</li>
                    <li>\(1 \)</li>
                    <li>\(2\)</li>
                    <li>\(3 \)</li>
                    <li>\(4\)</li>

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
            <li>Seorang pemetik kebun memetik jeruknya setiap hari, dan mencatat banyaknya jeruk yang dipetik.  Ternyata banyaknya jeruk yang dipetik pada hari ke-\(n\) memenuhi rumus \(Un = 50 + 25n\). Jumlah jeruk yang telah dipetik selama \(10\) hari yang pertama adalah...</li>
                <ol type="A">
                    <li>\(1675 \)</li>
                    <li>\(1775 \)</li>
                    <li>\(1875 \)</li>
                    <li>\(1975 \)</li>
                    <li>\(2075 \)</li>

                </ol>
                <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal7" aria-expanded="false" aria-controls="collapsesoal7">
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal7">
                    <div class="card card-body overflow-auto">

                    <b class="text-end text-danger fw-bold"> <h3>JAWABAN : C</h3></b>
                    </div>
                </div>
                <hr />
<!-- SOAL end -->
<!--=======================  soal8 ===================================-->
            <li>Diketahui suku kedua dan suku keenam barisan geometri berturut-turut adalah 4 dan 64. Suku ke 10 barisan tersebut adalah ...</li>
                <ol type="A">
                    <li>\(1024 \)</li>
                    <li>\(512 \)</li>
                    <li>\(256 \)</li>
                    <li>\(128 \)</li>
                    <li>\(164 \)</li>

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
            <li>Banyaknya suku pada deret geometri  adalah \(5+25+125+ \cdots + U_n = 97.655 \) adalah . . .</li>
                <ol type="A">
                    <li>\(6 \)</li>
                    <li>\(7 \)</li>
                    <li>\(8 \)</li>
                    <li>\(9 \)</li>
                    <li>\(10 \)</li>

                </ol>
                <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal9" aria-expanded="false" aria-controls="collapsesoal9">
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal9">
                    <div class="card card-body overflow-auto">

                    <b class="text-end text-danger fw-bold"> <h3>JAWABAN : B</h3></b>
                    </div>
                </div>
                <hr />
<!-- SOAL end -->
<!--=======================  soal01 ===================================-->
            <li>Seorang siswa SMAN 1 Gianyar menjatuhkan bola dari ketinggian \(100\) meter. Tinggi pantulan bola berikutnya hanya  \(0,5\) tinggi sebelumnya. Panjang lintasan gerak bola seluruhnya hingga bola berhenti adalah ...</li>
                <ol type="A">
                    <li>\(100 \)</li>
                    <li>\(200 \)</li>
                    <li>\(300 \)</li>
                    <li>\(400 \)</li>
                    <li>\(500 \)</li>

                </ol>
                <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal10" aria-expanded="false" aria-controls="collapsesoal10">
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal10">
                    <div class="card card-body overflow-auto">

                    <b class="text-end text-danger fw-bold"> <h3>JAWABAN : C</h3></b>
                    </div>
                </div>
                <hr />
<!-- SOAL end -->
<!--=======================  soal11 ===================================-->
            <li>Tentukan nilai dari \(\tan 30^o \cdot \cos 90^o - \sin 90^o \cdot \tan 45^o \)  adalah ...</li>
                <ol type="A">
                    <li>\( -2\)</li>
                    <li>\( -1\)</li>
                    <li>\( 0\)</li>
                    <li>\( 1\)</li>
                    <li>\( 2\)</li>

                </ol>
                <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal11" aria-expanded="false" aria-controls="collapsesoal11">
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal11">
                    <div class="card card-body overflow-auto">

                    <b class="text-end text-danger fw-bold"> <h3>JAWABAN : B</h3></b>
                    </div>
                </div>
                <hr />
<!-- SOAL end -->
<!--=======================  soal12 ===================================-->
            <li>Diketahui sebuah segitiga \(ABC\) siku-siku di \(B\) dengan kosinus salah satu sudut lancipnya \(\displaystyle \frac{10}{26}\). Nilai tangen sudut tersebut adalah …</li>
                <ol type="A">
                    <li>\(\displaystyle \frac{13}{5} \)</li>
                    <li>\(\displaystyle \frac{12}{13} \)</li>
                    <li>\(\displaystyle \frac{5}{12} \)</li>
                    <li>\(\displaystyle \frac{12}{5} \)</li>
                    <li>\(\displaystyle \frac{13}{12} \)</li>

                </ol>
                <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal12" aria-expanded="false" aria-controls="collapsesoal12">
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal12">
                    <div class="card card-body overflow-auto">

                    <b class="text-end text-danger fw-bold"> <h3>JAWABAN : D</h3></b>
                    </div>
                </div>
                <hr />
<!-- SOAL end -->
<!--=======================  soal13 ===================================-->
            <li>Panjang \(a = 9\) dan besar sudut \(C\) adalah \(30^o\) maka panjang \(b\) adalah ...</li>
                <ol type="A">
                    <li>\(10\sqrt{3} \)</li>
                    <li>\(9\sqrt{3} \)</li>
                    <li>\(12\sqrt{3} \)</li>
                    <li>\(9\sqrt{2} \)</li>
                    <li>\(10\sqrt{2} \)</li>

                </ol>
                <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal13" aria-expanded="false" aria-controls="collapsesoal13">
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal13">
                    <div class="card card-body overflow-auto">

                    <b class="text-end text-danger fw-bold"> <h3>JAWABAN : B</h3></b>
                    </div>
                </div>
                <hr />
<!-- SOAL end -->
<!--=======================  soal14 ===================================-->
            <li>Diketahui segitiga \(PQR\) siku-siku di \(Q\) dengan panjang \(PR = 54\), dan besar sudur \(R\) adalah \(60^o\). Panjang \(QR\) adalah ...</li>
                <ol type="A">
                    <li>\(18 \)</li>
                    <li>\(27\sqrt{3} \)</li>
                    <li>\(18\sqrt{3} \)</li>
                    <li>\(27 \)</li>
                    <li>\(\sqrt{3} \)</li>

                </ol>
                <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal14" aria-expanded="false" aria-controls="collapsesoal14">
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal14">
                    <div class="card card-body overflow-auto">

                    <b class="text-end text-danger fw-bold"> <h3>JAWABAN : D</h3></b>
                    </div>
                </div>
                <hr />
<!-- SOAL end -->
<!--=======================  soal15 ===================================-->
            <li><img src="{{asset('asets/soal/prediksi2-2023soal15.png')}}" alt="prediksi2-2023soal15" width="50%"></li>
            Tinggi balon jika diukur dari tinggi pengamat adalah... <br> Diketahui nilai dari \(\sqrt{3}=1,73 \)
                <ol type="A">
                    <li>\(7,58 \)</li>
                    <li>\(10,38 \)</li>
                    <li>\(20,78 \)</li>
                    <li>\(34,09 \)</li>
                    <li>\(41,52 \)</li>

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
            <li>Seorang anak melihat mobil dari atas gedung di jalan raya dengan sudut depresi \(30^o\). Jika tinggi gedung 60 m dan tinggi teropong anak tersebut adalah 150 cm di atas gedung, maka jarak antara mobil dan dasar gedung tersebut adalah . . .</li>
                <ol type="A">
                    <li>\(103,8 \)</li>
                    <li>\(104,6 \)</li>
                    <li>\(106,4 \)</li>
                    <li>\(108,3 \)</li>
                    <li>\(134,8 \)</li>

                </ol>
                <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal16" aria-expanded="false" aria-controls="collapsesoal16">
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal16">
                    <div class="card card-body overflow-auto">

                    <b class="text-end text-danger fw-bold"> <h3>JAWABAN : C</h3></b>
                    </div>
                </div>
                <hr />
<!-- SOAL end -->
<!--=======================  soal17 ===================================-->
            <li>Diketahui sistem persamaan seperti berikut</li>
            \[\left \{ \begin{matrix}p+q+2r=6 \\p-q+r=-4 \\2p+q-2r=-4 \end{matrix}\right.\]
            Nilai untuk \((p-q)r=...\)
                <ol type="A">
                    <li>\(-20 \)</li>
                    <li>\(-12 \)</li>
                    <li>\(-16 \)</li>
                    <li>\(16 \)</li>
                    <li>\(20 \)</li>

                </ol>
                <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal17" aria-expanded="false" aria-controls="collapsesoal17">
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal17">
                    <div class="card card-body overflow-auto">

                    <b class="text-end text-danger fw-bold"> <h3>JAWABAN : B</h3></b>
                    </div>
                </div>
                <hr />
<!-- SOAL end -->
<!--=======================  soal18 ===================================-->
            <li>Bu Lili membeli 3 kg gula, 4 kg minyak, dan 1 kg kopi seharga 83.000. Bu Lulu membeli 2 kg gula, 5 kg minyak, dan 10 kg kopi seharga 158.000. Bu Lala membeli 3 kg gula, 4 kg minyak, dan 1 kg kopi seharga 86.000. Jika Bu Lele ingin membeli 2 kg gula dan 3 kg kopi maka Ibu Lele harus membayar seharga . . .</li>
                <ol type="A">
                    <li>Rp\( 29.000\)</li>
                    <li>Rp\( 43.000\)</li>
                    <li>Rp\( 42.000\)</li>
                    <li>Rp\( 50.000\)</li>
                    <li>Rp\( 55.000\)</li>

                </ol>
                <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal18" aria-expanded="false" aria-controls="collapsesoal18">
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal18">
                    <div class="card card-body overflow-auto">

                    <b class="text-end text-danger fw-bold"> <h3>JAWABAN : C</h3></b>
                    </div>
                </div>
                <hr />
<!-- SOAL end -->
<!--=======================  soal19 ===================================-->
            <li>Sebuah bilangan terdiri dari 3 angka. Jumlah ketiga angka sama dengan 16. Jumlah angka pertama dan angka kedua adalah sama dengan angka ketiga dikurangi dua. Nilai bilangan itu sama dengan 21 kali jumlah ketiga angkanya kemudian ditambah dengan 13. Bilangan yang dimaksud adalah . . .</li>
                <ol type="A">
                    <li>\(348 \)</li>
                    <li>\(349 \)</li>
                    <li>\(350 \)</li>
                    <li>\(351 \)</li>
                    <li>\(352 \)</li>

                </ol>
                <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal19" aria-expanded="false" aria-controls="collapsesoal19">
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal19">
                    <div class="card card-body overflow-auto">

                    <b class="text-end text-danger fw-bold"> <h3>JAWABAN : B</h3></b>
                    </div>
                </div>
                <hr />
<!-- SOAL end -->
<!--=======================  soal20 ===================================-->
            <li>Jumlah dua bilangan asli adalah 25 selisihnya adalah 5. Jika dua bilangan tersebut dikalikan maka akan menghasilkan...</li>
                <ol type="A">
                    <li>\(100 \)</li>
                    <li>\(125 \)</li>
                    <li>\(150 \)</li>
                    <li>\(175 \)</li>
                    <li>\(200 \)</li>

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
<!--=======================  soal21 ===================================-->
            <li><img src="{{asset('asets/soal/prediksi2/21.png')}}" alt="prediksi2-21" width="50%"></li>
            Sistem pertidaksamaan linear dari daerah yang diarsir adalah . . .
                <ol type="A">
                    <li>\(3x+5y \leq 15, 4x+7y\geq 28,x \geq 0,y \geq 0 \)</li>
                    <li>\(3x+5y \geq 15,4x+7y \leq 28,x \geq 0,y \geq 0 \)</li>
                    <li>\(5x+3y \geq 15,4x+7y \geq 28,x \geq 0,y \geq 0 \)</li>
                    <li>\(5x+3y \leq 15,4x+7y \geq 28,x \geq 0,y \geq 0 \)</li>
                    <li>\(5x+3y \leq 15,4x+7y \leq 28,x \geq 0,y \geq 0 \)</li>

                </ol>
                <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal21" aria-expanded="false" aria-controls="collapsesoal21">
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal21">
                    <div class="card card-body overflow-auto">

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

