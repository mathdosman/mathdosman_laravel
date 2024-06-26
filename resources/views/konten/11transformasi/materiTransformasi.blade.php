@extends('konten.11transformasi.11.template')
@section('content')
<section id="transformasi" style="margin-top: 100px">
    <div class="container">
     <div class="row">
      <h1 class="center fw-bold text-danger">TRANSFORMASI GEOMETRI</h1>
     <div class="row">
        <div class="col-md-4">
          <div class="text-center">
            <img src="{{asset('img/dota.png')}}" class="rounded img-thumbnail" alt="dota" width="80%">
          </div>
      </div>
      <div class="col-md-8">
         <p class="justify"> Pernahkah Anda membayangkan bagaimana seorang pembuat game dapat membuat gerakan dan manuver berputar atau mengecil dan membesar dari suatu objek pada layar komputer? Gerakan memutar dan perubahan ukuran objek di atas dapat dilakukan dengan cara melakukan transformasi (perubahan) dari objek asalanya. Geometri transformasi menunjukan bagaimana bangun-bangun berubah kedudukan dan ukurannya menurut aturan tertentu. Beberapa transformasi matematis yang paling umum, yaitu: translasi (pergeseran), rotasi (perputaran), refleksi (pencerminan), dan dilatasi (perbesaran/perkecilan).</p>
         <p class="justify"> Pada pokok bahasan ini akan dipelajari jenis-jenis transformasi seperti di atas beserta sifat-sifatnya, kemudian menentukan aturan komposisi dari dua atau lebih transformasi. Selain itu juga akan digunakan matriks untuk menyajikan suatu transformasi. Karena transformasi yang dibahas adalah transformasi pada bidang dua dimensi, maka matriks yang digunakan adalah matriks persegi berordo 2. </p>
      </div>
    </div>
    </section>

    <br>
<!-- start materi 1 -->
<div id="translasi">
<div class="container">
<div class="row">
  <div class="col-md-9">
    <hr>
    <hr>
    <h1 class="text-primary">Translasi (Pergeseran)</h1>
    <hr>
    <hr>
    <p>
      Translasi adalah suatu transformasi yang memetakan tiap titik pada bidang dengan jarak dan arah tertentu. Jarak dan arah tertentu itu dapat diwakili oleh ruas garis berarah (misalnya \(\overrightarrow{AB } \)) atau oleh suatu
      pasangan terurut \(\begin{pmatrix} a\\b \end{pmatrix}\). Hubungan antara titik dan bayangannya adalah:
      <div class="row justify-content-center">
      <div class="overflow-auto border border-dark rounded col-md-6 "> $$T=\begin{pmatrix} a\\b \end{pmatrix}:P(x,y) \to P'(x+a, y+b) $$</div></div>
    </p>
    Secara matriks dituliskan menjadi seperti berikut.
    $$\begin{pmatrix} x'\\y' \end{pmatrix}=\begin{pmatrix} x\\y \end{pmatrix}+\begin{pmatrix} a\\b \end{pmatrix}=\begin{pmatrix} x+a\\x+b \end{pmatrix}$$
    Titik \(P'\) disebut bayangan titik \(P\) oleh translasi \(T=\begin{pmatrix} a\\b \end{pmatrix}\). <br>
    Dari gambar berikut terlihat bahwa translasi \(PP'\) memetakan titik \(P\) ke \(P'\). <br>
    <img src="{{asset('img/translasi.png')}}" alt="translasi"> <br>
    Untuk lebih jelasnya perhatikan Contoh berikut.
    <div class="row p-2 justify-content-center">
        <div class="col-md border">
            <div class="badge bg-primary text-wrap fs-6" style="width: 8rem"><b> CONTOH 1.1 </b></div>
            <br />
            <p class="fst-italic">Tentukan bayangan titik-titik \(A(3,1), B(-2, 5), C(-4,-3)\), jika ditransformasikan oleh translasi \(T\) yang dinyatakan oleh pasangan bilangan  \(\begin{pmatrix}3 \\-2 \end{pmatrix}\)</p>
            <b>Penyelesaian :</b> <br>
           <p> Untuk titik \(A(3,1)\) <br>
            \(A'=\begin{pmatrix}3\\1 \end{pmatrix}+\begin{pmatrix} 3 \\ -2\end{pmatrix}=\begin{pmatrix}6\\-1 \end{pmatrix} \), \(A'=(6,-1)\) <br>
            Untuk titik \(B(-2,5)\) <br>
            \(B'=\begin{pmatrix}-2 \\ 5 \end{pmatrix}+\begin{pmatrix}3 \\ -2 \end{pmatrix}=\begin{pmatrix}1\\3 \end{pmatrix}\), \(B'=(1,3) \) <br>
            Untuk titik \(C=(-4, -3) \) <br>
            \(C=\begin{pmatrix}-4 \\ -3 \end{pmatrix}+\begin{pmatrix}3 \\ -2 \end{pmatrix}=\begin{pmatrix}-1 \\ -3 \end{pmatrix} \), \(C'=(-1, -3) \)</p>
        </div>
    </div>

    <div class="row p-2 justify-content-center">
        <div class="col-md border">
            <div class="badge bg-danger text-wrap fs-6" style="width: 8rem"><b> Evaluasi 1.1 </b></div>
            <ol>
                <li>
                    <p>
                    Tentukanlah peta (bayangan) dari titik-titik \(A(2,5), B(3,-1) \), dan \(C(-3,4)\) oleh translasi berikut: <br>
                    \(\text{a.  }\begin{pmatrix}3\\1 \end{pmatrix}\) <br>
                    \(\text{b.  }\begin{pmatrix}2\\-3 \end{pmatrix} \) <br>
                    \(\text{c.  }\begin{pmatrix}-1\\4 \end{pmatrix}\)</p>
                </li>
                <li>Tentukan koordinat-koordinat bayangan titik sudut dari setiap bangun berikut, lalu gambarlah.
                    <ol type="a">
                        <li>Segitiga \(ABC\) dengan \(A(5,4)\)\(B(3,-1)\), dan \(C(0,2)\) ditranslasikan dengan \(T=\begin{pmatrix}-2 \\ -1 \end{pmatrix}\).</li>
                        <li>Segiempat \(DEFG\) dengan \(D(-1,3)\), \(E(5,3)\), \(F(5,0)\), dan \(G(-1,0)\) ditranslasikan dengan \(T=\begin{pmatrix}1\\6 \end{pmatrix}\) </li>
                        <li> Ruas garis \(EF\) dengan \(E(-4,1)\) dan \(F(-1,3)\) ditranslasikan dengan \(\begin{pmatrix}-2\\5 \end{pmatrix}\)</li>
                        <li>Trapesium \(RSTU\) dengan \(R(2,3)\), \(S(6,2)\), \(T(6,-1)\), dan \(U(-2,1)\) ditranslasikan dengan \(T=\begin{pmatrix}-6\\-2 \end{pmatrix} \)</li>
                    </ol>
                </li>
                <li>Diketahui \(P(4,2)\) dan \(Q(3,5) \). Jika peta titik \(P\) oleh translasi \(T\) adalah \(Q\), maka tentukan peta tiitk \(Q\) oleh translasi \(T=\begin{pmatrix}-3\\5 \end{pmatrix}\) </li>
                <li>Bayangan titik \(A\) oleh translasi \(T=\begin{pmatrix}2\\3 \end{pmatrix}\) adalah \(A"\). Jika \(A'(3,5)\), maka tentukan koordinat titik \(A\)</li>
            </ol>
        </div>
    </div>
<!-- ===========REFLEKSI================================ -->
    <div class="row">
        <div class="col" id="refleksi">
            <hr>
            <hr>
            <h1 class="text-primary">Refleksi(Pencerminan)</h1>
            <hr>
            <hr>
            <p>Sudahkah kalian bercermin hari ini? Apabila kalian perhatikan ketika bercermin, kalian melihat bahwa bayangan diri di cermin selalu mempunyai ukuran yang sama dengan diri sendiri. Sama halnya jarak diri ke cermin sama dengan jarak bayangan ke cermin.
            </p>
            <p>Perhatikan gambar berikut <br>
                <img src="{{asset('img/refleksi.png')}}" alt="refleksi" class="img-fluid"> <br>
                Jika \(P'\) merupakan bayangan titik \(P\) oleh pencerminan terhadap garis \(l\) maka :
                <ol>
                    <li>\(PP' \perp  l\)</li>
                    <li>Jarak titik \(P\) terhadap garis \(l\) sama dengan jarak titik \(P'\) terhadap garis \(l\). </li>
                </ol>
                Pencerminan atau refleksi adalah transformasi yang memindahkan titik-titik dengan menggunakan sifat bayangan suatu cermin.
                Pencerminan yang sedang kita pelajari sekarang adalah pencerminan terhadap sumbu-<i>x</i>, sumbu-<i>y</i>, titik pusat koordinat \(O(0,0)\), garis \(x=a\), garis \(y=b\), titik \(a,b\), garis \(y=x\) dan garis \(y=-x\).
            </p>
            <ol>
                <b><li>Pencerminan terhadap sumbu-<i>x</i>, sumbu-<i>y</i> dan titik asal \(O(0,0)\)</li></b>
                <p>Pencerminan terhadap sumbu-<i>x</i> kita notasikan dengan \(T_x\) dan pencerminan terhadap sumbu<i>y</i> dinotasikan dengan \(T_y\)
                </p>
                <img src="{{asset('img/refleksi2.png')}}" alt="gambar2">
                <p>Dari gambar diatas terlihat bahwa bayangan titik \(x,y\) yang dicerminkan terhadap sumbu-<i>x</i> dan sumbu-<i>y</i> berturut-turut adalah \((x,-y)\) dan \((-x,y)\), dapat ditulis:
                </p>
                \(T_x : (x,y) \to (x,-y) \) dan <br>
                \(T_y : (x,y) \to (-x,y) \)
                <p>
                    Untuk menentukan suatu matriks yang bersesuaian dengan pencerminan sumbu-<i>x</i>, maka lebih dahulu ditulis \(x'\) dan \(y'\) dalam kombinasi \(x\) dan \(y\) seperti terlihat di bawah ini. <br>
                    \(x'=ax+by\) <br>
                    \(y'=cx+dy\) <br>
                    Persamaan di atas dapat ditulis dalam persamaan matriks menjadi: <br>
                    \(\begin{pmatrix}x' \\ y' \end{pmatrix}=\begin{pmatrix} ax+by \\ cx+dy\end{pmatrix}=\begin{pmatrix}a&b \\ c&d \end{pmatrix}\begin{pmatrix}x\\y \end{pmatrix} \) <br>
                    Matriks \(\begin{pmatrix}a&b \\ c&d \end{pmatrix}\) disebut matriks yang bersesuaian dengan transformasi diatas.
                </p>
                <p>
                    Seperti yang sudah kita ketahui bahwa bila titik \(P(x,y)\) dicerminkan terhadap sumbu-<i>x</i>, maka bayangannya adalah \(P'(x,-y)\). Dengan demikian, didapat persamaan-persamaan berikut. <br>
                    \(x'=x=1.x+0.y\) <br>
                    \(y'=-y=0.x-1.y\) <br>
                    Persamaan dalam bentuk matriks: \(\begin{pmatrix}x' \\ y' \end{pmatrix}=\begin{pmatrix}1.x+0.y \\ 0.x-1.y \end{pmatrix}=\begin{pmatrix}1&0 \\ 0&-1 \end{pmatrix}\begin{pmatrix}x\\y \end{pmatrix} \) <br>
                    Jadi, matriks \(\begin{pmatrix}1&0 \\ 0&-1 \end{pmatrix}\) merupakan matriks yang bersesuaian dengan pencerminan terhadap sumbu-<i>x</i> <br>
                    Dengan cara yang sama diperoleh matriks pencerminan terhadap sumbu-<i>y</i> adalah \(\begin{pmatrix}-1&0 \\ 0&1 \end{pmatrix}\).
                </p>
            <div class="row p-2 justify-content-center">
                <div class="col-md border">
                    <div class="badge bg-primary text-wrap fs-6" style="width: 8rem"><b> CONTOH 2.1 </b></div>
                    <p class="fst-italic">Tentukan bayangan titik \(A(3,2)\) dan \(B(-4,-5)\) jika dicerminkan terhadap: <br>
                    a. sumbu-<i>x</i><br>
                b. sumbu-<i>y</i></p>
                <b>JAWABAN</b> <br>
                       <div class="overflow-auto"> a. \(A'=\begin{pmatrix}1&0 \\0&-1\end{pmatrix}\begin{pmatrix}3\\2 \end{pmatrix}=\begin{pmatrix}1.3+0.2 \\0.3+(-1.2) \end{pmatrix}=\begin{pmatrix}3 \\ -2 \end{pmatrix}\) </div>
                       <div class="overflow-auto">
                        \(B'=\begin{pmatrix}x'\\y' \end{pmatrix}=\begin{pmatrix}1&0 \\ 0&-1 \end{pmatrix}\begin{pmatrix}-4\\-5 \end{pmatrix}=\begin{pmatrix}1.(-4)+0.(-5) \\ 0.(-4)+(-1)(-5) \end{pmatrix}=\begin{pmatrix} -4\\-5\end{pmatrix}\)
                       </div>
                       Jadi, bayangan titik \(A\) dan \(B\) karena pencerminan sumbu-<i>x</i> adalah \(A'(3,-2)\) dan \(B'(-4,5) \).
                       <div class="overflow-auto">
                        b. \(A'=\begin{pmatrix}x'\\y' \end{pmatrix}=\begin{pmatrix}-1&0 \\ 0&1 \end{pmatrix}\begin{pmatrix} 3\\2\end{pmatrix}=\begin{pmatrix}-3\\2 \end{pmatrix}\)
                       </div>
                       <div class="overflow-auto">
                        \(B'=\begin{pmatrix}x'\\y'\end{pmatrix}=\begin{pmatrix}-1&0 \\ 0&1 \end{pmatrix}\begin{pmatrix} -4\\-5\end{pmatrix}=\begin{pmatrix}4\\-5 \end{pmatrix}\)
                       </div>
                       Jadi, bayangan titik \(A\) dan \(B\) karena pencerminan sumbu-<i>y</i> adalah \(A'=(-3,2) \) dan \(B'(4,-5) \)
                </div>
            </div>
<p>
    Pencerminan terhadap titik asal \(O(0,0) \) merupakan komposisi dari pencerminan terhadap sumbu-<i>x</i> dan kemudian terhadap sumbu<i>y</i> atau sebaliknya. Perhatikan gambar: <br>
    <img src="{{asset('img/refleksipusat.png')}}" alt="pusat00"> <br>
     Dari gambar di atas terlihat bahwa bayangan titik \((x,y) \) yang dicerminkan terhadap titik asal \(O(0,0) \) adalah \((-x,-y) \) dapat ditulis: <br>
     \(T_O:(x,y) \to (-x,-y) \)
</p>
<p>
    Kita sudah tahu bahwa bila titik \(P(x,y)\) dicerminkan terhadap titik asal, maka bayangannya adalah \(P=(-x,-y) \). Dengan demikian, diperoleh persamaan-persamaan berikut. <br>
    \(x'=-x=-1.x+0.y \) <br>
    \(y'=-y=0.x-1.y \) <br>
    Persamaan dalam bentuk matriks: \(\begin{pmatrix}x' \\ y' \end{pmatrix}=\begin{pmatrix}-1.x+0.y \\ 0.x-1.y \end{pmatrix}=\begin{pmatrix}-1&0 \\ 0&-1 \end{pmatrix}\begin{pmatrix}x\\y \end{pmatrix} \) <br>
    Jadi, matriks \(\begin{pmatrix}-1&0 \\ 0&-1 \end{pmatrix} \) merupakan matriks yang bersesuaian dengan pencerminan terhadap titik asal \(O(0,0) \).
</p>
            <div class="row p-2 justify-content-center">
                <div class="col-md border">
                    <div class="badge bg-primary text-wrap fs-6" style="width: 8rem"><b> CONTOH 2.2 </b></div>
                    <p class="fst-italic">Tentukan bayangan titik \(A(-3,2)\) dan \(B(-4,-5)\) jika dicerminkan terhadap titik asal \(O(0,0) \)</p>
                <b>JAWABAN</b> <br>
                \(A'=\begin{pmatrix}x'\\y' \end{pmatrix}=\begin{pmatrix} -1&0 \\ 0&-1\end{pmatrix}\begin{pmatrix}-3\\2 \end{pmatrix}=\begin{pmatrix}3\\-2 \end{pmatrix} \) <br>
                \(B'=\begin{pmatrix}x'\\y' \end{pmatrix}=\begin{pmatrix} -1&0 \\ 0&-1\end{pmatrix}\begin{pmatrix}-4\\-5 \end{pmatrix}=\begin{pmatrix}4\\5 \end{pmatrix} \) <br>
                Jadi, bayangan titik \(A\) dan \(B\) adalah \(A'(3,-2) \) dan \(B'(4,5) \)
                </div>
            </div>
<br>
<br>
                <b><li>Pencerminan terhadap Garis \(x=a\), Garis \(y=b\), dan Titik \((a,b)\)</li></b>
<p>
Pencerminan terhadap garis \(x=a\) dinotasikan dengan \(T_{x=a} \) dan pencerminan terhadap garis \(y=b\) dinotasikan dengan \(T_{y=b} \). Perhatikan gambar berikut: <br>
<img src="{{asset('img/refleksix=a.png')}}" alt="x=a"> <br>
Titik \(Q\) merupakan titik tengah \(PP'\) sehingga:
\(\begin{align}
Q&=\frac{P+P'}{2} \\
(a,y)&=\frac{(x,y)+P'}{2} \\
(2a,2y)&= (x,y)+P' \\
P' &=(2a-x,y)
    \end{align}\) <br>
    Jika titik \(P(x,y) \) dicerminkan terhadap garis \(x=a\), maka bayangannya adalah \(P'(2a-x,y)\), dapat ditulis: <br>
    \(T_{x=a}:P(x,y) \to P'(2a-x,y) \) <br>
    Bila dituliskan dalam bentuk matriks diperoleh: \(\begin{pmatrix}x' \\ y' \end{pmatrix}=\begin{pmatrix}2a-x\\y \end{pmatrix} \)
</p>
<p>Dengan cara yang sama seperti sebelumnya, bayangan pencerminan terhadap garis \(y=b\) maka akan diperoleh \(T_{y=b}: P(x,y) \to P'(x, 2b-y) \) <br>
Dalam bentuk matriks dapat dituliskan:  \(\begin{pmatrix}x'\\y' \end{pmatrix}=\begin{pmatrix}x\\2b-y \end{pmatrix} \)</p>
<p>
    Pencerminan terhadap titik \((a,b) \) dinotasikan dengan \(T_{(a,b)}\). Pencerminan terhadap titik \((a,b)\) merupakan komposisi dari pencerminan terhadap garis \(x=a\) kemudian garis \(y=b\) atau titik potong antara kedua garis tersebut. Perhatikan gambar berikut. <br>
    <img src="{{asset('img/refleksi(a,b).png')}}" alt="(a,b)"> <br>
    Titik \((a,b) \) merupakan titik tengah \(PP'\) sehingga: <br>
    \(\begin{align}
    (a,b)&=\frac{P+P'}{2} \\
    (2a,2b)=(x,y)+P' \\
    P' &= (2a-x, 2b-y)
    \end{align}\)
</p>
<p>Jika titik \(P(x,y)\) dicerminkan terhadap titik \((a,b) \), maka bayangannya adalah \(P'(2a-x, 2b-y) \), dapat ditulis: <br>
\(T_{(a,b)}:P(x,y) \to P'(2a-x,2b-y) \) <br>
Bila dituliskan dalam bentuk matriks diperoleh: <br>
\(\begin{pmatrix}x'\\y' \end{pmatrix}=\begin{pmatrix}2a-x\\2b-y \end{pmatrix}\) <br>
</p>
<div class="row justify-content-center">
    <div class="col-md border">
        <div class="badge bg-primary text-wrap fs-6" style="width: 8rem"><b> CONTOH 2.3 </b>
        </div>
        <p class="fst-italic">
            Tentukan bayangan titik \(A(-3,2) \) dan \(B(4,-5)\) jika dicermikan terhadap:
            <div class="row p-2">
                <div class="col-md-2">a. garis \(x=3\)</div>
                <div class="col-md-2">b. garis \(y=-2\)</div>
                <div class="col-md-2">c. titik \((-4,4)\)</div>
            </div>

        </p>
        <b>JAWABAN</b> <br>
            <div class="row">
                <div class="col-md">a. \(\begin{align} A'&=\begin{pmatrix}x' \\ y' \end{pmatrix}=\begin{pmatrix}2(3)-(-3)\\2 \end{pmatrix}=\begin{pmatrix}9\\2 \end{pmatrix} \\ B'&=\begin{pmatrix}x' \\ y' \end{pmatrix}=\begin{pmatrix}2(3)-4\\-5 \end{pmatrix}=\begin{pmatrix}2\\-5 \end{pmatrix} \end{align}\) <br>
                </div>
                <div class="col-md">b. \(\begin{align} A'&=\begin{pmatrix}x' \\ y' \end{pmatrix}=\begin{pmatrix}-3\\2(-2)-2 \end{pmatrix}=\begin{pmatrix}-3\\-6 \end{pmatrix} \\ B'&=\begin{pmatrix}x' \\ y' \end{pmatrix}=\begin{pmatrix}4\\2(-2)-(-5) \end{pmatrix}=\begin{pmatrix}4\\1 \end{pmatrix} \end{align}\)</div>
                <div class="col-md">c. \(\begin{align} A'&=\begin{pmatrix}x' \\ y' \end{pmatrix}=\begin{pmatrix}2(-4)-(-3)\\2(4)-2 \end{pmatrix}=\begin{pmatrix}-5\\6 \end{pmatrix} \\ B'&=\begin{pmatrix}x' \\ y' \end{pmatrix}=\begin{pmatrix}2(-4)-4\\2(4)-(-5) \end{pmatrix}=\begin{pmatrix}-12\\13 \end{pmatrix} \end{align}\)</div>
            </div>
    </div>
</div>
<br>
<br>
                <b><li>Pencerminan terhadap Garis \(y=x\) dan garis \(y=-x\) </li></b>
                Pencerminan terhadap garis \(y=x\) dinotasikan dengan \(T_{y=x}\) dan pencerminan terhadap \(y=-x\) dinotasikan dengan \(T_{y=-x}\). Misalkan \(P'(x',y')\) bayangan titik \(P(x,y)\) oleh pencerminan terhadap garis \(y=x\). Karena pencerminan merupakan transformasi isometri, maka \(OP=OP'=r\). Selanjutnya kita mencari hubungan \(P'(x',y')\) dan \(P(x,y) \). Perhatikan gambar berikut. <br>
                <img src="{{asset('img/refleksiy=x.png')}}" alt="y=x"> <br>
                Perhatikan titik \(P(x,y) \). <br>
                \(x=r \cos \alpha\) dan \(y=r \sin \alpha\) <br>
                Perhatikan titik \(P'\) <br>
                \(x=r \cos (90^{\circ}-\alpha)=r \sin \alpha = y \) <br>
                \(y=r \sin (90^{\circ}-\alpha)=r \cos \alpha = x \) <br>
                Rumusan pencerminan terhadap garis \(y=x\) dapat ditulis menjadi: <br> <br>
                <span class="border p-2">\(T_{y=x}:P(x,y) \to P'(y,x) \)</span> <br> <br>
                Kita sudah ketahui bahwa bila titik \(P(x,y) \) dicerminkan terhadap garis \(y=x\) maka bayangannya adalah \(P'(y,x)\). Dengan demikian, diperoleh persamaan-persamaan berikut. <br>
                \(x'=y=0.x+1.y \) <br>
                \(y'=x=1.x+0.y)\) <br>
                Persamaan dalam bentuk matriks:
                \(\begin{pmatrix}x'\\y' \end{pmatrix}=\begin{pmatrix}0.x+1.y \\ 1.x+0.y \end{pmatrix}=\begin{pmatrix}0&1 \\ 1&0 \end{pmatrix}\begin{pmatrix}x\\y \end{pmatrix} \) <br>
                Jadi, matriks \(\begin{pmatrix}0&1 \\ 1&0 \end{pmatrix} \) merupakan matriks yang bersesuaian dengan pencerminan terhadap garis \(y=x\) <br>
                Dengan cara yang sama seperti menentukan pencerminan terhadap garis \(y=x\), maka bayangan pencerminan terhadap garis \(y=-x\) akan diperoleh: <br>
                <span class="border p-1">\(T_{y=-x}: P(x,y) \to P(-y, -x) \) </span> <br>
                Matriks yang bersesuaian dengan pencerminan terhadap garis garis \(y=-x\) adalah \(\begin{pmatrix}0&-1 \\ -1&0 \end{pmatrix}\)

<div class="row justify-content-center">
    <div class="col-md border">
        <div class="badge bg-primary text-wrap fs-6" style="width: 8rem"><b> CONTOH 2.3 </b>
        </div>
        <p class="fst-italic">
            Tentukan bayangan titik \(A(4,7) \) dan \(B(2,-5)\) jika dicermikan terhadap:
            <div class="row p-2">
                <div class="col-md-2">a. garis \(y=x\)</div>
                <div class="col-md-2">b. garis \(y=-x\)</div>
            </div>

        </p>
        <b>JAWABAN</b> <br>
            <div class="row">
                <div class="col-md">a. \(\begin{align} A'&=\begin{pmatrix}x' \\ y' \end{pmatrix}=\begin{pmatrix}0&1 \\ 1&0 \end{pmatrix}\begin{pmatrix}4\\7 \end{pmatrix}=\begin{pmatrix}7\\4 \end{pmatrix} \\ B'&=\begin{pmatrix}x' \\ y' \end{pmatrix}=\begin{pmatrix}1&0 \\0&1 \end{pmatrix}\begin{pmatrix}2&-5 \end{pmatrix}=\begin{pmatrix}-5\\2 \end{pmatrix} \end{align}\) <br>
                </div>
                <div class="col-md">b. \(\begin{align} A'&=\begin{pmatrix}x' \\ y' \end{pmatrix}=\begin{pmatrix}-3\\2(-2)-2 \end{pmatrix}=\begin{pmatrix}-3\\-6 \end{pmatrix} \\ B'&=\begin{pmatrix}x' \\ y' \end{pmatrix}=\begin{pmatrix}4\\2(-2)-(-5) \end{pmatrix}=\begin{pmatrix}4\\1 \end{pmatrix} \end{align}\)</div>
            </div>
    </div>
</div>
            </ol>

<div class="row justify-content-center ms-3 mb-2">
    <div class="col-md border">
        <div class="badge bg-danger text-wrap fs-6" style="width: 8rem"><b> Evaluasi 2.1 </b></div>
    <ol>
        <li>Tentukan bayangan titik \(A(5,3) \) jika dicerminkan terhadap:
            <div class="row">
                <div class="col-md-2">a. sumbu-<i>x</i></div>
                <div class="col-md-2">b. sumbu-<i>y</i></div>
                <div class="col-md-2">c. garis \(x=2\)</div>
                <div class="col-md-2">c. garis \(y=3\)</div>
            </div>
        </li>
        <li>Tentukan bayangan titik \(P(-2, -3)\) jika dicerminkan terhadap:
            <div class="row">
                <div class="col-md-2">a. sumbu-<i>x</i></div>
                <div class="col-md-2">b. sumbu-<i>y</i></div>
                <div class="col-md-2">c. garis \(x=-5\)</div>
                <div class="col-md-2">c. garis \(y=10\)</div>
            </div>
        </li>
        <li>Tentukan bayangan titik-titik \(A(5,1)\), \(B(2,7)\) dan \((3,-4) \) jika dicerminkan terhadap:
            <div class="row">
                <div class="col-md-2">a. garis \(y=x\)</div>
                <div class="col-md-2">b. garis \(y=-x\)</div>
            </div>
        </li>
        <li>Tentukan sumbu pencerminan apabila:
             <div class="row">
                <div class="col-md-3">a. peta dari \(3,4\) adalah \((-3, 4)\) <br> b. peta dari \((1,-2)\) adalah \((2,-1)\) </div>
                <div class="col-md-3">c. peta dari \(4,0\) adalah \((8, 0)\) <br> d. peta dari \((1,2)\) adalah \((3,0)\)</div>
            </div>
        </li>
        <li>Tentukan bayangan titik \((1,-3) \) jika dicerminkan terhadap garis \(x+y+2=0 \) </li>
    </ol>
    </div>
</div>
</div>
</div>

<!--====================ROTASI=========================  -->
<div id="rotasi">
<hr>
<hr>
<h1 class="text-primary"> Rotasi (Perputaran) </h1>
<hr>
<hr>
Rotasi (perputaran) adalah transformasi yang memindahkan suatu titik kr titik lain dengan cara memutar titik tersebut sejauh besar sudut tertentu terhadap titik pusat tertentu.

Suatu perputaran ditentukan oleh pusat, besar, dan arah sudutnya. Searah dengan jarum jam adalah arah negatif, sedangkan berlawanan dengan arah jarum jam adalah arah positif. Kalian akan mempelajari rotasi terhadap titik pusat \(O(0,0)\) dan rotasi terhadap pusat tertentu.
<ol>
<li class="fst-italic fw-bold">Rotasi terhadap Titik Pusat \(O(0,0)\)</li>
Titik \(P'(x',y')\) merupakan hasil perputaran titik \(P(x,y)\) dengan pusat \(O(0,0)\) dan besar sudut putaran \(\alpha\). Perhatiakan gambar berikut. <br>
<img src="{{asset('img/rotasi00.png')}}" alt="pusat00" class="img-fluid"><br>
Koordinat polar titik \(P\) <br>
\(x=r \cos \alpha \) <br>
\(y=r \sin \alpha \) <br>
Koordinat polar titik \(P'\) <br>
\(\begin{align}
  x' &= r \cos (\alpha + \alpha) \\ &= r \cos \alpha \cos \alpha - r\sin \alpha \sin \alpha \\ &=x \cos \alpha - y \sin \alpha
\end{align}\) <br>
\(\begin{align}
  y' &= r \sin (\alpha + \alpha) \\ &= r \sin \alpha \cos \alpha + r\cos \alpha \sin \alpha \\ &=y \cos \alpha + x \sin \alpha \\ &= x \sin \alpha + y \cos \alpha
\end{align}\) <br>
Sehingga titik \(P'(x',y')\) diperoleh:
<div class="overflow-auto">\(T_{R[O, \alpha]} : P(x,y) \to P'(x \cos \alpha - y \sin \alpha, x \sin \alpha + y \cos \alpha)\)</div> <br>
Kita sudah ketahui bahwa bila titik \(P(x,y)\) dirotasikan sebesar \(\alpha\) terhadap titik pusat \(O(0,0)\), maka bayangannya adalah \(P'(x \cos \alpha - y \sin \alpha, x \sin \alpha + y \cos \alpha)\). Dengan demikian, diperoleh persamaan-persamaan berikut <br>
\(x'=x \cos \alpha - y \sin \alpha \) <br>
\(y'=x \sin \alpha + y \cos \alpha \) <br>
Persamaan dalam bentuk matriks : \(\begin{align} \begin{pmatrix}x' \\ y'\end{pmatrix}  &=\begin{pmatrix}x \cos \alpha - y \sin \alpha \\ x \sin \alpha + y \cos \alpha \end{pmatrix} \\&=\begin{pmatrix}\cos \alpha & -\sin \alpha \\ \sin \alpha & \cos \alpha \end{pmatrix}\begin{pmatrix}x\\y\end{pmatrix} \end{align}\) <br>
Jadi, matirks \(\begin{pmatrix}\cos \alpha & -\sin \alpha \\ \sin \alpha & \cos \alpha \end{pmatrix}\) merupakan matriks yang bersesuaian dengan rotasi sebesar \(\alpha\) dengan titik pusat \(O(0,0)\).
<div class="row p-2 justify-content-center">
  <div class="col-md border">
    <div class="badge bg-primary text-wrap fs-6" style="width: 8rem"><b> CONTOH 3.1 </b>
    </div>
    <p class="fst-italic">Tentukan bayangan titik \(P(3,5)\) jika diputar   sebesar \(90^{\circ}\) yang berlawanan dengan arah jarum jam dan berpusat titik \(O(0,0)\)
    </p>
    <b>JAWABAN</b> <br>
    <p>
    Karena diputar berlawanan dengan arah jarum jam, maka nilai sudutnya positif. <br>
    \(\begin{align}
    \begin{pmatrix}x' \\ y' \end{pmatrix}&= \begin{pmatrix}\cos 90^{\circ} & -\sin 90^{\circ} \\ \sin 90^{\circ} & \cos 90^{\circ} \end{pmatrix}\begin{pmatrix}3 \\5 \end{pmatrix} \\ &=\begin{pmatrix}0&-1 \\ 1&0 \end{pmatrix} \begin{pmatrix}3\\5 \end{pmatrix} \\ &= \begin{pmatrix}-5 \\3 \end{pmatrix}
    \end{align}\) <br>
      Jadi, bayangan titik \(P\) adalah \(P'(-5,3) \).
    </p>
  </div>
</div>
<div class="row p-2 justify-content-center">
  <div class="col-md border">
    <div class="badge bg-primary text-wrap fs-6" style="width: 8rem"><b> CONTOH 3.2 </b>
    </div>
    <p class="fst-italic">Tentukan bayangan titik \(P(2,6)\) jika diputar   sebesar \(30^{\circ}\) yang searah dengan arah jarum jam dan berpusat titik \(O(0,0)\)
    </p>
    <b>JAWABAN</b> <br>
    <p>
    Karena searah dengan arah jarum jam, maka nilai sudutnya negatif. <br>
    \(\begin{align}
    \begin{pmatrix}x' \\ y' \end{pmatrix}&= \begin{pmatrix}\cos (-30^{\circ}) & -\sin (-30^{\circ}) \\ \sin (-30^{\circ}) & \cos (-30^{\circ}) \end{pmatrix}\begin{pmatrix}2\\6 \end{pmatrix} \\ &=\begin{pmatrix} \frac{1}{2}\sqrt{3} & \frac{1}{2} \\ -\frac{1}{2} & \frac{1}{2}\sqrt{3} \end{pmatrix} \begin{pmatrix}2\\6 \end{pmatrix} \\ &= \begin{pmatrix}\sqrt{3}+3 \\ -1+3\sqrt{3} \end{pmatrix}
    \end{align}\) <br>
      Jadi, bayangan titik \(P\) adalah \(P'(\sqrt{3}+3, -1+3\sqrt{3}) \).
    </p>
  </div>
</div>
<li class="fst-italic fw-bold">Rotasi terhadap titik pusat \((a,b)\) </li>
<p>Untuk mendapatkan rumusan rotasi dengan titik pusat \(a,b\), terlebih dahulu kita translasikan titik (\(a,b)\) ke pusat \(O(0,0)\) dan titik \((x,y)\) ditranslasi \(\begin{pmatrix}-a\\-b \end{pmatrix} \), karena kita telah menemukan rumusan rotasi dengan pusat \( O(0,0)\). Perhatikan gambar berikut: <br>
<div class="row">
<div class="col-sm">
  <img src="{{asset('img/rotasi1.png')}}" alt="rotasi1" class="img-fluid">
</div>
<div class="col-sm">
  <img src="{{asset('img/rotasi2.png')}}" alt="rotasi2" class="img-fluid"> <br>
</div>
</div>
maka pada rumus berpusat \((0,0)\), setiap \(x\) diganti menjadi \((x-a)\) dan setiap \(y\) diganti menjadi \((y-b)\). <br>
Dituliskan menjadi <br>
\(x'- a=(x-a) \cos \alpha - (y-b) \sin \alpha \) <br>
\(y'- b=(x-a) \sin \alpha + (y-b) \cos \alpha \) <br>
Persamaan dalam bentuk matriks: <br>
$$\begin{pmatrix}x'-a \\ y'-b \end{pmatrix}=\begin{pmatrix}\cos \alpha & -\sin \alpha \\ \sin \alpha & \cos \alpha \end{pmatrix} \begin{pmatrix}x-a \\ y-b \end{pmatrix}$$ <div class="text-center">atau</div>
$$\begin{pmatrix}x' \\ y' \end{pmatrix}=\begin{pmatrix}\cos \alpha & -\sin \alpha \\ \sin \alpha & \cos \alpha \end{pmatrix} \begin{pmatrix}x-a \\ y-b \end{pmatrix}+\begin{pmatrix} a\\b\end{pmatrix}$$
</p>
<div class="row p-2 justify-content-center">
<div class="col-md border">
<div class="badge bg-primary text-wrap fs-6" style="width: 8rem"><b> CONTOH 3.3 </b>
</div>
<p class="fst-italic">Tentukan bayangan titik \(A(3,2)\) jika diputar   sebesar \(90^{\circ}\) dengan arah berlawanan arah jarum jam dan berpusat titik \((4,1))\).
</p>
<b>JAWABAN</b> <br>
<p>
<div class="overflow-auto">
\(\begin{align}
\begin{pmatrix}x' \\ y' \end{pmatrix}&= \begin{pmatrix}\cos 90^{\circ} & -\sin 90^{\circ} \\ \sin 90^{\circ} & \cos 90^{\circ} \end{pmatrix} \begin{pmatrix}3-4\\2-1 \end{pmatrix}+\begin{pmatrix}4\\1 \end{pmatrix} \\ &=\begin{pmatrix} 0&-1 \\1&0 \end{pmatrix} \begin{pmatrix}-1\\1 \end{pmatrix}+\begin{pmatrix}4\\1 \end{pmatrix} \\ &= \begin{pmatrix}-1 \\ -1 \end{pmatrix}+\begin{pmatrix}4\\1 \end{pmatrix} \\ &=\begin{pmatrix}3\\0 \end{pmatrix}
\end{align}\) </div>
  Jadi, bayangan titik \(A(3,2)\) adalah \(A'(3,0) \).
</p>
</div>
</div>
</ol>

<div class="row justify-content-center ms-4">
<div class="col-md border">
  <div class="badge bg-danger text-wrap fs-6" style="width: 8rem"><b> Evaluasi 3.1 </b></div>
<ol>
  <li>Tentukan bayangan titik \(A(2,4)\), \(B(3,-2)\) dan \(C(-2,-3)\)jika diputar dengan pusat \(O(0,0)\) dan dengan sudut putar: terhadap:
      <div class="row">
          <div class="col-md-2">a. \(180^{\circ}\)</div>
          <div class="col-md-2">b. \(90^{\circ}\)</div>
          <div class="col-md-2">c. \(-60^{\circ}\)</div>
      </div>
  </li>
  <li>Tentukan bayangan titik-titik \(A(5,2)\), \(B(-3,4)\) dan \(C(6,-3)\) jika diputar dengan pusat \(P(1,-2)\) dan dengan sudut putar:
      <div class="row">
          <div class="col-md-2">a. \(90^{\circ}\)</div>
          <div class="col-md-2">b. \(-90^{\circ}\)</div>
      </div>
  </li>
  <li>Jika titik \(A\) diputar sebesar \(45^{\circ}\) dengan arah berlawanan arah putaran jarum jam dan dengan pusat \(O(0,0)\), maka bayangannya adalah \(A'(2,-4)\). Tentukan koordinat titik \(A\).
  </li>
  <li>Bayangan titik-titik \(A(6,1)\) dan \(B(1,6)\) oleh suatu rotasi adalah \(A'(5,4)\) dan \(B'(-2,5)\). Tentukan koordiant pusat rotasi tersebut.
  </li>
</ol>
</div>
</div>
</div>
<!-- ==============DILATASI -->
<div id="dilatasi">
<hr>
<hr>
<h1 class="text-primary"> Dilatasi (Perkalian) </h1>
<hr>
<hr>
    <p> Dilatasi adalah transformasi yang mengubah jarak titik-titik dengan faktor skala (pengali) tertentu di pusat dilatasi tertentu. Jika yang didilatasikan adalah suatu bangun, maka ukuran bangun tersebut akan berubah, tetapi bentuknya tetap. Kita akan mempelajari perkalian atau dilatasi ditentukan oleh titik pusat \(O(0, 0)\) dan titik pusat \((a, b)\) faktor skala. \([O, k]\) adalah notasi dilatasi yang berpusat \(O(0, 0)\) dengan faktor skala \(k\) sedangkan \([(a, b),k]\), adalah notasi dilatasi yang berpusat di titik \((a, b)\) dengan faktor skala \(k\).</p>
      <ol>
        <li class="fst-italic fw-bold"> Dilatasi Pusat \(O(0,0)\) dengan Faktor Skala \(k\) </li>
        <p>
    <img src="{{asset('img/dilatasi1.png')}}" alt="dilatasi1" width="300" class="img-fluid"> <br>
        Jika \(P'\) merupakan bayangan \(P\) oleh dilatasi \([O,k] \), maka: <br>
        \(OP'=k.OP\) <br>
        Jadi, bayangan titik \(P(x,y)\) oleh dilatasi \([O,k]\) adalah \(P'(kx,ky) \) dan dapat juga ditulis sebagai:
        $$P(x,y) \overset{[O,k]}{\rightarrow} P'(kx,ky)$$
        Kita sudah ketahui bahwa bila titik \(P(x,y)\)didilatasikan terhadap titik pusat \(O(0, 0)\) dengan faktor skala \(k\), maka bayangannya adalah \(P'(kx,ky)\). Dengan demikian, diperoleh persamaan-persamaan berikut. <br>
        \(x'=kx=kx+0.y \) <br>
        \(y'=ky=0.x+ky\) <br>
        Persamaan  dalam bentuk matriks <br>
    \(\begin{align}
    \begin{pmatrix}x'\\y' \end{pmatrix}&=\begin{pmatrix}kx+0.y \\0.x+ky \end{pmatrix} \\ &=\begin{pmatrix}k&0 \\0&k \end{pmatrix}\begin{pmatrix}x\\y \end{pmatrix}
    \end{align}\)
   </p>
<p>Jadi, matriks \(\begin{pmatrix}k&0 \\ 0&k \end{pmatrix}\) merupakan matriks yang bersesuaian dengan dilatasi terhadap titik pusat \(O(0,0)\) dengan faktor skala \(k\). </p>

<div class="row p-2 justify-content-center">
<div class="col-md border">
<div class="badge bg-primary text-wrap fs-6" style="width: 8rem"><b> CONTOH 4.1 </b>
</div>
<p class="fst-italic">Tentukan bayangan titik-titik  \(A(2,3)\), \(B(3,-1)\), dan \(A(4,2)\) oleh dilatasi \([O,2]\)
</p>
<b>JAWABAN</b> <br>
<p>
Matriks dari ketiga titik tersebut adalah \(\begin{pmatrix}2&3&4 \\ 3&-1&2 \end{pmatrix}\). <br>
Bayangan titiknya <div class="overflow-auto">\(=\begin{pmatrix}2&0 \\ 0&2 \end{pmatrix}\begin{pmatrix}2&3&4 \\ 3&-1&2 \end{pmatrix}=\begin{pmatrix}4&6&8 \\ 6&-2&4 \end{pmatrix} \) </div><br>
Jadi, bayangan titik \(A\), \(B\), dan \(C\) adalah titik \(A'(4,6) \), \(B'(6,-2)\), dan \(C'(8,4)\)
</p>
</div>
</div>
<p>
Dilatasi merupakan transformasi non-isometri sehingga akan mengubah ukuran suatu bangun datar. Dalam bentuk umumnya, jika matriks transformasi \(\begin{pmatrix}a&b \\ c&d \end{pmatrix} \) memetakan bangun \(B\) ke bangun \(B'\), maka: <br>
Luas bangun \(B'=\begin{vmatrix}a&b \\ c&d \end{vmatrix} \times \text{luas bangun }B\)
</p>
<div class="row p-2 justify-content-center">
<div class="col-md border">
<div class="badge bg-primary text-wrap fs-6" style="width: 8rem"><b> CONTOH 4.2 </b>
</div>
<p class="fst-italic">Diketahui koordinat titik-titik sudut \(\bigtriangleup ABC\) adalah\(A(1,0) \), \(B(3,0) \), dan \(C(3,3) \). Jika bayangan titik-titik \(A\), \(B\), dan \(C\) oleh dilatasi pusat \(O(0,0)\) dengan faktor skala 4 adalah \(A'\), \(B'\) dan \(C'\), tentukan: <br>
  a. luas \(\bigtriangleup ABC\) <br>
  b. luas \(\bigtriangleup A'B'C'\)
</p>
<b>JAWABAN</b> <br>
<div class="row">
  <div class="col-md-4">
    <p>
      \(\begin{align} L_{\bigtriangleup ABC} &=\frac{1}{2}\times \text{alas} \times \text{tinggi}\\&= \frac{1}{2} \times 2 \times 3 \\ &=3  \end{align}\) <br>
      Matriks dilatasinya adalah \(\begin{pmatrix}4&0 \\ 0&4 \end{pmatrix}\) <br>
      \(\begin{align} L_{\bigtriangleup A'B'C'}&= \begin{vmatrix}4&0 \\ 0&4 \end{vmatrix} \times L_{\bigtriangleup ABC}\\&=(16-0) \times 3 \\ &= 48 \end{align}\)
      </p>
  </div>
  <div class="col-md">
    <img src="{{asset('img/dilatasi2.png')}}" alt="dilatasi2" class="img-fluid">
  </div>
</div>

</div>
</div>
<!-- contoh 4.3 -->
<div class="row p-2 justify-content-center">
<div class="col-md border">
<div class="badge bg-primary text-wrap fs-6" style="width: 8rem"><b> CONTOH 4.3 </b>
</div>
<p class="fst-italic">Segitiga \(ABC\) dengan \(A(2,1)\), \(B(6,1)\), dan \(C(6,4)\) ditransformasikan dengan matriks transformasi \(\begin{pmatrix}3&2 \\ 1&2 \end{pmatrix}\). <br>
  Tentukan luas hasil transformasi segitiga \(ABC\).
</p>
<b>JAWABAN</b> <br>
<div class="row">
  <div class="col-md-4">
    <p>
      Berdasarkan gambar di samping: <br>
      \(\begin{align} L_{\bigtriangleup ABC} &=\frac{1}{2}\times \text{alas} \times \text{tinggi}\\&= \frac{1}{2} \times 4 \times 3 \\ &=6  \end{align}\) <br>
      Jadi, luas hasil transformasi \(\bigtriangleup ABC\) adalah <br>
      \(\begin{align} L_{\bigtriangleup A'B'C'}&= \begin{vmatrix}3&2 \\ 1&2 \end{vmatrix} \times L_{\bigtriangleup ABC}\\&=(6-2) \times 6 \\ &= 24 \end{align}\)
      </p>
  </div>
  <div class="col-md">
    <img src="{{asset('img/dilatasi3.png')}}" alt="dilatasi3" class="img-fluid">
  </div>
</div>

</div>
</div>
<!-- end contoh 4.3 -->
<li class="fst-italic fw-bold"> Dilatasi Pusat \((a,b)\) dengan Faktor Skala \(k\) </li>
<p>
Sama halnya dengan mendapatkan rumusan rotasi dengan titik pusat \((a,b)\), dilatasi dengan titik pusat \((a,b)\) terlebih dahulu kita translasikan titik \((a,b)\) ke pusat \(O(0,0)\) dan titik \((x,y)\) ditranslasi \(\begin{pmatrix}-a\\-b \end{pmatrix} \), karena kita telah menemukan rumusan dilatasi dengan pusat \(O(0,0)\), maka pada rumus berpusat \((0,0)\), setiap \(x\) diganti menjadi \((x-a)\) dan setiap \(y\) diganti menjadi \((y-b)\). Dengan demikian rumus untuk dilatasi \([(a,b),k] \) adalah: <br>
\(x'-a=k(x-a) \) <br>
\(y'-b=k(y-b) \) <br>
Persamaan dalam bentuk matriksnya:
<div class="text-center">
$$\begin{pmatrix}x'-a \\ y'-b \end{pmatrix}=\begin{pmatrix}k&0 \\ 0&k \end{pmatrix}\begin{pmatrix}x-a \\ y-b \end{pmatrix}$$
atau
$$\begin{pmatrix}x' \\ y' \end{pmatrix}=\begin{pmatrix}k&0 \\ 0&k \end{pmatrix}\begin{pmatrix}x-a \\ y-b \end{pmatrix}+\begin{pmatrix}a\\b \end{pmatrix}$$
</div>
</p>
<div class="row p-2 justify-content-center">
<div class="col-md border">
<div class="badge bg-primary text-wrap fs-6" style="width: 8rem"><b> CONTOH 4.4 </b>
</div>
<p class="fst-italic">Tentukan bayangan titik-titik \(A(3,5)\) oleh dilatasi \([(2,1),-2] \).
</p>
<b>JAWABAN</b> <br>
    <p>
      \(\begin{align}
      A' &= \begin{pmatrix}-2&0 \\ 0&-2 \end{pmatrix}\begin{pmatrix}3-2 \\ 5-1 \end{pmatrix}+\begin{pmatrix}2\\1 \end{pmatrix} \\ &= \begin{pmatrix}-2&0 \\ 0&-2 \end{pmatrix}\begin{pmatrix}1\\4 \end{pmatrix}+\begin{pmatrix}2\\1 \end{pmatrix} \\
      &=\begin{pmatrix}-2\\-8 \end{pmatrix}+\begin{pmatrix}2\\1 \end{pmatrix} \\ &= \begin{pmatrix}0\\-7 \end{pmatrix}
      \end{align}\) <br>
      Jadi, bayangan titik \(A(3,5)\) adalah \(A'(0,-7)\).
      </p>
</div>
</div>
</ol>

<div class="row justify-content-center ms-4 mb-2">
<div class="col-md border">
  <div class="badge bg-danger text-wrap fs-6" style="width: 8rem"><b> Evaluasi 4.1 </b></div>
<ol>
  <li>Tentukan bayangan titik \(A(3,5)\) oleh dilatasi:
      <div class="row">
          <div class="col-md-2">a. \([O,-2]\)</div>
          <div class="col-md-2">b. \([O,3]\)</div>
          <div class="col-md-2">c. \([O,4] \)</div>
      </div>
  </li>
  <li>Tentukan bayangan titik-titik \(A(2,5)\) oleh dilatasi:
      <div class="row">
          <div class="col-md-2">a. \([(2,3),2] \)</div>
          <div class="col-md-2">b. \([(3,-1),-1] \)</div>
          <div class="col-md-2">b. \([(1,-2),3] \)</div>
      </div>
  </li>
  <li>Bayangan titik-titik \(A(2,1)\) dan \(B(3,2) \) oleh suatu dilatasi berturut-turut adalah \(A'(-1,1)\) dan \(B'(-3,-1)\). Tentukan pusat dan faktor skala dilatasi tersebut!
  </li>
  <li>Titik-titik sudut persegipanjang \(ABCD\) adalah \(A(2,-1)\), \(B(2,1)\), \(C(-2,1)\), dan \(D(-2,-1)\) <br>
    a. Hitunglah luas persegi panjang \(ABCD\) <br>
    b. Jika \(A'\), \(B'\), \(C'\) dan \(D'\) adalah bayangan titik-titik \(A,B,C\) dan \(D\) oleh transformasi \(\begin{pmatrix}1&2 \\ 3&4 \end{pmatrix}\). Tentukan luas bangun \(A'B'C'D'\)!
  </li>
  <li>Bayangan titik-titik \(A(-1,0)\), \(B(3,0)\), dan \(C(2,4)\) oleh transformasi \(\begin{pmatrix}2&4 \\ 3&6 \end{pmatrix} \) adalah \(A'\), \(B'\), dan \(C'\). Tunjukan bahwa luas bangun \(A'B'C'\) adalah \(0\). Apa yang dapat disimpulkan dari luas tersebut?</li>
</ol>
</div>
</div>
</div>
<!-- =============KURVA=================== -->
<div id="kurva">
<hr>
<hr>
<h1 class="text-primary"> Transformasi Suatu Kurva </h1>
<hr>
<hr>
<p> Sebelumnya kita hanya mempelajari cara menentukan transformasi suatu titik, sekarang kita akan menentukan transformasi suatu kurva. Jika ingin mencari bayangan suatu kurva yang memiliki persamaan \(y=f(x) \) oleh suatu transfromasi, maka dari transformasi tersebut lebih dahulu kita tentukan \(x\) dan \(y\) dalam bentuk \(x'\) dan \(y'\), kemudian bayangannya diperoleh dengan mensubstitusikan \(x\) dan \(y\) ke \(y=f(x)\) dari transformasi tersebut.
</p>
<div class="row p-2 justify-content-center">
<div class="col-md border">
<div class="badge bg-primary text-wrap fs-6" style="width: 8rem"><b> CONTOH 5.1 </b>
</div>
<p class="fst-italic">Tentukan bayangan garis \(2x+3y+4=0 \) jika ditransformasikan dengan \(\begin{pmatrix}1&2 \\ 0&1 \end{pmatrix} \)
</p>
<b>JAWABAN</b> <br>
    <p>
      Menentukan \(x\) dan \(y\) <br>
      \(\begin{align}
      \begin{pmatrix}x'\\y' \end{pmatrix}
      &= \begin{pmatrix}1&2 \\ 0&1 \end{pmatrix}\begin{pmatrix}x\\y \end{pmatrix}
      \\\begin{pmatrix}x\\y \end{pmatrix} &=\begin{pmatrix}1&2 \\ 0&1 \end{pmatrix}^{-1}\begin{pmatrix}x'\\y' \end{pmatrix}
      \\ &= \frac{1}{1-0}\begin{pmatrix}1&-2\\0&1 \end{pmatrix}\begin{pmatrix}x'\\y' \end{pmatrix} \\&=
      \begin{pmatrix}x'-2y' \\y' \end{pmatrix}
      \end{align}\) <br>
      Diperoleh \(x=x'-2y' \) dan \(y=y'\) <br>
      Substitusikan \(x=x'-2y'\) dan \(y=y'\) ke persamaan \(2x+3y+4=0\), maka: <br>
      \(\begin{align}
      2(x'-2y')+3y'+4&=0 \\
      2x'-4y'+3y'+4 &= 0 \\
      2x'-y'+4 &= 0
      \end{align}\) <br>
      <i>(tanda petik satu merupakan tanda dari bayangannya)</i> <br>
      Jadi, bayangan garis \(2x+3y+4=0 \) adalah \(2x-y+4=0\)
      </p>
</div>
</div>
<hr>
<h4 class="text-center">TRANSLASI SUATU KURVA</h4>
<div class="row justify-content-center">
<div class="col-md-8 border border-dark rounded-3">
Bayangan garis \(y=mx+c\) oleh translasi \(T=\begin{pmatrix} a\\b\end{pmatrix}\) dapat ditentukan oleh: <br>
$$y-b=m(x-a)+c$$
Jika diperumum lagi untuk suatu kurva bila ditranslasi oleh \(T=\begin{pmatrix} a\\b\end{pmatrix}\), maka dapat ditentukan
<ul>
<li>\(y=px^2+qx+r \Rightarrow \)\(\:y-b=p(x-a)^2 + q(x-a)+r \) </li>
<li>\(x^2+y^2=r^2 \Rightarrow \) \((x-a)^2 +(y-b)^2=r^2\) </li>
</ul>
</div>
</div>
<div class="row p-2 justify-content-center">
<div class="col-md border">
<div class="badge bg-primary text-wrap fs-6" style="width: 8rem"><b> CONTOH 5.2 </b>
</div>
<p class="fst-italic">Garis \(2x-3y=6 \) ditranslasikan dengan \(T=\begin{pmatrix} 3\\-2\end{pmatrix}\), Tentukan persamaan bayangannya.
</p>
<b>JAWABAN</b> <br>
    <p>
      <b>Ada 2 cara untuk menyelesaikan soal ini.</b> <br>
      <i>Cara 1</i> <br>
      </p>
      <p>
        Bayangan garis \(2x-3y=6 \) oleh translasi \(T=\begin{pmatrix} 3\\-2\end{pmatrix}\) adalah <br>
\(\begin{align}
 2(x-3)-3(y-(-2)) &=6 \\
 2(x-3)-3(y+2) &=6 \\
 2x-6-3y-6 &= 6 \\
 2x-3y &=18
\end{align}\)
      </p>
      <p>
        <i>Cara 2</i> <br>
        Terlebih dahulu kita tentukan 2 buah titik yang terletak pada garis \(2x-3y=6\). Untuk memudahkan kita pilih titik potong sumbu-X dan sumbu-Y. <br>
        \(y=0 \Rightarrow x=3 \), diperoleh titik \(A(3,0)\) <br>
        \(x=0 \Rightarrow y=-2 \), diperoleh titik \(B(0,-2) \) <br>
        Matriks kedua titik tersebut adalah  \(\begin{pmatrix}3&0\\0&-2 \end{pmatrix}\) <br>
        Matriks titik bayangannya adalah
        <div class="overflow-auto"> \(\begin{pmatrix}3&3\\-2&-2 \end{pmatrix}+ \begin{pmatrix}3&0\\0&-2 \end{pmatrix}= \begin{pmatrix}6&3\\-2&-4 \end{pmatrix}\)</div>
        Diperoleh titik \(A'(6,-2) \) dan \(B'(3,-4) \). <br>
        Persamaan garis yang melalui titik \(A'\) dan \(B'\) adalah
        <div class="overflow-auto">
        \(\begin{align}
          \frac{y+2}{-4+2}=\frac{x-6}{3-6} &\Leftrightarrow \frac{y+2}{-2} =\frac{x-6}{-3} \\
          &\Leftrightarrow \frac{y+2}{2} = \frac{x-6}{3} \\
          &\Leftrightarrow 3y+6 = 2x-12 \\
          &\Leftrightarrow 2x-3y = 18
        \end{align}\)
      </div>
      Jadi, persamaan garis bayangannya adalah \(2x-3y=18\) <br>
      <img src="{{asset('img/transkurva1.png')}}" alt="transformasiKurva1">
      </p>
</div>
</div>
<hr>
<h4 class="text-center">PENCERMINAN SUATU KURVA</h4>

<div class="row p-2 justify-content-center">
<div class="col-md border">
<div class="badge bg-primary text-wrap fs-6" style="width: 8rem"><b> CONTOH 5.3 </b>
</div>
<p class="fst-italic">Tentukan hasil pencerminan kurva \(y=x^2 -2x+4 \) oleh pencerminan terhadap garis \(y=x\)
</p>
<b>JAWABAN</b> <br>
    <p>
      Menentukan \(x\) dan \(y\) <br>
      \(\begin{pmatrix}x'\\y' \end{pmatrix}
      = \begin{pmatrix}0&1 \\ 1&0 \end{pmatrix}\begin{pmatrix}x\\y \end{pmatrix} \Leftrightarrow  \begin{pmatrix}x'\\y' \end{pmatrix} =\begin{pmatrix}y \\x \end{pmatrix}\) <br>
      Dari persamaan diatas diperoleh: <br>
      \(x=y'\) dan \(y=x'\) <br>
      Substitusikan \(x=y'\) dan \(y=x'\) ke persamaan \(y=x^2 -2x+4 \), maka \(x'=(y')^2 -2y'+4 \) <br>
      Jadi, bayangan kurva \(y=x^2 -2x+4 \) adalah \(x=y^2-2y+4 \)
      </p>
</div>
</div>
<div class="row p-2 justify-content-center">
<div class="col-md border">
<div class="badge bg-primary text-wrap fs-6" style="width: 8rem"><b> CONTOH 5.4 </b>
</div>
<p class="fst-italic">Tentukan hasil pencerminan kurva \(y=5-x-3x^2 \) oleh pencerminan terhadap garis \(y=-x\)
</p>
<b>JAWABAN</b> <br>
    <p>
      Menentukan \(x\) dan \(y\) <br>
      \(\begin{pmatrix}x'\\y' \end{pmatrix}
      = \begin{pmatrix}0&-1 \\ -1&0 \end{pmatrix}\begin{pmatrix}x\\y \end{pmatrix} \Leftrightarrow  \begin{pmatrix}x'\\y' \end{pmatrix} =\begin{pmatrix}-y \\-x \end{pmatrix}\) <br>
      Dari persamaan diatas diperoleh: <br>
      \(x=-y'\) dan \(y=-x'\) <br>
      Substitusikan \(x=-y'\) dan \(y=-x'\) ke persamaan \(y=5-x-3x^2\), maka <br>

      \(\begin{align} -x'&=5-(-y')-3(-y')^2 \\
      -x' &= 5+y'-3(y')^2 \\ x &= 3(y')^2-y'-5 \end{align} \) <br>
      Jadi, bayangan kurva \(y=5-x-3x^2 \) adalah \(x=3y^2 -y-5 \)
      </p>
</div>
</div>
<hr>
<h4 class="text-center">ROTASI SUATU KURVA</h4>
<div class="row p-2 justify-content-center">
<div class="col-md border">
<div class="badge bg-primary text-wrap fs-6" style="width: 8rem"><b> CONTOH 5.5 </b>
</div>
<p class="fst-italic">Tentukan bayangan parabola \(y=x^2-x+2 \) jika diputar sebesar \(90^{\circ}\) dengan arah berlawanan dengan arah putar jarum jam terhadap titik \(O\).
</p>
<b>JAWABAN</b> <br>
    <p>
      Menentukan \(x\) dan \(y\) <br>
      \(\begin{pmatrix}x'\\y' \end{pmatrix}
      = \begin{pmatrix}0&-1 \\ 1&0 \end{pmatrix}\begin{pmatrix}x\\y \end{pmatrix} =\begin{pmatrix}-y \\x \end{pmatrix}\) <br>
      Dari persamaan diatas diperoleh: <br>
      \(x=y'\) dan \(y=-x'\) <br>
      Substitusikan \(x=y'\) dan \(y=-x'\) ke persamaan \(y=x^2-x+2\), maka <br>

      \(\begin{align} -x'&=(y')^2-y'+2 \\
      x' &= -(y')^2+y'-2  \end{align} \) <br>
      Jadi, bayangan kurva \(y=x^2-x+2 \) adalah \(x=-y^2+y-2\)
      </p>
</div>
</div>
<div class="row p-2 justify-content-center">
<div class="col-md border">
<div class="badge bg-primary text-wrap fs-6" style="width: 8rem"><b> CONTOH 5.6 </b>
</div>
<p class="fst-italic">Tentukan bayangan parabola \(y=x^2-2x+2 \) jika diputar sebesar \(90^{\circ}\) dengan arah berlawanan dengan arah putar jarum jam terhadap titik \((1,-2) \).
</p>
<b>JAWABAN</b> <br>
    <p>
      Menentukan \(x\) dan \(y\) <br>
      <div class="overflow-auto">
        \(\begin{align} \begin{pmatrix}x'\\y' \end{pmatrix}
        &= \begin{pmatrix}0&-1 \\ 1&0 \end{pmatrix}\begin{pmatrix}x-1\\y-(-2) \end{pmatrix} + \begin{pmatrix}1 \\-2 \end{pmatrix} \\ &=\begin{pmatrix}-y-2 \\x-1 \end{pmatrix}+\begin{pmatrix}1 \\-2 \end{pmatrix} \\&= \begin{pmatrix}-y-1 \\x-3 \end{pmatrix} \end{align}\) <br>
      </div>
      Dari persamaan diatas diperoleh: <br>
      \(x'=-y-1 \Rightarrow y=-x'-1\) <br>
      \(y'=x-3 \Rightarrow x=y'+3\) <br>
      Substitusikan \(x=y'+3\) dan \(y=-x'-1\) ke persamaan \(y=x^2-2x+2\), maka <br>

      \(\begin{align}
      -x'-1&=(y'+3)^2-2(y'+3)+2 \\
      -x'-1 &= (y')^2+6y'+9-2y'-6+2 \\
      -x'&=(y')^2+4y'+6 \\
      x' &= -(y')^2 -4y'-6  \end{align} \) <br>
      Jadi, bayangan kurva \(y=x^2-2x+2 \) adalah \(x = -y^2 -4y-6\)
      </p>
</div>
</div>
<hr>
<h4 class="text-center">DILATASI SUATU KURVA</h4>
<div class="row p-2 justify-content-center">
<div class="col-md border">
<div class="badge bg-primary text-wrap fs-6" style="width: 8rem"><b> CONTOH 5.7 </b>
</div>
<p class="fst-italic">Tentukan bayangan kurva \(x^2+y^2=16\) oleh dilatasi \([O,4]\)
</p>
<b>JAWABAN</b> <br>
    <p>
      Menentukan \(x\) dan \(y\) <br>
      \(\begin{pmatrix}x'\\y' \end{pmatrix}
      = \begin{pmatrix}4&0 \\ 0&4 \end{pmatrix}\begin{pmatrix}x\\y \end{pmatrix} =\begin{pmatrix}4x \\4y \end{pmatrix}\) <br>
      Dari persamaan matriks diatas diperoleh: <br>
      \(x'=4x \Rightarrow x=\frac{1}{4}x' \) <br>
      \(y'=4y \Rightarrow y=\frac{1}{4}y' \) <br>
      Substitusikan \(x=\frac{1}{4}x'\) dan \(y=\frac{1}{4}y'\) ke \(x^2+y^2=16\) diperoleh: <br>

      \(\begin{align}
      (\frac{1}{4}x')^2+(\frac{1}{4}y')^2 &=16 \\
      \frac{1}{16}(x')^2+ \frac{1}{16}(y')^2 &= 16 \\
      (x')^2+(y')^2 &=256
      \end{align} \) <br>
      Jadi, bayangannya adalah \(x^2 + y^2 =256\)
      </p>
</div>
</div>
<div class="row p-2 justify-content-center">
<div class="col-md border">
<div class="badge bg-primary text-wrap fs-6" style="width: 8rem"><b> CONTOH 5.6 </b>
</div>
<p class="fst-italic">Tentukan bayangan parabola \(y=x^2-2x+2 \) jika didilatasi terhadap titik (-1,2) dengan faktor skala 2.
</p>
<b>JAWABAN</b> <br>
    <p>
      Menentukan \(x\) dan \(y\) <br>
      <div class="overflow-auto">
        \(\begin{align}
        \begin{pmatrix}x'\\y' \end{pmatrix}
        &= \begin{pmatrix}2&0 \\ 0&2 \end{pmatrix}\begin{pmatrix}x+1\\y-2 \end{pmatrix} + \begin{pmatrix}-1 \\2 \end{pmatrix} \\ &=\begin{pmatrix}2x+2 \\2y-4 \end{pmatrix}+\begin{pmatrix}-1 \\2 \end{pmatrix} \\&= \begin{pmatrix}2x+1 \\2y-2 \end{pmatrix} \end{align}\) <br>
      </div>
      Dari persamaan diatas diperoleh: <br>
      \(x'=2x+1 \Rightarrow x=\frac{x'-1}{2} \) <br>
      \(y'=2y-2 \Rightarrow y=\frac{y'+2}{2}\) <br>
      Substitusikan \(x\) dan \(y=\) ke persamaan \(y=x^2-2x+2\) diperoleh: <br>

      \(\begin{align}
      \frac{y'+2}{2} &= (\frac{x'-1}{2})^2 - 2(\frac{x'-1}{2})+2 \\
      \frac{y'+2}{2} &= \frac{(x')^2 -2x'+1}{4} - x'+1+2 \\
      2y'+4 &= (x')^2-2x'+1 -4x'+12 \\
      2y' &= (x')^2 -6x'+9  \end{align} \) <br>
      Jadi, bayangannya adalah \(2y = x^2 -6x+9\)
      </p>
</div>
</div>
<hr>
<div class="row justify-content-center mb-2">
<div class="col-md border">
  <div class="badge bg-danger text-wrap fs-6" style="width: 8rem"><b> Evaluasi 5.1 </b></div>
<ol>
<li>Tentukan persamaan bayangan dari:</li>
  <ol type="a">
    <li>Garis \(2x-3y+11=0\) ditranslasikan dengan \(T=\begin{pmatrix}-2\\5 \end{pmatrix}\) </li>
    <li>Parabola \((x+1)^2=2(y-2) \) ditranslasikan dengan \(T=\begin{pmatrix}3\\4 \end{pmatrix}\) </li>
    <li>Lingkaran \(x^2 +y^2+2x-4y+6=0\) ditranslasikan dengan \(T=\begin{pmatrix}3\\-6 \end{pmatrix} \) </li>
  </ol>
  <li> Tentukan bayangan garis \(x+2y-4=0\), jika dicerminkan terhadap:
      <div class="row">
          <div class="col-md-3">a. sumbu-X <br> b. sumbu-Y</div>
          <div class="col-md-4">c. garis \(y=2\) <br>d. garis \(y=x\) </div>
          <div class="col-md-3">e. garis \(y=-x\)</div>
      </div>
  </li>
  <li> Tentukan bayangan kurva \(y=3x^2-4x+7\), jika dicerminkan terhadap:
      <div class="row">
          <div class="col-md-3">a. sumbu-X <br> b. sumbu-Y</div>
          <div class="col-md-4">c. garis \(x=-2\) <br>d. garis \(y=x\) </div>
          <div class="col-md-3">e. garis \(y=-x\)</div>
      </div>
  </li>

  <li>Tentukan bayangan garis \(2x+3y-6=0\), jika diputar terhadap \(O\) dengan sudut:
      <div class="row">
          <div class="col-md-3">a. \(90^{\circ} \)</div>
          <div class="col-md-3">b. \(180^{\circ} \)</div>
      </div>
  </li>
  <li>Tentukan bayangan lingkaran \(x^2+y^2=16\), jika didilatasikan dengan:
      <div class="row">
          <div class="col-md-3">a. \([O,2] \)</div>
          <div class="col-md-3">b. \([O, -\frac{1}{2}] \)</div>
      </div>
  </li>
  <li>Carilah persamaan dari bayangan hiperbola \(x^2-y^2=4\) oleh rotasi terhadap \(O\) sebesar \(\frac{1}{4}\pi \) radian. </li>
  <li>Tentukan persamaan dari peta garis \(2x-y=7\) oleh transformasi yang matriksnya \(\begin{pmatrix}2&-1 \\ 0&1 \end{pmatrix}\) </li>
  <li>Tentukan persamaan dari peta garis \(2x+y=4 \) oleh transformasi yang matriksnya \(\begin{pmatrix}1&-1 \\ 1&1 \end{pmatrix}\)</li>
</ol>
</div>
</div>
</div>
<!-- ================KOMPOSISI================= -->
<div id="komposisi">
<hr>
<hr>
<h1 class="text-primary">Komposisi Transformasi</h1>
<hr>
<hr>
<ol>
<li>Pengertian Komposisi Transformasi</li>
<p>
    Materi yang berkaitan materi kali ini adalah komposisi dua fungsi, yaitu \(f \circ g (x)\) artinya sama dengan \(f(g(x))\). Arti komposisi pada fungsi dan pada transformasi adalah sama, sehingga \(T_2 \circ T_1
    (x,y)=T_2(T_1(x,y)) \) artinya \(T_2 \circ T_1 \) artinya \(T_1\) dilanjutkan oleh \(T_2\) seperti terlihat pada skema dibawah ini. <br />
    <img src="{{asset('img/komposisi1.png')}}" alt="komposisi1" />
    Agar dapat memahami komposisi lebih jauh, perhatikan beberapa contoh soal berikut.
</p>
<div class="row pt-2 justify-content-center">
  <div class="col-md border">
    <div class="badge bg-primary text-wrap fs-6" style="width: 8rem"><b> CONTOH 6.1 </b></div>
      <br />
      <p class="fst-italic">Tentukan bayangan titik \(A(2,3)\) jika ditransformasikan dengan \(T_1=\begin{pmatrix} 2 \\ -1 \end{pmatrix}\), kemudian dilanjutkan oleh translasi \(T_2 = \begin{pmatrix} 1\\ 4\end{pmatrix}\).</p>
      <b>JAWABAN:</b> <br />
      <p>
        Karena \(T_2\) yang melanjutkan, maka pada penulisan komposisi, \(T_2\) berada disebelah kiri. <br />
        \(\begin{align} T_2 \circ T_1 (2,3) &= T_2(T_1(2,3)) \\ &= T_2(2+2, 3-1) \\ &=T_2 (4,2) \\&= (4+1, 2+4) \\ &=(5,6) \end{align}\) <br />
        Jadi, bayangan titik \(A(2,3)\) adalah \(A'(5,6)\)
      </p>
  </div>
</div>
<div class="row pt-2 justify-content-center">
  <div class="col-md border">
    <div class="badge bg-primary text-wrap fs-6" style="width: 8rem"><b> CONTOH 6.2 </b></div>
      <br />
      <p class="fst-italic">Tentukan bayangan titik \(P(1,4)\) jika dicerminkan terhadap garis \(x=3\), kemudian dicerminakan terhadap garis \(y=x\)</p>
      <b>JAWABAN:</b> <br />
      <p>
        Karena yang melanjutkan adalah pencerminan terhadap garis y=x, maka \(T_{y=x} \) berada di sebelah kiri. <br>
        \(\begin{align}
          T_{y=x} \circ T_{x=3}(1,4) &= T_{y=x}[T_{x=2}(1,4)] \\
          &= T_{y=x}(2(3)-1,4) \\ &= T_{y=x}(5,4) \\ &=(4,5)
        \end{align}\) <br>
        Jadi, bayangan titik \(P(1,4)\) adalah \(P'(4,5)\).
      </p>
  </div>
</div>
<br>
<li>Ekuivalensi komposisi Transformasi</li>
Ekuivalensi komposisi transformasi artinya transformasi tunggal yang ekuivalen dengan komposisi dua transformasi. Di sini kita akan mempelajari ekuivalensi komposisi dua transformasi yang sejenis, sedangkan yang tidak sejenis akan kita pelajari selanjutnya.
<ol type="a">
  <li>Komposisi Dua Translasi</li>
  Seperti yang sudah diketahui jika \(T=\begin{pmatrix}a\\b \end{pmatrix}\), maka : <br>
  \(T= \begin{pmatrix}a\\b \end{pmatrix} : (x,y) \to (x+a,y+b) \) <br>
  Jika translasi \(T_1\) dan \(T_2\) masing-masing dinyatakan dengan pasangan bilangan berurutan \(\begin{pmatrix}a_1\\b_1 \end{pmatrix}\) dan \(\begin{pmatrix}a_2\\b_2 \end{pmatrix}\), maka \(T_2 \circ T_1 =\begin{pmatrix}a_1 + a_2\\b_1 + b_2 \end{pmatrix}\) <br>
  Agar lebih paham bagaimana komposisi dua translasi, perhatikan contoh berikut
  </ol>
  <div class="row pt-2 justify-content-center">
  <div class="col-md border">
    <div class="badge bg-primary text-wrap fs-6" style="width: 8rem"><b> CONTOH 6.3 </b></div>
      <br />
      <p class="fst-italic"> Diketahui translasi \(T_1 = \begin{pmatrix}1\\1 \end{pmatrix} \) dan \( \begin{pmatrix}2\\2 \end{pmatrix}\). Nyatakan \(T_1 \circ T_2 \) sebagai translasi tunggal, kemudian carilah \(T_1 \circ T_2 = (3,-1). \)
      </p>
      <b>JAWABAN:</b> <br />
      <p>
        \(T_2 \circ T_1 = T_1+T_2=\begin{pmatrix}1\\1 \end{pmatrix}+\begin{pmatrix}2\\2 \end{pmatrix}=\begin{pmatrix}3\\3 \end{pmatrix}\) <br>
        \(T_2 \circ T_1(3,-1)=(3+3, -1+3)=(6,2) \)
      </p>
  </div>
</div>
<br>
  <ol start="2" type="a">
  <li>Komposisi Refleksi Terhadap Dua Sumbu Sejajar</li>
Jika \(T_{x=h} \) adalah pencerminan terhadap garis \(x=h\) dan \(T_{x=k}\) adalah pencerminan terhadap garis \(x=k\), maka \(T_{x=k} \circ T_{x=h}=\begin{pmatrix}2(k-h) \\0 \end{pmatrix} \) <br>
  Agar lebih memahami bagaimana komposisi pencerminan terhadap dua sumbu sejajar perhatikan contoh berikut.
</ol>
  <div class="row pt-2 justify-content-center">
  <div class="col-md border">
    <div class="badge bg-primary text-wrap fs-6" style="width: 8rem"><b> CONTOH 6.4 </b></div>
      <br />
      <p class="fst-italic">
        Tentukan bayangan titik \(P(3,4)\) jika dicerminkan terhadap garis \(x=1\), kemudian dilanjutkan pada pencerninan terhadap garis \(x=4\).
      </p>
      <b>JAWABAN:</b> <br />
      <p>
        Karena yang melanjutkan adalah pencerminan terhadap garis \(x=4\), maka \(T_{x=4}\) ditulis disebelah kiri <br>
        \(\begin{align} T_{x=4}  \circ  T_{x=1}&=\begin{pmatrix}2(4-1) \\0 \end{pmatrix} \\ &=\begin{pmatrix}6 \\0 \end{pmatrix} \end{align}\) <br>
        \(\begin{align} T_{x=4} \circ T_{x=1} &= \begin{pmatrix} 6\\0 \end{pmatrix} \\ (3,4) \to (3+6, 4+0) &=(9,4) \end{align}\) <br>
        Jadi, bayangan titik \(P(3,4)\) adalah \(P'(9,4)\).
      </p>
  </div>
</div>
<div class="row pt-2 justify-content-center">
  <div class="col-md border">
    <div class="badge bg-primary text-wrap fs-6" style="width: 8rem"><b> CONTOH 6.5 </b></div>
      <br />
      <p class="fst-italic">
        Tentukan bayangan titik \(P(2,1)\) pada pencerminan berturut-turut terhadap garis \(y=5\) yang kemudian diteruskan pada pencerminan terhadap garis \(y=3\)
      </p>
      <b>JAWABAN:</b> <br />
      <p>
        Karena yang melanjutkan adalah pencerminan terhadap garis \(y=3\), maka \(T_{y=3}\) ditulis disebelah kiri <br>
        \(\begin{align} T_{y=3}  \circ  T_{y=5}&=\begin{pmatrix}0 \\2(3-5) \end{pmatrix} \\ &=\begin{pmatrix} 0\\-4 \end{pmatrix} \end{align}\) <br>
        \(\begin{align} T_{y=3} \circ T_{y=5} &= \begin{pmatrix} 0\\-4 \end{pmatrix} \\ (2,1) \to (2+0, 1-4) &=(2,-3) \end{align}\) <br>
        Jadi, bayangan titik \(P(2,1)\) adalah \(P'(2,-3)\).
      </p>
  </div>
</div>
<br>
  <ol start="3" type="a">
    <li>Komposisi Dua Rotasi Terhadap Pusat yang Sama</li>
  Jika \(R_{\alpha}\) dan \(R_{\beta}\) berturut-turut menyatakan rotasi sebesar \(\alpha\) dan \(\beta\) dengan pusat \(O\), maka \(R_{\alpha} \circ R_{\beta} = R_{\alpha + \beta} \).
  Agar lebih memahami bagaimana komposisi dua rotasi terhadap pusat yang sama, perhatikan contoh berikut ini.
  </ol>
  <div class="row pt-2 justify-content-center">
  <div class="col-md border">
    <div class="badge bg-primary text-wrap fs-6" style="width: 8rem"><b> CONTOH 6.6 </b></div>
      <br />
      <p class="fst-italic">
        Tentukan bayangan titik \(P(2,4)\) jika diputar berturut-turut \(30^{\circ}\) dan \(60^{\circ} \) dengan pusat \(O\)
      </p>
      <b>JAWABAN:</b> <br />
      <p>
        \(R_{60^{\circ}} \circ R_{30^{\circ}}=R_{90^{\circ}}:(2,4) \to (x',y') \) dengan :<br>
        \(\begin{align}
        x'&=2 \cos 90^{\circ}-4 \sin 90^{\circ}\\ &= 2.0-4.1 \\&=-4
        \end{align}\) <br>
        \(\begin{align}
        y'&=2 \sin 90^{\circ} + 4 \cos 90^{\circ}\\ &=2.1 + 4.0 \\ &= 2
        \end{align}\) <br>
        Jadi, bayangan titik \(P(2,4)\) adalah \(P'(-4,2)\).
      </p>
  </div>
</div>
<br>

  <ol start="4" type="a">
  <li>Komposisi Refleksi Terhadap Dua Garis yang Sejajar</li>
  Pencerminan terhadap garis \(g_1\) dan \(g_2\) berturut-turut dinyatakan dengan \(T_{g_{1}} dan T_{g_{2}}\). Jika \(\alpha\) dan \(P(a,b)\) berturut-turut menyatakan sudut dan titik potong antara garis \(g_1\) dan \(g_2\), maka \( T_{g_{1}} \circ T_{g_{2}}=R_{P,2\alpha} \) <br>
  Agar lebih memahami bagaimana komposisi pencerminan terhadap dua garis yang sejajar, perhatikanlah beberapa contoh soal berikut.
</ol>
<div class="row pt-2 justify-content-center">
  <div class="col-md border">
    <div class="badge bg-primary text-wrap fs-6" style="width: 8rem"><b> CONTOH 6.7 </b></div>
      <br />
      <p class="fst-italic">
        Jika \(T_X\) menyatakan pencerminan terhadap sumbu-X dan \(T_{y=x}\) menyatakan pencerminan terhadap garis \(y=x\). Tentukan transformasi tunggal yang ekuivalen dengan \(T_X \circ T_{y=x} \)
      </p>
      <b>JAWABAN:</b> <br />
      <p>
        Titik potong sumbu-X dan garis \(y=x\) adalah \(O\). Sudut yang dibentuk \(45^{\circ}\). Karena yang pertama adalah pencerminan terhadap garis \(y = x\), berarti arah sudut dari garis \(y=x\) ke sumbu-X adalah arah negatif, dengan demikian: <br>
        <img src="{{asset('img/komposisi2.png')}}" alt="komposisi2"> <br>
        \(T_X \circ T_{y=x}=R_{O,2(45^{\circ})}=R_{90^{\circ}} \) <br>
        Jika \(\alpha =90^{\circ} \) (kedua garis saling tegak lurus), maka \(T_{g_{2}} \circ T_{g_{1}}=R_{P, 180^{\circ}}=T_{(a,b)} \)
      </p>
  </div>
</div>
<div class="row pt-2 justify-content-center">
  <div class="col-md border">
    <div class="badge bg-primary text-wrap fs-6" style="width: 8rem"><b> CONTOH 6.8 </b></div>
      <br />
      <p class="fst-italic">
        Tentukan bayangan titik \(A(3,6)\) jika dicerminkan terhadap garis \(x=5\) yang kemudian dilanjutkan pada pencerminan terhadap garis \(y=2\)
      </p>
      <b>JAWABAN:</b> <br />
      <p>
        Karena garis \(x=5\) dan \(y=2\) berpotongan dititik \((5,2)\) secara tegak lurus, maka: <br>
        \(\begin{align}
        T_{y=2} \circ T_{x=5} &=T(5,2) : (3,6) \\ &= (2.5 -3, 2.2-6) \\&= (7,-2)
        \end{align}\) <br>
        Jadi, bayangan titik \(A(3,6)\) adalah \(A'(7,-2)\)
      </p>
  </div>
</div>
<div class="row pt-2 justify-content-center">
  <div class="col-md border">
    <div class="badge bg-primary text-wrap fs-6" style="width: 8rem"><b> CONTOH 6.9 </b></div>
      <br />
      <p class="fst-italic">
        Tentukan bayangan titik \(A(5,4)\) jika dicerminkan terhadap garis \(y=2x-4\) yang kemudian dilanjutkan pada pencerminan terhadap garis \(y=-\frac{1}{2}x+1\)
      </p>
      <b>JAWABAN:</b> <br />
      <p>
        Kedua garis saling tegak lurus dan berpotongan di titik \((2,0)\), dengan demikian: <br>
        \(\begin{align}
        T_{y=-\frac{1}{2}x+1} \circ T_{y=2x-4} &=T(2,0) : (5,4) \\ &= (2(2)-5, 2(0)-4) \\&= (-1,-4)
        \end{align}\) <br>
        Jadi, bayangan titik \(A(5,4)\) adalah \(A'(-1,-4)\)
      </p>
  </div>
</div>


<!-- ol luar -->
</ol>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md border">
              <div class="badge bg-danger text-wrap fs-6" style="width: 8rem"><b> Evaluasi 6.1 </b></div>
              <ol>
                <li>Tentukan transformasi tunggal yang ekuivalen dengan pencerminan terhadap garis \(y=x\) kemudian dilanjutkan oleh pencerminan terhadap garis \(y=-x\)</li>
                <li>Tentukan transformasi tunggal yang ekuivalen dengan pencerminan terhadap garis \(y=x\) kemudian dilanjutkan oleh pencerminan terhadap garis \(x=3\) </li>
                <li>Tentukan transformasi tunggal yang ekuivalen dengan putaran terhadap \(O\) dengan sudut \(20^{\circ} \) kemudian dilanjutkan dengan sudut \(40^{\circ} \) </li>
                <li>Tentukan bayangan titik \(P(3,5)\) jika dicerminkan terhadap garis \(x+2y+3=0 \) kemudian dilanjutkan oleh pencerminan terhadap garis \(2x-y-4=0\). </li>
              </ol>
            </div>
            </div>
    </div>
</div>

</div>
  <div class="col-md-3 mt-4">
      <div class="list-group sticky-top pt-3 ">
        <a href="#" class="list-group-item list-group-item-action active" aria-current="true">
        </a>
        <a href="#" class="list-group-item list-group-item-action active" aria-current="true">
          Transformasi Geometri
        </a>
        <a href="#translasi" class="list-group-item list-group-item-action">Translasi</a>
        <a href="#refleksi" class="list-group-item list-group-item-action">Refleksi</a>
        <a href="#rotasi" class="list-group-item list-group-item-action">Rotasi</a>
        <a href="#dilatasi" class="list-group-item list-group-item-action">Dilatasi</a>
        <a href="#kurva" class="list-group-item list-group-item-action">Transformasi suatu Kurva</a>
        <a href="#komposisi" class="list-group-item list-group-item-action">Transformasi Komposisi</a>
        </div>
  </div>
</div>
</div>
</div>
<div class="container mt-4">
    <div id="disqus_thread"></div>
</div>


@endsection

