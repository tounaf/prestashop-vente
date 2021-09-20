<?php
/* Smarty version 3.1.34-dev-7, created on 2021-08-26 11:09:00
  from 'D:\xampp\htdocs\prestashop_1.7.7.3\admin839ksqtpx\themes\new-theme\template\components\layout\employee_dropdown.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_61274c1c88c518_32094774',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '12ac6a5684903c8e9cf0f13b4097a9cce1d2cd29' => 
    array (
      0 => 'D:\\xampp\\htdocs\\prestashop_1.7.7.3\\admin839ksqtpx\\themes\\new-theme\\template\\components\\layout\\employee_dropdown.tpl',
      1 => 1616429400,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61274c1c88c518_32094774 (Smarty_Internal_Template $_smarty_tpl) {
if (isset($_smarty_tpl->tpl_vars['employee']->value)) {?>
<div class="dropdown employee-dropdown">
  <div class="rounded-circle person" data-toggle="dropdown">
    <i class="material-icons">account_circle</i>
  </div>
  <div class="dropdown-menu dropdown-menu-right">
    <div class="employee-wrapper-avatar">
      
      <span class="employee_avatar"><img class="avatar rounded-circle" src="<?php echo $_smarty_tpl->tpl_vars['employee']->value->getImage();?>
" /></span>
      <span class="employee_profile"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Welcome back %name%','sprintf'=>array('%name%'=>$_smarty_tpl->tpl_vars['employee']->value->firstname),'d'=>'Admin.Navigation.Header'),$_smarty_tpl ) );?>
</span>
      <a class="dropdown-item employee-link profile-link" href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminEmployees',true,array(),array('id_employee'=>intval($_smarty_tpl->tpl_vars['employee']->value->id),'updateemployee'=>1)),'html','UTF-8' ));?>
">
      <i class="material-icons">settings</i>
      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your profile','d'=>'Admin.Navigation.Header'),$_smarty_tpl ) );?>

    </a>
    </div>
    
    <p class="divider"></p>
    <a class="dropdown-item" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'https://www.prestashop.com/en/resources/documentations?utm_source=back-office&utm_medium=profile&utm_campaign=resources-en&utm_content=download17','d'=>'Admin.Navigation.Header'),$_smarty_tpl ) );?>
" target="_blank"><i class="material-icons">book</i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Resources','d'=>'Admin.Navigation.Header'),$_smarty_tpl ) );?>
</a>
    <a class="dropdown-item" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'https://www.prestashop.com/en/training?utm_source=back-office&utm_medium=profile&utm_campaign=training-en&utm_content=download17','d'=>'Admin.Navigation.Header'),$_smarty_tpl ) );?>
" target="_blank"><i class="material-icons">school</i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Training','d'=>'Admin.Navigation.Header'),$_smarty_tpl ) );?>
</a>
    <a class="dropdown-item" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'https://www.prestashop.com/en/experts?utm_source=back-office&utm_medium=profile&utm_campaign=expert-en&utm_content=download17','d'=>'Admin.Navigation.Header'),$_smarty_tpl ) );?>
" target="_blank"><i class="material-icons">person_pin_circle</i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Find an Expert','d'=>'Admin.Navigation.Header'),$_smarty_tpl ) );?>
</a>
    <a class="dropdown-item" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'https://addons.prestashop.com?utm_source=back-office&utm_medium=profile&utm_campaign=addons-en&utm_content=download17','d'=>'Admin.Navigation.Header'),$_smarty_tpl ) );?>
" target="_blank"><i class="material-icons">extension</i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'PrestaShop Marketplace','d'=>'Admin.Navigation.Header'),$_smarty_tpl ) );?>
</a>
    <a class="dropdown-item" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'https://www.prestashop.com/en/contact?utm_source=back-office&utm_medium=profile&utm_campaign=help-center-en&utm_content=download17','d'=>'Admin.Navigation.Header'),$_smarty_tpl ) );?>
" target="_blank"><i class="material-icons">help</i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Help Center','d'=>'Admin.Navigation.Header'),$_smarty_tpl ) );?>
</a>
    <p class="divider"></p>
    <a class="dropdown-item employee-link text-center" id="header_logout" href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['logout_link']->value,'html','UTF-8' ));?>
">
      <i class="material-icons d-lg-none">power_settings_new</i>
      <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sign out','d'=>'Admin.Navigation.Header'),$_smarty_tpl ) );?>
</span>
    </a>
  </div>
</div>
<?php }
}
}
