<?php
/* Smarty version 3.1.29, created on 2016-07-12 14:16:10
  from "C:\xampp\htdocs\templates\index.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5784df8a2d34a8_44814646',
  'file_dependency' => 
  array (
    '180e6dc3c90bfb3f9d482c770aa9c1f8f355e653' => 
    array (
      0 => 'C:\\xampp\\htdocs\\templates\\index.tpl',
      1 => 1468325750,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:navigation.tpl' => 1,
  ),
),false)) {
function content_5784df8a2d34a8_44814646 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Zeiterfassung</title>
        <meta http-equiv="content-type" content="text/html; charset=utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <meta charset='utf-8' />
        
        <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        
                
        <link type="text/css" rel="stylesheet" href="/pm/bin/materilize/css/materialize.min.css"  media="screen,projection"/>
        <link type="text/css" rel="stylesheet" href="/bin/custom/css/main.css">
        
        
        <?php echo '<script'; ?>
 type="text/javascript" src="/pm/bin/jquery/jquery-2.1.1.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 type="text/javascript" src="/pm/bin/materialize/js/materialize.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 type="text/javascript" src="/bin/custom/js/main.js"><?php echo '</script'; ?>
>
        
    </head>

    <body>
        <!-- Header -->       
        

        <!-- Navigation -->
        <nav class="white" role="navigation">
            <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:navigation.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        </nav>

        <!-- Inhalt -->
        <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, $_smarty_tpl->tpl_vars['page']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>


        <!-- Footer -->
        

        <div class="fixed-action-btn" style="bottom: 45px; right: 24px;">
            <a class="btn-floating btn-large red">
                <i class="large material-icons">add</i>
            </a>
            <ul>
                <li><a class="btn-floating red"><i class="material-icons">insert_chart</i></a></li>
                <li><a class="btn-floating yellow darken-1"><i class="material-icons">format_quote</i></a></li>
                <li><a class="btn-floating green"><i class="material-icons">publish</i></a></li>
                <li><a class="btn-floating blue"><i class="material-icons">attach_file</i></a></li>
            </ul>
        </div>
    </body><?php }
}
