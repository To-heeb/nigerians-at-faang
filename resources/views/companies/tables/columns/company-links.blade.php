{{-- @php
    $links = [
        'Website' => $getRecord()->information_website,
        'Careers' => $getRecord()->career_page_url,
        'LinkedIn' => $getRecord()->linkedin_url,
        'Twitter' => $getRecord()->twitter_url,
        'YouTube' => $getRecord()->youtube_url,
        'Wikipedia' => $getRecord()->wikipedia_url,
    ];
@endphp

@if (collect($links)->filter()->isNotEmpty())
    <x-filament::dropdown>
        <x-slot name="trigger">
            <x-filament::button size="sm" color="primary">
                Links
                <x-heroicon-m-chevron-down class="w-4 h-4 ml-1" />
            </x-filament::button>
        </x-slot>

        <x-filament::dropdown.list>
            @foreach ($links as $label => $url)
                @if ($url)
                    <x-filament::dropdown.list.item tag="a" href="{{ $url }}" target="_blank">
                        {{ $label }}
                    </x-filament::dropdown.list.item>
                @endif
            @endforeach
        </x-filament::dropdown.list>
    </x-filament::dropdown>
@else
    <span class="text-gray-400">No Links</span>
@endif --}}


{{-- @php
    $links = [
        'Website' => $getRecord()->information_website,
        'Careers' => $getRecord()->career_page_url,
        'LinkedIn' => $getRecord()->linkedin_url,
        'Twitter' => $getRecord()->twitter_url,
        'YouTube' => $getRecord()->youtube_url,
        'Wikipedia' => $getRecord()->wikipedia_url,
    ];
@endphp

@if (collect($links)->filter()->isNotEmpty())
    <div wire:ignore onclick="event.stopPropagation()">
        <x-filament::dropdown>
            <x-slot name="trigger">
                <x-filament::button size="sm" color="primary" onclick="event.stopPropagation()">
                    Links
                    <x-heroicon-m-chevron-down class="w-4 h-4 ml-1" />
                </x-filament::button>
            </x-slot>

            <x-filament::dropdown.list>
                @foreach ($links as $label => $url)
                    @if ($url)
                        <x-filament::dropdown.list.item tag="a" href="{{ $url }}" target="_blank"
                            onclick="event.stopPropagation()">
                            {{ $label }}
                        </x-filament::dropdown.list.item>
                    @endif
                @endforeach
            </x-filament::dropdown.list>
        </x-filament::dropdown>
    </div>
@else
    <span class="text-gray-400">No Links</span>
@endif --}}


@php
    $links = [
        'Website' => $getRecord()->information_website,
        'Careers' => $getRecord()->career_page_url,
        'LinkedIn' => $getRecord()->linkedin_url,
        'Twitter' => $getRecord()->twitter_url,
        'YouTube' => $getRecord()->youtube_url,
        'Wikipedia' => $getRecord()->wikipedia_url,
    ];
@endphp

@if (collect($links)->filter()->isNotEmpty())
    <div x-data="{ open: false }" x-on:mouseenter="open = true" x-on:mouseleave="open = false" class="relative">
        <x-filament::button size="sm" color="primary">
            Links
            <x-heroicon-m-chevron-down class="w-4 h-4 ml-1" />
        </x-filament::button>

        <div x-show="open" x-cloak class="absolute z-10 mt-1 w-40 rounded-lg bg-white shadow-lg border border-gray-200">
            <ul class="py-1 text-sm text-gray-700">
                @foreach ($links as $label => $url)
                    @if ($url)
                        <li>
                            <a href="{{ $url }}" target="_blank" class="block px-4 py-2 hover:underline">
                                {{ $label }}
                            </a>
                        </li>
                    @endif
                @endforeach
            </ul>
        </div>
    </div>
@else
    <span class="text-gray-400">No Links</span>
@endif
