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
            Latihan definisi dan sifat logaritma
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
        <form name="input-form">
             @csrf
             <ol type="1" class="mt-2">
                @include('konten.00semuamateri.identitas')
<!--=======================  soal1 ===================================-->
<li>Jika \(2^3 = 8\) dapat ditulis menjadi \(3 = \; ^a \log b \) maka nilai \(a+b=...\)
</li>
        <input type="radio" name="soal1" value="A"/>
        A. \( 6\)
    <br />
        <input type="radio" name="soal1" value="B"/>
        B. \( 8\)
    <br />
        <input type="radio" name="soal1" value="C"/>
        C. \( 10\)
    <br>
        <input type="radio" name="soal1" value="D"/>
        D. \( 12\)
    <br />
        <input type="radio" name="soal1" value="E"/>
        E. \( 14\)
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
<li>\(^2 \log 4 + \; ^2 \log 12 - \; ^2 \log 6 = ...\)</li>
        <input type="radio" name="soal2" value="A"/>
        A. \(8 \)
    <br />
        <input type="radio" name="soal2" value="B"/>
        B. \( 6\)
    <br />
        <input type="radio" name="soal2" value="C"/>
        C. \(5 \)
    <br>
        <input type="radio" name="soal2" value="D"/>
        D. \( 4\)
    <br />
        <input type="radio" name="soal2" value="E"/>
        E. \( 3\)
    <br>
    <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal2" aria-expanded="false" aria-controls="collapsesoal2" disabled>
    Alternatif Penyelesaian:
    </button>
    <div class="collapse" id="collapsesoal2">
    <div class="card card-body overflow-auto">
        <p></p>
    <b class="text-end text-danger fw-bold"> <h3>JAWABAN : E</h3></b>
    </div>
    </div>
    <hr />

<!--=======================  soal3 ===================================-->
<li>Nilai dari \(\displaystyle ^7 \log 4 \cdot ^2 \log 5 + \; ^7 \log \frac{49}{27} = ...\)</li>
        <input type="radio" name="soal3" value="A"/>
        A. \(1 \)
    <br />
        <input type="radio" name="soal3" value="B"/>
        B. \(2 \)
    <br />
        <input type="radio" name="soal3" value="C"/>
        C. \(3 \)
    <br>
        <input type="radio" name="soal3" value="D"/>
        D. \(4 \)
    <br />
        <input type="radio" name="soal3" value="E"/>
        E. \(5 \)
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
<li>Hasil dari \(\displaystyle \frac{^3 \log 36 \cdot \; ^6 \log 81 + \; ^4 \log 32}{^{\frac{1}{9}} \log 27} \) adalah . . .</li>
        <input type="radio" name="soal4" value="A"/>
        A. \(11 \)
    <br />
        <input type="radio" name="soal4" value="B"/>
        B. \(7 \)
    <br />
        <input type="radio" name="soal4" value="C"/>
        C. \(4 \)
    <br>
        <input type="radio" name="soal4" value="D"/>
        D. \(-7 \)
    <br />
        <input type="radio" name="soal4" value="E"/>
        E. \(-11 \)
    <br>
    <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal4" aria-expanded="false" aria-controls="collapsesoal4" disabled>
    Alternatif Penyelesaian:
    </button>
    <div class="collapse" id="collapsesoal4">
    <div class="card card-body overflow-auto">
        <p></p>
    <b class="text-end text-danger fw-bold"> <h3>JAWABAN : D</h3></b>
    </div>
    </div>
    <hr />
    <!--=======================  soal5 ===================================-->
    <li>\(^a \log \sqrt[3]{a} \times \;^a \log a\sqrt{a} =... \)</li>
    <input type="radio" name="soal5" value="A"/>
    A. \(\displaystyle \frac{3}{2} \)
    <br />
    <input type="radio" name="soal5" value="B"/>
    B. \(1 \)
    <br />
    <input type="radio" name="soal5" value="C"/>
    C. \(\displaystyle \frac{1}{2} \)
    <br>
    <input type="radio" name="soal5" value="D"/>
    D. \(a \)
    <br />
    <input type="radio" name="soal5" value="E"/>
    E. \(\sqrt[3]{a} \)
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
    <li>\(\displaystyle ^a \log \frac{1}{b} \cdot ^b \log \frac{1}{c^2} \cdot ^c \log \frac{1}{a^3}=... \)</li>
    <input type="radio" name="soal6" value="A"/>
    A. \(-6 \)
    <br />
    <input type="radio" name="soal6" value="B"/>
    B. \(6 \)
    <br />
    <input type="radio" name="soal6" value="C"/>
    C. \(a^2b \)
    <br>
    <input type="radio" name="soal6" value="D"/>
    D. \( b^2\)
    <br />
    <input type="radio" name="soal6" value="E"/>
    E. \(0 \)
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
<li>Jika \(^{25} \log 5^{2x} = 8 \), maka \(x=...\)</li>
        <input type="radio" name="soal7" value="A"/>
        A. \(\displaystyle \frac{1}{4} \)
    <br />
        <input type="radio" name="soal7" value="B"/>
        B. \(\displaystyle \frac{1}{2} \)
    <br />
        <input type="radio" name="soal7" value="C"/>
        C. \( 6\)
    <br>
        <input type="radio" name="soal7" value="D"/>
        D. \(8 \)
    <br />
        <input type="radio" name="soal7" value="E"/>
        E. \( 10\)
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
<li>Diketahui \(^5 \log 4 = m \) Bentuk \(^{25} \log 20 \) jika dinyatakan dalam \(m\) adalah ...</li>
        <input type="radio" name="soal8" value="A"/>
        A. \(m+1 \)
    <br />
        <input type="radio" name="soal8" value="B"/>
        B. \(m+2 \)
    <br />
        <input type="radio" name="soal8" value="C"/>
        C. \(\displaystyle \frac{1}{2}m+1 \)
    <br>
        <input type="radio" name="soal8" value="D"/>
        D. \(\displaystyle \frac{1}{2}m + \frac{1}{2} \)
    <br />
        <input type="radio" name="soal8" value="E"/>
        E. \(\displaystyle \frac{1}{2}m - \frac{1}{2} \)
    <br>
    <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal8" aria-expanded="false" aria-controls="collapsesoal8" disabled>
    Alternatif Penyelesaian:
    </button>
    <div class="collapse" id="collapsesoal8">
    <div class="card card-body overflow-auto">
        <p></p>
    <b class="text-end text-danger fw-bold"> <h3>JAWABAN : D</h3></b>
    </div>
    </div>
    <hr />

<!--=======================  soal9 ===================================-->
<li>Jika diketahui \(^2 \log 3 = x \) maka nilai \(^8 \log 12 \) adalah . . .</li>
        <input type="radio" name="soal9" value="A"/>
        A. \(\displaystyle \frac{1}{3} (-x-2) \)
    <br />
        <input type="radio" name="soal9" value="B"/>
        B. \(\displaystyle \frac{1}{3} (x-2) \)
    <br />
        <input type="radio" name="soal9" value="C"/>
        C. \(\displaystyle \frac{1}{3}(x+2) \)
    <br>
        <input type="radio" name="soal9" value="D"/>
        D. \(\displaystyle \frac{1}{3} (x+3) \)
    <br />
        <input type="radio" name="soal9" value="E"/>
        E. \(\displaystyle \frac{1}{3} (x-3) \)
    <br>
    <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal9" aria-expanded="false" aria-controls="collapsesoal9" disabled>
    Alternatif Penyelesaian:
    </button>
    <div class="collapse" id="collapsesoal9">
    <div class="card card-body overflow-auto">
        <p></p>
    <b class="text-end text-danger fw-bold"> <h3>JAWABAN : C</h3></b>
    </div>
    </div>
    <hr />

<!--=======================  soal10 ===================================-->
<li>Jika \(^2 \log 3 = a\) dan \(^3 \log 5 =b\) maka \(^4 \log 45 =... \) </li>
        <input type="radio" name="soal10" value="A"/>
        A. \(a(b+2) \)
    <br />
        <input type="radio" name="soal10" value="B"/>
        B. \(\displaystyle \frac{a}{2} (b+2) \)
    <br />
        <input type="radio" name="soal10" value="C"/>
        C. \(\displaystyle \frac{b}{2} (a+2) \)
    <br>
        <input type="radio" name="soal10" value="D"/>
        D. \(b(a+2) \)
    <br />
        <input type="radio" name="soal10" value="E"/>
        E. \((a+2)(b+2) \)
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
<li>Jika \(^2 \log 3 = x \) dan \(^2 \log 10 = y \) maka nilai \(^6 \log 120 \) dalam \(x\) dan \(y\) adalah . . .</li>
        <input type="radio" name="soal11" value="A"/>
        A. \(\displaystyle \frac{x+y+2}{x+1} \)
    <br />
        <input type="radio" name="soal11" value="B"/>
        B. \(\displaystyle \frac{x+y+2}{x-1} \)
    <br />
        <input type="radio" name="soal11" value="C"/>
        C. \(\displaystyle \frac{x+y-2}{x+1} \)
    <br>
        <input type="radio" name="soal11" value="D"/>
        D. \(\displaystyle \frac{x+y-2}{x-1} \)
    <br />
        <input type="radio" name="soal11" value="E"/>
        E. \(\displaystyle \frac{2x+y}{x+1} \)
    <br>
    <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal11" aria-expanded="false" aria-controls="collapsesoal11" disabled>
    Alternatif Penyelesaian:
    </button>
    <div class="collapse" id="collapsesoal11">
    <div class="card card-body overflow-auto">
        <p></p>
    <b class="text-end text-danger fw-bold"> <h3>JAWABAN : A</h3></b>
    </div>
    </div>
    <hr />

<!--=======================  soal12 ===================================-->
<li>Bentuk sederhana dari \(\displaystyle \frac{\log p^3q-2 \log q + \log p^2q^6}{3 \log pq} =... \)</li>
        <input type="radio" name="soal12" value="A"/>
        A. \(\displaystyle \frac{5}{2} \log pq \)
    <br />
        <input type="radio" name="soal12" value="B"/>
        B. \(\displaystyle \frac{2}{5} \log pq \)
    <br />
        <input type="radio" name="soal12" value="C"/>
        C. \(\displaystyle \frac{2}{5} \)
    <br>
        <input type="radio" name="soal12" value="D"/>
        D. \(\displaystyle \frac{3}{5} \)
    <br />
        <input type="radio" name="soal12" value="E"/>
        E. \(\displaystyle \frac{5}{3} \)
    <br>
    <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal12" aria-expanded="false" aria-controls="collapsesoal12" disabled>
    Alternatif Penyelesaian:
    </button>
    <div class="collapse" id="collapsesoal12">
    <div class="card card-body overflow-auto">
        <p></p>
    <b class="text-end text-danger fw-bold"> <h3>JAWABAN : E</h3></b>
    </div>
    </div>
    <hr />

<!--=======================  soal13 ===================================-->
<li>Diketahui \(a = \; ^4 \log x \) dan \(b=\; ^2\log x \). Jika \(^4 \log b + ^2 \log a = 2 \), maka \(a+b=...\)</li>
        <input type="radio" name="soal13" value="A"/>
        A. \( 4\)
    <br />
        <input type="radio" name="soal13" value="B"/>
        B. \(6\)
    <br />
        <input type="radio" name="soal13" value="C"/>
        C. \(8 \)
    <br>
        <input type="radio" name="soal13" value="D"/>
        D. \(12 \)
    <br />
        <input type="radio" name="soal13" value="E"/>
        E. \(16 \)
    <br>
    <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal13" aria-expanded="false" aria-controls="collapsesoal13" disabled>
    Alternatif Penyelesaian:
    </button>
    <div class="collapse" id="collapsesoal13">
    <div class="card card-body overflow-auto">
        <p></p>
    <b class="text-end text-danger fw-bold"> <h3>JAWABAN : B</h3></b>
    </div>
    </div>
    <hr />

<!--=======================  soal14 ===================================-->
<li>Jika \(^5 \log 3 = a \) \(^3 \log 4 = b \) maka \(^{12} \log 75 =... \)</li>
        <input type="radio" name="soal14" value="A"/>
        A. \(\displaystyle \frac{2+a}{a+b} \)
    <br />
        <input type="radio" name="soal14" value="B"/>
        B. \(\displaystyle \frac{2a}{a+b} \)
    <br />
        <input type="radio" name="soal14" value="C"/>
        C. \(\displaystyle \frac{a(1+b)}{a+b} \)
    <br>
        <input type="radio" name="soal14" value="D"/>
        D. \( \displaystyle \frac{2+a}{a(1+b)} \)
    <br />
        <input type="radio" name="soal14" value="E"/>
        E. \(\displaystyle \frac{a+b}{a(1+b)} \)
    <br>
    <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal14" aria-expanded="false" aria-controls="collapsesoal14" disabled>
    Alternatif Penyelesaian:
    </button>
    <div class="collapse" id="collapsesoal14">
    <div class="card card-body overflow-auto">
        <p></p>
    <b class="text-end text-danger fw-bold"> <h3>JAWABAN : B</h3></b>
    </div>
    </div>
    <hr />

<!--=======================  soal15 ===================================-->
<li>Jika \(^9 \log 8 = 3m\), maka nilai \(^4 \log 3 =... \)</li>
        <input type="radio" name="soal15" value="A"/>
        A. \(\displaystyle \frac{1}{4m} \)
    <br />
        <input type="radio" name="soal15" value="B"/>
        B. \(\displaystyle \frac{3}{4m} \)
    <br />
        <input type="radio" name="soal15" value="C"/>
        C. \(\displaystyle \frac{3}{2m} \)
    <br>
        <input type="radio" name="soal15" value="D"/>
        D. \(\displaystyle \frac{m}{4} \)
    <br />
        <input type="radio" name="soal15" value="E"/>
        E. \(\displaystyle \frac{4m}{3} \)
    <br>
    <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesoal15" aria-expanded="false" aria-controls="collapsesoal15" disabled>
    Alternatif Penyelesaian:
    </button>
    <div class="collapse" id="collapsesoal15">
    <div class="card card-body overflow-auto">
        <p></p>
    <b class="text-end text-danger fw-bold"> <h3>JAWABAN : A</h3></b>
    </div>
    </div>
    <hr />

            </ol>

{{-- COPY DARI SINI SETIAP SOAL --}}
{{-- TOMBOL KIRIM --}}
<input type="hidden" id="materi" name="materi" value="logaritma01">

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
    <a href="/create_logaritma01" id="kirimsaja" class="btn btn-warning btn-bukti d-none" >SIMPAN JAWABAN</a>
</div>
</form>
{{-- COPY SAMPAI SINI --}}

<div id="disqus_thread"></div>

</div>
</div>
</div>
</section>
@endsection

