@extends('partials.master')

@section('content')
<div class="row no-margin-bot">
    <div class="col s12 m12">
        <form class="card" method="post" action="{{ route('user.partner-request') }}">
            <div class="card-content">

                <span class="card-title">
                    <i class="material-icons prefix">group_add</i> Request a partner
                    <i class="right material-icons prefix"><a id="locator" class="grey-text text-lighten-1">gps_fixed</a></i>
                </span>

                @if (isset($message))
                <div class="card-panel green lighten-4 z-depth-0">
                    <span class="green-text text-darken-4">{{ $message }}</span>
                </div>
                @endif

                @if ($errors->any())
                <div class="card-panel red lighten-4 z-depth-0">
                    @foreach ($errors->all() as $error)
                        - <span class="red-text text-darken-4">{{ $error }}</span><br />
                    @endforeach
                </div>
                @endif

                @empty($message)
                <div class="row no-margin-bot">
                    <div class="input-field col s12 m6">
                        <input placeholder="Enter city name" id="r_city" name="city" type="text" class="validate" value="{{ old('city') }}">
                        <label for="r_city">City</label>
                    </div>

                    <div class="input-field col s12 m6">
                        <input placeholder="Enter postal (zip) code" id="r_postcode" name="postcode" type="text" class="validate" value="{{ old('postcode') }}">
                        <label for="r_postcode">Postal (zip) code</label>
                    </div>

                    <!-- hardcoded vancouver -->
                    <input type="hidden" id="r_lat" name="latitude" value="49.2637225" />
                    <input type="hidden" id="r_lng" name="longitude" value="-123.0976072" />
                </div>

                <div class="row no-margin-bot">
                    <div class="input-field col s6 m3">
                        <input placeholder="Choose a date" type="text" id="r_datepicker" name="date" class="datepicker validate" value="{{ old('date') }}">
                        <label for="r_datepicker">What date?</label>
                    </div>
                    <div class="input-field col s6 m3">
                        <input placeholder="Choose a time" type="text" id="r_timepicker" name="time" class="timepicker validate" value="{{ old('time') }}">
                        <label for="r_timepicker">What time?</label>
                    </div>
                </div>

                <div class="row">
                    <div class="col s12">
                        <label>I want to...</label>
                    </div>
                </div>

                <div class="row">
                    <div class="col s4 m2">
                        <label>
                            <input type="checkbox" name="discipline[]" class="filled-in" value="1" />
                            <span>Boulder</span>
                        </label>
                    </div>

                    <div class="col s4 m2">
                        <label>
                            <input type="checkbox" name="discipline[]" class="filled-in" value="2" />
                            <span>Sport</span>
                        </label>
                    </div>

                    <div class="col s4 m2">
                        <label>
                            <input type="checkbox" name="discipline[]" class="filled-in" value="4" />
                            <span>Trad</span>
                        </label>
                    </div>

                    <div class="col s4 m2">
                        <label>
                            <input type="checkbox" name="discipline[]" class="filled-in" value="8" />
                            <span>Ice</span>
                        </label>
                    </div>
                </div>

                <div class="row no-margin-bot">
                    <div class="col s12">
                        <label for="r_message">Personalise your request</label>
                    </div>
                </div>

                <div class="row">
                    <div class="col s12">
                        <textarea id="r_message" name="request" class="materialize-textarea">{{ old('request') }}</textarea>
                    </div>
                </div>
                @endempty

            </div>

            @empty($message)
            <div class="card-action" style="overflow: hidden;">
                <button id="request" class="waves-effect waves-light btn-large right">
                    Request
                    <i class="material-icons right">send</i>
                </button>

                @csrf
            </div>
            @endempty

        </form>
    </div>
</div>
@endsection

@section('scripts')
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCwDPKu2U9KoYSQJsETQgv3s05eW1VpyW0&callback=load"></script>
<script>
    $(function () {
        $("#locator").hide();
        if (!navigator.geolocation) {
            // browser doesn't support gelocation
            $("#locator").hide();
        }
    });

    // todo :: requires https
    function load() {
        $("#locator").on('click', function () {
             //navigator.geolocation.getCurrentPosition(function (position) {
            //});
        }).removeClass().attr({ href: "#!" });

        // geocode from city input, postal-code
        $("#request").on('click', function (e) {
            var city = $("#r_city").val();
            var postcode = $("#r_postcode").val();
        });
    }
</script>
@endsection
