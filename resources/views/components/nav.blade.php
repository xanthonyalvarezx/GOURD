<nav>
    <div class="nav-container">
        <div class="nav-logo"></div>
        <button class="nav-hamburger" type="button" aria-label="Open menu" aria-expanded="false">
            <span class="nav-hamburger-line"></span>
            <span class="nav-hamburger-line"></span>
            <span class="nav-hamburger-line"></span>
        </button>
        <div class="nav-links">
            <h1><a href="{{ route('landing') }}">HOME</a></h1>
            <h1><a href="{{ route('about') }}">ABOUT</a></h1>
            <h1><a href="{{ route('merch') }}">MERCH</a></h1>
            <h1><a href="{{ route('contact') }}">CONTACT</a></h1>
            <h1><a href="{{ route('events') }}">EVENTS</a></h1>
        </div>
    </div>
    <div class="nav-mobile-overlay" aria-hidden="true"></div>
    <div class="nav-mobile-menu" aria-hidden="true">
        <button class="nav-mobile-close" type="button" aria-label="Close menu">
            <span class="nav-mobile-close-x" aria-hidden="true">×</span>
        </button>
        <a href="{{ route('landing') }}">HOME</a>
        <a href="{{ route('about') }}">ABOUT</a>
        <a href="{{ route('merch') }}">MERCH</a>
        <a href="{{ route('contact') }}">CONTACT</a>
        <a href="{{ route('events') }}">EVENTS</a>
    </div>
</nav>
