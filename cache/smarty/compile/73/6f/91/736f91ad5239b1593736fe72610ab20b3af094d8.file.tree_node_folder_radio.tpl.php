<?php /* Smarty version Smarty-3.1.19, created on 2016-02-04 10:58:50
         compiled from "/Applications/MAMP/htdocs/prestashop/admin830ycsrnw/themes/default/template/controllers/groups/helpers/tree/tree_node_folder_radio.tpl" */ ?>
<?php /*%%SmartyHeaderCode:95827453656b312cad954c8-05029872%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '736f91ad5239b1593736fe72610ab20b3af094d8' => 
    array (
      0 => '/Applications/MAMP/htdocs/prestashop/admin830ycsrnw/themes/default/template/controllers/groups/helpers/tree/tree_node_folder_radio.tpl',
      1 => 1448554198,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '95827453656b312cad954c8-05029872',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'node' => 0,
    'children' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56b312cadd7746_90753493',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56b312cadd7746_90753493')) {function content_56b312cadd7746_90753493($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include '/Applications/MAMP/htdocs/prestashop/tools/smarty/plugins/modifier.escape.php';
?>
<li class="tree-folder">
	<span class="tree-folder-name<?php if (isset($_smarty_tpl->tpl_vars['node']->value['disabled'])&&$_smarty_tpl->tpl_vars['node']->value['disabled']==true) {?> tree-folder-name-disable<?php }?>">
		<input type="radio" name="id_category" value="<?php echo $_smarty_tpl->tpl_vars['node']->value['id_category'];?>
"<?php if (isset($_smarty_tpl->tpl_vars['node']->value['disabled'])&&$_smarty_tpl->tpl_vars['node']->value['disabled']==true) {?> disabled="disabled"<?php }?> />
		<i class="icon-folder-close"></i>
		<label class="tree-toggler"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['node']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</label>
	</span>
	<ul class="tree">
		<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['children']->value, 'UTF-8');?>

	</ul>
</li><?php }} ?>
