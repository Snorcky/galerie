<?php
/* Smarty version 4.1.0, created on 2023-07-21 11:39:45
  from 'C:\xampp\htdocs\themes\default\template\mail\text\plain\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_64ba5261509ef5_64250540',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e7c125026f18638826790c5b3b5c901b28fc56c5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\themes\\default\\template\\mail\\text\\plain\\header.tpl',
      1 => 1688740922,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64ba5261509ef5_64250540 (Smarty_Internal_Template $_smarty_tpl) {
echo $_smarty_tpl->tpl_vars['MAIL_TITLE']->value;?>

<?php if (!empty($_smarty_tpl->tpl_vars['MAIL_SUBTITLE']->value)) {
echo $_smarty_tpl->tpl_vars['MAIL_SUBTITLE']->value;?>

<?php }?>
----

<?php }
}
