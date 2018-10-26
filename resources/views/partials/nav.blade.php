<nav class="blue darken-3 z-depth-0">
    <div class="row">
        <div class="nav-wrapper">
            <div class="col s12">
                <a href="/" class="brand-logo">On Belay</a>

                <ul class="right hide-on-med-and-down">
                    <li><a href=""><i class="material-icons">search</i></a></li>
                    <li><a href="{{ Auth::check() ? route('user.profile') : route('auth.login') }}"><i class="material-icons">person_outline</i></a></li>
                    <li>
                        @if (Auth::check())
                            <form method="post" name="logout" action="{{ route('auth.logout') }}">
                                @csrf
                                <a href="javascript:{}" onclick="document.logout.submit();"><i class="material-icons">power_settings_new</i></a>
                            </form>
                        @else
                            <a href=""><i class="material-icons">more_vert</i></a>
                        @endif

                        
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>