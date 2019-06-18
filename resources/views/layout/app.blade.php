<!DOCTYPE html>
<html lang="fr">

<head>


    <title lang="fr"></title>


    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">

    <meta name="author" content="Yassine Ben Hassoun">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Schema.org markup for Google+ -->
    <meta itemprop="name" content="{{ trans('app.meta-name-google') }}">
    <meta itemprop="description" content="{{ trans('app.meta-description-google') }}">
    <meta itemprop="image" content="{{ asset('/img/logo-large.jpg') }}">

    <!-- Twitter Card data -->
    <meta name="twitter:card" content="{{ asset('/img/logo-large.jpg') }}">
    <meta name="twitter:title" content="{{ trans('app.meta-title-twitter') }}">
    <meta name="twitter:description" content="{{ trans('app.meta-description-twitter') }}">
    <!-- Twitter summary card with large image must be at least 280x150px -->
    <meta name="twitter:image:src" content="{{ asset('/img/logo-large.jpg') }}">

    <!-- Open Graph data -->
    <meta property="og:title" content="{{ trans('app.meta-title-og') }}" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="http://moneytag.fr/" />
    <meta property="og:image" content="{{ asset('/img/logo-large.jpg') }}" />
    <meta property="og:description" content="{{ trans('app.meta-description-og') }}" />
    <meta property="og:site_name" content="{{ trans('app.meta-name-og') }}" />



    <link href="https://fonts.googleapis.com/css?family=Hind+Siliguri" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{ asset('css/theme.css') }}" rel="stylesheet">



</head>
<body>
    @include('layout.header')
    <section id="container">

        @include('layout.sidebar')
        @include('layout.flash-message')
        @yield('content')
        @include('layout.footer')


    </section>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>


