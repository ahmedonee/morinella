<?php /* Smarty version Smarty-3.1.19, created on 2016-02-04 10:56:36
         compiled from "/Applications/MAMP/htdocs/prestashop/themes/leo_fresh_store/modules/leomanagewidgets/views/widgets/widget_carousel_owl.tpl" */ ?>
<?php /*%%SmartyHeaderCode:209947583556b31244d39699-37059999%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '26d5db94bef82c7ea0fc73da78e1f14bdf2982bd' => 
    array (
      0 => '/Applications/MAMP/htdocs/prestashop/themes/leo_fresh_store/modules/leomanagewidgets/views/widgets/widget_carousel_owl.tpl',
      1 => 1451895752,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '209947583556b31244d39699-37059999',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tab' => 0,
    'widget_heading' => 0,
    'products' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56b31244d703c5_45380020',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56b31244d703c5_45380020')) {function content_56b31244d703c5_45380020($_smarty_tpl) {?>

<?php $_smarty_tpl->tpl_vars['tabname'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['tab']->value), null, 0);?>
<div class="block products_block exclusive leomanagerwidgets">
	<?php if (isset($_smarty_tpl->tpl_vars['widget_heading']->value)&&!empty($_smarty_tpl->tpl_vars['widget_heading']->value)) {?>
    <h4 class="title_block">
		<?php echo $_smarty_tpl->tpl_vars['widget_heading']->value;?>

	</h4>
	<?php }?>
	<div class="block_content">	
		<div class="row">
		<?php if (!empty($_smarty_tpl->tpl_vars['products']->value)) {?>
                    <div id="<?php echo $_smarty_tpl->tpl_vars['tab']->value;?>
" class="owl-carousel owl-theme">
			<?php echo $_smarty_tpl->getSubTemplate ('./products_owl.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                    </div>
		<?php } else { ?>
   			<p class="alert alert-info"><?php echo smartyTranslate(array('s'=>'No products at this time.','mod'=>'leomanagewidgets'),$_smarty_tpl);?>
</p>	
		<?php }?>
		</div>
	</div>
</div>

<?php $_smarty_tpl->tpl_vars["call_owl_carousel"] = new Smarty_variable("#".((string)$_smarty_tpl->tpl_vars['tab']->value), null, 0);?>
<?php echo $_smarty_tpl->getSubTemplate ('./owl_carousel_config.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
