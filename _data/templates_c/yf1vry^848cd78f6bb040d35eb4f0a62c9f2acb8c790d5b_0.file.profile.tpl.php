<?php
/* Smarty version 4.1.0, created on 2023-07-21 11:40:12
  from 'C:\xampp\htdocs\themes\default\template\profile.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_64ba527c951508_54715552',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '848cd78f6bb040d35eb4f0a62c9f2acb8c790d5b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\themes\\default\\template\\profile.tpl',
      1 => 1688740922,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:infos_errors.tpl' => 1,
  ),
),false)) {
function content_64ba527c951508_54715552 (Smarty_Internal_Template $_smarty_tpl) {
if ((isset($_smarty_tpl->tpl_vars['MENUBAR']->value))) {
echo $_smarty_tpl->tpl_vars['MENUBAR']->value;
}?>
<div id="content" class="content<?php if ((isset($_smarty_tpl->tpl_vars['MENUBAR']->value))) {?> contentWithMenu<?php }?>">

<div class="titrePage">
	<ul class="categoryActions">
	</ul>
	<h2><a href="<?php echo $_smarty_tpl->tpl_vars['U_HOME']->value;?>
"><?php echo l10n('Home');?>
</a><?php echo $_smarty_tpl->tpl_vars['LEVEL_SEPARATOR']->value;
echo l10n('Profile');?>
</h2>
</div>

<?php $_smarty_tpl->_subTemplateRender('file:infos_errors.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php echo $_smarty_tpl->tpl_vars['PROFILE_CONTENT']->value;?>

</div> <!-- content -->
<?php }
}
