<!DOCTYPE html>
<html lang="bg">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css?family=Nunito&display=swap" rel="stylesheet">

    <!-- Meta -->
    <title>{{ $metaTitle ?? 'Doctors Gonovski – Специалисти по кардиология и ортопедия' }}</title>
    <meta name="description"
        content="{{ $metaDescription ?? 'Медицински кабинет Гоновски – експертна грижа от доказани специалисти по кардиология и ортопедия в Пловдив и Асеновград.' }}">
    <meta name="keywords"
        content="{{ $metaKeywords ?? 'кардиолог, ортопед, доктор Гоновски, доктор Кулевска, Пловдив, преглед, медицина' }}">
    <meta name="author" content="{{ $metaAuthor ?? 'Doctors Gonovski' }}">

    <!-- Favicons -->
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('images/logo_heart-1.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('images/logo_heart-1.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('images/logo_heart-1.png') }}">
    <link rel="shortcut icon" href="{{ asset('images/logo_heart-1.png') }}">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:title" content="{{ $metaTitle ?? 'Doctors Gonovski – Кардиология и Ортопедия' }}">
    <meta property="og:description"
        content="{{ $metaDescription ?? 'Посетете доказани специалисти – д-р Кристиян Гоновски и д-р Иванка Кулевска-Гоновска. Медицински кабинет с грижа към пациента.' }}">
    <meta property="og:image" content="{{ asset('images/logo_heart-1.png') }}">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:site_name" content="Doctors Gonovski">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>

<body class="flex flex-col h-auto antialiased overflow-x-hidden">
    <x-header />

    <main class="flex flex-1 flex-col">
        {{ $slot }}
    </main>

    <x-footer />

    @livewire('cookie-consent')

    @livewireScripts

</body>

</html>
