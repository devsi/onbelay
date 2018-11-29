<div class="profile-card card z-depth-0">
    <div class="card-content">

        <div class="click-to-toggle fixed-action-btn profile-action">
            <a class="btn-floating btn-small btn-action waves-effect waves-light teal lighten-2 z-depth-0"><i class="material-icons">menu</i></a>
            <ul>
                <li><a class="btn-floating btn-small lighten-2 red z-depth-0"><i class="material-icons">favorite_border</i></a></li>
                <li><a class="btn-floating btn-small lighten-2 blue z-depth-0"><i class="material-icons">message</i></a></li>
            </ul>
        </div>

        <div class="fixed-icons">
            <a href="#" class="tooltipped" data-position="left" data-tooltip="Verified">
                <i class="green-text text-lighten-1 tiny material-icons">verified_user</i>
            </a>
            <a href="#" class="tooltipped" data-position="left" data-tooltip="Favourite">
                <i class="red-text text-lighten-2 tiny material-icons">favorite</i>
            </a>
            <a href="#" class="tooltipped" data-position="left" data-tooltip="Has gear">
                <i class="amber-text text-darken-2 tiny material-icons">whatshot</i>
            </a>
        </div>

        <div class="row">
            <div class="col m2">
                <i class="medium material-icons">person</i>
            </div>
            <div class="offset-m1 col m9 offset-s1 col s9">
                <p class="blue-text text-darken-3">{{ $request->user->fullname }}</p>
                <small><p>Last online: <span class="grey-text text-lighten-1">2 minutes ago</span></p></small>
                <!--<small><p class="green-text text-lighten-1">Online now</span></p></small>-->

                <div class="chip chip-small">Trad</div>
                <div class="chip chip-small">Ice</div>
                <div class="chip chip-small">Aid</div>

            </div>
        </div>


        <p>{{ $request->request }}.</p>
    </div>
</div>