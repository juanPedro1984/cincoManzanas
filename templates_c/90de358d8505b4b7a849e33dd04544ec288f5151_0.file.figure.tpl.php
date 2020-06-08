<?php
/* Smarty version 3.1.33, created on 2020-06-08 05:21:45
  from 'C:\xampp\htdocs\cincoManzanas\templates\figure.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5eddaec911d925_42999565',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '90de358d8505b4b7a849e33dd04544ec288f5151' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cincoManzanas\\templates\\figure.tpl',
      1 => 1591586502,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:texto1.tpl' => 1,
  ),
),false)) {
function content_5eddaec911d925_42999565 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="contImg">
  <figure class="figure fig">
    <img src="./img/libroMovilXL.jpg" class="figure-img img-fluid rounded" alt="imagen">
    <figcaption class="figure-caption text-right">A caption for the above image.</figcaption>
  </figure>
  <?php $_smarty_tpl->_subTemplateRender("file:texto1.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</div>
<?php }
}
