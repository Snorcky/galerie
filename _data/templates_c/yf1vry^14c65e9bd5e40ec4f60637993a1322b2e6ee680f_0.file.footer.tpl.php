<?php
/* Smarty version 4.1.0, created on 2023-07-21 11:40:02
  from 'C:\xampp\htdocs\themes\modus\template\footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_64ba52720970f4_77973583',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '14c65e9bd5e40ec4f60637993a1322b2e6ee680f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\themes\\modus\\template\\footer.tpl',
      1 => 1688740933,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64ba52720970f4_77973583 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="copyright">
<?php if ((isset($_smarty_tpl->tpl_vars['debug']->value['TIME']))) {
if (!is_admin()) {?><!--<?php echo $_smarty_tpl->tpl_vars['debug']->value['TIME'];?>
 (<?php echo $_smarty_tpl->tpl_vars['debug']->value['NB_QUERIES'];?>
 <?php echo $_smarty_tpl->tpl_vars['debug']->value['SQL_TIME'];?>
)--><?php } else {
echo l10n('Page generated in');?>
 <?php echo $_smarty_tpl->tpl_vars['debug']->value['TIME'];?>
 (<?php echo $_smarty_tpl->tpl_vars['debug']->value['NB_QUERIES'];?>
 <?php echo l10n('SQL queries in');?>
 <?php echo $_smarty_tpl->tpl_vars['debug']->value['SQL_TIME'];?>
) - <?php }
}?>
	<?php echo l10n('Powered by');?>
	<a href="<?php echo $_smarty_tpl->tpl_vars['PHPWG_URL']->value;?>
">Piwigo</a>
	<?php echo $_smarty_tpl->tpl_vars['VERSION']->value;?>

<?php if ((isset($_smarty_tpl->tpl_vars['CONTACT_MAIL']->value))) {?>
	- <a href="mailto:<?php echo $_smarty_tpl->tpl_vars['CONTACT_MAIL']->value;?>
?subject=<?php echo rawurlencode(l10n('A comment on your site'));?>
"><?php echo l10n('Contact webmaster');?>
</a>
<?php }
if ((isset($_smarty_tpl->tpl_vars['TOGGLE_MOBILE_THEME_URL']->value))) {?>
	- <?php echo l10n('View in');?>
 : <a href="<?php echo $_smarty_tpl->tpl_vars['TOGGLE_MOBILE_THEME_URL']->value;?>
"><?php echo l10n('Mobile');?>
</a> | <b><?php echo l10n('Desktop');?>
</b>
<?php }
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['get_combined_scripts'][0], array( array('load'=>'footer'),$_smarty_tpl ) );?>

<?php if ((isset($_smarty_tpl->tpl_vars['footer_elements']->value))) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['footer_elements']->value, 'v');
$_smarty_tpl->tpl_vars['v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->do_else = false;
echo $_smarty_tpl->tpl_vars['v']->value;?>

<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}?>
</div><?php if ((isset($_smarty_tpl->tpl_vars['debug']->value['QUERIES_LIST']))) {?>
<div id="debug">
<?php echo $_smarty_tpl->tpl_vars['debug']->value['QUERIES_LIST'];?>

</div>
<?php }?>
</body>
</html><?php }
}
