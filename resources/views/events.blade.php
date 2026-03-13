<x-main title="EVENTS">
    @push('styles')
        <link rel="stylesheet" href="{{ asset('css/events.css') }}">
    @endpush
    <div class="events-container">
        @forelse ($events as $event)
            <div class="event-card">
                <h4 class="event-title">{{ $event->title }}</h4>
                @if ($event->image)
                    <img src="{{ asset('storage/' . $event->image) }}" alt="{{ $event->title }}" width="300">
                @endif
                <h4 class="event-date">{{ $event->date->format('F j, Y') }}</h4>
                @if ($event->time)
                    <h4 class="event-time">{{ $event->time }}</h4>
                @endif
                @if ($event->location)
                    <h4 class="event-location">{{ $event->location }}</h4>
                @endif
                @if ($event->description)
                    <p class="event-description">{{ $event->description }}</p>
                @endif
                @if ($event->ticket_link)
                    <a href="{{ $event->ticket_link }}" class="event-ticket-link" target="_blank" rel="noopener">Get
                        tickets</a>
                @endif
            </div>
        @empty
            <h2 class="events-empty">No upcoming events right now. We're working on some tasty jams though <br> Check
                back soon!</h2>
        @endforelse
    </div>
</x-main>
