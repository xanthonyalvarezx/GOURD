<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DASHBOARD | {{ $title }}</title>
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
    @stack('styles')
</head>

<body>
    @if (!request()->routeIs('adminPage', 'loginPage', 'register'))
        <a href="{{ route('adminPage') }}" class="dash-back" aria-label="Back to dashboard">
            <svg class="dash-back-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                aria-hidden="true">
                <path d="M20 11H7.83l5.59-5.59L12 4l-8 8 8 8 1.41-1.41L7.83 13H20v-2z" />
            </svg>
            <span class="dash-back-text">Back</span>
        </a>
    @endif
    <form action="{{ route('logout') }}" method="POST" class="logout-form">
        @csrf
        <button type="submit" class="logout-button">Logout</button>
    </form>
    {{ $slot }}
</body>

</html>
