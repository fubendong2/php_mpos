<?php /* Smarty version Smarty-3.1.16, created on 2014-03-13 19:57:01
         compiled from "/home/wwwroot/pool.rambocoin.com/public/templates/mpos/statistics/pool/default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:40062153553219d0d551b76-66114104%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3d31a8971c1b2f4dc12bfab9290819d8cb12e5c7' => 
    array (
      0 => '/home/wwwroot/pool.rambocoin.com/public/templates/mpos/statistics/pool/default.tpl',
      1 => 1394709723,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '40062153553219d0d551b76-66114104',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'GLOBAL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_53219d0d586315_58540891',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53219d0d586315_58540891')) {function content_53219d0d586315_58540891($_smarty_tpl) {?><!-- Wrapper -->
<div style="overflow: auto">
<?php echo $_smarty_tpl->getSubTemplate ("statistics/pool/contributors_shares.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("statistics/pool/contributors_hashrate.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</div>

<?php echo $_smarty_tpl->getSubTemplate ("statistics/pool/general_stats.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("statistics/blocks/small_table.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<?php if (!$_smarty_tpl->tpl_vars['GLOBAL']->value['website']['api']['disabled']&&!$_smarty_tpl->tpl_vars['GLOBAL']->value['config']['disable_navbar']&&!$_smarty_tpl->tpl_vars['GLOBAL']->value['config']['disable_navbar_api']) {?>
<?php echo $_smarty_tpl->getSubTemplate ("statistics/js.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }?>
<?php }} ?>
