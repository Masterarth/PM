<?php
/* Smarty version 3.1.29, created on 2016-07-24 21:42:49
  from "E:\Programme\xampp\htdocs\PM\templates\navigation.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57951a3958a829_07861108',
  'file_dependency' => 
  array (
    '7ecc20c3481a1366bff9dc2b81bc305953ba033a' => 
    array (
      0 => 'E:\\Programme\\xampp\\htdocs\\PM\\templates\\navigation.tpl',
      1 => 1469388514,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:nav_elements.tpl' => 2,
  ),
),false)) {
function content_57951a3958a829_07861108 ($_smarty_tpl) {
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
                        <li>
                            <div class="userView">
                                <img class="background" src="/pm/bin/custom/images/office.jpg">
                                <div class="section"></div>
                                <div class="section"></div>
                                <a href="/pm/mitarbeiter/<?php echo $_SESSION['user']->getU_id();?>
" class="hoverable">
                                    <div class="section"></div>
                                    <span class="white-text name valign" style="font-size: 24px;"><?php echo $_SESSION['user']->getVorname();?>
 <?php echo $_SESSION['user']->getNachname();?>
</span>
                                    <div class="section"></div>
                                </a>
                                <div class="section"></div>
                            </div>
                        </li>
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
