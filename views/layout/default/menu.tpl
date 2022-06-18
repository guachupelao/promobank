<!-- Main Sidebar Container -->
{if isset(Session::get('autenticado'))}
<aside class="main-sidebar sidebar-dark-primary elevation-4">
<!-- Brand Logo -->
<a href="{$_layoutParams.root}" class="brand-link">
  <img src="{$_layoutParams.ruta_dist}img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
  <span class="brand-text font-weight-light">PromoBank</span>
</a>

<!-- Sidebar -->
<div class="sidebar">
  <!-- Sidebar user panel (optional) -->
  <div class="user-panel mt-3 pb-3 mb-3 d-flex">
    <div class="image">
      <img src="{$_layoutParams.ruta_dist}img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
    </div>
    <div class="info">
      <ul class="navbar-nav ml-auto">
        {if isset(Session::get('autenticado'))}
          <li class="nav-item active"><a href="{$_layoutParams.root}funcionarios/miPerfil"
              class="nav-link">{Session::get('usuario_nombre')}</a></li>
        {/if}
      </ul>
    </div>
  </div>


  <!-- Sidebar Menu -->
<nav class="mt-1">
  {if isset(Session::get('autenticado'))}

    {if Helper::getRolAdmin()}
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
      <!-- Add icons to the links using the .nav-icon class
           with font-awesome or any other icon font library -->
          <li class="nav-header">Menu</li>
            <li class="nav-item ">
            <a href="#" class="nav-link ">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Colaboradores
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{$_layoutParams.root}funcionarios/" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Listar</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{$_layoutParams.root}funcionarios/add/" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Crear</p>
                </a>
              </li>          
            </ul>
            </li>  

            <li class="nav-item ">
            <a href="#" class="nav-link ">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Cargos
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{$_layoutParams.root}roles/" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Listar</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{$_layoutParams.root}roles/add/" class="nav-link">
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
                  Comunas
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{$_layoutParams.root}comunas/" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Listar</p>
                  </a>
                </li>
                <li class="nav-item">
                <a href="{$_layoutParams.root}comunas/add" class="nav-link"</a>
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
                  <a href="{$_layoutParams.root}regiones/" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Listar</p>
                  </a>
                </li>
                <li class="nav-item">
                <a href="{$_layoutParams.root}regiones/add" class="nav-link"</a>
                    <i class="far fa-circle nav-icon"></i>
                    <p>Crear</p>
                  </a>
                </li>             
              </ul>
            </li>
       
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-calendar-alt"></i>
                <p>
                  Vacaciones
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{$_layoutParams.root}vacaciones/" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Listar</p>
                  </a>
                </li>       
            
              </ul>
            </li>
        
    </ul>
    {/if} 
  {/if}
</nav>

  <!-- /.sidebar-menu -->
</div>
<!-- /.sidebar -->
</aside>

{/if}

