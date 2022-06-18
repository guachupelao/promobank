<?php
/* Smarty version 4.0.0-rc.0, created on 2022-05-31 15:17:20
  from 'C:\xampp\htdocs\veterinaria\views\pacientes\add.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0-rc.0',
  'unifunc' => 'content_62965bb00583b5_04597220',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ff8dfd37dfda1d3525b60d841680ecf1f0cfd5da' => 
    array (
      0 => 'C:\\xampp\\htdocs\\veterinaria\\views\\pacientes\\add.tpl',
      1 => 1654020617,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../partials/_mensajes.tpl' => 1,
    'file:../pacientes/_form.tpl' => 1,
  ),
),false)) {
function content_62965bb00583b5_04597220 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="content-wrapper">
<div class="content-header">
        <div class="col-md-6 ftco-animate">
            <div class="sidebar-box ftco-animate">
                <h3>
                    <?php echo $_smarty_tpl->tpl_vars['title']->value;?>

                </h3>
                <?php $_smarty_tpl->_subTemplateRender("file:../partials/_mensajes.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                <h4>Cliente: <?php echo $_smarty_tpl->tpl_vars['cliente']->value['nombre'];?>
</h4>

                <p class="text-danger">Campos obligatorios *</p>
                <?php $_smarty_tpl->_subTemplateRender("file:../pacientes/_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            </div>
        </div>
    </div>
</section> <!-- .section --><?php }
}
