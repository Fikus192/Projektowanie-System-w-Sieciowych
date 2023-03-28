<?php
/* Smarty version 4.1.0, created on 2023-01-27 22:44:13
  from 'D:\Studia\V. sem\AS\htdocs\php_projektBD_Ratajczak\app\views\CanoeList.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_63d445adf3e106_27914615',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '74e4a47a256b603307977743ce4b0de0947e30fc' => 
    array (
      0 => 'D:\\Studia\\V. sem\\AS\\htdocs\\php_projektBD_Ratajczak\\app\\views\\CanoeList.tpl',
      1 => 1674855063,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63d445adf3e106_27914615 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_37537534363d445ade7a416_55513610', 'content');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_118608312563d445adeb0c33_01532963', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_37537534363d445ade7a416_55513610 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_37537534363d445ade7a416_55513610',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<div class="pure-menu pure-menu-horizontal bottom-margin">
	<span style="float:bottom;">Użytkownik: <?php echo $_smarty_tpl->tpl_vars['user']->value->login;?>
</span>
</div>

<form method="post" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
canoeList">
	<legend>Opcje wyszukiwania</legend>
	<fieldset>
		<input type="text" placeholder="Model" name="model" value="<?php echo $_smarty_tpl->tpl_vars['searchForm']->value->model;?>
" /><br />
		<button type="submit" class="pure-button pure-button-primary">Filtruj</button>
	</fieldset>
</form>
</div>	

<?php
}
}
/* {/block 'content'} */
/* {block 'content'} */
class Block_118608312563d445adeb0c33_01532963 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_118608312563d445adeb0c33_01532963',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<div class="pure-menu pure-menu-horizontal bottom-margin">
	<a class="pure-button button-success" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
canoeNew">+ Nowy kajak</a>
</div>	

<table id="tab_canoe" class="pure-table pure-table-bordered">
<thead>
	<tr>
		<th>typ</th>
		<th>model</th>
		<th>data prod.</th>
		<th>cena</th>
		<th>opcje</th>
	</tr>
</thead>
<tbody>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['canoe']->value, 'c');
$_smarty_tpl->tpl_vars['c']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['c']->value) {
$_smarty_tpl->tpl_vars['c']->do_else = false;
?>
<tr><td><?php echo $_smarty_tpl->tpl_vars['c']->value["type"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['c']->value["model"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['c']->value["productiondate"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['c']->value["price"];?>
</td><td><a class="button-small pure-button button-secondary" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
canoeEdit/<?php echo $_smarty_tpl->tpl_vars['p']->value['ID_Canoe'];?>
">Edytuj</a>&nbsp;<a class="button-small pure-button button-warning" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
canoeDelete/<?php echo $_smarty_tpl->tpl_vars['p']->value['ID_Canoe'];?>
">Usuń</a></td></tr>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</tbody>
</table>

<?php
}
}
/* {/block 'content'} */
}
