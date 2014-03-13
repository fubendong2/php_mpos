<?php /* Smarty version Smarty-3.1.16, created on 2014-03-13 19:38:07
         compiled from "/home/wwwroot/pool.rambocoin.com/public/templates/mpos/dashboard/payout_estimates.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15400222175321989f3bdc82-92882450%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b698eb3332cb563a850c4d07efd8560d3cc6a87d' => 
    array (
      0 => '/home/wwwroot/pool.rambocoin.com/public/templates/mpos/dashboard/payout_estimates.tpl',
      1 => 1394709723,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15400222175321989f3bdc82-92882450',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'GLOBAL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5321989f3fab76_24075825',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5321989f3fab76_24075825')) {function content_5321989f3fab76_24075825($_smarty_tpl) {?>
         <tr>
           <td colspan="2"><b><u><?php echo $_smarty_tpl->tpl_vars['GLOBAL']->value['config']['currency'];?>
 Estimates</u></b></td>
         </tr>
<?php if ($_smarty_tpl->tpl_vars['GLOBAL']->value['config']['payout_system']!='pps') {?>
         <tr>
           <td><b>Block</b></td>
           <td id="b-block" class="right"><?php echo number_format($_smarty_tpl->tpl_vars['GLOBAL']->value['userdata']['estimates']['block'],"8");?>
</td>
         </tr>
         <tr>
           <td><b>Fees</b></td>
           <td id="b-fee" class="right"><?php echo number_format($_smarty_tpl->tpl_vars['GLOBAL']->value['userdata']['estimates']['fee'],"8");?>
</td>
         </tr>
         <tr>
           <td><b>Donation</b></td>
           <td id="b-donation" class="right"><?php echo number_format($_smarty_tpl->tpl_vars['GLOBAL']->value['userdata']['estimates']['donation'],"8");?>
</td>
         </tr>
         <tr>
           <td><b>Payout</b></td>
           <td id="b-payout" class="right"><?php echo number_format($_smarty_tpl->tpl_vars['GLOBAL']->value['userdata']['estimates']['payout'],"8");?>
</td>
         </tr>
<?php } else { ?>
        <tr>
          <td><b>in 1 hour</b></td>
          <td id="b-est1hour" align="left"><?php echo number_format($_smarty_tpl->tpl_vars['GLOBAL']->value['userdata']['estimates']['hours1'],"8");?>
</td>
        </tr>
        <tr>
          <td><b>in 24 hours</b></td>
          <td id="b-est24hours" align="left"><?php echo number_format(($_smarty_tpl->tpl_vars['GLOBAL']->value['userdata']['estimates']['hours24']),"8");?>
</td>
        </tr>
        <tr>
          <td><b>in 7 days</b></td>
          <td id="b-est7days" align="left"><?php echo number_format(($_smarty_tpl->tpl_vars['GLOBAL']->value['userdata']['estimates']['days7']),"8");?>
</td>
        </tr>
        <tr>
          <td><b>in 14 days</b></td>
          <td id="b-est14days" align="left"><?php echo number_format(($_smarty_tpl->tpl_vars['GLOBAL']->value['userdata']['estimates']['days14']),"8");?>
</td>
        </tr>
        <tr>
          <td><b>in 30 days</b></td>
          <td id="b-est30days" align="left"><?php echo number_format(($_smarty_tpl->tpl_vars['GLOBAL']->value['userdata']['estimates']['days30']),"8");?>
</td>
        </tr>
<?php }?>
<?php }} ?>
