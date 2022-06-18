<?php
/* Smarty version 4.0.0-rc.0, created on 2022-05-27 18:17:11
  from 'C:\xampp\htdocs\veterinaria\views\layout\default\menu.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0-rc.0',
  'unifunc' => 'content_62913fd7a3ac74_69325275',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3580608916cafc44238782337449c0790f8a123c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\veterinaria\\views\\layout\\default\\menu.tpl',
      1 => 1653686226,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62913fd7a3ac74_69325275 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- Main Sidebar Container -->
<?php if (((Session::get('autenticado') !== null ))) {?>
<aside class="main-sidebar sidebar-dark-primary elevation-4">
<!-- Brand Logo -->
<a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
" class="brand-link">
  <img src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['ruta_dist'];?>
img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
  <span class="brand-text font-weight-light">PromoBank</span>
</a>

<!-- Sidebar -->
<div class="sidebar">
  <!-- Sidebar user panel (optional) -->
  <div class="user-panel mt-3 pb-3 mb-3 d-flex">
    <div class="image">
      <img src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['ruta_dist'];?>
img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
    </div>
    <div class="info">
      <ul class="navbar-nav ml-auto">
        <?php if (((Session::get('autenticado') !== null ))) {?>
          <li class="nav-item active"><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
funcionarios/miPerfil"
              class="nav-link"><?php echo Session::get('usuario_nombre');?>
</a></li>
        <?php }?>
      </ul>
    </div>
  </div>


  <!-- Sidebar Menu -->
  <nav class="mt-1">
  <?php if (((Session::get('autenticado') !== null ))) {?>

    <?php if (Helper::getRolAdmin()) {?>
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
      <!-- Add icons to the links using the .nav-icon class
           with font-awesome or any other icon font library -->
           <li class="nav-header">Menu</li>
           <li class="nav-item ">
           <a href="#" class="nav-link ">
             <i class="nav-icon fas fa-chart-pie"></i>
             <p>
               Colaboradores
               <i class="right fas fa-angle-left"></i>
             </p>
           </a>
           <ul class="nav nav-treeview">
             <li class="nav-item">
               <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
funcionarios/" class="nav-link">
                 <i class="far fa-circle nav-icon"></i>
                 <p>Listar</p>
               </a>
             </li>
             <li class="nav-item">
               <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
funcionarios/add/" class="nav-link">
                 <i class="far fa-circle nav-icon"></i>
                 <p>Crear</p>
               </a>
             </li>          
           </ul>
         </li>         
        
       
           <li class="nav-item">
           <a href="#" class="nav-link">
             <i class="nav-icon fas fa-chart-pie"></i>
             <p>
               Regiones
               <i class="right fas fa-angle-left"></i>
             </p>
           </a>
           <ul class="nav nav-treeview">
             <li class="nav-item">
               <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
regiones/" class="nav-link">
                 <i class="far fa-circle nav-icon"></i>
                 <p>Listar</p>
               </a>
             </li>
             <li class="nav-item">
             <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
regiones/add" class="nav-link"</a>
                 <i class="far fa-circle nav-icon"></i>
                 <p>Crear</p>
               </a>
             </li>             
           </ul>
         </li>
       
      <li class="nav-item">
        <a href="#" class="nav-link">
          <i class="nav-icon fas fa-chart-pie"></i>
          <p>
            Vacaciones
            <i class="right fas fa-angle-left"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
vacaciones/" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
            <p>Listar</p>
            </a>
          </li>       
       
        </ul>
      </li>
        
    </ul>
    <?php }?> 
  <?php }?>
  </nav>

  <!-- /.sidebar-menu -->
</div>
<!-- /.sidebar -->
</aside>

<?php }?>

<?php }
}
