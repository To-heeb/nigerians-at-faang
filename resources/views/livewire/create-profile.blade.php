<div>
    <!-- Create Profile Section -->
    <section id="contact" class="create-profile section">

        <!-- Section Title -->
        <div class="container section-title mt-5">
            <h3 class="mb-2">Nominate a Hidden Gem</h3>
            <p class="mb-0"> We're documenting every Nigerian win at FAANG+ companies.
                Submit a profile to give them recognition and pay forward their
                hard-earned lessons to the next generation.</p>
        </div>
        <!-- End Section Title -->

        {{-- <div class="container">

        </div> --}}

        <div class="container" data-aos="fade">

            <div class="row mb-3">
                <div class="alert alert-light border-0 rounded-3 p-4" style="background-color: #F6FAF7;">
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

            <div class="row mb-5">

                <div class="col-lg-12">
                    <form action="{{ route('contact.send') }}" method="POST" role="form"
                        class="create-profile-form">
                        @csrf
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <div class="form-floating">
                                    <input type="text" name="name" class="form-control required-field"
                                        id="name" placeholder="" required autofocus="on">
                                    <label for="name">Name <span class="text-danger">*</span></label>
                                </div>
                                {{-- data-bs-toggle="tooltip" data-bs-placement="top"
                                    data-bs-custom-class="custom-tooltip"
                                    data-bs-title="This top tooltip is themed via CSS variables." --}}
                            </div>
                            <div class="col-md-6 form-group">
                                <div class="form-floating">
                                    <select class="form-select form-select-lg" name="company_id" id="company_id"
                                        aria-label="Large select example">
                                        <option selected> Select Company</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                    <label for="company_id">Company <span class="text-danger">*</span></label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <div class="form-floating">
                                <input type="text" class="form-control" name="job_title" id="job_title"
                                    placeholder="" required="">
                                <label for="job_title">Job Title <span class="text-danger">*</span></label>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-6 form-group">
                                <div class="form-floating">
                                    <input type="url" name="linkedin_url" class="form-control" id="linkedin_url"
                                        placeholder="" title="Please add one of the links either(X or Linkedin)">
                                    <label for="linkedin_url">LinkedIn Url</label>
                                </div>
                            </div>
                            <div class="col-md-6 form-group mt-3 mt-md-0">
                                <div class="form-floating">
                                    <input type="url" class="form-control" name="twitter_url" id="twitter_url"
                                        placeholder="" title="Please add one of the links either(X or Linkedin)">
                                    <label for="twitter_url">X Url</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <div class="form-floating">
                                <textarea class="form-control" name="short_bio" id="short_bio" placeholder=""></textarea>
                                <label for="short_bio">Short Bio</label>
                            </div>
                        </div>
                        {{-- <div class="my-3">
                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Your message has been sent. Thank you!</div>
                        </div> --}}
                        <div class="text-center mt-2"><button type="submit">Send Message</button></div>
                    </form>
                </div><!-- End Contact Form -->

            </div>

        </div>

    </section>
    <!-- /Create Profile Section -->
</div>
