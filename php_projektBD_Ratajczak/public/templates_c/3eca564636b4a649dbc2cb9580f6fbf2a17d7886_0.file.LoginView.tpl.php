<?php
/* Smarty version 4.1.0, created on 2023-01-27 23:14:00
  from 'D:\Studia\V. sem\AS\htdocs\php_projektBD_Ratajczak\app\views\LoginView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_63d44ca8d970a5_38625468',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3eca564636b4a649dbc2cb9580f6fbf2a17d7886' => 
    array (
      0 => 'D:\\Studia\\V. sem\\AS\\htdocs\\php_projektBD_Ratajczak\\app\\views\\LoginView.tpl',
      1 => 1674857638,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63d44ca8d970a5_38625468 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_48094052963d44ca8d91380_24433408', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_48094052963d44ca8d91380_24433408 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_48094052963d44ca8d91380_24433408',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<h2 class="content-head is-center">Logowanie do systemu</h2>	

<form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
login" method="post">
	<fieldset>
	<div class="row gtr-uniform gtr-50">
        <div class="col-6 col-12-xsmall">
			<label for="id_login">Login: </label>
			<input id="id_login" type="text" name="login" placeholder="Login"/>
		</div>
        <div class="col-6 col-12-xsmall">
			<label for="id_pass">Password: </label>
			<input id="id_pass" type="password" name="pass" placeholder="Hasło" /><br />
		</div>
		<div class="col-12">
			<ul class="actions">
				<li><input type="submit" value="Zaloguj" class="primary" /></li><br />
				<li><form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
register" method="post"><input type="submit" value="Załóż konto" class="button" /></form></li>
			</ul>	
		</div>
	</div>
	</fieldset>
</form>	

<?php
}
}
/* {/block 'content'} */
}
