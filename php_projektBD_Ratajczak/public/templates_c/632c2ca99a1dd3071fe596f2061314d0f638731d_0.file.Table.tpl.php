<?php
/* Smarty version 4.2.1, created on 2023-06-17 03:08:25
  from 'D:\Studia\V. sem\AS\htdocs\Projektowanie-Systemow-Sieciowych\php_projektBD_Ratajczak\app\views\Table.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_648d0789149a56_30424362',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '632c2ca99a1dd3071fe596f2061314d0f638731d' => 
    array (
      0 => 'D:\\Studia\\V. sem\\AS\\htdocs\\Projektowanie-Systemow-Sieciowych\\php_projektBD_Ratajczak\\app\\views\\Table.tpl',
      1 => 1686247030,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_648d0789149a56_30424362 (Smarty_Internal_Template $_smarty_tpl) {
?><table class="alt">
        <thead>
		    <tr>
                <th>Typ</th>
                <th>Model</th>
                <th>Data Prod.</th>
                <th>Cena</th>
            <?php if (\core\RoleUtils::inRole('admin') || \core\RoleUtils::inRole('user')) {?>
                <th>Opcje</th>
            <?php }?>
            <?php if (\core\RoleUtils::inRole('admin')) {?>
                <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
addCanoeShow" method="post">
                    <div class="inner"><button class="button small" type="submit">+ Nowy</button></div>
                </form>
            <?php }?>
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
                    <tr><td><?php echo $_smarty_tpl->tpl_vars['canoe']->value["type"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['canoe']->value["model"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['canoe']->value["production_date"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['canoe']->value["price"];?>
</td><td><?php if (\core\RoleUtils::inRole('admin')) {?><form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
deleteCanoe" method="post"><button class="button small" name="buttonValue" type="submit" value=<?php echo $_smarty_tpl->tpl_vars['canoe']->value['id_canoe'];?>
>Usuń</button></form><?php }
if (\core\RoleUtils::inRole('user')) {
if (empty($_smarty_tpl->tpl_vars['canoe']->value['id_rent'])) {?><form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
processBooking" method="post"><button class="button small" name="buttonValue" type="submit" value=<?php echo $_smarty_tpl->tpl_vars['canoe']->value['id_canoe'];?>
>Wypożycz</button></form><?php } else { ?><h4>Wypożyczony.</h4><?php }
}?></td></tr>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <?php } else { ?>
                <td>Brak zawartości do wyświetlenia.</td>
            <?php }?>
        </tbody>
</table>
<?php }
}
