{*<div class="row">
<div class="col s12">
<nav>
<div class="nav-wrapper">
<div class="col s12">
<a href="#!" class="breadcrumb">Anlage</a>
<a href="#!" class="breadcrumb">Kennzahlen</a>
</div>
</div>
</nav>
</div>
</div>*}
<div class="card">
    <div class="card-content">
        <span class="card-title">Neuen Antrag anlegen</span>
    </div>
</div>
<div class="card">
    <div class="card-content">
        <span class="card-title">Projekt Nr: {*neue Projektnummer aus db holen und anzeigen*}</span>
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
        <div class='row'>
            <button type='submit' name='btn_login' class='col s12 btn btn-large waves-effect blue-grey darken-3'>Weiter</button>
        </div>
    </div>
</div>
