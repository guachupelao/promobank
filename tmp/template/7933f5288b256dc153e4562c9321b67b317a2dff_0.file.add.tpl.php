<?php
/* Smarty version 4.0.0-rc.0, created on 2022-05-31 15:16:58
  from 'C:\xampp\htdocs\veterinaria\views\clientes\add.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0-rc.0',
  'unifunc' => 'content_62965b9a7b1b27_55303132',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7933f5288b256dc153e4562c9321b67b317a2dff' => 
    array (
      0 => 'C:\\xampp\\htdocs\\veterinaria\\views\\clientes\\add.tpl',
      1 => 1654021013,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../partials/_mensajes.tpl' => 1,
    'file:../clientes/_form.tpl' => 1,
  ),
),false)) {
function content_62965b9a7b1b27_55303132 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="content-wrapper">
<div class="content-header">
<div class="col-md-6 ftco-animate">
<div class="sidebar-box ftco-animate">
                <h3>
                    <?php echo $_smarty_tpl->tpl_vars['title']->value;?>

                </h3>
                <?php $_smarty_tpl->_subTemplateRender("file:../partials/_mensajes.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                <p class="text-danger">Campos obligatorios *</p>
                <?php $_smarty_tpl->_subTemplateRender("file:../clientes/_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            </div>
        </div>
    </div>
</section> <!-- .section --><?php }
}
