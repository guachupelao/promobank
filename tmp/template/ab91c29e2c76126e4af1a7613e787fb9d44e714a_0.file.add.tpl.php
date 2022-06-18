<?php
/* Smarty version 4.0.0-rc.0, created on 2022-05-31 14:46:12
  from 'C:\xampp\htdocs\veterinaria\views\telefonos\add.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0-rc.0',
  'unifunc' => 'content_629654644d0db6_18841639',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ab91c29e2c76126e4af1a7613e787fb9d44e714a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\veterinaria\\views\\telefonos\\add.tpl',
      1 => 1654019170,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../partials/_mensajes.tpl' => 1,
    'file:../telefonos/_form.tpl' => 1,
  ),
),false)) {
function content_629654644d0db6_18841639 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="content-wrapper">
<div class="content-header">
        <div class="col-md-4 ftco-animate">
            <div class="sidebar-box ftco-animate">
                <h3>
                    <?php echo $_smarty_tpl->tpl_vars['title']->value;?>

                </h3>
                <?php $_smarty_tpl->_subTemplateRender("file:../partials/_mensajes.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                <p class="text-danger">Campos obligatorios *</p>
                <?php $_smarty_tpl->_subTemplateRender("file:../telefonos/_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            </div>
        </div>
    </div>
</section> <!-- .section -->

<?php }
}
