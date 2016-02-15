<?php /* Smarty version Smarty-3.1.19, created on 2016-02-04 10:58:38
         compiled from "/Applications/MAMP/htdocs/prestashop/admin830ycsrnw/themes/default/template/helpers/list/list_action_view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:133283291556b312be6fe4e6-28465556%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '07706f45f049b05d8412a6caa680951c0211066e' => 
    array (
      0 => '/Applications/MAMP/htdocs/prestashop/admin830ycsrnw/themes/default/template/helpers/list/list_action_view.tpl',
      1 => 1448554198,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '133283291556b312be6fe4e6-28465556',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56b312be72c4f4_14196623',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56b312be72c4f4_14196623')) {function content_56b312be72c4f4_14196623($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['href']->value, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>
" >
	<i class="icon-search-plus"></i> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>

</a><?php }} ?>
