<?php
/* Smarty version 4.0.0-rc.0, created on 2022-06-09 17:59:47
  from 'C:\xampp\htdocs\promobank\views\funcionarios\miPerfil.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0-rc.0',
  'unifunc' => 'content_62a25f431b8d34_25017973',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'aa8a8a849c9cc1b7c6e41247c190e513db9420be' => 
    array (
      0 => 'C:\\xampp\\htdocs\\promobank\\views\\funcionarios\\miPerfil.tpl',
      1 => 1654022463,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../partials/_mensajes.tpl' => 1,
  ),
),false)) {
function content_62a25f431b8d34_25017973 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\promobank\\libs\\smarty\\libs\\plugins\\modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>
<div class="content-wrapper">
    <div class="content-header">
        <div class="col-md-6 ftco-animate">
            <div class="sidebar-box ftco-animate">

                <div class="col-md-5 ftco-animate">
                    <div class="sidebar-box ftco-animate">
                        <h3>
                            <?php echo $_smarty_tpl->tpl_vars['title']->value;?>

                        </h3>

                        <?php $_smarty_tpl->_subTemplateRender("file:../partials/_mensajes.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


                        <table class="table table-hover">
                            <tr>
                                <th>RUN:</th>
                                <td><?php echo $_smarty_tpl->tpl_vars['funcionario']->value['rut'];?>
</td>
                            </tr>
                            <tr>
                                <th>Nombre:</th>
                                <td><?php echo $_smarty_tpl->tpl_vars['funcionario']->value['nombre'];?>
</td>
                            </tr>
                            <tr>
                                <th>Email:</th>
                                <td><?php echo $_smarty_tpl->tpl_vars['funcionario']->value['email'];?>
</td>
                            </tr>
                            <tr>
                                <th>Dirección:</th>
                                <td><?php echo $_smarty_tpl->tpl_vars['funcionario']->value['direccion'];?>
</td>
                            </tr>
                            <tr>
                                <th>Comuna:</th>
                                <td><?php echo $_smarty_tpl->tpl_vars['funcionario']->value['comuna']['nombre'];?>
</td>
                            </tr>
                            <tr>
                                <th>Región:</th>
                                <td><?php echo $_smarty_tpl->tpl_vars['funcionario']->value['comuna']['region']['nombre'];?>
</td>
                            </tr>
                            <tr>
                                <th>Cargos:</th>
                                <td>
                                    <ul>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['roles']->value, 'rol');
$_smarty_tpl->tpl_vars['rol']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['rol']->value) {
$_smarty_tpl->tpl_vars['rol']->do_else = false;
?>
                                            <li><?php echo $_smarty_tpl->tpl_vars['rol']->value['rol']['nombre'];?>
</li>
                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <th>Teléfonos:</th>
                                <td>
                                    <ul>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['telefonos']->value, 'telefono');
$_smarty_tpl->tpl_vars['telefono']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['telefono']->value) {
$_smarty_tpl->tpl_vars['telefono']->do_else = false;
?>
                                            <li><?php echo $_smarty_tpl->tpl_vars['telefono']->value['numero'];?>
</li>
                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                            <th>Fecha de contrato:</th>
                                <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['funcionario']->value['date_in'],"d/m/Y");?>
</td>
                            </tr>                        
                            <tr>
                                <th>Creado:</th>
                                <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['funcionario']->value['created_at'],"%d-%m-%Y %H:%M:%S");?>
</td>
                            </tr>
                            <tr>
                                <th>Modificado:</th>
                                <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['funcionario']->value['updated_at'],"%d-%m-%Y %H:%M:%S");?>
</td>
                            </tr>
                            <tr>
                                <th>Activo:</th>
                                <?php if ((isset($_smarty_tpl->tpl_vars['funcionario']->value['usuario']))) {?>
                                    <td>
                                        <?php if ($_smarty_tpl->tpl_vars['funcionario']->value['usuario']['activo'] == 1) {?>
                                            Si
                                        <?php } else { ?>
                                            No
                                        <?php }?>
                                    </td>
                                <?php } else { ?>
                                    <td>
                                        No tiene una cuenta asociada
                                    </td>
                                <?php }?>
                            </tr>
                        </table>
                        <p>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
vacaciones/misVacas/<?php echo $_smarty_tpl->tpl_vars['funcionario']->value['id'];?>
"
                                class="btn btn-outline-success">Vacaciones</a>
                        </p>

                        <p>

                            <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
usuarios/editPassword/<?php echo $_smarty_tpl->tpl_vars['funcionario']->value['id'];?>
"
                                class="btn btn-outline-success">Cambiar Password</a>


                        </p>
                    </div>
                </div>
                        
            </div>
        </div>
    </div>
</div><?php }
}
