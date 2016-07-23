<center>
    <h3 class="blue-grey-text darken-3">PAMS</h3>
    <div class="container">
        <div class="z-depth-1 grey lighten-4 row" style="padding: 32px 48px 0px 48px; border: 1px solid #EEE;">
            <form method="post" action="/pm/#">
                <div class='row'>
                    <div class='input-field col s12'>
                        <i class="material-icons prefix">perm_identity</i>
                        <input class='validate' type='text' name='account_name' id='account_name' />
                        <label class="left-align" for='account_name'>Account Name</label>
                    </div>
                </div>

                <div class='row'>
                    <div class='input-field col s12'>
                        <i class="material-icons prefix">lock</i>
                        <input class='validate' type='password' name='password' id='password' />
                        <label class="left-align" for='password'>Passwort</label>
                    </div>
                </div>

                <div class='row'>
                    <div class='input-field col s12'>
                        <i class="material-icons prefix">account_circle</i>
                        <input class="validate" type='text' name='vorname' id='vorname' />
                        <label class="left-align" for='vorname'>Vorname</label>
                    </div>
                </div>

                <div class='row'>
                    <div class='input-field col s12'>
                        <i class="material-icons prefix">account_circle</i>
                        <input class="validate" type='text' name='nachname' id='nachname' />
                        <label class="left-align" for='nachname'>Nachname</label>
                    </div>
                </div>

                <br />
                <center>
                    <div class='row'>
                        <button type='submit' name='btn_login' class='col s12 btn btn-large waves-effect blue-grey darken-3'>Registrieren</button>
                    </div>
                </center>
            </form>
        </div>
    </div>
    <a href="/pm/anmelden">Registrierung abbrechen</a>
</center>
