<?php /* Smarty version Smarty-3.1.19, created on 2016-02-04 10:56:37
         compiled from "/Applications/MAMP/htdocs/prestashop/themes/leo_fresh_store/modules/leomanagewidgets/views/widgets/owl_carousel_config.tpl" */ ?>
<?php /*%%SmartyHeaderCode:67261198656b312452e0fb8-35714032%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5ead9060865ee3daaa97f429d0131c557fb9da77' => 
    array (
      0 => '/Applications/MAMP/htdocs/prestashop/themes/leo_fresh_store/modules/leomanagewidgets/views/widgets/owl_carousel_config.tpl',
      1 => 1451895752,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '67261198656b312452e0fb8-35714032',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'call_owl_carousel' => 0,
    'owl_items' => 0,
    'owl_itemsDesktop' => 0,
    'owl_itemsDesktopSmall' => 0,
    'owl_itemsTablet' => 0,
    'owl_itemsTabletSmall' => 0,
    'owl_itemsMobile' => 0,
    'owl_itemsCustom' => 0,
    'owl_slideSpeed' => 0,
    'owl_paginationSpeed' => 0,
    'owl_rewindSpeed' => 0,
    'owl_autoPlay' => 0,
    'owl_stopOnHover' => 0,
    'owl_navigation' => 0,
    'owl_rewindNav' => 0,
    'owl_scrollPerPage' => 0,
    'owl_pagination' => 0,
    'owl_paginationNumbers' => 0,
    'owl_responsive' => 0,
    'owl_lazyLoad' => 0,
    'owl_lazyFollow' => 0,
    'owl_lazyEffect' => 0,
    'owl_autoHeight' => 0,
    'owl_mouseDrag' => 0,
    'owl_touchDrag' => 0,
    'owl_rtl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56b31245405bf7_66698591',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56b31245405bf7_66698591')) {function content_56b31245405bf7_66698591($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['call_owl_carousel']->value) {?>
<script>
$(document).ready(function() {
    $("<?php echo $_smarty_tpl->tpl_vars['call_owl_carousel']->value;?>
").owlCarousel({
            items : <?php if ($_smarty_tpl->tpl_vars['owl_items']->value) {?><?php echo intval($_smarty_tpl->tpl_vars['owl_items']->value);?>
<?php } else { ?>false<?php }?>,
            <?php if ($_smarty_tpl->tpl_vars['owl_itemsDesktop']->value) {?>itemsDesktop : [1199,<?php echo intval($_smarty_tpl->tpl_vars['owl_itemsDesktop']->value);?>
],<?php }?>
            <?php if ($_smarty_tpl->tpl_vars['owl_itemsDesktopSmall']->value) {?>itemsDesktopSmall : [979,<?php echo intval($_smarty_tpl->tpl_vars['owl_itemsDesktopSmall']->value);?>
],<?php }?>
            <?php if ($_smarty_tpl->tpl_vars['owl_itemsTablet']->value) {?>itemsTablet : [768,<?php echo intval($_smarty_tpl->tpl_vars['owl_itemsTablet']->value);?>
],<?php }?>
            <?php if ($_smarty_tpl->tpl_vars['owl_itemsTabletSmall']->value) {?>itemsTabletSmall : [640,<?php echo intval($_smarty_tpl->tpl_vars['owl_itemsTabletSmall']->value);?>
],<?php }?>
            <?php if ($_smarty_tpl->tpl_vars['owl_itemsMobile']->value) {?>itemsMobile : [479,<?php echo intval($_smarty_tpl->tpl_vars['owl_itemsMobile']->value);?>
],<?php }?>
            <?php if ($_smarty_tpl->tpl_vars['owl_itemsCustom']->value) {?>itemsCustom : <?php echo $_smarty_tpl->tpl_vars['owl_itemsCustom']->value;?>
,<?php }?>
            singleItem : false,         // true : show only 1 item
            itemsScaleUp : false,
            slideSpeed : <?php if ($_smarty_tpl->tpl_vars['owl_slideSpeed']->value) {?><?php echo intval($_smarty_tpl->tpl_vars['owl_slideSpeed']->value);?>
<?php } else { ?>200<?php }?>,  //  change speed when drag and drop a item
            paginationSpeed : <?php if ($_smarty_tpl->tpl_vars['owl_paginationSpeed']->value) {?><?php echo $_smarty_tpl->tpl_vars['owl_paginationSpeed']->value;?>
<?php } else { ?>800<?php }?>, // change speed when go next page
            rewindSpeed : <?php if ($_smarty_tpl->tpl_vars['owl_rewindSpeed']->value) {?><?php echo $_smarty_tpl->tpl_vars['owl_rewindSpeed']->value;?>
<?php } else { ?>1000<?php }?>, // change speed when carousel go back first page
            autoPlay : <?php if ($_smarty_tpl->tpl_vars['owl_autoPlay']->value) {?><?php echo intval($_smarty_tpl->tpl_vars['owl_autoPlay']->value);?>
<?php } else { ?>false<?php }?>,   // time to show each item
            stopOnHover : <?php if ($_smarty_tpl->tpl_vars['owl_stopOnHover']->value) {?>true<?php } else { ?>false<?php }?>,
            navigation : <?php if ($_smarty_tpl->tpl_vars['owl_navigation']->value) {?>true<?php } else { ?>false<?php }?>,
            navigationText : ["&nbsp;", "&nbsp;"],
            rewindNav : <?php if ($_smarty_tpl->tpl_vars['owl_rewindNav']->value) {?>true<?php } else { ?>false<?php }?>, // enable, disable tua lại về first item
            scrollPerPage : <?php if ($_smarty_tpl->tpl_vars['owl_scrollPerPage']->value) {?>true<?php } else { ?>false<?php }?>,
            
            pagination : <?php if ($_smarty_tpl->tpl_vars['owl_pagination']->value) {?>true<?php } else { ?>false<?php }?>, // show bullist : nut tròn tròn
            paginationNumbers : <?php if ($_smarty_tpl->tpl_vars['owl_paginationNumbers']->value) {?>true<?php } else { ?>false<?php }?>, // đổi nut tròn tròn thành số
            
            responsive : <?php if ($_smarty_tpl->tpl_vars['owl_responsive']->value) {?>true<?php } else { ?>false<?php }?>,
            //responsiveRefreshRate : 200,
            //responsiveBaseWidth : window,
            
            //baseClass : "owl-carousel",
            //theme : "owl-theme",
            
            lazyLoad : <?php if ($_smarty_tpl->tpl_vars['owl_lazyLoad']->value) {?>true<?php } else { ?>false<?php }?>,
            lazyFollow : <?php if ($_smarty_tpl->tpl_vars['owl_lazyFollow']->value) {?>true<?php } else { ?>false<?php }?>,  // TRUE : nhảy vào page 7 load ảnh TỪ page 1->7. FALSE : nhảy vào page 7 CHỈ load ảnh page 7
            lazyEffect : <?php if ($_smarty_tpl->tpl_vars['owl_lazyEffect']->value) {?>"fade"<?php } else { ?>false<?php }?>,
            
            autoHeight : <?php if ($_smarty_tpl->tpl_vars['owl_autoHeight']->value) {?>true<?php } else { ?>false<?php }?>,

            //jsonPath : false,
            //jsonSuccess : false,

            //dragBeforeAnimFinish
            mouseDrag : <?php if ($_smarty_tpl->tpl_vars['owl_mouseDrag']->value) {?>true<?php } else { ?>false<?php }?>,
            touchDrag : <?php if ($_smarty_tpl->tpl_vars['owl_touchDrag']->value) {?>true<?php } else { ?>false<?php }?>,
            
            addClassActive : true,
            <?php if ($_smarty_tpl->tpl_vars['owl_rtl']->value) {?>direction:'rtl',<?php }?>
            //transitionStyle : "owl_transitionStyle",
            
            //beforeUpdate : false,
            //afterUpdate : false,
            //beforeInit : false,
            //afterInit : false,
            //beforeMove : false,
            //afterMove : false,
            //afterAction : false,
            //startDragging : false,
            //afterLazyLoad: false
    

        });
    });
</script>
<?php }?>
<?php }} ?>
