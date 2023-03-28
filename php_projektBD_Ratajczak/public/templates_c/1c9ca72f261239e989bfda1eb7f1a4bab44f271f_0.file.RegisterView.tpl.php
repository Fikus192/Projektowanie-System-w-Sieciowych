<?php
/* Smarty version 4.1.0, created on 2023-03-28 21:45:33
  from 'D:\Studia\V. sem\AS\htdocs\php_projektBD_Ratajczak\app\views\RegisterView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_642343dd752527_64605552',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1c9ca72f261239e989bfda1eb7f1a4bab44f271f' => 
    array (
      0 => 'D:\\Studia\\V. sem\\AS\\htdocs\\php_projektBD_Ratajczak\\app\\views\\RegisterView.tpl',
      1 => 1679957310,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_642343dd752527_64605552 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19689771642343dd74c054_07096265', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_19689771642343dd74c054_07096265 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_19689771642343dd74c054_07096265',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<h2 class="content-head is-center">Rejestracja do systemu</h2>	

<form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
register" method="post">
	<fieldset>
	<div class="row gtr-uniform gtr-50">
        <div class="col-12 col-6-xsmall">
			<label for="id_login">Login: </label>
			<input id="id_login" type="text" name="login" placeholder="Login"/>
		</div>
        <div class="col-6 col-12-xsmall">
			<label for="id_pass">Hasło: </label>
			<input id="id_pass" type="password" name="pass" placeholder="Hasło" /><br />
		</div>
        <div class="col-6 col-12-xsmall">
			<label for="id_repeat_pass">Powtórz hasło: </label>
			<input id="id_repeat_pass" type="password" name="repeat_pass" placeholder="Powtórz hasło" /><br />
		</div>
        <div class="col-12 col-6-xsmall">
			<label for="id_email">Email: </label>
			<input id="id_email" type="email" name="email" placeholder="Email" /><br />
		</div>
        <div class="col-12 col-6-xsmall">
			<label for="id_phone_number">Numer telefonu: </label>
			<input id="id_phone_number" type="phone_number" name="phone_number" placeholder="Phone Number" /><br />
		</div>
		<div class="col-12">
			<ul class="actions">
				<li><input type="submit" value="Zarejestruj się" class="primary" /> <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
login" class="button">Wróć</a></li>
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
