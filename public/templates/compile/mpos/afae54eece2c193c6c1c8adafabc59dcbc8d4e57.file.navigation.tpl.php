<?php /* Smarty version Smarty-3.1.16, created on 2014-03-13 19:37:33
         compiled from "/home/wwwroot/pool.rambocoin.com/public/templates/mpos/global/navigation.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21175757985321987d46a0e3-12230783%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'afae54eece2c193c6c1c8adafabc59dcbc8d4e57' => 
    array (
      0 => '/home/wwwroot/pool.rambocoin.com/public/templates/mpos/global/navigation.tpl',
      1 => 1394709723,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21175757985321987d46a0e3-12230783',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'GLOBAL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5321987d523d47_36108482',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5321987d523d47_36108482')) {function content_5321987d523d47_36108482($_smarty_tpl) {?>    <hr/>
    <li class="icon-home"><a href="<?php echo $_SERVER['SCRIPT_NAME'];?>
">Home</a></li>
    <?php if ((($tmp = @$_SESSION['AUTHENTICATED'])===null||$tmp==='' ? "0" : $tmp)==1) {?>
    <h3>My Account</h3>
    <ul class="toggle">
      <li class="icon-gauge"><a href="<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=dashboard">Dashboard</a></li>
      <li class="icon-user"><a href="<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=account&action=edit">Edit Account</a></li>
      <li class="icon-photo"><a href="<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=account&action=workers">My Workers</a></li>
      <li class="icon-indent-left"><a href="<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=account&action=transactions">Transactions</a></li>
    <?php if (!$_smarty_tpl->tpl_vars['GLOBAL']->value['config']['disable_notifications']) {?><li class="icon-megaphone"><a href="<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=account&action=notifications">Notifications</a></li><?php }?>
    <?php if (!$_smarty_tpl->tpl_vars['GLOBAL']->value['config']['disable_invitations']) {?><li class="icon-plus"><a href="<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=account&action=invitations">Invitations</a></li><?php }?>
      <li class="icon-barcode"><a href="<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=account&action=qrcode">QR Codes</a></li>
    </ul>
    </li>
    <?php }?>
    <?php if ((($tmp = @$_SESSION['AUTHENTICATED'])===null||$tmp==='' ? "0" : $tmp)==1&&$_smarty_tpl->tpl_vars['GLOBAL']->value['userdata']['is_admin']==1) {?>
    <h3>Admin Panel</h3>
    <ul class="toggle">
      <li class="icon-gauge"><a href="<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=admin&action=dashboard">Dashboard</a></li>
      <li class="icon-bell"><a href="<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=admin&action=monitoring">Monitoring</a></li>
      <li class="icon-torso"><a href="<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=admin&action=user">User Info</a></li>
      <li class="icon-money"><a href="<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=admin&action=wallet">Wallet Info</a></li>
      <li class="icon-exchange"><a href="<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=admin&action=transactions">Transactions</a></li>
      <li class="icon-cog"><a href="<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=admin&action=settings">Settings</a></li>
      <li class="icon-doc"><a href="<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=admin&action=news">News</a></li>
      <li class="icon-chart"><a href="<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=admin&action=reports">Reports</a></li>
      <li class="icon-edit"><a href="<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=admin&action=registrations">Registrations</a></li>
      <li class="icon-users"><a href="<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=admin&action=invitations">Invitations</a></li>
      <li class="icon-photo"><a href="<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=admin&action=poolworkers">Pool Workers</a></li>
      <li class="icon-pencil"><a href="<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=admin&action=templates">Templates</a></li>
    </ul>
    <?php }?>
    <h3>Statistics</h3>
    <ul class="toggle">
     <?php echo check_acl_access(array('icon'=>'icon-align-left','page'=>'statistics','action'=>'pool','name'=>'Pool','acl'=>$_smarty_tpl->tpl_vars['GLOBAL']->value['acl']['pool']['statistics'],'fallback'=>'page=statistics'),$_smarty_tpl);?>

     <?php echo check_acl_access(array('icon'=>'icon-th-large','page'=>'statistics','action'=>'blocks','name'=>'Blocks','acl'=>$_smarty_tpl->tpl_vars['GLOBAL']->value['acl']['block']['statistics']),$_smarty_tpl);?>

     <?php echo check_acl_access(array('icon'=>'icon-chart','page'=>'statistics','action'=>'round','name'=>'Round','acl'=>$_smarty_tpl->tpl_vars['GLOBAL']->value['acl']['round']['statistics']),$_smarty_tpl);?>

     <?php echo check_acl_access(array('icon'=>'icon-search','page'=>'statistics','action'=>'blockfinder','name'=>'Blockfinder','acl'=>$_smarty_tpl->tpl_vars['GLOBAL']->value['acl']['blockfinder']['statistics']),$_smarty_tpl);?>

     <?php echo check_acl_access(array('icon'=>'icon-bell','page'=>'statistics','action'=>'uptime','name'=>'Uptime','acl'=>$_smarty_tpl->tpl_vars['GLOBAL']->value['acl']['uptime']['statistics']),$_smarty_tpl);?>

     <?php echo check_acl_access(array('icon'=>'icon-chart','page'=>'statistics','action'=>'graphs','name'=>'Graphs','acl'=>$_smarty_tpl->tpl_vars['GLOBAL']->value['acl']['graphs']['statistics']),$_smarty_tpl);?>

    </ul>
    <h3>Help</h3>
    <ul class="toggle">
      <li class="icon-desktop"><a href="<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=gettingstarted">Getting Started</a></li>
      <?php echo check_acl_access(array('icon'=>'icon-doc','page'=>'about','action'=>'pool','name'=>'About','acl'=>$_smarty_tpl->tpl_vars['GLOBAL']->value['acl']['about']['page']),$_smarty_tpl);?>

      <?php echo check_acl_access(array('icon'=>'icon-money','page'=>'about','action'=>'donors','name'=>'Donors','acl'=>$_smarty_tpl->tpl_vars['GLOBAL']->value['acl']['donors']['page']),$_smarty_tpl);?>

      <?php echo check_acl_access(array('icon'=>'icon-megaphone','page'=>'about','action'=>'chat','name'=>'Web Chat','acl'=>$_smarty_tpl->tpl_vars['GLOBAL']->value['acl']['chat']['page']),$_smarty_tpl);?>

    </ul>
    <h3>Other</h3>
    <ul class="toggle">
      <?php if ((($tmp = @$_SESSION['AUTHENTICATED'])===null||$tmp==='' ? "0" : $tmp)==1) {?>
      <li class="icon-off"><a href="<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=logout">Logout</a></li>
      <?php } else { ?>
      <li class="icon-login"><a href="<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=login">Login</a></li>
      <li class="icon-pencil"><a href="<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=register">Sign Up</a></li>
      <?php }?>
      <?php echo check_acl_access(array('icon'=>'icon-mail','page'=>'contactform','action'=>'','name'=>'Contact','acl'=>$_smarty_tpl->tpl_vars['GLOBAL']->value['acl']['contactform']),$_smarty_tpl);?>

      <li class="icon-doc"><a href="<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=tac">Terms and Conditions</a></li>
    </ul>
    <ul>
      <hr/>
    </ul>
    <?php if ((($tmp = @$_SESSION['AUTHENTICATED'])===null||$tmp==='' ? "0" : $tmp)==1) {?>
     <br />
    <?php } else { ?>
    <ul>
     <center>
      <div style="display: inline-block;">
      <i><u><b><font size="2">LIVE STATS</font></b></u></i>
      <div id="mr" style="width:180px; height:120px;"></div>
      <div id="hr" style="width:180px; height:120px;"></div>
      </div>
     </center>
    </ul>
    <hr/>
    <?php if (!$_smarty_tpl->tpl_vars['GLOBAL']->value['website']['api']['disabled']&&!$_smarty_tpl->tpl_vars['GLOBAL']->value['config']['disable_navbar']&&!$_smarty_tpl->tpl_vars['GLOBAL']->value['config']['disable_navbar_api']) {?>
      <?php echo $_smarty_tpl->getSubTemplate ("global/navjs_api.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <?php } else { ?>
      <?php echo $_smarty_tpl->getSubTemplate ("global/navjs_static.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <?php }?>
    <?php }?>
<?php }} ?>
