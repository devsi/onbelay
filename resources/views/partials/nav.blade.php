<nav class="blue darken-3 z-depth-0">
    <div class="row">
        <div class="nav-wrapper">
            <div class="col s12">
                <a href="/" class="brand-logo">On Belay</a>

                <ul class="right hide-on-med-and-down">
                    <li><a href=""><i class="material-icons">search</i></a></li>

                    @if (Auth::check())
                    <li><a href="{{ route('user.partner-request') }}"><i class="material-icons">filter_hdr</i></a></li>
                    <li><a href="{{ route('user.profile') }}"><i class="material-icons">person_outline</i></a></li>
                    <li>
                        <form method="post" name="logout" action="{{ route('auth.logout') }}">
                                @csrf
                                <a href="javascript:{}" onclick="document.logout.submit();"><i class="material-icons">power_settings_new</i></a>
                        </form>
                    </li>
                    @else
                        <li><a href=""><i class="material-icons">more_vert</i></a></li>
                    @endif  
                </ul>
            </div>
        </div>
    </div>
</nav>