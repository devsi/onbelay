<div class="row">

    <div class="col s12 m12">
        <div class="card">
            <div class="card-content">

                <span class="card-title"><i class="material-icons prefix">landscape</i> Find a partner</span>
                
                <!-- form -->
                <div class="row no-margin-bot finder-form">
                    
                    <div class="input-field col s12">
                        <input placeholder="Enter city name" id="city" type="text" class="validate">
                        <label for="city">City</label>
                    </div>

                    <div class="input-field col s12">
                        <input placeholder="Enter postal (zip) code" id="postcode" type="text" class="validate">
                        <label for="postcode">Postal (zip) code</label>
                    </div>

                    <div class="col s12">
                        <label for="age-range">Age Range</label>
                    </div>
                    <div class="input-field col s12">
                        <div id="age-range"></div>
                    </div>

                    <div class="col s12">
                        <p><label>Gender</label></p>
                        <p>
                            <label>
                                <input name="gender[]" type="radio" />
                                <span>Male</span> 
                            </label>
                            <label>
                                <input name="gender[]" type="radio"  />
                                <span>Female</span>
                            </labeL>
                            <label>
                                <input name="gender[]" type="radio" checked />
                                <span>Either</span>
                            </labeL>
                        </p>
                    </div>

                    <div class="col s12">
                        <label>What do you want to do?</label>
                        <p>
                            <label>
                                <input class="find-types" type="checkbox" data-toggle="find-boulder" />
                                <span>Boulder</span>
                            </label>

                            <div id="find-boulder" class="row hide">
                                <div class="col s6">
                                    <select multiple>
                                    <option value="V0" selected>V0</option>
                                    <option value="V1">V1</option>
                                    <option value="V2">V2</option>
                                    <option value="V3">V3</option>
                                    <option value="V4">V4</option>
                                    <option value="V5">V5</option>
                                    <option value="V6">V6</option>
                                    <option value="V7">V7</option>
                                    <option value="V8">V8</option>
                                    <option value="V9">V9</option>
                                    <option value="V10">V10</option>
                                    <option value="V11">V11</option>
                                    <option value="V12">V12</option>
                                    </select>
                                </div>
                            </div>
                        </p>
                        
                        <p>
                            <label>
                                <input class="find-types" type="checkbox" data-toggle="find-sport" />
                                <span>Sport</span>
                            </label>

                            <div id="find-sport" class="row hide">
                                <div class="col s6">
                                    <small>Lead</small>
                                    <select multiple>
                                    <optgroup label="--">
                                        <option value="V0" selected>5.7</option>
                                        <option value="V1">5.8</option>
                                        <option value="V2">5.9</option>
                                    </optgroup>
                                    <optgroup label="5.10">
                                        <option value="V3">5.10a</option>
                                        <option value="V4">5.10b</option>
                                        <option value="V4">5.10c</option>
                                        <option value="V4">5.10d</option>
                                    </optgroup>
                                    </select>
                                </div>

                                <div class="col s6">
                                    <small>Follow</small>
                                    <select multiple>
                                    <optgroup label="--">
                                        <option value="V0" selected>5.7</option>
                                        <option value="V1">5.8</option>
                                        <option value="V2">5.9</option>
                                    </optgroup>
                                    <optgroup label="5.10">
                                        <option value="V3">5.10a</option>
                                        <option value="V4">5.10b</option>
                                        <option value="V4">5.10c</option>
                                        <option value="V4">5.10d</option>
                                    </optgroup>
                                    </select>
                                </div>
                            </div>
                        </p>

                        <p>
                            <label>
                                <input class="find-types" type="checkbox" data-toggle="find-trad" />
                                <span>Trad</span>
                            </label>

                            <div id="find-trad" class="row hide">
                                <div class="col s6">
                                    <small>Lead</small>
                                    <select multiple>
                                    <optgroup label="--">
                                        <option value="V0" selected>5.7</option>
                                        <option value="V1">5.8</option>
                                        <option value="V2">5.9</option>
                                    </optgroup>
                                    <optgroup label="5.10">
                                        <option value="V3">5.10a</option>
                                        <option value="V4">5.10b</option>
                                        <option value="V4">5.10c</option>
                                        <option value="V4">5.10d</option>
                                    </optgroup>
                                    </select>
                                </div>

                                <div class="col s6">
                                    <small>Follow</small>
                                    <select multiple>
                                    <optgroup label="--">
                                        <option value="V0" selected>5.7</option>
                                        <option value="V1">5.8</option>
                                        <option value="V2">5.9</option>
                                    </optgroup>
                                    <optgroup label="5.10">
                                        <option value="V3">5.10a</option>
                                        <option value="V4">5.10b</option>
                                        <option value="V4">5.10c</option>
                                        <option value="V4">5.10d</option>
                                    </optgroup>
                                    </select>
                                </div>
                            </div>
                        </p>

                    </div>

                </div>
                <!-- // -->

            </div>

            <div class="card-action" style="overflow: hidden;">
                <a class="waves-effect waves-light btn-large right">
                    Find
                    <i class="material-icons right">send</i>
                </a>
            </div>

        </div>
    </div>

</div>