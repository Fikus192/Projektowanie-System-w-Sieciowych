<?php
/* Smarty version 4.2.1, created on 2023-06-17 03:08:24
  from 'D:\Studia\V. sem\AS\htdocs\Projektowanie-Systemow-Sieciowych\php_projektBD_Ratajczak\app\views\HomePage.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_648d0788953ec2_27430601',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ceb78b35235c1e6187de9470617df36e2a69d72a' => 
    array (
      0 => 'D:\\Studia\\V. sem\\AS\\htdocs\\Projektowanie-Systemow-Sieciowych\\php_projektBD_Ratajczak\\app\\views\\HomePage.tpl',
      1 => 1686957499,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:menu.tpl' => 1,
    'file:searchBar.tpl' => 1,
    'file:Table.tpl' => 1,
  ),
),false)) {
function content_648d0788953ec2_27430601 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_245760231648d0788940829_79855546', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_245760231648d0788940829_79855546 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_245760231648d0788940829_79855546',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    
<?php $_smarty_tpl->_subTemplateRender('file:menu.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                                                      
<header class="major">    
    <h2><?php echo $_smarty_tpl->tpl_vars['page_title']->value;?>
</h2>
    <hr>
    <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
processFiltering" method="post">
        <ul class="actions">
            <?php $_smarty_tpl->_subTemplateRender('file:searchBar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        </ul>
    </form>

<div class="table-wrapper" id="table">
    <?php $_smarty_tpl->_subTemplateRender("file:Table.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</div>
  

<div class="pagination">
  <button class="button small" onclick="selectPage(<?php echo $_smarty_tpl->tpl_vars['pagination']->value->currentPage-1;?>
, '<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
selectPage', 'table');">&laquo;</button>

    <?php
$_smarty_tpl->tpl_vars['counter'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['counter']->step = 1;$_smarty_tpl->tpl_vars['counter']->total = (int) ceil(($_smarty_tpl->tpl_vars['counter']->step > 0 ? ($_smarty_tpl->tpl_vars['pagination']->value->lastPage)+1 - (($_smarty_tpl->tpl_vars['pagination']->value->firstPage)) : ($_smarty_tpl->tpl_vars['pagination']->value->firstPage)-(($_smarty_tpl->tpl_vars['pagination']->value->lastPage))+1)/abs($_smarty_tpl->tpl_vars['counter']->step));
if ($_smarty_tpl->tpl_vars['counter']->total > 0) {
for ($_smarty_tpl->tpl_vars['counter']->value = ($_smarty_tpl->tpl_vars['pagination']->value->firstPage), $_smarty_tpl->tpl_vars['counter']->iteration = 1;$_smarty_tpl->tpl_vars['counter']->iteration <= $_smarty_tpl->tpl_vars['counter']->total;$_smarty_tpl->tpl_vars['counter']->value += $_smarty_tpl->tpl_vars['counter']->step, $_smarty_tpl->tpl_vars['counter']->iteration++) {
$_smarty_tpl->tpl_vars['counter']->first = $_smarty_tpl->tpl_vars['counter']->iteration === 1;$_smarty_tpl->tpl_vars['counter']->last = $_smarty_tpl->tpl_vars['counter']->iteration === $_smarty_tpl->tpl_vars['counter']->total;?>
      <?php if ($_smarty_tpl->tpl_vars['pagination']->value->currentPage == $_smarty_tpl->tpl_vars['counter']->value) {?>
        <button class="button small"><?php echo $_smarty_tpl->tpl_vars['counter']->value+1;?>
</button>
      <?php } else { ?>
        <button class="button small" onclick="selectPage(<?php echo $_smarty_tpl->tpl_vars['counter']->value;?>
, '<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
selectPage', 'table');"><?php echo $_smarty_tpl->tpl_vars['counter']->value+1;?>
</button>
      <?php }?>
    <?php }
}
?>

  <button class="button small" onclick="selectPage(<?php echo $_smarty_tpl->tpl_vars['pagination']->value->currentPage+1;?>
, '<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
selectPage', 'table');">&raquo;</button>
</div>

    <hr>                  

</header>  
<?php
}
}
/* {/block 'content'} */
}
