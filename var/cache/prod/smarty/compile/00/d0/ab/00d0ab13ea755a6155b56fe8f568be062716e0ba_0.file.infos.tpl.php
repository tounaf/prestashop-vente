<?php
/* Smarty version 3.1.34-dev-7, created on 2021-08-26 11:15:00
  from 'D:\xampp\htdocs\prestashop_1.7.7.3\modules\ps_wirepayment\views\templates\hook\infos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_61274d84b4ec19_08106117',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '00d0ab13ea755a6155b56fe8f568be062716e0ba' => 
    array (
      0 => 'D:\\xampp\\htdocs\\prestashop_1.7.7.3\\modules\\ps_wirepayment\\views\\templates\\hook\\infos.tpl',
      1 => 1593027171,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61274d84b4ec19_08106117 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="alert alert-info">
  <img src="../modules/ps_wirepayment/logo.png" style="float:left; margin-right:15px;" height="60">
  <p><strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"This module allows you to accept secure payments by bank wire.",'d'=>'Modules.Wirepayment.Admin'),$_smarty_tpl ) );?>
</strong></p>
  <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"If the client chooses to pay by bank wire, the order status will change to 'Waiting for Payment'.",'d'=>'Modules.Wirepayment.Admin'),$_smarty_tpl ) );?>
</p>
  <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"That said, you must manually confirm the order upon receiving the bank wire.",'d'=>'Modules.Wirepayment.Admin'),$_smarty_tpl ) );?>
</p>
</div>
<?php }
}
