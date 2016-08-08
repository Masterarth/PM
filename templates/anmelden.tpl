<div class="section"></div>
<main>
    <center>
        <h5 class="blue-grey-text darken-3">Bitte melden Sie sich mit ihrem Account an</h5>
        <div class="section"></div>

        <div class="container">
            <div class="z-depth-1 grey lighten-4 row" style="padding: 32px 48px 0px 48px; border: 1px solid #EEE;">
                <form class="col s12" method="post" action="/pm/anmelden">
                    <div class='row'>
                        <div class='col s12'>
                        </div>
                    </div>

                    <div class='row'>
                        <div class='input-field col s12'>
                            <i class="material-icons prefix">account_circle</i>
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
                        {*<label style='float: right;'>
                        <a class='pink-text' href='#!'><b>Passwort vergessen?</b></a>
                        </label>*}
                    </div>

                    <br />
                    <center>
                        <div class='row'>
                            <button type='submit' name='btn_login' class='col s12 btn btn-large waves-effect blue-grey darken-3'>Login</button>
                        </div>
                    </center>
                </form>
            </div>
        </div>
        <a href="/pm/registrierung">Account erstellen</a>
    </center>

    <div class="section"></div>
    <div class="section"></div>
</main>
