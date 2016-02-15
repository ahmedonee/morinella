<?php /* Smarty version Smarty-3.1.19, created on 2016-02-04 10:56:36
         compiled from "/Applications/MAMP/htdocs/prestashop/themes/leo_fresh_store/modules/leomanagewidgets/views/widgets/widget_html.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8785299956b31244be2794-25862966%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7d4c43d5636c74955636a91284f5cb342e4f1232' => 
    array (
      0 => '/Applications/MAMP/htdocs/prestashop/themes/leo_fresh_store/modules/leomanagewidgets/views/widgets/widget_html.tpl',
      1 => 1451895752,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8785299956b31244be2794-25862966',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'html' => 0,
    'widget_heading' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56b31244c024e0_24085698',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56b31244c024e0_24085698')) {function content_56b31244c024e0_24085698($_smarty_tpl) {?>
 
 <?php if (isset($_smarty_tpl->tpl_vars['html']->value)) {?>
<div class="widget-html block">
	<?php if (isset($_smarty_tpl->tpl_vars['widget_heading']->value)&&!empty($_smarty_tpl->tpl_vars['widget_heading']->value)) {?>
	<h4 class="title_block">
		<?php echo $_smarty_tpl->tpl_vars['widget_heading']->value;?>

	</h4>
	<?php }?>
	<div class="block_content">
		<?php echo $_smarty_tpl->tpl_vars['html']->value;?>

	</div>
</div>
<?php }?><?php }} ?>
