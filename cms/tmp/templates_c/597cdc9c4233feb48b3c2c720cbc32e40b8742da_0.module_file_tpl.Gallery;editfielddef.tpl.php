<?php
/* Smarty version 3.1.31, created on 2023-05-28 15:57:57
  from "module_file_tpl:Gallery;editfielddef.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_64735de52a1ef2_26543231',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '597cdc9c4233feb48b3c2c720cbc32e40b8742da' => 
    array (
      0 => 'module_file_tpl:Gallery;editfielddef.tpl',
      1 => 1685110677,
      2 => 'module_file_tpl',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64735de52a1ef2_26543231 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="pageoverflow">
<h3><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h3>
</div>
<?php echo $_smarty_tpl->tpl_vars['formstart']->value;
echo $_smarty_tpl->tpl_vars['hidden']->value;?>


<div class="pageoverflow">
  <p class="pagetext"><?php echo $_smarty_tpl->tpl_vars['prompt_name']->value;?>
:</p>
  <p class="pageinput"><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</p>
</div>

<div class="pageoverflow">
  <p class="pagetext"><?php echo $_smarty_tpl->tpl_vars['prompt_type']->value;?>
:</p>
  <p class="pageinput"><?php echo $_smarty_tpl->tpl_vars['type']->value;?>
</p>
</div>

<div class="pageoverflow">
  <p class="pagetext"><?php echo $_smarty_tpl->tpl_vars['prompt_properties']->value;?>
:</p>
  <p class="pageinput"><?php echo $_smarty_tpl->tpl_vars['properties_help']->value;?>
</p>
  <p class="pageinput"><?php echo $_smarty_tpl->tpl_vars['properties']->value;?>
</p>
</div>

<div class="pageoverflow">
  <p class="pagetext"><?php echo $_smarty_tpl->tpl_vars['prompt_dirfield']->value;?>
:</p>
  <p class="pageinput"><?php echo $_smarty_tpl->tpl_vars['dirfield']->value;?>
</p>
</div>

<div class="pageoverflow">
  <p class="pagetext"><?php echo $_smarty_tpl->tpl_vars['prompt_public']->value;?>
:</p>
  <p class="pageinput"><?php echo $_smarty_tpl->tpl_vars['public']->value;?>
</p>
</div>

<div class="pageoverflow">
  <p class="pagetext">&nbsp;</p>
  <p class="pageinput"><?php echo $_smarty_tpl->tpl_vars['submit']->value;
echo $_smarty_tpl->tpl_vars['cancel']->value;?>
</p>
	<p>&nbsp;</p>
</div>

<?php echo $_smarty_tpl->tpl_vars['formend']->value;
}
}
