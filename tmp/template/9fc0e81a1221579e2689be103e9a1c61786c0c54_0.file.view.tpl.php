<?php
/* Smarty version 4.0.0-rc.0, created on 2022-04-29 20:09:34
  from 'C:\xampp\htdocs\veterinaria\views\reservas\view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0-rc.0',
  'unifunc' => 'content_626c702eaf0f45_85541165',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9fc0e81a1221579e2689be103e9a1c61786c0c54' => 
    array (
      0 => 'C:\\xampp\\htdocs\\veterinaria\\views\\reservas\\view.tpl',
      1 => 1650759563,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../partials/_mensajes.tpl' => 1,
  ),
),false)) {
function content_626c702eaf0f45_85541165 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\veterinaria\\libs\\smarty\\libs\\plugins\\modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>
<section class="ftco-section ftco-degree-bg">
    <div class="container">
        <div class="col-md-6 ftco-animate">
            <div class="sidebar-box ftco-animate">
                <h3>
                    <?php echo $_smarty_tpl->tpl_vars['title']->value;?>

                </h3>

                <?php $_smarty_tpl->_subTemplateRender("file:../partials/_mensajes.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                <table class="table table-hover">
                    <tr>
                        <th>Fecha:</th>
                        <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['reserva']->value['fecha'],"%d-%m-%Y");?>
</td>
                    </tr>
                    <tr>
                        <th>Hora:</th>
                        <td><?php echo $_smarty_tpl->tpl_vars['reserva']->value['horario']['rango_hora'];?>
</td>
                    </tr>
                    <tr>
                        <th>Paciente:</th>
                        <td><?php echo $_smarty_tpl->tpl_vars['reserva']->value['nombre_paciente'];?>
</td>
                    </tr>
                    <tr>
                        <th>Tipo Paciente:</th>
                        <td><?php echo $_smarty_tpl->tpl_vars['reserva']->value['pacienteTipo']['nombre'];?>
</td>
                    </tr>
                    <tr>
                        <th>Cliente:</th>
                        <td><?php echo $_smarty_tpl->tpl_vars['reserva']->value['nombre_cliente'];?>
</td>
                    </tr>
                    <tr>
                        <th>Tipo de Servicio:</th>
                        <td><?php echo $_smarty_tpl->tpl_vars['reserva']->value['servicioTipo']['nombre'];?>
</td>
                    </tr>
                    <tr>
                        <th>Veterinario(a):</th>
                        <td><?php echo $_smarty_tpl->tpl_vars['reserva']->value['funcionario']['nombre'];?>
</td>
                    </tr>
                    <tr>
                        <th>Status:</th>
                        <td><?php echo $_smarty_tpl->tpl_vars['reserva']->value['reservaStatus']['nombre'];?>
</td>
                    </tr>
                    <tr>
                        <th>Reservado Por:</th>
                        <td><?php echo $_smarty_tpl->tpl_vars['reserva']->value['usuario']['funcionario']['nombre'];?>
</td>
                    </tr>
                    <tr>
                        <th>Creado:</th>
                        <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['reserva']->value['created_at'],"%d-%m-%Y %H:%M:%S");?>
</td>
                    </tr>
                    <tr>
                        <th>Modificado:</th>
                        <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['reserva']->value['updated_at'],"%d-%m-%Y %H:%M:%S");?>
</td>
                    </tr>
                </table>
                <p>
                    <?php if (Helper::getRolAdminSuper()) {?>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
reservas/edit/<?php echo $_smarty_tpl->tpl_vars['reserva']->value['id'];?>
"
                            class="btn btn-outline-primary btn-sm">Cambiar Status</a>
                    <?php }?>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
reservas/" class="btn btn-outline-primary btn-sm">Volver</a>
                </p>
            </div>
        </div>
    </div>
</section> <!-- .section --><?php }
}
