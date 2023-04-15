<?php
/* Smarty version 4.1.0, created on 2023-04-15 17:08:20
  from 'D:\Studia\V. sem\AS\htdocs\php_projektBD_Ratajczak\app\views\CanoeEdit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_643abde4010599_61940997',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '65e6b88321d3b9a699c9631d4859ed1f3c0efac2' => 
    array (
      0 => 'D:\\Studia\\V. sem\\AS\\htdocs\\php_projektBD_Ratajczak\\app\\views\\CanoeEdit.tpl',
      1 => 1681571296,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_643abde4010599_61940997 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1541016770643abde400a709_61763245', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_1541016770643abde400a709_61763245 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1541016770643abde400a709_61763245',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<div class="pure-menu pure-menu-horizontal bottom-margin">
<form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
canoeEdit" method="post" class="pure-form pure-form-aligned">
	<fieldset>
		<legend>Dane kajaka</legend>
		<div class="col-6 col-12-xsmall">
            <label for="type">Typ</label>
            <input id="type" type="text" placeholder="Typ" name="type" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->type;?>
">
        </div>
		<div class="col-6 col-12-xsmall">
            <label for="model">Model</label>
            <input id="model" type="text" placeholder="Model" name="model" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->model;?>
">
        </div>
		<div class="col-6 col-12-xsmall">
            <label for="production_date">Data prod.</label>
            <input id="production_date" type="text" placeholder="Data prod." name="production_date" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->production_date;?>
">
        </div>
        <div class="col-6 col-12-xsmall">
            <label for="price">Cena</label>
            <input id="price" type="text" placeholder="Cena" name="price" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->price;?>
">
        </div>
		<div class="col-12">
            <ul class="actions">
			    <li><input type="submit" value="Zapisz" class="primary" /></li>
			<a class="pure-button button-secondary" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
searchCanoe">Powrót</a>
		</div>
	    </fieldset>
    <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->id;?>
">
</form>	
</div>

<?php
}
}
/* {/block 'content'} */
}
