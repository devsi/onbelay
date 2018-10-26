@extends('partials.master')

@section('content')

<div class="row no-margin-bot">
    <div class="col s12 m12">
        <div class="card">
            <div class="card-content">

                <span class="card-title">Welcome, {{ $user->fullname }}.</span>

            </div>
        </div>
    </div>
</div>

<div class="row no-margin-bot">
    <!-- user personal -->
    <div class="col s6 m6">
        <div class="card z-depth-0">
            <div class="card-content">

                <h6>Personal Info</h6>

                <form class="">

                    <div class="row">
                        <div class="input-field col s6 m6">
                            <input placeholder="" id="username" type="text" class="validate" value="{{ Auth::user()->name }}" disabled>
                            <label for="username">Username</label>
                        </div>

                        <div class="input-field col s6 m6">
                            <input placeholder="" id="email" type="text" class="validate" value="{{ Auth::user()->email }}" disabled>
                            <label for="email">Email</label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-field col s6 m6">
                            <input placeholder="" id="username" type="text" class="validate" value="{{ Auth::user()->firstname }}" disabled>
                            <label for="username">First Name</label>
                        </div>

                        <div class="input-field col s6 m6">
                            <input placeholder="" id="surname" type="text" class="validate" value="{{ Auth::user()->surname }}" disabled>
                            <label for="surname">Last Name</label>
                        </div>
                    </div>

                </form>

            </div>
        </div>
    </div>

    <!-- user gear -->
    <div class="col s6 m6">
        <div class="card z-depth-0">
            <div class="card-content">

                <h6>Gear List</h6>

                <form class="">

                    <div class="row">

                        <div id="gear-list" class="col s12">

                            <ul class="tabs">
                                <li class="tab col s4"><a class="active" href="#essentials">Essentials</a></li>
                                <li class="tab col s4"><a href="#trad">Trad</a></li>
                                <li class="tab col s4"><a href="#ice">Ice</a></li>
                            </ul>

                            <!-- hidden template for filling collections below -->
                            <li id="collection-template" class="collection-item hide">
                                <a href="#!" class="remove"><span class="material-icons">clear</span></a>
                                <a href="#!" class="item-inc"><span class="badge material-icons grey lighten-2">keyboard_arrow_up</span></a>
                                <span class="new badge item-count" data-badge-caption="" data-value="1">1</span>
                                <a href="#!" class="item-dec"><span class="badge material-icons grey lighten-2">keyboard_arrow_down</span></a>
                            </li>

                            <!-- gear -->
                            <ul id="essentials" class="input-field col s12">
                                <i class="material-icons prefix">filter_list</i>
                                <input placeholder="Add your gear..." type="text" id="gear-essentials" class="autocomplete">

                                <div class="collection">                                    
                                </div>
                            </ul>

                            <!-- gear -->
                            <ul id="trad" class="input-field col s12">
                                <i class="material-icons prefix">filter_list</i>
                                <input placeholder="Add your gear..." type="text" id="gear-trad" class="autocomplete">

                                <div class="collection">                                    
                                </div>
                            </ul>

                            <!-- gear -->
                            <ul id="ice" class="input-field col s12">
                                <i class="material-icons prefix">filter_list</i>
                                <input placeholder="Add your gear..." type="text" id="gear-ice" class="autocomplete">

                                <div class="collection">                                    
                                </div>
                            </ul>

                        </div>
                        
                    </div>

                </form>

            </div>
        </div>
    </div>
</div>
<div class="row no-margin-bot">
    <div class="col s12 m12">
        <div class="card z-depth-0">
            <div class="card-content">

                <h6>Bio</h6>

            </div>
        </div>
    </div>
</div>

@endsection

@section('scripts')

<script>
    $(function () {

        var gear = {
            'essentials': { 'Rope 30m': null, 'Rope 40m': null, 'Rope 60m': null, 'Rope 70m': null, 'Rope 100m': null, 'Quickdraws': null, 'ATC': null, 'ATC Guide': null, 'Grigri': null },
            'trad': { 'BD Cam .3': null, 'BD Cam .4': null, 'BD Cam .5': null, 'BD Cam .75': null, 'BD Cam 1': null },
            'ice': { 'Ice Tool': null, 'Crampons': null, 'Ice Screws': null } 
        };

        var $template = $('#collection-template');

        // iterate our gear to set up autocomplete
        for(let i in gear) {

            let $container = $('ul#'+i).find('.collection');

            (function ($element, i) {
                $('input#gear-'+i).autocomplete({
                    data: gear[i],
                    onAutocomplete: function (value) {
                        // clone the template row and add the content
                        let item = $template.clone();
                        item.removeAttr('id');
                        item.find('.remove').after(value);
                        item.removeClass('hide');
                        // append the item to the list, and clear the value of the textbox
                        $element.append(item);
                        this.$el.val('');
                        // remove the listed item from autocomplete
                        delete gear[i][value];
                        M.Autocomplete.getInstance($(this.$el)).updateData(gear[i]);
                    },
                    minLength: 3
                });
            })($container, i);
        }

        // increment or decrement
        function crement(ele, value) {
            let $count = $(ele).siblings('.item-count');
            let number = parseInt($count.html());
            number += value;
            
            // min cap
            if (number < 1) number = 1;
            //max cap
            if (number >= 30) number = 30;

            $count.data('value', number).html(number);
        }

        // up and down arrows per item
        $('#gear-list').on('click', '.item-inc', function () {
            crement(this, 1);
        });
        $('#gear-list').on('click', '.item-dec', function () {
            crement(this, -1);
        });
    });
</script>

@endsection