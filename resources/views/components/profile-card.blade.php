@props(['profile'])

<div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="400">
    <div class="team-member">
        <div class="member-img">
            <img src="{{ $profile->image ? asset('storage/profile/' . $profile->image) : asset('assets/img/team/team-1.jpg') }}"
                class="img-fluid" alt="">
            <div class="social">
                <a href="{{ $profile->twitter_url }}"><i class="bi bi-twitter-x"></i></a>
                <a href="{{ $profile->website_url }}"><i class="bi bi-globe"></i></a>
                <a href="{{ $profile->instagram_url }}"><i class="bi bi-instagram"></i></a>
                <a href="{{ $profile->linkedin_url }}"><i class="bi bi-linkedin"></i></a>
                {{-- <a href="{{ $profile->linkedin_url }}"><i class="bi bi-linkedin"></i></a> --}}
            </div>
        </div>
        <div class="member-info">
            <h4>{{ $profile->name }}</h4>
            <span>{{ $profile->job_title }}</span>
        </div>
    </div>
</div>
