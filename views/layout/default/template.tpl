<!DOCTYPE html>
<html lang="en">
  <head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>{$titulo|default:"Solicitud"}</title>
<meta name="description" content="Your Description Here">
<meta name="keywords" content="bootstrap themes, portfolio, responsive theme">

  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:200,300,400,500,600,700,800&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{$_layoutParams.ruta_plugins}fontawesome-free/css/all.min.css">
  <!-- IonIcons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{$_layoutParams.ruta_dist}css/adminlte.min.css">
   
 
  <script src="{$_layoutParams.ruta_js}funciones.js"></script>


  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
 <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
 <!--[if lt IE 9]>
   <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
   <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
 <![endif]-->

   {if isset($_layoutParams.js) && count($_layoutParams.js)}
     {foreach item=js from=$_layoutParams.js}
       <script type="text/javascript" src="{$js}"></script>
     {/foreach}

   {/if}
</head>
<!--
`body` tag options:

  * sidebar-collapse
  * sidebar-mini
--> 





<body class="hold-transition sidebar-mini">

{include file="header.tpl"}
{include file="menu.tpl"}

  <div class="content">
        <noscript><p>Debe tener el soporte de Javascript habilitado</p></noscript>

        {include file=$_contenido}
      </div>



<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="{$_layoutParams.ruta_plugins}jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="{$_layoutParams.ruta_plugins}bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="{$_layoutParams.ruta_js}bootstrap.min.js"></script>

<!-- AdminLTE -->
<script src="{$_layoutParams.ruta_dist}js/adminlte.js"></script>

<!-- OPTIONAL SCRIPTS -->
<script src="{$_layoutParams.ruta_plugins}chart.js/Chart.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="{$_layoutParams.ruta_dist}js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{$_layoutParams.ruta_dist}js/pages/dashboard3.js"></script>


<script src="{$_layoutParams.ruta_js}jquery.min.js"></script>
<script src="{$_layoutParams.ruta_js}jquery-migrate-3.0.1.min.js"></script>
<script src="{$_layoutParams.ruta_js}popper.min.js"></script>
<script src="{$_layoutParams.ruta_js}jquery.easing.1.3.js"></script>
<script src="{$_layoutParams.ruta_js}jquery.waypoints.min.js"></script>
<script src="{$_layoutParams.ruta_js}jquery.stellar.min.js"></script>
<script src="{$_layoutParams.ruta_js}jquery.animateNumber.min.js"></script>
<script src="{$_layoutParams.ruta_js}bootstrap-datepicker.js"></script>
<script src="{$_layoutParams.ruta_js}jquery.timepicker.min.js"></script>

<script src="{$_layoutParams.ruta_js}jquery.magnific-popup.min.js"></script>
<script src="{$_layoutParams.ruta_js}scrollax.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
<script src="{$_layoutParams.ruta_js}google-map.js"></script>
<script src="{$_layoutParams.ruta_js}main.js"></script>
</body>
</html>

{include file='footer.tpl'}