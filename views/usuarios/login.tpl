<head>
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{$_layoutParams.ruta_plugins}fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="{$_layoutParams.ruta_plugins}icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{$_layoutParams.ruta_dist}css/adminlte.min.css">
</head>

<body-form class="hold-transition login-page ">
    <div class="login-box">
        <div class="login-logo">
            <a href="https://promobank.cl" target="_blank"><b>Promo</b>Bank</a>
        </div>
        <div class="card">    
            <div class="card-body login-card-body">   
                <p class="login-box-msg">Inicie sesión para continuar</p>

                {include file="../partials/_mensajes.tpl"}
             

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
                        <a href="{$_layoutParams.root}usuarios/recuperar">¿Olvidaste tu password?</a>
                    </div>
                    <input type="hidden" name="enviar" value="{$enviar}">
                    <button type="submit" class="btn btn-outline-success">Ingresar</button>
                   
                    </form>
                
            </div>
        </div>
    </div>
<!-- /.login-box -->

<!-- jQuery -->
<script href="{$_layoutParams.ruta_plugins}jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script href="{$_layoutParams.ruta_plugins}bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="{$_layoutParams.ruta_dist}js/adminlte.min.js"></script>
</body-form>




