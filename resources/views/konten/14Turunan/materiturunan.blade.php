@extends('konten.14Turunan.14.template')
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
            TURUNAN FUNGSI ALJABAR
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
<!-- AWAL MATERI 1-->
<div class="row">
    <div class="col-md-4">
      <img src="{{asset('asets/turunan.png')}}" class="rounded img-thumbnail" alt="turunan" width="100%" />
    </div>
    <div class="col-md-8">
      Dalam berbagai aspek kehidupan, kita sering menemukan permasalahan yang dapat diselesaikan dengan konsep turunan fungsi. Permasalahan tersebut di antaranya seperti menentukan kecepatan sesaat suatu benda yang sedang bergerak
      (bidang fisika), menentukan laju pertumbuhan organisme (bidang biologi), menentukan pendapatan marginal (bidang ekonomi) <br />
      Untuk dapat menyelesaikan permasalahan tersebut penting untuk memahami konsep turunan fungsi. Oleh karena itu, pelajarilah materi ini dengan semangat dan antusias.
    </div>
  </div>
  <!-- AWAL MATERI 2-->
  <h3 id="materi1" class="text-primary">A. PENGERTIAN TURUNAN FUNGSI</h3>
  <p>Kalkulus sebagai cabang matematika digolongkan menjadi dua bagian utama, yaitu <i>kalkulus diferensial (turunan)</i> dan <i>kalkulus integral</i></p>
  <p>
    Dalam penerapannya, kalkulus diferensial menyediakan suatu metode dalam penelusuran kemiringan garis singgung kurva, laju perubahan nilai, pergerakan titik pada garis lurus dari kurva, serta penelusuran nilai minimum dan
    maksimum fungsi.
  </p>
  <p>Banyak kasus praktis yang melatarbelakangi definisi turunan fungsi, seperti laju pertumbuhan penduduk, laju perkembangan investasi, laju perkembangan usaha dan lain-lain.</p>
  <p>Kecepatan rata-rata merupakan perbandingan antara perubahan jarak dengan perubahan waktu atau dirumuskan dengan</p>
  $$V_{rata-rata} = \frac{\Delta s}{\Delta t} $$
  <p>Misalkan suatu fungsi \(y=f(x) \) berubah dari \(f(x_1) \) ke \(f(x_2)\) saat \(x_1\) berubah menjadi \(x_2\). \(\Delta x = x_2 - x_1 (\Delta y = f(x_2)-f(x_1)) \). Perhatikan Gambar berikut</p>
  <img src="{{asset('asets/turunan/turunan.png')}}" alt="aktivitas1" width="40%" />
  <p>Berdasarkan deskripsi pada Gambar diperoleh rumusan perubahan fungsi \(y=f(x)\) terhadap peubah bebasnya, yaitu:</p>

  <div class="row justify-content-center">
    <div class="col-md-3 border border-dark">$$\frac{\Delta y}{\Delta x}=\frac{f(x_2)-f(x_1)}{x_2-x_1} $$</div>
  </div>

  <h2>Definisi Turunan</h2>
  <p>
    Laju perubahan sesaat nilai fungsi \(f(x)\) terhadap \(x \) terjadi saat \(\Delta x \) semakin kecil. Artinya untuk \(\Delta x \) mendekati 0, maka laju perubahan sesaat nilai fungsi \(f(x) \) merupakan limit dari laju
    perubahan rata-rata yang dirumuskan:
  </p>
  <div class="row justify-content-center">
    <div class="col-md-3 border border-dark">$$\lim_{\Delta x \to 0} \frac{f(x+\Delta x)-f(x)}{\Delta x} $$</div>
  </div>
  <p>
    Perubahan sesaat nilai fungsi \(f(x) \) di atas disebut dengan <i>turunan</i> dari fungsi \(f(x) \) terhadap \(x \) dengan catatan bahwa nilai limitnya ada. <b> Joseph Louis Lagrange</b> memperkenalkan notasi untuk turunan
    fungsi \(f \) adalah \(f' \). Sementara <b>Gottfried Wilhelm von Leibniz</b> memperkenalkan notasi lain dari turunan \(y=f(x) \) sebagai \(\displaystyle \frac{dy}{dx} \) atau \(\frac{df(x)}{dx} \), sehingga dapat diambil
    kesimpulan sebagai berikut
  </p>
  <div class="row justify-content-center">
    <div class="col-md-7 border border-dark text-center">Turunan fungsi \(f(x)\) terhadap \(x\) adalah $$f'(x)=\frac{df(x)}{dx}=y'=\frac{dy}{dx}=\lim_{\Delta x \to 0} \frac{f(x+\Delta x)-f(x)}{\Delta x} $$</div>
  </div>
  <p>Untuk \(\Delta x=h\) maka rumus turunan fungsi \(f(x)\) adalah</p>
  <div class="row justify-content-center">
    <div class="col-md-3 border border-dark">$$f'(x)=\lim_{h \to 0} \frac{f(x+h)-f(x)}{h} $$</div>
  </div>
  <p>Dari uraian di atas, diperoleh definisiturunan suatu fungsi di suatu titik sebagai berikut</p>
  <div class="row justify-content-center">
    <div class="col-md-7 border border-dark">
      <p>Misal \(f\) kontinu di \(x=a\). Turunan fungsi \(f(x)\) di \(x=a\) adalah fungsi yang nilainya diberikan oleh</p>
      $$f'(a)=\lim_{h \to 0} \frac{f(a+h)-f(a)}{h} $$
    </div>
  </div>
  <hr />
  <!-- contoh mulai -->
  <div class="row justify-content-center mt-3">
    <div class="col-md-9 border">
      <div class="badge bg-primary text-wrap fs-6" style="width: 8rem">Contoh 01</div>
      <p>Tentukan \(f'(3)\) untuk setiap fungsi berikut!</p>
      <ol type="a">
        <li>\(f(x)=5x-4\)</li>
        <li>\(f(x)=x^2+3x+4\)</li>
      </ol>
      <p><b>JAWAB</b></p>
      <div class="overflow-auto">
        <p>Gunakan aturan \(f'(a)=\lim_{h \to 0} \frac{f(a+h)-f(a)}{h}\)</p>
        <p>
          \(\displaystyle \begin{align} a.\:\: f(x) &= 5x-4 \\ f'(3)&=\lim_{h \to 0} \frac{f(3+h)-f(3)}{h} \\ &= \lim_{h \to 0} \frac{5(3+h)-4-(5(3)-4)}{h} \\ &= \lim_{h \to 0} \frac{5h}{h} \\ &= \lim_{h \to 0} 5 \\ &= 5 \\
          \end{align}\)
        </p>
        <p>\(\text{Jadi, }f'(3)=5\)</p>
        <br />
        <p>
          \(\displaystyle \begin{align} b. \:\: f(x) &= x^2+3x+4 \\ f'(3) &= \lim_{h \to 0} \frac{f(3+h)-f(3)}{h} \\ &= \lim_{h \to 0} \frac{(3+h)^2 + 3(3+h)+4-((3)^2+3(3+4))}{h}\\ &= \lim_{h \to 0} \frac{9h+h^2}{h}\\ &= \lim_{h
          \to 0} 9+h\\ &= 9\\ \end{align}\)
        </p>
        <p>\(\text{Jadi, }f'(3) = 9\)</p>
      </div>
    </div>
  </div>
  <!-- contoh end -->
  <hr />
  <!-- contoh mulai -->
  <div class="row justify-content-center mt-3">
    <div class="col-md-9 border">
      <div class="badge bg-primary text-wrap fs-6" style="width: 8rem">Contoh 02</div>
      <p>Suatu benda bergerak sepanjang garis lurus. Panjang lintasannya \(s\) meter pada waktu \(t\) detik ditentukan oleh rumus \(s(t)=5-6t+2t^2\)</p>
      <ol type="a">
        <li>Tentukan panjang lintasan setelah \(t=1\) dan \(t=3\)</li>
        <li>Tentukan kecepatan rata-rata untuk antara \(t=1\) dan \(t=3\)</li>
        <li>Tentukan \(t\) jika kecepatannya nol</li>
      </ol>
      <p><b>JAWAB</b></p>
      <div class="overflow-auto">
        <ol type="a">
          <li>Panjang lintasan</li>
          <p>\(t=1 \to s(1)=5 -6(1)+2(1)^2= 1 \text{ meter} \)</p>
          <p>\(t=3 \to s(3)=5 -6(3)+2(3)^2= 5 \text{ meter} \)</p>
          <li>Kecepatan rata-rata</li>
          <p>\(\displaystyle \begin{align} \bar{V} &= \frac{s(t_2)-s(t_1)}{t_2 - t_1} \\ &= \frac{s(3)-s(1)}{t_2 - t_1} \\ &= \frac{5m - 1m}{3s - 1s} \\ &= \frac{4m}{2s} \\ &= 2 m/s \\ \end{align}\)</p>
          <li>\(v=s'(t)=0\)</li>
          <p>
            \(\displaystyle \begin{align} s(t)&=5-6t+2t^2 \\\\ s'(t) &= \lim_{h \to 0} \frac{s(t+h)-s(t)}{h} \\ &= \lim_{h \to 0} \frac{5-6(t+h)+2(t+h)^2-(5-6t+2t^2)}{h} \\ &= \lim_{h \to 0}
            \frac{5-6t+6h+2(t^2+2th+h^2)-5+6t-2t^2}{h} \\ &= \lim_{h \to 0} \frac{5-6t+6h+2t^2+4th+2h^2-5+6t-2t^2}{h} \\ &= \lim_{h \to 0} \frac{6h+4th+2h^2}{h} \\ &= \lim_{h \to 0} \frac{h(6+4t+2h}{h} \\ &= \lim_{h \to 0} 6+4t+2h
            \\ &= 6+4t+2(0) \\ s'(t)&= 6+4t \\\\ \end{align}\) \(\displaystyle \begin{align} \text{karena }\\ s'(t)=v(t)=0 \\ \text{maka }\\ 6+4t&=0\\ 4t &= -6\\ t &= \frac{-6}{4}\\ &= \frac{-3}{2} \end{align}\)
          </p>
          <p>Jadi nilai \(t\) jika kecepatannya nol adalah \(\displaystyle -\frac{3}{2}\)</p>
        </ol>
      </div>
    </div>
  </div>
  <!-- contoh end -->
  <hr />
  <div class="row justify-content-center mt-3" id="materi2">
    <div class="col-md-9 border">
      <div class="badge bg-danger text-wrap fs-6" style="width: 8rem">LATIHAN 01</div>
      <ol>
        <li>Sebuah mobil bergerak sepanjang sepanjang lintasan yang berbentuk garis lurus dengan persamaan \(s(t)=2t^2 +3t\). Tentukan kecepatan rata-rata mobil tersebut dalam interval berikut.</li>
        <ol type="a">
          <li>\(t=1\) detik sampai \(t=3\) detik</li>
          <li>\(t=0\) detik sampai \(t=5\) detik</li>
          <li>\(t=2\) detik sampai \(t=4\) detik</li>
          <li>\(t=3\) detik sampai \(t=6\) detik</li>
        </ol>
        <li>Posisi suatu benda yang sedang bergerak sepanjang kurva yang dirumuskan oleh \(s(t) = t^2-t+3. Tentukan kecepatan sesaat benda tersebut saat</li>
        <ol type="a">
          <li>\(t=2\) detik</li>
          <li>\(t=3\) detik</li>
          <li>\(t=4\) detik</li>
          <li>\(t=5\) detik</li>
        </ol>
        <li>Tentukan rumus \(f'(x)\) dari fungsi-fungsi dibawah ini, kemudian tentukan nilainya untuk \(x\) yang disebutkan!</li>
        <ol type="a">
          <li>\(f(x)=2x, \text{ pada } x=3\)</li>
          <li>\(f(x)=3x-1, \text{ pada } x=1\)</li>
          <li>\(f(x)=\frac{4}{x}, \text{ pada } x=2\)</li>
          <li>\(f(x)=\sqrt{x+1}, \text{ pada } x=3\)</li>
          <li>\(f(x)=\frac{1}{2\sqrt{x}}, \text{ pada } x=9\)</li>
          <li>\(f(x)=x^3-3x, \text{ pada } x=2\)</li>
        </ol>
        <li>Diberikan \(\frac{1}{3}x^3 -2x^2 - 4 \) Tentukan nilai \(a\) jika:</li>
        <ol type="a">
          <li>\(f'(a)=0\)</li>
          <li>\(f'(a)=-4\)</li>
          <li>\(f'(a)=5\)</li>
          <li>\(f'(a)=-3\)</li>
        </ol>
        <li>Jika diketahui \(f(x)=\frac{1}{3}x^3-3x^2+8x+4 \), maka tentukan nilai \(x\) yang memenuhi:</li>
        <ol type="a">
          <li>\(\displaystyle \lim_{h \to 0} \frac{f(x+h)-f(x)}{h}=3\)</li>
          <li>\(\displaystyle \lim_{h \to 0} \frac{f(x+h)-f(x)}{h} \leq 0\)</li>
        </ol>
      </ol>
    </div>

  </div>
  <br />
  <hr />

  <h3 class="text-primary" id="materi3">B. TURUNAN FUNGSI KONSTAN</h3>
  <p>Misal \(f\) adalah fungsi konstan yang ditentukan oleh \(f(x)=k\) dengan \(k\) adalah konstanta real, maka</p>
  <p>\(\displaystyle f'(x)=\lim_{h \to 0} \frac{f(x+h)-f(x)}{h}=f'(a)=\lim_{h \to 0} \frac{k-k}{h}=f'(a)=\lim_{h \to 0} 0 = 0 \)</p>
  <p>Dari uraian tersebut diperoleh kesimpulan berikut.</p>
  <div class="row justify-content-center">
    <div class="col-6 border border-danger rounded-2 text-center text-center">
      <p>Jika \(f(x)=k\) dengan \(k\) konstanta real, maka \(f'(x)=0\)</p>
    </div>
  </div>
  <h3 class="text-primary" id="materi4">C. TURUNAN FUNGSI PANGKAT</h3>
  <p>Misal \(f\) adalah fungsi pangkat yang ditentukan oleh \(f(x)=x^n\) dengan \(n\) bilangan bulat positif. Jika digunakan penjabaran binom Newton, maka turunan \(f(x=x^n) \) adalah</p>
  $$ \begin{align} f'(x) &=\lim_{h \to 0} \frac{f(x+h)-f(x)}{h} \\ &=\lim_{h \to 0} \frac{(x+h)^n-x^n}{h} \\ &=\lim_{h \to 0} \frac{\left( x^n+nx^{n-1}h + \frac{n(n-1)}{2}x^{n-2}h^2 + ... + nxh^{n-1}+h^n \right)-x^n}{h} \\
  &=\lim_{h \to 0} \frac{h\left( nx^{n-1} + \frac{n(n-1)}{2}x^{n-2}h + ... + nxh^{n-2}+h^{n-1} \right)}{h} \\ &=\lim_{h \to 0} nx^{n-1}+\frac{\frac{n(n-1)}{2}x^{n-2}h+...+nxh^{n-2}+h^{n-1}}{h} \\ &= nx^{n-1} \end{align}$$
  <p>Dari penjabaran tersebut, diperoleh kesimpulan turunan fungsi pangkat sebagai berikut</p>
  <div class="row justify-content-center">
    <div class="col-md-8 border border-danger rounded-2 text-center">
      <p>Jika \(f(x)=x^n\) dengan \(n\) bilangan bulat positif maka, \(f'(x)=nx^{n-1} \)</p>
    </div>
  </div>
  <p>Sebagai konsekuensi rumus di atas, maka dapat dinyatakan sebagai berikut</p>
  <div class="row justify-content-center">
    <div class="col-md-8 border border-danger rounded-2 text-center">
      <p>Jika \(f(x)=ax^n\) dengan \(n\) bilangan bulat positif dan \(a\) konstanta real maka, \(f'(x)=anx^{n-1} \)</p>
    </div>
  </div>
  <p>Rumus turuunan fungsi pangkat yang telah kita pelajari tersebut berlaku juga unutk \(n\) bilangan bulat negatif dan \(n \) bilangan rasional.</p>
  <!-- contoh mulai -->
  <div class="row justify-content-center mt-3">
    <div class="col-md-9 border">
      <div class="badge bg-primary text-wrap fs-6" style="width: 8rem">Contoh 03</div>
      <p>Tentukan turunan dari fungsi-fungsi berikut!</p>
      <div class="row">
        <div class="col">
          <ol type="a">
            <li>\(f(x)=3\)</li>
            <li>\(f(x)=x^5\)</li>
          </ol>
        </div>
        <div class="col">
          <ol type="a" start="3">
            <li>\(f(x)=2x^3\)</li>
            <li>\(f(x)=-4x^7\)</li>
          </ol>
        </div>
      </div>
      <p><b>JAWAB</b></p>
      <div class="overflow-auto">
        <p>Dengan menggunakan rumus turunan fungsi konstan dan fungsi pangkat diperoleh:</p>
        <ol type="a">
          <li>Jika \(f(x)=3\), maka \(f'(x)=0\)</li>
          <li>Jika \(f(x)=x^5\), maka \(f'(x)=5x^4\)</li>
          <li>Jika \(f(x)=2x^3\), maka \(f'(x)=6x^2\)</li>
          <li>Jika \(f(x)=-4x^7\), maka \(f'(x)=-28x^6\)</li>
        </ol>
      </div>
    </div>
  </div>
  <!-- contoh end -->
  <h3 class="text-primary" id="materi5">C. TURUNAN JUMLAH DAN SELISIH FUNGSI ALJABAR</h3>
  <p>Misalnya \(f(x)=u(x)+v(x) \) dengan fungsi \(u(x) \) dan \(v(x)\) terturunkan, maka</p>
  <p>
    \(\displaystyle \begin{align} f'(x) &= \lim_{h \to 0} \frac{f(x+h)-f(x)}{h} \\ &= \lim_{h \to 0} \frac{[u(x+h)+v(x+h)]-[u(x)+v(x)]}{h} \\ &= \lim_{h \to 0} \left(\frac{[u(x+h)-u(x)]}{h}+ \frac{[v(x+h)-v(x)]}{h}\right) \\ &=
    \lim_{h \to 0} \frac{[u(x+h)-u(x)]}{h}+ \lim_{h \to 0}\frac{[v(x+h)-v(x)]}{h} \\ &= u'(x)+v'(x) \end{align}\)
  </p>
  <p>Dengan melakukan cara yang sama, dapat ditunjukkan bahwa turunan fungsi \(f(x)=u(x)-v(x) \) adalah \(f'(x)=u'(x)-v'(x) \)</p>
  <p>Dari uraian tersebut diperoleh kesimpulan berikut.</p>
  <div class="row justify-content-center">
    <div class="col-md-8 border border-danger rounded-2 text-center">
      <p>Jika \(f(x)=u(x)\pm v(x)\) dengan \(u(x)\) dan \(v(x)\) terturunkan maka, \(f'(x)=u'(x) \pm v'(x) \)</p>
    </div>
  </div>
  <!-- contoh mulai -->
  <div class="row justify-content-center mt-3">
    <div class="col-md-9 border">
      <div class="badge bg-primary text-wrap fs-6" style="width: 8rem">Contoh 04</div>
      <p>Tentukan turunan dari fungsi-fungsi berikut!</p>
      <div class="row">
        <div class="col">
          <ol type="a">
            <li>\(f(x)=3x^4-2x^3+x-2\)</li>
          </ol>
        </div>
        <div class="col">
          <ol type="a" start="2">
            <li>\(f(x)=(x+3)^2\)</li>
          </ol>
        </div>
      </div>
      <p><b>JAWAB</b></p>
      <div class="overflow-auto">
        <ol type="a">
          <li>\(f(x)=3x^4-2x^3+x-2\)</li>
          <p>\(\displaystyle \begin{align} f'(x) &= (4)3x^{4-1}-(3)2x^{3-1}+(1)x^{1-1}-0 \\ &=12x^3-6x^2+1 \end{align}\)</p>
          <p>Jadi, turunan dari \(f(x)=3x^4-2x^3+x-2\) adalah \(12x^3-6x^2+1\)</p>
          <li>\(f(x)=(x+3)^2\)</li>
          <p>\(\displaystyle \begin{align} f(x)&=(x+3)(x+3)\\ &= x^2+6x+9 \\\\ f'(x)&=(2)x^{2-1}+(1)6x^{1-1}+0\\ &= 2x+6 \end{align}\)</p>
          <p>Jadi, turunan dari \(f(x)=(x+3)^2\) adalah \(f'(x)=2x+6\)</p>
        </ol>
      </div>
    </div>
  </div>
  <!-- contoh end -->

  <h3 class="text-primary" id="materi6">D. TURUNAN HASIL KALI DAN BAGI FUNGSI ALJABAR</h3>
  <p>Pada pembahasan kali ini, kita akan mempelajari aturan turunan dari hasil kali fungsi dan hasil bagi fungsi. Jika \(f(x)=u(x) \cdot v(x)\), maka turunannya adalah . . .</p>
  <div class="overflow-auto">
    <p>
      \(\displaystyle \begin{align} f'(x) &= \lim_{h \to 0} \frac{f(x+h)-f(x)}{h} \\ &= \lim_{h \to 0} \frac{u(x+h) \cdot v(x+h)-u(x)\cdot v(x)}{h} \\ &= \lim_{h \to 0} \frac{u(x+h) \cdot v(x+h)-u(x+h) \cdot v(x)+u(x+h) \cdot v(x)
      -u(x)\cdot v(x)}{h} \\ &= \lim_{h \to 0} \left(u(x+h) \cdot \frac{v(x+h)-v(x)}{h}+v(x) \cdot \frac{u(x+h)-u(x)}{h} \right) \\ &= \lim_{h \to 0} u(x+h) \cdot \lim_{h \to 0}\frac{v(x+h)-v(x)}{h}+\lim_{h \to 0}v(x) \cdot
      \lim_{h \to 0}\frac{u(x+h)-u(x)}{h} \\ &= u(x) \cdot v'(x)+v(x) \cdot u'(x)\\ &= u'(x) \cdot v(x)+u(x) \cdot v'(x) \end{align}\)
    </p>
  </div>
  <p>Dari uraian tersebut, diperoleh kesimpulan berikut.</p>
  <div class="row justify-content-center">
    <div class="col-md-8 border border-danger rounded-2 text-center">
      <p>Jika \(f(x)=u(x) \cdot v(x)\) dengan \(u(x)\) dan \(v(x)\) mempunyai turunan di \(x\), maka \(f'(x)=u'(x) \cdot v(x)+u(x) \cdot v'(x) \)</p>
    </div>
  </div>
  <!-- contoh mulai -->
  <div class="row justify-content-center mt-3">
    <div class="col-md-9 border">
      <div class="badge bg-primary text-wrap fs-6" style="width: 8rem">Contoh 05</div>
      <p>Tentukan turunan dari fungsi berikut!</p>
      <p>\(f(x)=(2x^3-1)(4x^2-5x) \)</p>
      <p><b>JAWAB</b></p>
      <div class="overflow-auto">
        <p>\(f(x)=(2x^3-1)(4x^2-5x) \)</p>
        <p>Misalkan</p>
        <p>\(\displaystyle \begin{align} u(x) &=2x^3-1, \text{ maka } u'(x)=6x^2 \\ v(x) &=4x^2-5x, \text{ maka } v'(x)=8x-5 \end{align}\)</p>
        <p>Sehingga</p>
        <p>\(\displaystyle \begin{align} f'(x) &= u'(x) \cdot v(x)+u(x) \cdot v'(x) \\ &= 6x^2(4x^2-5x)+(2x^3-1)(8x-5) \\ &= 24x^4 - 30x^3+16x^4-10x^3-8x+5 \\ &= 40x^4-40x^3-8x+5 \end{align}\)</p>
        <p>Jadi, turunan dari \(f(x)=(2x^3-1)(4x^2-5x) \) adalah \(f'(x)=40x^4-40x^3-8x+5\)</p>
      </div>
    </div>
  </div>
  <!-- contoh end -->
  <p>Selanjutnya, jika \(\displaystyle f(x)=\frac{u(x)}{v(x)} \) dengan fungsi-fungsi \(u(x)\) dan \(v(x)\) mempunyai turunan di \(x\) serta \(v(x) \neq 0\), maka</p>
  <div class="overflow-auto">
    <p>
      \(\displaystyle \begin{align} f'(x) &= \lim_{h \to 0} \frac{f(x+h)-f(x)}{h} \\ &= \lim_{h \to 0} \frac{\frac{u(x+h)}{v(x+h)}-\frac{u(x)}{v(x)}}{h} \\ &= \lim_{h \to 0} \frac{u(x+h)v(x)-u(x)v(x+h)}{v(x+h)v(x)h} \\ &= \lim_{h
      \to 0} \frac{u(x+h)v(x)-u(x)v(x)+u(x)v(x)-u(x)v(x+h)}{v(x+h)v(x)h} \\ &= \lim_{h \to 0} \left(v(x) \frac{u(x+h)-u(x)}{h} -u(x) \frac{v(x+h)-v(x)}{h} \right). \lim_{h \to 0} \frac{1}{v(x+h)v(x)} \\ &= \left(\lim_{h \to 0}
      v(x). \lim_{h \to 0}\frac{u(x+h)-u(x)}{h} -\lim_{h \to 0}u(x).\lim_{h \to 0} \frac{v(x+h)-v(x)}{h} \right). \frac{1}{v^2 (x)} \\ &= \frac{1}{v^2(x)} \left(v(x)u'(x)-u(x)v'(x) \right)\\&= \frac{u'(x)v(x)-u(x)v'(x)}{v^2 (x)}
      \end{align}\)
    </p>
  </div>
  <p>Dari uraian tersebut, diperoleh kesimpulan berikut.</p>
  <div class="row justify-content-center">
    <div class="col-md-8 border border-danger rounded-2 text-center overflow-auto">
      <p>Jika \(\displaystyle f(x)=\frac{u(x)}{v(x)} \) dengan fungsi-fungsi \(u(x)\) dan \(v(x)\) dapat diturunkan serta, \(v(x) \neq 0 \), maka \(\displaystyle f'(x)\frac{u'(x)v(x)-u(x)v'(x)}{v^2(x)}\)</p>
    </div>
  </div>

  <!-- contoh mulai -->
  <div class="row justify-content-center mt-3">
    <div class="col-md-9 border">
      <div class="badge bg-primary text-wrap fs-6" style="width: 8rem">Contoh 06</div>
      <p>Tentukan turunan dari fungsi-fungsi berikut!</p>
      <p>\(f(x)= \frac{3x^2-2x}{x+3} \)</p>
      <p><b>JAWAB</b></p>
      <div class="overflow-auto">
        <p>\(f(x)= \frac{3x^2-2x}{x+3} \)</p>
        <p>Misalkan</p>
        <p>\(\displaystyle \begin{align} u(x) &= 3x^2-2x, \: \text{ maka } u'(x)=6x-2 \\ v(x) &= x+3, \: \text{ maka } v'(x)=1 \\ \end{align}\)</p>
        <p>\(\displaystyle \begin{align} f'(x) &= \frac{u'(x)v(x)-u(x)v'(x)}{(v(x))^2} \\ &= \frac{(6x-2)(x+3)-(3x^2 - 2x).1}{(x+3)^2}\\ &= \frac{6x^2 +18x-2x-6-3x^2+2x}{(x+3)^2}\\ &= \frac{3x^2+18x-6}{(x+3)^2}\\ \end{align}\)</p>
        <p>Jadi, turunan dari \(\displaystyle f(x)=\frac{3x^2-2x}{x+3}\) adalah \(\displaystyle f'(x)=\frac{3x^2+18x-6}{(x+3)^2}\)</p>
      </div>
    </div>
  </div>
  <!-- contoh end -->
  <p>Dari uraian tersebut diperoleh kesimpulan tentang turunan fungsi aljabar sebagai berikut.</p>
  <div class="row">
    <div class="col border border-dark rounded-2 bg-primary text-light">
      <ol>
        <li>Jika \(f(x)=k \), maka \(f'(x)=0 \)</li>
        <li>Jika \(f(x)=x^n \), maka \(f'(x)=nx^{n-1} \)</li>
        <li>Jika \(f(x)=ax^n \), maka \(f'(x)=anx^{n-1} \)</li>
        <li>Jika \(f(x)=u(x) \pm v(x) \), maka \(f'(x)=u'(x) \pm v'(x) \)</li>
        <li>Jika \(f(x)=u(x).v(x) \), maka \(f'(x)=u'(x)v(x)+u(x)v'(x) \)</li>
        <li>Jika \(\displaystyle f(x)= \frac{u(x)}{v(x)} \), maka \(\displaystyle f'(x)=\frac{u'(x)v(x)-u(x)v'(x)}{(v(x))^2} \) dengan \(v(x) \neq 0\)</li>
      </ol>
    </div>
  </div>
<!-- ==============================LATIHAN============================================= -->
<div class="row justify-content-center mt-3" id="materi7">
  <div class="col-md-9 border">
    <div class="badge bg-danger text-wrap fs-6" style="width: 8rem">LATIHAN 02</div>
    <ol>
      <li>Tentukan turunan dari fungsi-fungsi berikut!</li>
      <div class="row">
        <div class="col-sm">
          <ol type="a">
            <li>\(f(x)=2 \)</li>
            <li>\(f(x)=107 \)</li>
            <li>\(f(x)=2x \)</li>
            <li>\(f(x)=4x-3 \)</li>
          </ol>
        </div>
        <div class="col-sm">
          <ol type="a" start="5">
            <li>\(f(x)=x^4 \)</li>
            <li>\(f(x)=3x^4 + 2x^2 +5 \)</li>
            <li>\(f(x)=x^9 - 3x^2 +2 \)</li>
            <li>\(\displaystyle f(x)=\frac{1}{3}x^3 + 2x^2 +6 \)</li>
          </ol>
        </div>
      </div>
      <li>Tentukan turunan dari fungsi-fungsi berikut!</li>
      <div class="row">
        <div class="col">
          <ol type="a">
            <li>\(f(x)=5(x^2+3x+2)\)</li>
            <li>\(f(x)=3(x+2)^2\)</li>
            <li>\(f(x)=(7-3x)^2\)</li>
            <li>\(f(x)=(x^2-3x)(2x+5)\)</li>
          </ol>
        </div>
        <div class="col">
          <ol type="a" start="5">
            <li>\(f(x)=(3x^4+5x^2-7)(2x^2-3) \)</li>
            <li>\(\displaystyle f(x)=\frac{2x-1}{3x+1} \)</li>
            <li>\(\displaystyle f(x)=\frac{x^3+5x^2-4}{2x-3} \)</li>
            <li>\(f(x)=(2x-1)^5\)</li>
          </ol>
        </div>
      </div>
      <li>Tentukan nilai \(x\) dari persamaan berikut!</li>
      <ol type="a">
        <li>\(f(x)=-7(x^4-3x^2-2) \to f'(x)=0 \)</li>
        <li>\(\displaystyle f(x)=\frac{2}{3}x^3 - \frac{3}{2}x^2 - 2x + \frac{1}{5} \to f'(x)=3 \)</li>
      </ol>
      <li>Tentukan batas nilai \(x\) dari pertidaksamaan berikut!</li>
      <ol type="a">
        <li>\(f(x)=x^3-2x^2+x-2 \to f'(x) < 0\)</li>
        <li>\(\displaystyle f(x)=\frac{1}{3}x^3- \frac{7}{2}x^2-6x-2 \to f'(x)\geq 0\)</li>
      </ol>
      <li>Rusuk sebuah kubus \((x)\) melaju \(2\) cm per satuan waktu \((t) \). Tentukan laju volume kubus tersebut saat rusuknya \(3\) cm!</li>
    </ol>
  </div>
</div>
<!-- ==============================LATIHAN============================================= -->
<br>
<h3 class="text-primary" id="materi8">E. PERSAMAAN GARIS SINGGUNG PADA KURVA</h3>
<p>Perhatikan gambar dibawah. Diketahui grafik fungsi \(y=f(x) \) dengan \(P(x,f(x))\) dan \(Q(x+h,f(x+h))\) merupakan dua titik pada kurva. Garis yang melalui \(PQ\) disebut <i>tali busur</i> dengan kemiringan (gradien) </p>
$$m_{PQ}=\frac{f(x+h)-f(x)}{h}$$
    <img src="{{asset('asets/turunan/persamaan_garis_singgung_pada_kurva_menggunakan_turunan.PNG')}}" alt="PersamaanGarisSinggung">
<p>Jika \(h\) mendekati nol, \(h \to 0\) maka gradien garis \(PQ\) mendekati gradien garis singgung kurva di titik \(P\), sehingga gradien garis singgung </p>
$$m= \lim_{h \to 0} m_{PQ}=\lim_{h \to 0} \frac{f(x+h)-f(x)}{h}=f'(x)$$
<p>Persamaan garis melalui titik \((a,b) \) dengan gradien garis \(m\) adalah \(y-b=m(x-a)\), sehingga dengan \(m=f'(x)\) persamaan garis tersebut dapat ditulis sebagai \(y-b=f'(x)(x-a)\)</p>
<p>Dari uraian di atas diperoleh kesimpulan berikut</p>
<p>Misalnya fungsi \(f\) kontinu dengan titik \((a,b)\) terletak pada kurva fungsi \(f(x)\). Persamaan garis singgung kurva fungsi \(f(x)\) di titik \((a,b)\) diberikan oleh </p>
$$y-b=f'(x)(x-a)$$
<p>Misalnya diberikan dua buah garis \(y=m_1 x+n_1\) dan \(y=m_2 x+n_2\) dengan \(m_1\) dan \(m_2\) berturut-turut menyatakan gradien garis pertama dan gradien garis kedua.</p>
<p>Dua buah garisdikatakan <i>sejajar</i> jika gradien kedua garis tersebut adalah sama, yaitu \(m_1 = m_2 \). Sedangkan dua buah garis dikatakan saling <i>tegak lurus</i> jika hasil kali gradien kedua garis tersebut sama dengan \(-1\), yaitu \(m_1 . m_2 = -1\)</p>

<!-- contoh mulai -->
<div class="row justify-content-center mt-3">
  <div class="col-md-9 border">
    <div class="badge bg-primary text-wrap fs-6" style="width: 8rem">Contoh 07</div>
    <div class="row">
      <div class="col">
        <p>Tentukan persamaan garis singgung kurva \(f(x)=x^2 + 1 \) yang melalui titik \((2,5)\)!</p>
        <p><b>JAWAB</b></p>
        <div class="overflow-auto">
        <p> Dari \(f(x)=x^2+1 \) diperoleh \(f'(x)=2x \) Gradien garis singgung kurva di \((2,5) \) adalah \(m=f'(2)=2.2=4 \)</p>
        <p>Persamaan garis singgung kurva \(f(x)=x^2 +1 \) melalui titik \((2,5)\) adalah </p>
        <p>\(\displaystyle \begin{align}
          y-5&=4(x-2)\\
          y &= 4x-3
          \end{align}\)</p>
          <p>Jadi, persamaan garis singgung kurva \(f(x)=x^2 +1\) di titik \((2,5)\) adalah \(y=4x-3\) </p>
        </div>
      </div>
      <div class="col">
        <img src="{{asset('asets/turunan/turunan_contoh7.png')}}" alt="contoh7" width="80%">
      </div>
    </div>
  </div>
</div>
<!-- contoh end -->
<!-- contoh mulai -->
<div class="row justify-content-center mt-3">
  <div class="col-md-9 border">
    <div class="badge bg-primary text-wrap fs-6" style="width: 8rem">Contoh 08</div>
    <div class="row">
      <div class="col">
        <p>Tentukan persamaan garis singgung kurva \(f(x)=x^2 -3x-4 \) yang mempunyai gradien \(m=3\)!</p>
        <p><b>JAWAB</b></p>
        <div class="overflow-auto">
          <p> Dari \(f(x)=x^2 -3x-4 \) diperoleh \(f'(x)=2x-3 \) </p>
        <p>gradien garis singgung kurva \(f(x) \) di titik \((x_1,y_1) \) adalah</p>
        <p>\(\displaystyle \begin{align}
          m&=f'(x_1)\\
          f'(x_1) &= 2x_1 -3 \\
          3 &= 2x_1 - 3 \\
          6 &= 2x_1 \\
          x_1 &= \frac{6}{2} \\
          x_1 &= 3
          \end{align}\)</p>
          <p>Substitusi nilai \(x_1 =3 \) ke \(f(x)=x^2-3x-4 \) sehingga diperoleh</p>
          <p>\(\displaystyle \begin{align}
            y_1 &= (x_1)^2 - 3x_1 -4 \\
            &=(3)^2-3(3)-4\\
            &= 9 -9-4 \\
            &= -4
            \end{align}\)</p>
            <p>Garis singgung tersebut melalui titik \((3,-4) \)</p>
            <p>Persamaan garis singgung kurva \(f(x)=x^2 -3x-4 \) melalui titik \((3,-4)\) dengan gradien \(m=3\) adalah</p>
            <p>\(\displaystyle \begin{align}
              y-y_1 &= m (x-x_1)\\
              y-(-4) &= 3(x-3) \\
              y &= 3x-9-4 \\
              y &= 3x-13
              \end{align}\)</p>
              <p>Jadi persamaan garis singgung yang dimaksud adalah \(y=3x-13\)</p>
            </div>
      </div>
      <div class="col">
        <img src="{{asset('asets/turunan/turunan_contoh8.png')}}" alt="contoh7" width="100%">
      </div>
    </div>
  </div>
</div>
<!-- contoh end -->
<!-- contoh mulai -->
<div class="row justify-content-center mt-3">
  <div class="col-md-9 border">
    <div class="badge bg-primary text-wrap fs-6" style="width: 8rem">Contoh 09</div>
    <div class="row">
      <div class="col">
        <p>Diketahui garis singgung kurva \(f(x)=x^2-2x-8 \) di titik \(A\) sejajar dengan garis \(2x-y=4\)</p>
        <ol type="a">
          <li>Tentukan koodinat titik \(A\)!</li>
          <li>Tentukan persamaan garis singgung kurva dititik \(A\) tersebut!</li>
        </ol>
        <p><b>JAWAB</b></p>
          <ol>
            <li>Gradien garis singgung kurva \(f(x)=x^2-2x-8 \) adalah \(m_1 = f'(x)=2x-2 \)</li>
            <p>Garis \(2x-y=4 \) dinyatakan dalam bentuk baku menjadi \(y=2x-4\) yang berarti gradien garis tersebut adalah \(m_2 = 2\). Karena garis singgung kurva \(f(x)=x^2-2x-8\) sejajar dengan garis \(y=2x-4\), maka</p>
            <p>\(\displaystyle \begin{align}
              m_1 &= m_2 \\
              2x-2 &= 2 \\
              2x &= 4\\
              x &= 2
              \end{align}\)</p>
              <p>Substitusi \(x=2\) ke \(f(x)=x^2-2x-8\)</p>
              <p>\(\displaystyle \begin{align}
                f(2) &= (2)^2 -2(2) -8 \\
                &= 4-4-8\\
                &= -8
                \end{align}\)</p>
                <p>Jadi koordinat titik \(A\) yaitu titik yang  dilalui garis singgung adalah \((2,-8) \)</p>
                <li>Persamaan garis singgung kurva \(f(x)=x^2-2x-8 \) di titik \(A(2,-8) \) dengan gradien \(m=2\) adalah</li>
                <p>\(\displaystyle \begin{align}
                  y-y_1 &= m (x-x_1)\\
                  y-(-8) &= 2(x-2) \\
                  y &= 2x-4-8 \\
                  y&= 2x-12
                  \end{align}\)</p>
                  <p>Jadi, persamaan garis singgung kurva \(f(x)=x^2-2x-8 \) di titik \(A(2,-8)\) adalah \(y=2x-12\)</p>
          </ol>
      </div>
      <div class="col">
        <img src="{{asset('asets/turunan/turunan_contoh9.png')}}" alt="contoh9" width="80%">
      </div>
    </div>
  </div>
</div>
<!-- contoh end -->
<!-- ==============================LATIHAN============================================= -->
<div class="row justify-content-center mt-3" id="materi9">
<div class="col-md-9 border">
<div class="badge bg-danger text-wrap fs-6" style="width: 10rem">LATIHAN 03</div>
<ol>
<li>Tentukan persamaan garis singgung kurva dari fungsi berikut pada titik-titik yang diberikan!</li>
<ol type="a">
  <li>\(\displaystyle f(x)=x^2, \: \text{ titik }(1,1) \)</li>
  <li>\(\displaystyle f(x)=x^2-2, \: \text{ titik }(2,2) \)</li>
  <li>\(\displaystyle f(x)=4-x^2, \: \text{ titik }(-1,2) \)</li>
  <li>\(\displaystyle f(x)=x^2+3x, \: \text{ titik }(2,10) \)</li>
  <li>\(\displaystyle f(x)=\frac{3}{x}, \: \text{ titik }(3,1) \)</li>
  <li>\(\displaystyle f(x)=\frac{x}{x+2}, \: \text{ titik }(2,\frac{1}{2} ) \)</li>
  <li>\(\displaystyle f(x)=x^3, \: \text{ titik }(1,2 ) \)</li>
  <li>\(\displaystyle f(x)=x^4 -4, \: \text{ titik }(1,-3 ) \)</li>
</ol>
<li>Tentukan persamaan garis singgung kurva berikut!</li>
<ol type="a">
<li>\(\displaystyle \frac{1}{8}x^3\) dititik dengan absis \(1 \)</li>
<li>\(\displaystyle x^2+4x+1\) dititik dengan absis \(2 \)</li>
<li>\(\displaystyle x^2-4x-5\) dititik dengan absis \(7 \)</li>
<li>\(\displaystyle x^2+2x+1\) dititik dengan absis \(1 \)</li>
<li>\(\displaystyle 2x-x^3\) dititik dengan absis \(-4 \)</li>
<li>\(\displaystyle x^3-6x^2+9x-2\) dititik dengan absis \(1 \)</li>
<li>\(\displaystyle x^3-3x+5\) dititik dengan absis \(-1 \)</li>
</ol>
<li>Tentukan persamaan garis singgung kurva</li>
<ol type="a">
<li>\(\displaystyle y=2x^2+3\) yang sejajar dengan garis \(y=8x+3\)</li>
<li>\(\displaystyle y=x^3-6x^2+5x+5\) yang tegak lurus dengan garis \(x-4y+1=0\)</li>
<li>\(\displaystyle y=x^3-3x\) yang tegak lurus dengan garis \(2x+8y-9=0\)</li>
<li>\(\displaystyle y=\frac{1}{3}x^3 -2x^2-8x\) yang sejajar dengan garis \(8x-2y+3=0\)</li>
<li>\(\displaystyle y=x^2+2x-3\) yang membentuk sudut \(45^{\circ}\) dengan sumbu \(x\) negatif.</li>
</ol>
<li>Tentukan nilai \(x\) jika gradien kurva \(\displaystyle y=\frac{1}{3}x^3-3x^2 -12x +5 \) dan \(y=x^2+8x-20\) saling tegak lurus!</li>
<li>Jika persamaan garis singgung kurva \(y=x^3 -2x^2 +bx+8\) sejajar dengan garis \(7x-y+5=0\), tentukan nilai dari \(b^2 -3b+2\)!</li>
</ol>
</div>
</div>
{{--  --}}
<div id="disqus_thread" class="mt-4"></div>

</div>
</div>
</div>
</section>
@endsection

