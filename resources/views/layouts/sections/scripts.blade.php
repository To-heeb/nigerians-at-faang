  <!-- Vendor JS Files -->
  <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>
  <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/waypoints/noframework.waypoints.js') }}"></script>
  <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>

  <!-- Main JS File -->
  <script src="{{ asset('assets/js/main.js') }}"></script>
  <script>
      document.addEventListener("DOMContentLoaded", function() {
          const appUrl = "{{ config('app.url') }}";
          const links = document.querySelectorAll("a[href^='http']");
          links.forEach(link => {
              try {
                  const url = new URL(link.href);
                  if (!url.hostname.includes(new URL(appUrl).hostname)) {
                      url.searchParams.set("ref", appUrl);
                      link.href = url.toString();
                  }
              } catch (e) {
                  // ignore invalid URLs
              }
          });
      });
  </script>



  <!-- BEGIN: Page JS-->
  @stack('page-script')
  <!-- END: Page JS-->
