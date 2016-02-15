<?php /* Smarty version Smarty-3.1.19, created on 2016-02-04 10:56:55
         compiled from "/Applications/MAMP/htdocs/prestashop/themes/leo_fresh_store/modules/productcomments//tab.tpl" */ ?>
<?php /*%%SmartyHeaderCode:59203709356b312577eee82-69369458%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '13fa7082ba5c305444277041ae7409b03720b67a' => 
    array (
      0 => '/Applications/MAMP/htdocs/prestashop/themes/leo_fresh_store/modules/productcomments//tab.tpl',
      1 => 1451895752,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '59203709356b312577eee82-69369458',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'USE_PTABS' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56b3125780a374_33447546',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56b3125780a374_33447546')) {function content_56b3125780a374_33447546($_smarty_tpl) {?>
<?php if (isset($_smarty_tpl->tpl_vars['USE_PTABS']->value)&&$_smarty_tpl->tpl_vars['USE_PTABS']->value) {?>
    <li><a id="link_idTab5" href="#idTab5" data-toggle="tab"><?php echo smartyTranslate(array('s'=>'Reviews','mod'=>'productcomments'),$_smarty_tpl);?>
</a></li>
<?php } else { ?>
    <h3 id="#idTab5" class="idTabHrefShort page-subheading"><?php echo smartyTranslate(array('s'=>'Reviews','mod'=>'productcomments'),$_smarty_tpl);?>
</h3>
<?php }?><?php }} ?>
