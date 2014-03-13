<?php /* Smarty version Smarty-3.1.16, created on 2014-03-13 19:57:08
         compiled from "/home/wwwroot/pool.rambocoin.com/public/templates/mpos/statistics/blocks/default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:123151987653219d14efc1f2-34054333%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b42a6b717f66d21cfe436326d5b59d7f04695345' => 
    array (
      0 => '/home/wwwroot/pool.rambocoin.com/public/templates/mpos/statistics/blocks/default.tpl',
      1 => 1394709723,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '123151987653219d14efc1f2-34054333',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_53219d14f20a28_66095998',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53219d14f20a28_66095998')) {function content_53219d14f20a28_66095998($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("statistics/blocks/block_shares_graph.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("statistics/blocks/block_overview_time.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("statistics/blocks/blocks_found_details.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
