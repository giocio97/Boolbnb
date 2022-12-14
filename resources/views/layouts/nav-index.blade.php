<header>
    <nav class="nav-new">
        <div class="navbar-guest" style="padding: 10px 0; background-color: #03030380">

            {{-- logo --}}
            <div class="nav-logo" href="{{ url('/') }}"><a href="/" style="text-decoration: none; color:inherit">

                <img style="height: 50px; width: 150px;" src="{{ asset('images/logo-boolbnb.png') }}" alt="tag">
            </div>

            <div class="navbar-options">

                <!-- Authentication Links -->
                @guest
                    <button class="button_accent" style="margin-right: 20px">
                        <a  href="{{ route('login') }}">{{ __('Login') }}</a>
                    </button>
                        @if (Route::has('register'))
                            <button class="button_accent">
                                <a  href="{{ route('register') }}">{{ __('Register') }}</a>
                            </button>
                        @endif
                        @else
                        <button class="button_accent" style="margin-right: 20px">
                            <a href="/ura/home" role="button"v-pre>
                                {{ Auth::user()->name }}
                            </a>
                        </button>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button class="button_accent m-right" type="submit"style="cursor: pointer">Logout</button>
                        </form>
                @endguest
            </div>
        </div>
    </nav>
</header>
