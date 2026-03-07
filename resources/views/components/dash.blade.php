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
    <a type="button" class="logout-button" href="#">Logout</a>
    {{ $slot }}
</body>

</html>
