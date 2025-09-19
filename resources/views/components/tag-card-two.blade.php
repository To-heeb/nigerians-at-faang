@props(['tag', 'delay'])

<div class="col" data-aos="fade-up" data-aos-delay="{{ $delay }}">
    <div class="features-item" wire:ignore.self>
        <h3><a href="{{ route('tags.show', $tag) }}" class="stretched-link">#{{ ucwords($tag->name) }}</a></h3>
    </div>
</div>
