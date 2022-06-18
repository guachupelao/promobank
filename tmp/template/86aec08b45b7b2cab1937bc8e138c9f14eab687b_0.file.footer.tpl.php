<?php
/* Smarty version 4.0.0-rc.0, created on 2022-04-05 22:31:27
  from 'C:\xampp\htdocs\veterinaria\views\layout\default\footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0-rc.0',
  'unifunc' => 'content_624ced6f954329_65685444',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '86aec08b45b7b2cab1937bc8e138c9f14eab687b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\veterinaria\\views\\layout\\default\\footer.tpl',
      1 => 1649199202,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_624ced6f954329_65685444 (Smarty_Internal_Template $_smarty_tpl) {
if (((Session::get('autenticado') !== null ))) {?>
<footer class="main-footer">
<strong>Copyright &copy; 2014-2022 <a href="https://promobank.cl" target="_blank">PromoBank.cl</a>.</strong>
All rights reserved.
<div class="float-right d-none d-sm-inline-block">
  <b>Version</b> 3.2.0
</div>
</footer>
<?php }?>





<?php }
}
