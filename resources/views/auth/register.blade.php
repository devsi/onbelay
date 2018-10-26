@extends('partials.no-sidebar')

@section('content')

<div class="row no-margin-bot">
    <div class="col s12 m12">
        <div class="card">
            <div class="card-content">

                <span class="card-title">Register with On Belay.</span>

            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col s12 m12">
        <div class="card">
            <div class="card-content">

                <form class="">
                    <div class="row">
                        <div class="input-field col s6 m6">
                            <input placeholder="" id="username" type="text" class="validate">
                            <label for="username">Username</label>
                        </div>

                        <div class="input-field col s6 m6">
                            <input placeholder="" id="password" type="password" class="validate">
                            <label for="password">Password</label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-field col s4 m4">
                            <input placeholder="" id="firstname" type="text" class="validate">
                            <label for="firstname">First Name</label>
                        </div>

                        <div class="input-field col s4 m4">
                            <input placeholder="" id="surname" type="text" class="validate">
                            <label for="surname">Last Name</label>
                        </div>

                        <div class="input-field col s4 m4">
                            <input placeholder="" id="email" type="text" class="validate">
                            <label for="email">Email Address</label>
                        </div>
                    </div>

                    <div class="row no-margin-bot">
                        <div class="card-action">
                            <a class="waves-effect waves-light btn-large right">
                                Register
                                <i class="material-icons right">send</i>
                            </a>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>

@endsection
