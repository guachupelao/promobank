<?php
/* Smarty version 4.0.0-rc.0, created on 2022-06-09 17:49:36
  from 'C:\xampp\htdocs\promobank\views\partials\_mensajes.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0-rc.0',
  'unifunc' => 'content_62a25ce04ba9c0_67188812',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2b1b3a3a55ca944f767ecd20325bb7dbd3f87117' => 
    array (
      0 => 'C:\\xampp\\htdocs\\promobank\\views\\partials\\_mensajes.tpl',
      1 => 1648489286,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62a25ce04ba9c0_67188812 (Smarty_Internal_Template $_smarty_tpl) {
if ((isset($_smarty_tpl->tpl_vars['_error']->value))) {?>
    <div style="margin-top: 40px;"></div>
    <p class="alert alert-danger"><?php echo $_smarty_tpl->tpl_vars['_error']->value;?>
</p>
<?php }?>

<?php if ((isset($_smarty_tpl->tpl_vars['_mensaje']->value))) {?>
    <div style="margin-top: 40px;"></div>
    <p class="alert alert-success"><?php echo $_smarty_tpl->tpl_vars['_mensaje']->value;?>
</p>
<?php }
}
}
