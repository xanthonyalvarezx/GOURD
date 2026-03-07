<x-main title="HOME">
    @push('styles')
        <link rel="stylesheet" href="{{asset('css/landing.css')}}">
    @endpush
    <div id="main-container">
        <div class="albums_div">
            <div class="album_content">

                <h2>Listen to our new single! Gun to the Sun</h2>
                <a href="https://open.spotify.com/track/57ASLLQVm3JacVCwa3VQGB?si=ab5bb500d0124a5e"
                    target="_blank">Stream
                    now on
                    Spotify!
                </a>
            </div>
            <div class="album_cover">
                <h1 class="album_title">GUN TO THE SUN</h1>
                <img src="{{asset('images/gun_to_the_sun.png')}}" alt="Gun to the Sun album cover" width="500px">
            </div>
        </div>
    </div>
</x-main>