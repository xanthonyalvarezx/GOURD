<x-dash title="ADD EVENTS">

    @push('styles')
        <link rel="stylesheet" href="{{ asset('css/add-events.css') }}">
    @endpush
    <div class="form-container">
        <h1>ADD events</h1>
        @if (session('success'))
            <p class="form-success">{{ session('success') }}</p>
        @endif
        @if ($errors->any())
            <ul class="form-errors">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif
        <form class="add-events-form" action="{{ route('storeEvents') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-row">
                <label for="events_title">Title</label>
                <input type="text" class="events_input" name="title" id="events_title">
            </div>
            <div class="form-row">
                <label for="events_image">Image</label>
                <input type="file" class="events_input" name="image" id="events_image">
            </div>
            <div class="form-row">
                <label for="events_date">Date</label>
                <input type="date" class="events_input" name="date" id="events_date" placeholder="YYYY-MM-DD">
            </div>
            <div class="form-row">
                <label for="events_time">Time</label>
                <input type="time" class="events_input" name="time" id="events_time" placeholder="HH:MM">
            </div>
            <div class="form-row">
                <label for="events_location">Location</label>
                <input type="text" class="events_input" name="location" id="events_location" placeholder="Location">
            </div>
            <div class="form-row">
                <label for="events_ticket_link">Ticket Link</label>
                <input type="text" class="events_input" name="ticket_link" id="events_ticket_link"
                    placeholder="Ticket Link">
            </div>
            <div class="form-row">
                <label for="events_description">Description</label>
                <textarea name="description" id="events_description" cols="10" rows="5"></textarea>
            </div>
            <button type="submit">SUBMIT</button>
        </form>
    </div>
</x-dash>
