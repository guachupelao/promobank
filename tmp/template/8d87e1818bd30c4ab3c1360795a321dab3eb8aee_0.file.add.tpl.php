<?php
/* Smarty version 4.0.0-rc.0, created on 2022-06-17 22:25:50
  from 'C:\xampp\htdocs\promobank\views\telefonos\add.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0-rc.0',
  'unifunc' => 'content_62ad299e0bae56_83427968',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8d87e1818bd30c4ab3c1360795a321dab3eb8aee' => 
    array (
      0 => 'C:\\xampp\\htdocs\\promobank\\views\\telefonos\\add.tpl',
      1 => 1654022930,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../partials/_mensajes.tpl' => 1,
    'file:../telefonos/_form.tpl' => 1,
  ),
),false)) {
function content_62ad299e0bae56_83427968 (Smarty_Internal_Template $_smarty_tpl) {
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
</div>

<?php }
}
