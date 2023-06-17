<?php
/* Smarty version 4.2.1, created on 2023-06-17 03:09:03
  from 'D:\Studia\V. sem\AS\htdocs\Projektowanie-Systemow-Sieciowych\php_projektBD_Ratajczak\app\views\ReservationsView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_648d07af72a5b7_21073408',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0bfd93ee3f1cd1c92fbce8457aa541b4d09ad808' => 
    array (
      0 => 'D:\\Studia\\V. sem\\AS\\htdocs\\Projektowanie-Systemow-Sieciowych\\php_projektBD_Ratajczak\\app\\views\\ReservationsView.tpl',
      1 => 1686247297,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:menu.tpl' => 1,
    'file:searchBar.tpl' => 1,
  ),
),false)) {
function content_648d07af72a5b7_21073408 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_831134377648d07af713d50_95072262', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'main.tpl');
}
/* {block 'content'} */
class Block_831134377648d07af713d50_95072262 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_831134377648d07af713d50_95072262',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<?php $_smarty_tpl->_subTemplateRender('file:menu.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
reservationsProcessFiltering" method="post" class="">
    <ul class="actions">
        <?php $_smarty_tpl->_subTemplateRender('file:searchBar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </ul>
</form>

<div class="table-wrapper">
<table class="alt">
        <thead>
		    <tr>
                <th>ID Rezerwacji</th>
                <th>Typ</th>
                <th>Model</th>
                <th>Data Prod.</th>
                <th>Cena</th>
                <th>Opcje</th>
            </tr>
        </thead>
        <tbody>
            <?php if (!empty($_smarty_tpl->tpl_vars['data']->value)) {?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'canoe');
$_smarty_tpl->tpl_vars['canoe']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['canoe']->value) {
$_smarty_tpl->tpl_vars['canoe']->do_else = false;
?>
                    <tr><td><?php echo $_smarty_tpl->tpl_vars['canoe']->value["id_rent"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['canoe']->value["type"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['canoe']->value["model"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['canoe']->value["production_date"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['canoe']->value["price"];?>
</td><td><?php if (!empty($_smarty_tpl->tpl_vars['canoe']->value['id_rent'])) {?><form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
processReturned" method="post"><button class="button small" name="buttonValue" type="submit" value=<?php echo $_smarty_tpl->tpl_vars['canoe']->value['id_canoe'];?>
>Zwróć</button></form><?php }?></td></tr>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <?php } else { ?>
                <h4>Brak zawartości do wyświetlenia.</h4>
            <?php }?>
        </tbody>
</table>
</div>

<?php
}
}
/* {/block 'content'} */
}
