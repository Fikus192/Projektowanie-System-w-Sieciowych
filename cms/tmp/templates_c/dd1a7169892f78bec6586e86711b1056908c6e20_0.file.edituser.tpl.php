<?php
/* Smarty version 3.1.31, created on 2023-05-26 19:19:59
  from "D:\Studia\V. sem\AS\htdocs\cms\admin\templates\edituser.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_6470ea3fc32d80_67055186',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dd1a7169892f78bec6586e86711b1056908c6e20' => 
    array (
      0 => 'D:\\Studia\\V. sem\\AS\\htdocs\\cms\\admin\\templates\\edituser.tpl',
      1 => 1685108121,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6470ea3fc32d80_67055186 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_form_start')) require_once 'D:\\Studia\\V. sem\\AS\\htdocs\\cms\\lib\\plugins\\function.form_start.php';
if (!is_callable('smarty_function_tab_header')) require_once 'D:\\Studia\\V. sem\\AS\\htdocs\\cms\\admin\\plugins\\function.tab_header.php';
if (!is_callable('smarty_function_tab_start')) require_once 'D:\\Studia\\V. sem\\AS\\htdocs\\cms\\admin\\plugins\\function.tab_start.php';
if (!is_callable('smarty_function_cms_help')) require_once 'D:\\Studia\\V. sem\\AS\\htdocs\\cms\\admin\\plugins\\function.cms_help.php';
if (!is_callable('smarty_function_html_options')) require_once 'D:\\Studia\\V. sem\\AS\\htdocs\\cms\\lib\\smarty\\plugins\\function.html_options.php';
if (!is_callable('smarty_function_tab_end')) require_once 'D:\\Studia\\V. sem\\AS\\htdocs\\cms\\admin\\plugins\\function.tab_end.php';
if (!is_callable('smarty_function_form_end')) require_once 'D:\\Studia\\V. sem\\AS\\htdocs\\cms\\lib\\plugins\\function.form_end.php';
echo '<script'; ?>
 type="text/javascript">
$(document).ready(function(){
    $(document).on('click', '#submit', function(){
        return confirm('<?php echo strtr(lang('confirm_edituser'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
');
    });

    //<?php if ($_smarty_tpl->tpl_vars['manage_users']->value == true) {?>

    $('#copyusersettings').change(function () {
        var v = $(this).val();
        if (v == -1) {
             $('#clearusersettings').removeAttr('disabled');
         } else {
             $('#clearusersettings').attr('disabled', 'disabled');
         }
     });

     $('#clearusersettings').click(function () {
         $('#copyusersettings').val(-1);

         var v = $(this).attr('checked');
         if (v == 'checked') {
             $('#copyusersettings').attr('disabled', 'disabled');
         } else {
             $('#copyusersettings').removeAttr('disabled');
         }
    });
    //<?php }?>

});
<?php echo '</script'; ?>
>
<div class="pagecontainer">
    <h3><?php echo lang('edituser');
if ($_smarty_tpl->tpl_vars['user']->value != '') {?>&nbsp;<?php echo $_smarty_tpl->tpl_vars['user']->value;
}?></h3>

    <?php echo smarty_function_form_start(array('url'=>'edituser.php'),$_smarty_tpl);?>

        <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['user_id']->value;?>
" name="user_id" />

        <?php echo smarty_function_tab_header(array('name'=>'user','label'=>lang('profile')),$_smarty_tpl);?>

        <?php if (isset($_smarty_tpl->tpl_vars['groups']->value)) {?>
            <?php echo smarty_function_tab_header(array('name'=>'groups','label'=>lang('groups')),$_smarty_tpl);?>

        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['manage_users']->value == true) {?>
            <?php echo smarty_function_tab_header(array('name'=>'settings','label'=>lang('settings')),$_smarty_tpl);?>

        <?php }?>

        <!-- user profile -->
        <?php echo smarty_function_tab_start(array('name'=>'user'),$_smarty_tpl);?>

        <div class="pageoverflow">
            <p class="pagetext">
                <label for="username"><?php echo lang('name');?>
:</label>&nbsp;<?php echo smarty_function_cms_help(array('realm'=>'admin','key'=>'info_adduser_username','title'=>lang('name')),$_smarty_tpl);?>

            </p>
            <p class="pageinput">
                <input type="text" id="username" name="user" maxlength="25" value="<?php echo $_smarty_tpl->tpl_vars['user']->value;?>
" class="standard"/>
            </p>
        </div>
        <div class="pageoverflow">
            <p class="pagetext">
                <label for="password"><?php echo lang('password');?>
:</label>&nbsp;<?php echo smarty_function_cms_help(array('realm'=>'admin','key'=>'info_edituser_password','title'=>lang('password')),$_smarty_tpl);?>

            </p>
            <p class="pageinput">
                <input type="password" id="password" name="password" maxlength="100" value="" class="standard"/>
                <br />
                <?php echo lang('info_edituser_password');?>

            </p>
        </div>
        <div class="pageoverflow">
            <p class="pagetext">
                <label for="passwordagain"><?php echo lang('passwordagain');?>
:</label>&nbsp;<?php echo smarty_function_cms_help(array('realm'=>'admin','key'=>'info_edituser_passwordagain','title'=>lang('passwordagain')),$_smarty_tpl);?>

            </p>
            <p class="pageinput">
                <input id="passwordagain" type="password" name="passwordagain" maxlength="100" value="" class="standard"/>
                <br />
                <?php echo lang('info_edituser_passwordagain');?>

            </p>
        </div>
        <div class="pageoverflow">
            <p class="pagetext">
                <label for="firstname"><?php echo lang('firstname');?>
:</label>&nbsp;<?php echo smarty_function_cms_help(array('key2'=>'help_myaccount_firstname','title'=>lang('firstname')),$_smarty_tpl);?>

            </p>
            <p class="pageinput">
                <input id="firstname" type="text" name="firstname" maxlength="50" value="<?php echo $_smarty_tpl->tpl_vars['firstname']->value;?>
" class="standard"/>
            </p>
        </div>
        <div class="pageoverflow">
            <p class="pagetext">
                <label for="lastname"><?php echo lang('lastname');?>
:</label>&nbsp;<?php echo smarty_function_cms_help(array('key2'=>'help_myaccount_lastname','title'=>lang('lastname')),$_smarty_tpl);?>

            </p>
            <p class="pageinput">
                <input id="lastname" type="text" name="lastname" maxlength="50" value="<?php echo $_smarty_tpl->tpl_vars['lastname']->value;?>
" class="standard"/>
            </p>
        </div>
        <div class="pageoverflow">
            <p class="pagetext">
                <label for="email"><?php echo lang('email');?>
:</label>&nbsp;<?php echo smarty_function_cms_help(array('key2'=>'help_myaccount_email','title'=>lang('email')),$_smarty_tpl);?>

            </p>
            <p class="pageinput">
                <input id="email" type="text" name="email" maxlength="255" value="<?php echo $_smarty_tpl->tpl_vars['email']->value;?>
" class="standard"/>
            </p>
        </div>

        <?php if (!$_smarty_tpl->tpl_vars['access_user']->value) {?>
        <div class="pageoverflow">
            <p class="pagetext">
                <label for="active"><?php echo lang('active');?>
:</label>&nbsp;<?php echo smarty_function_cms_help(array('realm'=>'admin','key'=>'info_user_active','title'=>lang('active')),$_smarty_tpl);?>

            </p>
            <p class="pageinput">
	        <input type="hidden" name="active" value="0"/>
                <input id="active" type="checkbox" class="pagecheckbox" name="active" value="1"<?php if ($_smarty_tpl->tpl_vars['active']->value == 1) {?> checked="checked"<?php }?>/>
                <br />
                <?php echo lang('info_user_active');?>

            </p>
        </div>
        <?php }?>

        <?php if (isset($_smarty_tpl->tpl_vars['groups']->value)) {?>
        <!-- group options -->
        <?php echo smarty_function_tab_start(array('name'=>'groups'),$_smarty_tpl);?>

        <div class="pageverflow">
            <input type="hidden" name="groups" value="1"/>
            <p class="pagetext">
                <?php echo lang('groups');?>
:
            </p>
            <div class="pageinput">
                <div class="group_memberships clear">
                    <table class="pagetable">
                        <thead>
                            <tr>
                                <th class="pageicon"></th>
                                <th><?php echo lang('name');?>
</th>
                                <th><?php echo lang('description');?>
</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['groups']->value, 'onegroup');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['onegroup']->value) {
?>
                            <tr>
                                <td>
                                <input type="checkbox" name="g<?php echo $_smarty_tpl->tpl_vars['onegroup']->value->id;?>
" id="g<?php echo $_smarty_tpl->tpl_vars['onegroup']->value->id;?>
" value="1"<?php if (in_array($_smarty_tpl->tpl_vars['onegroup']->value->id,$_smarty_tpl->tpl_vars['membergroups']->value)) {?> checked="checked"<?php }?>/> </td>
                                <td><label for="g<?php echo $_smarty_tpl->tpl_vars['onegroup']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['onegroup']->value->name;?>
</label></td>
                                <td><?php echo $_smarty_tpl->tpl_vars['onegroup']->value->description;?>
</td>
                            </tr>
                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

                        </tbody>
                    </table>
                </div>
                <br />
                <div class="information"><?php echo lang('info_membergroups');?>
</div>
            </div>
        </div>
        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['manage_users']->value == true) {?>
        <!-- user settings -->
        <?php echo smarty_function_tab_start(array('name'=>'settings'),$_smarty_tpl);?>

        <div class="pageoverflow">
            <p class="pagetext">
                <label for="copyusersettings" title="<?php echo lang('info_copyusersettings');?>
"><?php echo lang('copyusersettings');?>
:</label>&nbsp;<?php echo smarty_function_cms_help(array('realm'=>'admin','key'=>'info_copyusersettings','title'=>lang('copyusersettings')),$_smarty_tpl);?>

            </p>
            <p class="pageinput">
                <select id="copyusersettings" name="copyusersettings">
                    <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['users']->value),$_smarty_tpl);?>

                </select>
            </p>
        </div>
        <div class="pageoverflow">
            <p class="pagetext">
                <label for="clearusersettings" title="<?php echo lang('info_clearusersettings');?>
"><?php echo lang('clearusersettings');?>
</label>
            </p>
            <p class="pageinput">
                <input type="checkbox" name="clearusersettings" value="1" id="clearusersettings" title="<?php echo lang('info_clearusersettings');?>
:">
            </p>
        </div>
        <?php }?>

        <?php echo smarty_function_tab_end(array(),$_smarty_tpl);?>


        <div class="pageoverflow">
            <input type="submit" id="submit" name="submit" value="<?php echo lang('submit');?>
" />
            <input type="submit" name="cancel" value="<?php echo lang('cancel');?>
" />
        </div>
    <?php echo smarty_function_form_end(array(),$_smarty_tpl);?>

</div><?php }
}
