<?php
/* Smarty version 4.0.0-rc.0, created on 2022-05-31 15:17:04
  from 'C:\xampp\htdocs\veterinaria\views\clientes\view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0-rc.0',
  'unifunc' => 'content_62965ba019d581_32155225',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4167a2eedcd7d6a088f012574d7453931947ea58' => 
    array (
      0 => 'C:\\xampp\\htdocs\\veterinaria\\views\\clientes\\view.tpl',
      1 => 1654021013,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../partials/_mensajes.tpl' => 1,
  ),
),false)) {
function content_62965ba019d581_32155225 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\veterinaria\\libs\\smarty\\libs\\plugins\\modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>
<div class="content-wrapper">
<div class="content-header">
<div class="col-md-6 ftco-animate">
<div class="sidebar-box ftco-animate">
                    <h3>
                        <?php echo $_smarty_tpl->tpl_vars['title']->value;?>

                    </h3>

                    <?php $_smarty_tpl->_subTemplateRender("file:../partials/_mensajes.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                    <table class="table table-hover">
                        <tr>
                            <th>RUT:</th>
                            <td><?php echo $_smarty_tpl->tpl_vars['cliente']->value['rut'];?>
</td>
                        </tr>
                        <tr>
                            <th>Nombre:</th>
                            <td><?php echo $_smarty_tpl->tpl_vars['cliente']->value['nombre'];?>
</td>
                        </tr>
                        <tr>
                            <th>Email:</th>
                            <td><?php echo $_smarty_tpl->tpl_vars['cliente']->value['email'];?>
</td>
                        </tr>
                        <tr>
                            <th>Dirección:</th>
                            <td><?php echo $_smarty_tpl->tpl_vars['cliente']->value['direccion'];?>
</td>
                        </tr>
                        <tr>
                            <th>Comuna:</th>
                            <td><?php echo $_smarty_tpl->tpl_vars['cliente']->value['comuna']['nombre'];?>
</td>
                        </tr>
                        <tr>
                            <th>Creado:</th>
                            <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['cliente']->value['created_at'],"%d-%m-%Y %H:%M:%S");?>
</td>
                        </tr>
                        <tr>
                            <th>Modificado:</th>
                            <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['cliente']->value['updated_at'],"%d-%m-%Y %H:%M:%S");?>
</td>
                        </tr>
                    </table>
                    <p>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
clientes/edit/<?php echo $_smarty_tpl->tpl_vars['cliente']->value['id'];?>
"
                            class="btn btn-outline-primary btn-sm">Editar</a>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
clientes/" class="btn btn-outline-primary btn-sm">Volver</a>
                    </p>
                </div>
            </div>
                        <div class="col-md-6 ftco-animate">
                                <div class="sidebar-box ftco-animate">
                    <h3>Teléfonos</h3>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
telefonos/add/<?php echo $_smarty_tpl->tpl_vars['cliente']->value['id'];?>
/<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
"
                        class="btn btn-outline-success btn-sm">Agregar Teléfono</a>

                    <?php if ((isset($_smarty_tpl->tpl_vars['telefonos']->value)) && count($_smarty_tpl->tpl_vars['telefonos']->value)) {?>
                        <table class="table table-hover table-responsive">
                            <tr>
                                <th>Número</th>
                                <th>Móvil</th>
                            </tr>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['telefonos']->value, 'telefono');
$_smarty_tpl->tpl_vars['telefono']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['telefono']->value) {
$_smarty_tpl->tpl_vars['telefono']->do_else = false;
?>
                                <tr>
                                    <td>
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
telefonos/view/<?php echo $_smarty_tpl->tpl_vars['telefono']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['telefono']->value['numero'];?>
</a>
                                    </td>
                                    <td>
                                        <?php if ($_smarty_tpl->tpl_vars['telefono']->value['movil'] == 1) {?>
                                            Si
                                        <?php } else { ?>
                                            No
                                        <?php }?>
                                    </td>
                                </tr>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                        </table>
                    <?php } else { ?>
                        <p class="text-info">No hay teléfonos asociados</p>
                    <?php }?>
                </div>
                <div class="sidebar-box ftco-animate">
                    <h3>Pacientes</h3>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
pacientes/add/<?php echo $_smarty_tpl->tpl_vars['cliente']->value['id'];?>
"
                        class="btn btn-outline-success btn-sm">Agregar Paciente</a>

                    <?php if ((isset($_smarty_tpl->tpl_vars['cliente']->value['pacientes'])) && count($_smarty_tpl->tpl_vars['cliente']->value['pacientes'])) {?>
                        <table class="table table-hover table-responsive">
                            <tr>
                                <th>Nombre</th>
                                <th>Tipo</th>
                                <th>Edad</th>
                                <th>Peso</th>
                            </tr>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cliente']->value['pacientes'], 'paciente');
$_smarty_tpl->tpl_vars['paciente']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['paciente']->value) {
$_smarty_tpl->tpl_vars['paciente']->do_else = false;
?>
                                <tr>
                                    <td>
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
pacientes/view/<?php echo $_smarty_tpl->tpl_vars['paciente']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['paciente']->value['nombre'];?>
</a>
                                    </td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['paciente']->value['pacienteTipo']['nombre'];?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['paciente']->value['edad'];?>
 año(s)</td>
                                    <td><?php echo number_format($_smarty_tpl->tpl_vars['paciente']->value['peso'],3);?>
 Kg.</td>
                                </tr>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                        </table>
                    <?php } else { ?>
                        <p class="text-info">No hay pacientes asociados</p>
                    <?php }?>
                </div>
            </div>
        </div>
</div>
<?php }
}
