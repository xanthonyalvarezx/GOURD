<x-dash title="VIEW MESSAGES">
    @push('styles')
        <link rel="stylesheet" href="{{ asset('css/view-messages.css') }}">
    @endpush
    <div class="messages-container">
        <h1>MESSAGES</h1>
        <div class="message-cards">
            @forelse ($messages as $message)
                <div class="message-card">
                    <h4 class="message-name">{{ $message->name }}</h4>
                    <h4 class="message-email">{{ $message->email }}</h4>
                    <p class="message-message">{{ $message->message }}</p>
                    <p class="message-date">{{ $message->created_at->format('m/d/Y h:i A') }}</p>
                    <div class="message-action-buttons">
                        <form action="" method="post">
                            @csrf
                            <button type="submit" class="save-message-button" aria-label="save message">
                                <svg class="save-icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24">
                                    <path
                                        d="M14 3h2.997v5h-2.997v-5zm9 1v20h-22v-24h17.997l4.003 4zm-17 5h12v-7h-12v7zm14 4h-16v9h16v-9z" />
                                </svg>
                            </button>
                        </form>
                        <form action="{{ route('deleteMessage', $message->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="delete-message-button" aria-label="Delete message">
                                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="100" height="100"
                                    viewBox="0 0 64 64" style="fill:#FA5252;">
                                    <path
                                        d="M 28 6 C 25.791 6 24 7.791 24 10 L 24 12 L 23.599609 12 L 10 14 L 10 17 L 54 17 L 54 14 L 40.400391 12 L 40 12 L 40 10 C 40 7.791 38.209 6 36 6 L 28 6 z M 28 10 L 36 10 L 36 12 L 28 12 L 28 10 z M 12 19 L 14.701172 52.322266 C 14.869172 54.399266 16.605453 56 18.689453 56 L 45.3125 56 C 47.3965 56 49.129828 54.401219 49.298828 52.324219 L 51.923828 20 L 12 19 z M 20 26 C 21.105 26 22 26.895 22 28 L 22 51 L 19 51 L 18 28 C 18 26.895 18.895 26 20 26 z M 32 26 C 33.657 26 35 27.343 35 29 L 35 51 L 29 51 L 29 29 C 29 27.343 30.343 26 32 26 z M 44 26 C 45.105 26 46 26.895 46 28 L 45 51 L 42 51 L 42 28 C 42 26.895 42.895 26 44 26 z">
                                    </path>
                                </svg>
                            </button>
                        </form>
                    </div>
                </div>
            @empty
                <div class="messages-empty">
                    <p class="messages-empty-text">No messages yet.</p>
                </div>
            @endforelse
        </div>
    </div>
</x-dash>
