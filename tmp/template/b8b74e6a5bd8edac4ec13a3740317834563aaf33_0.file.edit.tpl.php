<?php
/* Smarty version 4.0.0-rc.0, created on 2022-05-31 15:11:02
  from 'C:\xampp\htdocs\veterinaria\views\pacientetipos\edit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0-rc.0',
  'unifunc' => 'content_62965a3698d895_41204267',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b8b74e6a5bd8edac4ec13a3740317834563aaf33' => 
    array (
      0 => 'C:\\xampp\\htdocs\\veterinaria\\views\\pacientetipos\\edit.tpl',
      1 => 1654020653,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../partials/_mensajes.tpl' => 1,
    'file:../pacientetipos/_form.tpl' => 1,
  ),
),false)) {
function content_62965a3698d895_41204267 (Smarty_Internal_Template $_smarty_tpl) {
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
                <?php $_smarty_tpl->_subTemplateRender("file:../pacientetipos/_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            </div>
        </div>
    </div>
</section> <!-- .section --><?php }
}
