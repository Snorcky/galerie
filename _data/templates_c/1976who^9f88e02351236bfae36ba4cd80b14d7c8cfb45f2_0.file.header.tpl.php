<?php
/* Smarty version 4.1.0, created on 2023-07-21 11:39:45
  from 'C:\xampp\htdocs\themes\default\template\mail\text\html\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_64ba52611f9bc6_60438253',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9f88e02351236bfae36ba4cd80b14d7c8cfb45f2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\themes\\default\\template\\mail\\text\\html\\header.tpl',
      1 => 1688740922,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64ba52611f9bc6_60438253 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="<?php echo $_smarty_tpl->tpl_vars['lang_info']->value['code'];?>
" dir="<?php echo $_smarty_tpl->tpl_vars['lang_info']->value['direction'];?>
">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=<?php echo $_smarty_tpl->tpl_vars['CONTENT_ENCODING']->value;?>
"/>
    <title>Piwigo Mail</title>

    <style type="text/css">
    <?php if ((isset($_smarty_tpl->tpl_vars['GLOBAL_MAIL_CSS']->value))) {
echo $_smarty_tpl->tpl_vars['GLOBAL_MAIL_CSS']->value;
}?>
    <?php if ((isset($_smarty_tpl->tpl_vars['MAIL_CSS']->value))) {
echo $_smarty_tpl->tpl_vars['MAIL_CSS']->value;
}?>
    </style>
  </head>

  <body>
    <table id="bodyTable" cellspacing="0" cellpadding="10" border="0">
      <tr><td align="center" valign="top">

        <table id="contentTable" cellspacing="0" cellpadding="0" border="0">
          <tr><td id="header">
                        <div id="title"><?php echo $_smarty_tpl->tpl_vars['MAIL_TITLE']->value;?>
</div>
            <?php if (!empty($_smarty_tpl->tpl_vars['MAIL_SUBTITLE']->value)) {?><div id="subtitle"><?php echo $_smarty_tpl->tpl_vars['MAIL_SUBTITLE']->value;?>
</div><?php }?>
                      </td></tr>

          <tr><td id="content">
            <div id="topSpacer"></div>
            <?php }
}
