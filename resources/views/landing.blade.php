<x-main title="HOME">
    @push('styles')
        <link rel="stylesheet" href="{{ asset('css/landing.css') }}">
    @endpush
    <div id="main-container">
        <div class="albums_div">
            <div class="album_content">
                <h2>Listen to our new single! Gun to the Sun</h2>
                <a href="https://open.spotify.com/track/57ASLLQVm3JacVCwa3VQGB?si=ab5bb500d0124a5e" target="_blank"
                    rel="noopener">Stream now on Spotify!</a>
            </div>
            <div class="album_cover">
                <h1 class="album_title">GUN TO THE SUN</h1>
                <img src="{{ asset('images/gun_to_the_sun.png') }}" alt="Gun to the Sun album cover" width="500">
            </div>
        </div>
    </div>

    <section class="carousel-section" aria-label="Photo carousel">
        <h2 class="carousel-heading">Follow the journey</h2>
        <div class="carousel" data-carousel>
            <button type="button" class="carousel-btn carousel-prev" aria-label="Previous slide">‹</button>
            <button type="button" class="carousel-btn carousel-next" aria-label="Next slide">›</button>
            <div class="carousel-viewport">
                <div class="carousel-track" data-track>
                    <div class="carousel-slide">
                        <div class="carousel-slide-content">
                            <h2>Crumb</h2>
                            <a href="https://open.spotify.com/album/5Hgby0oWIvnWY4IdMcCy9T?si=tuBPmLEJQGub6LcMfj1n0w"
                                target="_blank" rel="noopener">
                                <h3>Click here to
                                    listen</h3>
                            </a>
                        </div>
                        <img src="{{ asset('images/crumb.png') }}" alt="crumb album cover"></a>
                    </div>

                    <div class="carousel-slide">
                        <div class="carousel-slide-content">
                            <h2>Nothing Really</h2>
                            <a href="https://gourdphilly.bandcamp.com/track/nothing-really">
                                <h3>Click here to
                                    listen</h3>
                            </a>
                        </div>
                        <img src="{{ asset('images/nothing_really.jpg') }}" alt="nothing really album cover">
                        </a>
                    </div>

                    <div class="carousel-slide">
                        <div class="carousel-slide-content">
                            <h2>Uncle Tito's Masquerade</h2>
                            <a href="https://gourdphilly.bandcamp.com/track/uncle-titos-masquerade">
                                <h3>Click here to
                                    listen</h3>
                            </a>
                        </div>
                        <img src="{{ asset('images/uncle_tito.jpg') }}" alt="uncle tito's masquerade album cover">
                    </div>
                </div>
            </div>
            <div class="carousel-dots" data-dots aria-label="Carousel pagination"></div>
        </div>
    </section>

    <script>
        (function() {
            var carousel = document.querySelector('[data-carousel]');
            if (!carousel) return;
            var track = carousel.querySelector('[data-track]');
            var dotsContainer = carousel.querySelector('[data-dots]');
            var slides = track.querySelectorAll('.carousel-slide');
            var total = slides.length;
            var index = 0;
            var autoplayMs = 5000;
            var autoplayTimer;

            function goTo(i) {
                index = (i + total) % total;
                track.style.transform = 'translateX(-' + index * 100 + '%)';
                dotsContainer.querySelectorAll('.carousel-dot').forEach(function(dot, j) {
                    dot.setAttribute('aria-current', j === index ? 'true' : null);
                });
            }

            function next() {
                goTo(index + 1);
            }

            function prev() {
                goTo(index - 1);
            }

            carousel.querySelector('.carousel-prev').addEventListener('click', function() {
                prev();
                resetAutoplay();
            });
            carousel.querySelector('.carousel-next').addEventListener('click', function() {
                next();
                resetAutoplay();
            });

            for (var d = 0; d < total; d++) {
                var dot = document.createElement('button');
                dot.type = 'button';
                dot.className = 'carousel-dot';
                dot.setAttribute('aria-label', 'Go to slide ' + (d + 1));
                dot.setAttribute('aria-current', d === 0 ? 'true' : null);
                (function(i) {
                    dot.addEventListener('click', function() {
                        goTo(i);
                        resetAutoplay();
                    });
                })(d);
                dotsContainer.appendChild(dot);
            }

            function resetAutoplay() {
                clearInterval(autoplayTimer);
                autoplayTimer = setInterval(next, autoplayMs);
            }
            autoplayTimer = setInterval(next, autoplayMs);
        })();
    </script>
</x-main>
