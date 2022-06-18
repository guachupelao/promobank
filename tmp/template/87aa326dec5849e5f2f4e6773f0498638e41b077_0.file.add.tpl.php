<?php
/* Smarty version 4.0.0-rc.0, created on 2022-06-09 18:14:43
  from 'C:\xampp\htdocs\promobank\views\vacaciones\add.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0-rc.0',
  'unifunc' => 'content_62a262c3dc5ca8_12691742',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '87aa326dec5849e5f2f4e6773f0498638e41b077' => 
    array (
      0 => 'C:\\xampp\\htdocs\\promobank\\views\\vacaciones\\add.tpl',
      1 => 1653673563,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../partials/_mensajes.tpl' => 1,
    'file:../vacaciones/_form.tpl' => 1,
  ),
),false)) {
function content_62a262c3dc5ca8_12691742 (Smarty_Internal_Template $_smarty_tpl) {
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
        </div>
    </div>
    
</section> <!-- .section -->
</div><?php }
}
