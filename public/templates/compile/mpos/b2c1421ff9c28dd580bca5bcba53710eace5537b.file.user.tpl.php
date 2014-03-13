<?php /* Smarty version Smarty-3.1.16, created on 2014-03-13 19:56:58
         compiled from "/home/wwwroot/pool.rambocoin.com/public/templates/mpos/admin/dashboard/user.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18512206753219d0a2461d6-68615323%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b2c1421ff9c28dd580bca5bcba53710eace5537b' => 
    array (
      0 => '/home/wwwroot/pool.rambocoin.com/public/templates/mpos/admin/dashboard/user.tpl',
      1 => 1394709723,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18512206753219d0a2461d6-68615323',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'USER_INFO' => 0,
    'USER_LOGINS' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_53219d0a25fcd1_83477045',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53219d0a25fcd1_83477045')) {function content_53219d0a25fcd1_83477045($_smarty_tpl) {?>
<article class="module width_quarter">
  <header><h3>Users</h3></header>
  <table class="tablesorter" cellspacing="0">
    <thead>
      <tr>
        <th align="center">Total</th>
        <th align="center">Active</th>
        <th align="center">Locked</th>
        <th align="center">Admins</th>
        <th align="center">No Fees</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td align="center"><?php echo $_smarty_tpl->tpl_vars['USER_INFO']->value['total'];?>
</td>
        <td align="center"><?php echo $_smarty_tpl->tpl_vars['USER_INFO']->value['active'];?>
</td>
        <td align="center"><?php echo $_smarty_tpl->tpl_vars['USER_INFO']->value['locked'];?>
</td>
        <td align="center"><?php echo $_smarty_tpl->tpl_vars['USER_INFO']->value['admins'];?>
</td>
        <td align="center"><?php echo $_smarty_tpl->tpl_vars['USER_INFO']->value['nofees'];?>
</td>
      </tr>
    </tbody>
  </table>
</article>

<article class="module width_quarter">
  <header><h3>Logins</h3></header>
  <table class="tablesorter" cellspacing="0">
    <thead>
      <tr>
        <th align="center">24 hours</th>
        <th align="center">7 days</th>
        <th align="center">1 month</th>
        <th align="center">6 months</th>
        <th align="center">1 year</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td align="center"><?php echo $_smarty_tpl->tpl_vars['USER_LOGINS']->value['24hours'];?>
</td>
        <td align="center"><?php echo $_smarty_tpl->tpl_vars['USER_LOGINS']->value['7days'];?>
</td>
        <td align="center"><?php echo $_smarty_tpl->tpl_vars['USER_LOGINS']->value['1month'];?>
</td>
        <td align="center"><?php echo $_smarty_tpl->tpl_vars['USER_LOGINS']->value['6month'];?>
</td>
        <td align="center"><?php echo $_smarty_tpl->tpl_vars['USER_LOGINS']->value['1year'];?>
</td>
      </tr>
    </tbody>
  </table>
</article>
<?php }} ?>
