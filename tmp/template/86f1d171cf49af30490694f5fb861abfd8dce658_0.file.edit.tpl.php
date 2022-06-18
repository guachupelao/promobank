<?php
/* Smarty version 4.0.0-rc.0, created on 2022-06-09 18:04:49
  from 'C:\xampp\htdocs\promobank\views\regiones\edit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0-rc.0',
  'unifunc' => 'content_62a26071ba1322_52733373',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '86f1d171cf49af30490694f5fb861abfd8dce658' => 
    array (
      0 => 'C:\\xampp\\htdocs\\promobank\\views\\regiones\\edit.tpl',
      1 => 1654022674,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../partials/_mensajes.tpl' => 1,
    'file:../regiones/_form.tpl' => 1,
  ),
),false)) {
function content_62a26071ba1322_52733373 (Smarty_Internal_Template $_smarty_tpl) {
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
