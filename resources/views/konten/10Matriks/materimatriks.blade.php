@extends('konten.10Matriks.10.template')
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
            MATRIKS
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
                {{--  --}}
                <p>
                    Dalam bidang industri, adakalanya seorang pengusaha dengan alasan efisiensi biaya menempatkan pabrik dan gudang tempat meletakkan hasil produksinya di tempat terpisah. Permasalahan yang timbul adalah bagaimana cara
                    mendistribusikan hasil produksi dari masing-masing pabrik ke masing-masing gudang yang terbesar dan biaya transportasi yang dikeluarkan agar seminimal mungkin. Permasalah tersebut dalam bidang matematika merupakan
                    <i>permasalahan transportasi</i>. Permasalahan transportasi ini dimodelkan menjadi bentuk sistem persamaan linear dan dapat diselesaikan dengan konsep matriks yang akan dipelajari pada bab ini.
                </p>
                <div id="pengertian">
                    <hr>
                    <hr>
                    <h1 class="text-primary"><b>I) Pengertian, Notasi, dan Ordo suatu Matriks</b></h1>
                    <hr>
                    <hr>
                    Empat kota, yaitu A, B, C, dan D terhubungkan seperti terlihat pada Gambar Kota A dan B dihubungkan oleh satu jalan, dan jalan menghubungkan kota A dan C, tiga jalan menghubungkan kota C dan D, serta satu jalan menghubungkan kota B
                    dan D. Deskripsi tersebut dapat disajikan dalam Tabel berikut.
                    <!-- tabel -->
                    <div class="row justify-content-center">
                    <div class="col-md-4">
                      <table class="table">
                        <thead>
                          <tr>
                            <th scope="col"></th>
                            <th scope="col">A</th>
                            <th scope="col">B</th>
                            <th scope="col">C</th>
                            <th scope="col">D</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope="row">A</th>
                            <td>0</td>
                            <td>1</td>
                            <td>2</td>
                            <td>0</td>
                          </tr>
                          <tr>
                            <th scope="row">B</th>
                            <td>1</td>
                            <td>0</td>
                            <td>0</td>
                            <td>1</td>
                          </tr>
                          <tr>
                            <th scope="row">C</th>
                            <td>2</td>
                            <td>0</td>
                            <td>0</td>
                            <td>3</td>
                          </tr>
                          <tr>
                            <th scope="row">D</th>
                            <td>0</td>
                            <td>1</td>
                            <td>3</td>
                            <td>0</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                    <div class="col-md-4">
                      <a href=""><img src="{{asset('asets/matriks/pengertianmateri1.png')}}" class="img-fluid" alt="gambar1" width="250" height="250" /></a>
                    </div>
                    </div>
                    <!-- end tabel -->
                    Tabel diatas dapat dtubah menjadi bentuk lain yang lebih sederhana dengan cara menghilangkan baris pertama dan kolom pertama dari tabel tersebut sedemikian sehingga yang tertinggal hanya angka-angkanya saja. Apabila bentuk terakhir
                    ini diletakkan pada tanda kurung, maka diperoleh bentuk sebagai berikut.
                    $$\begin{pmatrix}0&1&2&0 \\ 1&0&0&1 \\ 2&0&0&3 \\ 0&1&3&0 \end{pmatrix}$$

                    Bentuk terakhir ini biasa disebut dengan matriks. Permasalahan program linear dapat pula diselesaikan dengan metode matriks.
                    <br />
                    Dari penjelasan di atas diperoleh definisi matriks sebagai berikut.
                    <div class="row justify-content-center">
                    <div class="col-md-6 rounded-3 bg-warning">
                      <p id="definisi1">
                        <b>Matriks</b> adalah susunan dari bilangan-bilangan (hasil pengukuran) yang berbentuk persegi panjang dan disusun menurut baris dan kolom. Bilangan-bilangan yang menyusun baris ataupun kolom dari suatu matriks disebut
                        elemen-elemen dari matriks.
                      </p>
                    </div>
                    </div>
                    Matriks \(\begin{pmatrix}0&1&2&0 \\ 1&0&0&1 \\ 2&0&0&3 \\ 0&1&3&0 \end{pmatrix}\) merupakan matriks berukuran \(4 \times 4\) karena terdiri dari 4 baris dan 4 kolom, sehingga dapat dikatakan matriks tersebut berordo \(4 \times 4\). Matriks
                    \(\begin{pmatrix}2&0 \\ 1&3 \\ -1&-2 \end{pmatrix}\) dikatakan berordo \(3 \times 2\) karena terdiri dari 3 baris dan 2 kolom.
                    <div class="row justify-content-center">
                    <div class="col-md-6 rounded-3 bg-warning">
                      <p class="fst-italic">Suatu matriks yang mempunyai m baris dan n kolom disebut matriks <b>berordo</b> m x n.</p>
                    </div>
                    </div>
                    Penamaan suatu matriks biasa menggunakan huruf besar (kapital), sebagai contoh \(A=\begin{pmatrix}0&1&2&0 \\ 1&0&0&1 \\ 2&0&0&3 \\ 0&1&3&0 \end{pmatrix}\). Untuk lebih memahami pengertian matriks, perhatikan ilustrasi matriks berikut ini.
                      $$A=(a_{ij})=\left( \begin{matrix}
                      a_{11} & a_{12} & a_{13} & \dots & a_{1n}  \\
                      a_{21} & a_{22} & a_{23} & \dots & a_{2n}  \\
                      \vdots & \vdots & \vdots&\ddots & \vdots \\
                      a_{m1} & a_{m2} & a_{m3}& \dots & a_{mn}  \\
                      \end{matrix} \right)$$
                    <i>Keterangan :</i> <br />
                    - \(a_{12}\) adalah elemen baris ke-1 dan kolom ke-2 <br />
                    - elemen-elemen:  \(a_{11}, a_{12},  a_{13}, \dots a_{1n}\)disebut elemen-elemen penyusun baris 1 <br />
                    - elemen-elemen: \(a_{13}, a_{23},  a_{33}, \dots a_{m3}\) disebut elemen-elemen penyusun kolom 3 <br />
                    - dan \(a_{ij}\) adalah elemen baris ke-<i>i</i> dan kolom ke-<i>j</i> dengan <br />
                    <i>i = 1, 2, 3, 4, . . . m</i> <br /><i>j = 1, 2, 3, 4, . . . n</i> <br />Suatu matriks <i>A</i> yang mempunyai <i>m</i> baris dan <i>n</i> kolom disebut matriks berordo <i>m x n</i>, dan diberi notasi ”\(A_{mn}\)” atau ”\(A_{(m \times n)}\)” <br>
                    <img src="{{asset('asets/matriks/contoh1.png')}}" alt="contoh1" class="col-md-12 img-fluid" />
                    <div class="row justify-content-center">
                    <div class="col-md border border-dark">
                    <div class="badge bg-danger text-wrap fs-6" style="width: 16rem">LATIHAN SOAL 1.1</div>
                    <ol type="1">
                      <li>
                        <p>Nyatakan dalam bentuk matriks permasalahan rute perjalanan berikut!</p>
                    <ol type="a">
                      <li>
                        <img src="{{asset('asets/matriks/soal1a.png')}}" alt="soal1a" width="200" class="img-fluid"/>
                      </li>
                      <li>
                        <img src="{{asset('asets/matriks/soal1b.png')}}" alt="soal1a" width="200" class="img-fluid" />
                      </li>
                    </ol>
                      </li>
                      <li> Diketahui tiga matriks berikut. <br>
                        \(A=\begin{bmatrix}5&-1&4&3\\1&6&8&-2\\0&7&-5&9\end{bmatrix}\), \(B=\begin{bmatrix}4&3&8\\6&-5&11\\2&1&10\end{bmatrix}\), dan \(C=\begin{bmatrix}2&-1&-2\\-2&-1&2\\1&1&-1\\-1&1&-1\end{bmatrix}\)
                        <div class="row">
                          <div class="col-md-6"><ol type="a">
                            <li>Tentukan ordo ketiga matriks tersebut</li>
                            <li>Apa kekhasan ordo matriks B?</li>
                            <li>Tentukan nilai \(a_{21}\), \(a_{13}\), \(a_{32}\), dan \(a_{34}\)</li>
                          </ol></div>
                          <div class="col-md-6">
                            <ol start="3" type="a">
                              <li>Tentukan Nilai \(b_{13}\), \(b_{31}\), \(b_{23}\) dan \(b_{32}\)</li>
                              <li>Tentukan nilai \(c_{13}+c_{23}+c_{41}+c_{32}\).</li>
                            </ol>
                          </div>
                        </div>
                        <li>Dari himpunan bilangan cacah yang kurang dari 5, susunlah matriks:
                          <div class="row">
                            <div class="col-md-3">a. \(P_{2 \times 3}\)</div>
                            <div class="col-md-3">b. \(Q_{3 \times 2}\)</div>
                            <div class="col-md-3">c. \(R_{1 \times 4}\)</div>
                            <div class="col-md-3">d. \(S_{4 \times 2}\)</div>
                          </div>
                        </li>
                        <li>Berapa banyaknya elemen setiap matriks \(P, Q, R\) dan \(S\)?. Bagaimanakah cara menghitungnya secara lebih cepat?</li>
                        <li>Berpakah banyak elemen pada :
                          a. matriks berordo \(3 \times 4\)
                          b. matriks berordo \(4 \times 4\)
                          c. matriks berordo \(1 \times n\)
                          d. matriks berordo \(n \times n\)
                        </li>
                    </ol>
                    </div>
                    </div>
                </div>

                <div id="transpose">
                    <div class="row">
                        <div class="col">
                            <div class="text-primary"><hr>
                                <hr>
                                <h1 ><b> II) Jenis-Jenis Matriks</b></h1>
                                <hr>
                                <hr>
                            </div>
                                <!-- pertama -->
    <ol>
        <b><li>Jenis Matriks Ditinjau dari Banyaknya Baris dan Kolom Penyusunnya</li></b>
        Untuk memahami jenis-jenis matriks ditinjau dari banyaknya baris dan kolom penyusunnya, perhatikanlah beberapa matriks berikut.
        <ol type="a">
          <li>
            <p>
              Matriks \(A=\begin{pmatrix}2&-3&6 \end{pmatrix}\), \(B=\begin{pmatrix}-1&9&2&1 \end{pmatrix}\) dan \(C=\begin{pmatrix}3&-1&4&-7&7 \end{pmatrix}\) <br />Matriks-matriks di atas hanya memiliki satu
              baris. Matriks yang berbentuk seperti itu dinamakan <b><i>matriks baris</i></b
              >.
            </p>
          </li>
          <li>
            Matriks \(A=\begin{pmatrix}2 \\5 \end{pmatrix}\), \(B=\begin{pmatrix}-2\\4\\3\\8 \end{pmatrix}\) dan \(C=\begin{pmatrix}-6\\7\\8 \end{pmatrix}\) <br />Matriks-matriks di atas hanya memiliki satu
            kolom. Matriks yang berbentuk seperti itu dinamakan <b> <i>matriks kolom</i></b>
          </li>
          <li>
            Matriks \(A=\begin{pmatrix}2&3\\-2&6 \end{pmatrix}\), \(B=\begin{pmatrix}2&3&-2 \\ 0&4&-4 \\ -1&2&6 \end{pmatrix}\), dan \(C=\begin{pmatrix}3&4&2&6 \\ 2&0&1&3 \\5&7&-1&-5 \\ -1&8&0&4 \end{pmatrix}\) Banyaknya baris dan kolom pada matriks di
            atas sama. Matriks yang berbentuk seperti itu dinamakan <b><i>matriks persegi (bujur sankar)</i></b
            >.
          </li>
        </ol>
        <br />
        <b><li>Jenis Matriks Segi ditinjau dari Elemen-Elemen Penyusunnya</li></b>
        <ol type="A">
          <i
            ><li><u>Matriks Diagonal</u></li></i
          >
          Matriks persegi yang semua elemennya adalah nol, kecuali elemen pada diagonalnya tidak semuanya bernilai nol
          <br />
          (diagonal adalah elemen
          \(a_{ij}\)
          untuk
          <i>i = j</i
          >), dinamakan
          <b><i>matriks diagonal</i></b>
          . Perhatikan dua matriks berikut.
          <div class="overflow=auto">
            $$A=\begin{pmatrix}3&0&0 \\ 0&1&0 \\ 0&0&4\end{pmatrix} \: \text{dan} \: B=\begin{pmatrix}7&0 \\ 0&-5 \end{pmatrix} $$
          </div>
          Matriks A adalah matriks diagonal berordo 3 x 3 dan matriks B adalah matriks diagonal berordo 2 x 2
          <br />
          <br />

          <i
            ><li><u>Matriks Identitas</u></li></i
          >
          Matrtiks identitas ada dua jenis, yaitu matriks identitas terhadap penjumlahan dan matriks identitas terhadap perkalian.
          <ol type="1">
            <li>
              Matriks <i>O</i> disebut matriks identitas terhadap penjumlahan jika untuk sebarang matriks <i>A</i>, berlaku
              <div class="row">
                <div class="col-md-5 fw-bold">\(A+O=O+A=A\)</div>
              </div>
              Dan itu hanya dipenuhi apabila matriks <i>O</i> adalah matriks nol, yaitu suatu matriks yang semua elemennya bernilai nol. Contoh-contoh dari matriks nol adalah seperti berikut ini.
              <ol type="a">
                <li>\(O=\begin{pmatrix}0&0 \\ 0&0 \end{pmatrix}\) matriks nol berordo \(2 \times 2\)</li>
                <li>\(O=\begin{pmatrix}0&0&0 \\ 0&0&0 \end{pmatrix}\) matriks nol berordo \(2 \times 3\)</li>
              </ol>
              Untuk selanjutnya matriks identitas terhadap penjumlahan disebut <i><b>matriks nol</b></i>
            </li>
            <li>
              Matriks <i>I</i> disebut matriks identitas terhadap perkalian jika untuk sembarang matriks <i>A</i> berlaku
              <div class="row">
                <div class="col-md-2 fst-italic">a) \(IA = A\)</div>
                <div class="col-md-2 fst-italic">b) \(AI = A\)</div>
                <div class="col-md-3 fst-italic">c) \(AI = A = IA\)</div>
              </div>
              Dan itu hanya dipenuhi apabila matriks <i>I</i> adalah matriks diagonal yang semua elemen pada diagonalnya adalah 1. <br />
              Sebagai contoh. <br />
              \(I_2 =\begin{pmatrix}1&0 \\ 0&1 \end{pmatrix}\)matriks identititas berordo 2 <br />
              \(I_3 = \begin{pmatrix}1&0&0 \\ 0&1&0 \\ 0&0&1 \end{pmatrix}\) matriks identitas berordo 3 <br />
              <b><i>Matriks identitas hanya terdefinisi pada matriks persegi</i></b>
            </li>
          </ol>
          <br />
          <i
            ><li><u>Matriks Segitiga Atas dan Matriks segitiga Bawah</u></li></i
          >
          <b><i>Matriks segitiga atas</i></b>
          adalah matriks persegi yang semua elemen di bawah diagonalnya bernilai nol.
          <b><i>Matriks segitiga bawah</i></b>
          adalah matriks persegi yang semua elemen di atas diagonalnya bernilai noI. Sebagai contoh.
          <br />
          \(A=\begin{pmatrix}2&-1&4 \\ 0&3&-5 \\ 0&0&8 \end{pmatrix}\)
          matriks segitiga atas berordo 3
          <br />
          \(B=\begin{pmatrix}1&0&0&0 \\ 1&-1&0&0 \\ -3&5&2&0 \\ 2&6&3&4 \end{pmatrix} \)
          matriks segitiga bawah berordo 4.

          <br />
          <i
            ><li><u>Matriks Simetris</u></li></i
          >
          Matrik A berordo disebut matriks simetris jika dan hanya Jika elemen-elemen yang letaknya simetris terhadap diagonal utama bernilai sama dituliskan
          $$a_{ij}=a_{ji}(i \ne j) $$
          Contoh :
          <br />
          \(A=\begin{pmatrix}1&3 \\ 3&5 \end{pmatrix}\)
          matriks simetris berordo 2
          <br />
          \(B=\begin{pmatrix}2&1&-5 \\ 1&3&7 \\ -5&7&4 \end{pmatrix} \)
          matriks simetris berordo 3
          <br />
          \(C=\begin{pmatrix}1&2&3&-4 \\ 2&0&4&1 \\ 3&4&5&=3 \\ -4&6&3&4 \end{pmatrix} \) matriks simetris berordo 4
        </ol>
      </ol>
      <!-- end pertama -->

      <div class="row justify-content-center">
        <div class="col-md border border-dark">
          <div class="badge bg-danger text-wrap fs-6" style="width: 16rem">LATIHAN SOAL 2.1</div>
          <ol type="1">
            <li>Perhatikan matriks-matriks berikut. </li>
              <div class="row">
                <div class="col-md">\(A=\begin{bmatrix}7&0&-5 \\ -2&1&4 \end{bmatrix}\)</div>
                <div class="col-md">\(C=\begin{bmatrix}8&1&6&0 \end{bmatrix}\)</div>
                <div class="col-md">\(E=\begin{bmatrix}1&3&-2 \\ -4&7&8\\0&2&5 \end{bmatrix}\)</div>
              </div>
              <div class="row">
                <div class="col-md">\(B=\begin{bmatrix}-2&3 \\ 6&0 \end{bmatrix}\)</div>
                <div class="col-md">\(D=\begin{bmatrix}3 \\ -4 \\ 11 \end{bmatrix}\)</div>
                <div class="col-md">\(F=\begin{bmatrix}3 \\ -1 \end{bmatrix}\)</div>
              </div>
              Diantara matriks-matriks di atas, manakah yang merupakan : <br>
              a. Matriks persegi <br>
              b. Matriks baris <br>
              d. Matriks kolom <br>

            <li>Dengan menggunakan kalimat sendiri
              <ol type="a">
                <li>Jelaskan yang dimaksud dengan matriks segitiga, matriks diagonal, matriks identitas, dan matriks skalar</li>
                <li> Tuliskan masing-masing sebuah contoh untuk matriks segitiga, matriks diagonal, matriks identitas, dan matriks skalar </li>
              </ol>
            </li>
          </ol>
        </div>
      </div>


                        </div>
                    </div>
                </div>


<section id="transpose">
    <div class="row">
    <div class="col">
    <div class="text-primary"><hr>
    <hr>
    <h1 ><b> III) Tranpose Suatu Matriks</b></h1>
    <hr>
    <hr></div>

    <p>Perhatikan matriks berikut!</p>
      $$A=\begin{pmatrix}4&2 \\ -1&0 \\ 3&4 \end{pmatrix}$$

      <p>
        Dari matriks \(A\) ini dapat kita bentuk suatu matriks baru yang diperoleh dengan cara:
        <ol type="1">
          <li>mengubah baris ke-<i>i</i> matriks \(A\) menjadi kolom ke-<i>i</i>
            matriks baru dan</li>
          <li>mengubah kolom ke-<i>j</i> matriks \(A\) menjadi baris ke-<i>j</i> matriks baru.</li>
        </ol>
        Matriks baru yang dihasilkan ini disebut transpose dari matriks \(A\) yang dilambangkan dengan \(A'\) atau
        \(A^t\). <br />
        Dari perubahan di atas, apabila matriks \(A\) berordo \(m \times n\), maka \(A'\) adalah suatu matriks yang berordo \(n \times m\) <br />
        Berdasarkan uraian di atas, maka transpose dari matriks \(A\), yaitu \(A'\) adalah:
      </p>
        $$A'=\begin{pmatrix}4&-1&3 \\ 2&0&4 \end{pmatrix}$$

      <br />
      Sifat-sifat tranpose suatu matriks :
      <ol>
        <li>\((A')'=A \)</li>
        <li>\((A+B)'=A'+B' \)  </li>
        <li>\(k(A')=(kA)' \) </li>
        <li>\((AB)'=B'A'\) </li>
        <li>Jika \(A\) adalah matriks simetris, maka \(A'=A\)</li>
      </ol>

        <div class="row justify-content-center">
          <div class="col-md border border-dark">
            <div class="badge bg-danger text-wrap fs-6" style="width: 16rem">LATIHAN SOAL 3.1</div>
            <ol type="1">
              <li>
                Tentukanlah transpos dari setiap matriks berikut
                <div class="row">
                  <div class="col-md-4 overflow-auto">\(A=\begin{bmatrix}7&0&-5 \\ -2&1&4 \end{bmatrix}\)</div>
                  <div class="col-md-4 overflow-auto">\(B=\begin{bmatrix}8&1&6&0 \end{bmatrix}\)</div>
                  <div class="col-md-4 overflow-auto">\(C=\begin{bmatrix}1&3&-2 \\ -4&7&8\\0&2&5 \end{bmatrix}\)</div>
                </div>
                <div class="row">
                  <div class="col-md-4 overflow-auto">\(D=\begin{bmatrix}-2&3 \\ 6&0 \end{bmatrix}\)</div>
                  <div class="col-md-4 overflow-auto">\(E=\begin{bmatrix}3 \\ -4 \\ 11 \end{bmatrix}\)</div>
                  <div class="col-md-4 overflow-auto">\(F=\begin{bmatrix}3 \\ -1 \end{bmatrix}\)</div>
                </div>
                <div class="row">
                  <div class="col-md-4 overflow-auto">\(G=\begin{bmatrix}-2&3&2&3 \\ 6&0&3&0 \end{bmatrix}\)</div>
                  <div class="col-md-4 overflow-auto">\(H=\begin{bmatrix}3&2 \\ 1&-4 \\ 3&11 \end{bmatrix}\)</div>
                  <div class="col-md-4 overflow-auto">\(I=\begin{bmatrix}3 \\ -1 \\0\\3\\2\end{bmatrix}\)</div>
                </div>
              </li>

              <li>Tuliskan 3 contoh matriks simetris.</li>
            </ol>
          </div>
        </div>
    </div>
    </div>
    </section>


    <section id="kesamaanDuaMatriks" >
        <div class="row">
        <div class="col text-primary fw-bold">
          <hr>
          <hr>
          <h1><b>IV) Kesamaan Dua Matriks</b></h1>
          <hr>
          <hr>
        </div>
        </div>
        <div class="row">
        <div class="col">
          <p>Perhatikan definisi kesamaan dua matriks berikut!</p>
          <div class="container bg-warning border rounded-3 shadow">
            <p class="fst-italic">Misalnya A = (a) dan B = (b) dua buah matriks yang berordo sama. Matriks A dikatakan sama dengan matriks B jika elemen-elemen yang seletak pada kedua matriks bernilai sama.</p>
          </div>
          <p class="mt-2">Untuk lebih memahamikesamaan dua buah matriks, perhatikan contoh berikut.</p>
          <!-- Contoh Soal 4.1 -->
          <div class="row justify-content-center">
            <div class="col-md-9 border">
              <div class="badge bg-primary text-wrap fs-6" style="width: 8rem">CONTOH 4.1</div>
              <i><p>Periksalah kesamaan dua matriks berikut!</p></i>
              <div class="row justify-content-center">
                <div class="col">
                  a. \( A=\begin{pmatrix} 3&-1 \\ \frac{18}{6} &2 \end{pmatrix}\) dan \( B= \begin{pmatrix} \frac{6}{2}&-1\\ 3&2 \end{pmatrix}\) <br />
                  b. \(A=\begin{pmatrix}2&-1 \\ 5&4 \end{pmatrix} \) dan \(B=\begin{pmatrix} 2&-1 \\ -3&4 \end{pmatrix}\)
                </div>
              </div>
              <p><b>JAWAB</b></p>
              <ol type="a">
                <li>
                  Matriks A dan B berordo sama, yaitu 2 x 2 dan elemen-elemen yang seletak juga sama sehingga matriks A sama dengan matriks B <br />
                  <img src="{{asset('asets/matriks/kesamaanDuaMatriks1.png')}}" class="img-fluid" alt="contoha" />
                </li>
                <li>
                  Matriks A dan B berordo sama, yaitu 2 x 2 dan elemen-elemen yang seletak ada yang tidak sama sehingga matriks A tidak sama dengan matriks B <br />
                  <img src="{{asset('asets/matriks/kesamaanDuaMatriks2.png')}}" class="img-fluid" alt="contohb" width="500" />
                </li>
              </ol>
            </div>
          </div>
          <!-- end Contoh Soal 4.1 -->

          <div class="row justify-content-center pt-2">
            <div class="col-md-9 border">
              <div class="badge bg-primary text-wrap fs-6" style="width: 8rem">CONTOH 4.2</div>
              <p>
                <i>Jika matriks \(A= \begin{pmatrix} 2&2x-y\\ 2&3+x \end{pmatrix}\) sama dengan matriks \(B=\begin{pmatrix} 2&-3 \\ -x&y+2 \end{pmatrix}\) maka tentukanlah nilai \(x+y\)!</i>
              </p>
              <p><b>JAWAB</b></p>
              <div class="overflow-auto">
                $$\begin{align} A=B \to \begin{pmatrix}2&2x-y\\2&3+x \end{pmatrix} &= \begin{pmatrix}2&-3\\-x&y+2 \end{pmatrix} \\ sehingga \\2 &= -x \\ x&=-2 \\ 3+x &= y+2 \\ 3+(-2) &= y+2 \\ 1-2 &=y \\ y &=-1 \end{align}$$
              </div>
              <br />
              dengan \(x=-2\) dan \(y=-1\) diperoleh \(x+y=(-2)+(-1)=-3\)<br />
              Jadi, \(x+y=-3\)<br />
            </div>
          </div>
        </div>
        </div>

        <div class="row pt-3">
        <div class="col-md border border-dark">
          <div class="badge bg-danger text-wrap fs-6" style="width: 16rem">LATIHAN SOAL 4.1</div>
          <ol type="1">
            <li>
              Diantara matriks-matriks berikut ini, manakah yang sama?
              <div class="row">
                <div class="col-md-3">\(A=\begin{bmatrix}1&2&-1 \end{bmatrix}\)</div>
                <div class="col-md-3">\(B=\begin{bmatrix}-1&2&1 \end{bmatrix}\)</div>
                <div class="col-md-3">\(C=\begin{bmatrix}1&2&-1 \end{bmatrix}\)</div>
              </div>
              <br />
              <div class="row">
                <div class="col-md-3">\(P=\begin{bmatrix}-2 \\ -3 \end{bmatrix}\)</div>
                <div class="col-md-3">\(Q=\begin{bmatrix}2 \\ 3 \end{bmatrix}\)</div>
                <div class="col-md-3">\(R=\begin{bmatrix}3 \\ 2 \end{bmatrix}\)</div>
                <div class="col-md-3">\(S=\begin{bmatrix}2 \\ 3 \end{bmatrix}\)</div>
              </div>
              <br />
              <div class="row">
                <div class="col-md-3">\(K=\begin{bmatrix}2&-1 \\ 5&-6 \end{bmatrix}\)</div>
                <div class="col-md-3">\(L=\begin{bmatrix}-2&1\\-5&6 \end{bmatrix}\)</div>
                <div class="col-md-3">\(M=\begin{bmatrix}2&5 \\ -1&-6\end{bmatrix}\)</div>
                <div class="col-md-3">\(N=\begin{bmatrix}2&-1 \\ 5&-6\end{bmatrix}\)</div>
              </div>
            </li>
            <br />
            <li>
              Tentukan nilai \(x\) dan \(y\) bila diketahui.
              <div class="row">
                <div class="col-md-3">a. \(\begin{bmatrix}x&y\\1&-3 \end{bmatrix}=\begin{bmatrix}-2&5\\1&-3 \end{bmatrix}\)</div>
                <div class="col-md-3">b. \(\begin{bmatrix}x&0\\2y&3 \end{bmatrix}=\begin{bmatrix}1&0\\-4&3 \end{bmatrix}\)</div>
                <div class="col-md-3">c. \(\begin{bmatrix}2x&-y \end{bmatrix}=\begin{bmatrix}-6&-2\end{bmatrix}\)</div>
                <div class="col-md-3">d. \(\begin{bmatrix}x+2 \\ 3-y \end{bmatrix}=\begin{bmatrix} 1 \\ 5\end{bmatrix}\)</div>
              </div>
              <br />
              <div class="row">
                <div class="col-md-3 overflow-auto">e.\(\begin{bmatrix}x-y \\ x+y \end{bmatrix}=\begin{bmatrix} 6 \\ 4 \end{bmatrix}\)</div>
                <div class="col-md-4
                 overflow-auto">f. \(\begin{bmatrix}4&2 \\5x+y&5 \end{bmatrix}=\begin{bmatrix} 4&2 \\ 7&y+3\end{bmatrix}\)</div>
                <div class="col-md-4 overflow-auto">g. \(\begin{bmatrix}2x+y&-3 \\ 1&4x-y \end{bmatrix}=\begin{bmatrix} 5&-3 \\ 1&7\end{bmatrix}\)</div>
              </div>
            </li>
            <br />
            <li>
              Diketahui \(P=\begin{bmatrix}1&3&1 \\ 2&4&-2 \\ bc&5&2a \end{bmatrix}\), \(Q=\begin{bmatrix} 1&a&1 \\ 2&4&-2 \\ -12&5&b \end{bmatrix}\), dan \((P')'=Q\). <br />
              Tentukan nilai \(a+b-c\).
            </li>
            <br />
            <li>
              Tentukan nilai \(p\), \(q\), dan \(r\) yang memenuhi persamaan matriks berikut <br />
              <div class="overflow-auto">\(\begin{bmatrix}2p+1&q+2\\4&-3r\end{bmatrix}=\begin{bmatrix} 9&p-q \\ 4&2p+q+3\end{bmatrix}\)</div>
            </li>
            <br />
            <li>
              Tentukan nilai \(a\), \(b\), dan \(c\) yang memenuhi persamaan matriks berikut. <br />
              <div class="overflow-auto">
                \(\begin{bmatrix} (a+1)^2& (a+1)(c-1)&(b+1)(a+1) \\ (a+1)(c-1) & -(b+1)^2 & (b+1)(c-1) \\ (b+1)(a+1) & (b+1)(c-1) & (c-1)^2 \end{bmatrix}=\begin{bmatrix} 4&-6&2 \\ -6&-1&-3 \\ 2&-3&9 \end{bmatrix} \)
              </div>
            </li>
          </ol>
        </div>
        </div>
        </section>



<section id="operasiMatriks" >
    <div class="col-md text-primary">
      <hr>
      <hr>
      <h1><b>V) Penjumlahan dan Pengurangan Matriks</b></h1>
      <hr>
      <hr>
    </div>
      <ol type="1">
        <b><li>Penjumlahan Matriks</li></b>
        Perhatikan definisi penjumlahan dua matriks berikut!
        <div class="row justify-content-center">
          <div class="col-md-6 border border-dark rounded-3 bg-warning shadow">
           <p class="justify fst-italic"> Jika matriks \(A=(a_{ij})\) dan \(B=(b{ij})\) merupakan dua buah matriks yang berordo m x n, maka jumlah kedua matriks tersebut yang dinotasikan dengan \(A + B\) adalah suatu matriks baru \(C=(c_{ij})\) yang juga berordo m x n
            dengan \(c_{ij}=a_{ij}+b_{ij}\) untuk setiap i dan j. </p>
          </div>
        </div>
        Untuk lebih memahami penjumlahan dua buah matriks atau lebih, perhatikan contoh berikut!
           <!-- COntoh 5.1 -->
          <div class="row justify-content-center">
            <div class="col-md-9 border overflow-auto">
              <div class="badge bg-primary text-wrap fs-6" style="width: 8rem">CONTOH 5.1</div> <br>
              Jika diketahui \(\mathbf{A}=\begin{pmatrix} 2&-5&7\\ 4&2&-1 \end{pmatrix} \), \(\mathbf{B}=\begin{pmatrix} 0&-3\\ 2&2 \\ -1&4\end{pmatrix} \) dan \(\mathbf{C}=\begin{pmatrix} 0&-3&-2\\ -1&3&5 \end{pmatrix} \), tentukanlah!
              <br />
              a. \(A+B\) <br> b. </b> \(B+C\) <br> c. \(B+C'\) <br /><br /><br />
              <b>JAWAB</b> <br />

                 \(\begin{align}\text{a. } A+C &=\begin{pmatrix} 2&-5&7\\ 4&2&-1 \end{pmatrix} + \begin{pmatrix} 0&-3&-2\\ -1&3&5 \end{pmatrix} \\ &=\begin{pmatrix} 2+0&-5+(-3)& 7+(-2)\\ 4+(-1)&2+3&-1+5 \end{pmatrix}\\ &=\begin{pmatrix} 2&-8&5\\
                3&5&4 \end{pmatrix} \end{align}\) <br><br>
                \(\text{b. }B+C\) tidak terdefinisi sebab ordo matriks \(B\ne\) ordo matriks \(C\) <br><br>
                \(\begin{align}\text{c. } B+C' &= \begin{pmatrix} 0&-3\\2&2\\-1&4 \end{pmatrix} + \begin{pmatrix} 0&-1\\-3&3\\-2&5 \end{pmatrix} \\ &= \begin{pmatrix} 0+0&-3+(-1)\\2+(-3)&2+3\\-1+(-2)&4+5 \end{pmatrix} \\ &=\begin{pmatrix} 0&-4\\-1&5\\-3&9\end{pmatrix}
                \end{align}\) <br> <br>
                <div class="row justify-content-center">
                <div class="card border-dark text-center col-md-6">
                  <div class="card-header fw-bold text-danger">CATATAN</div>
                  <div class="card-body text-dark fst-italic"> Penjumlahan matriks hanya berlaku jika memiliki ordo sama
                  </div>
                </div>
                </div>
                <br>
            </div>
          </div>

        <br>
        <b> <li>Lawan Suatu Matriks</li> </b>
        Perhatikan definisi lawan suatu matriks berikut!
        <div class="row justify-content-center">
          <div class="col-md-6 border border-dark rounded-3 bg-warning shadow">
           <p class="justify fst-italic"> Jika matriks \(A=(a_{ij})\) dan \(B=(b_{ij})\) adalah dua matriks yang berordo sama, sedemikian sehingga berlaku \(A+B=O=B+A\), dengan \(O\) matriks nol, maka \(A\) disebut lawan dari \(B\) yang dinotasikan dengan \(A=-B\), matriks \(B\) disebut juga lawan dari matriks \(A\) yang juga dapat dinotasikan sebagai \(B=-A\). </p>
          </div>
        </div>
        Untuk lebih memahami lawan suatu matriks, perhatikan contoh berikut!
           <!-- COntoh 5.2 -->
            <div class="row justify-content-center">
              <div class="col-md-9 border">
                <div class="badge bg-primary text-wrap fs-6" style="width: 8rem">CONTOH 5.2</div> <br>
                <p>Tunjukan bahwa matriks \(A=\begin{pmatrix}-3&7\\9&-10 \end{pmatrix}\) dan matriks \(B=\begin{pmatrix} 3&-7\\-9&10\end{pmatrix}\) adalah dua buah matriks yang saling berlawanan! <br>
                  <br>
                  <b>JAWAB</b><br>
                      \(\begin{align}A+B &= \begin{pmatrix}-3&7\\9&-10 \end{pmatrix}+\begin{pmatrix} 3&-7\\-9&10\end{pmatrix}\\ &= \begin{pmatrix} -3+3&7+-7\\9+-9&-10+10\end{pmatrix} \\ &= \begin{pmatrix} 0&0\\0&0\end{pmatrix} \end{align}\) <br>
                      \(\begin{align}B+A &= \begin{pmatrix} 3&-7\\-9&10\end{pmatrix} + \begin{pmatrix}-3&7\\9&-10 \end{pmatrix}\\ &= \begin{pmatrix} 3+-3&-7+7\\-9+9&10+10\end{pmatrix} \\ &= \begin{pmatrix} 0&0\\0&0\end{pmatrix} \end{align}\)
                      <br> karena \(A+B=B+A=O\), maka \(A\) dan \(B\) merupakan dua buah matriks yang saling berlawanan
                  <div class="row justify-content-center">
                  <div class="card border-dark text-center col-md-6">
                    <div class="card-header text-danger fw-bold">CATATAN</div>
                    <div class="card-body text-dark fst-italic"> Matriks nol \(O\) disebut matriks identitas penjumalahan matriks
                    </div>
                  </div>
                  </div>
                </p>
              </div>
            </div>

        <b> <li>Pengurangan Matriks</li> </b>
        Perhatikan definisi pengurangan matriks berikut.
        <div class="row justify-content-center">
          <div class="col-md-6 border border-dark rounded-3 bg-warning shadow">
           <p class="justify fst-italic"> Jika matriks \(A=(a_{ij})\) dan \(B=(b{ij})\) merupakan dua buah matriks yang berordo m x n. Matriks \(A\) dikurangi matriks \(B\) dinotasikan dengan \(A-B\) sehingga \((A-B)=A+(-B)\). Hasil dari pengurangannya merupakan matriks \(C=(c_{ij})\) yang juga berordo m x n dengan \((c_{ij}=a{ij}+(-b_{ij})\). </p>
          </div>
        </div>

          <div class="row justify-content-center pt-2">
            <div class="col-md-9 border">
              <div class="badge bg-primary text-wrap fs-6" style="width: 8rem">CONTOH 5.3</div> <br>
                Diketahui \(A=\begin{pmatrix} 3&-10 \\ 2&11 \end{pmatrix}\) dan \(B=\begin{pmatrix} 1&-5\\4&2 \end{pmatrix} \). Tentukan <br>
                <div class="row">
                <div class="col-md-2">a. \(A-B\)</div>
                <div class="col-md-2">b. \(B-A\)</div>
              </div>
               <br>
               <b>JAWAB</b><br>
                  a. \(\begin{align}
                  A-B &= A+(-B) \\ &=\begin{pmatrix}3&-10\\2&11 \end{pmatrix} + \begin{pmatrix}-1&5\\-4&-2\end{pmatrix}
                   \\ &=\begin{pmatrix}2&-5\\-2&9 \end{pmatrix} \end{align}
                    \)
                  <br>
                  b. \(\begin{align}
                  B-A &= B+(-A) \\ &=\begin{pmatrix}1&-5\\4&2 \end{pmatrix} + \begin{pmatrix}-3&10\\-2&-11\end{pmatrix}
                   \\ &=\begin{pmatrix}-2&5\\2&-9 \end{pmatrix} \end{align}
                    \) <br> <br>
              <div class="row justify-content-center">
                <div class="card border-dark text-center col-md-6">
                  <div class="card-header text-danger fw-bold"><b>CATATAN</b></div>
                  <div class="card-body text-dark fst-italic">Pengurangan matriks dilakukan dengan mengurangkan elemen-elemen seletak.
                  </div>
                </div>
              </div>
                <br>
            </div>
          </div>

            <div class="row">
              <div class="col">
                <p> Berdasarkan Contoh 5.2-5.3 dapat diambil kesimpulan tentang sifat-sifat penjumlahan dan pengurangan matriks <br>
                  <i>Sifat-sifat Penjumlahan Matriks</i> <br>
                  Jika matriks \(A=(a_{ij}), B=(b_{ij}), C=(c_{ij})\), dan \(O\) (matriks nol) adalah matriks-matriks yang berordo sama, maka dalam penjumlahan dan pengurangan matriks berlaku sifat-sifat berikut. </p>
                  <ol type="a">
                    <li>
                      Sifat komutatif, artinya \(A+B=B+A\).
                    </li>
                    <li>
                      Sifat asosiatif, artinya \((A+B)+C=A+(B+C)\).
                    </li>
                    <li>
                      Mempunyai elemen identitas terhadap operasi penjumlahan, yaitu \(O\) sehingga untuk setiap matriks \(A=a_{ij}\) berlaku \(A+O=A=O+A\).
                    </li>
                    <li>
                      Mempunyai invers terhadap penjumlahan, yaitu \(A+(-A)=(-A)+A=O\)
                    </li>
                  </ol>
              </div>
            </div>
  </ol>
  <div class="row">
  <div class="col-md border">
      <div class="badge bg-danger text-wrap fs-6" style="width: 16rem">LATIHAN SOAL 5.1</div>
          <h3 class="text-center">PENJUMLAHAN</h3>
          <ol type="1">
            <li>
              Tentukanlah jumlah natriks-matriks berikut.
              <div class="row">
                <div class="col-md">a. \(\begin{bmatrix}-4&6&3\end{bmatrix}+\begin{bmatrix}-5&-8&-3 \end{bmatrix}\)</div>
                <div class="col-md">b. \(\begin{bmatrix}\frac{1}{2}&-1 \\ 0&\frac{1}{4} \end{bmatrix}+\begin{bmatrix}-\frac{1}{4} & \frac{1}{2} \\ -\frac{1}{4}&1 \end{bmatrix}\)</div>
              </div>
              <br>
              <div class="row">
                <div class="col-md">c. \(\begin{bmatrix}a&-b \\ -a&2b \end{bmatrix}+\begin{bmatrix}2a&3b \\ -a&2b \end{bmatrix}\)</div>
                <div class="col-md">d. \(\begin{bmatrix}-1&-5&4 \\ 2&6&8 \\ 3&7&-3 \end{bmatrix}+\begin{bmatrix}2&-3&-5 \\ 5&0&6 \\ 4&1&-7 \end{bmatrix}\)</div>
              </div>
            </li> <br>
            <li>Diketahui \(A=\begin{bmatrix}2&3 \\ -1&5 \end{bmatrix}\), \(B=\begin{bmatrix}-4&-6 \\ 0&7 \end{bmatrix}\), dan \(C=\begin{bmatrix}-5&-7 \\ 4&8 \end{bmatrix}\) <br>
            Tentukan penjumlahan matriks :
            <div class="row">
              <div class="col-md">
                <ol type="a">
                  <li>\(A+B\)</li>
                  <li> \(B+C\) </li>
                  <li> \(A+C\) </li>
                </ol>
              </div>
              <div class="col-md">
                <ol start="4" type="a">
                  <li>\((A+B)+C\)</li>
                  <li>\(A+(B+C)\)</li>
                </ol>
              </div>
            </div>
            </li>
            <li>DIketahui matriks \(P=\begin{bmatrix}5&-6&9 \\ 3&4&-2 \end{bmatrix}\) dan \(O\) adalah matriks nol. <br>
            Tunjukan bahwa \(P+O=O+P=P\).
            </li>
            <li>Diantara matriks-matriks berikut, manakah yang saling berlawanan? Tunjukan.
            <div class="row">
              <div class="col-md">a. \(\begin{bmatrix}2 \\5 \end{bmatrix}\) dan \(\begin{bmatrix}-2 \\ -5 \end{bmatrix}\)</div>
              <div class="col-md">b. \(\begin{bmatrix}2&3&-1 \end{bmatrix}\) dan \(\begin{bmatrix}-1&-3&1 \end{bmatrix}\)</div>
            </div>
            <div class="row">
              <div class="col-md">c. \(\begin{bmatrix}-5&-3 \\-4&-2 \end{bmatrix}\) dan \(\begin{bmatrix}5&3 \\ 4&-2 \end{bmatrix}\)</div>
              <div class="col-md">d. \(\begin{bmatrix}-3&-1&5 \\ 2&0&1 \end{bmatrix}\) dan \(\begin{bmatrix}3&1&-5 \\ -2&0&-1 \end{bmatrix}\)</div>
            </div>
            </li>
            <li>Tulislah lawan dari setiap matriks berikut.
              <div class="row">
                <div class="col-md">a. \(\begin{bmatrix}9\\1 \end{bmatrix}\)</div>
                <div class="col-md">b. \(\begin{bmatrix}-5&-3 \\ -4&2 \end{bmatrix}\)</div>
                <div class="col-md">c. \(\begin{bmatrix}2&-4 \\-3&7 \\ -5&-9 \end{bmatrix}\)</div>
              </div>
            </li>
            <li> Diketahui matriks: <br>
            \(A=\begin{bmatrix}2x&-5 \\3&y \end{bmatrix}\), \(B=\begin{bmatrix}y&2 \\ 2&4 \end{bmatrix}\), dan \(C=\begin{bmatrix}8&4 \\5&2 \end{bmatrix}\). Apabila \(A+B=C\), tentukan nilai \(x+y\).
            </li>
            <li> Diketahui matriks: <br>
            \(A=\begin{bmatrix}1&a+b \\b&c \end{bmatrix}\), \(B=\begin{bmatrix}a-1&0 \\ -c&d \end{bmatrix}\), dan \(C=\begin{bmatrix}1&0 \\1&1 \end{bmatrix}\). Apabila \(A+B'=C\), tentukan nilai \(a\), \(b\), \(c\) dan \(d\).
            </li>
            <li> Diketahui matriks: <br>
            \(A'=\begin{bmatrix}5&2b \\a+d&c \end{bmatrix}\), \(B=\begin{bmatrix}4-a&-5 \\ 2&b-1 \end{bmatrix}\). Jika \((A+B)'=\begin{bmatrix}8&5 \\6&-1 \end{bmatrix}\). tentukan nilai \(a\), \(b\), \(c\) dan \(d\).
            </li>
            <li> Diketahui matriks: <br>
            \(A'=\begin{bmatrix}2p&2&-3q \\ 4&-1&-4 \\ r&q&-2\end{bmatrix}\), \(B=\begin{bmatrix}-p&-7&q \\ -5& 5&r \\ -5&45&7 \end{bmatrix}\), dan \(C=\begin{bmatrix}-2&-5&6 \\ -1&4&-2 \\ -3&1&5 \end{bmatrix}\). <br> Jika \(A+B=C\), tentukan nilai \(p+q+r\).
            </li>
          </ol>
       </div>
  <div class="col-md border">
          <div class="badge bg-danger text-wrap fs-6" style="width: 16rem">LATIHAN SOAL 5.2</div>
          <h3 class="text-center">PENGURANGAN</h3>
          <ol type="1">
            <li>
              Tentukanlah hasil pengurangan natriks berikut.
              <div class="row">
                <div class="col-md">a. \(\begin{bmatrix}-4 \\ 3\end{bmatrix}-\begin{bmatrix}1\\-2 \end{bmatrix}\)</div>
                <div class="col-md">b. \(\begin{bmatrix}2&3\\-4&3 \end{bmatrix}-\begin{bmatrix}5&-2 \\ -1&5 \end{bmatrix}\)</div>
              </div>
              <div class="row">
                <div class="col-md">c. \(\begin{bmatrix}2&-2&0 \\ 4&2&-4 \end{bmatrix}-\begin{bmatrix}5&0&-2 \\ 3&-1&2 \end{bmatrix}\)</div>
                <div class="col-md">d. \(\begin{bmatrix} 7&2 \\ 5&3 \end{bmatrix}+\begin{bmatrix} -1&1 \\ 2&-5 \end{bmatrix}-\begin{bmatrix} -2&4 \\ 3&6 \end{bmatrix}\)</div>
              </div>
            </li>
  <br>
  <li>Diketahui \(A=\begin{bmatrix}3&1 \\ 2&4 \end{bmatrix}\), \(B=\begin{bmatrix}-1&2 \\ 3&5 \end{bmatrix}\), dan \(C=\begin{bmatrix}4&-1 \\ 3&2 \end{bmatrix}\) <br>
            Tentukan matriks-matriks berikut dalam bentuk yang paling sederhana:
            <div class="row">
              <div class="col-md">
                <ol type="a">
                  <li>\(A-B\)</li>
                  <li> \(C-B\) </li>
                </ol>
              </div>
              <div class="col-md">
                <ol start="3" type="a">
                  <li>\((A+C)-(A-B)\)</li>
                  <li>\((A+C)-(B+C)\)</li>
                </ol>
              </div>
            </div>
            </li>
            <li>Diketahui \(A=\begin{bmatrix} 3&0 \\ 2&1 \end{bmatrix}\) dan \(B=\begin{bmatrix} -3&1 \\ -1&2 \end{bmatrix}\). Apakah \((A-B)'=A'-B'?\). Tunjukanlah!</li>
            <li>Apabila \(X\) adalah matriks berordo 2, selesaikan tiap persamaan berikut. <br>
            Tentukan matriks-matriks berikut dalam bentuk yang paling sederhana:
            <div class="row">
              <div class="col-md">
                <ol type="a">
                  <li>\(X+\begin{bmatrix}0&3 \\ 3&0 \end{bmatrix}=\begin{bmatrix}2&0 \\ 0&2 \end{bmatrix}\)</li>
                  <li>\(X-\begin{bmatrix}5&2 \\ -3&-1 \end{bmatrix}=\begin{bmatrix}4&5 \\ 6&0 \end{bmatrix}\) </li>
                </ol>
              </div>
              <div class="col-md">
                <ol start="3" type="a">
                  <li>\(\begin{bmatrix}4&6 \\ 3&5 \end{bmatrix}+X=\begin{bmatrix}3&-1 \\ 6&4 \end{bmatrix}\)</li>
                  <li>\(\begin{bmatrix}1&-2 \\ 4&5 \end{bmatrix}-X=\begin{bmatrix}-4&-5 \\ 2&-6 \end{bmatrix}\)</li>
                </ol>
              </div>
            </div>
            </li>
            <li>Tentukan nilai \(a\), \(b\), dan \(c\) dari setiap persamaan berikut. <br>
            a. \(\begin{bmatrix}a&2b \end{bmatrix}-\begin{bmatrix}-2&4 \end{bmatrix}=\begin{bmatrix}-1&2 \end{bmatrix}\) <br>
            b. \(\begin{bmatrix}a&-c \\ b&0 \end{bmatrix}-\begin{bmatrix}2&3 \\ -1&1 \end{bmatrix}=\begin{bmatrix}1&-2 \\ -1&-1 \end{bmatrix}\)
            </li>
            <li> Diketahui matriks: <br>
            \(A=\begin{bmatrix}a&4 \\2b&3c \end{bmatrix}\), \(B=\begin{bmatrix}2c-3b&a \\ 2a+1&b+7 \end{bmatrix}\), dan \(C=\begin{bmatrix}-1&2 \\-3&1 \end{bmatrix}\). Apabila \(A-B'=C\), tentukan nilai \(a+b+c\).
            </li>
          </ol>
   </div>
  </div>
  </section>




<section id="perkalianMatriks"  >
    <div class="text-primary fw-bold">
    <hr>
    <hr>
    <h1 >VI) Perkalian Matriks</h1>
    <hr>
    <hr>
    </div>

    <b>1. Perkalian Skalar dengan suatu Matriks</b> <br />
    Sebuah matriks dengan ordo <i>m x n</i> dapat dikalikan dengan sebuah bilangan real tertentu. Bilangan real ini selanjutnya disebut dengan <i>skalar.</i>
    Perhatikan definisi berikut.
    <!-- card 1 -->
    <div class="row justify-content-center pt-2">
    <div class="card text-bg-light mb-3" style="max-width: 50rem">
      <div class="card-header">Definisi</div>
      <div class="card-body">
        <p class="card-text fst-italic">
          Misalnya \(k \in R\) dan \(A=(a_{ij})\) adalah suatu matriks yang berordo \(m \times n\). Perkalian bilangan real \(k\) dengan matriks \(A\) adalah suatu matriks baru yang juga berordo \(m \times n\) yang diperoleh dengan
          mengalikan setiap elemen pada \(A\) dengan bilangan real \(k\) dan diberi notasi \(kA\) sedemikian sehingga \(kA=(ka_{ij})\).
        </p>
      </div>
    </div>
    </div>
    <!-- end card 1 -->
    <!-- COntoh 6.1 -->
    <div class="row justify-content-center">
    <div class="col-md-9 border rounded-3">
      <div class="badge bg-primary text-wrap fs-6" style="width: 8rem"><b> CONTOH 6.1 </b></div>
      <br />
      <br />
      Jika \(A=\begin{pmatrix}-3&5&2 \\ 1&2&-4 \end{pmatrix}\), tentukan matriks yang diwakili oleh 2A.
      <br />
      <br />
      <b>JAWAB</b> <br />
      <div class="overflow-auto">
        \(\begin{align} 2A &=2\begin{pmatrix}-3&5&2 \\ 1&2&-4 \end{pmatrix} \\ &= \begin{pmatrix} 2(-3)&2(5)&2(2) \\ 2(1)&2(2)&2(-4) \end{pmatrix} \\ &=\begin{pmatrix} -6&10&4 \\ 2&4&-8 \end{pmatrix} \end{align}\)
      </div>
    </div>
    </div>
    <!-- end contoh 6.1 -->
    <!-- COntoh 6.2 -->
    <div class="row justify-content-center pt-2">
    <div class="col-md-9 border rounded-3 p-2">
      <div class="badge bg-primary text-wrap fs-6" style="width: 8rem"><b> CONTOH 6.2 </b></div>

      <p class="fst-italic">
        DIketahui matriks-matriks \(A=\begin{pmatrix} 2&-3 \\ 1&4 \end{pmatrix}, B=\begin{pmatrix} 2&3 \\ 5&-1 \end{pmatrix} \) dan \(f(x,y)=3x-2y\). Tentukan: <br />
        a. \(f(A,B)\) <br />
        b. \(f(B,A)\)
      </p>
      <b>JAWAB</b> <br />
      <div class="overflow-auto">
        a. \( \begin{align} f(A, B) &= 3A-2B \\ &= 3 \begin{pmatrix} 2&-3 \\ 1&4 \end{pmatrix} -2 \begin{pmatrix} 2&3 \\ 5&-1 \end{pmatrix} \\ &= \begin{pmatrix} 6&-9 \\ 3&12 \end{pmatrix} - \begin{pmatrix} 4&6 \\ 10&-2 \end{pmatrix}
        \\ &= \begin{pmatrix} 2&-15 \\ -7&14 \end{pmatrix} \end{align} \)
      </div>
      <div class="overflow-auto">
        b. \( \begin{align} f(B, A) &= 3B-2A \\ &= 3 \begin{pmatrix} 2&3 \\ 5&-1 \end{pmatrix} -2 \begin{pmatrix} 2&-3 \\ 1&4 \end{pmatrix} \\ &= \begin{pmatrix} 6&9 \\ 15&-3 \end{pmatrix} - \begin{pmatrix} 4&-6 \\ 2&8 \end{pmatrix}
        \\ &= \begin{pmatrix} 2&15 \\ 13&-11 \end{pmatrix} \end{align} \)
      </div>
    </div>
    </div>
    <!-- end contoh 6.2 -->

    <p>Berdasarkan definisi perkalian matriks dengan skalar, maka dapat diambil kesimpulan tentang sifat-sifat perkalian matriks dengan skalar sebagai berikut.</p>
    <i><b>Sifat-sifat Perkalian Matriks dengan Skalar</b></i> <br />
    Jika \(k,l \in R\), matriks-matriks \(A=(a{ij})\) dan \(B=(b{ij})\) berordo <i>m \(\times\) n</i>, maka dalam perkalian matriks berlaku sifat-sifat berikut:
    <ol type="a">
    <li>\( (k+l)A=kA+lA\)</li>
    <li>\( (k-l)A=kA-lA\)</li>
    <li>\( k(BA)=(kB)A\)</li>
    <li>\( k(lA)=(kl)A\)</li>
    </ol>
    <div class="row justify-content-center ">
    <div class="col-md border border-dark">
      <div class="badge bg-danger text-wrap fs-6" style="width: 16rem">LATIHAN SOAL 6.1</div>
      <ol>
        <li>
          Selesaikan perkalian matriks dengan skalar berikut.
          <div class="row">
            <div class="col-md">a. \(2\begin{bmatrix} 3 \\ 1 \end{bmatrix}\)</div>
            <div class="col-md">b. \(-\frac{1}{3} \begin{bmatrix} 2&6 \\ 1&-3 \end{bmatrix}\)</div>
            <div class="col-md">c. \(-a\begin{bmatrix} -1&b \\ a&5 \end{bmatrix}\)</div>
          </div>
        </li>
        <li>
          Diketahui matriks-matriks: <br />
          \(A=\begin{bmatrix} 2&1 \\ 3&-1 \end{bmatrix}\), \(B=\begin{bmatrix} -1&1 \\ 3&2 \end{bmatrix}\), \(C=\begin{bmatrix} 0&-1 \\ 1&-1 \end{bmatrix}\)
          <br />
          Tentukan bentuk yang paling sederhana dari matriks berikut. <br />
          a. \(A-2B\) <br />
          b. \(2A-B+3C\) <br />
          c. \(\frac{1}{2}A-2B+\frac{1}{2}C \) <br />
          d. \(2(A-B)-2(A+B)\) <br />
        </li>
        <li>Apabila \(P\) adalah matriks persegi berordo 2, selesaikan tiap persamaan berikut. <br>
          \(\text{a. }-2P=\begin{bmatrix}4&0 \\ -2&2 \end{bmatrix}  \) <br>
          \(\text{b. } 3P+\begin{bmatrix}1&3 \\ -2&5 \end{bmatrix}=\begin{bmatrix}4&0 \\ -8&-4 \end{bmatrix}  \) <br>
          \(\text{c. } \begin{bmatrix}4&-1 \\ 3&2 \end{bmatrix}- \frac{1}{2} P=\begin{bmatrix}1&-2 \\ 0&3 \end{bmatrix}  \)
        </li>
        <!-- soal no 4 -->
        <li>Diketahui matriks-matriks: <br>
        \(A=\begin{bmatrix}4&-1 \\ -2&7 \end{bmatrix}\), \(B=\begin{bmatrix}-4&1 \\ 2&-7 \end{bmatrix}\), dan \(C=\begin{bmatrix}-8&a \\ b&-14 \end{bmatrix}\). Jika \(A+3B=C\), tentukan nilai \(2a-b\)
        </li>
        <!-- soal non 5 -->
        <li> Diketahui matriks-matriks:
         \(A=\begin{bmatrix} 3&1 \\ 2&4\end{bmatrix}\) \(B=\begin{bmatrix}0&1 \\ -2&2 \end{bmatrix}\), dan \(X\) matriks persegi berordo 2 yang memenuhi persamaan matriks: \(2A-B+X=O\). Tentukan matriks \(X\).</li>
        <li>DIketahui persamaan matriks: <br>
        \(\begin{bmatrix}x&-2 \\ -4&y \end{bmatrix}+2\begin{bmatrix}-1&3 \\ 4&x \end{bmatrix}=\begin{bmatrix}y&4 \\ 4&10 \end{bmatrix} \) tentukan nilai \(x\) dan \(y\) yang memenuhi persamaan tersebut.
        </li>
        <li>Diketahui persamaan matriks:
          \(A=\begin{bmatrix}a&4 \\ 2b&3c \end{bmatrix} \) \(B=\begin{bmatrix}2c+3b & 2a+1 \\ a & b+7 \end{bmatrix} \), dan \(C=\begin{bmatrix}-11&6 \\ 4&-4 \end{bmatrix} \). Jika \(A-2B'=C\), tentukan nilai \(a,b\) dan \(c\).
           </li>
      </ol>
    </div>
    </div>
    <br>
    <b>2. Perkalian Matriks dengan Matriks</b> <br />
    <p>
    Apabila matriks \(A=(a_{ij}\) adalah matriks yang berordo \(m \times n \) dan matriks \(B=(b_{ij})\) adalah matriks yang berordo \(q \times n\), maka perkalian matriks \(A\) dan \(B\) yang dinotasikan dengan \(AB\) dapat dilakukan
    apabila \(p=q\). Hasil kali matriks \(AB\) didefinisikan sebagai matriks \(C=(c_{ij})\) yang berordo \(m \times n \) dengan elemen baris ke-<i>i</i> dan kolom ke-<i>j</i> adalah:
    <div class="overflow-auto">
    $$c_{ij}=a_{i1}b_{1j}+a_{i2}b_{2j}+a_{i3}b_{3j}+
    ... + a_{ip}b_{qn}$$ </div> dengan <i>i</i>=123, . . ., m dan <i>j</i>=1,2,3, ...,n
    </p>
    <div class="row justify-content-center">
    <div class="col-md-6">
    <div class="card border-dark text-center">
      <div class="card-header text-danger fw-bold">CATATAN</div>
      <div class="card-body text-dark fst-italic">
        \(a_{i1}b_{1j}\) adalah hasil kali elemen matriks \(A\) yang berada pada posisi baris ke-i kolom ke-1 dengan elemen matriks \(B\) yang berada pada posisi baris ke-1 kolom ke-j.
      </div>
    </div>
    </div>
    </div>
    <!-- ---------------contoh -->
    <div class="row justify-content-center pt-2">
    <div class="col-md-9 border rounded-3">
      <div class="badge bg-primary text-wrap fs-6" style="width: 8rem"><b> CONTOH 6.3 </b></div>
      <p class="fst-italic">Diketahui \(A=\begin{pmatrix}2&3 \\ -1&2\end{pmatrix}\) dan \(B=\begin{pmatrix}-2 \\ -3 \end{pmatrix} \). <br />
      a. Tentukanlah \(AB = BA\) <br />
      b. Apakah \(AB=BA\)?</p>
      <b>JAWAB</b> <br />
      \(\begin{align}a. \:  AB &= \begin{pmatrix} 2&3 \\ -1&2 \end{pmatrix} \begin{pmatrix} -2 \\ -3 \end{pmatrix} \\ &= \begin{pmatrix} 2(-2)+3(-3) \\ (-1)(-2)+2(-3) \end{pmatrix} \\ &= \begin{pmatrix} -4&-9 \\ 2&-6
      \end{pmatrix} \\ &= \begin{pmatrix} -13 \\ -4 \end{pmatrix} \end{align}\) <br />
      Berdasar definisi perkalian matriks dengan matriks, perkalian \(BA\) tidak dapat diselesaikan karena banyaknya kolom dari matriks \(B\) tidak sama dengan banyaknya baris pada matriks \(A\). <br> <br>
      b. Dari jawaban (a) diperoleh kesimpulan \(AB \ne BA\). <br> <br>

      <div class="row justify-content-center">
          <div class="col-md-6">
          <div class="card border-dark text-center">
              <div class="card-header text-danger fw-bold">CATATAN</div>
                    <div class="card-body text-dark fst-italic">Perkalian dua matriks \(A\) dan \(B\) dapat dilakukan jika banyaknya kolom \(A\) sema dengan banyaknya baris pada \(B\)</div>
                  </div>
                </div>
              </div>
    </div>
    </div>
    <!-- -============================== -->
    <div class="row justify-content-center pt-3">
    <div class="col-md-5">
    <div class="card">
    <div class="card-header text-dark fw-bold fst-italic text-center">Sifat-sifat Perkalian Matriks</div>
    <div class="card-body text-dark">
    <ol>
    <li>
      \(AB \ne BA \), yaitu tidak berlaku sifat komutatif
    </li>
    <li>
     Untuk sembarang \(k \in R, A=(a_{ij})\), dan \(B_{ij})\), maka
      <ol type="a">
        <li>\((kA)B=k(AB)\)</li>
        <li>\( (Ak)B=A(kB)\)</li>
        <li>\( (AB)k=A(Bk) \)</li>
      </ol>

    </li>
    <li>
      Untuk \(A=(a_{ij}), B=(b_{ij})\), dan \(C=(c_{ij})\) maka :
      <ol type="a">
        <li>\(A(BC)=(AB)C\), jika \(AB\) dan \(BC\) terdefinisikan.</li>
        <li>\(A(B+C)=AB+AC\), jika \(AB, AC,\) dan \(B+C\) terdefinisikan.</li>
        <li>\((A+B)C=AC+BC\), jika \(AC, BC,\) dan \(A+B\) terdefinisikan.</li>
      </ol>
    </li>
    </ol>
    </div>
    </div>
    </div>
    <div class="col-md-4">
    <div class="card border-dark text-center">
    <div class="card-header text-danger fw-bold">CATATAN</div>
    <div class="card-body text-dark fst-italic">Jika \(A=(a_{ij}\) adalah matriks persegi, maka \(A^2\) diartikan \(A.A\) dengan cara yang sama, \(A^3\) diartikan \(A.A^2\), dan \(A^4\) diartikan \(A.A^3\) dan
    $$\begin{pmatrix} a&b \\c&d \end{pmatrix}^2 \ne \begin{pmatrix} a^2&b^2 \\c^2&d^2 \end{pmatrix}$$</div>
    </div>
    </div>
    </div>
    <div class="row pt-2 justify-content-center">
    <div class="col-md-9 border">
    <div class="badge bg-primary text-wrap fs-6" style="width: 8rem"><b> CONTOH 6.4 </b></div>
    <br />
    <p class="fst-italic">
    Jika \(A=\begin{pmatrix}-1&2 \\ 3&1 \end{pmatrix}, B=\begin{pmatrix}2&1 \\ -3&5 \end{pmatrix}\) dan \( C=\begin{pmatrix}1&2 \\ 4&-1 \end{pmatrix}\)
    <br />
    a. \((2A)B=A(2B)\) <br />
    b. \(A(BC)=(AB)C\)
    </p>
    <br />

    <b>JAWAB</b> <br />

    <div class="row">
    <div class="col">
      \(\begin{align}
        (2A)B &= \begin{bmatrix}2 \begin{pmatrix}-1&2 \\ 3&1 \end{pmatrix} \end{bmatrix} \begin{pmatrix}2&1 \\ -3&5 \end{pmatrix} \\
        &= \begin{pmatrix}-2&4 \\ 6&2 \end{pmatrix} \begin{pmatrix}2&1 \\ -3&5 \end{pmatrix} \\
        &= \begin{pmatrix}-16&18 \\ 6&16 \end{pmatrix}
        \end{align}\)
    </div>
    <div class="col">\(\begin{align}
      A(2B) &= \begin{bmatrix}\begin{pmatrix}-1&2 \\ 3&1 \end{pmatrix} \begin{pmatrix}2&1 \\ -3&5 \end{pmatrix}  \end{bmatrix} \\
      &= \begin{pmatrix}-1&2 \\ 3&1 \end{pmatrix} \begin{pmatrix}4&2 \\ -6&10 \end{pmatrix} \\
      &= \begin{pmatrix}-16&18 \\ 6&16 \end{pmatrix}
      \end{align}\)</div>
    </div>
    Jadi, \((2A)B=A(2B)\)
    <div class="row mt-2">
    <div class="col">
      \(\begin{align}
        A(BC)
        &=\begin{pmatrix}-1&2 \\ 3&1 \end{pmatrix} \begin{bmatrix} \begin{pmatrix}2&1 \\ -3&5 \end{pmatrix}
        \begin{pmatrix}1&2 \\ 4&-1 \end{pmatrix} \end{bmatrix} \\
        &= \begin{pmatrix}-1&2 \\ 3&1 \end{pmatrix} \begin{pmatrix}6&3 \\ 17&-11 \end{pmatrix} \\
        &= \begin{pmatrix}28&-25 \\ 35&-2 \end{pmatrix}
        \end{align}\)
        <br />
    </div>
    <div class="col"> \(\begin{align}
      (AB)C &= \begin{bmatrix} \begin{pmatrix}-1&2 \\ 3&1 \end{pmatrix} \begin{pmatrix}2&1 \\ -3&5 \end{pmatrix}  \end{bmatrix} \begin{pmatrix}1&2 \\ 4&-1 \end{pmatrix}\\
      &= \begin{pmatrix}-8&9 \\ 3&8 \end{pmatrix} \begin{pmatrix}1&2 \\ 4&-1 \end{pmatrix} \\
      &= \begin{pmatrix}28&-25 \\ 35&-2 \end{pmatrix}
      \end{align}\) </div>
    </div>
    Jadi, \((A(BC)=(AB)C\)
    <br />
    </div>
    </div>
    <!-- latihan perkalian -->
    <div class="row justify-content-center pt-4">
    <div class="col-md border border-dark">
      <div class="badge bg-danger text-wrap fs-6" style="width: 16rem">LATIHAN SOAL 6.2</div>
      <ol type="1">
        <li>
          Hitunglah bentuk perkalian matriks berikut!
          <div class="row">
            <div class="col-md">
              a. \(\begin{pmatrix}2&-1 \end{pmatrix}\begin{pmatrix} -1\\3\end{pmatrix}\) <br>
              b. \(\begin{pmatrix}4&-2 \\ -3&2 \end{pmatrix}\begin{pmatrix} 5&-1 \\ 2&-3\end{pmatrix}\) <br>
              c. \(\begin{pmatrix}2&-1&3 \end{pmatrix}\begin{pmatrix} -1&3 \\ 2&1 \\ 3&2\end{pmatrix}\) <br>
              d. \(\begin{pmatrix}-3&2&-1 \\ 4&-1&2 \end{pmatrix}\begin{pmatrix} 2\\1\\-2\end{pmatrix}\) <br>
              e. \(\begin{pmatrix}-2&0&-5 \\ 7&2&-1 \end{pmatrix}\begin{pmatrix} -2&4 \\ 1&6 \\ 3&-2\end{pmatrix}\)
            </div>
            <div class="col-md">
              f. \(\begin{pmatrix}2&-1 \\ 3&-2 \end{pmatrix}\begin{pmatrix}-2 \\ -4 \end{pmatrix}\) <br>
              g. \(\begin{pmatrix}-1&4\end{pmatrix}\begin{pmatrix} 2&0 \\ -1&-2 \end{pmatrix}\) <br>
              h. \(\begin{pmatrix}2&-3 \\ 4&1 \end{pmatrix}\begin{pmatrix} -1&1&4\\3&2&1\end{pmatrix}\) <br>
              i. \(\begin{pmatrix}-3&5 \\ 7&-4 \end{pmatrix}\begin{pmatrix} -5&3&-1\\1&-2&4\end{pmatrix}\) <br>
              j. \(\begin{pmatrix}-2\\2\\-1\\3 \end{pmatrix}\begin{pmatrix} -2&4&2&1\end{pmatrix}\)
            </div>
          </div>
        </li>
      </ol>
      </div>
    </div>
    <!----container--  -->
    </section>




<section id="inversMatriks" >
<div class="text-primary">
<hr>
<hr>
<h1 >VII) INVERS MATRIKS</h1>
<hr>
<hr>
</div>
<div class="row">
<div class="col">
Sebelum membahas lebih lanjut tentang pengertian dari invers suatu matriks akan dibahas terlebih dahulu mengenai determinan suatu matriks.
<ol type="1">
<!-- start determinan ordo 2 -->
<li class="fw-bold">Determinan Matriks Persegi Berordo Dua</li>
Misalnya \(A\) adalah matriks berordo dua yang dituliskan dalam bentuk \(A=\begin{pmatrix} a&b \\ c&d \end{pmatrix} \), maka determinan matriks \(A\) adalah \(det A = |A|=\begin{vmatrix} a&b\\c&d \end{vmatrix}\)
<br />
<!-- contoh 7.1 -->
<div class="row p-2 justify-content-center">
  <div class="col-md-9 border">
    <div class="badge bg-primary text-wrap fs-6" style="width: 8rem"><b> CONTOH 7.1 </b></div>
    <br />
    <p class="fst-italic">
      Tentukan determinan matriks berikut! <br />
      a. \(A=\begin{pmatrix}2&-1\\3&4 \end{pmatrix}\) <br />
      b. \(C=\begin{pmatrix}a-1&-1\\2&a+1 \end{pmatrix}\)
    </p>
    <br />

    <b>JAWAB</b> <br />
    <div class="row">
      <div class="col">
        a. JIka \(A= \begin{pmatrix} 2&-1\\3&4\end{pmatrix}\), maka <br>
      \(\begin{align} det (A)) &= (2)(4)-(-1)(3) \\ &=8+3 \\&=11 \end{align} \) <br>
      b. JIka \(C= \begin{pmatrix} a-1&-1\\2&a+1\end{pmatrix}\), maka <br> \(\begin{align} det (C)) &= (a-1)(a+1)-(-1)(2) \\ &=a^2-1+2 \\&=a^2+1 \end{align} \)
      </div>
    </div>
  </div>
</div>
<!-- contoh 7.2 -->
<div class="row p-2 justify-content-center">
  <div class="col-md-9 border">
    <div class="badge bg-primary text-wrap fs-6" style="width: 8rem"><b> CONTOH 7.2 </b></div>
    <br />
    <p class="fst-italic">
      Tentukan nilai \(x\) yang memenuhi persamaan \(\begin{vmatrix} 1-x&2 \\ 3&3-x \end{vmatrix}=2\) <br />
      <b>JAWAB</b> <br />
      \(\begin{align} \begin{vmatrix} 1-x&2 \\ 3&3-x \end{vmatrix} &= 2 \\ (1-x)(3-x)-(2)(3) &= 2 \\ 3-x-3x+x^2-6 &=2 \\ x^2-4x-5 &=0 \\ (x-5)(x+1) &= 0 \\ \end{align}\) <br />\(x=5\) atau \(x=-1\) <br />
      Jadi, diperoleh nilai \(x=-1\) atau \(x=5\)
    </p>
  </div>
</div>
<!-- end determinan ordo 2 -->

<!-- start determinan ordo 3 -->
<li class="fw-bold">Determinan Matriks Persegi Berordo Tiga</li>
<p>Determinan suatu matriks persegi berordo tiga dapat dilakukan dengan dua cara, yaitu dengan <i>metode fofaktor</i> dan <i>aturan Sarrus</i></p>
<ol type="a">
  <i><li class="fw-bold">Metode Kofaktor</li></i>
  1)
  <i>Submatriks</i>
  <br />
  Matriks \(A\) dapat disebut sebagai submatriks dari matriks \(M\) jika \(A\) berasal dari matriks \(M\) yang dihilangkan beberapa elemen baris atau beberapa elemen kolomnya.
  <br />
  <!-- contoh 7.3 -->
  <div class="row p-2 justify-content-center">
    <div class="col-md-9 border">
      <div class="badge bg-primary text-wrap fs-6" style="width: 8rem"><b> CONTOH 7.3 </b></div>
      <br />
      Jika \(M=\begin{pmatrix}-2&1 \\ 5&7 \\ 4&6 \end{pmatrix}\) dan \(A=\begin{pmatrix}-2&1 \\ 4&6 \end{pmatrix}\), maka matriks \(A\) disebut submatriks dari \(M\) karena \(A\) dapat diperoleh dari matriks \(M\) yang
      dihilangkan elemen baris kedua.
    </div>
  </div>
  2)
  <i>Minor</i
  ><br />
  Jika matriks \(A=a_{ij}\) matriks persegi, maka minor \(a{ij}\) adalah determinan dari matriks \(A\) yang sudah dihilangkan elemen baris ke-<i>i</i>
  dan kolom ke-<i>j</i>.
  <!-- contoh 7.4 -->
  <div class="row p-2 justify-content-center">
    <div class="col-md-9 border">
      <div class="badge bg-primary text-wrap fs-6" style="width: 8rem"><b> CONTOH 7.4 </b></div>
      <br />
      <p class="fst-italic">Diketahui matriks \(A=\begin{pmatrix} 4&2&-1 \\ 0&5&3 \\ -2&1&1 \end{pmatrix}\). Tentukan minor \(a_{23}\) dan \(a_{12}\)</p>
      <b>JAWAB</b> <br />
      Untuk minor \(a_{23}\), hilangkan elemen baris kedua dan kolom ketiga, diperoleh minor \(a_{23}=\begin{vmatrix} 4&2 \\ -2&1 \end{vmatrix}\)\(=4.1-(-2).2=4+4=8 \) <br />
      Untuk minor \(a_{12}\) hilangkan elemen baris pertama dan kolom kedua, diperoleh minor \(a_{12}=\begin{vmatrix}0&3 \\ -2&1 \end{vmatrix}=0-(-6)=6. \)
    </div>
  </div>
  3)
  <i>Kofaktor dari</i>
  <br />
  <p>Jika matriks \(A=(a_{ij})\) matriks persegi maka kofaktor dari \(a_{ij}\) adalah \(K_{ij}=(-1)^{i+j} \times\) minor \(a_{ij}\)</p>
  <!-- contoh 7.5 -->
  <div class="row p-2 justify-content-center">
    <div class="col-md-9 border">
      <div class="badge bg-primary text-wrap fs-6" style="width: 8rem"><b> CONTOH 7.5 </b></div>
      <br />
      <p class="fst-italic">Diketahui matriks \(A=\begin{pmatrix} 2&-1&1 \\ 3&0&5 \\ -2&4&3 \end{pmatrix}\). Tentukan kofaktor dari \(a_{23}\) dan \(a_{31}\)</p>
      <b>JAWAB</b> <br />
      \(\begin{align} K_{23} &=(-1)^{2+3} \, \text{minor} \, a_{23} \\ &= (-1)^5 \begin{vmatrix}2&-1 \\ -2&4 \end{vmatrix} \\ &= (-1) (8-2) \\ &= -6 \end{align}\) <br />
      \(\begin{align} K_{31} &=(-1)^{3+1} \, \text{minor} \, a_{31} \\ &= (-1)^4 \begin{vmatrix}-1&1 \\ 0&5 \end{vmatrix} \\ &= (1) (-5-0) \\ &= 5 \end{align}\)
    </div>
  </div>
  <p>Nilai determinan matriks \(A\) adalah penjumlahan dari hasil kali semua elemen suatu baris atau kolom matriks \(A\) tersebut dengan kofaktor masing-masing.</p>
  <br />
  misalnya :
  <ol type="1">
    <li>
      Menggunakan elemen-elemen baris ke-<i>i</i>, maka <br />
      <div class="overflow-auto">
        \( \text{det} A=(a_{i1} \times K_{i1})+(a_{i2} \times K_{i2})+ ... + (a_{in} \times K_{in}) \).
      </div>
    </li>
    <li>
      Menggunakan elemen-elemen kolom ke-<i>j</i>, maka <br />
      <div class="overflow-auto">
        \( \text{det} A=(a_{1j} \times K_{1j})+(a_{2j} \times K_{2j})+ ... + (a_{nj} \times K_{nj}) \).
      </div>
    </li>
  </ol>
  <!-- contoh 7.6 -->
  <div class="row p-2 justify-content-center">
    <div class="col-md-9 border">
      <div class="badge bg-primary text-wrap fs-6" style="width: 8rem"><b> CONTOH 7.6 </b></div>
      <br />
      <p class="fst-italic">
        Tentukan determinan matriks \(A=\begin{pmatrix} 2&1&4 \\ 3&5&1 \\ 1&4&2 \end{pmatrix} \) dengan menggunakan metode kofaktor. <br />
        a. Dengan baris ke-1 <br />
        b. Dengan kolom ke-2
      </p>
      <b>JAWAB</b> <br />
      a. Dengan baris ke-1, maka
      <div class="overflow-auto">
        $$ \begin{align} \text{det} A &= a_{11}.K_{11}+a_{12}.K_{12}+a_{13}.K_{13} \\ &=2 \times (-1)^{1+1} \begin{vmatrix}5&1\\4&2 \end{vmatrix}+1 \times (-1)^{1+2}\begin{vmatrix}3&1 \\ 1&2
        \end{vmatrix}+4 \times (-1)^{1+3}\begin{vmatrix}3&5\\1&4 \end{vmatrix} \\ &=2 \times 1 \times (10-4)+1\times(-1)(6-1)+4\times1\times(12-5)\\ &=12+(-5)+28 \\ &= 35 \end{align}$$
      </div>
      b. Dengan kolom ke-2, maka
      <div class="overflow-auto">
        $$ \begin{align}
        \text{det} A &= a_{12}.K_{12}+a_{22}.K_{22}+a_{32}.K_{32} \\ &=1 \times (-1)^{1+2} \begin{vmatrix}3&1\\1&2 \end{vmatrix}+5 \times (-1)^{2+2}\begin{vmatrix}2&4 \\ 1&2 \end{vmatrix}+4 \times (-1)^{3+2}\begin{vmatrix}2&4\\3&1
        \end{vmatrix} \\ &=(-1) \times (6-1) +5\times1 \times(4-4)+4\times(-1)\times(2-12)\\ &=-5+0+40 \\ &= 35 \end{align}$$
      </div>
      <br />
    </div>
  </div>
  <i><li class="fw-bold">Metode Sarrus</li></i>
  <p>Selain menggunakan metode kofaktor dapat pula digunakan <i>kaidah Sarrus</i> untuk menentukan determinan matriks ordo 3 x 3. Ada beberapa langkah yang perlu dilakukan.</p>
  <ol type="1">
    <li>Tuliskan kembali kolom pertama dan kolom kedua di sebelah kanan garis.</li>
    <li>Kalikan elemen-elemen yang terletak pada dan sejajar diagonal utama kemudian jumlahkan. Kalikan juga elemen-elemen yang terletak pada dan sejajar diagonal samping kemudian jumlahkan.</li>
    <li>Determinan matriks adalah jumlah dari hasil kali elemen-elemen pada dan sejajar diagonal utama dikurangi hasil kali elemen-elemen yang terletak pada dan sejajar diagonal samping.</li>
  </ol>
  <p class="text-center">
    Jika \(P=\begin{pmatrix}a&b&c \\ d&e&f \\ g&h&i \end{pmatrix} \), maka \(\text{det}(P)=\)
    <img src="{{asset('asets/matriks/sarrus.png')}}" alt="sarrus" width="140" class="img-fluid" />
  </p>
  \(|P|=(a \times e \times i)\)\(+(b \times f \times g)\)\(+(c \times d \times h)\)\(-(g\times e \times c)\)\(-(h \times f \times a)\)\(-(i \times d \times b)) \)
  <br />
  <br />
  <!-- contoh 7.7 -->
  <div class="row p-2 justify-content-center">
    <div class="col-md-9 border" >
      <div class="badge bg-primary text-wrap fs-6" style="width: 8rem"><b> CONTOH 7.7 </b></div>
      <br />
      <p class="fst-italic">Tentukan determinan dari matriks \(P=\begin{pmatrix} 1&2&4 \\ 2&3&-1 \\ 4&5&3 \end{pmatrix}\)</p>
      <b>JAWAB</b> <br />
      <div class="overflow-auto">
        \(\begin{align}|P|&=\begin{vmatrix} 1&2&4 \\ 2&3&-1 \\4&5&3\end{vmatrix} \begin{matrix} 1&2 \\ 2&3 \\ 4&5 \end{matrix} \\ |P|&=(1.3.3)+(2.(-1).4)(4.2.5)-(4.3.4)-(5.(-1).1)-(3.2.2) \\ &= 9+(-8) +40-48+5-12 \\ &=-14
        \end{align} \)
      </div>
    </div>
  </div>
  <p>Sifat-sifat determinan matriks persegi adalah sebagai berikut.</p>
  <ol type="1">
    <li>\(\text{det}(A)=\text{det}(A')\)</li>
    <li>Jika dua baris/kolom matriks \(A\) saling dipertukarkan sehingga didapat matriks \(B\), maka \(\text{det}(B)=-\text{det}(A)\)</li>
    <li>Jika suatu baris/kolom matriks \(A\) digandakan dengan suatu skalar \(k\) sehingga didapat matriks \(B\), maka \(\text{det}(B)=k.\text{det}(A)\)</li>
    <li>Jika matriks \(A\) memiliki suatu baris/kolom yang semua elemennya nol, maka \(\text{det}(A)=0\)</li>
    <li>Jika ada satu baris/kolom matriks \(A\) merupakan kelipatan dari baris/kolom yang lain, maka \(\text{det}(A)=0\)</li>
    <li>JIka \(A\) merupakan matriks segitiga atas atau matriks segitiga bawah, maka determinan matriks \(A\) adalah perkalian elemen-elemen diagonal utamanya.</li>
    <li>Jika matriks segi \(A\) dan matriks segi \(B\) memiliki ukuran yang sama, maka \(\text{det}(A.B)=\text{det}(A).\text{det}(B)\).</li>
    <li>
      Jika matriks \(A\) adalah matriks persegi, \(k\) dalam suatu konstanta, maka: <br />
      a) \(\text{det}(k A)=k^n \text{det}(A)\to\) <i> n adalah ordo matriks persegi</i> <br />
      b) \(\text{det}(A^m)=[\text{det}(A)]^m\)
    </li>
  </ol>
  <!-- contoh 7.8 -->
  <div class="row p-2 justify-content-center">
    <div class="col-md-9 border">
      <div class="badge bg-primary text-wrap fs-6" style="width: 8rem"><b> CONTOH 7.8 </b></div>
      <br />
      <p class="fst-italic">
        Jika diketahui matriks \(A=\begin{pmatrix} 2&3&1 \\ 4&1&5 \\ 6&7&9 \end{pmatrix}\) mempunyai determinan \(-48\), maka tentukan determinan dari matriks berikut! <br />
        a.\(B=\begin{pmatrix} 2&4&6 \\ 3&1&7 \\ 1&5&9 \end{pmatrix}\) <br />
        b. \(C=\begin{pmatrix} 4&1&5 \\ 2&3&1 \\ 6&7&9 \end{pmatrix}\) <br />
        c. \(D=\begin{pmatrix} 2&3&1 \\ 8&2&10 \\ 6&7&9 \end{pmatrix}\)
      </p>
      <b>JAWAB</b> <br />
      <ol type="a">
        <li>Matriks \(B\) merupakan transpose dari matriks \(A\), sehingga \(\text{det} (B) = \text{det} (A) = - 48\)</li>
        <li>Matriks \(C\) merupakan matriks \(A\) yang baris kedua ditukar dengan baris pertama, sehingga \(\text{det}(C)=-\text{det}(A)=48\).</li>
        <li>Matriks \(D\) merupakan matriks \(A\) yang baris kedua dikalikan dengan \(2\), sehingga <br> \(\text{det}(D)=2.\text{det}(A)=2.(-48)=-96\).</li>
      </ol>
    </div>
  </div>
  <br />
  <!-- contoh 7.9 -->
  <div class="row p-2 justify-content-center">
    <div class="col-md-9 border">
      <div class="badge bg-primary text-wrap fs-6" style="width: 8rem"><b> CONTOH 7.9 </b></div>
      <br />
      <p class="fst-italic">
        Tentukan determinan dari matriks-matriks berikut! <br />
        a.\(A=\begin{pmatrix} 1&2&3 \\ 0&0&0 \\ 1&1&4 \end{pmatrix}\) <br />
        b. \(B=\begin{pmatrix} 1&2&3 \\ 2&4&6 \\ 4&5&6 \end{pmatrix}\) <br />
        c. \(C=\begin{pmatrix} 1&2&3 \\ 0&4&5 \\ 0&0&6 \end{pmatrix}\)
      </p>
      <b>JAWAB :</b> <br />
      <ol type="a">
        <li>Karena pada matriks \(A\) ada baris (yaitu baris kedua) yang semua elemennya nol, maka \(\text{det}(A)=0\).</li>
        <li>Karena pada matriks \(B\) ada baris (yaitu, baris kedua) yang semua elemennya merupakan kelipatan dari baris lainnya (yaitu, baris pertama) maka \(\text{det}(B)=0\).</li>
        <li>Karena matriks \(C\) merupakan matriks segitiga atas, maka \(\begin{vmatrix}1&2&3\\0&4&5\\0&0&6 \end{vmatrix}=(1)(4)(6)=24\)</li>
      </ol>
    </div>
  </div>
</ol>
<!-- end determinan ordo 3 -->
<li class="fw-bold">Invers Matriks Persegi Berordo Dua</li>
<p>
  Misalnya \(A\) dan \(B\) adalah matriks persegi berordo sama dan berlaku \(AB=BA=I\) dengan \(I\) adalah matriks identitas, maka \(B\) disebut "invers perkalian" (selajutnya ditulis "invers" saja dari \(A\) dan \(A\) adalah
  invers dari \(B\) dengan kata lain \(A\) dan \(B\) saling invers.
</p>
<div class="row p-2 justify-content-center">
  <div class="col-md-9 border">
    <div class="badge bg-primary text-wrap fs-6" style="width: 8rem"><b> CONTOH 7.10 </b></div>
    <br />
    <p class="fst-italic">Diketahui \(A=\begin{pmatrix} 5&7 \\ 2&3 \end{pmatrix}\) dan \(B=\begin{pmatrix} 3&-7 \\ -2&5 \end{pmatrix}\). Tentukan</p>
    <br />
    a. \(AB\) <br />
    b. \(BA\) <br />
    <b>JAWAB:</b> <br />
    a. \(A\) dikalikan dari kanan dengan \(B\), diperoleh <br />
    $$\begin{align} AB &=\begin{pmatrix} 5&7 \\ 2&3 \end{pmatrix} \begin{pmatrix} 3&-7 \\ -2&5 \end{pmatrix} \\ &= \begin{pmatrix} 15-14 & -35+35 \\ 6-6&-14+15 \end{pmatrix} \\ &= \begin{pmatrix} 1&0 \\ 0&1 \end{pmatrix}
    \end{align}$$ <br />
    b. \(A\) dikalikan dari kiri dengan \(B\), diperoleh <br />
    $$\begin{align} BA &=\begin{pmatrix} 3&-7 \\ -2&5 \end{pmatrix} \begin{pmatrix} 5&7 \\ 2&3 \end{pmatrix} \\ &= \begin{pmatrix} 15-14 & 21-21 \\ -10+10&-14+15 \end{pmatrix} \\ &= \begin{pmatrix} 1&0 \\ 0&1 \end{pmatrix}
    \end{align}$$ <br />
  </div>
</div>

    <p>Invers dari matriks \(A\) disimbolkan dengan \(A^{-1}\). Berikut ini akan dijelaskan prosedur menentukan invers matriks persegi berordo dua. <br /></p>
    <p>
      Misalnya \(A\) adalah matriks persegi berordo dua, yaitu \(A=\begin{pmatrix} a&b \\ c&d \end{pmatrix}\) dan misalnya invers matriks \(A\) adalah \(A^{-1}=\begin{pmatrix} x&y \\ u&v \end{pmatrix}\). Berdasarkan pengertian
      invers matriks, maka berlaku \(AA^{-1}=I\), dengan \(I\) adalah matriks identitas.
    </p>
    $$\begin{pmatrix} a&b \\ c&d \end{pmatrix} \begin{pmatrix} x&y \\ u&v \end{pmatrix}=\begin{pmatrix} 1&0 \\ 0&1 \end{pmatrix}$$ $$\begin{pmatrix} ax+bu&ay+bv \\ cx+du&cy+dv \end{pmatrix}=\begin{pmatrix} 1&0 \\ 0&1
    \end{pmatrix}$$ Berdasarkan kesamaan matriks, diperoleh <br />
    \(ax+bu=1 \to ...(1)\) <br />
    \(cx+du=0 \to ...(2)\) <br />
    \(ay+bv=0 \to ...(3)\) <br />
    \(cy+dv=1 \to ...(4)\) <br />
    Selanjutnya selesaikan sistem persamaan tersebut untuk menentukan nilai \(x\), \(y\), \(u\), dan \(v\) <br />
    <div class="overflow-auto">\( \begin{align} ax+bu = 1 | \times d| adx+bdu &= d \\ cx+du=0 |\times b| bcx+bdu &= 0 \\ adx-bcx &= d \\ x(ad-bc &=d) \to x= \frac{d}{ad-bc} \end{align}\)</div>
     <br />
    Substitusikan \(x\) pada persamaan (1), sehingga diperoleh $$u=\frac{-c}{ad-bc}$$ <br />
    Dengan cara yang sama seperti di atas, akan diperoleh juga
    $$y=\frac{-b}{ad-bc}$$ dan $$v=\frac{a}{ad-bc}$$ Dengan demikian $$\begin{align}A^{-1} &= \begin{bmatrix}\frac{d}{ad-bc} & & \frac{-b}{ad-bc} \\ \frac{-c}{ad-bc} & &
    \frac{a}{ad-bc}\end{bmatrix} \\ &= \frac{1}{ad-bc}\begin{bmatrix}d&-b \\ -c&a \end{bmatrix} \end{align} $$
    $$\text{dengan } ad-bc \ne 0$$
    <p>
      Jika determinan \(A=0\) atau \(ad-bc=0\), maka pembagian tersebut tidak terdefinisikan sehingga \(A^{-1}\) tidak ada. Matriks yang tidak mempunyai invers, disebut <i>matriks singular.</i> JIka determinan \(A \ne 0\) atau
      \(ad-bc \ne 0\), maka matriks \(A\) disebut <i>matriks non singular.</i> <br />
    </p>
    Dari uraian di atas dapat disimpulkan sebagai berikut.
    <div class="row justify-content-center">
      <div class="col-md text-center border bg-warning p-2 rounded rounded-4 shadow">
        \(Invers \: matriks \: A=\begin{bmatrix}a&b \\ c&d \end{bmatrix}\: adalah \) \( A^{-1}=\frac{1}{ad-bc}\begin{bmatrix}d&-b \\ -c&a \end{bmatrix},\)\(\: dengan \: ad-bc\ne 0\)
      </div>
    </div>

    <div class="row p-2 justify-content-center">
      <div class="col-md-9 border">
        <div class="badge bg-primary text-wrap fs-6" style="width: 8rem"><b> CONTOH 7.11 </b></div>
        <br />
        <p class="fst-italic">Tentukan invers matriks berikut!</p>
        <div class="row">
          <div class="col-md p-2">
            a. \(\:A=\begin{pmatrix}4&2 \\ 5&3\end{pmatrix}\) <br />
            <b>JAWAB:</b> <br />
            a. \(\:\begin{align}A^{-1} &= \frac{1}{4.3-5.2}\begin{pmatrix}3&-2 \\ -5&4\end{pmatrix} \\ &= \frac{1}{2}\begin{pmatrix}3&-2 \\ -5&4\end{pmatrix} \\ &= \begin{pmatrix}\frac{3}{2}&-1 \\ -\frac{5}{2} & 2\end{pmatrix}
            \end{align}\)
          </div>
          <div class="col-md p-2">
            b. \(\:B=\begin{pmatrix}2&-3 \\ 1&5\end{pmatrix}\) <br />
            <b>JAWAB:</b> <br />
            b. \(\:\begin{align}B^{-1} &= \frac{1}{2.5-(-3).1}\begin{pmatrix}5&3 \\ -1&2\end{pmatrix} \\ &= \frac{1}{3}\begin{pmatrix}5&3 \\ -1&2\end{pmatrix} \\ &= \begin{pmatrix}\frac{5}{13}&\frac{3}{13} \\ -\frac{1}{13} &
            \frac{2}{13}\end{pmatrix} \end{align}\)
          </div>
        </div>
      </div>
    </div>

    <div class="row p-2 justify-content-center">
      <div class="col-md-9 border">
        <div class="badge bg-primary text-wrap fs-6" style="width: 8rem"><b> CONTOH 7.12 </b></div>
        <br />
        <p class="fst-italic">Diketahui \(A=\begin{pmatrix}1&3 \\ 5&3\end{pmatrix}\) dan \(I=\begin{pmatrix}1&0 \\ 0&1\end{pmatrix}\). Tentukan nilai k jika matriks \(A-kI)\) adalah matriks singular!</p>
        <br />
        <b>JAWAB:</b> <br />
        Misalnya \(P=A-kI\), maka $$\begin{align} P &= \begin{pmatrix}1&3 \\ 5&3\end{pmatrix} -k\begin{pmatrix}1&0 \\ 0&1\end{pmatrix} \\ &= \begin{pmatrix}1&3 \\ 5&3\end{pmatrix}-\begin{pmatrix}k&0 \\ 0&k\end{pmatrix} \\ &=
        \begin{pmatrix}1-k&3 \\ 5&3-k\end{pmatrix} \end{align}$$ Karena \(P\) matriks singular, maka \(\text{det}\:P\) sama dengan nol, sehingga diperoleh: <br />
        \(\begin{align} \text{det}\:P &=0 \\ (1-k)(3-k)-(3)(5) &=0 \\ 3-k-3k+k^2-15 &=0 \\ k^2-4k-12 &=0 \\ (k+2)(k-6)&=0 \end{align} \) <br />
        \(k=-2\) atau \(k=6\) <br />
        Jadi, diperoleh nilai \(k=-2\) atau \(k=6\)
      </div>
    </div>

    Jika \(A\) dan \(B\) adalah matriks non singular, maka berlaku
    <ol type="a">
      <li>\(AA^{-1}=A^{-1}A=I\)</li>
      <li>\(A^{-1})^{-1}\)</li>
      <li>\((A.B)^{-1}=B^{-1}.A^{-1}\)</li>
      <li>\((A')^{-1}=(A^{-1})'\)</li>
      <li>\(\text{det }A^{-1}=\frac{1}{\text{det }A}\)</li>
    </ol>
    <br>

<li class="fw-bold">Invers Matriks Persegi Berordo 3x3</li>
<p>
  Pada bagian ini kita akan membahas invers matriks yang berordo 3x3. Salah satu cara yang dapat digunakan adalah dengan menggunakan <i>adjoin</i> dari suatu matriks. Sebelum kita mempelajari <i>adjoin</i> suatu matriks
  penegrtian <i><b>minor</b></i> dan <i><b>kofaktor</b></i> mutlak diperlukan sebagai syarat untuk memperoleh <i>adjoin</i> suatu matriks.
</p>
<p>Misalkan \(A\) adalah suatu matriks yang berordo 3x3 yang ditulis dalam bentuk</p>
$$A=\begin{pmatrix}a_{11}&a_{12}&a_{13} \\ a_{21}&a_{22}&a_{23} \\ a_{31}&a_{32}&a_{33} \end{pmatrix} $$
<p>
  <i>Matriks kofaktor</i> yang dilambangkan dengan C adalah suatu matriks yang elemen-elemen dari matriks tersebut merupakan kofaktor \((K_{ij})\) dari suatu matriks. Transpose dari matriks kofaktor ini disebut
  <i>matriks adjoin</i> yang disingkat \(Adj\). Untuk matriks \(A\) di atas misalnya \(K_{ij}\) merupakan kofaktor dari \(a_{ij}), maka kofaktor dari matriks A adalah
</p>
$$C=\begin{pmatrix}K_{11}&K_{12}&K_{13} \\ K_{21}&K_{22}&K_{23} \\ K_{31}&K_{32}&K_{33} \end{pmatrix} $$ sedangkan adjoin dari matriks \(A\) adalah $$C=\begin{pmatrix}K_{11}&K_{21}&K_{31} \\ K_{12}&K_{22}&K_{32} \\
K_{13}&K_{23}&K_{33} \end{pmatrix} $$
<p>Berdasarkan pengertian <i>adjoin</i> suatu matriks di atas, maka invers dari \(A\) yang berordo 3x3 dapat diperoleh dengan cara:</p>

<div class="row justify-content-center">
<div class="card text-md-light mb-3" style="max-width: 18rem">
<div class="card-header text-center">Pengertian</div>
<div class="card-body text-center">
  <p class="card-text fst-italic">
    \(A^{-1}=\frac{1}{\text{det}A}Adj A\)
  </p>
</div>
</div>

<div class="row p-2 justify-content-center">
<div class="col-md-9 border">
   <div class="badge bg-primary text-wrap fs-6" style="width: 8rem"><b> CONTOH 7.13 </b>
  </div>
   <p class="fst-italic">Misalnya diberikan matriks-matriks</p>
   \(A=\begin{pmatrix}5&7&3 \\ 0&-1&0 \\ 2&4&1 \end{pmatrix}\) dan \(B=\begin{pmatrix}3&2&4 \\ 2&1&3 \\0&1&-2 \end{pmatrix}  \) <br>
   Tentukanlah <br>
   a. invers dari matriks \(A\) <br>
   b. invers dari matriks \(B\) <br>

   <b>JAWAB</b> <br>
   <div class="overflow-auto">\(\begin{align}\text{a. }\text{det }A &=\begin{vmatrix}5&7&3 \\ 0&-1&0 \\2&4&1 \end{vmatrix}\begin{matrix}5&7 \\ 0&-1 \\2&4\end{matrix} \\ &= 5.(-1).1+7.0.2+3.0.4-3.(-1).2-5.0.4-7.0.1 \\ &= -5+0+0+6+0+0 \\ &=1 \end{align}\)
   </div>
    <br>
    <div class="overflow-auto">
      \(Adj (A) =\begin{pmatrix}\begin
      {vmatrix}-1&0 \\ 4&1\end{vmatrix}&-\begin{vmatrix}7&3\\4&1 \end{vmatrix}&\begin{vmatrix}7&3\\-1&0 \end{vmatrix} \\
      -\begin{vmatrix}0&0\\2&1 \end{vmatrix}&\begin{vmatrix}5&3\\2&1 \end{vmatrix}&-\begin{vmatrix}5&3\\0&0 \end{vmatrix}\\
      \begin{vmatrix}0&-1\\2&4 \end{vmatrix}&-\begin{vmatrix}5&7\\2&4 \end{vmatrix}&\begin{vmatrix}5&7\\0&-1 \end{vmatrix}
      \end{pmatrix} = \begin{pmatrix}-1&5&3 \\ 0&-1&0 \\ 2&-6&-5 \end{pmatrix}\)
  </div>
  <br>
  <div class="overflow-auto">
    \(\begin{align}\text{Jadi, invers dari }A \text{ adalah } A^{-1} &= \frac{1}{\text{det }(A)}.Adj (A) \\ &=\frac{1}{1} \begin{pmatrix}-1&5&3 \\ 0&-1&0 \\ 2&-6&-5 \end{pmatrix} \\ &= \begin{pmatrix}-1&5&3 \\ 0&-1&0 \\ 2&-6&-5 \end{pmatrix} \end{align}
    \)
  </div>
   <div class="overflow-auto">\(\begin{align}\text{b. }\text{det }B &=\begin{vmatrix}3&2&4 \\ 2&1&3 \\0&1&-2 \end{vmatrix}\begin{matrix}3&2 \\ 2&1 \\0&1\end{matrix} \\ &= 3.1.(-2)+2.3.0+4.2.1-4.1.0-3.3.1-2.2.(-2) \\ &= -6+0+8-0-9+8 \\ &=-15+16 \\ &=1 \end{align}\)
   </div>
    <br>
    <div class="overflow-auto">
      \(Adj (B) =\begin{pmatrix}\begin
      {vmatrix}1&3 \\ 1&-2\end{vmatrix}&-\begin{vmatrix}2&4\\1&-2 \end{vmatrix}&\begin{vmatrix}2&4\\1&3 \end{vmatrix} \\
      -\begin{vmatrix}2&3\\0&-2 \end{vmatrix}&\begin{vmatrix}3&4\\0&-2 \end{vmatrix}&-\begin{vmatrix}3&4\\2&3 \end{vmatrix}\\
      \begin{vmatrix}2&1\\0&1 \end{vmatrix}&-\begin{vmatrix}3&2\\0&1 \end{vmatrix}&\begin{vmatrix}3&2\\2&1 \end{vmatrix}
      \end{pmatrix} = \begin{pmatrix}-5&8&2 \\ 4&-6&-1 \\ 2&-3&-1 \end{pmatrix}\)
  </div>
  <br>
  <div class="overflow-auto">
    \(\begin{align}\text{Jadi, invers dari }B \text{ adalah } B^{-1} &= \frac{1}{\text{det }(B)}.Adj (B) \\ &=\frac{1}{1} \begin{pmatrix}-5&8&2 \\ 4&-6&-1 \\ 2&-3&-1 \end{pmatrix} \\ &= \begin{pmatrix}-5&8&2 \\ 4&-6&-1 \\ 2&-3&-1 \end{pmatrix} \end{align}
    \)
  </div>
</div>
</div>
</ol>
</div>
<!--  div row paling atas -->
</div>
<div class="row justify-content-center">
<div class="col-md border border-dark">
<div class="badge bg-danger text-wrap fs-6" style="width: 16rem">LATIHAN SOAL 7.1</div>
<ol>
  <li>
    Tentukan determinan matriks-matriks berikut ini! <br>
    <div class="row">
      <div class="col-md">
        \(\text{a. }A=\begin{pmatrix}3&2 \\ 5&4 \end{pmatrix}\) <br>
        \(\text{b. }D=\begin{pmatrix}2&-1&5 \\ 1&3&4 \\ 1&-1&2 \end{pmatrix}   \) <br>

      </div>
      <div class="col-md">
        \(\text{c. }B=\begin{pmatrix}-5&7 \\ -7&9 \end{pmatrix}   \) <br>
        \(\text{d. }E=\begin{pmatrix}-3&1&2 \\ 1&0&-1 \\ 4&5&-1 \end{pmatrix}\) <br>

      </div>
      <div class="col-md">
        \(\text{e. }C=\begin{pmatrix}-5&3 \\ -3&2 \end{pmatrix}   \) <br>
        \(\text{f. }F=\begin{pmatrix}4&-1&-3 \\ -1&2&0 \\ 6&5&-2 \end{pmatrix}   \)
      </div>
    </div>
  </li>
  <li>
    Manakah di antara matriks-matriks berikut ini merupakan matriks singular?
    <div class="row">
      <div class="col-md">
        \(\text{a. }A=\begin{pmatrix}1&-3 \\ -2&6 \end{pmatrix}  \) <br>
        \(\text{b. }B=\begin{pmatrix}4&6 \\-1&3 \end{pmatrix}  \) <br>
      </div>
      <div class="col-md">
        \(\text{c. }C=\begin{pmatrix}2&-1 \\ 3&-5 \end{pmatrix}  \) <br>
        \(\text{d. }D=\begin{pmatrix}-2&4 \\ 5&-10 \end{pmatrix}  \) <br>
      </div>
      <div class="col-md">
        \(\text{e. }E=\begin{pmatrix}7&5 \\ -3&2 \end{pmatrix}  \) <br>
        \(\text{f. }F=\begin{pmatrix}-4&3 \\ 24&-18 \end{pmatrix}  \) <br>
      </div>
    </div>

  </li>
  <li>Buktikan bahwa matriks \(A\) dan \(B\) berikut saling invers!</li>
  \(\text{a. }A=\begin{pmatrix}3&-5 \\ -2&3 \end{pmatrix}\) dan \(B=\begin{pmatrix}-3&-5 \\ -2&-3 \end{pmatrix}\) <br>
  \(\text{b. }A=\begin{pmatrix}8&5 \\ 3&2 \end{pmatrix}  \) dan \(B=\begin{pmatrix}2&-5 \\ -3&8 \end{pmatrix}\) <br>
  \(\text{c. }A=\begin{pmatrix}7&-1 \\ -13&2 \end{pmatrix}  \) dan \(B=\begin{pmatrix}2&1 \\ 13&7 \end{pmatrix}\) <br>
  \(\text{d. }A=\begin{pmatrix}16&7 \\ 9&4 \end{pmatrix}  \) dan \(B=\begin{pmatrix}4&-7 \\ -9&16 \end{pmatrix}\) <br>
  <li>Tentukan invers matriks-matriks berikut!</li>
  <div class="row">
    <div class="col">
      a. \(A=\begin{pmatrix}1&2 \\ 1&3 \end{pmatrix}\) <br>
      b. \(B=\begin{pmatrix}4&3 \\ 7&5 \end{pmatrix}  \) <br>
      c. \(C=\begin{pmatrix}10&11 \\ 2&2 \end{pmatrix} \) <br>
    </div>
    <div class="col">
      d. \(D=\begin{pmatrix}2&3 \\ 3&5 \end{pmatrix} \) <br>
      e. \(E=\begin{pmatrix}4&11 \\ 3&8 \end{pmatrix} \) <br>
      f. \(M=\begin{pmatrix}0&-3&2 \\ 1&-2&4 \\ 2&0&6 \end{pmatrix} \)
    </div>
    <div class="col">
      g. \(L=\begin{pmatrix}8&-11&9 \\ 2&7&2 \\ 0&1&0 \end{pmatrix} \) <br>
      h. \(K=\begin{pmatrix}2&0&-5 \\ -4&-1&8 \\ 3&0&7 \end{pmatrix} \) <br>
      \(N=\begin{pmatrix}2&0&0 \\ 8&4&-9 \\ -6&-7&16 \end{pmatrix} \)
    </div>
  </div>
  <li>Diketahui matriks \(A=\begin{pmatrix}6&2 \\ -3&-2 \end{pmatrix}\), \(B=\begin{pmatrix}-1&-5 \\ 0&3k+1 \end{pmatrix}\), dan \(C=\begin{pmatrix}2&3 \\ 3&5 \end{pmatrix} \). <br> Tentukan nilai \(k\) jika memenuhi \(A+B=C^{-1}\).  </li>
</ol>
</div>
</div>
<!----container-->
</section>




<section id="penerapanMatriks">
    <div class="text-primary">
    <hr>
    <hr>
    <h1>VIII) PENERAPAN MATRIKS</h1>
    <hr>
    <hr>
    </div>
    <div class="row">
    <div class="col-md">
    <ol>
      <li class="fw-bold">Menyelesaikan Persamaan Matriks</li>
      <p>
        Invers suatu matriks dapat digunakan dalam menyelesaiakan sistem persamaan matriks. Sistem persamaan matriks mempunyai dua bentuk, yaitu \(AX=B\) dan \(XA=B\) dengan \(A\) dan \(B\) matriks persegi dan berordo sama.
        <br />
        Pada masing-masing bentuk, matriks \(A\) dan \(B\) adalah matriks yang diketahui, sedangkan matriks \(X\) adalah matriks yang akan dicari. Agar \(X\) memiliki nilai pada masing-masing bentuk, maka matriks \(A\) haruslah
        matriks
        <i>non singular.</i>
        Penyelesaian untuk masing-masing bentuk persamaan matriks diperoleh dengan cara sebagai berikut.
      </p>
      <p>
        a. Menyelesaiakan bentuk persamaan \(AX=B\)
        <br />
        \(\begin{align} AX &=B \\ A^{-1}AX &=A^{-1}B \to \text{(dikalikan dengan } A^{-1}) \\ IX &=A^{-1}B \to \text{(sifat invers matriks)} \\ X &= A^{-1}B \to \text{(sifat identitas)} \end{align}\)
      </p>
      <p>
        b. Menyelesaiakan bentuk persamaan \(XA=B\)
        <br />
        \(\begin{align} XA &=B \\ XAA^{-1} &= BA^{-1} \to \text{(dikalikan dengan } A^{-1}) \\ XI &=BA^{-1} \to \text{(sifat invers matriks)} \\ X &= BA^{-1} \to \text{(sifat identitas)} \end{align}\)
      </p>
      <div class="row justify-content-center">
        <div class="col-md-9 border">
          <div class="badge bg-primary text-wrap fs-6" style="width: 8rem"><b> CONTOH 8.1 </b></div>
          <p class="fst-italic">Tentukan matriks X berordo \(2 \times 2\) jika :</p>
          \(\text{a. } X\begin{pmatrix} 11&7 \\3&2 \end{pmatrix}=\begin{pmatrix}-3&2 \\ 1&0 \end{pmatrix} \) <br />
          \(\text{b. }\begin{pmatrix}4&5 \\6&8 \end{pmatrix})X=\begin{pmatrix}4&0\\0&2 \end{pmatrix}\) <br />
          <b>JAWAB:</b> <br />
          <div class="overflow-auto">
          <p>a.</p>
          \(\begin{align} X\begin{pmatrix} 11&7 \\3&2 \end{pmatrix} &=\begin{pmatrix}-3&2 \\ 1&0 \end{pmatrix} \\ X \begin{pmatrix} 11&7 \\3&2 \end{pmatrix}\begin{pmatrix} 11&7 \\3&2 \end{pmatrix}^{-1} &=\begin{pmatrix}-3&2 \\ 1&0
          \end{pmatrix}\begin{pmatrix} 11&7 \\3&2 \end{pmatrix}^{-1} \\ X &= \begin{pmatrix}-3&2 \\ 1&0 \end{pmatrix}\begin{pmatrix} 11&7 \\3&2 \end{pmatrix}^{-1} \\ &= \begin{pmatrix}-3&2 \\ 1&0 \end{pmatrix}
          \frac{1}{11.2-7.3}\begin{pmatrix}2&-7\\-3&11 \end{pmatrix} \\ &=\begin{pmatrix}-3&2 \\ 1&0 \end{pmatrix} \begin{pmatrix}2&-7 \\ -3&11 \end{pmatrix} \\ &=\begin{pmatrix} -12&43 \\ 2&-7 \end{pmatrix} \end{align}\)
          <p>b.</p>
          \(\begin{align} \begin{pmatrix}4&5 \\6&8 \end{pmatrix}X &=\begin{pmatrix}4&0\\0&2 \end{pmatrix} \\ \begin{pmatrix}4&5 \\6&8 \end{pmatrix}^{-1}\begin{pmatrix}4&5 \\6&8 \end{pmatrix}X &=\begin{pmatrix}4&5 \\6&8
          \end{pmatrix}^{-1}\begin{pmatrix}4&0\\0&2 \end{pmatrix} \\ X &= \begin{pmatrix}4&5 \\6&8 \end{pmatrix}^{-1} \begin{pmatrix}4&0\\0&2 \end{pmatrix} \\ &= \frac{1}{32-30} \begin{pmatrix}8&-5 \\
          -6&4\end{pmatrix}\begin{pmatrix}4&0 \\ 0&2 \end{pmatrix} \\ &= \frac{1}{2}\begin{pmatrix}32&-10 \\ -24&8 \end{pmatrix} \\ &= \begin{pmatrix}16&-5 \\ -12&4 \end{pmatrix} \end{align}\)
          </div>
        </div>
      </div>
      <!-- end contoh -->
      <li class="fw-bold">Menyelesaikan Sistem Persamaan Linear</li>
      <span class="fst-italic"> a. Metode Matriks Invers </span> <br>
      Pada bagian ini akan dibahas metode matriks invers untuk menyelesaiakan sistem persamaan linear dua variabel. Bentuk umum sistem persamaan linear dua variabel adalah
      <br />
      \(\begin{cases}\begin{matrix}ax+by=p \\ cx+dy=q \end{matrix}\end{cases}\)
      <br />
      dengan \(a, b, c, d, \in R\)
      <br />
      Sekarang akan diselesaikan sistem persamaan linear di atas dengan metode matriks dengan langkah-langkah sebagai berikut.
      <ol type="i">
        <li >Persamaan di atas diubah menjadi persamaan matriks</li>
        \(\begin{pmatrix}a&b\\c&d \end{pmatrix}\begin{pmatrix}x\\y \end{pmatrix}=\begin{pmatrix}p\\q \end{pmatrix}\)
        <li>Persamaan matriks di atas memenuhi persamaan matriks \(AX=B\), maka penyelesaian bentuk \(AX=B\) adalah \(X=A^{-1}B). Jadi,</li>
        \(\begin{pmatrix}x\\y \end{pmatrix}=\frac{1}{ad-bc}\begin{pmatrix}d&-b \\ -c&a \end{pmatrix}\begin{pmatrix}q\\p \end{pmatrix}\)
      </ol>
      <div class="row p-2 justify-content-center">
        <div class="col-md-9 border">
          <div class="badge bg-primary text-wrap fs-6" style="width: 8rem"><b> CONTOH 8.2 </b></div>
          <p class="fst-italic">Tentukan penyelesaian dari sistem persamaan linear berikut dengan cara matriks invers
          \(\left\{\begin{matrix}
          3x-2y=5\\
          y+2x=8
          \end{matrix}\right.\)
        </p>
        <p><b>JAWAB:</b> <br>
        Sistem persamaan linear di atas dituliskan dalam persamaan matriks <br>
        \(\begin{pmatrix}3&-2\\2&1 \end{pmatrix}\begin{pmatrix}x\\y \end{pmatrix}=\begin{pmatrix}5\\8 \end{pmatrix} \), sehingga <br>
        \(\begin{align}
        \begin{pmatrix}x\\y \end{pmatrix} &= \frac{1}{3.1-(-2)(2)}\begin{pmatrix}1&2\\-2&3 \end{pmatrix}\begin{pmatrix}5\\8 \end{pmatrix} \\ &= \frac{1}{7} \begin{pmatrix}21\\14 \end{pmatrix} \\ &= \begin{pmatrix}3\\2 \end{pmatrix}
        \end{align}\)
        <br>
          Jadi, himpunan penyelesaian dari sistem persamaan linear diatas adalah \(\begin{Bmatrix}(3,2) \end{Bmatrix} \)
        </p>
        </div>
      </div>
      <span class="fst-italic"> b. Metode Determinan </span> <br>
      1) Sistem Persamaan Linear Dua variabel <br>
      Perhatikan bentuk umum persamaan linear berikut!
      \(\left\{\begin{matrix}
      ax+by=p\\
      cx+dy=q
      \end{matrix}\right.\)
      dengan metode eliminasi maka didapatkan
      <div class="overflow-auto">
        \(\begin{align}
        ax+by=p |\times c| \to &acx+bcy = pc \\
        cx+dy=q |\times a| \to &\underline{acx+ady =qa} \; \underset{-}{} \\
        &bcy-ady=pc-qa  \\
        &(ad-bc)y=aq-cp \\
        \end{align}\) <br>
        \(\begin{align}
        y =\frac{aq-cp}{ad-bc} = \frac{\begin{vmatrix}a&p\\c&q \end{vmatrix}}{\begin{vmatrix}a&b\\c&d \end{vmatrix}}
        \end{align}\) <br>
        Dengan cara yang sama akan didapatkan nilai \(x\). <br>
        \(\begin{align} x =\frac{pd-qb}{ad-bc} = \frac{\begin{vmatrix}p&b\\q&d \end{vmatrix}}{\begin{vmatrix}a&b\\c&d \end{vmatrix}}\end{align}\) <br>
        Dari pembahasan di atas, maka nilai \(x\) dan \(y\) dapat dicari dengan cara \(\begin{align} x = \frac{\begin{vmatrix}p&b\\q&d \end{vmatrix}}{\begin{vmatrix}a&b\\c&d \end{vmatrix}}\end{align}\) dan \(\begin{align}
        y = \frac{\begin{vmatrix}a&p\\c&q \end{vmatrix}}{\begin{vmatrix}a&b\\c&d \end{vmatrix}}
        \end{align}\) <br>
        Metode di atas disebut dengan metode determinan atau <i>metode Cramer.</i> <br>
        Rumus di atas dapat ditulis sebagai
        $$x=\frac{D_x}{D}, y=\frac{D_y}{D}$$
        dengan:
        <ul >
          <li>\(D=ad-bc \), adalah determinan matriks koefisien persamaan linear. </li>
          <li>\(D_x=pd-qb\), adalah determinan matriks koefisien yang kolom pertama diganti dengan matriks \(B\). </li>
          <li>\(D_y=aq-cp\), adalah determinan matriks koefisien yang kolom kedua diganti dengan matriks \(B\).</li>
        </ul>
      </div>
      <div class="row p-2 justify-content-center">
        <div class="col-md-9 border">
          <div class="badge bg-primary text-wrap fs-6" style="width: 8rem"><b> CONTOH 8.3 </b></div>
          <p class="fst-italic">Tentukan penyelesaian dari sistem persamaan linear berikut dengan metode determinan!
          \(\left\{\begin{matrix}
          3x-y=16\\
          2x+5y=5
          \end{matrix}\right.\)
        </p>
        <p><b>JAWAB:</b> <br>
        Sistem persamaan linear di atas dituliskan dalam persamaan matriks <br>
        \(\begin{pmatrix}3&-1\\2&5 \end{pmatrix}\begin{pmatrix}x\\y \end{pmatrix}=\begin{pmatrix}16\\5 \end{pmatrix} \), sehingga <br>
        \(\begin{align}
        D &= \begin{pmatrix}3&-1\\2&5 \end{pmatrix} \\ & =
        3 \times 5 - (-1)\times2 \\ &= 17
        \end{align}\)
        \(\begin{align}
        D_x &= \begin{pmatrix}16&-1\\5&5 \end{pmatrix} \\ & =
        16 \times 5 - (-1)\times 5 \\ &= 85
        \end{align}\)
        \(\begin{align}
        D_y &= \begin{pmatrix}3&16\\2&5 \end{pmatrix} \\ & =
        3 \times 5 - 16 \times2 \\ &= -17
        \end{align}\) <br>
        Sehingga \(\begin{align}x=\frac{D_x}{D}=\frac{85}{17}=5 \end{align}\) <br>
        \(\begin{align}y=\frac{D_y}{D}=\frac{-17}{17}=-1 \end{align}\)
        <br>
          Jadi, himpunan penyelesaian dari sistem persamaan linear diatas adalah \(\begin{Bmatrix}(5,-1) \end{Bmatrix} \)
        </p>
        </div>
      </div>
      2) Sistem Permsaan Linear Tiga Variabel <br>
        Penyelesaian sistem persamaan tiga variabel sama dengan penyelesaian sistem persamaan dua variabel, perbedaannya hanya terletak pada langkah pencarian determinannya. Matriks \(3 \times 3\) lebih cenderung menggunakan <i>metode Sarrus</i>.
        Bentuk umum sistem persamaan linear tiga variabel adalah sebagai berikut <br>
        \( \left\{\begin{matrix}ax+by+cz=p \\dx+ey+fz=q\\gx+hy+iz=r \end{matrix}\right.\) <br>
        Sistem persamaan di atas dapat dinyatakan dalam bentuk matriks sebagai berikut. <br>
        \(\begin{pmatrix}a&b&c\\d&e&f\\g&h&i \end{pmatrix}\begin{pmatrix}x\\y\\z \end{pmatrix}=\begin{pmatrix}p\\q\\r \end{pmatrix}\) <br>
        Dari matriks koefisien di atas dapat ditentukan nilai \(D\), \(D_x\), \(D_y\) dan \(D_z\) <br>
        \(D=\begin{vmatrix}a&b&c\\d&e&f\\g&h&i \end{vmatrix}\),
        \(D_x=\begin{vmatrix}p&b&c\\q&e&f\\r&h&i \end{vmatrix}\),
        \(D_y=\begin{vmatrix}a&p&c\\d&q&f\\g&r&i \end{vmatrix}\),
        \(D_z=\begin{vmatrix}a&b&p\\d&e&q\\g&h&r \end{vmatrix}\),
        <br>
        Jadi, Penyelesaian sistem persamaan linear tiga variabel tersebut adalah
        $$x=\frac{D_x}{D};y=\frac{D_y}{D};\text{ dan }z=\frac{D_z}{D}$$
    <br>
      <div class="row justify-content-center">
        <div class="col-md border border-dark">
          <div class="badge bg-danger text-wrap fs-6" style="width: 16rem">LATIHAN SOAL 8.1</div>
          <ol type="1">
            <li>Jika \(X \) adalah matriks berordo \(2 \times 2\), tentukan \(X\) dari persamaan matriks berikut! </li>
            <div class="row">
              <div class="col">\(\text{a.  }\begin{pmatrix}3&4\\2&3 \end{pmatrix}X=\begin{pmatrix}1&2\\5&2 \end{pmatrix} \) <br>
                \(\text{b.  }X\begin{pmatrix}-2&-3\\1&-1 \end{pmatrix}X=\begin{pmatrix}0&-5\\10&-5 \end{pmatrix} \) <br>
                \(\text{c.  }\begin{pmatrix}1&2\\3&5 \end{pmatrix}X=\begin{pmatrix}-2&-4\\5&13 \end{pmatrix} \)
              </div>
              <div class="col">
                \(\text{c.  }\begin{pmatrix}2&1\\4&3 \end{pmatrix}X=\begin{pmatrix}2&5\\8&9 \end{pmatrix} \) <br>
                \(\text{d.  }X\begin{pmatrix}3&5\\4&7 \end{pmatrix}X=\begin{pmatrix}1&4\\2&5 \end{pmatrix} \) <br>
                \(\text{e.  }X\begin{pmatrix}-3&2\\4&5 \end{pmatrix}=\begin{pmatrix}2&7\\5&8 \end{pmatrix}+\begin{pmatrix}4&12\\14&10 \end{pmatrix} \)
              </div>
            </div>
            <li>Tulislah dalam bentuk persamaan matriks untuk sistem persamaan berikut!</li>
            <div class="row">
              <div class="col">
                \(\text{a.  } \left\{\begin{matrix}3x-2y=3 \\4x-y=14 \end{matrix}\right.\) <br>
                \(\text{b.  } \left\{\begin{matrix}8x=2y-1 \\10x=23-2y \end{matrix}\right.\)
              </div>
              <div class="col">\(\text{c.  } \left\{\begin{matrix}-5x-2y=0 \\2y+10x-23=0 \end{matrix}\right.\) <br>
                \(\text{d.  } \left\{\begin{matrix}2x=2y-1 \\3(x-1)=5(y-4) \end{matrix}\right.\)
              </div>
            </div>
            <li>Tentukan himpunan penyelesaian dari sistem persamaan dengan menggunakan determinan! </li>
            <div class="row">
              <div class="col">
                \(\text{a.  } \left\{\begin{matrix}x+y=7 \\-2x+5y=14 \end{matrix}\right.\) <br>
                \(\text{b.  } \left\{\begin{matrix}5x-2y+3z=5 \\x-3y+z=8 \\ 3x+2y-z=-1 \end{matrix}\right.\)
              </div>
              <div class="col">\(\text{c.  } \left\{\begin{matrix}5x+12y=23 \\x+2y=3 \end{matrix}\right.\) <br>
                \(\text{d.  } \left\{\begin{matrix}3x+2y-z=5 \\ 2x+3y+2z=12 \\ x-2y+3z=-3\end{matrix}\right.\)
              </div>
            </div>
            <li>Diketahui bentuk umum sistem persamaan linear dua variabel adalah </li>
            \( \left\{\begin{matrix}ax+by=k_1 \\cx+dy=k_2 \end{matrix}\right.\) <br>
            Jika, \(\begin{vmatrix}a&k_1 \\c&k_2 \end{vmatrix}=10 \), \(\begin{vmatrix}a&b \\c&d \end{vmatrix}=2 \) dan \(\begin{vmatrix}k_1&b \\k_2&d \end{vmatrix}=12 \), tentukan nilai \(x+y\) !
            <li>Pada sebuah toko, Iwan membeli 5 kemeja dan 4 celana dengan harga Rp 425.000,00. Pada toko yang sama Cindy membeli 4 kemeja dan 3 celana dengan harga Rp 330.000,00</li>
            <ol type="a">
              <li>Tentukan sistem pesamaan linear dua peubah \(x\) dan \(y\) yang dapat disusun dari persoalan di atas! </li>
              <li>Tentukan himpunan penyelesaian sistem persamaan linear yang diperoleh pada \(a\) dengan metode matriks!  </li>
              <li>Tentukan harga masing-masing celana dan baju pada toko tersebut! </li>
            </ol>
          </ol>
        </div>
      </div>
    </ol>
    </div>
    </div>
    </section>



                {{--  --}}
            <div id="disqus_thread" class="mt-4"></div>
            </div>
        </div>
    </div>
</section>
@endsection

