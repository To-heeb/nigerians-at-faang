<x-app-layout>

    <x-slot:title>
        Blogs
    </x-slot>

    <x-slot:type>
        article
    </x-slot>

    <x-slot:description>
        {{ config('app.name') }} Blogs
    </x-slot>

    <!-- Page Title -->
    <x-header-banner page="Blogs" />
    <!-- End Page Title -->

    <livewire:blogs>

</x-app-layout>
