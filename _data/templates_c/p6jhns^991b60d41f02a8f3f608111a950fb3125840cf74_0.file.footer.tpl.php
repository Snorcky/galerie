<?php
/* Smarty version 4.1.0, created on 2023-07-21 11:40:21
  from 'C:\xampp\htdocs\admin\themes\default\template\footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_64ba52854b3678_18225480',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '991b60d41f02a8f3f608111a950fb3125840cf74' => 
    array (
      0 => 'C:\\xampp\\htdocs\\admin\\themes\\default\\template\\footer.tpl',
      1 => 1688740922,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64ba52854b3678_18225480 (Smarty_Internal_Template $_smarty_tpl) {
?></div>
<?php if ((isset($_smarty_tpl->tpl_vars['footer_elements']->value))) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['footer_elements']->value, 'elt');
$_smarty_tpl->tpl_vars['elt']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['elt']->value) {
$_smarty_tpl->tpl_vars['elt']->do_else = false;
?>
  <?php echo $_smarty_tpl->tpl_vars['elt']->value;?>

<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}?>

<?php if ((isset($_smarty_tpl->tpl_vars['debug']->value['QUERIES_LIST']))) {?>
<div id="debug">
  <?php echo $_smarty_tpl->tpl_vars['debug']->value['QUERIES_LIST'];?>

</div>
<?php }?>

<div id="footer">
  <a class="externalLink tiptip piwigo-logo" href="<?php echo $_smarty_tpl->tpl_vars['PHPWG_URL']->value;?>
" title="<?php echo l10n('Visit Piwigo project website');?>
"><img src="admin/themes/default/images/piwigo-grey.svg"></a>
  <div id="pageInfos">
<?php if ((isset($_smarty_tpl->tpl_vars['debug']->value['TIME']))) {?>
    <?php echo l10n('Page generated in');?>
 <?php echo $_smarty_tpl->tpl_vars['debug']->value['TIME'];?>
 (<?php echo $_smarty_tpl->tpl_vars['debug']->value['NB_QUERIES'];?>
 <?php echo l10n('SQL queries in');?>
 <?php echo $_smarty_tpl->tpl_vars['debug']->value['SQL_TIME'];?>
) -
<?php }?>
    <?php echo l10n('Contact');?>

    <a href="mailto:<?php echo $_smarty_tpl->tpl_vars['CONTACT_MAIL']->value;?>
?subject=<?php echo rawurlencode(l10n('A comment on your site'));?>
"><?php echo l10n('Webmaster');?>
</a>
  </div>
</div></div>

<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_script'][0], array( array('id'=>'jquery.tipTip','load'=>'footer','path'=>'themes/default/js/plugins/jquery.tipTip.minified.js'),$_smarty_tpl ) );?>

<?php $_block_plugin5 = isset($_smarty_tpl->smarty->registered_plugins['block']['footer_script'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['footer_script'][0][0] : null;
if (!is_callable(array($_block_plugin5, 'block_footer_script'))) {
throw new SmartyException('block tag \'footer_script\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('footer_script', array('require'=>'jquery.tipTip'));
$_block_repeat=true;
echo $_block_plugin5->block_footer_script(array('require'=>'jquery.tipTip'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
jQuery('.tiptip').tipTip({
  delay: 0,
  fadeIn: 200,
  fadeOut: 200
});

jQuery('a.externalLink').click(function() {
  window.open(jQuery(this).attr("href"));
  return false;
});
<?php $_block_repeat=false;
echo $_block_plugin5->block_footer_script(array('require'=>'jquery.tipTip'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

<!-- BEGIN get_combined -->
<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['get_combined_scripts'][0], array( array('load'=>'footer'),$_smarty_tpl ) );?>

<!-- END get_combined -->

</body>
</html><?php }
}
