<?php /* Smarty version Smarty-3.1.16, created on 2014-03-13 19:38:07
         compiled from "/home/wwwroot/pool.rambocoin.com/public/templates/mpos/dashboard/overview.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5011454335321989f2e2a53-36775415%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd57abe02afcf3757e54a2e0b4773963e53fd4517' => 
    array (
      0 => '/home/wwwroot/pool.rambocoin.com/public/templates/mpos/dashboard/overview.tpl',
      1 => 1394709723,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5011454335321989f2e2a53-36775415',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'GLOBAL' => 0,
    'DISABLED_DASHBOARD' => 0,
    'DISABLED_DASHBOARD_API' => 0,
    'INTERVAL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5321989f307853_24843068',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5321989f307853_24843068')) {function content_5321989f307853_24843068($_smarty_tpl) {?><article class="module module width_3_quarter">
  <header><h3>Overview <?php if ($_smarty_tpl->tpl_vars['GLOBAL']->value['config']['price']['currency']) {?><?php echo $_smarty_tpl->tpl_vars['GLOBAL']->value['config']['currency'];?>
/<?php echo $_smarty_tpl->tpl_vars['GLOBAL']->value['config']['price']['currency'];?>
: <span id="b-price"><?php echo (($tmp = @number_format($_smarty_tpl->tpl_vars['GLOBAL']->value['price'],"8"))===null||$tmp==='' ? "0" : $tmp);?>
</span><?php }?> / Pool Workers: <span id="b-dworkers"><?php echo $_smarty_tpl->tpl_vars['GLOBAL']->value['workers'];?>
</span></h3></header>
  <div class="module_content">
    <center>
    <div style="display: inline-block;">
      <div id="poolhashrate" style="width:120px; height:90px;"></div>
      <div id="sharerate" style="width:120px; height:90px;"></div>
    </div>
    <div style="display: inline-block;">
      <div id="hashrate" style="width:220px; height:180px;"></div>
    </div>
    <div style="display: inline-block;">
      <div id="nethashrate" style="width:120px; height:90px;"></div>
      <div id="querytime" style="width:120px; height:90px;"></div>
    </div>
    </center>
    <?php if (!$_smarty_tpl->tpl_vars['DISABLED_DASHBOARD']->value&&!$_smarty_tpl->tpl_vars['DISABLED_DASHBOARD_API']->value) {?>
    <div style="margin-left: 16px; display: inline-block; width: 100%;">
      <div id="hashrategraph" style="height: 160px; width: 100%;"></div>
    </div>
    <?php }?>
  </div>
  <footer>
    <p style="margin-left: 25px">Refresh interval: <?php echo (($tmp = @$_smarty_tpl->tpl_vars['GLOBAL']->value['config']['statistics_ajax_refresh_interval'])===null||$tmp==='' ? "10" : $tmp);?>
 seconds. Hashrate based on shares submitted in the past <?php echo (($tmp = @$_smarty_tpl->tpl_vars['INTERVAL']->value)===null||$tmp==='' ? "5" : $tmp);?>
 minutes.</p>
  </footer>
</article>
<?php }} ?>
