<div>
    <!-- Create Profile Section -->
    <section id="create-profile" class="create-profile section">

        <!-- Section Title -->
        <div class="container section-title mt-5">
            <h3 class="mb-2">Bring A FAANG Story To Light</h3>
            <p class="mb-0"> Every success story from Nigerians at FAANG+ companies deserves to be told. By sharing
                these journeys, we shine a light on their achievements, celebrate their impact, and inspire others to
                believe that they too can thrive on the global stage.</p>
        </div>
        <!-- End Section Title -->

        <div class="container">

            <div class="row mb-3">
                <div class="col-lg-12">
                    <div class="alert alert-light border-0 rounded-3 py-4 px-3" style="background-color: #F6FAF7;">
                        <h5 class="text-dark mb-3">
                            <i class="bi bi-info-circle-fill me-2"></i>
                            A few submission rules:
                        </h5>
                        <ul class="text-dark mb-0">
                            <li>Only submit stories of Nigerians who have worked at or are currently working at FAANG+
                                companies.</li>
                            <li>Ensure the information provided is accurate and verifiable before submission.</li>
                            <li>Avoid exaggerations, only share authentic achievements and real career journeys.</li>
                            <li>Profiles should highlight lessons, impact, and contributions worth inspiring others.
                            </li>
                            <li>Respect privacy, do not include sensitive personal details without consent.</li>
                            <li>Every submission will be verified before it's published to the site.</li>
                            {{-- <li>Submission does not guarantee that the profile will be published.</li> --}}
                        </ul>
                    </div>
                </div>
            </div>

            <div class="row mb-5">

                <div class="col-lg-12">
                    <form @submit.prevent="onSubmit" method="POST" role="form" class="create-profile-form"
                        x-data="{
                            siteKey: @js(config('services.recaptcha.site_key')),
                            init() {
                                // load our recaptcha
                                if (!window.recaptcha) {
                                    const script = document.createElement('script');
                                    script.src = 'https://www.google.com/recaptcha/api.js?render=' + this.siteKey;
                                    document.body.append(script);
                                }
                            },
                            async onSubmit() {
                                const token = await grecaptcha.execute('{{ config('services.recaptcha.site_key') }}', { action: 'submit' });
                                @this.set('recaptchaToken', token);
                                $wire.save();
                            }
                        
                        }">
                        @csrf
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <div class="form-floating">
                                    <input type="text" name="name"
                                        class="form-control @error('name') is-invalid @enderror" id="name"
                                        placeholder="" autofocus="on" required wire:model="name">
                                    <span class="text-danger text-sm" style="font-size: 0.75rem;">This blog post will be
                                        attributed to your name</span> <br />
                                    @error('name')
                                        <span class="error text-danger"
                                            style="font-size: 0.85rem">{{ $message }}</span>
                                    @enderror
                                    <label for="name">Name <span class="text-danger">*</span></label>
                                </div>
                            </div>
                            <div class="col-md-6 form-group">
                                <div class="form-floating">
                                    <input type="email"
                                        class="form-control @error('nominated_by') is-invalid @enderror"
                                        name="submitted_by" id="submitted_by" placeholder="" required
                                        wire:model="submitted_by">
                                    <span class="text-danger text-sm" style="font-size: 0.75rem;">You will be notified
                                        via
                                        this mail once profile is published</span> <br />
                                    @error('submitted_by')
                                        <span class="error text-danger"
                                            style="font-size: 0.85rem">{{ $message }}</span>
                                    @enderror
                                    <label for="submitted_by">Your mail <span class="text-danger">*</span></label>
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <div class="form-floating">
                                    <textarea class="form-control @error('blog_post') is-invalid @enderror" name="blog_post" wire:model="blog_post"
                                        id="blog_post" placeholder=""></textarea>
                                    @error('blog_post')
                                        <span class="error text-danger"
                                            style="font-size: 0.85rem">{{ $message }}</span>
                                    @enderror
                                    @error('recaptchaToken')
                                        <span class="error text-danger"
                                            style="font-size: 0.85rem">{{ $message }}</span>
                                    @enderror
                                    <label for="blog_post">Blog Post</label>
                                </div>
                            </div>
                            <div class="text-center mt-2">
                                <button type="submit"
                                    class="btn btn-primary d-inline-flex align-items-center justify-content-center gap-2">
                                    <div class="spinner-border spinner-border-sm text-light" role="status" wire:loading
                                        wire:target="save">
                                        <span class="visually-hidden">Loading...</span>
                                    </div>
                                    <span wire:loading.remove wire:target="save">Submit</span>
                                    <span wire:loading wire:target="save">Submitting...</span>
                                </button>
                            </div>
                    </form>
                </div><!-- End Contact Form -->

            </div>

        </div>

    </section>
    <!-- /Create Profile Section -->
</div>
