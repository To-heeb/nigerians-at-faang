<x-app-layout>

    <x-slot:title>
        Unsubscribed
    </x-slot>

    <!-- Unsubscribe Section -->
    <section class="unsubscribe section d-flex align-items-center position-relative">
        <div class="floating-shapes">
            <div class="shape"></div>
            <div class="shape"></div>
            <div class="shape"></div>
        </div>
        <div class="container position-relative" style="z-index: 2;">
            <div class="text-center text-white" data-aos="fade-up">
                <div class="unsubscribe-icon mb-3">
                    <i class="bi bi-envelope-x-fill text-danger" style="font-size: 5rem;"></i>
                </div>
                <h3 class="display-4 fw-bold mb-2 text-shadow">You’ve Been Unsubscribed</h3>
                <p class="fs-5 mb-4 mx-auto text-dark" style="max-width: 600px; opacity: 0.9;">
                    We're sorry to see you go. You will no longer receive our newsletter updates.
                    If this was a mistake, you can re-subscribe anytime 🚀
                </p>
                <div class="d-flex flex-column flex-md-row justify-content-center gap-3">
                    <a href="/" class="btn btn-success btn-sm px-3 py-2 rounded-pill fw-semibold">
                        <i class="bi bi-house-door me-2"></i>Go Home
                    </a>
                    <a href="#newsletter" class="btn btn-outline-dark btn-sm px-3 py-2 rounded-pill fw-semibold">
                        <i class="bi bi-envelope-plus me-2"></i>Re-Subscribe
                    </a>
                </div>
            </div>
        </div>
    </section>

</x-app-layout>
