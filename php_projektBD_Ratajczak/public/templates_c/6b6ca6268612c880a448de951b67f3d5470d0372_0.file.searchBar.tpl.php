<?php
/* Smarty version 4.2.1, created on 2023-06-17 03:08:24
  from 'D:\Studia\V. sem\AS\htdocs\Projektowanie-Systemow-Sieciowych\php_projektBD_Ratajczak\app\views\templates\searchBar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_648d0788e87636_43946867',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6b6ca6268612c880a448de951b67f3d5470d0372' => 
    array (
      0 => 'D:\\Studia\\V. sem\\AS\\htdocs\\Projektowanie-Systemow-Sieciowych\\php_projektBD_Ratajczak\\app\\views\\templates\\searchBar.tpl',
      1 => 1686958266,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_648d0788e87636_43946867 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="col-6 col-12-xsmall" style="width:250px; margin-left:20px;">
    <select name="typeSelect" id="typeSelect">
        <option value="0">Typ:</option>
        <?php if (!empty($_smarty_tpl->tpl_vars['typesData']->value)) {?>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['typesData']->value, 'type');
$_smarty_tpl->tpl_vars['type']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['type']->value) {
$_smarty_tpl->tpl_vars['type']->do_else = false;
?>
                <option value=<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
><?php echo $_smarty_tpl->tpl_vars['type']->value;?>
</option>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        <?php }?>
    </select>
</div>
<div class="col-6 col-12-xsmall" style="width:250px; margin-left:30px;">
    <select name="modelSelect" id="modelSelect">
        <option value="0">Model:</option>
        <?php if (!empty($_smarty_tpl->tpl_vars['modelsData']->value)) {?>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['modelsData']->value, 'model');
$_smarty_tpl->tpl_vars['model']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['model']->value) {
$_smarty_tpl->tpl_vars['model']->do_else = false;
?>
                <option value=<?php echo $_smarty_tpl->tpl_vars['model']->value;?>
><?php echo $_smarty_tpl->tpl_vars['model']->value;?>
</option>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        <?php }?>
    </select>
</div>
<div class="col-6 col-12-xsmall" style="width:250px; margin-left:30px;">
    <select name="productionDateSelect" id="productionDateSelect">
        <option value="0">Data Prod.:</option>
        <?php if (!empty($_smarty_tpl->tpl_vars['productionDatesData']->value)) {?>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['productionDatesData']->value, 'productionDate');
$_smarty_tpl->tpl_vars['productionDate']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['productionDate']->value) {
$_smarty_tpl->tpl_vars['productionDate']->do_else = false;
?>
                <option value=<?php echo $_smarty_tpl->tpl_vars['productionDate']->value;?>
><?php echo $_smarty_tpl->tpl_vars['productionDate']->value;?>
</option>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        <?php }?>
    </select>
</div>
<div class="col-6 col-12-xsmall" style="width:250px; margin-left:30px;">
    <select name="priceSelect" id="priceSelect">
        <option value="0">Cena:</option>
        <?php if (!empty($_smarty_tpl->tpl_vars['pricesData']->value)) {?>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['pricesData']->value, 'price');
$_smarty_tpl->tpl_vars['price']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['price']->value) {
$_smarty_tpl->tpl_vars['price']->do_else = false;
?>
                <option value=<?php echo $_smarty_tpl->tpl_vars['price']->value;?>
><?php echo $_smarty_tpl->tpl_vars['price']->value;?>
</option>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        <?php }?>
    </select>
</div>
<button class="button" style="width:250px; height:59px; margin-left:150px;" type="submit" name="buttonValue" value="search">Szukaj</button>
<button class="button primary" style="width:250px; height:59px; margin-left:20px;" type="submit" name="buttonValue" value="reset">Resetuj</button>
<?php }
}
