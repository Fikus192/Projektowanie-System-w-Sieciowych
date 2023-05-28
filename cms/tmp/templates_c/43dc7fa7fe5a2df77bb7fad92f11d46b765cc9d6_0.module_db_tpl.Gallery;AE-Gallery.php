<?php
/* Smarty version 3.1.31, created on 2023-05-28 16:19:44
  from "module_db_tpl:Gallery;AE-Gallery" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_6473630076cea3_27948775',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '43dc7fa7fe5a2df77bb7fad92f11d46b765cc9d6' => 
    array (
      0 => 'module_db_tpl:Gallery;AE-Gallery',
      1 => 1685110677,
      2 => 'module_db_tpl',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6473630076cea3_27948775 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="gallery">
<?php if (!empty($_smarty_tpl->tpl_vars['module_message']->value)) {?><h4><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['module_message']->value, ENT_QUOTES, 'UTF-8', true);?>
</h4><?php }
if (!empty($_smarty_tpl->tpl_vars['gallerytitle']->value)) {?><h3><?php echo $_smarty_tpl->tpl_vars['gallerytitle']->value;?>
</h3><?php }
if (!empty($_smarty_tpl->tpl_vars['gallerycomment']->value)) {?><div class="gallerycomment"><?php echo $_smarty_tpl->tpl_vars['gallerycomment']->value;?>
</div><?php }?>
<p><?php echo $_smarty_tpl->tpl_vars['imagecount']->value;?>
</p>
<div class="pagenavigation">
<?php if ($_smarty_tpl->tpl_vars['pages']->value > 1) {?>
<div class="prevpage"><?php echo $_smarty_tpl->tpl_vars['prevpage']->value;?>
</div>
<div class="nextpage"><?php echo $_smarty_tpl->tpl_vars['nextpage']->value;?>
</div>
<?php }
if (!$_smarty_tpl->tpl_vars['hideparentlink']->value && !empty($_smarty_tpl->tpl_vars['parentlink']->value)) {?><div class="parentlink"><?php echo $_smarty_tpl->tpl_vars['parentlink']->value;?>
</div><?php }
if ($_smarty_tpl->tpl_vars['pages']->value > 1) {?><div class="pagelinks"><?php echo $_smarty_tpl->tpl_vars['pagelinks']->value;?>
</div><?php }?>
</div>

<?php $_smarty_tpl->_assignInScope('dirs', '');
$_smarty_tpl->_assignInScope('imgs', '');
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['images']->value, 'image');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['image']->value) {
if ($_smarty_tpl->tpl_vars['image']->value->isdir) {
$_smarty_tpl->_assignInScope('dirs', ((string)$_smarty_tpl->tpl_vars['dirs']->value)."
	<div class=\"img\">
		<a href=\"".((string)$_smarty_tpl->tpl_vars['image']->value->file)."\" title=\"".((string)$_smarty_tpl->tpl_vars['image']->value->title)."\"><img src=\"".((string)$_smarty_tpl->tpl_vars['image']->value->thumb)."\" alt=\"".((string)$_smarty_tpl->tpl_vars['image']->value->titlename)."\" /></a><br />
		".((string)$_smarty_tpl->tpl_vars['image']->value->titlename)."
	</div>
");
} else {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'images', 'imgs', null);
echo $_smarty_tpl->tpl_vars['imgs']->value;?>

        <li>
          <a href="<?php echo $_smarty_tpl->tpl_vars['image']->value->file;?>
">
            <img src="<?php echo $_smarty_tpl->tpl_vars['image']->value->thumb;?>
" title="<?php echo $_smarty_tpl->tpl_vars['image']->value->title;?>
" alt="<?php if (empty($_smarty_tpl->tpl_vars['image']->value->comment)) {
echo $_smarty_tpl->tpl_vars['image']->value->titlename;
} else {
echo $_smarty_tpl->tpl_vars['image']->value->comment;
}?>" longdesc="" class="image<?php echo $_smarty_tpl->tpl_vars['image']->value->fileid;?>
">
          </a>
        </li>
<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
}
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>



<?php if (!empty($_smarty_tpl->tpl_vars['imgs']->value)) {?>
<div class="ae-gallery">
  <div class="ae-image-wrapper">
  </div>
  <div class="ae-controls">
  </div>
  <div class="ae-nav">
    <div class="ae-thumbs">
      <ul class="ae-thumb-list">
<?php echo $_smarty_tpl->tpl_vars['imgs']->value;?>

      </ul>
    </div>
  </div>
</div>
<?php }?>

<?php echo $_smarty_tpl->tpl_vars['dirs']->value;?>

<div class="galleryclear">&nbsp;</div>
</div><?php }
}
