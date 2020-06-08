<?php
/* Smarty version 3.1.33, created on 2020-06-08 05:23:08
  from 'C:\xampp\htdocs\cincoManzanas\templates\figureInv.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5eddaf1ce0a128_07362291',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd9cf942c8bfa19252a2a8b155da90441c67ee282' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cincoManzanas\\templates\\figureInv.tpl',
      1 => 1591586537,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:texto1.tpl' => 1,
  ),
),false)) {
function content_5eddaf1ce0a128_07362291 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="contImg">
  <?php $_smarty_tpl->_subTemplateRender("file:texto1.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  <figure class="figure fig">
    <img src="./img/libroMovilXL.jpg" class="figure-img img-fluid rounded" alt="imagen">
    <figcaption class="figure-caption text-right">A caption for the above image.</figcaption>
  </figure>
</div>
<?php }
}
