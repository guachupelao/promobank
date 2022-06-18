<?php
/* Smarty version 4.0.0-rc.0, created on 2022-06-09 18:10:26
  from 'C:\xampp\htdocs\promobank\views\usuarios\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0-rc.0',
  'unifunc' => 'content_62a261c2ca5d26_84813945',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '57be2e57f9e8f75b3028b2284dc8a4aeb0ccaab7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\promobank\\views\\usuarios\\login.tpl',
      1 => 1649202034,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../partials/_mensajes.tpl' => 1,
  ),
),false)) {
function content_62a261c2ca5d26_84813945 (Smarty_Internal_Template $_smarty_tpl) {
?><head>
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['ruta_plugins'];?>
fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['ruta_plugins'];?>
icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['ruta_dist'];?>
css/adminlte.min.css">
</head>

<body-form class="hold-transition login-page ">
    <div class="login-box">
        <div class="login-logo">
            <a href="https://promobank.cl" target="_blank"><b>Promo</b>Bank</a>
        </div>
        <div class="card">    
            <div class="card-body login-card-body">   
                <p class="login-box-msg">Inicie sesión para continuar</p>

                <?php $_smarty_tpl->_subTemplateRender("file:../partials/_mensajes.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
             

                <form action="" method="post">
                    <div class="input-group mb-3">                      
                        <input type="email" name="email" class="form-control" id="" aria-describedby=""
                            placeholder="Ingrese su email" onpaste="return false">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-envelope"></span>
                                    </div>
                                 </div>
                    </div>
                    <div class="input-group mb-3">                                 
                        <input type="password" name="clave" class="form-control" id="" aria-describedby=""
                            placeholder="Ingrese su password" onpaste="return false">
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                    <span class="fas fa-lock"></span>
                                    </div>
                                </div>                            
                    </div>
                    <div class="mb-3">
                        <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
usuarios/recuperar">¿Olvidaste tu password?</a>
                    </div>
                    <input type="hidden" name="enviar" value="<?php echo $_smarty_tpl->tpl_vars['enviar']->value;?>
">
                    <button type="submit" class="btn btn-outline-success">Ingresar</button>
                   
                    </form>
                
            </div>
        </div>
    </div>
<!-- /.login-box -->

<!-- jQuery -->
<?php echo '<script'; ?>
 href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['ruta_plugins'];?>
jquery/jquery.min.js"><?php echo '</script'; ?>
>
<!-- Bootstrap 4 -->
<?php echo '<script'; ?>
 href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['ruta_plugins'];?>
bootstrap/js/bootstrap.bundle.min.js"><?php echo '</script'; ?>
>
<!-- AdminLTE App -->
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['ruta_dist'];?>
js/adminlte.min.js"><?php echo '</script'; ?>
>
</body-form>




<?php }
}
