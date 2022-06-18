<?php
/* Smarty version 4.0.0-rc.0, created on 2022-06-10 20:08:03
  from 'C:\xampp\htdocs\promobank\views\vacaciones\misVacas.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0-rc.0',
  'unifunc' => 'content_62a3ced36cc4e5_66264091',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f252b2225cef42777cb6802a6839a5b9643731b7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\promobank\\views\\vacaciones\\misVacas.tpl',
      1 => 1654902479,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62a3ced36cc4e5_66264091 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\promobank\\libs\\smarty\\libs\\plugins\\modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>
<div class="content-wrapper">
<div class="content-header">
<div class="container-fluid">
    <div class="row">

        <div class="col-md-5 ftco-animate">
            <div class="sidebar-box ftco-animate">
                <tr >       
                    <th></th>
                    <th style="text-align:center" colspan="3" ><h4>Vacaciones</h4></th>                        
                </tr>               


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
vacaciones/add/<?php echo $_smarty_tpl->tpl_vars['funcionario']->value['id'];?>
"
                        class="btn btn-outline-success">Solicitud Vacaciones</a>
                </p>
                <p>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
vacaciones/historial/<?php echo $_smarty_tpl->tpl_vars['funcionario']->value['id'];?>
"
                        class="btn btn-outline-success">Historial de Vacaciones</a>
                </p>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
funcionarios/miPerfil" class="btn btn-outline-primary btn-sm">Volver</a>

            </div>
        </div>
            </div>
        </div>
    </div>
</div>



<?php echo '<script'; ?>
>
    $('#date-init').datetimepicker({
        format: 'DD-MM-YYYY'
    });
<?php echo '</script'; ?>
>

<?php }
}
