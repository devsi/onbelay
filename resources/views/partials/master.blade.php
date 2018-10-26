<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

    @include('partials.head')

<body class="blue-grey lighten-5 grey-text text-darken-1">

    @include('partials.nav')

    <main>
        <div class="">
            
            @if (Session::has('flash'))
                @include('components.info-panel', [ 'color' => Session::get('level'), 'contents' => Session::get('flash') ])
            @endif

            <div class="row">
                <div class="col s12 m12 l4">
                    @include('partials.sidebar')
                </div>

                <div class="col s12 m12 l8">
                    @yield('content')
                </div>
            </div>

        </div>
    </main>

    @include('partials.foot')

</body>

</html>
