<?php
/* Smarty version 4.0.0-rc.0, created on 2022-05-31 14:48:01
  from 'C:\xampp\htdocs\veterinaria\views\serviciotipos\edit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0-rc.0',
  'unifunc' => 'content_629654d1e6c0b3_76040814',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '63ae72c6ed42317045c97d7992c0c99d89712154' => 
    array (
      0 => 'C:\\xampp\\htdocs\\veterinaria\\views\\serviciotipos\\edit.tpl',
      1 => 1654019258,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../partials/_mensajes.tpl' => 1,
    'file:../serviciotipos/_form.tpl' => 1,
  ),
),false)) {
function content_629654d1e6c0b3_76040814 (Smarty_Internal_Template $_smarty_tpl) {
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
                <?php $_smarty_tpl->_subTemplateRender("file:../serviciotipos/_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            </div>
        </div>
    </div>
</section> <!-- .section --><?php }
}
