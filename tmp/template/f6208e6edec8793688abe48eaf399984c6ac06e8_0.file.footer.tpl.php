<?php
/* Smarty version 4.0.0-rc.0, created on 2022-06-09 17:49:36
  from 'C:\xampp\htdocs\promobank\views\layout\default\footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0-rc.0',
  'unifunc' => 'content_62a25ce0537520_27293598',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f6208e6edec8793688abe48eaf399984c6ac06e8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\promobank\\views\\layout\\default\\footer.tpl',
      1 => 1649199202,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62a25ce0537520_27293598 (Smarty_Internal_Template $_smarty_tpl) {
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
