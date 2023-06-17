<?php
/* Smarty version 4.2.1, created on 2023-06-17 03:08:24
  from 'D:\Studia\V. sem\AS\htdocs\Projektowanie-Systemow-Sieciowych\php_projektBD_Ratajczak\app\views\templates\menu.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_648d0788d65856_90527605',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4c96115cc4282f93823f7cd84361cce0cef69596' => 
    array (
      0 => 'D:\\Studia\\V. sem\\AS\\htdocs\\Projektowanie-Systemow-Sieciowych\\php_projektBD_Ratajczak\\app\\views\\templates\\menu.tpl',
      1 => 1686610028,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_648d0788d65856_90527605 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('inRoleAdmin', \core\RoleUtils::inRole('admin') ,true);
$_smarty_tpl->_assignInScope('inRoleUser', \core\RoleUtils::inRole('user') ,true);?>

<header id="header">
    <h1 id="logo"><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
homePage">Wypożyczalnia Kajaków</a></h1>
    <nav id="nav">
        <ul>
            <?php if ($_smarty_tpl->tpl_vars['inRoleUser']->value || $_smarty_tpl->tpl_vars['inRoleAdmin']->value) {?>
                <?php if ($_smarty_tpl->tpl_vars['inRoleAdmin']->value) {?>
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
manageAccountsShow">Konta</a></li>
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
manageProductsShow">Produkty</a></li>
                <?php } else { ?>
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
reservationsShow">Rezerwacje</a></li>
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
accountShow">Ustawienia</a></li>
		        <?php }?>

                        <li><a class="button primary" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
logout">Wyloguj się</a></li>
                <?php } else { ?>
		        <li class="active"><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
registerShow">Zarejestruj się</a></li>
    		        <li><a class="button primary" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
loginShow">Zaloguj się</a></li>
	        <?php }?>		
	    </ul>
    </nav>    
</header><?php }
}
