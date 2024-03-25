<header>
    <div class="header-link">
        <div class="container">
            <div class="link">
                <a href="#">DC POWER™ VISA®</a>
                <a href="#">ADDITIONAL DC SITE ▼</a>
            </div>
        </div>
    </div>
    <div class="header-navbar">
        <div class="container">
            <div class="navbar">
                <div class="logo">
                    <img src="{{ Vite::asset('resources/assets/images/dc-logo.png') }}">
                </div>
                <div class="links">
                    <ul>
                        <li><a @if(Route::currentRouteName()=='characters' ) class="active" @endif
                                href="{{ route('error') }}">CHARACTERS</a></li>
                        <li><a @if(Route::currentRouteName()=='comics' ) class="active" @endif
                                href="{{ route('comics.index') }}">COMICS</a></li>
                        <li><a @if(Route::currentRouteName()=='movies' ) class="active" @endif
                                href="{{ route('error') }}">MOVIES</a></li>
                        <li><a @if(Route::currentRouteName()=='tv' ) class="active" @endif
                                href="{{ route('error') }}">TV</a></li>
                        <li><a @if(Route::currentRouteName()=='games' ) class="active" @endif
                                href="{{ route('error') }}">GAMES</a></li>
                        <li><a @if(Route::currentRouteName()=='collectibles' ) class="active" @endif
                                href="{{ route('error') }}">COLLECTIBLES</a></li>
                        <li><a @if(Route::currentRouteName()=='videos' ) class="active" @endif
                                href="{{ route('error') }}">VIDEOS</a></li>
                        <li><a @if(Route::currentRouteName()=='fans' ) class="active" @endif
                                href="{{ route('error') }}">FANS</a></li>
                        <li><a @if(Route::currentRouteName()=='news' ) class="active" @endif
                                href="{{ route('error') }}">NEWS</a></li>
                        <li><a @if(Route::currentRouteName()=='shop' ) class="active" @endif
                                href="{{ route('error') }}">SHOP <span>▼</span></a></li>
                    </ul>
                </div>
                <div class="search">
                    <input type="search" name="search" id="search" placeholder="Search">
                </div>
            </div>
        </div>
    </div>
    <div class="jumbotron">
        <img src="{{ Vite::asset('resources/assets/images/jumbotron.jpg') }}">
    </div>
</header>