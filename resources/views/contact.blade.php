<x-main title="CONTACT">
    @push('styles')
        <link rel="stylesheet" href="{{ asset('css/contact.css') }}">
    @endpush
    <div class="contact-container">
        <h1>BOOK US FOR AN EVENT</h1>
        <p>We are available for events all over the tri-state area (Pennsylvania, New York, New Jersey). Please fill out
            the form below to get in touch with
            us.</p>
        @if ($errors->any())
            <div class="form-errors">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        @if (session('success'))
            <div class="form-success">{{ session('success') }}</div>
        @endif
        @if (session('warning'))
            <div class="form-warning">{{ session('warning') }}</div>
        @endif
        <form class="contact-form" action="{{ route('contact') }}" method="POST">
            @csrf
            <div class="form-row">
                <label for="contact-name">Name</label>
                <input type="text" id="contact-name" name="name" placeholder="Your name"
                    value="{{ old('name') }}">
            </div>
            <div class="form-row">
                <label for="contact-email">Email</label>
                <input type="email" id="contact-email" name="email" placeholder="your@email.com"
                    value="{{ old('email') }}">
            </div>
            <div class="form-row">
                <label for="contact-message">Message</label>
                <textarea id="contact-message" name="message" placeholder="Tell us about your event...">{{ old('message') }}</textarea>
            </div>
            <button type="submit">Send</button>
        </form>
    </div>
</x-main>
