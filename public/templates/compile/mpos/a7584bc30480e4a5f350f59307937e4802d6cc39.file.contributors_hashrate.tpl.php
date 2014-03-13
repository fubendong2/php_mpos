<?php /* Smarty version Smarty-3.1.16, created on 2014-03-13 19:57:01
         compiled from "/home/wwwroot/pool.rambocoin.com/public/templates/mpos/statistics/pool/contributors_hashrate.tpl" */ ?>
<?php /*%%SmartyHeaderCode:152719795353219d0d600007-82921329%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a7584bc30480e4a5f350f59307937e4802d6cc39' => 
    array (
      0 => '/home/wwwroot/pool.rambocoin.com/public/templates/mpos/statistics/pool/contributors_hashrate.tpl',
      1 => 1394709723,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '152719795353219d0d600007-82921329',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'GLOBAL' => 0,
    'CONTRIBHASHES' => 0,
    'DIFFICULTY' => 0,
    'REWARD' => 0,
    'rank' => 0,
    'estday' => 0,
    'listed' => 0,
    'myestday' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_53219d0d6a4a27_24877564',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53219d0d6a4a27_24877564')) {function content_53219d0d6a4a27_24877564($_smarty_tpl) {?><?php if (!is_callable('smarty_function_math')) include '/home/wwwroot/pool.rambocoin.com/public/include/smarty/libs/plugins/function.math.php';
if (!is_callable('smarty_function_cycle')) include '/home/wwwroot/pool.rambocoin.com/public/include/smarty/libs/plugins/function.cycle.php';
?><article class="module width_half">
  <header><h3>Contributor Hashrates</h3></header>
  <div>
  <table class="tablesorter" cellspacing="0">
    <thead>
      <tr>
        <th align="center">Rank</th>
        <th align="center">Donor</th>
        <th align="center" scope="col">User Name</th>
        <th align="right" style="padding-right: 7px;" scope="col">KH/s</th>
        <th align="right"><?php echo $_smarty_tpl->tpl_vars['GLOBAL']->value['config']['currency'];?>
/Day</th>
        <?php if ($_smarty_tpl->tpl_vars['GLOBAL']->value['config']['price']['currency']) {?><th align="right" style="padding-right: 25px;"><?php echo $_smarty_tpl->tpl_vars['GLOBAL']->value['config']['price']['currency'];?>
/Day</th><?php }?>
      </tr>
    </thead>
    <tbody>
<?php $_smarty_tpl->tpl_vars['rank'] = new Smarty_variable(1, null, 0);?>
<?php $_smarty_tpl->tpl_vars['listed'] = new Smarty_variable(0, null, 0);?>
<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['contrib'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['contrib']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['contrib']['name'] = 'contrib';
$_smarty_tpl->tpl_vars['smarty']->value['section']['contrib']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['CONTRIBHASHES']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['contrib']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['contrib']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['contrib']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['contrib']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['contrib']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['contrib']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['contrib']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['contrib']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['contrib']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['contrib']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['contrib']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['contrib']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['contrib']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['contrib']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['contrib']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['contrib']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['contrib']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['contrib']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['contrib']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['contrib']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['contrib']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['contrib']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['contrib']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['contrib']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['contrib']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['contrib']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['contrib']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['contrib']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['contrib']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['contrib']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['contrib']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['contrib']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['contrib']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['contrib']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['contrib']['total']);
?>
      <?php echo smarty_function_math(array('assign'=>"estday",'equation'=>"round(reward / ( diff * pow(2,32) / ( hashrate * 1000 ) / 3600 / 24), 3)",'diff'=>$_smarty_tpl->tpl_vars['DIFFICULTY']->value,'reward'=>$_smarty_tpl->tpl_vars['REWARD']->value,'hashrate'=>$_smarty_tpl->tpl_vars['CONTRIBHASHES']->value[$_smarty_tpl->getVariable('smarty')->value['section']['contrib']['index']]['hashrate']),$_smarty_tpl);?>

      <tr<?php if (mb_strtolower((($tmp = @$_smarty_tpl->tpl_vars['GLOBAL']->value['userdata']['username'])===null||$tmp==='' ? '' : $tmp), 'UTF-8')==mb_strtolower($_smarty_tpl->tpl_vars['CONTRIBHASHES']->value[$_smarty_tpl->getVariable('smarty')->value['section']['contrib']['index']]['account'], 'UTF-8')) {?><?php $_smarty_tpl->tpl_vars['listed'] = new Smarty_variable(1, null, 0);?> style="background-color:#99EB99;"<?php } else { ?> class="<?php echo smarty_function_cycle(array('values'=>"odd,even"),$_smarty_tpl);?>
"<?php }?>>
        <td align="center"><?php echo $_smarty_tpl->tpl_vars['rank']->value++;?>
</td>
        <td align="center"><?php if ((($tmp = @$_smarty_tpl->tpl_vars['CONTRIBHASHES']->value[$_smarty_tpl->getVariable('smarty')->value['section']['contrib']['index']]['donate_percent'])===null||$tmp==='' ? "0" : $tmp)>=2) {?><i class="icon-award"><?php } elseif ((($tmp = @$_smarty_tpl->tpl_vars['CONTRIBHASHES']->value[$_smarty_tpl->getVariable('smarty')->value['section']['contrib']['index']]['donate_percent'])===null||$tmp==='' ? "0" : $tmp)<2&&(($tmp = @$_smarty_tpl->tpl_vars['CONTRIBHASHES']->value[$_smarty_tpl->getVariable('smarty')->value['section']['contrib']['index']]['donate_percent'])===null||$tmp==='' ? "0" : $tmp)>0) {?><i class="icon-star-empty"><?php } else { ?><i class="icon-block"></i><?php }?></td>
        <td align="center" style="padding-right: 0px;"><?php if ((($tmp = @$_smarty_tpl->tpl_vars['CONTRIBHASHES']->value[$_smarty_tpl->getVariable('smarty')->value['section']['contrib']['index']]['is_anonymous'])===null||$tmp==='' ? "0" : $tmp)==1&&(($tmp = @$_smarty_tpl->tpl_vars['GLOBAL']->value['userdata']['is_admin'])===null||$tmp==='' ? "0" : $tmp)==0) {?>anonymous<?php } else { ?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['CONTRIBHASHES']->value[$_smarty_tpl->getVariable('smarty')->value['section']['contrib']['index']]['account'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?></td>
        <td align="right" style="padding-right: 0px;"><?php echo number_format($_smarty_tpl->tpl_vars['CONTRIBHASHES']->value[$_smarty_tpl->getVariable('smarty')->value['section']['contrib']['index']]['hashrate']);?>
</td>
        <td align="right" style="padding-right: 0px;"><?php echo number_format($_smarty_tpl->tpl_vars['estday']->value,"3");?>
</td>
        <?php if ($_smarty_tpl->tpl_vars['GLOBAL']->value['config']['price']['currency']) {?><td align="right" style="padding-right: 30px;"><?php echo number_format((($tmp = @($_smarty_tpl->tpl_vars['estday']->value*$_smarty_tpl->tpl_vars['GLOBAL']->value['price']))===null||$tmp==='' ? "n/a" : $tmp),"4");?>
</td><?php }?>
      </tr>
<?php endfor; endif; ?>
<?php if ($_smarty_tpl->tpl_vars['listed']->value!=1&&(($tmp = @$_smarty_tpl->tpl_vars['GLOBAL']->value['userdata']['username'])===null||$tmp==='' ? '' : $tmp)&&(($tmp = @$_smarty_tpl->tpl_vars['GLOBAL']->value['userdata']['rawhashrate'])===null||$tmp==='' ? "0" : $tmp)>0) {?>
      <?php echo smarty_function_math(array('assign'=>"myestday",'equation'=>"round(reward / ( diff * pow(2,32) / ( hashrate * 1000 ) / 3600 / 24), 3)",'diff'=>$_smarty_tpl->tpl_vars['DIFFICULTY']->value,'reward'=>$_smarty_tpl->tpl_vars['REWARD']->value,'hashrate'=>$_smarty_tpl->tpl_vars['GLOBAL']->value['userdata']['rawhashrate']),$_smarty_tpl);?>

      <tr>
        <td align="center">n/a</td>
        <td align="center"><?php if ((($tmp = @$_smarty_tpl->tpl_vars['GLOBAL']->value['userdata']['donate_percent'])===null||$tmp==='' ? "0" : $tmp)>=2) {?><i class="icon-star-empty"></i><?php } elseif ((($tmp = @$_smarty_tpl->tpl_vars['GLOBAL']->value['userdata']['donate_percent'])===null||$tmp==='' ? "0" : $tmp)<2&&(($tmp = @$_smarty_tpl->tpl_vars['GLOBAL']->value['userdata']['donate_percent'])===null||$tmp==='' ? "0" : $tmp)>0) {?><i class="icon-award"></i><?php } else { ?><i class="icon-block"></i><?php }?></td>
        <td align="center" style="padding-right: 0px;"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['GLOBAL']->value['userdata']['username'], ENT_QUOTES, 'UTF-8', true);?>
</td>
        <td align="right" style="padding-right: 0px;"><?php echo number_format($_smarty_tpl->tpl_vars['GLOBAL']->value['userdata']['rawhashrate']);?>
</td>
        <td align="right" style="padding-right: 0px;"><?php echo (($tmp = @number_format($_smarty_tpl->tpl_vars['myestday']->value,"3"))===null||$tmp==='' ? "n/a" : $tmp);?>
</td>
        <?php if ($_smarty_tpl->tpl_vars['GLOBAL']->value['config']['price']['currency']) {?><td align="right" style="padding-right: 30px;"><?php echo number_format((($tmp = @($_smarty_tpl->tpl_vars['myestday']->value*$_smarty_tpl->tpl_vars['GLOBAL']->value['price']))===null||$tmp==='' ? "n/a" : $tmp),"4");?>
</td><?php }?>
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
