<x-main title="MERCH">
    @push('styles')
        <link rel="stylesheet" href="{{ asset('css/merch.css') }}">
    @endpush
    <div id="about-container">
        <container class="main-container">
            <div class="merch-div">
                @foreach ($merch as $item)
                    <div class="merch-card">
                        <h4 class="merch-title">{{ $item->title }}</h4>
                        <img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->title }}" width="300">
                        <h4 class="merch-price">${{ $item->price }}</h4>
                        <p class="merch-description">{{ $item->description }}</p>
                    </div>
                @endforeach
            </div>
        </container>
    </div>
</x-main>
