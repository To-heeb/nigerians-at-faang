@props(['profile', 'delay'])

<div class="col-lg-3 col-md-4 col-sm-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="{{ $delay }}">
    <div class="team-member featured">
        {{-- <p class="popular">{{ $profile->company->name }}</p> --}}
        <p class="popular"><a href="{{ route('companies.show', $profile->company) }}" class="white-link"
                id="white-link">{{ $profile->company->name }}</a>
        </p>
        <div class="member-img">
            <img src="{{ $profile->image ? cdn_image('storage/profile/' . $profile->image) : cdn_image('storage/profile/avatar-head-profile.webp') }}"
                class="img-fluid team-member-image" alt="{{ $profile->image }}'s image">
            <div class="social">
                @if ($profile->twitter_url)
                    <a href="{{ $profile->twitter_url }}" target="__blank"><i class="bi bi-twitter-x"></i></a>
                @endif
                @if ($profile->website_url)
                    <a href="{{ $profile->website_url }}" target="__blank"><i class="bi bi-globe"></i></a>
                @endif
                @if ($profile->instagram_url)
                    <a href="{{ $profile->instagram_url }}" target="__blank"><i class="bi bi-instagram"></i></a>
                @endif
                @if ($profile->linkedin_url)
                    <a href="{{ $profile->linkedin_url }}" target="__blank"><i class="bi bi-linkedin"></i></a>
                @endif
                {{-- <a href="{{ $profile->linkedin_url }}"><i class="bi bi-linkedin"></i></a> --}}
            </div>
        </div>
        <div class="member-info">
            <h4><a href="{{ route('profiles.show', $profile) }}">{{ $profile->name }} </a></h4>
            <span>{{ $profile->job_title }}</span>
        </div>
    </div>
</div>
