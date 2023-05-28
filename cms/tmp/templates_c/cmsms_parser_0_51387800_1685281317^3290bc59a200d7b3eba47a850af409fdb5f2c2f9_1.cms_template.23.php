<?php
/* Smarty version 3.1.31, created on 2023-05-28 15:41:57
  from "cms_template:23" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_64735a2582e0b7_96626836',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3290bc59a200d7b3eba47a850af409fdb5f2c2f9' => 
    array (
      0 => 'cms_template:23',
      1 => '1685281263',
      2 => 'cms_template',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64735a2582e0b7_96626836 (Smarty_Internal_Template $_smarty_tpl) {
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
<html>
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


		<!-- Main -->
			<section id="main">
				<div class="inner">
				    
					<!-- Lists -->
						
					<!-- Table -->

					<!-- Buttons -->
						
					<!-- Form -->
						
					<!-- Image -->
						<section>
							<div class="box alt">
								<div class="row 50% uniform">
									<div class="12u$"><span class="image fit">
									    
									    </span>
									</div>
									
								</div>
							</div>
						</section>

				</div>
			</section>

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
