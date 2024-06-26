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
            <h2 class="text-center">UJIAN SEKOLAH TAHUN 2019</h2>
            <h3 class="text-center text-danger fw-bold">MATEMATIKA WAJIB</h3>
            <p class="text-center fst-italic"> Math_Dosman</p>
            <hr />
            <p>Berikut merupakan soal Ujian Sekolah tahun 2019 di SMA Negeri 1 Gianyar</p>
            <p>Kelas : XII MIPA/IPS</p>
            <p>Waktu : 90 Menit</p>
            <p>MATEMATIKA WAJIB</p>
            <hr>
            <ol type="1">
<!--=======================  soal1 ===================================-->
            <li>Bentuk sederhana dari \(\displaystyle \left(\frac{\displaystyle \frac{1}{8}m^{\frac{3}{2}}n^{-\frac{4}{3}}}{\displaystyle \frac{1}{2}m^{-\frac{1}{2}}n^{\frac{2}{3}}}  \right)^{-1} \) adalah . . .</li>
                <ol type="A">
                    <li>\(\displaystyle \frac{n^2}{4m^2}\)</li>
                    <li>\(\displaystyle \frac{4n^2}{m^2}\)</li>
                    <li>\(\displaystyle \frac{m^2}{4n^2}\)</li>
                    <li>\(\displaystyle \frac{4m^2}{n^2}\)</li>
                    <li>\(\displaystyle 4m^2n^2\)</li>

                </ol>
                <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal1" aria-expanded="false" aria-controls="collapsesoal1">
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal1">
                    <div class="card card-body overflow-auto">

                    <b class="text-end text-danger fw-bold"> <h3>JAWABAN : B</h3></b>
                    </div>
                </div>
                <hr />
<!-- SOAL end -->
<!--=======================  soal2 ===================================-->
            <li>Persamaan grafik fungsi kuadrat berikut adalah . . .</li>
            <img src="{{asset('asets/US/2019_2.png')}}" alt="2019_2" class="img-fluid">
                <ol type="A">
                    <li>\(\displaystyle y = -\frac{1}{6} x^2 -2x-6 \)</li>
                    <li>\(\displaystyle y=x^2 +2x-6\)</li>
                    <li>\(\displaystyle y=6x^2 +2x+36\)</li>
                    <li>\(\displaystyle y=\frac{1}{6}x^2 +2x +6\)</li>
                    <li>\(\displaystyle y=x^2 +2x +6 \)</li>

                </ol>
                <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal2" aria-expanded="false" aria-controls="collapsesoal2">
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal2">
                    <div class="card card-body overflow-auto">

                    <b class="text-end text-danger fw-bold"> <h3>JAWABAN : D</h3></b>
                    </div>
                </div>
                <hr />
<!-- SOAL end -->
<!--=======================  soal3 ===================================-->
            <li>Diketahui fungsi \(g(x)=2x+3 \) dan \(\displaystyle f(x)=\frac{x}{x-2} \), untuk \(x \neq 2 \). Apabila \((g \circ f)^{-1}(x) \) merupakan invers dari \((g \circ f)(x)\), rumus fungsi dari \((g \circ f)^{-1}(x) \) adalah . . .  </li>
                <ol type="A">
                    <li>\(\displaystyle \frac{-x+3}{2x-2}\) untuk \(x \neq 1\)</li>
                    <li>\(\displaystyle \frac{-x+3}{2x+2}\) untuk \(x \neq 1\)</li>
                    <li>\(\displaystyle \frac{-x+3}{x-1}\) untuk \(x \neq 1\)</li>
                    <li>\(\displaystyle \frac{2x-6}{x-5}\) untuk \(x \neq 5\)</li>
                    <li>\(\displaystyle \frac{2x+6}{x-5}\) untuk \(x \neq 5\)</li>

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
            <li>Dwi membeli 6 buah paku dan 2 kaleng cat dengan harga Rp 45.000,00. Sedangkan Ambar membeli 2 buah paku dan 4 kaleng cat dengan harga Rp 65.000,00. Selisih harga sekaleng cat dan sebuah paku adalah...</li>
                <ol type="A">
                    <li> Rp 13.000,00</li>
                    <li>Rp 12.500,00 </li>
                    <li> Rp 12.000,00</li>
                    <li> Rp 11.500,00</li>
                    <li> Rp 11.000,0</li>

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
            <li>Pada sebuah supermarket, seorang karyawati menyediakan jasa pembungkusan kado. Untuk membungkus kado jenis Adibutuhkan 2 lembar kertas pembungkus dan 2
                meter pita. Sedangkan untuk membungkus kado jenis B dibutuhkan 2 lembar kertas  pembungkus dan 1 meter pita. Tersedia kertas pembungkus 50 lembar dan pita 40 meter. Upah untuk membungkus setiap kado jenis A dan membungkus kado jenis B berturut-turut adalah Rp 5.000,00 dan Rp 4.000,00. Upah maksimum yang diterima oleh karyawati tersebut adalah...</li>
                <ol type="A">
                    <li>Rp 75.000,00 </li>
                    <li>Rp 100.000,00</li>
                    <li>Rp 115.000,00 </li>
                    <li> Rp 125.000,00</li>
                    <li>Rp 160.000,00 </li>

                </ol>
                <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal5" aria-expanded="false" aria-controls="collapsesoal5">
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal5">
                    <div class="card card-body overflow-auto">

                    <b class="text-end text-danger fw-bold"> <h3>JAWABAN : C</h3></b>
                    </div>
                </div>
                <hr />
<!-- SOAL end -->
<!--=======================  soal6 ===================================-->
            <li>Akar-akar persamaan kuadrat \(5x^2 +x-3=0\) adalah \(x_1\) dan \(x_2\). Nilai dari \(\displaystyle \frac{2}{x_1}+\frac{2}{x_2} =...\)</li>
                <ol type="A">
                    <li>\(\displaystyle \frac{2}{15}\)</li>
                    <li>\(\displaystyle \frac{2}{5}\)</li>
                    <li>\(\displaystyle \frac{2}{3}\)</li>
                    <li>\(\displaystyle \frac{3}{5}\)</li>
                    <li>\(\displaystyle -\frac{5}{3}\)</li>

                </ol>
                <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal6" aria-expanded="false" aria-controls="collapsesoal6">
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal6">
                    <div class="card card-body overflow-auto">

                    <b class="text-end text-danger fw-bold"> <h3>JAWABAN : C</h3></b>
                    </div>
                </div>
                <hr />
<!-- SOAL end -->
<!--=======================  soal7 ===================================-->
            <li>Himpunan penyelesaian \(|x-7|-|x-2|=3\) adalah . . .</li>
                <ol type="A">
                    <li>\(\begin{Bmatrix}-6 \end{Bmatrix} \)</li>
                    <li>\(\begin{Bmatrix}-3\end{Bmatrix} \)</li>
                    <li>\(\begin{Bmatrix}3 \end{Bmatrix} \)</li>
                    <li>\(\begin{Bmatrix}-3,-6 \end{Bmatrix} \)</li>
                    <li>\(\begin{Bmatrix}3,-6 \end{Bmatrix} \)</li>

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
            <li>Diketahui matriks \(A= \begin{pmatrix} 2 & 2x \\ 8 &10 \end{pmatrix} \), \(B=\begin{pmatrix}y&y \\15 & 20 \end{pmatrix} \) dan \(C= \begin{pmatrix} 2&4 \\7 &9\end{pmatrix} \) memenuhi persamaan \(\displaystyle \frac{1}{2} A + \frac{1}{5} B = C \). Nilai dari \(x+y=...\)</li>
                <ol type="A">
                    <li>\(2 \)</li>
                    <li>\( 3\)</li>
                    <li>\(4 \)</li>
                    <li>\(6 \)</li>
                    <li>\( 8\)</li>

                </ol>
                <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal8" aria-expanded="false" aria-controls="collapsesoal8">
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal8">
                    <div class="card card-body overflow-auto">

                    <b class="text-end text-danger fw-bold"> <h3>JAWABAN : E</h3></b>
                    </div>
                </div>
                <hr />
<!-- SOAL end -->
<!--=======================  soal9 ===================================-->
            <li>Pinjaman sebesar Rp 2.500.000,00 dibungakan dengan bunga tunggal 0,5% perbulan selama 2 tahun 3 bulan. Modal akhir dari pinjaman tersebut adalah...</li>
                <ol type="A">
                    <li>Rp 2.837.500,00 </li>
                    <li>Rp 2.387.500,00</li>
                    <li>Rp 2.783.500,00</li>
                    <li>Rp 2.873.500,00</li>
                    <li>Rp 2.738.500,00</li>

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
            <li>Rani, Sinta, Tati, dan Uci berbelanja di sebuah toko buah. Rani membeli 2 kg salak, 1 kg jeruk, dan 2 kg apel dengan harga Rp140.000,00. Sinta membeli 2 kg salak, 2 kg jeruk, dan 1 kg apel seharga Rp115.000,00, sedangkan Tati membayar Rp165.000,00 karena membeli 1 kg salak, 3 kg jeruk, dan 2 kg apel. Jika Uci ingin membeli 2 kg jerukdan 3 kg apel, jumlah yang harus dibayar Uci adalah ....
                </li>
                <ol type="A">
                    <li>Rp200.000,00</li>
                    <li>Rp175.000,00</li>
                    <li>Rp165.000,00</li>
                    <li>Rp150.000,00</li>
                    <li>Rp135.000,00</li>

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
            <li>\(\displaystyle \lim_{x \to 1} (x-3)(3-x) = ....\)</li>
                <ol type="A">
                    <li>\(-4 \)</li>
                    <li>\(-5 \)</li>
                    <li>\(-7 \)</li>
                    <li>\(-8 \)</li>
                    <li>\(-9 \)</li>

                </ol>
                <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal11" aria-expanded="false" aria-controls="collapsesoal11">
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal11">
                    <div class="card card-body overflow-auto">

                    <b class="text-end text-danger fw-bold"> <h3>JAWABAN : A</h3></b>
                    </div>
                </div>
                <hr />
<!-- SOAL end -->
<!--=======================  soal12 ===================================-->
            <li>\(\displaystyle \lim_{x \to 5} \frac{x^2 +x -30}{x^2-25}=... \)</li>
                <ol type="A">
                    <li>\(1,4 \)</li>
                    <li>\(1,3 \)</li>
                    <li>\(1,2 \)</li>
                    <li>\(1,1 \)</li>
                    <li>\(1 \)</li>

                </ol>
                <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal12" aria-expanded="false" aria-controls="collapsesoal12">
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal12">
                    <div class="card card-body overflow-auto">

                    <b class="text-end text-danger fw-bold"> <h3>JAWABAN : </h3></b>
                    </div>
                </div>
                <hr />
<!-- SOAL end -->
<!--=======================  soal13 ===================================-->
            <li>Hasil dari \(\int (3x-5)(2x+3) dx = ...\)</li>
                <ol type="A">
                    <li>\(\displaystyle 2x^3 + \frac{1}{2}x^2 +15x +C \)</li>
                    <li>\(\displaystyle 2x^3 - \frac{1}{2}x^2 -15x +C\)</li>
                    <li>\(\displaystyle 2x^3 + \frac{1}{2}x^2 -15x +C\)</li>
                    <li>\(\displaystyle 2x^3 + \frac{19}{2}x^2 -15x +C\)</li>
                    <li>\(\displaystyle 2x^3 - \frac{19}{2}x^2 -15x +C\)</li>

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
            <li>Percepatan gerak suatu benda ditentukan dengan rumus \(a(t)=24t^2 - 6t -2 \). Jika pada saat \(1\) detik benda tersebut memiliki kecepatan \(6\) meter/detik dan jarak \(5\) meter, maka jarak benda setelah \(2\) detik adalah...</li>
                <ol type="A">
                    <li>\(26 \)</li>
                    <li>\(27 \)</li>
                    <li>\(28 \)</li>
                    <li>\(29 \)</li>
                    <li>\(30 \)</li>

                </ol>
                <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal14" aria-expanded="false" aria-controls="collapsesoal14">
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal14">
                    <div class="card card-body overflow-auto">

                    <b class="text-end text-danger fw-bold"> <h3>JAWABAN : C</h3></b>
                    </div>
                </div>
                <hr />
<!-- SOAL end -->
<!--=======================  soal15 ===================================-->
            <li>Grafik fungsi \(f(x)=x^3 +x^2 -5x +7 \) turun pada interval . . .</li>
                <ol type="A">
                    <li>\(\displaystyle -\frac{5}{3} < x < 1 \)</li>
                    <li>\(\displaystyle -1 < x < \frac{3}{5} \)</li>
                    <li>\(\displaystyle x < -\frac{3}{5} \text{ atau } x > 1\)</li>
                    <li>\(\displaystyle x < -1 \text{ atau } x > \frac{5}{3}\)</li>
                    <li>\(\displaystyle x < -1 \text{ atau } x > -\frac{3}{5} \)</li>

                </ol>
                <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal15" aria-expanded="false" aria-controls="collapsesoal15">
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal15">
                    <div class="card card-body overflow-auto">

                    <b class="text-end text-danger fw-bold"> <h3>JAWABAN : A</h3></b>
                    </div>
                </div>
                <hr />
<!-- SOAL end -->
<!--=======================  soal16 ===================================-->
            <li>PT Cipta Kreasi merupakan perusahaan yang bergerak di bidang produksi souvenir berbahan timah. Bagian pengawasan mutu produk PT Cipta Kreasi mencatat persentase produk tidak cacat yang diproduksi perjamnya mengikuti fungsi \(f(x) = 82 + 8x -x^2\), dengan \(x\) menyatakan banyaknya produk (dalam lusin). Pernyataan berikut yang benar adalah...
            </li>
                <ol type="A">
                    <li>Jumlah souvenir yang harus diproduksi agar persentase produk tidak cacat perjamnya mencapai maksimum adalah 16 lusin.</li>
                    <li>Jumlah souvenir yang harus diproduksi agar persentase produk tidak cacat perjamnya mencapai maksimum adalah 8 lusin.
                    </li>
                    <li>Perusahaan dapat menekan persentase produk tidak cacat yang diproduksi perjamnya menjadi 100%.
                    </li>
                    <li>Persentase produk tidak cacat maksimum perjamnya adalah 98%.
                    </li>
                    <li>Persentase produk tidak cacat maksimum perjamnya adalah 100%.
                    </li>

                </ol>
                <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal16" aria-expanded="false" aria-controls="collapsesoal16">
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal16">
                    <div class="card card-body overflow-auto">

                    <b class="text-end text-danger fw-bold"> <h3>JAWABAN : D</h3></b>
                    </div>
                </div>
                <hr />
<!-- SOAL end -->
<!--=======================  soal17 ===================================-->
            <li>Persamaan garis singgung kurva \(\displaystyle f(x)=\frac{(2x-3)^2}{\sqrt{4x+9}} \) dititik \(A(0,3)\) adalah . . . </li>
                <ol type="A">
                    <li>\(y=-42x+3 \)</li>
                    <li>\(y=42x-3 \)</li>
                    <li>\(y=-42x-3 \)</li>
                    <li>\(y=42x+3 \)</li>
                    <li>\(y=3x-42 \)</li>

                </ol>
                <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal17" aria-expanded="false" aria-controls="collapsesoal17">
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal17">
                    <div class="card card-body overflow-auto">

                    <b class="text-end text-danger fw-bold"> <h3>JAWABAN : A</h3></b>
                    </div>
                </div>
                <hr />
<!-- SOAL end -->
<!--=======================  soal18 ===================================-->
            <li>Diketahui balok \(PQRS.TUVW\). Garis yang bersilangan adalah...</li>
                <ol type="A">
                    <li>\(PQ \) dan \( RS\)</li>
                    <li>\(UV \) dan \( PS\)</li>
                    <li>\(SW \) dan \( QR\)</li>
                    <li>\( PT\) dan \( TW\)</li>
                    <li>\(SR \) dan \( PR\)</li>

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
            <li>Diketahui kubus ABCD.EFGH dengan panjang rusuk 10 cm. Jarak titik F ke garis AC adalah... </li>
            <div class="row">
                <div class="col">
                    <ol type="A">
                        <li>\( 10\sqrt{3} \)</li>
                        <li>\( 10\sqrt{2} \)</li>
                        <li>\( 5\sqrt{6} \)</li>
                        <li>\( 5\sqrt{5} \)</li>
                        <li>\( 5\sqrt{2} \)</li>
                    </ol>
                </div>
                <div class="col">
                    <img src="{{asset('asets/US/kubus2019_19.png')}}" alt="soal19" class="img-fluid">
                </div>
            </div>
                <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal19" aria-expanded="false" aria-controls="collapsesoal19">
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal19">
                    <div class="card card-body overflow-auto">

                    <b class="text-end text-danger fw-bold"> <h3>JAWABAN : C</h3></b>
                    </div>
                </div>
                <hr />
<!-- SOAL end -->
<!--=======================  soal20 ===================================-->
            <li>Pada segitiga \(ABC\), diketahui panjang \(AC = 12\) cm, \(AB = 6\sqrt{2}\) dan \(∠𝐵𝐶𝐴 = 30^o\). Besar \(∠𝐴𝐵𝐶 = ...\)</li>
                <ol type="A">
                    <li>\(10^o \)</li>
                    <li>\(30^o \)</li>
                    <li>\(45^o \)</li>
                    <li>\(60^o \)</li>
                    <li>\(90^o \)</li>

                </ol>
                <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal20" aria-expanded="false" aria-controls="collapsesoal20">
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal20">
                    <div class="card card-body overflow-auto">

                    <b class="text-end text-danger fw-bold"> <h3>JAWABAN : B</h3></b>
                    </div>
                </div>
                <hr />
<!-- SOAL end -->
<!--=======================  soal21 ===================================-->
            <li>Persamaan fungsi trigonometri berikut adalah . . .</li>
            <img src="{{asset('asets/US/2019_21.png')}}" alt="soal2019_21" class="img-fluid">
                <ol type="A">
                    <li>\(y=2 \cos (2x + \pi) \)</li>
                    <li>\(y=2 \cos (x+\pi) \)</li>
                    <li>\(y=2 \cos(2x-\pi) \)</li>
                    <li>\( y=2 \sin (x-\pi)\)</li>
                    <li>\( y=2 \sin (2x-\pi) \)</li>

                </ol>
                <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal21" aria-expanded="false" aria-controls="collapsesoal21">
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal21">
                    <div class="card card-body overflow-auto">

                    <b class="text-end text-danger fw-bold"> <h3>JAWABAN : A</h3></b>
                    </div>
                </div>
                <hr />
<!-- SOAL end -->
<!--=======================  soal22 ===================================-->
            <li>Suatu tangga disandarkan pada dinding rumah. Panjang tangga adalah 2,4 m dan jarak antara dinding dengan dasar tangga adalah 120 cm. Besar sudut yang dibentuk oleh tangga dengan tanah adalah ....  </li>
                <ol type="A">
                    <li>\(15^o \)</li>
                    <li>\(30^o \)</li>
                    <li>\(45^o \)</li>
                    <li>\(60^o \)</li>
                    <li>\(90^o \)</li>

                </ol>
                <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal22" aria-expanded="false" aria-controls="collapsesoal22">
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal22">
                    <div class="card card-body overflow-auto">

                    <b class="text-end text-danger fw-bold"> <h3>JAWABAN : D</h3></b>
                    </div>
                </div>
                <hr />
<!-- SOAL end -->
<!--=======================  soal23 ===================================-->
            <li>Bayangan garis \(2x- 3y + 10 = 0\) jika ditranslasi oleh \(\begin{pmatrix} 2\\ -3 \end{pmatrix} \) dilanjutkan rotasi pusat \(O\) sejauh \(90^o\) berlawanan dengan putaran arah jarum jam adalah... \</li>
                <ol type="A">
                    <li>\( 3x + 2y -3 = 0\)</li>
                    <li>\(3x - 2y - 13 = 0\)</li>
                    <li>\(3x + 2y - 13 = 0 \)</li>
                    <li>\(3 x - 2y + 3 =0\)</li>
                    <li>\(3 x - 2y + 13 = 0\)</li>

                </ol>
                <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal23" aria-expanded="false" aria-controls="collapsesoal23">
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal23">
                    <div class="card card-body overflow-auto">

                    <b class="text-end text-danger fw-bold"> <h3>JAWABAN : A</h3></b>
                    </div>
                </div>
                <hr />
<!-- SOAL end -->
<!--=======================  soal24 ===================================-->
            <li>Persamaan lingkaran yang melalui ujung-ujung diameter \(AB\) dengan \(A(2, -5)\) dan \(B(6,9)\) adalah...</li>
                <ol type="A">
                    <li>\(x^2 + y^2 -8x-4y-33=0 \)</li>
                    <li>\(x^2 + y^2 -4x-8y-33=0 \)</li>
                    <li>\(x^2 + y^2 +8x-4y-33=0 \)</li>
                    <li>\(x^2 + y^2 -8x+4y-33=0 \)</li>
                    <li>\(x^2 + y^2 +4x+8y-33=0 \)</li>

                </ol>
                <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal24" aria-expanded="false" aria-controls="collapsesoal24">
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal24">
                    <div class="card card-body overflow-auto">

                    <b class="text-end text-danger fw-bold"> <h3>JAWABAN : A</h3></b>
                    </div>
                </div>
                <hr />
<!-- SOAL end -->
<!--=======================  soal25 ===================================-->
            <li>Sebuah sekolah memiliki 1260 siswa. Di sekolah tersebut mengharuskan siswanya untuk ikut serta dalam kegiatan ekstrakurikuler. Jika siswa yang mengikuti ekstrakurikuler dibentuk dalam diagram lingkaran dalam bentuk derajat \((^o)\) sebagai berikut:</li>
            <img src="{{asset('asets/US/2019_25.png')}}" alt="diagramlingkaran" class="img-fluid">
            <p>Jumlah siswa yang mengikuti ekstrakurikuler musik adalah . . .</p>
                <ol type="A">
                    <li>\( 135\)</li>
                    <li>\( 155\)</li>
                    <li>\( 165\)</li>
                    <li>\( 175\)</li>
                    <li>\( 195\)</li>

                </ol>
                <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal25" aria-expanded="false" aria-controls="collapsesoal25">
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal25">
                    <div class="card card-body overflow-auto">

                    <b class="text-end text-danger fw-bold"> <h3>JAWABAN : D</h3></b>
                    </div>
                </div>
                <hr />
<!-- SOAL end -->
<!--=======================  soal26 ===================================-->
            <li>Diberikan tabel data panjang potongan logam sebagai berikut:</li>
            <div class="row">
                <div class="col-sm-6">
                    <table class="table table-bordered text-center">
                        <thead>
                          <tr>
                            <th>Panjang (cm)</th>
                            <th>Frekuensi</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>14-18</td>
                            <td>3</td>
                          </tr>
                          <tr>
                            <td>19-23</td>
                            <td>5</td>
                          </tr>
                          <tr>
                            <td>24-28</td>
                            <td>5</td>
                          </tr>
                          <tr>
                            <td>29-33</td>
                            <td>4</td>
                          </tr>
                          <tr>
                            <td>34-38</td>
                            <td>2</td>
                          </tr>
                          <tr>
                            <td>39-43</td>
                            <td>6</td>
                          </tr>
                        </tbody>
                      </table>
                </div>
            </div>
            <p>Mean dari tabel distribusi tersebut adalah . . .</p>
                <ol type="A">
                    <li>\( 25\)</li>
                    <li>\( 29\)</li>
                    <li>\( 32\)</li>
                    <li>\( 32,7\)</li>
                    <li>\( 33,8\)</li>

                </ol>
                <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal26" aria-expanded="false" aria-controls="collapsesoal26">
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal26">
                    <div class="card card-body overflow-auto">

                    <b class="text-end text-danger fw-bold"> <h3>JAWABAN : B</h3></b>
                    </div>
                </div>
                <hr />
<!-- SOAL end -->
<!--=======================  soal27 ===================================-->
            <li>Seorang kolektor seni akan memberi kode pada masing-masing barang koleksinya. Ia akan menyusun kode yang terdiri dari huruf \(K\) dan empat angka dari angka-angka \(1, 2, 3, 4, 5, 6,\) dan \(7\) dengan tidak ada angka berulang. Banyak kode yang dapat dibuat kolektor itu adalah ...
            </li>
                <ol type="A">
                    <li>\(240 \) kode</li>
                    <li>\(360 \) kode</li>
                    <li>\(420 \) kode</li>
                    <li>\(720 \) kode</li>
                    <li>\(840 \) kode</li>

                </ol>
                <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal27" aria-expanded="false" aria-controls="collapsesoal27">
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal27">
                    <div class="card card-body overflow-auto">

                    <b class="text-end text-danger fw-bold"> <h3>JAWABAN : E</h3></b>
                    </div>
                </div>
                <hr />
<!-- SOAL end -->
<!--=======================  soal28 ===================================-->
            <li>Diketahui data \(3, 6, 7, 5, 4, 9, 4, 7 ,9, 5, 7, 6\). Varians dari data tersebut adalah... </li>
                <ol type="A">
                    <li>\(\displaystyle \frac{40}{12} \)</li>
                    <li>\(\displaystyle \frac{72}{12} \)</li>
                    <li>\(\displaystyle \frac{18}{12} \)</li>
                    <li>\(\displaystyle \frac{26}{12} \)</li>
                    <li>\(\displaystyle \frac{56}{12} \)</li>

                </ol>
                <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal28" aria-expanded="false" aria-controls="collapsesoal28">
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal28">
                    <div class="card card-body overflow-auto">

                    <b class="text-end text-danger fw-bold"> <h3>JAWABAN : A</h3></b>
                    </div>
                </div>
                <hr />
<!-- SOAL end -->
<!--=======================  soal29 ===================================-->
            <li>Tim cerdas-cermat beranggotakan \(3\) orang akan dipilih secara acak dari \(7\) siswa kelas \(X\) dan \(4\) siswa kelas \(XI\). Peluang terbentuknya tim yang ketiga anggotanya dari kelas \(X\) adalah...</li>
                <ol type="A">
                    <li>\(\displaystyle \frac{21}{33} \)</li>
                    <li>\(\displaystyle \frac{18}{33} \)</li>
                    <li>\(\displaystyle \frac{15}{33} \)</li>
                    <li>\(\displaystyle \frac{10}{33} \)</li>
                    <li>\(\displaystyle \frac{7}{33} \)</li>
                </ol>
                <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal29" aria-expanded="false" aria-controls="collapsesoal29">
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal29">
                    <div class="card card-body overflow-auto">

                    <b class="text-end text-danger fw-bold"> <h3>JAWABAN : E</h3></b>
                    </div>
                </div>
                <hr />
<!-- SOAL end -->
<!--=======================  soal30 ===================================-->
            <li>Perhatikan data tinggi badan dalam histogram berikut.</li>
            <img src="{{asset('asets/US/2019_30.png')}}" alt="soal30" class="img-fluid">
            <p>Kuartil bawah data tersebut adalah . . .</p>
                <ol type="A">
                    <li>\(\displaystyle 144,5 +frac{30}{7}\)</li>
                    <li>\(\displaystyle 149,5 +frac{30}{7}\)</li>
                    <li>\(\displaystyle 150 +frac{30}{7}\)</li>
                    <li>\(\displaystyle 154 +frac{30}{7}\)</li>
                    <li>\(\displaystyle 154,5 +frac{30}{7}\)</li>

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
</ol>
<section>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col text-center">
                <p>Naskah Soal Ujian Sekolah tahun 2019 dapat didownload pada link berikut</p>
                <a href="https://drive.google.com/file/d/10l9r7bxgusPS0qwwDat9mEvikFtXTGrP/view?usp=sharing" target="_blank"><h3>DOWNLOAD FILE</h3></a>
                <br>
                <h1 class="text-danger">TERIMA KASIH</h1>
                <p>www.mathdosman.site</p>
            </div>
        </div>
    </div>
    </section>

    <div id="disqus_thread"></div>
        </div>

        </div>
</section>

@endsection

