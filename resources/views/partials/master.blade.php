<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

    @include('partials.head')

    <body>

      @include('partials.nav')

      <main>
          <div class="container">

              <div class="row">
                  <div class="col s3">

                  </div>

                  <div class="col s9">
                      @yield('content')
                  </div>
              </div>

          </div>
      </main>

      @include('partials.foot')

    </body>

</html>
