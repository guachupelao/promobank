<?php
/* Smarty version 4.0.0-rc.0, created on 2022-05-31 14:56:20
  from 'C:\xampp\htdocs\veterinaria\views\clientes\_form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0-rc.0',
  'unifunc' => 'content_629656c4e12142_91757346',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '593c07046b673b7edd1e45b8620d46276dd9ebe4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\veterinaria\\views\\clientes\\_form.tpl',
      1 => 1648489286,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_629656c4e12142_91757346 (Smarty_Internal_Template $_smarty_tpl) {
?><form action="" method="post">
    <?php if ($_smarty_tpl->tpl_vars['button']->value == 'Guardar') {?>
        <div class="mb-3">
            <label for="rut" class="label text-success" style="font-weight: bold; font-size: 14px;">RUT <span
                    class="text-danger">*</span></label>
            <input type="text" name="rut" value="<?php echo (($tmp = $_smarty_tpl->tpl_vars['cliente']->value['rut'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
" class="form-control" id=""
                aria-describedby="" placeholder="Rut del cliente">
        </div>
    <?php }?>
    <div class="mb-3">
        <label for="nombre" class="label text-success" style="font-weight: bold; font-size: 14px;">Nombre <span
                class="text-danger">*</span></label>
        <input type="text" name="nombre" value="<?php echo (($tmp = $_smarty_tpl->tpl_vars['cliente']->value['nombre'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
" class="form-control" id=""
            aria-describedby="" placeholder="Nombre del Cliente">
    </div>

    <div class="mb-3">
        <label for="email" class="label text-success" style="font-weight: bold; font-size: 14px;">Email <span
            class="text-danger">*</span></label>
        <input type="email" name="email" value="<?php echo (($tmp = $_smarty_tpl->tpl_vars['cliente']->value['email'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
" class="form-control" id=""
                aria-describedby="" placeholder="Email del cliente">
    </div>

    <div class="mb-3">
        <label for="direccion" class="label text-success" style="font-weight: bold; font-size: 14px;">Direcci??n <span
                class="text-danger">*</span></label>
        <input type="text" name="direccion" value="<?php echo (($tmp = $_smarty_tpl->tpl_vars['cliente']->value['direccion'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
" class="form-control" id=""
            aria-describedby="" placeholder="Direcci??n del cliente">
    </div>
    <div class="mb-3">
        <label for="comuna" class="label text-success" style="font-weight: bold; font-size: 14px;">Comuna <span
                class="text-danger">*</span></label>
        <select name="comuna" class="form-control" id="">
            <?php if ($_smarty_tpl->tpl_vars['button']->value == 'Editar') {?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['cliente']->value['comuna_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['cliente']->value['comuna']['nombre'];?>
</option>
            <?php }?>

            <option value="">Seleccione...</option>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['comunas']->value, 'comuna');
$_smarty_tpl->tpl_vars['comuna']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['comuna']->value) {
$_smarty_tpl->tpl_vars['comuna']->do_else = false;
?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['comuna']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['comuna']->value['nombre'];?>
</option>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </select>
    </div>
    <input type="hidden" name="enviar" value="<?php echo $_smarty_tpl->tpl_vars['enviar']->value;?>
">
    <button type="submit" class="btn btn-outline-success"><?php echo $_smarty_tpl->tpl_vars['button']->value;?>
</button>
    <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];
echo $_smarty_tpl->tpl_vars['ruta']->value;?>
" class="btn btn-outline-primary">Volver</a>
</form><?php }
}
