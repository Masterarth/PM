<?php
/* Smarty version 3.1.29, created on 2016-07-16 18:04:19
  from "E:\Programme\xampp\htdocs\PM\templates\antrag_uebersicht.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_578a5b039f52a2_12154187',
  'file_dependency' => 
  array (
    '505eac6b38aabc34a3b22ed9749ba532e28f123a' => 
    array (
      0 => 'E:\\Programme\\xampp\\htdocs\\PM\\templates\\antrag_uebersicht.tpl',
      1 => 1468685057,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_578a5b039f52a2_12154187 ($_smarty_tpl) {
?>
<div class="row">
    <div class="col s3">
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
    <div class="col s9">
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
            <div class="card">
                <div class="row">
                    <div class="col s3">
                        <div class="card-image">
                            <img src="img/placeholder.jpg" />
                        </div>
                    </div>
                    <div class="col s8">
                        <h5 class="text-light-blue"><?php echo $_smarty_tpl->tpl_vars['projekt']->value->getTitle();?>
</h5>
                        <div class="previewInfo">
                            <div class="discription">Funktionsbereich: ist noch nicht verfügbar</div>
                            <span class="discription">Standort: ist noch nicht verfügbar</span>
                        </div>
                        <div class="previewInfo">
                            <div class="discription">Kurzbeschreibung:</div>
                            <div class="discription"><?php echo $_smarty_tpl->tpl_vars['projekt']->value->getBeschreibung();?>
</div>
                        </div>
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
</div><?php }
}
