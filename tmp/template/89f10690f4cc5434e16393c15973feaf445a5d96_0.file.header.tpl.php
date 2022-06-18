<?php
/* Smarty version 4.0.0-rc.0, created on 2022-06-09 19:24:54
  from 'C:\xampp\htdocs\promobank\views\layout\default\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0-rc.0',
  'unifunc' => 'content_62a273363138e8_03165995',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '89f10690f4cc5434e16393c15973feaf445a5d96' => 
    array (
      0 => 'C:\\xampp\\htdocs\\promobank\\views\\layout\\default\\header.tpl',
      1 => 1654813491,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62a273363138e8_03165995 (Smarty_Internal_Template $_smarty_tpl) {
?> <!-- Navbar -->
 <?php if (((Session::get('autenticado') !== null ))) {?>
 <nav class="main-header navbar navbar-expand navbar-white navbar-light">
 <!-- Left navbar links -->

    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      
        <li class="nav-item d-none d-sm-inline-block">
          <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
" class="nav-link">Home</a>
        </li>
    </ul>
    <div class="collapse navbar-collapse" id="ftco-nav">
      <ul class="navbar-nav ml-auto">   
        

        <?php if (!((Session::get('autenticado') !== null ))) {?>
          <li class="nav-item"><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
usuarios/login" class="nav-link">Login</a></li>
        <?php } else { ?>
          <li class="nav-item"><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
usuarios/logout" class="nav-link">Logout</a></li>
        <?php }?>
      </ul>
    </div>

</ul>

    <ul class="navbar-nav ml-auto">
    <!-- Navbar Search -->

    <li class="nav-item">
      <a class="nav-link" data-widget="fullscreen" href="#" role="button">
        <i class="fas fa-expand-arrows-alt"></i>
      </a>
    </li>
    </ul>

</nav>
<?php }?>
<!-- /.navbar --><?php }
}
