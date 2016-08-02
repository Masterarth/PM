<div class="card">
    <div class="card-content">
        <span class="card-title">Standort bearbeiten</span>
    </div>
</div>
<div class="card">
    <div class="card-content">
        <form method="post" action="/pm/standort/bearbeiten">
            <div class='row'>
                <div class='input-field col s12'>
                    <input type="hidden" value="{$standort->id}" name="reg[id]"/>
                    <input class='validate' type='text' name='reg[s_name]' id='s_name' required="" aria-required="true" value="{$standort->s_name}"/>
                    <label class="left-align" for='s_name'>Standortname</label>
                </div>
                <div class='input-field col s12'>
                    <input class='validate' type='text' name='reg[strasse]' id='strasse' required="" aria-required="true" value="{$standort->strasse}"/>
                    <label class="left-align" for='strasse'>Straße</label>
                </div>                
                <div class='input-field col s12'>
                    <input class="validate" type='text' name='reg[hausnr]' id='hausnr' required="" aria-required="true" value="{$standort->hausnummer}"/>
                    <label class="left-align" for='hausnr'>Hausnummer</label>
                </div>
                <div class='input-field col s12'>
                    <input class="validate" type='text' name='reg[plz]' id='plz' required="" aria-required="true" value="{$standort->plz}"/>
                    <label class="left-align" for='plz'>Postleitzahl</label>
                </div>
                <div class='input-field col s12'>
                    <input class="validate" type='text' name='reg[ort]' id='ort' required="" aria-required="true" value="{$standort->ort}"/>
                    <label class="left-align" for='ort'>Ort</label>
                </div>
            </div>

            <br />
            <center>
                <div class='row'>
                    <button type='submit' class='col s12 btn btn-large waves-effect blue-grey darken-3'>Ändern</button>
                </div>
            </center>
        </form>
    </div>
</div>