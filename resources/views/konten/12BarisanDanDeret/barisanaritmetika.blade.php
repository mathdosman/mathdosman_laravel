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
            Barisan Aritmetika
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
                <h2 class="text-center">Barisan<br> ARITMETIKA</h2>
            <p>Perhatikan barisan-barisan berikut</p>
            <ol type="a">
                <li>\(2,4,6,8,10,... \)</li>
                <li>\(10,5,0,-5,-10,-15,...\)</li>
                <li>\(3,9,15,21,27,...\)</li>
            </ol>
            <p>Barisan di atas merupakan contoh barisan aritmetika</p>
            <p>Secara umum dapat dikatakan bahwa:</p>
            <div class="border border-dark p-2 overflow-auto" style="background-color: #e4c7f4;">
                \(U_1, U_2, U_3, U_4, ... U_n \) disebut barisan aritmetika jika
                \[U_2 - U_1 = U_3 - U_2 = ... =U_n - U_{n-1} = \text{konstanta}\]
                Konstanta dalam hal ini disebut dengan <i>beda</i> \((b)\)
            </div>
            <div class="shadow-lg p-2 mb-5 mt-3 rounded mx-auto " style="width: fit-content; font-size: 1.5rem;">\[b=U_n - U_{n-1}\]</div>
            <p>Beda untuk barisan pada contoh di atas :
                <ol type="a">
                    <li>\(4-2=6-4=8-6=...=2\) <br> Jadi, bedanya adalah \(2\) </li>
                    <li>\(10-5=0-5=-5-0=...=-5\) <br> Jadi, bedanya adalah \(-5\)</li>
                    <li>\(9-3=15-9=21-15=...=6\) <br> Jadi, bedanya adalah \(6\)</li>
                </ol>
            </p>
            <div class="p-2 rounded mx-auto" style="width: fit-content; background-color: #e4c7f4;"><b>Barisan aritmetika</b> adalah suatu barisan bilangan bilangan dimana beda (selisih) diantara dua suku berurutan merupakan bilangan tetap.</div>
            <p>Rumus umum suku ke-n barisan aritmetika dengan suku pertama \(a\) dan beda \(b\) dapat diturunkan seperti berikut</p>
            \[\begin{align}
            U_1 &= a \\
            U_2 &= a+b \\
            U_3 &= a+2b \\
            U_4 &= a+3b \\
            U_5 &= a+4b \\
            \vdots\:\: &= \:\:\vdots \\
            U_n &= a+(n-1)b \\
            \end{align}\]
            <p>Sehingga, rumus suku ke-n barisan aritmetika adalah</p>
            <div class="shadow-lg p-2 mb-5 mt-3 rounded mx-auto " style="width: fit-content; font-size: 1.5rem;">\[U_n = a + (n-1)b\]</div>
            <p>dengan \(a\) adalah suku pertama dan \(b\) adalah beda.</p>
            <br>
            <p><b>Sisipan</b></p>
            <p class="overflow-auto">Misalkan \(U_1, U_2, U_3, ... , U_{n-1}, U_n \) disebut barisana aritmetika dengan suku pertama \(a\), beda \(b\), dan banyak suku \(n\). Jika di antara dua suku disisipkan k bilangan (suku baru)  sehingga terbentuk barisan aritmetika yang baru, maka <br>
            Barisan semula : \(a, a+b, a+2b, ... \) <br>
            Barisan baru : \(a, \underset{k \text{ suku baru}}{\underbrace{(a+b'), (a+2b'), ... , (a+kb')}}, a+(k+1)b',...\) <br>
            Diantara barisan semula dan barisan baru, diperoleh hubungan: <br>
            (i) Beda baru \((b')\) <br>
            <div class="shadow-lg p-2 mb-5 mt-3 rounded mx-auto " style="width: fit-content; font-size: 1.5rem;">\[b' = \frac{b}{k+1}\]</div>
            </p>
            <!-- ============================================================================== -->
            <div class="badge bg-danger text-wrap fs-6" style="width: 8rem"><b> CONTOH 01 </b></div>
            <div class="rounded-2 p-1" style="background-color: rgba(193, 193, 193, 0.933);">Tentukan beda barisan aritmetika \(1,5,9,13,17,... \)</div>
            <p class="rounded-2 p-1" style="background-color: #f89845;"><b>Penyelesaian :</b> <br>
                \(\displaystyle 1\overset{+4}{\rightarrow} 5 \overset{+4}{\rightarrow} 9 \overset{+4}{\rightarrow} 13\overset{+4}{\rightarrow}...\) <br>
            Perhatikan bahwa suku berikutnya diperoleh dengan menambahkan \(4 \) kepada suku sebelumnya. Jadi, \(4\) adalah beda barisan itu.
            </p>
            <!-- ============================================================================== -->
            <!-- ============================================================================== -->
            <div class="badge bg-danger text-wrap fs-6" style="width: 8rem"><b> CONTOH 02 </b></div>
            <div class="rounded-2 p-1" style="background-color: rgba(193, 193, 193, 0.933);">Tentukan suku ke-9 dan suku ke-n dari barisan aritmetika \(4,1,-2,-5,-8,... \)</div>
            <p class="rounded-2 p-1" style="background-color: #f89845;"><b>Penyelesaian :</b> <br>
                Diketahui: <br> \(U_1=a=4\) <br>
                \(b=1-4=-3\) <br>
            <br>
            Suku ke-9 <br>
                \(\begin{align}
                U_n &= a + (n-1)b \\
                U_9 &= 4 + (9-1)(-3) \\
                &= 4 + (8)(-3) \\
                &= 4 + (-24) \\
                &= \boxed{-20}
                \end{align}\) <br>
                <br>
                Suku ke-n <br>
                \(\begin{align}
                Un &= a + (n-1)b \\
                &= 4 + (n-1)(-3) \\
                &= 4 + (-3n+3) \\
                &= 4 + 3 -3n \\
                &= 7- 3n \\
                \end{align}\) <br>
            Jadi, rumus suku ke-n \(\boxed{U_n=7-3n} \)
            </p>
            <!-- ============================================================================== -->
            <!-- ============================================================================== -->
            <div class="badge bg-danger text-wrap fs-6" style="width: 8rem"><b> CONTOH 03 </b></div>
            <div class="rounded-2 p-1" style="background-color: rgba(193, 193, 193, 0.933);">Dalam sebuah barisan aritmetika, suku ke-8 adalah 37 dan suku ke-11 adalah 52. Suku ke-101 adalah...</div>
            <p class="rounded-2 p-1" style="background-color: #f89845;"><b>Penyelesaian :</b> <br>
                Tentukan nilai \(b\) terlebih dahulu
                \begin{align}
                b &= \frac{U_{11}-U_8}{11-8} \\
                &= \frac{52-37}{3} \\
                &= 5 \\\\
                Un &= a + (n-1)b\\
                U_8 &= a + 7b \\
                37 &= a + 7(5) \\
                37 &= a + 35 \\
                a &= 37-35 \\
                a &= 2 \\\\
                U_{101} &= 2 + 100(5) \\
                &= 502
                \end{align}
            </p>
            <!-- ============================================================================== -->
            <!-- ============================================================================== -->
            <div class="badge bg-danger text-wrap fs-6" style="width: 8rem"><b> CONTOH 04 </b></div>
            <div class="rounded-2 p-1" style="background-color: rgba(193, 193, 193, 0.933);">Sisipkan sebelas bilangan diantara 23 dan 119 sehingga terjadi sebuah barisan aritmetika. Tentukan barisan tersebut.</div>
            <p class="rounded-2 p-1" style="background-color: #f89845;"><b>Penyelesaian :</b> <br>
                \(23,119\) <br>
                Dalam hal ini : \(n=2, b = 96\) dan \(k=11\), maka:
                \begin{align}
                b' &= \frac{b}{k+1} \\
                &= \frac{96}{11+1} \\
                &= \frac{96}{12} \\
                &= 8
                \end{align}
                Banyak suku baru:
                \begin{align}
                n' &= n+(n-1)k \\
                &= 2 + (2-1) \cdot 11 \\
                &= 13
                \end{align}
                Jadi, barisan aritmetika yang dimaksud adalah \(23,	31,	39,	47,	55, 63,\)\(71, 79,	87,	95,	103, 111, 119\)
            </p>
            <!-- ============================================================================== -->
            <!-- ============================================================================== -->
            <div class="badge bg-danger text-wrap fs-6" style="width: 8rem"><b> CONTOH 05 </b></div>
            <div class="rounded-2 p-1" style="background-color: rgba(193, 193, 193, 0.933);">Diketahui \(x-1, 2x \) dan \(4x-3 \) merupakan tiga suku berurutan dari suatu barisan aritmetika. Tentukan nilai \(x\) dan barisan tersebut.</div>
            <p class="rounded-2 p-1" style="background-color: #f89845;"><b>Penyelesaian :</b> <br>
                \begin{align}
                b = U_2 - U_1 &= U_3 - U_2 \\
                2x-(x-1) &= (4x-3)-2x \\
                2x-x+1 &= 4x-3-2x \\
                x+1 &= 2x-3 \\
                x &= 4
                \end{align}
                Jadi, nilai \(x=4\) dan barisannya \(3, 8, 13\)
            </p>
            <!-- ============================================================================== -->
            </div>







        <form name="input-form">
             <ol type="1" class="mt-2">
                @include('konten.00semuamateri.identitas')
<!--=======================  soal1 ===================================-->
<li>Suku ke-15 dari barisan aritmetika \(70,61,52,... \) adalah...</li>
<input type="radio" name="soal1" value="A"/>
A. \(-74 \)
<br />
<input type="radio" name="soal1" value="B"/>
B. \(-65 \)
<br />
<input type="radio" name="soal1" value="C"/>
C. \(-56 \)
<br>
<input type="radio" name="soal1" value="D"/>
D. \(-47 \)
<br />
<input type="radio" name="soal1" value="E"/>
E. \(-38 \)
<br>
<button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal1" aria-expanded="false" aria-controls="collapsesoal1" disabled>
Alternatif Penyelesaian:
</button>
<div class="collapse" id="collapsesoal1">
<div class="card card-body overflow-auto">
<p></p>
<b class="text-end text-danger fw-bold"> <h3>JAWABAN : C</h3></b>
</div>
</div>
<hr />

<!--=======================  soal2 ===================================-->
<li>Diketahui barisan aritmetika \(\displaystyle \frac{1}{2}, \frac{5}{6}, \frac{7}{6}, ..., \frac{21}{2} \), nilai \(n\) yang memenuhi adalah . . .</li>
<input type="radio" name="soal2" value="A"/>
A. \(28 \)
<br />
<input type="radio" name="soal2" value="B"/>
B. \(29 \)
<br />
<input type="radio" name="soal2" value="C"/>
C. \(30 \)
<br>
<input type="radio" name="soal2" value="D"/>
D. \(31 \)
<br />
<input type="radio" name="soal2" value="E"/>
E. \(32 \)
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
<li>Jika pada suatu barisan aritmetika memiliki \(U_5\) dan \(U_{25}\) berturut-turut \(4\) dan \(14\), nilai \(U_{21} = ...\) </li>
<input type="radio" name="soal3" value="A"/>
A. \(12 \)
<br />
<input type="radio" name="soal3" value="B"/>
B. \(14 \)
<br />
<input type="radio" name="soal3" value="C"/>
C. \(16 \)
<br>
<input type="radio" name="soal3" value="D"/>
D. \(18 \)
<br />
<input type="radio" name="soal3" value="E"/>
E. \(20 \)
<br>
<button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal3" aria-expanded="false" aria-controls="collapsesoal3" disabled>
Alternatif Penyelesaian:
</button>
<div class="collapse" id="collapsesoal3">
<div class="card card-body overflow-auto">
<p></p>
<b class="text-end text-danger fw-bold"> <h3>JAWABAN : A</h3></b>
</div>
</div>
<hr />

<!--=======================  soal4 ===================================-->
<li>Diketahui suatu barisan aritmetika mempunyai suku ke-7 dan suku ke-13 berturut-turut 31 dan 55. Suku ke-33 barisan tersebut adalah . . .</li>
<input type="radio" name="soal4" value="A"/>
A. \(121 \)
<br />
<input type="radio" name="soal4" value="B"/>
B. \(125 \)
<br />
<input type="radio" name="soal4" value="C"/>
C. \(135 \)
<br>
<input type="radio" name="soal4" value="D"/>
D. \(141 \)
<br />
<input type="radio" name="soal4" value="E"/>
E. \(155 \)
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
<li>Diketahui \(2x, 4x+1, \) dan \(14\) merupakan tiga suku pertama suatu barisan aritmetika. Suku kesepuluh barisan tersebut adalah...</li>
<input type="radio" name="soal5" value="A"/>
A. \(45 \)
<br />
<input type="radio" name="soal5" value="B"/>
B. \(47 \)
<br />
<input type="radio" name="soal5" value="C"/>
C. \(49 \)
<br>
<input type="radio" name="soal5" value="D"/>
D. \(51 \)
<br />
<input type="radio" name="soal5" value="E"/>
E. \(53 \)
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
<li>Jika bilangan \(\displaystyle 4, x, y, 14\frac{1}{2}, r \) membentuk barisan aritmetika, nilai \(r=...\)</li>
<input type="radio" name="soal6" value="A"/>
A. \(16 \frac{1}{2} \)
<br />
<input type="radio" name="soal6" value="B"/>
B. \(17 \)
<br />
<input type="radio" name="soal6" value="C"/>
C. \(17 \frac{1}{2} \)
<br>
<input type="radio" name="soal6" value="D"/>
D. \(18 \)
<br />
<input type="radio" name="soal6" value="E"/>
E. \(18 \frac{1}{2} \)
<br>
<button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal6" aria-expanded="false" aria-controls="collapsesoal6" disabled>
Alternatif Penyelesaian:
</button>
<div class="collapse" id="collapsesoal6">
<div class="card card-body overflow-auto">
<p></p>
<b class="text-end text-danger fw-bold"> <h3>JAWABAN : D</h3></b>
</div>
</div>
<hr />

<!--=======================  soal7 ===================================-->
<li>Diketahui suku tengah dari suatu barisan aritmetika adalah 37. Suku terakhir dan suku ketiga dari barisan tersebut berturut-turut adalah 62 dan 22. Banyak suku barisan tersebut adalah . . .</li>
<input type="radio" name="soal7" value="A"/>
A. \(9 \)
<br />
<input type="radio" name="soal7" value="B"/>
B. \(10 \)
<br />
<input type="radio" name="soal7" value="C"/>
C. \(11 \)
<br>
<input type="radio" name="soal7" value="D"/>
D. \(12 \)
<br />
<input type="radio" name="soal7" value="E"/>
E. \( 13\)
<br>
<button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal7" aria-expanded="false" aria-controls="collapsesoal7" disabled>
Alternatif Penyelesaian:
</button>
<div class="collapse" id="collapsesoal7">
<div class="card card-body overflow-auto">
<p></p>
<b class="text-end text-danger fw-bold"> <h3>JAWABAN : C</h3></b>
</div>
</div>
<hr />

<!--=======================  soal8 ===================================-->
<li>Diberikan barisan bilangan \(550, 505, 460, 415, ...\). Bilangan pertama pada suku yang bernilai negatif adalah . . .</li>
<input type="radio" name="soal8" value="A"/>
A. \(-10 \)
<br />
<input type="radio" name="soal8" value="B"/>
B. \(-15 \)
<br />
<input type="radio" name="soal8" value="C"/>
C. \(-25 \)
<br>
<input type="radio" name="soal8" value="D"/>
D. \(-30 \)
<br />
<input type="radio" name="soal8" value="E"/>
E. \(-35 \)
<br>
<button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal8" aria-expanded="false" aria-controls="collapsesoal8" disabled>
Alternatif Penyelesaian:
</button>
<div class="collapse" id="collapsesoal8">
<div class="card card-body overflow-auto">
<p></p>
<b class="text-end text-danger fw-bold"> <h3>JAWABAN : E</h3></b>
</div>
</div>
<hr />

<!--=======================  soal9 ===================================-->
<li>Diberikan barisan bilangan turun \(-2, -8, -14, -20 \). Rumus suku ke-n barisan tersebut adalah . . .</li>
<input type="radio" name="soal9" value="A"/>
A. \(4+6(n-5) \)
<br />
<input type="radio" name="soal9" value="B"/>
B. \(4-6(n+5) \)
<br />
<input type="radio" name="soal9" value="C"/>
C. \(2-3(2n-1) \)
<br>
<input type="radio" name="soal9" value="D"/>
D. \(1-3(2n+1) \)
<br />
<input type="radio" name="soal9" value="E"/>
E. \(1-3(2n-1) \)
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
<li>Ukuran sisi sebuah segitiga siku-siku membentuk suatu barisan aritmetika. Jika luas segitiga tersebut sama dengan 486 satuan luas, keliling segitiga tersebut adalah . . .satuan luas</li>
<input type="radio" name="soal10" value="A"/>
A. \(96 \)
<br />
<input type="radio" name="soal10" value="B"/>
B. \(108 \)
<br />
<input type="radio" name="soal10" value="C"/>
C. \(144 \)
<br>
<input type="radio" name="soal10" value="D"/>
D. \(162 \)
<br />
<input type="radio" name="soal10" value="E"/>
E. \(216 \)
<br>
<button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal10" aria-expanded="false" aria-controls="collapsesoal10" disabled>
Alternatif Penyelesaian:
</button>
<div class="collapse" id="collapsesoal10">
<div class="card card-body overflow-auto">
<p></p>
<b class="text-end text-danger fw-bold"> <h3>JAWABAN : B</h3></b>
</div>
</div>
<hr />

            </ol>

{{-- COPY DARI SINI SETIAP SOAL --}}
<input type="hidden" id="materi" name="materi" value="Bar_Arit01">
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
    <a href="/create_barisan_aritmetika" id="kirimsaja" class="btn btn-warning btn-bukti d-none" >SIMPAN JAWABAN</a>
</div>
</form>
{{-- COPY SAMPAI SINI --}}

<div id="disqus_thread"></div>

</div>
</div>
</div>
</section>
@endsection

