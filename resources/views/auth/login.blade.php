<x-dash title="LOGIN">
    @push('styles')
        <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    @endpush
    <div class="login-container">
        {{-- Login panel (visible by default; hidden if returning to register with errors) --}}
        <div class="auth-panel auth-panel--login {{ old('_form') === 'register' ? 'is-hidden' : '' }}" id="login-panel">
            <h1>LOGIN</h1>
            @if ($errors->any())
                <div class="login-errors">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form class="login-form" action="{{ route('login') }}" method="post">
                @csrf
                <div class="form-row">
                    <label for="login-email">Email</label>
                    <input type="email" id="login-email" name="email" placeholder="your@email.com"
                        value="{{ old('email') }}" autocomplete="email">
                </div>
                <div class="form-row">
                    <label for="login-password">Password</label>
                    <input type="password" id="login-password" name="password" placeholder="Password"
                        autocomplete="current-password">
                </div>
                <button type="submit">Login</button>
                <p class="auth-toggle-text">Need to regester a new user? <a href="#" class="auth-toggle-link"
                        data-show="register">Register</a></p>
            </form>
        </div>

        {{-- Register panel (hidden by default; visible if returning with register errors) --}}
        <div class="auth-panel auth-panel--register {{ old('_form') === 'register' ? '' : 'is-hidden' }}"
            id="register-panel">
            <h1>REGISTER</h1>
            @if ($errors->any() && old('_form') === 'register')
                <div class="login-errors">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form class="login-form register-form" action="{{ route('register') }}" method="post">
                @csrf
                <input type="hidden" name="_form" value="register">
                <div class="form-row">
                    <label for="register-name">Name</label>
                    <input type="text" id="register-name" name="name" placeholder="Your name"
                        value="{{ old('name') }}" autocomplete="name">
                </div>
                <div class="form-row">
                    <label for="register-email">Email</label>
                    <input type="email" id="register-email" name="email" placeholder="your@email.com"
                        value="{{ old('email') }}" autocomplete="email">
                </div>
                <div class="form-row">
                    <label for="register-password">Password</label>
                    <input type="password" id="register-password" name="password" placeholder="Password"
                        autocomplete="new-password">
                </div>
                <div class="form-row">
                    <label for="register-password_confirmation">Confirm password</label>
                    <input type="password" id="register-password_confirmation" name="password_confirmation"
                        placeholder="Confirm password" autocomplete="new-password">
                </div>
                <button type="submit">Register</button>
                <p class="auth-toggle-text">Already have an account? <a href="#" class="auth-toggle-link"
                        data-show="login">Login</a></p>
            </form>
        </div>
    </div>

    <script>
        (function() {
            var loginPanel = document.getElementById('login-panel');
            var registerPanel = document.getElementById('register-panel');
            var links = document.querySelectorAll('.auth-toggle-link');

            function showLogin() {
                loginPanel.classList.remove('is-hidden');
                registerPanel.classList.add('is-hidden');
            }

            function showRegister() {
                loginPanel.classList.add('is-hidden');
                registerPanel.classList.remove('is-hidden');
            }

            links.forEach(function(link) {
                link.addEventListener('click', function(e) {
                    e.preventDefault();
                    if (this.getAttribute('data-show') === 'register') {
                        showRegister();
                    } else {
                        showLogin();
                    }
                });
            });
        })();
    </script>
</x-dash>
