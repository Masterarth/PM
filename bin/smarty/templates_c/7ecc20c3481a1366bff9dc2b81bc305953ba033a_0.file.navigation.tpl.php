<?php
/* Smarty version 3.1.29, created on 2016-07-16 16:35:46
  from "E:\Programme\xampp\htdocs\PM\templates\navigation.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_578a464244cf13_73508016',
  'file_dependency' => 
  array (
    '7ecc20c3481a1366bff9dc2b81bc305953ba033a' => 
    array (
      0 => 'E:\\Programme\\xampp\\htdocs\\PM\\templates\\navigation.tpl',
      1 => 1468679745,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:nav_elements.tpl' => 2,
  ),
),false)) {
function content_578a464244cf13_73508016 ($_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['showNavbar']->value == TRUE) {?>
    <nav class="white" role="navigation">
        <div class="navbar-fixed">
            <nav>
                <div class="nav-wrapper container">
                    <a href="/pm/start" class="brand-logo">PAMS</a>
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
        </div>
    </nav>
<?php }?> 

<?php }
}
