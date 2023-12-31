<?php
/* Smarty version 4.1.0, created on 2023-07-21 11:40:01
  from 'C:\xampp\htdocs\themes\modus\css\picture.css.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_64ba527183eae6_89677225',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4b109c34b3fb3c93de9d607f57f93232b8eb05d1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\themes\\modus\\css\\picture.css.tpl',
      1 => 1688740933,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64ba527183eae6_89677225 (Smarty_Internal_Template $_smarty_tpl) {
?>#imageHeaderBar .imageNumber {
/* moved by prefilter from imageToolBar*/
	float: right;
}

#imageHeaderBar H2 {
	display: inline;
	text-align: center;
	padding: 0;
}

#imageToolBar {
	text-align: center;
	margin-bottom: 2px;
	padding-top: 2px;
	height: 28px;
<?php if (!empty($_smarty_tpl->tpl_vars['skin']->value['pictureBar']['backgroundColor'])) {?>
	background-color: <?php echo $_smarty_tpl->tpl_vars['skin']->value['pictureBar']['backgroundColor'];?>
;
<?php }?>
}

#imageToolBar .actionButtons {
	float: left;
}

#imageToolBar .navigationButtons   {
	float: right;
}

#imageToolBar .pwg-button {
	width:42px;
}

#theImage {
	text-align: center;
}

#imageInfos {
	position: relative; /*for IE7 positioning of "who can see this photo"*/
	min-height: 166px;
}

#linkPrev {
	float: left;
	margin: 0 10px 0 5px;
}

#linkNext {
	float: right;
	margin: 0 5px 0 10px;
	text-align: right;
}

DIV.thumbHover { /* first & last holders only*/
	width: <?php echo $_smarty_tpl->tpl_vars['SQUARE_WIDTH']->value;?>
px;
	height: <?php echo $_smarty_tpl->tpl_vars['SQUARE_WIDTH']->value;?>
px;
	border: 1px solid #ccc;
  padding: 0 5px;
	-moz-box-sizing: border-box;
	box-sizing: border-box;
}

.imageInfoTable UL { /*this is the album list*/
	margin: 0;
	padding: 0 0 0 1em;
	list-style-type: square;
}

.rateButton, .rateButtonSelected, .rateButtonStarFull, .rateButtonStarEmpty  {
	padding:0;
	border: 0 !important;
<?php if (!empty($_smarty_tpl->tpl_vars['skin']->value['controls']['boxShadow']) || !empty($_smarty_tpl->tpl_vars['skin']->value['buttons']['boxShadow']) || !empty($_smarty_tpl->tpl_vars['skin']->value['buttonsHover']['boxShadow'])) {?>
	box-shadow: none !important;
<?php }?>
}

.rateButton, .rateButtonStarFull, .rateButtonStarEmpty {
	cursor: pointer;
}

.rateButtonSelected {
	font-weight: bold;
	font-size: 120%;
}

.rateButtonStarFull {
	background: transparent url('../../default/icon/rating-stars.gif') no-repeat -16px center !important;
	width:16px;
}

.rateButtonStarEmpty {
	background: transparent url('../../default/icon/rating-stars.gif') no-repeat 0 center !important;
	width:16px;
}

.imageInfoTable {
	display:table;
	margin: auto;
	font-family: Tahoma,Verdana,Helvetica,Arial,sans-serif;
}

.imageInfo {
	display: table-row;
	line-height: 20px;
}

.imageInfo DT {
	display:table-cell;
	text-align:right;
	font-weight:bold;
	padding-right:0.5em;
}

.imageInfo DD {
	display:table-cell;
	text-align:left;
	font-weight:normal;
}





@media screen {
/*picture page wide screen*/
.wide #theImage {
	display: inline;
	float: left;
	width: 76.1%; /*min default picture derivative width*/
}

.wide #imageInfos {
	margin-left: 76.5%; /*default picture derivative width + ~ 5px; must have enough space for thumbs*/
	border-radius: 8px 0 0 8px;
<?php if (!empty($_smarty_tpl->tpl_vars['skin']->value['pictureWideInfoTable']['backgroundColor'])) {?>
	background-color: <?php echo $_smarty_tpl->tpl_vars['skin']->value['pictureWideInfoTable']['backgroundColor'];?>
;
<?php }?>
}

.wide .navThumbs {
	min-width: <?php echo 2*$_smarty_tpl->tpl_vars['SQUARE_WIDTH']->value+2;?>
px;
	width: 90%;
	max-width: <?php echo 2*$_smarty_tpl->tpl_vars['SQUARE_WIDTH']->value+40;?>
px;
	height: <?php echo $_smarty_tpl->tpl_vars['SQUARE_WIDTH']->value+4;?>
px;
	margin: auto;
	padding-top: 10px;
}

.wide .navThumb {
	width: <?php echo $_smarty_tpl->tpl_vars['SQUARE_WIDTH']->value;?>
px;
	height: <?php echo $_smarty_tpl->tpl_vars['SQUARE_WIDTH']->value;?>
px;
	margin: 0 !important;
	overflow: hidden;
	text-align: left;
}

.wide .thumbHover {
	width: <?php echo $_smarty_tpl->tpl_vars['SQUARE_WIDTH']->value;?>
px;
	height: <?php echo $_smarty_tpl->tpl_vars['SQUARE_WIDTH']->value;?>
px;
	position: absolute;
}


.wide .prevThumbHover:hover { background: transparent url(../images/img_prev.png) no-repeat center center;}
.wide .nextThumbHover:hover { background: transparent url(../images/img_next.png) no-repeat center center;}

.wide .imageInfoTable {
	display: block;
	padding: 0 5px 0 10px;
	margin: 0; /*need this for ie7 override in fix-ie7*/
}

.wide .imageInfo DT {
	display: block;
	text-align: left;
	padding: 0;
}

.wide .imageInfo DD {
	display: block;
	text-align: left;
	margin: 0 0 5px 10px;
}

<?php if (!empty($_smarty_tpl->tpl_vars['skin']->value['widePictureBar'])) {?>
	.wide #imageToolBar {
<?php if (!empty($_smarty_tpl->tpl_vars['skin']->value['widePictureBar']['backgroundColor'])) {?>
		background-color: <?php echo $_smarty_tpl->tpl_vars['skin']->value['widePictureBar']['backgroundColor'];?>
;
<?php }?>
	}
<?php }?>
}

@media screen and (max-width:800px),
	screen and (-webkit-min-device-pixel-ratio:1.3) {
	.navThumb IMG {
		max-width: <?php echo intval(($_smarty_tpl->tpl_vars['SQUARE_WIDTH']->value/2));?>
px;
		height: auto;
	}

	.wide .navThumbs {
		height: <?php echo 18+intval(($_smarty_tpl->tpl_vars['SQUARE_WIDTH']->value/2));?>
px;
		min-width: <?php echo $_smarty_tpl->tpl_vars['SQUARE_WIDTH']->value+6;?>
px;
		max-width: <?php echo $_smarty_tpl->tpl_vars['SQUARE_WIDTH']->value+40;?>
px;
	}

	.navThumb, .thumbHover { /* applies to wide&non wide including first & last*/
		width: <?php echo intval(($_smarty_tpl->tpl_vars['SQUARE_WIDTH']->value/2));?>
px !important;
		height: <?php echo intval(($_smarty_tpl->tpl_vars['SQUARE_WIDTH']->value/2));?>
px !important;
		line-height: 1; /*for first & last*/
	}

}




#imageActionsSwitch {
	display: none;
}
@media screen and (max-width:600px) {
	#imageActionsSwitch {
		display: block;
		text-align: left;
		float: left;
	}

	.actionButtonsWrapper {
		position: relative;
	}

	.actionButtonsWrapper .actionButtons {
		display: none;
		position: absolute;
		z-index: 1;
		min-width: 200px;
		background-color: <?php echo $_smarty_tpl->tpl_vars['skin']->value['dropdowns']['backgroundColor'];?>
;
		padding-top: 10px;
		box-shadow: 2px 2px 5px gray;
		opacity: 0.95;
	}

	#imageToolBar .actionButtons .pwg-button {
		display: block;
		width: auto;
		text-align: left;
		height: 32px;
		padding-left: 5px;
		padding-right: 5px;
	}

	#imageToolBar .actionButtons .pwg-button-text {
		display: inline;
		margin-left: 5px;
		text-transform: capitalize;
	}

	.imageInfoTable {
		padding-top: 5px;
		clear: both;
	}
}

<?php }
}
