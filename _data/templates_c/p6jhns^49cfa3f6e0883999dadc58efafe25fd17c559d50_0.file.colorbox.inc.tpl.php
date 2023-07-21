<?php
/* Smarty version 4.1.0, created on 2023-07-21 11:40:20
  from 'C:\xampp\htdocs\admin\themes\default\template\include\colorbox.inc.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_64ba52844724e7_71076915',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '49cfa3f6e0883999dadc58efafe25fd17c559d50' => 
    array (
      0 => 'C:\\xampp\\htdocs\\admin\\themes\\default\\template\\include\\colorbox.inc.tpl',
      1 => 1688740922,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64ba52844724e7_71076915 (Smarty_Internal_Template $_smarty_tpl) {
if (empty($_smarty_tpl->tpl_vars['load_mode']->value)) {
$_smarty_tpl->_assignInScope('load_mode', 'footer');
}
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_script'][0], array( array('id'=>'jquery.colorbox','load'=>$_smarty_tpl->tpl_vars['load_mode']->value,'require'=>'jquery','path'=>'themes/default/js/plugins/jquery.colorbox.min.js'),$_smarty_tpl ) );?>

<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_css'][0], array( array('id'=>'jquery.colorbox','path'=>"themes/default/js/plugins/colorbox/style2/colorbox.css"),$_smarty_tpl ) );?>

<?php }
}
