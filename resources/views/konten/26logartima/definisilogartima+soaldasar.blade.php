@extends('konten.26logartima.26.template')
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
            DEFINISI LOGARITMA
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

            <h2 class="text-center">LOGARITMA</h2>
            <p class="text-center fst-italic"> Math_Dosman</p>
            <p>Logaritma sebagai invers dari Eksponen</p>
            <p><b>Definisi:</b></p>
            <p>Untuk \(a \gt 0\) dan \(a \neq 1 \) berlaku</p>
            <p class="p-1" style="background-color: #79ff75;">\[y = \; ^a \log x  \Leftrightarrow a^y = x\]</p>
            <p>Tabel berikut menunjukan hubungan logaritma dengan eksponen</p>
            <table class="table text-center table-bordered table-sm border-dark">
              <thead style="background-color:#e3f51d">
                <tr>
                  <th>Logaritma</th>
                  <th>Eksponen</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th>\(^3 \log 9 = 2\)</th>
                  <th>\(3^2 =9 \)</th>
                </tr>
                <tr>
                  <th>\(^5 \log 125 = 3 \)</th>
                  <th>\(5^3 = 125 \)</th>
                </tr>
                <tr>
                  <th>\(^e \log 1 = 0 \)</th>
                  <th>\(e^0 = 1 \)</th>
                </tr>
                <tr>
                  <th>\(\log 1000=3\)</th>
                  <th>\(10^3 = 1000\)</th>
                </tr>
              </tbody>
            </table>

            <!-- ============================================================================== -->
            <div class="badge bg-danger text-wrap fs-6" style="width: 20rem"><b> CONTOH SOAL dan PEMBAHASAN </b></div>
            <div class="rounded-2 p-1" style="background-color: rgba(193, 193, 193, 0.933);">
            <p>Hitunglah:</p>
            <div class="row">
              <div class="col-sm-4">a. \(^2 \log 16\)</div>
              <div class="col-sm-4">b. \(^3 \log 243\)</div>
              <div class="col-sm-4">c. \(\log 0,0001\)</div>
            </div>
            </div>
            <p class="rounded-2 p-1" style="background-color: #aaed8f;"><b>Penyelesaian :</b> <br>

            \(\begin{align}
            \text{a. Misalkan } ^2 \log 16 &= x \\
              2^x &= 16 \\
              2^x &= 2^4 \\
              x &= 4
            \end{align}\) <br>
            Jadi, \(\boxed{x=4}\) <br>
            \(\begin{align}
            \text{b. Misalkan } ^3 \log 243 &= x \\
              3^x &= 243 \\
              3^x &= 3^5 \\
              x &= 5
            \end{align}\) <br>
            Jadi, \(\boxed{x=5}\) <br>
            \(\begin{align}
            \text{c. Misalkan } \log 0,0001 &= x \\
              10^x &= 0,0001 \\
              10^x &= 10^{-4} \\
              x &= -4
            \end{align}\) <br>
            Jadi, \(\boxed{x=-4}\) <br>
            </p>
            <!-- ============================================================================== -->

            <div class="badge bg-primary text-wrap fs-6" style="width: 20rem"><b> UJI PEMAHAMAN </b></div>
            <div class="border border-danger">
              <ol>
                <li>Nyatakan tiap bentuk pangkat di bawah ini dalam bentuk logaritma yang ekuivalen.</li>
                <div class="row">
                  <div class="col-sm">
                    <ol type="a">
                      <li>\(4^3=64 \)</li>
                      <li>\(2^3 = 8 \)</li>
                      <li>\(8^{-1} = \frac{1}{8} \)</li>
                      <li>\(2^{-6} = \frac{1}{64} \)</li>
                      <li>\(5^4 = 625 \)</li>
                      <li>\(4^0 =1 \)</li>
                      <li>\(6^0 = 1 \)</li>
                      <li>\(10^{-3} = 0,001 \)</li>
                    </ol>
                  </div>
                  <div class="col-sm">
                    <ol type="a" start="9">
                      <li>\(\left(\frac{1}{2} \right)^4 = \left(\frac{1}{16} \right) \)</li>
                      <li>\(\left(\frac{1}{6} \right)^2 = \left(\frac{1}{36} \right) \)</li>
                      <li>\(4^{\left(\frac{3}{2} \right)} = 8 \)</li>
                      <li>\(27^{\left(\frac{2}{3} \right)} = 9 \)</li>
                      <li>\(8^{\left(\frac{4}{3} \right)} = 16 \)</li>
                      <li>\(\left(\frac{1}{\sqrt{5}} \right)^2 = 5^{-1} \)</li>
                      <li>\(p^r = q \)</li>
                      <li>\(4^1 = 4 \)</li>
                    </ol>
                  </div>
                </div>
                <li>Nyatakan tiap logaritma di bawah ini dalam bentuk pangkat</li>
                <div class="row">
                  <div class="col-sm">
                    <ol type="a">
                      <li>\(^3 \log 9 =2 \)</li>
                      <li>\(^5 \log 125 = 3\)</li>
                      <li>\(^2 \log \left(\frac{1}{16} \right) = -4\)</li>
                      <li>\(^7 \log \left(\frac{1}{7} \right) = -1\)</li>
                    </ol>
                  </div>
                  <div class="col-sm">
                    <ol type="a" start="5">
                      <li>\(\log 1 = 0 \)</li>
                      <li>\(^8 \log 1 = 0\)</li>
                      <li>\(^{\left(\frac{1}{3} \right)}  \log \left(\frac{1}{27} \right) = 3\)</li>
                      <li>\(^{\left(\frac{1}{2} \right)} \log 64 = -4 \)</li>
                    </ol>
                  </div>
                </div>
                <li>Hitunglah nilai logaritma dibawah ini</li>
                <div class="row">
                  <div class="col-sm">
                    <ol type="a">
                      <li>\(^{11} \log 121 \)</li>
                      <li>\(^2 \log 128 \)</li>
                      <li>\(^3 \log 243 \)</li>
                      <li>\(^7 \log 343 \)</li>
                      <li>\(^{16} \log \left(\frac{1}{16} \right) \)</li>
                      <li>\(^6 \log 1 \)</li>
                    </ol>
                  </div>
                  <div class="col-sm">
                    <ol type="a" start="7">
                      <li>\(^{\left(\frac{2}{3} \right)} \log \left(\frac{9}{4} \right) \)</li>
                      <li>\(^{36} \log 6 \)</li>
                      <li>\(^8 \log \left(\frac{1}{64} \right) \)</li>
                      <li>\(^3 \log \left(\frac{1}{81} \right) \)</li>
                      <li>\(^{\sqrt{2}} \log 8 \)</li>
                      <li>\(^{36} \log \left(\frac{1}{6} \right) \)</li>
                    </ol>
                  </div>
                </div>
                <li>Tentukan nilai \(x, a\) dan \(u\) yang memenuhi persamaan di bawah ini.</li>
                <div class="row">
                  <div class="col-sm">
                    <ol type="a">
                      <li>\(x = \; ^4 \log 16 \)</li>
                      <li>\(x = \; ^2 \log 4 \)</li>
                      <li>\(x = \; ^7 \log 1 \)</li>
                      <li>\(x = \; ^9 \log \left(\frac{1}{9} \right) \)</li>
                      <li>\(^a \log \left(\frac{1}{16} \right) = -4 \)</li>
                      <li>\(^a \log 32 = -\frac{5}{7} \)</li>
                    </ol>
                  </div>
                  <div class="col-sm">
                    <ol type="a" start="7">
                      <li>\(^a \log 16 = 4 \)</li>
                      <li>\(^a \log \left(\frac{2}{3} \right) = -\left(\frac{1}{3} \right) \)</li>
                      <li>\(^5 \log u = 2 \)</li>
                      <li>\(^5 \log u = 0 \)</li>
                      <li>\(^7 \log u = 1 \)</li>
                      <li>\(^{\sqrt{6}} \log 36 = x \)</li>
                    </ol>
                  </div>
                </div>
              </ol>
            </div>

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

