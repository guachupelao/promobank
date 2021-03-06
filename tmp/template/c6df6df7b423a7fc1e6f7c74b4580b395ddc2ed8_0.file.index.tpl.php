<?php
/* Smarty version 4.0.0-rc.0, created on 2022-05-31 15:16:57
  from 'C:\xampp\htdocs\veterinaria\views\clientes\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0-rc.0',
  'unifunc' => 'content_62965b991cc274_95161553',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c6df6df7b423a7fc1e6f7c74b4580b395ddc2ed8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\veterinaria\\views\\clientes\\index.tpl',
      1 => 1654021013,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../partials/_mensajes.tpl' => 1,
  ),
),false)) {
function content_62965b991cc274_95161553 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="content-wrapper">
<div class="content-header">
<div class="col-md-6 ftco-animate">
<div class="sidebar-box ftco-animate">
                <h3>
                    <?php echo $_smarty_tpl->tpl_vars['title']->value;?>

                    <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
clientes/add" class="btn btn-outline-success btn-sm">Agregar Cliente</a>
                </h3>
                <hr style="background-color: #5DB645; height:1px">
                <?php $_smarty_tpl->_subTemplateRender("file:../partials/_mensajes.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                <div class="col-md-8">
                    <form class="row g-3" action="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
clientes/clienteRut" method="post">
                        <div class="col-9">
                        <input style="border-color:#5DB645" type="text" name="rut" class="form-control-plaintext" id="staticEmail2"
                                placeholder="RUT del cliente (sin puntos y con guión">
                        </div>
                        <div class="col-auto">
                            <input type="hidden" name="enviar" value="<?php echo $_smarty_tpl->tpl_vars['enviar']->value;?>
">
                            <button type="submit" class="btn btn-primary btn-sm mb-3">Buscar</button>
                        </div>
                    </form>
                </div>

                <?php if ((isset($_smarty_tpl->tpl_vars['clientes']->value)) && count($_smarty_tpl->tpl_vars['clientes']->value)) {?>
                    <table class="table table-hover">
                        <tr>
                            <th>RUT</th>
                            <th>Nombre</th>
                            <th>Email</th>
                            <th>Comuna</th>
                        </tr>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['clientes']->value, 'cliente');
$_smarty_tpl->tpl_vars['cliente']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['cliente']->value) {
$_smarty_tpl->tpl_vars['cliente']->do_else = false;
?>
                            <tr>
                                <td>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
clientes/view/<?php echo $_smarty_tpl->tpl_vars['cliente']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['cliente']->value['rut'];?>
</a>
                                </td>
                                <td>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
clientes/view/<?php echo $_smarty_tpl->tpl_vars['cliente']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['cliente']->value['nombre'];?>
</a>
                                </td>
                                <td><?php echo $_smarty_tpl->tpl_vars['cliente']->value['email'];?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['cliente']->value['comuna']['nombre'];?>
</td>
                            </tr>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </table>
                <?php } else { ?>
                    <p class="text-info">No hay clientes registrados</p>
                <?php }?>
            </div>
        </div>
    </div>
</section> <!-- .section --><?php }
}
