<?php /* Smarty version Smarty-3.1.16, created on 2014-03-13 19:56:58
         compiled from "/home/wwwroot/pool.rambocoin.com/public/templates/mpos/admin/dashboard/mpos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:26530277853219d0a1f66c1-24272045%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '866f426d9d8ff5f0eab0d4c37fe6565ba6079030' => 
    array (
      0 => '/home/wwwroot/pool.rambocoin.com/public/templates/mpos/admin/dashboard/mpos.tpl',
      1 => 1394709723,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '26530277853219d0a1f66c1-24272045',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'VERSION' => 0,
    'CRON_ERROR' => 0,
    'CRON_DISABLED' => 0,
    'WALLET_ERROR' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_53219d0a2433b8_68354637',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53219d0a2433b8_68354637')) {function content_53219d0a2433b8_68354637($_smarty_tpl) {?>
<article class="module width_quarter">
  <header><h3>MPOS Version Information</h3></header>
  <table width="25%" class="tablesorter" cellspacing="0">
    <thead>
      <tr>
        <th>Component</th>
        <th align="center">Current</th>
        <th align="center">Installed</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><strong>MPOS</strong></td>
        <td align="center"><font color="green"><?php echo $_smarty_tpl->tpl_vars['VERSION']->value['CURRENT']['CORE'];?>
</font></td>
        <td align="center">
          <font color="<?php if ($_smarty_tpl->tpl_vars['VERSION']->value['INSTALLED']['CORE']==$_smarty_tpl->tpl_vars['VERSION']->value['CURRENT']['CORE']) {?>green<?php } else { ?>red<?php }?>"><?php echo $_smarty_tpl->tpl_vars['VERSION']->value['INSTALLED']['CORE'];?>
</font>
        </td>
      </tr>
      <tr>
        <td><strong>Config</strong></td>
        <td align="center"><font color="green"><?php echo $_smarty_tpl->tpl_vars['VERSION']->value['CURRENT']['CONFIG'];?>
</font></td>
        <td align="center">
          <font color="<?php if ($_smarty_tpl->tpl_vars['VERSION']->value['INSTALLED']['CONFIG']==$_smarty_tpl->tpl_vars['VERSION']->value['CURRENT']['CONFIG']) {?>green<?php } else { ?>red<?php }?>"><?php echo $_smarty_tpl->tpl_vars['VERSION']->value['INSTALLED']['CONFIG'];?>
</font>
        </td>
      </tr>
      <tr>
        <td><strong>Database</strong></td>
        <td align="center"><font color="green"><?php echo $_smarty_tpl->tpl_vars['VERSION']->value['CURRENT']['DB'];?>
</font></td>
        <td align="center">
          <font color="<?php if ($_smarty_tpl->tpl_vars['VERSION']->value['INSTALLED']['DB']==$_smarty_tpl->tpl_vars['VERSION']->value['CURRENT']['DB']) {?>green<?php } else { ?>red<?php }?>"><?php echo $_smarty_tpl->tpl_vars['VERSION']->value['INSTALLED']['DB'];?>
</font>
        </td>
      </tr>
    </tbody>
  </table>
</article>

<article class="module width_quarter">
  <header><h3>MPOS Status</h3></header>
  <table class="tablesorter" cellspacing="0">
    <thead>
      <tr>
        <th colspan="2" align="center">Cronjobs</th>
        <th align="center">Wallet</th>
      </tr>
      <tr>
        <th align="center"><strong>Errors</strong></th>
        <th align="center"><strong>Disabled</strong></th>
        <th align="center"><strong>Errors</strong></th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td align="center">
          <a href="<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=admin&action=monitoring"><?php if ($_smarty_tpl->tpl_vars['CRON_ERROR']->value==0) {?>None - OK<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['CRON_ERROR']->value;?>
<?php }?></a>
        </td>
        <td align="center">
          <a href="<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=admin&action=monitoring"><?php if ($_smarty_tpl->tpl_vars['CRON_DISABLED']->value==0) {?>None - OK<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['CRON_DISABLED']->value;?>
<?php }?></a>
        </td>
        <td align="center">
          <a href="<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=admin&action=wallet"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['WALLET_ERROR']->value)===null||$tmp==='' ? "None - OK" : $tmp);?>
</a>
        </td>
      </tr>
    </tbody>
  </table>
</article>





<?php }} ?>
