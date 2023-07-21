<?php
/* Smarty version 4.1.0, created on 2023-07-21 12:28:25
  from 'C:\xampp\htdocs\themes\modus\admin\modus_admin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_64ba5dc94b9604_52751041',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2740783f000d889e5ea926978d1971652c5a4219' => 
    array (
      0 => 'C:\\xampp\\htdocs\\themes\\modus\\admin\\modus_admin.tpl',
      1 => 1688740933,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:include/colorbox.inc.tpl' => 1,
  ),
),false)) {
function content_64ba5dc94b9604_52751041 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\include\\smarty\\libs\\plugins\\function.html_options.php','function'=>'smarty_function_html_options',),));
$_smarty_tpl->_subTemplateRender('file:include/colorbox.inc.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_script'][0], array( array('id'=>'common','load'=>'footer','path'=>'admin/themes/default/js/common.js'),$_smarty_tpl ) );?>

<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_script'][0], array( array('id'=>'jquery.ui.slider','require'=>'jquery.ui','load'=>'footer','path'=>'themes/default/js/ui/minified/jquery.ui.slider.min.js'),$_smarty_tpl ) );?>

<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_css'][0], array( array('path'=>"themes/default/js/ui/theme/jquery.ui.slider.css"),$_smarty_tpl ) );?>


<?php $_block_plugin1 = isset($_smarty_tpl->smarty->registered_plugins['block']['html_style'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['html_style'][0][0] : null;
if (!is_callable(array($_block_plugin1, 'block_html_style'))) {
throw new SmartyException('block tag \'html_style\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('html_style', array());
$_block_repeat=true;
echo $_block_plugin1->block_html_style(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
.graphicalCheckbox {
  font-size:16px;
  line-height:16px;
}

.graphicalCheckbox + input {
  display:none;
}

#album_thumb_size {
  width:400px;
  display:inline-block;
  margin-right:10px;
}

#album_square_thumbs {
  margin-top:5px;
}

.themeShot {
  margin:10px 0;
}
.themeShot img {
  width: 280px;
  border: 1px solid white;
  margin: 0 15px;
}

.themeBox {
  padding:5px 5px 10px 5px;
  background-color: #e5e5e5;
  display: inline-table;
}

.themeBoxModusConfig {
  text-align: center;
  margin: 5px;
  border-radius: 5px;
  overflow: hidden;
  box-shadow: none;
  padding: 5px 5px 10px 5px;
  background-color: #e5e5e5;
  display: inline-table;
  position: relative;
  height: 192px;
}

.themeNameModusConfig {
  color: black;
  margin: 5px 0;
  position: relative;
}

.themeDefault {
  background-color: #333;
}
.themeDefault .themeNameModusConfig {
  color:#fff;
}
.themeDefault a {
  color:#aaa;
}

.fieldsetModusConfig {
  border-top: 2px solid #ddd;
}

.legendModusConfig {
  padding: 0 10px;
}

<?php $_block_repeat=false;
echo $_block_plugin1->block_html_style(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>


<?php $_block_plugin2 = isset($_smarty_tpl->smarty->registered_plugins['block']['footer_script'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['footer_script'][0][0] : null;
if (!is_callable(array($_block_plugin2, 'block_footer_script'))) {
throw new SmartyException('block tag \'footer_script\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('footer_script', array());
$_block_repeat=true;
echo $_block_plugin2->block_footer_script(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
jQuery(document).ready(function() {
  jQuery('#modus-config input[type=checkbox]').change(function() {
    jQuery(this).prev().toggleClass('icon-check icon-check-empty');
  });

  jQuery('input[name=use_album_square_thumbs]').change(function() {
    jQuery('#album_square_thumbs').toggle();
  });

  jQuery("#album_thumb_size").slider({
    range: "min",
    min: 200,
    max: 400,
    value: <?php echo $_smarty_tpl->tpl_vars['ALBUM_THUMB_SIZE']->value;?>
,
    slide: function( event, ui ) {
      jQuery("#album_thumb_size_info").html(sprintf("<?php echo l10n('%d pixels');?>
", ui.value));
    },
    stop: function( event, ui ) {
      jQuery("input[name=album_thumb_size]").val(ui.value);
    }
  });
  jQuery(".themeBoxes a").colorbox({ rel:'group1' });

  jQuery("input[name='skin']").change(function() {
    jQuery("input[name='skin']").parents(".themeBoxModusConfig").removeClass("themeDefault");
    jQuery(this).parents(".themeBoxModusConfig").addClass("themeDefault");
  });
});
<?php $_block_repeat=false;
echo $_block_plugin2->block_footer_script(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

<h2><?php echo l10n('Modus theme config');?>
</h2>

<form method="post" action="" id="modus-config">


<fieldset class="fieldsetModusConfig"><legend class="legendModusConfig"><?php echo l10n('Skin');?>
</legend>
  <div class="themeBoxes font-checkbox">
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['available_skins']->value, 'skin_name', false, 'skin_code');
$_smarty_tpl->tpl_vars['skin_name']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['skin_code']->value => $_smarty_tpl->tpl_vars['skin_name']->value) {
$_smarty_tpl->tpl_vars['skin_name']->do_else = false;
?>
    <div class="<?php if ($_smarty_tpl->tpl_vars['skin_code']->value == $_smarty_tpl->tpl_vars['SKIN']->value) {?>themeDefault<?php }?> themeBoxModusConfig">
      <label class="font-checkbox">
        <div class="themeNameModusConfig">
          <span class="icon-dot-circled"></span>
          <input type="radio" name="skin" value="<?php echo $_smarty_tpl->tpl_vars['skin_code']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['skin_code']->value == $_smarty_tpl->tpl_vars['SKIN']->value) {?>checked<?php }?>>
          <?php echo $_smarty_tpl->tpl_vars['skin_name']->value;?>

        </div>
        <div class="themeShot">
          <img src="<?php echo $_smarty_tpl->tpl_vars['ROOT_URL']->value;?>
themes/modus/skins/<?php echo $_smarty_tpl->tpl_vars['skin_code']->value;?>
-screenshot.jpg"/>
        </div>
      </label>
      <a href="<?php echo $_smarty_tpl->tpl_vars['ROOT_URL']->value;?>
themes/modus/skins/<?php echo $_smarty_tpl->tpl_vars['skin_code']->value;?>
-screenshot.jpg" class="icon-zoom-in" title="<?php echo $_smarty_tpl->tpl_vars['skin_name']->value;?>
"><?php echo l10n('Preview');?>
</a>
    </div>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  </div>
</fieldset>

<fieldset><legend><?php echo l10n('Album thumbnails');?>
</legend>
  <label>
    <span class="graphicalCheckbox icon-check<?php if (!$_smarty_tpl->tpl_vars['use_album_square_thumbs']->value) {?>-empty<?php }?>"></span>
    <input type="checkbox" name="use_album_square_thumbs"<?php if ($_smarty_tpl->tpl_vars['use_album_square_thumbs']->value) {?> checked="checked"<?php }?>>
    <b><?php echo l10n('Use square thumbs');?>
</b>
  </label>

  <div id="album_square_thumbs"<?php if (!$_smarty_tpl->tpl_vars['use_album_square_thumbs']->value) {?> style="display:none"<?php }?>>
    <div id="album_thumb_size"></div>
    <span id="album_thumb_size_info"><?php echo sprintf(l10n('%d pixels'),$_smarty_tpl->tpl_vars['ALBUM_THUMB_SIZE']->value);?>
</span>
    <input type="hidden" name="album_thumb_size" value="<?php echo $_smarty_tpl->tpl_vars['ALBUM_THUMB_SIZE']->value;?>
">
  </div>

</fieldset>

<fieldset><legend><?php echo l10n('Default sizes');?>
</legend>

<label><?php echo l10n('Default size for thumbnails');?>

	<select name="index_photo_deriv">
		<?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['available_derivatives']->value,'selected'=>$_smarty_tpl->tpl_vars['INDEX_PHOTO_DERIV']->value),$_smarty_tpl);?>

	</select>
</label>
<br>
<label><?php echo l10n('Default size for thumbnails on high density display (retina)');?>

	<select name="index_photo_deriv_hdpi">
		<?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['available_derivatives']->value,'selected'=>$_smarty_tpl->tpl_vars['INDEX_PHOTO_DERIV_HDPI']->value),$_smarty_tpl);?>

	</select>
</label>
</fieldset>

<fieldset><legend><?php echo l10n('Page banner');?>
</legend>
  <label>
    <span class="graphicalCheckbox icon-check<?php if (!$_smarty_tpl->tpl_vars['DISPLAY_PAGE_BANNER']->value) {?>-empty<?php }?>"></span>
    <input type="checkbox" name="display_page_banner"<?php if ($_smarty_tpl->tpl_vars['DISPLAY_PAGE_BANNER']->value) {?> checked="checked"<?php }?>>
    <b><?php echo l10n('Display page banner');?>
</b>
  </label>
</fieldset>



<p class="formButtons">
<input type="submit" value="<?php echo l10n('Save Settings');?>
" />
</p>
</form>

<?php }
}
