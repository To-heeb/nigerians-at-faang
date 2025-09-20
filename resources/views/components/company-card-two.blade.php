@props(['company', 'delay'])

<div class="col" data-aos="fade-up" data-aos-delay="{{ $delay }}">
    <div class="features-item" wire:ignore.self>
        @if ($company->mini_logo)
            <img src="{{ cdn_image('storage/company/' . $company->mini_logo) }}" alt="{{ $company->name }}'s logo"
                width="32px" height="32px" style="padding-right: 10px;">
        @else
            <i class="bi bi-x-diamond" style="color: #ffbb2c"></i>
        @endif
        <h3><a href="{{ route('companies.show', $company) }}" class="stretched-link">{{ $company->name }}</a></h3>
    </div>
</div>
