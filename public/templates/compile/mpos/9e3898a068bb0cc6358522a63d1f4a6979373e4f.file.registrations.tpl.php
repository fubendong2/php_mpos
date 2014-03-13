<?php /* Smarty version Smarty-3.1.16, created on 2014-03-13 19:56:58
         compiled from "/home/wwwroot/pool.rambocoin.com/public/templates/mpos/admin/dashboard/registrations.tpl" */ ?>
<?php /*%%SmartyHeaderCode:210906688753219d0a262747-13712988%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9e3898a068bb0cc6358522a63d1f4a6979373e4f' => 
    array (
      0 => '/home/wwwroot/pool.rambocoin.com/public/templates/mpos/admin/dashboard/registrations.tpl',
      1 => 1394709723,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '210906688753219d0a262747-13712988',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'USER_REGISTRATIONS' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_53219d0a273c53_96286753',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53219d0a273c53_96286753')) {function content_53219d0a273c53_96286753($_smarty_tpl) {?>
<article class="module width_quarter">
  <header><h3><a href="<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=admin&action=registrations">Registrations</a></h3></header>
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
        <td align="center"><?php echo $_smarty_tpl->tpl_vars['USER_REGISTRATIONS']->value['24hours'];?>
</td>
        <td align="center"><?php echo $_smarty_tpl->tpl_vars['USER_REGISTRATIONS']->value['7days'];?>
</td>
        <td align="center"><?php echo $_smarty_tpl->tpl_vars['USER_REGISTRATIONS']->value['1month'];?>
</td>
        <td align="center"><?php echo $_smarty_tpl->tpl_vars['USER_REGISTRATIONS']->value['6month'];?>
</td>
        <td align="center"><?php echo $_smarty_tpl->tpl_vars['USER_REGISTRATIONS']->value['1year'];?>
</td>
      </tr>
    </tbody>
  </table>
</article>
<?php }} ?>
