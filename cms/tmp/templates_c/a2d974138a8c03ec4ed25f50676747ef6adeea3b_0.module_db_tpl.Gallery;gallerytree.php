<?php
/* Smarty version 3.1.31, created on 2023-05-28 16:19:12
  from "module_db_tpl:Gallery;gallerytree" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_647362e09a2337_47466135',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a2d974138a8c03ec4ed25f50676747ef6adeea3b' => 
    array (
      0 => 'module_db_tpl:Gallery;gallerytree',
      1 => 1685110677,
      2 => 'module_db_tpl',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_647362e09a2337_47466135 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_repeat')) require_once 'D:\\Studia\\V. sem\\AS\\htdocs\\cms\\lib\\plugins\\function.repeat.php';
?>
<ul>
<?php $_smarty_tpl->_assignInScope('g_prevdepth', 1);
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['images']->value, 'image', false, NULL, 'img', array (
  'index' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['image']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_img']->value['index']++;
?>

<?php if ($_smarty_tpl->tpl_vars['image']->value->depth > $_smarty_tpl->tpl_vars['g_prevdepth']->value) {
echo smarty_function_repeat(array('string'=>"<ul>",'times'=>$_smarty_tpl->tpl_vars['image']->value->depth-$_smarty_tpl->tpl_vars['g_prevdepth']->value),$_smarty_tpl);?>

<?php } elseif ($_smarty_tpl->tpl_vars['image']->value->depth < $_smarty_tpl->tpl_vars['g_prevdepth']->value) {
echo smarty_function_repeat(array('string'=>"</li></ul>",'times'=>$_smarty_tpl->tpl_vars['g_prevdepth']->value-$_smarty_tpl->tpl_vars['image']->value->depth),$_smarty_tpl);?>

</li>
<?php } elseif ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_img']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_img']->value['index'] : null) > 0) {?></li>
<?php }?>
		<li><a href="<?php echo $_smarty_tpl->tpl_vars['image']->value->file;?>
" title="<?php echo $_smarty_tpl->tpl_vars['image']->value->titlename;?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['image']->value->thumb;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['image']->value->titlename;?>
" /></a> <?php echo $_smarty_tpl->tpl_vars['image']->value->titlename;?>


<?php $_smarty_tpl->_assignInScope('g_prevdepth', $_smarty_tpl->tpl_vars['image']->value->depth);
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

<?php echo smarty_function_repeat(array('string'=>"</li></ul>",'times'=>$_smarty_tpl->tpl_vars['image']->value->depth-1),$_smarty_tpl);?>
</li>
	</ul><?php }
}
