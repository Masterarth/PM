<div class="card">
    <div class="card-content">
        <form method="post" action="/pm/abteilung/bearbeiten">
            <div class='row'>
                <div class='input-field col s12'>
                    <input type="hidden" name="reg[id]" value="{$abteilung->id}"/>
                    <input class='validate' type='text' name='reg[name]' id='name' required="" aria-required="true" autocomplete="off" value="{$abteilung->a_name}"/>
                    <label class="left-align" for='name'>Abteilungsname</label>
                </div>
                <div class="input-field col s12">
                    <select name='reg[s_id]' id='s_id' required="" aria-required="true">
                        <option value="" disabled selected>Wählen sie den Standort der Abteilung</option>
                        {if isset($standorte)}
                            {foreach from=$standorte item=standort}
                                <option value="{$standort->id}"{if $standort->id == $abteilung->s_id}selected{/if}>{$standort->s_name}</option>
                            {/foreach}
                        {/if}
                    </select>
                    <label>Standort</label>
                </div>
                <div class="col s12">
                    <div class="row">
                        <div class="input-field col s12">
                            <input type="text" id="leiter" name="reg[leiter]" autocomplete="off" value="{$abteilung->vorname} {$abteilung->nachname}"/>
                            <label for="leiter">Leiter</label>
                            <ul class="autocomplete-content dropdown-content"></ul>
                        </div>
                    </div>
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