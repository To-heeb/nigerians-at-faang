<x-app-layout>

    <x-slot:title>
        Unsubscribed
    </x-slot>

    <!-- Resubscribe Section -->
    <section class="resubscribe section d-flex align-items-center position-relative">
        <div class="floating-shapes">
            <div class="shape"></div>
            <div class="shape"></div>
            <div class="shape"></div>
        </div>
        <div class="container position-relative" style="z-index: 2;">
            <div class="text-center text-white" data-aos="fade-up">
                <div class="resubscribe-icon mb-3">
                    <i class="bi bi-envelope-check-fill text-success" style="font-size: 5rem;"></i>
                </div>
                <h3 class="display-4 fw-bold mb-2 text-shadow">Welcome Back! 🎉</h3>
                <p class="fs-5 mb-4 mx-auto text-dark" style="max-width: 600px; opacity: 0.9;">
                    You’ve successfully re-subscribed to our newsletter.
                    We’re excited to have you with us again! Expect the latest updates delivered right to your inbox 🚀
                </p>
                <div class="d-flex flex-column flex-md-row justify-content-center gap-3">
                    <a href="/" class="btn btn-success btn-sm px-3 py-2 rounded-pill fw-semibold">
                        <i class="bi bi-house-door me-2"></i>Go Home
                    </a>
                    <a href="{{ route('blogs.index') }}"
                        class="btn btn-outline-dark btn-sm px-3 py-2 rounded-pill fw-semibold">
                        <i class="bi bi-journal-text me-2"></i>Read Our Blog
                    </a>
                </div>
            </div>
        </div>
    </section>

</x-app-layout>
