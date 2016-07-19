<?php
/* Smarty version 3.1.29, created on 2016-07-19 09:24:33
  from "C:\xampp\htdocs\pm\templates\anmelden.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_578dd5b1f3d771_62329896',
  'file_dependency' => 
  array (
    '384b3f401acff39101dd363afa3c6a55450f26a9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\pm\\templates\\anmelden.tpl',
      1 => 1468913071,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_578dd5b1f3d771_62329896 ($_smarty_tpl) {
?>
<div class="section"></div>
<main>
    <center>
        <h3 class="blue-grey-text darken-3">PAMS</h3>

        <h5 class="blue-grey-text darken-3">Bitte melden Sie sich mit ihrem Account an</h5>
        <div class="section"></div>

        <div class="container">
            <div class="z-depth-1 grey lighten-4 row" style="padding: 32px 48px 0px 48px; border: 1px solid #EEE;">
                <form class="col s12" method="post" action="/pm/start">
                    <div class='row'>
                        <div class='col s12'>
                        </div>
                    </div>

                    <div class='row'>
                        <div class='input-field col s12'>
                            <i class="material-icons prefix">account_circle</i>
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
                        <label style='float: right;'>
                            <a class='pink-text' href='#!'><b>Passwort vergessen?</b></a>
                        </label>
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
<?php }
}
