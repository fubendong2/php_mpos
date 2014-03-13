<?php /* Smarty version Smarty-3.1.16, created on 2014-03-13 19:56:58
         compiled from "/home/wwwroot/pool.rambocoin.com/public/templates/mpos/admin/dashboard/invitation.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20007144053219d0a275fd5-03372102%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5ee100215f1c9de73a81eb468532f4127a42c0b3' => 
    array (
      0 => '/home/wwwroot/pool.rambocoin.com/public/templates/mpos/admin/dashboard/invitation.tpl',
      1 => 1394709723,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20007144053219d0a275fd5-03372102',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'INVITATION_INFO' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_53219d0a2826c2_22322718',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53219d0a2826c2_22322718')) {function content_53219d0a2826c2_22322718($_smarty_tpl) {?>
<article class="module width_quarter">
  <header><h3><a href="<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=admin&action=invitations">Invitations</a></h3></header>
  <table class="tablesorter" cellspacing="0">
    <thead>
      <tr>
        <th align="center">Total</th>
        <th align="center">Activated</th>
        <th align="center">Outstanding</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td align="center"><?php echo $_smarty_tpl->tpl_vars['INVITATION_INFO']->value['total'];?>
</td>
        <td align="center"><?php echo $_smarty_tpl->tpl_vars['INVITATION_INFO']->value['activated'];?>
</td>
        <td align="center"><?php echo $_smarty_tpl->tpl_vars['INVITATION_INFO']->value['outstanding'];?>
</td>
      </tr>
    </tbody>
  </table>
</article>
<?php }} ?>
