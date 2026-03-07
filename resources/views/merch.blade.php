<x-main title="MERCH">
    @push('styles')
        <link rel="stylesheet" href="{{asset('css/merch.css')}}">
    @endpush
    <div id="about-container">
        <container class="main-container">
            <div class="merch-div">
                <div class="merch-card">
                    <h4 class="merch-title">Gourd Stickers</h4>
                    <img src="{{ asset('./images/gourd_sticker.webp') }}" alt="Gourd band sticker" width="300">
                    <h4 class="merch-price">$3.00</h4>
                </div>
            </div>
        </container>
    </div>
</x-main>