<?php /* Smarty version Smarty-3.1.19, created on 2016-02-04 10:56:36
         compiled from "/Applications/MAMP/htdocs/prestashop/themes/leo_fresh_store/modules/leomenusidebar/views/templates/hook/megamenu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:145507999656b3124497ddf1-12100787%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '42eaff7dfdcc07f33d89df2357a544821413acc6' => 
    array (
      0 => '/Applications/MAMP/htdocs/prestashop/themes/leo_fresh_store/modules/leomenusidebar/views/templates/hook/megamenu.tpl',
      1 => 1451895752,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '145507999656b3124497ddf1-12100787',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'boostrapmenu' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56b3124498baf9_93504210',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56b3124498baf9_93504210')) {function content_56b3124498baf9_93504210($_smarty_tpl) {?><div id="leo-verticalmenu" class="leo-verticalmenu highlighted block">
	<h4 class="title_block"><?php echo smartyTranslate(array('s'=>'Categories','mod'=>'leomenusidebar'),$_smarty_tpl);?>
</h4>
    <div class="box-content block_content">
		<div id="verticalmenu" class="verticalmenu" role="navigation">
				<?php echo $_smarty_tpl->tpl_vars['boostrapmenu']->value;?>

		</div>
    </div>
</div>
<script type="text/javascript">
        $(document).ready(function() {
				$('#verticalmenu .dropdown-toggle').removeAttr("disabled");
				$(".dropdown-toggle").click(function() {
					if($(window).width() <= 767){
						if($(this).parent("li").find("div:first").hasClass("level2"))
							return false;
						else
							return true;
					}		
			});
		});
		
</script>
<?php }} ?>
