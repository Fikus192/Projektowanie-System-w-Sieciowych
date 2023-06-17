<?php
/* Smarty version 4.2.1, created on 2023-06-17 03:08:45
  from 'D:\Studia\V. sem\AS\htdocs\Projektowanie-Systemow-Sieciowych\php_projektBD_Ratajczak\app\views\ManageAccountsView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_648d079d8f8ad8_49838356',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f7777027fab07b58a89c33ec6aa5a63d95e8b216' => 
    array (
      0 => 'D:\\Studia\\V. sem\\AS\\htdocs\\Projektowanie-Systemow-Sieciowych\\php_projektBD_Ratajczak\\app\\views\\ManageAccountsView.tpl',
      1 => 1686243006,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:menu.tpl' => 1,
  ),
),false)) {
function content_648d079d8f8ad8_49838356 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1098256093648d079d8e32f5_24212663', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'main.tpl');
}
/* {block 'content'} */
class Block_1098256093648d079d8e32f5_24212663 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1098256093648d079d8e32f5_24212663',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<?php $_smarty_tpl->_subTemplateRender('file:menu.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="table-wrapper">
<table class="alt">
        <thead>
		    <tr>
                <th>ID</th>
                <th>Login</th>
                <th>Hasło</th>
                <th>E-mail</th>
                <th>Numer Telefonu</th>
                <th>Opcje</th>
            </tr>
        </thead>
        <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
addUserShow" method="post">
            <div class="inner"><button class="button small" type="submit">+ Nowy</button></div>
        </form>
        <tbody>
            <?php if (!empty($_smarty_tpl->tpl_vars['data']->value)) {?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'user');
$_smarty_tpl->tpl_vars['user']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['user']->value) {
$_smarty_tpl->tpl_vars['user']->do_else = false;
?>
                    <tr><td><?php echo $_smarty_tpl->tpl_vars['user']->value["id_user"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['user']->value["login"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['user']->value["pass"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['user']->value["email"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['user']->value["phone_number"];?>
</td><td><form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
resetPassword" method="post"><button class="button small" name="buttonValue" type="submit" value=<?php echo $_smarty_tpl->tpl_vars['user']->value['id_user'];?>
>Zresetuj hasło</button></form><form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
deleteUser" method="post"><button class="button small" name="buttonValue" type="submit" value=<?php echo $_smarty_tpl->tpl_vars['user']->value['id_user'];?>
>Usuń</button></form></td></tr>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <?php } else { ?>
                <td>Brak zawartości do wyświetlenia.</td>
            <?php }?>
        </tbody>
</table>
</div>

<?php
}
}
/* {/block 'content'} */
}
