<?php
/* Smarty version 3.1.29, created on 2016-07-24 21:48:21
  from "E:\Programme\xampp\htdocs\PM\templates\fixed_menu_button.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57951b85c47f20_55756893',
  'file_dependency' => 
  array (
    '5ae72a0f16735a24c9f085c06d0c4d52a8e5791b' => 
    array (
      0 => 'E:\\Programme\\xampp\\htdocs\\PM\\templates\\fixed_menu_button.tpl',
      1 => 1469377906,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57951b85c47f20_55756893 ($_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['showNavButton']->value == TRUE) {?>
    <div class="fixed-action-btn" style="bottom: 45px; right: 24px;">
        <a class="btn-floating btn-large red">
            <i class="large material-icons">menu</i>
        </a>
        <ul>
            <li><a href="/pm/abmelden" class="btn-floating red tooltipped" data-position="left" data-delay="10" data-tooltip="Logout"><i class="material-icons">power_settings_new</i></a></li>
                <?php if (isset($_smarty_tpl->tpl_vars['fixed_button_nav_elements']->value)) {?>
                    <?php
$_from = $_smarty_tpl->tpl_vars['fixed_button_nav_elements']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_element_0_saved_item = isset($_smarty_tpl->tpl_vars['element']) ? $_smarty_tpl->tpl_vars['element'] : false;
$_smarty_tpl->tpl_vars['element'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['element']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['element']->value) {
$_smarty_tpl->tpl_vars['element']->_loop = true;
$__foreach_element_0_saved_local_item = $_smarty_tpl->tpl_vars['element'];
?>
                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['element']->value['url'];?>
" class="btn-floating red tooltipped" data-position="left" data-delay="10" data-tooltip="<?php echo $_smarty_tpl->tpl_vars['element']->value['tooltip'];?>
"><i class="material-icons"><?php echo $_smarty_tpl->tpl_vars['element']->value['iconname'];?>
</i></a></li>
                        <?php
$_smarty_tpl->tpl_vars['element'] = $__foreach_element_0_saved_local_item;
}
if ($__foreach_element_0_saved_item) {
$_smarty_tpl->tpl_vars['element'] = $__foreach_element_0_saved_item;
}
?>
                    <?php }?>
        </ul>
    </div>
<?php }
}
}
