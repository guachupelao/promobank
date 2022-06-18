<?php
/* Smarty version 4.0.0-rc.0, created on 2022-04-17 20:11:53
  from 'C:\xampp\htdocs\veterinaria\views\horarios\_form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0-rc.0',
  'unifunc' => 'content_625c9eb9d3eee0_49724230',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ed02f66ac57df0abe9e8307b75ee6df15e460bdc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\veterinaria\\views\\horarios\\_form.tpl',
      1 => 1648489286,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_625c9eb9d3eee0_49724230 (Smarty_Internal_Template $_smarty_tpl) {
?><form action="" method="post">
    <div class="mb-3">
        <label for="rango_hora" class="label text-success" style="font-weight: bold; font-size: 14px;">Rango Horario <span
                class="text-danger">*</span></label>
        <input type="text" name="rango_hora" value="<?php echo (($tmp = $_smarty_tpl->tpl_vars['horario']->value['rango_hora'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
" class="form-control" id="" aria-describedby=""
            placeholder="Rango horario">
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
