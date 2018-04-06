<b-navbar toggleable="md" class="mb-5 bg-gradient-light">

    <b-navbar-brand href="{{ url('/') }}" style="font-family: 'IBM Plex Sans Condensed', sans-serif; color: rgba(0,0,0,.7); font-size: 22px;">
        Instaframe
    </b-navbar-brand>

    <b-navbar-toggle target="nav_collapse"></b-navbar-toggle>

    <b-collapse is-nav id="nav_collapse">

        <b-navbar-nav class="ml-auto">
            @guest
                <b-nav-item href="#">Login</b-nav-item>
                <b-nav-item href="#">Register</b-nav-item>
            @else
                <a href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            @endguest


        </b-navbar-nav>

    </b-collapse>
</b-navbar>
