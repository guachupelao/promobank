<?php
/* Smarty version 4.0.0-rc.0, created on 2022-05-31 15:15:08
  from 'C:\xampp\htdocs\veterinaria\views\usuarios\editPassword.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0-rc.0',
  'unifunc' => 'content_62965b2ccddd01_27394412',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1d0e90e2103d6daeed9387d95f808f922ee41594' => 
    array (
      0 => 'C:\\xampp\\htdocs\\veterinaria\\views\\usuarios\\editPassword.tpl',
      1 => 1654020907,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../partials/_mensajes.tpl' => 1,
    'file:../usuarios/_form.tpl' => 1,
  ),
),false)) {
function content_62965b2ccddd01_27394412 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="content-wrapper">
<div class="content-header">
<div class="col-md-6 ftco-animate">
<div class="sidebar-box ftco-animate">
                <h3>
                    <?php echo $_smarty_tpl->tpl_vars['title']->value;?>

                </h3>
                <h4>Funcionario(a): <?php echo $_smarty_tpl->tpl_vars['usuario']->value['funcionario']['nombre'];?>
</h4>
                <?php $_smarty_tpl->_subTemplateRender("file:../partials/_mensajes.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                <p class="text-danger">Campos obligatorios *</p>
                <?php $_smarty_tpl->_subTemplateRender("file:../usuarios/_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

            </div>
        </div>
    </div>
</section> <!-- .section --><?php }
}
