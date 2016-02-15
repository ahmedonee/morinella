<?php /* Smarty version Smarty-3.1.19, created on 2016-02-04 09:51:22
         compiled from "/Applications/MAMP/htdocs/prestashop/admin830ycsrnw/themes/default/template/helpers/modules_list/modal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:77630131256b302fa0c23e2-27848774%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a125648e41f91ea73c6b2b8fc148336443716cf4' => 
    array (
      0 => '/Applications/MAMP/htdocs/prestashop/admin830ycsrnw/themes/default/template/helpers/modules_list/modal.tpl',
      1 => 1448554198,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '77630131256b302fa0c23e2-27848774',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56b302fa0c9ba8_79716084',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56b302fa0c9ba8_79716084')) {function content_56b302fa0c9ba8_79716084($_smarty_tpl) {?><div class="modal fade" id="modules_list_container">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h3 class="modal-title"><?php echo smartyTranslate(array('s'=>'Recommended Modules and Services'),$_smarty_tpl);?>
</h3>
			</div>
			<div class="modal-body">
				<div id="modules_list_container_tab_modal" style="display:none;"></div>
				<div id="modules_list_loader"><i class="icon-refresh icon-spin"></i></div>
			</div>
		</div>
	</div>
</div>
<?php }} ?>
