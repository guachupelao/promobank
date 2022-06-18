 <!-- Navbar -->
 {if isset(Session::get('autenticado'))}
 <nav class="main-header navbar navbar-expand navbar-white navbar-light">
 <!-- Left navbar links -->

    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      
        <li class="nav-item d-none d-sm-inline-block">
          <a href="{$_layoutParams.root}" class="nav-link">Home</a>
        </li>
    </ul>
    <div class="collapse navbar-collapse" id="ftco-nav">
      <ul class="navbar-nav ml-auto">   
        

        {if !isset(Session::get('autenticado'))}
          <li class="nav-item"><a href="{$_layoutParams.root}usuarios/login" class="nav-link">Login</a></li>
        {else}
          <li class="nav-item"><a href="{$_layoutParams.root}usuarios/logout" class="nav-link">Logout</a></li>
        {/if}
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
{/if}
<!-- /.navbar -->