<?php
/* Smarty version 3.1.31, created on 2023-05-28 15:30:01
  from "tpl_body:25" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_64735759c99c33_34535634',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dd44cb2728e71d341460b2e1d701f49fd57aed9f' => 
    array (
      0 => 'tpl_body:25',
      1 => '1685280561',
      2 => 'tpl_body',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64735759c99c33_34535634 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_global_content')) require_once 'D:\\Studia\\V. sem\\AS\\htdocs\\cms\\lib\\plugins\\function.global_content.php';
if (!is_callable('smarty_function_title')) require_once 'D:\\Studia\\V. sem\\AS\\htdocs\\cms\\lib\\plugins\\function.title.php';
?>
<body>

		<!-- Header -->
		
		<?php echo smarty_function_global_content(array('name'=>"b_introspect_header"),$_smarty_tpl);?>


		<!-- Main -->
			<section id="main" >
				<div class="inner">
					<header class="major special">
						<h1><?php echo smarty_function_title(array(),$_smarty_tpl);?>
</h1>
					</header>
				<section id="three">
				<div class="inner">
					<article>
						<div class="content">
							<p><?php CMS_Content_Block::smarty_internal_fetch_contentblock(array(),$_smarty_tpl); ?></p>
						</div>
					</article>
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
