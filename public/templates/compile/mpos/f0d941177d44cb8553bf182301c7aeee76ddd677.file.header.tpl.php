<?php /* Smarty version Smarty-3.1.16, created on 2014-03-13 19:37:33
         compiled from "/home/wwwroot/pool.rambocoin.com/public/templates/mpos/global/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4370389705321987d3f2237-97456166%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f0d941177d44cb8553bf182301c7aeee76ddd677' => 
    array (
      0 => '/home/wwwroot/pool.rambocoin.com/public/templates/mpos/global/header.tpl',
      1 => 1394709723,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4370389705321987d3f2237-97456166',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'GLOBAL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5321987d40cf87_10398648',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5321987d40cf87_10398648')) {function content_5321987d40cf87_10398648($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_capitalize')) include '/home/wwwroot/pool.rambocoin.com/public/include/smarty/libs/plugins/modifier.capitalize.php';
?>    <hgroup>
      <a href="<?php echo $_SERVER['SCRIPT_NAME'];?>
"><h1 class="site_title"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['GLOBAL']->value['website']['name'])===null||$tmp==='' ? "Unknown Pool" : $tmp);?>
</h1></a>
      <h2 class="section_title"><?php if ((($tmp = @htmlspecialchars($_REQUEST['action'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp)) {?><?php echo smarty_modifier_capitalize(htmlspecialchars($_REQUEST['action'], ENT_QUOTES, 'UTF-8', true));?>
<?php } else { ?><?php echo smarty_modifier_capitalize((($tmp = @htmlspecialchars($_REQUEST['page'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? "home" : $tmp));?>
<?php }?></h2>
    </hgroup><?php }} ?>
