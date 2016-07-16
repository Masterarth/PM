<?php
/* Smarty version 3.1.29, created on 2016-07-16 16:54:36
  from "E:\Programme\xampp\htdocs\PM\templates\fixed_menu_button.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_578a4aac457085_33308615',
  'file_dependency' => 
  array (
    '5ae72a0f16735a24c9f085c06d0c4d52a8e5791b' => 
    array (
      0 => 'E:\\Programme\\xampp\\htdocs\\PM\\templates\\fixed_menu_button.tpl',
      1 => 1468680874,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_578a4aac457085_33308615 ($_smarty_tpl) {
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
