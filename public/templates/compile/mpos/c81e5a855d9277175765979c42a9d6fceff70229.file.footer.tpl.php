<?php /* Smarty version Smarty-3.1.16, created on 2014-03-13 19:37:33
         compiled from "/home/wwwroot/pool.rambocoin.com/public/templates/mpos/global/footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10388767845321987d567a35-54895578%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c81e5a855d9277175765979c42a9d6fceff70229' => 
    array (
      0 => '/home/wwwroot/pool.rambocoin.com/public/templates/mpos/global/footer.tpl',
      1 => 1394709723,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10388767845321987d567a35-54895578',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'DEBUG' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5321987d575e82_64607664',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5321987d575e82_64607664')) {function content_5321987d575e82_64607664($_smarty_tpl) {?>    <p><strong>MPOS</strong> by TheSerapher, available on <a href="https://github.com/MPOS/php-mpos">GitHub</a></p>
    <p>Please <strong>Donate</strong> to TheSerapher LTC: Lge95QR2frp9y1wJufjUPCycVsg5gLJPW8</p>
    <p><strong>Copyright &copy; 2013 Sebastian Grewe</strong>, Theme by <a href="http://www.medialoot.com">MediaLoot</a></p>
    <?php if ($_smarty_tpl->tpl_vars['DEBUG']->value>0) {?>
    <div id="debug">
      <?php echo $_smarty_tpl->getSubTemplate ("system/debugger.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    </div>
    <?php }?>
<?php }} ?>
