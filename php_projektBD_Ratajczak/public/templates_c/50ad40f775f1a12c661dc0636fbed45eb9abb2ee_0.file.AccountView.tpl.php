<?php
/* Smarty version 4.2.1, created on 2023-06-17 03:09:06
  from 'D:\Studia\V. sem\AS\htdocs\Projektowanie-Systemow-Sieciowych\php_projektBD_Ratajczak\app\views\AccountView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_648d07b29debb0_00423936',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '50ad40f775f1a12c661dc0636fbed45eb9abb2ee' => 
    array (
      0 => 'D:\\Studia\\V. sem\\AS\\htdocs\\Projektowanie-Systemow-Sieciowych\\php_projektBD_Ratajczak\\app\\views\\AccountView.tpl',
      1 => 1686604820,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:menu.tpl' => 1,
  ),
),false)) {
function content_648d07b29debb0_00423936 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1195228884648d07b29d82a7_29203851', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_1195228884648d07b29d82a7_29203851 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1195228884648d07b29d82a7_29203851',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<?php $_smarty_tpl->_subTemplateRender('file:menu.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div style="width:90%; margin: 2em auto;">

<section>
        <h3><?php echo $_smarty_tpl->tpl_vars['page_title']->value;?>
</h3>
        <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
accountUpdate">
                <div class="row gtr-uniform gtr-50">
                        <div class="col-12 col-12-xsmall">
                            <input id="id_pass" type="password" name="pass" placeholder="Nowe hasło:" />
                        </div>
                        <div class="col-12 col-12-xsmall">
                               <input id="id_repeat_pass" type="password" name="repeat_pass" placeholder="Powtórz hasło:" />
                        </div>
			<div class="col-12 col-12-xsmall">
                               <input id="id_email" type="email" name="email" placeholder="Nowy adres e-mail:" />
                        </div>
			<div class="col-12 col-12-xsmall">
                               <input id="id_phone_number" type="text" name="phone_number" placeholder="Nowy numer telefonu:" />
                        </div>
                        <div class="col-12">
                                <ul class="actions">
                                    <li><input type="submit" value="Zaktualizuj" class="primary" /></li>
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
