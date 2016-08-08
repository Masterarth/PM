<div class="card">
    <div class="card-content">
        <form action="/pm/firma/budget/{$f_id}" method="post">
            <input type="hidden" name="reg[f_id]" value="{$f_id}"/>
            <div class="row">
                <div class="input-field col s12">
                    <input id="betrag" type="text" class="validate" name="reg[betrag]" required="" aria-required="true" autocomplete="off" value="{$budget->betrag}">
                    <label for="projektname">Betrag</label>
                </div>
                <div class="row radioRow">
                    <div class="input-field col s6">
                        <input id="startdatum" type="text" class="datepicker" name="reg[startdatum]" value="{$budget->sta_periode}">
                        <label for="startdatum">Startdatum</label>
                    </div>
                    <div class="input-field col s6">
                        <input id="enddatum" type="text" class="datepicker" name="reg[enddatum]" value="{$budget->end_periode}">
                        <label for="enddatum">Enddatum</label>
                    </div>
                </div>
                <div class="radioRow">
                    <p>
                        <input type="checkbox" id="aktiv" name="reg[aktiv]" {$budget->aktiv|checked}/>
                        <label for="aktiv">Aktiv</label>
                    </p>
                </div>
            </div>
            <div class='row'>
                <button type='submit' name='btn_login' class='col s12 btn btn-large waves-effect blue-grey darken-3'>Ändern</button>
            </div>
        </form>
    </div>
</div>