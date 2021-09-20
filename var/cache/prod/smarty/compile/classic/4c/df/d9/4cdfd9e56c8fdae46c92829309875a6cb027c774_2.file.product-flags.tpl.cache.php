<?php
/* Smarty version 3.1.34-dev-7, created on 2021-08-26 10:58:43
  from 'D:\xampp\htdocs\prestashop_1.7.7.3\themes\classic\templates\catalog\_partials\product-flags.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_612749b3573c04_27059620',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4cdfd9e56c8fdae46c92829309875a6cb027c774' => 
    array (
      0 => 'D:\\xampp\\htdocs\\prestashop_1.7.7.3\\themes\\classic\\templates\\catalog\\_partials\\product-flags.tpl',
      1 => 1616429400,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_612749b3573c04_27059620 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->compiled->nocache_hash = '1096612758612749b356e0f0_09792676';
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_139033061612749b3571857_06577228', 'product_flags');
?>

<?php }
/* {block 'product_flags'} */
class Block_139033061612749b3571857_06577228 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_flags' => 
  array (
    0 => 'Block_139033061612749b3571857_06577228',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <ul class="product-flags">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['flags'], 'flag');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['flag']->value) {
?>
            <li class="product-flag <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['flag']->value['type'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['flag']->value['label'], ENT_QUOTES, 'UTF-8');?>
</li>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ul>
<?php
}
}
/* {/block 'product_flags'} */
}
