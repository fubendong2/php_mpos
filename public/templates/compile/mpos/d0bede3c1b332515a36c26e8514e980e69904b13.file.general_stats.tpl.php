<?php /* Smarty version Smarty-3.1.16, created on 2014-03-13 19:57:01
         compiled from "/home/wwwroot/pool.rambocoin.com/public/templates/mpos/statistics/pool/general_stats.tpl" */ ?>
<?php /*%%SmartyHeaderCode:162310394653219d0d6a9411-39170367%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd0bede3c1b332515a36c26e8514e980e69904b13' => 
    array (
      0 => '/home/wwwroot/pool.rambocoin.com/public/templates/mpos/statistics/pool/general_stats.tpl',
      1 => 1394709723,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '162310394653219d0d6a9411-39170367',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'GLOBAL' => 0,
    'NETWORK' => 0,
    'ESTTIME' => 0,
    'ESTIMATES' => 0,
    'CURRENTBLOCK' => 0,
    'CURRENTBLOCKHASH' => 0,
    'LASTBLOCK' => 0,
    'TIMESINCELAST' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_53219d0d719990_63758726',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53219d0d719990_63758726')) {function content_53219d0d719990_63758726($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_seconds_to_words')) include '/home/wwwroot/pool.rambocoin.com/public/include/smarty/libs/plugins/modifier.seconds_to_words.php';
?> <article class="module width_half">
  <header><h3>General Statistics</h3></header>
  <div class="module_content">
    <table width="100%">
      <tbody>
        <tr>
          <th align="left" width="50%">Pool Hash Rate</th>
          <td width="70%"><span id="b-hashrate"><?php echo number_format($_smarty_tpl->tpl_vars['GLOBAL']->value['hashrate'],"3");?>
</span> <?php echo $_smarty_tpl->tpl_vars['GLOBAL']->value['hashunits']['pool'];?>
</td>
        </tr>
        <tr>
          <th align="left">Pool Efficiency</th>
          <td><?php if ($_smarty_tpl->tpl_vars['GLOBAL']->value['roundshares']['valid']>0) {?><?php echo number_format(($_smarty_tpl->tpl_vars['GLOBAL']->value['roundshares']['valid']/($_smarty_tpl->tpl_vars['GLOBAL']->value['roundshares']['valid']+$_smarty_tpl->tpl_vars['GLOBAL']->value['roundshares']['invalid'])*100),"2");?>
%<?php } else { ?>0%<?php }?></td>
        </tr>
        <tr>
          <th align="left">Current Active Workers</th>
          <td id="b-workers"><?php echo $_smarty_tpl->tpl_vars['GLOBAL']->value['workers'];?>
</td>
        </tr>
        <tr>
          <th align="left">Current Difficulty</th>
      <?php if (!$_smarty_tpl->tpl_vars['GLOBAL']->value['website']['chaininfo']['disabled']) {?>
          <td><a href="<?php echo $_smarty_tpl->tpl_vars['GLOBAL']->value['website']['chaininfo']['url'];?>
" target="_new"><font size="2"><span id="b-diff"><?php echo $_smarty_tpl->tpl_vars['NETWORK']->value['difficulty'];?>
</span></font></a></td>
      <?php } else { ?>
          <td><font size="2"><span id="b-diff"><?php echo $_smarty_tpl->tpl_vars['NETWORK']->value['difficulty'];?>
</span></font></td>
      <?php }?>
        </tr>
        <tr>
          <th align="left">Est. Next Difficulty</th>
      <?php if (!$_smarty_tpl->tpl_vars['GLOBAL']->value['website']['chaininfo']['disabled']) {?>
          <td><a href="<?php echo $_smarty_tpl->tpl_vars['GLOBAL']->value['website']['chaininfo']['url'];?>
" target="_new"><font size="2"><?php echo $_smarty_tpl->tpl_vars['NETWORK']->value['EstNextDifficulty'];?>
  (Change in <?php echo $_smarty_tpl->tpl_vars['NETWORK']->value['BlocksUntilDiffChange'];?>
 Blocks)</font></a></td>
      <?php } else { ?>
          <td><font size="2"><?php echo $_smarty_tpl->tpl_vars['NETWORK']->value['EstNextDifficulty'];?>
 (Change in <?php echo $_smarty_tpl->tpl_vars['NETWORK']->value['BlocksUntilDiffChange'];?>
 Blocks)</font></td>
      <?php }?>
        </tr>
        <tr>
          <th align="left">Est. Avg. Time per Round (Network)</th>
          <td><font size="2"><?php echo smarty_modifier_seconds_to_words($_smarty_tpl->tpl_vars['NETWORK']->value['EstTimePerBlock']);?>
</font></td>
        </tr>
        <tr>
          <th align="left">Est. Avg. Time per Round (Pool)</th>
          <td><?php echo smarty_modifier_seconds_to_words($_smarty_tpl->tpl_vars['ESTTIME']->value);?>
</td>
        </tr>
        <tr>
          <th align="left">Est. Shares this Round</th>
          <td id="b-target"><?php echo $_smarty_tpl->tpl_vars['ESTIMATES']->value['shares'];?>
 (done: <?php echo $_smarty_tpl->tpl_vars['ESTIMATES']->value['percent'];?>
%)</td>
        </tr>
    <?php if (!$_smarty_tpl->tpl_vars['GLOBAL']->value['website']['blockexplorer']['disabled']) {?>
        <tr>
          <th align="left" width="50%">Next Network Block</th>
          <td colspan="3"><?php echo $_smarty_tpl->tpl_vars['CURRENTBLOCK']->value+1;?>
 &nbsp;&nbsp;<font size="1"> (Current: <a href="<?php echo $_smarty_tpl->tpl_vars['GLOBAL']->value['website']['blockexplorer']['url'];?>
<?php echo $_smarty_tpl->tpl_vars['CURRENTBLOCKHASH']->value;?>
" target="_new"><?php echo $_smarty_tpl->tpl_vars['CURRENTBLOCK']->value;?>
)</a></font></td>
        </tr>
    <?php } else { ?>
        <tr>
          <th align="left">Next Network Block</th>
          <td colspan="3"><?php echo $_smarty_tpl->tpl_vars['CURRENTBLOCK']->value+1;?>
 &nbsp;&nbsp; (Current: <?php echo $_smarty_tpl->tpl_vars['CURRENTBLOCK']->value;?>
)</td>
        </tr>
    <?php }?>
        <tr>
          <th align="left">Last Block Found</th>
          <td colspan="3"><a href="<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=statistics&action=round&height=<?php echo $_smarty_tpl->tpl_vars['LASTBLOCK']->value;?>
" target="_new"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['LASTBLOCK']->value)===null||$tmp==='' ? "0" : $tmp);?>
</a></td>
        </tr>
        <tr>
          <th align="left">Time Since Last Block</th>
          <td colspan="3"><?php echo smarty_modifier_seconds_to_words($_smarty_tpl->tpl_vars['TIMESINCELAST']->value);?>
</td>
        </tr>
      </tbody>
    </table>
  </div>
  <footer>
<?php if (!$_smarty_tpl->tpl_vars['GLOBAL']->value['website']['api']['disabled']) {?><ul><li>These stats are also available in JSON format <a href="<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=api&action=getpoolstatus&api_key=<?php echo (($tmp = @$_smarty_tpl->tpl_vars['GLOBAL']->value['userdata']['api_key'])===null||$tmp==='' ? '' : $tmp);?>
">HERE</a></li></ul><?php }?>
  </footer>
</article>
<?php }} ?>
