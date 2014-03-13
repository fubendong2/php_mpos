<?php /* Smarty version Smarty-3.1.16, created on 2014-03-13 19:57:01
         compiled from "/home/wwwroot/pool.rambocoin.com/public/templates/mpos/statistics/pool/contributors_shares.tpl" */ ?>
<?php /*%%SmartyHeaderCode:121393111353219d0d5896d7-61602463%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '89caf885483927353f5fb83d4c2cce5dbade87a5' => 
    array (
      0 => '/home/wwwroot/pool.rambocoin.com/public/templates/mpos/statistics/pool/contributors_shares.tpl',
      1 => 1394709723,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '121393111353219d0d5896d7-61602463',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'CONTRIBSHARES' => 0,
    'GLOBAL' => 0,
    'rank' => 0,
    'listed' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_53219d0d5fc137_92669004',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53219d0d5fc137_92669004')) {function content_53219d0d5fc137_92669004($_smarty_tpl) {?><?php if (!is_callable('smarty_function_cycle')) include '/home/wwwroot/pool.rambocoin.com/public/include/smarty/libs/plugins/function.cycle.php';
?><article class="module width_half">
  <header><h3>Contributor Shares</h3></header>
  <table class="tablesorter" cellspacing="0">
    <thead>
      <tr>
        <th align="center">Rank</th>
        <th align="center">Donor</th>
        <th align="center">User Name</th>
        <th align="right" style="padding-right: 30px;">Shares</th>
      </tr>
    </thead>
    <tbody>
<?php $_smarty_tpl->tpl_vars['rank'] = new Smarty_variable(1, null, 0);?>
<?php $_smarty_tpl->tpl_vars['listed'] = new Smarty_variable(0, null, 0);?>
<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['shares'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['shares']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['shares']['name'] = 'shares';
$_smarty_tpl->tpl_vars['smarty']->value['section']['shares']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['CONTRIBSHARES']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['shares']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['shares']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['shares']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['shares']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['shares']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['shares']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['shares']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['shares']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['shares']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['shares']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['shares']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['shares']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['shares']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['shares']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['shares']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['shares']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['shares']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['shares']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['shares']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['shares']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['shares']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['shares']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['shares']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['shares']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['shares']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['shares']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['shares']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['shares']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['shares']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['shares']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['shares']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['shares']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['shares']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['shares']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['shares']['total']);
?>
      <tr<?php if (mb_strtolower((($tmp = @$_smarty_tpl->tpl_vars['GLOBAL']->value['userdata']['username'])===null||$tmp==='' ? '' : $tmp), 'UTF-8')==mb_strtolower($_smarty_tpl->tpl_vars['CONTRIBSHARES']->value[$_smarty_tpl->getVariable('smarty')->value['section']['shares']['index']]['account'], 'UTF-8')) {?><?php $_smarty_tpl->tpl_vars['listed'] = new Smarty_variable(1, null, 0);?> style="background-color:#99EB99;"<?php } else { ?> class="<?php echo smarty_function_cycle(array('values'=>"odd,even"),$_smarty_tpl);?>
"<?php }?>>
        <td align="center"><?php echo $_smarty_tpl->tpl_vars['rank']->value++;?>
</td>
        <td align="center"><?php if ((($tmp = @$_smarty_tpl->tpl_vars['CONTRIBSHARES']->value[$_smarty_tpl->getVariable('smarty')->value['section']['shares']['index']]['donate_percent'])===null||$tmp==='' ? "0" : $tmp)>=2) {?><i class="icon-award"><?php } elseif ((($tmp = @$_smarty_tpl->tpl_vars['CONTRIBSHARES']->value[$_smarty_tpl->getVariable('smarty')->value['section']['shares']['index']]['donate_percent'])===null||$tmp==='' ? "0" : $tmp)<2&&(($tmp = @$_smarty_tpl->tpl_vars['CONTRIBSHARES']->value[$_smarty_tpl->getVariable('smarty')->value['section']['shares']['index']]['donate_percent'])===null||$tmp==='' ? "0" : $tmp)>0) {?><i class="icon-star-empty"><?php } else { ?><i class="icon-block"></i><?php }?></td>
        <td align="center"><?php if ((($tmp = @$_smarty_tpl->tpl_vars['CONTRIBSHARES']->value[$_smarty_tpl->getVariable('smarty')->value['section']['shares']['index']]['is_anonymous'])===null||$tmp==='' ? "0" : $tmp)==1&&(($tmp = @$_smarty_tpl->tpl_vars['GLOBAL']->value['userdata']['is_admin'])===null||$tmp==='' ? "0" : $tmp)==0) {?>anonymous<?php } else { ?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['CONTRIBSHARES']->value[$_smarty_tpl->getVariable('smarty')->value['section']['shares']['index']]['account'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?></td>
        <td align="right" style="padding-right: 30px;"><?php echo number_format($_smarty_tpl->tpl_vars['CONTRIBSHARES']->value[$_smarty_tpl->getVariable('smarty')->value['section']['shares']['index']]['shares']);?>
</td>
      </tr>
<?php endfor; endif; ?>
<?php if ($_smarty_tpl->tpl_vars['listed']->value!=1&&(($tmp = @$_smarty_tpl->tpl_vars['GLOBAL']->value['userdata']['username'])===null||$tmp==='' ? '' : $tmp)&&(($tmp = @$_smarty_tpl->tpl_vars['GLOBAL']->value['userdata']['shares']['valid'])===null||$tmp==='' ? "0" : $tmp)>0) {?>
      <tr>
        <td align="center">n/a</td>
        <td align="center"><?php if ((($tmp = @$_smarty_tpl->tpl_vars['GLOBAL']->value['userdata']['donate_percent'])===null||$tmp==='' ? "0" : $tmp)>=2) {?><i class="icon-star-empty"></i><?php } elseif ((($tmp = @$_smarty_tpl->tpl_vars['GLOBAL']->value['userdata']['donate_percent'])===null||$tmp==='' ? "0" : $tmp)<2&&(($tmp = @$_smarty_tpl->tpl_vars['GLOBAL']->value['userdata']['donate_percent'])===null||$tmp==='' ? "0" : $tmp)>0) {?><i class="icon-award"></i><?php } else { ?><i class="icon-block"></i><?php }?></td>
        <td align="center"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['GLOBAL']->value['userdata']['username'], ENT_QUOTES, 'UTF-8', true);?>
</td>
        <td align="right" style="padding-right: 30px;"><?php echo number_format($_smarty_tpl->tpl_vars['GLOBAL']->value['userdata']['shares']['valid']);?>
</td>
      </tr>
<?php }?>
    </tbody>
  </table>
  <footer>
    <ul>
      <i class="icon-block"> no Donation </i>
      <i class="icon-star-empty"> 0&#37;&#45;2&#37; Donation </i>
      <i class="icon-award"> 2&#37; or more Donation </i>
    </ul>
  </footer>
</article>
<?php }} ?>
