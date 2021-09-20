<?php
/* Smarty version 3.1.34-dev-7, created on 2021-08-26 13:36:44
  from 'D:\xampp\htdocs\prestashop_1.7.7.3\pdf\invoice.shipping-tab.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_61276ebc043051_23684247',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f2450a0f95cb8498ef90ca4a6f41128f8afdfe53' => 
    array (
      0 => 'D:\\xampp\\htdocs\\prestashop_1.7.7.3\\pdf\\invoice.shipping-tab.tpl',
      1 => 1616429400,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61276ebc043051_23684247 (Smarty_Internal_Template $_smarty_tpl) {
?><table id="shipping-tab" width="100%">
	<tr>
		<td class="shipping center small grey bold" width="44%"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Carrier','d'=>'Shop.Pdf','pdf'=>'true'),$_smarty_tpl ) );?>
</td>
		<td class="shipping center small white" width="56%"><?php echo $_smarty_tpl->tpl_vars['carrier']->value->name;?>
</td>
	</tr>
</table>
<?php }
}
