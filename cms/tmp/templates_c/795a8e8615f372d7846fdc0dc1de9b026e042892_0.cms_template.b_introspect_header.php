<?php
/* Smarty version 3.1.31, created on 2023-05-28 14:36:33
  from "cms_template:b_introspect_header" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_64734ad1179132_80176098',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '795a8e8615f372d7846fdc0dc1de9b026e042892' => 
    array (
      0 => 'cms_template:b_introspect_header',
      1 => '1685277371',
      2 => 'cms_template',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64734ad1179132_80176098 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_root_url')) require_once 'D:\\Studia\\V. sem\\AS\\htdocs\\cms\\lib\\plugins\\function.root_url.php';
if (!is_callable('smarty_function_sitename')) require_once 'D:\\Studia\\V. sem\\AS\\htdocs\\cms\\lib\\plugins\\function.sitename.php';
?>
<header id="header">
	<div class="inner">
		<a href="<?php echo smarty_function_root_url(array(),$_smarty_tpl);?>
" class="logo"><?php echo smarty_function_sitename(array(),$_smarty_tpl);?>
</a>
		<nav id="nav">
			<?php echo Navigator::function_plugin(array('template'=>"b_introspect_menu"),$_smarty_tpl);?>

		</nav>
	</div>
</header>
<a href="template/#menu" class="navPanelToggle"><span class="fa fa-bars"></span></a><?php }
}
