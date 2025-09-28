  <!-- Vendor JS Files -->
  <script src="{{ cdn_asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ cdn_asset('assets/vendor/php-email-form/validate.js') }}"></script>
  <script src="{{ cdn_asset('assets/vendor/aos/aos.js') }}"></script>
  <script src="{{ cdn_asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ cdn_asset('assets/vendor/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
  <script src="{{ cdn_asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ cdn_asset('assets/vendor/waypoints/noframework.waypoints.js') }}"></script>
  <script src="{{ cdn_asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>

  <!-- Main JS File -->
  <script src="{{ cdn_asset('assets/js/main.js') }}"></script>
  <script>
      document.addEventListener("DOMContentLoaded", function() {
          const appUrl = "{{ config('app.url') }}";
          const links = document.querySelectorAll("a[href^='http']");
          const appHostname = new URL(appUrl).hostname;

          // List of domains to exempt (no ref param added)
          const exemptDomains = [
              "localhost.test",
              "korapay.com",
              "github.com"
          ];

          links.forEach(link => {
              try {
                  const url = new URL(link.href);
                  if (url.hostname.includes(appHostname)) return;
                  if (exemptDomains.some(domain => url.hostname.includes(domain))) return;
                  url.searchParams.set("ref", appUrl);
                  link.href = url.toString();
              } catch (e) {
                  // ignore invalid URLs
              }
          });
      });

      document.addEventListener("DOMContentLoaded", () => {
          const toggle = document.getElementById("resendToggle");
          const form = document.getElementById("newsletter-email-form");
          const submitBtn = document.getElementById("submit-btn");
          const sentMessage = document.getElementById("sent-message");

          toggle.addEventListener("change", () => {
              if (toggle.checked) {
                  form.action = "{{ route('subscribers.resend') }}";
                  submitBtn.value = "Resend 🚀";
                  //   sentMessage.textContent = "Verification email has been resent. Thank you!";
              } else {
                  form.action = "{{ route('subscribers.store') }}";
                  submitBtn.value = "Join 🚀";
                  //   sentMessage.textContent = "Your subscription request has been sent. Thank you!";
              }
          });
      });
  </script>



  <!-- BEGIN: Page JS-->
  @stack('page-script')
  <!-- END: Page JS-->
