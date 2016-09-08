<div class="card">
    <div class="card-content">
        <form method="post" action="/pm/standort/bearbeiten">
            <div class='row'>
                <div class='input-field col s12'>
                    <input type="hidden" value="{$standort->id}" name="reg[id]"/>
                    <input class='validate' type='text' name='reg[s_name]' id='s_name' required="" aria-required="true" value="{$standort->s_name}" autocomplete="off"/>
                    <label class="left-align" for='s_name'>Standortname</label>
                </div>
                <div class='input-field col s12'>
                    <input class='validate' type='text' name='reg[strasse]' id='strasse' required="" aria-required="true" value="{$standort->strasse}" autocomplete="off"/>
                    <label class="left-align" for='strasse'>Straße</label>
                </div>                
                <div class='input-field col s12'>
                    <input class="validate" type='text' name='reg[hausnr]' id='hausnr' required="" aria-required="true" value="{$standort->hausnummer}" autocomplete="off"/>
                    <label class="left-align" for='hausnr'>Hausnummer</label>
                </div>
                <div class='input-field col s12'>
                    <input class="validate" type='text' name='reg[plz]' id='plz' required="" aria-required="true" value="{$standort->plz}" autocomplete="off"/>
                    <label class="left-align" for='plz'>Postleitzahl</label>
                </div>
                <div class='input-field col s12'>
                    <input class="validate" type='text' name='reg[ort]' id='ort' required="" aria-required="true" value="{$standort->ort}" autocomplete="off"/>
                    <label class="left-align" for='ort'>Ort</label>
                </div>
                <div class="input-field col s12">
                    <input type="text" id="leiter" name="reg[leiter]" autocomplete="off" value="{$standort->vorname} {$standort->nachname}"/>
                    <label for="leiter">Leiter</label>
                    <ul id="testzeug" class="autocomplete-content dropdown-content"></ul>
                </div>
            </div>
            <div class='row'>
                <div class="col s12">
                    <button type='submit' class='col s12 btn btn-large waves-effect blue-grey darken-3'>Ändern</button>
                </div>
            </div>
        </form>
    </div>
</div>