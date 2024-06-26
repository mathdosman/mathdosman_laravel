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
                <h3 class="text-center text-danger fw-bold">MATEMATIKA PEMINATAN</h3>
                <p class="text-center fst-italic"> Math_Dosman</p>
                <hr />
                    <div class="row">
                        <div class="col-sm-4">
                            <img src="{{asset('asets/PAS/pat.png')}}" alt="pat2023" class="img-fluid rounded-circle">
                        </div>
                        <div class="col">
                            <hr> <hr>
                        <p>Berikut merupakan soal Penilaian Akhir Tahun (PAT) tahun 2023 di SMA Negeri 1 Gianyar</p>
                        <p>Kelas : XI MIPA</p>
                        <p>Waktu : 90 Menit</p>
                        <p>MATEMATIKA PEMINATAN</p>
                        <hr> <hr>
                        </div>
                    </div>
            <hr>
<!--=======================  soal01 ===================================-->
<ol type="1" start="1">
    <li> Tentukan koordinat dari dua titik yang dimana kedua titik itu merupakan titik potong garis \(y = -2\) dan lingkaran \(x^2 + y^2 -6x + 4y = 12\)!</li>
        <ol type="A">
            <li>\((-2,-2) \text{ dan } (8,-2)\)</li>
            <li>\((2,-2) \text{ dan } (8,-2)\)</li>
            <li>\((-2,-2) \text{ dan } (-8,-2)\)</li>
            <li>\((2,-2) \text{ dan } (-8,2)\)</li>
            <li>\((-2,2) \text{ dan } (-8,-2)\)</li>
        </ol>
        <button class="btn btn-warning border mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal01" aria-expanded="false" aria-controls="collapsesoal01">
        Alternatif Penyelesaian:
        </button>
        <div class="collapse" id="collapsesoal01">
            <div class="card card-body overflow-auto">
            <p>Untuk menemukan titik potong kurva dengan garis \(y = -2\), kita perlu mencari nilai \(x\) dan \(y\) yang memenuhi kedua persamaan tersebut. Kita dapat mulai dengan mengganti setiap kemunculan \(y\) dengan \(-2\) dalam persamaan kurva:
                \begin{align*}
                x^2 + y^2 - 6x + 4y &= 12 \\
                x^2 + (-2)^2 - 6x + 4(-2) &= 12 \\
                x^2 - 6x - 4 -12 &= 0 \\
                x^2 - 6x - 16 &= 0 \\
                (x-8) (x+2) &= 0
                \end{align*}

                Nilai \(x\) yang memenuhi adalah \(x=8\) atau \(x=-2\) <br>

                Jadi, titik potong kurva dengan garis \(y = -2\) adalah \(\boxed{(-2,-2)}\) dan \(\boxed{(8, -2)}\). </p>
            <b class="text-end text-danger fw-bold"> <h3>JAWABAN : A</h3></b>
            </div>
        </div>
<hr>
    <li>Tentukan persamaan umum lingkaran yang melalui titik \(A(4,4)\), \(B(6,6)\), dan \(C(4,8)\)!</li>
        <ol type="A">
            <li>\(x^2 + y^2 - 6x - 8y = 12 \)</li>
            <li>\(x^2 + y^2 - 6x + 8y = 299 \) </li>
            <li>\(x^2 + y^2 - 6x - 8y =- 278 \) </li>
            <li>\(x^2 + y^2 - 8x - 12y = -52 \) </li>
            <li>\(x^2 + y^2 - 8x - 12y = -48 \) </li>
        </ol>
        <button class="btn btn-warning border mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal02" aria-expanded="false" aria-controls="collapsesoal02">
        Alternatif Penyelesaian:
        </button>
        <div class="collapse" id="collapsesoal02">
            <div class="card card-body overflow-auto">
            <p>Untuk menentukan persamaan lingkaran yang melalui titik-titik tersebut dengan persamaan umum lingkaran \(x^2 + y^2 + Ax + By + C = 0\), kita perlu menyelesaikan sistem persamaan untuk \(A, B,\) dan \(C\), yang memenuhi syarat bahwa ketiga titik tersebut berada pada lingkaran tersebut.

                Pertama, kita dapat menggunakan titik A(4,4) untuk menentukan nilai \(C\), yaitu:

                \[4^2 + 4^2 + A(4) + B(4) + C = 0 \Rightarrow \underline{32 + 4A + 4B + C = 0}\]

                Kedua, kita dapat menggunakan titik B(6,6) untuk menentukan nilai \(C\), yaitu:

                \[6^2 + 6^2 + A(6) + B(6) + C = 0 \Rightarrow \underline{72 + 6A + 6B + C = 0}\]

                Ketiga, kita dapat menggunakan titik C(4,8) untuk menentukan nilai \(C\), yaitu:

                \[4^2 + 8^2 + A(4) + B(8) + C = 0 \Rightarrow \underline{80 + 4A + 8B + C = 0}\]

                Dengan memecahkan sistem persamaan tersebut, kita dapat menentukan nilai \(A\), \(B\), dan \(C\), yaitu:

                \begin{align*}
                32 + 4A + 4B + C &= 0 \\
                72 + 6A + 6B + C &= 0 \\
                80 + 4A + 8B + C &= 0
                \end{align*}

                Dengan menggabungkan persamaan pertama dan kedua, kita dapat mengeliminasi variabel \(C\) dan menyelesaikan persamaan untuk \(A\) dan \(B\), yaitu:

                \begin{align*}
                72 + 6A + 6B + C &= 0 \\
                32 + 4A + 4B + C &= 0 (-)\\
                \hline
                40 + 2A + 2B &= 0 \\
                A + B &= -20
                \end{align*}

                Dengan menggabungkan persamaan pertama dan ketiga, kita juga dapat mengeliminasi variabel \(C\) dan menyelesaikan persamaan untuk \(A\) dan \(B\), yaitu:

                \begin{align*}
                80 + 4A + 8B + C &= 0 \\
                32 + 4A + 4B + C &= 0 (-)\\
                \hline
                48 + 4B &= 0 \\
                B &= -12 \\\\
                A + B &= -20 \\
                A + (-12) &= -20 \\
                A &= -20 +12\\
                A &= -8
                \end{align*}

                Setelah nilai \(A\) dan \(B\) telah ditentukan, kita dapat menentukan nilai \(C\) dengan mengganti ke dalam salah satu persamaan, yaitu:
                \begin{align*}
                32 + 4A + 4B + C &= 0 \\
                C &= -4A -4B - 32 \\
                &= -4(-8) -4 (-12) -32 \\
                &= 32 + 48 -32 \\
                &= 48
                \end{align*}
                Sehingga, persamaan umum lingkaran yang melalui titik \(A(4,4)\), \(B(6,6)\), dan \(C(4,8)\) adalah: \(\boxed{x^2 + y^2 -8x -12y =-48} \)

                </p>
            <b class="text-end text-danger fw-bold"> <h3>JAWABAN : E</h3></b>
            </div>
        </div>
<hr>
    <li>Tentukan persamaan lingkaran yang diameternya merupakan ruas garis yang menghubungkan titik \(A(1,5)\) dan \(B(9,1)\)!</li>
        <ol type="A">
            <li>\((x-5)^2 + (y-3)^2 = 20 \)</li>
            <li>\( (x-3)^2 + (y-5)^2 = 20 \)</li>
            <li>\((x-5)^2 + (y-3)^2 = 22 \)</li>
            <li>\((x-5)^2 + (y+3)^2 = 20 \)</li>
            <li>\((x+5)^2 + (y-3)^2 = 20 \)</li>
        </ol>
        <button class="btn btn-warning border mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal03" aria-expanded="false" aria-controls="collapsesoal03">
        Alternatif Penyelesaian:
        </button>
        <div class="collapse" id="collapsesoal03">
            <div class="card card-body overflow-auto">
            <p>Untuk menentukan persamaan lingkaran yang diameternya merupakan ruas garis yang menghubungkan titik \(A(1,5)\) dan \(B(9,1)\), kita perlu mencari terlebih dahulu titik tengah (midpoint) dari garis yang menghubungkan kedua titik tersebut.

                Titik tengah dapat ditemukan dengan cara mencari rata-rata koordinat \(x\) dan \(y\) dari kedua titik tersebut, yaitu:

                $$\begin{aligned} x_{mid} &= \frac{x_A + x_B}{2} = \frac{1 + 9}{2} = 5 \\ y_{mid} &= \frac{y_A + y_B}{2} = \frac{5 + 1}{2} = 3 \end{aligned}$$

                Maka, titik tengah garis \(AB\) adalah \(M(5,3)\). Oleh karena itu, jari-jari lingkaran adalah setengah dari panjang garis \(AB\), yaitu:

                $$r = \frac{AB}{2} = \frac{\sqrt{(x_B - x_A)^2 + (y_B - y_A)^2}}{2} = \frac{\sqrt{(9 - 1)^2 + (1 - 5)^2}}{2} = \frac{\sqrt{80}}{2}=\frac{2\sqrt{20}}{2} = \sqrt{20} $$

                Dengan titik tengah \(M(5,3)\) dan jari-jari \(r = 5\), persamaan lingkaran yang dimaksud adalah:

                $$(x - 5)^2 + (y - 3)^2 = (\sqrt{20})^2 \Rightarrow (x - 5)^2 + (y - 3)^2 = 20 $$

                atau

                $$x^2 + y^2 - 10x - 6y + 14 = 0$$

                Sehingga persamaan lingkaran yang dihasilkan adalah \(x^2 + y^2 - 10x - 6y + 14 = 0\) atau \(\boxed{(x-5)^2 + (y-3)^2 = 20}\).</p>
            <b class="text-end text-danger fw-bold"> <h3>JAWABAN : A</h3></b>
            </div>
        </div>
<hr>
    <li> Tentukan persamaan garis singgung lingkaran \( (x+7)^2+(y-2)^2=169 \) di titik \( (5,-3) \) adalah ...</li>
        <ol type="A">
            <li>\(12x-5y-75 = 0 \)</li>
            <li>\(7x-2y-53 = 0 \)</li>
            <li>\(7x+2y-53 = 0 \)</li>
            <li>\(12x + 5y -75 = 0 \)</li>
            <li>\(2x-3y+13 = 0 \)</li>
        </ol>
        <button class="btn btn-warning border mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal04" aria-expanded="false" aria-controls="collapsesoal04">
        Alternatif Penyelesaian:
        </button>
        <div class="collapse" id="collapsesoal04">
            <div class="card card-body overflow-auto">
            <p>
                Untuk menentukan persamaan garis singgung lingkaran \( (x+7)^2+(y-2)^2=169 \) di titik \( (5,-3) \), kita perlu menggunakan rumus persamaan garis singgung lingkaran melalui titik \((x_1, y_1)\) pada lingkaran:
                $$(x-a)^2 + (y-b)^2 = r^2 \Rightarrow (x_1-a)(x-a)+(y_1-b)(y-b)=r^2$$
                \begin{align*}
                (x+7)^2+(y-2)^2 &=169 \\
                (5+7)(x+7) +(-3-2)(y-2) &= 169 \\
                12(x+7) -5(y-2) &= 169 \\
                12x + 84 -5y +10 -169 &= 0 \\
                12x -5y -75 &= 0
                \end{align*}
                Jadi, persamaan garissinggung lingkaran adalah \(\boxed{12x -5y -75 = 0} \)
            </p>
            <b class="text-end text-danger fw-bold"> <h3>JAWABAN : A</h3></b>
            </div>
        </div>
<hr>
    <li> Persamaan lingkaran dengan pusat \(O(0,0)\) dan melalui titik \((-2,3)\) adalah ...</li>
        <ol type="A">
            <li>\(x^2 + y^2 =13 \)</li>
            <li>\(x^2 + y^2 =5 \)</li>
            <li>\(x^2 + y^2 =11 \)</li>
            <li>\(x^2 + y^2 =7 \)</li>
            <li>\(x^2 + y^2 =21 \)</li>
        </ol>
        <button class="btn btn-warning border mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal05" aria-expanded="false" aria-controls="collapsesoal05">
        Alternatif Penyelesaian:
        </button>
        <div class="collapse" id="collapsesoal05">
            <div class="card card-body overflow-auto">
            <p>Untuk menemukan persamaan lingkaran dengan pusat \(O(0,0)\) dan melalui titik \((-2,3)\), kita dapat menggunakan rumus umum persamaan lingkaran:

                \[(x - h)^2 + (y - k)^2 = r^2\]

                dengan \(h\) dan \(k\) mewakili koordinat pusat lingkaran dan \(r\) mewakili jari-jari lingkaran.

                Karena pusat lingkaran \(O(0,0)\), maka kita dapat mengganti \(h\) dan \(k\) dengan \(0\):

                \[(x - 0)^2 + (y - 0)^2 = r^2\]
                \[x^2 + y^2 = r^2\]

                Kita hanya perlu menemukan nilai \(r^2\) untuk menyelesaikan persamaan ini. Karena lingkaran melalui titik \((-2,3)\), maka kita tahu bahwa jarak antara titik itu dan pusat lingkaran harus sama dengan jari-jari lingkaran. Oleh karena itu, kita dapat menggunakan rumus jarak antara dua titik:

                \[d = \sqrt{(x_2 - x_1)^2 + (y_2 - y_1)^2}\]

                dengan \((x_1, y_1)\) sebagai koordinat pusat lingkaran dan \((x_2, y_2)\) sebagai koordinat titik pada lingkaran. Kita memiliki:

                \[d = \sqrt{(-2 - 0)^2 + (3 - 0)^2} = \sqrt{13}\]

                Jadi, \(r^2 = 13\) dan persamaan lingkaran akhirnya menjadi: \(\boxed{x^2 + y^2 = 13}\) </p>
            <b class="text-end text-danger fw-bold"> <h3>JAWABAN : A</h3></b>
            </div>
        </div>
<hr>
    <li>Titik pusat dan jari-jari lingkaran \( x^2+y^2+2x-4y-76=0 \) adalah ...</li>
        <ol type="A">
            <li>\((-1,2)\) dan \(9\)</li>
            <li>\((-1,2)\) dan \(7\)</li>
            <li>\((1,-2)\) dan \(7\)</li>
            <li>\((-2,1)\) dan \(9\)</li>
            <li>\((2,-1)\) dan \(9\)</li>
        </ol>
        <button class="btn btn-warning border mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal06" aria-expanded="false" aria-controls="collapsesoal06">
        Alternatif Penyelesaian:
        </button>
        <div class="collapse" id="collapsesoal06">
            <div class="card card-body overflow-auto">
            <p>Untuk menemukan titik pusat dan jari-jari lingkaran, kita perlu mengubah persamaan lingkaran ke bentuk umum:

                $$(x - a)^2 + (y - b)^2 = r^2$$

                dengan \((a,b)\) adalah koordinat titik pusat dan \(r\) adalah jari-jari lingkaran.

                Mari kita ubah persamaan lingkaran yang diberikan ke dalam bentuk umum tersebut:

                \begin{aligned}
                x^2+y^2+2x-4y-76 &= 0\\
                x^2+2x+y^2-4y &= 76\\
                x^2+2x+1+y^2-4y+4 &= 76+1+4\\
                (x+1)^2 + (y-2)^2 &= 81\\
                \end{aligned}

                Sekarang kita dapat mengidentifikasi titik pusat dan jari-jari lingkaran dengan membandingkan persamaan dengan bentuk umum yang kita ketahui:

                $$
                (x-a)^2 + (y-b)^2 = r^2
                $$

                Dalam kasus ini, \((a,b) = (-1,2)\) dan \(r = \sqrt{81}=9\). Jadi, titik pusat lingkaran adalah \(\boxed{(-1, 2)}\) dan jari-jari lingkaran adalah \(\boxed{9}\). </p>
            <b class="text-end text-danger fw-bold"> <h3>JAWABAN : A</h3></b>
            </div>
        </div>
<hr>
    <li>Persamaan lingkaran dengan pusat \((-3,1)\) dan menyinggung garis \( -x+2y+5=0 \) adalah ...</li>
        <ol type="A">
            <li>\(x^2+y^2+6x-2y-10=0 \)</li>
            <li>\(x^2+y^2-6x+2y+20=0 \)</li>
            <li>\(x^2+y^2+x-6y+10=0 \)</li>
            <li>\(x^2+y^2-2x+6y-20=0 \)</li>
            <li>\(x^2+y^2+6x+2y-10=0 \)</li>
        </ol>
        <button class="btn btn-warning border mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal07" aria-expanded="false" aria-controls="collapsesoal07">
        Alternatif Penyelesaian:
        </button>
        <div class="collapse" id="collapsesoal07">
            <div class="card card-body overflow-auto">
            <p>Untuk menentukan persamaan lingkaran yang menyinggung garis \( -x+2y+5=0 \) dan memiliki pusat \((-3,1)\), kita dapat menggunakan beberapa langkah berikut:
                <ol type="1">
                    <li>
                        Tentukan jarak antara pusat lingkaran dan garis. Kita tahu bahwa jarak antara titik \((x_0,y_0)\) dan garis \(ax+by+c=0\) diberikan oleh:
                        \(\displaystyle \frac{|ax_0+by_0+c|}{\sqrt{a^2+b^2}}\)
                        Jadi, dalam kasus ini, jarak antara pusat lingkaran \((-3,1)\) dan garis \( -x+2y+5=0 \) adalah:
                    </li>
                    $$\frac{|-1(-3)+2(1)+5|}{\sqrt{(-1)^2+2^2}}=\frac{10}{\sqrt{5}}=2\sqrt{5}=\sqrt{20}$$
                    <li>
                        Karena lingkaran harus menyinggung garis, maka jarak antara pusat lingkaran dan garis harus sama dengan jari-jari lingkaran. Jadi, jari-jari lingkaran adalah: \(\sqrt{20}\)
                    </li>
                    <li>
                        Persamaan lingkaran dengan pusat \((-3,1)\) dan jari-jari \(r\) dapat dituliskan sebagai:
                        $$(x+3)^2+(y-1)^2=r^2$$
                        Substitusikan \(r\) yang telah kita temukan ke dalam persamaan ini, sehingga persamaan lingkaran akhirnya menjadi:
                        $$(x+3)^2+(y-1)^2=(\sqrt{20})^2$$

                    </li>
                </ol>
            </p>
                <p> Jadi, persamaan lingkaran dengan pusat \((-3,1)\) dan menyinggung garis \( -x+2y+5=0 \) adalah \((x+3)^2+(y-1)^2=20\) atau \(\boxed{x^2+y^2+6x-2y-10=0} \)</p>
            <b class="text-end text-danger fw-bold"> <h3>JAWABAN : A</h3></b>
            </div>
        </div>
<hr>
    <li>Nilai \(p\) yang memenuhi agar titik \((p,2)\) terletak pada lingkaran \( x^2+y^2+10x-14y-95=0 \) adalah ...</li>
        <ol type="A">
            <li>\( 17 \)</li>
            <li>\( 7 \)</li>
            <li>\( -7 \)</li>
            <li>\(27  \)</li>
            <li>\( 37 \)</li>
        </ol>
        <button class="btn btn-warning border mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal08" aria-expanded="false" aria-controls="collapsesoal08">
        Alternatif Penyelesaian:
        </button>
        <div class="collapse" id="collapsesoal08">
            <div class="card card-body overflow-auto">
            <p>Untuk menentukan nilai \(p\) yang memenuhi agar titik \((p,2)\) terletak pada lingkaran \(x^2+y^2+10x-14y-95=0\), kita dapat mengganti \(x\) dengan \(p\) dan \(y\) dengan 2 dalam persamaan lingkaran tersebut sehingga didapatkan:

                \begin{align*}
                p^2+2^2+10p-14(2)-95 &= 0\\
                p^2+4+10p-28-95 &= 0\\
                p^2+10p-119 &= 0 \\
                (p+17)(p-7) &=0
                \end{align*}

                Kita memperoleh nilai \(p\) adalah \(p=-17\) atau \(p=7\). <br> Oleh karena itu, nilai \(p\) yang memenuhi agar titik \((p,2)\) terletak pada lingkaran \(x^2+y^2+10x-14y-95=0\) adalah \(p=-17\) atau \(\boxed{p=7}\). </p>
            <b class="text-end text-danger fw-bold"> <h3>JAWABAN : B</h3></b>
            </div>
        </div>
<hr>
    <li> Salah satu persamaan garis singgung lingkaran \( x^2+y^2+2x-8y+1=0 \) yang sejajar garis \( 3x+4y-1=0 \) adalah ...</li>
        <ol type="A">
            <li>\(4x+3y-33=0 \)</li>
            <li>\(4x+3y-7=0 \)</li>
            <li>\(3x+4y+33=0 \)</li>
            <li>\(3x+4y-33=0 \)</li>
            <li>\(3x+4y-7=0 \)</li>
        </ol>
        <button class="btn btn-warning border mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal09" aria-expanded="false" aria-controls="collapsesoal09">
        Alternatif Penyelesaian:
        </button>
        <div class="collapse" id="collapsesoal09">
            <div class="card card-body overflow-auto">
            <p> rumus persamaan garis singgung \(x^2 + y^2 +Ax +By +C=0 \Rightarrow (y-b) = m(x-a) \pm r \sqrt{m^2 + 1}\) dengan pusat lingkaran di \((a,b)\) dan jari-jari lingkaran \(r\) dan \(m\) adalah gradien dari persamaan garis singgung. <br> Jari-jari Lingkaran :
                \begin{align*}
                r &= \sqrt{\frac{(2)^2 +(-8)^2 -4(1)}{4}} \\
                &= \sqrt{\frac{4 +64 -4}{4}} \\
                &= \sqrt{\frac{64}{4}} \\
                &= \sqrt{16} \\
                &= 4

                \\\\\\

                (a,b) &= \left(-\frac{1}{2} (2), -\frac{1}{2} (-8) \right) \\
                &= (-1,4) \\\\

                3x+4y-1 &=0 \\
                4y &= -3x+1 \\
                y &= \frac{-3x+1}{4} \Rightarrow m=-\frac{3}{4}
                \end{align*}
                Sehingga dari yang diperoleh kita dapat mencari persamaan garis singgungnya:
                \begin{align*}
                (y-b) &= m(x-a) \pm r \sqrt{m^2 + 1} \\
                (y-4) &= -\frac{3}{4} (x+1) \pm 4 \sqrt{\left(-\frac{3}{4}\right)^2+1} \\
                (y-4) &= -\frac{3}{4} (x+1) \pm 4 \sqrt{\left(\frac{9}{16}\right)+1} \\
                (y-4) &= -\frac{3}{4} (x+1) \pm 4 \sqrt{\frac{25}{16}} \\
                (y-4) &= -\frac{3}{4} (x+1) \pm 4 \left(\frac{5}{4}\right) \\
                (4y-16) &= -3 (x+1) \pm 4 (5) \\
                (4y-16) &= -3x-3 \pm 20 \\
                3x+4y-16+3 \pm 20 &= 0 \\
                3x+4y-13 \pm 20 &= 0 \\
                \end{align*}
                Jadi, persamaan garis singgungnya adalah \(\boxed{3x+4y-33=0}\) atau \(3x+4y +7 =0\)
            </p>
            <b class="text-end text-danger fw-bold"> <h3>JAWABAN : D</h3></b>
            </div>
        </div>
<hr>
    <li>Persamaan lingkaran pusat \((-1,2)\) yang melalui titik \((-3,4)\) adalah ....</li>
        <ol type="A">
            <li>\(x^2+y^2+2x-4y-2=0 \)</li>
            <li>\(x^2+y^2+2x-4y-12=0 \)</li>
            <li>\(x^2+y^2-2x-4y-2=0 \)</li>
            <li>\(x^2+y^2+2x-4y-3=0 \)</li>
            <li>\(x^2+y^2+2x-4y-11=0 \)</li>
        </ol>
        <button class="btn btn-warning border mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal10" aria-expanded="false" aria-controls="collapsesoal10">
        Alternatif Penyelesaian:
        </button>
        <div class="collapse" id="collapsesoal10">
            <div class="card card-body overflow-auto">
            <p>Persamaan lingkaran dengan pusat \((-1,2)\) dan melalui titik \((-3,4)\) dapat dicari dengan menggunakan formula umum lingkaran:

                $$(x-a)^2 + (y-b)^2 = r^2,$$

                dengan $(a,b)$ adalah koordinat pusat lingkaran, dan $r$ adalah jari-jari lingkaran.

                Substitusikan koordinat pusat $(-1,2)$ ke dalam persamaan umum tersebut, sehingga didapat:

                $$(x-(-1))^2 + (y-2)^2 = r^2,$$
                $$(x+1)^2 + (y-2)^2 = r^2.$$

                Karena lingkaran tersebut melalui titik \((-3,4)\), maka titik tersebut harus memenuhi persamaan lingkaran tersebut, sehingga:
                \begin{align*}
                (x+1)^2 + (y-2)^2 &= r^2 \\
                (-3+1)^2 + (4-2)^2 &= r^2 \\
                (-2)^2 +(2)^2 &= r^2 \\
                4+4 &= r^2 \\
                r^2 &= 8
                \end{align*}

                Maka persamaan lingkaran tersebut adalah \((x+1)^2 + (y-2)^2 = 8\) atau \(\boxed{x^2+y^2+2x-4y -3=0 }\) </p>
            <b class="text-end text-danger fw-bold"> <h3>JAWABAN : D</h3></b>
            </div>
        </div>
<hr>
    <li> Persamaan garis singgung yang bergradien 3 pada lingkaran \(x^2+y^2 = 10\) adalah...</li>
        <ol type="A">
            <li>\(y=3x + 10\)</li>
            <li>\(y=3x + 8\)</li>
            <li>\(y=3x + 5\)</li>
            <li>\(y=3x + 4\)</li>
            <li>\(y=3x + 2\)</li>
        </ol>
        <button class="btn btn-warning border mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal11" aria-expanded="false" aria-controls="collapsesoal11">
        Alternatif Penyelesaian:
        </button>
        <div class="collapse" id="collapsesoal11">
            <div class="card card-body overflow-auto">
            <p> Persamaan lingkaran \(x^2+y^2 = 10\) pusatnya adalah \((a,b)=(0,0)\) dengan jari-jari \(r=\sqrt{10}\) <br>
                gradien garis singgung adalah \(m=3\), maka kita dapat menggunakan rumus
                \[(y-b) = m(x-a) \pm r \sqrt{m^2 +1} \]
                Jika kita substitusi nilai yang kita miliki diatas akan menjadi
                \begin{align*}
                y-0 &= 3(x-0) \pm \sqrt{10} \sqrt{3^2 +1} \\
                y &= 3x \pm \sqrt{10} \sqrt{10} \\
                y &= 3x \pm 10
                \end{align*}
                Jadi, salah satu garis singgungnya adalah \(\boxed{y = 3x +10 } \)
            </p>
            <b class="text-end text-danger fw-bold"> <h3>JAWABAN : A</h3></b>
            </div>
        </div>
<hr>
    <li>Tentukan persamaan garis singgung yang melalaui titik \(K (3,-4)\) pada lingkaran \(x^2+y^2=25\)</li>
        <ol type="A">
            <li>\(4x - 3y = 25 \)</li>
            <li>\(4x - 3y = 16 \)</li>
            <li>\(3x - 4y = 25 \)</li>
            <li>\(2x - 3y = 16 \)</li>
            <li>\(4x - 3y = 16 \)</li>
        </ol>
        <button class="btn btn-warning border mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal12" aria-expanded="false" aria-controls="collapsesoal12">
        Alternatif Penyelesaian:
        </button>
        <div class="collapse" id="collapsesoal12">
            <div class="card card-body overflow-auto">
            <p>Karena titik \(K(3,-4)\) berada pada lingkaran, maka kita dapat menggunakan rumus berikut untuk mencari persamaan garis singgungnya
                \begin{align*}
                x \cdot x_1 + y \cdot y_1 &= 25 \\
                x(3)+y(-4) &= 25 \\
                3x-4y &= 25
                \end{align*}
                Jadi, persamaan garis singgung nya adalah \(\boxed{3x-4y=25} \)
            </p>
            <b class="text-end text-danger fw-bold"> <h3>JAWABAN : C</h3></b>
            </div>
        </div>
<hr>
    <li> Hasil dan sisa pembagian \( f(x)=x^4+2x^3-2x^2+x+8 \) oleh \((x+2)\) adalah ....</li>
        <ol type="A">
            <li>\( (x^3+x^2-2x+5) \) dan \((-2)\) </li>
            <li>\( (x^3-2x^2+x+5) \) dan \((2)\) </li>
            <li>\( (x^3-2x^2+5x) \) dan \((-2)\) </li>
            <li>\( (x^3-2x+5) \) dan \((-2)\) </li>
            <li> \( (x^3-2x^2+5) \) dan \((2)\) </li>
        </ol>
        <button class="btn btn-warning border mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal13" aria-expanded="false" aria-controls="collapsesoal13">
        Alternatif Penyelesaian:
        </button>
        <div class="collapse" id="collapsesoal13">
            <div class="card card-body overflow-auto">
            <p>

                Untuk membagi polinomial \(f(x)\) oleh \(x+2\), kita bisa menggunakan metode pembagian polinomial. Berikut langkah-langkahnya:

                1. Susun polinomial \(f(x)\) dalam urutan pangkatnya, sehingga:
                   $$f(x) = x^4+2x^3-2x^2+x+8$$
                2. Tuliskan pembagian polinomial dengan metode Horner:
                   $$\begin{array}{rrrrr}
                   \hline
                   x=-2 \hspace{0.5cm} |& 1 &2 &-2 &1 &8 \\
                   |&*& -2&0 &4 &-10 \\ \hline
                   & 1& 0& -2&5 &\boxed{-2}


                   \end{array}$$
                3. Hasil pembagian adalah:
                    \begin{align*}
                    h(x) &= 5 \cdot x^0 + (-2) \cdot x^1 + 0 \cdot x^2 + 1 \cdot x^3 \\
                    h(x) &= x^3 -2x +5
                    \end{align*}

                Jadi, hasil pembagian \(f(x)\) oleh \(x+2\) adalah \(\boxed{x^3 - 2x + 5}\) dengan sisa \(\boxed{-2}\).</p>
            <b class="text-end text-danger fw-bold"> <h3>JAWABAN : D</h3></b>
            </div>
        </div>
<hr>
    <li> Polinomial \( x^3+5x^2+mx+7 \) dibagi \((x-2)\) bersisa \(29\). Nilai \(m\) yang memenuhi adalah ...</li>
        <ol type="A">
            <li>\(3 \)</li>
            <li>\(2 \)</li>
            <li>\(-2 \)</li>
            <li>\(-3 \)</li>
            <li>\(-4 \)</li>
        </ol>
        <button class="btn btn-warning border mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal14" aria-expanded="false" aria-controls="collapsesoal14">
        Alternatif Penyelesaian:
        </button>
        <div class="collapse" id="collapsesoal14">
            <div class="card card-body overflow-auto">
            <p>Kita dapat menggunakan teorema sisa untuk menyelesaikan masalah ini. Teorema sisa menyatakan bahwa jika suatu polinomial \(P(x)\) dibagi dengan polinomial \(x-a\), maka sisa pembagian dapat ditemukan dengan mengganti \(x\) dengan \(a\) dalam \(P(x)\). Dalam hal ini, kita diberikan bahwa \(P(x) = x^3+5x^2+mx+7\) dibagi dengan \((x-2)\) dan bersisa \(29\) itu berarti \(P(2)=29\). Oleh karena itu, kita dapat menuliskan:

                \begin{align*}
                P(2) &= 2^3 + 5(2^2) + m(2) + 7 \\
                29 &= 8 + 20 + 2m + 7  \\
                29 &= 2m + 35 \\
                2m &= 29-35 \\
                2m &= -6 \\
                m &= -3
                \end{align*}
               Jadi, nilai \(m\) yang memenuhi adalah \(\boxed{-3} \)
               </p>
            <b class="text-end text-danger fw-bold"> <h3>JAWABAN : D</h3></b>
            </div>
        </div>
<hr>
    <li> Polinomial \(f(x)\) dirumuskan dengan \( f(x)=6x^4-5x^3-px+10 \). Jika diketahui nilai \(f(1) = f(-1) + 8\), nilai \(p\) yang memenuhi adalah ...</li>
        <ol type="A">
            <li>\(-11 \)</li>
            <li>\(-9\)</li>
            <li>\(9 \)</li>
            <li>\(11 \)</li>
            <li>\(20 \)</li>
        </ol>
        <button class="btn btn-warning border mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal15" aria-expanded="false" aria-controls="collapsesoal15">
        Alternatif Penyelesaian:
        </button>
        <div class="collapse" id="collapsesoal15">
            <div class="card card-body overflow-auto">
            <p>Untuk mencari nilai \(p\), kita dapat memanfaatkan informasi yang diberikan bahwa \(f(1) = f(-1) + 8\). Substitusikan \(x=1\) dan \(x=-1\) ke dalam persamaan polinomial tersebut, sehingga kita dapat membentuk sistem persamaan sebagai berikut:

                \begin{align*}
                f(1) &= 6(1)^4-5(1)^3-p(1)+10 \\
                &= 6-5-p+10 \\
                &= 11-p \\
                \\
                f(-1) &= 6(-1)^4-5(-1)^3-p(-1)+10 \\
                &= 6+5+p+10 \\
                &= 21+p
                \end{align*}

                Diketahui bahwa \(f(1) = f(-1) + 8\), sehingga:

                \begin{align*}
                11-p &= 21+p+8 \\
                11-21-8 &= 2p \\
                2p &= -18 \\
                p &= -9
                \end{align*}

                Jadi, nilai \(p\) yang memenuhi adalah \(\boxed{-9} \).</p>
            <b class="text-end text-danger fw-bold"> <h3>JAWABAN : B</h3></b>
            </div>
        </div>
<hr>
    <li>Fungsi \(h(x)\) dihasilkan dari operasi \(f(x) \times g(x)\). Jika \( f(x)=x^2+3x-1 \) dan \( g(x) = 2x^2-x \) , koefisien \( x^3 \) pada \(h(x)\) adalah ...</li>
        <ol type="A">
            <li>\(5 \)</li>
            <li>\(2 \)</li>
            <li>\(1 \)</li>
            <li>\(-5 \)</li>
            <li>\(-6 \)</li>
        </ol>
        <button class="btn btn-warning border mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal16" aria-expanded="false" aria-controls="collapsesoal16">
        Alternatif Penyelesaian:
        </button>
        <div class="collapse" id="collapsesoal16">
            <div class="card card-body overflow-auto">
            <p>

                Untuk menghitung koefisien \(x^3\) pada \(h(x)\), kita perlu mengalikan kedua polinomial dan mengidentifikasi koefisien \(x^3\) pada hasil kali tersebut.

                $$
                \begin{aligned}
                h(x) &= f(x) \times g(x) \\
                &= (x^2+3x-1) \times (2x^2-x) \\
                &= 2x^4 - x^3 + 6x^3 - 3x^2 - 2x^2 + x \\
                &= 2x^4 + 5x^3 - 5x^2 + x
                \end{aligned}
                $$

                Koefisien \(x^3\) pada \(h(x)\) adalah \(5\). Jadi, jawabannya adalah \(\boxed{5}\).</p>
            <b class="text-end text-danger fw-bold"> <h3>JAWABAN : A</h3></b>
            </div>
        </div>
<hr>
    <li>Diketahui \( f(x)=(6x^2+px-9)(2x+5) \). Jika \(f(3) = 396\), nilai \(p\) yang memenuhi adalah ...</li>
        <ol type="A">
            <li>\(27 \)</li>
            <li>\(9 \)</li>
            <li>\(3 \)</li>
            <li>\(-3 \)</li>
            <li>\(-9 \)</li>
        </ol>
        <button class="btn btn-warning border mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal17" aria-expanded="false" aria-controls="collapsesoal17">
        Alternatif Penyelesaian:
        </button>
        <div class="collapse" id="collapsesoal17">
            <div class="card card-body overflow-auto">
            <p> Untuk mencari nilai \(p\), kita bisa menggunakan fakta bahwa \(f(3)\) adalah nilai dari \(f(x)\) saat \(x=3\). Oleh karena itu, kita dapat menyelesaikan masalah ini dengan memasukkan \(x=3\) ke dalam persamaan \(f(x)\) dan menyelesaikannya untuk \(p\). <br>

                Pertama, kita perlu mengevaluasi \(f(3)\):

                $$
                \begin{aligned}
                f(3) &= (6(3)^2+p(3)-9)(2(3)+5) \\
                &= (54+3p-9)(6+5) \\
                &= (45+3p) \times 11 \\
                &= 495 + 33p
                \end{aligned}
                $$

                Karena kita sudah diketahui bahwa \(f(3)=396\), maka kita bisa menyelesaikan persamaan di atas untuk mencari nilai \(p\):

                $$
                \begin{aligned}
                495 + 33p &= 396 \\
                33p &= 396 - 495 \\
                p &= \frac{-99}{33} \\
                p &= -3
                \end{aligned}
                $$

                Jadi, nilai \(p\) yang memenuhi adalah \(\boxed{-3}\)</p>
            <b class="text-end text-danger fw-bold"> <h3>JAWABAN : D</h3></b>
            </div>
        </div>
<hr>
    <li> Diketahui polinomial \( f(x)=2x^3+x^2-18 \) dan \( g(x)=x^3-2x^2-3x+1 \). Jika \(f(x)\) dibagi oleh \((x-2)\) bersisa \(k\), \(g(x)\) dibagi olh \((x+k)\) bersisa ...</li>
        <ol type="A">
            <li>\(-3 \)</li>
            <li>\(-2 \)</li>
            <li>\(-5 \)</li>
            <li>\(-9 \)</li>
            <li>\(-4 \)</li>
        </ol>
        <button class="btn btn-warning border mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal18" aria-expanded="false" aria-controls="collapsesoal18">
        Alternatif Penyelesaian:
        </button>
        <div class="collapse" id="collapsesoal18">
            <div class="card card-body overflow-auto">
            <p> Untuk mencari sisa dari pembagian polinomial dengan polinomial lain, kita dapat menggunakan Teorema Sisa atau Remainder Theorem. <br> <br> Teorema Sisa menyatakan bahwa jika sebuah polinomial \(f(x)\) dibagi dengan polinomial linear \((x-a)\), maka sisa pembagian adalah \(f(a)\). <br> <br>

                Dalam kasus ini, kita akan menggunakan Teorema Sisa untuk mencari sisa pembagian \(f(x)\) dengan \((x-2)\) dan \(g(x)\) dengan \((x+k)\).

                Untuk \(f(x)\), Teorema Sisa menyatakan bahwa sisa pembagian \(f(x)\) dengan \((x-2)\) adalah \(f(2)\). Oleh karena itu, kita tinggal menghitung \(f(2)\):

                $$
                f(2) = 2(2)^3 + (2)^2 - 18 = 16 + 4 - 18 = 2
                $$

                Jadi, sisa pembagian \(f(x)\) dengan \((x-2)\) adalah \(k=2\).

                Untuk \(g(x)\), Teorema Sisa menyatakan bahwa sisa pembagian \(g(x)\) dengan \((x+2)\) adalah \(g(2)\). Oleh karena itu, kita tinggal menghitung \(g(2)\):

                \begin{align*}
                g(2) &= (2)^3 - 2(2)^2 - 3(2) + 1 \\
                &= 8 - 8 - 6 + 1 \\
                &= -5
                \end{align*}

                Jadi, sisa pembagian \(g(x)\) dengan \((x+2)\) adalah \(\boxed{-5}\).</p>
            <b class="text-end text-danger fw-bold"> <h3>JAWABAN : C</h3></b>
            </div>
        </div>
<hr>
    <li> Diketahui \( f(x)=x^5+x^4+ax^3+x^2+5x+2 \) . Jika \(f(2)=8\), nilai \(a\) adalah ....
    </li>
        <ol type="A">
            <li>\(-8 \)</li>
            <li>\(-7 \)</li>
            <li>\(-4 \)</li>
            <li>\(6 \)</li>
            <li>\(3 \)</li>
        </ol>
        <button class="btn btn-warning border mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal19" aria-expanded="false" aria-controls="collapsesoal19">
        Alternatif Penyelesaian:
        </button>
        <div class="collapse" id="collapsesoal19">
            <div class="card card-body overflow-auto">
            <p> Untuk mencari nilai \(a\), kita dapat menggunakan informasi bahwa \(f(2)=8\). Oleh karena itu, kita substitusikan \(x=2\) ke dalam persamaan \(f(x)\) tersebut, sehingga:

                \begin{align*}
                f(2) &= 2^5 + 2^4 + a(2^3) + 2^2 + 5(2) + 2 \\
                &= 32 + 16 + 8a + 4 + 10 + 2\\
                &= 64 + 8a
                \end{align*}

                Kita dapat menyederhanakan persamaan tersebut dan memecahkannya untuk mencari nilai \(a\):

                \begin{align*}
                64 + 8a &= 8 \\
                8a &= 8-64 \\
                8a &= -56 \\
                a &= -7
                \end{align*}

                Jadi, nilai \(a\) adalah \(\boxed{-7} \)</p>
            <b class="text-end text-danger fw-bold"> <h3>JAWABAN : B</h3></b>
            </div>
        </div>
<hr>
    <li> Nilai \(A+B\) yang memenuhi kesamaan \(3x^2 -5x - 6  \equiv  Ax^2 +(B+C)x + 2(B-C)\) adalah...</li>
        <ol type="A">
            <li>\(-1 \)</li>
            <li>\(1 \)</li>
            <li>\(7 \)</li>
            <li>\(-7 \)</li>
            <li>\(0 \)</li>
        </ol>
        <button class="btn btn-warning border mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal20" aria-expanded="false" aria-controls="collapsesoal20">
        Alternatif Penyelesaian:
        </button>
        <div class="collapse" id="collapsesoal20">
            <div class="card card-body overflow-auto">
            <p>

                Pertama-tama, kita bisa menyamakan koefisien untuk setiap pangkat $x$ di kedua sisi persamaan:

                \begin{align*}
                3x^2 -5x - 6 &= Ax^2 +(B+C)x + 2(B-C)\\
                \Rightarrow\quad 3 &= A \\
                \Rightarrow\quad -5 &= B+C \\
                \Rightarrow\quad -6 &= 2(B-C) \\
                \Rightarrow\quad -3 &= B-C \\
                \end{align*}
                \begin{align*}
                -5 &= B+C \\
                -3 &= B-C (-)\\ \hline
                -2 &= 2C \\
                C &= -1 \\\\

                -5 &= B+C \\
                -5&= B + (-1) \\
                -5+1 &= B \\
                B &= -4
                \end{align*}

                Jadi, nilai \(A\) adalah 3 dan nilai \(B\) adalah \(-4). Sekarang kita dapat menemukan nilai \(A+B\) dengan menambahkan nilai-nilai ini:

                \begin{align*}
                A+B &= 3 + (-4) \\
                &= -1
                \end{align*}

                Jadi, nilai \(A+B\) yang memenuhi persamaan di atas adalah \(\boxed{-1} \).</p>
            <b class="text-end text-danger fw-bold"> <h3>JAWABAN : A</h3></b>
            </div>
        </div>
<hr>
    <li>Hasil dari \((x+5)(2x^2+7x-15)\) adalah...</li>
        <ol type="A">
            <li>\(2x^3+17x^2+20x-75=0 \)</li>
            <li>\(2x^3+17x^2+20x-15=0 \)</li>
            <li>\(2x^3+17x^2+10x-75=0 \)</li>
            <li>\(2x^3+17x^2+45x-75=0 \)</li>
            <li>\(2x^3+17x^2+45x+75=0 \)</li>
        </ol>
        <button class="btn btn-warning border mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal21" aria-expanded="false" aria-controls="collapsesoal21">
        Alternatif Penyelesaian:
        </button>
        <div class="collapse" id="collapsesoal21">
            <div class="card card-body overflow-auto">
            <p> Untuk mengalikan dua polinomial seperti \((x+5)(2x^2+7x-15)\), kita bisa menggunakan metode distributif. Ini berarti kita mengalikan setiap istilah dari polinomial pertama dengan setiap istilah dari polinomial kedua dan kemudian menggabungkan hasilnya. <br><br>

                Dalam hal ini, kita bisa memulai dengan mengalikan \(x\) dengan setiap istilah di dalam tanda kurung kedua, yaitu \(2x^2+7x-15\), dan kemudian mengalikan \(5\) dengan setiap istilah di dalam tanda kurung kedua. Kemudian kita akan menggabungkan hasilnya dan menyederhanakan ekspresi.
                <br>
                Mari kita lakukan langkah-langkahnya:

                \begin{align*}
                (x+5)(2x^2+7x-15)
                &= x \cdot (2x^2+7x-15) + 5 \cdot (2x^2+7x-15) \\
                &= 2x^3 + 7x^2 - 15x + 10x^2 + 35x - 75 \\
                &= 2x^3 + 17x^2 + 20x - 75
                \end{align*}

                Jadi, hasil dari \((x+5)(2x^2+7x-15)\) adalah \(\boxed{2x^3 + 17x^2 + 20x - 75}\).
            </p>
            <b class="text-end text-danger fw-bold"> <h3>JAWABAN : A</h3></b>
            </div>
        </div>
<hr>
    <li> Hasil bagi dari polinomial \((3x^3+2x^2+x+1)\) oleh \((x-2)\) adalah...</li>
        <ol type="A">
            <li>\((3x^2+8x+17) \)</li>
            <li>\((3x^2-8x+17)\)</li>
            <li>\((3x^2+8x-17) \)</li>
            <li>\((2x^2-8x+17)\)</li>
            <li>\((2x^2+8x-17) \)</li>
        </ol>
        <button class="btn btn-warning border mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal22" aria-expanded="false" aria-controls="collapsesoal22">
        Alternatif Penyelesaian:
        </button>
        <div class="collapse" id="collapsesoal22">
            <div class="card card-body overflow-auto">
            <p>Untuk melakukan pembagian polinomial menggunakan metode Horner, pertama-tama kita harus menuliskan koefisien polinomial dan pembagi dalam bentuk tabel seperti berikut:

                \begin{array}{c|cccc}
                 & 3 & 2 & 1 & 1 \\
                2 & *& 6 & 16 & 34 \\
                \hline
                 & 3 & 8 & 17 & \boxed{35} \\
                \end{array}

                Pada tabel di atas, baris pertama berisi koefisien polinomial \((3x^3+2x^2+x+1)\), dan baris kedua berisi hasil perkalian pembagi \((x-2)\) dengan koefisien-koefisien tersebut. Baris ketiga adalah hasil dari operasi penjumlahan baris pertama dan kedua.
                <br>
                Dengan menggunakan metode Horner, hasil bagi polinomial adalah koefisien pada baris ketiga, yaitu \(3x^2+8x+17\) dengan sisa pembagian 35. Oleh karena itu, hasil bagi polinomial \((3x^3+2x^2+x+1)\) oleh \((x-2)\) adalah: \(\boxed{3x^2+8x+17}\) </p>
            <b class="text-end text-danger fw-bold"> <h3>JAWABAN : A</h3></b>
            </div>
        </div>
<hr>
    <li> Sisa pembagian dari polinomial \((3x^3+2x^2+x+1)\) oleh \((x-2)\) adalah...</li>
        <ol type="A">
            <li>\(35 \)</li>
            <li>\(32 \)</li>
            <li>\(17 \)</li>
            <li>\(8 \)</li>
            <li>\(21 \)</li>
        </ol>
        <button class="btn btn-warning border mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal23" aria-expanded="false" aria-controls="collapsesoal23">
        Alternatif Penyelesaian:
        </button>
        <div class="collapse" id="collapsesoal23">
            <div class="card card-body overflow-auto">
            <p>Teorema sisa atau remainder theorem adalah suatu metode untuk menentukan sisa pembagian suatu polinomial dengan pembagi berupa polinomial linear. Teorema sisa menyatakan bahwa jika sebuah polinomial \(f(x)\) dibagi dengan polinomial linear \((x-a)\), maka sisa pembagiannya adalah \(f(a)\).
                <br> <br>
                Dalam kasus ini, polinomial yang akan dibagi adalah \(3x^3+2x^2+x+1\) dan pembaginya adalah \(x-2\). Karena pembaginya merupakan polinomial linear, maka kita dapat menggunakan teorema sisa untuk menentukan sisa pembagiannya.
                <br> <br>
                Menurut teorema sisa, sisa pembagian dari polinomial \(3x^3+2x^2+x+1\) oleh \((x-2)\) adalah sama dengan nilai dari polinomial tersebut pada \(x=2\), yaitu:

                $$3(2)^3+2(2)^2+2+1=24+8+2+1=35$$

                Jadi, sisa pembagian dari polinomial \(3x^3+2x^2+x+1\) oleh \((x-2)\) adalah \(\boxed{35}\).</p>
            <b class="text-end text-danger fw-bold"> <h3>JAWABAN : A</h3></b>
            </div>
        </div>
<hr>
    <li>Jika \(f(x) = 2x^3 + ax^2 + 20x + 10\) dibagi oleh \((2x - 1\)) bersisa \(52\), maka nilai \(a\) adalah...</li>
        <ol type="A">
            <li>\(125\)</li>
            <li>\(126 \)</li>
            <li>\(127 \)</li>
            <li>\(128 \)</li>
            <li>\(130 \)</li>
        </ol>
        <button class="btn btn-warning border mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal24" aria-expanded="false" aria-controls="collapsesoal24">
        Alternatif Penyelesaian:
        </button>
        <div class="collapse" id="collapsesoal24">
            <div class="card card-body overflow-auto">
            <p>Kita dapat menggunakan teorema sisa atau remainder theorem untuk menyelesaikan masalah ini. Menurut teorema sisa, jika polinomial \(f(x)\) dibagi dengan polinomial linear \((x-a)\), maka sisa pembagiannya adalah \(f(a)\). Dalam hal ini, polinomial \(f(x)\) akan dibagi dengan polinomial linear \((2x-1)\), sehingga sisa pembagian dari pembagian ini adalah \(f(\frac{1}{2})\).
                <br><br>
                Diketahui bahwa \(f(x) = 2x^3 + ax^2 + 20x + 10\) bersisa \(52\) jika dibagi oleh \((2x - 1)\). Oleh karena nilai \(f(\frac{1}{2})=52\), maka:
                \begin{align*}
                f\left(\frac{1}{2}\right) &= 2\left(\frac{1}{2}\right)^3 + a\left(\frac{1}{2}\right)^2 + 20\left(\frac{1}{2}\right) + 10 \\
                52 &= 2\left(\frac{1}{8}\right) + a\left(\frac{1}{4}\right) + 20\left(\frac{1}{2}\right) + 10 \\
                52 &= \left(\frac{1}{4}\right) + \left(\frac{1}{4}a\right) + 10 + 10 \\
                52 &= \left(\frac{1}{4}\right) + \left(\frac{1}{4}a\right) + \frac{80}{4} \\
                208 &= 1 + a + 80 \\
                208 &= a + 81 \\
                a &= 208-81 \\
                a&= 127
                \end{align*}

                Jadi, nilai \(a\) adalah \(\boxed{127}\).</p>
            <b class="text-end text-danger fw-bold"> <h3>JAWABAN : C</h3></b>
            </div>
        </div>
<hr>
    <li> Diketahui kesamaan \(\displaystyle \frac{2x-3}{x^2 -4}  \equiv \frac{A}{x+2} + \frac{B}{x-2} \). Nilai \(A\) adalah . . .  </li>
        <ol type="A">
            <li>\(-1 \)</li>
            <li>\(\displaystyle \frac{7}{4} \)</li>
            <li>\(-7 \)</li>
            <li>\(\displaystyle\frac{5}{4} \)</li>
            <li>\(\displaystyle-\frac{7}{4}\)</li>
        </ol>
        <button class="btn btn-warning border mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal25" aria-expanded="false" aria-controls="collapsesoal25">
        Alternatif Penyelesaian:
        </button>
        <div class="collapse" id="collapsesoal25">
            <div class="card card-body overflow-auto">
            <p>

                Kita mulai dengan memfaktorkan penyebut pecahan di sebelah kiri:
                \[\frac{2x-3}{x^2-4} = \frac{2x-3}{(x-2)(x+2)}\]

                Pertama, kita tuliskan pecahan di sebelah kanan sebagai satu pecahan dengan penyebut yang sama:
                \[\frac{A}{x+2}+\frac{B}{x-2} \equiv \frac{A(x-2)+B(x+2)}{(x+2)(x-2)}\]

                Kita ingin menyamakan pecahan di sebelah kiri dengan pecahan di sebelah kanan. Oleh karena itu, kita harus mencari nilai \(A\) dan \(B\) sehingga:
                \begin{align*}
                2x-3 &\equiv A(x-2)+B(x+2) \\
                2x-3 &\equiv Ax + Bx -2A + 2B \\
                2x-3 &\equiv (A + B)x -2A + 2B \\

                \end{align*}

                Kita dapat menyelesaikan persamaan di atas dengan mencocokkan koefisien \(x\) dan konstanta di kedua sisi persamaan. Dengan cara ini, kita dapat menentukan nilai dari \(A\) dan \(B\).

                Pertama, kita cocokkan koefisien \(x\):
                \begin{align*}
                2x &= Ax+Bx \\
                2 &= A+B
                \end{align*}

                Kedua, kita cocokkan konstanta:
                \begin{align*}
                -3 &= -2A+2B \\
                3 &= 2A-2B \\
                3 &= 2(A-B)\\
                \frac{3}{2} &= A-B
                \end{align*}

                Dengan menggeliminasi kedua persamaan di atas, kita dapat menentukan nilai dari \(A\) dan \(B\):
                \begin{align*}
                2 &= A+B \\
                \frac{3}{2} &= A-B \; (+)\\
                \hline
                \frac{7}{2} &= 2A \\
                A &= \frac{7}{4} \\
                \end{align*}

                Jadi, nilai \(A\) adalah \(\boxed{\frac{7}{4}}\).</p>
            <b class="text-end text-danger fw-bold"> <h3>JAWABAN : B</h3></b>
            </div>
        </div>
<hr>
    <li>Jumlah akar-akar dari persamaan \(3x^3 + 6x^2 - 24x + 8 = 0\) adalah...</li>
        <ol type="A">
            <li>\(2 \)</li>
            <li>\(-2 \)</li>
            <li>\(9 \)</li>
            <li>\(8 \)</li>
            <li>\(-7 \)</li>
        </ol>
        <button class="btn btn-warning border mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal26" aria-expanded="false" aria-controls="collapsesoal26">
        Alternatif Penyelesaian:
        </button>
        <div class="collapse" id="collapsesoal26">
            <div class="card card-body overflow-auto">
            <p>Kita dapat menggunakan Teorema Vieta untuk mencari jumlah akar-akar dari persamaan kubik \(3x^3 + 6x^2 - 24x + 8 = 0\).
                <br> <br>
                Teorema Vieta menyatakan bahwa jika suatu persamaan polinomial dinyatakan dalam bentuk umum \(ax^n + bx^{n-1} + \dots + cx + d = 0\), maka jumlah akar-akarnya sama dengan koefisien dari suku kedua (yaitu <b>b</b>) dibagi dengan koefisien dari suku pertama (yaitu <b>a</b> ), dengan tanda negatif:
                <br> <br>
                \[\text{Jumlah akar-akar} = - \frac{b}{a} \]
                <br><br>
                Dalam persamaan \(3x^3 + 6x^2 - 24x + 8 = 0\), koefisien dari suku kedua adalah 6 dan koefisien dari suku pertama adalah 3. Oleh karena itu, jumlah akar-akar persamaan tersebut adalah:
                <br> <br>
                \[\text{Jumlah akar-akar} = - \frac{b}{a} = -\frac{6}{3} = -2\]
                <br><br>
                Jadi, jumlah akar-akar dari persamaan \(3x^3 + 6x^2 - 24x + 8 = 0\) adalah \(\boxed{-2}\).</p>
            <b class="text-end text-danger fw-bold"> <h3>JAWABAN : B</h3></b>
            </div>
        </div>
<hr>
    <li> Hasil kali akar-akar persamaan \(3x^3 + 6x^2 -24x + 9 = 0\) adalah . . .</li>
        <ol type="A">
            <li>\(-3 \)</li>
            <li>\(-2 \)</li>
            <li>\(9 \)</li>
            <li>\(8 \)</li>
            <li>\(7 \)</li>
        </ol>
        <button class="btn btn-warning border mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal27" aria-expanded="false" aria-controls="collapsesoal27">
        Alternatif Penyelesaian:
        </button>
        <div class="collapse" id="collapsesoal27">
            <div class="card card-body overflow-auto">
            <p> Kita dapat menggunakan Teorema Vieta untuk mencari hasil kali akar-akar persamaan kubik \(3x^3 + 6x^2 -24x + 9 = 0\).
                <br> <br>
                Teorema Vieta menyatakan bahwa jika suatu persamaan polinomial dinyatakan dalam bentuk umum \(ax^3 + bx^2 + cx + d = 0\), maka hasil kali akar-akarnya sama dengan \(\displaystyle \left(-\frac{d}{a}\right) \), dengan asumsi bahwa semua akar-akar adalah bilangan real.
                <br><br>
                Dalam persamaan \(3x^3 + 6x^2 -24x + 9 = 0\), koefisien dari suku pertama (a) adalah 3 dan konstanta (d) adalah 9. Oleh karena itu, hasil kali akar-akar persamaan tersebut adalah:
                <br><br>
                \[\text{hasil kali akar-akar} = -\frac{d}{a} = -\frac{9}{3} = -3\]

                Jadi, hasil kali akar-akar persamaan \(3x^3 + 6x^2 -24x + 9 = 0\) adalah \(\boxed{-3}\).</p>
            <b class="text-end text-danger fw-bold"> <h3>JAWABAN : A</h3></b>
            </div>
        </div>
<hr>
    <li>Diketahui \(x_1 , x_2,\) dan \(x_3\) adalah akar-akar dari persamaan \(2x^3 - x^2 +px + 4 =0\).Jika \(x_1\) dan \(x_2\) saling berlawanan, maka nilai \(p\) adalah...</li>
        <ol type="A">
            <li>\(-8 \)</li>
            <li>\(-3 \)</li>
            <li>\(2 \)</li>
            <li>\(9 \)</li>
            <li>\(-4 \)</li>
        </ol>
        <button class="btn btn-warning border mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal28" aria-expanded="false" aria-controls="collapsesoal28">
        Alternatif Penyelesaian:
        </button>
        <div class="collapse" id="collapsesoal28">
            <div class="card card-body overflow-auto">
            <p>Kita dapat menggunakan teorema Vieta untuk mencari nilai \(p\), yaitu:

                $$
                \begin{aligned}
                x_1 + x_2 + x_3 &= \frac{1}{2} \\
                x_1x_2 + x_2x_3 + x_1x_3 &= \frac{p}{2} \\
                x_1 \cdot x_2 \cdot x_3 &= -2
                \end{aligned}
                $$

                Karena \(x_1\) dan \(x_2\) saling berlawanan, maka \(x_1 + x_2 = 0\), sehingga kita dapat menuliskan:

                $$
                \begin{aligned}
                x_1 + x_2 + x_3 &= \frac{1}{2} \\
                x_3 &= \frac{1}{2}
                \end{aligned}
                $$

                Selanjutnya, substitusikan \(\displaystyle x_3=\frac{1}{2}\) ke dalam persamaan ketiga teorema Vieta untuk mendapatkan:

                $$
                \begin{aligned}
                x_1\cdot x_2 \cdot x_3 &= -2 \\
                x_1 \cdot x_2 &= -4
                \end{aligned}
                $$

                Karena \(x_1\) dan \(x_2\) saling berlawanan, maka \(x_2=-x_1=\pm 2\). Dengan menggunakan persamaan kedua teorema Vieta, kita dapat menyelesaikan untuk \(p\):

                $$
                \begin{aligned}
                x_1 \cdot x_2 + x_2 \cdot x_3 + x_1 \cdot x_3 &= \frac{p}{2} \\
                x_1 \cdot x_2 + (x_2 + x_1) x_3 &= \frac{p}{2} \\
                -4 + 0 (\frac{1}{2}) &= \frac{p}{2} \\
                -4 \cdot 2 &= p \\
                p &= -8
                \end{aligned}
                $$
                Jadi, nilai \(p\) adalah \(\boxed{-8}\) </p>
            <b class="text-end text-danger fw-bold"> <h3>JAWABAN : A</h3></b>
            </div>
        </div>
<hr>
    <li>Sebuah polinomial jika dibagi \((x - 4)\) bersisa \(5\) dan jika dibagi \((x - 3)\) bersisa \(-2\). Jika polinomial tersebut dibagi \(x^2 -7x +12\), maka sisanya adalah...</li>
        <ol type="A">
            <li>\(S(x) = 7x - 23 \)</li>
            <li>\(S(x) = 7x + 23 \)</li>
            <li>\(S(x) = 2x + 21 \)</li>
            <li>\(S(x) = 2x - 25 \)</li>
            <li>\(S(x) = x - 28 \)</li>
        </ol>
        <button class="btn btn-warning border mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal29" aria-expanded="false" aria-controls="collapsesoal29">
        Alternatif Penyelesaian:
        </button>
        <div class="collapse" id="collapsesoal29">
            <div class="card card-body overflow-auto">
            <p>

                Misalkan polinomial yang dimaksud adalah \(f(x)\). Kita dapat menulis:

                $$
                f(x) = (x-4)q_1(x) + s(x)
                $$

                dan

                $$
                f(x) = (x-3)q_2(x) + s(x)
                $$

                <br>
                Dari persamaan pertama, kita dapatkan bahwa \(f(4) = 5\), karena jika kita substitusikan \(x=4\) maka sisanya adalah \(5\).
                <br> <br>
                Dari persamaan kedua, kita dapatkan bahwa \(f(3) = -2\), karena jika kita substitusikan \(x=3\) maka sisanya adalah \(-2\).
                <br> <br>
                Faktor dari \(x^2 -7x +12\) adalah \((x-4)(x-3) \) <br> <br>
                Suku banyak jika dibagi oleh suku berderajat dua akan memiliki sisa tertinggi dari pembagian adalah suku berderajat satu <br> <br>
                Sehingga kita dapat memisalkan sisa pembagiannya menjadi \(s(x)=ax+b\), Maka
                \begin{align*}
                f(4) &= a(4) + b \\
                5 &= 4a + b \\\\
                f(3) &= a(3) + b \\
                -2 &= 3a + b \\\\\\

                5 &= 4a + b \\
                -2 &= 3a + b (-)\\
                \hline
                7 &= a \\
                a &= 7 \\\\

                5 &= 4a + b \\
                5 &= 4(7) + b \\
                5 &= 28 + b \\
                b &= 5-28 \\
                b &= -23 \\
                \end{align*}
                Sehingga sisa pembagianyya adalah \(ax+b = \boxed{7x - 23}\)
                </p>
            <b class="text-end text-danger fw-bold"> <h3>JAWABAN : A</h3></b>
            </div>
        </div>
<hr>
    <li>Jika polinomial \(f(x)\) berderajat \(5\) dan polinomial \(g(x)\) berderajat \(3\), derajat polinomial hasil operasi \( f(x) \times g(x) - (f(x))^2 \) adalah ...
    </li>
        <ol type="A">
            <li>\(25 \)</li>
            <li>\(15 \)</li>
            <li>\(10 \)</li>
            <li>\(8 \)</li>
            <li>\(5 \)</li>
        </ol>
        <button class="btn btn-warning border mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal30" aria-expanded="false" aria-controls="collapsesoal30">
        Alternatif Penyelesaian:
        </button>
        <div class="collapse" id="collapsesoal30">
            <div class="card card-body overflow-auto">
            <p>Dari penjelasan kita cukup ambil variabel pangkat tertinggi dari setiap fungsi, maka jika di operasikan akan menjadi seperti berikut :
                \begin{align*}
                f(x) \times g(x) - (f(x))^2 &= x^5 \times x^3 - (x^5)^2\\
                &= x^8 - x^{10}
                \end{align*}
                Terlihat bahwa pangkat 10 merupakan pangkat tertinggi, maka derajat polinomial hasil operasi adalah pangkat \(\boxed{10}\)
            </p>
            <b class="text-end text-danger fw-bold"> <h3>JAWABAN : C</h3></b>
            </div>
        </div>
<hr>

<!---------------------------------------------------------------------------------------------------------------------- -->
</ol>
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

