<?php
/* Smarty version 4.0.0-rc.0, created on 2022-06-09 18:07:21
  from 'C:\xampp\htdocs\promobank\views\funcionarioroles\_form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0-rc.0',
  'unifunc' => 'content_62a26109b8f187_57767398',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '068c694bc033d074da01363ad7560e6c1e03d7b5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\promobank\\views\\funcionarioroles\\_form.tpl',
      1 => 1648489286,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62a26109b8f187_57767398 (Smarty_Internal_Template $_smarty_tpl) {
?><form action="" method="post">
    <div class="mb-3">
        <label for="rol" class="label text-success" style="font-weight: bold; font-size: 14px;">Rol <span
                class="text-danger">*</span></label>
        <select name="rol" class="form-control">
            <?php if ($_smarty_tpl->tpl_vars['button']->value == 'Editar') {?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['funcionarioRol']->value['rol_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['funcionarioRol']->value['rol']['nombre'];?>
</option>
            <?php }?>

            <option value="">Seleccione...</option>

            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['roles']->value, 'rol');
$_smarty_tpl->tpl_vars['rol']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['rol']->value) {
$_smarty_tpl->tpl_vars['rol']->do_else = false;
?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['rol']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['rol']->value['nombre'];?>
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
