<?php /* Smarty version Smarty-3.1.19, created on 2015-03-02 11:56:40
         compiled from "/home/tev/WEB/filtre-a-eau/prestashop/admin7067/themes/default/template/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:188040912254f441e8677367-74273067%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '230212c22c06fef19bfb0d03dca7d09ddb029aaf' => 
    array (
      0 => '/home/tev/WEB/filtre-a-eau/prestashop/admin7067/themes/default/template/content.tpl',
      1 => 1406810456,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '188040912254f441e8677367-74273067',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54f441e86b1cf2_35950584',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54f441e86b1cf2_35950584')) {function content_54f441e86b1cf2_35950584($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div><?php }} ?>
