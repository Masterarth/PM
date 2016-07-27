<div class="card">
    <div class="row">
        <div class="col s12">
            <ul class="tabs">
                <li class="tab col s3"><a href="#Anlegen">Neuer Antrag</a></li>
                <li class="tab col s3"><a href="#Kennzahlen">Kennzahlen</a></li>
                <li class="tab col s3 disabled"><a href="#Nachkalkulation">Nachkalkulation</a></li>
            </ul>
        </div>
        <div id="Anlegen" class="col s12">
            <h6>PNr: Projektnummer anzeigen</h6>
            <div class="row">
                <div class="input-field col s12">
                    <i class="material-icons prefix">mode_edit</i>
                    <input id="projektname" type="text" class="validate">
                    <label for="projektname">Projektname</label>
                </div>
                <div class="input-field col s6">
                    <i class="material-icons prefix">query_builder</i>
                    <input id="sollstartdatum" type="text" class=" datepicker">
                    <label for="sollstartdatum">Startdatum</label>
                </div>
                <div class="input-field col s6">
                    <i class="material-icons prefix">query_builder</i>
                    <input id="sollenddatum" type="text" class=" datepicker">
                    <label for="sollenddatum">Enddatum</label>
                </div>
                <div class="input-field col s4">
                    <select>
                        <option value="" disabled selected>Auswählen</option>
                        <option value="1">Standort 1</option>
                        <option value="2">Standort 2</option>
                        <option value="3">Standort 3</option>
                    </select>
                    <label>Standort</label>
                </div>
                <div class="input-field col s4">
                    <select>
                        <option value="" disabled selected>Auswählen</option>
                        <option value="1">Standort 1</option>
                        <option value="2">Standort 2</option>
                        <option value="3">Standort 3</option>
                    </select>
                    <label>Bereich</label>
                </div>
                <div class="input-field col s4">
                    <select>
                        <option value="" disabled selected>Auswählen</option>
                        <option value="1">Standort 1</option>
                        <option value="2">Standort 2</option>
                        <option value="3">Standort 3</option>
                    </select>
                    <label>Team</label>
                </div>
                <div class="input-field col s12">
                    <textarea id="kurzbeschreibung" class="materialize-textarea" length="320"></textarea>
                    <label for="kurzbeschreibung">Kurzbeschreibung</label>
                </div>
                
                <div class="input-field col s12">
                    <textarea id="rahmenbedingungen" class="materialize-textarea" length="320"></textarea>
                    <label for="rahmenbedingungen">Rahmenbedingungen</label>
                </div>
                
                <div class="input-field col s12">
                    <textarea id="Kommunikation" class="materialize-textarea" length="320"></textarea>
                    <label for="Kommunikation">Kommunikation</label>
                </div>
                
                <div class="input-field col s6">
                    <select>
                        <option value="" disabled selected>Auswählen</option>
                        <option value="1">Standort 1</option>
                        <option value="2">Standort 2</option>
                        <option value="3">Standort 3</option>
                    </select>
                    <label>Projektleiter</label>
                </div>
                <div class="input-field col s6">
                    <select multiple>
                        <option value="" disabled selected>Auswählen</option>
                        <option value="1">Standort 1</option>
                        <option value="2">Standort 2</option>
                        <option value="3">Standort 3</option>
                    </select>
                    <label>Teammitglieder</label>
                </div>
                
                
            </div>


        </div>
        <div id="Kennzahlen" class="col s12">Kennzahlen</div>
        <div id="Nachkalkulation" class="col s12">Nachkalkulation</div>
    </div>

</div>


<script type="text/javascript" src="/pm/bin/jquery/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="/pm/bin/materialize/js/materialize.min.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $('ul.tabs').tabs();
        $('select').material_select();
        $('.datepicker').pickadate({
            selectMonths: true, // Creates a dropdown to control month
            selectYears: 15 // Creates a dropdown of 15 years to control year
        });
    });
</script>