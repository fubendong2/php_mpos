<?php /* Smarty version Smarty-3.1.16, created on 2014-03-13 19:56:59
         compiled from "/home/wwwroot/pool.rambocoin.com/public/templates/mpos/admin/monitoring/default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:120076566053219d0b157639-79079332%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '04dd54048ed81c36d2b3ea0fd0f398d0913814ba' => 
    array (
      0 => '/home/wwwroot/pool.rambocoin.com/public/templates/mpos/admin/monitoring/default.tpl',
      1 => 1394709723,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '120076566053219d0b157639-79079332',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'CRONSTATUS' => 0,
    'cron' => 0,
    'data' => 0,
    'event' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_53219d0b1d9f64_71388032',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53219d0b1d9f64_71388032')) {function content_53219d0b1d9f64_71388032($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/home/wwwroot/pool.rambocoin.com/public/include/smarty/libs/plugins/modifier.date_format.php';
?><article class="module width_full"> 
  <header><h3>Monitoring</h3></header>
    <table class="tablesorter" cellspacing="0">
      <thead>
        <th>Cronjob</th>
        <th align="center">Disabled</th>
        <th align="center">Exit Code</th>
        <th align="center">Active</th>
        <th align="center">Runtime</th>
        <th align="center">Start Time</th>
        <th align="center">End Time</th>
        <th align="center">Message</th>
      </thead>
      <tbody>
<?php  $_smarty_tpl->tpl_vars['data'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['data']->_loop = false;
 $_smarty_tpl->tpl_vars['cron'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['CRONSTATUS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['data']->key => $_smarty_tpl->tpl_vars['data']->value) {
$_smarty_tpl->tpl_vars['data']->_loop = true;
 $_smarty_tpl->tpl_vars['cron']->value = $_smarty_tpl->tpl_vars['data']->key;
?>
        <tr>
          <td><?php echo $_smarty_tpl->tpl_vars['cron']->value;?>
</td>
  <?php  $_smarty_tpl->tpl_vars['event'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['event']->_loop = false;
 $_smarty_tpl->tpl_vars['name'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['event']->key => $_smarty_tpl->tpl_vars['event']->value) {
$_smarty_tpl->tpl_vars['event']->_loop = true;
 $_smarty_tpl->tpl_vars['name']->value = $_smarty_tpl->tpl_vars['event']->key;
?>
          <td align="center">
            <?php if ($_smarty_tpl->tpl_vars['event']->value['type']=='okerror') {?>
              <?php if ($_smarty_tpl->tpl_vars['event']->value['value']==0) {?>
                <font color="green">OK</font>
              <?php } else { ?>
                <font color="red">ERROR</font>
              <?php }?>
            <?php } elseif ($_smarty_tpl->tpl_vars['event']->value['type']=='message') {?>
              <i><?php echo $_smarty_tpl->tpl_vars['event']->value['value'];?>
</i>
            <?php } elseif ($_smarty_tpl->tpl_vars['event']->value['type']=='yesno') {?>
              <i class="icon-<?php if ($_smarty_tpl->tpl_vars['event']->value['value']==1) {?>ok<?php } else { ?>cancel<?php }?>"></i>
            <?php } elseif ($_smarty_tpl->tpl_vars['event']->value['type']=='time') {?>
              <?php if ($_smarty_tpl->tpl_vars['event']->value['value']>60) {?>
                <font color="orange">
              <?php } elseif ($_smarty_tpl->tpl_vars['event']->value['value']>120) {?>
                <font color="red">
              <?php } else { ?>
                <font color="green">
              <?php }?>
                <?php echo number_format((($tmp = @$_smarty_tpl->tpl_vars['event']->value['value'])===null||$tmp==='' ? "0" : $tmp),"2");?>
 seconds
              </font>
            <?php } elseif ($_smarty_tpl->tpl_vars['event']->value['type']=='date') {?>
              <?php if ((time()-180)>$_smarty_tpl->tpl_vars['event']->value['value']) {?>
                <font color="red">
              <?php } elseif ((time()-120)>$_smarty_tpl->tpl_vars['event']->value['value']) {?>
                <font color="orange">
              <?php } else { ?>
                <font color="green">
              <?php }?>
                <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['event']->value['value'],"%m/%d %H:%M:%S");?>

              </font>
            <?php } else { ?>
              <?php echo (($tmp = @$_smarty_tpl->tpl_vars['event']->value['value'])===null||$tmp==='' ? '' : $tmp);?>

            <?php }?>
          </td>
  <?php } ?>
        </tr>
<?php } ?>
      </tbody>
    </table>
</article>
<?php }} ?>
