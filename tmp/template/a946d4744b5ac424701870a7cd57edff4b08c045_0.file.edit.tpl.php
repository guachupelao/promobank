<?php
/* Smarty version 4.0.0-rc.0, created on 2022-06-10 18:16:19
  from 'C:\xampp\htdocs\promobank\views\funcionarios\edit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0-rc.0',
  'unifunc' => 'content_62a3b4a356b044_21718106',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a946d4744b5ac424701870a7cd57edff4b08c045' => 
    array (
      0 => 'C:\\xampp\\htdocs\\promobank\\views\\funcionarios\\edit.tpl',
      1 => 1654022413,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../partials/_mensajes.tpl' => 1,
    'file:../funcionarios/_form.tpl' => 1,
  ),
),false)) {
function content_62a3b4a356b044_21718106 (Smarty_Internal_Template $_smarty_tpl) {
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
                <?php $_smarty_tpl->_subTemplateRender("file:../funcionarios/_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            </div>
        </div>
    </div>
</div>
<?php }
}
