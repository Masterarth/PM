<div class="card">
    <div class="card-content">
        <form method="post" action="/pm/team/bearbeiten">
            <div class='row'>
                <div class='input-field col s12'>
                    <input type="hidden" value="{$team->id}" name="reg[id]" />
                    <input class='validate' type='text' name='reg[t_name]' id='name' required="" aria-required="true" autocomplete="off" value="{$team->t_name}"/>
                    <label class="left-align" for='name'>Teamname</label>
                </div>
                <div class="input-field col s12">
                    <select name='reg[a_id]' id='a_id' required="" aria-required="true">
                        <option value="" disabled selected>Wählen sie die Abteilung des Teams</option>
                        {if isset($abteilungen)}
                            {foreach from=$abteilungen item=abteilung}
                                <option value="{$abteilung->id}" {if $team->a_id == $abteilung->id}selected{/if}>{$abteilung->s_name} | {$abteilung->a_name}</option>
                            {/foreach}
                        {/if}
                    </select>
                    <label>Standort | Abteilung</label>
                </div>
                <div class="col s12">
                    <div class="row">
                        <div class="input-field col s12">
                            <input type="text" id="leiter" name="reg[leiter]" autocomplete="off" value="{$team->vorname} {$team->nachname}"/>
                            <label for="leiter">Leiter</label>
                            <ul id="testzeug" class="autocomplete-content dropdown-content"></ul>
                        </div>
                    </div>
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