<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

    @include('partials.head')

<body class="blue-grey lighten-5 grey-text text-darken-1">

    @include('partials.nav')

    <main>
        <div class="">

            <div class="row">
                <div class="col s4">
                    @include('partials.sidebar')
                </div>

                <div class="col s8">
                    @yield('content')
                </div>
            </div>

        </div>
    </main>

    @include('partials.foot')

</body>

</html>
