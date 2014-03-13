<?php /* Smarty version Smarty-3.1.16, created on 2014-03-13 19:38:07
         compiled from "/home/wwwroot/pool.rambocoin.com/public/templates/mpos/dashboard/network_info.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7715096725321989f3fdc40-51069970%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '43d084eb83be942877b54a06de31b2d9287a912d' => 
    array (
      0 => '/home/wwwroot/pool.rambocoin.com/public/templates/mpos/dashboard/network_info.tpl',
      1 => 1394709723,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7715096725321989f3fdc40-51069970',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'NETWORK' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5321989f4136b2_32372755',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5321989f4136b2_32372755')) {function content_5321989f4136b2_32372755($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_seconds_to_words')) include '/home/wwwroot/pool.rambocoin.com/public/include/smarty/libs/plugins/modifier.seconds_to_words.php';
?>         <tr>
           <td colspan="2"><b><u>Network Info</u></b></td>
         </tr>
         <tr>
           <td><b>Difficulty</b></td>
           <td id="b-diff" class="right"><?php echo number_format($_smarty_tpl->tpl_vars['NETWORK']->value['difficulty'],"8");?>
</td>
         </tr>
         <tr>
           <td><b>Est Next Difficulty</b></td>
           <td id="b-nextdiff" class="right"><?php echo number_format($_smarty_tpl->tpl_vars['NETWORK']->value['EstNextDifficulty'],"8");?>
 (Change in <?php echo $_smarty_tpl->tpl_vars['NETWORK']->value['BlocksUntilDiffChange'];?>
 Blocks)</td>
         </tr>
         <tr>
           <td><b>Est. Avg. Time per Block</b></td>
           <td id="b-esttimeperblock" class="right"><?php echo smarty_modifier_seconds_to_words($_smarty_tpl->tpl_vars['NETWORK']->value['EstTimePerBlock']);?>
</td>
         </tr>
         <tr>
           <td><b>Current Block</b></td>
           <td id="b-nblock" class="right"><?php echo $_smarty_tpl->tpl_vars['NETWORK']->value['block'];?>
</td>
         </tr>
<?php }} ?>
