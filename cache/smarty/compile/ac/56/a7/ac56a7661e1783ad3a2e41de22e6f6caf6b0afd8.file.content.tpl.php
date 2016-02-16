<?php /* Smarty version Smarty-3.1.19, created on 2016-02-16 09:55:22
         compiled from "/Applications/MAMP/htdocs/prestashop/admin830ycsrnw/themes/default/template/controllers/cms_content/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17346927956c2d5ea46d879-16568464%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ac56a7661e1783ad3a2e41de22e6f6caf6b0afd8' => 
    array (
      0 => '/Applications/MAMP/htdocs/prestashop/admin830ycsrnw/themes/default/template/controllers/cms_content/content.tpl',
      1 => 1448554198,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17346927956c2d5ea46d879-16568464',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cms_breadcrumb' => 0,
    'content' => 0,
    'url_prev' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56c2d5ea4e7774_91777106',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56c2d5ea4e7774_91777106')) {function content_56c2d5ea4e7774_91777106($_smarty_tpl) {?>

<?php if (isset($_smarty_tpl->tpl_vars['cms_breadcrumb']->value)) {?>
	<ul class="breadcrumb cat_bar">
		<?php echo $_smarty_tpl->tpl_vars['cms_breadcrumb']->value;?>

	</ul>
<?php }?>

<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php if (isset($_smarty_tpl->tpl_vars['url_prev']->value)) {?>
	<script type="text/javascript">
	$(document).ready(function () {
		var re = /url_preview=(.*)/;
		var url = re.exec(window.location.href);
		if (typeof url !== 'undefined' && url !== null && typeof url[1] !== 'undefined' && url[1] === "1")
			window.open("<?php echo $_smarty_tpl->tpl_vars['url_prev']->value;?>
", "_blank");
	});
	</script>
<?php }?>
<?php }} ?>
