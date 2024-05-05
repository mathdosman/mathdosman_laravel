@extends('konten.25eksponen.25.template')
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
            EKSPONEN
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
<p>Materi Pembelajaran: Eksponen</p>
            <ol type="I">
                <li class="fw-bold">
                    Pengertian Eksponen
                </li>
                Eksponen adalah bentuk notasi matematika yang digunakan untuk menyatakan suatu bilangan yang diangkat ke pangkat tertentu. Eksponen terdiri dari dua bagian, yaitu basis dan pangkat. Basis merupakan bilangan yang akan diangkat ke pangkat, sedangkan pangkat menunjukkan jumlah kali bilangan basis tersebut akan dikalikan dengan dirinya sendiri.
                <li class="fw-bold">
                    Sifat-sifat Eksponen
                </li>
                <ol type="a">
                    <li>
                        Sifat Pangkat Positif
                    </li>
                    Jika a adalah bilangan riil positif dan m dan n adalah bilangan bulat positif, maka berlaku:
                    <ul>
                        <li>\(a^m \times a^n = a^{m+n}\) </li>
                        <li>\((a^m)^n = a^{m \times n}\) </li>
                        <li>\((a \times b)^m = a^m \times b^m\) </li>
                        <li>\(a^1 = a\)</li>
                    </ul>
                    <li>
                        Sifat Pangkat Negatif
                    </li>
                    Jika a adalah bilangan riil positif dan m adalah bilangan bulat positif, maka berlaku:
                    <ul>
                        <li>\(\displaystyle a^{-m} = \frac{1}{a^m}\)</li>
                        <li>\(\displaystyle \frac{1}{a^{-m}} = a^m\)</li>
                    </ul>
                    <li>
                        Sifat Pangkat Nol
                    </li>
                    Jika a adalah bilangan riil positif, maka berlaku:
                    <ul>
                        <li>\(a^0 = 1 \) (untuk \(a \neq 0\))</li>
                    </ul>
                    <li>
                        Sifat Pangkat Pecahan
                    </li>
                    Jika a adalah bilangan riil positif, m dan n adalah bilangan bulat, maka berlaku:
                    <ul>
                        <li>\(\displaystyle a^{\frac{m}{n}} = \sqrt[n]{m} \) (akar ke-n dari m)</li>
                    </ul>
                </ol>
                <li class="fw-bold">
                    Contoh Soal dan Pembahasan
                </li>
                    <ol type="1">
                        <li>
                            Hitung hasil dari operasi berikut:
                        </li>
                        <ol type="a">
                            <li> \(2^3 \times 2^4 \)</li>
                            <li> \((5^2)^3 \)</li>
                            <li> \((2 \times 3^2)^2 \)</li>
                            <li> \(4^{-2} \times 2^3 \)</li>
                        </ol>
                               <b>Jawaban:</b>
                               <ol type="a" class="border border-dark pt-1 pb-2">
                                <li>\(2^3 \times 2^4 = 2^{3+4} = 2^7 = 128 \)</li>
                                <li>\((5^2)^3 = 5^{2\times3} = 5^6 = 15625 \)</li>
                                <li>\((2 \times 3^2)^2 = (2 \times 9)^2 = 18^2 = 324 \)</li>
                                <li>\(\displaystyle 4^{-2} \times 2^3 = \frac{1}{4^2} \times 2^3 = \frac{1}{16} \times 8 = \frac{1}{2} \)</li>
                               </ol>
                        <li>
                            Simplifikasi ekspresi berikut menjadi bentuk pangkat yang paling sederhana:
                        </li>
                        <ol type="a">
                            <li>\((2^3)^2\)</li>
                            <li>\(3^2 \times 3^{-4}\)</li>
                            <li>\(5^2 \times 5^2 \times 5^2\)</li>
                            <li>\((8 \times 2^3) \div (4 \times 2^2)\)</li>
                        </ol>
                        <b>Jawaban:</b>
                        <ol type="a" class="border border-dark pt-1 pb-2">
                            <li>\((2^3)^2 = 2^{3\times2} = 2^6 = 64\)</li>
                            <li>\(\displaystyle 3^2 \times 3^{-4} = 3^{2-4} = 3^{-2} = \frac{1}{3^2} = \frac{1}{9}\)</li>
                            <li>\(5^2 \times 5^2 \times 5^2 = 5^{2+2+2} = 5^6\)</li>
                            <li>\(\displaystyle (8 \times 2^3) \div (4 \times 2^2) = \frac{8}{4} \times \frac{2^3}{2^2} = 2 \times 2^1 = 2^2 = 4\)</li>
                        </ol>
                    </ol>
                <li class="fw-bold">
                    Latihan Soal
                </li>
                    <ol>
                        <li>Hitung hasil dari operasi berikut:
                        </li>
                        <ol type="a">
                            <li>\(3^4 \times 3^{-2}\)</li>
                            <li>\((2^3)^4\)</li>
                            <li>\((7 \times 4^2)^{-1}\)</li>
                            <li>\(5^{-3} \times 5^5\)</li>
                        </ol>

                        <li>
                            Simplifikasi ekspresi berikut menjadi bentuk pangkat yang paling sederhana:
                        </li>
                        <ol type="a">
                            <li>\((6^3)^{-2}\)</li>
                            <li>\(4^{-2} \times 4^3\)</li>
                            <li>\(2^{-4} \times 3^{-4}\)</li>
                            <li>\((9 \times 2^5) \div (3^2 \times 2^3) \)</li>
                        </ol>
                    </ol>
                    <li class="fw-bold">
                        Pembahasan Latihan Soal:
                    </li>
                    <div class="border border-dark p-2">
                        1.
                        <ol type="a">
                            <li>\(3^4 \times 3^{-2} = 3^(4+(-2)) = 3^2 = 9\)</li>
                            <li>\((2^3)^4 = 2^(3\times4) = 2^{12}\)</li>
                            <li>\((7 \times 4^2)^{-1} = 7^{-1} \times 4^{-2} = \frac{1}{7} \times \frac{1}{4^2} = \frac{1}{7} \times \frac{1}{16}\)</li>
                            <li>\(5^{-3} \times 5^5 = 5^{5+(-3)} = 5^2 = 25\)</li>
                        </ol>
                        2.
                        <ol type="a">
                            <li>\((6^3)^{-2} = 6^{3\times(-2)} = 6^{-6} = \frac{1}{6^6}\)</li>
                            <li>\(4^{-2} \times 4^3 = 4^{3+(-2)} = 4^1 = 4\)</li>
                            <li>\(2^{-4} \times 3^{-4} = (2 \times 3)^{-4} = 6^{-4} = \frac{1}{6^4}\)</li>
                            <li>\((9 \times 2^5) \div (3^2 \times 2^3) = \frac{9}{3^2} \times \frac{2^5}{2^3} = 3 \times 2^2 = 12\)</li>
                        </ol>
                    </div>
            </ol>
Selamat belajar dan semoga sukses dalam mempelajari eksponen!
{{--  --}}
<div id="disqus_thread" class="mt-4"></div>

</div>
</div>
</div>
</section>
@endsection

