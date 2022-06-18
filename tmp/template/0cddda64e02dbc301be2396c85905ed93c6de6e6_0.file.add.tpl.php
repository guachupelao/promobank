<?php
/* Smarty version 4.0.0-rc.0, created on 2022-06-09 18:04:26
  from 'C:\xampp\htdocs\promobank\views\regiones\add.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0-rc.0',
  'unifunc' => 'content_62a2605aedf433_39974910',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0cddda64e02dbc301be2396c85905ed93c6de6e6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\promobank\\views\\regiones\\add.tpl',
      1 => 1654022666,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../partials/_mensajes.tpl' => 1,
    'file:../regiones/_form.tpl' => 1,
  ),
),false)) {
function content_62a2605aedf433_39974910 (Smarty_Internal_Template $_smarty_tpl) {
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
                <?php $_smarty_tpl->_subTemplateRender("file:../regiones/_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            </div>
        </div>
    </div>
</div><?php }
}
