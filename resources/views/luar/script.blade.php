<script>
    const scriptURL = 'https://script.google.com/macros/s/AKfycbxM-yRPTRCTrhNtaRANe6CDy-q0fs4sxpHm9eQThVytZ1aJxOPj44OvrXKuT4sUv3_S/exec';
    const form = document.forms['wpu-cantact-form'];
    const btnKirim = document.querySelector('.btn-kirim');
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
          // tampilkan tombol KIRIM, hilangkan tombol loading
          btnLoading.classList.toggle('d-none');
          btnKirim.classList.toggle('d-none');
          //  tambahkan Alert
          myAlert.classList.toggle('d-none');
          console.log('Success!', response);
          form.reset();
        })
        .catch((error) => console.error('Error!', error.message));
    });
  </script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>

<script>
  AOS.init({
    once: true,
  });
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.1/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.1/TextPlugin.min.js"></script>

<script>
    gsap.registerPlugin(TextPlugin);
    gsap.to('.lead', { duration: 2, delay: 1.5, text: 'I Putu Darma Putra, S.Pd.' });
    gsap.from('.jumbotron img', { duration: 1, y: -100, opacity: 0, ease: 'bounce' });
    gsap.from('.display-4', { duration: 1, x: -60, opacity: 0, delay: 0.5, ease: 'back' });
  </script>

<amp-auto-ads type="adsense" data-ad-client="ca-pub-4649430696681971"> </amp-auto-ads>

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

