@extends('partials.master')

@section('content')
<div class="row no-margin-bot">
    <div class="col s12 m12">
        <div class="card">
            <div class="card-content">

                <span class="card-title">Welcome to On Belay</span>

                <p>Where you're desperate to send, but no-one wants to climb with you!</p>

            </div>
        </div>
    </div>
</div>

<div class="row no-margin-bot">
    @foreach ($requests as $request)
    <div class="col s12 m6 xl4">
        @request(['request' => $request]) @endrequest
    </div>
    @endforeach

</div>
@endsection
