@extends('konten.32polinomial.32.template')
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
            Polinomial - Latiahan 01
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

                <li>Hasil bagi dan sisa dari pembagian polinom \(p(x)=x^3+2x^2-x+1\) dibagi  \((x-2)\) berturut-turut adalah . . .
                </li>
                   <input type="radio" name="soal1" value="10"/>
                   \(\displaystyle (x^2+4x+7) \text{ dan } 15\)
                   <br />
                   <input type="radio" name="soal1" value="0" />
                   \(\displaystyle (x^2+4x-7) \text{ dan } 15\)
                   <br />
                   <input type="radio" name="soal1" value="0"  />
                   \(\displaystyle (x^2+4x-7) \text{ dan } 10\)
                   <br />
                   <input type="radio" name="soal1" value="0" />
                   \(\displaystyle (x^2-4x+7) \text{ dan } 10\)
                   <br />
                   <input type="radio" name="soal1" value="0"/>
                   \(\displaystyle (x^2-4x-7) \text{ dan } 5\)
                   <br>
                   <hr />
   <!--=======================  soal no 2 ===================================-->
               <li>	Hasil bagi dan sisa pembagian dari suku banyak \(p(x)=x^4-3x^3-5x^2+x-6\) dibagi oleh \(x^2-x-2\) berturut-turut adalah . . . </li>
                   <input type="radio" name="soal2" value="10"/>
                   \(\displaystyle  x^2-2x-5\) dan \(-8x-16\)
                   <br />
                   <input type="radio" name="soal2" value="0" />
                   \(\displaystyle x^2-2x-5\) dan \(-8x+16 \)
                   <br />
                   <input type="radio" name="soal2" value="0"  />
                   \(\displaystyle x^2-2x-5\) dan   \(8x+16 \)
                   <br />
                   <input type="radio" name="soal2" value="0" />
                   \(\displaystyle x^2-2x+5\) dan  \(8x+16\)
                   <br />
                   <input type="radio" name="soal2" value="0"/>
                   \(\displaystyle x^2+2x+5\) dan \(-8x+16\)
                   <br>
                   <hr />
   <!--=======================  soal no 3 ===================================-->
               <li>Salah satu faktor suku banyak \(p(x)=2x^3-5x^2+px+3\) adalah \((x+1)\). Faktor linear lainnya dari suku banyak tersebut adalah . . . </li>
                   <input type="radio" name="soal3" value="0"/>
                   \(\displaystyle x-1 \)
                   <br />
                   <input type="radio" name="soal3" value="0" />
                   \(\displaystyle x-2 \)
                   <br />
                   <input type="radio" name="soal3" value="0"  />
                   \(\displaystyle x+2 \)
                   <br />
                   <input type="radio" name="soal3" value="10" />
                   \(\displaystyle  2x-1\)
                   <br />
                   <input type="radio" name="soal3" value="0"/>
                   \(\displaystyle 2x+1 \)
                   <br>
                   <hr />
   <!--=======================  soal no 4 ===================================-->
               <li>Suku banyak berderajat \(3\) jika dibagi \((x^2-x-6)\) bersisa \((5x-2)\). Jika dibagi \((x^2-2x-3)\) bersisa \((3x+4)\). Suku banyak tersebut adalah . . . </li>
                   <input type="radio" name="soal4" value="0"/>
                   \(\displaystyle x^3-2x^2+x-4 \)
                   <br />
                   <input type="radio" name="soal4" value="0" />
                   \(\displaystyle x^3-2x^2-x+4 \)
                   <br />
                   <input type="radio" name="soal4" value="0"  />
                   \(\displaystyle x^3-2x^2-x-4 \)
                   <br />
                   <input type="radio" name="soal4" value="10" />
                   \(\displaystyle x^3-2x^2+4 \)
                   <br />
                   <input type="radio" name="soal4" value="0"/>
                   \(\displaystyle x^3-2x^2-4 \)
                   <br>
                   <hr />
   <!--=======================  soal no 5 ===================================-->
               <li>Suku banyak \(x^3+3x^2+9x+3\) membagi habis \(x^4+4x^3+2ax^2+4bx+c\). Nilai \(a+b\) adalah . . . </li>
                   <input type="radio" name="soal5" value="10"/>
                   \(\displaystyle 12 \)
                   <br />
                   <input type="radio" name="soal5" value="0" />
                   \(\displaystyle 10 \)
                   <br />
                   <input type="radio" name="soal5" value="0"  />
                   \(\displaystyle 9 \)
                   <br />
                   <input type="radio" name="soal5" value="0" />
                   \(\displaystyle 6 \)
                   <br />
                   <input type="radio" name="soal5" value="0"/>
                   \(\displaystyle 3 \)
                   <br>
                   <hr />
   <!--=======================  soal no 6 ===================================-->
               <li>Diketahui suku banyak \(p(x)=2x^4+ax^3-3x^2+5x+b\). Jika \(p(x)\) dibagi \((x-1)\) sisa \(11\) dan dibagi \((x+1)\) sisa \(-1\), maka nilai \((2a+b)...\) </li>
                   <input type="radio" name="soal6" value="0"/>
                   \(\displaystyle 13 \)
                   <br />
                   <input type="radio" name="soal6" value="0" />
                   \(\displaystyle 10 \)
                   <br />
                   <input type="radio" name="soal6" value="10"  />
                   \(\displaystyle 8 \)
                   <br />
                   <input type="radio" name="soal6" value="0" />
                   \(\displaystyle 7\)
                   <br />
                   <input type="radio" name="soal6" value="0"/>
                   \(\displaystyle 6\)
                   <br>
                   <hr />
   <!--=======================  soal no 7 ===================================-->
               <li>Diketahui \((x-2)\) dan \((x-1)\) merupakan faktor dari suku banyak \(p(x)=x^3+ax^2-13x+b\). Jika \(p(x)=0\) mempunyai akar-akar \(x_1,x_2,x_3\)   untuk \(x_1>x_2>x_3\). Maka nilai dari ekspresi \(x_1-(x_2+x_3)\) adalah . . .  </li>
                   <input type="radio" name="soal7" value="0"/>
                   \(\displaystyle 8 \)
                   <br />
                   <input type="radio" name="soal7" value="10" />
                   \(\displaystyle 6 \)
                   <br />
                   <input type="radio" name="soal7" value="0"  />
                   \(\displaystyle 4 \)
                   <br />
                   <input type="radio" name="soal7" value="0" />
                   \(\displaystyle -4 \)
                   <br />
                   <input type="radio" name="soal7" value="0"/>
                   \(\displaystyle -6 \)
                   <br>
                   <hr />
   <!--=======================  soal no 8 ===================================-->
               <li>Suku banyak \(x^3+2x^2-px+q\) jika dibagi \((2x-4)\) bersisa \(16\) dan jika dibagi \((x+2)\) bersisa \(20\). Nilai dari \(p+q\) adalah . . .</li>
                   <input type="radio" name="soal8" value="0"/>
                   \(\displaystyle 10 \)
                   <br />
                   <input type="radio" name="soal8" value="10" />
                   \(\displaystyle 15 \)
                   <br />
                   <input type="radio" name="soal8" value="0"  />
                   \(\displaystyle 19 \)
                   <br />
                   <input type="radio" name="soal8" value="0" />
                   \(\displaystyle 20 \)
                   <br />
                   <input type="radio" name="soal8" value="0"/>
                   \(\displaystyle 25 \)
                   <br>
                   <hr />
   <!--=======================  soal no 9 ===================================-->
               <li>Suku banyak \(f(x)\) dibagi \((x-2)\) sisa \(1\), dibagi \((x+3)\) sisa \(-8\). Suku banyak \(g(x)\) dibagi \((x-2)\) sisa \(9\), dibagi \((x+3)\) sisa \(2\). Jika \(h(x)=f(x) \times g(x)\), maka sisa pembagian \(h(x)\) dibagi \(x^2+x-6\) adalah . . .</li>
                   <input type="radio" name="soal9" value="0"/>
                   \(\displaystyle 7x-1 \)
                   <br />
                   <input type="radio" name="soal9" value="0" />
                   \(\displaystyle 6x-1 \)
                   <br />
                   <input type="radio" name="soal9" value="10"  />
                   \(\displaystyle 5x-1 \)
                   <br />
                   <input type="radio" name="soal9" value="0" />
                   \(\displaystyle 4x-1 \)
                   <br />
                   <input type="radio" name="soal9" value="0"/>
                   \(\displaystyle 3x-1 \)
                   <br>
                   <hr />
   <!--=======================  soal no 10 ===================================-->
               <li>Jika suku banyak \(p(x)=2x^4+ax^3-3x^2+5x+b\) dibagi oleh \((x^2-1)\) memberi sisa \((6x+5)\), maka nilai \(a \times b= ...\)</li>
                   <input type="radio" name="soal10" value="0"/>
                   \(\displaystyle -8 \)
                   <br />
                   <input type="radio" name="soal10" value="0" />
                   \(\displaystyle -6 \)
                   <br />
                   <input type="radio" name="soal10" value="0"  />
                   \(\displaystyle 3 \)
                   <br />
                   <input type="radio" name="soal10" value="10" />
                   \(\displaystyle 6 \)
                   <br />
                   <input type="radio" name="soal10" value="0"/>
                   \(\displaystyle 8\)
                   <br>
                   <hr />
   <!--=======================  soal no 11 ===================================-->
               <li>Jika \(x^4+(a-10) x^3+bx^2+14x-15=f(x)(x-1)\), dengan \(f(x)\) habis dibagi \(x+1\), maka nilai \(a\) adalah . . . </li>
                   <input type="radio" name="soal11" value="0"/>
                   \(\displaystyle -8 \)
                   <br />
                   <input type="radio" name="soal11" value="10" />
                   \(\displaystyle -4 \)
                   <br />
                   <input type="radio" name="soal11" value="0"  />
                   \(\displaystyle 0 \)
                   <br />
                   <input type="radio" name="soal11" value="0" />
                   \(\displaystyle 2\)
                   <br />
                   <input type="radio" name="soal11" value="0"/>
                   \(\displaystyle 4\)
                   <br>
                   <hr />
   <!--=======================  soal no 12 ===================================-->
               <li>Jika suku banyak \(p(x)\) habis dibagi \((x-1)\), maka sisa pembagian \(p(x)\) oleh \((x-1)(x+1)\) sama dengan . . .</li>
                   <input type="radio" name="soal12" value="0"/>
                   \(\displaystyle -\frac{p(-1)}{2}(1+x) \)
                   <br />
                   <input type="radio" name="soal12" value="0" />
                   \(\displaystyle -\frac{p(-1)}{2}(11x) \)
                   <br />
                   <input type="radio" name="soal12" value="0"  />
                   \(\displaystyle \frac{p(-1)}{2}(1+x) \)
                   <br />
                   <input type="radio" name="soal12" value="10" />
                   \(\displaystyle \frac{p(-1)}{2}(1-x) \)
                   <br />
                   <input type="radio" name="soal12" value="0"/>
                   \(\displaystyle \frac{p(-1)}{2}(x-1) \)
                   <br>
                   <hr />
   <!--=======================  soal no 13 ===================================-->
               <li>Suku banyak \(p(x)=x^9-x\) difaktorkan menjadi suku banyak derajat sekecil-kecilnya dan koefisiennya bilangan bulat. banyak faktor suku banyak tersebut adalah . . .</li>
                   <input type="radio" name="soal13" value="0"/>
                   \(\displaystyle 9 \)
                   <br />
                   <input type="radio" name="soal13" value="0" />
                   \(\displaystyle 7 \)
                   <br />
                   <input type="radio" name="soal13" value="10"  />
                   \(\displaystyle 5 \)
                   <br />
                   <input type="radio" name="soal13" value="0" />
                   \(\displaystyle 3 \)
                   <br />
                   <input type="radio" name="soal13" value="0"/>
                   \(\displaystyle 1\)
                   <br>
                   <hr />
   <!--=======================  soal no 14 ===================================-->
               <li>Persamaan polinomial \(x^3+3x^2-16x+n=0\) mempunyai sepasang akar yang berlawanan tanda, nilai \(n\) sama dengan . . . </li>
                   <input type="radio" name="soal14" value="0"/>
                   \(\displaystyle -52 \)
                   <br />
                   <input type="radio" name="soal14" value="10" />
                   \(\displaystyle -48 \)
                   <br />
                   <input type="radio" name="soal14" value="0"  />
                   \(\displaystyle 42 \)
                   <br />
                   <input type="radio" name="soal14" value="0" />
                   \(\displaystyle 48 \)
                   <br />
                   <input type="radio" name="soal14" value="0"/>
                   \(\displaystyle 52 \)
                   <br>
                   <hr />
   <!--=======================  soal no 15 ===================================-->
               <li class="overflow-auto">Jika akar-akar persamaan \( \displaystyle \frac{1}{(x^2-10x-29)}+\frac{1}{(x^2-10x-45)}-\frac{1}{(x^2-10x-69)}=0\)
                   adalah \(a\) dan \(b\), maka nilai dari \(a+b=...\)                </li>
                   <input type="radio" name="soal15" value="0"/>
                   \(\displaystyle 10 \)
                   <br />
                   <input type="radio" name="soal15" value="0" />
                   \(\displaystyle 8 \)
                   <br />
                   <input type="radio" name="soal15" value="0"  />
                   \(\displaystyle 6  \)
                   <br />
                   <input type="radio" name="soal15" value="0" />
                   \(\displaystyle  -8 \)
                   <br />
                   <input type="radio" name="soal15" value="10"/>
                   \(\displaystyle -10 \)
                   <br>
                   <hr />

            </ol>

{{-- COPY DARI SINI SETIAP SOAL --}}
<input type="hidden" id="materi" name="materi" value="polinomial01">
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
    <a href="/create_polinomial01" id="kirimsaja" class="btn btn-warning btn-bukti d-none" >SIMPAN JAWABAN</a>
</div>
</form>
{{-- COPY SAMPAI SINI --}}

<div id="disqus_thread" class="mt-4"></div>

</div>
</div>
</div>
</section>
@endsection

