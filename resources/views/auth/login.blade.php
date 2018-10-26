@extends('partials.no-sidebar')

@section('content')

<div class="row no-margin-bot">
    <div class="col s12 m12">
        <div class="card">
            <div class="card-content">

                <span class="card-title">Login.</span>

                @if ($errors->any())
                    @include('components.info-panel', [ 'color' => 'red', 'contents' => $errors->all() ])
                @endif
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col s12 m12">
        <div class="card">
            <div class="card-content">

                <form method="post" action="{{ route('auth.login') }}">
                    <div class="row">
                        <div class="input-field col s6 m6">
                            <input placeholder="" id="email" name="email" type="text" class="validate">
                            <label for="email">Username</label>
                        </div>

                        <div class="input-field col s6 m6">
                            <input placeholder="" id="password" name="password" type="password" class="validate">
                            <label for="password">Password</label>
                        </div>
                    </div>

                    <div class="row no-margin-bot">
                        <div class="card-action">
                            <button type="submit" class="waves-effect waves-light btn-large right">
                                Login
                                <i class="material-icons right">send</i>
                            </button>

                            @csrf
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>

@endsection
