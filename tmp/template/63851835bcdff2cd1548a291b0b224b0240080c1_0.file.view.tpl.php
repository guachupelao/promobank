<?php
/* Smarty version 4.0.0-rc.0, created on 2022-05-31 15:02:51
  from 'C:\xampp\htdocs\veterinaria\views\vacaciones\view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0-rc.0',
  'unifunc' => 'content_6296584bdc2cb0_39977078',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '63851835bcdff2cd1548a291b0b224b0240080c1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\veterinaria\\views\\vacaciones\\view.tpl',
      1 => 1654017870,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../partials/_mensajes.tpl' => 1,
  ),
),false)) {
function content_6296584bdc2cb0_39977078 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\veterinaria\\libs\\smarty\\libs\\plugins\\modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>
<div class="content-wrapper">

<div class="container-fluid">
        <div class="col-md-8 ftco-animate">
            <div class="sidebar-box ftco-animate">
                <h3>
                    <?php echo $_smarty_tpl->tpl_vars['title']->value;?>
              
                </h3>

                <?php $_smarty_tpl->_subTemplateRender("file:../partials/_mensajes.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                
                    <table class="table table-hover">
                        <tr>                       
                            <th>Nombre</th>  
                            <td><?php echo $_smarty_tpl->tpl_vars['vacacion']->value['funcionario']['nombre'];?>
</td>
                        </tr>
                            <th>Fecha de Solicitud</th>
                            <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['vacacion']->value['created_at'],"%d-%m-%Y");?>
</td>
                        </tr>
                        <tr>
                            <th>Dias solicitados</th>
                            <td><?php echo $_smarty_tpl->tpl_vars['vacacion']->value['days_funcionario'];?>
</td>
                        </tr>
                        <tr>                      
                            <th>Tipo de la Solicitud</th> 
                            <td><?php echo $_smarty_tpl->tpl_vars['vacacion']->value['tipo'];?>
</td>
                        </tr>    
                        <tr>                      
                            <th>Razon</th>     
                            <td><?php echo $_smarty_tpl->tpl_vars['vacacion']->value['razon'];?>
</td> 
                        </tr>
                        <tr>                 
                            <th>Fecha de Inicio</th>  
                            <td><?php echo $_smarty_tpl->tpl_vars['vacacion']->value['date_init'];?>
</td>
                        </tr>
                        <tr>                     
                            <th>Observaciones</th> 
                            <td><?php echo $_smarty_tpl->tpl_vars['vacacion']->value['observaciones'];?>
</td>
                        </tr>
                        <tr>                      
                            <th>Estado</th>  
                            <td><?php echo $_smarty_tpl->tpl_vars['vacacion']->value['reservaStatus']['nombre'];?>
</td>                                         
                        </tr>                
                    </table>
                    <p>
                        <?php if (Helper::getRolAdminSuper()) {?>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
vacaciones/edit/<?php echo $_smarty_tpl->tpl_vars['vacacion']->value['id'];?>
"
                                class="btn btn-outline-success">Cambiar Estado</a>
                        <?php }?>
                    </p>  
                              
               
            </div>
        </div>
        <tr> 
                        <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
vacaciones/" class="btn btn-outline-primary btn-sm">Volver</a>
                    </tr> 
    </div>
</div><?php }
}
