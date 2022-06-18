<?php
/* Smarty version 4.0.0-rc.0, created on 2022-05-14 19:24:04
  from 'C:\xampp\htdocs\veterinaria\views\servicios\add.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0-rc.0',
  'unifunc' => 'content_62802c04214d60_42362684',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4e0adc71c173f08fc18df80835accdddb97a1d20' => 
    array (
      0 => 'C:\\xampp\\htdocs\\veterinaria\\views\\servicios\\add.tpl',
      1 => 1648489286,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../partials/_mensajes.tpl' => 1,
    'file:../servicios/_form.tpl' => 1,
  ),
),false)) {
function content_62802c04214d60_42362684 (Smarty_Internal_Template $_smarty_tpl) {
?><section class="ftco-section ftco-degree-bg">
    <div class="container">
        <div class="col-md-6 ftco-animate">
            <div class="sidebar-box ftco-animate">
                <h3>
                    <?php echo $_smarty_tpl->tpl_vars['title']->value;?>

                </h3>
                <?php $_smarty_tpl->_subTemplateRender("file:../partials/_mensajes.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                <h4>Cliente: <?php echo $_smarty_tpl->tpl_vars['paciente']->value['cliente']['nombre'];?>
</h4>
                <h5>Paciente: <?php echo $_smarty_tpl->tpl_vars['paciente']->value['nombre'];?>
</h5>

                <p class="text-danger">Campos obligatorios *</p>
                <?php $_smarty_tpl->_subTemplateRender("file:../servicios/_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            </div>
        </div>
    </div>
</section> <!-- .section --><?php }
}
