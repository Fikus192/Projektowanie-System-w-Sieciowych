<?php
/* Smarty version 3.1.31, created on 2023-05-28 15:13:15
  from "tpl_body:17" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_6473536b616d05_30212575',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b71f7ee015ec99e80fe2c1926e3e69de9a04c0ff' => 
    array (
      0 => 'tpl_body:17',
      1 => '1685279532',
      2 => 'tpl_body',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6473536b616d05_30212575 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_global_content')) require_once 'D:\\Studia\\V. sem\\AS\\htdocs\\cms\\lib\\plugins\\function.global_content.php';
if (!is_callable('smarty_function_root_url')) require_once 'D:\\Studia\\V. sem\\AS\\htdocs\\cms\\lib\\plugins\\function.root_url.php';
?>
<body>

		<!-- Header -->
		
		<?php echo smarty_function_global_content(array('name'=>"b_introspect_header"),$_smarty_tpl);?>


		<!-- Banner -->
			
		<?php echo smarty_function_global_content(array('name'=>"b_introspect_banner"),$_smarty_tpl);?>
	

		<!-- One -->
			<section id="one">
				<div class="inner">
					<p><?php CMS_Content_Block::smarty_internal_fetch_contentblock(array(),$_smarty_tpl); ?></p>
					<ul class="actions">
						<li><a href="<?php echo smarty_function_root_url(array(),$_smarty_tpl);?>
" class="button alt">Learn More</a></li>
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
