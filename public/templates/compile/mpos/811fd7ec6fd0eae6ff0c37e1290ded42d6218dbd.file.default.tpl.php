<?php /* Smarty version Smarty-3.1.16, created on 2014-03-13 19:56:58
         compiled from "/home/wwwroot/pool.rambocoin.com/public/templates/mpos/admin/dashboard/default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:128652017753219d0a1c5a29-26113812%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '811fd7ec6fd0eae6ff0c37e1290ded42d6218dbd' => 
    array (
      0 => '/home/wwwroot/pool.rambocoin.com/public/templates/mpos/admin/dashboard/default.tpl',
      1 => 1394709723,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '128652017753219d0a1c5a29-26113812',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'GLOBAL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_53219d0a1f3867_61756074',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53219d0a1f3867_61756074')) {function content_53219d0a1f3867_61756074($_smarty_tpl) {?>
<table width="100%">
  <tr>
    <td>
      <?php echo $_smarty_tpl->getSubTemplate ("admin/dashboard/mpos.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    </td>
  </tr>
</table>
<table width="100%">
  <tr>
    <td>
      <?php echo $_smarty_tpl->getSubTemplate ("admin/dashboard/user.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    </td>
  </tr>
</table>
<table width="100%">
  <tr>
    <td>
      <?php echo $_smarty_tpl->getSubTemplate ("admin/dashboard/registrations.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

      <?php if ((($tmp = @$_smarty_tpl->tpl_vars['GLOBAL']->value['config']['disable_invitations'])===null||$tmp==='' ? "0" : $tmp)==0) {?>
      <?php echo $_smarty_tpl->getSubTemplate ("admin/dashboard/invitation.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

      <?php }?>
    </td>
  </tr>
</table>

<?php }} ?>
