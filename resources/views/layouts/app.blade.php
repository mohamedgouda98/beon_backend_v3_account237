<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <!-- Dynamic Title with Keywords -->
    <title>@yield('title', 'Beon - نظام واتساب للمدير التنفيذي | WhatsApp Executive Manager')</title>
    
    <!-- Meta Description with Keywords -->
    <meta name="description" content="@yield('description', 'Beon نظام إدارة واتساب للمدير التنفيذي - قراءة الرسائل وإدارة المحادثات | WhatsApp management system for executives - read and manage messages')">
    
    <!-- Meta Keywords -->
    <meta name="keywords" content="@yield('keywords', 'beon, واتساب, whatsapp, المدير, manager, التنفيذي, executive, read, قراءة, رسائل, messages')">
    
    <!-- Open Graph Tags -->
    <meta property="og:title" content="@yield('og_title', 'Beon - نظام واتساب للمدير التنفيذي')">
    <meta property="og:description" content="@yield('og_description', 'نظام متكامل لإدارة واتساب للمدير التنفيذي')">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:image" content="@yield('og_image', asset('images/og-image.jpg'))">
    <meta property="og:locale" content="ar_AR">
    <meta property="og:locale:alternate" content="en_US">
    
    <!-- Twitter Card Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="@yield('twitter_title', 'Beon - نظام واتساب للمدير التنفيذي')">
    <meta name="twitter:description" content="@yield('twitter_description', 'نظام متكامل لإدارة واتساب')">
    <meta name="twitter:image" content="@yield('twitter_image', asset('images/twitter-card.jpg'))">
    
    <!-- Canonical URL -->
    <link rel="canonical" href="{{ url()->current() }}">
    
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('apple-touch-icon.png') }}">
    
    <!-- Preconnect to External Domains -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    
    @stack('meta')
    
    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    @stack('styles')
</head>
<body class="{{ $bodyClass ?? '' }}">
    <!-- Skip to main content for accessibility -->
    <a href="#main-content" class="sr-only focus:not-sr-only">Skip to main content</a>
    
    <!-- Header -->
    @include('partials.header')
    
    <!-- Main Content -->
    <main id="main-content">
        @yield('content')
    </main>
    
    <!-- Footer -->
    @include('partials.footer')
    
    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>
    @stack('scripts')
    
    <!-- Structured Data -->
    @stack('structured_data')
</body>
</html>