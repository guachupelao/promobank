<?php
/* Smarty version 4.0.0-rc.0, created on 2022-06-09 18:19:34
  from 'C:\xampp\htdocs\promobank\views\vacaciones\edit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0-rc.0',
  'unifunc' => 'content_62a263e6f416a7_22065450',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2c925e6a9b4298f3d1e478214a08757da43b2da5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\promobank\\views\\vacaciones\\edit.tpl',
      1 => 1653679142,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../partials/_mensajes.tpl' => 1,
    'file:../vacaciones/_form.tpl' => 1,
  ),
),false)) {
function content_62a263e6f416a7_22065450 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="content-wrapper">
<section class="ftco-section ftco-degree-bg">
    <div class="container">
        <div class="col-md-6 ftco-animate">
            <div class="sidebar-box ftco-animate">
                <h3>
                    <?php echo $_smarty_tpl->tpl_vars['title']->value;?>

                </h3>
                <?php $_smarty_tpl->_subTemplateRender("file:../partials/_mensajes.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                <p class="text-danger">Campos obligatorios *</p>
               
                <?php $_smarty_tpl->_subTemplateRender("file:../vacaciones/_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                

            </div>
            <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
vacaciones/view" class="btn btn-outline-primary btn-sm">Volver</a>
        </div>
    </div>
</section> <!-- .section -->
</div><?php }
}
