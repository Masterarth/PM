<?php
/* Smarty version 3.1.29, created on 2016-07-23 13:46:49
  from "E:\Programme\xampp\htdocs\PM\templates\antrag_uebersicht.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57935929ddf383_80232520',
  'file_dependency' => 
  array (
    '505eac6b38aabc34a3b22ed9749ba532e28f123a' => 
    array (
      0 => 'E:\\Programme\\xampp\\htdocs\\PM\\templates\\antrag_uebersicht.tpl',
      1 => 1469274408,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57935929ddf383_80232520 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once 'E:\\Programme\\xampp\\htdocs\\PM/bin/smarty/libs/plugins\\modifier.date_format.php';
?>

<div class="row">
    <div class="col s12 m9 l10">
        <div class="row">
            <?php
$_from = $_smarty_tpl->tpl_vars['projekte']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_projekt_0_saved_item = isset($_smarty_tpl->tpl_vars['projekt']) ? $_smarty_tpl->tpl_vars['projekt'] : false;
$_smarty_tpl->tpl_vars['projekt'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['projekt']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['projekt']->value) {
$_smarty_tpl->tpl_vars['projekt']->_loop = true;
$__foreach_projekt_0_saved_local_item = $_smarty_tpl->tpl_vars['projekt'];
?>
                <div class="col s6">
                    <div class="card hoverable">
                        <div class="card-image waves-effect waves-block waves-light">
                            <img class="activator" src="/pm/bin/custom/images/projekt_2.jpg">
                            <span class="card-title"><?php echo $_smarty_tpl->tpl_vars['projekt']->value->getTitle();?>
</span>
                        </div>
                        <div class="card-content">
                            <span class="card-title activator grey-text text-darken-4"><i class="material-icons right">more_vert</i></span>
                            <p><?php echo $_smarty_tpl->tpl_vars['projekt']->value->getBeschreibung();?>
</p>
                        </div>
                        <div class="card-action">
                            <a href="#">Öffnen</a>
                        </div>
                        <div class="card-reveal">
                            <span class="card-title grey-text text-darken-4">Projekt Informationen<i class="material-icons right">close</i></span>
                            <div class="section"></div>
                            <div class="discription"><strong>Funktionsbereich:</strong> ist noch nicht verfügbar</div>
                            <div class="discription"><strong>Standort:</strong> ist noch nicht verfügbar</div>
                            <div class="discription"><strong>Mitarbeiteranzahl:</strong> <?php echo $_smarty_tpl->tpl_vars['projekt']->value->getMitarbeiteranzahl();?>
</div>
                            <div class="discription"><strong>Starttermin:</strong> <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['projekt']->value->getStarttermin(),"%A, %B %e, %Y");?>
</div>
                            <div class="discription"><strong>Endtermin:</strong> <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['projekt']->value->getEndtermin(),"%A, %B %e, %Y");?>
</div>
                            <div class="discription"><strong>Budget:</strong> <?php echo number_format($_smarty_tpl->tpl_vars['projekt']->value->getBudget(),2,",",".");?>
€</div>
                        </div>
                    </div>
                </div>
            <?php
$_smarty_tpl->tpl_vars['projekt'] = $__foreach_projekt_0_saved_local_item;
}
if ($__foreach_projekt_0_saved_item) {
$_smarty_tpl->tpl_vars['projekt'] = $__foreach_projekt_0_saved_item;
}
?>
        </div>
    </div>

    <div class="col hide-on-small-only m3 l2">
        <div class="tabs-wrapper">
            <ul class="collapsible" data-collapsible="accordion">
                <div class="input-field search white">
                    <input id="search" class="sickblue" type="text" name="search" value="">
                    <label for="search" >Suche</label>
                </div>
                <li>
                    <div class="collapsible-header">Abteilungen</div>
                    <div class="collapsible-body">
                        <input type="checkbox" value="Das ist ein Text">    
                    </div>
                </li>
                <li>
                    <div class="collapsible-header">Second</div>
                    <div class="collapsible-body"><p>Lorem ipsum dolor sit amet.</p></div>
                </li>
                <li>
                    <div class="collapsible-header">Third</div>
                    <div class="collapsible-body"><p>Lorem ipsum dolor sit amet.</p></div>
                </li>
            </ul>
        </div>
    </div>
</div><?php }
}
