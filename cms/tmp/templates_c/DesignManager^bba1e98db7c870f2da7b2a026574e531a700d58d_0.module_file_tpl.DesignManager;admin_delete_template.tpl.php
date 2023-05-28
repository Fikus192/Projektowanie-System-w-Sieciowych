<?php
/* Smarty version 3.1.31, created on 2023-05-28 00:15:45
  from "module_file_tpl:DesignManager;admin_delete_template.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_64728111b34e91_05178065',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bba1e98db7c870f2da7b2a026574e531a700d58d' => 
    array (
      0 => 'module_file_tpl:DesignManager;admin_delete_template.tpl',
      1 => 1685108132,
      2 => 'module_file_tpl',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64728111b34e91_05178065 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_form_start')) require_once 'D:\\Studia\\V. sem\\AS\\htdocs\\cms\\lib\\plugins\\function.form_start.php';
if (!is_callable('smarty_function_admin_icon')) require_once 'D:\\Studia\\V. sem\\AS\\htdocs\\cms\\admin\\plugins\\function.admin_icon.php';
if (!is_callable('smarty_modifier_localedate_format')) require_once 'D:\\Studia\\V. sem\\AS\\htdocs\\cms\\lib\\plugins\\modifier.localedate_format.php';
if (!is_callable('smarty_function_form_end')) require_once 'D:\\Studia\\V. sem\\AS\\htdocs\\cms\\lib\\plugins\\function.form_end.php';
?>
<h3><?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('delete_template');?>
</h3>

<?php if (count($_smarty_tpl->tpl_vars['tpl']->value->get_designs()) > 0 || $_smarty_tpl->tpl_vars['page_usage']->value > 0) {?>
<div class="pagewarning"><?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('warn_template_used');?>
</div>
<?php }?>

<?php echo smarty_function_form_start(array('tpl'=>$_smarty_tpl->tpl_vars['actionparams']->value['tpl']),$_smarty_tpl);?>

<fieldset>
  <div style="width: 49%; float: left;">
  <div class="pageoverflow">
    <p class="pagetext"><label for="tpl_name">*<?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('prompt_name');?>
:</label></p>
    <p class="pageinput">
      <input id="tpl_name" type="text" size="50" maxlength="50" value="<?php echo $_smarty_tpl->tpl_vars['tpl']->value->get_name();?>
" readonly="readonly"/>&nbsp;<?php echo smarty_function_admin_icon(array('name'=>'help_copytemplate_name','icon'=>'info.gif','class'=>'helpicon'),$_smarty_tpl);?>

    </p>
  </div>

  <?php if (isset($_smarty_tpl->tpl_vars['type_list']->value)) {?>
  <div class="pageoverflow">
    <p class="pagetext"><?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('prompt_type');?>
:</p>
    <p class="pageinput">
      <?php echo $_smarty_tpl->tpl_vars['type_list']->value[$_smarty_tpl->tpl_vars['tpl']->value->get_type_id()];?>

    </p>
  </div>
  <?php }?>

  <?php if (isset($_smarty_tpl->tpl_vars['category_list']->value)) {?>
  <div class="pageoverflow">
    <p class="pagetext"><?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('prompt_category');?>
:</p>
    <p class="pageinput">
      <?php echo $_smarty_tpl->tpl_vars['category_list']->value[(($tmp = @$_smarty_tpl->tpl_vars['tpl']->value->get_category_id())===null||$tmp==='' ? 0 : $tmp)];?>

    </p>
  </div>
  <?php }?>

  <?php if (isset($_smarty_tpl->tpl_vars['design_list']->value)) {?>
  <div class="pageoverflow">
    <p class="pagetext"><?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('prompt_designs');?>
:</p>
    <p class="pageinput">
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tpl']->value->get_designs(), 'dsn', false, NULL, 'dsn', array (
  'last' => true,
  'iteration' => true,
  'total' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['dsn']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_dsn']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_dsn']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_dsn']->value['iteration'] == $_smarty_tpl->tpl_vars['__smarty_foreach_dsn']->value['total'];
?>
        <?php echo $_smarty_tpl->tpl_vars['design_list']->value[$_smarty_tpl->tpl_vars['dsn']->value];?>

        <?php if (!(isset($_smarty_tpl->tpl_vars['__smarty_foreach_dsn']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_dsn']->value['last'] : null)) {?><br/><?php }?>
      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

    </p>
  </div>
  <?php }?>

  </div>

  <div style="width: 49%; float: right;">
  <?php if ($_smarty_tpl->tpl_vars['tpl']->value->get_id()) {?>
    <div class="pageoverflow">
      <p class="pagetext"><?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('prompt_created');?>
:</p>
      <p class="pageinput">
        <input type="text" id="tpl_created" value="<?php echo smarty_modifier_localedate_format($_smarty_tpl->tpl_vars['tpl']->value->get_created(),'%x %X');?>
" readonly="readonly"/>
      </p>
    </div>
    <div class="pageoverflow">
      <p class="pagetext"><label for="tpl_modified"><?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('prompt_modified');?>
:</label></p>
      <p class="pageinput">
        <input type="text" id="tpl_modified" value="<?php echo smarty_modifier_localedate_format($_smarty_tpl->tpl_vars['tpl']->value->get_modified(),'%x %X');?>
" readonly="readonly"/>
      </p>
    </div>
  <?php }?>

  <?php if (isset($_smarty_tpl->tpl_vars['user_list']->value)) {?>
  <div class="pageoverflow">
    <p class="pagetext"><?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('prompt_owner');?>
:</p>
    <p class="pageinput">
      <?php echo $_smarty_tpl->tpl_vars['user_list']->value[$_smarty_tpl->tpl_vars['tpl']->value->get_owner_id()];?>

    </p>
  </div>
  <?php }?>

  </div>
</fieldset>

<div class="pagewarning"><?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('info_template_delete');?>
</div>

<div class="pageoverflow">
  <p class="pagetext"></p>
  <p class="pageinput">
     <input id="check1" type="checkbox" name="<?php echo $_smarty_tpl->tpl_vars['actionid']->value;?>
check1" value="1"/>&nbsp;<label for="check1"><?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('confirm_delete_template_1');?>
</label><br/>
     <input id="check2" type="checkbox" name="<?php echo $_smarty_tpl->tpl_vars['actionid']->value;?>
check2" value="1"/>&nbsp;<label for="check2"><?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('confirm_delete_template_2');?>
</label>
  </p>
</div>

<div class="pageoverflow">
  <p class="pagetext"></p>
  <p class="pageinput">
     <input type="submit" name="<?php echo $_smarty_tpl->tpl_vars['actionid']->value;?>
submit" value="<?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('submit');?>
"/>
     <input type="submit" name="<?php echo $_smarty_tpl->tpl_vars['actionid']->value;?>
cancel" value="<?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('cancel');?>
"/>
  </p>
</div>
<?php echo smarty_function_form_end(array(),$_smarty_tpl);?>

<?php }
}
