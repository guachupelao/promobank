<?php
/* Smarty version 4.0.0-rc.0, created on 2022-04-15 18:35:10
  from 'C:\xampp\htdocs\veterinaria\views\videos\_form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0-rc.0',
  'unifunc' => 'content_6259e50ec3d711_37882086',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '72029bb91b589d8d78eb74d104c87350ad547ef9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\veterinaria\\views\\videos\\_form.tpl',
      1 => 1650058508,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6259e50ec3d711_37882086 (Smarty_Internal_Template $_smarty_tpl) {
?><form action="" method="post">
    <div class="mb-3">
        <label for="name" class="label text-success" style="font-weight: bold; font-size: 14px;">Título <span
                class="text-danger">*</span></label>
        <input type="text" name="titulo" value="<?php echo (($tmp = $_smarty_tpl->tpl_vars['video']->value['titulo'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
" class="form-control" id=""
            aria-describedby="" placeholder="Título del video">
    </div>
    <div class="mb-3">
        <label for="name" class="label text-success" style="font-weight: bold; font-size: 14px;">Link <span
                class="text-danger">*</span></label>
        <textarea name="link" class="form-control" id="" rows="6" style="resize: none;" aria-describedby="" placeholder="Link del video"><?php echo (($tmp = $_smarty_tpl->tpl_vars['video']->value['link'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
</textarea>
    </div>
    <input type="hidden" name="enviar" value="<?php echo $_smarty_tpl->tpl_vars['enviar']->value;?>
">
    <button type="submit" class="btn btn-outline-success">Guardar</button>
    <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];
echo $_smarty_tpl->tpl_vars['ruta']->value;?>
" class="btn btn-outline-primary">Volver</a>
</form>

<?php }
}
