<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

    @include('partials.head')

<body class="blue-grey lighten-5 grey-text text-darken-1">

    @include('partials.nav')

    <main>
        <div class="container">

            <div class="row">
                <div class="col s12 m12">
                    @yield('content')
                </div>
            </div>

        </div>
    </main>

    @include('partials.foot')

</body>

</html>
