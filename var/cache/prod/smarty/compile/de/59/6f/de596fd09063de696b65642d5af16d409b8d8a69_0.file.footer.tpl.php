<?php
/* Smarty version 3.1.34-dev-7, created on 2021-08-26 13:36:43
  from 'D:\xampp\htdocs\prestashop_1.7.7.3\pdf\footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_61276ebbd571a6_20001147',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'de596fd09063de696b65642d5af16d409b8d8a69' => 
    array (
      0 => 'D:\\xampp\\htdocs\\prestashop_1.7.7.3\\pdf\\footer.tpl',
      1 => 1616429400,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61276ebbd571a6_20001147 (Smarty_Internal_Template $_smarty_tpl) {
?><table style="width: 100%;">
	<tr>
		<td style="text-align: center; font-size: 6pt; color: #444;  width:100%;">
			<?php if ($_smarty_tpl->tpl_vars['available_in_your_account']->value) {?>
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'An electronic version of this invoice is available in your account. To access it, log in to our website using your e-mail address and password (which you created when placing your first order).','d'=>'Shop.Pdf','pdf'=>'true'),$_smarty_tpl ) );?>

				<br />
			<?php }?>
			<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['shop_address']->value,'html','UTF-8' ));?>
<br />

			<?php if (!empty($_smarty_tpl->tpl_vars['shop_phone']->value) || !empty($_smarty_tpl->tpl_vars['shop_fax']->value)) {?>
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'For more assistance, contact Support:','d'=>'Shop.Pdf','pdf'=>'true'),$_smarty_tpl ) );?>
<br />
				<?php if (!empty($_smarty_tpl->tpl_vars['shop_phone']->value)) {?>
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Tel: %s','sprintf'=>array(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['shop_phone']->value,'html','UTF-8' ))),'d'=>'Shop.Pdf','pdf'=>'true'),$_smarty_tpl ) );?>

				<?php }?>

				<?php if (!empty($_smarty_tpl->tpl_vars['shop_fax']->value)) {?>
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Fax: %s','sprintf'=>array(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['shop_fax']->value,'html','UTF-8' ))),'d'=>'Shop.Pdf','pdf'=>'true'),$_smarty_tpl ) );?>

				<?php }?>
				<br />
			<?php }?>

			<?php if (isset($_smarty_tpl->tpl_vars['shop_details']->value)) {?>
				<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['shop_details']->value,'html','UTF-8' ));?>
<br />
			<?php }?>

			<?php if (isset($_smarty_tpl->tpl_vars['free_text']->value)) {?>
				<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['free_text']->value,'html','UTF-8' ));?>
<br />
			<?php }?>
		</td>
	</tr>
</table>

<?php }
}
