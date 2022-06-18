<?php
/* Smarty version 4.0.0-rc.0, created on 2022-06-09 19:28:23
  from 'C:\xampp\htdocs\promobank\views\comunas\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0-rc.0',
  'unifunc' => 'content_62a27407e26be5_09693868',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2b0d65e90111a8b8aef9a1acf56094d60aebda7c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\promobank\\views\\comunas\\index.tpl',
      1 => 1654813701,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../partials/_mensajes.tpl' => 1,
  ),
),false)) {
function content_62a27407e26be5_09693868 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="content-wrapper">
    <div class="content-header">
        <div class="col-md-6 ftco-animate">
            <div class="sidebar-box ftco-animate">
                <h3>
                    <?php echo $_smarty_tpl->tpl_vars['title']->value;?>

            
                </h3>

                <?php $_smarty_tpl->_subTemplateRender("file:../partials/_mensajes.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                <?php if ((isset($_smarty_tpl->tpl_vars['comunas']->value)) && count($_smarty_tpl->tpl_vars['comunas']->value)) {?>
                    <table class="table table-hover">
                        <tr>
                            <th>Comuna</th>
                            <th>Región</th>
                        </tr>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['comunas']->value, 'comuna');
$_smarty_tpl->tpl_vars['comuna']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['comuna']->value) {
$_smarty_tpl->tpl_vars['comuna']->do_else = false;
?>
                            <tr>
                                <td>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
comunas/view/<?php echo $_smarty_tpl->tpl_vars['comuna']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['comuna']->value['nombre'];?>
</a>
                                </td>
                                <td><?php echo $_smarty_tpl->tpl_vars['comuna']->value['region']['nombre'];?>
</td>
                            </tr>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </table>
                <?php } else { ?>
                    <p class="text-info">No hay comunas registradas</p>
                <?php }?>
            </div>
        </div>
    </div>
</div><?php }
}
