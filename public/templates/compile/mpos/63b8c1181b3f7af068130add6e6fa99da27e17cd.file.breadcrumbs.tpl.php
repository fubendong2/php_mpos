<?php /* Smarty version Smarty-3.1.16, created on 2014-03-13 19:37:33
         compiled from "/home/wwwroot/pool.rambocoin.com/public/templates/mpos/global/breadcrumbs.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9004119005321987d41d6d8-64525729%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '63b8c1181b3f7af068130add6e6fa99da27e17cd' => 
    array (
      0 => '/home/wwwroot/pool.rambocoin.com/public/templates/mpos/global/breadcrumbs.tpl',
      1 => 1394709723,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9004119005321987d41d6d8-64525729',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'PAGE' => 0,
    'ACTION' => 0,
    'GLOBAL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5321987d465976_34285079',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5321987d465976_34285079')) {function content_5321987d465976_34285079($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_replace')) include '/home/wwwroot/pool.rambocoin.com/public/include/smarty/libs/plugins/modifier.replace.php';
if (!is_callable('smarty_modifier_capitalize')) include '/home/wwwroot/pool.rambocoin.com/public/include/smarty/libs/plugins/modifier.capitalize.php';
?>    <div class="breadcrumbs_container">
    <?php if (count($_smarty_tpl->tpl_vars['PAGE']->value)==0) {?><?php $_smarty_tpl->tpl_vars["PAGE"] = new Smarty_variable($_REQUEST['page'], null, 0);?><?php } else { ?><?php $_smarty_tpl->tpl_vars["PAGE"] = new Smarty_variable("home", null, 0);?><?php }?>
    <?php if (count($_smarty_tpl->tpl_vars['ACTION']->value)==0) {?><?php $_smarty_tpl->tpl_vars["ACTION"] = new Smarty_variable($_REQUEST['action'], null, 0);?><?php } else { ?><?php $_smarty_tpl->tpl_vars["ACTION"] = new Smarty_variable('', null, 0);?><?php }?>
      <article class="breadcrumbs"><a href="<?php echo $_SERVER['SCRIPT_NAME'];?>
"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['GLOBAL']->value['website']['name'])===null||$tmp==='' ? "Unknown Pool" : $tmp);?>
</a> <div class="breadcrumb_divider"></div> <a class="<?php if (!(($tmp = @$_smarty_tpl->tpl_vars['ACTION']->value)===null||$tmp==='' ? '' : $tmp)) {?>current<?php }?>" <?php if ((($tmp = @$_smarty_tpl->tpl_vars['ACTION']->value)===null||$tmp==='' ? '' : $tmp)) {?>href="<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=<?php echo smarty_modifier_replace(htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['PAGE']->value)===null||$tmp==='' ? "home" : $tmp), ENT_QUOTES, 'UTF-8', true),'"','');?>
"<?php }?>><?php echo smarty_modifier_replace(htmlspecialchars(smarty_modifier_capitalize((($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['PAGE']->value, ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? "Home" : $tmp)), ENT_QUOTES, 'UTF-8', true),'"','');?>
</a><?php if ((($tmp = @$_smarty_tpl->tpl_vars['ACTION']->value)===null||$tmp==='' ? '' : $tmp)) {?> <div class="breadcrumb_divider"></div> <a class="current"><?php echo smarty_modifier_replace(htmlspecialchars(smarty_modifier_capitalize(htmlspecialchars($_smarty_tpl->tpl_vars['ACTION']->value, ENT_QUOTES, 'UTF-8', true)), ENT_QUOTES, 'UTF-8', true),'"','');?>
</a><?php }?></article>
    </div>
<?php }} ?>
