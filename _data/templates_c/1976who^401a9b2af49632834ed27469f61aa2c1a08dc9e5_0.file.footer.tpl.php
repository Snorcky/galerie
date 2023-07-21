<?php
/* Smarty version 4.1.0, created on 2023-07-21 11:39:45
  from 'C:\xampp\htdocs\themes\default\template\mail\text\html\footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_64ba52613e4519_56995054',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '401a9b2af49632834ed27469f61aa2c1a08dc9e5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\themes\\default\\template\\mail\\text\\html\\footer.tpl',
      1 => 1688740922,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64ba52613e4519_56995054 (Smarty_Internal_Template $_smarty_tpl) {
?>                      </td></tr>

          <tr><td id="footer">
                  
            <?php echo l10n('Sent by');?>
 <a href="<?php echo $_smarty_tpl->tpl_vars['GALLERY_URL']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['GALLERY_TITLE']->value;?>
</a>
            - <?php echo l10n('Powered by');?>
 <a href="<?php echo $_smarty_tpl->tpl_vars['PHPWG_URL']->value;?>
" class="Piwigo">Piwigo</a>
            <?php if (!empty($_smarty_tpl->tpl_vars['VERSION']->value)) {
echo $_smarty_tpl->tpl_vars['VERSION']->value;
}?>
            
            - <?php echo l10n('Contact');?>

            <a href="mailto:<?php echo $_smarty_tpl->tpl_vars['CONTACT_MAIL']->value;?>
?subject=<?php echo rawurlencode(l10n('A comment on your site'));?>
"><?php echo l10n('Webmaster');?>
</a>
                      </td></tr>
        </table>

      </td></tr>
    </table>
  </body>
</html><?php }
}
