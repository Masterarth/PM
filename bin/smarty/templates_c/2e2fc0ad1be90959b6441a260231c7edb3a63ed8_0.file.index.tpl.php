<?php
/* Smarty version 3.1.29, created on 2016-07-16 16:38:16
  from "E:\Programme\xampp\htdocs\PM\templates\index.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_578a46d8718756_93919340',
  'file_dependency' => 
  array (
    '2e2fc0ad1be90959b6441a260231c7edb3a63ed8' => 
    array (
      0 => 'E:\\Programme\\xampp\\htdocs\\PM\\templates\\index.tpl',
      1 => 1468679893,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:navigation.tpl' => 1,
    'file:fixed_menu_button.tpl' => 1,
  ),
),false)) {
function content_578a46d8718756_93919340 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
    <head>
        <title>PAMS</title>
        <meta http-equiv="content-type" content="text/html; charset=utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <meta charset='utf-8' />
        
        <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        
                
        <link type="text/css" rel="stylesheet" href="/pm/bin/materialize/css/materialize.css"  media="screen,projection"/>
        <link type="text/css" rel="stylesheet" href="/pm/bin/custom/css/main.css">
        
        
        <?php echo '<script'; ?>
 type="text/javascript" src="/pm/bin/jquery/jquery-2.1.1.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 type="text/javascript" src="/pm/bin/materialize/js/materialize.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 type="text/javascript" src="/pm/bin/custom/js/main.js"><?php echo '</script'; ?>
>
        
    </head>

    <body>

        <!-- Navigation -->
        <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:navigation.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


        <!-- Inhalt -->
        <div class="container">
            <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, $_smarty_tpl->tpl_vars['page']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

        </div>

        <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:fixed_menu_button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


    </body><?php }
}
