<?php
/* Smarty version 3.1.31, created on 2023-05-26 20:23:30
  from "D:\Studia\V. sem\AS\htdocs\cms\admin\templates\systeminfo.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_6470f922f149a4_87395972',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '60d91cac07173753f1cef238f3cf9fdadb8944a8' => 
    array (
      0 => 'D:\\Studia\\V. sem\\AS\\htdocs\\cms\\admin\\templates\\systeminfo.tpl',
      1 => 1685108122,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6470f922f149a4_87395972 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_cycle')) require_once 'D:\\Studia\\V. sem\\AS\\htdocs\\cms\\lib\\smarty\\plugins\\function.cycle.php';
?>
<div class="pagecontainer">
<?php if (empty($_GET['cleanreport'])) {?>
	<p class="pageshowrows">
		<span class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-icon-primary">
			<a href="<?php echo $_smarty_tpl->tpl_vars['systeminfo_cleanreport']->value;?>
">
				<span class="ui-button-icon-primary ui-icon ui-icon-circle-zoomin"></span>
				<span class="ui-button-text"><?php echo systeminfo_lang(array('a'=>'copy_paste_forum'),$_smarty_tpl);?>
</span>
			</a>
		</span>
	</p>
<?php }?>
 

<div class="pageoverflow">
	<div class="information">
		<p><?php echo systeminfo_lang(array('a'=>'help_systeminformation'),$_smarty_tpl);?>
</p>
	</div>
<hr/>
<table class="pagetable" summary="<?php echo systeminfo_lang(array('a'=>'cms_install_information'),$_smarty_tpl);?>
">
    <thead>
       <tr>
         <th colspan="3"><?php echo systeminfo_lang(array('a'=>'cms_install_information'),$_smarty_tpl);?>
</th>
       </tr>
    </thead>
	<tbody>
		<tr class="<?php echo smarty_function_cycle(array('values'=>'row1,row2'),$_smarty_tpl);?>
">
  			<td width="45%"><?php echo systeminfo_lang(array('a'=>'cms_version'),$_smarty_tpl);?>
</td>
			<td width="5%"></td>
  			<td width="50%"><?php echo $_smarty_tpl->tpl_vars['cms_version']->value;?>
</td>
  		</tr>
	</tbody>
</table>
<br /><br />
<table class="pagetable" summary="<?php echo systeminfo_lang(array('a'=>'installed_modules'),$_smarty_tpl);?>
">
    <thead>
       <tr>
         <th colspan="3"><?php echo systeminfo_lang(array('a'=>'installed_modules'),$_smarty_tpl);?>
</th>
       </tr>
    </thead>
	<tbody>
  		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['installed_modules']->value, 'module');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['module']->value) {
?>
  		<tr class="<?php echo smarty_function_cycle(array('values'=>'row1,row2'),$_smarty_tpl);?>
">
    		<td width="45%"><?php echo $_smarty_tpl->tpl_vars['module']->value['module_name'];?>
</td>
			<td width="5%"></td>
    		<td width="50%"><?php echo $_smarty_tpl->tpl_vars['module']->value['version'];?>
</td>
  		</tr>
  		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

	</tbody>
</table>
<br /><br />

<table class="pagetable" summary="<?php echo systeminfo_lang(array('a'=>'config_information'),$_smarty_tpl);?>
">
    <thead>
       <tr>
         <th colspan="3"><?php echo systeminfo_lang(array('a'=>'config_information'),$_smarty_tpl);?>
</th>
       </tr>
    </thead>
	<tbody>
  	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['config_info']->value, 'tmp', false, 'view');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['view']->value => $_smarty_tpl->tpl_vars['tmp']->value) {
?>
  		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tmp']->value, 'test', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['test']->value) {
?>
		<tr class="<?php echo smarty_function_cycle(array('values'=>'row1,row2'),$_smarty_tpl);?>
">
    		<td width="45%"><?php echo $_smarty_tpl->tpl_vars['test']->value->title;?>
</td>
			<td width="5%"><?php if (isset($_smarty_tpl->tpl_vars['test']->value->res)) {?><img class="systemicon" src="themes/<?php echo $_smarty_tpl->tpl_vars['themename']->value;?>
/images/icons/extra/<?php echo $_smarty_tpl->tpl_vars['test']->value->res;?>
.gif" title="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['test']->value->res_text)===null||$tmp==='' ? '' : $tmp);?>
" alt="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['test']->value->res_text)===null||$tmp==='' ? '' : $tmp);?>
" /><?php }?></td>
			<td width="50%">
	<?php if (isset($_smarty_tpl->tpl_vars['test']->value->value)) {
echo (($tmp = @$_smarty_tpl->tpl_vars['test']->value->value)===null||$tmp==='' ? "&nbsp;" : $tmp);
}?>
	<?php if (isset($_smarty_tpl->tpl_vars['test']->value->secondvalue)) {?>(<?php echo (($tmp = @$_smarty_tpl->tpl_vars['test']->value->secondvalue)===null||$tmp==='' ? "&nbsp;" : $tmp);?>
)<?php }?>
	<?php if (isset($_smarty_tpl->tpl_vars['test']->value->error_fragment)) {?><a class="external" rel="external" href="<?php echo $_smarty_tpl->tpl_vars['cms_install_help_url']->value;?>
#<?php echo $_smarty_tpl->tpl_vars['test']->value->error_fragment;?>
"><img src="themes/<?php echo $_smarty_tpl->tpl_vars['themename']->value;?>
/images/icons/system/info-external.gif" title="?" alt="?" /></a><?php }?>
	<?php if (isset($_smarty_tpl->tpl_vars['test']->value->message)) {?><br /><?php echo $_smarty_tpl->tpl_vars['test']->value->message;
}?>
			</td>
		</tr>
  		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

	</tbody>
</table>
<br /><br />


<table class="pagetable" summary="<?php echo lang('performance_information');?>
">
    <thead>
       <tr>
         <th colspan="3"><?php echo lang('performance_information');?>
</th>
       </tr>
    </thead>
	<tbody>
  	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['performance_info']->value, 'tmp', false, 'view');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['view']->value => $_smarty_tpl->tpl_vars['tmp']->value) {
?>
  		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tmp']->value, 'test', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['test']->value) {
?>
		<tr class="<?php echo smarty_function_cycle(array('values'=>'row1,row2'),$_smarty_tpl);?>
">
    		<td width="45%"><?php echo $_smarty_tpl->tpl_vars['test']->value->title;?>
</td>
			<td width="5%"><?php if (isset($_smarty_tpl->tpl_vars['test']->value->res)) {?><img class="systemicon" src="themes/<?php echo $_smarty_tpl->tpl_vars['themename']->value;?>
/images/icons/extra/<?php echo $_smarty_tpl->tpl_vars['test']->value->res;?>
.gif" title="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['test']->value->res_text)===null||$tmp==='' ? '' : $tmp);?>
" alt="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['test']->value->res_text)===null||$tmp==='' ? '' : $tmp);?>
" /><?php }?></td>
			<td width="50%">
	<?php if (isset($_smarty_tpl->tpl_vars['test']->value->value)) {
echo (($tmp = @$_smarty_tpl->tpl_vars['test']->value->value)===null||$tmp==='' ? "&nbsp;" : $tmp);
}?>
	<?php if (isset($_smarty_tpl->tpl_vars['test']->value->secondvalue)) {?>(<?php echo (($tmp = @$_smarty_tpl->tpl_vars['test']->value->secondvalue)===null||$tmp==='' ? "&nbsp;" : $tmp);?>
)<?php }?>
	<?php if (isset($_smarty_tpl->tpl_vars['test']->value->error_fragment)) {?><a class="external" rel="external" href="<?php echo $_smarty_tpl->tpl_vars['cms_install_help_url']->value;?>
#<?php echo $_smarty_tpl->tpl_vars['test']->value->error_fragment;?>
"><img src="themes/<?php echo $_smarty_tpl->tpl_vars['themename']->value;?>
/images/icons/system/info-external.gif" title="?" alt="?" /></a><?php }?>
	<?php if (isset($_smarty_tpl->tpl_vars['test']->value->message)) {?><br /><?php echo $_smarty_tpl->tpl_vars['test']->value->message;
}?>
			</td>
		</tr>
  		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

	</tbody>
</table>
<br /><br />

<table class="pagetable" summary="<?php echo systeminfo_lang(array('a'=>'php_information'),$_smarty_tpl);?>
">
    <thead>
       <tr>
         <th colspan="3"><?php echo systeminfo_lang(array('a'=>'php_information'),$_smarty_tpl);?>
</th>
       </tr>
    </thead>
	<tbody>
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['php_information']->value, 'tmp', false, 'view');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['view']->value => $_smarty_tpl->tpl_vars['tmp']->value) {
?>
  		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tmp']->value, 'test', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['test']->value) {
?>
		<tr class="<?php echo smarty_function_cycle(array('values'=>'row1,row2'),$_smarty_tpl);?>
">
    		<td width="45%"><?php echo systeminfo_lang(array('a'=>$_smarty_tpl->tpl_vars['key']->value),$_smarty_tpl);?>
 (<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
)</td>
			<td width="5%"><?php if (isset($_smarty_tpl->tpl_vars['test']->value->res)) {?><img class="systemicon" src="themes/<?php echo $_smarty_tpl->tpl_vars['themename']->value;?>
/images/icons/extra/<?php echo $_smarty_tpl->tpl_vars['test']->value->res;?>
.gif" title="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['test']->value->res_text)===null||$tmp==='' ? '' : $tmp);?>
" alt="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['test']->value->res_text)===null||$tmp==='' ? '' : $tmp);?>
" /><?php }?></td>
			<td width="50%">
	<?php if (isset($_smarty_tpl->tpl_vars['test']->value->value) && $_smarty_tpl->tpl_vars['test']->value->display_value != 0) {
echo $_smarty_tpl->tpl_vars['test']->value->value;
}?>
	<?php if (isset($_smarty_tpl->tpl_vars['test']->value->secondvalue)) {?>(<?php echo $_smarty_tpl->tpl_vars['test']->value->secondvalue;?>
)<?php }?>
	<?php if (isset($_smarty_tpl->tpl_vars['test']->value->error_fragment)) {?><a class="external" rel="external" href="<?php echo $_smarty_tpl->tpl_vars['cms_install_help_url']->value;?>
#<?php echo $_smarty_tpl->tpl_vars['test']->value->error_fragment;?>
"><img src="themes/<?php echo $_smarty_tpl->tpl_vars['themename']->value;?>
/images/icons/system/info-external.gif" title="?" alt="?" /></a><?php }?>
	<?php if (isset($_smarty_tpl->tpl_vars['test']->value->message)) {
echo $_smarty_tpl->tpl_vars['test']->value->message;
}?>
	<?php if (isset($_smarty_tpl->tpl_vars['test']->value->opt)) {?>
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['test']->value->opt, 'opt', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['opt']->value) {
?>
			<br /><?php echo $_smarty_tpl->tpl_vars['key']->value;?>
: <?php echo $_smarty_tpl->tpl_vars['opt']->value['message'];?>
 <img class="systemicon" src="themes/<?php echo $_smarty_tpl->tpl_vars['themename']->value;?>
/images/icons/extra/<?php echo $_smarty_tpl->tpl_vars['opt']->value['res'];?>
.gif" alt="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['opt']->value['res_text'])===null||$tmp==='' ? '' : $tmp);?>
" title="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['opt']->value['res_text'])===null||$tmp==='' ? '' : $tmp);?>
" />
		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

	<?php }?>
			</td>
		</tr>
  		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

	</tbody>
</table>
<br /><br />
<table class="pagetable" summary="<?php echo systeminfo_lang(array('a'=>'server_information'),$_smarty_tpl);?>
">
    <thead>
       <tr>
         <th colspan="3"><?php echo systeminfo_lang(array('a'=>'server_information'),$_smarty_tpl);?>
</th>
       </tr>
    </thead>
	<tbody>
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['server_info']->value, 'tmp', false, 'view');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['view']->value => $_smarty_tpl->tpl_vars['tmp']->value) {
?>
  		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tmp']->value, 'test', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['test']->value) {
?>
		<tr class="<?php echo smarty_function_cycle(array('values'=>'row1,row2'),$_smarty_tpl);?>
">
			<td width="45%"><?php echo systeminfo_lang(array('a'=>$_smarty_tpl->tpl_vars['key']->value),$_smarty_tpl);?>
 (<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
)</td>
			<td width="5%"><?php if (isset($_smarty_tpl->tpl_vars['test']->value->res)) {?><img class="systemicon" src="themes/<?php echo $_smarty_tpl->tpl_vars['themename']->value;?>
/images/icons/extra/<?php echo (($tmp = @$_smarty_tpl->tpl_vars['test']->value->res)===null||$tmp==='' ? "space" : $tmp);?>
.gif" title="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['test']->value->res_text)===null||$tmp==='' ? '' : $tmp);?>
" alt="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['test']->value->res_text)===null||$tmp==='' ? '' : $tmp);?>
" /><?php }?></td>
			<td width="50%">
			<?php if (isset($_smarty_tpl->tpl_vars['test']->value->value)) {
echo mb_strtolower($_smarty_tpl->tpl_vars['test']->value->value, 'UTF-8');
}?>
			<?php if (isset($_smarty_tpl->tpl_vars['test']->value->secondvalue)) {?>(<?php echo $_smarty_tpl->tpl_vars['test']->value->secondvalue;?>
)<?php }?>
			<?php if (isset($_smarty_tpl->tpl_vars['test']->value->message)) {?><br /><?php echo $_smarty_tpl->tpl_vars['test']->value->message;
}?>
			</td>
		</tr>
  		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

	</tbody>
</table>
<br /><br />
<table class="pagetable" summary="<?php echo systeminfo_lang(array('a'=>'permission_information'),$_smarty_tpl);?>
">
    <thead>
       <tr>
         <th colspan="3"><?php echo systeminfo_lang(array('a'=>'permission_information'),$_smarty_tpl);?>
</th>
       </tr>
    </thead>
	<tbody>
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['permission_info']->value, 'tmp', false, 'view');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['view']->value => $_smarty_tpl->tpl_vars['tmp']->value) {
?>
  		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tmp']->value, 'test', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['test']->value) {
?>
	<tr class="<?php echo smarty_function_cycle(array('values'=>'row1,row2'),$_smarty_tpl);?>
">
		<td width="45%"><?php echo $_smarty_tpl->tpl_vars['key']->value;?>
</td>
		<td width="5%"><?php if (isset($_smarty_tpl->tpl_vars['test']->value->res)) {?><img class="systemicon" src="themes/<?php echo $_smarty_tpl->tpl_vars['themename']->value;?>
/images/icons/extra/<?php echo $_smarty_tpl->tpl_vars['test']->value->res;?>
.gif" title="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['test']->value->res_text)===null||$tmp==='' ? '' : $tmp);?>
" alt="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['test']->value->res_text)===null||$tmp==='' ? '' : $tmp);?>
" /><?php }?></td>
		<td width="50%">
		<?php if (isset($_smarty_tpl->tpl_vars['test']->value->value)) {
echo $_smarty_tpl->tpl_vars['test']->value->value;
}?>
		<?php if (isset($_smarty_tpl->tpl_vars['test']->value->secondvalue)) {?>(<?php echo $_smarty_tpl->tpl_vars['test']->value->secondvalue;?>
)<?php }?>
		<?php if (isset($_smarty_tpl->tpl_vars['test']->value->message)) {?><br /><?php echo $_smarty_tpl->tpl_vars['test']->value->message;
}?>
		</td>
	</tr>
  		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

	</tbody>
</table>
<br />

	</div>
</div><?php }
}
