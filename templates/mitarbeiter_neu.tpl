<div class="card">
    <div class="card-content">
        <span class="card-title">Mitarbeiter anlegen</span>
        <form method="post" action="/pm/mitarbeiter/neu">
            <div class='row'>
                <div class='input-field col s12'>
                    <i class="material-icons prefix">perm_identity</i>
                    <input class='validate' type='text' name='reg[account_name]' id='account_name' required="" aria-required="true" />
                    <label class="left-align" for='account_name'>Account Name</label>
                </div>
                <div class='input-field col s12'>
                    <i class="material-icons prefix">lock</i>
                    <input class='validate' type='password' name='reg[password]' id='password' required="" aria-required="true" />
                    <label class="left-align" for='password'>Passwort</label>
                </div>
                <div class='input-field col s12'>
                    <i class="material-icons prefix">account_circle</i>
                    <input class="validate" type='text' name='reg[vorname]' id='vorname' required="" aria-required="true" />
                    <label class="left-align" for='vorname'>Vorname</label>
                </div>
                <div class='input-field col s12'>
                    <i class="material-icons prefix">account_circle</i>
                    <input class="validate" type='text' name='reg[nachname]' id='nachname' required="" aria-required="true" />
                    <label class="left-align" for='nachname'>Nachname</label>
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