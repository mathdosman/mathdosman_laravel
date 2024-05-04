@extends('luar.layoutsluar')
@section('content')
    <!-- DAFTAR ISI -->
    <section>
        <div class="container">
          <div class="row" style="margin-top: 100px">
            <div class="col-md text-center">
              <h1><b>DAFTAR ISI MATH DOSMAN</b></h1>
            </div>
          </div>
          <div class="row">
            <div class="col">
              <div class="list-group">

                <button type="button" class="list-group-item list-group-item-action text-center text-light" aria-current="true" style="background: #182433">List Materi</button>

                <button type="button" class="list-group-item list-group-item-action">01. Logika Matematika</button>
                <button type="button" class="list-group-item list-group-item-action">02. Induksi Matematika</button>
                <button type="button" class="list-group-item list-group-item-action">03. Pertidaksamaan Linear</button>
                <button type="button" class="list-group-item list-group-item-action">04. Sistem Persamaan Linear</button>
                <button type="button" class="list-group-item list-group-item-action">05. Persamaan Garis Lurus</button>

                @include('materi.06persamaankuadrat')

                <button type="button" class="list-group-item list-group-item-action">07. Fungsi Kuadrat</button>
                <button type="button" class="list-group-item list-group-item-action">08. Pertidaksamaan Linear Dua Variabel</button>

                @include('materi.09programlinear')

                @include('materi.10matriks')

                @include('materi.11transformasi')

                @include('materi.12barisan&deret')

                @include('materi.13limit')

                @include('materi.14turunan')

                @include('materi.15integral')

                <button type="button" class="list-group-item list-group-item-action">16. Integral Trigonometri</button>
                <button type="button" class="list-group-item list-group-item-action">17. Geometri Bidang Datar</button>
                <button type="button" class="list-group-item list-group-item-action">18. Geometri Bidang Ruang</button>
                <button type="button" class="list-group-item list-group-item-action">19. Mean, Median, Modus</button>
                <button type="button" class="list-group-item list-group-item-action">20. Kuartil, Desil, Simpangan Baku, Varian, dsb</button>
                <button type="button" class="list-group-item list-group-item-action">21. Limit Fungsi Trigonometri</button>
                <button type="button" class="list-group-item list-group-item-action">22. Vektor</button>
              </div>
            </div>
{{-- ============================================================================== --}}
            <div class="col">
              <div class="list-group">
                <button type="button" class="list-group-item list-group-item-action active text-center text-light" aria-current="true" style="background: #182433">List Materi</button>
                <button type="button" class="list-group-item list-group-item-action">23. Relasi dan Fungsi</button>
                <button type="button" class="list-group-item list-group-item-action">24. Fungsi Komposisi dan Fungsi Invers</button>

                @include('materi.25eksponen')

                @include('materi.26logaritma')

                <button type="button" class="list-group-item list-group-item-action">27. Trigonometri</button>
                <button type="button" class="list-group-item list-group-item-action">28. Grafik Fungsi Trigonometri</button>
                <button type="button" class="list-group-item list-group-item-action">29. Persamaan Trigonometri</button>
                <button type="button" class="list-group-item list-group-item-action">30. Jumlah dan Selisih Sinus dan Cosinus</button>
                <button type="button" class="list-group-item list-group-item-action">31. Irisan Kerucut</button>

                @include('materi.32polinomial')

                <button type="button" class="list-group-item list-group-item-action">33. Persamaan Lingkaran</button>
                <button type="button" class="list-group-item list-group-item-action">34. Irisan Dua Lingkaran</button>
                <button type="button" class="list-group-item list-group-item-action">35. Integral Tentu & Penggunaan Integral</button>
                @include('materi.36peluang')
                <button type="button" class="list-group-item list-group-item-action">37. Turunan Fungsi Trigonometri</button>
                <button type="button" class="list-group-item list-group-item-action">38. Statistik Inferensial</button>
                <button type="button" class="list-group-item list-group-item-action">39. Bunga Tunggal/Majemuk & Anuitas</button>

                <a href="/PASdanPAT/index.html" style="text-decoration: none"> <button type="button" class="list-group-item list-group-item-action fw-bold text-danger">40. PAS dan PAT Dosman</button> </a>
                <a href="/olimpiade/index.html" style="text-decoration: none"> <button type="button" class="list-group-item list-group-item-action fw-bold text-primary">41. SOAL OLIMPIADE</button> </a>
                <a href="/akm/index.html" style="text-decoration: none"> <button type="button" class="list-group-item list-group-item-action fw-bold text-success">42. SOAL-SOAL AKM (Asesmen Kompetensi Minimal)</button> </a>
              </div>
            </div>
          </div>
          <div id="disqus_thread" class="mt-4"></div>
        </div>
      </section>
@endsection
