<center>
    <h3 class="blue-grey-text darken-3">PAMS</h3>
    <div class="container">
        <div class="z-depth-1 grey lighten-4 row" style="padding: 32px 48px 0px 48px; border: 1px solid #EEE;">
            <form method="post" action="/pm/registrierung">
                <div class='row'>
                    <div class='input-field col s12'>
                        <i class="material-icons prefix">perm_identity</i>
                        <input class='validate' type='text' name='reg[account_name]' id='account_name' required="" aria-required="true" autocomplete="off"/>
                        <label class="left-align" for='account_name'>Account Name</label>
                    </div>
                </div>

                <div class='row'>
                    <div class='input-field col s12'>
                        <i class="material-icons prefix">lock</i>
                        <input class='validate' type='password' name='reg[password]' id='password' required="" aria-required="true" autocomplete="off"/>
                        <label class="left-align" for='password'>Passwort</label>
                    </div>
                </div>

                <div class='row'>
                    <div class='input-field col s12'>
                        <i class="material-icons prefix">account_circle</i>
                        <input class="validate" type='text' name='reg[vorname]' id='vorname' required="" aria-required="true" autocomplete="off"/>
                        <label class="left-align" for='vorname'>Vorname</label>
                    </div>
                </div>

                <div class='row'>
                    <div class='input-field col s12'>
                        <i class="material-icons prefix">account_circle</i>
                        <input class="validate" type='text' name='reg[nachname]' id='nachname' required="" aria-required="true" autocomplete="off"/>
                        <label class="left-align" for='nachname'>Nachname</label>
                    </div>
                </div>

                <br />
                <center>
                    <div class='row'>
                        <button type='submit' class='col s12 btn btn-large waves-effect blue-grey darken-3'>Registrieren</button>
                    </div>
                </center>
            </form>
        </div>
    </div>
    <a href="/pm/anmelden">Registrierung abbrechen</a>
</center>

{if isset($toast)}
    {$toast}
{/if}