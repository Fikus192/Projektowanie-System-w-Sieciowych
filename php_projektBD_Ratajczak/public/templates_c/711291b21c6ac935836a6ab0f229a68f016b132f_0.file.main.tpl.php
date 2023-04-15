<?php
/* Smarty version 4.1.0, created on 2023-04-15 19:51:35
  from 'D:\Studia\V. sem\AS\htdocs\php_projektBD_Ratajczak\app\views\templates\main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_643ae4277635f6_18343670',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '711291b21c6ac935836a6ab0f229a68f016b132f' => 
    array (
      0 => 'D:\\Studia\\V. sem\\AS\\htdocs\\php_projektBD_Ratajczak\\app\\views\\templates\\main.tpl',
      1 => 1681581094,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_643ae4277635f6_18343670 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE HTML>
<!--
	Prologue by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Wypożyczalnia kajaków</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/css/main.css" />
	</head>
	<body class="is-preload">

		<!-- Header -->
			<div id="header">

				<div class="top">

					<!-- Logo -->
						<div id="logo">
							<span class="image avatar48"><img src="images/IMG-8162.jpg" alt="" /></span>
							<h1 id="title">Mateusz Ratajczak</h1>
							<p>Informatyk</p>
						</div>

					<!-- Nav -->
						<nav id="nav">
							<ul>
								<li><a href="#top" id="top-link"><span class="icon solid fa-home">Strona tytułowa</span></a></li>
								<li><a href="#contact" id="contact-link"><span class="icon solid fa-envelope">Lista kajaków</span></a></li>
							</ul>
						</nav>

				</div>

				<div class="bottom">

				</div>

			</div>

		<!-- Main -->
			<div id="main">

				<!-- Intro -->
					<section id="top" class="one dark cover">
						<div class="container">

							<header>
								<h2 class="alt"><strong>Wypożyczalnia kajaków</strong><br />
                                </h2>
								<p>Wypożycz kajak w bardzo atrakcyjnej ofercie.<br />
								Poniżej znajdziesz listę dostępnych kajaków do wypożyczenia.</p>
							</header>

							<footer>
								<a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
searchCanoe" class="button scrolly">Przejdź do wypożyczalni</a>
							</footer>

						</div>
					</section>

				

				<!-- Contact -->
					<section id="contact" class="four">
						<div class="container">

							<header>
								<h2>Wypożyczalnia kajaków</h2>
							</header>

						</div>

                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1782183191643ae427761bc7_46174055', 'content');
?>


					</section>
				
			</div>

		<!-- Footer -->
			<div id="footer">

				<!-- Copyright -->
					<ul class="copyright">
						<li>&copy; Untitled. All rights reserved.</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li><br />
                        <a href="http://html5up.net/license">Free</a> responsive site template.
					</ul>

			</div> 
        

		<!-- Scripts -->
			<?php echo '<script'; ?>
 src="assets/js/jquery.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="assets/js/jquery.scrolly.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="assets/js/jquery.scrollex.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="assets/js/browser.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="assets/js/breakpoints.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="assets/js/util.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="assets/js/main.js"><?php echo '</script'; ?>
>

	</body>
</html><?php }
/* {block 'content'} */
class Block_1782183191643ae427761bc7_46174055 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1782183191643ae427761bc7_46174055',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php
}
}
/* {/block 'content'} */
}
