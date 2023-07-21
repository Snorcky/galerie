<?php
/* Smarty version 4.1.0, created on 2023-07-21 11:39:45
  from 'C:\xampp\htdocs\themes\default\template\mail\text\plain\footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_64ba5261598a65_41152241',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a896e45513ed6a7f75d42cb8287745e42d038cab' => 
    array (
      0 => 'C:\\xampp\\htdocs\\themes\\default\\template\\mail\\text\\plain\\footer.tpl',
      1 => 1688740922,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64ba5261598a65_41152241 (Smarty_Internal_Template $_smarty_tpl) {
?>


----
<?php echo l10n('Sent by');?>
 "<?php echo $_smarty_tpl->tpl_vars['GALLERY_TITLE']->value;?>
" <?php echo $_smarty_tpl->tpl_vars['GALLERY_URL']->value;?>

<?php echo l10n('Powered by');?>
 "Piwigo<?php if (!empty($_smarty_tpl->tpl_vars['VERSION']->value)) {?> <?php echo $_smarty_tpl->tpl_vars['VERSION']->value;
}?>" <?php echo $_smarty_tpl->tpl_vars['PHPWG_URL']->value;?>

<?php echo l10n('Contact');?>
: <?php echo $_smarty_tpl->tpl_vars['CONTACT_MAIL']->value;
}
}
