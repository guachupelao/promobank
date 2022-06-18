<?php
/* Smarty version 4.0.0-rc.0, created on 2022-06-12 14:26:20
  from 'C:\xampp\htdocs\promobank\views\vacaciones\_form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0-rc.0',
  'unifunc' => 'content_62a621bca97231_91494563',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b1c6dbdf42ff0034b7bfb1d49cb3fd1134febb15' => 
    array (
      0 => 'C:\\xampp\\htdocs\\promobank\\views\\vacaciones\\_form.tpl',
      1 => 1655054680,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62a621bca97231_91494563 (Smarty_Internal_Template $_smarty_tpl) {
?><form action="" method="post">
    <?php if ($_smarty_tpl->tpl_vars['button']->value == 'Guardar') {?>
        <!--.  <div class="mb-3">
            <label for="name" class="label text-success" style="font-weight: bold; font-size: 14px;">Funcionario <span class="text-danger">*</span></label>
                <select name="funcionario" class="form-control" id="">
                
                    <option value="">Seleccione...</option>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['funcionarios']->value, 'funcionario');
$_smarty_tpl->tpl_vars['funcionario']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['funcionario']->value) {
$_smarty_tpl->tpl_vars['funcionario']->do_else = false;
?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['funcionario']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['funcionario']->value['nombre'];?>
</option>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </select>
        </div> -->

        <div class="mb-3">
            <label for="tipo" class="label text-success" style="font-weight: bold; font-size: 14px;">Tipo <span
                    class="text-danger">*</span></label>
            <select name="tipo" class="form-control">
                <?php if ($_smarty_tpl->tpl_vars['button']->value == 'Editar') {?>
                
                <?php }?>
                <option value="">Seleccione...</option>
                <option value="Vacaciones">Vacaciones</option>
                <option value="Falta">Falta</option>
                <option value="Permiso">Permiso</option>
            </select>
        </div>    

        <div class="mb-3">
            <label for="razon" class="label text-success" style="font-weight: bold; font-size: 14px;">Razon <span
                    class="text-danger">*</span></label>
            <textarea name="razon" class="form-control" rows="4" placeholder="Razon del servicio" style="resize: none;">
                <?php echo (($tmp = $_smarty_tpl->tpl_vars['vacacion']->value['razon'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>

            </textarea>
        </div>

        <div class="mb-3">
            <label for="days_solicitados" class="label text-success" style="font-weight: bold; font-size: 14px;">Dias Tomados <span
                    class="text-danger">*</span></label>
            <input type="number" name="days_solicitados" value="<?php echo (($tmp = $_smarty_tpl->tpl_vars['vacacion']->value['days_solicitados'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
" class="form-control" id=""
                aria-describedby="" placeholder="Dias solicitados">
        </div>
    
        <div class="mb-3">
            <label for="date_init" class="label text-success" style="font-weight: bold; font-size: 14px;">Fecha de Inicio<span
                    class="text-danger">*</span></label>
            <input type="date" name="date_init" value="<?php echo (($tmp = $_smarty_tpl->tpl_vars['vacacion']->value['date_init'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
" class="form-control" id=""
                aria-describedby="" placeholder="Fecha de inicio">
        </div>

        
    <?php }?>  
    <?php if ($_smarty_tpl->tpl_vars['button']->value == 'Editar') {?>
        <div class="mb-3">
            <label for="estado" class="label text-success" style="font-weight: bold; font-size: 14px;">Cambiar Estado
                <span class="text-danger">*</span></label>
            <select name="estado" class="form-control">
                <option value="<?php echo $_smarty_tpl->tpl_vars['vacacion']->value['status_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['vacacion']->value['status']['nombre'];?>
</option>

                <option value="">Seleccione...</option>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['statuses']->value, 'estado');
$_smarty_tpl->tpl_vars['estado']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['estado']->value) {
$_smarty_tpl->tpl_vars['estado']->do_else = false;
?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['estado']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['estado']->value['nombre'];?>
</option>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </select>
        </div>
        <div class="mb-3">
            <label for="days_funcionario" class="label text-success" style="font-weight: bold; font-size: 14px;">Dias Autorizados <span
                    class="text">*</span></label>
            <input min=0 type="number" name="days_funcionario" value="<?php echo (($tmp = $_smarty_tpl->tpl_vars['vacacion']->value['days_funcionario'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
" class="form-control" id=""
                aria-describedby="" placeholder="Dias autorizados">
        </div>
        <div class="mb-3">
        <label for="observaciones" class="label text-success" style="font-weight: bold; font-size: 14px;">Observaciones <span
                class="text-danger">*</span></label>
        <textarea name="observaciones" class="form-control" rows="4" placeholder="observaciones" style="resize: none;">
            <?php echo (($tmp = $_smarty_tpl->tpl_vars['vacacion']->value['observaciones'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>

        </textarea>
    </div>
    <?php }?>


    <input type="hidden" name="enviar" value="<?php echo $_smarty_tpl->tpl_vars['enviar']->value;?>
">
    <button type="submit" class="btn btn-outline-success"><?php echo $_smarty_tpl->tpl_vars['button']->value;?>
</button>
    <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
vacaciones/misVacas" class="btn btn-outline-primary btn-sm">Volver</a>

</form><?php }
}
