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
                <h2 class="text-center">PENILAIAN AKHIR TAHUN 2021</h2>
                <h3 class="text-center text-danger fw-bold">MATEMATIKA WAJIB</h3>
                <p class="text-center fst-italic"> Math_Dosman</p>
                <hr />
                <p>Selamat datang di <b><i>mathdosman.com</i></b> ! Kami dengan senang hati menyediakan rangkaian soal penilaian tahun-tahun sebelumnya yang dapat membantu Anda dalam mempersiapkan diri menghadapi penilaian tahun ini. Silakan menjelajahi koleksi soal kami dan gunakan sebagai referensi dalam belajar. Semoga <span class="fw-bold fst-italic">mathdosman.com</span>  dapat membantu Anda meraih kesuksesan dalam penilaian mendatang. Terima kasih telah berkunjung!</p>
                <div class="row">
                    <div class="col-3">
                        <img src="{{asset('asets/PAS/pat.png')}}" alt="pat2021" width="100%" class="img-fluid rounded-circle">
                    </div>
                    <div class="col">
                        <hr>
                        <p>Berikut merupakan soal Penilaian Akhir Semester tahun 2022 di SMA Negeri 1 Gianyar</p>
                        <p>Kelas : XI MIPA/IPS</p>
                        <p>Waktu : 60 Menit</p>
                        <p>MATEMATIKA WAJIB</p>
                        <hr>
                    </div>
                </div>
            <ol type="1">
<!--=======================  soal1 ===================================-->
            <li>Nilai dari  \(\displaystyle \frac{1}{7}-\frac{2}{7}+\frac{3}{7}-\frac{4}{7}+\frac{5}{7}-...-\frac{2014}{7}=-\frac{a}{b} \), maka \(a+b=...\) </li>
                <ol type="A">
                    <li>\(1000 \)</li>
                    <li>\(1007 \)</li>
                    <li>\(1009 \)</li>
                    <li>\(1014 \)</li>
                    <li>\(2014 \)</li>

                </ol>
                <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal1" aria-expanded="false" aria-controls="collapsesoal1">
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal1">
                    <div class="card card-body overflow-auto">

                        <p>\(\displaystyle \begin{align}
                            -\frac{a}{b} &=\frac{1}{7}-\frac{2}{7}+\frac{3}{7}-\frac{4}{7}+\frac{5}{7}-\frac{6}{7}-...+\frac{2013}{7}-\frac{2014}{7} \\
                            &=\left(\frac{1}{7}-\frac{2}{7}\right)+\left(\frac{3}{7}-\frac{4}{7}\right)+\left(\frac{5}{7}-\frac{6}{7}\right)-...+\left(\frac{2013}{7}-\frac{2014}{7}\right) \\
                            &=\underbrace{\left(\frac{1}{7}-\frac{2}{7}\right)+\left(\frac{3}{7}-\frac{4}{7}\right)+\left(\frac{5}{7}-\frac{6}{7}\right)-...+\left(\frac{2013}{7}-\frac{2014}{7} \right)}_{\mbox{2014 kali}} \\
                            &=\underbrace{\left(-\frac{1}{7}\right)+\left(-\frac{1}{7}\right)+\left(-\frac{1}{7}\right)-...+\left(-\frac{1}{7}\right)}_{\mbox{1007 kali}} \\
                            &= - \frac{1007}{7}\\
                            -\frac{a}{b}&= - \frac{1007}{7} \\
                            \frac{a}{b}&= \frac{1007}{7}
                            \end{align}\)
                            <p>Jadi, nilai \(a+b = 1007+7 = 1014\)</p>
                            </p>
                    <b class="text-end text-danger fw-bold"> <h3>JAWABAN : D</h3></b>
                    </div>
                </div>
                <hr />
<!-- SOAL end -->
<!--=======================  soal2 ===================================-->
            <li>Agar deret \(\displaystyle \frac{x-1}{x}+ \frac{1}{x} + \frac{1}{x(x-1)}+... \) mempunyai jumlah, maka batas-batas nilai \(x\) adalah . . . </li>
                <ol type="A">
                    <li>\(x > 0 \)</li>
                    <li>\(x < 0 \)</li>
                    <li>\(0 < x < 1 \)</li>
                    <li>\(x > 2 \)</li>
                    <li>\(x < 0 \text{ atau } x > 2 \)</li>

                </ol>
                <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal2" aria-expanded="false" aria-controls="collapsesoal2">
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal2">
                    <div class="card card-body overflow-auto">
                        <p>agar deret tersebut konvergen maka syaratnya \(|r| < 1\) atau \(-1 < r < 1\) </p>
                        <p>\(\displaystyle \begin{align}
                            \text{rasio } &= \frac{\frac{1}{x}}{\frac{x-1}{x}} \\
                            &= \frac{x}{x(x-1)} \\
                            &= \frac{1}{x-1} \\\\
                            -1 &< \frac{1}{x-1} < 1
                            \end{align}\)</p>
                    <b class="text-end text-danger fw-bold"> <h3>JAWABAN : </h3></b>
                    </div>
                </div>
                <hr />
<!-- SOAL end -->
<!--=======================  soal3 ===================================-->
            <li>Suatu barisan geometri mempunyai \(3\) suku pertama \(a,b,\) dan \(b^2\). Jika \(a\) dan \(b\) akar-akar persamaan \(2x^2+kx+6=0\), maka nilai suku keempat dan nilai \(k\) masing-masing adalah...</li>
                <ol type="A">
                    <li>\(27\) dan \(-8\)</li>
                    <li>\(27\) dan \(8\)</li>
                    <li>\(24\) dan \(-8\)</li>
                    <li>\(24\) dan \(-4\)</li>
                    <li>\(24\) dan \(4\)</li>

                </ol>
                <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal3" aria-expanded="false" aria-controls="collapsesoal3">
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal3">
                    <div class="card card-body overflow-auto">
                        <p>Barisan Geometri 3 suku pertama \(a,b,\) dan \(b^2\), maka </p>
                        <p>\(\displaystyle \begin{align}
                            \frac{b}{a} &= \frac{b^2}{b} \\
                            \frac{b}{a} &= b \\
                            \frac{b}{b} &= a \\
                            a &= 1
                            \end{align}\)</p>
                            <p>\(a\) dan \(b\) merupakan akar-akar persamaan \(2x^2+kx+6=0\), maka</p>
                            <p>\(\displaystyle \begin{align}
                                a.b &= \frac{6}{2} \\
                                a.b &= 3 \\
                                1.b &= 3 \\
                                b &= 3 \\\\
                                a+b &= \frac{k}{2} \\
                                1+3 &= \frac{k}{2} \\
                                4 &= \frac{k}{2} \\
                                4.2 &= k \\
                                k & = 8
                                \end{align}\)</p>
                            <p>Suku ke-4 adalah <br>
                            \(\displaystyle \begin{align}
                            \text{rasio } &= \frac{b}{a} \\
                            &= \frac{3}{1} \\
                            &= 3 \\\\
                            U_4 &= a.r^3 \\
                            &= 1.3^3 \\
                            &= 27
                            \end{align}\)
                            </p>
                            <p>Jadi, suku ke-4 dan nilai k beruturut-turut adalah \(27 \) dan \(8\) </p>
                    <b class="text-end text-danger fw-bold"> <h3>JAWABAN : B</h3></b>
                    </div>
                </div>
                <hr />
<!-- SOAL end -->
<!--=======================  soal4 ===================================-->
            <li>Dari suatu deret aritmatika diketahui jumlah \(n\) suku pertamanya ditentukan dengan rumus \(\displaystyle S_n=\frac{1}{2}(3n^2+5n)\). Suku ke \(6\) adalah ...  </li>
                <ol type="A">
                    <li>\(\displaystyle 17\)</li>
                    <li>\(\displaystyle 18\)</li>
                    <li>\(\displaystyle 19\)</li>
                    <li>\(\displaystyle 20\)</li>
                    <li>\(\displaystyle 21\)</li>

                </ol>
                <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal4" aria-expanded="false" aria-controls="collapsesoal4">
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal4">
                    <div class="card card-body overflow-auto">
                        \(\displaystyle \begin{align}
                        S_n &= \frac{1}{2}(3n^2+5n) \\
                        &= \frac{3}{2}n^2 + \frac{5}{2}n \\
                        &\text{menggunakan turunan } \\
                        Un &= \frac{6}{2} n + \frac{5}{2}-\frac{3}{2} \\
                        Un &= 3n +1 \\\\
                        U_6 &= 3(6)+1 \\
                        &= 19
                        \end{align}\)
                    <b class="text-end text-danger fw-bold"> <h3>JAWABAN : C</h3></b>
                    </div>
                </div>
                <hr />
<!-- SOAL end -->
<!--=======================  soal5 ===================================-->
            <li>Diketahui empat bilangan, tiga bilangan pertama merupakan barisan aritmatika dan tiga bilangan terakhir merupakan barisan geometri. Jumlah bilangan kedua dan keempat adalah \(10\). Jumlah bilangan pertama dan ketiga adalah \(18\). Hasil kali keempat bilangan tersebut adalah ...</li>
                <ol type="A">
                    <li>\(505 \)</li>
                    <li>\(405 \)</li>
                    <li>\(400 \)</li>
                    <li>\(360 \)</li>
                    <li>\(280 \)</li>

                </ol>
                <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal5" aria-expanded="false" aria-controls="collapsesoal5">
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal5">
                    <div class="card card-body overflow-auto">
                        <p>Misalkan barisan tersebut adalah \(a, b, c, d\), maka </p>
                        <p>\(b + d = 10\)</p>
                        <p>\(a + c = 18\)</p>
                        <p>Diketahui 3 suku pertama adalah barisan aritmatika</p>
                        <p>\(\displaystyle \begin{align}
                            b-a &= c-b \\
                            b+b &= a+c \\
                            2b &= a+c \\\\
                            2b &= 18\\
                            b &= 9 \\\\

                            b+d &= 10 \\
                            9+d &= 10\\
                            d &= 10-9 \\
                            d &= 1 \\\\
                            \end{align}\) </p>
                        <p>Diketahui 3 suku terakhir adalah barisan geometri</p>
                            <p>\(\displaystyle \begin{align}
                                \frac{c}{b} &= \frac{d}{c} \\
                                c^2 &= b.d \\
                                c^2 &= 1.9 \\
                                c &= \sqrt{9}\\
                                c &= 3 \\\\
                                a+c &= 18\\
                                a + 3 &= 18\\
                                a &= 18-3 \\
                                a &= 15
                                \end{align}\)</p>
                            <p>\(a.b.c.d = 15.9.3.1 = 405\)</p>
                            <p>Jadi, hasil kali keempat bilangan tersebut adalah \(405\)</p>
                    <b class="text-end text-danger fw-bold"> <h3>JAWABAN : B</h3></b>
                    </div>
                </div>
                <hr />
<!-- SOAL end -->
<!--=======================  soal6 ===================================-->
            <li>Sebuah mobil dibeli dengan harga Rp 200.000.000,00. Jika setiap tahun harganya mengalami penyusutan 20% dari nilai tahun sebelumnya, harga mobil itu setelah dipakai selama 5 tahun adalah...</li>
                <ol type="A">
                    <li>Rp 65.336.000,00</li>
                    <li>Rp 65.536.000,00</li>
                    <li>Rp 65.556.000,00</li>
                    <li>Rp 65.636.000,00</li>
                    <li>Rp 66.636.000,00</li>
                </ol>
                <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal6" aria-expanded="false" aria-controls="collapsesoal6">
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal6">
                    <div class="card card-body overflow-auto">
                        <p>Menuyusut p = 20%, harga beli M = Rp 200.000.000,00, harga setelah n = 5 tahun M5 = . . .</p>
                    <p>\(\displaystyle \begin{align}
                        M5 &= M (1-p)^n \\
                        &= 200.000.000 (1- 20\text{%})^5 \\
                        &= 200.000.000 (80\text{%})^5 \\
                        &= 200.000.000 (0,8)^5 \\
                        &= 65.536.000
                        \end{align}\)</p>
                    <p>Jadi, harga mobil setelah 5 tahun adalah Rp 65.536.000,00</p>
                    <b class="text-end text-danger fw-bold"> <h3>JAWABAN : B</h3></b>
                    </div>
                </div>
                <hr />
<!-- SOAL end -->
<!--=======================  soal7 ===================================-->
            <li>\(\displaystyle \lim_{x \to 1} \frac{\sqrt{8+\sqrt{x}}-3}{x-1}=... \)</li>
                <ol type="A">
                    <li>\(\displaystyle 0 \)</li>
                    <li>\(\displaystyle 1 \)</li>
                    <li>\(\displaystyle \frac{1}{2} \)</li>
                    <li>\(\displaystyle  \frac{1}{12} \)</li>
                    <li>\(\displaystyle 2 \)</li>

                </ol>
                <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal7" aria-expanded="false" aria-controls="collapsesoal7">
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal7">
                    <div class="card card-body overflow-auto">
                        <p>\(\displaystyle \begin{align}
                        \lim_{x \to 1} \frac{\sqrt{8+\sqrt{x}}-3}{x-1} &= \lim_{x \to 1} \frac{\sqrt{8+\sqrt{x}}-3}{x-1} . \frac{\sqrt{8+\sqrt{x}}+3}{\sqrt{8+\sqrt{x}}+3} \\
                        &= \lim_{x \to 1} \frac{(8+\sqrt{x})-9}{(x-1)(\sqrt{8+\sqrt{x}+3})}\\
                        &= \lim_{x \to 1} \frac{\sqrt{x}-1}{(x-1)(\sqrt{8+\sqrt{x}}+3)}\\
                        &= \lim_{x \to 1} \frac{\sqrt{x}-1}{(\sqrt{x}+1)(\sqrt{x}-1) (\sqrt{8+\sqrt{x}}+3)}\\
                        &= \lim_{x \to 1} \frac{1}{(\sqrt{x}+1) (\sqrt{8+\sqrt{x}}+3)}\\
                        &= \frac{1}{(\sqrt{1}+1) (\sqrt{8+\sqrt{1}}+3)}\\
                        &= \frac{1}{(1+1) (\sqrt{9}+3)}\\
                        &= \frac{1}{(2) (3+3)}\\
                        &= \frac{1}{(2)(6)}\\
                        &= \frac{1}{12}\\
                        \end{align} \)</p>
                    <b class="text-end text-danger fw-bold"> <h3>JAWABAN : D</h3></b>
                    </div>
                </div>
                <hr />
<!-- SOAL end -->
<!--=======================  soal8 ===================================-->
            <li>Diketahui \(f(x)=\left\{\begin{matrix} x^2-1, \: \text{untuk } x < -2 \\ -2x-1 \text{untuk } x > -2 \end{matrix}\right.\). Nilai \(\displaystyle \lim_{x \to -2} f(x)=...\)</li>
                <ol type="A">
                    <li>\(-3 \)</li>
                    <li>\(-1\)</li>
                    <li>\(0\)</li>
                    <li>\(3\)</li>
                    <li>tidak ada</li>

                </ol>
                <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal8" aria-expanded="false" aria-controls="collapsesoal8">
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal8">
                    <div class="card card-body overflow-auto">
                        <p>Limit Kiri substitusi \(x=-2\) ke \((x^2-1)\)</p>
                        <p>\(\displaystyle \begin{align}
                        x^2 -1 &= (-2)^2-1 \\
                        &= 4-1 \\
                        &= 3
                        \end{align}\)</p>
                        <p>Limit Kanan substitusi \(x=-2\) ke \((-2x-1)\)</p>
                        <p>\(\displaystyle \begin{align}
                            -2x-1 &= -2(-2)-1 \\
                            &= 4 -1 \\
                            &= 3
                            \end{align} \)</p>
                        <p>Nilai limit kiri sama dengan limit kanan, berarti nilai limitnya <b>ada</b> di \(x \to 2\) dengan nilai limit adalah \(3\)</p>
                    <b class="text-end text-danger fw-bold"> <h3>JAWABAN : D</h3></b>
                    </div>
                </div>
                <hr />
<!-- SOAL end -->
<!--=======================  soal9 ===================================-->
            <li>Diketahui \(\displaystyle \lim_{x \to a} f(x) = p \). Nilai \(\displaystyle \lim_{x \to a} \left((f(x)+1)^2 - 3f(x)\right)\) adalah . . .</li>
                <ol type="A">
                    <li>\(p^2+5p+1 \)</li>
                    <li>\(p^2-p+3 \)</li>
                    <li>\(p^2-p+1 \)</li>
                    <li>\(p^2+p+1 \)</li>
                    <li>\(p^2+p+3 \)</li>
                </ol>
                <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal9" aria-expanded="false" aria-controls="collapsesoal9">
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal9">
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
<!-- SOAL end -->
<!--=======================  soal10 ===================================-->
            <li>\(\displaystyle \lim_{x \to 0} \frac{x}{\sqrt{1+6x}-\sqrt{1-6x}}=... \)</li>
                <ol type="A">
                    <li>\(\displaystyle \frac{1}{6} \)</li>
                    <li>\(\displaystyle \frac{5}{6}\)</li>
                    <li>\(\displaystyle \frac{1}{5}\)</li>
                    <li>\(\displaystyle \frac{2}{5}\)</li>
                    <li>\(\displaystyle \frac{3}{5}\)</li>
                </ol>
                <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal10" aria-expanded="false" aria-controls="collapsesoal10">
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal10">
                    <div class="card card-body overflow-auto">
                        <p>\(\displaystyle \begin{align}
                            \lim_{x \to 0} \frac{x}{\sqrt{1+6x}-\sqrt{1-6x}} &= \lim_{x \to 0} \frac{x}{\sqrt{1+6x}-\sqrt{1-6x}} \frac{\sqrt{1+6x}+\sqrt{1-6x}}{\sqrt{1+6x}+\sqrt{1-6x}}

                            \end{align}\)</p>
                    <b class="text-end text-danger fw-bold"> <h3>JAWABAN : </h3></b>
                    </div>
                </div>
                <hr />
<!-- SOAL end -->
<!--=======================  soal11 ===================================-->
            <li>Jika nilai maksimum fungsi \(y=x+\sqrt{p-2x}\) adalah \(4\), maka \(p=...\)</li>
                <ol type="A">
                    <li>\(3 \)</li>
                    <li>\(4 \)</li>
                    <li>\(5 \)</li>
                    <li>\(7 \)</li>
                    <li>\(8 \)</li>

                </ol>
                <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal11" aria-expanded="false" aria-controls="collapsesoal11">
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal11">
                    <div class="card card-body overflow-auto">
                        <p>Untuk mencari nilai \(p\), pertama-tama kita perlu mencari nilai maksimum dari fungsi \(y\).
                            <br>
                            Untuk mencari nilai maksimum, kita perlu mencari turunan pertama dari fungsi \(y\) dan menyamakan dengan nol:

                            $$
                            \begin{aligned}
                            y &= x + \sqrt{p-2x}\\
                            \frac{dy}{dx} &= 1 - \frac{1}{\sqrt{p-2x}}\\
                            \frac{dy}{dx} &= 0 \implies 1 - \frac{1}{\sqrt{p-2x}} = 0\\
                            \frac{1}{\sqrt{p-2x}} &= 1\\
                            \sqrt{p-2x} &= 1\\
                            p-2x &= 1^2\\
                            p-2x &= 1\\
                            x &= \frac{p-1}{2}
                            \end{aligned}
                            $$

                            Sekarang kita bisa menggunakan nilai \(x\) yang ditemukan untuk mencari nilai \(p\). Kita tahu bahwa nilai maksimum dari \(y\) adalah \(4\), sehingga kita dapat menyelesaikan persamaan berikut:

                            $$
                            \begin{aligned}
                            y &= x + \sqrt{p-2x}\\
                            4 &= \frac{p-1}{2} + \sqrt{p-2\left(\frac{p-1}{2}\right)}\\
                            4 &= \frac{p-1}{2} + \sqrt{1}\\
                            \frac{p-1}{2} &= 4 - 1\\
                            \frac{p-1}{2} &= 3\\
                            p-1 &= 6 \\
                            p &= 7
                            \end{aligned}
                            $$

                            Jadi, nilai p yang memenuhi persamaan adalah \(\boxed{p = 7}\).</p>
                    <b class="text-end text-danger fw-bold"> <h3>JAWABAN : D</h3></b>
                    </div>
                </div>
                <hr />
<!-- SOAL end -->
<!--=======================  soal12 ===================================-->
            <li>Di dalam kerucut dengan jari-jari \(16\) m dan tinggi \(15\) m akan dibuat sebuah tabung. Agar volume tabung maksimum, tinggi tabung tersebut haruslah . . . m</li>
                <ol type="A">
                    <li>\(10 \)</li>
                    <li>\(9 \)</li>
                    <li>\(7,5 \)</li>
                    <li>\(6 \)</li>
                    <li>\(5 \)</li>

                </ol>
                <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal12" aria-expanded="false" aria-controls="collapsesoal12">
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal12">
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
                            &=\boxed{ 5}
                            \end{align*}</p>
                    <b class="text-end text-danger fw-bold"> <h3>JAWABAN : E</h3></b>
                    </div>
                </div>
                <hr />
<!-- SOAL end -->
<!--=======================  soal13 ===================================-->
            <li>Persamaan garis singgung kurva \(\displaystyle y=\frac{2x^2 + 6x -24}{x\sqrt{x}} \) di titik dengan absis \(4\) adalah . . . </li>
                <ol type="A">
                    <li>\(4x+5y-4=0 \)</li>
                    <li>\(4x-5y+4=0 \)</li>
                    <li>\(5x+4y-4=0 \)</li>
                    <li>\(5x-4y-4=0 \)</li>
                    <li>\(5x-4y+4=0 \)</li>

                </ol>
                <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal13" aria-expanded="false" aria-controls="collapsesoal13">
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal13">
                    <div class="card card-body overflow-auto">
                        <p>Untuk menentukan persamaan garis singgung, kita perlu menentukan turunan dari kurva terlebih dahulu.

                            Menggunakan aturan rantai, turunan dari \(\displaystyle y=\frac{2x^2 + 6x -24}{x\sqrt{x}}\) adalah:

                            \begin{align*}
                            \frac{d}{dx} \left( \frac{2x^2 + 6x -24}{x\sqrt{x}} \right) &= \frac{d}{dx} \left( 2x^{\frac{1}{2}} + 6x^{-\frac{1}{2}} -24x^{-\frac{3}{2}} \right)\\
                            &= x^{-\frac{1}{2}} - 3x^{-\frac{3}{2}} + 36x^{-\frac{5}{2}}
                            \end{align*}

                            Kita dapat menggunakan nilai \(x=4\) untuk menentukan kemiringan (slope) garis singgung di titik tersebut:

                            \begin{align*}
                            m &= (4)^{-\frac{1}{2}} - 3(4)^{-\frac{3}{2}} + 36(4)^{-\frac{5}{2}}\\
                            &= \frac{1}{2 }- \frac{3}{8} + \frac{36}{32} \\
                            &= \frac{4}{8 }- \frac{3}{8} + \frac{9}{8} \\
                            &= \frac{10}{8} \\
                            &= \frac{5}{4}
                            \end{align*}

                            Untuk menentukan persamaan garis singgung, kita perlu mengetahui koordinat titik tersebut. Kita sudah diberikan bahwa absisnya adalah \(x=4\), untuk mengetahui ordinatnya kita perlu substitusi \(x=4\) ke dalam persamaan kurva:

                            \begin{align*}
                            y &= \frac{2(4)^2 + 6(4) -24}{4\sqrt{4}}\\
                            &= \frac{32+24-24}{4 \cdot 2}\\
                            &= 4
                            \end{align*}

                            Jadi, koordinat titik di mana garis singgungnya melewati kurva adalah \((4,4)\).
                            <br> <br>
                            Persamaan garis singgung dapat ditulis dalam bentuk \(y - y_1 = m(x - x_1)\), di mana \(m\) adalah kemiringan garis singgung dan \((x_1,y_1)\) adalah koordinat titik di mana garis singgung melewati kurva. Dengan menggunakan nilai yang sudah kita peroleh, persamaan garis singgung adalah:

                            \begin{align*}
                            y - 4 &= \frac{5}{4} (x - 4)\\
                            4y -16 &= 5x -20 \\
                            5x-4x-20+16 &=0 \\
                            5x - 4x -4 &= 0
                            \end{align*}

                            Jadi, persamaan garis singgung kurva \(y=\frac{2x^2 + 6x -24}{x\sqrt{x}}\) di titik dengan absis \(4\) adalah \(\boxed{5x - 4x -4 = 0}\).</p>
                    <b class="text-end text-danger fw-bold"> <h3>JAWABAN : D</h3></b>
                    </div>
                </div>
                <hr />
<!-- SOAL end -->
<!--=======================  soal14 ===================================-->
            <li>Fungsi \(f(x)=x^3 +ax^2 +bx +c \) turun pada interval \(\displaystyle \frac{2}{3} < x < 8 \), maka nilai \(a+b=...\)</li>
                <ol type="A">
                    <li>\(29 \)</li>
                    <li>\(16 \)</li>
                    <li>\(13 \)</li>
                    <li>\(3 \)</li>
                    <li>\(-13 \)</li>

                </ol>
                <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal14" aria-expanded="false" aria-controls="collapsesoal14">
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal14">
                    <div class="card card-body overflow-auto">
                        <p>

                            Untuk mencari nilai \(a+b\), kita harus memanfaatkan sifat turun dari fungsi \(f(x)\) pada interval \(\displaystyle \frac{2}{3} < x < 8 \). Sifat turun berarti bahwa turunnya nilai fungsi saat \(x\) meningkat pada interval tersebut. Dalam hal ini, kita dapat memanfaatkan turunan pertama fungsi \(f(x)\), yang akan memberikan kita informasi tentang kecenderungan nilai fungsi ketika \(x\) meningkat.

                            Turunan pertama dari fungsi \(f(x)\) adalah:

                            $$
                            f'(x) = 3x^2 + 2ax + b
                            $$

                            Kita akan mencari titik stasioner fungsi \(f(x)\) pada interval \(\displaystyle \frac{2}{3} < x < 8 \) dengan cara mencari akar dari turunan pertama, yaitu:

                            $$
                            f'(x) = 0 \quad \Rightarrow \quad 3x^2 + 2ax + b = 0
                            $$

                            Karena fungsi \(f(x)\) turun pada interval tersebut, maka titik stasionernya terletak pada \(\displaystyle x=\frac{2}{3}\) dan \(x=8\) maka akan menjadi \((3x-2)(x-8) \), kedua persamaan yang kita peroleh merupakan persamaan yang ekuivalen, maka
                            \begin{align*}
                            3x^2 + 2ax + b & \equiv (3x-2)(x-8) \\
                            3x^2 + 2ax + b & \equiv 3x^2-26x+16 \\
                            \end{align*}
                            <!-- \begin{align*} \end{align*} -->
                            Dapat disimpulkan bahwa :
                            \begin{align*}
                            2a &= -26 \\
                            a &= -13 \\\\
                            b &= 16 \\\\
                            a+b &= -13 + 16 \\
                            &= 3
                            \end{align*}
                            </p>
                            <p>Jadi, nilai \(a+b\) adalah \(\boxed{3}\). </p>
                    <b class="text-end text-danger fw-bold"> <h3>JAWABAN : D</h3></b>
                    </div>
                </div>
                <hr />
<!-- SOAL end -->
<!--=======================  soal15 ===================================-->
            <li>Suatu perusahaan menghasilkan produk yang dapat diselesaikan dalam \(x\) jam dengan biaya per jam \(\displaystyle \left(4x-800+ \frac{120}{x} \right) \) dalam ratus ribu rupiah. Agar biaya minimum, produk tersebut dapat diselesaikan dalam waktu . . .</li>
                <ol type="A">
                    <li>\(40 \) jam</li>
                    <li>\(100 \) jam</li>
                    <li>\(110 \) jam </li>
                    <li>\(120 \) jam</li>
                    <li>\(150 \) jam</li>

                </ol>
                <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal15" aria-expanded="false" aria-controls="collapsesoal15">
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal15">
                    <div class="card card-body overflow-auto">
                        <p>Untuk mencari waktu yang membuat biaya minimum, kita perlu mencari turunan dari fungsi biaya dan menyelesaikan persamaan turunan tersebut untuk mendapatkan nilai minimum.

                            Mari kita mulai dengan mengekspresikan fungsi biaya sebagai fungsi dari variabel waktu, \(x\):
                            \[C(x) = x(4x-800+ \frac{120}{x})\]
                            \[C(x) = 4x^2 -800x + 120\]

                            Sekarang kita akan mencari turunan fungsi biaya:
                            \[\frac{dC}{dx} = 8x - 800\]

                            Kemudian kita set turunan fungsi biaya sama dengan nol untuk mencari titik kritis:
                            \[8x - 800 = 0\]
                            \[x = \frac{800}{8} = 100\]

                            Kita perlu memeriksa apakah titik kritis ini adalah minimum, maksimum, atau titik saddle. Kita dapat menggunakan turunan kedua untuk menentukan ini:
                            \[\frac{d^2C}{dx^2} = 8\]

                            Karena turunan kedua positif, kita tahu bahwa titik kritis ini adalah minimum.

                            Jadi, waktu yang membuat biaya minimum adalah \(\boxed{x = 100}\) jam.</p>
                    <b class="text-end text-danger fw-bold"> <h3>JAWABAN : B</h3></b>
                    </div>
                </div>
                <hr />
<!-- SOAL end -->
<!--=======================  soal16 ===================================-->
            <li>	Gradien garis singgung suatu kurva di titik \((x,y)\) adalah \(3\sqrt{x}\), jika kurva ini melalui titik \((4, 9)\), nilai \(y\) di titik berabsis \(1\) adalah . . .</li>
                <ol type="A">
                    <li>\(-5\)</li>
                    <li>\(-4\)</li>
                    <li>\(-3\)</li>
                    <li>\(-2\)</li>
                    <li>\(-1\)</li>

                </ol>
                <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal16" aria-expanded="false" aria-controls="collapsesoal16">
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal16">
                    <div class="card card-body overflow-auto">
                        <p>Untuk mencari nilai \(y\) di titik berabsis \(1\), kita perlu menentukan persamaan garis singgung pada kurva di titik \((1,y)\).
                           <br><br>
                            Misalkan persamaan kurva tersebut adalah \(f(x)=y\) atau \(y=f(x)\). Kita dapat menemukan persamaan garis singgung pada titik \((x,y)\) dengan cara mengambil turunan pertama dari fungsi \(f(x)\) dan mengevaluasinya pada \(x\) yang bersesuaian, yaitu \(x=1\). Karena gradien garis singgung di titik \((x,y)\) adalah \(3\sqrt{x}\), maka kita dapat menuliskan:

                            \[\frac{dy}{dx}=3\sqrt{x}\]
                            \[dy=3\sqrt{x}dx\]

                            Kita dapat melakukan integrasi pada kedua sisi persamaan terakhir ini untuk mendapatkan \(y\) sebagai fungsi dari \(x\):

                            \[\int dy=\int 3\sqrt{x}dx\]
                            \[y=2x\sqrt{x}+C\]

                            Karena kurva tersebut melalui titik \((4,9)\), maka kita dapat menentukan nilai konstanta \(C\):

                            \[9=2\cdot4\sqrt{4}+C\]
                            \[C=9-16=-7\]

                            Sehingga persamaan fungsi kurva tersebut adalah:

                            \[y=2x\sqrt{x}-7\]

                            Untuk mencari nilai \(y\) di titik \((1,y)\), kita cukup substitusikan \(x=1\) ke dalam persamaan tersebut:

                            \[y=2\cdot1\sqrt{1}-7=-5\]

                            Jadi, nilai \(y\) di titik berabsis \(1\) adalah \(\boxed{-5}\).</p>
                    <b class="text-end text-danger fw-bold"> <h3>JAWABAN : A</h3></b>
                    </div>
                </div>
                <hr />
<!-- SOAL end -->
<!--=======================  soal17 ===================================-->
            <li>Sebuah benda bergerak sepanjang garis lurus. Kecepatan benda pada setiap saat adalah  \(v=6t^2+4t\)  m/det. Pada saat \(t = 0\) panjang lintasan yang ditempuh adalah \(s = 5\) meter. Jarak yang ditempuh benda saat \( t = 2\) detik adalah . . . meter.</li>
                <ol type="A">
                    <li>\(21 \)</li>
                    <li>\(23 \)</li>
                    <li>\(25 \)</li>
                    <li>\(27 \)</li>
                    <li>\(29 \)</li>

                </ol>
                <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal17" aria-expanded="false" aria-controls="collapsesoal17">
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal17">
                    <div class="card card-body overflow-auto">
                        <p>

                            Untuk mencari jarak yang ditempuh benda saat \(t=2\) detik, kita perlu menggunakan rumus jarak tempuh (\(s\)) sebagai fungsi dari waktu (\(t\)).
                            <br><br>
                            Pertama-tama, kita perlu menentukan persamaan kecepatan (\(v\)) sebagai fungsi dari waktu (\(t\)). Dalam kasus ini, kecepatan benda pada setiap saat adalah:

                            \[v(t) = 6t^2 + 4t\text{ m/det}\]

                            Kemudian, kita dapat menentukan persamaan jarak (\(s\)) sebagai turunan pertama dari persamaan kecepatan terhadap waktu:

                            \[s(t) = \int v(t) dt = \int (6t^2 + 4t) dt = 2t^3 + 2t^2 + C\text{ m}\]

                            Untuk menentukan nilai konstanta integrasi (\(C\)), kita dapat menggunakan informasi bahwa pada saat \(t=0\), panjang lintasan yang ditempuh adalah \(s=5\) meter:

                            \[s(0) = 2(0)^3 + 2(0)^2 + C = C = 5\text{ m}\]

                            Sehingga persamaan jarak menjadi:

                            \[s(t) = 2t^3 + 2t^2 + 5\text{ m}\]

                            Jarak yang ditempuh benda saat \(t=2\) detik dapat dihitung dengan substitusi \(t=2\) ke dalam persamaan di atas:

                            \[s(2) = 2(2)^3 + 2(2)^2 + 5 = 16 + 8 + 5 = 29\text{ m}\]

                            Jadi, jarak yang ditempuh benda saat \(t=2\) detik adalah \(\boxed{29}\) meter.</p>
                    <b class="text-end text-danger fw-bold"> <h3>JAWABAN : E</h3></b>
                    </div>
                </div>
                <hr />
<!-- SOAL end -->
<!--=======================  soal18 ===================================-->
            <li>\(\displaystyle \int \frac{2x+3}{\sqrt{3x^2+9x-1} } dx = . . .\)</li> <br>
                <ol type="A">
                    <li>\(\displaystyle 2 \sqrt{3x^2+9x-1} + C \)</li> <br>
                    <li>\(\displaystyle \frac{1}{3} \sqrt{3x^2+9x-1} + C\)</li> <br>
                    <li>\(\displaystyle \frac{2}{3} \sqrt{3x^2+9x-1} + C\)</li> <br>
                    <li>\(\displaystyle \frac{1}{2} \sqrt{3x^2+9x-1} + C\)</li> <br>
                    <li>\(\displaystyle \frac{3}{2} \sqrt{3x^2+9x-1} + C\)</li>

                </ol>
                <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal18" aria-expanded="false" aria-controls="collapsesoal18">
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal18">
                    <div class="card card-body overflow-auto">
                        <p>Untuk menyelesaikan integral ini, kita dapat menggunakan substitusi. Mari kita lakukan substitusi:

                            $$u = 3x^2 + 9x - 1$$

                            Kita dapat mencari nilai \(du\) sebagai berikut:

                            $$du = (6x+9)dx = 3(2x+3)dx$$

                            Kita dapat menyelesaikan persamaan ini untuk \(dx\):

                            $$dx = \frac{du}{3(2x+3)}$$

                            Substitusi ini kemudian akan memberikan integral baru sebagai berikut:

                            $$\int \frac{2x+3}{\sqrt{3x^2+9x-1} } dx = \int \frac{2x+3}{\sqrt{u} } \cdot \frac{du}{3(2x+3)} = \frac{1}{3} \int \frac{du}{\sqrt{u}}$$

                            Kita dapat menyelesaikan integral ini dengan menggunakan rumus dasar integral:

                            $$\frac{1}{3} \int \frac{du}{\sqrt{u}} = \frac{1}{3} \cdot 2\sqrt{u} + C = \frac{2}{3} \sqrt{3x^2+9x-1} + C$$

                            Dalam bentuk akhir ini, kita telah menyelesaikan integral awal dengan menggunakan substitusi. Oleh karena itu, solusi dari integral tersebut adalah \(\boxed{\frac{2}{3} \sqrt{3x^2+9x-1} + C}\), di mana \(C\) adalah konstanta integrasi.</p>
                    <b class="text-end text-danger fw-bold"> <h3>JAWABAN : C</h3></b>
                    </div>
                </div>
                <hr />
<!-- SOAL end -->
<!--=======================  soal19 ===================================-->
            <li>Jika \(\displaystyle \int_{0}^{2} (ax-b) dx = 4 \) dan \(\displaystyle \int_{1}^{3} (x^2 +2b) dx=10 \) maka \(3a+6b=...\)</li>
                <ol type="A">
                    <li>\(5 \)</li>
                    <li>\(6 \)</li>
                    <li>\(7 \)</li>
                    <li>\(8 \)</li>
                    <li>\(9 \)</li>

                </ol>
                <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal19" aria-expanded="false" aria-controls="collapsesoal19">
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal19">
                    <div class="card card-body overflow-auto">
                        <p>

                            Mari kita cari terlebih dahulu nilai integral pertama, yaitu:

                            \begin{align*}
                            \int_{0}^{2} (ax-b) dx &= \left[ \frac{a}{2}x^2-bx \right]_0^2 \\
                            &= \left( \frac{a}{2}(2)^2-b(2) \right) - \left( \frac{a}{2}(0)^2-b(0) \right) \\
                            &= 2a - 2b
                            \end{align*}

                            Selanjutnya, kita mencari nilai integral kedua:

                            \begin{align*}
                            \int_{1}^{3} (x^2 +2b) dx &= \left[ \frac{1}{3}x^3 +2bx \right]_1^3 \\
                            &= \left( \frac{1}{3}(3)^3+2b(3) \right) - \left( \frac{1}{3}(1)^3+2b(1) \right) \\
                            &= 9+6b - \frac{1}{3}-2b \\
                            &= \frac{26}{3}+4b
                            \end{align*}

                            Karena kita diberikan informasi bahwa kedua integral tersebut bernilai tertentu, maka kita dapat menyelesaikan sistem persamaan linear dengan dua variabel \(a\) dan \(b\) sebagai berikut:

                            \begin{align*}
                            2a - 2b &= 4 \\
                            \frac{26}{3}+4b &= 10
                            \end{align*}

                            Simplifikasi persamaan kedua:

                            \begin{align*}
                            \frac{26}{3}+4b &= 10 \\
                            4b &= \frac{4}{3} \\
                            b &= \frac{1}{3}
                            \end{align*}

                            Substitusikan nilai \(b\) yang ditemukan ke dalam persamaan pertama:

                            \begin{align*}
                            2a - 2b &= 4 \\
                            2a - 2\left(\frac{1}{3}\right) &= 4 \\
                            2a - \frac{2}{3} &= 4 \\
                            2a &= \frac{14}{3} \\
                            a &= \frac{7}{3}
                            \end{align*}

                            Akhirnya, kita dapat menghitung nilai dari \(3a+6b\) sebagai berikut:

                            \begin{align*}
                            3a+6b &= 3\left(\frac{7}{3}\right)+6\left(\frac{1}{3}\right) \\
                            &= 7+2 \\
                            &= 9
                            \end{align*}

                            Sehingga, \(3a+6b=\boxed{9}\).</p>
                    <b class="text-end text-danger fw-bold"> <h3>JAWABAN : E</h3></b>
                    </div>
                </div>
                <hr />
<!-- SOAL end -->
<!--=======================  soal20 ===================================-->
            <li>Daerah \(D\) dibatasi oleh grafik fungsi \(\displaystyle y= \frac{1}{\sqrt{x}} \), garis \(x = 1\), garis \(x = 4\), dan sumbu\(-X\). Jika garis \(x = c\) memotong daerah \(D\) sehingga menjadi daerah \(D_1\) dan \(D_2\) yang luasnya sama, maka \(c =...\)</li>
                <ol type="A">
                    <li>\(\displaystyle \frac{3}{2} \)</li>
                    <li>\(\displaystyle 2 \)</li>
                    <li>\(\displaystyle \frac{5}{2} \)</li>
                    <li>\(\displaystyle \frac{9}{4} \)</li>
                    <li>\(\displaystyle 3\)</li>

                </ol>
                <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal20" aria-expanded="false" aria-controls="collapsesoal20">
                Alternatif Penyelesaian:
                </button>
                <div class="collapse" id="collapsesoal20">
                    <div class="card card-body overflow-auto">
                        <p>Pertama, kita perlu menentukan luas daerah \(D\). Daerah \(D\) dibatasi oleh garis \(x = 1\), garis \(x = 4\), sumbu \(x\), dan grafik fungsi \(y = \frac{1}{\sqrt{x}}\), seperti yang ditunjukkan pada gambar di bawah ini:
                            <br>
                            <img src="{{asset('asets/PAT/20_PAT2021.png')}}" alt="luasintegral" width="60%" class="img-fluid">
                            <br>
                            Luas daerah \(D\) adalah daerah yang diarsir, dapat dihitung sebagai jumlah dari luas segmen daerah tersebut, yaitu:

                            \begin{align*}
                            \text{Luas } D &= \int_{1}^{4} \frac{1}{\sqrt{x}} dx \\
                            &= \int_{1}^{4} x^{-\frac{1}{2}} dx \\
                            &= 2x^{\frac{1}{2}}]_{1}^4 \\
                            &= 2\sqrt{x}]_{1}^{4} \\
                            &=(2\sqrt{4})-(2\sqrt{1}) \\
                            &= 4-2 \\
                            &= 2
                            \end{align*}
                            Karena \(x=c\) membagi daerah D menjadi 2 bagian sama berarti luasnya 1 satuan luas dengan \(1 < c < 4 \) dimana \(D_1 = D_2\).
                            \begin{align*}
                            \int_{1}^{c} \frac{1}{\sqrt{x}} dx &= 1 \\
                            \int_{1}^{c} x^{-\frac{1}{2}} dx &= 1 \\
                            2x^{\frac{1}{2}}]_{1}^{c}  &= 1 \\
                            2\sqrt{x}]_{1}^{c} &= 1 \\
                            (2\sqrt{c})-(2\sqrt{1}) &= 1 \\
                            2\sqrt{c}-2 &= 1 \\
                            2\sqrt{c} &= 1+2 \\
                            2\sqrt{c} &= 3 \\
                            4(c) &= 9 \\
                            c &= \frac{9}{4} \\
                            \end{align*}
                            Jadi, nilai Luas yang dibatasi oleh kurva dan garis adalah \(\boxed{\frac{9}{4}}\) satuan luas.</p>
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

