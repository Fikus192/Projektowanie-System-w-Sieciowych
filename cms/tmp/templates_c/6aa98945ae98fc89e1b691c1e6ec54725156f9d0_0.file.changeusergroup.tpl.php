<?php
/* Smarty version 3.1.31, created on 2023-05-26 19:19:56
  from "D:\Studia\V. sem\AS\htdocs\cms\admin\templates\changeusergroup.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_6470ea3cd9b275_98383737',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6aa98945ae98fc89e1b691c1e6ec54725156f9d0' => 
    array (
      0 => 'D:\\Studia\\V. sem\\AS\\htdocs\\cms\\admin\\templates\\changeusergroup.tpl',
      1 => 1685108121,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6470ea3cd9b275_98383737 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_cms_help')) require_once 'D:\\Studia\\V. sem\\AS\\htdocs\\cms\\admin\\plugins\\function.cms_help.php';
if (!is_callable('smarty_function_cycle')) require_once 'D:\\Studia\\V. sem\\AS\\htdocs\\cms\\lib\\smarty\\plugins\\function.cycle.php';
?>
<div class="information"><?php echo lang('info_changeusergroup');?>
&nbsp;<?php echo smarty_function_cms_help(array('key2'=>'help_group_permissions','title'=>lang('info_changeusergroup')),$_smarty_tpl);?>
</div>



<?php if (isset($_smarty_tpl->tpl_vars['message']->value)) {?>
<p class="pagemessage"><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</p>
<?php }?>

<div class="pageoverflow">
<form method="post" action="<?php echo $_smarty_tpl->tpl_vars['filter_action']->value;?>
">
<div class="hidden">
  <input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['cms_secure_param_name']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['cms_user_key']->value;?>
" />
</div>
	<b><?php echo $_smarty_tpl->tpl_vars['selectgroup']->value;?>
:</b>&nbsp;
        <select name="groupsel" id="groupsel">
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['allgroups']->value, 'thisgroup');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['thisgroup']->value) {
?>
           <?php if ($_smarty_tpl->tpl_vars['thisgroup']->value->id == $_smarty_tpl->tpl_vars['disp_group']->value) {?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['thisgroup']->value->id;?>
" selected="selected"><?php echo $_smarty_tpl->tpl_vars['thisgroup']->value->name;?>
</option>
           <?php } else { ?>
		<option value="<?php echo $_smarty_tpl->tpl_vars['thisgroup']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['thisgroup']->value->name;?>
</option>
           <?php }?>
	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

	</select>&nbsp;
        <input type="submit" name="filter" value="<?php echo $_smarty_tpl->tpl_vars['apply']->value;?>
"/>
</form>
</div><br />

<?php echo $_smarty_tpl->tpl_vars['form_start']->value;
echo (($tmp = @$_smarty_tpl->tpl_vars['hidden']->value)===null||$tmp==='' ? '' : $tmp);?>

<div class="hidden">
  <input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['cms_secure_param_name']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['cms_user_key']->value;?>
" />
</div>
<div class="pageoptions">
    <?php echo $_smarty_tpl->tpl_vars['submit']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['cancel']->value;?>

</div>
<?php $_smarty_tpl->_assignInScope('group_count', count($_smarty_tpl->tpl_vars['group_list']->value));
?>
<table class="pagetable" id="permtable">
  <thead>
  <tr>
    <th><?php if (isset($_smarty_tpl->tpl_vars['title_group']->value)) {
echo $_smarty_tpl->tpl_vars['title_group']->value;
}?></th>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['group_list']->value, 'thisgroup');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['thisgroup']->value) {
?>
      <?php if ($_smarty_tpl->tpl_vars['thisgroup']->value->id != -1) {?>
        <?php $_smarty_tpl->_assignInScope('title', '');
?>
        <?php $_smarty_tpl->_assignInScope('text', $_smarty_tpl->tpl_vars['thisgroup']->value->name);
?>
        <?php $_smarty_tpl->_assignInScope('tag', 'span');
?>
        <?php if (!$_smarty_tpl->tpl_vars['thisgroup']->value->active) {?>
          <?php $_smarty_tpl->_assignInScope('tag', 'em');
?>
          <?php $_smarty_tpl->_assignInScope('title', lang('info_group_inactive'));
?>
          <?php $_smarty_tpl->_assignInScope('text', $_smarty_tpl->tpl_vars['thisgroup']->value->name);
?>
          <?php if ($_smarty_tpl->tpl_vars['group_count']->value >= 5) {?>
            <?php $_smarty_tpl->_assignInScope('text', ($_smarty_tpl->tpl_vars['thisgroup']->value->name).('!'));
?>
          <?php } else { ?>
            <?php ob_start();
echo lang('inactive');
$_prefixVariable1=ob_get_clean();
$_smarty_tpl->_assignInScope('text', ($_smarty_tpl->tpl_vars['thisgroup']->value->name).("&nbsp;(".$_prefixVariable1.")"));
?>
          <?php }?>
        <?php }?>
        <th class="g<?php echo $_smarty_tpl->tpl_vars['thisgroup']->value->id;?>
">
          <<?php echo $_smarty_tpl->tpl_vars['tag']->value;?>
 title="<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['text']->value;?>
</<?php echo $_smarty_tpl->tpl_vars['tag']->value;?>
>
        </th>
      <?php }?>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

  </tr>
  </thead>
  <tbody>
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['users']->value, 'user');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['user']->value) {
?>
    <?php echo smarty_function_cycle(array('values'=>'row1,row2','assign'=>'currow'),$_smarty_tpl);?>

    <tr class="<?php echo $_smarty_tpl->tpl_vars['currow']->value;?>
">
 		<td><?php echo $_smarty_tpl->tpl_vars['user']->value->name;?>
</td>
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['group_list']->value, 'thisgroup');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['thisgroup']->value) {
?>
                    <?php if ($_smarty_tpl->tpl_vars['user']->value->id == $_smarty_tpl->tpl_vars['user_id']->value) {?>
    		      <?php if ($_smarty_tpl->tpl_vars['thisgroup']->value->id != -1) {?>
                        <td class="g<?php echo $_smarty_tpl->tpl_vars['thisgroup']->value->id;?>
">--</td>
                      <?php }?>
                    <?php } else { ?>
			<?php if ($_smarty_tpl->tpl_vars['thisgroup']->value->id != -1) {?>
                          <?php if (($_smarty_tpl->tpl_vars['thisgroup']->value->id == 1 && $_smarty_tpl->tpl_vars['user']->value->id == 1)) {?>
  			    <td class="g<?php echo $_smarty_tpl->tpl_vars['thisgroup']->value->id;?>
">&nbsp;</td>
                          <?php } else { ?>
			    <?php $_smarty_tpl->_assignInScope('gid', $_smarty_tpl->tpl_vars['thisgroup']->value->id);
?>
			    <td class="g<?php echo $_smarty_tpl->tpl_vars['thisgroup']->value->id;?>
">
                              <input type="checkbox" name="ug_<?php echo $_smarty_tpl->tpl_vars['user']->value->id;?>
_<?php echo $_smarty_tpl->tpl_vars['gid']->value;?>
" value="1"<?php if (isset($_smarty_tpl->tpl_vars['user']->value->group[$_smarty_tpl->tpl_vars['gid']->value])) {?> checked="checked"<?php }?>  />
                            </td>
			  <?php }?>
                        <?php }?>
                     <?php }?>
		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

    </tr>
  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

  </tbody>
</table>

<div class="pageoptions">
    <?php echo $_smarty_tpl->tpl_vars['submit']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['cancel']->value;?>

</div>
</form>
<?php }
}
