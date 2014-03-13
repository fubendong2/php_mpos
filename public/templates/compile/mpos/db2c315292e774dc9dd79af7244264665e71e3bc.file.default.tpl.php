<?php /* Smarty version Smarty-3.1.16, created on 2014-03-13 19:37:58
         compiled from "/home/wwwroot/pool.rambocoin.com/public/templates/mpos/login//default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:201506598853219896eb99c0-51062299%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'db2c315292e774dc9dd79af7244264665e71e3bc' => 
    array (
      0 => '/home/wwwroot/pool.rambocoin.com/public/templates/mpos/login//default.tpl',
      1 => 1394709723,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '201506598853219896eb99c0-51062299',
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
  'unifunc' => 'content_53219896ef1ca0_62169745',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53219896ef1ca0_62169745')) {function content_53219896ef1ca0_62169745($_smarty_tpl) {?><article class="module width_half">
  <form action="<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=login" method="post" id="loginForm">
    <input type="hidden" name="ctoken" value="<?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['CTOKEN']->value, ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
" />
    <header><h3>Login with existing account</h3></header>
    <div class="module_content">
        <fieldset>
          <label>E-Mail</label>
          <input type="email" name="username" size="22" maxlength="100" value="<?php echo htmlspecialchars((($tmp = @$_REQUEST['username'])===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8', true);?>
" placeholder="Your email" tabindex="1" required />
        </fieldset>
        <fieldset>
          <label>Password</label>
          <input type="password" name="password" size="22" maxlength="100" placeholder="Your password" tabindex="2" required />
        </fieldset>
      <div class="clear"></div>
    </div>
    <center><?php echo (($tmp = @$_smarty_tpl->tpl_vars['RECAPTCHA']->value)===null||$tmp==='' ? '' : $tmp);?>
</center>
    <footer>
      <div class="submit_link">
        <a href="<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=password"><font size="1">Forgot your password?</font></a>
        <input type="submit" value="Login" class="alt_btn" />
      </div>
    </footer>
  </form>
</article>
<?php }} ?>
