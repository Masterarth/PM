<?php
/* Smarty version 3.1.29, created on 2016-07-16 16:49:26
  from "E:\Programme\xampp\htdocs\PM\templates\anmelden.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_578a49760bfa65_87062485',
  'file_dependency' => 
  array (
    'ae5826f04fa6ae6eac79ea6f4e3af715d69ad4cb' => 
    array (
      0 => 'E:\\Programme\\xampp\\htdocs\\PM\\templates\\anmelden.tpl',
      1 => 1468680563,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_578a49760bfa65_87062485 ($_smarty_tpl) {
?>
<div class="section"></div>
<main>
    <center>
        <img class="responsive-img" style="width: 250px;" src="http://i.imgur.com/ax0NCsK.gif" />
        <div class="section"></div>

        <h5 class="indigo-text">Bitte melden Sie sich mit ihrem Account an</h5>
        <div class="section"></div>

        <div class="container">
            <div class="z-depth-1 grey lighten-4 row" style="display: inline-block; padding: 32px 48px 0px 48px; border: 1px solid #EEE;">

                <form class="col s12" method="post" action="/pm/start">
                    <div class='row'>
                        <div class='col s12'>
                        </div>
                    </div>

                    <div class='row'>
                        <div class='input-field col s12'>
                            <input class='validate' type='email' name='email' id='email' />
                            <label for='email'>E-Mail Adresse</label>
                        </div>
                    </div>

                    <div class='row'>
                        <div class='input-field col s12'>
                            <input class='validate' type='password' name='password' id='password' />
                            <label for='password'>Passwort</label>
                        </div>
                        <label style='float: right;'>
                            <a class='pink-text' href='#!'><b>Passwort vergessen?</b></a>
                        </label>
                    </div>

                    <br />
                    <center>
                        <div class='row'>
                            <button type='submit' name='btn_login' class='col s12 btn btn-large waves-effect indigo'>Login</button>
                        </div>
                    </center>
                </form>
            </div>
        </div>
        <a href="#!">Account erstellen</a>
    </center>

    <div class="section"></div>
    <div class="section"></div>
</main>
<?php }
}
