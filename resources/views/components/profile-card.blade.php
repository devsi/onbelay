<div class="row">
    <div class="col s12 m12">
        <div class="row">
            <div class="col s12 m12">
                <div class="card">
                    <div class="card-content">

                        <span class="card-title">
                            <div class="row">
                                <div class="col m2">
                                    <i class="medium material-icons">person</i>
                                </div>
                                <div class="col m10">
                                    Welcome, {{ $user->fullname }}
                                </div>
                            </div>
                        </span>

                        <p>{{ $user->bio }}</p>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>