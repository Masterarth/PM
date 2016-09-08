<div class="card">
    <div class="card-content">
        <form method="post" action="/pm/standort/neu">
            <div class='row'>
                <div class='input-field col s12'>
                    <input class='validate' type='text' name='reg[s_name]' id='s_name' required="" aria-required="true" autocomplete="off"/>
                    <label class="left-align" for='s_name'>Standortname</label>
                </div>
                <div class='input-field col s12'>
                    <input class='validate' type='text' name='reg[strasse]' id='strasse' required="" aria-required="true" autocomplete="off"/>
                    <label class="left-align" for='strasse'>Straße</label>
                </div>                
                <div class='input-field col s12'>
                    <input class="validate" type='text' name='reg[hausnr]' id='hausnr' required="" aria-required="true" autocomplete="off"/>
                    <label class="left-align" for='hausnr'>Hausnummer</label>
                </div>
                <div class='input-field col s12'>
                    <input class="validate" type='text' name='reg[plz]' id='plz' required="" aria-required="true" autocomplete="off"/>
                    <label class="left-align" for='plz'>Postleitzahl</label>
                </div>
                <div class='input-field col s12'>
                    <input class="validate" type='text' name='reg[ort]' id='ort' required="" aria-required="true" autocomplete="off"/>
                    <label class="left-align" for='ort'>Ort</label>
                </div>
                <div class="input-field col s12">
                    <input type="text" id="leiter" name="reg[leiter]" autocomplete="off"/>
                    <label for="leiter">Leiter</label>
                    <ul id="testzeug" class="autocomplete-content dropdown-content"></ul>
                </div>
            </div>
            <div class='row'>
                <div class="col s12">
                    <button type='submit' class='col s12 btn btn-large waves-effect blue-grey darken-3'>Anlegen</button>
                </div>
            </div>
        </form>
    </div>
</div> 