<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GOURD | {{ $title }}</title>
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <link rel="stylesheet" href="{{asset('css/nav.css')}}">
    @stack('styles')
</head>


<body>
    @include('components.nav')
    <div id="main-content">
        {{$slot}}
    </div>

    <script>
        (function () {
            const nav = document.querySelector('nav');
            if (!nav) return;

            let lastScrollY = window.scrollY;

            window.addEventListener('scroll', () => {
                const currentY = window.scrollY;
                const delta = currentY - lastScrollY;

                // Only show when fully back at the top
                if (currentY <= 20) {
                    nav.classList.remove('nav-hidden');
                    lastScrollY = currentY;
                    return;
                }

                // Hide when scrolling down away from the top
                if (delta > 3) {
                    nav.classList.add('nav-hidden');
                }

                // While scrolling up but not yet at top, keep current state (stay hidden)
                lastScrollY = currentY;
            });
        })();
    </script>
    @include('components.footer')
</body>

</html>