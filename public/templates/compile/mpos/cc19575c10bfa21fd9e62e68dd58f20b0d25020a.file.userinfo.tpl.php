<?php /* Smarty version Smarty-3.1.16, created on 2014-03-13 19:37:33
         compiled from "/home/wwwroot/pool.rambocoin.com/public/templates/mpos/global/userinfo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6038573445321987d40fb15-34722013%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cc19575c10bfa21fd9e62e68dd58f20b0d25020a' => 
    array (
      0 => '/home/wwwroot/pool.rambocoin.com/public/templates/mpos/global/userinfo.tpl',
      1 => 1394709723,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6038573445321987d40fb15-34722013',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'GLOBAL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5321987d41b517_94315645',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5321987d41b517_94315645')) {function content_5321987d41b517_94315645($_smarty_tpl) {?>    <div class="user">
<?php if ((($tmp = @$_smarty_tpl->tpl_vars['GLOBAL']->value['userdata']['username'])===null||$tmp==='' ? '' : $tmp)) {?>
            <p>Welcome <?php echo htmlspecialchars($_SESSION['USERDATA']['username'], ENT_QUOTES, 'UTF-8', true);?>
</p>
<?php } else { ?>
            <p>Welcome Guest</p>
<?php }?>
    </div>
<?php }} ?>
