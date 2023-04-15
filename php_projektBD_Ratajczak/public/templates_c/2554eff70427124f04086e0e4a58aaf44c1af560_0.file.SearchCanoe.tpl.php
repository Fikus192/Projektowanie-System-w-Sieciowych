<?php
/* Smarty version 4.1.0, created on 2023-04-15 19:51:40
  from 'D:\Studia\V. sem\AS\htdocs\php_projektBD_Ratajczak\app\views\SearchCanoe.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_643ae42cb96bd6_28107884',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2554eff70427124f04086e0e4a58aaf44c1af560' => 
    array (
      0 => 'D:\\Studia\\V. sem\\AS\\htdocs\\php_projektBD_Ratajczak\\app\\views\\SearchCanoe.tpl',
      1 => 1681580971,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_643ae42cb96bd6_28107884 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1144535300643ae42cb824f1_24598942', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'messages'} */
class Block_542041295643ae42cb8fb15_05136137 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<?php if ($_smarty_tpl->tpl_vars['msgs']->value->isMessage()) {?>
<div class="messages bottom-margin">
	<ul>
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getMessages(), 'msg');
$_smarty_tpl->tpl_vars['msg']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['msg']->value) {
$_smarty_tpl->tpl_vars['msg']->do_else = false;
?>
	<li class="msg <?php if ($_smarty_tpl->tpl_vars['msg']->value->isError()) {?>error bottom-margin<?php }?> <?php if ($_smarty_tpl->tpl_vars['msg']->value->isWarning()) {?>info bottom-margin<?php }?> <?php if ($_smarty_tpl->tpl_vars['msg']->value->isInfo()) {?>info bottom-margin<?php }?>"><?php echo $_smarty_tpl->tpl_vars['msg']->value->text;?>
</li>
	<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	</ul>
</div>
<?php }?>
	
<?php
}
}
/* {/block 'messages'} */
/* {block 'content'} */
class Block_1144535300643ae42cb824f1_24598942 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1144535300643ae42cb824f1_24598942',
  ),
  'messages' => 
  array (
    0 => 'Block_542041295643ae42cb8fb15_05136137',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<div style="width: 90%; margin: 2em auto;">

<div class="pure-menu pure-menu-horizontal bottom-margin">
	<span style="float:bottom;">Użytkownik: <?php echo $_smarty_tpl->tpl_vars['user']->value->login;?>
</span>
</div>

<form method="post" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
searchCanoe">
	<legend>Opcje wyszukiwania</legend>
	<fieldset>
		<input type="text" placeholder="Model" name="model" value="<?php echo $_smarty_tpl->tpl_vars['searchForm']->value->model;?>
" /><br />
		<button type="submit" class="pure-button pure-button-primary">Filtruj</button>
	</fieldset>
</form>
</div>	

<div class="pure-menu pure-menu-horizontal bottom-margin">
	<a class="pure-button button-success" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
canoeNew">+ Nowy kajak</a>
</div>	

<table id="tab_canoe" class="pure-table pure-table-bordered">
<thead>
	<tr>
		<th>Typ</th>
		<th>Model</th>
		<th>Data prod.</th>
		<th>Cena</th>
		<th>Opcje</th>
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
</td><td><?php echo $_smarty_tpl->tpl_vars['c']->value["production_date"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['c']->value["price"];?>
</td><td><a class="button-small pure-button button-secondary" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
canoeEdit/<?php echo $_smarty_tpl->tpl_vars['p']->value['id_canoe'];?>
">Edytuj</a>&nbsp;<a class="button-small pure-button button-warning" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
canoeDelete/<?php echo $_smarty_tpl->tpl_vars['p']->value['id_canoe'];?>
">Usuń</a></td></tr>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</tbody>
</table>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_542041295643ae42cb8fb15_05136137', 'messages', $this->tplIndex);
?>


</div>

<?php
}
}
/* {/block 'content'} */
}
