<!DOCTYPE html>
<html lang="en">

    @include('luar.head')

  <body id="home">
        @include('luar.navbar')

            @yield('content')

        @include('konten.00semuamateri.footer')
        @include('luar.script')
  </body>

</html>
