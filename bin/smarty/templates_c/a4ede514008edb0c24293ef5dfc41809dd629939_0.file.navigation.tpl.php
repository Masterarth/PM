<?php
/* Smarty version 3.1.29, created on 2016-07-12 22:44:37
  from "C:\xampp\htdocs\pm\templates\navigation.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_578556b5093086_39475073',
  'file_dependency' => 
  array (
    'a4ede514008edb0c24293ef5dfc41809dd629939' => 
    array (
      0 => 'C:\\xampp\\htdocs\\pm\\templates\\navigation.tpl',
      1 => 1468356275,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:nav_elements.tpl' => 2,
  ),
),false)) {
function content_578556b5093086_39475073 ($_smarty_tpl) {
?>


<div class="navbar-fixed">
    <nav>
        <div class="nav-wrapper container">
            <a href="anmelden" class="brand-logo">PAMS</a>
            <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
            <ul class="right hide-on-med-and-down">
                <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:nav_elements.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

            </ul>
            <ul class="side-nav" id="mobile-demo">
                <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:nav_elements.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

            </ul>
        </div>
    </nav>
</div><?php }
}
