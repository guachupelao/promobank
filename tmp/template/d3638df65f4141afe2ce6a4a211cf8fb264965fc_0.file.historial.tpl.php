<?php
/* Smarty version 4.0.0-rc.0, created on 2022-06-12 14:26:07
  from 'C:\xampp\htdocs\promobank\views\vacaciones\historial.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0-rc.0',
  'unifunc' => 'content_62a621af5e5232_13495159',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd3638df65f4141afe2ce6a4a211cf8fb264965fc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\promobank\\views\\vacaciones\\historial.tpl',
      1 => 1655054704,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../partials/_mensajes.tpl' => 1,
  ),
),false)) {
function content_62a621af5e5232_13495159 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\promobank\\libs\\smarty\\libs\\plugins\\modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
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
                                <th></th>                                                              
                            </tr>
                            <tr>
                            
                                <th>Nombre</th>                       
                                <th>Fecha de Solicitud</th>
                                <th>Dias solicitados</th>                       
                                <th>Dias Autorizados</th>                       
                                <th>Tipo de la Solicitud</th>                       
                                <th>Razon</th>                       
                                <th>Fecha de Inicio</th>                       
                                <th>Observaciones</th>                       
                                <th>Estado</th>                       
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
                                <td><?php echo $_smarty_tpl->tpl_vars['vacacion']->value['funcionario']['nombre'];?>
</td>
                                <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['vacacion']->value['created_at'],"%d-%m-%Y");?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['vacacion']->value['days_solicitados'];?>
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
                                <td><?php echo $_smarty_tpl->tpl_vars['vacacion']->value['status']['nombre'];?>
</td>
                                                                                                       
                            </tr>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </tbody>
                    </table>
            
                <?php }?>
                <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
vacaciones/misVacas" class="btn btn-outline-primary btn-sm">Volver</a>

            </div>
        </div>
    </div>
</section> <!-- .section -->
</div><?php }
}
