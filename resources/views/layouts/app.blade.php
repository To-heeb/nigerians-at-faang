<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
    <title>{{ isset($title) ? config('app.name') . ' - ' . $title : config('app.name') . ' - ' . config('app.title') }}
    </title>
    <meta name="description" content="{{ config('app.description') }}">
    <meta name="keywords" content="{{ config('app.keywords') }}">

    @include('layouts/sections/styles')
</head>

<body class="">

    <!-- Header -->
    <x-header></x-header>
    <!-- / Header -->

    <main class="main">
        <!-- Content -->
        {{ $slot }}
        <!-- / Content -->
    </main>
    <!-- Footer -->
    <x-footer></x-footer>
    <!-- / Footer -->

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Preloader -->
    <div id="preloader"></div>


    <!-- Include Scripts -->
    @include('layouts/sections/scripts')

    <script src="https://cdn.jsdelivr.net/npm/notyf@3/notyf.min.js"></script>

    {{-- session()->has('success') --}}
    @if (session()->has('success'))
        <script>
            var notyf = new Notyf({
                dismissible: true,
                duration: 4000,
                position: {
                    x: 'center',
                    y: 'top',
                },
            })
            notyf.success('{{ session('success') }}')
        </script>
    @endif

    @if (session()->has('error'))
        <script>
            var notyf = new Notyf({
                dismissible: true,
                duration: 3000,
                position: {
                    x: 'center',
                    y: 'top',
                },
            })
            notyf.error('{{ session('error') }}')
        </script>
    @endif

</body>

</html>
