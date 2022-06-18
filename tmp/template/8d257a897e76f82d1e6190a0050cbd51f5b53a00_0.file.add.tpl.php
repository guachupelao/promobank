<?php
/* Smarty version 4.0.0-rc.0, created on 2022-06-09 18:05:46
  from 'C:\xampp\htdocs\promobank\views\comunas\add.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0-rc.0',
  'unifunc' => 'content_62a260aa0538b3_71569525',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8d257a897e76f82d1e6190a0050cbd51f5b53a00' => 
    array (
      0 => 'C:\\xampp\\htdocs\\promobank\\views\\comunas\\add.tpl',
      1 => 1654022288,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../partials/_mensajes.tpl' => 1,
    'file:../comunas/_form.tpl' => 1,
  ),
),false)) {
function content_62a260aa0538b3_71569525 (Smarty_Internal_Template $_smarty_tpl) {
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
                <?php $_smarty_tpl->_subTemplateRender("file:../comunas/_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            </div>
        </div>
    </div>
</div><?php }
}
