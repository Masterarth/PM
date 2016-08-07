<div class="card">
    <div class="card-content">
        <form action="/pm/firma/budget/{$f_id}" method="post">
            <input type="hidden" name="reg[f_id]" value="{$f_id}"/>
            <div class="row">
                <div class="input-field col s12">
                    <input id="betrag" type="text" class="validate" name="reg[betrag]" required="" aria-required="true" autocomplete="off">
                    <label for="projektname">Betrag</label>
                </div>
                <div class="row">
                    <div class="input-field col s6">
                        <i class="material-icons prefix">query_builder</i>
                        <input id="startdatum" type="text" class="datepicker" name="reg[startdatum]" required="" aria-required="true" autocomplete="off">
                        <label for="startdatum">Startdatum</label>
                    </div>
                    <div class="input-field col s6">
                        <i class="material-icons prefix">query_builder</i>
                        <input id="enddatum" type="text" class="datepicker" name="reg[enddatum]" required="" aria-required="true" autocomplete="off">
                        <label for="enddatum">Enddatum</label>
                    </div>
                </div>
                <div class="radioRow">
                    <p>
                        <input type="checkbox" id="aktiv" name="reg[aktiv]"/>
                        <label for="aktiv">Aktiv</label>
                    </p>
                </div>
            </div>
            <div class='row'>
                <button type='submit' name='btn_login' class='col s12 btn btn-large waves-effect blue-grey darken-3'>Anlegen</button>
            </div>
        </form>
    </div>
</div>
