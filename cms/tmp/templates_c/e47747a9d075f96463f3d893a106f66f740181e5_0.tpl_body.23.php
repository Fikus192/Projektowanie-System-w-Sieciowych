<?php
/* Smarty version 3.1.31, created on 2023-05-28 16:11:41
  from "tpl_body:23" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_6473611d3920c4_48841788',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e47747a9d075f96463f3d893a106f66f740181e5' => 
    array (
      0 => 'tpl_body:23',
      1 => '1685282525',
      2 => 'tpl_body',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6473611d3920c4_48841788 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_global_content')) require_once 'D:\\Studia\\V. sem\\AS\\htdocs\\cms\\lib\\plugins\\function.global_content.php';
?>
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
									    <img> <?php CMS_Content_Block::smarty_internal_fetch_contentblock(array(),$_smarty_tpl); ?> <img/>
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
