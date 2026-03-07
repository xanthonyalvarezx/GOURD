<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GOURD | {{ $title }}</title>
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('css/nav.css') }}">
    @stack('styles')
</head>


<body>
    @include('components.nav')
    <div id="main-content">
        {{ $slot }}
    </div>
    @include('components.footer')
    <script>
        (function() {
            var nav = document.querySelector('nav');
            if (!nav) return;

            var lastScrollY = window.scrollY;

            window.addEventListener('scroll', function() {
                var currentY = window.scrollY;
                var delta = currentY - lastScrollY;

                if (currentY <= 20) {
                    nav.classList.remove('nav-hidden');
                } else if (delta > 3) {
                    nav.classList.add('nav-hidden');
                }
                lastScrollY = currentY;
            });
        })();
    </script>
    <script>
        (function() {
            var hamburger = document.querySelector('.nav-hamburger');
            var overlay = document.querySelector('.nav-mobile-overlay');
            var menu = document.querySelector('.nav-mobile-menu');

            function openMenu() {
                if (!hamburger || !overlay || !menu) return;
                hamburger.setAttribute('aria-expanded', 'true');
                hamburger.setAttribute('aria-label', 'Close menu');
                overlay.classList.add('is-open');
                menu.classList.add('is-open');
                document.body.style.overflow = 'hidden';
            }

            function closeMenu() {
                if (!hamburger || !overlay || !menu) return;
                hamburger.setAttribute('aria-expanded', 'false');
                hamburger.setAttribute('aria-label', 'Open menu');
                overlay.classList.remove('is-open');
                menu.classList.remove('is-open');
                document.body.style.overflow = '';
            }

            if (hamburger) {
                hamburger.addEventListener('click', function() {
                    if (hamburger.getAttribute('aria-expanded') === 'true') {
                        closeMenu();
                    } else {
                        openMenu();
                    }
                });
            }
            if (overlay) {
                overlay.addEventListener('click', closeMenu);
            }
            if (menu) {
                menu.querySelectorAll('a').forEach(function(link) {
                    link.addEventListener('click', closeMenu);
                });
                var closeBtn = menu.querySelector('.nav-mobile-close');
                if (closeBtn) {
                    closeBtn.addEventListener('click', closeMenu);
                }
            }
        })();
    </script>

</body>

</html>
