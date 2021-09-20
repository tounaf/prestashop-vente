<?php
/* Smarty version 3.1.34-dev-7, created on 2021-08-26 11:06:18
  from 'D:\xampp\htdocs\prestashop_1.7.7.3\modules\welcome\views\templates\tooltip.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_61274b7a7d75a6_40313063',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '58734bee1faa5651c4cfa63555dfe46bbd760d40' => 
    array (
      0 => 'D:\\xampp\\htdocs\\prestashop_1.7.7.3\\modules\\welcome\\views\\templates\\tooltip.tpl',
      1 => 1607008276,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61274b7a7d75a6_40313063 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="onboarding-tooltip">
  <div class="content"></div>
  <div class="onboarding-tooltipsteps">
    <div class="total"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Step','d'=>'Modules.Welcome.Admin'),$_smarty_tpl ) );?>
 <span class="count">1/5</span></div>
    <div class="bulls">
    </div>
  </div>
  <button class="btn btn-primary btn-xs onboarding-button-next"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Next','d'=>'Modules.Welcome.Admin'),$_smarty_tpl ) );?>
</button>
</div>
<?php }
}
