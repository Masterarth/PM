<?php
/* Smarty version 3.1.29, created on 2016-07-18 09:06:55
  from "C:\xampp\htdocs\pm\templates\fixed_menu_button.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_578c800f78d311_64883376',
  'file_dependency' => 
  array (
    '27b1905d21d4b46c1173205f2f5fd0ba0b6ba0b7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\pm\\templates\\fixed_menu_button.tpl',
      1 => 1468825571,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_578c800f78d311_64883376 ($_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['showNavbar']->value == TRUE) {?>
    <div class="fixed-action-btn" style="bottom: 45px; right: 24px;">
        <a class="btn-floating btn-large red">
            <i class="large material-icons">menu</i>
        </a>
        <ul>
            <li><a href="/pm/abmelden" class="btn-floating red tooltipped" data-position="left" data-delay="10" data-tooltip="Logout"><i class="material-icons">power_settings_new</i></a></li>
        </ul>
    </div>
<?php }
}
}
