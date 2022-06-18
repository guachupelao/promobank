<?php
/* Smarty version 4.0.0-rc.0, created on 2022-05-31 14:48:51
  from 'C:\xampp\htdocs\veterinaria\views\servicios\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0-rc.0',
  'unifunc' => 'content_629655036068d2_26087273',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9ce0bf8af41a74ccabde372dcbf955b17718f3c7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\veterinaria\\views\\servicios\\index.tpl',
      1 => 1654019329,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../partials/_mensajes.tpl' => 1,
  ),
),false)) {
function content_629655036068d2_26087273 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\veterinaria\\libs\\smarty\\libs\\plugins\\modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>
<div class="content-wrapper">
<div class="content-header">
        <div class="col-md-10 ftco-animate">
            <div class="sidebar-box ftco-animate">
                <h3>
                    <?php echo $_smarty_tpl->tpl_vars['title']->value;?>

                </h3>

                <?php $_smarty_tpl->_subTemplateRender("file:../partials/_mensajes.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                <?php if ((isset($_smarty_tpl->tpl_vars['servicios']->value)) && count($_smarty_tpl->tpl_vars['servicios']->value)) {?>
                    <table class="table table-hover">
                        <tr>
                            <th>Id</th>
                            <th>Tipo de Servicio</th>
                            <th>Paciente</th>
                            <th>RUT Cliente</th>
                            <th>Atentido Por</th>
                            <th>Fecha - Hora</th>
                        </tr>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['servicios']->value, 'servicio');
$_smarty_tpl->tpl_vars['servicio']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['servicio']->value) {
$_smarty_tpl->tpl_vars['servicio']->do_else = false;
?>
                            <tr>
                                <td><?php echo $_smarty_tpl->tpl_vars['servicio']->value['id'];?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['servicio']->value['servicioTipo']['nombre'];?>
</td>
                                <td>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
pacientes/view/<?php echo $_smarty_tpl->tpl_vars['servicio']->value['paciente']['id'];?>
" title="Ver Paciente">
                                        <?php echo $_smarty_tpl->tpl_vars['servicio']->value['paciente']['nombre'];?>

                                    </a>
                                </td>
                                <td>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
clientes/view/<?php echo $_smarty_tpl->tpl_vars['servicio']->value['paciente']['cliente']['id'];?>
" title="Ver Cliente">
                                        <?php echo $_smarty_tpl->tpl_vars['servicio']->value['paciente']['cliente']['rut'];?>

                                    </a>
                                </td>
                                <td><?php echo $_smarty_tpl->tpl_vars['servicio']->value['usuario']['funcionario']['nombre'];?>
</td>
                                <td>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
servicios/view/<?php echo $_smarty_tpl->tpl_vars['servicio']->value['id'];?>
">
                                        <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['servicio']->value['created_at'],"%d-%m-%Y %H:%M:%S");?>

                                    </a>
                                </td>
                            </tr>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </table>
                <?php } else { ?>
                    <p class="text-info">No hay servicios registrados</p>
                <?php }?>
            </div>
        </div>
    </div>
</section> <!-- .section --><?php }
}
