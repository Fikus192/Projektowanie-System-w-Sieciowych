<?php
/* Smarty version 4.2.1, created on 2023-06-17 03:08:36
  from 'D:\Studia\V. sem\AS\htdocs\Projektowanie-Systemow-Sieciowych\php_projektBD_Ratajczak\app\views\LoginView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_648d0794de7ba6_02768970',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1b5c13beb6280b78db4f1cba9862833530d07b6f' => 
    array (
      0 => 'D:\\Studia\\V. sem\\AS\\htdocs\\Projektowanie-Systemow-Sieciowych\\php_projektBD_Ratajczak\\app\\views\\LoginView.tpl',
      1 => 1686232685,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:menu.tpl' => 1,
  ),
),false)) {
function content_648d0794de7ba6_02768970 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1175914066648d0794ddff33_66711591', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_1175914066648d0794ddff33_66711591 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1175914066648d0794ddff33_66711591',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<?php $_smarty_tpl->_subTemplateRender('file:menu.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div style="width:90%; margin: 2em auto;">

<section>
        <h3>Wprowadź dane do logowania</h3>
        <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
login">
                <div class="row gtr-uniform gtr-50">
                        <div class="col-12 col-12-xsmall">
                            <input id="id_login" type="text" name="login" placeholder="Login" />
                        </div>
                        <div class="col-12 col-12-xsmall">
                               <input id="id_pass" type="password" name="pass" placeholder="Hasło" />
                        </div>
                        <div class="col-12">
                                <ul class="actions">
                                    <li><input type="submit" value="Zaloguj" class="primary" /></li></form>
                                    <li><form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
registerShow" method="post"><input type="submit" value="Załóż konto" class="button" /></form></li>      
                                </ul>
                        </div>
                </div>
        </form>

</section>

</div>
<?php
}
}
/* {/block 'content'} */
}
