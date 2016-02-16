<?php /* Smarty version Smarty-3.1.19, created on 2016-02-16 09:57:17
         compiled from "/Applications/MAMP/htdocs/prestashop/themes/leo_fresh_store/prices-drop.tpl" */ ?>
<?php /*%%SmartyHeaderCode:186509374056c2d65dbe4fe6-94388243%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a90ba3266b2f31135c5b292ac17c4f8e88ea57dc' => 
    array (
      0 => '/Applications/MAMP/htdocs/prestashop/themes/leo_fresh_store/prices-drop.tpl',
      1 => 1451895732,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '186509374056c2d65dbe4fe6-94388243',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'products' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56c2d65dc75b20_40689546',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56c2d65dc75b20_40689546')) {function content_56c2d65dc75b20_40689546($_smarty_tpl) {?>

<?php $_smarty_tpl->_capture_stack[0][] = array('path', null, null); ob_start(); ?><?php echo smartyTranslate(array('s'=>'Price drop'),$_smarty_tpl);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<h1 class="page-heading product-listing"><?php echo smartyTranslate(array('s'=>'Price drop'),$_smarty_tpl);?>
</h1>

<?php if ($_smarty_tpl->tpl_vars['products']->value) {?>
	<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./sub/product/product-list-form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	<?php } else { ?>
	<p class="alert alert-warning"><?php echo smartyTranslate(array('s'=>'No price drop'),$_smarty_tpl);?>
</p>
<?php }?>
<?php }} ?>
