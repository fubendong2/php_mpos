<?php /* Smarty version Smarty-3.1.16, created on 2014-03-13 19:37:56
         compiled from "/home/wwwroot/pool.rambocoin.com/public/templates/mpos/register/default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2700252853219894277480-98553272%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '903ab3c73d433d8fc764d161bf9cfc75238eff62' => 
    array (
      0 => '/home/wwwroot/pool.rambocoin.com/public/templates/mpos/register/default.tpl',
      1 => 1394709723,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2700252853219894277480-98553272',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'CTOKEN' => 0,
    'RECAPTCHA' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_532198942c3599_10183999',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_532198942c3599_10183999')) {function content_532198942c3599_10183999($_smarty_tpl) {?>
<form action="<?php echo $_SERVER['SCRIPT_NAME'];?>
" method="post">
<article class="module width_half">
  <header><h3>Register new account</h3></header>
  <div class="module_content">
    <input type="hidden" name="page" value="<?php echo htmlspecialchars($_REQUEST['page'], ENT_QUOTES, 'UTF-8', true);?>
">
<?php if ((($tmp = @$_REQUEST['token'])===null||$tmp==='' ? '' : $tmp)) {?>
    <input type="hidden" name="token" value="<?php echo htmlspecialchars($_REQUEST['token'], ENT_QUOTES, 'UTF-8', true);?>
" />
<?php }?>
	<input type="hidden" name="ctoken" value="<?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['CTOKEN']->value, ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
" />
    <input type="hidden" name="action" value="register">
    <fieldset>
      <label>Username</label>
      <input type="text" class="text tiny" name="username" value="<?php echo (($tmp = @htmlspecialchars($_POST['username'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
" size="15" maxlength="20" required>
    </fieldset>
    <fieldset>
      <label>Password</label> 
      <p style="padding-right:10px;display:block;margin-top:0px;float:right;color:#999;" id="pw_strength">Strength</p>
      <input type="password" class="text tiny" name="password1" value="" size="15" maxlength="100" id="pw_field" required>
      <label>Repeat Password</label>
      <p style="padding-right:10px;display:block;margin-top:0px;float:right;" id="pw_match"></p>
      <input type="password" class="text tiny" name="password2" value="" size="15" maxlength="100" id="pw_field2" required>
    </fieldset>
    <fieldset>
      <label>Email</label>
      <input type="text" name="email1" class="text small" value="<?php echo (($tmp = @htmlspecialchars($_POST['email1'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
" size="15" required>
      <label>Email Repeat</label>
      <input type="text" class="text small" name="email2" value="<?php echo (($tmp = @htmlspecialchars($_POST['email2'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
" size="15" required>
    </fieldset>
    <fieldset>
      <label>PIN</label>
      <input type="password" class="text pin" name="pin" value="" size="4" maxlength="4"><font size="1"> (4 digit number. <b>Remember this pin!</b>)</font>
    </fieldset>
    <fieldset>
      <label>Terms and Conditions</label><a style="width:152px;" onclick="TINY.box.show({url:'?page=tacpop',height:500})"><font size="1">Accept Terms and Conditions</font></a>
      <input type="checkbox" value="1" name="tac" id="tac">
      <label for="tac" style="margin:1px 0px 0px -20px"></label>
    </fieldset>
    <center><?php echo (($tmp = @$_smarty_tpl->tpl_vars['RECAPTCHA']->value)===null||$tmp==='' ? '' : $tmp);?>
</center>
  </div>
  <footer>
    <div class="submit_link">
      <input type="submit" value="Register" class="alt_btn">
    </div>
  </footer>
</article>
</form>
<?php }} ?>
