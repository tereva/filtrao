<?php /* Smarty version Smarty-3.1.19, created on 2015-03-03 00:30:39
         compiled from "/home/tev/WEB/filtre-a-eau/prestashop/admin7067/themes/default/template/helpers/tree/tree_header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9263052454f4f29fdcb034-26771620%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '60089583afa5d75e02b9829bc7f5a2d783a78f17' => 
    array (
      0 => '/home/tev/WEB/filtre-a-eau/prestashop/admin7067/themes/default/template/helpers/tree/tree_header.tpl',
      1 => 1406810456,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9263052454f4f29fdcb034-26771620',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'toolbar' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54f4f29fdfbe30_61417052',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54f4f29fdfbe30_61417052')) {function content_54f4f29fdfbe30_61417052($_smarty_tpl) {?>
<div class="tree-panel-heading-controls clearfix">
	<?php if (isset($_smarty_tpl->tpl_vars['title']->value)) {?><i class="icon-tag"></i>&nbsp;<?php echo smartyTranslate(array('s'=>$_smarty_tpl->tpl_vars['title']->value),$_smarty_tpl);?>
<?php }?>
	<?php if (isset($_smarty_tpl->tpl_vars['toolbar']->value)) {?><?php echo $_smarty_tpl->tpl_vars['toolbar']->value;?>
<?php }?>
</div><?php }} ?>
