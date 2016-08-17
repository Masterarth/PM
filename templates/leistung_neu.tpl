<div class="card">
    <div class="card-content">
        <form action="/pm/team/leistung/{$t_id}" method="post">
            <input type="hidden" name="reg[t_id]" value="{$t_id}"/>
            <div class="row">
                <div class="input-field col s6">
                    <i class="material-icons prefix">timer</i>
                    <input id="min_hour" type="number" name="reg[min_hour]" min="0" required="" aria-required="true" autocomplete="off">
                    <label for="min_hour">Ist Stunden</label>
                </div>
                <div class="input-field col s6">
                    <i class="material-icons prefix">timer</i>
                    <input id="max_hour" type="number" name="reg[max_hour]" min="0" required="" aria-required="true" autocomplete="off">
                    <label for="max_hour">Max Stunden</label>
                </div>
            </div>
            <div class="input-field col s12">
                <i class="material-icons prefix">event_note</i>
                <input id="year" type="number" class="validate" name="reg[year]" min="2000" max="2100" required="" aria-required="true" autocomplete="off">
                <label for="year">Jahr</label>
            </div>
            <div class='row'>
                <button type='submit' name='btn_login' class='col s12 btn btn-large waves-effect blue-grey darken-3'>Anlegen</button>
            </div>
        </form>
    </div>
</div>