<div class="card">
    <div class="card-content">
        <span class="card-title">Mitarbeiter bearbeiten</span>
    </div>
</div>
<div class="card">
    <div class="card-content">
        <form method="post" action="/pm/mitarbeiter/bearbeiten">
            <div class='row'>
                <div class='input-field col s12'>
                    <input type="hidden" value="{$user->getId()}" name="reg[id]"/>
                    <input class="validate" type='text' name='reg[vorname]' id='vorname' required="" aria-required="true" value="{$user->getVorname()}"/>
                    <label class="left-align" for='vorname'>Vorname</label>
                </div>
                <div class='input-field col s12'>
                    <input class="validate" type='text' name='reg[nachname]' id='nachname' required="" aria-required="true" value="{$user->getNachname()}"/>
                    <label class="left-align" for='nachname'>Nachname</label>
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