<?php
/* Smarty version 3.1.31, created on 2023-05-26 19:19:50
  from "D:\Studia\V. sem\AS\htdocs\cms\admin\templates\listtags.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_6470ea3632c1e5_46086940',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '31d4929982b77127450ea117593c782492fe9d0a' => 
    array (
      0 => 'D:\\Studia\\V. sem\\AS\\htdocs\\cms\\admin\\templates\\listtags.tpl',
      1 => 1685108122,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6470ea3632c1e5_46086940 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_cycle')) require_once 'D:\\Studia\\V. sem\\AS\\htdocs\\cms\\lib\\smarty\\plugins\\function.cycle.php';
?>
<div class="pagecontainer">
  <div class="pageoverflow"><?php echo $_smarty_tpl->tpl_vars['header']->value;?>
</div>
  <?php if (isset($_smarty_tpl->tpl_vars['subheader']->value)) {?>
    <div class="pageheader"><?php echo $_smarty_tpl->tpl_vars['subheader']->value;?>

    <?php if (isset($_smarty_tpl->tpl_vars['wiki_url']->value) && isset($_smarty_tpl->tpl_vars['image_help_external']->value)) {?>
       <span class="helptext">
         <a class='helpicon' href="<?php echo $_smarty_tpl->tpl_vars['wiki_url']->value;?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['image_help_external']->value;?>
</a><a href="<?php echo $_smarty_tpl->tpl_vars['wiki_url']->value;?>
" target="_blank"><?php echo lang('help');?>
</a> (<?php echo lang('new_window');?>
)
       </span>
    <?php }?>
    </div>
  <?php }?>
  
  <?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
    <br /><?php echo $_smarty_tpl->tpl_vars['content']->value;?>

  <?php } elseif (isset($_smarty_tpl->tpl_vars['error']->value)) {?>
    <div class="pageerrorcontainer"><div class="pageoverflow"><ul class="pageerror"><li><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</li></ul></div></div>
  <?php } elseif (isset($_smarty_tpl->tpl_vars['plugins']->value)) {?>
    <table class="pagetable">
      <thead> 
       <tr>
         <th><span title="<?php echo lang_by_realm('tags','tag_name');?>
"><?php echo lang('name');?>
</span></th>
         <th><span title="<?php echo lang_by_realm('tags','tag_type');?>
"><?php echo lang('type');?>
</span></th>
	 <th class="pagew10"><span title="<?php echo lang_by_realm('tags','tag_adminplugin');?>
"><?php echo lang('adminplugin');?>
</span></th>
         <th class="pagew10"><span title="<?php echo lang_by_realm('tags','tag_cachable');?>
"><?php echo lang('cachable');?>
</span></th>
         <th class="pagew10"><span title="<?php echo lang_by_realm('tags','tag_help');?>
"><?php echo lang('help');?>
</span></th>
         <th class="pagew10"><span title="<?php echo lang_by_realm('tags','tag_about');?>
"><?php echo lang('about');?>
</span></th>
       </tr>
      </thead> 
      <tbody>
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['plugins']->value, 'one');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['one']->value) {
?>
	<?php echo smarty_function_cycle(array('values'=>"row1,row2",'assign'=>'rowclass'),$_smarty_tpl);?>

	<tr class="<?php echo $_smarty_tpl->tpl_vars['rowclass']->value;?>
">
         <td>
           <?php if (isset($_smarty_tpl->tpl_vars['one']->value['help_url'])) {?>
             <a href="<?php echo $_smarty_tpl->tpl_vars['one']->value['help_url'];?>
" title="<?php echo lang_by_realm('tags','viewhelp');?>
"><?php echo $_smarty_tpl->tpl_vars['one']->value['name'];?>
</a>
           <?php } else { ?>
             <?php echo $_smarty_tpl->tpl_vars['one']->value['name'];?>

           <?php }?>
         </td>
         <td>
            <span title="<?php echo lang_by_realm('tags',$_smarty_tpl->tpl_vars['one']->value['type']);?>
"><?php echo $_smarty_tpl->tpl_vars['one']->value['type'];?>
</span>
         </td>
         <td>
            <?php if (isset($_smarty_tpl->tpl_vars['one']->value['admin']) && $_smarty_tpl->tpl_vars['one']->value['admin']) {?>
              <span title="<?php echo lang_by_realm('tags','title_admin');?>
"><?php echo lang('yes');?>
</span>
            <?php } else { ?>
              <span title="<?php echo lang_by_realm('tags','title_notadmin');?>
"><?php echo lang('no');?>
</span>
            <?php }?>
         </td>
         <td>
            <?php if (isset($_smarty_tpl->tpl_vars['one']->value['cachable']) && $_smarty_tpl->tpl_vars['one']->value['cachable'] == 'yes') {?>
              <span title="<?php echo lang_by_realm('tags','title_cachable');?>
"><?php echo lang('yes');?>
</span>
            <?php } else { ?>
              <span title="<?php echo lang_by_realm('tags','title_notcachable');?>
"><?php echo lang('no');?>
</span>
            <?php }?>
         </td>
         <td>
           <?php if (isset($_smarty_tpl->tpl_vars['one']->value['help_url'])) {?>
             <a href="<?php echo $_smarty_tpl->tpl_vars['one']->value['help_url'];?>
" title="<?php echo lang_by_realm('tags','viewhelp');?>
"><?php echo lang('help');?>
</a>
           <?php }?>
         </td>
         <td>
           <?php if (isset($_smarty_tpl->tpl_vars['one']->value['about_url'])) {?>
             <a href="<?php echo $_smarty_tpl->tpl_vars['one']->value['about_url'];?>
" title="<?php echo lang_by_realm('tags','viewabout');?>
"><?php echo lang('about');?>
</a>
           <?php }?>
         </td>
       </tr>
      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

      </tbody>
    </table>
  <?php }?>
</div><?php }
}
