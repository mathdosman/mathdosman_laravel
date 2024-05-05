


<script>
    const scriptURL = 'https://script.google.com/macros/s/AKfycbw3ucLIBdBTnwkwMatakaOsjTwvIomWmAA2yEspRzpcDjw_CwktqaR-5fzM5NRNIIeLHQ/exec';
    const form = document.forms['input-form'];
    const btnKirim = document.querySelector('.btn-kirim');
    const btnBukti = document.querySelector('.btn-bukti');
    const btnLoading = document.querySelector('.btn-loading');
    const myAlert = document.querySelector('.my-alert');

    form.addEventListener('submit', (e) => {
    e.preventDefault();
    // ketika tombol submit di klik
    // tampilkan tombol loading, hilangkan tombol kirim
    btnLoading.classList.toggle('d-none');
    btnKirim.classList.toggle('d-none');

    fetch(scriptURL, { method: 'POST', body: new FormData(form) })
    .then((response) => {
        btnBukti.classList.toggle('d-none');
        // tampilkan tombol KIRIM, hilangkan tombol loading
        btnLoading.classList.toggle('d-none');
        // btnKirim.classList.toggle('d-none');

        // location.reload();
        //  tambahkan Alert
        myAlert.classList.toggle('d-none');G-WWKYNJM30L
        })
        .catch((error) => console.error('Error!', error.message));
    });
</script>


<!-- Libs JS -->
<script src="{{asset('/dist/libs/apexcharts/dist/apexcharts.min.js?1684106062')}}" defer></script>
<script src="{{asset('/dist/libs/jsvectormap/dist/js/jsvectormap.min.js?1684106062')}}" defer></script>
<script src="{{asset('/dist/libs/jsvectormap/dist/maps/world.js?1684106062')}}" defer></script>
<script src="{{asset('/dist/libs/jsvectormap/dist/maps/world-merc.js?1684106062')}}" defer></script>
<!-- Tabler Core -->
<script src="{{asset('/dist/js/tabler.min.js?1684106062')}}" defer></script>
<script src="{{asset('/dist/js/demo.min.js?1684106062')}}" defer></script>

<script>
    /**
    *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
    *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables    */
    /*
    var disqus_config = function () {
    this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
    this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
    };
    */
    (function() { // DON'T EDIT BELOW THIS LINE
    var d = document, s = d.createElement('script');
    s.src = 'https://www-mathdosman-com.disqus.com/embed.js';
    s.setAttribute('data-timestamp', +new Date());
    (d.head || d.body).appendChild(s);
    })();
</script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>


@stack('myscript')
