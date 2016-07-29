<div class="card">
    <div class="card-content">
        <span class="card-title">Bereich anlegen</span>
        <form method="post" action="/pm/bereich/neu">
            <div class='row'>
                <div class='input-field col s12'>
                    <input class='validate' type='text' name='reg[b_name]' id='b_name' required="" aria-required="true" />
                    <label class="left-align" for='b_name'>Bereichsname</label>
                </div>
                <div class="input-field col s12">
                    <select name='reg[s_id]' id='s_id' required="" aria-required="true">
                        <option value="" disabled selected>Wählen sie den Standort des Bereichs</option>
                        {if isset($standorte)}
                            {foreach from=$standorte item=standort}
                                <option value="{$standort->s_id}">{$standort->s_name}</option>
                            {/foreach}
                        {/if}
                    </select>
                    <label>Standort</label>
                </div>
                <div class="col s12">
                    <div class="row">
                        <div class="input-field col s12">
                            <i class="material-icons prefix">perm_identity</i>
                            <input type="text" id="autocomplete-input" class="autocomplete" name="b_leitung">
                            <label for="autocomplete-input">Leiter</label>
                        </div>
                    </div>
                </div>
            </div>



            <br />
            <center>
                <div class='row'>
                    <button type='submit' class='col s12 btn btn-large waves-effect blue-grey darken-3'>Anlegen</button>
                </div>
            </center>
        </form>
    </div>
</div> 

{if isset($toast)}
    {$toast}
{/if}