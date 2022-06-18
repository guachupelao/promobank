<?php
/* Smarty version 4.0.0-rc.0, created on 2022-05-17 18:22:02
  from 'C:\xampp\htdocs\veterinaria\views\funcionarios\misVacas.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0-rc.0',
  'unifunc' => 'content_628411fa898982_46583231',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7c3ee084053240e997b7cb9534f0a65570a983c0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\veterinaria\\views\\funcionarios\\misVacas.tpl',
      1 => 1652552153,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../partials/_mensajes.tpl' => 1,
  ),
),false)) {
function content_628411fa898982_46583231 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\veterinaria\\libs\\smarty\\libs\\plugins\\modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>
<div class="content-wrapper">
    <div class="content-header">
    <div class="container-fluid">
        <div class="row">

            <div class="col-md-6 ftco-animate">
                <div class="sidebar-box ftco-animate">
                    <tr >       
                        <th></th>
                        <th style="text-align:center" colspan="3" ><h4>Vacaciones</h4></th>                        
                    </tr>

                    <?php $_smarty_tpl->_subTemplateRender("file:../partials/_mensajes.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


                    <table class="table table-hover">
                        <tr>
                            <th>Fecha de contrato:</th>
                            <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['funcionario']->value['date_in'],"d/m/Y");?>
</td>
                        </tr>   
                        <tr>
                            <th>Dias Ganados:</th>
                            <td><?php ob_start();
echo vacationDays($_smarty_tpl->tpl_vars['funcionario']->value->date_in);
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>
</td>
                        </tr>  
                        <tr>
                            <th>Dias Tomados:</th>
                            <td><?php ob_start();
echo vacationTaken($_smarty_tpl->tpl_vars['funcionario']->value->id);
$_prefixVariable2 = ob_get_clean();
echo $_prefixVariable2;?>
</td>
                        </tr>  
                        <tr>
                            <th>Dias Restantes:</th>
                            <td><?php ob_start();
echo vacationDays($_smarty_tpl->tpl_vars['funcionario']->value->date_in)-vacationTaken($_smarty_tpl->tpl_vars['funcionario']->value->id);
$_prefixVariable3 = ob_get_clean();
echo $_prefixVariable3;?>
</td>  
                        </tr>       
                                               
                        
                        
                    </table>
                    <p>

                        <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
vacaciones/<?php echo $_smarty_tpl->tpl_vars['funcionario']->value['id'];?>
"
                            class="btn btn-outline-success">Solicitar Vacaciones</a>


                    </p>
                </div>
            </div>
                        
        </div>
    </div>
    </div>
</div><?php }
}
