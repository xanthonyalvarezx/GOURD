<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GOURD | 404</title>
    <link rel="stylesheet" href="{{ asset('css/404.css') }}">
</head>

<body>
    <div class="not-found-container">
        <h1>404</h1>
        <p>Looks like you rocked too hard and got lost</p>
        <a class="not-found-link" href="{{ route('landing') }}">
            <svg class="not-found-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                <path d="M20 11H7.83l5.59-5.59L12 4l-8 8 8 8 1.41-1.41L7.83 13H20v-2z"/>
            </svg>
            Go back before its too late
        </a>
    </div>
</body>

</html>
