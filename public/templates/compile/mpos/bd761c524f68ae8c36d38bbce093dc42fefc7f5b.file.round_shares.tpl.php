<?php /* Smarty version Smarty-3.1.16, created on 2014-03-13 19:38:07
         compiled from "/home/wwwroot/pool.rambocoin.com/public/templates/mpos/dashboard/round_shares.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14516693715321989f33c4c4-93005793%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bd761c524f68ae8c36d38bbce093dc42fefc7f5b' => 
    array (
      0 => '/home/wwwroot/pool.rambocoin.com/public/templates/mpos/dashboard/round_shares.tpl',
      1 => 1394709723,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14516693715321989f33c4c4-93005793',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'PATH' => 0,
    'ESTIMATES' => 0,
    'GLOBAL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5321989f37f536_86191199',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5321989f37f536_86191199')) {function content_5321989f37f536_86191199($_smarty_tpl) {?>         <tr>
           <td colspan="2"><b><u>Round Shares</u></b> <span id='tt'><img src='<?php echo $_smarty_tpl->tpl_vars['PATH']->value;?>
/images/questionmark.png' height='15px' width='15px' title='Submitted shares since last found block (ie. round shares)'></span></td>
         </tr>
         <tr>
           <td><b>Est. Shares</b></td>
           <td id="b-target" class="right"><?php echo number_format($_smarty_tpl->tpl_vars['ESTIMATES']->value['shares']);?>
 (done: <?php echo $_smarty_tpl->tpl_vars['ESTIMATES']->value['percent'];?>
%)</td>
         </tr>
         <tr>
           <td><b>Pool Valid</b></td>
           <td id="b-pvalid" class="right"><?php echo number_format($_smarty_tpl->tpl_vars['GLOBAL']->value['roundshares']['valid']);?>
</td>
         </tr>
         <tr>
           <td><b>Your Valid<b></td>
           <td id="b-yvalid" class="right"><?php echo number_format($_smarty_tpl->tpl_vars['GLOBAL']->value['userdata']['shares']['valid']);?>
</td>
         </tr>
         <tr>
           <td><b>Pool Invalid</b></td>
           <td id="b-pivalid" class="right"><?php echo number_format($_smarty_tpl->tpl_vars['GLOBAL']->value['roundshares']['invalid']);?>
 <?php if ($_smarty_tpl->tpl_vars['GLOBAL']->value['roundshares']['valid']>0) {?>(<?php echo number_format(($_smarty_tpl->tpl_vars['GLOBAL']->value['roundshares']['invalid']/($_smarty_tpl->tpl_vars['GLOBAL']->value['roundshares']['valid']+$_smarty_tpl->tpl_vars['GLOBAL']->value['roundshares']['invalid'])*100),"2");?>
%)<?php } else { ?>(0.00%)<?php }?></td></td>
         </tr>
         <tr>
           <td><b>Your Invalid</b></td>
           <td id="b-yivalid" class="right"><?php echo number_format($_smarty_tpl->tpl_vars['GLOBAL']->value['userdata']['shares']['invalid']);?>
 <?php if ($_smarty_tpl->tpl_vars['GLOBAL']->value['userdata']['shares']['valid']>0) {?>(<?php echo number_format(($_smarty_tpl->tpl_vars['GLOBAL']->value['userdata']['shares']['invalid']/($_smarty_tpl->tpl_vars['GLOBAL']->value['userdata']['shares']['valid']+$_smarty_tpl->tpl_vars['GLOBAL']->value['userdata']['shares']['invalid'])*100),"2");?>
%)<?php } else { ?>(0.00%)<?php }?></td>
         </tr>
<?php }} ?>
