<?php
/* Smarty version 3.1.31, created on 2023-05-28 11:55:59
  from "cms_template:17" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_6473252f83aa98_91675347',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ee2d40a43bd620c7049feb0e947654bfe1e96dbc' => 
    array (
      0 => 'cms_template:17',
      1 => '1685267249',
      2 => 'cms_template',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6473252f83aa98_91675347 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_cms_get_language')) require_once 'D:\\Studia\\V. sem\\AS\\htdocs\\cms\\lib\\plugins\\function.cms_get_language.php';
if (!is_callable('smarty_function_title')) require_once 'D:\\Studia\\V. sem\\AS\\htdocs\\cms\\lib\\plugins\\function.title.php';
if (!is_callable('smarty_function_sitename')) require_once 'D:\\Studia\\V. sem\\AS\\htdocs\\cms\\lib\\plugins\\function.sitename.php';
if (!is_callable('smarty_function_global_content')) require_once 'D:\\Studia\\V. sem\\AS\\htdocs\\cms\\lib\\plugins\\function.global_content.php';
?>
<!DOCTYPE HTML>
<!--
	Introspect by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html lang="<?php echo smarty_function_cms_get_language(array(),$_smarty_tpl);?>
">
	<head>
		<title><?php echo smarty_function_title(array(),$_smarty_tpl);?>
 - <?php echo smarty_function_sitename(array(),$_smarty_tpl);?>
</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="template/assets/css/main.css" />
	</head>
	<body>

		<!-- Header -->
		
		<?php echo smarty_function_global_content(array('name'=>"b_introspect_header"),$_smarty_tpl);?>


		<!-- Banner -->
			
		<?php echo smarty_function_global_content(array('name'=>"b_introspect_banner"),$_smarty_tpl);?>
	

		<!-- One -->
			<section id="one">
				<div class="inner">
					<header>
						<h2>Magna Etiam Lorem</h2>
					</header>
					<p></p>
					<ul class="actions">
						<li><a href="template/#" class="button alt">Learn More</a></li>
					</ul>
				</div>
			</section>

		<!-- Two -->

		<!-- Three -->

		<!-- Footer -->
			
		<?php echo smarty_function_global_content(array('name'=>"b_introspect_footer"),$_smarty_tpl);?>


		<!-- Scripts -->
			<?php echo '<script'; ?>
 src="template/assets/js/jquery.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="template/assets/js/skel.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="template/assets/js/util.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="template/assets/js/main.js"><?php echo '</script'; ?>
>

	</body>
</html><?php }
}
