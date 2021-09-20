<?php
/* Smarty version 3.1.34-dev-7, created on 2021-08-26 10:58:43
  from 'D:\xampp\htdocs\prestashop_1.7.7.3\themes\classic\templates\catalog\_partials\productlist.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_612749b3458504_07050433',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cdaf8d14d480c3dc1919a38ab0ab35502464f860' => 
    array (
      0 => 'D:\\xampp\\htdocs\\prestashop_1.7.7.3\\themes\\classic\\templates\\catalog\\_partials\\productlist.tpl',
      1 => 1616429400,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/miniatures/product.tpl' => 1,
  ),
),false)) {
function content_612749b3458504_07050433 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '1499839049612749b3454bb7_42382650';
?>
<div class="products<?php if (!empty($_smarty_tpl->tpl_vars['cssClass']->value)) {?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cssClass']->value, ENT_QUOTES, 'UTF-8');
}?>" itemscope itemtype="http://schema.org/ItemList">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product', false, 'position');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['position']->value => $_smarty_tpl->tpl_vars['product']->value) {
?>
        <?php $_smarty_tpl->_subTemplateRender("file:catalog/_partials/miniatures/product.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product']->value,'position'=>$_smarty_tpl->tpl_vars['position']->value), 0, true);
?>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div><?php }
}
