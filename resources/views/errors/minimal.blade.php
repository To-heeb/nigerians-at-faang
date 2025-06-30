<x-app-layout>

    <x-slot:title>
        @yield('code')
    </x-slot>

    <!-- Error Section -->
    <section class="error section d-flex align-items-center position-relative">
        <div class="floating-shapes">
            <div class="shape"></div>
            <div class="shape"></div>
            <div class="shape"></div>
        </div>
        <div class="container position-relative" style="z-index: 2;">
            <div class="text-center text-white" data-aos="fade-up">
                <div class="error-number mb-2">@yield('code')</div>
                <h3 class="display-3 fw-bold mb-1 text-shadow">Oops! Page Not Found</h3>
                <p class="fs-5 mb-4 mx-auto" style="max-width: 600px; opacity: 0.9;">
                    @yield('message')
                </p>
                <div class="d-flex flex-column flex-md-row justify-content-center gap-3">
                    <a href="/" class="btn btn-success btn-sm px-2 py-1 rounded-pill fw-semibold">
                        <i class="bi bi-house-door me-2"></i>Go Home
                    </a>
                    <a href="javascript:history.back()"
                        class="btn btn-outline-light btn-sm px-2 py-1 rounded-pill fw-semibold">
                        <i class="bi bi-arrow-left me-2"></i>Go Back
                    </a>
                </div>
            </div>
        </div>
    </section>

</x-app-layout>
