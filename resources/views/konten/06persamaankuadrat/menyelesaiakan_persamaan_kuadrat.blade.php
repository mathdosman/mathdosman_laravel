@extends('konten.06persamaankuadrat.06.template')
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
            Menyelesaikan Persamaan Kuadrat
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

            <!-- ============================================================================== -->
            <p>Nilai-nilai \(x\) yang memenuhi persamaan kuadrat makan akar-akar persamaan kuadrat atau penyelesaian persamaan kuadrat.</p>
            Untuk menyelesaikan persamaan kuadrat ada empat cara yaitu:
            <ol>
                <li>
                    dengan pemfaktoran,
                </li>
                <li>
                    dengan melengkapkan kuadrat sempurna,
                </li>
                <li>
                    dengan rumus persamaan kuadrat,
                </li>
                <li>
                    dengan grafik fungsi kuadrat.
                </li>
            </ol>

            <ol>
                <b><li>Pemfaktoran</li></b>
                <p>Jika suatu persamaan kuadrat dapat difaktorkan dalam bentuk hk 0, maka persamaan itu dapat diselesaikan dengan pemfaktoran</p>
                <p>Misalnya : <br>
                    Persamaan kadrat \(x^2 +x -6 = 0 \) difaktorkan dalam bentuk \(hk=0\) <br>
                    \(\begin{align}
                    (x-2)(x+3) &= 0 \\
                    x-2 = 0 \; \; &\text{ atau } \; \; x+3 = 0 \\
                    x=2 \; \; &\text{ atau } \; \;  x=-3
                    \end{align}\)
                </p>
                <div class="badge bg-danger text-wrap fs-6" style="width: 8rem"><b> CONTOH 01 </b></div>
            <div class="rounded-2 p-1" style="background-color: rgba(193, 193, 193, 0.933);">Faktorkanlah: <br> a. \(x^2 +10 x +21 \) <br> b. \(6x^2-11x-10\)</div>
            <p class="rounded-2 p-1" style="background-color: #f89845;"><b>Penyelesaian :</b> <br>
                a. \(x^2 +10x + 21 =(\cdots + \cdots)(\cdots + \cdots)\) <br>
                * Faktor \(x^2\) adalah \(x.x\)
                <br> * Faktor 21 yang jumlahnya 10 adalah 7 dan 3 <br>
                Jadi, faktor dari \(x^2+10x+ 21 =(x+ 7x)(x+3)\) <br> <br>
                b. \(6x^2 -11x-10 \) maka \(a=6 \neq 1\) <br>
                * Kalikan \(6\) dengan \(-10\) maka diperoleh \(-60\) <br>
                * Kita harus cari dua bilangan yang jika dikalikan hasilnya \(-60\) dan jika dijumlahkan hasilnya \(-11\) <br>
                * Bilangan yang dimaksud adalah \(-15\) dan \(4\) <br>
            \(\displaystyle \begin{align}
            6x^2 -11x-10 &= \frac{(6x+...)(6x+...)}{6} \\
            &= \frac{(6x-15)(6x+4)}{6} \\
            &= (2x-5)(3x+2)
            \end{align}\) <br>
            </p>
            <!-- ============================================================================== -->
                <b><li>Melengkapkan Kuadrat Sempurna</li></b>
                <p>Bentuk \(x^2+2ax+ a^2\) adalah bentuk kuadrat sempurna, karena: \(x^2 + 2ax + a^2 = (x + a)^2\), sedangkan bentuk \(x^2+ 2ax\) bukan kuadrat sempurna, karena \(x^2 + 2ax \neq (x + a)^2\). <br>
                Suatu persamaan kuadrat yang tidak dapat diselesaikan dengan pemfaktoran dapat diselesaikan dengan melengkapkan kuadrat sempurna. Misalnya persamaan \(x^2+6x+2=0\) tidak dapat diselesaikan dengan pemfaktoran, namun demikian dapat diselesaikan dengan melengkapkan kuadrat sempurna. dengan langkah-langkah sebagai berikut. <br>
                \(\begin{align}
                    x^2 +6x+2 &= 0 \\
                    x^2+6x &= -2 \\
                    \end{align}\) <br>
                    Selanjutnya tambahkan kedua ruas dengan setengah dari koefisien \(x\) dan dikuadratkan
                    <br>
                    \(\begin{align}
                    x^2 +6x + (3)^2 &= -2 + (3)^2 \\
                    x^2 +6x +9 &= -2+9 \\
                    (x+3)^2 &= 7 \\
                    (x+3) &= \pm \sqrt{7} \\
                    x+3 = \sqrt{7} &\text{ atau } x+3 = -\sqrt{7} \\
                    x= -3 + \sqrt{7} &\text{ atau } x= -3 - \sqrt{7}
                \end{align}\)
                    </p>
                    <p><b>Ilustrasi:</b> <br>
                    Perhatikan rangkaian gambar berikut ini <br>
                    <img src="{{asset('asets/soal/MelengkapiKuadratSempurna.png')}}" alt="AlurMelengkapiKuadratSempurna" width="400vh" class="p-2">
                    </p>
                    <div class="badge bg-danger text-wrap fs-6" style="width: 8rem"><b> CONTOH 02 </b></div>
                    <div class="rounded-2 p-1" style="background-color: rgba(193, 193, 193, 0.933);">Selesaikan persamaan \(2x^2 +8x+1=0\) dengan melengkapkan kuadrat sempurna! </div>
                    <p class="rounded-2 p-1" style="background-color: #f89845;"><b>Penyelesaian :</b> <br>
                    \(\begin{align} \displaystyle
                    2x^2 +8x +1 &=0 \\
                    2x^2 +8x &=-1 \\
                    x^2 +4x &= -\frac{1}{2} \\
                    x^2 +4x +(2)^2 &= -\frac{1}{2}+ (2)^2 \\
                    (x+2)^2 &= \frac{7}{2} \\
                    x+2 &= \pm \sqrt{\frac{7}{2}} \\
                    x &= -2 \pm \sqrt{\frac{7}{2}} \\
                    x= -2 + \sqrt{\frac{7}{2}} &\text{ atau } x= -2-\sqrt{\frac{7}{2}}
                    \end{align}\) <br>
                    </p>
                    <!-- ============================================================================== -->

                <b><li>Rumus persamaan Kuadrat</li></b>
                <p>Setiap persamaan kuadrat dapat dinyatakan dalam bentuk umum, yaitu: <br>
                    \(ax^2 + bx + c = 0\), di mana \(a, b,\) dan \(c\) bilangan real dan \(a \neq 0\) Akar-akar persamaan kuadrat \(ax^2 + bx+c=0\) dapat diselesaikan dengan rumus:
                    \[x = \frac{-b \pm \sqrt{b^2 -4ac}}{2a} \]
                </p>
                    <div class="badge bg-danger text-wrap fs-6" style="width: 8rem"><b> CONTOH 03 </b></div>
                    <div class="rounded-2 p-1" style="background-color: rgba(193, 193, 193, 0.933);">Gunakan rumus untuk menentukan akar-akar persamaan \(5x^2 +3x-7 =0 \) sampai dengan dua angka dibelakang koma.</div>
                    <p class="rounded-2 p-1" style="background-color: #f89845;"><b>Penyelesaian :</b> <br>
                        \(5x^2 + 3x - 7 = 0 \) <br>
                        \(a=5\) , \(b=3\), dan \(c=-7\) <br> <br>
                    \(\begin{align} \displaystyle
                        x &= \frac{-b \pm \sqrt{b^2 -4ac}}{2a} \\
                        &= \frac{-3 \pm \sqrt{3^2 - 4(5)(7)}}{2(5)} \\
                        &= \frac{-3 \pm \sqrt{9+140}}{10} \\
                        &= \frac{-3 \pm \sqrt{149}}{10} \\
                    \end{align}\) <br>

                    Selanjutnya <br>
                    \(\begin{align}
                    x_1 &= \frac{-3 + \sqrt{149}}{10} \\
                    &\approx \frac{-3+12,21}{10} \\
                    &\approx \frac{9,21}{10} \\
                    &\approx 0,92 \\
                    \end{align}\) <br>
                    \(\begin{align}
                    x_2 &= \frac{-3 - \sqrt{149}}{10} \\
                    &\approx \frac{-3-12,21}{10} \\
                    &\approx \frac{-15,21}{10} \\
                    &\approx -1,52 \\
                    \end{align}\)

                    </p>
                    <!-- ============================================================================== -->
            </ol>
<hr>
<hr>
        <form name="input-form">
                @include('konten.00semuamateri.identitas')
            <ol type="1" class="mt-2">
<!--=======================  soal1 ===================================-->
            <li>Faktor dari persamaan kuadrat \(x^2 - 3x -28 = 0 \) adalah . . .</li>
                    <input type="radio" name="soal1" value="A"/>
                    A. \((x-7)(x+4)=0 \)
                <br />
                    <input type="radio" name="soal1" value="B"/>
                    B. \((x+7)(x+4)=0 \)
                <br />
                    <input type="radio" name="soal1" value="C"/>
                    C. \((x-7)(x-4)=0 \)
                <br>
                    <input type="radio" name="soal1" value="D"/>
                    D. \((x+7)(x-4)=0 \)
                <br />
                    <input type="radio" name="soal1" value="E"/>
                    E. \( (x-3)(x+28)=0\)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal1" aria-expanded="false" aria-controls="collapsesoal1" disabled>
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal1">
                <div class="card card-body overflow-auto">
                    <p></p>
                <b class="text-end text-danger fw-bold"> <h3>JAWABAN : A</h3></b>
                </div>
                </div>
                <hr />

<!--=======================  soal2 ===================================-->
            <li>Faktor dari persamaan kuadrat \(x^2 - 19x +48 = 0 \) adalah . . .</li>
                    <input type="radio" name="soal2" value="A"/>
                    A. \((x+16)(x-3)=0 \)
                <br />
                    <input type="radio" name="soal2" value="B"/>
                    B. \((x-16)(x+3)=0 \)
                <br />
                    <input type="radio" name="soal2" value="C"/>
                    C. \((x-16)(x-3)=0 \)
                <br>
                    <input type="radio" name="soal2" value="D"/>
                    D. \((x-19)(x-1)=0 \)
                <br />
                    <input type="radio" name="soal2" value="E"/>
                    E. \((x-19)(x+1)=0 \)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal2" aria-expanded="false" aria-controls="collapsesoal2" disabled>
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal2">
                <div class="card card-body overflow-auto">
                    <p></p>
                <b class="text-end text-danger fw-bold"> <h3>JAWABAN : C</h3></b>
                </div>
                </div>
                <hr />

<!--=======================  soal3 ===================================-->
            <li>Faktor dari persamaan kuadrat \(6x^2 - 8x = 0 \) adalah . . .</li>
                    <input type="radio" name="soal3" value="A"/>
                    A. \(x(6x-4) \)
                <br />
                    <input type="radio" name="soal3" value="B"/>
                    B. \(2x(3x-4) \)
                <br />
                    <input type="radio" name="soal3" value="C"/>
                    C. \(2x(6x-8) \)
                <br>
                    <input type="radio" name="soal3" value="D"/>
                    D. \((x-4)(x-2) \)
                <br />
                    <input type="radio" name="soal3" value="E"/>
                    E. \((x+4)(x+2) \)
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
            <li>Faktor dari persamaan \(x(3x-11)=4 \) adalah . . .</li>
                    <input type="radio" name="soal4" value="A"/>
                    A. \((x+2)(x+2) \)
                <br />
                    <input type="radio" name="soal4" value="B"/>
                    B. \((3x+1)(x-4) \)
                <br />
                    <input type="radio" name="soal4" value="C"/>
                    C. \((3x-1)(x+4) \)
                <br>
                    <input type="radio" name="soal4" value="D"/>
                    D. \((3x+2)(x+2) \)
                <br />
                    <input type="radio" name="soal4" value="E"/>
                    E. \((3x+2)(x-2) \)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal4" aria-expanded="false" aria-controls="collapsesoal4" disabled>
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal4">
                <div class="card card-body overflow-auto">
                    <p></p>
                <b class="text-end text-danger fw-bold"> <h3>JAWABAN : B</h3></b>
                </div>
                </div>
                <hr />

<!--=======================  soal5 ===================================-->
            <li>Faktor persamaan \(49(2x+3)^2 -(x-4)^2 =0 \)</li>
                    <input type="radio" name="soal5" value="A"/>
                    A. \((15x-17)(13x+25) \)
                <br />
                    <input type="radio" name="soal5" value="B"/>
                    B. \((15x+17)(13x-25) \)
                <br />
                    <input type="radio" name="soal5" value="C"/>
                    C. \((15x+17)(13x+25) \)
                <br>
                    <input type="radio" name="soal5" value="D"/>
                    D. \((13x+17)(15x+25) \)
                <br />
                    <input type="radio" name="soal5" value="E"/>
                    E. \((13x+17)(15x-25) \)
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
            <li>Seutas kawat dengan panjang \(18\) meter dibuat persegi panjang. Jika panjang persegi panjang ialah \((x + 2)\) meter, persamaan kuadrat untuk luas persegi panjang adalah . . .</li>
                    <input type="radio" name="soal6" value="A"/>
                    A. \(Luas=-x^2+5x+14 \)
                <br />
                    <input type="radio" name="soal6" value="B"/>
                    B. \(Luas=-x^2+5x-14 \)
                <br />
                    <input type="radio" name="soal6" value="C"/>
                    C. \(Luas=x^2-5x+14 \)
                <br>
                    <input type="radio" name="soal6" value="D"/>
                    D. \(Luas=x^2+5x+14 \)
                <br />
                    <input type="radio" name="soal6" value="E"/>
                    E. \(Luas=-x^2-5x-14 \)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal6" aria-expanded="false" aria-controls="collapsesoal6" disabled>
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal6">
                <div class="card card-body overflow-auto">
                    <p></p>
                <b class="text-end text-danger fw-bold"> <h3>JAWABAN : A</h3></b>
                </div>
                </div>
                <hr />

<!--=======================  soal7 ===================================-->
            <li>Dari sebuah toko buku, dijual buku pelajaran Matematika, Biologi dan Ekonomi masing- masing dengan harga (dalam Rp/buku) \((2p+ 1), (p + 1),\) dan \((p + 3)\). Jika Ngurah membeli \(3p\) buku Matematika, \((p + 7)\) buku Biologi, dan \((15 - 2p)\) buku Ekonomi, nyatakan suatu bentuk kuadrat untuk jumlah uang yang dibayar Ngurah.
            </li>
                    <input type="radio" name="soal7" value="A"/>
                    A. \(4p^2 +26p +52 \)
                <br />
                    <input type="radio" name="soal7" value="B"/>
                    B. \(4^2 +20p +56 \)
                <br />
                    <input type="radio" name="soal7" value="C"/>
                    C. \(5p^2 +20p +56 \)
                <br>
                    <input type="radio" name="soal7" value="D"/>
                    D. \(5p^2 +20p +52 \)
                <br />
                    <input type="radio" name="soal7" value="E"/>
                    E. \(5p^2 +26p +52 \)
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
            <li>Salah satu nilai \(x\) yang memenuhi persamaan kuadrat \(4x^2 +7x=1 \) adalah . . .</li>
                    <input type="radio" name="soal8" value="A"/>
                    A. \(\displaystyle x=\frac{-7-\sqrt{65}}{8} \)
                <br />
                    <input type="radio" name="soal8" value="B"/>
                    B. \(\displaystyle x=\frac{7-\sqrt{65}}{8} \)
                <br />
                    <input type="radio" name="soal8" value="C"/>
                    C. \(\displaystyle x=\frac{7+\sqrt{65}}{8} \)
                <br>
                    <input type="radio" name="soal8" value="D"/>
                    D. \(\displaystyle x=\frac{-7-\sqrt{55}}{8} \)
                <br />
                    <input type="radio" name="soal8" value="E"/>
                    E. \(\displaystyle x=\frac{-7+\sqrt{55}}{8} \)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal8" aria-expanded="false" aria-controls="collapsesoal8" disabled>
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal8">
                <div class="card card-body overflow-auto">
                    <p></p>
                <b class="text-end text-danger fw-bold"> <h3>JAWABAN : A</h3></b>
                </div>
                </div>
                <hr />

<!--=======================  soal9 ===================================-->
            <li>Jumlah nilai \(x\) yang memenuhi persamaan kuadrat \(4x^2 -13x=-3 \) adalah . . .</li>
                    <input type="radio" name="soal9" value="A"/>
                    A. \(\displaystyle \frac{9}{4} \)
                <br />
                    <input type="radio" name="soal9" value="B"/>
                    B. \(\displaystyle \frac{7}{4} \)
                <br />
                    <input type="radio" name="soal9" value="C"/>
                    C. \(\displaystyle \frac{7}{2} \)
                <br>
                    <input type="radio" name="soal9" value="D"/>
                    D. \(\displaystyle \frac{13}{2} \)
                <br />
                    <input type="radio" name="soal9" value="E"/>
                    E. \(\displaystyle \frac{13}{4} \)
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
            <li>Nilai \(x\) yang memenuhi persamaan \(3x^2+8x+4=0\) adalah \(x_1\) dan \(x_2\). Jika \(x_1 \geq x_2\) maka nilai untuk \(3x_1 + x_2 \) adalah . . .</li>
                    <input type="radio" name="soal10" value="A"/>
                    A. \(-8 \)
                <br />
                    <input type="radio" name="soal10" value="B"/>
                    B. \(-4 \)
                <br />
                    <input type="radio" name="soal10" value="C"/>
                    C. \(0 \)
                <br>
                    <input type="radio" name="soal10" value="D"/>
                    D. \(4 \)
                <br />
                    <input type="radio" name="soal10" value="E"/>
                    E. \(8 \)
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

<!--=======================  soal11 ===================================-->
            <li>Akar-akar persamaan \(\displaystyle \frac{1}{4}x^2 - \frac{1}{3}x= \frac{1}{2} \) adalah . . .</li>
                    <input type="radio" name="soal11" value="A"/>
                    A. \(\displaystyle x= \frac{-2 \pm \sqrt{22}}{3} \)
                <br />
                    <input type="radio" name="soal11" value="B"/>
                    B. \(\displaystyle x= \frac{-2 \pm \sqrt{12}}{3} \)
                <br />
                    <input type="radio" name="soal11" value="C"/>
                    C. \(\displaystyle x= \frac{2 \pm \sqrt{12}}{3} \)
                <br>
                    <input type="radio" name="soal11" value="D"/>
                    D. \( \displaystyle x= \frac{2 \pm \sqrt{22}}{3}\)
                <br />
                    <input type="radio" name="soal11" value="E"/>
                    E. \(\displaystyle x= \frac{2 \pm \sqrt{22}}{6} \)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal11" aria-expanded="false" aria-controls="collapsesoal11" disabled>
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal11">
                <div class="card card-body overflow-auto">
                    <p></p>
                <b class="text-end text-danger fw-bold"> <h3>JAWABAN : D</h3></b>
                </div>
                </div>
                <hr />

<!--=======================  soal12 ===================================-->
            <li>Nilai \(x\) yang memenuhi persamaan \(\displaystyle \frac{3(2x-1)}{3x+1} = \frac{3+x}{x-2} \) adalah . . .</li>
                    <input type="radio" name="soal12" value="A"/>
                    A. \(\displaystyle x=\frac{-25 \pm \sqrt{589}}{6} \)
                <br />
                    <input type="radio" name="soal12" value="B"/>
                    B. \(\displaystyle x=\frac{25 \pm \sqrt{589}}{6} \)
                <br />
                    <input type="radio" name="soal12" value="C"/>
                    C. \(\displaystyle x=\frac{25 \pm \sqrt{598}}{6} \)
                <br>
                    <input type="radio" name="soal12" value="D"/>
                    D. \(\displaystyle x=\frac{-25 \pm \sqrt{598}}{6} \)
                <br />
                    <input type="radio" name="soal12" value="E"/>
                    E. \(\displaystyle x=\frac{25 \pm \sqrt{598}}{9} \)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal12" aria-expanded="false" aria-controls="collapsesoal12" disabled>
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal12">
                <div class="card card-body overflow-auto">
                    <p></p>
                <b class="text-end text-danger fw-bold"> <h3>JAWABAN : B</h3></b>
                </div>
                </div>
                <hr />

<!--=======================  soal13 ===================================-->
            <li>Nilai \(x\) yang memenuhi persamaan \(\displaystyle 7+\frac{3}{x+1} = \frac{5}{x-1} \) adalah . . .</li>
                    <input type="radio" name="soal13" value="A"/>
                    A. \(\displaystyle x=\frac{1 \pm \sqrt{106}}{7} \)
                <br />
                    <input type="radio" name="soal13" value="B"/>
                    B. \(\displaystyle x=\frac{1 \pm \sqrt{116}}{7} \)
                <br />
                    <input type="radio" name="soal13" value="C"/>
                    C. \(\displaystyle x=\frac{1 \pm \sqrt{126}}{7} \)
                <br>
                    <input type="radio" name="soal13" value="D"/>
                    D. \(\displaystyle x=\frac{1 \pm \sqrt{136}}{7} \)
                <br />
                    <input type="radio" name="soal13" value="E"/>
                    E. \(\displaystyle x=\frac{1 \pm \sqrt{146}}{7} \)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal13" aria-expanded="false" aria-controls="collapsesoal13" disabled>
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal13">
                <div class="card card-body overflow-auto">
                    <p></p>
                <b class="text-end text-danger fw-bold"> <h3>JAWABAN : A</h3></b>
                </div>
                </div>
                <hr />

<!--=======================  soal14 ===================================-->
            <li>Penyelesaian dari persamaan \(2m^2 +5m -12 = 0 \) adalah \(\alpha \) dan \(\beta \). Maka nilai \(\alpha \times \beta =...\)</li>
                    <input type="radio" name="soal14" value="A"/>
                    A. \( -6\)
                <br />
                    <input type="radio" name="soal14" value="B"/>
                    B. \( -4\)
                <br />
                    <input type="radio" name="soal14" value="C"/>
                    C. \( 0\)
                <br>
                    <input type="radio" name="soal14" value="D"/>
                    D. \( 4\)
                <br />
                    <input type="radio" name="soal14" value="E"/>
                    E. \( 6\)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal14" aria-expanded="false" aria-controls="collapsesoal14" disabled>
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal14">
                <div class="card card-body overflow-auto">
                    <p></p>
                <b class="text-end text-danger fw-bold"> <h3>JAWABAN : A</h3></b>
                </div>
                </div>
                <hr />

<!--=======================  soal15 ===================================-->
            <li>Penyelesaian persamaan \(4x^2 - 81 =0\) adalah . . .</li>
                    <input type="radio" name="soal15" value="A"/>
                    A. \(\displaystyle x=\pm \sqrt{\frac{9}{4}} \)
                <br />
                    <input type="radio" name="soal15" value="B"/>
                    B. \(\displaystyle x=\pm \sqrt{\frac{3}{4}} \)
                <br />
                    <input type="radio" name="soal15" value="C"/>
                    C. \(\displaystyle x=\pm \frac{9}{2} \)
                <br>
                    <input type="radio" name="soal15" value="D"/>
                    D. \( \displaystyle x=\pm \frac{3}{2} \)
                <br />
                    <input type="radio" name="soal15" value="E"/>
                    E. \(\displaystyle x=\pm \frac{4}{3} \)
                <br>
                <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal15" aria-expanded="false" aria-controls="collapsesoal15" disabled>
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal15">
                <div class="card card-body overflow-auto">
                    <p></p>
                <b class="text-end text-danger fw-bold"> <h3>JAWABAN : </h3></b>
                </div>
                </div>
                <hr />

            </ol>

{{-- COPY DARI SINI SETIAP SOAL --}}
{{-- TOMBOL KIRIM --}}
<input type="hidden" id="materi" name="materi" value="PK-01">

@if(empty(Auth::guard('siswa')->user()->role))
<h2 class="text-red text-center">Silahkan Login Untuk mengirim jawaban, Terimakasih</h2>
@elseif(Auth::guard('siswa')->user()->role == 1)
            @if($progress == 0)
            <input type="hidden" id="nama" name="nama" value="{{Auth::guard('siswa')->user()->nama_siswa}}">
            <input type="hidden" id="kelas" name="kelas" value="{{Auth::guard('siswa')->user()->kelas}}">
            <input type="hidden" id="absen" name="absen" value="{{Auth::guard('siswa')->user()->no_absen}}">

            <div class="alert alert-success alert-dismissible fade show d-none my-alert text-center" role="alert" style="font-size: 1.5rem">
                <strong>Terima kasih</strong> Lanjutkan dengan menyimpan Jawaban.
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
    <a href="/persamaanKuadrat01" id="kirimsaja" class="btn btn-warning btn-bukti d-none" >SIMPAN JAWABAN</a>
</div>
</form>
{{-- COPY SAMPAI SINI --}}

<div id="disqus_thread"></div>
</div>
</div>
</div>
</section>
@endsection

