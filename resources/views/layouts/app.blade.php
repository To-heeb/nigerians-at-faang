<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
    <title>
        {{ isset($title) ? config('app.name') . ' - ' . $title : config('app.name') . ' - ' . config('app.title') }}
    </title>
    <meta name="description" content="{{ isset($description) ? $description : config('app.description') }}">
    <meta name="keywords" content="{{ config('app.keywords') }}">
    <meta name="author" content="{{ config('app.author') }}">
    <meta name="application-name" content="{{ config('app.name') }}">
    <meta name="copyright" content="{{ config('app.name') }}">
    <meta name="robots" content="all">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="referrer" content="no-referrer-when-downgrade">

    <!-- Dublin Core basic info -->
    <meta name="dcterms.Format" content="text/html">
    <meta name="dcterms.Language" content="{{ config('app.locale') }}">
    <meta name="dcterms.Identifier" content="{{ url()->current() }}">
    <meta name="dcterms.Relation" content="{{ config('app.name') }}">
    <meta name="dcterms.Publisher" content="{{ config('app.name') }}">
    <meta name="dcterms.Type" content="text/html">
    <meta name="dcterms.Coverage" content="{{ url()->current() }}">
    <meta name="dcterms.Title" content="{{ !empty($title) ? $title : config('laravel-seo-manager.title') }}">
    <meta name="dcterms.Subject" content="{{ config('app.keywords') }}">
    <meta name="dcterms.Contributor" content="{{ config('app.author') }}">
    <meta name="dcterms.Description" content="{{ isset($description) ? $description : config('app.description') }}}">

    <!--GEO Tags-->
    <meta name="DC.title" content="{{ config('app.name') }}" />
    <meta name="geo.region" content="South-West zone" />
    <meta name="geo.placename" content="Lagos" />
    <meta name="geo.position" content="4.870467,6.993388" />
    <meta name="ICBM" content="4.870467,6.993388" />

    <!-- Facebook OpenGraph -->
    <meta property="og:locale" content="{{ config('app.locale') }}">
    <meta property="og:type" content="{{ !empty($type) ? $type : 'website' }}">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title"
        content="{{ isset($title) ? config('app.name') . ' - ' . $title : config('app.name') . ' - ' . config('app.title') }}">
    <meta property="og:description" content="{{ isset($description) ? $description : config('app.description') }}">
    <meta property="og:image" content="{{ asset('assets/img/logos/nigerians@faang-vertical.png') }}">
    <meta property="og:site_name" content="{{ config('app.name') }}">
    <meta property="fb:app_id" content="{{ config('services.facebook.app_id') }}" />

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="{{ '@' . config('app.name') }}">
    <meta name="twitter:title"
        content="{{ isset($title) ? config('app.name') . ' - ' . $title : config('app.name') . ' - ' . config('app.title') }}">
    <meta name="twitter:description" content="{{ isset($description) ? $description : config('app.description') }}">
    <meta name="twitter:image" content="{{ asset('assets/img/logos/nigerians@faang-vertical.png') }}">

    <link href="{{ url()->current() }}" rel="canonical" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/notyf@3/notyf.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/cookie-consent/css/cookie-consent.css') }}">
    @include('layouts/sections/styles')
    <!-- Google tag (gtag.js) -->
    <script async
        src="https://www.googletagmanager.com/gtag/js?id={{ config('services.google_analytics.measurement_id') }}">
    </script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', "{{ config('services.google_analytics.measurement_id') }}");
    </script>
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
                    x: 'right',
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
                    x: 'right',
                    y: 'top',
                },
            })
            notyf.error('{{ session('error') }}')
        </script>
    @endif

</body>

</html>
