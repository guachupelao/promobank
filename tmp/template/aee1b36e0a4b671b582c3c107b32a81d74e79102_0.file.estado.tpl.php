<?php
/* Smarty version 4.0.0-rc.0, created on 2022-05-26 18:09:13
  from 'C:\xampp\htdocs\veterinaria\views\vacaciones\estado.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0-rc.0',
  'unifunc' => 'content_628fec799e9533_65687656',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'aee1b36e0a4b671b582c3c107b32a81d74e79102' => 
    array (
      0 => 'C:\\xampp\\htdocs\\veterinaria\\views\\vacaciones\\estado.tpl',
      1 => 1653599025,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../partials/_mensajes.tpl' => 1,
  ),
),false)) {
function content_628fec799e9533_65687656 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\veterinaria\\libs\\smarty\\libs\\plugins\\modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>
<div class="content-wrapper">
<div class="content-header">
<div class="container-fluid">
        <div class="col-md-8 ftco-animate">
            <div class="sidebar-box ftco-animate">
                <h3>
                    <?php echo $_smarty_tpl->tpl_vars['title']->value;?>
              
                </h3>

                <?php $_smarty_tpl->_subTemplateRender("file:../partials/_mensajes.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                <?php if ((isset($_smarty_tpl->tpl_vars['vacaciones']->value)) && count($_smarty_tpl->tpl_vars['vacaciones']->value)) {?>
                    <table class="table table-hover">
                        <thead>
                            <tr >                          
                              
                                <th></th>
                                <th></th>                                                              
                                <th></th>                                                              
                                <th></th>                                                              
                                <th></th>                                                              
                                <th></th>                                                              
                                <th></th>                                                              
                                <th></th>                                                              
                            </tr>
                            <tr>
                            
                                <th>Fecha de Solicitud</th>
                                <th>Dias solicitados</th>                       
                                <th>Tipo de la Solicitud</th>                       
                                <th>Razon</th>                       
                                <th>Fecha de Inicio</th>                       
                                <th>Observaciones</th>                       
                                <th>Estado</th>                       
                                <th>Cambiar Estado</th>                       
                            </tr>
                        </thead>
                        <tbody>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['vacaciones']->value, 'vacacion');
$_smarty_tpl->tpl_vars['vacacion']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['vacacion']->value) {
$_smarty_tpl->tpl_vars['vacacion']->do_else = false;
?>
                            <tr> 
                            
                                <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['vacacion']->value['created_at'],"%d-%m-%Y");?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['vacacion']->value['days_funcionario'];?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['vacacion']->value['tipo'];?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['vacacion']->value['razon'];?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['vacacion']->value['date_init'];?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['vacacion']->value['observaciones'];?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['vacacion']->value['reservaStatus']['nombre'];?>
</td>
                                <td><?php if ($_smarty_tpl->tpl_vars['button']->value == 'Editar') {?>
                                        <div class="mb-3">
                                            <label for="status" class="label text-success" style="font-weight: bold; font-size: 14px;">Status
                                                <span class="text-danger">*</span></label>
                                            <select name="status" class="form-control">
                                                <option value="<?php echo $_smarty_tpl->tpl_vars['reserva']->value['reserva_status_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['reserva']->value['reservaStatus']['nombre'];?>
</option>
                                
                                                <option value="">Seleccione...</option>
                                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['statuses']->value, 'status');
$_smarty_tpl->tpl_vars['status']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['status']->value) {
$_smarty_tpl->tpl_vars['status']->do_else = false;
?>
                                                    <option value="<?php echo $_smarty_tpl->tpl_vars['status']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['status']->value['nombre'];?>
</option>
                                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                            </select>
                                        </div>
                                    <?php }?>
                                </tr>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </tbody>
                    </table>
            
                <?php }?>
            </div>
        </div>
    </div>
</section> <!-- .section -->
</div><?php }
}
