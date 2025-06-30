<div>
    <!-- Create Profile Section -->
    <section id="create-profile" class="create-profile section">

        <!-- Section Title -->
        <div class="container section-title mt-5">
            <h3 class="mb-2">Nominate a Hidden Gem</h3>
            <p class="mb-0"> We're documenting every Nigerian win at FAANG+ companies.
                Submit a profile to give them recognition and pay forward their
                hard-earned lessons to the next generation.</p>
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
                            <li>Every submission will be verified before it's published to the site.</li>
                            <li>Search if profile already exists before a submission, as duplicated profile will not be
                                published</li>
                            <li>Submission does not guarantee that the profile will be published.</li>
                        </ul>
                        {{-- <li>No naughty, hate-speech or projects showing violence will be published.</li> --}}
                        {{-- <li>Be nice, be kind, be respectful <span class="text-danger">❤️</span>.</li> --}}
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
                                    @error('name')
                                        <span class="error text-danger"
                                            style="font-size: 0.85rem">{{ $message }}</span>
                                    @enderror
                                    <label for="name">Name <span class="text-danger">*</span></label>
                                </div>
                            </div>
                            <div class="col-md-6 form-group">
                                <div class="form-floating">
                                    <select wire:model="company_id"
                                        class="form-select form-select-lg @error('company_id') is-invalid @enderror"
                                        name="company_id" id="company_id" required aria-label="Large select example">
                                        <option selected> Select Company</option>
                                        @foreach ($companies as $company)
                                            <option value="{{ $company->id }}" @selected(old('company_id') == $company)>
                                                {{ ucwords($company->name) }}
                                            </option>
                                        @endforeach
                                    </select>
                                    @error('company_id')
                                        <span class="error text-danger"
                                            style="font-size: 0.85rem">{{ $message }}</span>
                                    @enderror
                                    <label for="company_id">Company <span class="text-danger">*</span></label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <div class="form-floating">
                                <input type="text" class="form-control @error('job_title') is-invalid @enderror"
                                    name="job_title" id="job_title" placeholder="" wire:model="job_title" required>
                                {{-- <input type="hidden" id="g-recaptcha-response" name="recaptchaToken"
                                    wire:model.defer="{{ config('services.recaptcha.site_key') }}"> --}}
                                @error('job_title')
                                    <span class="error text-danger" style="font-size: 0.85rem">{{ $message }}</span>
                                @enderror
                                <label for="job_title">Job Title <span class="text-danger">*</span></label>
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <div class="form-floating">
                                <input type="email" class="form-control @error('nominated_by') is-invalid @enderror"
                                    name="nominated_by" id="nominated_by" placeholder="" required
                                    wire:model="nominated_by">
                                <span class="text-danger text-sm" style="font-size: 0.75rem;">You will be notified via
                                    this mail once profile is published</span> <br />
                                @error('nominated_by')
                                    <span class="error text-danger" style="font-size: 0.85rem">{{ $message }}</span>
                                @enderror
                                <label for="nominated_by">Your mail <span class="text-danger">*</span></label>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-6 form-group">
                                <div class="form-floating">
                                    <input type="url" name="linkedin_url"
                                        class="form-control @error('linkedin_url') is-invalid @enderror"
                                        id="linkedin_url" placeholder="" wire:model="linkedin_url"
                                        title="Please add one of the links either(X or Linkedin)">
                                    @error('linkedin_url')
                                        <span class="error text-danger"
                                            style="font-size: 0.85rem">{{ $message }}</span>
                                    @enderror
                                    <label for="linkedin_url">LinkedIn Url</label>
                                </div>
                            </div>
                            <div class="col-md-6 form-group mt-3 mt-md-0">
                                <div class="form-floating">
                                    <input type="url"
                                        class="form-control @error('twitter_url') is-invalid @enderror"
                                        name="twitter_url" id="twitter_url" placeholder="" wire:model="twitter_url"
                                        title="Please add one of the links either(X or Linkedin)">
                                    @error('twitter_url')
                                        <span class="error text-danger"
                                            style="font-size: 0.85rem">{{ $message }}</span>
                                    @enderror
                                    <label for="twitter_url">Twitter/X Url</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <div class="form-floating">
                                <textarea class="form-control @error('short_bio') is-invalid @enderror" name="short_bio" wire:model="short_bio"
                                    id="short_bio" placeholder=""></textarea>
                                @error('short_bio')
                                    <span class="error text-danger" style="font-size: 0.85rem">{{ $message }}</span>
                                @enderror
                                @error('recaptchaToken')
                                    <span class="error text-danger" style="font-size: 0.85rem">{{ $message }}</span>
                                @enderror
                                <label for="short_bio">Short Bio</label>
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
