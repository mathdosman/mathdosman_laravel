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
            <h2 class="text-center">PENILAIAN AKHIR TAHUN (PAT) 2023</h2>
            <h3 class="text-center text-danger fw-bold">MATEMATIKA WAJIB</h3>
            <p class="text-center fst-italic"> Math_Dosman</p>
            <hr />
            <p>Berikut merupakan soal Penilaian Akhir Tahun (PAT) tahun 2023 di SMA Negeri 1 Gianyar yang dibuat dalam bentuk 2 paket pilihan ganda, random menggunakan moodle sekolah</p>
            <p>Kelas : X MIPA/IPS</p>
            <p>Waktu : 90 Menit</p>
            <p>MATEMATIKA WAJIB</p>
            <hr>
<!--=======================  soal01A ===================================-->
<div class="border border-dark p-1" style="background-color:rgb(239, 255, 205);">
    <ol type="1" start="1">
    <li>Akar-akar persamaan kuadrat \( 2x^2+7x-15=0 \) adalah ... </li>
        <ol type="A">
            <li>\(5\) dan \(-4 \)</li>
            <li>\(4\) dan \(-3 \)</li>
            <li>\(3\) dan \(-2 \)</li>
            <li>\(2\) dan \(-1 \)</li>
            <li>\(1\) dan \(0 \)</li>
        </ol>
        <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal01a" aria-expanded="false" aria-controls="collapsesoal01a">
        Alternatif Penyelesaian:
        </button>
        <div class="collapse" id="collapsesoal01a">
            <div class="card card-body overflow-auto">
            <p>Untuk menemukan akar-akar persamaan kuadrat \(2x^2+7x-15=0\), kita dapat menggunakan metode faktorisasi, menggunaan rumus kuadrat, atau menggunakan metode lain seperti metode persamaan kuadrat lengkap atau metode numerik. Di sini, saya akan menggunakan rumus kuadrat untuk menemukan akar-akar persamaan tersebut.
                <br> <br>
                Dalam persamaan kuadrat umum \(ax^2+bx+c=0\), akar-akarnya dapat ditentukan oleh rumus kuadrat:

                \[x = \frac{-b \pm \sqrt{b^2-4ac}}{2a}\]

                Dalam persamaan \(2x^2+7x-15=0\), kita memiliki \(a = 2\), \(b = 7\), dan \(c = -15\). Sekarang, kita dapat menggantikan nilai-nilai ini ke dalam rumus kuadrat:

                \[x = \frac{-7 \pm \sqrt{7^2-4(2)(-15)}}{2(2)}\]

                Menghitung ekspresi di dalam akar kuadrat:

                \[x = \frac{-7 \pm \sqrt{49+120}}{4}\]
                \[x = \frac{-7 \pm \sqrt{169}}{4}\]
                \[x = \frac{-7 \pm 13}{4}\]

                Maka, akar-akar persamaan kuadrat \(2x^2+7x-15=0\) adalah:

                \[x_1 = \frac{-7 + 13}{4} = \frac{6}{4} = \frac{3}{2}\]

                \[x_2 = \frac{-7 - 13}{4} = \frac{-20}{4} = -5\]

                Jadi, akar-akar persamaan kuadrat \(2x^2+7x-15=0\) adalah \(\boxed{\displaystyle x = \frac{3}{2}}\) dan \(\boxed{x = -5}\).</p>
            <b class="text-end text-danger fw-bold"> <h3>JAWABAN : tidak ada jawaban yang sesuai tetapi kunci jawaban soal (A)</h3></b>
            </div>
        </div>
        <hr />
    </ol>
<!-- soal01b -->
    <ol type="1" start="1">
    <li>Akar-akar persamaan kuadrat \( 3-14x-5x^2 =0 \) adalah ...</li>
        <ol type="A">
            <li>\(0,2\) dan \(-3 \)</li>
            <li>\(0\) dan \(-2 \)</li>
            <li>\(1\) dan \(-1 \)</li>
            <li>\(0,4\) dan \(-4 \)</li>
            <li>\(0,5\) dan \(-5 \)</li>
        </ol>
        <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal01b" aria-expanded="false" aria-controls="collapsesoal01b">
        Alternatif Penyelesaian:
        </button>
        <div class="collapse" id="collapsesoal01b">
            <div class="card card-body overflow-auto">
                <p>Untuk menemukan akar-akar persamaan kuadrat \(3-14x-5x^2=0\), kita dapat menggunakan metode faktorisasi, rumus kuadrat, atau metode lainnya. Di sini, kita akan menggunakan rumus kuadrat.
                    <br><br>
                    Persamaan kuadrat \(3-14x-5x^2=0\) dapat ditulis dalam bentuk standar \(ax^2+bx+c=0\), di mana \(a = -5\), \(b = -14\), dan \(c = 3\).
                    <br><br>
                    Rumus kuadrat untuk mencari akar-akar persamaan kuadrat adalah sebagai berikut:

                    \[x = \frac{-b \pm \sqrt{b^2 - 4ac}}{2a}\]

                    Substitusikan nilai \(a\), \(b\), dan \(c\) ke dalam rumus kuadrat:

                    \[x = \frac{-(-14) \pm \sqrt{(-14)^2 - 4(-5)(3)}}{2(-5)}\]
                    \[x = \frac{14 \pm \sqrt{196 + 60}}{-10}\]
                    \[x = \frac{14 \pm \sqrt{256}}{-10}\]
                    \[x = \frac{14 \pm 16}{-10}\]

                    Sekarang, kita dapat menghitung kedua akar tersebut:

                    \[x_1 = \frac{14 + 16}{-10} = \frac{30}{-10} = -3\]
                    \[x_2 = \frac{14 - 16}{-10} = \frac{-2}{-10} = \frac{1}{5}\]

                    Jadi, akar-akar persamaan kuadrat \(3-14x-5x^2=0\) adalah \(\boxed{x = -3}\) dan \(\boxed{ \displaystyle  x = \frac{1}{5}=0,2}\).</p>
            <b class="text-end text-danger fw-bold"> <h3>JAWABAN : A</h3></b>
            </div>
        </div>
    </ol>
</div>
<!--=======================  soal02A ===================================-->
<div class="border border-dark mt-3 p-1" style="background-color:rgb(205, 255, 209);">
    <ol type="1" start="2">
        <li>Penyelesaian persamaan kuadrat \( 3x^2-8x+3=0 \) adalah ...</li>
            <ol type="A">
                <li>\(\displaystyle \frac{4+\sqrt(7)}{3} \) dan \(\displaystyle \frac{4-\sqrt(7)}{3} \)</li>
                <li>\(\displaystyle \frac{5+\sqrt(8)}{3} \) dan \(\displaystyle \frac{5-\sqrt(8)}{3} \)</li>
                <li>\(\displaystyle \frac{6+\sqrt(11)}{4} \) dan \(\displaystyle \frac{6-\sqrt(11)}{4} \)</li>
                <li>\(\displaystyle \frac{7+\sqrt(13)}{5} \) dan \(\displaystyle \frac{7-\sqrt(13)}{5} \)</li>
                <li>\( \displaystyle\frac{8+\sqrt(15)}{6} \) dan \(\displaystyle \frac{8-\sqrt(15)}{6} \)</li>
            </ol>
            <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal02a" aria-expanded="false" aria-controls="collapsesoal02a">
            Alternatif Penyelesaian:
            </button>
            <div class="collapse" id="collapsesoal02a">
                <div class="card card-body overflow-auto">
                <p>Berikut adalah penyelesaian menggunakan metode rumus kuadrat untuk persamaan kuadrat \(3x^2-8x+3=0\): </p>
                    <ol type="1">
                        <li>Identifikasi koefisien-koefisien persamaan kuadrat: \(a = 3\), \(b = -8\), \(c = 3\).</li>
                        <li>Gunakan rumus kuadrat: </li>
                        \[x = \frac{-b \pm \sqrt{b^2 - 4ac}}{2a}\]

                        <li>Substitusikan nilai-nilai koefisien ke dalam rumus kuadrat:</li>
                        \[x = \frac{-(-8) \pm \sqrt{(-8)^2 - 4 \cdot 3 \cdot 3}}{2 \cdot 3}\]

                        <li>eksplorasi dan perhitungan:</li>
                        \[x = \frac{8 \pm \sqrt{64 - 36}}{6}\]
                        \[x = \frac{8 \pm \sqrt{28}}{6}\]

                        <li>eksplorasi lebih lanjut akar kuadrat dari angka 28:</li>
                        \[x = \frac{8 \pm 2\sqrt{7}}{6}\]

                        <li>Sederhanakan pecahan:</li>
                        \[x = \frac{4 \pm \sqrt{7}}{3}\]

                    </ol>
                    <p>Jadi, penyelesaian persamaan kuadrat \(3x^2-8x+3=0\) adalah \(\boxed{\displaystyle x = \frac{4 + \sqrt{7}}{3}}\) dan \(\boxed{\displaystyle x = \frac{4 - \sqrt{7}}{3}}\).</p>
                <b class="text-end text-danger fw-bold"> <h3>JAWABAN : A</h3></b>
                </div>
            </div>
            <hr />
        </ol>
        <!-- soal02B -->
        <ol type="1" start="2">
        <li>Penyelesaian persamaan kuadrat \( 14+3x-2x^2=0 \) adalah ...</li>
            <ol type="A">
                <li>\(-2\) dan \(3,5\)</li>
                <li>\(-3\) dan \(4\)</li>
                <li>\(-1\) dan \(3\)</li>
                <li>\(0\) dan \(2,5\)</li>
                <li>\(-5\) dan \(5,5\)</li>
            </ol>
            <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal02b" aria-expanded="false" aria-controls="collapsesoal02b">
            Alternatif Penyelesaian:
            </button>
            <div class="collapse" id="collapsesoal02b">
                <div class="card card-body overflow-auto">
                    <p>Tentu, berikut adalah penyelesaian menggunakan metode rumus kuadrat untuk persamaan kuadrat \(14+3x-2x^2=0\):
                        <br><br>
                        1. Identifikasi koefisien-koefisien persamaan kuadrat: \(a = -2\), \(b = 3\), \(c = 14\).
                        <br><br>
                        2. Gunakan rumus kuadrat:
                        \[x = \frac{-b \pm \sqrt{b^2 - 4ac}}{2a}\]

                        3. Substitusikan nilai-nilai koefisien ke dalam rumus kuadrat:
                        \[x = \frac{-3 \pm \sqrt{3^2 - 4 \cdot (-2) \cdot 14}}{2 \cdot (-2)}\]

                        4. Vereksplorasi dan perhitungan:
                        \[x = \frac{-3 \pm \sqrt{9 + 112}}{-4}\]
                        \[x = \frac{-3 \pm \sqrt{121}}{-4}\]

                        5. Vereksplorasi lebih lanjut akar kuadrat dari angka 121:
                        \[x = \frac{-3 \pm 11}{-4}\]

                        6. Hitung kedua solusi:
                        \[x_1 = \frac{-3 + 11}{-4} = \frac{8}{-4} = -2\]
                        \[x_2 = \frac{-3 - 11}{-4} = \frac{-14}{-4} = \frac{7}{2}\]

                        Jadi, penyelesaian persamaan kuadrat \(14+3x-2x^2=0\) adalah \(\boxed{x = -2}\) dan \(\boxed{\displaystyle x = \frac{7}{2}=3,5}\).</p>
                <b class="text-end text-danger fw-bold"> <h3>JAWABAN : A</h3></b>
                </div>
            </div>
    </ol>
</div>
<!--=======================  soal03A ===================================-->
<div class="border border-dark mt-3 p-1" style="background-color:rgb(205, 242, 255);">
    <ol type="1" start="3">
        <li> Jenis akar-akar persamaan kuadrat \( x^2+7x-3=0 \) adalah ...</li>
            <ol type="A">
                <li>Persamaan kuadrat mempunyai dua akar riil berlainan.</li>
                <li>Persamaan kuadrat mempunyai dua akar riil yang sama.</li>
                <li>Persamaan kuadrat tidak mempunyai akar riil yang sama.</li>
                <li>Persamaan kuadrat mempunyai tiga akar riil yang berlainan.</li>
                <li>Persamaan kuadrat mempunyai satu akar riil.</li>
            </ol>
            <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal03a" aria-expanded="false" aria-controls="collapsesoal03a">
            Alternatif Penyelesaian:
            </button>
            <div class="collapse" id="collapsesoal03a">
                <div class="card card-body overflow-auto">
                <p>Untuk menentukan jenis akar-akar dari persamaan kuadrat \(x^2 + 7x - 3 = 0\), kita dapat menggunakan diskriminan. Diskriminan dinyatakan sebagai \(D = b^2 - 4ac\), di mana \(a\), \(b\), dan \(c\) adalah koefisien persamaan kuadrat.
                    <br><br>
                    Dalam persamaan \(x^2 + 7x - 3 = 0\), koefisien \(a = 1\), \(b = 7\), dan \(c = -3\). Mari kita hitung diskriminannya:
                    <br><br>
                    \(D = (7)^2 - 4(1)(-3) = 49 + 12 = 61\)
                    <br><br>
                    Jadi, diskriminan persamaan ini adalah 61.
                    <br><br>
                    Berdasarkan nilai diskriminan, kita dapat menentukan jenis akar-akar persamaan kuadrat: </p>
                    <ol>
                        <li>Jika \(D > 0\), maka persamaan memiliki akar-akar real dan berbeda.</li>
                        <li>Jika \(D = 0\), maka persamaan memiliki akar-akar real dan sama.</li>
                        <li>Jika \(D < 0\), maka persamaan tidak memiliki akar-akar real.</li>
                    </ol>
                    <br>
                    <p> Dalam kasus ini, \(D = 61\), yang berarti \(D > 0\). Oleh karena itu, persamaan \(x^2 + 7x - 3 = 0\) memiliki akar-akar real dan berbeda <br> \(\boxed{\text{Persamaan kuadrat mempunyai dua akar riil berlainan.}} \)</p>
                <b class="text-end text-danger fw-bold"> <h3>JAWABAN : A</h3></b>
                </div>
            </div>
        <hr />
    </ol>
    <!-- Soal03B -->
    <ol type="1" start="3">
        <li>Jenis akar-akar persamaan kuadrat \( 4x^2+28x+49=0 \) adalah ...</li>
            <ol type="A">
                <li>Persamaan kuadrat mempunyai dua akar riil berlainan.</li>
                <li>Persamaan kuadrat mempunyai dua akar riil yang sama.</li>
                <li>Persamaan kuadrat tidak mempunyai akar riil yang sama.</li>
                <li>Persamaan kuadrat mempunyai tiga akar riil yang berlainan.</li>
                <li>Persamaan kuadrat mempunyai satu akar riil.</li>
            </ol>
            <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal03b" aria-expanded="false" aria-controls="collapsesoal03b">
            Alternatif Penyelesaian:
            </button>
            <div class="collapse" id="collapsesoal03b">
                <div class="card card-body overflow-auto">
                <p>Untuk menentukan jenis akar-akar dari persamaan kuadrat \(4x^2 + 28x + 49 = 0\), kita perlu menghitung diskriminan persamaan tersebut. Diskriminan dinyatakan sebagai \(D = b^2 - 4ac\), di mana \(a\), \(b\), dan \(c\) adalah koefisien persamaan kuadrat.
                    <br><br>
                    Dalam persamaan \(4x^2 + 28x + 49 = 0\), koefisien \(a = 4\), \(b = 28\), dan \(c = 49\). Mari kita hitung diskriminannya:
                    <br><br>
                    \(D = (28)^2 - 4(4)(49) = 784 - 784 = 0\)
                    <br><br>
                    Jadi, diskriminan persamaan ini adalah 0.
                    <br><br>
                    Berdasarkan nilai diskriminan, kita dapat menentukan jenis akar-akar persamaan kuadrat: </p>
                    <ol>
                        <li>Jika \(D > 0\), maka persamaan memiliki akar-akar real dan berbeda.</li>
                        <li>Jika \(D = 0\), maka persamaan memiliki akar-akar real dan sama.</li>
                        <li>Jika \(D < 0\), maka persamaan tidak memiliki akar-akar real.</li>
                    </ol>
                    <br>
                   <p> Dalam kasus ini, \(D = 0\), yang berarti \(D = 0\). Oleh karena itu, persamaan \(4x^2 + 28x + 49 = 0\) memiliki akar-akar real dan sama.
                    <br> \(\boxed{\text{Persamaan kuadrat mempunyai dua akar riil yang sama.}} \)
                   </p>
                <b class="text-end text-danger fw-bold"> <h3>JAWABAN : B</h3></b>
                </div>
            </div>
    </ol>
</div>
<!-- ======================== SOAL04A ++++++++++++++++++++++++++ -->
<div class="border border-dark mt-3 p-1" style="background-color:rgb(244, 168, 198);">
<ol type="1" start="4">
    <li>Persamaan kuadrat yang akar-akarnya \( 2+\sqrt{3} \) dan \( 2-\sqrt{3} \) adalah ... </li>
    <ol type="A">
        <li>\( x^2-4x+1=0 \)</li>
        <li>\( x^2-3x-1=0 \)</li>
        <li>\( x^2-5x+2=0 \)</li>
        <li>\( x^2-6x-2=0 \)</li>
        <li>\( x^2-7x+4=0 \)</li>
    </ol>
    <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal04A" aria-expanded="false" aria-controls="collapsesoal04A">
    Alternatif Penyelesaian:
    </button>
    <div class="collapse" id="collapsesoal04A">
        <div class="card card-body overflow-auto">
        <p>Untuk menentukan persamaan kuadrat yang memiliki akar-akar \(2+\sqrt{3}\) dan \(2-\sqrt{3}\), kita dapat menggunakan hubungan antara akar-akar persamaan kuadrat dan koefisien persamaan tersebut.
            <br><br>
            Jika \(r\) dan \(s\) adalah akar-akar persamaan kuadrat \(ax^2 + bx + c = 0\), maka persamaan kuadrat tersebut dapat ditulis dalam bentuk faktor sebagai \((x-r)(x-s) = 0\).
            <br><br>
            Dalam kasus ini, akar-akar persamaan kuadrat adalah \(2+\sqrt{3}\) dan \(2-\sqrt{3}\). Oleh karena itu, persamaan kuadrat dapat ditulis sebagai:

            \[(x - (2+\sqrt{3}))(x - (2-\sqrt{3})) = 0\]

            Mari kita perluas persamaan ini:

            \[(x - 2 - \sqrt{3})(x - 2 + \sqrt{3}) = 0\]

            Untuk menyederhanakan persamaan tersebut, kita dapat menggunakan sifat perbedaan kuadrat, yaitu \((a - b)(a + b) = a^2 - b^2\):
            \begin{align*}
            (x - 2)^2 - (\sqrt{3})^2 & = 0 \\
            (x - 2)^2 - 3 &= 0 \\
            x^2 -4x + 4 -3 &= 0 \\
            x^2 -4x + 1 &= 0 \\
            \end{align*}
            Jadi, bentuk persamaan kuadrat yang memiliki akar-akar \(2+\sqrt{3}\) dan \(2-\sqrt{3}\) adalah \(\boxed{x^2 -4x + 1 = 0} \) </p>
        <b class="text-end text-danger fw-bold"> <h3>JAWABAN : A</h3></b>
        </div>
    </div>
    <hr>
</ol>
<!-- Soal04B -->
<ol type="1" start="4">
    <li>Persamaan kuadrat yang akar-akarnya \( -3+2\sqrt{5} \) dan \( -3-2\sqrt{5} \) adalah ... </li>
    <ol type="A">
        <li>\(x^2-4x+1=0 \)</li>
        <li>\(x^2-3x-1=0 \)</li>
        <li>\(x^2-5x+2=0 \)</li>
        <li>\(x^2-6x-2=0 \)</li>
        <li>\(x^2+6x-11=0 \)</li>
    </ol>
    <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal04B" aria-expanded="false" aria-controls="collapsesoal04B">
    Alternatif Penyelesaian:
    </button>
    <div class="collapse" id="collapsesoal04B">
        <div class="card card-body overflow-auto">
        <p>Untuk menentukan persamaan kuadrat yang memiliki akar-akar \(-3+2\sqrt{5}\) dan \(-3-2\sqrt{5}\), kita dapat menggunakan hubungan antara akar-akar persamaan kuadrat dan koefisien persamaan tersebut.
            <br><br>
            Jika \(r\) dan \(s\) adalah akar-akar persamaan kuadrat \(ax^2 + bx + c = 0\), maka persamaan kuadrat tersebut dapat ditulis dalam bentuk faktor sebagai \((x-r)(x-s) = 0\).
            <br><br>
            Dalam kasus ini, akar-akar persamaan kuadrat adalah \(-3+2\sqrt{5}\) dan \(-3-2\sqrt{5}\). Oleh karena itu, persamaan kuadrat dapat ditulis sebagai:

            \[(x - (-3+2\sqrt{5}))(x - (-3-2\sqrt{5})) = 0\]

            Mari kita perluas persamaan ini:

            \[(x + 3 - 2\sqrt{5})(x + 3 + 2\sqrt{5}) = 0\]

            Untuk menyederhanakan persamaan tersebut, kita dapat menggunakan sifat perbedaan kuadrat, yaitu \((a - b)(a + b) = a^2 - b^2\):
            \begin{align*}
            (x + 3)^2 - (2\sqrt{5})^2 &= 0\\
            (x + 3)^2 - 20 &= 0\\
            x^2+6x+9-20 &=0 \\
            x^2+6x-11 &=0 \\
            \end{align*}
            Jadi, bentuk persamaan kuadrat yang memiliki akar-akar \(-3+2\sqrt{5}\) dan \(-3-2\sqrt{5}\) adalah \(\boxed{x^2+6x-11 =0} \)</p>
        <b class="text-end text-danger fw-bold"> <h3>JAWABAN : E</h3></b>
        </div>
    </div>
</ol>
</div>
<!--=======================  soal05A ===================================-->
<div class="border border-dark mt-3 p-1" style="background-color:rgb(240, 189, 189);">
    <ol type="1" start="5">
        <li>Misalkan akar-akar persamaan kuadrat \( 3x^2+3x-5=0 \) adalah \( \alpha \) dan \( \beta \). Persamaan kuadrat yang akar-akarnya \( \alpha+8 \) dan \( \beta+8 \) adalah ...</li>
        <ol type="A">
            <li>\(3x^2-45x-163=0 \)</li>
            <li>\(3x^2-44x-162=0 \)</li>
            <li>\(2x^2-43x-161=0 \)</li>
            <li>\(x^2-5x-13=0 \)</li>
            <li>\(x^2-4x-16=0 \)</li>
        </ol>
        <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal05A" aria-expanded="false" aria-controls="collapsesoal05A">
        Alternatif Penyelesaian:
        </button>
        <div class="collapse" id="collapsesoal05A">
            <div class="card card-body overflow-auto">
                <p>Untuk mencari persamaan kuadrat yang memiliki akar-akar \( \alpha+8 \) dan \( \beta+8 \), kita dapat menggunakan hubungan antara akar-akar persamaan kuadrat dan koefisien persamaan kuadrat.
                    <br><br>
                    Jika \( \alpha \) dan \( \beta \) adalah akar-akar persamaan kuadrat \( 3x^2+3x-5=0 \), maka kita dapat menggunakan rumus hubungan antara akar-akar dan koefisien persamaan kuadrat:

                    \[ \alpha + \beta = \displaystyle-\frac{b}{a} \] \[ \alpha \beta =\displaystyle \frac{c}{a} \]

                    Dalam persamaan kuadrat \( 3x^2+3x-5=0 \), kita memiliki \( a = 3 \), \( b = 3 \), dan \( c = -5 \). Menggantikan nilai-nilai ini ke dalam rumus di atas, kita dapat menghitung nilai dari \( \alpha + \beta \) dan \( \alpha \beta \):

                    \[ \alpha + \beta = \displaystyle-\frac{3}{3} = -1 \]

                    \[ \alpha \beta =\displaystyle \frac{-5}{3} \]

                    Sekarang kita ingin mencari persamaan kuadrat baru dengan akar-akar \( \alpha+8 \) dan \( \beta+8 \). Untuk mencari persamaan ini, kita dapat menggunakan hubungan antara akar-akar dan koefisien persamaan kuadrat:
                    <br><br>
                    Jika \( x_1 \) dan \( x_2 \) adalah akar-akar persamaan kuadrat yang baru, maka kita dapat menggunakan rumus hubungan antara akar-akar dan koefisien persamaan kuadrat:

                    \[ x_1 + x_2 = \displaystyle-\frac{b}{a} \] \[ x_1 x_2 =\displaystyle \frac{c}{a} \]

                    Dalam persamaan kuadrat baru ini, kita dapat menggantikan \( \alpha+8 \) dan \( \beta+8 \) ke dalam rumus di atas dan mencari nilai-nilai tersebut:

                    \[ x_1 + x_2 = (\alpha+8) + (\beta+8) = \alpha + \beta + 16 \]

                    \[ x_1 x_2 = (\alpha+8)(\beta+8) = \alpha\beta + 8(\alpha + \beta) + 64 \]

                    Menggantikan nilai-nilai \( \alpha + \beta \) dan \( \alpha \beta \) yang telah kita hitung sebelumnya, kita dapat menyederhanakan persamaan tersebut:

                    \[ x_1 + x_2 = -1 + 16 = 15 \]
                    \begin{align*}
                     x_1 x_2 &=\displaystyle \frac{-5}{3} + 8(-1) + 64 \\
                     &=\displaystyle \frac{-5}{3} - 8 + 64 \\
                     &=\displaystyle \frac{-5}{3} +56 \\
                     &=\displaystyle \frac{-5}{3} +\displaystyle \frac{168}{3} \\
                     &=\displaystyle \frac{163}{3}
                    \end{align*}
                    <br>
                    Rumus persamaan kuadrat yang menghasilkan akar-akar \(x_1\) dan \(x_2\) dari persamaan kuadrat \(ax^2 + bx + c = 0\) adalah sebagai berikut:

                    \[x^2 - (x_1 + x_2)x + x_1x_2 = 0\]
                    \[x^2 - (15)x +\displaystyle \frac{163}{3} = 0\]
                    \[3x^2 - 45x + 163 = 0\]

                    Jadi, persamaan kuadrat yang akar-akarnya \( \alpha+8 \) dan \( \beta+8 \) adalah \( \boxed{3x^2 - 45x + 163 = 0} \).</p>
            <b class="text-end text-danger fw-bold"> <h3>JAWABAN : tidak ada jawaban, tapi jawaban yang mendekati adalah (A)</h3></b>
            </div>
        </div>
        <hr />
    </ol>
    <!-- soal05B -->
    <ol type="1" start="5">
        <li>Misalkan akar-akar persamaan kuadrat \( 3x^2+3x-5=0 \) adalah \( \alpha \) dan \( \beta \). Persamaan kuadrat yang akar-akarnya \( \alpha-3 \) dan \( \beta-3 \) adalah ...</li>
        <ol type="A">
            <li>\(3x^2-45x-163=0 \)</li>
            <li>\(3x^2-44x-162=0 \)</li>
            <li>\(2x^2-43x-161=0 \)</li>
            <li>\(x^2-5x-13=0 \)</li>
            <li>\(3x^2+21x+31=0 \)</li>
        </ol>
        <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal05B" aria-expanded="false" aria-controls="collapsesoal05B">
        Alternatif Penyelesaian:
        </button>
        <div class="collapse" id="collapsesoal05B">
            <div class="card card-body overflow-auto">
                <p>Untuk menjawab pertanyaan ini, kita dapat menggunakan hubungan antara akar-akar persamaan kuadrat dengan koefisien persamaan kuadrat yang diberikan.
                    <br><br>
                    Jika \( \alpha \) dan \( \beta \) adalah akar-akar persamaan kuadrat \( 3x^2+3x-5=0 \), maka kita dapat menggunakan rumus hubungan antara akar-akar dan koefisien persamaan kuadrat:

                    \[ \alpha + \beta = \displaystyle-\frac{b}{a} \] \[ \alpha \beta =\displaystyle \frac{c}{a} \]

                    Dalam persamaan kuadrat \( 3x^2+3x-5=0 \), kita dapat melihat bahwa \( a = 3 \), \( b = 3 \), dan \( c = -5 \). Menggantikan nilai-nilai ini ke dalam rumus di atas, kita dapat menghitung nilai dari \( \alpha + \beta \) dan \( \alpha \beta \):

                    \[ \alpha + \beta = \displaystyle-\frac{3}{3} = -1 \]

                    \[ \alpha \beta =\displaystyle \frac{-5}{3} \]

                    Sekarang kita ingin mencari persamaan kuadrat baru dengan akar-akar \( \alpha-3 \) dan \( \beta-3 \). Untuk mencari persamaan ini, kita dapat menggunakan hubungan antara akar-akar dan koefisien persamaan kuadrat:
                    <br><br>
                    Jika \( x_1 \) dan \( x_2 \) adalah akar-akar persamaan kuadrat yang baru, maka kita dapat menggunakan rumus hubungan antara akar-akar dan koefisien persamaan kuadrat:

                    \[ x_1 + x_2 = \displaystyle-\frac{b}{a} \] \[  x_1 x_2 =\displaystyle \frac{c}{a} \]

                    Dalam persamaan kuadrat baru ini, kita dapat menggantikan \( \alpha-3 \) dan \( \beta-3 \) ke dalam rumus di atas dan mencari nilai-nilai tersebut:

                    \[ x_1 + x_2 = (\alpha-3) + (\beta-3) = \alpha + \beta - 6 \]

                    \[ x_1 x_2 = (\alpha-3)(\beta-3) = \alpha\beta - 3(\alpha + \beta) + 9 \]

                    Menggantikan nilai-nilai \( \alpha + \beta \) dan \( \alpha \beta \) yang telah kita hitung sebelumnya, kita dapat menyederhanakan persamaan tersebut:

                    \[ x_1 + x_2 = -1 - 6 = -7 \]

                    \[x_1 x_2 =\displaystyle \frac{-5}{3} - 3(-1) + 9 =\displaystyle \frac{-5}{3} + 3 + 9 =\displaystyle \frac{31}{3} \]
                    <br><br>
                    Rumus persamaan kuadrat yang menghasilkan akar-akar \(x_1\) dan \(x_2\) dari persamaan kuadrat \(ax^2 + bx + c = 0\) adalah sebagai berikut:

                    \[x^2 - (x_1 + x_2)x + x_1x_2 = 0\]
                    \[x^2 - (-7)x +\displaystyle \frac{31}{3} = 0\]
                    \[3x^2 + 21x + 31 = 0\]


                    Jadi, persamaan kuadrat yang akar-akarnya \( \alpha-3 \) dan \( \beta-3 \) adalah \( \boxed{3x^2 + 21x + 31 = 0} \).</p>
            <b class="text-end text-danger fw-bold"> <h3>JAWABAN : E</h3></b>
            </div>
        </div>
    </ol>
    </div>
    <!-- SOAL end -->
    <!--=======================  soal06A ===================================-->
    <div class="border border-dark mt-3 p-1" style="background-color:rgb(234, 205, 255);">
    <ol type="1" start="6">
        <li>Persamaan kuadrat yang akar-akarnya berkebalikan dengan akar-akar persamaan kuadrat \( 5x^2-8x+2=0 \) adalah ...
        </li>
        <ol type="A">
            <li>\(x^2-16x+25=0 \)</li>
            <li>\(2x^2-x-8=0 \)</li>
            <li>\(3x^2-x-9=0 \)</li>
            <li>\(x^2-17x+35=0 \)</li>
            <li>\(5x^2-36x+125=0 \)</li>
        </ol>
        <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal06A" aria-expanded="false" aria-controls="collapsesoal06A">
        Alternatif Penyelesaian:
        </button>
        <div class="collapse" id="collapsesoal06A">
            <div class="card card-body overflow-auto">
                <p>Untuk mencari persamaan kuadrat yang memiliki akar-akarnya berkebalikan dengan akar-akar persamaan kuadrat \( 5x^2-8x+2=0 \), kita dapat menggunakan hubungan antara akar-akar persamaan kuadrat dan koefisien persamaan kuadrat.
                <br><br>
                    Misalkan \( \alpha \) dan \( \beta \) adalah akar-akar persamaan kuadrat \( 5x^2-8x+2=0 \). Akar-akar berkebalikan dari persamaan ini dapat dinyatakan sebagai \(\displaystyle \frac{1}{\alpha} \) dan \(\displaystyle \frac{1}{\beta} \).
                    <br><br>
                    Dalam persamaan kuadrat, hubungan antara akar-akar dan koefisien persamaan kuadrat adalah:

                    \[ \alpha + \beta = \displaystyle-\frac{b}{a} \] \[ \alpha \beta =\displaystyle \frac{c}{a} \]

                    Dalam persamaan kuadrat \( 5x^2-8x+2=0 \), kita memiliki \( a = 5 \), \( b = -8 \), dan \( c = 2 \). <br> Menggantikan nilai-nilai ini ke dalam rumus di atas, kita dapat menghitung nilai dari \( \alpha + \beta \) dan \( \alpha \beta \):

                    \[ \alpha + \beta = \displaystyle-\frac{-8}{5} =\displaystyle \frac{8}{5} \]

                    \[ \alpha \beta =\displaystyle \frac{2}{5} \]

                    Sekarang kita ingin mencari persamaan kuadrat baru dengan akar-akarnya \(\displaystyle \frac{1}{\alpha} \) dan \(\displaystyle \frac{1}{\beta} \). Untuk mencari persamaan ini, kita dapat menggunakan hubungan antara akar-akar dan koefisien persamaan kuadrat:
                    <br><br>
                    Jika \( x_1 \) dan \( x_2 \) adalah akar-akar persamaan kuadrat yang baru, maka kita dapat menggunakan rumus hubungan antara akar-akar dan koefisien persamaan kuadrat:

                    \[ x_1 + x_2 = \displaystyle-\frac{b}{a} \] \[ x_1 x_2 =\displaystyle \frac{c}{a} \]

                    Dalam persamaan kuadrat baru ini, kita dapat menggantikan \(\displaystyle \frac{1}{\alpha} \) dan \(\displaystyle \frac{1}{\beta} \) ke dalam rumus di atas dan mencari nilai-nilai tersebut:
                    \begin{align*}
                    x_1 + x_2 &= \left(\frac{1}{\alpha}\right) + \left(\frac{1}{\beta}\right) \\
                    &=\displaystyle \frac{\alpha + \beta}{\alpha \beta} \\
                    &=\displaystyle \frac{\frac{8}{5}}{\frac{2}{5}} \\
                    &=\displaystyle \frac{8}{2} \\
                    &= 4
                    \end{align*}

                    \begin{align*}
                    x_1 x_2 &= \left(\frac{1}{\alpha}\right)\left(\frac{1}{\beta}\right) \\
                    &=\displaystyle \frac{1}{\alpha \beta} \\
                    &=\displaystyle \frac{1}\displaystyle{\frac{2}{5}} \\
                    &=\displaystyle \frac{5}{2}
                    \end{align*}

                    Rumus persamaan kuadrat yang menghasilkan akar-akar \(x_1\) dan \(x_2\) dari persamaan kuadrat \(ax^2 + bx + c = 0\) adalah sebagai berikut:
                    \begin{align*}
                    x^2 - (x_1 + x_2)x + x_1x_2 &= 0 \\
                    x^2 - (4)x +\displaystyle \frac{5}{2} &= 0 \\
                    2x^2 - 8x + 5 &= 0 \\
                    \end{align*}

                    Jadi, persamaan kuadrat yang akar-akarnya berkebalikan dengan akar-akar persamaan kuadrat \( 5x^2-8x+2=0 \) adalah \( \boxed{2x^2 - 8x + 5 = 0} \).</p>
            <b class="text-end text-danger fw-bold"> <h3>JAWABAN : tidak ada jawaban, tetapi kunci menunjukan (A)</h3></b>
            </div>
        </div>
        <hr />
    </ol>
    <!-- soal06B -->
    <ol type="1" start="6">
        <li>Persamaan kuadrat yang akar-akarnya 2 kurangnya dari akar-akar persamaan kuadrat \( 2x^2-x-8=0 \) adalah ...</li>
        <ol type="A">
            <li>\(x^2-16x+25=0 \)</li>
            <li>\( 2x^2+7x-2=0\)</li>
            <li>\(3x^2-x-9=0 \)</li>
            <li>\(x^2-17x+35=0 \)</li>
            <li>\(5x^2-36x+125=0 \)</li>
        </ol>
        <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal06B" aria-expanded="false" aria-controls="collapsesoal06B">
        Alternatif Penyelesaian:
        </button>
        <div class="collapse" id="collapsesoal06B">
            <div class="card card-body overflow-auto">
                <p>Untuk mencari persamaan kuadrat yang memiliki akar-akarnya berbeda 2 dari akar-akar persamaan kuadrat \(2x^2 - x - 8 = 0\), kita dapat menggunakan hubungan antara akar-akar persamaan kuadrat dan koefisien persamaan kuadrat.
                    <br><br>
                    Misalkan \( \alpha \) dan \( \beta \) adalah akar-akar persamaan kuadrat \(2x^2 - x - 8 = 0\). Akar-akar yang berbeda 2 dari persamaan ini dapat dinyatakan sebagai \( \alpha - 2 \) dan \( \beta - 2 \).
                    <br><br>
                    Dalam persamaan kuadrat, hubungan antara akar-akar dan koefisien persamaan kuadrat adalah:

                    \[ \alpha + \beta = \displaystyle-\frac{b}{a} \] \[ \alpha \beta =\displaystyle \frac{c}{a} \]

                    Dalam persamaan kuadrat \(2x^2 - x - 8 = 0\), kita memiliki \( a = 2 \), \( b = -1 \), dan \( c = -8 \). Menggantikan nilai-nilai ini ke dalam rumus di atas, kita dapat menghitung nilai dari \( \alpha + \beta \) dan \( \alpha \beta \):
                    \begin{align*}
                    \alpha + \beta &= \displaystyle-\frac{-1}{2} \\
                    &=\displaystyle \frac{1}{2}
                    \end{align*}
                    \[ \alpha \beta =\displaystyle \frac{-8}{2} = -4 \]

                    Sekarang kita ingin mencari persamaan kuadrat baru dengan akar-akarnya \( \alpha - 2 \) dan \( \beta - 2 \). Untuk mencari persamaan ini, kita dapat menggunakan hubungan antara akar-akar dan koefisien persamaan kuadrat:
                    <br>
                    Jika \( x_1 \) dan \( x_2 \) adalah akar-akar persamaan kuadrat yang baru, maka kita dapat menggunakan rumus hubungan antara akar-akar dan koefisien persamaan kuadrat:

                    \[ x_1 + x_2 = \displaystyle-\frac{b}{a} \] \[ x_1 x_2 =\displaystyle \frac{c}{a} \]

                    Dalam persamaan kuadrat baru ini, kita dapat menggantikan \( \alpha - 2 \) dan \( \beta - 2 \) ke dalam rumus di atas dan mencari nilai-nilai tersebut:
                    \begin{align*}
                    x_1 + x_2 &= (\alpha - 2) + (\beta - 2) \\
                    &= \alpha + \beta - 4 \\
                    &=\displaystyle \frac{1}{2} - 4 \\
                    &=\displaystyle \frac{1}{2} -\displaystyle \frac{8}{2} \\
                    &= \displaystyle-\frac{7}{2}
                    \end{align*}

                    \begin{align*}
                    x_1 x_2 &= (\alpha - 2)(\beta - 2) \\
                    &= \alpha \beta - 2(\alpha + \beta) + 4 \\
                    &= -4 - 2\left(\frac{1}{2}\right) + 4 \\
                    &= -4 - 1 + 4 \\
                    &= -1
                    \end{align*}


                    Rumus persamaan kuadrat yang menghasilkan akar-akar \(x_1\) dan \(x_2\) dari persamaan kuadrat \(ax^2 + bx + c = 0\) adalah sebagai berikut:
                    \begin{align*}
                    x^2 - (x_1 + x_2)x + x_1x_2 &= 0 \\
                    x^2 - (\displaystyle-\frac{7}{2})x +(-1) &= 0 \\
                    2x^2 + 7x - 2 &= 0 \\
                    \end{align*}
                    Jadi, persamaan kuadrat yang memiliki akar-akarnya \( \alpha - 2 \) dan \( \beta - 2 \) adalah \( \boxed{2x^2 + 7x - 2 = 0} \).</p>
            <b class="text-end text-danger fw-bold"> <h3>JAWABAN : B</h3></b>
            </div>
        </div>
    </ol>
    </div>
    <!-- SOAL end -->
    <!--=======================  soal07A ===================================-->
    <div class="border border-dark mt-3 p-1" style="background-color:rgb(205, 255, 244);">
    <ol type="1" start="7">
        <li>Dua bilangan yang jumlahnya 18 dan hasil kalinya 72 adalah ... </li>
        <ol type="A">
            <li>\(6\) dan \(12 \)</li>
            <li>\(7\) dan \(14 \)</li>
            <li>\(8\) dan \(16 \)</li>
            <li>\(9\) dan \(18 \)</li>
            <li>\(10\) dan \(20 \)</li>
        </ol>
        <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal07A" aria-expanded="false" aria-controls="collapsesoal07A">
        Alternatif Penyelesaian:
        </button>
        <div class="collapse" id="collapsesoal07A">
            <div class="card card-body overflow-auto">
                <p>Untuk mencari dua bilangan yang jumlahnya 18 dan hasil kalinya 72, kita dapat menggunakan metode mencari faktor-faktor dari 72.
                    <br>
                    Faktor-faktor dari 72 adalah:
                    \begin{align*}
                    1 \times 72 &= 72 \\
                    2 \times 36 &= 72 \\
                    3 \times 24 &= 72 \\
                    4 \times 18 &= 72 \\
                    6 \times 12 &= 72 \\
                    8 \times 9 &= 72
                    \end{align*}

                    Dari faktor-faktor di atas, kita mencari pasangan bilangan yang jumlahnya 18. Dalam hal ini, pasangan bilangan yang memenuhi adalah 6 dan 12, karena 6 + 12 = 18.
                    <br><br>
                    Jadi, dua bilangan yang jumlahnya 18 dan hasil kalinya 72 adalah \(\boxed{6 \text{ dan } 12}\).</p>
                    <p class="border p-1 border-dark">Terlihat dari pilihan memang hanya (A) yang jika dijumlahkan menghasilkan 18</p>
                <b class="text-end text-danger fw-bold"> <h3>JAWABAN : A</h3></b>
            </div>
        </div>
        <hr />
    </ol>
    <!-- soal07B -->
    <ol type="1" start="7">
        <li>Panjang sisi miring sebuah segitiga siku-siku sama dengan 15 cm. Jika selisih panjang kedua sisi tegaknya sama dengan 3 cm, maka luas segitiga adalah ... \(cm^2\)</li>
        <ol type="A">
            <li>\(53 \)</li>
            <li>\(54 \)</li>
            <li>\(55 \)</li>
            <li>\(56 \)</li>
            <li>\(57 \)</li>
        </ol>
        <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal07B" aria-expanded="false" aria-controls="collapsesoal07B">
        Alternatif Penyelesaian:
        </button>
        <div class="collapse" id="collapsesoal07B">
            <div class="card card-body overflow-auto">
                <p>Untuk menemukan luas segitiga siku-siku, kita perlu mengetahui panjang kedua sisi tegaknya.
                    <br> <br>
                    Kita dapat menggunakan teorema Pythagoras untuk mencari panjang sisi tegaknya. Teorema Pythagoras menyatakan bahwa dalam segitiga siku-siku, kuadrat panjang sisi miring (hipotenusa) sama dengan jumlah kuadrat panjang kedua sisi tegaknya.
                    <br><br>
                    Dalam kasus ini, sisi miring memiliki panjang \(15\) cm, dan selisih panjang kedua sisi tegaknya adalah \(3\) cm. Kita dapat mengasumsikan salah satu sisi tegak memiliki panjang \(x\) cm. Dengan demikian, sisi tegak yang lain akan memiliki panjang \((x + 3)\) cm.
                    <br><br>
                    Berdasarkan teorema Pythagoras, kita dapat membentuk persamaan:
                    \begin{align*}
                    \text{(panjang sisi tegak)}^2 &+ \text{(panjang sisi tegak + selisih)}^2 = \text{(panjang sisi miring)}^2 \\
                    x^2 + (x + 3)^2 &= 15^2 \\
                    x^2 + (x^2 + 6x + 9) &= 225 \\
                    2x^2 + 6x - 216 &= 0 \\
                    x^2 + 3x - 108 &= 0
                    \end{align*}
                    Kita dapat mencari akar-akar persamaan kuadrat tersebut menggunakan rumus kuadrat atau faktorisasi. Dalam hal ini, kita dapat memfaktorkan persamaan menjadi:

                    \[(x - 9)(x + 12) = 0\]

                    Maka, ada dua kemungkinan nilai \(x\), yaitu \(x = 9\) atau \(x = -12\). Namun, panjang sisi tidak dapat bernilai negatif, jadi kita ambil \(x = 9\).
                    <br><br>
                    Jadi, panjang kedua sisi tegaknya adalah \(9\) cm dan \(12\) cm
                    <br><br>
                    Untuk menghitung luas segitiga, kita dapat menggunakan rumus luas segitiga: luas = (1/2) x alas x tinggi.

                    Alas segitiga adalah salah satu sisi tegaknya (dalam hal ini, \(9\) cm), dan tingginya adalah sisi tegak lainnya (dalam hal ini, \(12\) cm).

                    Jadi, luas segitiga \(\displaystyle =\displaystyle \frac{1}{2} \times 9 \times 12 = \boxed{54} \)cm².</p>
            <b class="text-end text-danger fw-bold"> <h3>JAWABAN : B</h3></b>
            </div>
        </div>
    </ol>
    </div>
    <!-- SOAL end -->
    <!--=======================  soal08A ===================================-->
    <div class="border border-dark mt-3 p-1" style="background-color:rgb(250, 255, 205);">
    <ol type="1" start="8">
        <li>Kharakteristik keterbukaan fungsi kuadrat \( f(x)=2x^2-13x+20 \) adalah ...</li>
        <ol type="A">
            <li>terbuka ke atas</li>
            <li>terbuka ke bawah</li>
            <li>terbuka ke kiri</li>
            <li>terbuka ke kanan</li>
            <li>tidak terbuka</li>
        </ol>
        <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal08A" aria-expanded="false" aria-controls="collapsesoal08A">
            Alternatif Penyelesaian:
        </button>
        <div class="collapse" id="collapsesoal08A">
            <div class="card card-body overflow-auto">
                <p>Untuk menentukan karakteristik keterbukaan fungsi kuadrat \( f(x) = 2x^2 - 13x + 20 \), kita perlu mengetahui tanda koefisien \( a \) pada bentuk umum fungsi kuadrat \( f(x) = ax^2 + bx + c \).
                    <br><br>
                    Dalam kasus ini, koefisien \( a \) adalah 2. Jika \( a > 0 \), maka fungsi kuadrat akan membuka ke atas, sedangkan jika \( a < 0 \), fungsi kuadrat akan membuka ke bawah.
                    <br><br>
                    Dalam fungsi kuadrat \( f(x) = 2x^2 - 13x + 20 \), karena \( a = 2 > 0 \), maka fungsi kuadrat membuka ke atas.
                    <br><br>
                    Jadi, karakteristik keterbukaan fungsi kuadrat \( f(x) = 2x^2 - 13x + 20 \) adalah membuka ke atas.</p>
            <b class="text-end text-danger fw-bold"> <h3>JAWABAN : A</h3></b>
            </div>
        </div>
        <hr />
    </ol>
    <!-- soal08B -->
    <ol type="1" start="8">
        <li>Kharakteristik keterbukaan fungsi kuadrat \( f(x)=-5x^2+8x+21 \) adalah ...</li>
        <ol type="A">
            <li>terbuka ke atas</li>
            <li>terbuka ke bawah</li>
            <li>terbuka ke kiri</li>
            <li>terbuka ke kanan</li>
            <li>tidak terbuka</li>
        </ol>
        <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal08B" aria-expanded="false" aria-controls="collapsesoal08B">
        Alternatif Penyelesaian:
        </button>
        <div class="collapse" id="collapsesoal08B">
            <div class="card card-body overflow-auto">
                <p>Untuk menentukan karakteristik keterbukaan fungsi kuadrat \( f(x) = -5x^2 + 8x + 21 \), kita perlu mengetahui tanda koefisien \( a \) pada bentuk umum fungsi kuadrat \( f(x) = ax^2 + bx + c \).
                    <br><br>
                    Dalam kasus ini, koefisien \( a \) adalah -5. Jika \( a > 0 \), maka fungsi kuadrat akan membuka ke atas, sedangkan jika \( a < 0 \), fungsi kuadrat akan membuka ke bawah.
                    <br><br>
                    Dalam fungsi kuadrat \( f(x) = -5x^2 + 8x + 21 \), karena \( a = -5 < 0 \), maka fungsi kuadrat membuka ke bawah.
                    <br><br>
                    Jadi, karakteristik keterbukaan fungsi kuadrat \( f(x) = -5x^2 + 8x + 21 \) adalah membuka ke bawah.</p>
            <b class="text-end text-danger fw-bold"> <h3>JAWABAN : B</h3></b>
            </div>
        </div>
    </ol>
    </div>
    <!-- SOAL end -->

    <!--=======================  soal09A ===================================-->
    <div class="border border-dark mt-3 p-1" style="background-color:rgb(255, 222, 205);">
    <ol type="1" start="9">
        <li>Nilai \( m \) agar grafik fungsi kuadrat \( f(x)=x^2+(m+1)x+(3m-5) \) menyinggung sumbu \( x \) adalah ...</li>
        <ol type="A">
            <li>\( m=7 \) dan \( m=3 \)</li>
            <li>\( m=6 \) dan \( m=2 \)</li>
            <li>\( m=8 \) dan \( m=4 \)</li>
            <li>\( m=9 \) dan \( m=5 \)</li>
            <li>\( m=10 \) dan \( m=6 \)</li>
        </ol>
        <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal09A" aria-expanded="false" aria-controls="collapsesoal09A">
        Alternatif Penyelesaian:
        </button>
        <div class="collapse" id="collapsesoal09A">
            <div class="card card-body overflow-auto">
                <p>Untuk menentukan nilai \( m \) agar grafik fungsi kuadrat \( f(x) = x^2 + (m+1)x + (3m-5) \) menyinggung sumbu \( x \), kita perlu memeriksa kondisi ketika grafik menyentuh sumbu \( x \). Ketika grafik menyentuh sumbu \( x \), berarti terdapat satu titik di mana nilai \( y \) atau \( f(x) \) sama dengan nol.
                    <br><br>
                    Dalam kasus ini, jika grafik menyentuh sumbu \( x \), maka ada satu titik di mana \( f(x) = 0 \). Jadi, kita perlu mencari nilai \( x \) yang memenuhi \( f(x) = 0 \).
                    <br><br>
                    Menggantikan \( f(x) \) dengan nol, kita dapat membentuk persamaan kuadrat:

                    \[ x^2 + (m+1)x + (3m-5) = 0 \]

                    Untuk menyentuh sumbu \( x \), diskriminan persamaan kuadrat harus sama dengan nol. Diskriminan dapat dihitung dengan rumus \( D = b^2 - 4ac \), di mana \( a \), \( b \), dan \( c \) adalah koefisien persamaan kuadrat.
                    <br><br>
                    Dalam kasus ini, \( a = 1 \), \( b = (m+1) \), dan \( c = (3m-5) \). Jadi, kita memiliki:

                    \[ D = (m+1)^2 - 4(1)(3m-5) \]

                    Kita setel diskriminan menjadi nol:

                    \[ (m+1)^2 - 4(1)(3m-5) = 0 \]

                    Sekarang kita dapat menyelesaikan persamaan kuadrat tersebut untuk mencari nilai \( m \). Setelah memperluas dan menyederhanakan persamaan, kita dapat mengubahnya menjadi bentuk kuadrat sempurna:

                    \[ m^2 + 2m + 1 - 12m + 20 = 0 \]
                    \[ m^2 - 10m + 21 = 0 \]

                    Persamaan ini dapat difaktorkan menjadi:

                    \[ (m - 3)(m - 7) = 0 \]

                    Karena kita mencari nilai \( m \), maka solusinya adalah \( m = 3 \) atau \( m = 7 \).

                    Jadi, nilai \( m \) agar grafik fungsi kuadrat \( f(x) = x^2 + (m+1)x + (3m-5) \) menyinggung sumbu \( x \) adalah \( \boxed{m = 3} \) atau \( \boxed{m = 7} \).</p>
            <b class="text-end text-danger fw-bold"> <h3>JAWABAN : A</h3></b>
            </div>
        </div>
        <hr />
    </ol>
    <!-- soal09B -->
    <ol type="1" start="9">
        <li>Batas-batas nilai \( m   \) agar fungsi kuadrat \( f ( x)=(3m+1)x^2-(m+3)x+1 \) memotong sumbu \( x   \) di dua titik yang berbeda adalah ...</li>
        <ol type="A">
            <li>\( m < 1 \) atau \( m > 5 \)</li>
            <li>\( m < 2 \) atau \( m > 6 \)</li>
            <li>\( m < 0 \) atau \( m > 4 \)</li>
            <li>\( m < -1 \) atau \( m > 3 \)</li>
            <li>\( m < 4 \) atau \( m > 8 \) </li>
        </ol>
        <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal09B" aria-expanded="false" aria-controls="collapsesoal09B">
        Alternatif Penyelesaian:
        </button>
        <div class="collapse" id="collapsesoal09B">
            <div class="card card-body overflow-auto">
                <p>Untuk menentukan batas-batas nilai \( m \) agar fungsi kuadrat \( f(x) = (3m+1)x^2 - (m+3)x + 1 \) memotong sumbu \( x \) di dua titik yang berbeda, kita perlu memeriksa kondisi diskriminan persamaan kuadrat.
                    <br><br>
                    Ketika fungsi kuadrat memotong sumbu \( x \) di dua titik yang berbeda, diskriminan persamaan kuadrat harus lebih besar dari nol (\( D > 0 \)). Diskriminan dapat dihitung dengan rumus \( D = b^2 - 4ac \), di mana \( a \), \( b \), dan \( c \) adalah koefisien persamaan kuadrat.
                    <br><br>
                    Dalam kasus ini, \( a = 3m+1 \), \( b = -(m+3) \), dan \( c = 1 \). Jadi, kita memiliki:

                    \[ D = [-(m+3)]^2 - 4(3m+1)(1) \]
                    \[ D = (m+3)^2 - 12m - 4 \]

                    Kita atur diskriminan \( D \) menjadi lebih besar dari nol:

                    \[ (m+3)^2 - 12m - 4 > 0 \]

                    Sekarang kita perlu mencari batas-batas nilai \( m \) yang memenuhi ketidaksetaraan tersebut. Untuk melakukan itu, kita dapat menyelesaikan persamaan kuadrat tersebut. Setelah memperluas dan menyederhanakan persamaan, kita dapat mengubahnya menjadi bentuk kuadrat sempurna:

                    \[ m^2 + 6m + 9 - 12m - 4 > 0 \]
                    \[ m^2 - 6m + 5 > 0 \]

                    Persamaan ini dapat difaktorkan menjadi:

                    \[ (m-1)(m-5) > 0 \]

                    Untuk menentukan batas-batas nilai \( m \), kita perlu memeriksa tanda ekspresi \( (m-1)(m-5) \) di antara faktor-faktornya. </p>
                    <ul>
                        <li>Ketika \( m < 1 \), baik \( (m-1) \) maupun \( (m-5) \) bernilai negatif, sehingga ekspresi \( (m-1)(m-5) \) bernilai positif (\( > 0 \)).</li>
                        <li>Ketika \( 1 < m < 5 \), \( (m-1) \) bernilai positif dan \( (m-5) \) bernilai negatif, sehingga ekspresi \( (m-1)(m-5) \) bernilai negatif (\( < 0 \)).</li>
                        <li>Ketika \( m > 5 \), baik \( (m-1) \) maupun \( (m-5) \) bernilai positif, sehingga ekspresi \( (m-1)(m-5) \) bernilai positif (\( > 0 \)).</li>
                    </ul>
                    <p>
                    Berdasarkan analisis tersebut, kita dapat menyimpulkan bahwa batas-batas nilai \( m \) agar fungsi kuadrat \( f(x) = (3m+1)x^2 - (m+3)x + 1 \) memotong sumbu \( x \) di dua titik yang berbeda adalah \(m < 1 \) atau \( m > 5 \).
                    <br><br>
                    Jadi, batas-batas nilai \( m \) adalah \( \boxed{m < 1} \) atau \( \boxed{m > 5} \).</p>
            <b class="text-end text-danger fw-bold"> <h3>JAWABAN : A</h3></b>
            </div>
        </div>
    </ol>
    </div>
    <!-- SOAL end -->

    <!--=======================  soal10A ===================================-->
    <div class="border border-dark mt-3 p-1" style="background-color:rgb(208, 255, 205);">
    <ol type="1" start="10">
        <li>Sumbu simetri dan nilai ekstrim fungsi kuadrat \( f(x) = 2x^2-9x-35 \) adalah ...</li>
        <ol type="A">
            <li>\( x=-2 \) dan \( y=-36 \)</li>
            <li>\( x=2 \) dan \( y=49 \)</li>
            <li>\( x=\displaystyle \frac{9}{4} \) dan \( y=\displaystyle \frac{-361}{8} \)</li>
            <li>\( x=\displaystyle \frac{-11}{21} \) dan \( y=\displaystyle \frac{361}{24} \)</li>
            <li>\( x= 3 \) dan \( y= -3 \)</li>
        </ol>
        <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal10A" aria-expanded="false" aria-controls="collapsesoal10A">
        Alternatif Penyelesaian:
        </button>
        <div class="collapse" id="collapsesoal10A">
            <div class="card card-body overflow-auto">
                <p>Untuk menemukan sumbu simetri dan nilai ekstrim fungsi kuadrat \( f(x) = 2x^2 - 9x - 35 \), kita dapat menggunakan rumus sumbu simetri dan rumus nilai ekstrim. </p>
                    <br><br>
                    <ol>
                        <li> Sumbu Simetri:</li>
                        Sumbu simetri fungsi kuadrat diberikan oleh rumus \(\displaystyle x = -\frac{b}{2a} \), di mana \( a \) dan \( b \) adalah koefisien persamaan kuadrat \( f(x) = ax^2 + bx + c \).
                     <br><br>
                        Dalam fungsi kuadrat \( f(x) = 2x^2 - 9x - 35 \), kita memiliki \( a = 2 \) dan \( b = -9 \). Substitusikan nilai-nilai ini ke rumus sumbu simetri:
                        \begin{align*}
                        x &= -\frac{-9}{2(2)} \\
                        &= \frac{9}{4}
                        \end{align*}

                        Jadi, sumbu simetri fungsi kuadrat adalah \(\displaystyle x = \frac{9}{4} \).
                        <li>Nilai Ekstrim:</li>
                        Nilai ekstrim fungsi kuadrat terjadi saat \( x \) sama dengan nilai sumbu simetri. Untuk menemukan nilai ekstrim, substitusikan \(\displaystyle x = \frac{9}{4} \) ke dalam fungsi \( f(x) \).
                        \begin{align*}
                        f(x) &= 2x^2 - 9x - 35 \\
                        f\left(\frac{9}{4}\right) &= 2\left(\frac{9}{4}\right)^2 - 9\left(\frac{9}{4}\right) - 35 \\
                        &= \frac{81}{8} - \frac{81}{4} - 35 \\
                        &= \frac{81}{8} - \frac{162}{8} - \frac{280}{8} \\
                        &= - \frac{361}{8} \\
                        \end{align*}
                        Jadi, nilai ekstrim fungsi kuadrat adalah \(\displaystyle -\frac{361}{8} \).
                    </ol>
                    <br>
                    <p>
                    Dengan demikian, sumbu simetri fungsi kuadrat \( f(x) = 2x^2 - 9x - 35 \) adalah \( \boxed{x = \frac{9}{4} }\) dan nilai ekstrimnya adalah \( \boxed{-\frac{361}{8}} \).</p>
            <b class="text-end text-danger fw-bold"> <h3>JAWABAN : C</h3></b>
            </div>
        </div>
        <hr />
    </ol>
    <!-- soal10B -->
    <ol type="1" start="10">
        <li>Sumbu simetri dan nilai ekstrim fungsi kuadrat \( f(x) = -6x^2-11x-10 \) adalah ...</li>
        <ol type="A">
            <li>\( x=-2 \) dan \( y=-36 \)</li>
            <li>\( x=2 \) dan \( y=49 \)</li>
            <li>\( x=\displaystyle \frac{9}{4} \) dan \( y=\displaystyle \frac{-361}{8} \)</li>
            <li>\( x=\displaystyle \frac{-11}{21} \) dan \( y=\displaystyle \frac{361}{24} \)</li>
            <li>\( x= 3 \) dan \( y= -3 \)</li>
        </ol>
        <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal10B" aria-expanded="false" aria-controls="collapsesoal10B">
        Alternatif Penyelesaian:
        </button>
        <div class="collapse" id="collapsesoal10B">
            <div class="card card-body overflow-auto">
                <p>Untuk menemukan sumbu simetri dan nilai ekstrim fungsi kuadrat \( f(x) = -6x^2 - 11x - 10 \), kita dapat menggunakan rumus sumbu simetri dan rumus nilai ekstrim. </p>
                <ol>
                    <li>Sumbu Simetri:</li>
                    Sumbu simetri fungsi kuadrat diberikan oleh rumus \(\displaystyle x = -\frac{b}{2a} \), di mana \( a \) dan \( b \) adalah koefisien persamaan kuadrat \( f(x) = ax^2 + bx + c \).
                    <br><br>
                    Dalam fungsi kuadrat \( f(x) = -6x^2 - 11x - 10 \), kita memiliki \( a = -6 \) dan \( b = -11 \). Substitusikan nilai-nilai ini ke rumus sumbu simetri:
                    \begin{align*}
                    x &= -\frac{-11}{2(-6)} \\
                    &= -\frac{-11}{-12} \\
                    &= -\frac{11}{12}
                    \end{align*}
                    Jadi, sumbu simetri fungsi kuadrat adalah \( \displaystyle x = -\frac{11}{12} \).
                    <li>Nilai Ekstrim:</li>
                    Nilai ekstrim fungsi kuadrat terjadi saat \( x \) sama dengan nilai sumbu simetri. Untuk menemukan nilai ekstrim, substitusikan \(\displaystyle x = -\frac{11}{12} \) ke dalam fungsi \( f(x) \).
                    \begin{align*}
                    f(x) &= -6x^2 - 11x - 10 \\
                    f\left(-\frac{11}{12}\right) &= -6\left(-\frac{11}{12}\right)^2 - 11\left(-\frac{11}{12}\right) - 10 \\
                    &= -6\left(\frac{121}{144}\right) + \frac{121}{12} - 10 \\
                    &= \left(-\frac{121}{24}\right) + \frac{242}{24} - \frac{240}{24} \\
                    &= -\frac{119}{24}
                    \end{align*}
                    Jadi, nilai ekstrim fungsi kuadrat adalah \(\displaystyle y = -\frac{119}{24} \).
                </ol>
                    <br>
                    <p>
                    Dengan demikian, sumbu simetri fungsi kuadrat \( f(x) = -6x^2 - 11x - 10 \) adalah \( \boxed{x = -\frac{11}{12}} \) dan nilai ekstrimnya adalah \( \displaystyle \boxed{y=-\frac{119}{24}} \).</p>
            <b class="text-end text-danger fw-bold"> <h3>JAWABAN : tidak ada pilihan yang benar, tetapi kunci menunjukan jawabanya (D)</h3></b>
            </div>
        </div>
    </ol>
</div>
    <!--=======================  soal11A ===================================-->
    <div class="border border-dark mt-3 p-1" style="background-color:rgb(207, 205, 255);">
    <ol type="1" start="11">
        <li>Grafik fungsi kuadrat yang tepat untuk fungsi \( f(x)=x^2+3x-10 \) adalah ...</li>
        <ol type="A">
            <li><img src="/home/PAT/2023_X/11a_a.png" alt="jawabanA" width="70%"> </li>
            <br>
            <li><img src="/home/PAT/2023_X/11a_b.png" alt="jawabanB" width="70%"> </li>
            <br>
            <li><img src="/home/PAT/2023_X/11a_c.png" alt="jawabanC" width="70%"> </li>
            <br>
            <li><img src="/home/PAT/2023_X/11a_d.png" alt="jawabanD" width="70%"> </li>
            <br>
            <li><img src="/home/PAT/2023_X/11a_e.png" alt="jawabanE" width="70%"> </li>
        </ol>
        <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal11A" aria-expanded="false" aria-controls="collapsesoal11A">
        Alternatif Penyelesaian:
        </button>
        <div class="collapse" id="collapsesoal11A">
            <div class="card card-body overflow-auto">
                <p>Untuk menentukan grafik fungsi kuadrat \( f(x) = x^2 + 3x - 10 \), ada beberapa langkah yang dapat Anda ikuti: </p>
                    <ol>
                        <li>Tentukan titik potong dengan sumbu \( x \): Untuk menemukan titik potong dengan sumbu \( x \), atur \( f(x) \) sama dengan nol dan selesaikan persamaan kuadratik tersebut. Dalam kasus ini, kita memiliki \( f(x) = x^2 + 3x - 10 = 0 \). </li>
                        \begin{align*}
                        x^2 + 3x - 10 &= 0 \\
                        (x+5)(x-2) &= 0 \\
                        x = -5 &\text{ atau } x = 2
                        \end{align*}
                        Oleh karena itu, titik potong dengan sumbu \( x \) adalah \( (2, 0) \) dan \( (-5, 0) \).
                        <li>Tentukan titik potong dengan sumbu \( y \): Untuk menentukan titik potong dengan sumbu \( y \), atur \( x = 0 \) dalam fungsi \( f(x) \). Dalam kasus ini, kita memiliki \( f(0) = (0)^2 + 3(0) - 10 = -10 \). Jadi, titik potong dengan sumbu \( y \) adalah \( (0, -10) \).</li>
                        <li>Tentukan apakah parabola membuka ke atas atau ke bawah: Dalam fungsi kuadratik \( f(x) = x^2 + 3x - 10 \), koefisien \( a \) di depan \( x^2 \) adalah positif, yaitu \( a = 1 \). Ini berarti bahwa parabola membuka ke atas.</li>
                        <li>Tentukan sumbu simetri: Sumbu simetri adalah garis vertikal yang membagi parabola menjadi dua bagian yang simetris. Untuk menemukan sumbu simetri, gunakan rumus \( x = -\frac{b}{2a} \). Dalam kasus ini, \( a = 1 \) dan \( b = 3 \). Menggantikan nilai-nilai ini, kita dapat menghitung:</li>
                        \begin{align*}
                        x &= -\frac{3}{2(1)} \\
                        &= -\frac{3}{2}
                        \end{align*}
                        Jadi, sumbu simetri adalah \( \displaystyle x = -\frac{3}{2} \).
                    </ol>
                   <p> Dengan langkah-langkah di atas, Anda dapat menggambarkan grafik fungsi kuadrat \( f(x) = x^2 + 3x - 10 \).</p>
            <b class="text-end text-danger fw-bold"> <h3>JAWABAN : D</h3></b>
            </div>
        </div>
        <hr />
    </ol>
    <!-- soal11B -->
    <ol type="1" start="11">
        <li>Grafik fungsi kuadrat yang tepat untuk fungsi \( f(x)=x^2-7x+12 \) adalah ...</li>
        <ol type="A">
            <li><img src="/home/PAT/2023_X/11b_a.png" alt="jawabanA" width="70%"> </li>
            <br>
            <li><img src="/home/PAT/2023_X/11b_b.png" alt="jawabanB" width="70%"> </li>
            <br>
            <li><img src="/home/PAT/2023_X/11b_c.png" alt="jawabanC" width="70%"> </li>
            <br>
            <li><img src="/home/PAT/2023_X/11b_d.png" alt="jawabanD" width="70%"> </li>
            <br>
            <li><img src="/home/PAT/2023_X/11b_e.png" alt="jawabanE" width="70%"> </li>
        </ol>
        <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal11B" aria-expanded="false" aria-controls="collapsesoal11B">
        Alternatif Penyelesaian:
        </button>
        <div class="collapse" id="collapsesoal11B">
            <div class="card card-body overflow-auto">
                <p>Untuk menentukan grafik fungsi kuadrat \( f(x) = x^2 - 7x + 12 \), berikut adalah langkah-langkah yang dapat Anda ikuti: </p>
                <ol>
                    <li>Tentukan titik potong dengan sumbu \( x \): Untuk menemukan titik potong dengan sumbu \( x \), atur \( f(x) \) sama dengan nol dan selesaikan persamaan kuadratik tersebut. Dalam kasus ini, kita memiliki \( f(x) = x^2 - 7x + 12 = 0 \).</li>
                    Kita dapat mencoba faktorisasi persamaan kuadratik dengan mencari pasangan faktor dari 12 yang ketika ditambahkan menghasilkan -7. Dalam kasus ini, pasangan faktor yang tepat adalah -3 dan -4. Sehingga kita dapat faktorkan persamaan kuadratik menjadi \((x - 3)(x - 4) = 0 \to x= 3 \text{ atau } x = 4\). <br>
                    Oleh karena itu, titik potong dengan sumbu \( x \) adalah \( (3,0) \) dan \( (4,0) \).
                    <li>Tentukan titik potong dengan sumbu \( y \): Untuk menentukan titik potong dengan sumbu \( y \), atur \( x = 0 \) dalam fungsi \( f(x) \). Dalam kasus ini, kita memiliki \( f(0) = (0)^2 - 7(0) + 12 = 12 \). Jadi, titik potong dengan sumbu \( y \) adalah \( (0, 12) \).</li>
                    <li>Tentukan apakah parabola membuka ke atas atau ke bawah: Dalam fungsi kuadratik \( f(x) = x^2 - 7x + 12 \), koefisien \( a \) di depan \( x^2 \) adalah positif, yaitu \( a = 1 \). Ini berarti bahwa parabola membuka ke atas.</li>
                    <li>Tentukan sumbu simetri: Sumbu simetri adalah garis vertikal yang membagi parabola menjadi dua bagian yang simetris. Untuk menemukan sumbu simetri, gunakan rumus \( x = -\frac{b}{2a} \). Dalam kasus ini, \( a = 1 \) dan \( b = -7 \). Menggantikan nilai-nilai ini, kita dapat menghitung:</li>
                    \begin{align*}
                    x &= -\frac{-7}{2(1)}
                    &= \frac{7}{2}
                    \end{align*}
                    Jadi, sumbu simetri adalah \(\displaystyle x = \frac{7}{2} \).
                </ol>
               <p> Dengan langkah-langkah di atas, Anda dapat menggambarkan grafik fungsi kuadrat \( f(x) = x^2 - 7x + 12 \).</p>
            <b class="text-end text-danger fw-bold"> <h3>JAWABAN : A</h3></b>
            </div>
        </div>
    </ol>
    </div>
    <!-- SOAL end -->
    <!--=======================  soal12A ===================================-->
    <div class="border border-dark mt-3 p-1" style="background-color:rgb(255, 205, 205);">
    <ol type="1" start="12">
        <li>Persamaan fungsi kuadrat yang kurvanya melalui titik \((-5, 0)\) dan \((2, 0)\) serta memotong sumbu-y di titik \((0, -10)\) adalah ...</li>
        <ol type="A">
            <li>\( y=x^2+3x-10 \)</li>
            <li>\( y=-2x^2+16x-32 \)</li>
            <li>\( y=-x^2+4x-7 \)</li>
            <li>\( y=x^2+x-2 \)</li>
            <li>\( y=-3x^2+6x \)</li>
        </ol>
        <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal12A" aria-expanded="false" aria-controls="collapsesoal12A">
        Alternatif Penyelesaian:
        </button>
        <div class="collapse" id="collapsesoal12A">
            <div class="card card-body overflow-auto">
                <p>Dalam kasus ini kita dapat menggunakan rumus \(y = a(x - x_1)(x - x_2)\) dengan \(x_1\) dan \(x_2\) sebagai titik potong sumbu \(x\) yang diketahui, yaitu \(-5\) dan \(2\).
                    <br><br>
                    Langkah-langkahnya sebagai berikut: </p>
                    <ol>
                        <li>Gantikan nilai \(x_1\) dan \(x_2\) ke dalam rumus:</li>
                        \(y = a(x - (-5))(x - 2)\) atau lebih sederhananya \(y = a(x + 5)(x - 2)\).
                        <li>Substitusikan titik yang dilalui parabola, yaitu \((0, -10)\), ke dalam persamaan tersebut:</li>
                        \(-10 = a(0 + 5)(0 - 2)\).
                        <li>Selesaiakan persamaan tersebut:</li>
                        \(-10 = -10a\).
                        <li>Selesaikan persamaan untuk mencari nilai \(a\):</li>
                        \(a = 1\).
                        <li>Substitusikan nilai \(a\) yang telah ditemukan ke dalam rumus persamaan parabola:</li>
                        \(y = 1(x + 5)(x - 2)\). <br>
                    </ol>
                   <p>Jadi, persamaan fungsi kuadrat yang memenuhi kondisi tersebut adalah \(y = (x + 5)(x - 2) \) atau \(\boxed{y = x^2 +3x - 10} \).</p>
            <b class="text-end text-danger fw-bold"> <h3>JAWABAN : A</h3></b>
            </div>
        </div>
        <hr />
    </ol>
    <!-- soal12B -->
    <ol type="1" start="12">
        <li>Persamaan fungsi kuadrat yang menyinggung sumbu-x di titik \((4, 0)\) dan melalui titik \((6, -8)\) adalah ...</li>
        <ol type="A">
            <li>\( y=x^2+3x-10 \)</li>
            <li>\( y=-2x^2+16x-32 \)</li>
            <li>\( y=-x^2+4x-7 \)</li>
            <li>\( y=x^2+x-2 \)</li>
            <li>\( y=-3x^2+6x \)</li>
        </ol>
        <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal12B" aria-expanded="false" aria-controls="collapsesoal12B">
            Alternatif Penyelesaian:
        </button>
        <div class="collapse" id="collapsesoal12B">
            <div class="card card-body overflow-auto">
                <p>Titik \((4, 0)\) merupakan titik balik parabola, kita dapat menggunakan rumus \(y - q = a(x - p)^2\) dengan \((p, q) = (4, 0)\) untuk menentukan persamaan fungsi kuadrat.
                    <br><br>
                    Langkah-langkahnya sebagai berikut: </p>
                    <ol>
                        <li>Substitusikan nilai \(p = 4\) dan \(q = 0\) ke dalam rumus: \(y - 0 = a(x - 4)^2\).</li>
                        <li>Persamaan menjadi \(y = a(x - 4)^2\).</li>
                        <li>Kita juga diberikan informasi bahwa parabola melalui titik \((6, -8)\). Substitusikan nilai tersebut ke dalam persamaan untuk mencari nilai \(a\): \(-8 = a(6 - 4)^2\).</li>
                        <li>Maka persamaan tersebut menjadi: \(-8 = 4a\).</li>
                        <li>Selesaikan persamaan untuk mencari nilai \(a\): \(a = \frac{-8}{4} = -2\)</li>
                        <li>Substitusikan nilai \(a\) ke dalam persamaan fungsi kuadrat: \(y = -2(x - 4)^2\).</li>
                        \begin{align*}
                        y &= -2(x - 4)^2 \\
                        y &= -2(x^2 - 8x + 16) \\
                        y &= -2x^2 +16x - 32 \\
                        \end{align*}
                    </ol>
                   <p>Jadi, persamaan fungsi kuadrat yang menyinggung sumbu-x di titik \((4, 0)\) dan melalui titik \((6, -8)\) adalah \(\boxed{y = -2x^2 +16x - 32 }\).</p>
            <b class="text-end text-danger fw-bold"> <h3>JAWABAN : B</h3></b>
            </div>
        </div>
    </ol>
    </div>
    <!-- SOAL end -->
    <!--=======================  soal13A ===================================-->
    <div class="border border-dark mt-3 p-1" style="background-color:rgb(255, 221, 205);">
    <ol type="1" start="13">
        <li>Persamaan fungsi kuadrat dari gambar berikut ini adalah ...</li>
        <img src="/home/PAT/2023_X/13a.png" alt="gambar13" width="75%">
        <ol type="A">
            <li>\( y=x^2+3x-10 \)</li>
            <li>\( y=-2x^2+16x-32 \)</li>
            <li>\( y=-x^2+4x-7 \)</li>
            <li>\( y=x^2+x-2 \)</li>
            <li>\( y=-3x^2+6x \)</li>
        </ol>
        <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal13A" aria-expanded="false" aria-controls="collapsesoal13A">
        Alternatif Penyelesaian:
        </button>
        <div class="collapse" id="collapsesoal13A">
            <div class="card card-body overflow-auto">
                <p>Dengan menggunakan informasi yang diberikan, yaitu titik potong sumbu x di \((-2, 0)\) dan \((1, 0)\), serta parabola melalui \((0, -2)\), kita dapat mencari persamaan fungsi kuadrat yang tepat.
                    <br><br>
                    Kita akan menggunakan rumus \(y = a(x - x_1)(x - x_2)\) dengan \(x_1\) dan \(x_2\) sebagai titik potong sumbu x yang diketahui.
                    <br><br>
                    Langkah-langkahnya sebagai berikut: </p>
                    <ol>
                        <li>Substitusikan nilai \(x_1 = -2\) dan \(x_2 = 1\) ke dalam rumus: \(y = a(x - x_1)(x - x_2)\). <br>Persamaan menjadi \(y = a(x + 2)(x - 1)\).</li>
                        <li>Substitusikan titik \((0, -2)\) ke dalam persamaan tersebut: \(-2 = a(0 + 2)(0 - 1)\) <br> Maka persamaan tersebut: \(-2 = -2a\).</li>
                        <li>Selesaikan persamaan untuk mencari nilai \(a\): \(-2 = -2a\). <br> Dibagi kedua sisi dengan \(-2\), kita dapatkan \(a = 1\).</li>
                        <li>Substitusikan nilai \(a\) yang telah ditemukan ke dalam rumus awal:
                            \begin{align*}
                            y &= 1(x + 2)(x - 1) \\
                            &= x^2 -x +2x -2 \\
                            &= x^2 +x -2
                            \end{align*}
                        </li>
                    </ol> <p>
                        Jadi, persamaan fungsi kuadrat yang memenuhi kondisi tersebut adalah \(\boxed{y=x^2 +x -2}\).</p>
            <b class="text-end text-danger fw-bold"> <h3>JAWABAN : D</h3></b>
            </div>
        </div>
        <hr />
    </ol>
    <!-- soal13B -->
    <ol type="1" start="13">
        <li>Persamaan fungsi kuadrat dari gambar berikut ini adalah ...</li>
        <img src="/home/PAT/2023_X/13b.png" alt="gambar13" width="75%">
        <ol type="A">
            <li>\( y=x^2+3x-10 \)</li>
            <li>\( y=-2x^2+16x-32 \)</li>
            <li>\( y=-x^2+4x-7 \)</li>
            <li>\( y=x^2+x-2 \)</li>
            <li>\( y=-3x^2+6x \)</li>
        </ol>
        <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal13B" aria-expanded="false" aria-controls="collapsesoal13B">
        Alternatif Penyelesaian:
        </button>
        <div class="collapse" id="collapsesoal13B">
            <div class="card card-body overflow-auto">
                <p>Dengan menggunakan informasi baru yang diberikan, yaitu titik potong sumbu x di \((0, 0)\) dan \((2, 0)\), serta parabola melalui \((1, 3)\), kita dapat mencari persamaan fungsi kuadrat yang tepat.
                    <br><br>
                    Kita akan menggunakan rumus \(y = a(x - x_1)(x - x_2)\) dengan \(x_1\) dan \(x_2\) sebagai titik potong sumbu x yang diketahui.
                    <br><br>
                    Langkah-langkahnya sebagai berikut: </p>
                    <ol>
                        <li>Substitusikan nilai \(x_1 = 0\) dan \(x_2 = 2\) ke dalam rumus: \(y = a(x - x_1)(x - x_2)\). <br>Persamaan menjadi \(y = a(x - 0)(x - 2)\) atau lebih sederhana \(y = ax(x - 2)\).</li>
                        <li>Substitusikan titik \((1, 3)\) ke dalam persamaan tersebut: \(3 = a(1)(1 - 2)\).
                            <br>
                            verifikasi persamaan tersebut: \(3 = -a\).</li>
                        <li>Selesaikan persamaan untuk mencari nilai \(a\): \(a = -3\).</li>
                        <li>Substitusikan nilai \(a\) yang telah ditemukan ke dalam rumus awal: \(y = -3x(x - 2)\).</li>
                    </ol>
                   <p> Jadi, persamaan fungsi kuadrat yang memenuhi kondisi tersebut adalah \(\boxed{y = -3x^2 + 6x}\).</p>
                   <b class="text-end text-danger fw-bold"> <h3>JAWABAN : E</h3></b>
                </div>
        </div>
    </ol>
    </div>
    <!-- SOAL end -->
    <!--=======================  soal14A ===================================-->
    <div class="border border-dark mt-3 p-1" style="background-color:rgb(239, 255, 205);">
    <ol type="1" start="14">
        <li>Persamaan fungsi kuadrat yang menyinggung sumbu-X di titik \((-4,0)\) serta melalui titik \((-3,1)\) adalah ...</li>
        <ol type="A">
            <li>\( y=x^2+8x+16 \)</li>
            <li>\( y=x^2+6x-16 \)</li>
            <li>\( y=-x^2-2x+8 \)</li>
            <li>\( y=2x^2-3x+1 \)</li>
            <li>\( y=x^2+2x-3 \)</li>
        </ol>
        <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal14A" aria-expanded="false" aria-controls="collapsesoal14A">
        Alternatif Penyelesaian:
        </button>
        <div class="collapse" id="collapsesoal14A">
            <div class="card card-body overflow-auto">
                <p>Dalam persamaan kuadrat \(y-q=a(x-p)^2\), titik balik parabola dinyatakan oleh (p, q), dan kita perlu menentukan nilai \(a\) menggunakan titik lain pada parabola.
                    <br><br>
                    Dalam kasus ini, titik balik parabola diberikan sebagai \((-4, 0)\), dan kita juga diberikan titik lain \((-3, 1)\). Mari kita gunakan informasi ini untuk menentukan persamaan kuadrat.
                    <br><br>
                    Titik balik parabola: <br>
                    \(p = -4\) (x-koordinat titik balik) <br>
                    \(q = 0\) (y-koordinat titik balik)
                    <br><br>
                    Menggunakan titik \((-3, 1)\) untuk menentukan nilai \(a\), kita dapat menggantikan \(p, q, x,\) dan \(y\) dalam persamaan kuadrat:
                    \begin{align*}
                    1 - 0 &= a(-3 - (-4))^2\\
                    1 &= a(1)^2\\
                    1 &= a \\
                    a &= 1
                    \end{align*}
                    Kami telah menentukan nilai \(a\) sebagai \(1\). Sekarang, kita dapat menggunakan nilai \(a\) ini dalam persamaan kuadrat.
                    <br><br>
                    Persamaan kuadrat yang menyinggung sumbu-X di titik \((-4, 0)\) dan melalui titik \((-3, 1)\) adalah:
                    \begin{align*}
                    y - 0 &= 1(x - (-4))^2\\
                    y &= (x + 4)^2\\
                    y &= x^2 + 8x + 16
                    \end{align*}
                    Jadi, persamaan fungsi kuadrat dari informasi yang diberikan diatas adalah \(\boxed{y = x^2 + 8x + 16}\)
                </p>
            <b class="text-end text-danger fw-bold"> <h3>JAWABAN : A</h3></b>
            </div>
        </div>
        <hr />
    </ol>
    <!-- soal14B -->
    <ol type="1" start="14">
        <li>Persamaan fungsi kuadrat yang mempunyai titik balik \((-1, 9)\) dan melalui titik \((3, -7)\) adalah ...</li>
        <ol type="A">
            <li>\( y=x^2+8x+16 \)</li>
            <li>\( y=x^2+6x-16 \)</li>
            <li>\( y=-x^2-2x+8 \)</li>
            <li>\( y=2x^2-3x+1 \)</li>
            <li>\( y=x^2+2x-3 \)</li>
        </ol>
        <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal14B" aria-expanded="false" aria-controls="collapsesoal14B">
        Alternatif Penyelesaian:
        </button>
        <div class="collapse" id="collapsesoal14B">
            <div class="card card-body overflow-auto">
                <p>Untuk mencari persamaan fungsi kuadrat dengan titik balik \((-1, 9)\) dan melalui titik \((3, -7)\), kita dapat menggunakan rumus umum persamaan kuadrat \(y = a(x - p)^2 + q\), di mana \((p, q)\) adalah titik balik parabola.
                    <br><br>
                    Dalam kasus ini, titik balik parabola diberikan sebagai \((-1, 9)\), sehingga kita memiliki \(p = -1\) dan \(q = 9\). Selain itu, kita juga diberikan titik lain \((3, -7)\). Mari kita gunakan informasi ini untuk menentukan nilai \(a\) dalam persamaan kuadrat.
                    \begin{align*}
                    y &= a(x - p)^2 + q \\
                    y &= a(x - (-1))^2 + 9 \\
                    y &= a(x +1)^2 + 9 \\
                    \end{align*}

                    Menggunakan titik \((3, -7)\), kita dapat menggantikan \(p\), \(q\), \(x\), dan \(y\) dalam persamaan kuadrat:
                    \begin{align*}
                    y &= a(x +1)^2 + 9 \\
                    -7 &= a(3 +1)^2 + 9 \\
                    -7-9 &= a(4)^2  \\
                    -16 &= a(16)  \\
                    a &= -1
                    \end{align*}

                    Kami telah menentukan nilai \(a\) sebagai \(-1\). Sekarang, kita dapat menggunakan nilai \(a\) ini dalam persamaan kuadrat.
                    <br><br>
                    Persamaan fungsi kuadrat yang mempunyai titik balik \((-1, 9)\) dan melalui titik \((3, -7)\) adalah:
                    <!-- \begin{align*} \end{align*} -->
                    \begin{align*}
                    y &= -1(x +1)^2 + 9 \\
                    y &= -x^2-2x-1  + 9 \\
                    y &= -x^2-2x+8 \\
                   \end{align*}
                Jadi, persamaan parabolanya adalah \(\boxed{y = -x^2-2x+8} \)
                </p>
            <b class="text-end text-danger fw-bold"> <h3>JAWABAN : C</h3></b>
            </div>
        </div>
    </ol>
    </div>
    <!-- SOAL end -->
    <!--=======================  soal15A ===================================-->
    <div class="border border-dark mt-3 p-1" style="background-color:rgb(205, 255, 224);">
    <ol type="1" start="15">
        <li>Pernyataan yang benar terkait fungsi kuadrat \( f(x)=x^2+6x-16 \) adalah . . . <br> <i>(_*Jawaban lebih dari satu_)</i> </li>
        <ol type="A">
            <li>fungsi kuadrat terbuka ke atas</li>
            <li>fungsi kuadrat memotong sumbu x di dua titik yang berlainan</li>
            <li>persamaan sumbu simetri fungsi kuadrat tersebut adalah \( x=3 \)</li>
            <li>nilai ekstrim fungsi kuadrat tersebut adalah \( y=-25 \)</li>
            <li>titik balik fungsi kuadrat tersebut adalah (3, -25)</li>
        </ol>
        <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal15A" aria-expanded="false" aria-controls="collapsesoal15A">
        Alternatif Penyelesaian:
        </button>
        <div class="collapse" id="collapsesoal15A">
            <div class="card card-body overflow-auto">
                <p></p>
            <b class="text-end text-danger fw-bold"> <h3>JAWABAN : D</h3></b>
            </div>
        </div>
        <hr />
    </ol>
    <!-- soal14B -->
    <ol type="1" start="15">
        <li>Pernyataan berikut yang benar adalah ... <br> <i>(_*Jawaban lebih dari satu_)</i> </li>
        <ol type="A">
            <li>Persamaan sumbu simetri dari fungsi \( f(x)=x^2-8x+15 \)</li>
            <li>Titik balik fungsi \( f(x)=x^2+4x-5 \)</li>
            <li>Fungsi kuadrat \( f(x)=2x^2+x-10 \) memotong sumbu x di dua titik yang berlainan. </li>
            <li>Fungsi kuadrat \( f(x)=x^2-2x-35 \) terbuka ke bawah</li>
            <li>Fungsi kuadrat yang mempunyai titik balik (-2,6) dan melalui titik (0,12) adalah \( f(x)=-x^2-4x+12 \)</li>
        </ol>
        <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal15B" aria-expanded="false" aria-controls="collapsesoal15B">
        Alternatif Penyelesaian:
        </button>
        <div class="collapse" id="collapsesoal15B">
            <div class="card card-body overflow-auto">
                <p></p>
            <b class="text-end text-danger fw-bold"> <h3>JAWABAN : E</h3></b>
            </div>
        </div>
    </ol>
    </div>
    <!-- SOAL end -->
    <!--=======================  soal16A ===================================-->
    <div class="border border-dark mt-3 p-1" style="background-color:rgb(214, 205, 255);">
    <ol type="1" start="16">
        <li>Suatu persegi panjang mempunyai panjang \(x\) cm dan lebar \((10-x)\) cm. Ukuran persegi panjang itu agar luasnya maksimum adalah ...</li>
        <ol type="A">
            <li>panjang 5 cm dan lebar 5 cm</li>
            <li>panjang 6 cm dan lebar 5 cm</li>
            <li>panjang 5 cm dan lebar 7 cm</li>
            <li>panjang 8 cm dan lebar 8 cm</li>
            <li>panjang 8 cm dan lebar 10 cm</li>
        </ol>
        <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal16A" aria-expanded="false" aria-controls="collapsesoal16A">
        Alternatif Penyelesaian:
        </button>
        <div class="collapse" id="collapsesoal16A">
            <div class="card card-body overflow-auto">
                <p></p>
            <b class="text-end text-danger fw-bold"> <h3>JAWABAN : A</h3></b>
            </div>
        </div>
        <hr />
    </ol>
    <!-- soal16B -->
    <ol type="1" start="16">
        <li>Sebidang tanah terletak sepanjang suatu tembok. Tanah itu akan dipagari untuk peternakan ayam. Peternakan itu dibuat persegi panjang. Panjang kawat yang tersedia 600 meter. Ukuran agar terdapat daerah peternakan yang seluas-luasnya adalah ...</li>
        <ol type="A">
            <li>panjang 150 cm dan lebar 150 cm</li>
            <li>panjang 160 cm dan lebar 150 cm</li>
            <li>panjang 50 cm dan lebar 170 cm</li>
            <li>panjang 80 cm dan lebar 180 cm</li>
            <li>panjang 180 cm dan lebar 100 cm</li>
        </ol>
        <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal16B" aria-expanded="false" aria-controls="collapsesoal16B">
        Alternatif Penyelesaian:
        </button>
        <div class="collapse" id="collapsesoal16B">
            <div class="card card-body overflow-auto">
                <p></p>
            <b class="text-end text-danger fw-bold"> <h3>JAWABAN : A</h3></b>
            </div>
        </div>
    </ol>
    </div>
    <!-- SOAL end -->
    <!--=======================  soal17A ===================================-->
    <div class="border border-dark mt-3 p-1" style="background-color:rgb(252, 205, 255);">
    <ol type="1" start="17">
        <li>Nilai Rata-rata (Mean) dari data: \(5, 4, 3, 2, 5, 6, 7, 6, 9\) dan \(3\) adalah ...</li>
        <ol type="A">
            <li>3</li>
            <li>4</li>
            <li>5</li>
            <li>6</li>
            <li>7</li>
        </ol>
        <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal17A" aria-expanded="false" aria-controls="collapsesoal17A">
        Alternatif Penyelesaian:
        </button>
        <div class="collapse" id="collapsesoal17A">
            <div class="card card-body overflow-auto">
                <p></p>
            <b class="text-end text-danger fw-bold"> <h3>JAWABAN : C</h3></b>
            </div>
        </div>
        <hr />
    </ol>
    <!-- soal17B -->
    <ol type="1" start="17">
        <li>Diketahui data sebagai berikut : \(7, 8, 8, 9, 7, 6, 5, 8\) .Nilai rata-rata dari data tersebut adalah ....</li>
        <ol type="A">
            <li>8,25</li>
            <li>7,25</li>
            <li>6,50</li>
            <li>6,00</li>
            <li>5,50</li>
        </ol>
        <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal17B" aria-expanded="false" aria-controls="collapsesoal17B">
        Alternatif Penyelesaian:
        </button>
        <div class="collapse" id="collapsesoal17B">
            <div class="card card-body overflow-auto">
                <p></p>
            <b class="text-end text-danger fw-bold"> <h3>JAWABAN : C</h3></b>
            </div>
        </div>
    </ol>
    </div>
    <!-- SOAL end -->
    <!--=======================  soal18A ===================================-->
    <div class="border border-dark mt-3 p-1" style="background-color:rgb(255, 205, 205);">
    <ol type="1" start="18">
        <li>Median data : \(5, 6, 6, 8, 7, 6, 8, 7, 6, 9\) adalah ...</li>
        <ol type="A">
            <li>6</li>
            <li>6,25</li>
            <li>6,5</li>
            <li>7</li>
            <li>7,25</li>
        </ol>
        <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal18A" aria-expanded="false" aria-controls="collapsesoal18A">
        Alternatif Penyelesaian:
        </button>
        <div class="collapse" id="collapsesoal18A">
            <div class="card card-body overflow-auto">
                <p></p>
            <b class="text-end text-danger fw-bold"> <h3>JAWABAN : C</h3></b>
            </div>
        </div>
        <hr />
    </ol>
    <!-- soal18B -->
    <ol type="1" start="18">
        <li>Median data : \(8, 3, 2, 5, 7, 8, 9, 10, 11, 7, 6, 12, 13\) adalah ...
        </li>
        <ol type="A">
            <li>3</li>
            <li>6</li>
            <li>7</li>
            <li>7,25</li>
            <li>8</li>
        </ol>
        <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal18B" aria-expanded="false" aria-controls="collapsesoal18B">
        Alternatif Penyelesaian:
        </button>
        <div class="collapse" id="collapsesoal18B">
            <div class="card card-body overflow-auto">
                <p></p>
            <b class="text-end text-danger fw-bold"> <h3>JAWABAN : E</h3></b>
            </div>
        </div>
    </ol>
    </div>
    <!-- SOAL end -->
    <!--=======================  soal19A ===================================-->
    <div class="border border-dark mt-3 p-1" style="background-color:rgb(255, 228, 205);">
    <ol type="1" start="19">
        <li>Data hasil penimbangan berat badan (dalam kg) dari 60 orang ibu pada suatu desa disajikan dalam tabel distribusi di bawah ini. Rata-rata berat badan 60 orang ibu tersebut adalah ...</li>
        <img src="/home/PAT/2023_X/19a.png" alt="gambar13" width="50%">
        <ol type="A">
            <li>69,25</li>
            <li>70,16</li>
            <li>70,17</li>
            <li>70,33</li>
            <li>72,25</li>
        </ol>
        <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal19A" aria-expanded="false" aria-controls="collapsesoal19A">
        Alternatif Penyelesaian:
        </button>
        <div class="collapse" id="collapsesoal19A">
            <div class="card card-body overflow-auto">
                <p></p>
            <b class="text-end text-danger fw-bold"> <h3>JAWABAN : C</h3></b>
            </div>
        </div>
        <hr />
    </ol>
    <!-- soal19B -->
    <ol type="1" start="19">
        <li>Perhatikan tabel distribusi frekuensi berikut yang merupakan data nilai ulangan matematika 40 orang siswa. Rata-rata dari data di atas adalah ...</li>
        <img src="/home/PAT/2023_X/19b.png" alt="gambar13" width="50%">
        <ol type="A">
            <li>73,5</li>
            <li>74,5</li>
            <li>76,5</li>
            <li>77,7</li>
            <li>80,5</li>
        </ol>
        <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal19B" aria-expanded="false" aria-controls="collapsesoal19B">
        Alternatif Penyelesaian:
        </button>
        <div class="collapse" id="collapsesoal19B">
            <div class="card card-body overflow-auto">
                <p></p>
            <b class="text-end text-danger fw-bold"> <h3>JAWABAN : A</h3></b>
            </div>
        </div>
    </ol>
    </div>
    <!-- SOAL end -->
    <!--=======================  soal20A ===================================-->
    <div class="border border-dark mt-3 p-1" style="background-color:rgb(235, 255, 205);">
    <ol type="1" start="20">
        <li>Cermati tabel distribusi frekuensi berikut.Modus data tersebut adalah ...</li>
        <img src="/home/PAT/2023_X/20a.png" alt="gambar13" width="50%">
        <ol type="A">
            <li>75,9</li>
            <li>76,1</li>
            <li>77,2</li>
            <li>77,4</li>
            <li>78,4</li>
        </ol>
        <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal20A" aria-expanded="false" aria-controls="collapsesoal20A">
        Alternatif Penyelesaian:
        </button>
        <div class="collapse" id="collapsesoal20A">
            <div class="card card-body overflow-auto">
                <p></p>
            <b class="text-end text-danger fw-bold"> <h3>JAWABAN : E</h3></b>
            </div>
        </div>
        <hr />
    </ol>
    <!-- soal20B -->
    <ol type="1" start="20">
        <li>Modus dari data pada tabel di bawah ini adalah ...</li>
        <img src="/home/PAT/2023_X/20b.png" alt="gambar13" width="50%">
        <ol type="A">
            <li>30,1</li>
            <li>32,1</li>
            <li>35,1</li>
            <li>37,2</li>
            <li>41,0</li>
        </ol>
        <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal20B" aria-expanded="false" aria-controls="collapsesoal20B">
        Alternatif Penyelesaian:
        </button>
        <div class="collapse" id="collapsesoal20B">
            <div class="card card-body overflow-auto">
                <p></p>
            <b class="text-end text-danger fw-bold"> <h3>JAWABAN : C</h3></b>
            </div>
        </div>
    </ol>
    </div>
    <!-- SOAL end -->
    <!--=======================  soal21A ===================================-->
    <div class="border border-dark mt-3 p-1" style="background-color:rgb(205, 255, 208);">
    <ol type="1" start="21">
        <li>Perhatikan tabel berikut!Median dari data yang disajikan berikut adalah ...</li>
        <img src="/home/PAT/2023_X/21a.png" alt="gambar13" width="50%">
        <ol type="A">
            <li>32</li>
            <li>37,625</li>
            <li>38,25</li>
            <li>43,25</li>
            <li>44,50</li>
        </ol>
        <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal21A" aria-expanded="false" aria-controls="collapsesoal21A">
        Alternatif Penyelesaian:
        </button>
        <div class="collapse" id="collapsesoal21A">
            <div class="card card-body overflow-auto">
                <p></p>
            <b class="text-end text-danger fw-bold"> <h3>JAWABAN : B</h3></b>
            </div>
        </div>
        <hr />
    </ol>
    <!-- soal21B -->
    <ol type="1" start="21">
        <li>Data ukuran panjang ikan gurame umur 2 bulan disajikan dalam tabel distribusi frekuensi berikut.Median dari data tersebut adalah ...</li>
        <img src="/home/PAT/2023_X/21b.png" alt="gambar13" width="50%">
        <ol type="A">
            <li>44,25</li>
            <li>45,50</li>
            <li>45,75</li>
            <li>46,00</li>
            <li>46,50</li>
        </ol>
        <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal21B" aria-expanded="false" aria-controls="collapsesoal21B">
        Alternatif Penyelesaian:
        </button>
        <div class="collapse" id="collapsesoal21B">
            <div class="card card-body overflow-auto">
                <p></p>
            <b class="text-end text-danger fw-bold"> <h3>JAWABAN : D</h3></b>
            </div>
        </div>
    </ol>
    </div>
    <!-- SOAL end -->
    <!--=======================  soal22A ===================================-->
    <div class="border border-dark mt-3 p-1" style="background-color:rgb(205, 255, 242);">
    <ol type="1" start="22">
        <li>Nilai kuartil atas dari data pada tabel berikut adalah ...</li>
        <img src="/home/PAT/2023_X/22a.png" alt="gambar13" width="50%">
        <ol type="A">
            <li>71,5</li>
            <li>72,0</li>
            <li>73,5</li>
            <li>75,5</li>
            <li>76,5</li>
        </ol>
        <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal22A" aria-expanded="false" aria-controls="collapsesoal22A">
        Alternatif Penyelesaian:
        </button>
        <div class="collapse" id="collapsesoal22A">
            <div class="card card-body overflow-auto">
                <p></p>
            <b class="text-end text-danger fw-bold"> <h3>JAWABAN : D</h3></b>
            </div>
        </div>
        <hr />
    </ol>
    <!-- soal22B -->
    <ol type="1" start="22">
        <li>Nilai kuartil atas dari data pada tabel berikut adalah ...</li>
        <img src="/home/PAT/2023_X/22b.png" alt="gambar13" width="50%">
        <ol type="A">
            <li>69,50</li>
            <li>70,00</li>
            <li>70,50</li>
            <li>70,75</li>
            <li>71,75</li>
        </ol>
        <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal22B" aria-expanded="false" aria-controls="collapsesoal22B">
        Alternatif Penyelesaian:
        </button>
        <div class="collapse" id="collapsesoal22B">
            <div class="card card-body overflow-auto">
                <p></p>
            <b class="text-end text-danger fw-bold"> <h3>JAWABAN : D</h3></b>
            </div>
        </div>
    </ol>
    </div>
    <!-- SOAL end -->
    <!--=======================  soal23A ===================================-->
    <div class="border border-dark mt-3 p-1" style="background-color:rgb(238, 205, 255);">
    <ol type="1" start="23">
        <li>Perhatikan tabel distribusi frekuensi berikut.\( D_4 \) dari data di atas adalah ...</li>
        <img src="/home/PAT/2023_X/23a.png" alt="gambar13" width="50%">
        <ol type="A">
            <li>127,2</li>
            <li>127,4</li>
            <li>129,2</li>
            <li>129,4</li>
            <li>129,8</li>
        </ol>
        <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal23A" aria-expanded="false" aria-controls="collapsesoal23A">
        Alternatif Penyelesaian:
        </button>
        <div class="collapse" id="collapsesoal23A">
            <div class="card card-body overflow-auto">
                <p></p>
            <b class="text-end text-danger fw-bold"> <h3>JAWABAN : C</h3></b>
            </div>
        </div>
        <hr />
    </ol>
    <!-- soal23B -->
    <ol type="1" start="23">
        <li>Tabel berikut menyajikan data berat badan (kg) sejumlah siswa. Desil ke-8 dari data di atas adalah ... kg.</li>
        <img src="/home/PAT/2023_X/23b.png" alt="gambar13" width="50%">
        <ol type="A">
            <li>62,325</li>
            <li>62,750</li>
            <li>63,500</li>
            <li>63,625</li>
            <li>64,125</li>
        </ol>
        <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal23B" aria-expanded="false" aria-controls="collapsesoal23B">
        Alternatif Penyelesaian:
        </button>
        <div class="collapse" id="collapsesoal23B">
            <div class="card card-body overflow-auto">
                <p></p>
            <b class="text-end text-danger fw-bold"> <h3>JAWABAN : D</h3></b>
            </div>
        </div>
    </ol>
    </div>
    <!-- SOAL end -->
    <!--=======================  soal24A ===================================-->
    <div class="border border-dark mt-3 p-1" style="background-color:rgb(255, 248, 205);">
    <ol type="1" start="24">
        <li>Ulangan matematika dari 6 siswa rata-ratanya 7. Jika 1 siswa baru masuk rata-ratanya menjadi 6,7. Maka nilai matematika siswa baru tersebut adalah ...</li>
        <ol type="A">
            <li>4,9</li>
            <li>5</li>
            <li>7</li>
            <li>7,9</li>
            <li>8</li>
        </ol>
        <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal24A" aria-expanded="false" aria-controls="collapsesoal24A">
        Alternatif Penyelesaian:
        </button>
        <div class="collapse" id="collapsesoal24A">
            <div class="card card-body overflow-auto">
                <p></p>
            <b class="text-end text-danger fw-bold"> <h3>JAWABAN : A</h3></b>
            </div>
        </div>
        <hr />
    </ol>
    <!-- soal24B -->
    <ol type="1" start="24">
        <li>Nilai rata-rata ujian matematika sekelompok siswa adalah 30. Oleh karena nilai rata-rata yang rendah, maka semua nilai siswa dikalikan 2 kemudian dikurangi 5. Rata-rata nilai yang baru adalah ...</li>
        <ol type="A">
            <li>51</li>
            <li>52</li>
            <li>53</li>
            <li>54</li>
            <li>55</li>
        </ol>
        <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal24B" aria-expanded="false" aria-controls="collapsesoal24B">
        Alternatif Penyelesaian:
        </button>
        <div class="collapse" id="collapsesoal24B">
            <div class="card card-body overflow-auto">
                <p></p>
            <b class="text-end text-danger fw-bold"> <h3>JAWABAN : E</h3></b>
            </div>
        </div>
    </ol>
    </div>
    <!-- SOAL end -->
    <!--=======================  soal25A ===================================-->
    <div class="border border-dark mt-3 p-1" style="background-color:rgb(248, 205, 255);">
    <ol type="1" start="25">
        <li>Kuartil bawah dari data pada tabel distribusi frekuensi dibawah adalah ...</li>
        <img src="/home/PAT/2023_X/25a.png" alt="gambar13" width="50%">
        <ol type="A">
            <li>151,32</li>
            <li>155,06</li>
            <li>171,32</li>
            <li>181,50</li>
            <li>185,06</li>
        </ol>
        <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal25A" aria-expanded="false" aria-controls="collapsesoal25A">
        Alternatif Penyelesaian:
        </button>
        <div class="collapse" id="collapsesoal25A">
            <div class="card card-body overflow-auto">
                <p></p>
            <b class="text-end text-danger fw-bold"> <h3>JAWABAN : B</h3></b>
            </div>
        </div>
        <hr />
    </ol>
    <!-- soal25B -->
    <ol type="1" start="25">
        <li>Perhatikan tabel berikut!Kuartil bawah \( Q_1 \) dari tabel adalah ...
            <img src="/home/PAT/2023_X/25b.png" alt="gambar13" width="50%">
        </li>
        <ol type="A">
            <li>143,5</li>
            <li>145,6</li>
            <li>145,8</li>
            <li>146,5</li>
            <li>147,0</li>
        </ol>
        <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal25B" aria-expanded="false" aria-controls="collapsesoal25B">
        Alternatif Penyelesaian:
        </button>
        <div class="collapse" id="collapsesoal25B">
            <div class="card card-body overflow-auto">
                <p></p>
            <b class="text-end text-danger fw-bold"> <h3>JAWABAN : E</h3></b>
            </div>
        </div>
    </ol>
    </div>
    <!-- SOAL end -->
    <!--=======================  soal26A ===================================-->
    <div class="border border-dark mt-3 p-1" style="background-color:rgb(205, 215, 255);">
    <ol type="1" start="26">
        <li>Dua dadu dilempar bersama. Tentukan peluang munculnya mata dadu berjumlah 7 !</li>
        <ol type="A">
            <li>\(\displaystyle \frac{1}{6} \)</li>
            <li>\(\displaystyle \frac{1}{3} \)</li>
            <li>\(\displaystyle \frac{1}{2} \)</li>
            <li>\(\displaystyle \frac{2}{3} \)</li>
            <li>\(1\)</li>
        </ol>
        <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal26A" aria-expanded="false" aria-controls="collapsesoal26A">
        Alternatif Penyelesaian:
        </button>
        <div class="collapse" id="collapsesoal26A">
            <div class="card card-body overflow-auto">
                <p></p>
            <b class="text-end text-danger fw-bold"> <h3>JAWABAN : A</h3></b>
            </div>
        </div>
        <hr />
    </ol>
    <!-- soal26B -->
    <ol type="1" start="26">
        <li>Diketahui \(A= \{ 9, 7, 6, 5, 4, 3, 2, 1 \} \). Lima anggota \(A\) diambil secara acak. Peluang terambilnya lima anggota tersebut berjumlah genap adalah ...</li>
        <ol type="A">
            <li>\(\displaystyle \frac{1}{2} \)</li>
            <li>\(\displaystyle \frac{25}{56} \)</li>
            <li>\(\displaystyle \frac{5}{12} \)</li>
            <li>\(\displaystyle \frac{1}{4} \)</li>
            <li>\(\displaystyle \frac{5}{56} \)</li>
        </ol>
        <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal26B" aria-expanded="false" aria-controls="collapsesoal26B">
        Alternatif Penyelesaian:
        </button>
        <div class="collapse" id="collapsesoal26B">
            <div class="card card-body overflow-auto">
                <p></p>
            <b class="text-end text-danger fw-bold"> <h3>JAWABAN : B</h3></b>
            </div>
        </div>
    </ol>
    </div>
    <!-- SOAL end -->
    <!--=======================  soal27A ===================================-->
    <div class="border border-dark mt-3 p-1" style="background-color:rgb(255, 205, 205);">
    <ol type="1" start="27">
        <li>Dua buah dadu dilempar bersama-sama sebanyak 135 kali. Frekuensi harapan munculnya mata dadu berjumlah 9 adalah ...</li>
        <ol type="A">
            <li>15</li>
            <li>30</li>
            <li>45</li>
            <li>60</li>
            <li>75</li>
        </ol>
        <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal27A" aria-expanded="false" aria-controls="collapsesoal27A">
        Alternatif Penyelesaian:
        </button>
        <div class="collapse" id="collapsesoal27A">
            <div class="card card-body overflow-auto">
                <p></p>
            <b class="text-end text-danger fw-bold"> <h3>JAWABAN : A</h3></b>
            </div>
        </div>
        <hr />
    </ol>
    <!-- soal27B -->
    <ol type="1" start="27">
        <li>Dari seperangkat kartu bridge diambil sebuah kartu secara acak. Frekuensi harapan terambilnya kartu bernomor 9 yang berwarna merah, jika pengambilan tersebut dilakukan sebanyak 130 kali adalah ...</li>
        <ol type="A">
            <li>5</li>
            <li>10</li>
            <li>15</li>
            <li>20</li>
            <li>25</li>
        </ol>
        <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal27B" aria-expanded="false" aria-controls="collapsesoal27B">
        Alternatif Penyelesaian:
        </button>
        <div class="collapse" id="collapsesoal27B">
            <div class="card card-body overflow-auto">
                <p></p>
            <b class="text-end text-danger fw-bold"> <h3>JAWABAN : A</h3></b>
            </div>
        </div>
    </ol>
    </div>
    <!-- SOAL end -->
    <!--=======================  soal28A ===================================-->
    <div class="border border-dark mt-3 p-1" style="background-color:rgb(239, 255, 205);">
    <ol type="1" start="28">
        <li>Dua buah dadu dilemparkan bersama. Peluang munculnya mata dadu jumlahnya kurang dari 10 adalah ...</li>
        <ol type="A">
            <li>\(\displaystyle \frac{5}{6} \)</li>
            <li>\(\displaystyle \frac{4}{6} \)</li>
            <li>\(\displaystyle \frac{3}{6} \)</li>
            <li>\(\displaystyle \frac{2}{6} \)</li>
            <li>\(\displaystyle \frac{1}{6} \)</li>
        </ol>
        <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal28A" aria-expanded="false" aria-controls="collapsesoal28A">
        Alternatif Penyelesaian:
        </button>
        <div class="collapse" id="collapsesoal28A">
            <div class="card card-body overflow-auto">
                <p></p>
            <b class="text-end text-danger fw-bold"> <h3>JAWABAN : A</h3></b>
            </div>
        </div>
        <hr />
    </ol>
    <!-- soal28B -->
    <ol type="1" start="28">
        <li>Dari seperangkat kartu bridge diambil secara acak satu lembar kartu. Peluang terambilnya kartu bukan As adalah ...</li>
        <ol type="A">
            <li>\(\displaystyle \frac{12}{13} \)</li>
            <li>\(\displaystyle \frac{11}{13} \)</li>
            <li>\(\displaystyle \frac{10}{13} \)</li>
            <li>\(\displaystyle \frac{9}{13} \)</li>
            <li>\(\displaystyle \frac{7}{13} \)</li>
        </ol>
        <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal28B" aria-expanded="false" aria-controls="collapsesoal28B">
        Alternatif Penyelesaian:
        </button>
        <div class="collapse" id="collapsesoal28B">
            <div class="card card-body overflow-auto">
                <p></p>
            <b class="text-end text-danger fw-bold"> <h3>JAWABAN : A</h3></b>
            </div>
        </div>
    </ol>
    </div>
    <!-- SOAL end -->
    <!--=======================  soal29A ===================================-->
    <div class="border border-dark mt-3 p-1" style="background-color:rgb(205, 255, 213);">
    <ol type="1" start="29">
        <li>Pada pelemparan dua dadu satu kali, peluang munculnya mata dadu berjumlah 5 atau 8 adalah ...</li>
        <ol type="A">
            <li>\(\displaystyle \frac{1}{4} \)</li>
            <li>\(\displaystyle \frac{3}{4} \)</li>
            <li>\(\displaystyle \frac{5}{4} \)</li>
            <li>\(\displaystyle \frac{6}{4} \)</li>
            <li>\(\displaystyle \frac{7}{4} \)</li>
        </ol>
        <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal29A" aria-expanded="false" aria-controls="collapsesoal29A">
        Alternatif Penyelesaian:
        </button>
        <div class="collapse" id="collapsesoal29A">
            <div class="card card-body overflow-auto">
                <p></p>
            <b class="text-end text-danger fw-bold"> <h3>JAWABAN : A</h3></b>
            </div>
        </div>
        <hr />
    </ol>
    <!-- soal29B -->
    <ol type="1" start="29">
        <li>Kotak I berisi 5 bola merah dan 3 bola kuning. Kotak II berisi 2 bola merah dan 6 bola kuning. Dari masing-masing kotak diambil sebuah bola secara acak. Peluang terambilnya kedua bola berwarna sama adalah ...</li>
        <ol type="A">
            <li>\(\displaystyle \frac{7}{16} \)</li>
            <li>\(\displaystyle \frac{6}{16} \)</li>
            <li>\(\displaystyle \frac{5}{16} \)</li>
            <li>\(\displaystyle \frac{4}{16} \)</li>
            <li>\(\displaystyle \frac{3}{16} \)</li>
        </ol>
        <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal29B" aria-expanded="false" aria-controls="collapsesoal29B">
        Alternatif Penyelesaian:
        </button>
        <div class="collapse" id="collapsesoal29B">
            <div class="card card-body overflow-auto">
                <p></p>
            <b class="text-end text-danger fw-bold"> <h3>JAWABAN : A</h3></b>
            </div>
        </div>
    </ol>
    </div>
    <!-- SOAL end -->
    <!--=======================  soal30A ===================================-->
    <div class="border border-dark mt-3 p-1" style="background-color:rgb(208, 205, 255);">
    <ol type="1" start="30">
        <li>Dua buah dadu dilempar undi bersama-sama. Peluang munculnya dadu berjumlah 9 atau 10 adalah ...</li>
        <ol type="A">
            <li>\(\displaystyle \frac{7}{36} \)</li>
            <li>\(\displaystyle \frac{6}{36} \)</li>
            <li>\(\displaystyle \frac{5}{36} \)</li>
            <li>\(\displaystyle \frac{4}{36} \)</li>
            <li>\(\displaystyle \frac{3}{36} \)</li>
        </ol>
        <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal30A" aria-expanded="false" aria-controls="collapsesoal30A">
        Alternatif Penyelesaian:
        </button>
        <div class="collapse" id="collapsesoal30A">
            <div class="card card-body overflow-auto">
                <p></p>
            <b class="text-end text-danger fw-bold"> <h3>JAWABAN : </h3></b>
            </div>
        </div>
        <hr />
    </ol>
    <!-- soal30B -->
    <ol type="1" start="30">
        <li>Sebuah mata uang dan sebuah dadu dilempar undi sekali. Peluang munculnya angka pada mata uang dan bilangan prima ganjil pada dadu adalah ...</li>
        <ol type="A">
            <li>\(\displaystyle \frac{1}{6} \)</li>
            <li>\(\displaystyle \frac{2}{6} \)</li>
            <li>\(\displaystyle \frac{3}{6} \)</li>
            <li>\(\displaystyle \frac{4}{6} \)</li>
            <li>\(\displaystyle \frac{5}{6} \)</li>
        </ol>
        <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal30B" aria-expanded="false" aria-controls="collapsesoal30B">
        Alternatif Penyelesaian:
        </button>
        <div class="collapse" id="collapsesoal30B">
            <div class="card card-body overflow-auto">
                <p></p>
            <b class="text-end text-danger fw-bold"> <h3>JAWABAN : </h3></b>
            </div>
        </div>
    </ol>
    </div>
    <!-- SOAL end -->

                    <div id="disqus_thread" class="mt-4"></div>


        </div>
        </div>
</section>
@endsection

