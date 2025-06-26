@props(['profile', 'delay'])

<div class="col" data-aos="fade-up" data-aos-delay="{{ $delay }}">
    <div class="card" style="">
        <div class="card-body">
            <p class="card-text d-flex align-items-center">
                <img src="{{ $profile->image ? asset('storage/profile/' . $profile->image) : asset('storage/profile/avatar-head-profile.webp') }}"
                    class="rounded-circle img-fluid border border-success-subtle me-3" width="50px" height="50px"
                    alt="{{ $profile->name }}'s image">
                <span>
                    <strong><a href="{{ route('profiles.show', $profile) }}">
                            {{ $profile->name }} </a>
                    </strong><br />
                    <small>{{ $profile->job_title }}</small>
                </span>
            </p>
        </div>
    </div>
</div>
